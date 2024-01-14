<!DOCTYPE html>
<html lang="en">
<head>
{{--    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-M2P5S6J"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
            type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8"
          href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.TpYxICw8iG4.L.F4.O/am=wA/d=0/rs=AN8SPfpVjmduEbJeaKDPJmqpx8swJVpW8A/m=el_main_css">
    <script type="text/javascript" charset="UTF-8"
            src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.fr.lhOVdnRQs64.O/d=1/exm=el_conf/ed=1/rs=AN8SPfqxiQP03C1qjEURd0Ob0Tj_aG72hA/m=el_main"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XTBFEB6MK2"></script>
  --}}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-XTBFEB6MK2');
    </script>
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M2P5S6J');
    </script>
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1154415581916992');
        fbq('track', 'PageView');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="facebook-domain-verification" content="0l0jqngf7hnpo17ssvrusxn79c0muc">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="next-head-count" content="4">
    <link rel="preload" href="{{asset('lmodel/m2/css/preview_next.css')}}" as="style">
    <link rel="stylesheet" href="{{asset('lmodel/m2/css/next.css')}}" data-n-g="">
    <noscript data-n-css=""></noscript>
{{--    <script defer="" nomodule="" src="https://busd.forsage.io/_next/static/chunks/polyfills-a40ef1678bae11e696dba45124eadd70.js"></script>
    <script src="https://busd.forsage.io/_next/static/chunks/webpack-2250e66fef106ed07835.js" defer=""></script>--}}
    <script src="https://busd.forsage.io/_next/static/chunks/framework-314ca51961822e5b31d9.js" defer=""></script>
    {{--  <script src="https://busd.forsage.io/_next/static/chunks/main-5cde1a3215904d30b206.js" defer=""></script>--}}
    <script src="https://busd.forsage.io/_next/static/chunks/pages/_app-2edd8ae20f10bf963357.js" defer=""></script>
    <script src="{{asset("lmodel/m2/js/next-dashboard.js")}}" defer=""></script>
{{--    <script src="https://busd.forsage.io/_next/static/y1w4WVChXh33-jWJuKq5u/_buildManifest.js" defer=""></script>
    <script src="https://busd.forsage.io/_next/static/y1w4WVChXh33-jWJuKq5u/_ssgManifest.js" defer=""></script>--}}
{{--    <style id="abu-collapse-styles" type="text/css"></style>
    <script async="" type="text/javascript" src="https://wchat.freshchat.com/js/widget.js" id="freshchat-lib"></script>--}}
    <style data-react-tooltip="true">
        .__react_component_tooltip {
            border-radius: 3px;
            display: inline-block;
            font-size: 13px;
            left: -999em;
            opacity: 0;
            padding: 8px 21px;
            position: fixed;
            pointer-events: none;
            transition: opacity 0.3s ease-out;
            top: -999em;
            visibility: hidden;
            z-index: 999;
        }

        .__react_component_tooltip.allow_hover, .__react_component_tooltip.allow_click {
            pointer-events: auto;
        }

        .__react_component_tooltip::before, .__react_component_tooltip::after {
            content: "";
            width: 0;
            height: 0;
            position: absolute;
        }

        .__react_component_tooltip.show {
            opacity: 0.9;
            margin-top: 0;
            margin-left: 0;
            visibility: visible;
        }

        .__react_component_tooltip.place-top::before {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            bottom: -8px;
            left: 50%;
            margin-left: -10px;
        }

        .__react_component_tooltip.place-bottom::before {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            top: -8px;
            left: 50%;
            margin-left: -10px;
        }

        .__react_component_tooltip.place-left::before {
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            right: -8px;
            top: 50%;
            margin-top: -5px;
        }

        .__react_component_tooltip.place-right::before {
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            left: -8px;
            top: 50%;
            margin-top: -5px;
        }

        .__react_component_tooltip .multi-line {
            display: block;
            padding: 2px 0;
            text-align: center;
        }</style>
    <title>Dashboard | Infinix</title>
    {{--  <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/9285-a567676ee83175eb0f9b.js">
    <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/index-bb1c2413e7ad0e26c85d.js">
      <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/dashboard-18b6bc7d02ab78c2060e.js">
    <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/1524-19d3524b038fd2a10b89.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/9869-bb84388245254b5a0639.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/6270-e05a13963412e9b661f0.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/partners-ec85f5bf29225e28c60e.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/links-4256de04aee5d4ea063a.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/stats-ba6b596a3e97d81c0c6c.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/MaxQoreMarathon-4c5bb0a89194834d50a9.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/3343-77d581d0b7ad7c2c38cc.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/social-1957f3e6027b049ee3a4.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/nft-68e30d7aa10eb1a706a4.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/promo-6bea4c573546c0a186c9.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/3145-395e191a0cec603e393f.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/dashboard/%5Bprogram%5D-8b030cda4ab626dd96ab.js">
     <link as="script" rel="prefetch" href="https://busd.forsage.io/_next/static/chunks/pages/achievements-8892ff2016c295e9e4a0.js">
     <link href="https://forsagesupport.freshchat.com/widget/css/widget.css?t=1705129143472" rel="stylesheet">
     <link href="https://forsagesupport.freshchat.com/widget/css/cb.css?t=1705129146837" rel="stylesheet">--}}
