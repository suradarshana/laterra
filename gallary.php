<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>ROO MANSALA</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
</head>

<body id="top">
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo delay-03s animated wow zoomIn"><a href="#"><img src="img/logo.png" alt="logo"></a></div>
      <div class="container bagtr delay-03s animated wow fadeInLeft">
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"

                                    data-target="#main-nav"><span class="sr-only">Toggle navigation</span> <span

                                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              <li><a href="http://www.roomansala.com/" class="scroll-link">Home</a></li>
              <li><a href="http://www.roomansala.com/#book" class="scroll-link">About Us</a></li>
              <li><a href="http://www.roomansala.com/accommadation.php" class="scroll-link">Accommodation</a></li>
              <li><a href="http://www.roomansala.com/#dining" class="scroll-link">Dining</a></li>
              <li><a href="http://www.roomansala.com/#explore" class="scroll-link">Explore</a></li>
              <li class="active"><a href="gallary.php" class="scroll-link">Gallery</a></li>
              <li><a href="http://www.roomansala.com/#Policy" class="scroll-link">Policy</a></li>
              <li><a href="http://www.roomansala.com/#contact" class="scroll-link">Contact Us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<section class="gallary" id="gallary">
  <div id="mycarousel3" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img  width="100%" src="img/gs (1).jpg" alt="roo mansala"> </div>
      <div class="item"> <img src="img/gs (2).jpg" width="100%" alt="roo mansala"> </div>
      
    <!-- <div class="item"> <img src="img/gs (3).jpg" width="100%" alt="roo mansala"> </div> -->
      
    </div>
  </div>
  <script>

	$(document).ready(function(){

$('#mycarousel3').carousel({

    interval: 2000

});



});



</script>
  <div class="container dnWaterfall"> 
    <script type="text/javascript">

  //credits James Padolsey http://james.padolsey.com/

var qualifyURL = function (url) {

    var img = document.createElement('img');

    img.src = url; // set string url

    url = img.src; // get qualified url

    img.src = null; // no server request

    return url;

};



