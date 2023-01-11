$(document).ready(function () {
    //$('select').selectric();
    $('select').selectric({
        disableOnMobile: false
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 300) {
            $(".headerMain").addClass("headerMainFixed");
        }
        else {
            $(".headerMain").removeClass("headerMainFixed");
        }
    });

    $(".navbar-toggler-btn").on("click", function () {
        $("body").toggleClass("headerOpen");
        $(".headerMain").toggleClass("headerMainOpen");
    });



    // $(".homeBannerVideo").trigger('play');

    $(".accordionHoverItem").on("mouseenter", function () {
        $(".accordionHoverItem").removeClass("active");
        $(this).addClass("active");
    });



    // homeSlider
    $(".homeSlider").slick({
        focusOnSelect: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        fade: true,
        // vertical: true,
    });
    var keyBenefitsNext = 0;
    var keyBenefitsBack = 0;
    $(".homeSlider").on('wheel', (function (e) {
        if (e.originalEvent.deltaY > 0 && keyBenefitsNext !== 1) {
            e.preventDefault();
        }
        if (e.originalEvent.deltaY < 0 && keyBenefitsBack !== 1) {
            e.preventDefault();
        }

        if (e.originalEvent.deltaY > 0) {
            $(this).slick('slickNext');
        } else {
            $(this).slick('slickPrev');
        }
    }));
    $(".homeSlider").on("afterChange", function (event, slideCount, currentSlide) {
        var slideCount = slideCount.$slides.length - 1;
        if (slideCount == currentSlide) {
            keyBenefitsNext = 1;
        } else {
            keyBenefitsNext = 0;
        }
        if (currentSlide == 0) {
            keyBenefitsBack = 1;
        } else {
            keyBenefitsBack = 0;
        }
    });





    // blogSlider
    $('.blogSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        /*
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
                */
    });

    // bestDealsSlider
    $('.bestDealsSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        dots: false,
        infinite: false,
    });

    //qualifiedslide
    $('.qualifiedslide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: false,
    });



    // newsPressASlider
    $('.newsPressASlider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        variableWidth: true,
        // infinite: false,
        // arrows: false,
        // fade: true,
        // dots: true,
        /*
        responsive: [
            {
              breakpoint: 620,
              settings: {
                dots: true,
              }
            },
            {
              breakpoint: 345,
              settings: {
                  arrows: true
              }
            }
        ]
        */
    });
    // controls__right
    $('.industriesSlider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        if (currentSlide < nextSlide) {
            // console.log("next")
            $(".controls__right .icon-wrapper").trigger("click");
        }
        else {
            // console.log("pre")
            $(".controls__left .icon-wrapper").trigger("click");
        }
    });
    // industriesSlider
    $('.industriesSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.industriesSliderImgs',
        // vertical: true,
        infinite: false,
        fade: true,
        adaptiveHeight: true,
    });
    $('.industriesSliderImgs').slick({
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.industriesSlider',
        centerMode: true,
        focusOnSelect: true,
        arrows: false,
        // fade: true,
        infinite: false,
        vertical: true,
        swipe: false,

    });
    $(".industriesSliderImgs").on("afterChange", function (event, slideCount, currentSlide) {
        // var slideCount = slideCount.$slides.length - 1;
        // console.log(slideCount);
        $(".industriesSliderImgs .slick-slide").addClass("slick-slide-pre")
        $(".industriesSliderImgs .slick-current").removeClass("slick-slide-pre");
        $(".industriesSliderImgs .slick-current").prev(".slick-slide").removeClass("slick-slide-pre");
        $(".industriesSliderImgs .slick-current").next(".slick-slide").removeClass("slick-slide-pre");
    });




    // service
    var bgColor = $(".serviceContent").attr("bg-color");
    $(".serviceContent p img").parent("p").addClass("contentImg");
    $(".serviceContent p img").parent("p").prepend('<span style="background-color:' + bgColor + '"></span>');
    $(".serviceContent h3").prepend('<span class="lineBar" style="background-color:' + bgColor + '"></span>');
    $(".serviceContent > div > *").attr("data-aos", "fade-up");
    $(".wp-block-group__inner-container .wp-block-image").attr("data-aos", "fade-up");
    // end service

    // defaultContent
    var bgColorPost = $(".defaultContent ").attr("bg-color");
    $(".defaultContentContainer > .wp-block-image").append('<span style="background-color:' + bgColorPost + '"></span>');
    $(".defaultContentContainer > *").attr("data-aos", "fade-up");
    $(".defaultContentPageContainer > *").attr("data-aos", "fade-up");
    // end defaultContent

    // scrollSlider
    const scrollSlider = $(".ourCoreValuesSlider, .resourcesVideosSlider");
    scrollSlider.slick({
        focusOnSelect: false,
        infinite: false,
        variableWidth: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        // arrows: false,
        arrows: true,
        // fade: true,
        // dots: true,
        // cssEase: 'linear'
    });

    var scrollSliderNext = 0;
    var scrollSliderBack = 0;
    scrollSlider.on('wheel', (function (e) {
        if (e.originalEvent.deltaY > 0 && scrollSliderNext !== 1) {
            e.preventDefault();
        }
        if (e.originalEvent.deltaY < 0 && scrollSliderBack !== 1) {
            e.preventDefault();
        }

        if (e.originalEvent.deltaY > 0) {
            $(this).slick('slickNext');
        } else {
            $(this).slick('slickPrev');
        }
    }));

    scrollSlider.on("afterChange", function (event, slideCount, currentSlide) {
        var slideCount = slideCount.$slides.length - 1;
        if (slideCount == currentSlide) {
            scrollSliderNext = 1;
        } else {
            scrollSliderNext = 0;
        }
        if (currentSlide == 0) {
            scrollSliderBack = 1;
        } else {
            scrollSliderBack = 0;
        }
    });

    // end scrollSlider

    // $('.ourCoreValuesSlider').slick({
    //     arrows: true,
    // });

    // leadershipMember
    $(".leadershipMemberImg").on("click", function () {
        if ($(this).parent(".leadershipMember").hasClass("active")) { }
        else {
            $(".leadershipMember").removeClass("active");
            $(this).parent(".leadershipMember").addClass("active");
            // $(this).next(".leadershipMemberContent").show();
        }
    });
    // end leadershipMember




    setTimeout(function () {
        AOS.init();
        // $('.paroller').paroller();
        // document.getElementById('homeBannerVideo').play();
    }, 500);


    $('#flexSwitchCheckChecked').change(function () {
        if ($(this).is(":checked")) {
            $('.price-info').addClass('year_value');
            $('.flexSwitchCheckCheckedMonth').removeClass('active');
            $('.flexSwitchCheckCheckedYear').addClass('active');
        } else {
            $('.price-info').removeClass('year_value');
            $('.flexSwitchCheckCheckedMonth').addClass('active');
            $('.flexSwitchCheckCheckedYear').removeClass('active');
        }
    });

    $(".flexSwitchCheckCheckedYear").on("click", function () {
        $('.price-info').addClass('year_value');
        $('.flexSwitchCheckCheckedMonth').removeClass('active');
        $('.flexSwitchCheckCheckedYear').addClass('active');

        $("#flexSwitchCheckChecked").prop("checked", true);
        $('.flexSwitchCheckCheckedMonth').removeClass('active');
        $('.flexSwitchCheckCheckedYear').addClass('active');
    });
    $(".flexSwitchCheckCheckedMonth").on("click", function () {
        $('.price-info').removeClass('year_value');
        $('.flexSwitchCheckCheckedMonth').addClass('active');
        $('.flexSwitchCheckCheckedYear').removeClass('active');

        $("#flexSwitchCheckChecked").prop("checked", false);
        $('.flexSwitchCheckCheckedMonth').addClass('active');
        $('.flexSwitchCheckCheckedYear').removeClass('active');
    });



});

// ScrollWatch
/*
(function() {
    var swInstance = new ScrollWatch({
        watchOnce: false
    });

})();

*/
// end ScrollWatch