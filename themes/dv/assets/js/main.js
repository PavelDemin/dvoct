$(document).ready(function(){

    var searchText = function() {
        $('#search-text').focus(function () {
            $(this).attr("rel", $(this).attr("placeholder"));
            $(this).removeAttr("placeholder");
        });
        $('#search-text').blur(function () {
            $(this).attr("placeholder", $(this).attr("rel"));
            $(this).removeAttr("rel");
        });
    };

    var openMenuMobile = function() {
        $('.menu-mobile__icon').click(function() {
            $('.menu__list-mobile').addClass('menu__list-mobile-open');
            $('.menu__close').addClass('menu__close-open');
        });

    };

    var closeMenuMobile = function() {
        $('.menu__close').click(function() {
            $('.menu__list').removeClass('menu__list-mobile-open');
            $(this).removeClass('menu__close-open');
        });
    };

    var openMenuTablet = function() {
      $('.menu__item-tablet').click(function(){
          $('.menu__item').removeClass('menu__item-mobile-hide');
      });
    };

    var openSlideDesc = function() {
        $('.slider__item').hover(function() {
            $('.slider-dropdown__desc').fadeToggle(600);
        });
    };

    searchText();
    openMenuMobile();
    closeMenuMobile();
    //openMenuTablet();
    openSlideDesc();

    $(document).on('ajaxSetup', function(event, context) {
        // Enable AJAX handling of Flash messages on all AJAX requests
        context.options.flash = true

        // Enable the StripeLoadIndicator on all AJAX requests
        context.options.loading = $.oc.stripeLoadIndicator

        // Handle Error Messages by triggering a flashMsg of type error
        context.options.handleErrorMessage = function(message) {
            $.oc.flashMsg({ text: message, class: 'error' })
        }

        // Handle Flash Messages by triggering a flashMsg of the message type
        context.options.handleFlashMessage = function(message, type) {
            $.oc.flashMsg({ text: message, class: type })
        }
    });

    $('.FilterTypeCatching').on('change', 'input, select', function(){
        var $form = $(this).closest('form');
        var sort = $('.content-sort__link').attr('id');
        $form.request('onLoadReports', {
            data: {sort: sort},
            update: { 'report/block_list': '#blockList', 'report/paginate': '#main-pagination' }
        });
    });



    $('#main-pagination').on('click', '.pagination > li > a', function (event) {
        var page = $(this).attr('id');
        var sort = $('.content-sort__link').attr('id');
        var type_catching = $("#typeCatching option:selected").val();
        event.preventDefault();
        if ($(this).attr('id') != '#') {
            $("html, body").delay(1000).animate({scrollTop: $('#main').offset().top}, "slow");
            $.request('onLoadReports', {
                data: {page: page, type_catching: type_catching, sort: sort},
                update: { 'report/block_list': '#blockList', 'report/paginate': '#main-pagination' }
            });
        }   
    });

    $('.content-sort__item').on('click', '.content-sort__link', function (event) {
        var type_catching = $("#typeCatching option:selected").val();
        event.preventDefault();
        if($(this).attr('id') == 'published_at desc') {
            $(this).attr('id', 'published_at asc');            
        } else {
            $(this).attr('id', 'published_at desc');
        }
        if($('#sort-date-icon').hasClass('icon-down-big')) {
            $('#sort-date-icon').removeClass('icon-down-big').addClass('icon-up-big');
        } else {
            $('#sort-date-icon').removeClass('icon-up-big').addClass('icon-down-big');
        }

        var sort = $(this).attr('id');
        $("html, body").delay(1000).animate({scrollTop: $('#main').offset().top}, "slow");
        $.request('onLoadReports', {
            data: {sort: sort, type_catching: type_catching},
            update: { 'report/block_list': '#blockList', 'report/paginate': '#main-pagination' }
        }); 
    });


    $('.slider__list').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        //autoplay: true,
        autoplaySpeed: 2000,
       // dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        prevArrow: '.slider__nav-prev',
        nextArrow: '.slider__nav-next',
        customPaging: function(slider, i) {
            return '<a class="slider__dot">';
        }
    }); 

});