(function ($, window, document, undefined) {



    $.fn.visible = function (partial) {



        if (!$(this).offset())

            return true;



        var $t = $(this),

            $w = $(window),

            viewTop = $w.scrollTop(),

            viewBottom = viewTop + $w.height(),

            _top = $t.offset().top,

            _bottom = _top + $t.height(),

            compareTop = partial === true ? _bottom : _top,

            compareBottom = partial === true ? _top : _bottom;



        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));



    };



    var pluginName = "finalTilesGallery",


        defaults = {

            layout: 'final', // final | columns

            columns: [

                [4000, 5],

                [1024, 4],

                [800, 3],

                [480, 2],

                [320, 1]

            ],

            rowHeight: 200,

            margin: 10,

            minTileWidth: 200,

            ignoreImageAttributes: true,

            imageSizeFactor: [

                [4000, .9],

                [1024, .8],

                [800, .7],

                [600, .6],

                [480, .5],

                [320, .3]

            ],

            gridSize: 10,

            allowEnlargement: true,

            autoLoadURL: null,

            autoLoadOffset: 50,

            onComplete: function () {},

            onUpdate: function () {},

            debug: false

        };



    // The actual plugin constructor

    function Plugin(element, options) {

        

        /*! properties */

        this.element = element;

        this.$element = $(element);

        this.settings = $.extend({}, defaults, options);        

        this._columnSize = 0;

        this._defaults = defaults;

        this._name = pluginName;

        this.tiles = [];

        this._loadedImages = 0;

        this._rows = [[]];

        this._currentRow = 0;

        this._currentRowTile = 0;

        this.edges = [];

        this.imagesData = {};

        this.currentWidth = 0;

        this.currentImageSizeFactor = 1;

        this.currentColumnsCount = 0;

        this.ajaxComplete = false;

        this.isLoading = false;

        this.currentPage = 1;

        this.init();

    }



    // Avoid Plugin.prototype conflicts

    $.extend(Plugin.prototype, {

        print : function (text) {

            if(this.settings.debug)

                console.log(text);

        },

        setCurrentImageSizeFactor : function () {

            this.currentImageSizeFactor = 1;

            var ww = $(window).width();

            for (var i = 0; i < this.settings.imageSizeFactor.length; i++) {

                if (this.settings.imageSizeFactor[i][0] >= ww)

                    this.currentImageSizeFactor = this.settings.imageSizeFactor[i][1];

            }

            if(!this.currentImageSizeFactor)

                this.currentImageSizeFactor = 1;

            this.print("current image size factor: " + this.currentImageSizeFactor + " (" + ww + ")");

        },        

        setCurrentColumnSize: function () {

            

            var ww = $(window).width();

            for (var i = 0; i < this.settings.columns.length; i++) {

                if (this.settings.columns[i][0] >= ww)

                    this.currentColumnsCount = this.settings.columns[i][1];

            }

            

            this._columnSize = Math.floor((this.currentWidth - (this.settings.margin * (this.currentColumnsCount - 1))) / this.currentColumnsCount);

            

            console.log(this.currentWidth, this._columnSize, this.currentColumnsCount);

            this.print(this.currentWidth, this._columnSize);

        },

        init: function () {

            var instance = this;

            

            instance.currentWidth = instance.$element.width();



            if(instance.$element.filter(":visible").length == 0) {

                instance.print('cannot initialize the gallery, container is hidden. Retrying in 500ms.');

                setTimeout(function () {

                    instance.init();

                }, 500);

                return;

            }

            

            this.$element.find(".ftg-items").css({

                position: 'relative'

            });

            this.tiles = this.$element.find('.tile').not('.ftg-hidden');



            this.tiles.css({

                transition: 'all .3s'

            });

            this.currentWidth = this.$element.width();

            this.print("this.currentWidth: " + this.currentWidth);



            if(this.settings.layout != 'columns' && this.settings.layout != 'rows' && 

                this.settings.layout != 'final') {

                    console.log("WARNING: unknown layout, falling back to 'final'.")

                }

                

            if(this.settings.layout == 'columns') {

                this.setCurrentColumnSize();

            }



            var _resizeTo = 0;

            this.setCurrentImageSizeFactor();

            $(window).resize(function () {

                _resizeTo = setTimeout(function () {

                    if (instance.currentWidth != instance.$element.width()) {

                        clearTimeout(_resizeTo);

                        instance.print("this.currentWidth", this.currentWidth);

                        instance.currentWidth = instance.$element.width();

                        instance.setCurrentColumnSize();

                        instance.setCurrentImageSizeFactor();

                        instance.refresh();

                    }

                }, 500);

            });



            instance.isLoading = true;

            if(instance.settings.autoLoadURL) {

                $(window).scroll(function () {

                    if(!instance.ajaxComplete && !instance.isLoading) {

                        if ($(window).scrollTop() >= $(document).height() - $(window).height() - instance.settings.autoLoadOffset) {

                            instance.isLoading = true;

                            $.get(instance.settings.autoLoadURL, { page: ++instance.currentPage }, function (html) {

                                if ($.trim(html).length == 0) {

                                    instance.ajaxComplete = true;

                                } else {

                                    instance.$element.find(".ftg-items").append(html);

                                    instance.tiles = instance.$element.find('.tile')

                                    instance.loadImage();

                                }

                            });

                        }

                    }

                });

            }



            this.setupFilters();

            this.edges.push({ left: 0, top: 0, width: this.currentWidth, index: 0 });

            this.loadImage();

        },

        addElements: function (html) {

            this.$element.find(".ftg-items").append(html);

            this.tiles = this.$element.find('.tile')

            this.loadImage();

        },

        removeAt: function(index) {

            this.tiles[index].remove();

            this.refresh();

        },

        clear: function() {

            this.$element.find(".ftg-items").height(0).empty();

            this.refresh();

        },

        setupFilters: function() {

            var instance = this;

            instance.$element.find(".ftg-filters a").click(function(e) {

                e.preventDefault();



                instance.$element.find(".ftg-filters a").removeClass("selected");

                $(this).addClass("selected");



                var ft = $(this).attr("href").replace("#ftg-set-", "");

                if(ft == "ftgall") {

                    instance.$element.find(".tile").removeClass("ftg-hidden");

                } else {



                    instance.$element

                                .find(".tile")

                                .not(".ftg-set-" + ft)

                                .addClass("ftg-hidden")

                                .end()

                                .filter(".ftg-set-" + ft)

                                .removeClass("ftg-hidden");

                }

                instance.refresh();

            });

        },

        printEdges: function () {

            this.$element.find(".edge").remove();

            for (i = 0; i < this.edges.length; i++) {

                var $e = $("<div class='edge' />");

                $e.append("top: " + this.edges[i].top + "<br>");

                $e.append("left: " + this.edges[i].left + "<br>");

                $e.append("width: " + this.edges[i].width + "<br>");

                $e.css({

                    left: this.edges[i].left,

                    top: this.edges[i].top,

                    marginTop: -25,

                    marginLeft: 20

                });

                this.$element.append($e);

            }

        },

        printEdge: function (edge) {

            var $e = $("<div class='edge enlarged-"+edge.enlarged+"' />");

            $e.append("<b>"+ edge.index + " " + edge.case + "</b><br>");

            $e.append("t: " + Math.round(edge.top) + " l: " + edge.left + "<br>");

            $e.append("width: " + edge.width + "<br>");

            $e.append("idx: " + edge.tileIndex + "<br>");



            $e.css({

                left: edge.left,

                top: edge.top,

                marginTop: -25,

                marginLeft: 20

            });

            this.$element.append($e);

        },

        refresh: function () {

            this.$element.find(".edge").remove();

            this.edges = [

                { left: 0, top: 0, width: this.currentWidth }

            ];

            this.tiles.removeClass("ftg-loaded ftg-enlarged");

            this.tiles = this.$element.find('.tile').not('.ftg-hidden');

            this._loadedImages = 0;

            this.loadImage();

        },

                

        getAvailableRowSpace: function () {         

            return this.currentWidth - this.getBusyRowSpace();

        },

        

        getBusyRowSpace: function () {

            var space = 0;

            for(var i=0; i<this._rows[this._currentRow].length; i++) {

                space += this._rows[this._currentRow][i].data('width') + 

                            this.settings.margin;

            }

            return space;

        },

        

        addImageToRow: function($img) {

            console.log(this._rows);

            console.log(this._currentRow);

            this._rows[this._currentRow].push($img);

        },

        

        fitImagesInRow: function () {

            var left = this.getAvailableRowSpace() - this.settings.margin;

            var ratio = (this.currentWidth - (this._rows[this._currentRow].length - 1) * this.settings.margin) / this.getBusyRowSpace();

            

            for(var i=0; i<this._rows[this._currentRow].length; i++) {

                $item = this._rows[this._currentRow][i];

                var w = $item.data('width');

                var h = $item.data('height');

                

                $item.data('width', w * ratio);

                this.add(this._currentRowTile++);

            }

        },

        

        nextTile : function (add) {

            var instance = this;

            if(add)

                instance.add(instance._loadedImages);



            if (++instance._loadedImages < instance.tiles.length) {

                instance.loadImage();

            } else {

                var height = instance.lowerEdgeTop();

                instance.print("lower edge top: " + height);

                instance.$element.find(".ftg-items").height(height);

                instance.isLoading = false;

                instance.settings.onComplete();

            }

        },

        

        /*! loadImage */

        loadImage: function () {

            var instance = this;            

            var $tile = this.tiles.eq(this._loadedImages);



            if($tile.children("iframe").length)

                $tile.children("iframe").addClass("item");



            var $item = $tile.find('.item');            




            switch ($item.get(0).tagName.toLowerCase()) {

                case "img":

                    var img = new Image();

                    img.onload = function () {

                        var iFactor = instance.currentImageSizeFactor;

                        if ($tile.data("ftg-ignore-size-factor"))

                            iFactor = 1;



                        var size = {};

                        var addImage = true;

                        if(instance.settings.layout == "final") {

                            var w = $item.attr("width") ? parseInt($item.attr("width")) : img.width;

                            var h = $item.attr("height") ? parseInt($item.attr("height")) : img.height;



                            size.width = w * iFactor;

                            size.height = h * iFactor;

                        }

                        if(instance.settings.layout == "columns") {

                            size.width = instance._columnSize;

                            size.height = (size.width * img.height) / img.width;

                        }

                        //WIP rows layout not yet available

                        if(instance.settings.layout == "rows") {

                            size.width = (instance.settings.rowHeight * img.width) / img.height;

                            size.height = instance.settings.rowHeight;

                            addImage = false;

                            

                            if(instance.getAvailableRowSpace() > size.width) {

                                instance.addImageToRow($item);

                            } else {                                

                                //not enough available space, make a new row

                                //and print the current one

                                instance.fitImagesInRow();

                                instance._currentRow++;

                                instance._rows.push([]);

                                instance.addImageToRow($item);                          

                            }

                        }

                        

                        $item.attr("src", this.src);

                        

                        instance.imagesData["tile" + instance._loadedImages] = {

                            width: size.width,

                            height: size.height,

                            owidth: img.width,

                            oheight: img.height,

                            src: img.src

                        };

                        

                        instance.nextTile(addImage);

                    }

                    img.onerror = function() {

                        instance.print("error loading image: " + img.src);

                        instance.nextTile(true);

                    }

                    img.src = $item.data("src");

                    $tile.data("ftg-type", "image");

                    break;

                case "iframe":

                    instance.imagesData["tile" + instance._loadedImages] = {

                        width: parseInt($item.attr("width")),

                        height: parseInt($item.attr("height")),

                        owidth: parseInt($item.attr("width")),

                        oheight: parseInt($item.attr("height"))

                    };

                    $tile.data("ftg-type", "iframe");

                    instance.nextTile(true);

                    break;

                default:

                    instance.imagesData["tile" + instance._loadedImages] = {

                        width: parseInt($item.data("width")),

                        height: parseInt($item.data("height")),

                        owidth: parseInt($item.data("width")),

                        oheight: parseInt($item.data("height"))

                    };


                    instance.nextTile(true);

                    break;

            }

        },

        higherEdge: function () {

            var left = 0;

            var _top = 100000;

            var _left = 0;

            var found = 0;



            for (var i = 0; i < this.edges.length; i++) {

                if (this.edges[i].top < _top) {

                    found = i;

                    _top = this.edges[i].top;

                }

            }



            return this.edges[found];

        },

        lowerEdgeTop: function () {

            var min = 0;

            for (var i = 0; i < this.edges.length; i++) {

                if (this.edges[i].top > min) {

                    min = this.edges[i].top;

                }

            }



            return min;

        },

        alignEdge: function (edge, index) {

            //look left

            for (var i = 0; i < this.edges.length; i++) {

                if (this.edges[i].left + this.edges[i].width + this.settings.margin == edge.left) {

                    this.print("found edge on left", i);

                    //adjust edge

                    if (edge.top == this.edges[i].top) {

                        this.print("edges can be aligned [1]");

                        return { side: 'left', edge: this.edges[i] };

                    }

                }

            }

            //TODO look right

            for (var i = 0; i < this.edges.length; i++) {

                if (this.edges[i].left - this.settings.margin == edge.left + edge.width) {

                    this.print("found edge on right", i);

                    //adjust edge

                    if (edge.top == this.edges[i].top) {

                        this.print("edges can be aligned [2]");

                        return { side: 'right', edge: this.edges[i] };

                    }

                }

            }



            return null;

        },

        removeEdge: function (edge) {

            var tmp = [];

            for (var i = 0; i < this.edges.length; i++) {

                if (this.edges[i] != edge)

                    tmp.push(this.edges[i]);

            }

            this.edges = tmp;

        },

        add: function (tileIndex) {

            var $t = this.tiles.eq(tileIndex);



            var $item = $t.find('.item');

            var key = "tile" + tileIndex;

            var w = this.imagesData[key].width;

            var h = this.imagesData[key].height;





            var hEdge = this.higherEdge();

            this.print(hEdge);

            hEdge.tileIndex = tileIndex;



            this.print(tileIndex + " [" + $t.data("ftg-type") + "] (" + w + "x" + h + ")");



            if (hEdge.top > 0) {

                hEdge.top += this.settings.margin;

            }



            $t.css({

                left: hEdge.left,

                top: hEdge.top,

                position: 'absolute'

            });



            hEdge.enlarged = false;



            //is the tile wider than the current edge?

            if (hEdge.width < w + this.settings.margin) {

                hEdge.case = 'Te';

                this.print('Te', hEdge.width);

                //edge smaller than the image

                var w2 = hEdge.width;

                var h2 = (h / w) * w2;



                if (w2 + hEdge.left - this.settings.margin == this.currentWidth) {

                    this.print("END");

                    w2 -= this.settings.margin;

                    h2 = (h / w) * w2;

                }



                w = w2;

                h = h2;

            } else if (hEdge.width > w) {

                this.print('tE');

                //break the edge

                //is the new edge wider than minTileWidth?

                if (this.settings.layout == 'columns' || hEdge.width - w >= this.settings.minTileWidth) {

                    hEdge.case = 'tE';

                    this.print('tE1', hEdge.width, hEdge.left, this.currentWidth);



                    var newEdge = {

                        left: hEdge.left + w + this.settings.margin,

                        top: hEdge.top - (hEdge.top > 0 ? this.settings.margin : 0),

                        width: hEdge.width - w - this.settings.margin,

                        marginLeft: true,

                        case: 'NEW',

                        index: hEdge.index + 1

                    }



                    //console.log("newEdge", newEdge);

                    this.edges.push(newEdge);

                    //this.printEdge(newEdge);

                } else {

                    hEdge.case = 'tE2';

                    this.print('tE2');

                    //not enough space for the next tile

                    //enlargement

                    this.print("enlargement", hEdge.width, hEdge.left, this.currentWidth);

                    var m = hEdge.left + hEdge.width == this.currentWidth ?  0 : this.settings.margin;

                    //var w2 = hEdge.width - m;

                    var w2 = hEdge.width;

                    var h2 = this.settings.allowEnlargement && this.settings.layout != 'rows' ? (h / w) * w2 : h;



                    if (this.settings.allowEnlargement) {

                        $t.addClass("ftg-enlarged");

                        hEdge.enlarged = true;

                    } else {

                        if(this.settings.layout != 'rows')

                            $t.find(".item").css({

                                width: w,

                                height: h

                            }); 

                    }



                    w = w2;

                    h = h2;

                }

            }



            hEdge.top += h;

            if(this.settings.gridSize) {

                var diff = hEdge.top % this.settings.gridSize;

                hEdge.top -= diff;

                h -= diff;

            }



            hEdge.left = hEdge.left;

            hEdge.width = w;

            //hEdge.index = tileIndex + 1;



            var printEdge = true;



            var aligned = this.alignEdge(hEdge, tileIndex);

            if (aligned) {

                if(aligned.side == 'left') {

                    this.removeEdge(hEdge);

                    aligned.edge.width += w + this.settings.margin;

                    h = h - (hEdge.top - aligned.edge.top);

                    hEdge.top -= h;

                    printEdge = false;

                } else {

                    this.removeEdge(aligned.edge);

                    hEdge.width += this.settings.margin + aligned.edge.width;

                    printEdge = false;

                }



                $t.height(h);

            }



            if (this.$element.find(".ftg-items").height() < hEdge.top)

                this.$element.find(".ftg-items").height(hEdge.top);



            if(this.settings.debug && printEdge) {

                this.printEdge(hEdge);

            }



            if ($t.data("ftg-type") == "iframe") {

                $t.find("iframe").height(h);

            }



            this.print(w + "x" + h);

            this.print("----");



            $t.css({

                width: w,

                height: h

            });



            var ratio = w / this.imagesData[key].width;



            var hdiff = (this.imagesData[key].height * ratio) - h;



            $item.css({ height: "auto" });

            if(hdiff > 0) {

                $item.css({

                    top: 0 - (hdiff / 2)                    

                });

            }

            $t.addClass("ftg-loaded");

        }

    });



    $.fn[pluginName] = function (options) {

        this.each(function () {

            if (!$.data(this, pluginName)) {

                $.data(this, pluginName, new Plugin(this, options));

            }

        });



        // chain jQuery functions

        return this;

    };



    $(function () {

        $(".ftg-social a").click(function(e) {



            e.preventDefault();

            var social = $(this).data("social");

            var $tile = $(this).parents(".tile").first();

            var image = $tile.data("big");

            if(! image)

                image = $tile.find(".item").attr("src");



            var text = $.trim($tile.find(".caption").text());

            if(! text.length)

                text = document.title;



            if(social == "facebook") {

                var url = "https://www.facebook.com/dialog/feed?app_id=1447224948871585&"+

                            "link="+encodeURIComponent(location.href)+"&" +

                            "display=popup&"+

                            "name="+encodeURIComponent(document.title)+"&"+

                            "caption=&"+

                            "description="+encodeURIComponent(text)+"&"+

                            "picture="+encodeURIComponent(qualifyURL(image))+"&"+

                            "ref=share&"+

                            "actions={%22name%22:%22View%20the%20gallery%22,%20%22link%22:%22"+encodeURIComponent(location.href)+"%22}&"+

                            "redirect_uri=http://final-tiles-gallery.com/facebook_redirect.html";



                var w = window.open(url, "ftgw", "location=1,status=1,scrollbars=1,width=600,height=400");

                w.moveTo((screen.width / 2) - (300), (screen.height / 2) - (200));

            }



            if(social == "twitter") {

                var w = window.open("https://twitter.com/intent/tweet?url=" + encodeURI(location.href.split('#')[0]) + "&text=" + encodeURI(text), "ftgw", "location=1,status=1,scrollbars=1,width=600,height=400");

                w.moveTo((screen.width / 2) - (300), (screen.height / 2) - (200));

            }



            if(social == "pinterest") {

                var url = "http://pinterest.com/pin/create/button/?url=" + encodeURIComponent(location.href) + "&description=" + encodeURI(text);



                url += ("&media=" + encodeURIComponent(qualifyURL(image)));



                var w = window.open(url, "ftgw", "location=1,status=1,scrollbars=1,width=600,height=400");

                w.moveTo((screen.width / 2) - (300), (screen.height / 2) - (200));

            }



            if(social == "google-plus") {

                var url = "https://plus.google.com/share?url=" + encodeURI(location.href);



                var w = window.open(url, "ftgw", "location=1,status=1,scrollbars=1,width=600,height=400");

                w.moveTo((screen.width / 2) - (300), (screen.height / 2) - (200));

            }

        });

    });

})(jQuery, window, document);

  </script> 
    
    <!-- Include icons stylesheet (only if you need it) -->
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <h2>Gallery</h2>
    
    <!-- All CSS classes in this snippet are mandatory! -->
    
    <div class="final-tiles-gallery effect-zoom effect-speed-medium caption-top"> 
      
      <!--<div class="ftg-filters">

    <a href="#ftg-set-ftgall">All</a>

    <a href="#ftg-set-filter-1">The Resort</a>

    <a href="#ftg-set-filter-2">Accommodation</a>

    <a href="#ftg-set-filter-3">Cuisine</a>

    <a href="#ftg-set-filter-4">Public Spaces</a>

   

  </div>-->
      
      <div class="ftg-items">
        <div class="tile ftg-set-filter-4 ftg-set-filter-3"> <a class="tile-inner" href="img/ss (5).jpg" data-lightbox="gal" data-title=""> <img class="item" src="img/ss (5).jpg" width="700px" height="327px" data-src="img/ss (5).jpg" /></a>
          <div class="caption-block">
            <div class="text-wrapper"> <span class="subtitle social_icon"> <a href="#" data-social="facebook" class="ftg-facebook"><i class="fa fa-facebook"></i></a><a href="#" data-social="twitter" class="ftg-twitter"><i class="fa fa-twitter"></i></a><a href="#" data-social="instagram" class="ftg-instagram"><i class="fa fa-instagram"></i></a> </span> </div>
          </div>
        </div>
        <div class="tile ftg-set-filter-1 ftg-set-filter-2"> <a class="tile-inner" href="gallary/new/g (2).jpg" data-lightbox="gal" data-title=""> <img class="item" src="gallary/new/g (2).jpg" width="300px" height="225px" data-src="gallary/new/g (2).jpg" /></a>
          <div class="caption-block">
            <div class="text-wrapper"> <span class="subtitle social_icon"> <a href="#" data-social="facebook" class="ftg-facebook"><i class="fa fa-facebook"></i></a><a href="#" data-social="twitter" class="ftg-twitter"><i class="fa fa-twitter"></i></a><a href="#" data-social="instagram" class="ftg-instagram"><i class="fa fa-instagram"></i></a> </span> </div>
          </div>
        </div>
        <div class="tile ftg-set-filter-1 ftg-set-filter-3"> <a class="tile-inner" href="gallary/new/g (3).jpg" data-lightbox="gal" data-title=""> <img class="item" src="gallary/new/g (3).jpg"  data-src="gallary/new/g (3).jpg" /></a>
          <div class="caption-block">
            <div class="text-wrapper"> <span class="subtitle social_icon"> <a href="#" data-social="facebook" class="ftg-facebook"><i class="fa fa-facebook"></i></a><a href="#" data-social="twitter" class="ftg-twitter"><i class="fa fa-twitter"></i></a><a href="#" data-social="instagram" class="ftg-instagram"><i class="fa fa-instagram"></i></a> </span> </div>
          </div>
        </div>
        <div class="tile ftg-set-filter-2 ftg-set-filter-4"> <a class="tile-inner" href="gallary/new/g (4).jpg" data-lightbox="gal" data-title=""> <img class="item" src="gallary/new/g (4).jpg" width="800px" height="373px" data-src="gallary/new/g (4).jpg" /></a>
          <div class="caption-block">
            <div class="text-wrapper"> <span class="subtitle social_icon"> <a href="#" data-social="facebook" class="ftg-facebook"><i class="fa fa-facebook"></i></a><a href="#" data-social="twitter" class="ftg-twitter"><i class="fa fa-twitter"></i></a><a href="#" data-social="instagram" class="ftg-instagram"><i class="fa fa-instagram"></i></a> </span> </div>
          </div>
        </div>
        <div class="tile ftg-set-filter-1 ftg-set-filter-2"> <a class="tile-inner" href="gallary/new/g (5).jpg" data-lightbox="gal" data-title=""> <img class="item" src="gallary/new/g (5).jpg" width="960px" height="448px" data-src="gallary/new/g (5).jpg" /></a>
          <div class="caption-block">
            <div class="text-wrapper"> <span class="subtitle social_icon"> <a href="#" data-social="facebook" class="ftg-facebook"><i class="fa fa-facebook"></i></a><a href="#" data-social="twitter" class="ftg-twitter"><i class="fa fa-twitter"></i></a><a href="#" data-social="instagram" class="ftg-instagram"><i class="fa fa-instagram"></i></a> </span> </div>
          </div>
        </div>
        <div class="tile ftg-set-filter-1 ftg-set-filter-4"> <a class="tile-inner" href="gallary/new/g (6).jpg" data-lightbox="gal" data-title=""> <img class="item" src="gallary/new/g (6).jpg" width="800px" height="373px" data-src="gallary/new/g (6).jpg" /></a>
          <div class="caption-block">
            <div class="text-wrapper"> <span class="subtitle social_icon"> <a href="#" data-social="facebook" class="ftg-facebook"><i class="fa fa-facebook"></i></a><a href="#" data-social="twitter" class="ftg-twitter"><i class="fa fa-twitter"></i></a><a href="#" data-social="instagram" class="ftg-instagram"><i class="fa fa-instagram"></i></a> </span> </div>
          </div>
        </div>
        <div class="tile ftg-set-filter-1 ftg-set-filter-4"> <a class="tile-inner" href="gallary/new/g (7).jpg" data-lightbox="gal" data-title=""> <img class="item" src="gallary/new/g (7).jpg" width="600px" height="280px" data-src="gallary/new/g (7).jpg" /></a>
          <div class="caption-block">
            <div class="text-wrapper"> <span class="subtitle social_icon"> <a href="#" data-social="facebook" class="ftg-facebook"><i class="fa fa-facebook"></i></a><a href="#" data-social="twitter" class="ftg-twitter"><i class="fa fa-twitter"></i></a><a href="#" data-social="instagram" class="ftg-instagram"><i class="fa fa-instagram"></i></a> </span> </div>
          </div>
        </div>
        
        <!--<div class="tile ftg-set-filter-1 ftg-set-filter-4"> <a class="tile-inner" href="gallary/new/g (8).jpg" data-lightbox="gal" data-title=""> <img class="item" src="gallary/new/g (8).jpg" width="960px" height="288px" data-src="gallary/new/g (8).jpg" /></a>
          <div class="caption-block">
            <div class="text-wrapper"> <span class="subtitle social_icon"> <a href="#" data-social="facebook" class="ftg-facebook"><i class="fa fa-facebook"></i></a><a href="#" data-social="twitter" class="ftg-twitter"><i class="fa fa-twitter"></i></a><a href="#" data-social="instagram" class="ftg-instagram"><i class="fa fa-instagram"></i></a> </span> </div>
          </div>
        </div>-->
      </div>
    </div>
    <script type="text/javascript" charset="utf-8">

