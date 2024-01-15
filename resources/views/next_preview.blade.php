<html lang="en" style="height: 100%;">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="facebook-domain-verification" content="0l0jqngf7hnpo17ssvrusxn79c0muc">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="next-head-count" content="4">
    <link rel="stylesheet" href="{{asset('lmodel/m2/css/next.css')}}" data-n-g="">
    <link rel="stylesheet" href="{{asset('admin/css/custom_next.css')}}" data-n-g="">

    <title>Preview | NEXACHAIN FDUSD</title>
    <style id="abu-collapse-styles" type="text/css"></style>

</head>
<body style="overflow: unset; position: relative; min-height: 100%; top: 40px;">

<div id="__next">
    <div class="relative flex bg-main-bg items-center justify-center min-h-screen min-w-full overflow-hidden">
        <div
            class="fixed top-0 left-1/2 -translate-x-1/2 flex justify-center w-full px-10 py-2.5 z-40 lg:p-0 lg:max-h-screen z-999999">
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
                                    class="hidden lg:inline ml-1.5">{{$id}}</span></span>
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
                    @if($isLogged)
                    @else
                    <button
                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-main-bg hover:bg-black-500 whitespace-nowrap lg:hidden">
                        Login to your account
                    </button>
                    @endif
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
                        <button onclick="showMenu()"
                            class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 flex-col rounded-full w-10 h-10 !p-0 hidden lg:flex">
                            <span class="w-4 border-t border-white mb-2"></span><span
                                class="w-4 border-t border-white"></span></button>
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
                                    class="hidden lg:inline ml-1.5">{{$id}}</span></span>
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
                        <button onclick="hideMenu()"
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
                                            class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
                                            <div class="flex items-center text-left">
                                                <svg class="w-6 h-6 stroke-current text-white-500 " viewBox="0 0 24 24"
                                                     stroke="#fff" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 4H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM19 4h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1ZM9 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1ZM19 14h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Z"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                                <span class="text-white-500 text-base ml-2.5 false">Dashboard</span>
                                            </div>
                                        </button>
                                    </a>
                                    <div class="undefined bg-black-light lg:bg-transparent lg:!pb-0  min-w-[186px] cursor-pointer hover:bg-black-light lg:hover:bg-transparent rounded-[10px] lg:border-b lg:border-white-300 lg:rounded-none lg:justify-between">
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
                                        <button class="relative w-full flex items-center px-2.5 py-2 rounded-xl cursor-pointer undefined hover:bg-black-light lg:hover:bg-transparent false lg:rounded-none lg:pl-0 lg:pr-5 lg:py-5 lg:justify-between   lg:border-b lg:border-white-300">
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
                                    </a>
                                    <a class="undefined undefined" href="/social?user=1">
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
                                    </a>
                                    <a class="undefined undefined" href="/nft?user=1">
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
            <div class="flex flex-shrink w-full flex-col items-center min-h-screen bg-main max-w-[calc(100% - 326px)] lg:max-w-full overflow-auto pt-20 sm:pt-14">
                <div class="flex relative flex-1 py-10 pt-8.5 flex-col justify-between w-full px-10 sm:px-0 sm:pt-7.5">
                    <div class="flex flex-col space-y-10 sm:space-y-7.5">
                        <div class="flex flex-wrap justify-between notranslate ">
                            <div
                                class="fixed flex items-center justify-center z-[1111] left-[35%] lg:left-[20%]   sm:left-0 sm:px-3 sm:w-full transition-all duration-1000 top-3">

                            </div>
                            <div class="flex flex-col flex-wrap w-full sm:px-5">
                                <div class="notranslate"></div>
                                <div class="flex items-center mb-1.5 sm:mb-2.5">
                                    <div class="flex"><a class="mr-1.5 text text-white-300 sm:text-sm"
                                                         href="{{route("lmodel1",["id"=>$id])}}"><span class="hover:text-white-500">ID {{$id}}</span>
                                            /</a></div>
                                    <span class="text text-white whitespace-nowrap sm:text-sm">Nexachain {{\Illuminate\Support\Str::upper($type)}}</span><span
                                        class="text text-white whitespace-nowrap ml-1.5 sm:text-sm">(<span
                                            class="inline sm:hidden">0 out of 10 levels</span><span
                                            class="hidden sm:inline">0/10</span>)</span></div>
                                <div class="w-full flex justify-between flex-wrap">
                                    <div class="flex flex-wrap items-center"><span
                                            class="text-two-half text-white font-medium mr-2 sm:text-2xl sm:max-w-[170px]">Nexachain {{\Illuminate\Support\Str::upper($type)}}</span>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <div
                                            class="self-end text-two-half text-white font-bold sm:text-2xl whitespace-nowrap">
                                            <span id="profit_type">0 </span> <span>&nbsp; FDUSD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div
                                class="flex overflow-hidden relative w-full flex-col bg-black-light rounded p-7.5 pb-5 sm:p-5 sm:pl-2.5 sm:pr-2.5 sm:rounded-none "
                                style="background-image: url(&quot;/blurs/program/blue-blur.png&quot;); background-repeat: round; background-size: cover;">
                                <div class="flex z-10 flex-wrap -m-2 sm:-mx-px mb-7.5 sm:justify-around">
                                    @if(is_null($activate_level))

                                    @else
                                        <a href="#" onclick="subcription.activateLevel(1)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl1</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">10</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level->level1)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="@if($activate_level->level1) @else  bg-white @endif rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(2)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl2</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm">
                                                        <img src="{{asset("lmodel/small.png")}}" width="15">20</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(3)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl3</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">30</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(4)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl4</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">50</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(5)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl5</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">100</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(6)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl6</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">250</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(7)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl7</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">500</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>
                                                    {{-- <div class="flex space-x-2 items-center">
                                                         <svg class="w-5 h-5 stroke-current text-white-500"
                                                              viewBox="0 0 20 20" fill="none" stroke="#2CFF4E"
                                                              xmlns="http://www.w3.org/2000/svg">
                                                             <path clip-rule="evenodd"
                                                                   d="M6.354 3.818a7.25 7.25 0 0 1 10.808 5.28.5.5 0 1 1-.99.137A6.25 6.25 0 0 0 4.551 7h2.115a.5.5 0 0 1 0 1H3.333a.5.5 0 0 1-.5-.5V4.167a.5.5 0 1 1 1 0v2.086a7.25 7.25 0 0 1 2.521-2.435ZM3.265 10.338a.5.5 0 0 1 .564.427A6.25 6.25 0 0 0 15.449 13h-2.116a.5.5 0 1 1 0-1H16.667a.5.5 0 0 1 .5.5v3.333a.5.5 0 1 1-1 0v-2.086a7.25 7.25 0 0 1-13.329-2.845.5.5 0 0 1 .427-.564Z"></path>
                                                         </svg>
                                                         <span class="text-sm text-white font-normal sm:text-sm">8732</span>
                                                     </div>--}}
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(8)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl8</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">1250</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(9)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl9</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">2500</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" onclick="subcription.activateLevel(10)">
                                            <div class="relative overflow-hidden flex flex-col w-180px min-h-158px max-h-[158px] sm:w-158px rounded-small p-5 m-2 justify-between bg-main-blue hover:bg-hover-main-blue sm:space-y-1.5">
                                                <div class="flex w-full justify-between !mb-2.5">
                                                    <div class="flex space-x-1.5 items-center"><span
                                                            class="text-white-500 text-base sm:text-sm">Lvl10</span></div>
                                                    <span class="flex items-center text-white text-base sm:text-sm"> <img src="{{asset("lmodel/small.png")}}" width="15">5000</span></div>
                                                <div class="relative flex flex-col -ml-2.5 -mr-2.5 !mb-3 ">
                                                    <div class="flex w-full justify-center items-center">
                                                        <div class="relative flex w-full justify-evenly items-start false">
                                                            @if($activate_level)
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-white  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex w-full">
                                                                    <div
                                                                        class="flex flex-col w-full justify-evenly items-center space-y-1.5">
                                                                        <div class="relative">
                                                                            <div
                                                                                class="bg-hover-main-blue  rounded-full w-7.5 h-7.5 "></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <img src="{{asset("lmodel/cart.svg")}}" width="50">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-wrap space-x-2">
                                                    <div class="flex space-x-2 items-center">
                                                        <svg class="w-5 h-5 stroke-current text-white-500"
                                                             viewBox="0 0 16 16" fill="none" stroke="#fff"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                                stroke-width="1.333" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        <span class="text-sm text-white font-normal sm:text-sm">0</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    @endif

                                </div>
                                <div class="flex items-center flex-wrap z-10">
                                    <div
                                        class="flex items-center text-white-500 mb-5 mr-7.5 sm:items-start sm:mb-2.5 sm:pr-2.5 sm:mr-0 sm:w-1/2 sm:order-2">
                                        <div class="w-5 h-5 flex-shrink-0 mr-2.5 rounded-full bg-white"></div>
                                        <span class="text-base sm:text-sm">Direct partner</span></div>
                                    <div
                                        class="flex items-center text-white-500 mb-5 mr-7.5 sm:items-start sm:mb-2.5 sm:pr-2.5 sm:mr-0 sm:w-1/2 sm:order-7">
                                        <div class="w-5 h-5 flex-shrink-0 mr-2.5 rounded-full bg-light-blue"></div>
                                        <span class="text-base sm:text-sm">Gift</span></div>
                                    <div
                                        class="flex items-center text-white-500 mb-5 mr-7.5 sm:items-start sm:mb-2.5 sm:pr-2.5 sm:mr-0 sm:w-1/2 sm:order-1">
                                        <svg class="w-5 h-5 mr-2.5 stroke-current text-white" viewBox="0 0 16 16"
                                             fill="none" stroke="#fff" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 7.333A2.667 2.667 0 1 0 6 2a2.667 2.667 0 0 0 0 5.333ZM2 14v-1.333A2.667 2.667 0 0 1 4.667 10h2.666A2.667 2.667 0 0 1 10 12.667V14M10.667 2.086a2.667 2.667 0 0 1 0 5.167M14 14v-1.333a2.667 2.667 0 0 0-2-2.567"
                                                stroke-width="1.333" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        <span class="text-base sm:text-sm">Partners on level</span></div>
                                    <div
                                        class="flex items-center text-white-500 mb-5 mr-7.5 sm:items-start sm:mb-2.5 sm:pr-2.5 sm:mr-0 sm:w-1/2 sm:order-3">
                                        <svg class="w-5 h-5 mr-2.5 stroke-current text-white" viewBox="0 0 20 20"
                                             fill="none" stroke="#2CFF4E" xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd"
                                                  d="M6.354 3.818a7.25 7.25 0 0 1 10.808 5.28.5.5 0 1 1-.99.137A6.25 6.25 0 0 0 4.551 7h2.115a.5.5 0 0 1 0 1H3.333a.5.5 0 0 1-.5-.5V4.167a.5.5 0 1 1 1 0v2.086a7.25 7.25 0 0 1 2.521-2.435ZM3.265 10.338a.5.5 0 0 1 .564.427A6.25 6.25 0 0 0 15.449 13h-2.116a.5.5 0 1 1 0-1H16.667a.5.5 0 0 1 .5.5v3.333a.5.5 0 1 1-1 0v-2.086a7.25 7.25 0 0 1-13.329-2.845.5.5 0 0 1 .427-.564Z"></path>
                                        </svg>
                                        <span class="text-base sm:text-sm">Level Cycle</span></div>
                                    <button
                                        class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none py-0 px-2.5 bg-main-blue text-white rounded !leading-30px hover:bg-hover-main-blue active:bg-active-main-blue font-normal mb-5 mr-7.5 sm:items-start sm:mb-2.5 sm:pr-2.5 sm:mr-0 sm:items-center py-1 !order-8 sm:!order-8">
                                        <svg class="w-5 h-5 mr-1.5" viewBox="0 0 20 20" fill="#fff"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M17 10a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Zm-8.07 1.15c.04.04.09.06.15.06h.99c.073 0 .13-.02.17-.06a.547.547 0 0 0 .11-.19c.007-.06.023-.173.05-.34a1.4 1.4 0 0 1 .23-.52c.12-.167.287-.363.5-.59.293-.32.513-.603.66-.85.153-.247.23-.537.23-.87a1.61 1.61 0 0 0-.25-.85c-.16-.273-.42-.497-.78-.67-.353-.18-.807-.27-1.36-.27-.533 0-.997.1-1.39.3-.393.193-.697.45-.91.77-.207.32-.317.663-.33 1.03 0 .073.02.133.06.18.047.047.103.07.17.07h.87c.147 0 .243-.077.29-.23.133-.647.523-.97 1.17-.97.287 0 .53.08.73.24.207.16.297.377.27.65a.864.864 0 0 1-.19.46 5.091 5.091 0 0 1-.5.56c-.293.293-.523.56-.69.8-.167.24-.267.517-.3.83-.007.073-.01.18-.01.32 0 .053.02.1.06.14Zm-.05 2.25c.047.047.103.07.17.07h.99a.244.244 0 0 0 .18-.07.231.231 0 0 0 .07-.17v-.89a.218.218 0 0 0-.08-.17.231.231 0 0 0-.17-.07h-.99a.231.231 0 0 0-.17.07.231.231 0 0 0-.07.17v.89c0 .067.023.123.07.17Z"></path>
                                        </svg>
                                        <span class="text-base sm:text-sm"> Marketing legend </span></button>
                                </div>
                            </div>
                        </div>
                        <div class="sm:px-5">
                            <button
                                class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none banners-notifybot-wrapper relative w-full flex sm:flex-col justify-between sm:items-center bg-[#0B0316] rounded px-7.5 pb-3 sm:pb-0 pt-5 min-h-[143px] sm:min-h-[359px]">
                                <svg class="absolute top-2.5 right-2.5" width="20" height="20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M14.52 5.48a.5.5 0 0 1 0 .707L6.187 14.52a.5.5 0 0 1-.707-.707l8.333-8.333a.5.5 0 0 1 .707 0Z"
                                          fill="#fff"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M6.167 5.833a.5.5 0 0 1 .5-.5h7.5a.5.5 0 0 1 .5.5v7.5a.5.5 0 1 1-1 0v-7h-7a.5.5 0 0 1-.5-.5Z"
                                          fill="#fff"></path>
                                </svg>
                                <div class="flex flex-col items-start space-y-1.5"><span
                                        class="text-left block text-3xl font-medium text-white">Official <span
                                            class="text-yellow">Notify Bot</span> <br class="sm:hidden"> for busd.forsage.io users</span><span
                                        class="text-white font-light">Here you can get notifications about all the events in your account.</span>
                                </div>
                                <img
                                    class="absolute bottom-0 right-[10%] sm:right-auto sm:relative h-full max-h-[110%] sm:max-h-[170px]"
                                    src="/banners/notifybot/robot.png" alt=""></button>
                        </div>
                        <div
                            class="sm:rounded-none flex flex-1 flex-col w-full bg-black-light rounded overflow-hidden h-full min-h-90 sm:max-h-3/4">
                            <div class="overflow-auto max-h-[80vh] sm:max-h-[75vh]">
                                <table class="min-w-max w-full table-auto border-white-100">
                                    <thead>
                                    <tr class="text-white-500 text-xs border-b border-white-100">
                                        <th class="p-4 text-left font-normal sm:p-3 ">Type</th>
                                        <th class="p-4 text-left font-normal sm:p-3">Date</th>
                                        <th class="p-4 text-left font-normal notranslate sm:p-3">ID</th>
                                        <th class="p-4 text-left font-normal sm:p-3">Level</th>
                                        <th class="p-4 text-left font-normal sm:p-3">Wallet</th>
                                        <th class="p-4 text-right font-normal notranslate sm:p-3">BUSD</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-gray-600 text-sm font-light align-baseline">
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-white-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-white h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 8.667A3.333 3.333 0 1 0 10 2a3.333 3.333 0 0 0 0 6.667Z"
                                                            fill="#fff" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17"
                                                            fill="#fff"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17H5Z"
                                                            stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-white"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">13.01.2024 16:18</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1644702">ID 1644702</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0x6b086...DCaED</span>
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
                                                   href="https://bscscan.com/tx/0xd157f37640c15abe0d4b206819754d574718a0988e10442bad92267eb917fef3">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm text-right notranslate">5 BUSD</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-green-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-green-light h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" stroke="#2CFF4E"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                              d="M6.354 3.818a7.25 7.25 0 0 1 10.808 5.28.5.5 0 1 1-.99.137A6.25 6.25 0 0 0 4.551 7h2.115a.5.5 0 0 1 0 1H3.333a.5.5 0 0 1-.5-.5V4.167a.5.5 0 1 1 1 0v2.086a7.25 7.25 0 0 1 2.521-2.435ZM3.265 10.338a.5.5 0 0 1 .564.427A6.25 6.25 0 0 0 15.449 13h-2.116a.5.5 0 1 1 0-1H16.667a.5.5 0 0 1 .5.5v3.333a.5.5 0 1 1-1 0v-2.086a7.25 7.25 0 0 1-13.329-2.845.5.5 0 0 1 .427-.564Z"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-green-light">8642</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">13.01.2024 14:02</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1644616">ID 1644616</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0x1e200...2B5fa</span>
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
                                                   href="https://bscscan.com/tx/0x2e4b7c49ce1c792cd9769475726feac74a7203904e738628966b205175706cfd">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3" colspan="2">
                                            <div class="text-green-light text-right text-sm">recycle</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-white-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-white h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 8.667A3.333 3.333 0 1 0 10 2a3.333 3.333 0 0 0 0 6.667Z"
                                                            fill="#fff" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17"
                                                            fill="#fff"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17H5Z"
                                                            stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-white"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">13.01.2024 09:58</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1644431">ID 1644431</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0x1c919...54eCf</span>
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
                                                   href="https://bscscan.com/tx/0x84f5c86a90ae1f56bb86967bd537f0b84b2f03d912fc773f3b0f9f35c626af88">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm text-right notranslate">5 BUSD</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-white-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-white h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 8.667A3.333 3.333 0 1 0 10 2a3.333 3.333 0 0 0 0 6.667Z"
                                                            fill="#fff" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17"
                                                            fill="#fff"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17H5Z"
                                                            stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-white"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">13.01.2024 05:12</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1644279">ID 1644279</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0xE3e30...9582E</span>
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
                                                   href="https://bscscan.com/tx/0xc537bc528fdfacdd8913ae14ea76dd80b46868b779bdbdd764b95bdad8519139">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm text-right notranslate">5 BUSD</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-green-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-green-light h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" stroke="#2CFF4E"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                              d="M6.354 3.818a7.25 7.25 0 0 1 10.808 5.28.5.5 0 1 1-.99.137A6.25 6.25 0 0 0 4.551 7h2.115a.5.5 0 0 1 0 1H3.333a.5.5 0 0 1-.5-.5V4.167a.5.5 0 1 1 1 0v2.086a7.25 7.25 0 0 1 2.521-2.435ZM3.265 10.338a.5.5 0 0 1 .564.427A6.25 6.25 0 0 0 15.449 13h-2.116a.5.5 0 1 1 0-1H16.667a.5.5 0 0 1 .5.5v3.333a.5.5 0 1 1-1 0v-2.086a7.25 7.25 0 0 1-13.329-2.845.5.5 0 0 1 .427-.564Z"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-green-light">8641</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">13.01.2024 02:05</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1644243">ID 1644243</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0xAbdca...7f01f</span>
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
                                                   href="https://bscscan.com/tx/0x706ea550051973c583be3834d065bced04600fb1da90f9c2710ff80a30adeec9">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3" colspan="2">
                                            <div class="text-green-light text-right text-sm">recycle</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-white-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-white h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 8.667A3.333 3.333 0 1 0 10 2a3.333 3.333 0 0 0 0 6.667Z"
                                                            fill="#fff" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17"
                                                            fill="#fff"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17H5Z"
                                                            stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-white"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">12.01.2024 22:27</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1644238">ID 1644238</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0x91Ad7...306b6</span>
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
                                                   href="https://bscscan.com/tx/0xa1fc6155fd0aca569670cdb3d340f7acddcbdc45276b5ae62a0a90d18d1ceaa3">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm text-right notranslate">5 BUSD</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-white-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-white h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 8.667A3.333 3.333 0 1 0 10 2a3.333 3.333 0 0 0 0 6.667Z"
                                                            fill="#fff" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17"
                                                            fill="#fff"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17H5Z"
                                                            stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-white"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">12.01.2024 14:49</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1644041">ID 1644041</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0x17a40...85DEC</span>
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
                                                   href="https://bscscan.com/tx/0x0f4c21788d68c943b398ebb2d07cc14e582c71ce69345ce9e3a26a9684dfe0c1">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm text-right notranslate">5 BUSD</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-green-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-green-light h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" stroke="#2CFF4E"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path clip-rule="evenodd"
                                                              d="M6.354 3.818a7.25 7.25 0 0 1 10.808 5.28.5.5 0 1 1-.99.137A6.25 6.25 0 0 0 4.551 7h2.115a.5.5 0 0 1 0 1H3.333a.5.5 0 0 1-.5-.5V4.167a.5.5 0 1 1 1 0v2.086a7.25 7.25 0 0 1 2.521-2.435ZM3.265 10.338a.5.5 0 0 1 .564.427A6.25 6.25 0 0 0 15.449 13h-2.116a.5.5 0 1 1 0-1H16.667a.5.5 0 0 1 .5.5v3.333a.5.5 0 1 1-1 0v-2.086a7.25 7.25 0 0 1-13.329-2.845.5.5 0 0 1 .427-.564Z"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-green-light"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">12.01.2024 14:46</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1644038">ID 1644038</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0x06de3...7eEf4</span>
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
                                                   href="https://bscscan.com/tx/0x9dd9dde0d5b688f2c29f245db1f9ad8ff040dd4d67aeec2f2b7174e19c4e98bc">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3" colspan="2">
                                            <div class="text-green-light text-right text-sm">recycle</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-white-100 last:border-none">
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex w-full">
                                                <div
                                                    class="relative flex items-center justify-center rounded-full bg-white-100 w-11 h-11 sm:w-7.5 sm:h-7.5">
                                                    <svg class="text-white h-18px w-18px " viewBox="0 0 20 20"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 8.667A3.333 3.333 0 1 0 10 2a3.333 3.333 0 0 0 0 6.667Z"
                                                            fill="#fff" stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17"
                                                            fill="#fff"></path>
                                                        <path
                                                            d="M5 17v-1.667A3.333 3.333 0 0 1 8.333 12h3.334A3.333 3.333 0 0 1 15 15.333V17H5Z"
                                                            stroke="#fff" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span
                                                        class="absolute top-0 right-0 text-mini leading-3 text-white"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white-500 text-sm ">12.01.2024 13:03</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3"><a
                                                class="flex items-center notranslate justify-center px-2.5 leading-30px bg-blue-100 hover:bg-main-blue-300 text-main-blue rounded w-max text-sm"
                                                href="/dashboard?user=1643954">ID 1643954</a></td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm ">1</div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="flex text-white text-sm space-x-5 notranslate sm:space-x-3">
                                                <span>0xa70cB...5b027</span>
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
                                                   href="https://bscscan.com/tx/0xf48f2ce4282ea76c98331abf7ee044a5dedd0b93a9750e9707c5bed29098b013">
                                                    <svg class="w-18px h-18px" viewBox="0 0 24 24" fill="#fff"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M4.232 7.232A2.5 2.5 0 0 1 6 6.5h5a.5.5 0 0 1 0 1H6A1.5 1.5 0 0 0 4.5 9v9A1.5 1.5 0 0 0 6 19.5h9a1.5 1.5 0 0 0 1.5-1.5v-5a.5.5 0 0 1 1 0v5a2.5 2.5 0 0 1-2.5 2.5H6A2.5 2.5 0 0 1 3.5 18V9a2.5 2.5 0 0 1 .732-1.768Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M20.354 3.646a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.708-.708l10-10a.5.5 0 0 1 .708 0Z"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.5 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V4.5H15a.5.5 0 0 1-.5-.5Z"></path>
                                                    </svg>
                                                </a></div>
                                        </td>
                                        <td class="p-4 text-left whitespace-nowrap sm:p-3">
                                            <div class="text-white text-sm text-right notranslate">5 BUSD</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex p-4 sm:p-2.5">
                                <button
                                    class="flex justify-center items-center text-center text-base font-bold text-white rounded-mini sm:text-sm outline-none px-5 py-3 bg-white-100 hover:bg-white-300 w-full rounded-mini flex justify-center items-center">
                                    <svg class="mr-2.5" width="21" height="20" fill="#fff"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.5 15.833c3.333 0 6.11-1.944 8.333-5.833-2.222-3.89-5-5.833-8.333-5.833S4.39 6.11 2.167 10c2.222 3.889 5 5.833 8.333 5.833ZM12.167 10a1.667 1.667 0 1 1-3.334 0 1.667 1.667 0 0 1 3.334 0Z"></path>
                                    </svg>
                                    <span> See more </span></button>
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
        <div class=""></div>
    </div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>

<script src="{{asset("js/jquery-3.7.min.js")}}"></script>
<script src="{{asset("contractjs/subcription.js")}}"></script>
<script type="module" src="{{asset('contractjs/connect-wallet.js')}}"></script>
<script>
    var configs={
        routes:{
            index: "{{\Illuminate\Support\Facades\URL::to('/')}}",
            sendLottory: "{{\Illuminate\Support\Facades\URL::route('sendlottory')}}",
        }
    }
    $('#hambuger').hide()
    function showMenu() {
        $('#hambuger').show()
    }
    function hideMenu() {
        $('#hambuger').hide()
    }
</script>

</body>
</html>
