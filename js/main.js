jQuery(function($) {
    $(document).ready(function() {
        /*$(".menu-header").hide();
        $(".hamburger").click(function() {
            if ($(".menu-header").is(":visible")) {
                $(".hamburger").removeClass("octicon-x").addClass("octicon-three-bars");
                $(".menu-header").toggle(300)
            } else {
                $(".hamburger").removeClass("octicon-three-bars").addClass("octicon-x");
                $(".menu-header").toggle(300)
            }
        });
        $(".menu-header").click(function() {
            if ($(".menu-header").is(":visible")) {
                $(".hamburger").removeClass("octicon-x").addClass("octicon-three-bars");
                $(".menu-header").toggle(300)
            } else {
                $(".hamburger").removeClass("octicon-three-bars").addClass("octicon-x");
                $(".menu-header").toggle(300)
            }
        });*/
        $(".comm-sample-container").each(function() {
            var imgSrc = $(this).children("a").attr("href");
            $("#main").append($("<div/>", {
                "class": "lemonlightbox hidden"
            }).append($("<div/>", {
                "class": "lemonwrapper"
            }).append($("<img/>", {
                "class": "lemonimg",
                "src": imgSrc
            })).append($("<span/>", {
                "class": "lemon-x mega-octicon octicon-x",
                "title": "close"
            })).append($("<a/>", {
                "href": imgSrc,
                "class": "lemon-link"
            }).append($("<span/>", {
                "class": "mega-octicon octicon-link",
                "title": "full size"
            })))));
            var screenW = window.innerWidth;
            var screenH = window.innerHeight;
            var imgW = $(".lemonwrapper").width();
            var imgH = $(".lemonwrapper").height();
            var halfWidth = imgW / 2;
            var halfHeight = imgH / 2;
            var padWidth = screenW - 80;
            var padHeight = screenH - 80;
            $(".lemonwrapper").css({
                "margin-left": "-" + halfWidth + "px",
                "margin-top": "-" + halfHeight + "px",
                "max-height": padHeight + "px"
            });
            $(".lemonimg").css({
                "max-height": padHeight + "px",
                "max-width": padWidth +
                    "px"
            })
        });
        $(".comm-sample-container").click(function() {
            event.preventDefault();
            var screenW = window.innerWidth;
            var screenH = window.innerHeight;
            var imgSrc = $(this).children("a").attr("href");
            var imgW = $(".lemonwrapper").width();
            var imgH = $(".lemonwrapper").height();
            var halfWidth = imgW / 2;
            var halfHeight = imgH / 2;
            var padWidth = screenW - 80;
            var padHeight = screenH - 80;
            $(".lemonwrapper").css({
                "margin-left": "-" + halfWidth + "px",
                "margin-top": "-" + halfHeight + "px",
                "max-height": padHeight + "px"
            });
            $(".lemonimg").css({
                "max-height": padHeight +
                    "px",
                "max-width": padWidth + "px"
            });
            $('.lemonimg[src|="' + imgSrc + '"]').parents(".lemonlightbox").removeClass("hidden").addClass("visible");
            $("#page-container").css({
                "-webkit-filter": "blur(5px)",
                "filter": "blur(5px)"
            });
            $("#header").css({
                "-webkit-filter": "blur(5px)",
                "filter": "blur(5px)"
            })
        });
        $(window).mousemove(function() {
            var screenW = window.innerWidth;
            var screenH = window.innerHeight;
            var imgW = $(".lemonlightbox.visible").find(".lemonimg").width();
            var imgH = $(".lemonlightbox.visible").find(".lemonimg").height();
            var halfWidth = imgW / 2;
            var halfHeight = imgH / 2;
            var padWidth = screenW - 80;
            var padHeight = screenH - 80;
            $(".lemonwrapper").css({
                "margin-left": "-" + halfWidth + "px",
                "margin-top": "-" + halfHeight + "px",
                "max-height": padHeight + "px"
            });
            $(".lemonimg").css({
                "max-height": padHeight + "px",
                "max-width": padWidth + "px"
            })
        });
        $(".lemonlightbox").click(function() {
            $(".lemonlightbox").removeClass("visible").addClass("hidden");
            $("#page-container").css({
                "-webkit-filter": "none",
                "filter": "none"
            });
            $("#header").css({
                "-webkit-filter": "none",
                "filter": "none"
            })
        });
        $(".lemon-x").click(function() {
            $(".lemonlightbox").removeClass("visible").addClass("hidden");
            $("#page-container").css({
                "-webkit-filter": "none",
                "filter": "none"
            });
            $("#header").css({
                "-webkit-filter": "none",
                "filter": "none"
            })
        })
    })
});