$(document).ready(function() {

    $('.final-tiles-gallery').finalTilesGallery({

	    margin: 20,

      layout: 'final'

    }

    );

});

</script> 
    
    <!--  

   <img class="waterfall-img" lazy-src="gallary/g (1).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (39).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (2).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (2).jpg">

      <img class="waterfall-img" lazy-src="gallary/g (1).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (6).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (2).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (2).jpg">

      <img class="waterfall-img" lazy-src="gallary/g (1).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (16).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (2).jpg">

    <img class="waterfall-img" lazy-src="gallary/g (2).jpg">--> 
    
  </div>
</section>
<br>

<style> 
.cta-background {  
    background: url('http://www.roomansala.com/img/dinn.jpg');
	background-size: cover;
	padding: 150px 0;
	background-attachment: fixed;
	position: relative;
	background-repeat:no-repeat;
}
</style>
    <div class="cta-background parallax-background" data-stellar-background-ratio="0.3" style="background-position: 50% 47.015px;">
    <div class="container ">
        <div class="row ">
            <div class="col-sm-8 col-sm-offset-4 text-left  ">
                <p class="lead " style="font-size: 25px;text-align: justify; color:#fff;">
<!--                    <b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </b>
-->                </p>
            </div>
        </div>
    </div>
</div>
<section class="page_section contact" id="contact">
  <div class="contact_section">
    <div class="container">
      <h2>Contact us</h2>
      <div class="row">
        <div class="col-lg-4"> </div>
        <div class="col-lg-4"> </div>
        <div class="col-lg-4"> </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <div class="contact_details">
            <div class="addres"> <i class="fa fa-map-marker fa-2x"></i> <span> Thalkote, </span><span>Sigiriya Sri Lanka</span><span></span></div>
            <i class="fa fa-mobile fa-2x"></i> <span></span><br>
            <span>+94 664 200 102 </span><br>
            <span>+94 664 200 110</span><br>
            <span> +94 775 579 686</span> <i class="fa fa-envelope fa-lg"></i> <span style="margin-top: -22px;">info@roomansala.com</span><br>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeInLeft delay-06s map_c">
          <div class="contact_form">
            <form id="contactForm" method="post" action="contact.php" role="form">
              <div class="messages"></div>
              <div class="controls">
                <div class="form-group">
                  <label for="form_name">Your Name *</label>
                  <input id="name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <label for="form_email">Email *</label>
                  <input id="email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <label for="form_phone">Phone</label>
                  <input id="phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <label for="form_message">Message *</label>
                  <textarea id="message" name="message" class="form-control" placeholder="Message for me *" rows="4" required data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success btn-send" value="Send message">
                </div>
                <div class="form-group">
                  <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft delay-06s map_c">
          <div class="contact_details">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3084261374684!2d80.75215941477927!3d7.967043194261818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca11417c937d5%3A0x9568b17fdc8963f1!2sRoo+Mansala+Boutique+Villa!5e0!3m2!1sen!2slk!4v1522328709446" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Footer-->

