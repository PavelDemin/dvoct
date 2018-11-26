$(document).ready(function(){

    let searchText = function() {
        $('#search-text').focus(function () {
            $(this).attr("rel", $(this).attr("placeholder"));
            $(this).removeAttr("placeholder");
        });
        $('#search-text').blur(function () {
            $(this).attr("placeholder", $(this).attr("rel"));
            $(this).removeAttr("rel");
        });
    };

    let openMenuMobile = function() {
        $('.menu-mobile__icon').click(function() {
            $('.menu__list-mobile').addClass('menu__list-mobile-open');
            $('.menu__close').addClass('menu__close-open');
        });

    };

    let closeMenuMobile = function() {
        $('.menu__close').click(function() {
            $('.menu__list').removeClass('menu__list-mobile-open');
            $(this).removeClass('menu__close-open');
        });
    };

    let openMenuTablet = function() {
      $('.menu__item-tablet').click(function(){
          $('.menu__item').removeClass('menu__item-mobile-hide');
      });
    };

    let openSlideDesc = function() {
        $('.slider__item').hover(function() {
            $('.slider-dropdown__desc').fadeToggle(600);
        });
    };


    searchText();
    openMenuMobile();
    closeMenuMobile();
    //openMenuTablet();
    openSlideDesc();


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