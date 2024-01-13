<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Forsage</title>
</head>

<body class="bg-[#111] overflow-x-hiddens w-screen">
<!--Top Navbar for mobile sir-->
<nav class="p-2 bg-blue-600 w-screen shadow block md:hidden">
    <div class="flex justify-between items-center text-white">

            <span class="flex font-bold text-lg"> <svg class="block mr-2.5" width="45" height="30" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M37.68 5.851a.482.482 0 0 1 .615.296l.43 1.247s-1.852-.59-2.818-.777l1.773-.766Zm6.055 3.336c-.004 0-.195-.131-.297-.186l-3.111-1.586c-.965-.46-.752-.82-1.118-1.826a6.228 6.228 0 0 0-.549-1.127C36.884 3.62 31.836 3.817 31.354 0c0 0-1.884 1.236-2.227 3.5C9.227 1.98 0 12.96 0 12.96c3.706-1.476 7.705-2.176 11.704-2.362-7.603 5.851-9.997 14.666-9.997 14.666s6.16-5.982 15.419-9.318C14.702 19.37 13.298 23.963 13.872 30c0 0 4.763-18.177 27.361-13.78 0 0 .827-2.417 2.962-4.89.135-.152.211-.382.227-.645a1.735 1.735 0 0 0-.687-1.498Z"
                          fill="#fff"></path>
                </svg>Forsage</span>
        <span class="text-xl cursor-pointer bg-blue-500 rounded-full py-1 px-2">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
    </div>

    <ul
        class="z-[1] text-white -mt-8 absolute bg-blue-600 left-0 py-4 pl-7 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <h3 class="text-white font-semibold text-lg ml-4 mb-1">Preview ID 1</h3>
        <input type="text" value="1"
               class="w-42 text-center py-2 ml-3 rounded-lg font-bold bg-blue-500 text-white" />
        <button class="py-2 px-6 bg-blue-500 text-white font-extrabold ml-3 rounded-lg">GO</button>
        <br />
        <button
            class="bg-black text-white text-white font-[Poppins] w-[85%] duration-500 px-10 ml-3 py-2 mt-2 hover:bg-white-500 rounded ">
            Exit Preview Mode
        </button>
        <li class="mx-4 my-6">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">HOME</a>
        </li>
        <li class="mx-4 my-6">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">SERVICE</a>
        </li>
        <li class="mx-4 my-6">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">ABOUT</a>
        </li>
        <li class="mx-4 my-6">
            <a href="#" class="text-xl hover:text-cyan-500 duration-500">CONTACT</a>
        </li>
    </ul>
</nav>
<!--Top Navbar for desktop sir-->
<div class="bg-blue-600 px-10 w-screen mb-3 rounded-lg md:flex hidden items-center justify-between">
    <a href="/" class="flex items-center"><svg class="block mr-2.5" width="45" height="30" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M37.68 5.851a.482.482 0 0 1 .615.296l.43 1.247s-1.852-.59-2.818-.777l1.773-.766Zm6.055 3.336c-.004 0-.195-.131-.297-.186l-3.111-1.586c-.965-.46-.752-.82-1.118-1.826a6.228 6.228 0 0 0-.549-1.127C36.884 3.62 31.836 3.817 31.354 0c0 0-1.884 1.236-2.227 3.5C9.227 1.98 0 12.96 0 12.96c3.706-1.476 7.705-2.176 11.704-2.362-7.603 5.851-9.997 14.666-9.997 14.666s6.16-5.982 15.419-9.318C14.702 19.37 13.298 23.963 13.872 30c0 0 4.763-18.177 27.361-13.78 0 0 .827-2.417 2.962-4.89.135-.152.211-.382.227-.645a1.735 1.735 0 0 0-.687-1.498Z"
                  fill="#fff"></path>
        </svg>
        <h3 class="text-white text-lg">Preview ID 1</h3>
        <input type="text" value="1"
               class="w-42 text-center py-2 ml-3 rounded-lg font-bold bg-blue-500 text-white" />
        <button class="py-2 px-6 bg-blue-500 text-white font-extrabold ml-3 rounded-lg">GO</button>
    </a>
    <div class="flex items-center gap-5">
        <button class="py-2 w-36 bg-black text-lg text-white font-bold m-2 rounded-lg">Connect
            Wallet</button>
        <svg class="cursor-pointer" width="35" height="35" viewBox="0 0 24 24" fill="#FFFFFF1A" stroke="#fff"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-circle">
            <circle cx="12" cy="12" r="10" />
            <path d="m15 9-6 6" />
            <path d="m9 9 6 6" />
        </svg>
    </div>
