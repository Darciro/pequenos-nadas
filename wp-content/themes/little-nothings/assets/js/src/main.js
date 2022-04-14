(function ($) {
    $(document).ready(function () {
        app.init();
    });

    app = {
        init: function () {
            this.toggleTransparentNav();
            this.utils();
            this.siteFX();
            this.introCarousel();
            this.consultingBoardCarousel();
            this.featuresCarousel();
        },

        toggleTransparentNav: function () {
            const showAnim = gsap.from('#main-header .navbar', {
                yPercent: -100,
                paused: true,
                duration: 0.2
            }).progress(1);

            ScrollTrigger.create({
                start: 'top top',
                end: 99999,
                onUpdate: (self) => {
                    self.direction === -1 ? showAnim.play() : showAnim.reverse()
                }
            });
        },

        utils: function () {
            gsap.utils.toArray('.panel').forEach((panel, i) => {
                ScrollTrigger.create({
                    trigger: panel,
                    start: 'top top',
                    scrub: 1,
                    invalidateOnRefresh: true,
                    pin: false,
                    pinSpacing: false
                });
            });


            /*ScrollTrigger.create({
                snap: 1 / 4 // snap whole page to the closest section!
            });*/
        },

        siteFX: function () {
            gsap.utils.toArray('.animate__animated').forEach(function (elem) {
                // app.hide(elem); // assure that the element is hidden when scrolled into view

                ScrollTrigger.create({
                    trigger: elem,
                    start: 'center bottom',
                    onEnter: function () {
                        if (!$(elem).hasClass('animated'))
                            app.animateElement(elem)

                        $(elem).addClass('animated')
                    },
                    onEnterBack: function () {
                        if (!$(elem).hasClass('animated'))
                            app.animateElement(elem)

                        $(elem).addClass('animated')
                    },
                    onLeave: function () {
                        app.clearFX(elem)
                    } // assure that the element is hidden when scrolled into view
                });
            });
        },

        animateElement: function (elem, customClass) {
            var $target = $(elem),
                animatePrefix = 'animate__',
                animationClass = animatePrefix + $target.data('animation'),
                animationDelay;

            if ($target.data('delay')) {
                animationDelay = animatePrefix + 'delay-' + $target.data('delay');
                animationClass = animationDelay + ' ' + animationClass;
            }

            animationClass = customClass + ' ' + animationClass;

            $target.addClass(animationClass);

            $target.on('animationend', function () {
                $target.removeClass(animationClass);
            })
        },

        clearFX: function (elem) {
            console.log('LEaving', elem)
            var $target = $(elem);
            $target.removeClass('animated');
        },

        introCarousel: function () {
            $('#intro-carousel').slick({
                autoplay: true,
                autoplaySpeed: 3000, // In prod => 5000
                slidesToScroll: 1,
                fade: true,
                arrows: false,
                infinite: true,
                dots: false
            });
        },

        consultingBoardCarousel: function () {
            var chevronLeft = '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>',
                chevronRight = '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>';

            if ($('#collections-carousel').length) {
                $('#collections-carousel').slick({
                    autoplay: true,
                    swipeToSlide: true,
                    infinite: true,
                    adaptiveHeight: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    // appendArrows: '#team-carousel-title',
                    prevArrow: '<button type="button" class="slick-prev">' + chevronLeft + '</button>',
                    nextArrow: '<button type="button" class="slick-next">' + chevronRight + '</button>'
                });
            }
        },

        featuresCarousel: function () {
            if ($('#features-carousel').length) {
                $('#features-carousel').slick({
                    autoplay: true,
                    swipeToSlide: true,
                    infinite: true,
                    adaptiveHeight: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false
                });
            }
        },


    };
})(jQuery);
