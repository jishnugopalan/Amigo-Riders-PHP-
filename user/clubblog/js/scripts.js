$(window).on("load", function () {
    "use strict";
    if ($.fn.exists = function () {
            return this.length > 0
        }, /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || $(window).width() < 769) var e = !0; else e = !1;
    var t = !!window.opr && !!opr.addons || !!window.opera || navigator.userAgent.indexOf(" OPR/") >= 0,
        i = "undefined" != typeof InstallTrigger,
        a = (/constructor/i.test(window.HTMLElement) || (!window.safari || safari.pushNotification).toString(), !!document.documentMode),
        o = (!a && window.StyleMedia, !!window.chrome && !!window.chrome.webstore), n = (o || t) && !!window.CSS,
        s = t || i || n || o;
    if (a && $("body").addClass("ie-browser"), !0 === e) {
        if ($("[data-stellar-background-ratio]").addClass("bg-scroll cover"), $(".bg-parallax").addClass("bg-parallax-mobiled"), $("#side-dotted-navigation").exists()) {
            var d = $("#side-dotted-navigation");
            $("body section:not(.nav-menu), div").on("touch touchstart", function () {
                $(d).addClass("spy")
            }), $(d).on("touch touchstart touchend", function () {
                $(d).removeClass("spy")
            }), $('#side-dotted-navigation:not(".spy")').on("touch", function () {
                $(d).addClass("spy")
            })
        }
        $(".hero-slider").height($(window).outerHeight())
    } else if ($("[data-stellar-background-ratio], [data-stellar-ratio]").not(".bg-normal").addClass("parallax"), s && $.stellar({
            horizontalScrolling: !1,
            verticalScrolling: !0,
            horizontalOffset: 0,
            verticalOffset: 0,
            responsive: !1,
            scrollProperty: "scroll",
            positionProperty: "transform",
            parallaxBackgrounds: !0,
            parallaxElements: !0,
            hideDistantElements: !1
        }), $("body").addClass("stable"), $(window).on("scroll", function () {
            $("body").hasClass("stable") && (setTimeout(function () {
                s && skrollr.init({forceHeight: !1}).refresh()
            }, 100), $(window).trigger("resize"), $("body").removeClass("stable"))
        }), $("#extranav").ready(function () {
            $(window).on("scroll", function () {
                !function () {
                    var e = $(window).scrollTop(), t = $("#extranav"), i = t.attr("data-showme"),
                        a = t.attr("data-hideme");
                    if ($(a).exists() && $(i).exists()) {
                        var o = $(i).offset().top, n = $(a).offset().top;
                        $(window).width() > 700 && (e >= o - 60 && e <= n - 60 ? $(t).slideDown(150).removeClass("hiding") : $(t).addClass("hiding").slideUp(150))
                    } else $(t).slideDown(150).removeClass("hiding").find("ul.nav").html("Extra Navigation is here! Please check the data-showme and data-hideme areas. This page does not have those links.")
                }()
            })
        }), $(".skrollr").exists()) skrollr.init({forceHeight: !1});
    (window.matchMedia && (window.matchMedia("only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)").matches || window.matchMedia("only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)").matches) || window.devicePixelRatio && window.devicePixelRatio > 1.3) && ($("body").addClass("retina-device"), $("[data-retina-image]").each(function () {
        $(this);
        var e = $(this).width(), t = $(this).attr("data-retina-image");
        $(this).attr("src", t).css({width: e + "px"})
    })), $(".retina-logo").exists() && $("body").addClass("has-retina-logo"), $.fn.getDeviceWidth = function () {
        $(window).width() > 1200 && $("body").not(".device-xl").removeClass("device-lg device-md device-sm device-xs device-xxs").addClass("device-xl"), $(window).width() > 992 && $(window).width() < 1200 && $("body").not(".device-lg").removeClass("device-xl device-lg device-md device-sm device-xs device-xxs").addClass("device-lg"), $(window).width() > 768 && $(window).width() < 992 && $("body").not(".device-md").removeClass("device-xl device-lg device-md device-sm device-xs device-xxs").addClass("device-md"), $(window).width() > 576 && $(window).width() < 768 && $("body").not(".device-sm").removeClass("device-xl device-lg device-md device-sm device-xs device-xxs").addClass("device-sm"), $(window).width() > 480 && $(window).width() < 576 && $("body").not(".device-xs").removeClass("device-xl device-lg device-md device-sm device-xs device-xxs").addClass("device-xs"), $(window).width() < 480 && $("body").not(".device-xxs").removeClass("device-xl device-lg device-md device-sm device-xs device-xxs").addClass("device-xxs")
    }, $("body").getDeviceWidth(), $(window).width() < 769 && $("[data-mobile-background]").each(function () {
        var e = $(this).data("mobile-background");
        $(this).addClass("bg-mobiled").css({
            "background-image": "url(" + e + ")",
            "background-size": "cover !important"
        })
    }), $("[data-original]").exists() && $("[data-original]").lazyload({
        threshold: 1e3, load: function () {
            !1 === e && s && $(window).data("plugin_stellar").refresh()
        }
    }), $(".video-trigger").exists() && $(".video-trigger").each(function () {
        var e = $(this).find("iframe"), t = $(this).find(".video-play-trigger"), i = $(e).data("src");
        $(t).on("click", function (t) {
            $(e).attr("src", i), t.preventDefault(), $(this).delay(200).fadeOut(500)
        })
    }), $(".qdr-alert-trigger").each(function () {
        var e, t = $(this), i = $(t).data("target");
        $(t).on("click", function () {
            clearTimeout(e), $(i).fadeOut(0).stop().clearQueue(), setTimeout(function () {
                $(i).fadeIn(300)
            }, 1), e = setTimeout(function () {
                $(i).fadeOut(300)
            }, 3e3)
        })
    }), $(".stay").on("click", function (e) {
        e.preventDefault()
    });
    var l = $.cookie($(".modal-check").attr("name")), r = $("#cookie-modal");
    if (l && "true" == l ? $(this).prop("checked", l) : $(r).modal("show"), $(".modal-check").change(function () {
            $.cookie($(this).attr("name"), $(this).prop("checked"), {path: "/", expires: 1})
        }), (null == $.cookie("no_thanks") && $("#cookie-alert").exists() || $("#cookie-modal").exists()) && ($.fn.show_modal = function () {
            $("#cookie-alert").modal({
                backdrop: "static",
                keyboard: !1
            }), $(".modal-backdrop.show:not(.fade)").removeClass("modal-backdrop"), $("body").addClass("cookie-alert-active")
        }, setTimeout(function () {
            $(window).show_modal()
        }, 3e3)), $.fn.closeCookieAlert = function () {
            $.cookie("no_thanks", "true", {
                expires: 1,
                path: "/"
            }), $("body").removeClass("cookie-alert-active"), $("#cookie-alert").hide()
        }, $("#cookie-alert .close").on("click", function () {
            $("body").closeCookieAlert()
        }), $(document).keyup(function (e) {
            27 == e.keyCode && $("body").closeCookieAlert()
        }), $(".qdr-hover").each(function () {
            var e = $(this).html();
            $(this).empty(), $(this).append("<span class='qdr-details'></span>"), $(this).find("span.qdr-details").html(e)
        }), $(".qdr-hover-3").each(function () {
            var e = $(this).html();
            $(this).empty(), $(this).append("<span class='qdr-details'></span>"), $(this).find("span.qdr-details").html(e)
        }), $(".boxes").addClass("clearfix"), $('[class*="qdr-col-"]').addClass("clearfix"), $("[data-color]").each(function () {
            var e = $(this).data("color");
            $(this).css({color: e})
        }), $("[data-bgcolor]").not(".tp-bgimg").not(".rev-slidebg").each(function () {
            var e = $(this).data("bgcolor");
            $(this).css({"background-color": e})
        }), $(".moving-container").exists() && (-1 != navigator.userAgent.indexOf("Safari") && -1 == navigator.userAgent.indexOf("Chrome") || $(".moving-container").each(function () {
            var e = $(this).find(".moving");
            $(this).hover3d({selector: e, shine: !1, perspective: 1500, sensitivity: 85, invert: !1})
        })), $(".styled-portfolio.parallax").exists() && $(window).width() > 630 && $(".styled-portfolio.parallax .cbp-item").each(function (e, t) {
            $(this).on("mouseenter", function (e) {
                var t = "", i = "", a = $(this);
                $(a).mousemove(function (e) {
                    "" == t && (t = e.pageX);
                    var o = e.pageX - t;
                    t = e.pageX, "" == i && (i = e.pageY);
                    var n = e.pageY - i;
                    i = e.pageY, $(a).find(".cbp-caption-defaultWrap").each(function (e, t) {
                        var i = (e + 1) * (.1 * o), a = (e + 1) * (.1 * n), s = $(t).position().left + i,
                            d = $(t).position().top + a;
                        $(t).find("img").css({"-webkit-transform": "translate(" + s + "px," + d + "px) scale(1.06)"})
                    })
                })
            }), $(this).on("mouseleave", function (e) {
                $(this).find("img").css({"-webkit-transform": "translate(0px,0px) scale(1.0)"})
            })
        }), $(".fitvids").exists() && $(".fitvids").fitVids(), $("[data-property]").exists() && $(".player").YTPlayer(), $(".timeline-container").exists() && $(".timeline-container").each(function () {
            var e = $(this);
            $(this).find(".dates div").each(function () {
                var t = $(this).data("event-id"), i = $(e).data("active-date");
                $(e).find("#" + i).addClass("active"), $(e).find('[data-event-id="' + i + '"]').addClass("active"), $(this).mouseenter(function () {
                    $(e).find("#" + i).removeClass("active"), $(e).find("#" + t).addClass("active"), $(e).find('[data-event-id="' + i + '"]').removeClass("active")
                }), $(this).mouseleave(function () {
                    $(e).find("#" + i).addClass("active"), $(e).find('[data-event-id="' + i + '"]').addClass("active"), $(e).find("#" + t).removeClass("active"), $(e).find("#" + i).addClass("active")
                })
            })
        }), $(".progress-bar").exists() && $(".progress-bar").each(function () {
            var e = $(this);
            $(e).waypoint(function () {
                var t = $(e).attr("data-value");
                $(e).animate({width: t + "%"}, 300), this.destroy()
            }, {offset: "100%"})
        }), $.fn.verticalPosition = function () {
            $(".vertical-center").each(function () {
                var e = $(this).height();
                $(this).css({"margin-top": -e / 2})
            })
        }, $("body").verticalPosition(), $('[data-toggle="tooltip"], .tooltip-item').each(function () {
            var e = $(this), t = $(e).parent();
            $(e).tooltip({html: !0, container: t})
        }), $(".active-me-with-click").each(function () {
            var e = $(this);
            $(window).on("click touchstart touch", function (t) {
                $(e).removeClass("active")
            }), $(e).on("click touch", function () {
                return $(e).toggleClass("active"), !1
            })
        }), $('[data-toggle="popover"]').each(function () {
            var e = $(this), t = $(e).parent();
            $(e).popover({html: !0, container: t})
        }), $("[data-infocard]").each(function () {
            var e, t = $(this), i = $(this).data("infocard");
            $(t).on("mouseenter", function () {
                $(i).addClass("active"), clearTimeout(e), $(".icon-navigation").addClass("passive")
            }), $(i).on("mouseenter", function () {
                $(i).addClass("active"), clearTimeout(e), $(".icon-navigation").addClass("passive")
            }), $(t).on("mouseleave", function () {
                e = setTimeout(function () {
                    $(i).removeClass("active"), $(".icon-navigation").removeClass("passive")
                }, 250)
            }), $(i).on("mouseleave", function () {
                e = setTimeout(function () {
                    $(i).removeClass("active"), $(".icon-navigation").removeClass("passive")
                }, 250)
            })
        }), $("[data-gradient-bg]").each(function () {
            var e = $(this).data("gradient-bg"), t = $(this).data("gradient-size");
            $(this).css({background: "linear-gradient(90deg," + e + ")", "background-size": t + "%" + t + "%"})
        }), $("#quadra_fixed_modal").exists() && ($.fn.qfmScript = function () {
            $("#quadra_fixed_modal:not(.hiding)").each(function () {
                var e = $(this), t = $(this).find(".quadra_fixed_modal_top"), i = $(this).find("#qfm_title"),
                    a = $(this).find("#qfm_button");
                $(".quadra_fixed_modal_top, .qfm-trigger").on("click", function () {
                    return e.toggleClass("active force-show"), $("body").toggleClass("qdr-modal-open"), t.delay(400).toggleClass("open_modal"), i.delay(100).fadeToggle(900), a.delay(100).fadeToggle(900), e.animate({scrollTop: 0}, "fast"), !1
                }), $(document).keyup(function (o) {
                    27 == o.keyCode && (e.removeClass("active force-show"), $("body").removeClass("qdr-modal-open"), t.delay(400).removeClass("open_modal"), i.delay(100).fadeOut(900), a.delay(100).fadeIn(900), e.animate({scrollTop: 0}, "fast"))
                }), window.onscroll = function () {
                    if (e.data("showme") && e.data("hideme")) {
                        var t = e.data("showme"), i = e.data("hideme"), a = $(window).outerHeight(),
                            o = $(t).offset().top, n = $(i).offset().top, s = $(this).scrollTop();
                        s >= o - a && s <= n - a ? (e.addClass("clickable"), $(".drop-msg, #back-to-top").addClass("qfm-time")) : (e.removeClass("clickable"), $(".drop-msg, #back-to-top").removeClass("qfm-time"))
                    }
                }
            })
        }, $(window).qfmScript()), $("#qfm_button span.hide-modal").on("click touch", function () {
            return $("#quadra_fixed_modal").removeClass(".active .clickable").addClass("hiding"), $("body").addClass("qfm-hiding"), $(".drop-msg, #back-to-top").removeClass("qfm-time").addClass("modal-hiding"), !1
        }), $(".sidebar").exists() && $(".sidebar").sidebar("attach events", ".sidebar-button", "show").sidebar("setting", "transition", "overlay"), $(window).on("click touchstart touch", function (e) {
            $(".quick-contact-form").fadeOut("fast").removeClass("active"), $("body").removeClass("quick-contact-form-active")
        }), $(".drop-msg, .quick-contact-form-trigger").on("click touch", function () {
            return $(".quick-contact-form").fadeToggle("fast").toggleClass("active"), $("body").toggleClass("quick-contact-form-active"), !1
        }), $(".quick-contact-form, .drop-msg, .quick-contact-form-trigger, #error_message").on("click touch touchstart", function (e) {
            (e = e || window.event).stopPropagation()
        }), $(".waypoint").exists() && $(".waypoint").each(function () {
            var e = $(this);
            $(e).waypoint(function () {
                $(e).addClass("waypoint-active")
            }, {offset: "75%"})
        }), $("footer.footer-fixed").exists()) {
        var c = $("footer.footer-fixed"), h = $(c).outerHeight();
        $('<div class="fullwidth bg-transparent footer-keeper" style="height:' + h + 'px;"></div> ').insertAfter(c), $("body").addClass("footer-fixed-page"), $(window).resize(function () {
            var e = $(c).outerHeight();
            $(".footer-keeper").height(e)
        })
    }
    $("button.dropdown-toggle + .dropdown-menu").each(function () {
        var e = "#" + $(this).attr("aria-labelledby"), t = $(this);
        $(t).find("li").on("click", function () {
            var t = $(e).children(), i = $(this).find("div").html();
            $(e).text(i).append(t)
        })
    }), $(".quantity").each(function () {
        var e = $(this).find(".minus"), t = $(this).find(".plus"), i = $(this).find(".numbers");
        $(t).on("click", function () {
            $(i).val(parseInt($(i).val(), 10) + 1)
        }), $(e).on("click", function () {
            $(i).val(parseInt($(i).val(), 10) - 1)
        })
    }), $("#type").exists() && $("#type").typed({
        stringsElement: $("#type-get"),
        typeSpeed: 10,
        backDelay: 800,
        loop: !0,
        contentType: "html",
        loopCount: !1,
        showCursor: !0,
        resetCallback: function () {
            newTyped()
        }
    }), $(".text-typer").exists() && $(".text-typer").each(function () {
        var e = $(this), t = $(e).data("delay"), i = $(e).data("speed");
        $(e).typed({
            stringsElement: $(e).find(".text-get"),
            typeSpeed: i,
            backDelay: t,
            loop: !0,
            contentType: "html",
            loopCount: !1,
            showCursor: !0,
            resetCallback: function () {
                newTyped()
            }
        })
    }), $(".text-rotator").exists() && $(".text-rotator").each(function () {
        var e = $(this).attr("data-animation"), t = $(this).attr("data-speed");
        $(this).Morphext({animation: e, separator: ",", speed: t})
    }), $(".twitter-feed").exists() && $(".twitter-feed").each(function () {
        var e = $(this), t = $(e).data("username"), i = $(e).data("count"), a = $(e).data("gap");
        $(e).html("Loading Tweets..."), $.getJSON("php/twitter.php?un=" + t + "&count=" + i, function (t) {
            $(e).empty();
            var i = [];
            if ($.each(t, function (e, t) {
                    i.push("<li id='" + e + "'><a href='https://twitter.com/goldeyes/status/" + t.id + "' target='_blank'><i class='fa fa-twitter'></i>" + t.text + "<span>Posted on " + t.date + "</span></a></li>")
                }), $("<ul/>", {
                    class: "twitter-list",
                    html: i.join("")
                }).appendTo(e), $(e).find("ul.twitter-list").addClass("gap-" + a), $(".twitter-feed").hasClass("slider")) {
                var o = $(".twitter-feed.slider");
                $(o).find("ul.twitter-list").addClass("twitter-slider circle-dots").slick({
                    dots: !0,
                    arrows: !1,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: !0
                })
            }
        })
    }), $(function () {
        var e, t, i, a;
        $(".click-effect").on("click", function (o) {
            0 === $(this).find(".ink").length && $(this).prepend("<span class='ink'></span>"), (e = $(this).find(".ink")).removeClass("clicked"), e.height() || e.width() || (t = Math.max($(this).outerWidth(), $(this).outerHeight()), e.css({
                height: t,
                width: t
            })), i = o.pageX - $(this).offset().left - e.width() / 2, a = o.pageY - $(this).offset().top - e.height() / 2, e.css({
                top: a + "px",
                left: i + "px"
            }).addClass("clicked")
        })
    }), $(".nav>li>a").addClass("nav-link"), $("body").scrollspy({
        target: ".nav-menu",
        offset: 200
    }), $("body").scrollspy({
        target: "menus",
        offset: 250
    }), $("#navigation.sticky").sticky({topSpacing: 0}), $("#navigation .dropdown-toggle").each(function () {
        $(this).on("mouseenter", function () {
            var e = $(this), t = $(e).find(">.dropdown-menu");
            $(t).show(0);
            var i = $("#navigation").offset().top, a = $("#navigation").height(), o = $(t).offset().top - i + a,
                n = ($(e).outerWidth(), $(t).height()), s = $(window).height(),
                d = $(window).width() - (t.offset().left + t.outerWidth()),
                l = $(window).width() - (e.offset().left + e.outerWidth()), r = $(window).height() - (o + t.height());
            d < 30 && ($(t).hasClass("mega-menu") && !$("#navigation").hasClass("side-menu") ? $(t).addClass("to-left").css({right: 20 - l + "px"}) : $(t).removeClass("to-right to-center").addClass("to-left")), r < 30 && ($(t).hasClass("mega-menu") || $("#navigation").hasClass("side-menu") || $(t).css({top: s - (o + n) - 50 + "px"})), $("#navigation .dropdown-toggle").not(this).not($(this).parents(".dropdown-toggle")).not($(this).find(".dropdown-toggle")).find(".dropdown-menu").stop(!0, !0).hide(0)
        }), $(this).on("mouseleave", function () {
            var e = $(this), t = $(e).find(">.dropdown-menu");
            $(this).parents(".dropdown-toggle").length ? $(t).hide(0) : $(t).stop(!0, !0).delay(600).hide(0)
        }), $("#navigation .nav>li:not(.dropdown-toggle)").on("mouseenter", function () {
            $("#navigation .nav>.dropdown-toggle>.dropdown-menu").stop(!0, !0).hide(0)
        })
    }), $("#navigation.side-menu .dropdown-toggle").each(function () {
        $(this).on("mouseenter", function () {
            var e = $(this), t = $(e).find(">.dropdown-menu"), i = $("#navigation").offset().top, a = t.offset().top,
                o = t.height(), n = $(window).height() - (a - i) - o;
            n < 0 && $(t).css({top: +n - 20 + "px"})
        })
    }), $(".to-center").each(function () {
        var e = $(this).outerWidth();
        $(window).width() > 1200 && $(this).css({left: -e / 2 + 40 + "px"})
    }), $("#navigation .item-note").exists() && $("#navigation .nav-menu .item-note").each(function () {
        $(this).closest("a").addClass("item-noted")
    }), $(".mega-menu").css({"max-width": $(window).width() - 40 + "px"}), $(window).resize(function () {
        $(".mega-menu").css({"max-width": $(window).width() - 40 + "px"})
    });
    var u = $("#navigation.modern.jump"), f = $("#navigation.modern.shrink");
    $(u).addClass("stability");
    var m = $("#navigation .logo img:not(.retina-logo)"), g = $(m).attr("src"), v = $(m).data("second-logo"),
        p = $("#navigation .logo img.retina-logo"), b = $(p).attr("src"), w = $(p).data("second-logo");
    $.fn.shrinkActive = function () {
        $(f).addClass("scrolled"), $(f).find(m).attr("src", v), $(f).find(p).attr("src", w)
    }, $.fn.shrinkDisable = function () {
        $(f).removeClass("scrolled"), $(f).find(m).attr("src", g), $(f).find(p).attr("src", b)
    }, $.fn.scrollUpNav = function () {
        u.removeClass("scrolled nav_up").addClass("stability").find(m).attr("src", g), $(u).find(p).attr("src", b)
    }, $.fn.scrollDownNav = function () {
        u.hasClass("stability") && (u.addClass("nav_up"), setTimeout(function () {
            u.addClass("scrolled")
        }, 0), setTimeout(function () {
            $(u).find(m).attr("src", v), $(u).find(p).attr("src", w)
        }, 100), setTimeout(function () {
            u.removeClass("nav_up stability")
        }, 200), $("#navigation.jump.pagetopped .logo img:not(.retina-logo)").attr("src", v), $("#navigation.jump.pagetopped .logo img.retina-logo").attr("src", w))
    }, $(window).on("scroll", function () {
        $("#navigation.jump.scrolled:not(.pagetopped)");
        if ($("#pagetop").exists()) {
            var e = 3 * $("#pagetop").height();
            $(this).scrollTop() > e ? $("#navigation").scrollDownNav() : $("#navigation").scrollUpNav(), $(this).scrollTop() > 3 * e ? $(u).addClass("show") : $(u).removeClass("show")
        } else $(window).scrollTop() > 100 ? $("#navigation").scrollDownNav() : $("#navigation").scrollUpNav();
        $(this).scrollTop() > 0 ? $(f).hasClass("scrolled") || $(f).shrinkActive() : $(f).hasClass("scrolled") && $(f).shrinkDisable(), $("#navigation-sticky-wrapper").exists() && ($("#navigation-sticky-wrapper").hasClass("is-sticky") && $(this).scrollTop() > 100 ? $(f).shrinkActive() : $(f).shrinkDisable())
    }), $('<div class="mobile-nb"><div class="hamburger-menu"><div class="top-bun"></div><div class="meat"></div><div class="bottom-bun"></div></div></div>').insertAfter("#navigation div.logo"), $(".mobile-nb").on("click", function () {
        setTimeout(function () {
            $("#mobile-navigation").addClass("active")
        }, 300), $("#mobile-navigation-closer").fadeIn()
    }), $('<div id="mobile-navigation" class="nav-menu"><div class="mb-close"></div><div class="nav-el"></div><div class="pagetop"></div></div>').insertAfter("#navigation");
    var x = $("#navigation .nav-menu, #punch-navigation").html(), k = $("#navigation .nav-elements").html(),
        y = $("#pagetop").html();
    if ($(x).insertBefore("#mobile-navigation .nav-el"), $("#mobile-navigation .nav-el").append(k), $("#pagetop").exists() && $("#mobile-navigation .pagetop").append(y), $("#mobile-navigation .search-form-trigger").exists() && $("#mobile-navigation .search-form-trigger").appendTo("#mobile-navigation .nav-el"), $("#navigation.side-menu .search").exists() && $("#mobile-navigation .nav-el").append('<a href="#" class="search-form-trigger"><i class="fa fa-search"></i></a>'), $("#navigation.side-menu .menu-bottom").exists()) {
        var C = $("#navigation.side-menu .menu-bottom").html();
        $("#mobile-navigation .pagetop").append(C)
    }
    var T = $("#navigation .logo img").attr("src");
    if ($.fn.changeMobileLogo = function () {
            if ($(window).width() < 1120) {
                var e = $("#navigation .logo img").attr("data-mobile-logo");
                void 0 !== e && !1 !== e && $("#navigation .logo img").attr("src", e)
            } else $("#navigation .logo img").attr("src", T)
        }, $(window).changeMobileLogo(), $('<div id="mobile-navigation-closer"></div><textarea id="math" style="display:none;"></textarea>').insertAfter("#mobile-navigation"), $("#mobile-navigation-closer, .search-form-trigger, .mb-close").on("click", function () {
            $("#mobile-navigation").removeClass("active"), setTimeout(function () {
                $("#mobile-navigation-closer").fadeOut()
            }, 300)
        }), $("#mobile-navigation li.dropdown-toggle > a").append("<i></i>"), $("#mobile-navigation .dropdown-toggle>a").not(".cart-item").on("click touch", function () {
            return $(this).toggleClass("showing").closest("li").find("> ul.dropdown-menu").slideToggle({
                duration: 300,
                easing: "easeInOutQuart"
            }), !1
        }), $(window).width() > 1120 && $("#pagetop").each(function () {
            var e = $(this).outerHeight();
            $("#navigation.modern").not(".sticky, .static").addClass("pagetopped").css("margin-top", e + "px")
        }), $("a[href^='#']:not([href='#']):not(.no-scroll):not([data-slide]):not([data-toggle])").on("click touch", function (e) {
            var t = $(this), i = $("#navigation").data("offset"), a = $(t).attr("href");
            e.preventDefault(), $(a).length && ($("#navigation").length ? $("html, body").stop().animate({scrollTop: $(t.attr("href")).offset().top - i + "px"}, 1150, "easeInOutExpo") : $("html, body").stop().animate({scrollTop: $(t.attr("href")).offset().top}, 900, "easeInOutExpo"))
        }), $("a[href='#top']").on("click", function () {
            $("html, body").stop().animate({scrollTop: 0}, 1400, "easeInOutExpo")
        }), $(".hide-by-scroll").exists() || $("#back-to-top").exists() || $(".hide-on-home").exists()) {
        $("#back-to-top, .hide-on-home").hide();
        var _ = $(window).scrollTop();
        $(window).on("scroll touchmove", function () {
            var e = $(window).scrollTop();
            e > _ - 1 && e > 700 ? $(".hide-by-scroll").addClass("hiding") : $(".hide-by-scroll").removeClass("hiding"), _ = e, $(window).scrollTop() + $(window).height() === $(document).height() && $(".hide-by-scroll").removeClass("hiding"), $(this).scrollTop() > 500 ? $("#back-to-top, .hide-on-home").fadeIn() : $("#back-to-top, .hide-on-home").fadeOut()
        })
    }
    if ($(".hide-by-click").on("click", function () {
            $(this).fadeOut("slow")
        }), $("#side-dotted-navigation").exists()) {
        d = $("#side-dotted-navigation");
        $(d).on("mouseenter", function () {
            $(this).removeClass("spy")
        }), $(d).on("mouseleave", function () {
            $(this).addClass("spy")
        }), $(d).on("click touch touchstart", function () {
            event = event || window.event, event.stopPropagation()
        })
    }
    if ($.fn.showPunchNavigation = function () {
            $("#punch-navigation").addClass("activated"), $("#punch-navigation .shadow").fadeIn(300), $("body").addClass("o-hidden"), $(".top-elements, .bottom-elements, div.navblock *").delay(950).fadeIn(300), $("body").calculateWidth()
        }, $.fn.hidePunchNavigation = function () {
            $(".top-elements, .bottom-elements, div.navblock>*").fadeOut(300), $("#punch-navigation .shadow").delay(1e3).fadeOut(300), setTimeout(function () {
                $("#punch-navigation").addClass("closing"), $("body").removeClass("o-hidden"), $("body").calculateWidth()
            }, 100), setTimeout(function () {
                $("#punch-navigation").removeClass("closing activated")
            }, 1400)
        }, $(".punch-navigation-trigger").on("click", function () {
            $("#punch-navigation").hasClass("activated") ? $("body").hidePunchNavigation() : $("body").showPunchNavigation(), $(window).width() < 1120 && (setTimeout(function () {
                $("#mobile-navigation").animate({left: "0px"}, 400, "easeOutSine")
            }, 300), $("#mobile-navigation-closer").fadeIn())
        }), $(document).keyup(function (e) {
            27 === e.keyCode && $("#punch-navigation").hasClass("activated") && $("body").hidePunchNavigation()
        }), $("#punch-navigation .navblock a").not(".nav-title, .nav-subtitle").on("click", function () {
            var e = this.getAttribute("href");
            return $("body").hidePunchNavigation(), setTimeout(function () {
                document.location.href = e
            }, 1500), !1
        }), $("#punch-navigation a.nav-title").on("click", function () {
            return !1
        }), $(".fs-searchform").exists()) {
        var S = $(".search-form-trigger"), q = $(".fs-searchform");
        $(S).on("click touch", function (e) {
            return $(q).addClass("active"), setTimeout(function () {
                $(".fs-searchform input").focus()
            }, 900), !1
        }), $(".form-bg").on("click", function () {
            $(".fs-searchform").removeClass("active")
        }), $(document).keyup(function (e) {
            27 === e.keyCode && $(".fs-searchform").removeClass("active")
        }), $(".fs-searchform a").on("click", function () {
            var e = this.getAttribute("href");
            return $(".fs-searchform").removeClass("active"), setTimeout(function () {
                document.location.href = e
            }, 500), !1
        })
    }
    var P = Math.floor(5 * Math.random()), O = Math.floor(5 * Math.random()), M = P + O;
    $("#math").html(M), $("#verify").attr("placeholder", P + "+" + O + "= ?");
    var H = $("#contact_form, .quick_form, #newsletter_form");
    $(H).each(function () {
        var e = $(this).find(":submit"), t = ($(this), window.setTimeout(3500));
        $(this).validate({
            ignore: ".ignore",
            rules: {
                verify: {equalTo: "#math"}, hiddenRecaptcha: {
                    required: function () {
                        return "" === grecaptcha.getResponse() ? ($(".g-recaptcha").addClass("error_warning"), !0) : ($(".g-recaptcha").removeClass("error_warning"), !1)
                    }
                }
            },
            onfocusout: !1,
            showErrors: function (e, i) {
                this.currentElements.removeClass("error_warning"), this.currentElements.closest(".border-effect").removeClass("error_warning"), $.each(i, function (e, i) {
                    window.clearTimeout(t), $(i.element).addClass("error_warning"), $(i.element).closest(".border-effect").addClass("error_warning"), $("div#error_message").fadeIn(300).clearQueue(), $("div#error_message").on("click", function () {
                        $(this).fadeOut("fast"), window.clearTimeout(t)
                    }), t = window.setTimeout(function () {
                        $("div#error_message").fadeOut("fast")
                    }, 3500)
                })
            },
            submitHandler: function (t) {
                $(e).not(".loading").addClass("loading").append("<span class='loader'></span>"), $.ajax({
                    url: t.action,
                    type: t.method,
                    data: new FormData($(t)[0]),
                    cache: !1,
                    contentType: !1,
                    processData: !1,
                    success: function () {
                        $("div#error_message").fadeOut("fast"), $("div#submit_message").fadeIn("fast"), $(H).find(".inputfile + label span").empty(), setTimeout(function () {
                            $("div#submit_message").fadeOut("fast")
                        }, 5e3), $(e).removeClass("loading"), $(H).trigger("reset")
                    }
                })
            }
        })
    });
    var I, A, W, z, E = $("form#newsletter_form"), D = $(E).find("button");
    $(E).validate({
        showErrors: function () {
            this.currentElements.removeClass("error_warning"), this.currentElements.closest(".border-effect").removeClass("error_warning")
        }, submitHandler: function () {
            $(D).not(".loading").addClass("loading").append("<span class='loader'></span>"), $.ajax({
                url: E.action,
                type: E.method,
                data: E.serialize(),
                cache: !1,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function () {
                    $("div#error_message").removeClass("active"), $("div#submit_message").addClass("active"), setTimeout(function () {
                        $("div#submit_message").removeClass("active")
                    }, 5e3), $(D).removeClass("loading"), $(E).trigger("reset")
                }
            })
        }
    }), $(".qdr-alert-trigger").each(function () {
        var e, t = $(this), i = $(t).data("target");
        $(t).on("click", function () {
            clearTimeout(e), $(i).fadeOut(0).stop().clearQueue(), setTimeout(function () {
                $(i).fadeIn(300)
            }, 1), e = setTimeout(function () {
                $(i).fadeOut(300)
            }, 3e3)
        })
    }), jQuery("span.border-effect").each(function () {
        var e = $(this);
        $(e).find("*").on("blur", function () {
            $(e).removeClass("active")
        }).on("focus", function () {
            $(e).addClass("active")
        })
    }), $.fn.callLightboxGallery = function () {
        $(".lightbox_gallery").lightGallery({
            selector: "a:not(.no-lightbox)",
            download: !0,
            speed: 400,
            loop: !0,
            controls: !0,
            thumbWidth: 100,
            thumbContHeight: 100,
            thumbMargin: 8,
            share: !0,
            cssEasing: "cubic-bezier(0.645, 0.045, 0.355, 1)",
            loadYoutubeThumbnail: !0,
            youtubeThumbSize: "default",
            iframeMaxWidth: "75%",
            loadVimeoThumbnail: !0,
            vimeoThumbSize: "thumbnail_medium",
            youtubePlayerParams: {modestbranding: 1, showinfo: 0, rel: 0, controls: 0},
            vimeoPlayerParams: {byline: 0, portrait: 0, color: "A90707"}
        }), $(".lightbox_gallery:not(.no-lightbox)").addClass("lightboxed")
    }, $(".lightbox_gallery").exists() && $(window).callLightboxGallery(), $.fn.callLightboxSelected = function () {
        $(".lightbox_selected").lightGallery({
            selector: "a.lightbox_item",
            download: !0,
            speed: 500,
            loop: !0,
            controls: !0,
            thumbWidth: 100,
            thumbContHeight: 100,
            thumbMargin: 8,
            share: !0,
            cssEasing: "cubic-bezier(0.645, 0.045, 0.355, 1)",
            loadYoutubeThumbnail: !0,
            youtubeThumbSize: "default",
            loadVimeoThumbnail: !0,
            iframeMaxWidth: "75%",
            vimeoThumbSize: "thumbnail_medium",
            youtubePlayerParams: {modestbranding: 1, showinfo: 0, rel: 0, controls: 0},
            vimeoPlayerParams: {byline: 0, portrait: 0, color: "A90707"}
        })
    }, $(".lightbox_selected").exists() && $(window).callLightboxSelected(), $.fn.callLightbox = function () {
        $(".lightbox").lightGallery({
            selector: "this",
            download: !0,
            thumbWidth: 100,
            thumbContHeight: 100,
            share: !0,
            loadYoutubeThumbnail: !0,
            youtubeThumbSize: "default",
            iframeMaxWidth: "75%",
            loadVimeoThumbnail: !0,
            youtubePlayerParams: {modestbranding: 1, showinfo: 0, rel: 0, controls: 0},
            vimeoPlayerParams: {byline: 0, portrait: 0, color: "A90707"}
        })
    }, $(".lightbox").exists() && $(window).callLightbox(), $(".slider-for").exists() && $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !0,
        touchThreshold: 150,
        fade: !0,
        asNavFor: ".slider-nav"
    }), $(".slider-nav").exists() && $(".slider-nav").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        touchThreshold: 150,
        dots: !1,
        arrows: !1,
        centerMode: !0,
        focusOnSelect: !0
    }), $(".news-slider").exists() && $(".news-slider").slick({
        dots: !1,
        arrows: !0,
        infinite: !0,
        touchThreshold: 150,
        fade: !0,
        slidesToShow: 1,
        prevArrow: '<button type="button" data-role="none" class="slick-prev qdr-hover" tabindex="0" role="button"></button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next qdr-hover" tabindex="0" role="button"></button>',
        slidesToScroll: 1
    }), $(".background-slider").exists() && ($(".background-slider").slick({
        dots: !1,
        arrows: !1,
        infinite: !0,
        autoplay: !0,
        touchThreshold: 150,
        fade: !0,
        slidesToShow: 1,
        slidesToScroll: 1
    }), $(".slider-next-trigger").on("click", function () {
        $(".background-slider").slick("slickNext")
    }), $(".slider-prev-trigger").on("click", function () {
        $(".background-slider").slick("slickPrev")
    })), $(".image-slider").exists() && $(".image-slider").slick({
        dots: !0,
        arrows: !0,
        infinite: !0,
        fade: !0,
        slidesToShow: 1,
        slidesToScroll: 1,
        touchThreshold: 20,
        adaptiveHeight: !0
    }).on("afterChange", function (e, t) {
        $(".custom-slider").slick("slickSetOption", "swipe", !0)
    }), $(".custom-slider").exists() && ($(".custom-slider").each(function () {
        var t = $(this);
        $(t).slick({
            fade: !1,
            dots: !1,
            arrows: !1,
            autoplay: !1,
            autoplaySpeed: 3e3,
            pauseOnHover: !0,
            lazyLoad: "ondemand",
            infinite: !0,
            rtl: !1,
            edgeFriction: 0,
            easing: "linear",
            touchThreshold: 150,
            speed: 400,
            slidesToShow: 3,
            initialSlide: 0,
            draggable: !1,
            adaptiveHeight: !0,
            variableWidth: !1,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" tabindex="0" role="button"></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" tabindex="0" role="button"></button>',
            centerMode: !1,
            slidesToScroll: 1,
            setPosition: 1,
            swipe: !0,
            touchMove: !0,
            responsive: [{breakpoint: 992, settings: {slidesToShow: 2, slidesToScroll: 1}}, {
                breakpoint: 600,
                settings: {slidesToShow: 1, slidesToScroll: 1}
            }]
        }).on("afterChange", function (e, i, a) {
            if ($(t).hasClass("hero-slider")) {
                $(".hero-slider .animated");
                var o = $(".hero-slider .slick-current .animated"),
                    n = $(".hero-slider .slick-slide:not(.slick-current) .animated");
                Waypoint.refreshAll(), $(o).each(function () {
                    var e = $(this), t = e.data("animation"), i = e.data("animation-delay");
                    setTimeout(function () {
                        e.addClass(t + " visibleme")
                    }, i)
                }), $(n).each(function () {
                    var e = $(this), t = e.data("animation");
                    e.removeClass(t + "visibleme")
                }), $(".slick-current video").each(function () {
                    this.play()
                }), $(".slick-slide:not(.slick-current) video").each(function () {
                    this.pause()
                }), $(t).find(".slick-slide.slick-current .slide-img .scale-timer").addClass("scaling")
            }
        }).on("beforeChange", function (i, a, o, n) {
            Waypoint.refreshAll(), $(l).removeClass("visible");
            var d = $(".hero-slider .slick-slide:not(.slick-current) .animated"), l = $(".hero-slider .animated");
            $(d).each(function () {
                var e = $(this), t = e.data("animation");
                e.data("animation-delay");
                $(e).removeClass(t + " visibleme")
            }), !1 === e && s && $(window).data("plugin_stellar").refresh(), $(t).find(".slick-slide:not(slick-current) .slide-img .scale-timer").removeClass("scaling")
        })
    }), $(".image-slider, .image-slider-navs, .image-slider-dots").on("touchstart touchmove touchend", function () {
        $(".custom-slider").slick("slickSetOption", "swipe", !1)
    }), $(".custom-slider").on("touchstart touchmove touchend", function () {
        $(".custom-slider").slick("slickSetOption", "swipe", !0)
    }), $(".slick-slider.calculate-height .slick-track").addClass("calculate-height"), $(window).resize(function () {
        $(".slick-slider.calculate-height .slick-track").addClass("calculate-height")
    })), $(".hero-slider").exists() && ($(".hero-slider .slick-slide:not(.slick-current) .animated").removeClass("visible"), $(".slick-slide.slick-current .slide-img .scale-timer").addClass("scaling"), $(".hero-slider .slick-current .animated").each(function () {
        var e = $(this), t = e.data("animation"), i = e.data("animation-delay");
        $(e).removeClass(t), setTimeout(function () {
            e.addClass(t + " visibleme")
        }, i)
    }), $(".hero-slider-next").on("click", function () {
        $(".hero-slider").slick("slickNext")
    }), $(".hero-slider-prev").on("click", function () {
        $(".hero-slider").slick("slickPrev")
    })), $(".nav-to-custom-slider").exists() && $(".nav-to-custom-slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: ".custom-slider",
        dots: !1,
        touchThreshold: 50,
        arrows: !1,
        centerMode: !1,
        focusOnSelect: !0
    }), $("[data-background-color-selector]").exists() && $("[data-background-color-selector]").each(function () {
        var e = $(this), t = $(e).attr("data-background-color-selector"),
            i = $("#home").attr("data-background-color-selector");
        e.waypoint(function (e) {
            "down" === e && ($(".bg-changeable").css({"background-color": "#" + t}), $(".changeable-border").css({"border-color": "#" + t}))
        }, {offset: "60%"}), e.waypoint(function (e) {
            "up" === e && ($(".bg-changeable").css({"background-color": "#" + t}), $(".changeable-border").css({"border-color": "#" + t}))
        }, {offset: "-90%"}), $(window).on("scroll", function () {
            $(window).scrollTop() < 10 && ($(".bg-changeable").css({"background-color": "#" + i}), $(".changeable-border").css({"border-color": "#" + i}))
        })
    }), $(".modal").each(function () {
        var e = $(this), t = $(this).find(".slick-slider");
        $(e).on("show.bs.modal", function (e) {
            setTimeout(function () {
                $(t).addClass("modal-active")
            }, 4e3), $(window).width() > 992 ? setTimeout(function () {
                $(t).slick("refresh")
            }, 300) : setTimeout(function () {
                $(t).resize()
            }, 400)
        }), $(e).on("hidden.bs.modal", function (e) {
            setTimeout(function () {
                $(t).removeClass("modal-active")
            }, 400)
        })
    }), $('.cbp-l-loadMore-button, [data-toggle]:not([data-toggle="popover"]), .cbp-filter-item, .cbp-l-loadMore-link').on("click", function () {
        setTimeout(function () {
            s && !1 === e && ($(window).data("plugin_stellar").refresh(), skrollr.init({forceHeight: !1}).refresh(), $(".icon-navigation").addClass("slow"));
            Waypoint.refreshAll()
        }, 500), setTimeout(function () {
            $(".icon-navigation").removeClass("slow")
        }, 1400)
    }), I = document.body, A = function () {
        $(".cbp-item:last-child").hasClass("cbp-item-loading") && ($(".lightbox_gallery").exists() && ($(".lightbox_gallery").data("lightGallery").destroy(!0), $(window).callLightboxGallery()), $(".lightbox_selected").exists() && ($(".lightbox_selected").data("lightGallery").destroy(!0), $(window).callLightboxSelected()), $(".lightbox").exists() && ($(".lightbox").data("lightGallery").destroy(!0), $(window).callLightbox()))
    }, z = I.clientHeight, function e() {
        W = I.clientHeight, z != W && A(), z = W, I.onElementHeightChangeTimer && clearTimeout(I.onElementHeightChangeTimer), I.onElementHeightChangeTimer = setTimeout(e, 200)
    }(), $(".slick-slider").on("beforeChange", function (e, t, i, a) {
        var o = $(this).find(".slick-current iframe");
        setTimeout(function () {
            o.attr("src", o.attr("src"))
        }, 1e3);
        $(this).data("slider-options")
    }), $(".team-type-2").exists() && ($.fn.team2Function = function () {
        $(".team-type-2 .member").each(function () {
            var e = $(this).find(".member-description"), t = $(this), i = $(e).height() / 2,
                a = $(this).find(".member-body").height() / 2;
            "ontouchstart" in window ? ($("div").not(t).on("touchstart touchmove", function (t) {
                $(e).css({top: 0})
            }), $("body").on("touchstart touchmove", function (t) {
                $(e).css({top: 0})
            }), t.on("touchstart touchend touchmove", function (t) {
                $(e).css({top: -a - i - 20})
            })) : ($(this).on("mouseover", function () {
                var e = $(this).find(".member-description"), t = $(e).height() / 2,
                    i = $(this).find(".member-body").height() / 2;
                $(e).css({top: -i - t - 20})
            }), $(this).on("mouseout", function () {
                $(e).css({top: 0})
            }))
        })
    }, $(".team-type-2").team2Function(), $(window).resize(function () {
        $(".team-type-2").team2Function()
    })), $.fn.calculateWidth = function () {
        $(".calculate-width").each(function () {
            $(this);
            var e = $(this).find("> *").not(".no-calculate").length, t = $(this).find("> *").not(".no-calculate"),
                i = $(this).width();
            $(this).addClass("clearfix"), $(t).addClass("width-calculated").css({width: i / e + "px"})
        })
    }, $("body").calculateWidth(), $(".interactive-packages").exists() && $(".interactive-packages .steps .step").each(function () {
        var e = $(".step").index(this) + 1, t = $(this), i = t.width(),
            a = $(".interactive-packages .steps").attr("data-startWith");
        $(".selector").css({right: i / 2 + "px"}), $(".interactive-packages .package_title span.title_selector").text($(a).data("name")), $(".interactive-packages .package-boxes .box1 span.box-title-selector").text($(a).data("box1")), $(".interactive-packages .package-boxes .box2 span.box-title-selector").text($(a).data("box2")), $(".interactive-packages .package-boxes .box3 span.box-title-selector").text($(a).data("box3")), $(".interactive-packages .package-boxes .box4 span.box-title-selector").text($(a).data("box4")), t.on("click", function () {
            var i = $(".steps .step").width();
            $(".interactive_bar").css({width: e * i + "px"}), $(".interactive-packages .title").removeClass("active"), $(".interactive-packages .title:nth-child(" + e + ")").addClass("active"), $(".interactive-packages .package_title span.title_selector").text(t.data("name")), $(".interactive-packages .package-boxes .box1 span.box-title-selector").text(t.data("box1")), $(".interactive-packages .package-boxes .box2 span.box-title-selector").text(t.data("box2")), $(".interactive-packages .package-boxes .box3 span.box-title-selector").text(t.data("box3")), $(".interactive-packages .package-boxes .box4 span.box-title-selector").text(t.data("box4"))
        })
    }), $(window).resize(function () {
        $("body").verticalPosition(), $("body").makeFullscreen(), $(".bodywidth").width($(window).width()), $("body").calculateWidth(), $("body").getDeviceWidth(), $("body").animatedItems(), s && !1 === e && $(window).data("plugin_stellar").refresh(), setTimeout(function () {
            $(".calculate-height").calculateHeight()
        }, 30), $(".mnh-full").css({"min-height": $(window).height() + "px"}), $(".height-full").css({height: $(window).height() + "px"}), $(".to-center").each(function () {
            var e = $(this).outerWidth();
            $(window).width() > 1200 && ($(this).css({left: -e / 2 + 40 + "px"}), $(".mega-menu").removeClass("mini-screen")), $(window).width() < 1200 && ($(this).css({left: -e / 3 + 150 + "px"}), $(".mega-menu").addClass("mini-screen"))
        }), $(window).width() > 1120 ? $("#pagetop").each(function () {
            var e = $(this).outerHeight();
            $("#navigation.modern").not(".sticky, .static").addClass("pagetopped").css("margin-top", e + "px")
        }) : $("#navigation.modern").not(".sticky, .static").css({"margin-top": 0}), $(window).width() < 769 ? $("[data-mobile-background]").each(function () {
            var e = $(this).data("mobile-background");
            $(this).css({"background-image": "url(" + e + ")", "background-size": "cover !important"})
        }) : $("[data-background]").each(function () {
            var e = $(this).data("background");
            $(this).removeClass("bg-mobiled").css({"background-image": "url(" + e + ")"})
        })
    });
    var N = $(".page-loader");
    setTimeout(function () {
        N.addClass("page-loader--fading-out")
    }, 100), setTimeout(function () {
        N.removeClass("page-loader--fading-out").addClass("page-loader--hidden")
    }, 600), s && $(window).on("beforeunload", function (e) {
        N.removeClass("page-loader--hidden").addClass("page-loader--fading-in")
    }), $('a[href^="mailto:"], a[href^="tel:"]').on("click", function () {
        setTimeout(function () {
            N.removeClass("page-loader--fading-out").addClass("page-loader--hidden")
        }, 50)
    }), $.fn.animatedItems = function () {
        $(window).width() > 1024 && !1 === e ? $(".animated").not(".hero-slider .animated").each(function () {
            var e = $(this), t = e.data("animation");
            $(e).waypoint(function () {
                if (!e.hasClass("visible")) {
                    var i = e.data("animation-delay");
                    i ? setTimeout(function () {
                        e.addClass(t + " visible")
                    }, i) : e.addClass(t + " visible")
                }
            }, {offset: "90%"})
        }) : $(".animated").not(".hero-slider .animated").addClass("visible")
    }, $("body").animatedItems(), $(".bg-animated, .bg-animated-reverse, .bg-animated-vertical").each(function () {
        $("<div class='bg-animator'></div>").appendTo(this)
    }), $.fn.calculateHeight = function () {
        $(".calculate-height").each(function () {
            var e = -1;
            $(this).find(">*").css({height: "auto"}).each(function () {
                $(this).outerHeight() > e && (e = $(this).outerHeight())
            }), $(this).find(">*").outerHeight(e)
        })
    }, $(".calculate-height").calculateHeight(), $(".sticky-item").exists() && $(".sticky-item").each(function () {
        var e = $(this).data("top-spacing");
        $(this).sticky({topSpacing: e})
    }), $(".sticky-container").exists() && $(".sticky-container").each(function () {
        var e = $(this), t = $(e).width(), i = $(e).offset().top, a = $(e).data("fix-container"), o = $(a).offset().top,
            n = $(a).height() - $(e).height(), s = $(e).data("top-spacing"), d = o + $(a).outerHeight() - $(e).height();
        $(window).on("scroll", function () {
            $.fn.makeSticky = function () {
                var a = $(window).scrollTop() + s;
                a < i && $(e).css({
                    top: "0px",
                    position: "absolute",
                    "max-width": t + "px"
                }).addClass("before-cont").removeClass("on-cont after-cont"), a > i && $(e).css({
                    top: s + "px",
                    position: "fixed",
                    "max-width": t + "px"
                }).addClass("on-cont").removeClass("before-cont after-cont"), a > d && $(e).css({
                    top: n + "px",
                    position: "absolute",
                    "max-width": t + "px"
                }).addClass("after-cont").removeClass("before-cont on-cont")
            }, $(a).has(e) && $(window).width() > 1e3 && $(e).makeSticky()
        })
    }), $("[data-ajax-load]").exists() && $("[data-ajax-load]").each(function () {
        var e = $(this).data("ajax-load"), t = $(this);
        $(this).empty().load(e, function () {
            $(t).hasClass("ajax-slider") && $(this).find(".custom-slider").slick()
        })
    }), s && !1 === e && setTimeout(function () {
        $(window).data("plugin_stellar").refresh()
    }, 100)
}), $("[data-background]").not(".bg-mobiled").each(function () {
    var e = $(this).data("background"), t = $(this);
    $(this).css({"background-image": "url(" + e + ")"}), $(t).ready(function () {
        setTimeout(function () {
            $(t).addClass("loaded")
        }, 50)
    })
}), $("body").has("#navigation.side-menu.left").addClass("left-side-menu-active"), $("body").has("#navigation.side-menu.right").addClass("right-side-menu-active"), $("body").has("#navigation.mini-side-menu.left").addClass("left-mini-side-menu-active"), $("body").has("#navigation.mini-side-menu.right").addClass("right-mini-side-menu-active"), $(".bg-parallax").each(function () {
    var e = $(this);
    $(e).closest("section, .parallax-container").addClass("o-hidden relative z-index-1")
}), $.fn.makeFullscreen = function () {
    $("body").has("#navigation.side-menu") || $("body").has("#mini-side-menu") ? $(".fullscreen").width($("#content").width()).height($(window).height()) : $(".fullscreen").width($(window).width()).height($(window).height())
}, $("body").makeFullscreen(), $(".bodywidth").width($(window).width()), $(".mnh-full").css({"min-height": $(window).height() + "px"}), $(".height-full").css({height: $(window).height() + "px"}), $.fn.countTo = function (e) {
    e = $.extend({}, $.fn.countTo.defaults, e || {});
    var t = Math.ceil(e.speed / e.refreshInterval), i = (e.to - e.from) / t;
    return $(this).each(function () {
        var a = this, o = 0, n = e.from, s = setInterval(function () {
            n += i, o++, $(a).html(n.toFixed(e.decimals).replace(/\B(?=(\d{3})+(?!\d))/g, ".")), "function" == typeof e.onUpdate && e.onUpdate.call(a, n);
            o >= t && (clearInterval(s), n = e.to, "function" == typeof e.onComplete && e.onComplete.call(a, n))
        }, e.refreshInterval)
    })
}, $.fn.countTo.defaults = {
    from: 0,
    to: 100,
    speed: 1e3,
    refreshInterval: 100,
    decimals: 0,
    onUpdate: null,
    onComplete: null
}, $(".fact").each(function () {
    $(this).waypoint(function () {
        dataSource = $(this.element).attr("data-source"), $(this.element).find(".factor").countTo({
            from: 0,
            to: dataSource,
            speed: 2e3,
            refreshInterval: 25
        }), this.destroy()
    }, {offset: "100%"})
}), $.fn.digits = function () {
    return this.each(function () {
        $(this).text($(this).text().replace(/\B(?=(\d{3})+(?!\d))/g, "."))
    })
}, $(".digits").digits(), $(".countdown").length > 0 && $(".countdown").each(function () {
    var e = $(this);
    !function (t) {
        var i, a = new Date(t), o = 1e3, n = 60 * o, s = 60 * n, d = 24 * s, l = 365 * d;
        $(e);

        function r() {
            var t = new Date, r = a - t;
            if (r < 0) return clearInterval(i), void $(e).html("EXPIRED");
            var c = Math.floor(r / l), h = Math.floor(r % l / d), u = Math.floor(r % d / s), f = Math.floor(r % s / n),
                m = Math.floor(r % n / o);
            String(u).length < 2 && (u = 0 + String(u)), String(f).length < 2 && (f = 0 + String(f)), String(m).length < 2 && (m = 0 + String(m));
            var g = '<div class="countdowns"><div><span class="time">' + c + '</span><span class="datename"> years</span></div><span class="dot">:</span><div><span class="time">' + h + '</span><span class="datename"> days </span></div><span class="dot">:</span><div><span class="time">' + u + '</span><span class="datename"> hours </span></div><span class="dot">:</span><div><span class="time">' + f + '</span><span class="datename"> minutes </span></div><span class="dot">:</span><div><span class="time">' + m + '</span><span class="datename"> seconds </span></div></div>';
            $(e).html(g)
        }

        r(), i = setInterval(r, 1e3)
    }($(this).attr("data-time"))
});