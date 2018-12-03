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




    $('.FilterTypeCatching').on('change', 'input, select', function(){
        var $form = $(this).closest('form');
        $form.request();
    });



    $('#main-pagination').on('click', '.pagination > li > a', function (event) {

    // reference the href attribute of the list item anchor tag
    var page = $(this).attr('href').slice(5);
    var type_catching = $("#typeCatching option:selected").val();
    event.preventDefault();
    if ($(this).attr('href') != '#') {
        $("html, body").delay(1000).animate({scrollTop: $('#main').offset().top}, "slow");
        $.request('onFilterTypeCatching', {
            data: {page: page, type_catching: type_catching},
            update: { 'report/block_list': '#blockList', 'report/paginate': '#main-pagination' }
        });
    }
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