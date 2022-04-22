(function ($) {
    var chevronLeft = '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>',
        chevronRight = '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>';

    $(document).ready(function () {
        $('body').removeClass('loading loaded');
        app.init();
    });

    app = {
        loaded: function () {
            setTimeout(function (){
                $('body').addClass('loaded');

                setTimeout(function (){
                    app.init();
                    $('body').removeClass('loading loaded');
                }, 30)
            }, 1500)
        },

        init: function () {
            this.toggleTransparentNav();
            this.mainMenuTogglerBtn();
            this.utils();
            this.siteFX();
            this.introCarousel();
            this.collectionsCarousel();
            this.teamCarousel();
            this.partnersCarousel();
            this.cookiesPolicies();
        },

        toggleTransparentNav: function () {
            $(document).scroll(function () {
                var $domBody = $('body');
                var $mainLogo = $('#logo-svg');
                var $mainNav = $('#main-navbar');

                if ($(window).scrollTop() === 0) {
                    $domBody.addClass('transparent-nav');
                    $mainLogo.addClass('white');
                    $mainNav.removeClass('little-collapse');

                    if ($(window).width() <= 600) {
                        if ($domBody.hasClass('admin-bar'))
                            $('#main-header .navbar').toggleClass('fixed-top-sm');
                    }

                } else {
                    $domBody.removeClass('transparent-nav');
                    $mainLogo.removeClass('white');
                    $mainNav.addClass('little-collapse');

                    if ($(window).width() <= 600 && $domBody.hasClass('admin-bar')) {
                        $('#main-header .navbar').addClass('fixed-top-sm');
                    } else {
                        $('#main-header .navbar').removeClass('fixed-top-sm');
                    }
                }
            });
        },

        mainMenuTogglerBtn: function () {
            const $sideNav = $('#sidenav'),
                $menuBtn = $('#menu-btn-toggler');

            $sideNav.on('show.bs.offcanvas', menuAnim)
            $sideNav.on('hide.bs.offcanvas', menuAnim)

            function menuAnim() {
                $menuBtn.toggleClass('active inactive');
            }
        },

        utils: function () {

        },

        smoothScroll: function (content, viewport, smoothness) {
            content = gsap.utils.toArray(content)[0];
            smoothness = smoothness || 1;

            gsap.set(viewport || content.parentNode, {overflow: "hidden", position: "fixed", height: "100%", width: "100%", top: 0, left: 0, right: 0, bottom: 0});
            gsap.set(content, {overflow: "visible", width: "100%"});

            let getProp = gsap.getProperty(content),
                setProp = gsap.quickSetter(content, "y", "px"),
                setScroll = ScrollTrigger.getScrollFunc(window),
                removeScroll = () => content.style.overflow = "visible",
                killScrub = trigger => {
                    let scrub = trigger.getTween ? trigger.getTween() : gsap.getTweensOf(trigger.animation)[0]; // getTween() was added in 3.6.2
                    scrub && scrub.kill();
                    trigger.animation.progress(trigger.progress);
                },
                height, isProxyScrolling;

            function refreshHeight() {
                height = content.clientHeight;
                content.style.overflow = "visible"
                document.body.style.height = height + "px";
                return height - document.documentElement.clientHeight;
            }

            ScrollTrigger.addEventListener("refresh", () => {
                removeScroll();
                requestAnimationFrame(removeScroll);
            })
            ScrollTrigger.defaults({scroller: content});
            ScrollTrigger.prototype.update = p => p; // works around an issue in ScrollTrigger 3.6.1 and earlier (fixed in 3.6.2, so this line could be deleted if you're using 3.6.2 or later)

            ScrollTrigger.scrollerProxy(content, {
                scrollTop(value) {
                    if (arguments.length) {
                        isProxyScrolling = true; // otherwise, if snapping was applied (or anything that attempted to SET the scroll proxy's scroll position), we'd set the scroll here which would then (on the next tick) update the content tween/ScrollTrigger which would try to smoothly animate to that new value, thus the scrub tween would impede the progress. So we use this flag to respond accordingly in the ScrollTrigger's onUpdate and effectively force the scrub to its end immediately.
                        setProp(-value);
                        setScroll(value);
                        return;
                    }
                    return -getProp("y");
                },
                scrollHeight: () => document.body.scrollHeight,
                getBoundingClientRect() {
                    return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
                }
            });

            return ScrollTrigger.create({
                animation: gsap.fromTo(content, {y: 0}, {
                    y: () => document.documentElement.clientHeight - height,
                    ease: "none",
                    onUpdate: ScrollTrigger.update
                }),
                scroller: window,
                invalidateOnRefresh: true,
                start: 0,
                end: refreshHeight,
                refreshPriority: -999,
                scrub: smoothness,
                onUpdate: self => {
                    if (isProxyScrolling) {
                        killScrub(self);
                        isProxyScrolling = false;
                    }
                },
                onRefresh: killScrub // when the screen resizes, we just want the animation to immediately go to the appropriate spot rather than animating there, so basically kill the scrub.
            });
        },

        siteFX: function () {

            var $domBody = $('body');
            var $mainLogo = $('#logo-svg');

            if ($domBody.hasClass('loading')) {
                setInterval(function () {
                    $mainLogo.toggleClass('white');
                }, 900)
            }

            if( $('#cookies-policy').length )
                $('#cookies-policy').css('visibility', 'visible');

            if ($(window).width() < 992)
                return;

            if( !$domBody.hasClass('loading') )
                app.smoothScroll('#scroll-view', '#viewport', 0.5);

            gsap.utils.toArray('.animate__animated').forEach(function (elem) {
                // app.hide(elem); // assure that the element is hidden when scrolled into view

                ScrollTrigger.create({
                    trigger: elem,
                    start: 'top bottom',
                    // markers: true,
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
                dots: false,
                draggable: false,
                pauseOnFocus: false,
                pauseOnHover: false,
            });
        },

        collectionsCarousel: function () {
            if ($('#collections-carousel').length) {
                $('#collections-carousel').slick({
                    autoplay: true,
                    swipeToSlide: true,
                    infinite: false,
                    adaptiveHeight: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    prevArrow: '<button type="button" class="slick-prev">' + chevronLeft + '</button>',
                    nextArrow: '<button type="button" class="slick-next">' + chevronRight + '</button>',
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
        },

        teamCarousel: function () {
            if ($('#team-carousel').length) {
                $('#team-carousel').slick({
                    autoplay: true,
                    swipeToSlide: true,
                    infinite: true,
                    adaptiveHeight: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev">' + chevronLeft + '</button>',
                    nextArrow: '<button type="button" class="slick-next">' + chevronRight + '</button>',
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        }
                    ]
                });
            }
        },

        partnersCarousel: function () {
            if ($('#partners-carousel').length) {
                $('#partners-carousel').slick({
                    autoplay: true,
                    swipeToSlide: true,
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev">' + chevronLeft + '</button>',
                    nextArrow: '<button type="button" class="slick-next">' + chevronRight + '</button>',
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        }
                    ]
                });
            }
        },

        cookiesPolicies: function () {
            var $cookiesPolicyContainer = $('#cookies-policy');
            $cookiesPolicyContainer.find('.btn').click(function (e) {
                e.preventDefault();
                var cookiesConsent = cookie('cookies-consent');

                if (cookiesConsent) {
                    cookie('cookies-consent', false);
                    $('body').removeClass('cookies-consent');
                } else {
                    cookie('cookies-consent', true);
                    $('body').addClass('cookies-consent');
                }
                $cookiesPolicyContainer.hide().remove();
            })
        },


    };
})(jQuery);