</head>
<body style="overflow: unset; position: relative; min-height: 100%; top: 40px;">
{{--<div style="" class="skiptranslate">
    <iframe id=":2.container" class="VIpgJd-ZVi9od-ORHb-OEVmcd skiptranslate" frameborder="0" src="#"
            style="visibility:visible"></iframe>
</div>--}}
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2P5S6J" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<div id="__next">
    <div class="relative flex bg-main-bg items-center justify-center min-h-screen min-w-full overflow-hidden">
        <div class="fixed top-0 left-1/2 -translate-x-1/2 flex justify-center w-full px-10 py-2.5 z-40 lg:p-0 lg:max-h-screen z-999999">
            <div
                class="flex justify-between items-center rounded-mini max-w-desktop-preview-bar w-full bg-main-blue px-5 py-2 shadow-preview-bar lg:pl-10 sm:pl-5 lg:py-2.5 lg:rounded-none lg:rounded-b-mini lg:pr-0 false">
                <div class="flex w-full overflow-hidden items-center justify-between space-x-2.5 lg:items-start ">
                    <div
                        class="w-full flex justify-start items-center space-x-5 lg:flex-col lg:h-full lg:items-start lg:space-x-0 lg:space-y-7.5">
                        <div class="flex items-center  false lg:w-full lg:pr-10 sm:pr-5"><a href="/">
                                <svg class="block mr-2.5" width="45" height="30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M37.68 5.851a.482.482 0 0 1 .615.296l.43 1.247s-1.852-.59-2.818-.777l1.773-.766Zm6.055 3.336c-.004 0-.195-.131-.297-.186l-3.111-1.586c-.965-.46-.752-.82-1.118-1.826a6.228 6.228 0 0 0-.549-1.127C36.884 3.62 31.836 3.817 31.354 0c0 0-1.884 1.236-2.227 3.5C9.227 1.98 0 12.96 0 12.96c3.706-1.476 7.705-2.176 11.704-2.362-7.603 5.851-9.997 14.666-9.997 14.666s6.16-5.982 15.419-9.318C14.702 19.37 13.298 23.963 13.872 30c0 0 4.763-18.177 27.361-13.78 0 0 .827-2.417 2.962-4.89.135-.152.211-.382.227-.645a1.735 1.735 0 0 0-.687-1.498Z"
                                          fill="#fff"></path>
                                </svg>
                            </a><span class="text-base text-white whitespace-nowrap mr-5 notranslate lg:mr-0 false">Preview ID<span
                                    class="hidden lg:inline ml-1.5">1</span></span>
                            <div class="flex justify-between items-center space-x-2.5 lg:space-x-5 lg:w-full lg:hidden">
                                <input
                                    class="px-4 py-3 rounded-mini leading-5 bg-white-100 text-white text-base outline-none false"
                                    value="1">
                                <button disabled=""
                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none bg-white-100 py-3 px-5 cursor-not-allowed">
                                    Go
                                </button>
                            </div>
                        </div>
                    </div>
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-bg hover:bg-black-500 whitespace-nowrap lg:hidden">
                        Connect wallet
                    </button>
                </div>
                <div class="flex lg:justify-end lg:ml-auto lg:pr-10 sm:pr-5">
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 rounded-full lg:hidden w-10 h-10 !p-0 ml-5">
                        <svg class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" stroke="#fff"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6 6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="">
                        <button
                            class="flex justify-center items-center text-center
                            text-base font-bold text-white rounded-mini
                             sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 flex-col
                              rounded-full w-10 h-10 !p-0 hidden lg:flex">
                            <span class="w-4 border-t border-white mb-2"></span>
                            <span class="w-4 border-t border-white"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full h-full justify-center max-w-desktop-full">
            <div class="relative w-full max-w-desktop-left-bar flex-shrink-0 border-r border-white-100 lg:hidden">
                <div class="fixed top-0 max-w-desktop-left-bar w-full flex h-screen z-10 pt-4">
                    <div class="flex flex-col min-h-screen w-full flex-shrink-0 pl-10 pr-5 pt-22 overflow-auto">
                        <div class="flex-1 lg:pr-0 lg:pl-10 sm:pl-5">
                            <div class="flex flex-1 flex-col h-full w-full overflow-y-auto space-y-2.5 lg:space-y-0">
                                <div
                                    class="flex flex-1 flex-col w-full h-full overflow-y-auto space-y-2.5 lg:space-y-0 lg:mb-5 sm:mb-[50px]">
                                    <a class="undefined undefined" href="/dashboard?user=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent bg-black-light lg:bg-transparent lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 4H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM19 4h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM9 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Z"
                                                        fill="#fff" stroke="#fff" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M19 14h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Z"
                                                        fill="#8B8C8C" stroke="#8B8C8C" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                <span
                                                    class="text-white-500 text-base ml-2.5 text-white-900">Dashboard</span>
                                            </div>
                                        </button>
                                    </a>
                                    <div
                                        class="undefined bg-black-light lg:bg-transparent lg:!pb-0  min-w-[186px] cursor-pointer hover:bg-black-light lg:hover:bg-transparent rounded-[10px] lg:border-b lg:border-white-300 lg:rounded-none lg:justify-between">
                                        <div class="flex p-2.5 lg:px-0 lg:py-5">
                                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#8B8C8C"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.494 14.195c1.236.207 2.597-.01 3.553-.648 1.27-.846 1.27-2.232 0-3.078-.965-.639-2.345-.855-3.58-.639m-8.961 4.365c-1.236.207-2.597-.01-3.553-.648-1.27-.846-1.27-2.232 0-3.078.965-.639 2.345-.855 3.58-.639m9.89-2.187a2.322 2.322 0 0 1-1.76-.71 2.313 2.313 0 0 1-.647-1.611A2.318 2.318 0 0 1 17.342 3a2.328 2.328 0 0 1 2.326 2.322 2.327 2.327 0 0 1-2.245 2.321Zm-10.846 0a.547.547 0 0 1 .171 0A2.322 2.322 0 0 0 6.658 3c-.617 0-1.208.245-1.645.68a2.32 2.32 0 0 0-.68 1.642c.008 1.26 1 2.276 2.244 2.321Zm5.437 6.723a.547.547 0 0 0-.172 0 2.313 2.313 0 0 1-2.236-2.322 2.318 2.318 0 0 1 2.326-2.322c.617 0 1.209.245 1.645.68a2.32 2.32 0 0 1 .681 1.642c-.009 1.26-1 2.286-2.244 2.322ZM9.39 17.2c-1.271.846-1.271 2.232 0 3.078 1.442.963 3.805.963 5.247 0 1.271-.846 1.271-2.232 0-3.078-1.433-.954-3.805-.954-5.247 0Z"></path>
                                            </svg>
                                            <span class="text-[#8B8C8C] text-base ml-2.5 lg:text-white-500">Team</span>
                                            <svg class="ml-auto lg:mr-5 rotate-180" width="24" height="24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="m8 11 4 4 4-4" stroke="#8B8C8C" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="border-solid border-[1px] border-[#363738] lg:hidden mx-2.5"></div>
                                        <div class="flex flex-col p-2.5 lg:py-0 lg:pr-0"><a class="undefined undefined"
                                                                                            href="/partners?user=1">
                                                <button
                                                    class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                                    <div class="flex items-center text-left">
                                                        <svg class="w-6 h-6 stroke-current text-white-500 "
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span
                                                            class="text-white-500 text-base ml-2.5 false">Partners</span>
                                                    </div>
                                                </button>
                                            </a><a class="undefined undefined" href="/links?user=1">
                                                <button
                                                    class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                                    <div class="flex items-center text-left">
                                                        <svg class="w-6 h-6 stroke-current text-white-500 "
                                                             data-name="a239fe10-42dc-4f9c-ab1f-bcabd992189e"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 15.16 19.14">
                                                            <path
                                                                d="M7 9.17a4.42 4.42 0 0 0 4.5-4.33A4.42 4.42 0 0 0 7 .5h0a4.43 4.43 0 0 0-4.5 4.34A4.42 4.42 0 0 0 7 9.17Z"
                                                                fill="none" stroke="#969797" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M10.23 13.3a1.93 1.93 0 0 1 1.49 0 2 2 0 0 1 .63.43.3.3 0 0 1 0 .41.27.27 0 0 1-.4 0 1.37 1.37 0 0 0-.45-.3 1.31 1.31 0 0 0-.52-.11 1.42 1.42 0 0 0-1 .41l-1.85 1.91a1.4 1.4 0 0 0 0 2 1.36 1.36 0 0 0 1 .41 1.35 1.35 0 0 0 1-.41l.24-.24a.28.28 0 0 1 .4 0 .3.3 0 0 1 0 .41l-.24.24a1.93 1.93 0 0 1-2.74 0 2 2 0 0 1 0-2.8l1.81-1.93a2.08 2.08 0 0 1 .63-.43Z"
                                                                fill="#969797" stroke="#969797" stroke-miterlimit="10"
                                                                stroke-width=".25" fill-rule="evenodd"></path>
                                                            <path
                                                                d="M.5 18.55v-2a4.15 4.15 0 0 1 1.08-2.83 3.51 3.51 0 0 1 2.59-1.17H7.5"
                                                                fill="none" stroke="#969797" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M11.76 11.73a1.88 1.88 0 0 1 2.72 0 2 2 0 0 1 0 2.79l-1.86 1.91a2.06 2.06 0 0 1-.62.44 1.9 1.9 0 0 1-1.48 0 2.06 2.06 0 0 1-.62-.44.28.28 0 0 1 0-.4.28.28 0 0 1 .4 0 1.25 1.25 0 0 0 .44.31 1.28 1.28 0 0 0 1 0 1.25 1.25 0 0 0 .44-.31l1.86-1.91a1.44 1.44 0 0 0 0-2 1.34 1.34 0 0 0-1-.41 1.38 1.38 0 0 0-1 .41l-.23.24a.27.27 0 0 1-.39 0 .28.28 0 0 1 0-.4Z"
                                                                fill="#969797" stroke="#969797" stroke-miterlimit="10"
                                                                stroke-width=".25" fill-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="text-white-500 text-base ml-2.5 false">Links</span>
                                                    </div>
                                                </button>
                                            </a><a class="undefined undefined" href="/stats?user=1">
                                                <button
                                                    class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                                    <div class="flex items-center text-left">
                                                        <svg class="w-6 h-6 stroke-current text-white-500 "
                                                             viewBox="0 0 24 24" stroke="#fff" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M16 12h5m-9-9v5-5ZM8.929 14.582 5.5 17.5M12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"
                                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-white-500 text-base ml-2.5 false">Stats</span>
                                                    </div>
                                                </button>
                                            </a></div>
                                    </div>
                                    <a class="undefined undefined" href="/MaxQoreMarathon?user=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24">
                                                    <style>.st1 {
                                                            fill: none;
                                                            stroke: #adadad;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-miterlimit: 10
                                                        }</style>
                                                    <path
                                                        d="m11.6 3.4 8.6 9.1c.7.7.4 1.9-.5 2.3L5.7 21c-.6.3-1.2.1-1.7-.4l-1.4-1.5c-.4-.4-.5-1.1-.2-1.6L9.2 3.8c.4-.9 1.7-1.1 2.4-.4z"
                                                        style="fill: none; stroke: rgb(173, 173, 173); stroke-miterlimit: 10;"></path>
                                                    <path class="st1"
                                                          d="m15.6 3.7.6-1.9M19.7 7.8h2M18 5.4 20.4 3M7.5 20.4c.6 1.2 1.8 2 3.2 2 2 0 3.6-1.6 3.6-3.6 0-.4-.1-.9-.2-1.3"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Marathon</span>
                                            </div>
                                        </button>
                                    </a><a class="undefined undefined" href="/social?user=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 " width="24"
                                                     height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M22 11.78C22 6.405 17.566 2 11.955 2S2 6.317 2 11.78a9.449 9.449 0 0 0 2.896 6.872C4.806 19.797 4.715 22 4.715 22s2.443-.97 3.258-1.322c1.267.53 2.534.793 3.982.793 5.61 0 10.045-4.317 10.045-9.691Z"
                                                        stroke="#969797" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M12 14.4c3.314 0 6-1.075 6-2.4s-2.686-2.4-6-2.4-6 1.075-6 2.4 2.686 2.4 6 2.4Z"
                                                        stroke="#969797" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M15.275 11.962c0 3.314-1.325 5.962-3.275 6.038-2.025-.076-3.35-2.724-3.35-6.038S9.975 6 12 6c2.025 0 3.275 2.648 3.275 5.962Z"
                                                        stroke="#969797" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M11.962 6v11.924" stroke="#969797"></path>
                                                    <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z" stroke="#969797"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Social</span><span
                                                    class="absolute top-1 right-1.5 text-green text-sm lg:bg-green-200 lg:px-2.5 lg:py-1 lg:rounded lg:top-1/2 lg:-translate-y-1/2 lg:right-5">New</span>
                                            </div>
                                        </button>
                                    </a><a class="undefined undefined" href="/nft?user=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24"
                                                     fill="none" stroke="#8B8C8C" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4 23c1-.837 2.37-1.052 3.383-2.133.442-.348.852-.644 1.107-1.108.216-.391 1.892-4.535.064-2.66-.82 1.183-.477-.983.254-1.397-.587-.276-1.847.72-2.058 1.266.124-.679.038-1.614-.021-2.294-.336-1.322 1.846-1.57.235-1.58-.542.064-.882.665-.885.727-.06-.65.405-1.524 1.015-1.893-.376-.344-1.357-.175-1.62.36-.086-.533.45-1.5 1.114-1.72.25.009.564-.623.666-.815-.052-.536-.32-1.061-.737-1.576-.386-.45-.404-1.638-.75-2.394-.346-.92-.673-2.342.244-3 1.59-.323 2.923 1.413 4.152 2.251.357-.167.938-.373 1.326-.443a8.874 8.874 0 0 1 3.193-.131c1.127-.608 2.98-3.472 4.038-2.086.625.531-.238 1.917-.494 2.61-.066.3-.052.595-.083.723-.072.286-.252.41-.212.564.747.478.775 1.143 1.137 1.852.249.511.444.986.58 1.419.114.373.082.678 0 .924.163.42.405 1.157.406 1.538.718.737 1.079.79.902 1.588-.17.933.105 1.585-.982 2.18-.195.314.61.269-.064 1.214.057.974-.39 1.091-1.684 1.339-.857.26-1.546-.22-2.234-.758-.323-.226-.596-.485-.9-.714l.102 2.527c.018.458.197.896.511 1.23 1.339 1.429 2.688.743 4.349 2.39"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">NFTs</span></div>
                                        </button>
                                    </a>
                                    <div
                                        class="undefined   min-w-[186px] cursor-pointer hover:bg-black-light lg:hover:bg-transparent rounded-[10px] lg:border-b lg:border-white-300 lg:rounded-none lg:justify-between">
                                        <div class="flex p-2.5 lg:px-0 lg:py-5">
                                            <svg class="w-6 h-6" width="24" height="24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#a)" stroke="#8B8C8C" stroke-linecap="round"
                                                   stroke-linejoin="round">
                                                    <path
                                                        d="M3 19a9 9 0 0 1 9 0 9 9 0 0 1 9 0M3 6a9 9 0 0 1 9 0 9 9 0 0 1 9 0M3 6v13M12 6v13M21 6v13"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="a">
                                                        <path fill="#fff" d="M0 0h24v24H0z"></path>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span
                                                class="text-[#8B8C8C] text-base ml-2.5 lg:text-white-500">Information</span>
                                            <svg class="ml-auto lg:mr-5 " width="24" height="24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="m8 11 4 4 4-4" stroke="#8B8C8C" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <a class="undefined undefined" href="/promo?user=1">
                                        <button
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 animate-bounce"
                                                     viewBox="0 0 24 24">
                                                    <style>.st1 {
                                                            fill: none;
                                                            stroke: #adadad;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-miterlimit: 10
                                                        }</style>
                                                    <path
                                                        d="m11.6 3.4 8.6 9.1c.7.7.4 1.9-.5 2.3L5.7 21c-.6.3-1.2.1-1.7-.4l-1.4-1.5c-.4-.4-.5-1.1-.2-1.6L9.2 3.8c.4-.9 1.7-1.1 2.4-.4z"
                                                        style="fill: none; stroke: rgb(173, 173, 173); stroke-miterlimit: 10;"></path>
                                                    <path class="st1"
                                                          d="m15.6 3.7.6-1.9M19.7 7.8h2M18 5.4 20.4 3M7.5 20.4c.6 1.2 1.8 2 3.2 2 2 0 3.6-1.6 3.6-3.6 0-.4-.1-.9-.2-1.3"></path>
                                                </svg>
                                                <span
                                                    class="text-white-500 text-base ml-2.5 false">Promo &amp; PDFs</span>
                                            </div>
                                        </button>
                                    </a></div>
                            </div>
                        </div>
                        <div class="mt-auto ">
                            <div class="pt-5 pb-10 w-full flex flex-col items-center justify-center">
                                <div class="flex space-x-4 w-full"><a
                                        class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                        target="_blank" href="https://discord.gg/forsage/">
                                        <svg class="w-4 h-4" viewBox="0 0 21 15" fill="#fff"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.581 1.247A15.918 15.918 0 0 0 13.58 0a.084.084 0 0 0-.065.028c-.169.31-.366.712-.497 1.022a15.08 15.08 0 0 0-4.499 0A9.395 9.395 0 0 0 8.012.028C8.002.01 7.975 0 7.947 0a16.038 16.038 0 0 0-4.003 1.247c-.009 0-.018.009-.028.018C1.367 5.08.664 8.791 1.011 12.465c0 .02.01.038.028.047a16.28 16.28 0 0 0 4.911 2.484c.028.01.056 0 .066-.019.375-.515.712-1.059 1.003-1.63.018-.038 0-.075-.038-.085-.534-.206-1.04-.45-1.537-.73-.037-.02-.037-.076-.01-.104.104-.075.207-.16.31-.234a.058.058 0 0 1 .066-.01c3.224 1.472 6.7 1.472 9.888 0a.058.058 0 0 1 .065.01c.103.084.206.16.31.243.037.029.037.085-.01.104-.487.29-1.003.524-1.537.73-.037.01-.047.057-.037.085.3.572.637 1.115 1.002 1.63.029.01.057.02.085.01a16.215 16.215 0 0 0 4.92-2.484.052.052 0 0 0 .029-.046c.412-4.246-.685-7.93-2.906-11.2-.01-.01-.019-.02-.038-.02ZM7.506 10.226c-.965 0-1.771-.89-1.771-1.987s.787-1.987 1.771-1.987c.994 0 1.78.9 1.771 1.987 0 1.096-.787 1.986-1.771 1.986Zm6.533 0c-.966 0-1.772-.89-1.772-1.987s.788-1.987 1.772-1.987c.993 0 1.78.9 1.771 1.987 0 1.096-.778 1.986-1.771 1.986Z"></path>
                                        </svg>
                                    </a><a
                                        class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                        target="_blank" href="https://t.me/forsageio_official/">
                                        <svg class="w-4 h-4" viewBox="0 0 14 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M11.915.776.841 5.168a.4.4 0 0 0 .03.755l2.79.864 1.133 3.503a.4.4 0 0 0 .653.17l1.64-1.523 3.11 2.29a.4.4 0 0 0 .627-.231l2.166-9.294a.8.8 0 0 0-1.075-.926Zm-6.483 6.74-.346 2.072-.8-2.901 7.816-5.1-6.67 5.929Z"
                                                  fill="#fff"></path>
                                        </svg>
                                    </a><a
                                        class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                        target="_blank" href="https://www.youtube.com/@FORSAGECommunity/">
                                        <svg class="w-4 h-4" viewBox="0 0 14 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.326 1.702A1.687 1.687 0 0 0 12.163.494C11.13.2 6.998.2 6.998.2S2.867.2 1.834.482C1.279.64.822 1.115.67 1.702.398 2.775.398 5 .398 5s0 2.236.272 3.298c.153.587.598 1.05 1.164 1.208 1.043.294 5.164.294 5.164.294s4.132 0 5.165-.282a1.687 1.687 0 0 0 1.164-1.209c.271-1.073.271-3.298.271-3.298s.011-2.236-.272-3.309ZM5.683 7.055v-4.11L9.119 5 5.683 7.055Z"
                                                fill="#fff"></path>
                                        </svg>
                                    </a><a
                                        class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                        target="_blank" href="https://twitter.com/forsageofficial/">
                                        <svg class="w-4 h-4" viewBox="0 0 13 10" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M12.196 1.338c-.442.195-.91.324-1.39.382.506-.302.884-.779 1.064-1.34a4.79 4.79 0 0 1-1.536.588 2.42 2.42 0 0 0-4.125 2.208A6.86 6.86 0 0 1 1.219.643a2.423 2.423 0 0 0 .751 3.235c-.4-.01-.774-.12-1.1-.302v.03A2.422 2.422 0 0 0 2.813 5.98a2.441 2.441 0 0 1-1.092.04 2.425 2.425 0 0 0 2.263 1.683A4.854 4.854 0 0 1 .398 8.705 6.767 6.767 0 0 0 4.103 9.8c4.458 0 6.893-3.692 6.893-6.895 0-.105-.003-.21-.008-.312a4.928 4.928 0 0 0 1.208-1.255Z"
                                                  fill="#fff"></path>
                                        </svg>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="hambuger" class="fixed top-0 left-1/2 -translate-x-1/2 flex justify-center w-full px-10 py-2.5 z-40 lg:p-0 lg:max-h-screen z-999999">
                <div class="flex justify-between items-center rounded-mini max-w-desktop-preview-bar w-full bg-main-blue px-5 py-2 shadow-preview-bar lg:pl-10 sm:pl-5 lg:py-2.5 lg:rounded-none lg:rounded-b-mini lg:pr-0 lg:flex-col lg:pb-5 lg:h-screen lg:max-h-screen lg:rounded-b-none lg:justify-start">
                    <div
                        class="flex w-full overflow-hidden items-center justify-between space-x-2.5 lg:items-start lg:order-2 lg:flex-col lg:pt-10 lg:items-start lg:space-y-7.5 lg:flex-1 lg:h-full">
                        <div
                            class="w-full flex justify-start items-center space-x-5 lg:flex-col lg:h-full lg:items-start lg:space-x-0 lg:space-y-7.5">
                            <div class="flex items-center  lg:flex-col lg:items-start lg:w-full lg:pr-10 sm:pr-5"><a href="/">
                                    <svg class="absolute top-4 left-5" width="163" height="30" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M46.732 21.907h2.61l2.062-4.44h11.08l1.097-2.374H49.894l-3.162 6.814ZM65.558 10.839h-13.69L50.772 13.2H64.46l1.097-2.362ZM143.239 21.874v.033l13.689-.033 1.097-2.362h-11.061l.947-2.046h11.08l1.096-2.373H146.4l-3.161 6.78ZM148.375 10.839l-1.097 2.362h13.69l1.096-2.362h-13.689ZM77.976 13.2l-2.91 6.311-8.473-.01 2.924-6.3h8.459Zm2.617 0a1.663 1.663 0 0 0-1.513-2.361h-8.474c-1.59 0-3.033.918-3.703 2.362l-2.066 4.451h.008l-.858 1.86h-.005a1.665 1.665 0 0 0 1.514 2.362h8.474c1.59 0 3.034-.919 3.703-2.363l2.913-6.31h.007ZM127.333 10.839h-8.474c-1.59 0-3.033.918-3.703 2.362h11.073l-.906 1.968h-11.08l-1.151 2.483-.855 1.86s-1.075 2.318-1.091 2.35l-.006.012h2.61l1.096-2.363.914-1.968h8.47l-2.004 4.33h2.57l4.044-8.672h.008a1.665 1.665 0 0 0-1.515-2.362ZM135.174 15.093l-1.096 2.373h6.254l-.519 1.116c-.259.569-.823.93-1.444.93l-6.602-.011a.537.537 0 0 1-.493-.766l2.138-4.615c.26-.558.822-.919 1.44-.919l10.067-.01c.498-1.105 0 0 1.108-2.352H134.93c-1.59 0-3.038.919-3.708 2.362l-2.061 4.452h.003l-.858 1.859a1.663 1.663 0 0 0 1.513 2.362h8.47a4.08 4.08 0 0 0 3.706-2.362l2.037-4.418h-8.858ZM109.652 15.17h-8.914l.915-1.97h11.076c1.115-2.361-.007 0 1.115-2.361h-11.098A4.076 4.076 0 0 0 99.04 13.2l-1.094 2.417a1.356 1.356 0 0 0 1.228 1.925h8.938l-.91 1.968H96.119c-.509 1.105 0 0-1.134 2.363h11.12a4.077 4.077 0 0 0 3.704-2.363s1.173-2.504 1.195-2.592a1.4 1.4 0 0 0-1.352-1.75ZM95.15 10.839H84.032L82.948 13.2h11.094l-.907 1.968h-11.09l-1.137 2.483-1.952 4.222h2.61l2.007-4.331h4.939l1.597 4.364h2.582l-1.565-4.364h1.195a3.605 3.605 0 0 0 3.282-2.133l1.05-2.209h.007a1.662 1.662 0 0 0-1.51-2.362ZM37.68 5.851a.482.482 0 0 1 .615.296l.43 1.247s-1.852-.59-2.818-.777l1.773-.766Zm6.055 3.336c-.004 0-.195-.131-.297-.186l-3.111-1.586c-.965-.46-.752-.82-1.118-1.826a6.228 6.228 0 0 0-.549-1.127C36.884 3.62 31.836 3.817 31.354 0c0 0-1.884 1.236-2.227 3.5C9.227 1.98 0 12.96 0 12.96c3.706-1.476 7.705-2.176 11.704-2.362-7.603 5.851-9.997 14.666-9.997 14.666s6.16-5.982 15.419-9.318C14.702 19.37 13.298 23.963 13.872 30c0 0 4.763-18.177 27.361-13.78 0 0 .827-2.417 2.962-4.89.135-.152.211-.382.227-.645a1.735 1.735 0 0 0-.687-1.498Z"
                                              fill="#fff"></path>
                                    </svg>
                                </a><span
                                    class="text-base text-white whitespace-nowrap mr-5 notranslate lg:mr-0 lg:text-2xl lg:text-medium lg:mb-7.5">Preview ID<span
                                        class="hidden lg:inline ml-1.5">1</span></span>
                                <div class="flex justify-between items-center space-x-2.5 lg:space-x-5 lg:w-full lg:flex"><input
                                        class="px-4 py-3 rounded-mini leading-5 bg-white-100 text-white text-base outline-none lg:w-full lg:flex-1"
                                        value="1">
                                    <button disabled=""
                                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none bg-white-100 py-3 px-5 cursor-not-allowed lg:px-10">
                                        Go
                                    </button>
                                </div>
                            </div>
                            <div class="w-full pr-5 lg:pr-10 sm:pr-5 !mt-4">
                                <button
                                    class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-bg hover:bg-black-500 whitespace-nowrap hidden lg:flex w-full">
                                    Exit preview mode
                                </button>
                            </div>
                            <div class="overflow-auto w-full hidden lg:flex">
                                <div class="flex flex-1 flex-col h-full w-full overflow-y-auto space-y-2.5 lg:space-y-0">
                                    <div
                                        class="flex flex-1 flex-col w-full h-full overflow-y-auto space-y-2.5 lg:space-y-0 lg:mb-5 sm:mb-[50px]">
                                        <a class="undefined undefined" href="/dashboard?user=1">
                                            <button
                                                class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                                <div class="flex items-center text-left">
                                                    <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24"
                                                         stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 4H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM19 4h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM9 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1ZM19 14h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Z"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="text-white-500 text-base ml-2.5 false">Dashboard</span></div>
                                            </button>
                                        </a>
                                        <div
                                            class="undefined bg-black-light lg:bg-transparent lg:!pb-0  min-w-[186px] cursor-pointer hover:bg-black-light lg:hover:bg-transparent rounded-[10px] lg:border-b lg:border-white-300 lg:rounded-none lg:justify-between">
                                            <div class="flex p-2.5 lg:px-0 lg:py-5">
                                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#8B8C8C"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.494 14.195c1.236.207 2.597-.01 3.553-.648 1.27-.846 1.27-2.232 0-3.078-.965-.639-2.345-.855-3.58-.639m-8.961 4.365c-1.236.207-2.597-.01-3.553-.648-1.27-.846-1.27-2.232 0-3.078.965-.639 2.345-.855 3.58-.639m9.89-2.187a2.322 2.322 0 0 1-1.76-.71 2.313 2.313 0 0 1-.647-1.611A2.318 2.318 0 0 1 17.342 3a2.328 2.328 0 0 1 2.326 2.322 2.327 2.327 0 0 1-2.245 2.321Zm-10.846 0a.547.547 0 0 1 .171 0A2.322 2.322 0 0 0 6.658 3c-.617 0-1.208.245-1.645.68a2.32 2.32 0 0 0-.68 1.642c.008 1.26 1 2.276 2.244 2.321Zm5.437 6.723a.547.547 0 0 0-.172 0 2.313 2.313 0 0 1-2.236-2.322 2.318 2.318 0 0 1 2.326-2.322c.617 0 1.209.245 1.645.68a2.32 2.32 0 0 1 .681 1.642c-.009 1.26-1 2.286-2.244 2.322ZM9.39 17.2c-1.271.846-1.271 2.232 0 3.078 1.442.963 3.805.963 5.247 0 1.271-.846 1.271-2.232 0-3.078-1.433-.954-3.805-.954-5.247 0Z"></path>
                                                </svg>
                                                <span class="text-[#8B8C8C] text-base ml-2.5 lg:text-white-500">Team</span>
                                                <svg class="ml-auto lg:mr-5 rotate-180" width="24" height="24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m8 11 4 4 4-4" stroke="#8B8C8C" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <div class="border-solid border-[1px] border-[#363738] lg:hidden mx-2.5"></div>
                                            <div class="flex flex-col p-2.5 lg:py-0 lg:pr-0"><a class="undefined undefined"
                                                                                                href="/partners?user=1">
                                                    <button
                                                        class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                                        <div class="flex items-center text-left">
                                                            <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 16 16"
                                                                 fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                    stroke-width="1.333" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span class="text-white-500 text-base ml-2.5 false">Partners</span>
                                                        </div>
                                                    </button>
                                                </a>
                                                <a class="undefined undefined" href="/links?user=1">
                                                    <button
                                                        class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                                        <div class="flex items-center text-left">
                                                            <svg class="w-6 h-6 stroke-current text-white-500 "
                                                                 data-name="a239fe10-42dc-4f9c-ab1f-bcabd992189e"
                                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.16 19.14">
                                                                <path
                                                                    d="M7 9.17a4.42 4.42 0 0 0 4.5-4.33A4.42 4.42 0 0 0 7 .5h0a4.43 4.43 0 0 0-4.5 4.34A4.42 4.42 0 0 0 7 9.17Z"
                                                                    fill="none" stroke="#969797" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M10.23 13.3a1.93 1.93 0 0 1 1.49 0 2 2 0 0 1 .63.43.3.3 0 0 1 0 .41.27.27 0 0 1-.4 0 1.37 1.37 0 0 0-.45-.3 1.31 1.31 0 0 0-.52-.11 1.42 1.42 0 0 0-1 .41l-1.85 1.91a1.4 1.4 0 0 0 0 2 1.36 1.36 0 0 0 1 .41 1.35 1.35 0 0 0 1-.41l.24-.24a.28.28 0 0 1 .4 0 .3.3 0 0 1 0 .41l-.24.24a1.93 1.93 0 0 1-2.74 0 2 2 0 0 1 0-2.8l1.81-1.93a2.08 2.08 0 0 1 .63-.43Z"
                                                                    fill="#969797" stroke="#969797" stroke-miterlimit="10"
                                                                    stroke-width=".25" fill-rule="evenodd"></path>
                                                                <path
                                                                    d="M.5 18.55v-2a4.15 4.15 0 0 1 1.08-2.83 3.51 3.51 0 0 1 2.59-1.17H7.5"
                                                                    fill="none" stroke="#969797" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M11.76 11.73a1.88 1.88 0 0 1 2.72 0 2 2 0 0 1 0 2.79l-1.86 1.91a2.06 2.06 0 0 1-.62.44 1.9 1.9 0 0 1-1.48 0 2.06 2.06 0 0 1-.62-.44.28.28 0 0 1 0-.4.28.28 0 0 1 .4 0 1.25 1.25 0 0 0 .44.31 1.28 1.28 0 0 0 1 0 1.25 1.25 0 0 0 .44-.31l1.86-1.91a1.44 1.44 0 0 0 0-2 1.34 1.34 0 0 0-1-.41 1.38 1.38 0 0 0-1 .41l-.23.24a.27.27 0 0 1-.39 0 .28.28 0 0 1 0-.4Z"
                                                                    fill="#969797" stroke="#969797" stroke-miterlimit="10"
                                                                    stroke-width=".25" fill-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="text-white-500 text-base ml-2.5 false">Links</span></div>
                                                    </button>
                                                </a><a class="undefined undefined" href="/stats?user=1">
                                                    <button
                                                        class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between  lg:pl-5 lg:border-t lg:border-white-300 hover:!bg-white-50 lg:hover:!bg-transparent">
                                                        <div class="flex items-center text-left">
                                                            <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24"
                                                                 stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M16 12h5m-9-9v5-5ZM8.929 14.582 5.5 17.5M12 16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"
                                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span class="text-white-500 text-base ml-2.5 false">Stats</span></div>
                                                    </button>
                                                </a></div>
                                        </div>
                                        <a class="undefined undefined" href="/MaxQoreMarathon?user=1">
                                            <button
                                                class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                                <div class="flex items-center text-left">
                                                    <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24">
                                                        <style>.st1 {
                                                                fill: none;
                                                                stroke: #adadad;
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                                stroke-miterlimit: 10
                                                            }</style>
                                                        <path
                                                            d="m11.6 3.4 8.6 9.1c.7.7.4 1.9-.5 2.3L5.7 21c-.6.3-1.2.1-1.7-.4l-1.4-1.5c-.4-.4-.5-1.1-.2-1.6L9.2 3.8c.4-.9 1.7-1.1 2.4-.4z"
                                                            style="fill: none; stroke: rgb(173, 173, 173); stroke-miterlimit: 10;"></path>
                                                        <path class="st1"
                                                              d="m15.6 3.7.6-1.9M19.7 7.8h2M18 5.4 20.4 3M7.5 20.4c.6 1.2 1.8 2 3.2 2 2 0 3.6-1.6 3.6-3.6 0-.4-.1-.9-.2-1.3"></path>
                                                    </svg>
                                                    <span class="text-white-500 text-base ml-2.5 false">Marathon</span></div>
                                            </button>
                                        </a><a class="undefined undefined" href="/social?user=1">
                                            <button
                                                class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                                <div class="flex items-center text-left">
                                                    <svg class="w-6 h-6 stroke-current text-white-500 " width="24" height="24"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22 11.78C22 6.405 17.566 2 11.955 2S2 6.317 2 11.78a9.449 9.449 0 0 0 2.896 6.872C4.806 19.797 4.715 22 4.715 22s2.443-.97 3.258-1.322c1.267.53 2.534.793 3.982.793 5.61 0 10.045-4.317 10.045-9.691Z"
                                                            stroke="#969797" stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M12 14.4c3.314 0 6-1.075 6-2.4s-2.686-2.4-6-2.4-6 1.075-6 2.4 2.686 2.4 6 2.4Z"
                                                            stroke="#969797" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M15.275 11.962c0 3.314-1.325 5.962-3.275 6.038-2.025-.076-3.35-2.724-3.35-6.038S9.975 6 12 6c2.025 0 3.275 2.648 3.275 5.962Z"
                                                            stroke="#969797" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M11.962 6v11.924" stroke="#969797"></path>
                                                        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z" stroke="#969797"
                                                              stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="text-white-500 text-base ml-2.5 false">Social</span><span
                                                        class="absolute top-1 right-1.5 text-green text-sm lg:bg-green-200 lg:px-2.5 lg:py-1 lg:rounded lg:top-1/2 lg:-translate-y-1/2 lg:right-5">New</span>
                                                </div>
                                            </button>
                                        </a><a class="undefined undefined" href="/nft?user=1">
                                            <button
                                                class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                                <div class="flex items-center text-left">
                                                    <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24"
                                                         fill="none" stroke="#8B8C8C" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4 23c1-.837 2.37-1.052 3.383-2.133.442-.348.852-.644 1.107-1.108.216-.391 1.892-4.535.064-2.66-.82 1.183-.477-.983.254-1.397-.587-.276-1.847.72-2.058 1.266.124-.679.038-1.614-.021-2.294-.336-1.322 1.846-1.57.235-1.58-.542.064-.882.665-.885.727-.06-.65.405-1.524 1.015-1.893-.376-.344-1.357-.175-1.62.36-.086-.533.45-1.5 1.114-1.72.25.009.564-.623.666-.815-.052-.536-.32-1.061-.737-1.576-.386-.45-.404-1.638-.75-2.394-.346-.92-.673-2.342.244-3 1.59-.323 2.923 1.413 4.152 2.251.357-.167.938-.373 1.326-.443a8.874 8.874 0 0 1 3.193-.131c1.127-.608 2.98-3.472 4.038-2.086.625.531-.238 1.917-.494 2.61-.066.3-.052.595-.083.723-.072.286-.252.41-.212.564.747.478.775 1.143 1.137 1.852.249.511.444.986.58 1.419.114.373.082.678 0 .924.163.42.405 1.157.406 1.538.718.737 1.079.79.902 1.588-.17.933.105 1.585-.982 2.18-.195.314.61.269-.064 1.214.057.974-.39 1.091-1.684 1.339-.857.26-1.546-.22-2.234-.758-.323-.226-.596-.485-.9-.714l.102 2.527c.018.458.197.896.511 1.23 1.339 1.429 2.688.743 4.349 2.39"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="text-white-500 text-base ml-2.5 false">NFTs</span></div>
                                            </button>
                                        </a>
                                        <div
                                            class="undefined   min-w-[186px] cursor-pointer hover:bg-black-light lg:hover:bg-transparent rounded-[10px] lg:border-b lg:border-white-300 lg:rounded-none lg:justify-between">
                                            <div class="flex p-2.5 lg:px-0 lg:py-5">
                                                <svg class="w-6 h-6" width="24" height="24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#a)" stroke="#8B8C8C" stroke-linecap="round"
                                                       stroke-linejoin="round">
                                                        <path
                                                            d="M3 19a9 9 0 0 1 9 0 9 9 0 0 1 9 0M3 6a9 9 0 0 1 9 0 9 9 0 0 1 9 0M3 6v13M12 6v13M21 6v13"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" d="M0 0h24v24H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <span class="text-[#8B8C8C] text-base ml-2.5 lg:text-white-500">Information</span>
                                                <svg class="ml-auto lg:mr-5 " width="24" height="24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m8 11 4 4 4-4" stroke="#8B8C8C" stroke-linecap="round"
                                                          stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <a class="undefined undefined" href="/promo?user=1">
                                            <button
                                                class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                                <div class="flex items-center text-left">
                                                    <svg class="w-6 h-6 stroke-current text-white-500 animate-bounce"
                                                         viewBox="0 0 24 24">
                                                        <style>.st1 {
                                                                fill: none;
                                                                stroke: #adadad;
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                                stroke-miterlimit: 10
                                                            }</style>
                                                        <path
                                                            d="m11.6 3.4 8.6 9.1c.7.7.4 1.9-.5 2.3L5.7 21c-.6.3-1.2.1-1.7-.4l-1.4-1.5c-.4-.4-.5-1.1-.2-1.6L9.2 3.8c.4-.9 1.7-1.1 2.4-.4z"
                                                            style="fill: none; stroke: rgb(173, 173, 173); stroke-miterlimit: 10;"></path>
                                                        <path class="st1"
                                                              d="m15.6 3.7.6-1.9M19.7 7.8h2M18 5.4 20.4 3M7.5 20.4c.6 1.2 1.8 2 3.2 2 2 0 3.6-1.6 3.6-3.6 0-.4-.1-.9-.2-1.3"></path>
                                                    </svg>
                                                    <span class="text-white-500 text-base ml-2.5 false">Promo &amp; PDFs</span>
                                                </div>
                                            </button>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-bg hover:bg-black-500 whitespace-nowrap lg:hidden">
                            Connect wallet
                        </button>
                    </div>
                    <div class="flex lg:justify-end lg:ml-auto lg:pr-10 sm:pr-5">
                        <button
                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 rounded-full lg:hidden w-10 h-10 !p-0 ml-5">
                            <svg class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" stroke="#fff"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6 6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <div class="">
                            <button
                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 flex-col rounded-full w-10 h-10 !p-0 hidden lg:flex">
                                <div class="">
                                    <svg class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" stroke="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6 6 18M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div
                class="flex flex-shrink w-full flex-col items-center min-h-screen bg-main max-w-[calc(100% - 326px)] lg:max-w-full overflow-auto pt-20 sm:pt-14">
                <div class="flex relative flex-1 py-10 pt-8.5 flex-col justify-between w-full px-10 sm:px-0 sm:pt-7.5">
                    <div class="flex flex-col w-full space-y-10 sm:space-y-5">
                        <div
                            class="flex w-full items-start justify-between space-x-10 lg:space-x-2.5 sm:space-x-0 sm:space-y-5 sm:flex-col sm:px-5">
                            <div class="flex items-start flex-shrink-0 sm:flex-shrink sm:w-full">
                                <div class="relative cursor-pointer rounded-full avatar_gradient p-1 sm:p-[5px] z-10">
                                    <div>
                                        <div
                                            class="z-10 flex-shrink-0 relative w-34 h-34 rounded-full bg-black-light cursor-pointer sm:w-[100px] sm:h-[100px]">
                                            <img alt="" class="max-w-full max-h-full" src="{{asset("lmodel/UnknownUser.webp")}}"></div>
                                        <div
                                            class="flex justify-center items-center w-10 h-10 sm:w-7.5 sm:h-7.5 bg-status-gold rounded-full w-[36px] h-[36px] z-10 absolute right-0  bottom-2.5 ">
                                            <svg class="h-5 sm:h-3.5 fill-current text-gray" fill="none"
                                                 viewBox="0 0 21 14" xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd"
                                                      d="M17.205 3.531a.207.207 0 0 1 .264.128l.186.54s-.797-.255-1.213-.336l.763-.332Zm2.606 1.446c-.002 0-.084-.057-.128-.08l-1.34-.688c-.414-.2-.323-.356-.48-.792a2.705 2.705 0 0 0-.236-.488c-.765-.365-2.937-.28-3.144-1.933 0 0-.811.535-.959 1.516C4.961 1.854.99 6.612.99 6.612c1.595-.64 3.316-.943 5.037-1.024-3.272 2.536-4.302 6.355-4.302 6.355s2.65-2.592 6.635-4.037c-1.043 1.483-1.647 3.474-1.4 6.09 0 0 2.05-7.877 11.774-5.972 0 0 .356-1.047 1.274-2.118a.466.466 0 0 0 .098-.28.754.754 0 0 0-.296-.65Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-start ml-6 h-full justify-center my-auto sm:w-full">
                                    <div
                                        class="flex justify-center items-center mb-1 sm:mb-2.5 sm:w-full sm:justify-between">
                                        <span
                                            class="text-white notranslate font-bold text-3xl mr-2.5 sm:text-xl cursor-pointer">ID 1</span>
                                    </div>
                                    <div class="flex flex-col items-start w-full sm:hidden">
                                        <div class="flex justify-between w-full">
                                            <div class="flex flex-col">
                                                <div class="flex items-center mb-1"><span
                                                        class="text-white font-bold mr-2.5 text-base sm:text-sm">0x14Dc...207F</span>
                                                    <button>
                                                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15 6.667H8.332c-.92 0-1.667.746-1.667 1.666V15c0 .92.746 1.667 1.667 1.667h6.666c.92 0 1.667-.747 1.667-1.667V8.333c0-.92-.746-1.666-1.667-1.666Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M3.469 3.468A2.167 2.167 0 0 1 5 2.833h6.666A2.167 2.167 0 0 1 13.834 5v1.667a.5.5 0 0 1-1 0V5a1.167 1.167 0 0 0-1.167-1.167H5.001A1.167 1.167 0 0 0 3.834 5v6.667a1.167 1.167 0 0 0 1.167 1.166h1.666a.5.5 0 1 1 0 1H5.001a2.167 2.167 0 0 1-2.167-2.166V5c0-.575.228-1.126.635-1.532Z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-blue hover:bg-hover-main-blue active:bg-active-main-blue !w-full !py-0 !leading-[30px] !bg-[#242526] !text-[#9FA4B5] rounded-[16px]  hidden sm:flex">
                                        <span class="min-w-[80px] mr-2.5">Show more</span>
                                        <svg class="w-2.5 h-2.5 transition-all " viewBox="0 0 12 10" stroke="#9FA4B5"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m1 1.992 4.75 6.016L11 1.992" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col max-w-500px w-full sm:max-w-full space-y-2">
                                <div
                                    class="relative flex flex-wrap flex-grow w-full h-full p-5 justify-between bg-blue-100 rounded z-10 sm:p-4">
                                    <div class="flex items-center mb-2 sm:justify-between sm:w-full sm:flex-wrap">
                                        <div class="flex items-center justify-between"><span
                                                class="text-white-500 text-base text-sm sm:text-xs">Personal link</span>
                                            <div class="relative group">
                                                <button
                                                    class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none ml-1.5 "
                                                    data-tip="true" data-for="Personal link" currentitem="false">
                                                    <span></span>
                                                    <svg class="w-5 h-5 " viewBox="0 0 20 20" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path>
                                                    </svg>
                                                </button>
                                                <div
                                                    class="__react_component_tooltip t035836e2-ac9d-4a94-a0e2-f66d57a63057 place-bottom type-dark"
                                                    id="Personal link" data-id="tooltip">
                                                    <style aria-hidden="true">
                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057 {
                                                            color: #fff;
                                                            background: #222;
                                                            border: 1px solid transparent;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-top {
                                                            margin-top: -10px;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-top::before {
                                                            border-top: 8px solid transparent;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-top::after {
                                                            border-left: 8px solid transparent;
                                                            border-right: 8px solid transparent;
                                                            bottom: -6px;
                                                            left: 50%;
                                                            margin-left: -8px;
                                                            border-top-color: #222;
                                                            border-top-style: solid;
                                                            border-top-width: 6px;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-bottom {
                                                            margin-top: 10px;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-bottom::before {
                                                            border-bottom: 8px solid transparent;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-bottom::after {
                                                            border-left: 8px solid transparent;
                                                            border-right: 8px solid transparent;
                                                            top: -6px;
                                                            left: 50%;
                                                            margin-left: -8px;
                                                            border-bottom-color: #222;
                                                            border-bottom-style: solid;
                                                            border-bottom-width: 6px;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-left {
                                                            margin-left: -10px;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-left::before {
                                                            border-left: 8px solid transparent;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-left::after {
                                                            border-top: 5px solid transparent;
                                                            border-bottom: 5px solid transparent;
                                                            right: -6px;
                                                            top: 50%;
                                                            margin-top: -4px;
                                                            border-left-color: #222;
                                                            border-left-style: solid;
                                                            border-left-width: 6px;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-right {
                                                            margin-left: 10px;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-right::before {
                                                            border-right: 8px solid transparent;
                                                        }

                                                        .t035836e2-ac9d-4a94-a0e2-f66d57a63057.place-right::after {
                                                            border-top: 5px solid transparent;
                                                            border-bottom: 5px solid transparent;
                                                            left: -6px;
                                                            top: 50%;
                                                            margin-top: -4px;
                                                            border-right-color: #222;
                                                            border-right-style: solid;
                                                            border-right-width: 6px;
                                                        }
                                                    </style>
                                                    Invite your friends to Forsage BUSD and build your team by sharing
                                                    your link
                                                </div>
                                            </div>
                                        </div>
                                        <span class="hidden sm:block text-main-blue text-base font-bold notranslate">forsage.io/b/xqg1z8</span>
                                    </div>
                                    <div class="flex items-center justify-between w-full"><span
                                            class="text-main-blue text-xl font-bold notranslate sm:hidden">forsage.io/b/xqg1z8</span>
                                        <div class="flex space-x-2.5 sm:w-full">
                                            <button
                                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none py-0 px-2.5 bg-main-blue text-white rounded !leading-30px hover:bg-hover-main-blue active:bg-active-main-blue !leading-30px sm:flex-1">
                                                Copy
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="cursor-pointer h-[75px] w-full rounded z-[1] relative flex  items-end justify-end sm:pt-4 sm:h-[55px] hover:opacity-70">
                                    <div
                                        class="w-full h-[75px] rounded relative overflow-hidden bg-[#1E1E1E] sm:h-[55px]">
                                        <div
                                            class="flex items-center justify-end w-full h-full space-x-[14px] pr-8 sm:pr-6 sm:space-x-2">
                                            <span
                                                class="text-white z-[11] text-lg font-medium ml-7.5 sm:ml-0 font-poppins sm:text-sm whitespace-nowrap">FRGX Token</span>
                                            <div
                                                class="flex items-center justify-center frgx-banner-border h-[40px] w-[150px] rounded-2xl p-[1px] z-[11] sm:w-[120px] sm:h-[35px] ">
                                                <div
                                                    class="flex items-center justify-center w-full h-full bg-black rounded-2xl">
                                                    <span
                                                        class="text-lg text-white font-poppins sm:text-sm !text-xs text-center ">Login to show balance</span>
                                                </div>
                                            </div>
                                            <img class="absolute right-0"
                                                 src="{{asset("lmodel/buttonShadow.png")}}"></div>
                                        <img class="absolute w-[full] right-0 left-0 top-0 h-full z-[0] bottom-0 "
                                             src="{{asset('lmodel/frgx.webp')}}">
                                        <svg class="absolute right-1 top-1" width="20" height="20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                                  fill="#fff"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                                  fill="#fff"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full mt-15 sm:mt-5 sm:px-5">
                            <div class="flex w-full flex-wrap lg:flex-col">
                                <div
                                    class="flex mr-2 space-x-2 lg:mr-0 lg:mt-10 sm:mt-5 sm:space-x-0 lg:order-3 sm:overflow-auto sm:w-full sm:flex-col sm:space-y-5">
                                    <div class="flex space-x-2 sm:space-x-5">
                                        <div
                                            class="lg:flex-grow sm:w-full sm:mobile-infoblock-base flex flex-col bg-black-light rounded relative z-[11] overflow-hidden desktop-infoblock-base sm:mobile-infoblock-base">
                                            <img
                                                class="h-[70%] sm:h-3/4 absolute  bottom-0 right-0 z-[-11] sm:h-3/4 absolute bottom-0 right-0 z-[-11]"
                                                src="{{asset("lmodel/Partners.png")}}">
                                            <div
                                                class="flex flex-col px-5 pt-5 w-full relative sm:justify-between sm:items-start">
                                                <div class="flex items-center z-[10]"><span
                                                        class="text-white-500 text-base sm:text-sm sm:whitespace-nowrap">Partners</span>
                                                </div>
                                                <span
                                                    class="text-white text-2xl font-bold notranslate sm:text-xl !mt-1 !sm:mt-2.5 mt-5 sm:mt-2.5">22139</span>
                                            </div>
                                            <div class="flex p-2.5 w-full">
                                                <div
                                                    class="w-full bg-green-100 text-green-light rounded p-2 flex text-base items-center justify-between notranslate sm:text-sm">
                                                    <div class="flex items-center justify-start">
                                                        <svg class="stroke-current mr-1.5" width="8" height="11"
                                                             stroke="#2CFF4E" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4 10V1m0 0L1 4m3-3 3 3" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                        7
                                                    </div>
                                                    <img src="{{asset('lmodel/activity_green.png')}}" class="ml-2.5 w-6 h-6"></div>
                                            </div>
                                        </div>
                                        <div
                                            class="lg:flex-grow sm:w-full sm:mobile-infoblock-base flex flex-col bg-black-light rounded relative z-[11] overflow-hidden desktop-infoblock-base sm:mobile-infoblock-base">
                                            <img
                                                class="h-[70%] sm:h-3/4 absolute  bottom-0 right-0 z-[-11] sm:h-3/4 absolute bottom-0 right-0 z-[-11]"
                                                src="{{asset('lmodel/Team.webp')}}">
                                            <div
                                                class="flex flex-col px-5 pt-5 w-full relative sm:justify-between sm:items-start">
                                                <div class="flex items-center z-[10]"><span
                                                        class="text-white-500 text-base sm:text-sm sm:whitespace-nowrap">Team</span>
                                                </div>
                                                <span
                                                    class="text-white text-2xl font-bold notranslate sm:text-xl !mt-1 !sm:mt-2.5 mt-5 sm:mt-2.5">1644313</span>
                                            </div>
                                            <div class="flex p-2.5 w-full">
                                                <div
                                                    class="w-full bg-green-100 text-green-light rounded p-2 flex text-base items-center justify-between notranslate sm:text-sm">
                                                    <div class="flex items-center justify-start">
                                                        <svg class="stroke-current mr-1.5" width="8" height="11"
                                                             stroke="#2CFF4E" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4 10V1m0 0L1 4m3-3 3 3" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </svg>
                                                        560
                                                    </div>
                                                    <img src="{{asset('lmodel/activity_green.png')}}" class="ml-2.5 w-6 h-6"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="lg:flex-grow sm:max-w-full sm:!min-h-0 sm:!flex-row flex flex-col bg-black-light rounded relative z-[11] overflow-hidden desktop-infoblock-base sm:mobile-infoblock-base">
                                        <img
                                            class="h-[70%] sm:h-3/4 absolute  bottom-0 right-0 z-[-11] h-[70%] right-0 sm:h-full absolute bottom-0 sm:left-1/4 sm:-translate-x-1/2 z-[-11]"
                                            src="{{asset('lmodel/Ratio.png')}}">
                                        <div
                                            class="flex flex-col px-5 pt-5 w-full relative sm:!flex-row sm:!justify-between sm:!items-center sm:!px-2 sm:!py-0">
                                            <div class="flex items-center z-[10]"><span
                                                    class="text-white-500 text-base sm:text-sm sm:whitespace-nowrap">Ratio</span>
                                            </div>
                                            <span
                                                class="text-white text-2xl font-bold notranslate sm:text-xl !mt-1 !sm:mt-2.5 mt-5 sm:mt-2.5">2653 %</span>
                                        </div>
                                        <div class="flex p-2.5 w-full">
                                            <div
                                                class="w-full bg-white-100 text-white rounded p-2 flex text-base items-center justify-between notranslate sm:text-sm">
                                                <div class="flex items-center justify-start">
                                                    <svg class="stroke-current mr-1.5" width="8" height="11"
                                                         stroke="#2CFF4E" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 10V1m0 0L1 4m3-3 3 3" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>
                                                    0 %
                                                </div>
                                                <img src="{{asset('lmodel/activity_white.webp')}}" class="ml-2.5 w-6 h-6"></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-1 lg:flex-0 sm:flex-0 h-full sm:max-w-full overflow-hidden w-full relative justify-start items-end bg-black-light rounded lg:max-w-full desktop-infoblock-chart-base">
                                    <div class="flex-shrink-0 relative flex flex-col bg-black-light rounded w-full"><img
                                            class="h-full absolute top-0 bottom-0 left-1/2 -translate-x-1/2"
                                            src="{{asset('lmodel/bnbBusd.png')}}" alt="">
                                        <div class="flex flex-col px-5 py-5 w-full">
                                            <div class="flex items-center mb-1"><span
                                                    class="text-white-500 text-base sm:text-sm sm:whitespace-nowrap">Profits</span>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div
                                                    class="flex flex-1 w-full text-white text-2xl font-bold notranslate sm:text-xl !mt-1 !sm:mt-2.5 mt-5 sm:mt-2.5">
                                                    1 115 727.8 BUSD
                                                </div>
                                                <div class="flex p-1.5">
                                                    <div
                                                        class="w-full text-green-light flex text-base items-center justify-end notranslate sm:text-sm">
                                                        <div class="flex items-center justify-start">
                                                            <svg class="stroke-current mr-1.5" width="8" height="11"
                                                                 stroke="#2CFF4E" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 10V1m0 0L1 4m3-3 3 3" stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                            55.6
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-between"><span
                                                    class="text-white text-2xl font-bold notranslate sm:text-xl !mt-1 !sm:mt-2.5 mt-5 sm:mt-2.5">363.685 BNB</span>
                                                <div class="flex p-1.5">
                                                    <div
                                                        class="w-full text-white flex text-base items-center justify-end notranslate sm:text-sm">
                                                        <div class="flex items-center justify-start">
                                                            <svg class="stroke-current mr-1.5" width="8" height="11"
                                                                 stroke="#2CFF4E" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4 10V1m0 0L1 4m3-3 3 3" stroke-linecap="round"
                                                                      stroke-linejoin="round"></path>
                                                            </svg>
                                                            0
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden"><span>00:00:00:00</span></div>
                        </div>
                        <div
                            class="min-h-[125px] mt-10 px-2.5 py-1.5 sm:pb-5 w-full rounded bg-white-30 items-center justify-between flex flex-row sm:w-full sm:flex-col sm:rounded-none relative sm:space-y-2.5 ">
                            <div class="flex items-center justify-evenly w-full"><img src="{{asset('lmodel/cup.svg')}}"
                                                                                      class="w-[110px] sm:w-20"
                                                                                      alt=""><img
                                    src="{{asset('lmodel/cup.svg')}}" class="w-[110px] sm:w-20" alt=""><img
                                    src="{{asset('lmodel/cup.svg')}}" class="w-[110px] sm:w-20" alt=""><img
                                    src="{{asset('lmodel/cup.svg')}}" class="w-[110px] sm:w-20" alt=""></div>
                            <div class="flex flex-row cursor-pointer pr-5 sm:w-full"><a class="w-full p-2.5"
                                                                                        href="/achievements?user=1">
                                    <div class="flex space-x-2.5 items-center justify-center sm:w-full"><span
                                            class="text-base text-white-500 font-semibold whitespace-nowrap sm:text-sm">Show all </span>
                                        <svg class="h-7.5 sm:h-5" viewBox="0 0 30 28" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.364 0c1.526 0 2.936.814 3.7 2.136l5.364 9.291a4.272 4.272 0 0 1 0 4.271l-5.365 9.292a4.271 4.271 0 0 1-3.699 2.135H9.636a4.271 4.271 0 0 1-3.7-2.135L.573 15.698a4.271 4.271 0 0 1 0-4.271l5.365-9.291A4.271 4.271 0 0 1 9.636 0h10.728Z"
                                                fill="#406AFF"></path>
                                            <path d="m13 8 5 5-5 5" stroke="#fff" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a></div>
                        </div>
                        <div class="notranslate flex flex-col mt-15 sm:px-5">
                            <div class="flex items-center false"><span
                                    class="text-white text-3xl font-bold sm:text-2xl mr-2.5"><span><span
                                            class="notranslate mr-1.5">Forsage</span> Programs</span></span>
                                <button
                                    class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none py-0 px-2.5 bg-main-blue text-white rounded !leading-30px hover:bg-hover-main-blue active:bg-active-main-blue font-normal sm:items-center py-1">
                                    <svg class="w-5 h-5 mr-1.5" viewBox="0 0 20 20" fill="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path>
                                    </svg>
                                    <span class="text-base sm:text-sm"> Info </span></button>
                            </div>
                            <div class="grid w-full gap-10 mt-8 grid-cols-2 sm:grid-cols-1"><a
                                    class="relative flex flex-col p-7.5 w-full bg-gray rounded z-10 overflow-hidden justify-between min-h-programDashboard sm:p-5 sm:min-h-programDashboardMobile"
                                    href="/dashboard/x3?user=1">
                                    <svg class="absolute top-2 right-2 sm:top-1 sm:right-1 " width="20" height="20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                              fill="#fff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                              fill="#fff"></path>
                                    </svg>
                                    <div class="flex justify-between w-full z-10">
                                        <div class="flex items-center"><span
                                                class="text-white text-2xl notranslate font-bold justify-start sm:text-xl false">x3</span>
                                        </div>
                                        <span
                                            class="text-white text-2xl font-bold justify-end text-right notranslate sm:text-xl">368 525 BUSD</span>
                                    </div>
                                    <div class="flex justify-between h-full w-full">
                                        <div class="flex justify-between w-full z-10 sm:flex-col mt-5 w-full items-end">
                                            <div
                                                class="flex w-5/12 h-full flex-col items-start justify-end sm:w-full flex-wrap sm:mb-7.5">
                                                <div class="flex flex-wrap -m-1">
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col h-full relative justify-end sm:w-full sm:items-center">
                                                <div class="flex sm:w-full ">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-blue hover:bg-hover-main-blue active:bg-active-main-blue z-0 sm:w-full pointer-events-none text-white">
                                                        <div class="flex flex-col space-y-1 items-start">
                                                            <div class="flex items-center">Preview
                                                                <svg class="ml-3 fill-current" width="16" height="16"
                                                                     fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M15.5 8a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-4.646-2.854A.5.5 0 0 1 11 5.5v5a.5.5 0 0 1-1 0V6.707l-4.146 4.147a.5.5 0 0 1-.708-.708L9.293 6H5.5a.5.5 0 0 1 0-1h5c.138 0 .263.056.354.146Z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute w-full h-full inset-0"
                                         style="background-image: url({{asset('lmodel/blue-blur.png')}}); background-repeat: round; background-size: cover;"></div>
                                </a><a
                                    class="relative flex flex-col p-7.5 w-full bg-gray rounded z-10 overflow-hidden justify-between min-h-programDashboard sm:p-5 sm:min-h-programDashboardMobile"
                                    href="/dashboard/x4?user=1">
                                    <svg class="absolute top-2 right-2 sm:top-1 sm:right-1 " width="20" height="20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                              fill="#fff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                              fill="#fff"></path>
                                    </svg>
                                    <div class="flex justify-between w-full z-10">
                                        <div class="flex items-center"><span
                                                class="text-white text-2xl notranslate font-bold justify-start sm:text-xl false">x4</span>
                                        </div>
                                        <span
                                            class="text-white text-2xl font-bold justify-end text-right notranslate sm:text-xl">410 845 BUSD</span>
                                    </div>
                                    <div class="flex justify-between h-full w-full">
                                        <div class="flex justify-between w-full z-10 sm:flex-col mt-5 w-full items-end">
                                            <div
                                                class="flex w-5/12 h-full flex-col items-start justify-end sm:w-full flex-wrap sm:mb-7.5">
                                                <div class="flex flex-wrap -m-1">
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col h-full relative justify-end sm:w-full sm:items-center">
                                                <div class="flex sm:w-full ">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-light-purple hover:bg-hover-purple active:bg-active-purple z-0 sm:w-full pointer-events-none text-white">
                                                        <div class="flex flex-col space-y-1 items-start">
                                                            <div class="flex items-center">Preview
                                                                <svg class="ml-3 fill-current" width="16" height="16"
                                                                     fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M15.5 8a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-4.646-2.854A.5.5 0 0 1 11 5.5v5a.5.5 0 0 1-1 0V6.707l-4.146 4.147a.5.5 0 0 1-.708-.708L9.293 6H5.5a.5.5 0 0 1 0-1h5c.138 0 .263.056.354.146Z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute w-full h-full inset-0"
                                         style="background-image: url({{asset('lmodel/purple-blur.png')}}); background-repeat: round; background-size: cover;"></div>
                                </a><a
                                    class="relative flex flex-col p-7.5 w-full bg-gray rounded z-10 overflow-hidden justify-between min-h-programDashboard sm:p-5 sm:min-h-programDashboardMobile"
                                    href="/dashboard/xXx?user=1">
                                    <svg class="absolute top-2 right-2 sm:top-1 sm:right-1 " width="20" height="20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                              fill="#fff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                              fill="#fff"></path>
                                    </svg>
                                    <div class="flex justify-between w-full z-10">
                                        <div class="flex items-center"><span
                                                class="text-white text-2xl notranslate font-bold justify-start sm:text-xl false">xXx</span>
                                        </div>
                                        <span
                                            class="text-white text-2xl font-bold justify-end text-right notranslate sm:text-xl">174 237.8 BUSD</span>
                                    </div>
                                    <div class="flex justify-between h-full w-full">
                                        <div class="flex justify-between w-full z-10 sm:flex-col mt-5 w-full items-end">
                                            <div
                                                class="flex w-5/12 h-full flex-col items-start justify-end sm:w-full flex-wrap sm:mb-7.5">
                                                <div class="flex flex-wrap -m-1">
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col h-full relative justify-end sm:w-full sm:items-center">
                                                <div class="flex sm:w-full ">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-dark-pink hover:bg-hover-pink active:bg-active-pink z-0 sm:w-full pointer-events-none text-white">
                                                        <div class="flex flex-col space-y-1 items-start">
                                                            <div class="flex items-center">Preview
                                                                <svg class="ml-3 fill-current" width="16" height="16"
                                                                     fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M15.5 8a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-4.646-2.854A.5.5 0 0 1 11 5.5v5a.5.5 0 0 1-1 0V6.707l-4.146 4.147a.5.5 0 0 1-.708-.708L9.293 6H5.5a.5.5 0 0 1 0-1h5c.138 0 .263.056.354.146Z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute w-full h-full inset-0"
                                         style="background-image: url({{asset('lmodel/pink-blur.png')}}); background-repeat: round; background-size: cover;"></div>
                                </a><a
                                    class="relative flex flex-col p-7.5 w-full bg-gray rounded z-10 overflow-hidden justify-between min-h-programDashboard sm:p-5 sm:min-h-programDashboardMobile"
                                    href="/dashboard/xGold?user=1">
                                    <svg class="absolute top-2 right-2 sm:top-1 sm:right-1 " width="20" height="20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                              fill="#fff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                              fill="#fff"></path>
                                    </svg>
                                    <div class="flex justify-between w-full z-10">
                                        <div class="flex items-center"><span
                                                class="text-white text-2xl notranslate font-bold justify-start sm:text-xl false">xGold</span>
                                        </div>
                                        <span
                                            class="text-white text-2xl font-bold justify-end text-right notranslate sm:text-xl">162 120 BUSD</span>
                                    </div>
                                    <div class="flex justify-between h-full w-full">
                                        <div class="flex justify-between w-full z-10 sm:flex-col mt-5 w-full items-end">
                                            <div
                                                class="flex w-5/12 h-full flex-col items-start justify-end sm:w-full flex-wrap sm:mb-7.5">
                                                <div class="flex flex-wrap -m-1">
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col h-full relative justify-end sm:w-full sm:items-center">
                                                <div class="flex sm:w-full ">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-orange hover:bg-hover-orange active:bg-active-orange z-0 sm:w-full pointer-events-none text-white">
                                                        <div class="flex flex-col space-y-1 items-start">
                                                            <div class="flex items-center">Preview
                                                                <svg class="ml-3 fill-current" width="16" height="16"
                                                                     fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M15.5 8a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-4.646-2.854A.5.5 0 0 1 11 5.5v5a.5.5 0 0 1-1 0V6.707l-4.146 4.147a.5.5 0 0 1-.708-.708L9.293 6H5.5a.5.5 0 0 1 0-1h5c.138 0 .263.056.354.146Z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute w-full h-full inset-0"
                                         style="background-image: url({{asset("lmodel/gold-blur.png")}}); background-repeat: round; background-size: cover;"></div>
                                </a><a
                                    class="relative flex flex-col p-7.5 w-full bg-gray rounded z-10 overflow-hidden justify-between min-h-programDashboard sm:p-5 sm:min-h-programDashboardMobile"
                                    href="/dashboard/xQore?user=1">
                                    <svg class="absolute top-2 right-2 sm:top-1 sm:right-1 " width="20" height="20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                              fill="#fff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                              fill="#fff"></path>
                                    </svg>
                                    <div class="flex justify-between w-full z-10">
                                        <div class="flex items-center"><span
                                                class="text-white text-2xl notranslate font-bold justify-start sm:text-xl false">xQore</span>
                                        </div>
                                        <span
                                            class="text-white text-2xl font-bold justify-end text-right notranslate sm:text-xl">136.228 BNB</span>
                                    </div>
                                    <div class="flex justify-between h-full w-full">
                                        <div class="flex justify-between w-full z-10 sm:flex-col mt-5 w-full items-end">
                                            <div
                                                class="flex w-5/12 h-full flex-col items-start justify-end sm:w-full flex-wrap sm:mb-7.5">
                                                <div class="flex flex-wrap -m-1">
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col h-full relative justify-end sm:w-full sm:items-center">
                                                <div class="flex sm:w-full ">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-cyan-300 hover:bg-hover-cyan-300 active:bg-active-cyan-300 z-0 sm:w-full pointer-events-none text-white">
                                                        <div class="flex flex-col space-y-1 items-start">
                                                            <div class="flex items-center">Preview
                                                                <svg class="ml-3 fill-current" width="16" height="16"
                                                                     fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M15.5 8a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-4.646-2.854A.5.5 0 0 1 11 5.5v5a.5.5 0 0 1-1 0V6.707l-4.146 4.147a.5.5 0 0 1-.708-.708L9.293 6H5.5a.5.5 0 0 1 0-1h5c.138 0 .263.056.354.146Z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute w-full h-full inset-0"
                                         style="background-image: url({{asset("lmodel/tiffany-blur.png")}}); background-repeat: round; background-size: cover;"></div>
                                </a><a
                                    class="relative flex flex-col p-7.5 w-full bg-gray rounded z-10 overflow-hidden justify-between min-h-programDashboard sm:p-5 sm:min-h-programDashboardMobile"
                                    href="/dashboard/maxQore?user=1">
                                    <svg class="absolute top-2 right-2 sm:top-1 sm:right-1 " width="20" height="20"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                              fill="#fff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                              fill="#fff"></path>
                                    </svg>
                                    <div class="flex justify-between w-full z-10">
                                        <div class="flex items-center"><span
                                                class="text-white text-2xl notranslate font-bold justify-start sm:text-xl false">maxQore</span>
                                        </div>
                                        <span
                                            class="text-white text-2xl font-bold justify-end text-right notranslate sm:text-xl">227.46 BNB</span>
                                    </div>
                                    <div class="flex justify-between h-full w-full">
                                        <div class="flex justify-between w-full z-10 sm:flex-col mt-5 w-full items-end">
                                            <div
                                                class="flex w-5/12 h-full flex-col items-start justify-end sm:w-full flex-wrap sm:mb-7.5">
                                                <div class="flex flex-wrap -m-1">
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                    <div
                                                        class="flex items-center justify-center m-1 w-7.5 h-7.5 rounded-md bg-main-blue "></div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col h-full relative justify-end sm:w-full sm:items-center">
                                                <div
                                                    class="flex sm:w-full flex-col space-y-1.5 sm:flex-row-reverse sm:space-y-0">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-program-green hover:bg-program-green-600 active:bg-program-green-600 z-0 sm:w-full pointer-events-none text-white">
                                                        <div class="flex flex-col space-y-1 items-start">
                                                            <div class="flex items-center">Preview
                                                                <svg class="ml-3 fill-current" width="16" height="16"
                                                                     fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                          d="M15.5 8a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-4.646-2.854A.5.5 0 0 1 11 5.5v5a.5.5 0 0 1-1 0V6.707l-4.146 4.147a.5.5 0 0 1-.708-.708L9.293 6H5.5a.5.5 0 0 1 0-1h5c.138 0 .263.056.354.146Z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute w-full h-full inset-0"
                                         style="background-image: url({{asset("lmodel/green-blur.png")}}); background-repeat: round; background-size: cover;"></div>
                                </a></div>
                        </div>
                        <div class="sm:px-5">
                            <div class="ambassador-buttonGradient rounded p-[1px]">
                                <div
                                    class="overflow-hidden bg-darkBlack rounded h-[140px] sm:h-auto w-full flex items-center justify-between space-x-5 sm:space-x-0 sm:flex-col sm:px-5 sm:py-[30px]">
                                    <div class="pl-5 h-full flex items-center sm:order-3 sm:w-full sm:pl-0">
                                        <button
                                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none ambassador-buttonGradient rounded-[100px] px-0 py-0 text-white py-[8px] px-[30px] sm:w-full sm:max-w-full sm:py-2.5">
                                            Go to Program
                                        </button>
                                    </div>
                                    <div
                                        class="py-[25px] h-full flex items-center justify-center sm:order-2 sm:py-[30px] ">
                                        <img src="{{asset("lmodel/text-logo.svg")}}" class="max-h-[60px] sm:max-h-[50px] h-full"
                                             alt=""></div>
                                    <img src="{{asset("lmodel/logo-full.png")}}"
                                         class="pr-5 sm:pr-0 h-[130%] sm:h-[125px] sm:order-1" alt=""></div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center sm:px-5"><span
                                    class="text-white text-3xl font-bold sm:text-2xl">Platform recent activity</span>
                                <div class="relative group">
                                    <button
                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none ml-1.5 "
                                        data-tip="true" data-for="Platform recent activity" currentitem="false">
                                        <span></span>
                                        <svg class="w-5 h-5 " viewBox="0 0 20 20" fill="#fff"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path>
                                        </svg>
                                    </button>
                                    <div
                                        class="__react_component_tooltip teed06a17-f8bd-485b-ab5d-7d9f12191c3a place-bottom type-dark"
                                        id="Platform recent activity" data-id="tooltip">
                                        <style aria-hidden="true">
                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a {
                                                color: #fff;
                                                background: #222;
                                                border: 1px solid transparent;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-top {
                                                margin-top: -10px;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-top::before {
                                                border-top: 8px solid transparent;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-top::after {
                                                border-left: 8px solid transparent;
                                                border-right: 8px solid transparent;
                                                bottom: -6px;
                                                left: 50%;
                                                margin-left: -8px;
                                                border-top-color: #222;
                                                border-top-style: solid;
                                                border-top-width: 6px;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-bottom {
                                                margin-top: 10px;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-bottom::before {
                                                border-bottom: 8px solid transparent;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-bottom::after {
                                                border-left: 8px solid transparent;
                                                border-right: 8px solid transparent;
                                                top: -6px;
                                                left: 50%;
                                                margin-left: -8px;
                                                border-bottom-color: #222;
                                                border-bottom-style: solid;
                                                border-bottom-width: 6px;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-left {
                                                margin-left: -10px;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-left::before {
                                                border-left: 8px solid transparent;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-left::after {
                                                border-top: 5px solid transparent;
                                                border-bottom: 5px solid transparent;
                                                right: -6px;
                                                top: 50%;
                                                margin-top: -4px;
                                                border-left-color: #222;
                                                border-left-style: solid;
                                                border-left-width: 6px;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-right {
                                                margin-left: 10px;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-right::before {
                                                border-right: 8px solid transparent;
                                            }

                                            .teed06a17-f8bd-485b-ab5d-7d9f12191c3a.place-right::after {
                                                border-top: 5px solid transparent;
                                                border-bottom: 5px solid transparent;
                                                left: -6px;
                                                top: 50%;
                                                margin-top: -4px;
                                                border-right-color: #222;
                                                border-right-style: solid;
                                                border-right-width: 6px;
                                            }
                                        </style>
                                        Forsage BUSD real-time global events with links to transactions in blockchain
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-10 mt-5 lg:grid-cols-1 lg:gap-0 z-10">
                                <div
                                    class="notranslate w-full overflow-hidden flex flex-col col-span-2 p-5 bg-gray rounded h-[1000px]  lg:order-2 sm:rounded-none sm:p-5 sm:max-h-3/4">
                                    <div class="flex -mr-10 pr-10 flex-col flex-1 overflow-auto">
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-white-100 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-white w-5 h-5" width="20" height="20"
                                                         fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 9.167a3.333 3.333 0 1 0 0-6.667 3.333 3.333 0 0 0 0 6.667ZM2.5 17.5v-2.667A3.333 3.333 0 0 1 5.833 11.5h3.334a3.333 3.333 0 0 1 3.333 3.333V17.5"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M15.833 6.167a.5.5 0 0 1 .5.5v2h2a.5.5 0 1 1 0 1h-2v2a.5.5 0 1 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 .5-.5Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max order-2"
                                                        href="/dashboard?user=1644320">ID 1644320</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 ml-0">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">new user joined</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0xbb13bb22116c60fea0e19832bc825deebc74a3a7012163635be727cfed957667">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#2CFF4E" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.833 10v5.833a1.666 1.666 0 0 1-1.666 1.667H5.833a1.667 1.667 0 0 1-1.666-1.667V10"
                                                            fill-opacity=".5"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.167 9.5a.5.5 0 0 1 .5.5v5.833A1.167 1.167 0 0 0 5.833 17h8.334a1.166 1.166 0 0 0 1.166-1.167V10a.5.5 0 1 1 1 0v5.833A2.167 2.167 0 0 1 14.167 18H5.833a2.167 2.167 0 0 1-2.166-2.167V10a.5.5 0 0 1 .5-.5Z"></path>
                                                        <path
                                                            d="M16.667 6.667H3.333A.833.833 0 0 0 2.5 7.5v1.667c0 .46.373.833.833.833h13.334c.46 0 .833-.373.833-.833V7.5a.833.833 0 0 0-.833-.833Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.333 7.167A.333.333 0 0 0 3 7.5v1.667c0 .184.15.333.333.333h13.334c.184 0 .333-.15.333-.333V7.5a.333.333 0 0 0-.333-.333H3.333ZM2 7.5c0-.736.597-1.333 1.333-1.333h13.334c.736 0 1.333.597 1.333 1.333v1.667c0 .736-.597 1.333-1.333 1.333H3.333A1.333 1.333 0 0 1 2 9.167V7.5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M8.139 3.954C7.541 3.29 6.884 2.989 6.259 3H6.25a1.583 1.583 0 0 0 0 3.167.5.5 0 0 1 0 1A2.583 2.583 0 0 1 6.246 2c.98-.016 1.897.464 2.636 1.285.444.493.82 1.103 1.118 1.795.298-.692.674-1.302 1.118-1.795.739-.821 1.655-1.3 2.636-1.285a2.583 2.583 0 0 1-.004 5.167.5.5 0 0 1 0-1 1.583 1.583 0 0 0 0-3.167h-.009c-.625-.011-1.282.29-1.88.954-.6.667-1.088 1.647-1.375 2.83a.5.5 0 0 1-.972 0c-.287-1.183-.775-2.163-1.375-2.83Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M10 6.167a.5.5 0 0 1 .5.5V17.5a.5.5 0 0 1-1 0V6.667a.5.5 0 0 1 .5-.5Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1358485">ID 1358485</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+ bonus</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">5 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-light-purple"> x4 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0xbb13bb22116c60fea0e19832bc825deebc74a3a7012163635be727cfed957667">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.468 3.468A2.167 2.167 0 0 1 5 2.833h8.334a1.333 1.333 0 0 1 1.333 1.334v2H15A1.333 1.333 0 0 1 16.334 7.5V10a.5.5 0 0 1-1 0V7.5A.333.333 0 0 0 15 7.167H5c-.417 0-.82-.12-1.167-.341V15A1.167 1.167 0 0 0 5 16.167h10a.333.333 0 0 0 .334-.334v-2.5a.5.5 0 0 1 1 0v2.5A1.333 1.333 0 0 1 15 17.168H5A2.166 2.166 0 0 1 2.833 15V5c0-.574.229-1.126.635-1.532ZM3.833 5A1.167 1.167 0 0 0 5 6.167h8.667v-2a.333.333 0 0 0-.333-.333H5A1.167 1.167 0 0 0 3.833 5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V5a2 2 0 0 0-2-2H5Z"
                                                              fill-opacity=".5"></path>
                                                        <path
                                                            d="M16.667 10v3.333h-3.334a1.667 1.667 0 0 1 0-3.333h3.334Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.333 10.5a1.167 1.167 0 1 0 0 2.333h2.834V10.5h-2.834Zm-1.532-.365a2.167 2.167 0 0 1 1.532-.635h3.334a.5.5 0 0 1 .5.5v3.333a.5.5 0 0 1-.5.5h-3.334a2.166 2.166 0 0 1-1.532-3.698Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1637651">ID 1637651</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">10 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-light-purple"> x4 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0x73bfe766bbd866066ff5ba463c8a6a51ff51ac4e39db6a9d633823190195f5fa">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.468 3.468A2.167 2.167 0 0 1 5 2.833h8.334a1.333 1.333 0 0 1 1.333 1.334v2H15A1.333 1.333 0 0 1 16.334 7.5V10a.5.5 0 0 1-1 0V7.5A.333.333 0 0 0 15 7.167H5c-.417 0-.82-.12-1.167-.341V15A1.167 1.167 0 0 0 5 16.167h10a.333.333 0 0 0 .334-.334v-2.5a.5.5 0 0 1 1 0v2.5A1.333 1.333 0 0 1 15 17.168H5A2.166 2.166 0 0 1 2.833 15V5c0-.574.229-1.126.635-1.532ZM3.833 5A1.167 1.167 0 0 0 5 6.167h8.667v-2a.333.333 0 0 0-.333-.333H5A1.167 1.167 0 0 0 3.833 5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V5a2 2 0 0 0-2-2H5Z"
                                                              fill-opacity=".5"></path>
                                                        <path
                                                            d="M16.667 10v3.333h-3.334a1.667 1.667 0 0 1 0-3.333h3.334Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.333 10.5a1.167 1.167 0 1 0 0 2.333h2.834V10.5h-2.834Zm-1.532-.365a2.167 2.167 0 0 1 1.532-.635h3.334a.5.5 0 0 1 .5.5v3.333a.5.5 0 0 1-.5.5h-3.334a2.166 2.166 0 0 1-1.532-3.698Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1531297">ID 1531297</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">5 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-main-blue"> x3 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0xbb13bb22116c60fea0e19832bc825deebc74a3a7012163635be727cfed957667">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.468 3.468A2.167 2.167 0 0 1 5 2.833h8.334a1.333 1.333 0 0 1 1.333 1.334v2H15A1.333 1.333 0 0 1 16.334 7.5V10a.5.5 0 0 1-1 0V7.5A.333.333 0 0 0 15 7.167H5c-.417 0-.82-.12-1.167-.341V15A1.167 1.167 0 0 0 5 16.167h10a.333.333 0 0 0 .334-.334v-2.5a.5.5 0 0 1 1 0v2.5A1.333 1.333 0 0 1 15 17.168H5A2.166 2.166 0 0 1 2.833 15V5c0-.574.229-1.126.635-1.532ZM3.833 5A1.167 1.167 0 0 0 5 6.167h8.667v-2a.333.333 0 0 0-.333-.333H5A1.167 1.167 0 0 0 3.833 5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V5a2 2 0 0 0-2-2H5Z"
                                                              fill-opacity=".5"></path>
                                                        <path
                                                            d="M16.667 10v3.333h-3.334a1.667 1.667 0 0 1 0-3.333h3.334Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.333 10.5a1.167 1.167 0 1 0 0 2.333h2.834V10.5h-2.834Zm-1.532-.365a2.167 2.167 0 0 1 1.532-.635h3.334a.5.5 0 0 1 .5.5v3.333a.5.5 0 0 1-.5.5h-3.334a2.166 2.166 0 0 1-1.532-3.698Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1023885">ID 1023885</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">80 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-main-blue"> x3 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0x1eae1eda49ae2870c91d596b79d6112d8997ac293e1f41bce0e0221e62f467d0">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.468 3.468A2.167 2.167 0 0 1 5 2.833h8.334a1.333 1.333 0 0 1 1.333 1.334v2H15A1.333 1.333 0 0 1 16.334 7.5V10a.5.5 0 0 1-1 0V7.5A.333.333 0 0 0 15 7.167H5c-.417 0-.82-.12-1.167-.341V15A1.167 1.167 0 0 0 5 16.167h10a.333.333 0 0 0 .334-.334v-2.5a.5.5 0 0 1 1 0v2.5A1.333 1.333 0 0 1 15 17.168H5A2.166 2.166 0 0 1 2.833 15V5c0-.574.229-1.126.635-1.532ZM3.833 5A1.167 1.167 0 0 0 5 6.167h8.667v-2a.333.333 0 0 0-.333-.333H5A1.167 1.167 0 0 0 3.833 5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V5a2 2 0 0 0-2-2H5Z"
                                                              fill-opacity=".5"></path>
                                                        <path
                                                            d="M16.667 10v3.333h-3.334a1.667 1.667 0 0 1 0-3.333h3.334Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.333 10.5a1.167 1.167 0 1 0 0 2.333h2.834V10.5h-2.834Zm-1.532-.365a2.167 2.167 0 0 1 1.532-.635h3.334a.5.5 0 0 1 .5.5v3.333a.5.5 0 0 1-.5.5h-3.334a2.166 2.166 0 0 1-1.532-3.698Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1599160">ID 1599160</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">10 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-main-blue"> x3 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0x675849ef8392c8bbba8760de08426bdcec66f98e3fea47f89c339ee2942de4e4">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.468 3.468A2.167 2.167 0 0 1 5 2.833h8.334a1.333 1.333 0 0 1 1.333 1.334v2H15A1.333 1.333 0 0 1 16.334 7.5V10a.5.5 0 0 1-1 0V7.5A.333.333 0 0 0 15 7.167H5c-.417 0-.82-.12-1.167-.341V15A1.167 1.167 0 0 0 5 16.167h10a.333.333 0 0 0 .334-.334v-2.5a.5.5 0 0 1 1 0v2.5A1.333 1.333 0 0 1 15 17.168H5A2.166 2.166 0 0 1 2.833 15V5c0-.574.229-1.126.635-1.532ZM3.833 5A1.167 1.167 0 0 0 5 6.167h8.667v-2a.333.333 0 0 0-.333-.333H5A1.167 1.167 0 0 0 3.833 5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V5a2 2 0 0 0-2-2H5Z"
                                                              fill-opacity=".5"></path>
                                                        <path
                                                            d="M16.667 10v3.333h-3.334a1.667 1.667 0 0 1 0-3.333h3.334Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.333 10.5a1.167 1.167 0 1 0 0 2.333h2.834V10.5h-2.834Zm-1.532-.365a2.167 2.167 0 0 1 1.532-.635h3.334a.5.5 0 0 1 .5.5v3.333a.5.5 0 0 1-.5.5h-3.334a2.166 2.166 0 0 1-1.532-3.698Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1182115">ID 1182115</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">80 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-main-blue"> x3 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0x1eae1eda49ae2870c91d596b79d6112d8997ac293e1f41bce0e0221e62f467d0">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-white-100 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-white w-5 h-5" width="20" height="20"
                                                         fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.5 9.167a3.333 3.333 0 1 0 0-6.667 3.333 3.333 0 0 0 0 6.667ZM2.5 17.5v-2.667A3.333 3.333 0 0 1 5.833 11.5h3.334a3.333 3.333 0 0 1 3.333 3.333V17.5"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M15.833 6.167a.5.5 0 0 1 .5.5v2h2a.5.5 0 1 1 0 1h-2v2a.5.5 0 1 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 .5-.5Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max order-2"
                                                        href="/dashboard?user=1644319">ID 1644319</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 ml-0">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">new user joined</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0x8ee675bec8dad488805a391eaf5a353b5230fa2bc38c539ff12ad9643eb400f3">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.468 3.468A2.167 2.167 0 0 1 5 2.833h8.334a1.333 1.333 0 0 1 1.333 1.334v2H15A1.333 1.333 0 0 1 16.334 7.5V10a.5.5 0 0 1-1 0V7.5A.333.333 0 0 0 15 7.167H5c-.417 0-.82-.12-1.167-.341V15A1.167 1.167 0 0 0 5 16.167h10a.333.333 0 0 0 .334-.334v-2.5a.5.5 0 0 1 1 0v2.5A1.333 1.333 0 0 1 15 17.168H5A2.166 2.166 0 0 1 2.833 15V5c0-.574.229-1.126.635-1.532ZM3.833 5A1.167 1.167 0 0 0 5 6.167h8.667v-2a.333.333 0 0 0-.333-.333H5A1.167 1.167 0 0 0 3.833 5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V5a2 2 0 0 0-2-2H5Z"
                                                              fill-opacity=".5"></path>
                                                        <path
                                                            d="M16.667 10v3.333h-3.334a1.667 1.667 0 0 1 0-3.333h3.334Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.333 10.5a1.167 1.167 0 1 0 0 2.333h2.834V10.5h-2.834Zm-1.532-.365a2.167 2.167 0 0 1 1.532-.635h3.334a.5.5 0 0 1 .5.5v3.333a.5.5 0 0 1-.5.5h-3.334a2.166 2.166 0 0 1-1.532-3.698Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1622932">ID 1622932</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">5 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-light-purple"> x4 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0x8ee675bec8dad488805a391eaf5a353b5230fa2bc38c539ff12ad9643eb400f3">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.468 3.468A2.167 2.167 0 0 1 5 2.833h8.334a1.333 1.333 0 0 1 1.333 1.334v2H15A1.333 1.333 0 0 1 16.334 7.5V10a.5.5 0 0 1-1 0V7.5A.333.333 0 0 0 15 7.167H5c-.417 0-.82-.12-1.167-.341V15A1.167 1.167 0 0 0 5 16.167h10a.333.333 0 0 0 .334-.334v-2.5a.5.5 0 0 1 1 0v2.5A1.333 1.333 0 0 1 15 17.168H5A2.166 2.166 0 0 1 2.833 15V5c0-.574.229-1.126.635-1.532ZM3.833 5A1.167 1.167 0 0 0 5 6.167h8.667v-2a.333.333 0 0 0-.333-.333H5A1.167 1.167 0 0 0 3.833 5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V5a2 2 0 0 0-2-2H5Z"
                                                              fill-opacity=".5"></path>
                                                        <path
                                                            d="M16.667 10v3.333h-3.334a1.667 1.667 0 0 1 0-3.333h3.334Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.333 10.5a1.167 1.167 0 1 0 0 2.333h2.834V10.5h-2.834Zm-1.532-.365a2.167 2.167 0 0 1 1.532-.635h3.334a.5.5 0 0 1 .5.5v3.333a.5.5 0 0 1-.5.5h-3.334a2.166 2.166 0 0 1-1.532-3.698Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1599160">ID 1599160</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">5 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-main-blue"> x3 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0x8ee675bec8dad488805a391eaf5a353b5230fa2bc38c539ff12ad9643eb400f3">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between py-5 border-line-gray border-b first:pt-0 w-full sm:py-5 sm:items-start">
                                            <div class="flex items-center sm:items-start justify-start sm:w-full">
                                                <div
                                                    class="bg-green-200 flex w-10 h-10 items-center justify-center rounded-full flex-shrink-0 sm:w-7.5 sm:h-7.5">
                                                    <svg class="fill-current text-green w-5 h-5" viewBox="0 0 20 20"
                                                         fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.468 3.468A2.167 2.167 0 0 1 5 2.833h8.334a1.333 1.333 0 0 1 1.333 1.334v2H15A1.333 1.333 0 0 1 16.334 7.5V10a.5.5 0 0 1-1 0V7.5A.333.333 0 0 0 15 7.167H5c-.417 0-.82-.12-1.167-.341V15A1.167 1.167 0 0 0 5 16.167h10a.333.333 0 0 0 .334-.334v-2.5a.5.5 0 0 1 1 0v2.5A1.333 1.333 0 0 1 15 17.168H5A2.166 2.166 0 0 1 2.833 15V5c0-.574.229-1.126.635-1.532ZM3.833 5A1.167 1.167 0 0 0 5 6.167h8.667v-2a.333.333 0 0 0-.333-.333H5A1.167 1.167 0 0 0 3.833 5Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M5 3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-1V5a2 2 0 0 0-2-2H5Z"
                                                              fill-opacity=".5"></path>
                                                        <path
                                                            d="M16.667 10v3.333h-3.334a1.667 1.667 0 0 1 0-3.333h3.334Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M13.333 10.5a1.167 1.167 0 1 0 0 2.333h2.834V10.5h-2.834Zm-1.532-.365a2.167 2.167 0 0 1 1.532-.635h3.334a.5.5 0 0 1 .5.5v3.333a.5.5 0 0 1-.5.5h-3.334a2.166 2.166 0 0 1-1.532-3.698Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="flex ml-5 items-center sm:w-full flex-wrap sm:ml-2.5"><a
                                                        class="flex items-center justify-center notranslate px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded font-medium text-base sm:text-sm w-max false"
                                                        href="/dashboard?user=1637651">ID 1637651</a>
                                                    <div
                                                        class="h-full flex flex-wrap justify-center items-center mx-2.5 sm:mx-1.5 false">
                                                        <span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">+</span><span
                                                            class="text-white text-base sm:text-sm mx-1 notranslate sm:leading-30px">5 BUSD </span><span
                                                            class="text-white-500 text-base sm:text-sm sm:leading-30px">in <span
                                                                class="notranslate text-main-blue"> x3 </span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center justify-end whitespace-nowrap h-full"><a
                                                        class="sm:order-2" target="_blank"
                                                        href="https://bscscan.com/tx/0x8ee675bec8dad488805a391eaf5a353b5230fa2bc38c539ff12ad9643eb400f3">
                                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                        </svg>
                                                    </a><span
                                                        class="ml-2.5 text-white-500 text-base sm:text-sm sm:order-1 sm:ml-2.5 sm:mr-1 sm:leading-30px">~ 1 hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 w-full rounded-mini mt-5 flex justify-center items-center">
                                        <svg class="mr-2.5" width="21" height="20" fill="#fff"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M10.5 15.833c3.333 0 6.11-1.944 8.333-5.833-2.222-3.89-5-5.833-8.333-5.833S4.39 6.11 2.167 10c2.222 3.889 5 5.833 8.333 5.833ZM12.167 10a1.667 1.667 0 1 1-3.334 0 1.667 1.667 0 0 1 3.334 0Z"></path>
                                        </svg>
                                        See more
                                    </button>
                                </div>
                                <div
                                    class="flex flex-col space-y-10 lg:w-full lg:order-1 lg:mb-10 sm:mb-5 sm:space-y-5 sm:px-5">
                                    <div
                                        class="sm:mobile-infoblock-base flex flex-col bg-black-light rounded relative z-[11] overflow-hidden desktop-infoblock-base sm:mobile-infoblock-base">
                                        <div
                                            class="flex flex-col px-5 pt-5 w-full relative sm:justify-between sm:items-start">
                                            <div class="flex items-center z-[10]"><span
                                                    class="text-white-500 text-base sm:text-sm sm:whitespace-nowrap">Members total</span>
                                                <div class="relative group">
                                                    <button
                                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none ml-1.5 "
                                                        data-tip="true" data-for="Members total" currentitem="false">
                                                        <span></span>
                                                        <svg class="w-5 h-5 " viewBox="0 0 20 20" fill="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path>
                                                        </svg>
                                                    </button>
                                                    <div
                                                        class="__react_component_tooltip t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef place-bottom type-dark"
                                                        id="Members total" data-id="tooltip">
                                                        <style aria-hidden="true">
                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef {
                                                                color: #fff;
                                                                background: #222;
                                                                border: 1px solid transparent;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-top {
                                                                margin-top: -10px;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-top::before {
                                                                border-top: 8px solid transparent;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-top::after {
                                                                border-left: 8px solid transparent;
                                                                border-right: 8px solid transparent;
                                                                bottom: -6px;
                                                                left: 50%;
                                                                margin-left: -8px;
                                                                border-top-color: #222;
                                                                border-top-style: solid;
                                                                border-top-width: 6px;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-bottom {
                                                                margin-top: 10px;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-bottom::before {
                                                                border-bottom: 8px solid transparent;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-bottom::after {
                                                                border-left: 8px solid transparent;
                                                                border-right: 8px solid transparent;
                                                                top: -6px;
                                                                left: 50%;
                                                                margin-left: -8px;
                                                                border-bottom-color: #222;
                                                                border-bottom-style: solid;
                                                                border-bottom-width: 6px;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-left {
                                                                margin-left: -10px;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-left::before {
                                                                border-left: 8px solid transparent;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-left::after {
                                                                border-top: 5px solid transparent;
                                                                border-bottom: 5px solid transparent;
                                                                right: -6px;
                                                                top: 50%;
                                                                margin-top: -4px;
                                                                border-left-color: #222;
                                                                border-left-style: solid;
                                                                border-left-width: 6px;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-right {
                                                                margin-left: 10px;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-right::before {
                                                                border-right: 8px solid transparent;
                                                            }

                                                            .t2b17e35d-5c2c-4eb6-bc2f-792570c1e6ef.place-right::after {
                                                                border-top: 5px solid transparent;
                                                                border-bottom: 5px solid transparent;
                                                                left: -6px;
                                                                top: 50%;
                                                                margin-top: -4px;
                                                                border-right-color: #222;
                                                                border-right-style: solid;
                                                                border-right-width: 6px;
                                                            }
                                                        </style>
                                                        Total number of members in Forsage BUSD and last 24 hours change
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="text-white text-2xl font-bold notranslate sm:text-xl false mt-5 sm:mt-2.5">1 644 319</span>
                                        </div>
                                        <div
                                            class="p-5 pt-0 flex text-green-light text-base items-baseline notranslate sm:text-sm">
                                            <svg class="mr-1.5" width="8" height="11" stroke="#2CFF4E"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 10V1m0 0L1 4m3-3 3 3" stroke-linecap="round"
                                                      stroke-linejoin="round"></path>
                                            </svg>
                                            560
                                        </div>
                                    </div>
                                    <div class="bg-gray rounded p-5 flex flex-col max-w-full"><span
                                            class="inline-flex items-center text-base text-white-500 sm:text-sm">Members received <div
                                                class="relative group"><button
                                                    class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none ml-1.5 "
                                                    data-tip="true" data-for="Members received"
                                                    currentitem="false"><span></span> <svg class="w-5 h-5 "
                                                                                           viewBox="0 0 20 20"
                                                                                           fill="#fff"
                                                                                           xmlns="http://www.w3.org/2000/svg"><path
                                                            fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path></svg></button><div
                                                    class="__react_component_tooltip t4caa0e02-5e0a-4d80-b008-ef018fb331f9 place-bottom type-dark"
                                                    id="Members received" data-id="tooltip"><style aria-hidden="true">
  	.t4caa0e02-5e0a-4d80-b008-ef018fb331f9 {
        color: #fff;
        background: #222;
        border: 1px solid transparent;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-top {
        margin-top: -10px;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-top::before {
        border-top: 8px solid transparent;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-top::after {
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        bottom: -6px;
        left: 50%;
        margin-left: -8px;
        border-top-color: #222;
        border-top-style: solid;
        border-top-width: 6px;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-bottom {
        margin-top: 10px;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-bottom::before {
        border-bottom: 8px solid transparent;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-bottom::after {
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        top: -6px;
        left: 50%;
        margin-left: -8px;
        border-bottom-color: #222;
        border-bottom-style: solid;
        border-bottom-width: 6px;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-left {
        margin-left: -10px;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-left::before {
        border-left: 8px solid transparent;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-left::after {
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        right: -6px;
        top: 50%;
        margin-top: -4px;
        border-left-color: #222;
        border-left-style: solid;
        border-left-width: 6px;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-right {
        margin-left: 10px;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-right::before {
        border-right: 8px solid transparent;
    }

    .t4caa0e02-5e0a-4d80-b008-ef018fb331f9.place-right::after {
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        left: -6px;
        top: 50%;
        margin-top: -4px;
        border-right-color: #222;
        border-right-style: solid;
        border-right-width: 6px;
    }
  </style>Total amount received by all members of Forsage and last 24 hours change</div></div></span>
                                        <div
                                            class="flex flex-col py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                            <span
                                                class="text-2xl text-white font-bold sm:text-xl">147 082 746.27 BUSD</span><span
                                                class="text-green-light text-base items-baseline sm:text-sm">+ 14 299.5 BUSD</span>
                                        </div>
                                        <div
                                            class="flex flex-col py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                            <span
                                                class="text-2xl text-white font-bold sm:text-xl">22 382.5375 BNB</span><span
                                                class="text-green-light text-base items-baseline sm:text-sm">+ 5.1805 BNB</span>
                                        </div>
                                    </div>
                                    <div class="bg-gray rounded p-5 flex flex-col flex-1 max-w-full">
                                        <div
                                            class="flex justify-between items-center text-base text-white-500 sm:text-sm">
                                            <span>Forsage BUSD Contracts</span>
                                            <button
                                                class="rounded-full h-5 w-5 justify-center items-center bg-main-blue hidden lg:flex">
                                                <svg class="stroke-current text-white" width="8" height="4" fill="#fff"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 4 0 0h8L4 4Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex flex-col flex-1 justify-between lg:hidden">
                                            <div class="flex flex-col border-t border-b border-white-100 pb-2.5 mt-2.5">
                                                <div
                                                    class="flex justify-between items-center py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                    <span
                                                        class="text-base text-white-500 notranslate sm:text-sm">x3/x4</span>
                                                    <div class="flex justify-end items-center space-x-2.5"><span
                                                            class="text-base text-white notranslate sm:text-sm">0x5ac...B97</span>
                                                        <button>
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="#fff"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15 6.667H8.332c-.92 0-1.667.746-1.667 1.666V15c0 .92.746 1.667 1.667 1.667h6.666c.92 0 1.667-.747 1.667-1.667V8.333c0-.92-.746-1.666-1.667-1.666Z"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M3.469 3.468A2.167 2.167 0 0 1 5 2.833h6.666A2.167 2.167 0 0 1 13.834 5v1.667a.5.5 0 0 1-1 0V5a1.167 1.167 0 0 0-1.167-1.167H5.001A1.167 1.167 0 0 0 3.834 5v6.667a1.167 1.167 0 0 0 1.167 1.166h1.666a.5.5 0 1 1 0 1H5.001a2.167 2.167 0 0 1-2.167-2.166V5c0-.575.228-1.126.635-1.532Z"></path>
                                                            </svg>
                                                        </button>
                                                        <a target="_blank"
                                                           href="https://bscscan.com/address/0x5acc84a3e955bdd76467d3348077d003f00ffb97">
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M11.314 3.813a3.446 3.446 0 1 1 4.873 4.874l-3.331 3.331a3.418 3.418 0 0 1-4.88-.001.5.5 0 0 1 .715-.7 2.417 2.417 0 0 0 3.452 0l.004-.004L15.48 7.98a2.446 2.446 0 1 0-3.46-3.46l-.416.417a.5.5 0 1 1-.707-.707l.417-.417Z"
                                                                      fill="#fff"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M8.26 7.225a3.417 3.417 0 0 1 3.765.758.5.5 0 0 1-.715.7 2.417 2.417 0 0 0-3.452 0l-.003.004L4.52 12.02a2.446 2.446 0 0 0 3.46 3.46l.416-.417a.5.5 0 1 1 .708.707l-.417.417a3.446 3.446 0 1 1-4.874-4.874l3.332-3.332a3.417 3.417 0 0 1 1.115-.756Z"
                                                                      fill="#fff"></path>
                                                            </svg>
                                                        </a></div>
                                                </div>
                                                <div
                                                    class="flex justify-between items-center py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                    <span
                                                        class="text-base text-white-500 notranslate sm:text-sm">xXx</span>
                                                    <div class="flex justify-end items-center space-x-2.5"><span
                                                            class="text-base text-white notranslate sm:text-sm">0x2CA...e52</span>
                                                        <button>
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="#fff"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15 6.667H8.332c-.92 0-1.667.746-1.667 1.666V15c0 .92.746 1.667 1.667 1.667h6.666c.92 0 1.667-.747 1.667-1.667V8.333c0-.92-.746-1.666-1.667-1.666Z"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M3.469 3.468A2.167 2.167 0 0 1 5 2.833h6.666A2.167 2.167 0 0 1 13.834 5v1.667a.5.5 0 0 1-1 0V5a1.167 1.167 0 0 0-1.167-1.167H5.001A1.167 1.167 0 0 0 3.834 5v6.667a1.167 1.167 0 0 0 1.167 1.166h1.666a.5.5 0 1 1 0 1H5.001a2.167 2.167 0 0 1-2.167-2.166V5c0-.575.228-1.126.635-1.532Z"></path>
                                                            </svg>
                                                        </button>
                                                        <a target="_blank"
                                                           href="https://bscscan.com/address/0x2caa4694cb7daf7d49a198dc1103c06d4991ae52">
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M11.314 3.813a3.446 3.446 0 1 1 4.873 4.874l-3.331 3.331a3.418 3.418 0 0 1-4.88-.001.5.5 0 0 1 .715-.7 2.417 2.417 0 0 0 3.452 0l.004-.004L15.48 7.98a2.446 2.446 0 1 0-3.46-3.46l-.416.417a.5.5 0 1 1-.707-.707l.417-.417Z"
                                                                      fill="#fff"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M8.26 7.225a3.417 3.417 0 0 1 3.765.758.5.5 0 0 1-.715.7 2.417 2.417 0 0 0-3.452 0l-.003.004L4.52 12.02a2.446 2.446 0 0 0 3.46 3.46l.416-.417a.5.5 0 1 1 .708.707l-.417.417a3.446 3.446 0 1 1-4.874-4.874l3.332-3.332a3.417 3.417 0 0 1 1.115-.756Z"
                                                                      fill="#fff"></path>
                                                            </svg>
                                                        </a></div>
                                                </div>
                                                <div
                                                    class="flex justify-between items-center py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                    <span
                                                        class="text-base text-white-500 notranslate sm:text-sm">xGold</span>
                                                    <div class="flex justify-end items-center space-x-2.5"><span
                                                            class="text-base text-white notranslate sm:text-sm">0x988...7C5</span>
                                                        <button>
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="#fff"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15 6.667H8.332c-.92 0-1.667.746-1.667 1.666V15c0 .92.746 1.667 1.667 1.667h6.666c.92 0 1.667-.747 1.667-1.667V8.333c0-.92-.746-1.666-1.667-1.666Z"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M3.469 3.468A2.167 2.167 0 0 1 5 2.833h6.666A2.167 2.167 0 0 1 13.834 5v1.667a.5.5 0 0 1-1 0V5a1.167 1.167 0 0 0-1.167-1.167H5.001A1.167 1.167 0 0 0 3.834 5v6.667a1.167 1.167 0 0 0 1.167 1.166h1.666a.5.5 0 1 1 0 1H5.001a2.167 2.167 0 0 1-2.167-2.166V5c0-.575.228-1.126.635-1.532Z"></path>
                                                            </svg>
                                                        </button>
                                                        <a target="_blank"
                                                           href="https://bscscan.com/address/0x98872a66D0749C720D8Dc1A80d496b24B04ff7C5">
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M11.314 3.813a3.446 3.446 0 1 1 4.873 4.874l-3.331 3.331a3.418 3.418 0 0 1-4.88-.001.5.5 0 0 1 .715-.7 2.417 2.417 0 0 0 3.452 0l.004-.004L15.48 7.98a2.446 2.446 0 1 0-3.46-3.46l-.416.417a.5.5 0 1 1-.707-.707l.417-.417Z"
                                                                      fill="#fff"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M8.26 7.225a3.417 3.417 0 0 1 3.765.758.5.5 0 0 1-.715.7 2.417 2.417 0 0 0-3.452 0l-.003.004L4.52 12.02a2.446 2.446 0 0 0 3.46 3.46l.416-.417a.5.5 0 1 1 .708.707l-.417.417a3.446 3.446 0 1 1-4.874-4.874l3.332-3.332a3.417 3.417 0 0 1 1.115-.756Z"
                                                                      fill="#fff"></path>
                                                            </svg>
                                                        </a></div>
                                                </div>
                                                <div
                                                    class="flex justify-between items-center py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                    <span
                                                        class="text-base text-white-500 notranslate sm:text-sm">xQore</span>
                                                    <div class="flex justify-end items-center space-x-2.5"><span
                                                            class="text-base text-white notranslate sm:text-sm">0x1ee...a78</span>
                                                        <button>
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="#fff"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15 6.667H8.332c-.92 0-1.667.746-1.667 1.666V15c0 .92.746 1.667 1.667 1.667h6.666c.92 0 1.667-.747 1.667-1.667V8.333c0-.92-.746-1.666-1.667-1.666Z"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M3.469 3.468A2.167 2.167 0 0 1 5 2.833h6.666A2.167 2.167 0 0 1 13.834 5v1.667a.5.5 0 0 1-1 0V5a1.167 1.167 0 0 0-1.167-1.167H5.001A1.167 1.167 0 0 0 3.834 5v6.667a1.167 1.167 0 0 0 1.167 1.166h1.666a.5.5 0 1 1 0 1H5.001a2.167 2.167 0 0 1-2.167-2.166V5c0-.575.228-1.126.635-1.532Z"></path>
                                                            </svg>
                                                        </button>
                                                        <a target="_blank"
                                                           href="https://bscscan.com/address/0x1ee4A7a62726fDd1EDe780f90fd2a77f53F5Ba78">
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M11.314 3.813a3.446 3.446 0 1 1 4.873 4.874l-3.331 3.331a3.418 3.418 0 0 1-4.88-.001.5.5 0 0 1 .715-.7 2.417 2.417 0 0 0 3.452 0l.004-.004L15.48 7.98a2.446 2.446 0 1 0-3.46-3.46l-.416.417a.5.5 0 1 1-.707-.707l.417-.417Z"
                                                                      fill="#fff"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M8.26 7.225a3.417 3.417 0 0 1 3.765.758.5.5 0 0 1-.715.7 2.417 2.417 0 0 0-3.452 0l-.003.004L4.52 12.02a2.446 2.446 0 0 0 3.46 3.46l.416-.417a.5.5 0 1 1 .708.707l-.417.417a3.446 3.446 0 1 1-4.874-4.874l3.332-3.332a3.417 3.417 0 0 1 1.115-.756Z"
                                                                      fill="#fff"></path>
                                                            </svg>
                                                        </a></div>
                                                </div>
                                                <div
                                                    class="flex justify-between items-center py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                    <span class="text-base text-white-500 notranslate sm:text-sm">maxQore</span>
                                                    <div class="flex justify-end items-center space-x-2.5"><span
                                                            class="text-base text-white notranslate sm:text-sm">0x27D...260</span>
                                                        <button>
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="#fff"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15 6.667H8.332c-.92 0-1.667.746-1.667 1.666V15c0 .92.746 1.667 1.667 1.667h6.666c.92 0 1.667-.747 1.667-1.667V8.333c0-.92-.746-1.666-1.667-1.666Z"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M3.469 3.468A2.167 2.167 0 0 1 5 2.833h6.666A2.167 2.167 0 0 1 13.834 5v1.667a.5.5 0 0 1-1 0V5a1.167 1.167 0 0 0-1.167-1.167H5.001A1.167 1.167 0 0 0 3.834 5v6.667a1.167 1.167 0 0 0 1.167 1.166h1.666a.5.5 0 1 1 0 1H5.001a2.167 2.167 0 0 1-2.167-2.166V5c0-.575.228-1.126.635-1.532Z"></path>
                                                            </svg>
                                                        </button>
                                                        <a target="_blank"
                                                           href="https://bscscan.com/address/0x27D6bBaC9112D2097FafA3B14Ae367539A7B1260">
                                                            <svg class="h-18px w-18px" viewBox="0 0 20 20" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M11.314 3.813a3.446 3.446 0 1 1 4.873 4.874l-3.331 3.331a3.418 3.418 0 0 1-4.88-.001.5.5 0 0 1 .715-.7 2.417 2.417 0 0 0 3.452 0l.004-.004L15.48 7.98a2.446 2.446 0 1 0-3.46-3.46l-.416.417a.5.5 0 1 1-.707-.707l.417-.417Z"
                                                                      fill="#fff"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M8.26 7.225a3.417 3.417 0 0 1 3.765.758.5.5 0 0 1-.715.7 2.417 2.417 0 0 0-3.452 0l-.003.004L4.52 12.02a2.446 2.446 0 0 0 3.46 3.46l.416-.417a.5.5 0 1 1 .708.707l-.417.417a3.446 3.446 0 1 1-4.874-4.874l3.332-3.332a3.417 3.417 0 0 1 1.115-.756Z"
                                                                      fill="#fff"></path>
                                                            </svg>
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col pt-2.5 mt-auto">
                                                <div
                                                    class="flex flex-col py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                    <span
                                                        class="text-base text-white-500 sm:text-sm">Transactions made</span><span
                                                        class="text-2xl text-white font-bold sm:text-xl">5 802 385</span><span
                                                        class="text-green-light text-base items-baseline sm:text-sm">+ 1 190</span>
                                                </div>
                                                <div
                                                    class="flex flex-col py-2.5 border-b border-white-100 space-y-1.5 last:border-0 last:pb-0">
                                                    <span
                                                        class="text-base text-white-500 sm:text-sm"><span>Turnover, <span
                                                                class="notranslate">BUSD</span> </span></span><span
                                                        class="text-2xl text-white font-bold sm:text-xl">294 165 492.54</span><span
                                                        class="text-green-light text-base items-baseline sm:text-sm">+ 28 599</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden"><span>00:00:00:00</span></div>
                            </div>
                        </div>
                    </div>
                    <footer
                        class="flex lg:flex-col items-center mt-auto justify-between lg:justify-start lg:items-start py-10 w-full lg:p-5 lg:pb-9 pb-0 lg:pb-0 z-10">
                        <div class="hidden lg:block mb-7.5">
                            <div class="flex space-x-4 w-full"><a
                                    class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                    target="_blank" href="https://discord.gg/forsage/">
                                    <svg class="w-4 h-4" viewBox="0 0 21 15" fill="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.581 1.247A15.918 15.918 0 0 0 13.58 0a.084.084 0 0 0-.065.028c-.169.31-.366.712-.497 1.022a15.08 15.08 0 0 0-4.499 0A9.395 9.395 0 0 0 8.012.028C8.002.01 7.975 0 7.947 0a16.038 16.038 0 0 0-4.003 1.247c-.009 0-.018.009-.028.018C1.367 5.08.664 8.791 1.011 12.465c0 .02.01.038.028.047a16.28 16.28 0 0 0 4.911 2.484c.028.01.056 0 .066-.019.375-.515.712-1.059 1.003-1.63.018-.038 0-.075-.038-.085-.534-.206-1.04-.45-1.537-.73-.037-.02-.037-.076-.01-.104.104-.075.207-.16.31-.234a.058.058 0 0 1 .066-.01c3.224 1.472 6.7 1.472 9.888 0a.058.058 0 0 1 .065.01c.103.084.206.16.31.243.037.029.037.085-.01.104-.487.29-1.003.524-1.537.73-.037.01-.047.057-.037.085.3.572.637 1.115 1.002 1.63.029.01.057.02.085.01a16.215 16.215 0 0 0 4.92-2.484.052.052 0 0 0 .029-.046c.412-4.246-.685-7.93-2.906-11.2-.01-.01-.019-.02-.038-.02ZM7.506 10.226c-.965 0-1.771-.89-1.771-1.987s.787-1.987 1.771-1.987c.994 0 1.78.9 1.771 1.987 0 1.096-.787 1.986-1.771 1.986Zm6.533 0c-.966 0-1.772-.89-1.772-1.987s.788-1.987 1.772-1.987c.993 0 1.78.9 1.771 1.987 0 1.096-.778 1.986-1.771 1.986Z"></path>
                                    </svg>
                                </a><a
                                    class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                    target="_blank" href="https://t.me/forsageio_official/">
                                    <svg class="w-4 h-4" viewBox="0 0 14 12" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.915.776.841 5.168a.4.4 0 0 0 .03.755l2.79.864 1.133 3.503a.4.4 0 0 0 .653.17l1.64-1.523 3.11 2.29a.4.4 0 0 0 .627-.231l2.166-9.294a.8.8 0 0 0-1.075-.926Zm-6.483 6.74-.346 2.072-.8-2.901 7.816-5.1-6.67 5.929Z"
                                              fill="#fff"></path>
                                    </svg>
                                </a><a
                                    class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                    target="_blank" href="https://www.youtube.com/@FORSAGECommunity/">
                                    <svg class="w-4 h-4" viewBox="0 0 14 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.326 1.702A1.687 1.687 0 0 0 12.163.494C11.13.2 6.998.2 6.998.2S2.867.2 1.834.482C1.279.64.822 1.115.67 1.702.398 2.775.398 5 .398 5s0 2.236.272 3.298c.153.587.598 1.05 1.164 1.208 1.043.294 5.164.294 5.164.294s4.132 0 5.165-.282a1.687 1.687 0 0 0 1.164-1.209c.271-1.073.271-3.298.271-3.298s.011-2.236-.272-3.309ZM5.683 7.055v-4.11L9.119 5 5.683 7.055Z"
                                            fill="#fff"></path>
                                    </svg>
                                </a><a
                                    class="w-7 h-7 flex justify-center items-center rounded-full bg-white-100 hover:bg-white-300"
                                    target="_blank" href="https://twitter.com/forsageofficial/">
                                    <svg class="w-4 h-4" viewBox="0 0 13 10" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12.196 1.338c-.442.195-.91.324-1.39.382.506-.302.884-.779 1.064-1.34a4.79 4.79 0 0 1-1.536.588 2.42 2.42 0 0 0-4.125 2.208A6.86 6.86 0 0 1 1.219.643a2.423 2.423 0 0 0 .751 3.235c-.4-.01-.774-.12-1.1-.302v.03A2.422 2.422 0 0 0 2.813 5.98a2.441 2.441 0 0 1-1.092.04 2.425 2.425 0 0 0 2.263 1.683A4.854 4.854 0 0 1 .398 8.705 6.767 6.767 0 0 0 4.103 9.8c4.458 0 6.893-3.692 6.893-6.895 0-.105-.003-.21-.008-.312a4.928 4.928 0 0 0 1.208-1.255Z"
                                              fill="#fff"></path>
                                    </svg>
                                </a></div>
                        </div>
                        <span class="text-white-500 text-xs font-normal lg:mb-2.5">© 2024 All Rights Reserved</span>
                        <button
                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-0 py-0 bg-transparent text-white hover:text-white-500 font-normal text-sm notranslate">
                            Documents
                        </button>
                    </footer>
                </div>
            </div>
        </div>
        <div class="">

        </div>
    </div>

    {{--    <div id="google_translate_element"
         class=" hide_select__translate flex items-center justify-center w-auto h-[36px] text-base font-bold text-white outline-none py-0 px-3 bg-main-blue text-white min-w-40px rounded rounded-br-sm fixed right-5 bottom-24 z-40 lg:px-2">
        <svg
            class="fill-current text-white h-5 w-5 mr-2 sm:mr-0 lg:mr-0 pointer-events-none absolute left-4 lg:left-2.5 flex-shrink-0"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1642 1640.808" xml:space="preserve"><path
                d="M1517.548 426.375c-1.106-5.512-3.798-10.066-7.79-13.567-308.923-526.704-1072.705-519.697-1377.516 0-4.015 3.521-6.692 8.088-7.79 13.566-139.13 247.896-138.292 540.393 0 786.793 1.099 5.479 3.773 10.043 7.79 13.567 309.66 527.957 1071.458 521.823 1377.516-.002 3.93-3.447 6.671-7.982 7.789-13.564 139.132-247.898 138.292-540.395.001-786.793zm-41.879 761.79c-43.573 6.814-226.708 10.313-272.028 11.144 64.008-234.159 65.616-519.024 0-759.076 45.862.841 228.419 4.324 272.026 11.144 125.704 225.972 133.887 496.1.002 736.788zm-611.167 382.534c-29.458 1.833-57.539 1.833-87.003-.001-137.402-21.634-228.148-189.126-273.247-321.788 196.921 2.76 431.623 2.83 633.499 0-45.053 132.524-135.825 300.153-273.249 321.789zm-375.5-370.551c-67.596-235.671-67.662-524.855 0-760.756 207.323-3.101 457.275-3.092 663.997 0 67.596 235.672 67.661 524.855 0 760.756-206.909 3.094-456.818 3.098-663.997 0zM777.523 68.841c29.332-1.825 57.399-1.839 86.971.001 137.423 21.631 228.168 189.163 273.256 321.788-197.62-2.771-432.501-2.819-633.499 0C549.249 258.268 639.967 90.482 777.523 68.841zm666.603 330.737c-68.136-4.408-186.787-6.972-254.994-8.148-34.117-105.949-89.911-221.852-172.548-296.988 170.686 46.98 324.478 150.066 427.542 305.136zM625.414 94.443C542.75 169.604 486.968 285.532 452.868 391.43c-68.213 1.176-186.86 3.741-254.995 8.148C300.599 245.014 454.102 141.597 625.414 94.443zM166.332 451.376c43.69-6.832 227.787-10.333 272.028-11.144-64.294 235.209-65.345 520.023 0 759.076-46.077-.845-228.442-4.329-272.027-11.143-125.709-225.983-133.881-496.112-.001-736.789zm31.543 788.587c68.075 4.403 186.604 6.969 254.994 8.147 34.35 106.675 90.242 222.153 172.547 296.988-170.685-46.979-324.477-150.064-427.541-305.135zm818.709 305.136c82.656-75.152 138.446-191.085 172.548-296.989 68.328-1.177 186.901-3.743 254.995-8.147-102.73 154.572-256.246 257.987-427.543 305.136z"></path></svg>
        <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
            <div id=":0.targetLanguage" style="white-space: nowrap;" class="goog-te-gadget-simple"><img
                    src="https://www.google.com/images/cleardot.gif" class="goog-te-gadget-icon" alt=""
                    style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;"><span
                    style="vertical-align: middle;"><a aria-haspopup="true" class="VIpgJd-ZVi9od-xl07Ob-lTBxed"
                                                       href="#"><span>Sélectionner une langue</span><img
                            src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1"><span
                            style="border-left: 1px solid rgb(187, 187, 187);">​</span><img
                            src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1"><span
                            style="color: rgb(118, 118, 118);" aria-hidden="true">▼</span></a></span></div>
        </div>
    </div>
    <div class="Toastify"></div>--}}
</div>
{{--<script id="__NEXT_DATA__" type="application/json">
    {"props":{"pageProps":{"showActions":false},"initialReduxState":{"profile":{"currentUser":{},"authUser":{},"notifications":{"events":[]},"previewAccount":{},"accountBalance":{"isFirstLoaded":false}},"router":{"isLoadingRouter":false}},"userAgent":"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/117.0"},"page":"/dashboard","query":{"user":"1"},"buildId":"y1w4WVChXh33-jWJuKq5u","runtimeConfig":{"API_URL":"/api/busd","SCAN_NETWORK":"https://bscscan.com/tx/","SCAN_NETWORK_ADDRESS":"https://bscscan.com/address/","CONTRACT_XBASE":"0x5acc84a3e955bdd76467d3348077d003f00ffb97","CONTRACT_TOKEN":"0xe9e7cea3dedca5984780bafc599bd69add087d56","CONTRACT_XXX":"0x2caa4694cb7daf7d49a198dc1103c06d4991ae52","CONTRACT_XGOLD":"0x98872a66D0749C720D8Dc1A80d496b24B04ff7C5","CONTRACT_XQORE":"0x1ee4A7a62726fDd1EDe780f90fd2a77f53F5Ba78","CONTRACT_MAXQORE":"0x27D6bBaC9112D2097FafA3B14Ae367539A7B1260","CONTRACT_FRGX":"0xc703da39ae3b9db67c207c7bad8100e1afdc0f9c","ALLOWED_CHAIN_ID":"56","STAND":"prod","PANCAKE_SWAP_CONTRACT":"0x58F876857a02D6762E0101bb5C46A8c1ED44Dc16","CONTRACT_ADDRESS_ROUTER":"0x33C31572868f3Df6CD2647561D4c1f0BF1Bb9C9C","CONTRACT_PANCAKE_EXCHANGE":"0x10ED43C718714eb63d5aA57B78B54704E256024E","CONTRACT_MAXQORE_GAME_ATTEMPTS":"0xc77555C8240D3D1e352e246bB3D4675967001Da0"},"isFallback":false,"appGip":true,"locale":"en","locales":["en"],"defaultLocale":"en","scriptLoader":[]}
</script>
<img height="1" width="1" style="display:none"
     src="https://www.facebook.com/tr?id=1154415581916992&amp;ev=PageView&amp;noscript=1">--}}
{{--<div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate"
     style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;"
     data-id="">
    <div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd">
        <div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img
                src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt="">
        </div>
        <div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c">
            <div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Texte d'origine</div>
            <div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div>
        </div>
        <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr">
            <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr">
                <div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Évaluez cette traduction</div>
                <div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Votre avis nous aidera à améliorer Google&nbsp;Traduction</div>
            </div>
            <div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr">
                <button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf"
                        title="Bonne traduction" aria-label="Bonne traduction" aria-pressed="false"><span
                        id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false"
                                                      class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path
                                d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span
                        id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false"
                                                            class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path
                                d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span>
                </button>
                <button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf"
                        title="Mauvaise traduction" aria-label="Mauvaise traduction" aria-pressed="false"><span
                        id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false"
                                                        class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path
                                d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span
                        id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24"
                                                              focusable="false"
                                                              class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path
                                d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span>
                </button>
            </div>
        </div>
        <div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
            <form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te" method="post"
                  target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl"
                                                                                  id="goog-gt-votingInputSrcLang"><input
                    type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query"
                                                                                 id="goog-gt-votingInputSrcText"><input
                    type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote"
                                                                                     id="goog-gt-votingInputVote">
            </form>
            <iframe name="votingFrame" frameborder="0"></iframe>
        </div>
    </div>
</div>
<next-route-announcer><p aria-live="assertive" id="__next-route-announcer__" role="alert"
                         style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;"></p>
</next-route-announcer>--}}
{{--<div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf">
    <div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO">
        <svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe" width="96px" height="96px"
             viewBox="0 0 66 66">
            <circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round" cx="33"
                    cy="33" r="30"></circle>
        </svg>
    </div>
</div>--}}
{{--<iframe frameborder="0" class="VIpgJd-ZVi9od-xl07Ob-OEVmcd skiptranslate" title="Widget de traduction"
        style="visibility: visible; box-sizing: content-box; width: 276px; height: 274px; display: none;"></iframe>
<iframe frameborder="0" class="VIpgJd-ZVi9od-xl07Ob-OEVmcd skiptranslate" title="Widget de traduction"
        style="visibility: visible; box-sizing: content-box; width: 244px; height: 274px; display: none;"></iframe>
<iframe frameborder="0" class="VIpgJd-ZVi9od-xl07Ob-OEVmcd skiptranslate" title="Widget de traduction"
        style="visibility: visible; box-sizing: content-box; width: 230px; height: 71px; display: none;"></iframe>--}}
{{--<div id="fc_frame" class="fc-widget-normal" style="bottom: 15px; right: 15px;">
    <iframe id="fc_widget" name="fc_widget" title="Chat" frameborder="0" allowfullscreen="true"
            webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
</div>--}}
{{--<script src="/_next/static/chunks/3145-395e191a0cec603e393f.js"></script>
<script src="/_next/static/chunks/pages/dashboard/%5Bprogram%5D-8b030cda4ab626dd96ab.js"></script>
<script src="/_next/static/chunks/pages/achievements-8892ff2016c295e9e4a0.js"></script>
<script type="text/javascript" src="https://forsagesupport.freshchat.com/widget/js/co-browsing.js"></script>--}}
{{--<div id="fc_push_frame">
    <iframe id="fc_push"
            src="https://623368906118477.eu.webpush.freshchat.com/index.html?ref=aHR0cHM6Ly9idXNkLmZvcnNhZ2UuaW8="
            title="Chat" frameborder="0"></iframe>
</div>--}}
{{--<script src="/_next/static/chunks/1524-19d3524b038fd2a10b89.js"></script>
<script src="/_next/static/chunks/9869-bb84388245254b5a0639.js"></script>
<script src="/_next/static/chunks/6270-e05a13963412e9b661f0.js"></script>
<script src="/_next/static/chunks/pages/links-4256de04aee5d4ea063a.js"></script>
<script src="/_next/static/chunks/pages/MaxQoreMarathon-4c5bb0a89194834d50a9.js"></script>
<script src="/_next/static/chunks/9285-a567676ee83175eb0f9b.js"></script>
<script src="/_next/static/chunks/pages/index-bb1c2413e7ad0e26c85d.js"></script>
<script src="/_next/static/chunks/pages/partners-ec85f5bf29225e28c60e.js"></script>
<script src="/_next/static/chunks/pages/stats-ba6b596a3e97d81c0c6c.js"></script>
<script src="/_next/static/chunks/pages/nft-68e30d7aa10eb1a706a4.js"></script>
<script src="/_next/static/chunks/3343-77d581d0b7ad7c2c38cc.js"></script>
<script src="/_next/static/chunks/pages/social-1957f3e6027b049ee3a4.js"></script>--}}
</body>
</html>