</div>
<!--Side Navbar Sir-->
<div class="md:block hidden fixed">
    <div class="rounded-r bg-gray-900 flex justify-between w-full items-center ">
        <div aria-label="toggler" class="flex justify-center items-center">

        </div>
    </div>
    <div id="Main"
         class="xl:rounded-r transform xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start h-full w-1/2 sm:w-64 bg-gray-900 flex-col">
        <button
            class="flex jusitfy-start bg-gray-700 py-4 items-center w-full mb-2 focus:outline-none  focus:text-indigo-400  text-white rounded ">
            <svg class="fill-stroke ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                    d="M9 4H5C4.44772 4 4 4.44772 4 5V9C4 9.55228 4.44772 10 5 10H9C9.55228 10 10 9.55228 10 9V5C10 4.44772 9.55228 4 9 4Z"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M19 4H15C14.4477 4 14 4.44772 14 5V9C14 9.55228 14.4477 10 15 10H19C19.5523 10 20 9.55228 20 9V5C20 4.44772 19.5523 4 19 4Z"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M9 14H5C4.44772 14 4 14.4477 4 15V19C4 19.5523 4.44772 20 5 20H9C9.55228 20 10 19.5523 10 19V15C10 14.4477 9.55228 14 9 14Z"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M19 14H15C14.4477 14 14 14.4477 14 15V19C14 19.5523 14.4477 20 15 20H19C19.5523 20 20 19.5523 20 19V15C20 14.4477 19.5523 14 19 14Z"
                    stroke="gray" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="text-base leading-4 ml-2 font-bold">Dashboard</p>
        </button>

        <div class="flex flex-col justify-start bg-gray-700 items-center px-6 border-b border-gray-600 w-full  ">
            <button onclick="showMenu1(true)"
                    class="focus:outline-none  focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5  font-bold">Team</p>
                <svg id="icon1" class="transform" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                </svg>
            </button>
            <div id="menu1" class="flex justify-start  flex-col w-full md:w-auto items-start pb-1 ">
                <button
                    class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-users">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    <p class="text-base leading-4  ">Partners</p>
                </button>
                <button
                    class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-link">
                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                    </svg>
                    <p class="text-base leading-4  ">Links</p>
                </button>
                <button
                    class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-pie-chart">
                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                        <path d="M22 12A10 10 0 0 0 12 2v10z" />
                    </svg>
                    <p class="text-base leading-4  ">Stats</p>
                </button>
            </div>
        </div>




        <button
            class="flex jusitfy-start py-4 items-center w-full m-2  focus:outline-none  focus:text-indigo-400  text-white rounded ">
            <svg class="ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-volume-2">
                <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" />
                <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
                <path d="M19.07 4.93a10 10 0 0 1 0 14.14" />
            </svg>
            <p class="text-base leading-4 ml-2 font-bold">Marathon</p>
        </button>




        <button
            class="flex jusitfy-start py-4 items-center w-full m-2  focus:outline-none  focus:text-indigo-400  text-white rounded ">
            <svg class="ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="lucide lucide-message-circle-more">
                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                <path d="M8 12h.01" />
                <path d="M12 12h.01" />
                <path d="M16 12h.01" />
            </svg>

            <p class="text-base leading-4 ml-2 font-bold">Social</p>
            <p class="text-green-300 absolute right-2">New</p>

        </button>




        <button
            class="flex jusitfy-start py-4 items-center w-full m-2  focus:outline-none  focus:text-indigo-400  text-white rounded ">
            <svg class="ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cat">
                <path
                    d="M12 5c.67 0 1.35.09 2 .26 1.78-2 5.03-2.84 6.42-2.26 1.4.58-.42 7-.42 7 .57 1.07 1 2.24 1 3.44C21 17.9 16.97 21 12 21s-9-3-9-7.56c0-1.25.5-2.4 1-3.44 0 0-1.89-6.42-.5-7 1.39-.58 4.72.23 6.5 2.23A9.04 9.04 0 0 1 12 5Z" />
                <path d="M8 14v.5" />
                <path d="M16 14v.5" />
                <path d="M11.25 16.25h1.5L12 17l-.75-.75Z" />
            </svg>
            <p class="text-base leading-4 ml-2 font-bold">NFTs</p>
        </button>




        <div class="flex flex-col justify-start items-center px-6 border-b border-gray-600 w-full  ">
            <button onclick="showMenu2(true)"
                    class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5  font-bold">Information</p>
                <svg id="icon2" class="transform" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                </svg>
            </button>
            <div id="menu2" class="flex justify-start  flex-col w-full md:w-auto items-start pb-1 ">
                <button
                    class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-bookmark">
                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z" />
                    </svg>
                    <p class="text-base leading-4  ">Instructions</p>
                </button>
                <button
                    class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-calculator">
                        <rect width="16" height="20" x="4" y="2" rx="2" />
                        <line x1="8" x2="16" y1="6" y2="6" />
                        <line x1="16" x2="16" y1="14" y2="18" />
                        <path d="M16 10h.01" />
                        <path d="M12 10h.01" />
                        <path d="M8 10h.01" />
                        <path d="M12 14h.01" />
                        <path d="M8 14h.01" />
                        <path d="M12 18h.01" />
                        <path d="M8 18h.01" />
                    </svg>
                    <p class="text-base leading-4  ">Calculator</p>
                    <p class="text-green-300 absolute right-2">New</p>
                </button>
                <button
                    class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-send">
                        <path d="m22 2-7 20-4-9-9-4Z" />
                        <path d="M22 2 11 13" />
                    </svg>
                    <p class="text-base leading-4 ">Smart Tools</p>
                </button>
                <button
                    class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-lightbulb">
                        <path
                            d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                        <path d="M9 18h6" />
                        <path d="M10 22h4" />
                    </svg>
                    <p class="text-base leading-4 ">Ideas</p>
                </button>
            </div>
        </div>




        <button
            class="flex jusitfy-start py-4 items-center w-full m-2  focus:outline-none  focus:text-indigo-400  text-white rounded ">
            <svg class="ml-3" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-volume-2">
                <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5" />
                <path d="M15.54 8.46a5 5 0 0 1 0 7.07" />
                <path d="M19.07 4.93a10 10 0 0 1 0 14.14" />
            </svg>
            <p class="text-base leading-4 ml-2 font-bold">Promo & PDFs</p>
        </button>
    </div>
