<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=Jura&family=Poppins&display=swap" rel="stylesheet">
    <style>
        .gradient{
            background: linear-gradient(90deg,#0066FF 0%, #000102 100%);
        }
    </style>
</head>
<body class="bg-my-image leading-normal tracking-normal text-white">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
            <a href="#home" class="flex text-center ">
                <h1 class="font-itim text-white text-[50px]">Lk-</h1>
                <h1 class="text-[#FF0303] font-itim hover:text-[#17FF03] text-[50px]">Up</h1>
            </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1  text-birungu hover:text-blue-500 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="font-poppins w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-transparent backdrop-blur-3xl lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white font-bold no-underline hover:text-btn-contact hover:drop-shadow-led hover:underline" href="#home">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-white no-underline hover:text-btn-contact hover:drop-shadow-led hover:underline py-2 px-4" href="#about">About Me</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-white no-underline hover:text-btn-contact hover:drop-shadow-led hover:underline py-2 px-4" href="#porto">portofolio</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-white no-underline hover:text-btn-contact hover:drop-shadow-led hover:underline py-2 px-4" href="#service">Service</a>
                    </li>
                </ul>
                <a href="#contact">
                    <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-3xl drop-shadow-led-black mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Contact Me
                </button>
                </a>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
      <!--Hero-->
    <div class="pt-24" id="home">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-3/5 justify-center items-start text-center md:text-left">
            <p class="hidden lg:block font-itim text-grey text-[80px]">I,m a</p>
            <h1 class="font-jura text-led-fill text-[120px] drop-shadow-led" style=" -webkit-text-stroke-width:2px; -webkit-text-stroke-color:#0066FF;" >STUPID PEOPLE<br>FROM EARTH.</h1>
                <a href="#" class="mx-auto lg:mx-0">
                    <button class=" hover:underline bg-btn-contact drop-shadow-led hover:drop-shadow-led-black text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out ">
                    Subscribe
                </button>
                </a>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-2/5 py-6 text-center">
                <img class="w-full md:w-5/5 z-50 mx-auto" src="img/wifi.png" />
            </div>
        </div>
    </div>
    <section class="py-8" id="about">
        <div class="container max-w-5xl mx-auto m-8">
        
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="flex flex-wrap pt-10">
                <div class="w-5/6 sm:w-1/2 p-6 flex">
                <img src="../img/RectanglePP.png" class="relative" alt="">
                <img src="../img/saya.jpg" class="absolute rounded-[10px]" alt="">
                </div>
                <div class="w-full sm:w-1/2 py-6 pl-14">
                <h1 class="font-jura text-white text-[30px]  drop-shadow-led mt-[29]" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
                            PROJECT 2
                        </h1>
                        <h1 class="font-jura text-white text-[30px]">
                            LOREM
                        </h1>
                        <p class="font-jura text-white text-[20px] ">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis veniam asperiores commodi doloremque?
                        </p>
                        <a href="#"><p class="font-jura text-grey-ft text-[20px] hover:text-grey">>Read More</p></a>
                </div>
            </div>
            </div>
            <div class="flex">
                <a href="#" class="mx-auto">
                    <button class=" hover:underline bg-gradient-to-r from-cyan to-birungu drop-shadow-led hover:drop-shadow-led-black text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out font-jura">
                    My Resume
                </button>
                </a>
            </div>
        </div>
    </section>
    <section class="py-8" id="porto">
        <div class="container max-w-5xl mx-auto m-8">
        <h1 class="font-jura text-white text-[50px]  drop-shadow-led text-center" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
            PORTOFOLIO</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-50 my-0 py-0 rounded-t drop-shadow-led"></div>
            </div>
            <div class="flex flex-wrap pt-10">
                <div class="w-5/6 sm:w-1/2 p-6">
                <h1 class="font-jura text-white text-[30px]  drop-shadow-led mt-[29]" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
                            PROJECT 1
                        </h1>
                        <h1 class="font-jura text-white text-[30px]">
                            BUKU-KU
                        </h1>
                        <p class="font-jura text-white text-[20px] ">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis veniam asperiores commodi doloremque?
                        </p>
                        <a href="#"><p class="font-jura text-grey-ft text-[20px] hover:text-grey">>Read More</p></a>
                </div>
                <div class="w-full sm:w-1/2 p-6 flex">
                    <img src="../img/RectangleP.png" class="relative" alt="">
                    <img src="../img/buku-ku.png" class="absolute" alt="">
                </div>
            </div>
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="flex flex-wrap pt-10">
                <div class="w-5/6 sm:w-1/2 p-6 flex">
                <img src="../img/RectangleP.png" class="relative" alt="">
                <img src="" class="absolute" alt="">
                </div>
                <div class="w-full sm:w-1/2 py-6 pl-14">
                <h1 class="font-jura text-white text-[30px]  drop-shadow-led mt-[29]" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
                            PROJECT 2
                        </h1>
                        <h1 class="font-jura text-white text-[30px]">
                            LOREM
                        </h1>
                        <p class="font-jura text-white text-[20px] ">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis veniam asperiores commodi doloremque?
                        </p>
                        <a href="#"><p class="font-jura text-grey-ft text-[20px] hover:text-grey">>Read More</p></a>
                </div>
            </div>
            </div>
            <div class="flex">
                <a href="#" class="mx-auto">
                    <button class=" hover:underline bg-gradient-to-r from-cyan to-birungu drop-shadow-led hover:drop-shadow-led-black text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out font-jura">
                    My Resume
                </button>
                </a>
            </div>
            
        </div>
    </section>
    <section class="py-8" id="service">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="font-jura text-white text-[50px]  drop-shadow-led text-center mt-[40px] mx-auto" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
                SERVICE</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-50 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full lg:w-0.5 p-6 flex flex-col flex-grow flex-shrink">
                
            </div>
            <div class="w-full md:w-1/5 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-card rounded-[20px] border-card-str border-[3px] drop-shadow-led overflow-hidden shadow hover:drop-shadow-led-green hover:border-led-green">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <img class="mx-auto" src="./img/design.png" alt="">
                        <p class="w-full font-poppins text-white text-[20px] px-6 text-center">
                            Web Design
                        </p>
                        <h1 class="font-poppins text-[40px] "></h1>
                        
                        <p class="text-white font-poppins text-base px-6 mb-5 text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </a>
                <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline bg-black drop-shadow-led-black border-[3px] border-gray-800 text-white font-bold rounded-full my-1 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:drop-shadow-led">
                            Read More
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="w-full md:w-1/5 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-card rounded-[20px] border-card-str border-[3px] drop-shadow-led overflow-hidden shadow hover:drop-shadow-led-green hover:border-led-green">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <img class="mx-auto" src="./img/website.png" alt="">
                        <p class="w-full font-poppins text-white text-[20px] px-6 text-center">
                            Web Programming
                        </p>
                        <h1 class="font-poppins text-[40px] "></h1>
                        
                        <p class="text-white font-poppins text-base px-6 mb-5 text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </a>
                <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline bg-black drop-shadow-led-black border-[3px] border-gray-800 text-white font-bold rounded-full my-1 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:drop-shadow-led">
                            Read More
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="w-full md:w-1/5 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-card rounded-[20px] border-card-str border-[3px] drop-shadow-led overflow-hidden shadow hover:drop-shadow-led-green hover:border-led-green">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <img class="mx-auto" src="./img/market.png" alt="">
                        <p class="w-full font-poppins text-white text-[20px] px-6 text-center">
                            Web Market
                        </p>
                        <h1 class="font-poppins text-[40px] "></h1>
                        
                        <p class="text-white font-poppins text-base px-6 mb-5 text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                        </p>
                    </a>
                <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline bg-black drop-shadow-led-black border-[3px] border-gray-800 text-white font-bold rounded-full my-1 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:drop-shadow-led">
                            Read More
                        </button>
                    </div>
                </div>
                </div>
            </div>
            <div class="w-full lg:w-0.5 p-6 flex flex-col flex-grow flex-shrink">
                
            </div>
        </div>
    </section>
    <section id="contact" class="gradient 2xl:rounded-tl-[300px] rounded-tl-[200px]">
    <div class="container max-w-7xl mx-auto m-8">
        <h1 class="font-jura text-white text-[50px]  drop-shadow-led text-center" style=" -webkit-text-stroke-width:1px; -webkit-text-stroke-color:#0066FF;">
            CONTACT</h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-50 my-0 py-0 rounded-t drop-shadow-led"></div>
            </div>
            <div class="lg:flex flex-wrap pt-10">
                <div class="w-5/6 sm:w-1/2 p-6 flex">
                <form action="post" class="m-[10px] w-full sm:mx-auto">
                            <div class="rounded-[30px] w-[auto] bg-gradient-to-tr from-led to-[#035541] drop-shadow-led-black p-[40px]">
                                <input type="text" name="nama" id="" placeholder="Nama" class="h-[50px] w-full font-poppins text-[20px] text-[#686868] mb-[30px] bg-[#272727] rounded-[15px] drop-shadow-led-black pl-9">
                                <input type="text" name="email" id="" placeholder="Email" class="h-[50px] w-full font-poppins text-[20px] text-[#686868] mb-[30px] bg-[#272727] rounded-[15px] drop-shadow-led-black pl-9">
                                <input type="text" name="pesan" id="" placeholder="Message" class="h-[150px] w-full font-poppins text-[20px] text-[#686868] mb-[30px] bg-[#272727] rounded-[15px] drop-shadow-led-black pl-9">
                                <button type="submit" class="font-poppins text-biru h-[50px] w-1/3 bg-[#272727] drop-shadow-led-black rounded-[15px] border-gray-800 border-[5px] text-[20px] mt-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:underline" >Send</button>
                            </div>
                        </form>
                </div>
                <div class="w-full sm:w-1/2 py-6 pl-14">
                <div class="font-poppins">
                    <h1 class="text-[30px]">Drop Me A Message</h1>
                    <p class="text-[20px] w-[500px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste amet explicabo ab cupiditate!</p>
                    <div class="flex items-center w-[500px]">
                        <div class="my-[20px] mr-[20px] w-[50px] h-[50px] rounded-[10px] bg-gradient-to-t from-[#0EFFC5] via-[#021C43] to-led flex">
                        <img src="../img/wa.png" class="p-[12px]" alt="">
                    </div>
                    <p class="font-poppins text-[20px]">+62 895 0156 2673</p>
                    </div>
                    <div class="flex items-center w-[500px]">
                        <div class="my-[20px] mr-[20px] w-[50px] h-[50px] rounded-[10px] bg-gradient-to-t from-[#0EFFC5] via-[#021C43] to-led flex">
                        <img src="../img/ig.png" class="p-[12px]" alt="">
                    </div>
                    <p class="font-poppins text-[20px]">@lkman.is</p>
                    </div>
                    <div class="flex items-center w-[600px]">
                        <div class="my-[20px] mr-[20px] w-[50px] h-[50px] rounded-[10px] bg-gradient-to-t from-[#0EFFC5] via-[#021C43] to-led flex">
                        <img src="../img/email.png" class="p-[12px]" alt="">
                    </div>
                    <p class="font-poppins text-[20px]">m.lukmanisma@gmail.com</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-700 bg-slate-800">
                <div class="md:text-center container mx-auto py-7 px-6">
                    <p class="mb-0 text-grey">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        @LkMan.is
                    </p>
                </div>
            </div>
    </section>
    
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("backdrop-blur-xl");
                navaction.classList.remove("bg-blue");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-transparent");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });

    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }

    </script>
</body>
</html>
