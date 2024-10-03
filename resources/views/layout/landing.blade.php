<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Gunung Anak Dara</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Rosliana Travel - BlocDev">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- slider revolution CSS files -->
    <link rel="stylesheet" type="text/css" href="/landing/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/landing/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/landing/revolution/css/navigation.css">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="/landing/css/vendors.min.css" />
    <link rel="stylesheet" href="/landing/css/icon.min.css" />
    <link rel="stylesheet" href="/landing/css/style.css" />
    <link rel="stylesheet" href="/landing/css/responsive.css" />
    <link rel="stylesheet" href="/landing/demos/travel-agency/travel-agency.css" />
    
</head>

<body data-mobile-nav-style="classic">
    @include('include.lheader')

    @yield('landing')

   @include('include.lfooter')
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="/landing/js/jquery.js"></script>
    <script type="text/javascript" src="/landing/js/vendors.min.js"></script>
    <!-- slider revolution core javaScript files -->
    <script type="text/javascript" src="/landing/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/landing/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
    <!-- <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script> -->
    <!-- Slider Revolution add on files -->
    <script type='text/javascript'
        src='/landing/revolution/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3'></script>
    <!-- Slider's main "init" script -->
    <script type="text/javascript">
        /* https://learn.jquery.com/using-jquery-core/document-ready/ */
        jQuery(document).ready(function() {

            /* initialize the slider based on the Slider's ID attribute from the wrapper above */
            jQuery('#travel-agency-slider').show().revolution({
                sliderType: "standard",
                /* options are 'auto', 'fullwidth' or 'fullscreen' */
                sliderLayout: 'fullscreen',
                /* sets the Slider's default timeline */
                delay: 9000,
                /* options that disable autoplay */
                stopLoop: "off",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                navigation: {

                    keyboardNavigation: 'on',
                    keyboard_direction: 'horizontal',
                    mouseScrollNavigation: 'off',
                    mouseScrollReverse: 'reverse',
                    onHoverStop: 'off',
                    touch: {
                        touchenabled: 'on',
                        touchOnDesktop: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    },
                    arrows: {

                        enable: true,
                        style: 'hesperiden',
                        tmp: '',
                        rtl: false,
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 0,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,

                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 30,
                            v_offset: 0
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 30,
                            v_offset: 0
                        }

                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                gridwidth: [1190, 1024, 778, 480],
                /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                gridheight: [900, 920, 700, 650],
                /* Lazy Load options are "all", "smart", "single" and "none" */
                lazyType: "smart",
                spinner: "spinner0",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 1000,
                    speedbg: 1500,
                    speedls: 1000,
                    levels: [3, 5, 8, 10, 12, 15, 35, 40, 45, 50, -50, -45, -40, -35, -30, -25],
                    ddd_shadow: "on",
                    ddd_bgfreeze: "off",
                    ddd_overflow: "hidden",
                    ddd_layer_overflow: "visible",
                    ddd_z_correction: 40,
                    disable_onmobile: 'on'
                },
                shadow: 0,
                shuffle: "off",
                autoHeight: "on",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "on",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }); /*ready*/
    </script>

    <script type="text/javascript" src="/landing/js/main.js"></script>
</body>

</html>