</div>


<!--Content sir-->
<div class="flex items-center justify-evenly flex-wrap md:pl-80 mt-5">
    <div class="text-white w-[400px] flex items-center">
        <div
            class="bg-gray-700 z-[-2] md:w-36 w-32 h-32 md:h-36 flex items-center justify-center rounded-full border-4 border-l-purple-600 border-b-purple-600 border-r-blue-600 border-t-blue-600">
            <img src="{{asset("lmodel/UnknownUser.webp")}}" alt="..." class="w-full h-full rounded-full" />
            <div
                class="flex z-[-1] justify-center items-center w-10 relative h-10 sm:w-7.5 sm:h-7.5 bg-status-gold rounded-full w-[36px] h-[36px] z-10 absolute right-0  bottom-2.5 ">
                    <span class="absolute -bottom-12 right-0 bg-yellow-500 rounded-full px-1 py-2">
                        <svg class="h-5 sm:h-3.5 text-gray " fill="black" viewBox="0 0 21 14"
                             xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                  d="M17.205 3.531a.207.207 0 0 1 .264.128l.186.54s-.797-.255-1.213-.336l.763-.332Zm2.606 1.446c-.002 0-.084-.057-.128-.08l-1.34-.688c-.414-.2-.323-.356-.48-.792a2.705 2.705 0 0 0-.236-.488c-.765-.365-2.937-.28-3.144-1.933 0 0-.811.535-.959 1.516C4.961 1.854.99 6.612.99 6.612c1.595-.64 3.316-.943 5.037-1.024-3.272 2.536-4.302 6.355-4.302 6.355s2.65-2.592 6.635-4.037c-1.043 1.483-1.647 3.474-1.4 6.09 0 0 2.05-7.877 11.774-5.972 0 0 .356-1.047 1.274-2.118a.466.466 0 0 0 .098-.28.754.754 0 0 0-.296-.65Z">
                            </path>
                        </svg>
                    </span>
            </div>

        </div>
        <div class="flex flex-col ml-5">
            <h1 class="text-lg font-bold">ID 1</h1>
            <span class="flex items-center jusitfy-start">
                    <p>0x14Dc...207f</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-copy ml-3">
                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                    </svg>
                </span>
        </div>
    </div>
    <div class="text-white md:w-[400px] w-[300px] flex flex-col justify-center items-center mt-2">
        <div class="
            h-24  md:w-[400px] w-[350px] h-full bg-blue-600 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-20 rounded-lg
            ">
            <p class="m-3 text-sm mt-3">Personal link <span title="Reffer your freind"
                                                            class=" cursor-pointer">?</span>
            </p>
            <div class="flex flex-col gap-5">
                <div class="flex md:-mt-0 -mt-5  md:flex-row flex-col md:justify-between items-center">
                    <h1 class="m-3 text-blue-600 font-extrabold text-lg">forsage.io/b/xqg1z8</h1>
                    <button
                        class="bg-blue-600 text-white md:w-12 h-7 w-[90%] mb-2 md:mb-0 md:mr-2 rounded-full">copy</button>
                </div>
            </div>
        </div>
        <div class="h-[10vh] md:w-[400px] w-[350px] bg-cover rounded-lg mt-5">
            <img src="{{asset("lmodel/frgx.png")}}" alt="..." class="w-full h-full rounded-lg" />
        </div>
    </div>
