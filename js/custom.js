$(window).load(function () {
    jQuery('#all').click();
    return false;

});

$(document).ready(function () {
    $('#header_wrapper').scrollToFixed();
    $('.res-nav_click').click(function () {
        $('.main-nav').slideToggle();
        return false

    });

    function select_portfolio_on_btn(active) {
        $(active).addClass('active');
        var selector = $(active).attr('data-filter');
        container.isotope({
            filter: selector
        });
        setProjects();
        setTimeout(portfolio_active_check(active), 20000);
        if (active.hasClass('all')) {
            $('.portfolio-item').css('left', '0px');

        } else {
            $('.portfolio-item').css('left', '43px');
        }
        return false;
    }

    function resizeText() {
        var preferredWidth = 767;
        var displayWidth = window.innerWidth;
        var percentage = displayWidth / preferredWidth;
        var fontsizetitle = 25;
        var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
        $(".divclass").css("font-size", newFontSizeTitle)
    }

    if ($('#main-nav ul li:first-child').hasClass('active')) {
        $('#main-nav').css('background', 'none');
    }
    $('#mainNav').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 950,
        scrollThreshold: 0.2,
        filter: '',
        easing: 'swing',
        begin: function () {
        },
        end: function () {
            if (!$('#main-nav ul li:first-child').hasClass('active')) {
                $('.header').addClass('addBg');
            } else {
                $('.header').removeClass('addBg');
            }

        },
        scrollChange: function ($currentListItem) {
            if (!$('#main-nav ul li:first-child').hasClass('active')) {
                $('.header').addClass('addBg');
            } else {
                $('.header').removeClass('addBg');
            }
        }
    });

    var container = $('#portfolio_wrapper');


    container.isotope({
        animationEngine: 'best-available',
        animationOptions: {
            duration: 200,
            queue: false
        },
        layoutMode: 'fitRows'
    });

    $('#filters a').click(function () {
        $('#filters a').removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        container.isotope({
            filter: selector
        });
        setProjects();
        return false;
    });
    $('.portfolio-item').click(function () {
        $('#filters a').removeClass('active');
        var active = '';
        if ($(this).hasClass('stargrains')) {
            var active = $('#stargrains');
        } else if ($(this).hasClass('shogo')) {
            var active = $('#shogo');
        } else if ($(this).hasClass('bizware')) {
            var active = $('#bizware');
        } else {
            var active = $('#hlr');
        }
        select_portfolio_on_btn(active);
    });

    function splitColumns() {
        var winWidth = $(window).width(),
            columnNumb = 1;


        if (winWidth > 1024) {
            columnNumb = 4;
        } else if (winWidth > 900) {
            columnNumb = 2;
        } else if (winWidth > 479) {
            columnNumb = 2;
        } else if (winWidth < 479) {
            columnNumb = 1;
        }

        return columnNumb;
    }

    function setColumns() {
        var winWidth = $(window).width(),
            columnNumb = splitColumns(),
            postWidth = Math.floor(winWidth / columnNumb);

        container.find('.portfolio-item').each(function () {
            $(this).css({
                width: postWidth + 'px'
            });
        });
    }

    function setProjects() {
        setColumns();
        container.isotope('reLayout');
    }

    container.imagesLoaded(function () {
        setColumns();
    });


    $(window).bind('resize', function () {
        setProjects();
    });


//    portfolio_active_check();
    $('.clearfix a').click(function () {

        var active = $(this);
        setTimeout(portfolio_active_check(active), 20000);
        if (active.hasClass('all')) {
            $('.portfolio-item').css('left', '0px');

        } else {
            $('.portfolio-item').css('left', '43px');
        }
    });

    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
    //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function () {
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
                scrollTop: 0,
            }, scroll_top_duration
        );
    });
});
wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 100
});
wow.init();

document.getElementById('').onclick = function () {
    var section = document.createElement('section');
    section.className = 'wow fadeInDown';
    section.className = 'wow shake';
    section.className = 'wow zoomIn';
    section.className = 'wow lightSpeedIn';
    this.parentNode.insertBefore(section, this);
};
function portfolio_active_check(active) {
    var activId = active.attr('id');
    var desc = active.data('desc');
    var prototype = '';
    switch (desc) {
        case 'all':
            $('.portfolio-desc-1,.portfolio-desc-2, .portfolio-desc-3,.portfolio-desc-4').addClass('hidden');
            $('.stargrains,.shogo,.bizware,.hlr').css('border', 'none');
            break;
        case 'stargrains':
            $('.portfolio-desc-2,.portfolio-desc-3,.portfolio-desc-4').addClass('hidden');
            $('.portfolio-desc-1').fadeIn(2500).removeClass('hidden');
            prototype = $('.stargrains');
            border_css(prototype);
            break;
        case 'shogo':
            $('.portfolio-desc-1,.portfolio-desc-3,.portfolio-desc-4').addClass('hidden');
            $('.portfolio-desc-2').fadeIn(2500).removeClass('hidden');
            prototype = $('.shogo');
            border_css(prototype);
            break;
        case 'bizware':
            $('.portfolio-desc-2,.portfolio-desc-1,.portfolio-desc-4').addClass('hidden');
            $('.portfolio-desc-3').fadeIn(2500).removeClass('hidden');
            prototype = $('.bizware');
            border_css(prototype);
            break;
        case 'hlr':
            $('.portfolio-desc-2,.portfolio-desc-3,.portfolio-desc-1').addClass('hidden');
            $('.portfolio-desc-4').fadeIn(2500).removeClass('hidden');
            prototype = $('.hlr');
            border_css(prototype);
            break;
    }
}
function border_css(prototype) {
    prototype.css('border', '2px solid #AE2727');
}