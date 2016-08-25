(function ( $ ) {
            "use strict";

            $(function () {
                var masterslider_d1da = new MasterSlider();

                // slider controls

                // slider setup
                masterslider_d1da.setup("slider_1", {
                    width           : 1000,
                    height          : 500,
                    space           : 0,
                    start           : 1,
                    grabCursor      : true,
                    swipe           : true,
                    mouse           : true,
                    layout          : "fullscreen",
                    wheel           : false,
                    autoplay        : true,
                    instantStartLayers:false,
                    loop            : true,
                    shuffle         : false,
                    preload         : 2,
                    heightLimit     : true,
                    autoHeight      : false,
                    smoothHeight    : true,
                    endPause        : false,
                    overPause       : true,
                    fillMode        : "fill",
                    centerControls  : true,
                    layersMode      : "center",
                    hideLayers      : false,
                    fullscreenMargin: 0,
                    speed           : 20,
                    dir             : "h",
                    parallaxMode    : 'swipe',
                    view            : "basic"
                });

                window.masterslider_instances = window.masterslider_instances || {};
                window.masterslider_instances["5_d1da"] = masterslider_d1da;
            });

        })(jQuery);