</div>
<div class=" flex flex-wrap flex-row-reverse justify-center gap-2 md:pl-72">
    <div class="md:w-[420px] w-[350px] h-[20vh] bg-gray-900 mt-5 rounded-lg items-start p-2 justify-start flex flex-col bg-cover"
         style="background-image: url({{asset("lmodel/bnbBusd.png")}});">
        <p class="text-gray-300">Profits</p>
        <span class=" flex items-center justify-between w-full rounded-full mt-5">
                <h1 class="text-white font-extrabold text-lg">1115631.6 BUSD</h1>
                <p class="text-green-400 ml-2">8</p>
            </span>
        <span class="flex items-center justify-between w-full rounded-full mt-5">
                <h1 class="text-white font-extrabold text-lg">363.6672 BNB</h1>
                <p class="text-green-400 ml-2">0.0178</p>
            </span>
    </div>
    <div style="background-image: url({{asset("lmodel/bnbBusd.png")}});"
         class="bg-cover h-[17vh] md:h-[20vh] md:w-[120px] bg-gray-900 mt-5 rounded-lg items-start p-2 justify-start md:flex hidden flex-col">
        <p class="text-gray-300">Ratio</p>
        <h1 class=" text-white font-bold">2652%</h1>
        <span class="bg-gray-500  flex items-center justify-between w-[100px] h-[5vh] rounded-full mt-5">
                <p class="text-white ml-2">0%</p>
                <img src="{{asset("lmodel/activity_white.webp")}}" alt="'..." class="h-6 w-6 mr-2" />
            </span>
    </div>

    <div class="h-[17vh] md:h-[20vh] md:w-[120px] w-[170px] bg-gray-900 mt-5 rounded-lg items-start p-2 justify-start flex flex-col bg-cover"
         style="background-image: url({{asset("lmodel/2.png")}});">
        <p class="text-gray-300">Team</p>
        <h1 class=" text-white font-bold">1643144</h1>
        <span
            class="bg-green-900 rounded-full bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80 flex items-center justify-between md:w-[100px] w-[150px] h-[5vh] rounded-full mt-5">
                <p class="text-green-400 ml-2">8</p>
                <img src="{{asset("lmodel/activity_green.png")}}" alt="'..." class="h-6 w-6 mr-2" />
            </span>
    </div>

    <div class="h-[17vh] md:h-[20vh] md:w-[120px] w-[170px] bg-gray-900 mt-5 rounded-lg items-start p-2 justify-start flex flex-col bg-cover"
         style="background-image: url({{asset("lmodel/1.png")}});">
        <p class="text-gray-300">Partners</p>
        <h1 class=" text-white font-bold">22127</h1>
        <span
            class="bg-green-900 rounded-full bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80 flex items-center justify-between md:w-[100px] w-[150px] h-[5vh] rounded-full mt-5">
                <p class="text-green-400 ml-2">8</p>
                <img src="{{asset("lmodel/activity_green.png")}}" alt="'..." class="h-6 w-6 mr-2" />
            </span>
    </div>
    <div class="bg-gray-900 bg-cover w-[350px] h-16 md:hidden mt-3 flex items-center justify-between rounded-lg"
         style="background-image: url(2.png);">
        <p class="text-gray-300 ml-3">Team</p>
        <h1 class="text-white text-lg font-extrabold">2652%</h1>
        <span class="bg-gray-500 mr-3 flex items-center justify-between w-[100px] h-[5vh] rounded-full">
                <p class="text-white ml-2">0%</p>
                <img src="{{asset("lmodel/activity_white.webp")}}" alt="'..." class="h-6 w-6 mr-2" />
            </span>
    </div>



    <div
        class="w-[80%] rounded m-5 md:h-[20vh] h-[15vh] bg-gray-900 flex flex-wrap items-center justify-evenly gap-2">
        <img src="cup.svg" alt="'..." class="md:h-32 md:w-32 h-16 w-16" />
        <img src="cup.svg" alt="'..." class="md:h-32 md:w-32  h-16 w-16" />
        <img src="cup.svg" alt="'..." class="md:h-32 md:w-32  h-16 w-16" />
        <img src="cup.svg" alt="'..." class="md:h-32 md:w-32  h-16 w-16" />
        <h1 class="text-gray-300 md:block hidden">Show All</h1>
    </div>


