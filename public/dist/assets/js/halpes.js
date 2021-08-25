(function($) {
    "use strict";


    // Popular Causes Progress Bar
    if ($('.count-bar').length) {
        $('.count-bar').appear(function() {
            var el = $(this);
            var percent = el.data('percent');
            $(el).css('width', percent).addClass('counted');
        }, {
            accY: -50
        });

    }

    //Fact Counter + Text Count
    if ($(".count-box").length) {
        $(".count-box").appear(
            function() {
                var $t = $(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text(),
                    }).animate({
                        countNum: n,
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function() {
                            $t.find(".count-text").text(
                                Math.floor(this.countNum)
                            );
                        },
                        complete: function() {
                            $t.find(".count-text").text(this.countNum);
                        },
                    });
                }
            }, {
                accY: 0
            }
        );
    }

    // Accrodion
    if ($(".accrodion-grp").length) {
        var accrodionGrp = $(".accrodion-grp");
        accrodionGrp.each(function() {
            var accrodionName = $(this).data("grp-name");
            var Self = $(this);
            var accordion = Self.find(".accrodion");
            Self.addClass(accrodionName);
            Self.find(".accrodion .accrodion-content").hide();
            Self.find(".accrodion.active").find(".accrodion-content").show();
            accordion.each(function() {
                $(this)
                    .find(".accrodion-title")
                    .on("click", function() {
                        if ($(this).parent().hasClass("active") === false) {
                            $(".accrodion-grp." + accrodionName)
                                .find(".accrodion")
                                .removeClass("active");
                            $(".accrodion-grp." + accrodionName)
                                .find(".accrodion")
                                .find(".accrodion-content")
                                .slideUp();
                            $(this).parent().addClass("active");
                            $(this)
                                .parent()
                                .find(".accrodion-content")
                                .slideDown();
                        }
                    });
            });
        });
    }


    // Causes One Carousel
    if ($(".causes-one__carousel").length) {
        $(".causes-one__carousel").owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            smartSpeed: 500,
            autoHeight: false,
            autoplay: true,
            dots: true,
            autoplayTimeout: 10000,
            navText: [
                '<span class="icon-right-arrow left"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
            },
        });
    }
    // Causes Two Carousel
    if ($(".causes-two__carousel").length) {
        $(".causes-two__carousel").owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            smartSpeed: 500,
            autoHeight: false,
            autoplay: true,
            dots: true,
            autoplayTimeout: 10000,
            navText: [
                '<span class="icon-right-arrow left"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
            },
        });
    }
    // Causes Three Carousel
    if ($(".causes-three__carousel").length) {
        $(".causes-three__carousel").owlCarousel({
            loop: false,
            margin: 30,
            nav: false,
            smartSpeed: 500,
            autoHeight: false,
            autoplay: true,
            dots: true,
            autoplayTimeout: 10000,
            navText: [
                '<span class="icon-right-arrow left"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
            },
        });
    }

    // Testimonial One Carousel
    if ($(".testimonial-one__carousel").length) {
        $(".testimonial-one__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 500,
            autoHeight: false,
            autoplay: true,
            dots: false,
            autoplayTimeout: 10000,
            navText: [
                '<span class="icon-right-arrow left"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 2,
                },
                1200: {
                    items: 2,
                },
            },
        });
    }


    // Events One Carousel
    if ($(".events-one__carousel").length) {
        $(".events-one__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            smartSpeed: 500,
            autoHeight: false,
            autoplay: true,
            dots: false,
            autoplayTimeout: 10000,
            navText: [
                '<span class="icon-right-arrow left"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
            },
        });
    }


    // Gallery One Carousel
    if ($(".gallery-one__carousel").length) {
        $(".gallery-one__carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            smartSpeed: 500,
            autoHeight: false,
            autoplay: true,
            dots: false,
            autoplayTimeout: 10000,
            navText: [
                '<span class="icon-right-arrow left"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 5,
                },
            },
        });
    }

    // Brand One Carousel
    if ($(".brand-one__carousel").length) {
        $(".brand-one__carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            smartSpeed: 5000000000000000000000,
            autoHeight: false,
            autoplay: true,
            dots: false,
            autoplayTimeout: 10000,
            navText: [
                '<span class="icon-right-arrow left"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1024: {
                    items: 4,
                },
                1200: {
                    items: 5,
                },
            },
        });
    }




    if ($(".scroll-to-target").length) {
        $(".scroll-to-target").on("click", function() {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate({
                    scrollTop: $(target).offset().top,
                },
                1000
            );

            return false;
        });
    }

    if ($(".contact-form-validated").length) {
        $(".contact-form-validated").validate({
            // initialize the plugin
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                message: {
                    required: true,
                },
                subject: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                // sending value with ajax request
                $.post(
                    $(form).attr("action"),
                    $(form).serialize(),
                    function(response) {
                        $(form).parent().find(".result").append(response);
                        $(form).find('input[type="text"]').val("");
                        $(form).find('input[type="email"]').val("");
                        $(form).find("textarea").val("");
                    }
                );
                return false;
            },
        });
    }

    // mailchimp form
    if ($(".mc-form").length) {
        $(".mc-form").each(function() {
            var Self = $(this);
            var mcURL = Self.data("url");
            var mcResp = Self.parent().find(".mc-form__response");

            Self.ajaxChimp({
                url: mcURL,
                callback: function(resp) {
                    // appending response
                    mcResp.append(function() {
                        return '<p class="mc-message">' + resp.msg + "</p>";
                    });
                    // making things based on response
                    if (resp.result === "success") {
                        // Do stuff
                        Self.removeClass("errored").addClass("successed");
                        mcResp.removeClass("errored").addClass("successed");
                        Self.find("input").val("");

                        mcResp.find("p").fadeOut(10000);
                    }
                    if (resp.result === "error") {
                        Self.removeClass("successed").addClass("errored");
                        mcResp.removeClass("successed").addClass("errored");
                        Self.find("input").val("");

                        mcResp.find("p").fadeOut(10000);
                    }
                },
            });
        });
    }

    if ($(".video-popup").length) {
        $(".video-popup").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false,
        });
    }

    if ($(".img-popup").length) {
        var groups = {};
        $(".img-popup").each(function() {
            var id = parseInt($(this).attr("data-group"), 10);

            if (!groups[id]) {
                groups[id] = [];
            }

            groups[id].push(this);
        });

        $.each(groups, function() {
            $(this).magnificPopup({
                type: "image",
                closeOnContentClick: true,
                closeBtnInside: false,
                gallery: {
                    enabled: true,
                },
            });
        });
    }


    function dynamicCurrentMenuClass(selector) {
        let FileName = window.location.href.split("/").reverse()[0];

        selector.find("li").each(function() {
            let anchor = $(this).find("a");
            if ($(anchor).attr("href") == FileName) {
                $(this).addClass("current");
            }
        });
        // if any li has .current elmnt add class
        selector.children("li").each(function() {
            if ($(this).find(".current").length) {
                $(this).addClass("current");
            }
        });
        // if no file name return
        if ("" == FileName) {
            selector.find("li").eq(0).addClass("current");
        }
    }

    if ($(".main-menu__list").length) {
        // dynamic current class
        let mainNavUL = $(".main-menu__list");
        dynamicCurrentMenuClass(mainNavUL);
    }

    if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
        let navContent = document.querySelector(".main-menu__list").outerHTML;
        let mobileNavContainer = document.querySelector(".mobile-nav__container");
        mobileNavContainer.innerHTML = navContent;
    }
    if ($(".sticky-header__content").length) {
        let navContent = document.querySelector(".main-menu").innerHTML;
        let mobileNavContainer = document.querySelector(".sticky-header__content");
        mobileNavContainer.innerHTML = navContent;
    }

    if ($(".mobile-nav__container .main-menu__list").length) {
        let dropdownAnchor = $(
            ".mobile-nav__container .main-menu__list .dropdown > a"
        );
        dropdownAnchor.each(function() {
            let self = $(this);
            let toggleBtn = document.createElement("BUTTON");
            toggleBtn.setAttribute("aria-label", "dropdown toggler");
            toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
            self.append(function() {
                return toggleBtn;
            });
            self.find("button").on("click", function(e) {
                e.preventDefault();
                let self = $(this);
                self.toggleClass("expanded");
                self.parent().toggleClass("expanded");
                self.parent().parent().children("ul").slideToggle();
            });
        });
    }

    if ($(".mobile-nav__toggler").length) {
        $(".mobile-nav__toggler").on("click", function(e) {
            e.preventDefault();
            $(".mobile-nav__wrapper").toggleClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".search-toggler").length) {
        $(".search-toggler").on("click", function(e) {
            e.preventDefault();
            $(".search-popup").toggleClass("active");
            $(".mobile-nav__wrapper").removeClass("expanded");
            $("body").toggleClass("locked");
        });
    }
    if ($(".mini-cart__toggler").length) {
        $(".mini-cart__toggler").on("click", function(e) {
            e.preventDefault();
            $(".mini-cart").toggleClass("expanded");
            $(".mobile-nav__wrapper").removeClass("expanded");
            $("body").toggleClass("locked");
        });
    }
    if ($(".odometer").length) {
        var odo = $(".odometer");
        odo.each(function() {
            $(this).appear(function() {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }

    if ($(".dynamic-year").length) {
        let date = new Date();
        $(".dynamic-year").html(date.getFullYear());
    }

    if ($(".wow").length) {
        var wow = new WOW({
            boxClass: "wow", // animated element css class (default is wow)
            animateClass: "animated", // animation css class (default is animated)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }

    if ($("#donate-amount__predefined").length) {
        let donateInput = $("#donate-amount");
        $("#donate-amount__predefined")
            .find("li")
            .on("click", function(e) {
                e.preventDefault();
                let amount = $(this).find("a").text();
                donateInput.val(amount);
                $("#donate-amount__predefined").find("li").removeClass("active");
                $(this).addClass("active");
            });
    }

    if ($('.thm-accordion').length) {
        let accordionWrapper = $('.thm-accordion');
        accordionWrapper.each(function() {
            let $this = $(this);
            let accordionID = $this.attr('id');
            let accordionTitle = $this.find('.thm-accordion__title');
            $this.addClass(accordionID);
            // default hide
            let mainAccordionContent = $this.find('.thm-accordion__content').hide();
            $this.find('.active-item .thm-accordion__content').show();
            // on title click
            accordionTitle.on('click', function(e) {
                e.preventDefault();
                let $this = $(this);
                let accordionItem = $(this).parent();
                if (false === accordionItem.hasClass('active-item')) {
                    $('#' + accordionID).find('.thm-accordion__item').removeClass('active-item');
                    accordionItem.addClass('active-item');
                    mainAccordionContent.slideUp();
                    accordionItem.find('.thm-accordion__content').slideDown();
                }
            });
        })
    }

    $(".add").on("click", function() {
        if ($(this).prev().val() < 999) {
            $(this)
                .prev()
                .val(+$(this).prev().val() + 1);
        }
    });
    $(".sub").on("click", function() {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1)
                $(this)
                .next()
                .val(+$(this).next().val() - 1);
        }
    });

    if ($(".tabs-box").length) {
        $(".tabs-box .tab-buttons .tab-btn").on("click", function(e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).is(":visible")) {
                return false;
            } else {
                target
                    .parents(".tabs-box")
                    .find(".tab-buttons")
                    .find(".tab-btn")
                    .removeClass("active-btn");
                $(this).addClass("active-btn");
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .fadeOut(0);
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .removeClass("active-tab");
                $(target).fadeIn(300);
                $(target).addClass("active-tab");
            }
        });
    }

    if ($(".range-slider-price").length) {
        var priceRange = document.getElementById("range-slider-price");

        noUiSlider.create(priceRange, {
            start: [30, 150],
            limit: 200,
            behaviour: "drag",
            connect: true,
            range: {
                min: 10,
                max: 200,
            },
        });

        var limitFieldMin = document.getElementById("min-value-rangeslider");
        var limitFieldMax = document.getElementById("max-value-rangeslider");

        priceRange.noUiSlider.on("update", function(values, handle) {
            (handle ? $(limitFieldMax) : $(limitFieldMin)).text(values[handle]);
        });
    }

    function thmSwiperInit() {
        // swiper slider
        const swiperElm = document.querySelectorAll(".thm-swiper__slider");
        swiperElm.forEach(function(swiperelm) {
            const swiperOptions = JSON.parse(swiperelm.dataset.swiperOptions);
            let thmSwiperSlider = new Swiper(swiperelm, swiperOptions);
        });
    }

    function thmTinyInit() {
        // tiny slider
        const tinyElm = document.querySelectorAll(".thm-tiny__slider");
        tinyElm.forEach(function(tinyElm) {
            const tinyOptions = JSON.parse(tinyElm.dataset.tinyOptions);
            let thmTinySlider = tns(tinyOptions);
        });
    }

    function thmTestimonialsThumbCarousel() {
        if ($("#testimonials-one__thumb").length) {
            let testimonialsThumb = new Swiper("#testimonials-one__thumb", {
                slidesPerView: 3,
                spaceBetween: 0,
                speed: 1400,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                autoplay: {
                    delay: 5000
                }
            });

            let testimonialsCarousel = new Swiper("#testimonials-one__carousel", {
                observer: true,
                observeParents: true,
                speed: 1400,
                mousewheel: true,
                slidesPerView: 1,
                autoplay: {
                    delay: 5000
                },
                thumbs: {
                    swiper: testimonialsThumb
                }
            });
        }
    }

    // window load event

    $(window).on("load", function() {
        if ($(".preloader").length) {
            $(".preloader").fadeOut(1000);
        }
        // setTimeout(function() {
        //     if ($('.preloader').length > 0) {
        //         $('.preloader').style.display = "none";
        //     }
        // }, 1);

        thmSwiperInit();
        thmTinyInit();
        thmTestimonialsThumbCarousel();

        if ($(".circle-progress").length) {
            $(".circle-progress").appear(function() {
                let circleProgress = $(".circle-progress");
                circleProgress.each(function() {
                    let progress = $(this);
                    let progressOptions = progress.data("options");
                    progress.circleProgress(progressOptions);
                });
            });
        }
        if ($(".post-filter").length) {
            var postFilterList = $(".post-filter li");
            // for first init
            $(".filter-layout").isotope({
                filter: ".filter-item",
                animationOptions: {
                    duration: 500,
                    easing: "linear",
                    queue: false,
                },
            });
            // on click filter links
            postFilterList.on("click", function() {
                var Self = $(this);
                var selector = Self.attr("data-filter");
                postFilterList.removeClass("active");
                Self.addClass("active");

                $(".filter-layout").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 500,
                        easing: "linear",
                        queue: false,
                    },
                });
                return false;
            });
        }

        if ($(".post-filter.has-dynamic-filter-counter").length) {
            // var allItem = $('.single-filter-item').length;

            var activeFilterItem = $(".post-filter.has-dynamic-filter-counter").find(
                "li"
            );

            activeFilterItem.each(function() {
                var filterElement = $(this).data("filter");
                var count = $(".filter-layout").find(filterElement).length;
                $(this).append("<sup>[" + count + "]</sup>");
            });
        }



    });

    // window scroll event
    var counter = function() {

        $('.main-slider__counter').waypoint(function(direction) {

            if (direction === 'down' && !$(this.element).hasClass('counter-animate')) {
                var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
                $('.number').each(function() {
                    var $this = $(this),
                        num = $this.data('number');
                    console.log(num);
                    $this.animateNumber({
                        number: num,
                        numberStep: comma_separator_number_step
                    }, 4000);
                });
            }

        }, { offset: '95%' });

    }
    counter();

    $(window).on("scroll", function() {
        if ($(".stricked-menu").length) {
            var headerScrollPos = 130;
            var stricky = $(".stricked-menu");
            if ($(window).scrollTop() > headerScrollPos) {
                stricky.addClass("stricky-fixed");
            } else if ($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass("stricky-fixed");
            }
        }
        if ($(".scroll-to-top").length) {
            var strickyScrollPos = 100;
            if ($(window).scrollTop() > strickyScrollPos) {
                $(".scroll-to-top").fadeIn(500);
            } else if ($(this).scrollTop() <= strickyScrollPos) {
                $(".scroll-to-top").fadeOut(500);
            }
        }
    });

})(jQuery);