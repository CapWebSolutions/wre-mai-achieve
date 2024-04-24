jQuery(document).ready(function ($) {
    jQuery(document).find('.gform_wrapper').css({"display": "block"});
    jQuery(document).find('.gform_wrapper').show();

    jQuery('.site-inner a').click(function () {
        var id = jQuery(this).attr('href');
        jQuery('html, body').animate({
            scrollTop: $(id).offset().top - jQuery(document).find('header').height()
        }, 1000);
        return false;
    });

    jQuery('.homesforsale_list').each(function (i, val) {
        var title = jQuery(this).find('.homesforsale_title').text();
        jQuery(this).append("<li class='blue-btn'><a><span>" + title + "</span></a></li>");
        jQuery(this).find('li.blue-btn a').attr('href', '#hfs-list-' + (i + 1));
    });

    jQuery(".homesforsale_list li.blue-btn").appendTo(".homesforsale_list_section .titlelink_list_div ul")

    jQuery('.homesforsale_list').each(function (i, val) {
        jQuery(this).attr('id', 'hfs-list-' + (i + 1));
    });

    jQuery('.titlelink_list_div a[href*="#"]:not([href="#"])').on('click', function () {
        var hashVal = jQuery(this).attr('href');
        if (hashVal)
        {
            jQuery('html,body').animate({
                scrollTop: $(hashVal).offset().top - 100
            }, 1500);
            return false;
        }
    });
    if (jQuery('.rating-slider-main-wrap').length > 0) {

        multiSlideAdaptiveHeight(this);
    }
//    $(".rating-slider-main-wrap").not('.slick-initialized').slick();
    const mySlider = jQuery('.rating-slider-main-wrap').on('init', function (slick) {

        multiSlideAdaptiveHeight(this);

    }).on('beforeChange', function (slick, currentSlide, nextSlide) {

        multiSlideAdaptiveHeight(this);

    }).slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 370,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    jQuery(window).on('resize', function () {
        multiSlideAdaptiveHeight(mySlider);
    });

    function multiSlideAdaptiveHeight(slider) {

        let activeSlides = [];
        let tallestSlide = 0;

        setTimeout(function () {

            jQuery('.slick-track .slick-active', slider).each(function (item) {
                activeSlides[item] = $(this).outerHeight();
            });

            activeSlides.forEach(function (item) {
                if (item > tallestSlide) {
                    tallestSlide = item;
                }
            });

            jQuery('.slick-list', slider).height(tallestSlide);
        }, 100);

    }

});

//const mySlider = jQuery('.rating-slider-main-wrap').on('init', function(slick) {
// 
//  multiSlideAdaptiveHeight(this);
// 
//}).on('beforeChange', function(slick, currentSlide, nextSlide) {
// 
//  multiSlideAdaptiveHeight(this);
// 
//}).slick({
//	      dots: false,
//      infinite: true,
//      speed: 300,
//      slidesToShow: 3,
//      slidesToScroll: 1,
//	  adaptiveHeight: true,
//      responsive: [
//        {
//          breakpoint: 1024,
//          settings: {
//            slidesToShow: 3,
//            slidesToScroll: 1
//          }
//        },
//        {
//          breakpoint: 991,
//          settings: {
//            slidesToShow: 2,
//            slidesToScroll: 1
//          }
//        },
//        {
//          breakpoint: 767,
//          settings: {
//            slidesToShow: 1,
//            slidesToScroll: 1
//          }
//        },
//        {
//          breakpoint: 370,
//          settings: {
//            slidesToShow: 1,
//            slidesToScroll: 1
//          }
//        } 
//      ]	
//});

//
//function multiSlideAdaptiveHeight(slider) {
//
//    let activeSlides = [];
//    let tallestSlide = 0;
//
//    setTimeout(function () {
//
//        jQuery('.slick-track .slick-active', slider).each(function (item) {
//            activeSlides[item] = $(this).outerHeight();
//        });
//
//        activeSlides.forEach(function (item) {
//            if (item > tallestSlide) {
//                tallestSlide = item;
//            }
//        });
//
//        jQuery('.slick-list', slider).height(tallestSlide);
//    }, 100);
//
//}

//jQuery(window).on('resize', function() {
//  multiSlideAdaptiveHeight(mySlider);
//});



jQuery(window).resize(function ($) {
    
    equalheight('.real-estate-news .estate-news-wrap .estate-news .content-wrap h4');
    equalheight('.real-estate-news .estate-news-wrap .estate-news .content-wrap .sameheight');
    equalheight('.homesforsale_list_section .titlelink_list_div ul li a');

});

jQuery(window).load(function ($) {  
    equalheight('.real-estate-news .estate-news-wrap .estate-news .content-wrap h4');
    equalheight('.real-estate-news .estate-news-wrap .estate-news .content-wrap .sameheight');
    equalheight('.homesforsale_list_section .titlelink_list_div ul li a');
});


equalheight = function (container) {

    var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            jQueryel,
            topPosition = 0;
    jQuery(container).each(function () {

        jQueryel = jQuery(this);
        jQuery(jQueryel).height('auto')
        topPostion = jQueryel.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = jQueryel.height();
            rowDivs.push(jQueryel);
        } else {
            rowDivs.push(jQueryel);
            currentTallest = (currentTallest < jQueryel.height()) ? (jQueryel.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}