</div>
<!--Next glassmorph designs sir-->
<div class="md:ml-96 ml-14">
    <h1 class="text-white text-2xl font-extrabold">Forsage Programs<sup
            class="text-sm ml-3 bg-blue-600 py-2 px-3 rounded-full font-semibold">Info</sup>
    </h1>
</div>
<div class="flex md:flex-row flex-col gap-2 justify-evenly mt-5 mb-5 items-center md:ml-72">
    <div style="background-image: url(https://busd.forsage.io/blurs/dashboard/blue-blur.png);"
         class="w-[300px] md:h-[30vh] h-[38vh] bg-cover rounded-lg bg-gray-900 rounded-md bg-clip-padding backdrop-filter backdrop-blur-lg bg-opacity-40">
        <div class=" flex items-center justify-between">
            <h1 class="text-white text-lg font-bold m-5">x3</h1>
            <h1 class="text-white text-lg font-bold m-5">368495 BUSD</h1>

        </div>
        <div class="flex md:flex-row flex-col items-center justify-between">
            <div class="flex justify-start items-center flex-wrap gap-2 w-[230px] mt-2 m-5">
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
            </div>
            <button
                class="w-[90%] md:w-32 h-10 bg-blue-600 md:mt-20 mr-3 rounded font-bold text-white">Preview</button>
        </div>
    </div>


    <div style="background-image: url(https://busd.forsage.io/blurs/dashboard/purple-blur.png);"
         class="w-[300px] md:h-[30vh] h-[38vh] bg-cover rounded-lg bg-gray-900 rounded-md bg-clip-padding backdrop-filter backdrop-blur-lg bg-opacity-40">
        <div class=" flex items-center justify-between">
            <h1 class="text-white text-lg font-bold m-5">x4</h1>
            <h1 class="text-white text-lg font-bold m-5">410830 BUSD</h1>

        </div>
        <div class="flex md:flex-row flex-col items-center justify-between">
            <div class="flex justify-start items-center flex-wrap gap-2 w-[230px] mt-2 m-5">
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
                <span class="h-8 w-8 bg-blue-600 rounded"></span>
            </div>
            <button
                class="w-[90%] md:w-32 h-10 bg-purple-600 md:mt-20 mr-3 rounded font-bold text-white">Preview</button>
        </div>
    </div>