<footer class="footer_wrapper" id="contact" style="position: relative">
  <div class="container"> </div>
  <div class="container">
    <div class="footer_bottom"><span>© 2018 All Right Reserved | Design By Roo Mansala</span></div>
  </div>
</footer>
<a href="#0" class="cd-top">Top</a> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script> 
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script type="text/javascript" src="js/modernizr.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>

	$(document).ready(function(){

		var date_input=$('input[name="date"]'); //our date input has the name "date"

		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";

		date_input.datepicker({

			format: 'mm/dd/yyyy',

			container: container,

			todayHighlight: true,

			autoclose: true,

		})

		

		$('#mycarousel').carousel({

    interval: 2000

});





$("#bookn").submit(function(event){

    // cancels the form submission

    event.preventDefault();

    submitbooking();

});



function submitbooking(){

    // Initiate Variables With Form Content

    var date = $("#date").val();

    var bemail = $("#bemail").val();

	 var roomcat = $("#roomcat").val();

    var adults = $("#adults").val();

 

    $.ajax({

        type: "POST",

        url: "bprocess.php",

        data: "date=" + date + "&bemail=" + bemail + "&roomcat=" + roomcat + "&adults=" + adults,

        success : function(text){

            if (text == "success"){

                formSuccess2();

            }

        }

    });

}

function formSuccess2(){

    $( "#msgSubmit2" ).removeClass( "hidden" );

}





















$("#contactForm").submit(function(event){

    // cancels the form submission

    event.preventDefault();

    submitForm();

});





function submitForm(){

    // Initiate Variables With Form Content

    var name = $("#name").val();

    var email = $("#email").val();

	 var phone = $("#phone").val();

    var message = $("#message").val();

 

    $.ajax({

        type: "POST",

        url: "process.php",

        data: "name=" + name + "&email=" + email + "&phone=" + phone + "&message=" + message,

        success : function(text){

            if (text == "success"){

                formSuccess();

            }

        }

    });

}

function formSuccess(){

    $( "#msgSubmit" ).removeClass( "hidden" );

}







	})

