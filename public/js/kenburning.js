;(function ($, window, document, undefined) {
    'use strict';
    jQuery.fn.kenBurning = function(options) {
        var defaults = {
                time: 6000
            },
            settings = jQuery.extend(defaults, options),
            $container = jQuery(this),
            animation = "in";
        jQuery(function() {
            $container.addClass("kenburning-container");
            jQuery.fn.kenBurning.doIt();
            kenBurningplay = setInterval("jQuery.fn.kenBurning.doIt()", settings.time);

        });

        if(jQuery('.modern-slider-wrap').length){
            jQuery.fn.kenBurning.doIt = function() {
                var $active = $container.find(".item-mod.active");
                if ($active.length === 0) {
                    $active = $container.find(".item-mod:last");
                }
                var $next = $active.next().length ? $active.next() : $container.find(".item-mod:first");
                $active.addClass("last-active").removeClass("active").find('.img').removeClass('').css("transform","");
                if (animation === "in") {
                    $next.css({
                        left: "0",
                        right: "auto"
                    }).find('.img').addClass("").css("transform", "").parent('.item-mod').addClass("active");
                    setTimeout(function() {
                        $active.removeClass("last-active");
                    }, settings.time);
                    animation = "out";
                } else {
                    $next.css({
                        left: "auto",
                        right: "0"
                    }).find('.img').addClass("").css("transform", "").parent('.item-mod').addClass("active");
                    setTimeout(function() {
                        $active.removeClass("last-active");
                    }, settings.time);
                    animation = "in";
                }
            };




        }else if(jQuery('.kenburns-wrap').length){

            var number = jQuery('.kenburns-wrap').find(".item-ken").length;
            var count = 2;
            if ( number % 2 ) {
                count = 1;
            }

            jQuery.fn.kenBurning.doIt = function() {
                var $active = $container.find(".item-ken.active");
                if ($active.length === 0) {
                    $active = $container.find(".item-ken:last");
                }
                var $next = $active.next().length ? $active.next() : $container.find(".item-ken:first");

                $active.addClass("last-active").removeClass("active").find('.img').removeClass('zoomout zoomin').css("transform","");
                if (animation === "in") {
                    $next.css({
                        left: "0",
                        right: "auto"
                    }).find('.img').addClass("zoomin").css("transform", "scale(1.2)").parent('.item-ken').addClass("active");
                    setTimeout(function() {
                        $active.removeClass("last-active");
                        if( count === 1){
                            $active.find('.img').addClass("zoomout").removeClass("zoomin").css("transform", "scale(1)").parent('.item-ken');
                        }
                    }, settings.time);
                    animation = "out";
                } else {
                    $next.css({
                        left: "auto",
                        right: "0"
                    }).find('.img').addClass("zoomout").css("transform", "scale(1)").parent('.item-ken').addClass("active");
                    setTimeout(function() {
                        $active.removeClass("last-active")
                        if( count === 1){
                            $active.find('.img').addClass("zoomin").removeClass("zoomout").css("transform", "scale(1.2)").parent('.item-ken');
                        }
                    }, settings.time);
                    animation = "in";
                }
            };
        }


    };


    jQuery(".kenburns-wrap").each(function() {
        jQuery(this).on("click", function() {

            var time = $(this).find('.kenburns').attr('data-time') ? $(this).find('.kenburns').attr('data-time') : 6000;

            if (jQuery(this).find('.kenburns-play').hasClass("pause")) {
                clearInterval(kenBurningplay);
            } else {
                jQuery.fn.kenBurning.doIt();
                kenBurningplay = setInterval("jQuery.fn.kenBurning.doIt()", time );
            }
            jQuery(this).find('.kenburns-play').toggleClass("pause");
            jQuery(this).toggleClass("pause");
        });
    });
})(jQuery, window, document);