</div>

</div>

</div>

<!--Ambassador image sir-->
<div class="flex items-center justify-center md:ml-72">

    <div style="border-top: 1px solid skyblue; border-left: 1px solid skyblue; border-right: 1px solid spurple; border-bottom: 1px solid purple;"
         class="bg-black w-[300px] md:w-[80%] rounded-lg md:h-[15vh] flex-col-reverse h-[40vh] m-5 border-white flex items-center justify-between md:flex-row flex-col">
        <button class="px-5 py-2 text-white m-5 rounded-full"
                style="background-image: linear-gradient(180deg, skyblue, purple);">Go to Program</button>
        <img src="{{asset("lmodel/text-logo.svg")}}" alt="..." class="h-full w-40" />
        <img src="{{asset("lmodel/logo-full.png")}}" alt="..." class="h-full w-32 m-5" />
    </div>
</div>
<!--Table and section sir-->

<div class="flex items-center justify-evenly md:ml-72 md:flex-row flex-col">
    <div class="flex flex-col rounded-lg h-screen md:w-[500px] w-[300px] bg-gray-900 mb-5">
        <div class="flex justify-between">
            <div class="flex">
                    <span class="p-2 m-5 rounded-full bg-gray-700"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="0 0 24 24" fill="white" stroke="white" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <line x1="19" x2="19" y1="8" y2="14" />
                            <line x1="22" x2="16" y1="11" y2="11" />
                        </svg>
                    </span>
                <p class="text-gray-400 mt-7 -ml-4 mr-2" style="font-size: 12px;">new user joined</p>
                <p class=" w-24 h-5 text-center mt-7 text-sm rounded-full bg-blue-600 rounded-md bg-clip-padding
                    backdrop-filter backdrop-blur-lg bg-opacity-30 text-blue-500 font-bold">
                    ID 16436686
                </p>
            </div>
            <div class="text-white flex">
                    <span class="p-2 mt-5 -mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                             stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-arrow-up-right-square">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M8 8h8v8" />
                            <path d="m8 16 8-8" />
                        </svg>
                    </span>
                <p class="text-gray-400 mt-7 mr-3" style="font-size: 12px;"> -4 hours ago</p>
            </div>
        </div>

        <div class="flex justify-between">
            <div class="flex">
                    <span class="p-2 m-5 rounded-full bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                         height="20" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet">
                            <path d="M21 12V7H5a2 2 0 0 1 0-4h14v4" />
                            <path d="M3 5v14a2 2 0 0 0 2 2h16v-5" />
                            <path d="M18 12a2 2 0 0 0 0 4h4v-4Z" />
                        </svg>
                    </span>
                <p class="-ml-4 w-24 h-5 text-center mt-7 text-sm rounded-full bg-blue-600 rounded-md bg-clip-padding
                    backdrop-filter backdrop-blur-lg bg-opacity-30 text-blue-500 font-bold">
                    ID 16436686
                </p>
                <p class="text-gray-400 mt-7 ml-2" style="font-size: 12px;">+<span class="text-white"> 5
                            BUSD</span><span class="text-purple-600 ml-2 font-bold">x4</span></p>
            </div>
            <div class="text-white flex">
                    <span class="p-2 mt-5 -mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                             stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-arrow-up-right-square">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M8 8h8v8" />
                            <path d="m8 16 8-8" />
                        </svg>
                    </span>
                <p class="text-gray-400 mt-7 mr-3" style="font-size: 12px;"> -4 hours ago</p>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="flex">
                    <span class="p-2 m-5 rounded-full bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                         height="20" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet">
                            <path d="M21 12V7H5a2 2 0 0 1 0-4h14v4" />
                            <path d="M3 5v14a2 2 0 0 0 2 2h16v-5" />
                            <path d="M18 12a2 2 0 0 0 0 4h4v-4Z" />
                        </svg>
                    </span>
                <p class="-ml-4 w-24 h-5 text-center mt-7 text-sm rounded-full bg-blue-600 rounded-md bg-clip-padding
                    backdrop-filter backdrop-blur-lg bg-opacity-30 text-blue-500 font-bold">
                    ID 16436686
                </p>
                <p class="text-gray-400 mt-7 ml-2" style="font-size: 12px;">+<span class="text-white"> 5
                            BUSD</span><span class="text-purple-600 ml-2 font-bold">x4</span></p>
            </div>
            <div class="text-white flex">
                    <span class="p-2 mt-5 -mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                             stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-arrow-up-right-square">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M8 8h8v8" />
                            <path d="m8 16 8-8" />
                        </svg>
                    </span>
                <p class="text-gray-400 mt-7 mr-3" style="font-size: 12px;"> -4 hours ago</p>
            </div>
        </div>

    </div>
    <!--history sections-->
    <div class="flex flex-col flex justify-center items-center gap-5">
        <div class="h-[15vh] md:w-60 w-[300px] bg-gray-900 rounded-lg">
            <p class="mt-3 ml-5 text-gray-200 text-sm">Members total</p>
            <h1 class="text-white font-extrabold text-lg mt-3 ml-5">1643685</h1>
            <p class="text-green-400 ml-5">+553</p>
        </div>
        <div class="h-[30vh] md:w-60 w-[300px] bg-gray-900 rounded-lg">
            <p class="mt-3 ml-5 text-gray-200 text-sm">Members Recieved</p>
            <h1 class="text-white font-extrabold text-lg mt-3 ml-5">147 066 704.78 BUSD</h1>
            <p class="text-green-400 ml-5">+13645 BUSD</p>
            <hr class="m-5" />
            <h1 class="text-white font-extrabold text-lg mt-3 ml-5">22 379.388 BNB</h1>
            <p class="text-green-400 ml-5">+5.2184 BNB</p>
        </div>
        <div class="h-[45vh] md:w-60 w-[300px] bg-gray-900 rounded-lg mb-5">
            <p class="mt-3 ml-3 text-gray-200 text-sm">Forsage BUSD Contracts</p>
            <hr class="m-3" />
            <span class="flex items-center justify-between">
                    <p class="ml-3 text-gray-200 text-sm">x3/x4</p>
                    <span class="flex items-center mr-3">
                        <p class="ml-5 text-white text-sm">0x5ac...B97</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                             stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-copy ml-3">
                            <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                            <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                             stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-link ml-3">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                        </svg>
                    </span>

                </span>
            <hr class="m-3" />
            <p class="mt-3 ml-3 text-gray-200 text-sm">Transaction made</p>
            <h1 class="text-white font-extrabold text-lg mt-3 ml-3">5 801 045</h1>
            <p class="text-green-400 ml-3">+1166</p>

            <hr class="m-3" />
            <p class="mt-3 ml-3 text-gray-200 text-sm">Turnover, BUSD</p>
            <h1 class="text-white font-extrabold text-lg mt-3 ml-3">294 133 409.56</h1>
            <p class="text-green-400 ml-3">+27290</p>
        </div>
    </div>



</div>
<script src="{{asset('lmodel/script.js')}}">
</script>
</body>

</html>