</script> 
<script type="text/javascript">



(function (root, factory) {

    if (typeof define === 'function' && define.amd) {

        // AMD. Register as an anonymous module.

        define(['jquery'], factory);

    } else if (typeof exports === 'object') {

        // Node. Does not work with strict CommonJS, but

        // only CommonJS-like environments that support module.exports,

        // like Node.

        module.exports = factory(require('jquery'));

    } else {

        // Browser globals (root is window)

        root.lightbox = factory(root.jQuery);

    }

}(this, function ($) {



  function Lightbox(options) {

    this.album = [];

    this.currentImageIndex = void 0;

    this.init();



    // options

    this.options = $.extend({}, this.constructor.defaults);

    this.option(options);

  }



  // Descriptions of all options available on the demo site:

  // http://lokeshdhakar.com/projects/lightbox2/index.html#options

  Lightbox.defaults = {

    albumLabel: 'Image %1 of %2',

    alwaysShowNavOnTouchDevices: false,

    fadeDuration: 600,

    fitImagesInViewport: true,

    imageFadeDuration: 600,

    // maxWidth: 800,

    // maxHeight: 600,

    positionFromTop: 50,

    resizeDuration: 700,

    showImageNumberLabel: true,

    wrapAround: false,

    disableScrolling: false,

    /*

    Sanitize Title

    If the caption data is trusted, for example you are hardcoding it in, then leave this to false.

    This will free you to add html tags, such as links, in the caption.



    If the caption data is user submitted or from some other untrusted source, then set this to true

    to prevent xss and other injection attacks.

     */

    sanitizeTitle: false

  };



  Lightbox.prototype.option = function(options) {

    $.extend(this.options, options);

  };



  Lightbox.prototype.imageCountLabel = function(currentImageNum, totalImages) {

    return this.options.albumLabel.replace(/%1/g, currentImageNum).replace(/%2/g, totalImages);

  };



  Lightbox.prototype.init = function() {

    var self = this;

    // Both enable and build methods require the body tag to be in the DOM.

    $(document).ready(function() {

      self.enable();

      self.build();

    });

  };



  // Loop through anchors and areamaps looking for either data-lightbox attributes or rel attributes

  // that contain 'lightbox'. When these are clicked, start lightbox.

  Lightbox.prototype.enable = function() {

    var self = this;

    $('body').on('click', 'a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]', function(event) {

      self.start($(event.currentTarget));

      return false;

    });

  };



  // Build html for the lightbox and the overlay.

  // Attach event handlers to the new DOM elements. click click click

  Lightbox.prototype.build = function() {

    if ($('#lightbox').length > 0) {

        return;

    }



    var self = this;

    $('<div id="lightboxOverlay" class="lightboxOverlay"></div><div id="lightbox" class="lightbox"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:img/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" /><div class="lb-nav"><a class="lb-prev" href="" ></a><a class="lb-next" href="" ></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>').appendTo($('body'));



    // Cache jQuery objects

    this.$lightbox       = $('#lightbox');

    this.$overlay        = $('#lightboxOverlay');

    this.$outerContainer = this.$lightbox.find('.lb-outerContainer');

    this.$container      = this.$lightbox.find('.lb-container');

    this.$image          = this.$lightbox.find('.lb-image');

    this.$nav            = this.$lightbox.find('.lb-nav');



    // Store css values for future lookup

    this.containerPadding = {

      top: parseInt(this.$container.css('padding-top'), 10),

      right: parseInt(this.$container.css('padding-right'), 10),

      bottom: parseInt(this.$container.css('padding-bottom'), 10),

      left: parseInt(this.$container.css('padding-left'), 10)

    };



    this.imageBorderWidth = {

      top: parseInt(this.$image.css('border-top-width'), 10),

      right: parseInt(this.$image.css('border-right-width'), 10),

      bottom: parseInt(this.$image.css('border-bottom-width'), 10),

      left: parseInt(this.$image.css('border-left-width'), 10)

    };



    // Attach event handlers to the newly minted DOM elements

    this.$overlay.hide().on('click', function() {

      self.end();

      return false;

    });



    this.$lightbox.hide().on('click', function(event) {

      if ($(event.target).attr('id') === 'lightbox') {

        self.end();

      }

      return false;

    });



    this.$outerContainer.on('click', function(event) {

      if ($(event.target).attr('id') === 'lightbox') {

        self.end();

      }

      return false;

    });



    this.$lightbox.find('.lb-prev').on('click', function() {

      if (self.currentImageIndex === 0) {

        self.changeImage(self.album.length - 1);

      } else {

        self.changeImage(self.currentImageIndex - 1);

      }

      return false;

    });



    this.$lightbox.find('.lb-next').on('click', function() {

      if (self.currentImageIndex === self.album.length - 1) {

        self.changeImage(0);

      } else {

        self.changeImage(self.currentImageIndex + 1);

      }

      return false;

    });



    /*

      Show context menu for image on right-click



      There is a div containing the navigation that spans the entire image and lives above of it. If

      you right-click, you are right clicking this div and not the image. This prevents users from

      saving the image or using other context menu actions with the image.



      To fix this, when we detect the right mouse button is pressed down, but not yet clicked, we

      set pointer-events to none on the nav div. This is so that the upcoming right-click event on

      the next mouseup will bubble down to the image. Once the right-click/contextmenu event occurs

      we set the pointer events back to auto for the nav div so it can capture hover and left-click

      events as usual.

     */

    this.$nav.on('mousedown', function(event) {

      if (event.which === 3) {

        self.$nav.css('pointer-events', 'none');



        self.$lightbox.one('contextmenu', function() {

          setTimeout(function() {

              this.$nav.css('pointer-events', 'auto');

          }.bind(self), 0);

        });

      }

    });





    this.$lightbox.find('.lb-loader, .lb-close').on('click', function() {

      self.end();

      return false;

    });

  };



  // Show overlay and lightbox. If the image is part of a set, add siblings to album array.

  Lightbox.prototype.start = function($link) {

    var self    = this;

    var $window = $(window);



    $window.on('resize', $.proxy(this.sizeOverlay, this));



    $('select, object, embed').css({

      visibility: 'hidden'

    });



    this.sizeOverlay();



    this.album = [];

    var imageNumber = 0;



    function addToAlbum($link) {

      self.album.push({

        alt: $link.attr('data-alt'),

        link: $link.attr('href'),

        title: $link.attr('data-title') || $link.attr('title')

      });

    }



    // Support both data-lightbox attribute and rel attribute implementations

    var dataLightboxValue = $link.attr('data-lightbox');

    var $links;



    if (dataLightboxValue) {

      $links = $($link.prop('tagName') + '[data-lightbox="' + dataLightboxValue + '"]');

      for (var i = 0; i < $links.length; i = ++i) {

        addToAlbum($($links[i]));

        if ($links[i] === $link[0]) {

          imageNumber = i;

        }

      }

    } else {

      if ($link.attr('rel') === 'lightbox') {

        // If image is not part of a set

        addToAlbum($link);

      } else {

        // If image is part of a set

        $links = $($link.prop('tagName') + '[rel="' + $link.attr('rel') + '"]');

        for (var j = 0; j < $links.length; j = ++j) {

          addToAlbum($($links[j]));

          if ($links[j] === $link[0]) {

            imageNumber = j;

          }

        }

      }

    }



    // Position Lightbox

    var top  = $window.scrollTop() + this.options.positionFromTop;

    var left = $window.scrollLeft();

    this.$lightbox.css({

      top: top + 'px',

      left: left + 'px'

    }).fadeIn(this.options.fadeDuration);



    // Disable scrolling of the page while open

    if (this.options.disableScrolling) {

      $('html').addClass('lb-disable-scrolling');

    }



    this.changeImage(imageNumber);

  };



  // Hide most UI elements in preparation for the animated resizing of the lightbox.

  Lightbox.prototype.changeImage = function(imageNumber) {

    var self = this;



    this.disableKeyboardNav();

    var $image = this.$lightbox.find('.lb-image');



    this.$overlay.fadeIn(this.options.fadeDuration);



    $('.lb-loader').fadeIn('slow');

    this.$lightbox.find('.lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption').hide();



    this.$outerContainer.addClass('animating');



    // When image to show is preloaded, we send the width and height to sizeContainer()

    var preloader = new Image();

    preloader.onload = function() {

      var $preloader;

      var imageHeight;

      var imageWidth;

      var maxImageHeight;

      var maxImageWidth;

      var windowHeight;

      var windowWidth;



      $image.attr({

        'alt': self.album[imageNumber].alt,

        'src': self.album[imageNumber].link

      });



      $preloader = $(preloader);




      $image.width(preloader.width);

      $image.height(preloader.height);



      if (self.options.fitImagesInViewport) {

        // Fit image inside the viewport.

        // Take into account the border around the image and an additional 10px gutter on each side.



        windowWidth    = $(window).width();

        windowHeight   = $(window).height();

        maxImageWidth  = windowWidth - self.containerPadding.left - self.containerPadding.right - self.imageBorderWidth.left - self.imageBorderWidth.right - 20;

        maxImageHeight = windowHeight - self.containerPadding.top - self.containerPadding.bottom - self.imageBorderWidth.top - self.imageBorderWidth.bottom - 120;



        // Check if image size is larger then maxWidth|maxHeight in settings

        if (self.options.maxWidth && self.options.maxWidth < maxImageWidth) {

          maxImageWidth = self.options.maxWidth;

        }

        if (self.options.maxHeight && self.options.maxHeight < maxImageWidth) {

          maxImageHeight = self.options.maxHeight;

        }



        // Is the current image's width or height is greater than the maxImageWidth or maxImageHeight

        // option than we need to size down while maintaining the aspect ratio.

        if ((preloader.width > maxImageWidth) || (preloader.height > maxImageHeight)) {

          if ((preloader.width / maxImageWidth) > (preloader.height / maxImageHeight)) {

            imageWidth  = maxImageWidth;

            imageHeight = parseInt(preloader.height / (preloader.width / imageWidth), 10);

            $image.width(imageWidth);

            $image.height(imageHeight);

          } else {

            imageHeight = maxImageHeight;

            imageWidth = parseInt(preloader.width / (preloader.height / imageHeight), 10);

            $image.width(imageWidth);

            $image.height(imageHeight);

          }

        }

      }

      self.sizeContainer($image.width(), $image.height());

    };



    preloader.src          = this.album[imageNumber].link;

    this.currentImageIndex = imageNumber;

  };



  // Stretch overlay to fit the viewport

  Lightbox.prototype.sizeOverlay = function() {

    this.$overlay

      .width($(document).width())

      .height($(document).height());

  };



  // Animate the size of the lightbox to fit the image we are showing

  Lightbox.prototype.sizeContainer = function(imageWidth, imageHeight) {

    var self = this;



    var oldWidth  = this.$outerContainer.outerWidth();

    var oldHeight = this.$outerContainer.outerHeight();

    var newWidth  = imageWidth + this.containerPadding.left + this.containerPadding.right + this.imageBorderWidth.left + this.imageBorderWidth.right;

    var newHeight = imageHeight + this.containerPadding.top + this.containerPadding.bottom + this.imageBorderWidth.top + this.imageBorderWidth.bottom;



    function postResize() {

      self.$lightbox.find('.lb-dataContainer').width(newWidth);

      self.$lightbox.find('.lb-prevLink').height(newHeight);

      self.$lightbox.find('.lb-nextLink').height(newHeight);

      self.showImage();

    }



    if (oldWidth !== newWidth || oldHeight !== newHeight) {

      this.$outerContainer.animate({

        width: newWidth,

        height: newHeight

      }, this.options.resizeDuration, 'swing', function() {

        postResize();

      });

    } else {

      postResize();

    }

  };



  // Display the image and its details and begin preload neighboring images.

  Lightbox.prototype.showImage = function() {

    this.$lightbox.find('.lb-loader').stop(true).hide();

    this.$lightbox.find('.lb-image').fadeIn(this.options.imageFadeDuration);



    this.updateNav();

    this.updateDetails();

    this.preloadNeighboringImages();

    this.enableKeyboardNav();

  };



  // Display previous and next navigation if appropriate.

  Lightbox.prototype.updateNav = function() {

    // Check to see if the browser supports touch events. If so, we take the conservative approach

    // and assume that mouse hover events are not supported and always show prev/next navigation

    // arrows in image sets.

    var alwaysShowNav = false;

    try {

      document.createEvent('TouchEvent');

      alwaysShowNav = (this.options.alwaysShowNavOnTouchDevices) ? true : false;

    } catch (e) {}



    this.$lightbox.find('.lb-nav').show();



    if (this.album.length > 1) {

      if (this.options.wrapAround) {

        if (alwaysShowNav) {

          this.$lightbox.find('.lb-prev, .lb-next').css('opacity', '1');

        }

        this.$lightbox.find('.lb-prev, .lb-next').show();

      } else {

        if (this.currentImageIndex > 0) {

          this.$lightbox.find('.lb-prev').show();

          if (alwaysShowNav) {

            this.$lightbox.find('.lb-prev').css('opacity', '1');

          }

        }

        if (this.currentImageIndex < this.album.length - 1) {

          this.$lightbox.find('.lb-next').show();

          if (alwaysShowNav) {

            this.$lightbox.find('.lb-next').css('opacity', '1');

          }

        }

      }

    }

  };



  // Display caption, image number, and closing button.

  Lightbox.prototype.updateDetails = function() {

    var self = this;



    // Enable anchor clicks in the injected caption html.

    // Thanks Nate Wright for the fix. @https://github.com/NateWr

    if (typeof this.album[this.currentImageIndex].title !== 'undefined' &&

      this.album[this.currentImageIndex].title !== '') {

      var $caption = this.$lightbox.find('.lb-caption');

      if (this.options.sanitizeTitle) {

        $caption.text(this.album[this.currentImageIndex].title);

      } else {

        $caption.html(this.album[this.currentImageIndex].title);

      }

      $caption.fadeIn('fast')

        .find('a').on('click', function(event) {

          if ($(this).attr('target') !== undefined) {

            window.open($(this).attr('href'), $(this).attr('target'));

          } else {

            location.href = $(this).attr('href');

          }

        });

    }



    if (this.album.length > 1 && this.options.showImageNumberLabel) {

      var labelText = this.imageCountLabel(this.currentImageIndex + 1, this.album.length);

      this.$lightbox.find('.lb-number').text(labelText).fadeIn('fast');

    } else {

      this.$lightbox.find('.lb-number').hide();

    }



    this.$outerContainer.removeClass('animating');



    this.$lightbox.find('.lb-dataContainer').fadeIn(this.options.resizeDuration, function() {

      return self.sizeOverlay();

    });

  };



  // Preload previous and next images in set.

  Lightbox.prototype.preloadNeighboringImages = function() {

    if (this.album.length > this.currentImageIndex + 1) {

      var preloadNext = new Image();

      preloadNext.src = this.album[this.currentImageIndex + 1].link;

    }

    if (this.currentImageIndex > 0) {

      var preloadPrev = new Image();

      preloadPrev.src = this.album[this.currentImageIndex - 1].link;

    }

  };



  Lightbox.prototype.enableKeyboardNav = function() {

    $(document).on('keyup.keyboard', $.proxy(this.keyboardAction, this));

  };



  Lightbox.prototype.disableKeyboardNav = function() {

    $(document).off('.keyboard');

  };



  Lightbox.prototype.keyboardAction = function(event) {

    var KEYCODE_ESC        = 27;

    var KEYCODE_LEFTARROW  = 37;

    var KEYCODE_RIGHTARROW = 39;



    var keycode = event.keyCode;

    var key     = String.fromCharCode(keycode).toLowerCase();

    if (keycode === KEYCODE_ESC || key.match(/x|o|c/)) {

      this.end();

    } else if (key === 'p' || keycode === KEYCODE_LEFTARROW) {

      if (this.currentImageIndex !== 0) {

        this.changeImage(this.currentImageIndex - 1);

      } else if (this.options.wrapAround && this.album.length > 1) {

        this.changeImage(this.album.length - 1);

      }

    } else if (key === 'n' || keycode === KEYCODE_RIGHTARROW) {

      if (this.currentImageIndex !== this.album.length - 1) {

        this.changeImage(this.currentImageIndex + 1);

      } else if (this.options.wrapAround && this.album.length > 1) {

        this.changeImage(0);

      }

    }

  };



  // Closing time. :-(

  Lightbox.prototype.end = function() {

    this.disableKeyboardNav();

    $(window).off('resize', this.sizeOverlay);

    this.$lightbox.fadeOut(this.options.fadeDuration);

    this.$overlay.fadeOut(this.options.fadeDuration);

    $('select, object, embed').css({

      visibility: 'visible'

    });

    if (this.options.disableScrolling) {

      $('html').removeClass('lb-disable-scrolling');

    }

  };



  return new Lightbox();

}));



</script>
</body></html>