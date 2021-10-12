<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>MYHOUSE SA</title>
    <meta name='robots' content='max-image-preview:large' />
    <script type='text/javascript'>
        console.log('PixelYourSite Free version 8.0.2');
    </script>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="SENEGINDIA SA &raquo; Flux" href="https://senegindia.sn/feed/" />
    <link rel="alternate" type="application/rss+xml" title="SENEGINDIA SA &raquo; Flux des commentaires" href="https://senegindia.sn/comments/feed/" />
    <!-- This site uses the Google Analytics by MonsterInsights plugin v7.15.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <script src="//www.googletagmanager.com/gtag/js?id=UA-169907576-1" type="text/javascript" data-cfasync="false"></script>
    <script type="text/javascript" data-cfasync="false">
        var mi_version = '7.15.0';
        var mi_track_user = true;
        var mi_no_track_reason = '';

        var disableStr = 'ga-disable-UA-169907576-1';

        /* Function to detect opted out users */
        function __gtagTrackerIsOptedOut() {
            return document.cookie.indexOf(disableStr + '=true') > -1;
        }

        /* Disable tracking if the opt-out cookie exists. */
        if (__gtagTrackerIsOptedOut()) {
            window[disableStr] = true;
        }

        /* Opt-out function */
        function __gtagTrackerOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
        }

        if ('undefined' === typeof gaOptout) {
            function gaOptout() {
                __gtagTrackerOptout();
            }
        }
        window.dataLayer = window.dataLayer || [];
        if (mi_track_user) {
            function __gtagTracker() {
                dataLayer.push(arguments);
            }
            __gtagTracker('js', new Date());
            __gtagTracker('set', {
                'developer_id.dZGIzZG': true,
            });
            __gtagTracker('config', 'UA-169907576-1', {
                forceSSL: true,
                link_attribution: true,
            });
            window.gtag = __gtagTracker;
            (
                function() {
                    /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                    /* ga and __gaTracker compatibility shim. */
                    var noopfn = function() {
                        return null;
                    };
                    var noopnullfn = function() {
                        return null;
                    };
                    var Tracker = function() {
                        return null;
                    };
                    var p = Tracker.prototype;
                    p.get = noopfn;
                    p.set = noopfn;
                    p.send = noopfn;
                    var __gaTracker = function() {
                        var len = arguments.length;
                        if (len === 0) {
                            return;
                        }
                        var f = arguments[len - 1];
                        if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                            if ('send' === arguments[0]) {
                                if ('event' === arguments[1]) {
                                    __gtagTracker('event', arguments[3], {
                                        'event_category': arguments[2],
                                        'event_label': arguments[4],
                                        'value': 1
                                    });
                                    return;
                                }
                                if ('undefined' !== typeof(arguments[1].hitType)) {
                                    var hitDetails = {};
                                    var gagtag_map = {
                                        'eventCategory': 'event_category',
                                        'eventAction': 'event_action',
                                        'eventLabel': 'event_label',
                                        'eventValue': 'event_value',
                                        'nonInteraction': 'non_interaction',
                                        'timingCategory': 'event_category',
                                        'timingVar': 'name',
                                        'timingValue': 'value',
                                        'timingLabel': 'event_label',
                                    };
                                    var gaKey;
                                    for (gaKey in gagtag_map) {
                                        if ('undefined' !== typeof arguments[1][gaKey]) {
                                            hitDetails[gagtag_map[gaKey]] = arguments[1][gaKey];
                                        }
                                    }
                                    var action = 'timing' === arguments[1].hitType ? 'timing_complete' : arguments[1].eventAction;
                                    __gtagTracker('event', action, hitDetails);
                                }
                            }
                            return;
                        }
                        try {
                            f.hitCallback();
                        } catch (ex) {}
                    };
                    __gaTracker.create = function() {
                        return new Tracker();
                    };
                    __gaTracker.getByName = noopnullfn;
                    __gaTracker.getAll = function() {
                        return [];
                    };
                    __gaTracker.remove = noopfn;
                    __gaTracker.loaded = true;
                    window['__gaTracker'] = __gaTracker;
                }
            )();
        } else {
            console.log("");
            (function() {
                function __gtagTracker() {
                    return null;
                }
                window['__gtagTracker'] = __gtagTracker;
                window['gtag'] = __gtagTracker;
            })();
        }
    </script>
    <!-- / Google Analytics by MonsterInsights -->
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/senegindia.sn\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.2"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='dce-animations-css' href='https://senegindia.sn/wp-content/plugins/dynamic-content-for-elementor/assets/css/dce-animations.css?ver=1.12.1' type='text/css' media='all' />
    <link rel='stylesheet' id='sydney-bootstrap-css' href='https://senegindia.sn/wp-content/themes/sydney/css/bootstrap/bootstrap.min.css?ver=1' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='https://senegindia.sn/wp-includes/css/dist/block-library/style.min.css?ver=5.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='three-preview-css' href='https://senegindia.sn/wp-content/plugins/3r-elementor-timeline-widget/assets/css/style.css?ver=5.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='exad-main-style-css' href='https://senegindia.sn/wp-content/plugins/exclusive-team-for-elementor/assets/css/exad-style.css?ver=5.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='spacexchimp_p008-font-awesome-css-frontend-css' href='https://senegindia.sn/wp-content/plugins/simple-scroll-to-top-button/inc/lib/font-awesome/css/font-awesome.css?ver=4.42' type='text/css' media='screen' />
    <link rel='stylesheet' id='spacexchimp_p008-frontend-css-css' href='https://senegindia.sn/wp-content/plugins/simple-scroll-to-top-button/inc/css/frontend.css?ver=4.42' type='text/css' media='all' />
    <style id='spacexchimp_p008-frontend-css-inline-css' type='text/css'>
        #ssttbutton {
            font-size: 20px;
        }

        .ssttbutton-background {
            color: #fff;
        }

        .ssttbutton-symbol {
            color: rgb(181 23 0);
        }
    </style>
    <link rel='stylesheet' id='monsterinsights-popular-posts-style-css' href='https://senegindia.sn/wp-content/plugins/google-analytics-premium/assets/css/frontend.min.css?ver=7.15.0' type='text/css' media='all' />
    <link rel='stylesheet' id='hfe-style-css' href='https://senegindia.sn/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.5.8' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.9.1' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-animations-css' href='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.0.15' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css' href='https://senegindia.sn/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.0.15' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='https://senegindia.sn/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.0.15' type='text/css' media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-kit-14503 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-color-3449e0e2: #4054B2;
            --e-global-color-1a843a1e: #23A455;
            --e-global-color-bfc3e6b: #000;
            --e-global-color-5a4926bf: #FFF;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1025px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 768px;
            }
        }

        .elementor-10082 .elementor-element.elementor-element-552d6b8>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-552d6b8 {
            box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .elementor-10082 .elementor-element.elementor-element-cd89659>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-bf57104>.elementor-container {
            max-width: 1200px;
        }

        .elementor-10082 .elementor-element.elementor-element-bf57104:not(.elementor-motion-effects-element-type-background),
        .elementor-10082 .elementor-element.elementor-element-bf57104>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-bf57104 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 12px 0px 12px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-bf57104>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-e56e592.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-e56e592.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-e56e592>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-icon i {
            color: #ffffff;
            font-size: 16px;
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-icon svg {
            fill: #ffffff;
            width: 16px;
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-text {
            color: #ffffff;
            padding-left: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-item,
        .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-item a {
            font-family: "Lato", Sans-serif;
            font-size: 13px;
            font-weight: 300;
        }

        .elementor-10082 .elementor-element.elementor-element-81c4f9b>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-1b3d3ef.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-1b3d3ef.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-1b3d3ef>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-c7aed0b {
            text-align: right;
        }

        .elementor-10082 .elementor-element.elementor-element-c7aed0b .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 15px;
            font-weight: 400;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-31dae3d.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-31dae3d.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-31dae3d>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(15px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(15px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(15px/2);
            margin-left: calc(15px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-15px/2);
            margin-left: calc(-15px/2);
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-15px/2);
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-15px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-icon i {
            color: #ffffff;
            font-size: 14px;
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-icon svg {
            fill: #ffffff;
            width: 14px;
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-item:hover .elementor-icon-list-icon i {
            color: #000000;
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-item:hover .elementor-icon-list-icon svg {
            fill: #000000;
        }

        .elementor-10082 .elementor-element.elementor-element-9a9238d .elementor-icon-list-icon {
            text-align: left;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-e5fafa9.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-e5fafa9.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-e5fafa9>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-4edd546 {
            text-align: justify;
        }

        .elementor-10082 .elementor-element.elementor-element-4edd546 .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 14px;
            font-weight: 500;
        }

        .elementor-10082 .elementor-element.elementor-element-4194d3d>.elementor-container {
            max-width: 1200px;
        }

        .elementor-10082 .elementor-element.elementor-element-4194d3d:not(.elementor-motion-effects-element-type-background),
        .elementor-10082 .elementor-element.elementor-element-4194d3d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-4194d3d {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 5px 0px 5px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-4194d3d>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-e6bd1bd.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-e6bd1bd.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-e6bd1bd>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-0f6e615 {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-0f6e615 .elementor-image img {
            width: 100%;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-7a1ab92.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-7a1ab92.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-7a1ab92>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-menu-toggle {
            margin-left: auto;
        }

        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu .elementor-item {
            font-family: "Lato", Sans-serif;
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu--main .elementor-item {
            color: #000000;
            padding-left: 19px;
            padding-right: 19px;
            padding-top: 18px;
            padding-bottom: 18px;
        }

        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu--main .elementor-item:hover,
        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu--main .elementor-item.elementor-item-active,
        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu--main .elementor-item.highlighted,
        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu--main .elementor-item:focus {
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
        .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-29764cb .e--pointer-framed .elementor-item:before,
        .elementor-10082 .elementor-element.elementor-element-29764cb .e--pointer-framed .elementor-item:after {
            border-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-29764cb div.elementor-menu-toggle {
            color: #ffffff;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-6f2bc47.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-6f2bc47.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-6f2bc47.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-10082 .elementor-element.elementor-element-3f5f0b9 .elementor-button .elementor-align-icon-right {
            margin-left: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f5f0b9 .elementor-button .elementor-align-icon-left {
            margin-right: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f5f0b9 .elementor-button {
            font-family: "Lato", Sans-serif;
            font-size: 13px;
            font-weight: 400;
            text-transform: capitalize;
            fill: #ffffff;
            color: #ffffff;
            background-color: #000000;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f5f0b9 .elementor-button:hover,
        .elementor-10082 .elementor-element.elementor-element-3f5f0b9 .elementor-button:focus {
            color: #b51700;
            background-color: #e0e0e0;
        }

        .elementor-10082 .elementor-element.elementor-element-3f5f0b9 .elementor-button:hover svg,
        .elementor-10082 .elementor-element.elementor-element-3f5f0b9 .elementor-button:focus svg {
            fill: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-3f5f0b9>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-ea44619.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-ea44619.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-ea44619>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-e385c66 .elementor-button .elementor-align-icon-right {
            margin-left: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-e385c66 .elementor-button .elementor-align-icon-left {
            margin-right: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-e385c66 .elementor-button {
            font-family: "Montserrat", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            fill: #ffffff;
            color: #ffffff;
            background-color: #b51700;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-e385c66 .elementor-button:hover,
        .elementor-10082 .elementor-element.elementor-element-e385c66 .elementor-button:focus {
            color: #b51700;
            background-color: #e0e0e0;
        }

        .elementor-10082 .elementor-element.elementor-element-e385c66 .elementor-button:hover svg,
        .elementor-10082 .elementor-element.elementor-element-e385c66 .elementor-button:focus svg {
            fill: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-33746ee1>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: flex-end;
            align-items: flex-end;
        }

        .elementor-10082 .elementor-element.elementor-element-33746ee1>.elementor-background-overlay {
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-33746ee1 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-d19fffa.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-d19fffa.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-d19fffa>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 0% 0% 0% 0%;
        }

        .elementor-10082 .elementor-element.elementor-element-d19fffa>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-5d034b40.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-5d034b40.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-5d034b40.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-10082 .elementor-element.elementor-element-5d034b40>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-5d034b40:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-5d034b40>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-5d034b40>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 38px 38px 38px 38px;
        }

        .elementor-10082 .elementor-element.elementor-element-5d034b40>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-534c9908 .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 40px;
        }

        .elementor-10082 .elementor-element.elementor-element-534c9908>.elementor-widget-container {
            margin: 20px 0px 010px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-496b06d1 .elementor-text-editor {
            text-align: justify;
        }

        .elementor-10082 .elementor-element.elementor-element-496b06d1 {
            color: #e0e6ec;
            font-family: "Lato", Sans-serif;
            font-size: 15px;
            font-weight: 300;
            line-height: 1.2em;
        }

        .elementor-10082 .elementor-element.elementor-element-496b06d1>.elementor-widget-container {
            padding: 5px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-495b219b.elementor-column .elementor-column-wrap {
            align-items: flex-start;
        }

        .elementor-10082 .elementor-element.elementor-element-495b219b.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: flex-start;
            align-items: flex-start;
        }

        .elementor-10082 .elementor-element.elementor-element-495b219b.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-10082 .elementor-element.elementor-element-f429a3b .elementor-spacer-inner {
            height: 125px;
        }

        .elementor-10082 .elementor-element.elementor-element-21c593d4>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-21c593d4 {
            margin-top: 23px;
            margin-bottom: 23px;
            padding: 50px 0px 100px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-237299d0>.elementor-element-populated {
            padding: 0px 60px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-425be02b {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-425be02b .elementor-heading-title {
            color: #b51700;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-425be02b>.elementor-widget-container {
            padding: 0px 0px 0px 12px;
        }

        .elementor-10082 .elementor-element.elementor-element-5877131f .elementor-text-editor {
            text-align: justify;
        }

        .elementor-10082 .elementor-element.elementor-element-5877131f {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.3em;
        }

        .elementor-10082 .elementor-element.elementor-element-5877131f>.elementor-widget-container {
            margin: 23px 0px 0px 0px;
            padding: 0px 0px 0px 012px;
        }

        .elementor-10082 .elementor-element.elementor-element-8244ea8>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-8244ea8 {
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-41e717c1>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-41e717c1>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-4b8ee834 .elementor-button {
            font-family: "Lato", Sans-serif;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            fill: #ffffff;
            color: #ffffff;
            background-color: #b51700;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #b51700;
            border-radius: 0px 0px 0px 0px;
            padding: 15px 45px 15px 45px;
        }

        .elementor-10082 .elementor-element.elementor-element-4b8ee834>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-682aabb6>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-55554550 .elementor-button {
            font-family: "Lato", Sans-serif;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            fill: #ffffff;
            color: #ffffff;
            background-color: #000000;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #000000;
            border-radius: 0px 0px 0px 0px;
            padding: 15px 45px 15px 45px;
        }

        .elementor-10082 .elementor-element.elementor-element-64fd2975>.elementor-element-populated {
            padding: 20px 20px 20px 20px;
        }

        .elementor-10082 .elementor-element.elementor-element-528453a9 .elementor-main-swiper {
            height: 500px;
        }

        .elementor-10082 .elementor-element.elementor-element-528453a9.elementor-skin-slideshow .elementor-main-swiper {
            margin-bottom: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-528453a9 .elementor-swiper-button {
            font-size: 20px;
        }

        .elementor-10082 .elementor-element.elementor-element-73b23fd0>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-73b23fd0 {
            padding: 0px 25px 0px 25px;
        }

        .elementor-10082 .elementor-element.elementor-element-3e5defe3:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-3e5defe3>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/slide-svcity-pool-night-1.jpg");
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-3e5defe3>.elementor-element-populated>.elementor-background-overlay {
            background-color: rgba(0, 0, 0, 0.65);
            opacity: 0.5;
        }

        .elementor-10082 .elementor-element.elementor-element-3e5defe3:hover>.elementor-element-populated>.elementor-background-overlay {
            background-color: #000000;
            opacity: 0.75;
        }

        .elementor-10082 .elementor-element.elementor-element-3e5defe3>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 5px 5px 5px 5px;
            padding: 40% 20% 40% 20%;
        }

        .elementor-10082 .elementor-element.elementor-element-3e5defe3>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-40c5b2e6 {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-40c5b2e6 .elementor-heading-title {
            color: #ffffff;
            font-family: "Roboto Condensed", Sans-serif;
            font-size: 40px;
            font-weight: 600;
            letter-spacing: 1.5px;
        }

        .elementor-10082 .elementor-element.elementor-element-41840728 .elementor-text-editor {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-41840728 {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 19px;
            font-weight: 400;
            line-height: 1em;
            letter-spacing: 0.8px;
        }

        .elementor-10082 .elementor-element.elementor-element-41840728>.elementor-widget-container {
            margin: 30px 0px 0px 0px;
            padding: 0% 0% 1% 0%;
        }

        .elementor-10082 .elementor-element.elementor-element-5214a676 .elementor-button {
            font-family: "Roboto Condensed", Sans-serif;
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            background-color: #b51700;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-5214a676 .elementor-button:hover,
        .elementor-10082 .elementor-element.elementor-element-5214a676 .elementor-button:focus {
            background-color: #000000;
        }

        .elementor-10082 .elementor-element.elementor-element-88153e6:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-88153e6>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.13.04.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-88153e6>.elementor-element-populated>.elementor-background-overlay {
            background-color: rgba(0, 0, 0, 0.47);
            opacity: 0.5;
        }

        .elementor-10082 .elementor-element.elementor-element-88153e6:hover>.elementor-element-populated>.elementor-background-overlay {
            background-color: #000000;
            opacity: 0.75;
        }

        .elementor-10082 .elementor-element.elementor-element-88153e6>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 5px 5px 5px 5px;
            padding: 40% 20% 40% 20%;
        }

        .elementor-10082 .elementor-element.elementor-element-88153e6>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-19401c77 {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-19401c77 .elementor-heading-title {
            color: #ffffff;
            font-family: "Roboto Condensed", Sans-serif;
            font-size: 40px;
            font-weight: 600;
            letter-spacing: 1.5px;
        }

        .elementor-10082 .elementor-element.elementor-element-e82985 {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 19px;
            font-weight: 400;
            line-height: 1em;
            letter-spacing: 0.8px;
        }

        .elementor-10082 .elementor-element.elementor-element-e82985>.elementor-widget-container {
            margin: 30px 0px 0px 0px;
            padding: 0% 0% 1% 0%;
        }

        .elementor-10082 .elementor-element.elementor-element-7294fa7b .elementor-button {
            font-family: "Roboto Condensed", Sans-serif;
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            background-color: #b51700;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-7294fa7b .elementor-button:hover,
        .elementor-10082 .elementor-element.elementor-element-7294fa7b .elementor-button:focus {
            background-color: #000000;
        }

        .elementor-10082 .elementor-element.elementor-element-4cc08337:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-4cc08337>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.14.08.png");
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-4cc08337>.elementor-element-populated>.elementor-background-overlay {
            background-color: rgba(0, 0, 0, 0.57);
            opacity: 0.5;
        }

        .elementor-10082 .elementor-element.elementor-element-4cc08337:hover>.elementor-element-populated>.elementor-background-overlay {
            background-color: #000000;
            opacity: 0.75;
        }

        .elementor-10082 .elementor-element.elementor-element-4cc08337>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 5px 5px 5px 10px;
            padding: 40% 20% 40% 20%;
        }

        .elementor-10082 .elementor-element.elementor-element-4cc08337>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-42b870a9 {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-42b870a9 .elementor-heading-title {
            color: #ffffff;
            font-family: "Roboto Condensed", Sans-serif;
            font-size: 40px;
            font-weight: 600;
            letter-spacing: 1.5px;
        }

        .elementor-10082 .elementor-element.elementor-element-4523ae79 {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 19px;
            font-weight: 400;
            line-height: 1em;
            letter-spacing: 0.8px;
        }

        .elementor-10082 .elementor-element.elementor-element-4523ae79>.elementor-widget-container {
            margin: 30px 0px 0px 0px;
            padding: 0% 0% 1% 0%;
        }

        .elementor-10082 .elementor-element.elementor-element-46d0aba4 .elementor-button {
            font-family: "Roboto Condensed", Sans-serif;
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            background-color: #b51700;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-46d0aba4 .elementor-button:hover,
        .elementor-10082 .elementor-element.elementor-element-46d0aba4 .elementor-button:focus {
            background-color: #000000;
        }

        .elementor-10082 .elementor-element.elementor-element-2d512dd8>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-2d512dd8:not(.elementor-motion-effects-element-type-background),
        .elementor-10082 .elementor-element.elementor-element-2d512dd8>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #ffffff;
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/slide-sdcity-bird-view-1.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-2d512dd8>.elementor-background-overlay {
            background-color: rgba(0, 0, 0, 0.39);
            opacity: 0.65;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-2d512dd8 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 123px;
            margin-bottom: 123px;
            padding: 100px 25px 100px 25px;
        }

        .elementor-10082 .elementor-element.elementor-element-35a82380>.elementor-element-populated {
            padding: 0% 0% 0% 0%;
        }

        .elementor-10082 .elementor-element.elementor-element-6129615b>.elementor-container {
            max-width: 1600px;
        }

        .elementor-10082 .elementor-element.elementor-element-6129615b>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-7f4e9add>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-7f4e9add:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-7f4e9add>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-7f4e9add>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 50px 50px 50px 50px;
            padding: 50px 55px 45px 52px;
        }

        .elementor-10082 .elementor-element.elementor-element-7f4e9add>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-76753d1a .elementor-icon-wrapper {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-76753d1a.elementor-view-stacked .elementor-icon {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-76753d1a.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-76753d1a.elementor-view-default .elementor-icon {
            color: #ffffff;
            border-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-76753d1a.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-76753d1a.elementor-view-default .elementor-icon svg {
            fill: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-76753d1a .elementor-icon {
            font-size: 30px;
        }

        .elementor-10082 .elementor-element.elementor-element-76753d1a .elementor-icon i,
        .elementor-10082 .elementor-element.elementor-element-76753d1a .elementor-icon svg {
            transform: rotate(0deg);
        }

        .elementor-10082 .elementor-element.elementor-element-2f99841b {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-2f99841b .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
        }

        .elementor-10082 .elementor-element.elementor-element-12918a44 .elementor-button {
            font-family: "Lato", Sans-serif;
            fill: #b51700;
            color: #b51700;
            background-color: #ffffff;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-12918a44 .elementor-button:hover,
        .elementor-10082 .elementor-element.elementor-element-12918a44 .elementor-button:focus {
            color: #b51700;
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-12918a44 .elementor-button:hover svg,
        .elementor-10082 .elementor-element.elementor-element-12918a44 .elementor-button:focus svg {
            fill: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-12918a44>.elementor-widget-container {
            margin: 25px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-52d41043.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-52d41043.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-52d41043.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-10082 .elementor-element.elementor-element-52d41043>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-52d41043:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-52d41043>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-52d41043>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 50px 50px 50px 50px;
            padding: 80px 80px 80px 80px;
        }

        .elementor-10082 .elementor-element.elementor-element-52d41043>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5 .elementor-icon-wrapper {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5.elementor-view-stacked .elementor-icon {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5.elementor-view-default .elementor-icon {
            color: #ffffff;
            border-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5.elementor-view-default .elementor-icon svg {
            fill: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5 .elementor-icon {
            font-size: 30px;
        }

        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5 .elementor-icon i,
        .elementor-10082 .elementor-element.elementor-element-5e0a8aa5 .elementor-icon svg {
            transform: rotate(0deg);
        }

        .elementor-10082 .elementor-element.elementor-element-46bc94e6 {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-46bc94e6 .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
        }

        .elementor-10082 .elementor-element.elementor-element-5cea4cab .elementor-button {
            font-family: "Lato", Sans-serif;
            fill: #b51700;
            color: #b51700;
            background-color: #ffffff;
            border-radius: 1px 1px 1px 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-5cea4cab .elementor-button:hover,
        .elementor-10082 .elementor-element.elementor-element-5cea4cab .elementor-button:focus {
            color: #b51700;
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-5cea4cab .elementor-button:hover svg,
        .elementor-10082 .elementor-element.elementor-element-5cea4cab .elementor-button:focus svg {
            fill: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-5cea4cab>.elementor-widget-container {
            margin: 25px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-b4317ef.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-b4317ef.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-b4317ef.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-10082 .elementor-element.elementor-element-b4317ef>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-b4317ef:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-b4317ef>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-b4317ef>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 50px 50px 50px 50px;
            padding: 80px 35px 80px 35px;
        }

        .elementor-10082 .elementor-element.elementor-element-b4317ef>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-4c6a84e .elementor-icon-wrapper {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-4c6a84e.elementor-view-stacked .elementor-icon {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-4c6a84e.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-4c6a84e.elementor-view-default .elementor-icon {
            color: #ffffff;
            border-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-4c6a84e.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-4c6a84e.elementor-view-default .elementor-icon svg {
            fill: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-4c6a84e .elementor-icon {
            font-size: 30px;
        }

        .elementor-10082 .elementor-element.elementor-element-4c6a84e .elementor-icon i,
        .elementor-10082 .elementor-element.elementor-element-4c6a84e .elementor-icon svg {
            transform: rotate(0deg);
        }

        .elementor-10082 .elementor-element.elementor-element-6ca5bd2 {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-6ca5bd2 .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
        }

        .elementor-10082 .elementor-element.elementor-element-90f1ff6 .elementor-button {
            font-family: "Lato", Sans-serif;
            fill: #b51700;
            color: #b51700;
            background-color: #ffffff;
            border-radius: 1px 1px 1px 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-90f1ff6 .elementor-button:hover,
        .elementor-10082 .elementor-element.elementor-element-90f1ff6 .elementor-button:focus {
            color: #b51700;
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-90f1ff6 .elementor-button:hover svg,
        .elementor-10082 .elementor-element.elementor-element-90f1ff6 .elementor-button:focus svg {
            fill: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-90f1ff6>.elementor-widget-container {
            margin: 25px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3fb41524>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-3fb41524 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 65px 0px 85px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3fb41524>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-680e0715:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-680e0715>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-680e0715>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 75px 0px 75px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-680e0715>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-a22e77f>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-a22e77f {
            padding: 0px 100px 0px 100px;
        }

        .elementor-10082 .elementor-element.elementor-element-53b55cfc .elementor-image img {
            opacity: 1;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-4ce53fd2.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-4ce53fd2.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-4ce53fd2:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-4ce53fd2>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-4ce53fd2>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 75px 20px 20px 20px;
        }

        .elementor-10082 .elementor-element.elementor-element-4ce53fd2>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-264b561b .elementor-heading-title {
            color: #000730;
            font-family: "Lato", Sans-serif;
            font-size: 23px;
            font-weight: 800;
        }

        .elementor-10082 .elementor-element.elementor-element-78e20e73 .elementor-text-editor {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-78e20e73 {
            font-family: "Lato", Sans-serif;
        }

        .elementor-10082 .elementor-element.elementor-element-11492c8e .elementor-button .elementor-align-icon-right {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-11492c8e .elementor-button .elementor-align-icon-left {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-11492c8e .elementor-button {
            font-family: "Lato", Sans-serif;
            font-weight: 800;
            background-color: #b51700;
            border-radius: 1px 1px 1px 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-66f706ad>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-66f706ad {
            margin-top: 23px;
            margin-bottom: 100px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-18ad2603 {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-18ad2603 .elementor-heading-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 65px;
            font-weight: 600;
        }

        .elementor-10082 .elementor-element.elementor-element-41ba9188 {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-41ba9188 .elementor-heading-title {
            color: #b51700;
            font-size: 23px;
            font-weight: 300;
        }

        .elementor-10082 .elementor-element.elementor-element-41ba9188>.elementor-widget-container {
            margin: -10px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-6f834816 {
            --divider-border-style: solid;
            --divider-color: #000;
            --divider-border-width: 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-6f834816 .elementor-divider-separator {
            width: 53%;
            margin: 0 auto;
            margin-center: 0;
        }

        .elementor-10082 .elementor-element.elementor-element-6f834816 .elementor-divider {
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-c3570f8>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-c3570f8 {
            margin-top: 0px;
            margin-bottom: 100px;
            padding: 35px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-e68f01a>.elementor-element-populated,
        .elementor-10082 .elementor-element.elementor-element-e68f01a>.elementor-element-populated>.elementor-background-overlay,
        .elementor-10082 .elementor-element.elementor-element-e68f01a>.elementor-background-slideshow {
            border-radius: 0px 1px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-e68f01a>.elementor-element-populated {
            padding: 5px 5px 5px 5px;
        }

        .elementor-10082 .elementor-element.elementor-element-55c5b8e .elementor-flip-box__front {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.43.43.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-55c5b8e .elementor-flip-box__back {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.43.43.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-55c5b8e .elementor-flip-box__back .elementor-flip-box__layer__overlay {
            background-color: rgba(0, 0, 0, 0.59);
            text-align: center;
            justify-content: flex-end;
        }

        .elementor-10082 .elementor-element.elementor-element-55c5b8e .elementor-flip-box__front .elementor-flip-box__layer__overlay {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-55c5b8e .elementor-flip-box__button {
            margin: center 0;
            font-family: "Lato", Sans-serif;
            color: #ffffff;
            background-color: #b51700;
            border-color: #b51700;
            border-width: 4px;
            border-radius: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-c82546f.elementor-position-right .elementor-image-box-img {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-c82546f.elementor-position-left .elementor-image-box-img {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-c82546f.elementor-position-top .elementor-image-box-img {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-c82546f .elementor-image-box-wrapper .elementor-image-box-img {
            width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-c82546f .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-c82546f .elementor-image-box-title {
            margin-bottom: 2px;
        }

        .elementor-10082 .elementor-element.elementor-element-c82546f .elementor-image-box-content .elementor-image-box-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
            font-weight: 800;
        }

        .elementor-10082 .elementor-element.elementor-element-c82546f .elementor-image-box-content .elementor-image-box-description {
            color: #000000;
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .elementor-10082 .elementor-element.elementor-element-07a4af3>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            padding: 5px 5px 5px 5px;
        }

        .elementor-10082 .elementor-element.elementor-element-a021a2d .elementor-flip-box__front {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.43.49.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-a021a2d .elementor-flip-box__back {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.43.49.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-a021a2d .elementor-flip-box__back .elementor-flip-box__layer__overlay {
            background-color: rgba(0, 0, 0, 0.59);
            text-align: center;
            justify-content: flex-end;
        }

        .elementor-10082 .elementor-element.elementor-element-a021a2d .elementor-flip-box__front .elementor-flip-box__layer__overlay {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-a021a2d .elementor-flip-box__button {
            margin: center 0;
            font-family: "Lato", Sans-serif;
            color: #ffffff;
            background-color: #b51700;
            border-color: #b51700;
            border-width: 4px;
            border-radius: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3925193.elementor-position-right .elementor-image-box-img {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-3925193.elementor-position-left .elementor-image-box-img {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-3925193.elementor-position-top .elementor-image-box-img {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-3925193 .elementor-image-box-wrapper .elementor-image-box-img {
            width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-3925193 .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-3925193 .elementor-image-box-title {
            margin-bottom: 2px;
        }

        .elementor-10082 .elementor-element.elementor-element-3925193 .elementor-image-box-content .elementor-image-box-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
            font-weight: 800;
        }

        .elementor-10082 .elementor-element.elementor-element-3925193 .elementor-image-box-content .elementor-image-box-description {
            color: #0c0c0c;
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .elementor-10082 .elementor-element.elementor-element-8b86642>.elementor-element-populated {
            padding: 5px 5px 5px 5px;
        }

        .elementor-10082 .elementor-element.elementor-element-9824a65 .elementor-flip-box__front {
            background-image: url("https://senegindia.sn/wp-content/uploads/2021/01/Cam_01__F-scaled.jpg");
            background-position: 0% -20px;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-9824a65 .elementor-flip-box__back {
            background-image: url("https://senegindia.sn/wp-content/uploads/2020/08/evoque.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-9824a65 .elementor-flip-box__back .elementor-flip-box__layer__overlay {
            background-color: rgba(0, 0, 0, 0.59);
            text-align: center;
            justify-content: flex-end;
        }

        .elementor-10082 .elementor-element.elementor-element-9824a65 .elementor-flip-box__front .elementor-flip-box__layer__overlay {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-9824a65 .elementor-flip-box__button {
            margin-center: 0;
            font-family: "Lato", Sans-serif;
            color: #ffffff;
            background-color: #b51700;
            border-color: #b51700;
            border-width: 4px;
            border-radius: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-e31f6fe.elementor-position-right .elementor-image-box-img {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-e31f6fe.elementor-position-left .elementor-image-box-img {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-e31f6fe.elementor-position-top .elementor-image-box-img {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-e31f6fe .elementor-image-box-wrapper .elementor-image-box-img {
            width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-e31f6fe .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-e31f6fe .elementor-image-box-title {
            margin-bottom: 2px;
        }

        .elementor-10082 .elementor-element.elementor-element-e31f6fe .elementor-image-box-content .elementor-image-box-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .elementor-10082 .elementor-element.elementor-element-e31f6fe .elementor-image-box-content .elementor-image-box-description {
            color: #0c0c0c;
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .elementor-10082 .elementor-element.elementor-element-15d33ba>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-15d33ba {
            margin-top: 0px;
            margin-bottom: 100px;
            padding: 35px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-c28b520>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            padding: 5px 5px 5px 5px;
        }

        .elementor-10082 .elementor-element.elementor-element-fd07605 .elementor-flip-box__front {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.45.55.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-fd07605 .elementor-flip-box__back {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.45.55.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-fd07605 .elementor-flip-box__back .elementor-flip-box__layer__overlay {
            background-color: rgba(0, 0, 0, 0.59);
            text-align: center;
            justify-content: flex-end;
        }

        .elementor-10082 .elementor-element.elementor-element-fd07605 .elementor-flip-box__front .elementor-flip-box__layer__overlay {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-fd07605 .elementor-flip-box__button {
            margin: center 0;
            font-family: "Lato", Sans-serif;
            color: #ffffff;
            background-color: #b51700;
            border-color: #b51700;
            border-width: 4px;
            border-radius: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-ab14492.elementor-position-right .elementor-image-box-img {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-ab14492.elementor-position-left .elementor-image-box-img {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-ab14492.elementor-position-top .elementor-image-box-img {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-ab14492 .elementor-image-box-wrapper .elementor-image-box-img {
            width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-ab14492 .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-ab14492 .elementor-image-box-title {
            margin-bottom: 2px;
        }

        .elementor-10082 .elementor-element.elementor-element-ab14492 .elementor-image-box-content .elementor-image-box-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
            font-weight: 800;
        }

        .elementor-10082 .elementor-element.elementor-element-ab14492 .elementor-image-box-content .elementor-image-box-description {
            color: #000000;
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .elementor-10082 .elementor-element.elementor-element-452dda2>.elementor-element-populated {
            padding: 5px 5px 5px 5px;
        }

        .elementor-10082 .elementor-element.elementor-element-6960630 .elementor-flip-box__front {
            background-image: url("https://senegindia.sn/wp-content/uploads/2020/08/residence-evoque.jpg");
            background-position: center left;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-6960630 .elementor-flip-box__back {
            background-image: url("https://senegindia.sn/wp-content/uploads/2020/08/residence-evoque.jpg");
            background-position: center left;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-6960630 .elementor-flip-box__back .elementor-flip-box__layer__overlay {
            background-color: rgba(0, 0, 0, 0.59);
            text-align: center;
            justify-content: flex-end;
        }

        .elementor-10082 .elementor-element.elementor-element-6960630 .elementor-flip-box__front .elementor-flip-box__layer__overlay {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-6960630 .elementor-flip-box__button {
            margin: center 0;
            font-family: "Lato", Sans-serif;
            color: #ffffff;
            background-color: #b51700;
            border-color: #b51700;
            border-width: 4px;
            border-radius: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-a4dbf91.elementor-position-right .elementor-image-box-img {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-a4dbf91.elementor-position-left .elementor-image-box-img {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-a4dbf91.elementor-position-top .elementor-image-box-img {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-a4dbf91 .elementor-image-box-wrapper .elementor-image-box-img {
            width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-a4dbf91 .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-a4dbf91 .elementor-image-box-title {
            margin-bottom: 2px;
        }

        .elementor-10082 .elementor-element.elementor-element-a4dbf91 .elementor-image-box-content .elementor-image-box-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
            font-weight: 800;
        }

        .elementor-10082 .elementor-element.elementor-element-a4dbf91 .elementor-image-box-content .elementor-image-box-description {
            color: #0c0c0c;
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .elementor-10082 .elementor-element.elementor-element-c772e81>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            padding: 5px 5px 5px 5px;
        }

        .elementor-10082 .elementor-element.elementor-element-d194876 .elementor-flip-box__front {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-20.07.54.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-d194876 .elementor-flip-box__back {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-20.07.54.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-d194876 .elementor-flip-box__back .elementor-flip-box__layer__overlay {
            background-color: rgba(0, 0, 0, 0.59);
            text-align: center;
            justify-content: flex-end;
        }

        .elementor-10082 .elementor-element.elementor-element-d194876 .elementor-flip-box__front .elementor-flip-box__layer__overlay {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-d194876 .elementor-flip-box__button {
            margin: center 0;
            font-family: "Lato", Sans-serif;
            color: #ffffff;
            background-color: #b51700;
            border-color: #b51700;
            border-width: 4px;
            border-radius: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-11934a0.elementor-position-right .elementor-image-box-img {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-11934a0.elementor-position-left .elementor-image-box-img {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-11934a0.elementor-position-top .elementor-image-box-img {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-11934a0 .elementor-image-box-wrapper .elementor-image-box-img {
            width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-11934a0 .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-11934a0 .elementor-image-box-title {
            margin-bottom: 2px;
        }

        .elementor-10082 .elementor-element.elementor-element-11934a0 .elementor-image-box-content .elementor-image-box-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
            font-weight: 800;
        }

        .elementor-10082 .elementor-element.elementor-element-11934a0 .elementor-image-box-content .elementor-image-box-description {
            color: #000000;
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .elementor-10082 .elementor-element.elementor-element-9135d50>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-9135d50 {
            margin-top: 0px;
            margin-bottom: 100px;
            padding: 35px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-ad274a1.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-ad274a1.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-ad274a1>.elementor-element-populated {
            padding: 5px 5px 5px 5px;
        }

        .elementor-10082 .elementor-element.elementor-element-a4f0ed3 .elementor-flip-box__front {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-20.08.04.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-a4f0ed3 .elementor-flip-box__back {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-20.08.04.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-a4f0ed3 .elementor-flip-box__back .elementor-flip-box__layer__overlay {
            background-color: rgba(0, 0, 0, 0.59);
            text-align: center;
            justify-content: flex-end;
        }

        .elementor-10082 .elementor-element.elementor-element-a4f0ed3 .elementor-flip-box__front .elementor-flip-box__layer__overlay {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-a4f0ed3 .elementor-flip-box__button {
            margin: center 0;
            font-family: "Lato", Sans-serif;
            color: #ffffff;
            background-color: #b51700;
            border-color: #b51700;
            border-width: 4px;
            border-radius: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-8501a71.elementor-position-right .elementor-image-box-img {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-8501a71.elementor-position-left .elementor-image-box-img {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-8501a71.elementor-position-top .elementor-image-box-img {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-8501a71 .elementor-image-box-wrapper .elementor-image-box-img {
            width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-8501a71 .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-8501a71 .elementor-image-box-title {
            margin-bottom: 2px;
        }

        .elementor-10082 .elementor-element.elementor-element-8501a71 .elementor-image-box-content .elementor-image-box-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 25px;
            font-weight: 800;
        }

        .elementor-10082 .elementor-element.elementor-element-8501a71 .elementor-image-box-content .elementor-image-box-description {
            color: #000000;
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .elementor-10082 .elementor-element.elementor-element-64effa8>.elementor-element-populated {
            padding: 5px 5px 5px 5px;
        }

        .elementor-10082 .elementor-element.elementor-element-6f5136d5>.elementor-container {
            max-width: 800px;
        }

        .elementor-10082 .elementor-element.elementor-element-6f5136d5>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-6f5136d5:not(.elementor-motion-effects-element-type-background),
        .elementor-10082 .elementor-element.elementor-element-6f5136d5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/happy-african-family-PFW438J-1-scaled-1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-6f5136d5>.elementor-background-overlay {
            background-color: #000000;
            opacity: 0.64;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-6f5136d5 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 100px;
            margin-bottom: 100px;
            padding: 100px 0px 100px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-7fa813ba>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-777a5452 .elementor-icon-wrapper {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-777a5452.elementor-view-stacked .elementor-icon {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-777a5452.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-777a5452.elementor-view-default .elementor-icon {
            color: #ffffff;
            border-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-777a5452.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-777a5452.elementor-view-default .elementor-icon svg {
            fill: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-777a5452 .elementor-icon {
            font-size: 53px;
        }

        .elementor-10082 .elementor-element.elementor-element-777a5452 .elementor-icon i,
        .elementor-10082 .elementor-element.elementor-element-777a5452 .elementor-icon svg {
            transform: rotate(0deg);
        }

        .elementor-10082 .elementor-element.elementor-element-27dd9d62 {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-27dd9d62 .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 45px;
            font-weight: 600;
        }

        .elementor-10082 .elementor-element.elementor-element-783bd041 {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-783bd041 .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 18px;
            font-weight: 300;
        }

        .elementor-10082 .elementor-element.elementor-element-783bd041>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 10px 10px 10px 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group {
            padding-right: calc(10px/2);
            padding-left: calc(10px/2);
            margin-bottom: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-form-fields-wrapper {
            margin-left: calc(-10px/2);
            margin-right: calc(-10px/2);
            margin-bottom: -10px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-form-steps legend {
            padding-right: calc(10px/2);
            padding-left: calc(10px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-form-steps .elementor-form-fields-wrapper {
            margin: 0;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group.recaptcha_v3-bottomleft,
        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group.recaptcha_v3-bottomright {
            margin-bottom: 0;
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-labels-inline .elementor-field-group>label {
            padding-left: 0px;
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-labels-inline .elementor-field-group>label {
            padding-right: 0px;
        }

        body .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-labels-above .elementor-field-group>label {
            padding-bottom: 0px;
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-labels-inline .elementor-field-group>abbr {
            padding-left: 0px;
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-labels-inline .elementor-field-group>abbr {
            padding-right: 0px;
        }

        body .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-labels-above .elementor-field-group>abbr {
            padding-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-type-html {
            padding-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-type-amount.elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper) {
            opacity: 1;
            flex-basis: 100%;
            max-width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group.elementor-field-type-amount {
            flex-direction: row;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .dce-signature-wrapper {
            --canvas-width: 400px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .dce-signature-canvas {
            border-radius: 3px 3px 3px 3px;
            border-width: 1px 1px 1px 1px;
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group .elementor-field {
            color: #000000;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #000000;
            font-family: "Lato", Sans-serif;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 ..select2-container--default .select2-selection--multiple .select2-selection__rendered {
            color: #000000;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group .elementor-field,
        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-subgroup label {
            font-family: "Lato", Sans-serif;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .select2-container--default .select2-selection--single,
        .elementor-10082 .elementor-element.elementor-element-3f467de3 .select2-container--default .select2-selection--multiple {
            height: auto;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-label-description .elementor-field-label {
            display: inline-block;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-label-description:after {
            content: '?';
            display: inline-block;
            border-radius: 50%;
            padding: 2px 0;
            height: 1.2em;
            line-height: 1;
            font-size: 80%;
            width: 1.2em;
            text-align: center;
            margin-left: 0.2em;
            color: #ffffff;
            background-color: #777777;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper) {
            background-color: rgba(255, 255, 255, 0.64);
            border-width: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group .elementor-select-wrapper select {
            background-color: rgba(255, 255, 255, 0.64);
            border-width: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group .elementor-select-wrapper .select2 {
            background-color: rgba(255, 255, 255, 0.64);
            border-width: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group .elementor-select-wrapper .select2 .elementor-field-textual {
            background-color: rgba(255, 255, 255, 0.64);
            border-width: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .mce-panel {
            background-color: rgba(255, 255, 255, 0.64);
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-field-group .mce-panel {
            border-width: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-button {
            font-family: "Lato", Sans-serif;
            font-weight: 900;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .e-form__buttons__wrapper__button-next {
            background-color: #b51700;
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-button[type="submit"] {
            background-color: #b51700;
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-button[type="submit"] svg * {
            fill: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .e-form__buttons__wrapper__button-previous {
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .e-form__buttons__wrapper__button-next:hover {
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-button[type="submit"]:hover {
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .elementor-button[type="submit"]:hover svg * {
            fill: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 .e-form__buttons__wrapper__button-previous:hover {
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3 {
            --e-form-steps-indicators-spacing: 20px;
            --e-form-steps-indicator-padding: 30px;
            --e-form-steps-indicator-inactive-secondary-color: #ffffff;
            --e-form-steps-indicator-active-secondary-color: #ffffff;
            --e-form-steps-indicator-completed-secondary-color: #ffffff;
            --e-form-steps-divider-width: 1px;
            --e-form-steps-divider-gap: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-3f467de3>.elementor-widget-container {
            padding: 30px 30px 30px 30px;
            background-color: rgba(255, 255, 255, 0.44);
        }

        .elementor-10082 .elementor-element.elementor-element-769c3040>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-10082 .elementor-element.elementor-element-769c3040 {
            padding: 0px 0px 100px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-5b540070 {
            padding: 20px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-113676ee>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            padding: 15px 15px 15px 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-view-stacked .elementor-icon {
            background-color: #b51700;
            fill: #ffffff;
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-view-default .elementor-icon {
            fill: #b51700;
            color: #b51700;
            border-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-view-framed .elementor-icon {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-view-stacked .elementor-icon:hover {
            background-color: rgba(0, 206, 27, 0);
            fill: #b51700;
            color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-view-framed .elementor-icon:hover,
        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-view-default .elementor-icon:hover {
            fill: rgba(0, 206, 27, 0);
            color: rgba(0, 206, 27, 0);
            border-color: rgba(0, 206, 27, 0);
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-view-framed .elementor-icon:hover {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-position-right .elementor-icon-box-icon {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-position-left .elementor-icon-box-icon {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon {
            font-size: 50px;
            padding: 30px;
            border-radius: 1px 1px 1px 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon-box-title {
            margin-bottom: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon-box-content .elementor-icon-box-title {
            color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon-box-content .elementor-icon-box-title,
        .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon-box-content .elementor-icon-box-title a {
            font-family: "Lato", Sans-serif;
            font-size: 26px;
            text-transform: uppercase;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon-box-content .elementor-icon-box-description {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.7em;
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590>.elementor-widget-container {
            padding: 50px 50px 50px 50px;
            background-color: #ffffff;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #ffffff;
            box-shadow: 0px 0px 55px 5px rgba(0, 0, 0, 0.06);
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590:hover .elementor-widget-container {
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #b51700;
            box-shadow: 0px 0px 55px 0px rgba(0, 0, 0, 0.19);
        }

        .elementor-10082 .elementor-element.elementor-element-26f26590:hover>.elementor-widget-container {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-40fb620b>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            padding: 15px 15px 15px 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-view-stacked .elementor-icon {
            background-color: #b51700;
            fill: #ffffff;
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-view-framed .elementor-icon,
        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-view-default .elementor-icon {
            fill: #b51700;
            color: #b51700;
            border-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-view-framed .elementor-icon {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-view-stacked .elementor-icon:hover {
            background-color: rgba(255, 255, 255, 0);
            fill: #b51700;
            color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-view-framed .elementor-icon:hover,
        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-view-default .elementor-icon:hover {
            fill: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 0);
            border-color: rgba(255, 255, 255, 0);
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-view-framed .elementor-icon:hover {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-position-right .elementor-icon-box-icon {
            margin-left: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-position-left .elementor-icon-box-icon {
            margin-right: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 15px;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon {
            font-size: 50px;
            padding: 30px;
            border-radius: 1px 1px 1px 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon-box-title {
            margin-bottom: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon-box-content .elementor-icon-box-title {
            color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon-box-content .elementor-icon-box-title,
        .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon-box-content .elementor-icon-box-title a {
            font-family: "Lato", Sans-serif;
            font-size: 26px;
            text-transform: uppercase;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon-box-content .elementor-icon-box-description {
            color: #000000;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.7em;
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271>.elementor-widget-container {
            padding: 50px 50px 50px 50px;
            background-color: #ffffff;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #ffffff;
            box-shadow: 0px 0px 55px 5px rgba(0, 0, 0, 0.06);
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271:hover .elementor-widget-container {
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #b51700;
            box-shadow: 0px 0px 55px 0px rgba(0, 0, 0, 0.19);
        }

        .elementor-10082 .elementor-element.elementor-element-149e7271:hover>.elementor-widget-container {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3ea55e01>.elementor-container {
            max-width: 1200px;
            min-height: 500px;
        }

        .elementor-10082 .elementor-element.elementor-element-3ea55e01>.elementor-container:after {
            content: "";
            min-height: inherit;
        }

        .elementor-10082 .elementor-element.elementor-element-3ea55e01:not(.elementor-motion-effects-element-type-background),
        .elementor-10082 .elementor-element.elementor-element-3ea55e01>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/slide-svcity-pool-night-2.jpg");
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-10082 .elementor-element.elementor-element-3ea55e01>.elementor-background-overlay {
            background-color: rgba(3, 3, 30, 0.92);
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-3ea55e01 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-1cfd8a0d>.elementor-element-populated {
            margin: 80px 0px 30px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-1c57d4f2 {
            padding: 50px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-546c39d1>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -2px;
        }

        .elementor-10082 .elementor-element.elementor-element-546c39d1>.elementor-element-populated {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: rgba(255, 255, 255, 0.2);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-546c39d1>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-34985f31 {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-34985f31 .elementor-heading-title {
            color: #b51700;
            font-family: "Lato", Sans-serif;
            font-size: 18px;
            font-weight: 700;
            text-transform: capitalize;
            letter-spacing: 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu .elementor-item {
            font-family: "Lato", Sans-serif;
            font-size: 15px;
            font-weight: 300;
            text-transform: uppercase;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main .elementor-item {
            color: #d7d7d9;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main .elementor-item:hover,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main .elementor-item.elementor-item-active,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main .elementor-item.highlighted,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main .elementor-item:focus {
            color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-framed .elementor-item:before {
            border-width: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-framed.e--animation-draw .elementor-item:before {
            border-width: 0 0 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-framed.e--animation-draw .elementor-item:after {
            border-width: 0px 0px 0 0;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-framed.e--animation-corners .elementor-item:before {
            border-width: 0px 0 0 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-framed.e--animation-corners .elementor-item:after {
            border-width: 0 0px 0px 0;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-underline .elementor-item:after,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-overline .elementor-item:before,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-double-line .elementor-item:before,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .e--pointer-double-line .elementor-item:after {
            height: 0px;
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:last-child) {
            margin-right: 13px;
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:last-child) {
            margin-left: 13px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu>li:not(:last-child) {
            margin-bottom: 13px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-menu-toggle {
            color: #16163f;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a:hover,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a.elementor-item-active,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a.highlighted,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-menu-toggle:hover {
            color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a:hover,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a.elementor-item-active,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a.highlighted {
            background-color: rgba(0, 0, 0, 0);
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a.elementor-item-active {
            color: #d3b574;
            background-color: rgba(0, 0, 0, 0);
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown .elementor-item,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown .elementor-sub-item {
            font-family: "Montserrat", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main .elementor-nav-menu--dropdown,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a {
            padding-top: 13px;
            padding-bottom: 13px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
        .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
            margin-top: 15px !important;
        }

        .elementor-10082 .elementor-element.elementor-element-3d76d8b3>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-3d7a922c {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-3d7a922c .elementor-heading-title {
            color: #b51700;
            font-family: "Lato", Sans-serif;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(20px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(20px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(20px/2);
            margin-left: calc(20px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-20px/2);
            margin-left: calc(-20px/2);
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-20px/2);
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-20px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-icon i {
            color: #d7d7d9;
            font-size: 14px;
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-icon svg {
            fill: #d7d7d9;
            width: 14px;
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-text {
            color: #d7d7d9;
            padding-left: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-item:hover .elementor-icon-list-text {
            color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-item,
        .elementor-10082 .elementor-element.elementor-element-46cb92c .elementor-icon-list-item a {
            font-family: "Lato", Sans-serif;
            font-size: 15px;
            font-weight: 300;
        }

        .elementor-10082 .elementor-element.elementor-element-147faf78:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-147faf78>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-147faf78>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 14px 30px 14px 14px;
        }

        .elementor-10082 .elementor-element.elementor-element-147faf78>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-9027353 {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-9027353 .elementor-heading-title {
            color: #b51700;
            font-family: "Lato", Sans-serif;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group {
            padding-right: calc(0px/2);
            padding-left: calc(0px/2);
            margin-bottom: 6px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-form-fields-wrapper {
            margin-left: calc(-0px/2);
            margin-right: calc(-0px/2);
            margin-bottom: -6px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-form-steps legend {
            padding-right: calc(0px/2);
            padding-left: calc(0px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-form-steps .elementor-form-fields-wrapper {
            margin: 0;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group.recaptcha_v3-bottomleft,
        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group.recaptcha_v3-bottomright {
            margin-bottom: 0;
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-labels-inline .elementor-field-group>label {
            padding-left: 0px;
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-labels-inline .elementor-field-group>label {
            padding-right: 0px;
        }

        body .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-labels-above .elementor-field-group>label {
            padding-bottom: 0px;
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-labels-inline .elementor-field-group>abbr {
            padding-left: 0px;
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-labels-inline .elementor-field-group>abbr {
            padding-right: 0px;
        }

        body .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-labels-above .elementor-field-group>abbr {
            padding-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-type-amount.elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper) {
            opacity: 1;
            flex-basis: 100%;
            max-width: 100%;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group.elementor-field-type-amount {
            flex-direction: row;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .dce-signature-wrapper {
            --canvas-width: 400px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .dce-signature-canvas {
            border-radius: 3px 3px 3px 3px;
            border-width: 1px 1px 1px 1px;
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group .elementor-field {
            color: #16163f;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #16163f;
            font-family: "Montserrat", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc ..select2-container--default .select2-selection--multiple .select2-selection__rendered {
            color: #16163f;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group .elementor-field,
        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-subgroup label {
            font-family: "Montserrat", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .select2-container--default .select2-selection--single,
        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .select2-container--default .select2-selection--multiple {
            height: auto;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-label-description .elementor-field-label {
            display: inline-block;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-label-description:after {
            content: '?';
            display: inline-block;
            border-radius: 50%;
            padding: 2px 0;
            height: 1.2em;
            line-height: 1;
            font-size: 80%;
            width: 1.2em;
            text-align: center;
            margin-left: 0.2em;
            color: #ffffff;
            background-color: #777777;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper) {
            background-color: #ffffff;
            border-color: #d7d7d9;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group .elementor-select-wrapper select {
            background-color: #ffffff;
            border-color: #d7d7d9;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group .elementor-select-wrapper .select2 {
            background-color: #ffffff;
            border-color: #d7d7d9;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group .elementor-select-wrapper .select2 .elementor-field-textual {
            background-color: #ffffff;
            border-color: #d7d7d9;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .mce-panel {
            background-color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group .elementor-select-wrapper::before {
            color: #d7d7d9;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-field-group .mce-panel {
            border-color: #d7d7d9;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-button {
            font-family: "Montserrat", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .e-form__buttons__wrapper__button-next {
            background-color: #b51700;
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-button[type="submit"] {
            background-color: #b51700;
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-button[type="submit"] svg * {
            fill: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .e-form__buttons__wrapper__button-previous {
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .e-form__buttons__wrapper__button-next:hover {
            background-color: #16163f;
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-button[type="submit"]:hover {
            background-color: #16163f;
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .elementor-button[type="submit"]:hover svg * {
            fill: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc .e-form__buttons__wrapper__button-previous:hover {
            color: #ffffff;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc {
            --e-form-steps-indicators-spacing: 20px;
            --e-form-steps-indicator-padding: 30px;
            --e-form-steps-indicator-inactive-secondary-color: #ffffff;
            --e-form-steps-indicator-active-secondary-color: #ffffff;
            --e-form-steps-indicator-completed-secondary-color: #ffffff;
            --e-form-steps-divider-width: 1px;
            --e-form-steps-divider-gap: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-45e2c5cc>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-337a3b9e:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
        .elementor-10082 .elementor-element.elementor-element-337a3b9e>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-337a3b9e>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 11px 11px 11px 11px;
        }

        .elementor-10082 .elementor-element.elementor-element-337a3b9e>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-f30aad2 {
            text-align: left;
        }

        .elementor-10082 .elementor-element.elementor-element-f30aad2 .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 18px;
            font-weight: 700;
            text-transform: capitalize;
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(15px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(15px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(15px/2);
            margin-left: calc(15px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-15px/2);
            margin-left: calc(-15px/2);
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-15px/2);
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-15px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-icon i {
            color: #d7d7d9;
            font-size: 14px;
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-icon svg {
            fill: #d7d7d9;
            width: 14px;
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-item:hover .elementor-icon-list-icon i {
            color: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-item:hover .elementor-icon-list-icon svg {
            fill: #b51700;
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-text {
            color: #ffffff;
            padding-left: 10px;
        }

        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-item,
        .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-item a {
            font-family: "Montserrat", Sans-serif;
            font-size: 15px;
            font-weight: 300;
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(23px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(23px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(23px/2);
            margin-left: calc(23px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-23px/2);
            margin-left: calc(-23px/2);
        }

        body.rtl .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-23px/2);
        }

        body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-23px/2);
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-icon i {
            color: #ffffff;
            font-size: 20px;
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-icon svg {
            fill: #ffffff;
            width: 20px;
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-item:hover .elementor-icon-list-icon i {
            color: #030000;
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-item:hover .elementor-icon-list-icon svg {
            fill: #030000;
        }

        .elementor-10082 .elementor-element.elementor-element-2feda5a6>.elementor-widget-container {
            margin: 10px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-2075aae1>.elementor-container {
            max-width: 1200px;
        }

        .elementor-10082 .elementor-element.elementor-element-2075aae1 {
            border-style: solid;
            border-width: 1px 0px 0px 0px;
            border-color: #4b445a;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 50px;
            margin-bottom: 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-2075aae1>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-10082 .elementor-element.elementor-element-6bfe585b>.elementor-element-populated {
            padding: 30px 0px 0px 0px;
        }

        .elementor-10082 .elementor-element.elementor-element-4ba176ad {
            text-align: center;
        }

        .elementor-10082 .elementor-element.elementor-element-4ba176ad .elementor-heading-title {
            color: #d7d7d9;
            font-family: "Montserrat", Sans-serif;
            font-size: 14px;
            font-weight: 300;
            text-transform: capitalize;
        }

        @media(min-width:768px) {
            .elementor-10082 .elementor-element.elementor-element-e56e592 {
                width: 42.414%;
            }

            .elementor-10082 .elementor-element.elementor-element-1b3d3ef {
                width: 7.586%;
            }

            .elementor-10082 .elementor-element.elementor-element-31dae3d {
                width: 15.25%;
            }

            .elementor-10082 .elementor-element.elementor-element-e5fafa9 {
                width: 34.75%;
            }

            .elementor-10082 .elementor-element.elementor-element-e6bd1bd {
                width: 10.281%;
            }

            .elementor-10082 .elementor-element.elementor-element-7a1ab92 {
                width: 60.018%;
            }

            .elementor-10082 .elementor-element.elementor-element-6f2bc47 {
                width: 4.708%;
            }

            .elementor-10082 .elementor-element.elementor-element-5d034b40 {
                width: 35%;
            }

            .elementor-10082 .elementor-element.elementor-element-495b219b {
                width: 65%;
            }

            .elementor-10082 .elementor-element.elementor-element-237299d0 {
                width: 45%;
            }

            .elementor-10082 .elementor-element.elementor-element-64fd2975 {
                width: 55%;
            }

            .elementor-10082 .elementor-element.elementor-element-7f4e9add {
                width: 33%;
            }

            .elementor-10082 .elementor-element.elementor-element-52d41043 {
                width: 33.606%;
            }

            .elementor-10082 .elementor-element.elementor-element-b4317ef {
                width: 33%;
            }

            .elementor-10082 .elementor-element.elementor-element-546c39d1 {
                width: 21.316%;
            }

            .elementor-10082 .elementor-element.elementor-element-1bb0ef2d {
                width: 15.351%;
            }

            .elementor-10082 .elementor-element.elementor-element-735925ca {
                width: 17.368%;
            }

            .elementor-10082 .elementor-element.elementor-element-147faf78 {
                width: 23.333%;
            }

            .elementor-10082 .elementor-element.elementor-element-337a3b9e {
                width: 22.632%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-10082 .elementor-element.elementor-element-e56e592 {
                width: 23%;
            }

            .elementor-10082 .elementor-element.elementor-element-1b3d3ef {
                width: 12%;
            }

            .elementor-10082 .elementor-element.elementor-element-31dae3d {
                width: 25%;
            }

            .elementor-10082 .elementor-element.elementor-element-e5fafa9 {
                width: 34%;
            }

            .elementor-10082 .elementor-element.elementor-element-e6bd1bd {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-7a1ab92 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-ea44619 {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-5d034b40 {
                width: 63%;
            }

            .elementor-10082 .elementor-element.elementor-element-237299d0 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-64fd2975 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-7f4e9add {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-52d41043 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-b4317ef {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-65e75d12 {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-4ce53fd2 {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-e68f01a {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-07a4af3 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-c28b520 {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-c772e81 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-546c39d1 {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-1bb0ef2d {
                width: 20%;
            }

            .elementor-10082 .elementor-element.elementor-element-735925ca {
                width: 25%;
            }

            .elementor-10082 .elementor-element.elementor-element-147faf78 {
                width: 27%;
            }

            .elementor-10082 .elementor-element.elementor-element-337a3b9e {
                width: 28%;
            }
        }

        @media(min-width:1025px) {

            .elementor-10082 .elementor-element.elementor-element-88153e6:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
            .elementor-10082 .elementor-element.elementor-element-88153e6>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-2d512dd8:not(.elementor-motion-effects-element-type-background),
            .elementor-10082 .elementor-element.elementor-element-2d512dd8>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-attachment: fixed;
            }

            .elementor-10082 .elementor-element.elementor-element-55c5b8e .elementor-flip-box__front {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-55c5b8e .elementor-flip-box__back {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-a021a2d .elementor-flip-box__front {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-a021a2d .elementor-flip-box__back {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-9824a65 .elementor-flip-box__front {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-9824a65 .elementor-flip-box__back {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-fd07605 .elementor-flip-box__front {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-fd07605 .elementor-flip-box__back {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-6960630 .elementor-flip-box__front {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-6960630 .elementor-flip-box__back {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-d194876 .elementor-flip-box__front {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-d194876 .elementor-flip-box__back {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-a4f0ed3 .elementor-flip-box__front {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-a4f0ed3 .elementor-flip-box__back {
                background-attachment: scroll;
            }

            .elementor-10082 .elementor-element.elementor-element-6f5136d5:not(.elementor-motion-effects-element-type-background),
            .elementor-10082 .elementor-element.elementor-element-6f5136d5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-attachment: fixed;
            }
        }

        @media(max-width:1024px) {
            .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-cd89659.elementor-column .elementor-column-wrap {
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-cd89659.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-e56e592>.elementor-element-populated {
                padding: 15px 15px 15px 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-item,
            .elementor-10082 .elementor-element.elementor-element-81c4f9b .elementor-icon-list-item a {
                font-size: 12px;
            }

            .elementor-10082 .elementor-element.elementor-element-1b3d3ef>.elementor-element-populated {
                padding: 15px 15px 15px 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-31dae3d>.elementor-element-populated {
                padding: 15px 15px 15px 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-e5fafa9>.elementor-element-populated {
                padding: 15px 15px 15px 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-4194d3d {
                padding: 20px 15px 20px 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-e6bd1bd>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-0f6e615 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-7a1ab92>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-10082 .elementor-element.elementor-element-29764cb .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 13px !important;
            }

            .elementor-10082 .elementor-element.elementor-element-ea44619>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-33746ee1 {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-d19fffa>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                padding: 550px 130px 30px 50px;
            }

            .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-5d034b40.elementor-column .elementor-column-wrap {
                align-items: flex-start;
            }

            .elementor-10082 .elementor-element.elementor-element-5d034b40.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: flex-start;
                align-items: flex-start;
            }

            .elementor-10082 .elementor-element.elementor-element-5d034b40.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-10082 .elementor-element.elementor-element-5d034b40>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-534c9908 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-534c9908 .elementor-heading-title {
                font-size: 50px;
                line-height: 1em;
            }

            .elementor-10082 .elementor-element.elementor-element-496b06d1 {
                font-size: 18px;
            }

            .elementor-10082 .elementor-element.elementor-element-496b06d1>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-f429a3b .elementor-spacer-inner {
                height: 10px;
            }

            .elementor-10082 .elementor-element.elementor-element-21c593d4 {
                padding: 100px 25px 100px 25px;
            }

            .elementor-10082 .elementor-element.elementor-element-237299d0>.elementor-element-populated {
                padding: 0px 30px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-41e717c1>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-682aabb6.elementor-column .elementor-column-wrap {
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-682aabb6.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-682aabb6.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-10082 .elementor-element.elementor-element-528453a9.elementor-skin-slideshow .elementor-main-swiper {
                margin-bottom: 10px;
            }

            .elementor-10082 .elementor-element.elementor-element-3e5defe3>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-40c5b2e6 .elementor-heading-title {
                font-size: 26px;
            }

            .elementor-10082 .elementor-element.elementor-element-41840728 {
                font-size: 16px;
            }

            .elementor-10082 .elementor-element.elementor-element-88153e6>.elementor-element-populated {
                margin: 0px 0px 0px 5px;
            }

            .elementor-10082 .elementor-element.elementor-element-19401c77 .elementor-heading-title {
                font-size: 26px;
            }

            .elementor-10082 .elementor-element.elementor-element-e82985 {
                font-size: 16px;
            }

            .elementor-10082 .elementor-element.elementor-element-4cc08337>.elementor-element-populated {
                margin: 0px 0px 0px 9px;
            }

            .elementor-10082 .elementor-element.elementor-element-42b870a9 .elementor-heading-title {
                font-size: 26px;
            }

            .elementor-10082 .elementor-element.elementor-element-4523ae79 {
                font-size: 16px;
            }

            .elementor-10082 .elementor-element.elementor-element-2d512dd8 {
                padding: 0px 25px 0px 25px;
            }

            .elementor-10082 .elementor-element.elementor-element-35a82380>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                padding: 40px 47px 40px 40px;
            }

            .elementor-10082 .elementor-element.elementor-element-6129615b {
                padding: 0px 0px 0px 0px;
            }

            .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-7f4e9add.elementor-column .elementor-column-wrap {
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-7f4e9add.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-7f4e9add.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-10082 .elementor-element.elementor-element-7f4e9add>.elementor-element-populated {
                margin: 0px 15px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-2f99841b {
                text-align: center;
            }

            .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-52d41043.elementor-column .elementor-column-wrap {
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-52d41043.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-52d41043.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-10082 .elementor-element.elementor-element-52d41043>.elementor-element-populated {
                margin: 0px 0px 0px 15px;
            }

            .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-b4317ef.elementor-column .elementor-column-wrap {
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-b4317ef.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-b4317ef.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-10082 .elementor-element.elementor-element-b4317ef>.elementor-element-populated {
                margin: 0px 0px 0px 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-680e0715>.elementor-element-populated {
                padding: 60px 0px 60px 45px;
            }

            .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-65e75d12.elementor-column .elementor-column-wrap {
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-65e75d12.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-53b55cfc {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-53b55cfc .elementor-image img {
                width: 100%;
                max-width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-66f706ad {
                padding: 100px 25px 100px 25px;
            }

            .elementor-10082 .elementor-element.elementor-element-c3570f8 {
                padding: 15px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-e68f01a>.elementor-element-populated {
                margin: 0px 5px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-07a4af3>.elementor-element-populated {
                margin: 0px 5px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-8b86642>.elementor-element-populated {
                margin: 0px 5px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-15d33ba {
                padding: 15px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-c28b520>.elementor-element-populated {
                margin: 0px 5px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-452dda2>.elementor-element-populated {
                margin: 0px 5px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-c772e81>.elementor-element-populated {
                margin: 0px 5px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-9135d50 {
                padding: 15px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-ad274a1>.elementor-element-populated {
                margin: 0px 5px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-64effa8>.elementor-element-populated {
                margin: 0px 5px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-6f5136d5 {
                padding: 100px 25px 100px 25px;
            }

            .elementor-10082 .elementor-element.elementor-element-27dd9d62 .elementor-heading-title {
                font-size: 45px;
            }

            .elementor-10082 .elementor-element.elementor-element-769c3040 {
                padding: 100px 25px 100px 25px;
            }

            .elementor-10082 .elementor-element.elementor-element-113676ee>.elementor-element-populated {
                padding: 0px 10px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-position-right .elementor-icon-box-icon {
                margin-left: 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-position-left .elementor-icon-box-icon {
                margin-right: 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-26f26590.elementor-position-top .elementor-icon-box-icon {
                margin-bottom: 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon-box-content .elementor-icon-box-description {
                font-size: 14px;
            }

            .elementor-10082 .elementor-element.elementor-element-26f26590>.elementor-widget-container {
                padding: 30px 30px 30px 30px;
            }

            .elementor-10082 .elementor-element.elementor-element-40fb620b>.elementor-element-populated {
                padding: 0px 0px 0px 10px;
            }

            .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-position-right .elementor-icon-box-icon {
                margin-left: 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-position-left .elementor-icon-box-icon {
                margin-right: 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-149e7271.elementor-position-top .elementor-icon-box-icon {
                margin-bottom: 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon-box-content .elementor-icon-box-description {
                font-size: 14px;
            }

            .elementor-10082 .elementor-element.elementor-element-149e7271>.elementor-widget-container {
                padding: 30px 30px 30px 30px;
            }

            .elementor-10082 .elementor-element.elementor-element-3ea55e01:not(.elementor-motion-effects-element-type-background),
            .elementor-10082 .elementor-element.elementor-element-3ea55e01>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-position: center center;
            }

            .elementor-10082 .elementor-element.elementor-element-1cfd8a0d>.elementor-element-populated {
                margin: 50px 0px 35px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-1c57d4f2 {
                padding: 50px 0px 50px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-546c39d1>.elementor-element-populated {
                border-width: 1px 0px 0px 0px;
                margin: 0px 0px 0px 0px;
                padding: 50px 30px 0px 30px;
            }

            .elementor-10082 .elementor-element.elementor-element-5762d1e8 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-34985f31 {
                text-align: left;
            }

            .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 20px !important;
            }

            .elementor-10082 .elementor-element.elementor-element-3d7a922c {
                text-align: left;
            }

            .elementor-10082 .elementor-element.elementor-element-9027353 {
                text-align: left;
            }

            .elementor-10082 .elementor-element.elementor-element-f30aad2 {
                text-align: left;
            }

            .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(30px/2);
            }

            .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(30px/2);
            }

            .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(30px/2);
                margin-left: calc(30px/2);
            }

            .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-30px/2);
                margin-left: calc(-30px/2);
            }

            body.rtl .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-30px/2);
            }

            body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-30px/2);
            }

            .elementor-10082 .elementor-element.elementor-element-2075aae1 {
                margin-top: 0px;
                margin-bottom: 0px;
            }
        }

        @media(max-width:767px) {
            .elementor-10082 .elementor-element.elementor-element-cd89659>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-bf57104 {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-1b3d3ef {
                width: 20%;
            }

            .elementor-10082 .elementor-element.elementor-element-31dae3d {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-e5fafa9 {
                width: 80%;
            }

            .elementor-10082 .elementor-element.elementor-element-e6bd1bd {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-7a1ab92 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-3f5f0b9 .elementor-button {
                font-size: 13px;
                padding: 15px 20px 15px 20px;
            }

            .elementor-10082 .elementor-element.elementor-element-3f5f0b9>.elementor-widget-container {
                margin: 0px 0px 0px 103px;
            }

            .elementor-10082 .elementor-element.elementor-element-ea44619 {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-e385c66 .elementor-button {
                font-size: 13px;
                padding: 15px 20px 15px 20px;
            }

            .elementor-10082 .elementor-element.elementor-element-d19fffa>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                padding: 300px 20px 20px 20px;
            }

            .elementor-10082 .elementor-element.elementor-element-534c9908 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-534c9908 .elementor-heading-title {
                font-size: 30px;
                line-height: 1.2em;
            }

            .elementor-10082 .elementor-element.elementor-element-534c9908>.elementor-widget-container {
                padding: 0px 10px 0px 10px;
            }

            .elementor-10082 .elementor-element.elementor-element-496b06d1 .elementor-text-editor {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-496b06d1 {
                font-size: 14px;
            }

            .elementor-10082 .elementor-element.elementor-element-21c593d4 {
                padding: 50px 20px 50px 20px;
            }

            .elementor-10082 .elementor-element.elementor-element-237299d0>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-425be02b .elementor-heading-title {
                font-size: 35px;
            }

            .elementor-10082 .elementor-element.elementor-element-41e717c1 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-682aabb6 {
                width: 50%;
            }

            .elementor-10082 .elementor-element.elementor-element-64fd2975>.elementor-element-populated {
                margin: 12px 0px 0px 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-528453a9.elementor-skin-slideshow .elementor-main-swiper {
                margin-bottom: 10px;
            }

            .elementor-10082 .elementor-element.elementor-element-3e5defe3>.elementor-element-populated {
                padding: 100px 55px 100px 55px;
            }

            .elementor-10082 .elementor-element.elementor-element-40c5b2e6 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-41840728 .elementor-text-editor {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-88153e6>.elementor-element-populated {
                margin: 8px 0px 0px 0px;
                padding: 100px 55px 100px 55px;
            }

            .elementor-10082 .elementor-element.elementor-element-19401c77 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-e82985 .elementor-text-editor {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-4cc08337>.elementor-element-populated {
                margin: 8px 0px 0px 0px;
                padding: 100px 55px 100px 55px;
            }

            .elementor-10082 .elementor-element.elementor-element-42b870a9 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-4523ae79 .elementor-text-editor {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-2d512dd8 {
                padding: 0px 20px 0px 20px;
            }

            .elementor-10082 .elementor-element.elementor-element-35a82380>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-7f4e9add>.elementor-element-populated {
                margin: 0px 0px 20px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-52d41043>.elementor-element-populated {
                margin: 0px 0px 19px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-b4317ef>.elementor-element-populated {
                margin: 0px 0px 19px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-3fb41524 {
                padding: 0px 0px 50px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-680e0715>.elementor-element-populated {
                padding: 50px 0px 50px 30px;
            }

            .elementor-10082 .elementor-element.elementor-element-a22e77f {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-65e75d12 {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-65e75d12>.elementor-element-populated {
                margin: 0px 10px 0px 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-4ce53fd2 {
                width: 100%;
            }

            .elementor-10082 .elementor-element.elementor-element-4ce53fd2.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-10082 .elementor-element.elementor-element-4ce53fd2>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: 3px;
            }

            .elementor-10082 .elementor-element.elementor-element-4ce53fd2>.elementor-element-populated {
                margin: 0px 10px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-264b561b {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-264b561b .elementor-heading-title {
                font-size: 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-11492c8e .elementor-button {
                font-size: 10px;
            }

            .elementor-10082 .elementor-element.elementor-element-66f706ad {
                padding: 50px 20px 50px 20px;
            }

            .elementor-10082 .elementor-element.elementor-element-18ad2603 .elementor-heading-title {
                font-size: 45px;
            }

            .elementor-10082 .elementor-element.elementor-element-e68f01a>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-c82546f .elementor-image-box-img {
                margin-bottom: 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-07a4af3>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-3925193 .elementor-image-box-img {
                margin-bottom: 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-8b86642>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-e31f6fe .elementor-image-box-img {
                margin-bottom: 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-c28b520>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-ab14492 .elementor-image-box-img {
                margin-bottom: 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-452dda2>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-a4dbf91 .elementor-image-box-img {
                margin-bottom: 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-c772e81>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-11934a0 .elementor-image-box-img {
                margin-bottom: 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-ad274a1>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-8501a71 .elementor-image-box-img {
                margin-bottom: 15px;
            }

            .elementor-10082 .elementor-element.elementor-element-64effa8>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-6f5136d5 {
                padding: 50px 20px 50px 20px;
            }

            .elementor-10082 .elementor-element.elementor-element-27dd9d62 .elementor-heading-title {
                font-size: 45px;
            }

            .elementor-10082 .elementor-element.elementor-element-783bd041>.elementor-widget-container {
                margin: -10px 0px 50px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-769c3040 {
                padding: 50px 20px 50px 20px;
            }

            .elementor-10082 .elementor-element.elementor-element-113676ee>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-26f26590 .elementor-icon-box-icon {
                margin-bottom: 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-40fb620b>.elementor-element-populated {
                padding: 20px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-149e7271 .elementor-icon-box-icon {
                margin-bottom: 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-3ea55e01:not(.elementor-motion-effects-element-type-background),
            .elementor-10082 .elementor-element.elementor-element-3ea55e01>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-position: center center;
            }

            .elementor-10082 .elementor-element.elementor-element-546c39d1>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                padding: 30px 35px 0px 30px;
            }

            .elementor-10082 .elementor-element.elementor-element-1bb0ef2d>.elementor-element-populated {
                margin: 30px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-34985f31 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown .elementor-item,
            .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown .elementor-sub-item {
                font-size: 16px;
            }

            .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--dropdown a {
                padding-top: 24px;
                padding-bottom: 24px;
            }

            .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-10082 .elementor-element.elementor-element-3d76d8b3 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 20px !important;
            }

            .elementor-10082 .elementor-element.elementor-element-3d76d8b3>.elementor-widget-container {
                margin: 0px 0px 0px 145px;
            }

            .elementor-10082 .elementor-element.elementor-element-735925ca>.elementor-element-populated {
                margin: 040px 0px 0px 0px;
            }

            .elementor-10082 .elementor-element.elementor-element-3d7a922c {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-9027353 {
                text-align: center;
            }

            .elementor-bc-flex-widget .elementor-10082 .elementor-element.elementor-element-337a3b9e.elementor-column .elementor-column-wrap {
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-337a3b9e.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-10082 .elementor-element.elementor-element-337a3b9e.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-10082 .elementor-element.elementor-element-f30aad2 {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-602f90ee .elementor-icon-list-icon {
                text-align: center;
            }

            .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(30px/2);
            }

            .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(30px/2);
            }

            .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(30px/2);
                margin-left: calc(30px/2);
            }

            .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-30px/2);
                margin-left: calc(-30px/2);
            }

            body.rtl .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-30px/2);
            }

            body:not(.rtl) .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-30px/2);
            }

            .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-icon i {
                font-size: 22px;
            }

            .elementor-10082 .elementor-element.elementor-element-2feda5a6 .elementor-icon-list-icon svg {
                width: 22px;
            }
        }

        .elementor-15117 .elementor-element.elementor-element-5f9a4af>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-5f9a4af {
            box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .elementor-15117 .elementor-element.elementor-element-8e87aa0>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-3ba003d>.elementor-container {
            max-width: 1200px;
        }

        .elementor-15117 .elementor-element.elementor-element-3ba003d:not(.elementor-motion-effects-element-type-background),
        .elementor-15117 .elementor-element.elementor-element-3ba003d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #b51700;
        }

        .elementor-15117 .elementor-element.elementor-element-3ba003d {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 12px 0px 12px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-3ba003d>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-9c29ee5.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-9c29ee5.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-9c29ee5>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }

        body.rtl .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }

        body:not(.rtl) .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-icon i {
            color: #ffffff;
            font-size: 16px;
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-icon svg {
            fill: #ffffff;
            width: 16px;
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-text {
            color: #ffffff;
            padding-left: 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-item,
        .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-item a {
            font-family: "Lato", Sans-serif;
            font-size: 13px;
            font-weight: 300;
        }

        .elementor-15117 .elementor-element.elementor-element-abaa4c1>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-bc09b71.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-bc09b71.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-bc09b71>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-4e7dc6b {
            text-align: right;
        }

        .elementor-15117 .elementor-element.elementor-element-4e7dc6b .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 15px;
            font-weight: 400;
        }

        .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-0388abe.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-0388abe.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-0388abe>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(15px/2);
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(15px/2);
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(15px/2);
            margin-left: calc(15px/2);
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-15px/2);
            margin-left: calc(-15px/2);
        }

        body.rtl .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-15px/2);
        }

        body:not(.rtl) .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-15px/2);
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-icon i {
            color: #ffffff;
            font-size: 14px;
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-icon svg {
            fill: #ffffff;
            width: 14px;
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-item:hover .elementor-icon-list-icon i {
            color: #000000;
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-item:hover .elementor-icon-list-icon svg {
            fill: #000000;
        }

        .elementor-15117 .elementor-element.elementor-element-f0fee17 .elementor-icon-list-icon {
            text-align: left;
        }

        .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-6dd8213.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-6dd8213.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-6dd8213>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-7fcd41c {
            text-align: justify;
        }

        .elementor-15117 .elementor-element.elementor-element-7fcd41c .elementor-heading-title {
            color: #ffffff;
            font-family: "Lato", Sans-serif;
            font-size: 14px;
            font-weight: 500;
        }

        .elementor-15117 .elementor-element.elementor-element-d5b1678>.elementor-container {
            max-width: 1200px;
        }

        .elementor-15117 .elementor-element.elementor-element-d5b1678:not(.elementor-motion-effects-element-type-background),
        .elementor-15117 .elementor-element.elementor-element-d5b1678>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #ffffff;
        }

        .elementor-15117 .elementor-element.elementor-element-d5b1678 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 5px 0px 5px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-d5b1678>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-ff364ea.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-ff364ea.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-ff364ea>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-19ff906 {
            text-align: left;
        }

        .elementor-15117 .elementor-element.elementor-element-19ff906 .elementor-image img {
            width: 100%;
        }

        .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-0452e5c.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-0452e5c.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-0452e5c>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-menu-toggle {
            margin-left: auto;
        }

        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu .elementor-item {
            font-family: "Lato", Sans-serif;
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu--main .elementor-item {
            color: #000000;
            padding-left: 19px;
            padding-right: 19px;
            padding-top: 18px;
            padding-bottom: 18px;
        }

        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu--main .elementor-item:hover,
        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu--main .elementor-item.elementor-item-active,
        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu--main .elementor-item.highlighted,
        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu--main .elementor-item:focus {
            color: #ffffff;
        }

        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
        .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
            background-color: #b51700;
        }

        .elementor-15117 .elementor-element.elementor-element-5c521e8 .e--pointer-framed .elementor-item:before,
        .elementor-15117 .elementor-element.elementor-element-5c521e8 .e--pointer-framed .elementor-item:after {
            border-color: #b51700;
        }

        .elementor-15117 .elementor-element.elementor-element-5c521e8 div.elementor-menu-toggle {
            color: #ffffff;
        }

        .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-e03f6d7.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-e03f6d7.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-e03f6d7.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-15117 .elementor-element.elementor-element-ddd9e0c .elementor-button .elementor-align-icon-right {
            margin-left: 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-ddd9e0c .elementor-button .elementor-align-icon-left {
            margin-right: 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-ddd9e0c .elementor-button {
            font-family: "Lato", Sans-serif;
            font-size: 13px;
            font-weight: 400;
            text-transform: capitalize;
            fill: #ffffff;
            color: #ffffff;
            background-color: #000000;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-ddd9e0c .elementor-button:hover,
        .elementor-15117 .elementor-element.elementor-element-ddd9e0c .elementor-button:focus {
            color: #b51700;
            background-color: #e0e0e0;
        }

        .elementor-15117 .elementor-element.elementor-element-ddd9e0c .elementor-button:hover svg,
        .elementor-15117 .elementor-element.elementor-element-ddd9e0c .elementor-button:focus svg {
            fill: #b51700;
        }

        .elementor-15117 .elementor-element.elementor-element-ddd9e0c>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-e0bd85b.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-e0bd85b.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-15117 .elementor-element.elementor-element-e0bd85b>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-1f7b6c4 .elementor-button .elementor-align-icon-right {
            margin-left: 10px;
        }

        .elementor-15117 .elementor-element.elementor-element-1f7b6c4 .elementor-button .elementor-align-icon-left {
            margin-right: 10px;
        }

        .elementor-15117 .elementor-element.elementor-element-1f7b6c4 .elementor-button {
            font-family: "Montserrat", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            fill: #ffffff;
            color: #ffffff;
            background-color: #b51700;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-15117 .elementor-element.elementor-element-1f7b6c4 .elementor-button:hover,
        .elementor-15117 .elementor-element.elementor-element-1f7b6c4 .elementor-button:focus {
            color: #b51700;
            background-color: #e0e0e0;
        }

        .elementor-15117 .elementor-element.elementor-element-1f7b6c4 .elementor-button:hover svg,
        .elementor-15117 .elementor-element.elementor-element-1f7b6c4 .elementor-button:focus svg {
            fill: #b51700;
        }

        @media(max-width:1024px) {
            .elementor-bc-flex-widget .elementor-15117 .elementor-element.elementor-element-8e87aa0.elementor-column .elementor-column-wrap {
                align-items: center;
            }

            .elementor-15117 .elementor-element.elementor-element-8e87aa0.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-15117 .elementor-element.elementor-element-9c29ee5>.elementor-element-populated {
                padding: 15px 15px 15px 15px;
            }

            .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-item,
            .elementor-15117 .elementor-element.elementor-element-abaa4c1 .elementor-icon-list-item a {
                font-size: 12px;
            }

            .elementor-15117 .elementor-element.elementor-element-bc09b71>.elementor-element-populated {
                padding: 15px 15px 15px 15px;
            }

            .elementor-15117 .elementor-element.elementor-element-0388abe>.elementor-element-populated {
                padding: 15px 15px 15px 15px;
            }

            .elementor-15117 .elementor-element.elementor-element-6dd8213>.elementor-element-populated {
                padding: 15px 15px 15px 15px;
            }

            .elementor-15117 .elementor-element.elementor-element-d5b1678 {
                padding: 20px 15px 20px 15px;
            }

            .elementor-15117 .elementor-element.elementor-element-ff364ea>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-15117 .elementor-element.elementor-element-19ff906 {
                text-align: center;
            }

            .elementor-15117 .elementor-element.elementor-element-0452e5c>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu--main>.elementor-nav-menu>li>.elementor-nav-menu--dropdown,
            .elementor-15117 .elementor-element.elementor-element-5c521e8 .elementor-nav-menu__container.elementor-nav-menu--dropdown {
                margin-top: 13px !important;
            }

            .elementor-15117 .elementor-element.elementor-element-e0bd85b>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }
        }

        @media(max-width:767px) {
            .elementor-15117 .elementor-element.elementor-element-8e87aa0>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-15117 .elementor-element.elementor-element-3ba003d {
                padding: 0px 0px 0px 0px;
            }

            .elementor-15117 .elementor-element.elementor-element-bc09b71 {
                width: 20%;
            }

            .elementor-15117 .elementor-element.elementor-element-0388abe {
                width: 100%;
            }

            .elementor-15117 .elementor-element.elementor-element-6dd8213 {
                width: 80%;
            }

            .elementor-15117 .elementor-element.elementor-element-ff364ea {
                width: 50%;
            }

            .elementor-15117 .elementor-element.elementor-element-0452e5c {
                width: 50%;
            }

            .elementor-15117 .elementor-element.elementor-element-ddd9e0c .elementor-button {
                font-size: 13px;
                padding: 15px 20px 15px 20px;
            }

            .elementor-15117 .elementor-element.elementor-element-ddd9e0c>.elementor-widget-container {
                margin: 0px 0px 0px 103px;
            }

            .elementor-15117 .elementor-element.elementor-element-e0bd85b {
                width: 100%;
            }

            .elementor-15117 .elementor-element.elementor-element-1f7b6c4 .elementor-button {
                font-size: 13px;
                padding: 15px 20px 15px 20px;
            }
        }

        @media(min-width:768px) {
            .elementor-15117 .elementor-element.elementor-element-9c29ee5 {
                width: 42.414%;
            }

            .elementor-15117 .elementor-element.elementor-element-bc09b71 {
                width: 7.586%;
            }

            .elementor-15117 .elementor-element.elementor-element-0388abe {
                width: 15.25%;
            }

            .elementor-15117 .elementor-element.elementor-element-6dd8213 {
                width: 34.75%;
            }

            .elementor-15117 .elementor-element.elementor-element-ff364ea {
                width: 10.281%;
            }

            .elementor-15117 .elementor-element.elementor-element-0452e5c {
                width: 60.018%;
            }

            .elementor-15117 .elementor-element.elementor-element-e03f6d7 {
                width: 4.708%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-15117 .elementor-element.elementor-element-9c29ee5 {
                width: 23%;
            }

            .elementor-15117 .elementor-element.elementor-element-bc09b71 {
                width: 12%;
            }

            .elementor-15117 .elementor-element.elementor-element-0388abe {
                width: 25%;
            }

            .elementor-15117 .elementor-element.elementor-element-6dd8213 {
                width: 34%;
            }

            .elementor-15117 .elementor-element.elementor-element-ff364ea {
                width: 50%;
            }

            .elementor-15117 .elementor-element.elementor-element-0452e5c {
                width: 50%;
            }

            .elementor-15117 .elementor-element.elementor-element-e0bd85b {
                width: 100%;
            }
        }
    </style>
    <link rel='stylesheet' id='dce-style-css' href='https://senegindia.sn/wp-content/plugins/dynamic-content-for-elementor/assets/css/style.min.css?ver=1.12.1' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='https://senegindia.sn/wp-includes/css/dashicons.min.css?ver=5.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css' href='https://senegindia.sn/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.0.5' type='text/css' media='all' />
    <link rel='stylesheet' id='jet-blog-css' href='https://senegindia.sn/wp-content/plugins/jet-blog/assets/css/jet-blog.css?ver=2.2.10' type='text/css' media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css' href='https://senegindia.sn/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.5.8' type='text/css' media='all' />
    <link rel='stylesheet' id='sydney-google-fonts-css' href='https://fonts.googleapis.com/css?family=Raleway%3A400%2C600&#038;subset=latin&#038;display=swap' type='text/css' media='all' />
    <link rel='stylesheet' id='sydney-style-css' href='https://senegindia.sn/wp-content/themes/sydney/style.css?ver=20200129' type='text/css' media='all' />
    <style id='sydney-style-inline-css' type='text/css'>
        .site-header {
            background-color: rgba(38, 50, 70, 0.9);
        }

        body,
        #mainnav ul ul a {
            font-family: Raleway;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        #mainnav ul li a,
        .portfolio-info,
        .roll-testimonials .name,
        .roll-team .team-content .name,
        .roll-team .team-item .team-pop .name,
        .roll-tabs .menu-tab li a,
        .roll-testimonials .name,
        .roll-project .project-filter li a,
        .roll-button,
        .roll-counter .name-count,
        .roll-counter .numb-count button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            font-family: Raleway;
        }

        .site-title {
            font-size: 32px;
        }

        .site-description {
            font-size: 16px;
        }

        #mainnav ul li a {
            font-size: 14px;
        }

        h1 {
            font-size: 52px;
        }

        h2 {
            font-size: 42px;
        }

        h3 {
            font-size: 32px;
        }

        h4 {
            font-size: 25px;
        }

        h5 {
            font-size: 20px;
        }

        h6 {
            font-size: 18px;
        }

        body {
            font-size: 16px;
        }

        .single .hentry .title-post {
            font-size: 36px;
        }

        .header-image {
            background-size: cover;
        }

        .header-image {
            height: 300px;
        }

        .go-top:hover svg,
        .sydney_contact_info_widget span {
            fill: #d65050;
        }

        .site-header.float-header {
            background-color: rgba(0, 0, 0, 0.9);
        }

        @media only screen and (max-width: 1024px) {
            .site-header {
                background-color: #000000;
            }
        }

        .site-title a,
        .site-title a:hover {
            color: #ffffff
        }

        .site-description {
            color: #ffffff
        }

        #mainnav ul li a,
        #mainnav ul li::before {
            color: #ffffff
        }

        #mainnav .sub-menu li a {
            color: #ffffff
        }

        #mainnav .sub-menu li a {
            background: #1c1c1c
        }

        .text-slider .maintitle,
        .text-slider .subtitle {
            color: #ffffff
        }

        body {
            color: #47425d
        }

        #secondary {
            background-color: #ffffff
        }

        #secondary,
        #secondary a {
            color: #767676
        }

        .footer-widgets {
            background-color: #252525
        }

        .btn-menu .sydney-svg-icon {
            fill: #ffffff
        }

        #mainnav ul li a:hover {
            color: #d65050
        }

        .site-footer {
            background-color: #1c1c1c
        }

        .site-footer,
        .site-footer a {
            color: #666666
        }

        .overlay {
            background-color: #000000
        }

        .page-wrap {
            padding-top: 83px;
        }

        .page-wrap {
            padding-bottom: 100px;
        }

        @media only screen and (max-width: 1025px) {
            .mobile-slide {
                display: block;
            }

            .slide-item {
                background-image: none !important;
            }

            .header-slider {}

            .slide-item {
                height: auto !important;
            }

            .slide-inner {
                min-height: initial;
            }
        }

        @media only screen and (max-width: 780px) {
            h1 {
                font-size: 32px;
            }

            h2 {
                font-size: 28px;
            }

            h3 {
                font-size: 22px;
            }

            h4 {
                font-size: 18px;
            }

            h5 {
                font-size: 16px;
            }

            h6 {
                font-size: 14px;
            }
        }
    </style>
    <!--[if lte IE 9]>
<link rel='stylesheet' id='sydney-ie9-css'  href='https://senegindia.sn/wp-content/themes/sydney/css/ie9.css?ver=5.7.2' type='text/css' media='all' />
<![endif]-->
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.7.2' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.12.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.12.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.12.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css' href='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.12.0' type='text/css' media='all' />
    <script type='text/javascript' src='https://senegindia.sn/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script type='text/javascript' id='monsterinsights-frontend-script-js-extra'>
        /* <![CDATA[ */
        var monsterinsights_frontend = {
            "js_events_tracking": "true",
            "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
            "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]",
            "home_url": "https:\/\/senegindia.sn",
            "hash_tracking": "false",
            "ua": "UA-169907576-1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/google-analytics-premium/assets/js/frontend-gtag.min.js?ver=7.15.0' id='monsterinsights-frontend-script-js'></script>
    <link rel="https://api.w.org/" href="https://senegindia.sn/wp-json/" />
    <link rel="alternate" type="application/json" href="https://senegindia.sn/wp-json/wp/v2/pages/10082" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://senegindia.sn/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://senegindia.sn/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.7.2" />
    <link rel="canonical" href="https://senegindia.sn/" />
    <link rel='shortlink' href='https://senegindia.sn/' />
    <link rel="alternate" type="application/json+oembed" href="https://senegindia.sn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsenegindia.sn%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://senegindia.sn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsenegindia.sn%2F&#038;format=xml" />
    <meta name="google-site-verification" content="ItD5PJUXQpk9Fd0P2AtWPMOf5xVmfnrY-_xZkslEI3k" />
    <script type='text/javascript'>
        console.warn('PixelYourSite: no pixel configured.');
    </script>
    <link rel="icon" href="https://senegindia.sn/wp-content/uploads/2019/04/logo-43x43.png" sizes="32x32" />
    <link rel="icon" href="https://senegindia.sn/wp-content/uploads/2019/04/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://senegindia.sn/wp-content/uploads/2019/04/logo.png" />
    <meta name="msapplication-TileImage" content="https://senegindia.sn/wp-content/uploads/2019/04/logo.png" />
    <style type="text/css" id="wp-custom-css">
        .timeline li .tl-circ {

            background: #b51700;
            color: #fff;

            border: 5px solid #b51700;

        }

        #en {


            display: none;

        }


        .elementor-tablet-align-left {
            text-align: center;
        }


        .elementor-16 .elementor-element.elementor-element-07318fe>.elementor-element-populated {

            margin: 50px 50px 50px 50px;
            padding: 50px 50px 50px 50px;

        }

        .elementor-16 .elementor-element.elementor-element-744dbdd>.elementor-element-populated {

            margin: 50px 50px 50px 50px;
            padding: 50px 50px 50px 50px;
        }

        .elementor-16 .elementor-element.elementor-element-7b21c1f {
            padding: 0px 0px 0px 0px;
            margin: 10px;
        }


        .elementor-104 .elementor-element.elementor-element-199ecd8>.elementor-element-populated {

            margin: 100px 100px 100px 100px;
        }



        .elementor-104 .elementor-element.elementor-element-3e1a162>.elementor-element-populated {
            margin: 100px 100px 100px 100px;
        }





        .elementor-104 .elementor-element.elementor-element-6ce73e5c>.elementor-element-populated {
            padding: 0px 0px 0px 5px;
        }


        .elementor-12378 .elementor-element.elementor-element-2b05134>.elementor-element-populated {
            padding: 45px 45px 45px 45px;
        }



        .elementor-799 .elementor-element.elementor-element-5a925a0.elementor-widget-heading .elementor-heading-title {

            text-align: center;
        }

        .elementor-104 .elementor-element.elementor-element-672268b a.elementor-button,
        .elementor-104 .elementor-element.elementor-element-672268b .elementor-button {

            float: right;

        }

        .elementor-799 .elementor-element.elementor-element-e9fac46>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            padding: 25px 25px 25px 25px;
        }


        .elementor-1326 .elementor-element.elementor-element-48427593>.elementor-element-populated {
            padding: 25px 25px 25px 25px;
        }




        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
            font-size: 50px;
        }


        .elementor-1326 .elementor-element.elementor-element-37ac2f90>.elementor-element-populated {
            padding: 45px 45px 45px 45px;
        }

        .elementor-align-right {

            text-align: center;

        }

        .elementor-16 .elementor-element.elementor-element-35275032 {

            margin-top: -15px;
            margin-bottom: -15px;

        }

        .elementor-7778 .elementor-element.elementor-element-53dd1a2d div.elementor-menu-toggle {

            background: #b51700;
        }


        .elementor-12378 .elementor-element.elementor-element-4faf547d div.elementor-menu-toggle {

            background: #b51700;
        }

        .elementor-12399 .elementor-element.elementor-element-2b2ae5e6 div.elementor-menu-toggle {
            color: #ffffff;
            background: #b51700;
        }

        .elementor-nav-menu--main .elementor-nav-menu ul {
            position: absolute;
            width: 12em;
            text-transform: uppercase;
            border-width: 0;
            border-style: solid;
            padding: 0;
        }


        .elementor-12403 .elementor-element.elementor-element-45b27f6e div.elementor-menu-toggle {
            color: #ffffff;
            background: #b51700;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body class="home page-template page-template-elementor_canvas page page-id-10082 exclusive-addons-elementor elementor-dce ehf-header ehf-template-sydney ehf-stylesheet-sydney menu-inline elementor-default elementor-template-canvas elementor-kit-14503 elementor-page elementor-page-10082">
    <div data-elementor-type="wp-page" data-elementor-id="10082" data-post-id="10082" data-obj-id="10082" class="elementor elementor-10082 dce-elementor-post-10082" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-552d6b8 elementor-section-full_width elementor-section-content-middle elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="552d6b8" data-element_type="section" data-settings="{&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;],&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cd89659" data-id="cd89659" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-bf57104 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bf57104" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e56e592 elementor-hidden-phone" data-id="e56e592" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-81c4f9b elementor-icon-list--layout-inline elementor-align-center elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="81c4f9b" data-element_type="widget" data-widget_type="icon-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <span class="elementor-icon-list-icon">
                                                                                    <i aria-hidden="true" class="fab fa-whatsapp"></i> </span>
                                                                                <span class="elementor-icon-list-text">+221 77 777 60 60</span>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <span class="elementor-icon-list-icon">
                                                                                    <i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
                                                                                <span class="elementor-icon-list-text"> +221 33 820 77 96</span>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <span class="elementor-icon-list-icon">
                                                                                    <i aria-hidden="true" class="fas fa-envelope"></i> </span>
                                                                                <span class="elementor-icon-list-text">contact@senegindia.com</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1b3d3ef elementor-hidden-phone" data-id="1b3d3ef" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-c7aed0b elementor-widget elementor-widget-heading" data-id="c7aed0b" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Suivez-nous :</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-31dae3d" data-id="31dae3d" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-9a9238d elementor-icon-list--layout-inline elementor-align-left elementor-tablet-align-left elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="9a9238d" data-element_type="widget" data-widget_type="icon-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <a href="https://twitter.com/senegindiasa" target="_blank"> <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fab fa-twitter"></i> </span>
                                                                                    <span class="elementor-icon-list-text"></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <a href="https://linkedin.com/company/senegindia-sa/" target="_blank"> <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fab fa-linkedin-in"></i> </span>
                                                                                    <span class="elementor-icon-list-text"></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <a href="https://www.facebook.com/senegindia/" target="_blank"> <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fab fa-facebook-f"></i> </span>
                                                                                    <span class="elementor-icon-list-text"></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <a href="https://www.instagram.com/senegindia" target="_blank"> <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fab fa-instagram"></i> </span>
                                                                                    <span class="elementor-icon-list-text"></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e5fafa9 elementor-hidden-phone" data-id="e5fafa9" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-4edd546 elementor-hidden-phone elementor-widget elementor-widget-heading" data-id="4edd546" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Lun-ven : 08h-18h / Sam : 09h-13h</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-4194d3d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4194d3d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e6bd1bd" data-id="e6bd1bd" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-0f6e615 dce_masking-none elementor-widget elementor-widget-image" data-id="0f6e615" data-element_type="widget" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <a href="https://senegindia.sn">
                                                                                <img width="768" height="432" src="https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-768x432.jpg" class="attachment-medium_large size-medium_large" alt="" loading="lazy" srcset="https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-768x432.jpg 768w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-300x169.jpg 300w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-1024x576.jpg 1024w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-1536x864.jpg 1536w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-830x467.jpg 830w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-230x129.jpg 230w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-350x197.jpg 350w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-480x270.jpg 480w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1-1320x743.jpg 1320w, https://senegindia.sn/wp-content/uploads/2019/12/senegindia_black-1.jpg 1920w" sizes="(max-width: 768px) 100vw, 768px" /> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7a1ab92" data-id="7a1ab92" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-29764cb elementor-nav-menu__align-right elementor-nav-menu--stretch elementor-nav-menu--indicator-classic elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="29764cb" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
                                                                    <div class="elementor-widget-container">
                                                                        <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-background e--animation-fade">
                                                                            <ul id="menu-1-29764cb" class="elementor-nav-menu">
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10082 current_page_item menu-item-13079"><a href="https://senegindia.sn/" aria-current="page" class="elementor-item elementor-item-active">ACCUEIL</a></li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13370"><a href="https://senegindia.sn/apropos/" class="elementor-item">A PROPOS</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14151"><a href="#" class="elementor-item elementor-item-anchor">SERVICES</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13376"><a href="https://senegindia.sn/immobilier/" class="elementor-sub-item">IMMOBILIER</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13374"><a href="https://senegindia.sn/agriculture/" class="elementor-sub-item">AGRICULTURE</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13375"><a href="https://senegindia.sn/industrie/" class="elementor-sub-item">INDUSTRIE</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14003"><a href="#" class="elementor-item elementor-item-anchor">Acquérir</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14040"><a href="https://senegindia.sn/villa/" class="elementor-sub-item">Acquérir une villa</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14049"><a href="https://senegindia.sn/appartement/" class="elementor-sub-item">Acquérir un appartement</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14004"><a href="https://senegindia.sn/realisation/" class="elementor-item">Nos Réalisations</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14816"><a href="https://senegindia.sn/residence-evoque/" class="elementor-sub-item">Residence Evoque</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14077"><a href="https://senegindia.sn/aquanique/" class="elementor-sub-item">Aquanique</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14089"><a href="https://senegindia.sn/sd-city/" class="elementor-sub-item">SD-city</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14107"><a href="https://senegindia.sn/sv-city/" class="elementor-sub-item">SV CITY</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14633"><a href="https://senegindia.sn/sp-city/" class="elementor-sub-item">SP-City</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13354"><a href="https://senegindia.sn/contact/" class="elementor-item">CONTACT</a></li>
                                                                            </ul>
                                                                        </nav>
                                                                        <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Permuter le menu" aria-expanded="false">
                                                                            <i class="eicon-menu-bar" aria-hidden="true"></i>
                                                                            <span class="elementor-screen-only">Menu</span>
                                                                        </div>
                                                                        <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                                                                            <ul id="menu-2-29764cb" class="elementor-nav-menu">
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10082 current_page_item menu-item-13079"><a href="https://senegindia.sn/" aria-current="page" class="elementor-item elementor-item-active">ACCUEIL</a></li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13370"><a href="https://senegindia.sn/apropos/" class="elementor-item">A PROPOS</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14151"><a href="#" class="elementor-item elementor-item-anchor">SERVICES</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13376"><a href="https://senegindia.sn/immobilier/" class="elementor-sub-item">IMMOBILIER</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13374"><a href="https://senegindia.sn/agriculture/" class="elementor-sub-item">AGRICULTURE</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13375"><a href="https://senegindia.sn/industrie/" class="elementor-sub-item">INDUSTRIE</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14003"><a href="#" class="elementor-item elementor-item-anchor">Acquérir</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14040"><a href="https://senegindia.sn/villa/" class="elementor-sub-item">Acquérir une villa</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14049"><a href="https://senegindia.sn/appartement/" class="elementor-sub-item">Acquérir un appartement</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14004"><a href="https://senegindia.sn/realisation/" class="elementor-item">Nos Réalisations</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14816"><a href="https://senegindia.sn/residence-evoque/" class="elementor-sub-item">Residence Evoque</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14077"><a href="https://senegindia.sn/aquanique/" class="elementor-sub-item">Aquanique</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14089"><a href="https://senegindia.sn/sd-city/" class="elementor-sub-item">SD-city</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14107"><a href="https://senegindia.sn/sv-city/" class="elementor-sub-item">SV CITY</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14633"><a href="https://senegindia.sn/sp-city/" class="elementor-sub-item">SP-City</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13354"><a href="https://senegindia.sn/contact/" class="elementor-item">CONTACT</a></li>
                                                                            </ul>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6f2bc47 elementor-hidden-tablet elementor-hidden-phone" data-id="6f2bc47" data-element_type="column" id="en">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-3f5f0b9 elementor-align-center elementor-mobile-align-center elementor-hidden-phone elementor-widget elementor-widget-button" data-id="3f5f0b9" data-element_type="widget" data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://senegindia.net/" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-icon elementor-align-icon-right">
                                                                                    </span>
                                                                                    <span class="elementor-button-text">EN</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ea44619" data-id="ea44619" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-e385c66 elementor-align-right elementor-widget elementor-widget-button" data-id="e385c66" data-element_type="widget" data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://senegindia.sn/villa" class="elementor-button-link elementor-button elementor-size-xs" role="button">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-icon elementor-align-icon-right">
                                                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i> </span>
                                                                                    <span class="elementor-button-text">Acheter une villa</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-33746ee1 elementor-section-height-full elementor-section-items-stretch elementor-section-content-bottom elementor-section-boxed elementor-section-height-default" data-id="33746ee1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:&quot;13928&quot;,&quot;url&quot;:&quot;https:\/\/senegindia.sn\/wp-content\/uploads\/2019\/12\/AQUANIQUE-BROCHURE3-1.jpg&quot;},{&quot;id&quot;:&quot;13929&quot;,&quot;url&quot;:&quot;https:\/\/senegindia.sn\/wp-content\/uploads\/2019\/12\/SLIDE01-1024x683-1.jpg&quot;},{&quot;id&quot;:&quot;13930&quot;,&quot;url&quot;:&quot;https:\/\/senegindia.sn\/wp-content\/uploads\/2019\/12\/slide-svcity-pool-night-2.jpg&quot;},{&quot;id&quot;:&quot;13931&quot;,&quot;url&quot;:&quot;https:\/\/senegindia.sn\/wp-content\/uploads\/2019\/12\/slide-sdcity-bird-view-1.jpg&quot;},{&quot;id&quot;:&quot;13932&quot;,&quot;url&quot;:&quot;https:\/\/senegindia.sn\/wp-content\/uploads\/2019\/12\/sdc-entrance_gate_night.jpg&quot;}],&quot;background_slideshow_slide_transition&quot;:&quot;slide_left&quot;,&quot;background_slideshow_slide_duration&quot;:3000,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d19fffa" data-id="d19fffa" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-23e51502 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="23e51502" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5d034b40" data-id="5d034b40" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-534c9908 elementor-widget elementor-widget-heading" data-id="534c9908" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">BIENVENUE / WELCOME</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-496b06d1 elementor-widget elementor-widget-text-editor" data-id="496b06d1" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>SENEGINDIA met en avant de grands projets immobiliers tels que Aquanique, SV City et SN City. Nous gèrons et exécutons plusieurs projets de bâtiments commerciaux, industriels, résidentiels et institutionnels.<span class="Apple-converted-space"> </span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-495b219b" data-id="495b219b" data-element_type="column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="elementor-element elementor-element-f429a3b elementor-widget elementor-widget-spacer" data-id="f429a3b" data-element_type="widget" data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-51b7126f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="51b7126f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-72e6b5e2" data-id="72e6b5e2" data-element_type="column">
                                <div class="elementor-column-wrap">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-21c593d4 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="21c593d4" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-237299d0" data-id="237299d0" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-425be02b elementor-widget elementor-widget-heading" data-id="425be02b" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">Senegindia, <br> N°1 de l'immobilier</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5877131f elementor-widget elementor-widget-text-editor" data-id="5877131f" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>SENEGINDIA S.A est une entreprise spécialisée dans les secteurs de la construction immobilière et de l’agriculture. Implantés au Sénégal depuis 2008, avec plusieurs dizaines de milliards d’investissements dans tous les secteurs confondus, nous avons réalisés plusieurs projets. Depuis 2008 nous innovons dans le domaine de l’agriculture et de la construction immobilière. Nous sommes fiers d’offrir aux populations des services à la hauteur de leurs attentes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-8244ea8 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="8244ea8" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-41e717c1" data-id="41e717c1" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-4b8ee834 elementor-tablet-align-left elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="4b8ee834" data-element_type="widget" data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://senegindia.sn/apropos" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">LA COMPAGNIE</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-682aabb6" data-id="682aabb6" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-55554550 elementor-align-left elementor-tablet-align-center elementor-widget elementor-widget-button" data-id="55554550" data-element_type="widget" data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://senegindia.sn/projets" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">NOS PROJETS</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-64fd2975" data-id="64fd2975" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-528453a9 elementor-skin-carousel elementor-arrows-yes elementor-pagination-type-bullets elementor-pagination-position-outside elementor-widget elementor-widget-media-carousel" data-id="528453a9" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;1&quot;,&quot;slides_per_view_tablet&quot;:&quot;1&quot;,&quot;skin&quot;:&quot;carousel&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="media-carousel.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-swiper">
                                                    <div class="elementor-main-swiper swiper-container">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="elementor-carousel-image" style="background-image: url(https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.43.43.png)">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="elementor-carousel-image" style="background-image: url(https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.13.04.png)">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="elementor-carousel-image" style="background-image: url(https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.43.49.png)">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="elementor-carousel-image" style="background-image: url(https://senegindia.sn/wp-content/uploads/2019/12/Capture-d’écran-2019-12-05-à-11.14.08.png)">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="elementor-carousel-image" style="background-image: url(https://senegindia.sn/wp-content/uploads/2019/12/slide-svcity-pool-night-1.jpg)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-pagination"></div>
                                                        <div class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i class="eicon-chevron-left" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Précédent</span>
                                                        </div>
                                                        <div class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i class="eicon-chevron-right" aria-hidden="true"></i>
                                                            <span class="elementor-screen-only">Suivant</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-68a6382a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="68a6382a" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c5a9b3e" data-id="6c5a9b3e" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-19404431 elementor-widget elementor-widget-menu-anchor" data-id="19404431" data-element_type="widget" data-widget_type="menu-anchor.default">
                                            <div class="elementor-widget-container">
                                                <div id="services" class="elementor-menu-anchor"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-73b23fd0 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="73b23fd0" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3e5defe3" data-id="3e5defe3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-40c5b2e6 elementor-widget elementor-widget-heading" data-id="40c5b2e6" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-large">IMMOBILIER</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-41840728 elementor-widget elementor-widget-text-editor" data-id="41840728" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Concepts et design à la limite de la perfection pour vous offrir des beautés envoutantes</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5214a676 elementor-mobile-align-justify elementor-widget elementor-widget-button" data-id="5214a676" data-element_type="widget" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="https://senegindia.sn/immobilier" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">EN SAVOIR PLUS</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-88153e6" data-id="88153e6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-19401c77 elementor-widget elementor-widget-heading" data-id="19401c77" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-large">AGRICULTURE</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e82985 elementor-widget elementor-widget-text-editor" data-id="e82985" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>La participation de Senegindia aux efforts d’autosuffisance alimentaire au Senegal</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7294fa7b elementor-mobile-align-justify elementor-widget elementor-widget-button" data-id="7294fa7b" data-element_type="widget" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="https://senegindia.sn/agriculture" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">EN SAVOIR PLUS</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4cc08337" data-id="4cc08337" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-42b870a9 elementor-widget elementor-widget-heading" data-id="42b870a9" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-large">INDUSTRIE</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4523ae79 elementor-widget elementor-widget-text-editor" data-id="4523ae79" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>Vente et location de matériaux de construction, briques, fer, béton etc &#8230; </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-46d0aba4 elementor-mobile-align-justify elementor-widget elementor-widget-button" data-id="46d0aba4" data-element_type="widget" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="https://senegindia.sn/industrie" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">EN SAVOIR PLUS</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-2d512dd8 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2d512dd8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35a82380" data-id="35a82380" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-6129615b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6129615b" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7f4e9add" data-id="7f4e9add" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-76753d1a elementor-view-default elementor-widget elementor-widget-icon" data-id="76753d1a" data-element_type="widget" data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <div class="elementor-icon">
                                                                                <i aria-hidden="true" class="fas fa-city"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2f99841b elementor-widget elementor-widget-heading" data-id="2f99841b" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h3 class="elementor-heading-title elementor-size-medium"> Vous recherchez un appartement ?</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-12918a44 elementor-align-center elementor-widget elementor-widget-button" data-id="12918a44" data-element_type="widget" data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://senegindia.sn/appartement" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">Acquérir un appartement</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-52d41043" data-id="52d41043" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-5e0a8aa5 elementor-view-default elementor-widget elementor-widget-icon" data-id="5e0a8aa5" data-element_type="widget" data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <div class="elementor-icon">
                                                                                <i aria-hidden="true" class="fas fa-layer-group"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-46bc94e6 elementor-widget elementor-widget-heading" data-id="46bc94e6" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">vous recherchez un terrain</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-5cea4cab elementor-align-center elementor-widget elementor-widget-button" data-id="5cea4cab" data-element_type="widget" data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://senegindia.sn/sp-city" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">Acquérir un térrain</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b4317ef" data-id="b4317ef" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-4c6a84e elementor-view-default elementor-widget elementor-widget-icon" data-id="4c6a84e" data-element_type="widget" data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <div class="elementor-icon">
                                                                                <i aria-hidden="true" class="fas fa-home"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-6ca5bd2 elementor-widget elementor-widget-heading" data-id="6ca5bd2" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Vous recherchez <br>une Villa ? </h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-90f1ff6 elementor-align-center elementor-widget elementor-widget-button" data-id="90f1ff6" data-element_type="widget" data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://senegindia.sn/villa" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">Acquérir<BR> une Villa</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-3fb41524 elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default" data-id="3fb41524" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;none&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-680e0715" data-id="680e0715" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-a22e77f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a22e77f" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-65e75d12" data-id="65e75d12" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-53b55cfc dce_masking-none elementor-widget elementor-widget-image" data-id="53b55cfc" data-element_type="widget" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="913" height="1024" src="https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6-913x1024.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6-913x1024.png 913w, https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6-267x300.png 267w, https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6-768x861.png 768w, https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6-830x931.png 830w, https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6-230x258.png 230w, https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6-350x393.png 350w, https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6-480x538.png 480w, https://senegindia.sn/wp-content/uploads/2019/12/AQUANIQUE-BROCHURE6.png 1218w" sizes="(max-width: 913px) 100vw, 913px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4ce53fd2" data-id="4ce53fd2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-264b561b elementor-widget elementor-widget-heading" data-id="264b561b" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h3 class="elementor-heading-title elementor-size-small">LES PROJETS SENEGINDIA</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-78e20e73 elementor-widget elementor-widget-text-editor" data-id="78e20e73" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>Depuis 2008, nous innovons dans le domaine de la construction immobilière et de l’agriculture. Nous sommes fiers d’offrir aux populations des services à la hauteur de leurs attentes.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-11492c8e elementor-align-left elementor-mobile-align-center elementor-tablet-align-center elementor-widget elementor-widget-button" data-id="11492c8e" data-element_type="widget" data-widget_type="button.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-button-wrapper">
                                                                            <a href="https://senegindia.sn/projets" class="elementor-button-link elementor-button elementor-size-md elementor-animation-grow" role="button">
                                                                                <span class="elementor-button-content-wrapper">
                                                                                    <span class="elementor-button-text">DECOUVRIR TOUS NOS PROJETS</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-66f706ad elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="66f706ad" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6149c662" data-id="6149c662" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-18ad2603 elementor-widget elementor-widget-heading" data-id="18ad2603" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">Nos grands projets immobilier</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-41ba9188 elementor-widget elementor-widget-heading" data-id="41ba9188" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Découvrez nos meilleurs projets immobilier</h5>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6f834816 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6f834816" data-element_type="widget" data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-c3570f8 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c3570f8" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-narrow">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e68f01a" data-id="e68f01a" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-55c5b8e elementor-flip-box--effect-fade elementor-widget elementor-widget-flip-box" data-id="55c5b8e" data-element_type="widget" data-widget_type="flip-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-flip-box">
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__front">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__back">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                        <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="https://senegindia.sn/sd-city">
                                                                                            Découvrir </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-c82546f elementor-position-top dce_masking-none elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="c82546f" data-element_type="widget" data-widget_type="image-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">SD CITY</h3>
                                                                                <p class="elementor-image-box-description">LA CITE LUMIERE</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-07a4af3" data-id="07a4af3" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-a021a2d elementor-flip-box--effect-fade elementor-widget elementor-widget-flip-box" data-id="a021a2d" data-element_type="widget" data-widget_type="flip-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-flip-box">
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__front">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__back">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                        <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="https://senegindia.sn/aquanique-2">
                                                                                            Découvrir </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-3925193 elementor-position-top dce_masking-none elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="3925193" data-element_type="widget" data-widget_type="image-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">AQUANIQUE</h3>
                                                                                <p class="elementor-image-box-description">LE LUXE AU BORD DE L'EAU</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8b86642" data-id="8b86642" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-9824a65 elementor-flip-box--effect-fade elementor-widget elementor-widget-flip-box" data-id="9824a65" data-element_type="widget" data-widget_type="flip-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-flip-box">
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__front">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__back">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                        <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="https://senegindia.sn/residence-evoque">
                                                                                            Découvrir </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-e31f6fe elementor-position-top dce_masking-none elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="e31f6fe" data-element_type="widget" data-widget_type="image-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">Résidence Evoque</h3>
                                                                                <p class="elementor-image-box-description">Votre Meilleure vie vous attend</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-15d33ba elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="15d33ba" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-narrow">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c28b520" data-id="c28b520" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-fd07605 elementor-flip-box--effect-fade elementor-widget elementor-widget-flip-box" data-id="fd07605" data-element_type="widget" data-widget_type="flip-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-flip-box">
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__front">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__back">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                        <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="https://senegindiaa.sn/sv-city">
                                                                                            Découvrir </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-ab14492 elementor-position-top dce_masking-none elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="ab14492" data-element_type="widget" data-widget_type="image-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title"><a href="https://senegindiaa.sovereign-studio.com/immobilier">SV CITY</a></h3>
                                                                                <p class="elementor-image-box-description">RESIDENCES LUXURIEUSES</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-452dda2" data-id="452dda2" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-6960630 elementor-flip-box--effect-fade elementor-widget elementor-widget-flip-box" data-id="6960630" data-element_type="widget" data-widget_type="flip-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-flip-box">
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__front">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__back">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                        <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="https://senegindia.sn/sp-city">
                                                                                            Découvrir </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-a4dbf91 elementor-position-top dce_masking-none elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="a4dbf91" data-element_type="widget" data-widget_type="image-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">SP-CITY</h3>
                                                                                <p class="elementor-image-box-description">Sangalkam</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c772e81" data-id="c772e81" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-d194876 elementor-flip-box--effect-fade elementor-widget elementor-widget-flip-box" data-id="d194876" data-element_type="widget" data-widget_type="flip-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-flip-box">
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__front">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__back">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                        <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="#">
                                                                                            Découvrir </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-11934a0 elementor-position-top dce_masking-none elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="11934a0" data-element_type="widget" data-widget_type="image-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title"><a href="https://senegindiaa.sovereign-studio.com/immobilier">SN CITY</a></h3>
                                                                                <p class="elementor-image-box-description">PARCELLES VIABILISÉES</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-9135d50 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9135d50" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-narrow">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ad274a1" data-id="ad274a1" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-a4f0ed3 elementor-flip-box--effect-fade elementor-widget elementor-widget-flip-box" data-id="a4f0ed3" data-element_type="widget" data-widget_type="flip-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-flip-box">
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__front">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-flip-box__layer elementor-flip-box__back">
                                                                                <div class="elementor-flip-box__layer__overlay">
                                                                                    <div class="elementor-flip-box__layer__inner">


                                                                                        <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="#">
                                                                                            Découvrir </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-8501a71 elementor-position-top dce_masking-none elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="8501a71" data-element_type="widget" data-widget_type="image-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image-box-wrapper">
                                                                            <div class="elementor-image-box-content">
                                                                                <h3 class="elementor-image-box-title">KEUR OUSMANE</h3>
                                                                                <p class="elementor-image-box-description">RUFISQUE</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-64effa8" data-id="64effa8" data-element_type="column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-02eee9c" data-id="02eee9c" data-element_type="column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-6f5136d5 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f5136d5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7fa813ba" data-id="7fa813ba" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-777a5452 elementor-view-default elementor-widget elementor-widget-icon" data-id="777a5452" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="far fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-27dd9d62 elementor-widget elementor-widget-heading" data-id="27dd9d62" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">Abonnez-vous à notre newsletter</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-783bd041 elementor-widget elementor-widget-heading" data-id="783bd041" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Recevez gratuitement toutes nos actus, promotions, nouveaux projets et événements</h5>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3f467de3 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="3f467de3" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;33&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                                            <div class="elementor-widget-container">
                                                <form class="elementor-form" method="post" name="New Form">
                                                    <input type="hidden" name="post_id" value="10082" />
                                                    <input type="hidden" name="form_id" value="3f467de3" />

                                                    <input type="hidden" name="queried_id" value="10082" />

                                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-33">
                                                            <label for="form-field-name" class="elementor-field-label elementor-screen-only">Name</label><input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Nom &amp; Prénom">
                                                        </div>
                                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-33 elementor-field-required">
                                                            <label for="form-field-email" class="elementor-field-label elementor-screen-only">Adresse Email</label><input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-33 e-form__buttons">
                                                            <button type="submit" class="elementor-button elementor-size-md">
                                                                <span>
                                                                    <span class=" elementor-button-icon">
                                                                    </span>
                                                                    <span class="elementor-button-text">M'abonner</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-769c3040 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="769c3040" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ea19c7a" data-id="1ea19c7a" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-5b540070 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5b540070" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-113676ee" data-id="113676ee" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-26f26590 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="26f26590" data-element_type="widget" data-widget_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon">
                                                                                <span class="elementor-icon elementor-animation-grow">
                                                                                    <i aria-hidden="true" class="fas fa-book-reader"></i> </span>
                                                                            </div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 class="elementor-icon-box-title">
                                                                                    <span>Brochures</span>
                                                                                </h3>
                                                                                <p class="elementor-icon-box-description">Retrouvez toutes les brochures de nos différents projets en visitant leurs pages.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-40fb620b" data-id="40fb620b" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-149e7271 elementor-view-stacked elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="149e7271" data-element_type="widget" data-widget_type="icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-box-wrapper">
                                                                            <div class="elementor-icon-box-icon">
                                                                                <span class="elementor-icon elementor-animation-grow">
                                                                                    <i aria-hidden="true" class="fas fa-handshake"></i> </span>
                                                                            </div>
                                                                            <div class="elementor-icon-box-content">
                                                                                <h3 class="elementor-icon-box-title">
                                                                                    <span>Nous rencontrer</span>
                                                                                </h3>
                                                                                <p class="elementor-icon-box-description">Venez nous visiter à notre siège social - Yoff Virage - pour tous vos projets de construction.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-3ea55e01 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="3ea55e01" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1cfd8a0d" data-id="1cfd8a0d" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-1c57d4f2 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1c57d4f2" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-546c39d1" data-id="546c39d1" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-5762d1e8 dce_masking-none elementor-widget elementor-widget-image" data-id="5762d1e8" data-element_type="widget" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="300" height="169" src="https://senegindia.sn/wp-content/uploads/2019/12/envato_white-300x169.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://senegindia.sn/wp-content/uploads/2019/12/envato_white-300x169.png 300w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-1024x576.png 1024w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-768x432.png 768w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-1536x864.png 1536w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-830x467.png 830w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-230x129.png 230w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-350x197.png 350w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-480x270.png 480w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-1320x743.png 1320w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white.png 1920w" sizes="(max-width: 300px) 100vw, 300px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1bb0ef2d" data-id="1bb0ef2d" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-34985f31 elementor-widget elementor-widget-heading" data-id="34985f31" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h4 class="elementor-heading-title elementor-size-default">MENU</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-3d76d8b3 elementor-nav-menu__align-left elementor-nav-menu--dropdown-none elementor-nav-menu--indicator-classic elementor-widget elementor-widget-nav-menu" data-id="3d76d8b3" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;}" data-widget_type="nav-menu.default">
                                                                    <div class="elementor-widget-container">
                                                                        <nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-underline e--animation-fade">
                                                                            <ul id="menu-1-3d76d8b3" class="elementor-nav-menu sm-vertical">
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10082 current_page_item menu-item-13079"><a href="https://senegindia.sn/" aria-current="page" class="elementor-item elementor-item-active">ACCUEIL</a></li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13370"><a href="https://senegindia.sn/apropos/" class="elementor-item">A PROPOS</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14151"><a href="#" class="elementor-item elementor-item-anchor">SERVICES</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13376"><a href="https://senegindia.sn/immobilier/" class="elementor-sub-item">IMMOBILIER</a></li>
                                                                                        
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14003"><a href="#" class="elementor-item elementor-item-anchor">Acquérir</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14040"><a href="https://senegindia.sn/villa/" class="elementor-sub-item">Acquérir une villa</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14049"><a href="https://senegindia.sn/appartement/" class="elementor-sub-item">Acquérir un appartement</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14004"><a href="https://senegindia.sn/realisation/" class="elementor-item">Nos Réalisations</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14816"><a href="https://senegindia.sn/residence-evoque/" class="elementor-sub-item">Residence Evoque</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14077"><a href="https://senegindia.sn/aquanique/" class="elementor-sub-item">Aquanique</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14089"><a href="https://senegindia.sn/sd-city/" class="elementor-sub-item">SD-city</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14107"><a href="https://senegindia.sn/sv-city/" class="elementor-sub-item">SV CITY</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14633"><a href="https://senegindia.sn/sp-city/" class="elementor-sub-item">SP-City</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13354"><a href="https://senegindia.sn/contact/" class="elementor-item">CONTACT</a></li>
                                                                            </ul>
                                                                        </nav>
                                                                        <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Permuter le menu" aria-expanded="false">
                                                                            <i class="eicon-menu-bar" aria-hidden="true"></i>
                                                                            <span class="elementor-screen-only">Menu</span>
                                                                        </div>
                                                                        <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
                                                                            <ul id="menu-2-3d76d8b3" class="elementor-nav-menu sm-vertical">
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10082 current_page_item menu-item-13079"><a href="https://senegindia.sn/" aria-current="page" class="elementor-item elementor-item-active">ACCUEIL</a></li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13370"><a href="https://senegindia.sn/apropos/" class="elementor-item">A PROPOS</a></li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14151"><a href="#" class="elementor-item elementor-item-anchor">SERVICES</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13376"><a href="https://senegindia.sn/immobilier/" class="elementor-sub-item">IMMOBILIER</a></li>
                                                                                       
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14003"><a href="#" class="elementor-item elementor-item-anchor">Acquérir</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14040"><a href="https://senegindia.sn/villa/" class="elementor-sub-item">Acquérir une villa</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14049"><a href="https://senegindia.sn/appartement/" class="elementor-sub-item">Acquérir un appartement</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-14004"><a href="https://senegindia.sn/realisation/" class="elementor-item">Nos Réalisations</a>
                                                                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14816"><a href="https://senegindia.sn/residence-evoque/" class="elementor-sub-item">Residence Evoque</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14077"><a href="https://senegindia.sn/aquanique/" class="elementor-sub-item">Aquanique</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14089"><a href="https://senegindia.sn/sd-city/" class="elementor-sub-item">SD-city</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14107"><a href="https://senegindia.sn/sv-city/" class="elementor-sub-item">SV CITY</a></li>
                                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14633"><a href="https://senegindia.sn/sp-city/" class="elementor-sub-item">SP-City</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13354"><a href="https://senegindia.sn/contact/" class="elementor-item">CONTACT</a></li>
                                                                            </ul>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-735925ca" data-id="735925ca" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-3d7a922c elementor-widget elementor-widget-heading" data-id="3d7a922c" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h4 class="elementor-heading-title elementor-size-default">Nos Projets</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-46cb92c elementor-tablet-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="46cb92c" data-element_type="widget" data-widget_type="icon-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <ul class="elementor-icon-list-items">
                                                                            <li class="elementor-icon-list-item">
                                                                                <a href="https://senegindia.sn/aquanique-2"> <span class="elementor-icon-list-text">AQUANIQUE</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item">
                                                                                <a href="https://senegindia.sn/sd-city"> <span class="elementor-icon-list-text">SD CITY</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item">
                                                                                <a href="https://senegindia.sn/sv-city"> <span class="elementor-icon-list-text">SV CITY</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item">
                                                                                <a href="#"> <span class="elementor-icon-list-text">SN CITY</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item">
                                                                                <a href="https://senegindia.sn/sp-city"> <span class="elementor-icon-list-text">SP CITY</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-147faf78" data-id="147faf78" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-9027353 elementor-widget elementor-widget-heading" data-id="9027353" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h4 class="elementor-heading-title elementor-size-default">Laissez-nous un message</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-45e2c5cc elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="45e2c5cc" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;25&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                                                                    <div class="elementor-widget-container">
                                                                        <form class="elementor-form" method="post" name="New Form">
                                                                            <input type="hidden" name="post_id" value="10082" />
                                                                            <input type="hidden" name="form_id" value="45e2c5cc" />

                                                                            <input type="hidden" name="queried_id" value="10082" />

                                                                            <div class="elementor-form-fields-wrapper elementor-labels-">
                                                                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-md-100">
                                                                                    <label for="form-field-name" class="elementor-field-label elementor-screen-only">Nom & Prénom</label><input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Nom &amp; Prénom">
                                                                                </div>
                                                                                <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-field_1 elementor-col-100">
                                                                                    <label for="form-field-field_1" class="elementor-field-label elementor-screen-only">Message</label><textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="form_fields[field_1]" id="form-field-field_1" rows="4" placeholder="Message"></textarea>
                                                                                </div>
                                                                                <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-25 e-form__buttons">
                                                                                    <button type="submit" class="elementor-button elementor-size-sm">
                                                                                        <span>
                                                                                            <span class="elementor-align-icon-right elementor-button-icon">
                                                                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i> </span>
                                                                                            <span class="elementor-button-text">Envoyer</span>
                                                                                        </span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-337a3b9e" data-id="337a3b9e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-f30aad2 elementor-widget elementor-widget-heading" data-id="f30aad2" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h4 class="elementor-heading-title elementor-size-default">Contacts</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-602f90ee elementor-tablet-align-left elementor-mobile-align-center elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="602f90ee" data-element_type="widget" data-widget_type="icon-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <ul class="elementor-icon-list-items">
                                                                            <li class="elementor-icon-list-item">
                                                                                <span class="elementor-icon-list-icon">
                                                                                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                                                                                <span class="elementor-icon-list-text">Rufisque,Keury-Souf. Dakar, Senegal</span>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item">
                                                                                <span class="elementor-icon-list-icon">
                                                                                    <i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
                                                                                <span class="elementor-icon-list-text">(221) 33 820 77 96 <br> (221) 77 398 47 20</span>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item">
                                                                                <span class="elementor-icon-list-icon">
                                                                                    <i aria-hidden="true" class="fas fa-envelope"></i> </span>
                                                                                <span class="elementor-icon-list-text">contact@myhouse.com</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-2feda5a6 elementor-icon-list--layout-inline elementor-align-left elementor-tablet-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2feda5a6" data-element_type="widget" data-widget_type="icon-list.default">
                                                                    <div class="elementor-widget-container">
                                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <a href="https://www.facebook.com/senegindia/" target="_blank"> <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fab fa-facebook-f"></i> </span>
                                                                                    <span class="elementor-icon-list-text"></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <a href="https://twitter.com/senegindiasa" target="_blank"> <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fab fa-twitter"></i> </span>
                                                                                    <span class="elementor-icon-list-text"></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <a href="https://linkedin.com/company/senegindia-sa/" target="_blank"> <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fab fa-linkedin-in"></i> </span>
                                                                                    <span class="elementor-icon-list-text"></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                                <a href="https://www.youtube.com/channel/UCzvA_ql1K3WAnrUPFt-mgew" target="_blank"> <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fab fa-youtube"></i> </span>
                                                                                    <span class="elementor-icon-list-text"></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-2075aae1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2075aae1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6bfe585b" data-id="6bfe585b" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-4ba176ad elementor-widget elementor-widget-heading" data-id="4ba176ad" data-element_type="widget" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Copyright © 2020 - 2021&nbsp; MYHOUSE SA. Tous droits réservés</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var hasJetBlogPlaylist = 0;
        /* ]]> */
    </script>
    <script>
        function loadScript(a) {
            var b = document.getElementsByTagName("head")[0],
                c = document.createElement("script");
            c.type = "text/javascript", c.src = "https://tracker.metricool.com/app/resources/be.js", c.onreadystatechange = a, c.onload = a, b.appendChild(c)
        }
        loadScript(function() {
            beTracker.t({
                hash: '3e5fe2cd85ecd13e551ae406a5136d34'
            })
        })
    </script>
    <style id="elementor-post-14157">
        .elementor-14157 .elementor-element.elementor-element-26d87978>.elementor-container {
            min-height: 550px;
        }

        .elementor-14157 .elementor-element.elementor-element-26d87978>.elementor-container:after {
            content: "";
            min-height: inherit;
        }

        .elementor-14157 .elementor-element.elementor-element-26d87978>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-14157 .elementor-element.elementor-element-26d87978:not(.elementor-motion-effects-element-type-background),
        .elementor-14157 .elementor-element.elementor-element-26d87978>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("https://senegindia.sn/wp-content/uploads/2019/12/slide-sdcity-bird-view-2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-14157 .elementor-element.elementor-element-26d87978>.elementor-background-overlay {
            opacity: 0.5;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14157 .elementor-element.elementor-element-26d87978 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 100px 100px 100px 100px;
        }

        .elementor-bc-flex-widget .elementor-14157 .elementor-element.elementor-element-3a237601.elementor-column .elementor-column-wrap {
            align-items: flex-start;
        }

        .elementor-14157 .elementor-element.elementor-element-3a237601.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: flex-start;
            align-items: flex-start;
        }

        .elementor-14157 .elementor-element.elementor-element-3a237601>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -1px;
        }

        .elementor-14157 .elementor-element.elementor-element-3a237601>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 100px 50px 0px 50px;
        }

        .elementor-14157 .elementor-element.elementor-element-3a237601>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14157 .elementor-element.elementor-element-44f1cc1:not(.elementor-motion-effects-element-type-background),
        .elementor-14157 .elementor-element.elementor-element-44f1cc1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #00011e;
        }

        .elementor-14157 .elementor-element.elementor-element-44f1cc1 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 20px 20px 20px 20px;
        }

        .elementor-14157 .elementor-element.elementor-element-44f1cc1>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14157 .elementor-element.elementor-element-9259529>.elementor-column-wrap>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 1px;
        }

        .elementor-14157 .elementor-element.elementor-element-9259529>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-14157 .elementor-element.elementor-element-9259529>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-14157 .elementor-element.elementor-element-6593b74 .elementor-image img {
            width: 37%;
        }

        .elementor-14157 .elementor-element.elementor-element-1b4ca443 {
            text-align: center;
        }

        .elementor-14157 .elementor-element.elementor-element-1b4ca443 .elementor-heading-title {
            color: #ffffff;
            font-family: "Playfair Display", Sans-serif;
            font-size: 60px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .elementor-14157 .elementor-element.elementor-element-1b4ca443>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-14157 .elementor-element.elementor-element-53df4fd7 .elementor-text-editor {
            text-align: center;
        }

        .elementor-14157 .elementor-element.elementor-element-53df4fd7 {
            color: #ffffff;
            font-size: 19px;
        }

        .elementor-14157 .elementor-element.elementor-element-53df4fd7>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        #elementor-popup-modal-14157 .dialog-message {
            width: 785px;
            height: 550px;
            align-items: flex-start;
        }

        #elementor-popup-modal-14157 {
            justify-content: center;
            align-items: center;
            pointer-events: all;
            background-color: rgba(255, 255, 255, 0.8);
        }

        #elementor-popup-modal-14157 .dialog-close-button {
            display: block;
            font-size: 30px;
        }

        #elementor-popup-modal-14157 .dialog-widget-content {
            animation-duration: 1.2s;
            box-shadow: 2px 8px 23px 3px rgba(0, 0, 0, 0.2);
        }

        #elementor-popup-modal-14157 .dialog-close-button i {
            color: #ffffff;
        }

        @media(max-width:1024px) {
            #elementor-popup-modal-14157 .dialog-message {
                width: 724px;
            }
        }

        @media(max-width:767px) {
            .elementor-14157 .elementor-element.elementor-element-1b4ca443>.elementor-widget-container {
                margin: -252px 0px 0px -37px;
            }

            .elementor-14157 .elementor-element.elementor-element-53df4fd7>.elementor-widget-container {
                margin: 77px 0px 0px 0px;
            }

            #elementor-popup-modal-14157 .dialog-message {
                height: 679px;
            }
        }
    </style>
    <div data-elementor-type="popup" data-elementor-id="14157" data-post-id="10082" data-obj-id="10082" class="elementor elementor-14157 dce-elementor-post-10082 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;zoomIn&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;timing&quot;:[]}">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-26d87978 elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-boxed elementor-section-height-default" data-id="26d87978" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a237601" data-id="3a237601" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-44f1cc1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="44f1cc1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9259529" data-id="9259529" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-6593b74 dce_masking-none elementor-widget elementor-widget-image" data-id="6593b74" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="1024" height="576" src="https://senegindia.sn/wp-content/uploads/2019/12/envato_white-1024x576.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://senegindia.sn/wp-content/uploads/2019/12/envato_white-1024x576.png 1024w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-300x169.png 300w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-768x432.png 768w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-1536x864.png 1536w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-830x467.png 830w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-230x129.png 230w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-350x197.png 350w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-480x270.png 480w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white-1320x743.png 1320w, https://senegindia.sn/wp-content/uploads/2019/12/envato_white.png 1920w" sizes="(max-width: 1024px) 100vw, 1024px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-1b4ca443 elementor-widget elementor-widget-heading" data-id="1b4ca443" data-element_type="widget" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">MERCI</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-53df4fd7 elementor-widget elementor-widget-text-editor" data-id="53df4fd7" data-element_type="widget" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <p>Votre inscription a bien été prise en compte.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script type="text/javascript">
        /* MonsterInsights Scroll Tracking */
        if (typeof(jQuery) !== 'undefined') {
            jQuery(document).ready(function() {
                function monsterinsights_scroll_tracking_load() {
                    if ((typeof(__gaTracker) !== 'undefined' && __gaTracker && __gaTracker.hasOwnProperty("loaded") && __gaTracker.loaded == true) || (typeof(__gtagTracker) !== 'undefined' && __gtagTracker)) {
                        (function(factory) {
                            factory(jQuery);
                        }(function($) {

                            /* Scroll Depth */
                            "use strict";
                            var defaults = {
                                percentage: true
                            };

                            var $window = $(window),
                                cache = [],
                                scrollEventBound = false,
                                lastPixelDepth = 0;

                            /*
                             * Plugin
                             */

                            $.scrollDepth = function(options) {

                                var startTime = +new Date();

                                options = $.extend({}, defaults, options);

                                /*
                                 * Functions
                                 */

                                function sendEvent(action, label, scrollDistance, timing) {
                                    var type = 'event';
                                    var eventName = action;
                                    var fieldsArray = {
                                        event_category: 'Scroll Depth',
                                        event_label: label,
                                        value: 1,
                                        non_interaction: true
                                    };

                                    if ('undefined' === typeof MonsterInsightsObject || 'undefined' === typeof MonsterInsightsObject.sendEvent) {
                                        return;
                                    }

                                    MonsterInsightsObject.sendEvent(type, eventName, fieldsArray);
                                    if (arguments.length > 3) {
                                        var type = 'event';
                                        var eventName = 'timing_complete';
                                        fieldsArray = {
                                            event_category: 'Scroll Depth',
                                            name: action,
                                            event_label: label,
                                            value: timing,
                                            non_interaction: 1
                                        };
                                        MonsterInsightsObject.sendEvent(type, eventName, fieldsArray);
                                    }
                                }

                                function calculateMarks(docHeight) {
                                    return {
                                        '25%': parseInt(docHeight * 0.25, 10),
                                        '50%': parseInt(docHeight * 0.50, 10),
                                        '75%': parseInt(docHeight * 0.75, 10),
                                        /* Cushion to trigger 100% event in iOS */
                                        '100%': docHeight - 5
                                    };
                                }

                                function checkMarks(marks, scrollDistance, timing) {
                                    /* Check each active mark */
                                    $.each(marks, function(key, val) {
                                        if ($.inArray(key, cache) === -1 && scrollDistance >= val) {
                                            sendEvent('Percentage', key, scrollDistance, timing);
                                            cache.push(key);
                                        }
                                    });
                                }

                                function rounded(scrollDistance) {
                                    /* Returns String */
                                    return (Math.floor(scrollDistance / 250) * 250).toString();
                                }

                                function init() {
                                    bindScrollDepth();
                                }

                                /*
                                 * Public Methods
                                 */

                                /* Reset Scroll Depth with the originally initialized options */
                                $.scrollDepth.reset = function() {
                                    cache = [];
                                    lastPixelDepth = 0;
                                    $window.off('scroll.scrollDepth');
                                    bindScrollDepth();
                                };

                                /* Add DOM elements to be tracked */
                                $.scrollDepth.addElements = function(elems) {

                                    if (typeof elems == "undefined" || !$.isArray(elems)) {
                                        return;
                                    }

                                    $.merge(options.elements, elems);

                                    /* If scroll event has been unbound from window, rebind */
                                    if (!scrollEventBound) {
                                        bindScrollDepth();
                                    }

                                };

                                /* Remove DOM elements currently tracked */
                                $.scrollDepth.removeElements = function(elems) {

                                    if (typeof elems == "undefined" || !$.isArray(elems)) {
                                        return;
                                    }

                                    $.each(elems, function(index, elem) {

                                        var inElementsArray = $.inArray(elem, options.elements);
                                        var inCacheArray = $.inArray(elem, cache);

                                        if (inElementsArray != -1) {
                                            options.elements.splice(inElementsArray, 1);
                                        }

                                        if (inCacheArray != -1) {
                                            cache.splice(inCacheArray, 1);
                                        }

                                    });

                                };

                                /*
                                 * Throttle function borrowed from:
                                 * Underscore.js 1.5.2
                                 * http://underscorejs.org
                                 * (c) 2009-2013 Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
                                 * Underscore may be freely distributed under the MIT license.
                                 */

                                function throttle(func, wait) {
                                    var context, args, result;
                                    var timeout = null;
                                    var previous = 0;
                                    var later = function() {
                                        previous = new Date;
                                        timeout = null;
                                        result = func.apply(context, args);
                                    };
                                    return function() {
                                        var now = new Date;
                                        if (!previous) previous = now;
                                        var remaining = wait - (now - previous);
                                        context = this;
                                        args = arguments;
                                        if (remaining <= 0) {
                                            clearTimeout(timeout);
                                            timeout = null;
                                            previous = now;
                                            result = func.apply(context, args);
                                        } else if (!timeout) {
                                            timeout = setTimeout(later, remaining);
                                        }
                                        return result;
                                    };
                                }

                                /*
                                 * Scroll Event
                                 */

                                function bindScrollDepth() {

                                    scrollEventBound = true;

                                    $window.on('scroll.scrollDepth', throttle(function() {
                                        /*
                                         * We calculate document and window height on each scroll event to
                                         * account for dynamic DOM changes.
                                         */

                                        var docHeight = $(document).height(),
                                            winHeight = window.innerHeight ? window.innerHeight : $window.height(),
                                            scrollDistance = $window.scrollTop() + winHeight,

                                            /* Recalculate percentage marks */
                                            marks = calculateMarks(docHeight),

                                            /* Timing */
                                            timing = +new Date - startTime;

                                        checkMarks(marks, scrollDistance, timing);
                                    }, 500));

                                }

                                init();
                            };

                            /* UMD export */
                            return $.scrollDepth;

                        }));

                        jQuery.scrollDepth();
                    } else {
                        setTimeout(monsterinsights_scroll_tracking_load, 200);
                    }
                }
                monsterinsights_scroll_tracking_load();
            });
        }
        /* End MonsterInsights Scroll Tracking */
    </script>
    <link rel='stylesheet' id='google-fonts-2-css' href='https://fonts.googleapis.com/css?family=Playfair+Display%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.7.2' type='text/css' media='all' />
    <script type='text/javascript' src='https://senegindia.sn/wp-content/themes/sydney/js/elementor.js?ver=20200504' id='sydney-elementor-editor-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/dynamicconditions/Public/js/dynamic-conditions-public.js?ver=1.5.1' id='dynamic-conditions-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/exclusive-team-for-elementor/assets/js/exad-script.js?ver=5.7.2' id='exad-main-script-js'></script>
    <script type='text/javascript' id='spacexchimp_p008-frontend-js-js-extra'>
        /* <![CDATA[ */
        var spacexchimp_p008_scriptParams = {
            "scroll_duration": "300"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/simple-scroll-to-top-button/inc/js/frontend.js?ver=4.42' id='spacexchimp_p008-frontend-js-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/themes/sydney/js/functions.min.js?ver=20201221' id='sydney-functions-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/themes/sydney/js/scripts.js?ver=5.7.2' id='sydney-scripts-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-includes/js/wp-embed.min.js?ver=5.7.2' id='wp-embed-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1' id='smartmenus-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.0.15' id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.0.5' id='elementor-sticky-js'></script>
    <script type='text/javascript' id='elementor-pro-frontend-js-before'>
        var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/senegindia.sn\/wp-admin\/admin-ajax.php",
            "nonce": "04a4a26724",
            "i18n": {
                "toc_no_headings_found": "Aucun titre n\u2019a \u00e9t\u00e9 trouv\u00e9 sur cette page."
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "google": {
                    "title": "Google+",
                    "has_counter": true
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "delicious": {
                    "title": "Delicious"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                },
                "weixin": {
                    "title": "WeChat"
                },
                "weibo": {
                    "title": "Weibo"
                }
            },
            "facebook_sdk": {
                "lang": "fr_FR",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "https:\/\/senegindia.sn\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
    </script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.0.5' id='elementor-pro-frontend-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.0.15' id='share-link-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false
            },
            "i18n": {
                "shareOnFacebook": "Partager sur Facebook",
                "shareOnTwitter": "Partager sur Twitter",
                "pinIt": "L\u2019\u00e9pingler",
                "download": "T\u00e9l\u00e9charger",
                "downloadImage": "T\u00e9l\u00e9charger une image",
                "fullscreen": "Plein \u00e9cran",
                "zoom": "Zoom",
                "share": "Partager",
                "playVideo": "Lire la vid\u00e9o",
                "previous": "Pr\u00e9c\u00e9dent",
                "next": "Suivant",
                "close": "Fermer"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "version": "3.0.15",
            "is_static": false,
            "legacyMode": {
                "elementWrappers": true
            },
            "urls": {
                "assets": "https:\/\/senegindia.sn\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": [],
                "dynamicooo": []
            },
            "kit": {
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 10082,
                "title": "SENEGINDIA%20SA",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.0.15' id='elementor-frontend-js'></script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/dynamic-content-for-elementor/assets/js/dce-settings.min.js?ver=1.12.1' id='dce-settings-js'></script>
    <script type='text/javascript' id='jet-blog-js-extra'>
        /* <![CDATA[ */
        var JetBlogSettings = {
            "ajaxurl": "https:\/\/senegindia.sn\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://senegindia.sn/wp-content/plugins/jet-blog/assets/js/jet-blog.min.js?ver=2.2.10' id='jet-blog-js'></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
            var t, e = location.hash.substring(1);
            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
        }, !1);
    </script>
    <a id="ssttbutton" href="#top" class="">
        <span class="fa-stack fa-lg">
            <i class="ssttbutton-background fa fa-circle fa-stack-2x"></i>
            <i class="ssttbutton-symbol fa fa-angle-up fa-stack-1x"></i>
        </span>
    </a>
</body>

</html>