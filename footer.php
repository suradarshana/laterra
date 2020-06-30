
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
            <div class="addres"> <i class="fa fa-map-marker fa-2x"></i> <span class="pl-1">  LAterra Splendente, </span><span class="pl-2">Colombo, Sri Lanka</span><span></span></div>
            <i class="fa fa-mobile fa-2x"></i> <span></span><br>
         <!--    <span>+94 664 200 102 </span><br>
            <span>+94 664 200 110</span><br> -->
            <span> +94 716 197 543</span> <i class="fa fa-envelope fa-lg"></i> <span style="margin-top: -22px;">info@laterrasplendente.com</span><br>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.436862424848!2d79.8541234195702!3d6.924223106679248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1583742826090!5m2!1sen!2slk"  width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

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
    <div class="footer_bottom"><span>© 2018 All Right Reserved | Design By LAterra Splendente</span></div>
  </div>
</footer>
<a href="#0" class="cd-top">Top</a> 
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
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


<script type="text/javascript">
	$(document).ready(function(){

		var date_input=$('input[name="todate"] , input[name="fromdate"]'); //our date input has the name "date"

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

$('#mycarousel2').carousel({

interval: 2000

});





$("#bookn").submit(function(event){

    // cancels the form submission

    event.preventDefault();

    submitbooking();

});



function submitbooking(){

    // Initiate Variables With Form Content

    var todate = $("#todate").val();
	
	var fromdate = $("#fromdate").val();

    var bemail = $("#bemail").val();

	 var roomcat = $("#roomcat").val();

    var adults = $("#adults").val();
	
	var child  =$("#child").val();

 

    $.ajax({

        type: "POST",

        url: "bprocess.php",

        data: "fromdate=" + fromdate + "&todate=" + todate + "&bemail=" + bemail + "&roomcat=" + roomcat + "&child=" + child + "&adults=" + adults,

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