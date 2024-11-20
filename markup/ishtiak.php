<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/scamwatch/_/css/output.css">
    <link rel="stylesheet" href="/wp-content/themes/scamwatch/_/css/swiper.min.css">
    <title>Ishtiak | Scamwatch</title>
</head>

<body>

    <!-- start of the header section -->
    <header class="relative">
        <div class="bg-blue1 py-1">
            <div class="holder">
                <ul
                    class="flex justify-end items-center gap-4 md:gap-10 [&>li>a]:text-white [&>li>a]:font-medium [&>li>a]:text-sm [&>li>a]:tracking-normal">
                    <li><a href="">News & Alerts</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Reports</a></li>
                </ul>
            </div>
        </div>

        <div class="holder flex justify-between gap-8 items-center py-2 ">
            <a href="#" class="w-14 h-14">
                <img src="/wp-content/themes/scamwatch/_/img/logo.png" alt="">
            </a>

            <nav class="md:block hidden py-2 px-4 ">
                <ul class="flex justify-center items-center gap-4 md:gap-8 xl:gap-10 [&>li>a]:text-blue1 [&>li>a]:font-medium [&>li>a]:text-xs xl:[&>li>a]:text-base [&>li>a]:uppercase [&>li>a]:tracking-normal">
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">Home</a></li>
                    <!-- Mega Menu Parent -->
                    <li>
                        <a id="scam-link" href="#" class="after-effect relative hover:text-orange-500 duration-500">Type of Scam</a>
                        <!-- Mega Menu Dropdown -->
                        <div id="mega-menu"
                            class="bg-gray-100 absolute left-0 top-[74px] w-full shadow-md py-10 opacity-0 pointer-events-none ease-in-out flex justify-center transition-all duration-500 z-10">
                            <div class="grid grid-cols-3 gap-8 max-w-[53rem] w-full px-4">
                                <!-- Column 1 -->
                                <div>
                                    <h4 class="font-semibold mb-4">Online Scams</h4>
                                    <ul class="space-y-2">
                                        <li><a href="#">Phishing</a></li>
                                        <li><a href="#">Fake E-commerce</a></li>
                                        <li><a href="#">Email Scams</a></li>
                                    </ul>
                                </div>
                                <!-- Column 2 -->
                                <div>
                                    <h4 class="font-semibold mb-4">Investment Scams</h4>
                                    <ul class="space-y-2">
                                        <li><a href="#">Ponzi Schemes</a></li>
                                        <li><a href="#">Crypto Scams</a></li>
                                        <li><a href="#">Stock Market Scams</a></li>
                                    </ul>
                                </div>
                                <!-- Column 3 -->
                                <div>
                                    <h4 class="font-semibold mb-4">Social Media Scams</h4>
                                    <ul class="space-y-2">
                                        <li><a href="#">Fake Profiles</a></li>
                                        <li><a href="#">Romance Scams</a></li>
                                        <li><a href="#">Impersonation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">I have been scam</a></li>
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">Protection against Scam</a></li>
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">About</a></li>
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">More</a></li>
                </ul>
            </nav>

            <div class="flex items-center gap-6">
                <a href="" class="searchBtn">
                    <svg width="22" height="22" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0381 16.5L12.4965 12.9521M14.4591 8.21053C14.4591 9.99027 13.7521 11.6971 12.4937 12.9556C11.2352 14.2141 9.52835 14.9211 7.74861 14.9211C5.96887 14.9211 4.26202 14.2141 3.00355 12.9556C1.74509 11.6971 1.03809 9.99027 1.03809 8.21053C1.03809 6.43078 1.74509 4.72394 3.00355 3.46547C4.26202 2.207 5.96887 1.5 7.74861 1.5C9.52835 1.5 11.2352 2.207 12.4937 3.46547C13.7521 4.72394 14.4591 6.43078 14.4591 8.21053V8.21053Z" stroke="#266df1" stroke-width="1.57895" stroke-linecap="round"></path>
                    </svg>
                </a>

                <nav class="md:hidden block ">
                    <div class="flex justify-between items-center max-w-7xl mx-auto">
                        <!-- Hamburger Icon (Mobile) -->
                        <div class="lg:hidden flex items-center">
                            <button onclick="toggleMenu()" class="outline-none mobile-menu-button relative">
                                <span id="line1" class="block w-6 h-0.5 bg-blue1 transition-all duration-500 ease-in-out"></span>
                                <span id="line2" class="block w-6 h-0.5 bg-blue1 transition-all duration-500 ease-in-out mt-1.5"></span>
                                <span id="line3" class="block w-6 h-0.5 bg-blue1 transition-all duration-500 ease-in-out mt-1.5"></span>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu (Slide in from right) -->
                    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-full bg-gray-200 shadow-lg transform translate-x-full transition-transform duration-500 z-50">
                        <!-- Close Button -->
                        <button onclick="toggleMenu()" class="absolute top-4 right-4">
                            <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <!-- Mobile Menu Items -->
                        <ul class="flex flex-col gap-4 px-6 py-4 mt-10 [&>li>a]:tracking-normal [&>li>a]:upperrcase [&>li>a]:font-semibold ">
                            <li><a href="#" class="hover:text-orange-500 duration-500">Home</a></li>
                            <li class="relative">
                                <a href="#" id="scamToggle" class="flex items-center justify-between w-full hover:text-orange-500 duration-500">
                                    Type of Scam
                                    <svg class="w-4 h-4 ml-2 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>

                                <!-- Mega Menu Content (Sub-menu) -->
                                <div id="megaMenuContent" class="overflow-hidden transition-all duration-500 max-h-0">
                                    <a href="#" class="block text-gray-700 hover:text-orange-500 duration-500 py-2">Phishing</a>
                                    <a href="#" class="block text-gray-700 hover:text-orange-500 duration-500 py-2">Fake E-commerce</a>
                                    <a href="#" class="block text-gray-700 hover:text-orange-500 duration-500 py-2">Email Scams</a>
                                </div>
                            </li>
                            <li><a href="#" class="hover:text-orange-500 duration-500">I have been scammed</a></li>
                            <li><a href="#" class="hover:text-orange-500 duration-500">Protection against Scam</a></li>
                            <li><a href="#" class="hover:text-orange-500 duration-500">About</a></li>
                            <li><a href="#" class="hover:text-orange-500 duration-500">More</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>


    </header>
    <!-- end of the header section -->

    <!-- start of the Intro section -->
    <section class="block-pad">
        <div class="holder">
            <div class="space-y-6 text-center max-w-5xl mx-auto">
                <h2 class="">Type of scam</h2>
                <div class="space-y-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fugiat numquam asperiores, distinctio autem, facilis eos quaerat cum odio tempore quibusdam explicabo hic eaque iste, cumque nam quia porro. Neque eaque necessitatibus praesentium cum ex exercitationem, voluptatem sit labore ut. Consequuntur alias veritatis amet, quia officia obcaecati autem quae iste?</p>
                </div>
            </div>

        </div>
    </section>
    <!-- end of the Intro section -->

    <section class="bg-lightBlue">
        <div class="grid justify-center items-center lg md:grid-cols-2 lg:grid-cols-4">
            <a href="" class="p-8 hover:bg-blue1 text-white uppercase text-center  duration-500">Get help if you have been scammed</a>
            <a href="" class="p-8 hover:bg-blue1 text-white uppercase text-center  duration-500">check if something suspicious is a scam</a>
            <a href="" class="p-8 hover:bg-blue1 text-white uppercase text-center  duration-500">Report a scam you have encountered</a>
            <a href="" class="p-8 hover:bg-blue1 text-white uppercase text-center  duration-500">Protect yourself against scams</a>
        </div>
    </section>

    <!-- start of the cardSlider section -->
    <section
        class="block-pad overflow-hidden">
        <div class="holder">

            <div class="flex justify-between items-center gap-5 pb-6">
                <h2 class="font-bold leading-none uppercase">
                    Explore
                </h2>

                <div class="flex items-center">
                    <div class="promo-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                            <path d="M23.6503 26.4987L33.8086 36.6571L32.2451 38.2206L20.5233 26.4987L32.2451 14.7769L33.8086 16.3404L23.6503 26.4987Z" fill="black" />
                        </svg>
                    </div>
                    <div class="promo-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                            <path d="M29.3497 26.5013L19.1914 16.3429L20.7549 14.7794L32.4767 26.5013L20.7549 38.2231L19.1914 36.6596L29.3497 26.5013Z" fill="black" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="swiper cardSlider !overflow-visible">
                <div class="swiper-wrapper flex gap-4">
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/1097456/pexels-photo-1097456.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">

                            <span class="text-white z-20 text-xs pb-2">Date & time</span>

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/333850/pexels-photo-333850.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">

                            <span class="text-white z-20 text-xs pb-2">Date & time</span>

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/1480690/pexels-photo-1480690.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                            <span class="text-white z-20 text-xs pb-2">Date & time</span>

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/33930/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                            <span class="text-white z-20 text-xs pb-2">Date & time</span>

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/696407/pexels-photo-696407.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                            <span class="text-white z-20 text-xs pb-2">Date & time</span>

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center pt-8 gap-5 ">


                <a href="#" class="btn group flex justify-end flex-end items-center gap-3 !text-base">
                    Find out more
                </a>
            </div>
        </div>
    </section>
    <!-- end of the cardSlider section -->

    <!-- start of the Text & media section -->
    <section class="block-pad">
        <div class="holder">
            <div class="grid lg:grid-cols-5 items-center lg:gap-14 gap-8">


                <div class="lg:col-span-3 lg:order-2">
                    <img src="https://images.pexels.com/photos/1097456/pexels-photo-1097456.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="Empowering Local Talent" class="w-full">
                </div>

                <div class="lg:col-span-2 space-y-4 order-2 lg:order-1">
                    <h2 class="text-black relative pb-2 ">
                        Sustainability</h2>

                    <div class="[&>*]:leading-[160%]">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit consectetur.
                            Corrupti voluptatibus expedita harum enim quaerat amet est ut magni at. Doloribus autem nisi
                            dolore nihil id eveniet alias est aut explicabo excepturi. Aut, id autem consequuntur sit
                            aperiam, est facere quae distinctio omnis ad molestias, eaque reiciendis iusto quidem
                        </p>
                    </div>


                    <div class="gap-30 flex flex-wrap items-center pt-6">
                        <a href="#" class="btn group flex items-center gap-3">
                            Find out more
                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="10" viewBox="0 0 41 10"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M39.0946 4.47949L0 4.47949V5.52116L39.0951 5.52116L37.1992 7.56283L37.9625 8.27163L41 5.00056L37.9625 1.72949L37.1992 2.4383L39.0946 4.47949Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- end of the Text & media section -->

    <!-- Start of the Accordion section -->
    <section class="block-pad">
        <div class="holder">
            <h2 class="text-black pb-6">FAQ</h2>

            <div class="accordion-item pb-4">
                <a class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none border-b border-gray-300  mb-2">
                    <h3 class="font-semibold">
                        It's an amazing opportunity to make or save money
                    </h3>
                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div class="accordion-content px-4 py-2 hidden">
                    <p class="text-gray-700">This is the content of the first accordion item. It can include any HTML elements.</p>
                </div>
            </div>
            <div class="accordion-item pb-4">
                <a class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none border-b border-gray-300  mb-2">
                    <h3 class="font-semibold">
                        It's an amazing opportunity to make or save money
                    </h3>
                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div class="accordion-content px-4 py-2 hidden">
                    <p class="text-gray-700">This is the content of the first accordion item. It can include any HTML elements.</p>
                </div>
            </div>
            <div class="accordion-item pb-4">
                <a class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none border-b border-gray-300  mb-2">
                    <h3 class="font-semibold">
                        It's an amazing opportunity to make or save money
                    </h3>
                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div class="accordion-content px-4 py-2 hidden">
                    <p class="text-gray-700">This is the content of the first accordion item. It can include any HTML elements.</p>
                </div>
            </div>
            <div class="accordion-item pb-4">
                <a class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none border-b border-gray-300  mb-2">
                    <h3 class="font-semibold">
                        It's an amazing opportunity to make or save money
                    </h3>
                    <svg class="accordion-icon w-5 h-5 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div class="accordion-content px-4 py-2 hidden">
                    <p class="text-gray-700">This is the content of the first accordion item. It can include any HTML elements.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- end of the Accordion section -->

    <!-- Start of the Tab section -->
    <section class="block-pad">
        <div class="holder">
            <h2 class="font-bold pb-6">Guides & Alerts</h2>
            <div class="tab-container">
                <!-- Tab Navigation -->
                <div class="tab-nav flex border-b border-gray-300">
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent uppercase" data-tab="tab1">Scam Alerts</button>
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent uppercase" data-tab="tab2">Tips & Guides</button>
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent uppercase" data-tab="tab3">Report Scams</button>
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent uppercase" data-tab="tab4">Scam Alerts</button>
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent uppercase" data-tab="tab5">Tips & Guides</button>
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent uppercase" data-tab="tab6">Report Scams</button>
                </div>

                <!-- Tab Content -->
                <div class="pt-6">
                    <div id="tab1" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image4.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image5.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image6.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>

                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image6.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image4.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image5.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image6.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image6.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image4.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image5.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image6.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image4.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image5.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image6.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image4.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image5.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image6.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image7.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image3.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                            <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0  before:z-10 group hover:before:bg-black/50 before:transition-all">
                                <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="/wp-content/themes/scamwatch/_/img/image2.jpg" alt="">

                                <span class="text-white z-20 text-xs pb-2">Date & time</span>

                                <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                                <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of the Tab section -->


    <section class="block-pad bg-soft-vanilla">
        <div class="holder">
            <h2 class="tracking-wider pb-8">Types of scams</h2>
            <div class="space-y-6">
                <div class="grid lg:grid-cols-9 items-center bg-white shadow-custom1 hover:shadow-custom2 transition-all duration-200">
                    <div class="col-span-2 w-[200px]">
                        <img src="/wp-content/themes/scamwatch/_/img/dateromance.png" alt="" class="w-full">
                    </div>
                    <div class="col-span-7 space-y-4 [&>p]:font-light p-5 border-t border-gray-200 lg:border-none">
                        <h3 class="tracking-wider">Online dating and romance scams</h3>
                        <p>Online dating and romance scams are on the rise. Criminals use dating sites and social media to build a relationship with their victims. They may pretend to be a soldier, a diplomat, a businessperson, or even a government official. They may even pretend to be a victim of a natural</p>
                    </div>
                </div>
                <div class="grid lg:grid-cols-9 items-center bg-white shadow-custom1 hover:shadow-custom2 transition-all duration-200">
                    <div class="col-span-2 w-[200px]">
                        <img src="/wp-content/themes/scamwatch/_/img/invest.png" alt="" class="w-full">
                    </div>
                    <div class="col-span-7 space-y-4 [&>p]:font-light p-5 border-t border-gray-200 lg:border-none">
                        <h3 class="tracking-wider">Investment scams</h3>
                        <p>If you're looking to make money through investing, watch out – scammers have created all sorts of fake opportunities to get you excited and take away your cash.</p>
                    </div>
                </div>
                <div class="grid lg:grid-cols-9 items-center bg-white shadow-custom1 hover:shadow-custom2 transition-all duration-200">
                    <div class="col-span-2 w-[200px]">
                        <img src="/wp-content/themes/scamwatch/_/img/products.png" alt="" class="w-full">
                    </div>
                    <div class="col-span-7 space-y-4 [&>p]:font-light p-5 border-t border-gray-200 lg:border-none">
                        <h3 class="tracking-wider">Product and service scams</h3>
                        <p>Scammers prey on consumers and businesses that are buying or selling products and services. Not every transaction is legitimate. </p>
                    </div>
                </div>
                <div class="grid lg:grid-cols-9 items-center bg-white shadow-custom1 hover:shadow-custom2 transition-all duration-200">
                    <div class="col-span-2 w-[200px]">
                        <img src="/wp-content/themes/scamwatch/_/img/treats.png" alt="" class="w-full">
                    </div>
                    <div class="col-span-7 space-y-4 [&>p]:font-light p-5 border-t border-gray-200 lg:border-none">
                        <h3 class="tracking-wider">Threats and extortion scams</h3>
                        <p>Scammers will use any means possible to steal your identity or your money – including threatening your life or 'hijacking' your computer.</p>
                    </div>
                </div>
                <div class="grid lg:grid-cols-9 items-center bg-white shadow-custom1 hover:shadow-custom2 transition-all duration-200">
                    <div class="col-span-2 w-[200px]">
                        <img src="/wp-content/themes/scamwatch/_/img/job.png" alt="" class="w-full">
                    </div>
                    <div class="col-span-7 space-y-4 [&>p]:font-light p-5 border-t border-gray-200 lg:border-none">
                        <h3 class="tracking-wider">Jobs and employment scams</h3>
                        <p>Jobs and employment scams deceive you into handing over your money by offering you a ‘guaranteed’ way to make fast money or a high-paying job for little effort.</p>
                    </div>
                </div>

                <div class="grid lg:grid-cols-9 items-center bg-white shadow-custom1 hover:shadow-custom2 transition-all duration-200">
                    <div class="col-span-2 w-[200px]">
                        <img src="/wp-content/themes/scamwatch/_/img/unespected.png" alt="" class="w-full">
                    </div>
                    <div class="col-span-7 space-y-4 [&>p]:font-light p-5 border-t border-gray-200 lg:border-none">
                        <h3 class="tracking-wider">Unexpected money</h3>
                        <p>Don't be lured by a surprise win. These scams try to deceive you into giving money upfront or your personal information in order to receive a prize from a lottery or competition that you never entered.</p>
                    </div>
                </div>
                <div class="grid lg:grid-cols-9 items-center bg-white shadow-custom1 hover:shadow-custom2 transition-all duration-200">
                    <div class="col-span-2 w-[200px]">
                        <img src="/wp-content/themes/scamwatch/_/img/impersonation.png" alt="" class="w-full">
                    </div>
                    <div class="col-span-7 space-y-4 [&>p]:font-light p-5 border-t border-gray-200 lg:border-none">
                        <h3 class="tracking-wider">impersonation scams</h3>
                        <p>Scammers impersonate trusted businesses, friends or family, to steal your money or personal information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start of the Contact Form section -->
    <section class="block-pad">
        <div class="holder grid items-center md:grid-cols-2 gap-8">
            <div class="text-center space-y-7 px-8 py-8">
                <h2>Where to find us</h2>
                <div class="space-y-2">
                    <h3 class=" text-xs font-normal leading-normal tracking-[1.228px] uppercase">Telephone</h3>
                    <a class="text-xl font-semibold" href="tel:http://+353-1-6251145">+8801600081601</a>
                </div>

                <div class="space-y-2">
                    <h3 class=" text-xs font-normal leading-normal tracking-[1.228px] uppercase">Email</h3>
                    <a class="text-xl font-semibold  underlin" href="mailto:info@irishsquash.com">info@scamwatch.com</a>
                </div>
            </div>
            <div class="w-full  shadow-md p-6">
                <h3 class="text-2xl font-semibold mb-6 text-center">Contact Us</h3>
                <form id="contactForm" class="space-y-4">
                    <!-- Name Input -->
                    <div>
                        <label for="name" class="block font-medium mb-2">Your Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue1"
                            placeholder="Enter your name"
                            required />
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block font-medium mb-2">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue1"
                            placeholder="Enter your email"
                            required />
                    </div>

                    <!-- Subject Input -->
                    <div>
                        <label for="subject" class="block font-medium mb-2">Subject</label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue1"
                            placeholder="Enter the subject"
                            required />
                    </div>

                    <!-- Message Input -->
                    <div>
                        <label for="message" class="block font-medium mb-2">Message</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue1"
                            placeholder="Type your message here..."
                            required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full btn">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- end of the Contact Form section -->

    <!-- start of the News letter section -->
    <section class="bg-blue1 py-4">
        <div class="holder">
            <div class="flex lg:items-center justify-between gap-5 flex-col lg:flex-row">
                <div class="space-y-6 lg:shrink-0">
                    <h2 class="text-white leading-none font-obviously font-normal ">Subscribe for our
                        newsletter</h2>

                    <p class="text-white  font-light hidden lg:block">Lorem ipsum dolor sit amet consectetur. Quisque
                        et.</p>
                </div><!-- Newsletter text -->

                <div class="max-w-[44.375rem] w-full">
                    <form action="" class="flex items-end gap-5 relative">
                        <div class="flex-1 border-b border-white">
                            <input type="email" placeholder="Enter your email address*"
                                class="text-white md:text-blue-700 bg-transparent md:bg-white w-[calc(100%_-_100px)]  md:w-full py-[15px] px-5 border-none leading-none focus:outline-none placeholder:text-white md:placeholder:text-blue-700 placeholder:text-sm placeholder:opacity-50 placeholder: placeholder:font-normal placeholder:first-letter:capitalize">
                        </div>

                        <button
                            class="text-white text-sm font-obviously font-normal uppercase tracking-wider md:min-w-[9.625rem] flex items-center md:border border-white gap-3 md:gap-11 md:px-5 md:py-[14px] absolute right-0 bottom-4 md:static md:hover:text-blue-700 md:hover:bg-white duration-500 z-10 group">
                            explore <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5"
                                    d="M2.66781 7.5C2.5352 7.5 2.40802 7.55268 2.31425 7.64645C2.22048 7.74021 2.16781 7.86739 2.16781 8C2.16781 8.13261 2.22048 8.25978 2.31425 8.35355C2.40802 8.44732 2.5352 8.5 2.66781 8.5L2.66781 7.5ZM2.66781 8.5L13.3345 8.5L13.3345 7.5L2.66781 7.5L2.66781 8.5Z"
                                    fill="white" class="md:group-hover:fill-blue-700 duration-500"></path>
                                <path d="M9.33447 12L13.3345 8L9.33447 4" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" class="md:group-hover:stroke-blue-700 duration-500"></path>
                            </svg> </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end of the footer section -->

    <!-- start of the footer section -->
    <footer class="bg-blue1 py-8">
        <div class="holder">
            <div class="md:hidden border-b-2 border-white text-white pb-6 space-y-3">

                <a href=""
                    class="text-lg hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">About

                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="11" viewBox="0 0 43 11" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M40.0946 5.44922L1 5.44922V6.49089L40.0951 6.49089L38.1992 8.53255L38.9625 9.24136L42 5.97029L38.9625 2.69922L38.1992 3.40802L40.0946 5.44922Z"
                                fill="white" />
                            <path
                                d="M1 5.44922L1 4.94922H0.5V5.44922H1ZM40.0946 5.44922V5.94922H41.2412L40.461 5.10899L40.0946 5.44922ZM1 6.49089H0.5V6.99089H1L1 6.49089ZM40.0951 6.49089L40.4614 6.83111L41.2417 5.99089H40.0951V6.49089ZM38.1992 8.53255L37.8328 8.19233L37.4926 8.55872L37.859 8.89895L38.1992 8.53255ZM38.9625 9.24136L38.6223 9.60775L38.9887 9.94798L39.3289 9.58158L38.9625 9.24136ZM42 5.97029L42.3664 6.31051L42.6823 5.97029L42.3664 5.63006L42 5.97029ZM38.9625 2.69922L39.3289 2.35899L38.9887 1.9926L38.6223 2.33282L38.9625 2.69922ZM38.1992 3.40802L37.859 3.04163L37.4926 3.38185L37.8328 3.74825L38.1992 3.40802ZM1 5.94922L40.0946 5.94922V4.94922L1 4.94922L1 5.94922ZM1.5 6.49089V5.44922H0.5V6.49089H1.5ZM40.0951 5.99089L1 5.99089L1 6.99089H40.0951V5.99089ZM39.7287 6.15066L37.8328 8.19233L38.5656 8.87278L40.4614 6.83111L39.7287 6.15066ZM37.859 8.89895L38.6223 9.60775L39.3028 8.87496L38.5394 8.16616L37.859 8.89895ZM39.3289 9.58158L42.3664 6.31051L41.6336 5.63006L38.5961 8.90113L39.3289 9.58158ZM42.3664 5.63006L39.3289 2.35899L38.5961 3.03944L41.6336 6.31051L42.3664 5.63006ZM38.6223 2.33282L37.859 3.04163L38.5394 3.77442L39.3028 3.06562L38.6223 2.33282ZM37.8328 3.74825L39.7282 5.78944L40.461 5.10899L38.5656 3.0678L37.8328 3.74825Z"
                                fill="white" class="group-hover:fill-orange-500 duration-500" />
                        </svg>
                    </span>
                </a>
                <a href=""
                    class="text-lg hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">I
                    have been scam
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="11" viewBox="0 0 43 11" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M40.0946 5.44922L1 5.44922V6.49089L40.0951 6.49089L38.1992 8.53255L38.9625 9.24136L42 5.97029L38.9625 2.69922L38.1992 3.40802L40.0946 5.44922Z"
                                fill="white" />
                            <path
                                d="M1 5.44922L1 4.94922H0.5V5.44922H1ZM40.0946 5.44922V5.94922H41.2412L40.461 5.10899L40.0946 5.44922ZM1 6.49089H0.5V6.99089H1L1 6.49089ZM40.0951 6.49089L40.4614 6.83111L41.2417 5.99089H40.0951V6.49089ZM38.1992 8.53255L37.8328 8.19233L37.4926 8.55872L37.859 8.89895L38.1992 8.53255ZM38.9625 9.24136L38.6223 9.60775L38.9887 9.94798L39.3289 9.58158L38.9625 9.24136ZM42 5.97029L42.3664 6.31051L42.6823 5.97029L42.3664 5.63006L42 5.97029ZM38.9625 2.69922L39.3289 2.35899L38.9887 1.9926L38.6223 2.33282L38.9625 2.69922ZM38.1992 3.40802L37.859 3.04163L37.4926 3.38185L37.8328 3.74825L38.1992 3.40802ZM1 5.94922L40.0946 5.94922V4.94922L1 4.94922L1 5.94922ZM1.5 6.49089V5.44922H0.5V6.49089H1.5ZM40.0951 5.99089L1 5.99089L1 6.99089H40.0951V5.99089ZM39.7287 6.15066L37.8328 8.19233L38.5656 8.87278L40.4614 6.83111L39.7287 6.15066ZM37.859 8.89895L38.6223 9.60775L39.3028 8.87496L38.5394 8.16616L37.859 8.89895ZM39.3289 9.58158L42.3664 6.31051L41.6336 5.63006L38.5961 8.90113L39.3289 9.58158ZM42.3664 5.63006L39.3289 2.35899L38.5961 3.03944L41.6336 6.31051L42.3664 5.63006ZM38.6223 2.33282L37.859 3.04163L38.5394 3.77442L39.3028 3.06562L38.6223 2.33282ZM37.8328 3.74825L39.7282 5.78944L40.461 5.10899L38.5656 3.0678L37.8328 3.74825Z"
                                fill="white" class="group-hover:fill-orange-500 duration-500" />
                        </svg>
                    </span>
                </a>
                <a href=""
                    class="text-lg hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">Protection
                    against Scam

                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="11" viewBox="0 0 43 11" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M40.0946 5.44922L1 5.44922V6.49089L40.0951 6.49089L38.1992 8.53255L38.9625 9.24136L42 5.97029L38.9625 2.69922L38.1992 3.40802L40.0946 5.44922Z"
                                fill="white" />
                            <path
                                d="M1 5.44922L1 4.94922H0.5V5.44922H1ZM40.0946 5.44922V5.94922H41.2412L40.461 5.10899L40.0946 5.44922ZM1 6.49089H0.5V6.99089H1L1 6.49089ZM40.0951 6.49089L40.4614 6.83111L41.2417 5.99089H40.0951V6.49089ZM38.1992 8.53255L37.8328 8.19233L37.4926 8.55872L37.859 8.89895L38.1992 8.53255ZM38.9625 9.24136L38.6223 9.60775L38.9887 9.94798L39.3289 9.58158L38.9625 9.24136ZM42 5.97029L42.3664 6.31051L42.6823 5.97029L42.3664 5.63006L42 5.97029ZM38.9625 2.69922L39.3289 2.35899L38.9887 1.9926L38.6223 2.33282L38.9625 2.69922ZM38.1992 3.40802L37.859 3.04163L37.4926 3.38185L37.8328 3.74825L38.1992 3.40802ZM1 5.94922L40.0946 5.94922V4.94922L1 4.94922L1 5.94922ZM1.5 6.49089V5.44922H0.5V6.49089H1.5ZM40.0951 5.99089L1 5.99089L1 6.99089H40.0951V5.99089ZM39.7287 6.15066L37.8328 8.19233L38.5656 8.87278L40.4614 6.83111L39.7287 6.15066ZM37.859 8.89895L38.6223 9.60775L39.3028 8.87496L38.5394 8.16616L37.859 8.89895ZM39.3289 9.58158L42.3664 6.31051L41.6336 5.63006L38.5961 8.90113L39.3289 9.58158ZM42.3664 5.63006L39.3289 2.35899L38.5961 3.03944L41.6336 6.31051L42.3664 5.63006ZM38.6223 2.33282L37.859 3.04163L38.5394 3.77442L39.3028 3.06562L38.6223 2.33282ZM37.8328 3.74825L39.7282 5.78944L40.461 5.10899L38.5656 3.0678L37.8328 3.74825Z"
                                fill="white" class="group-hover:fill-orange-500 duration-500" />
                        </svg>
                    </span>
                </a>
                <a href=""
                    class="text-lg hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">Type
                    of scam
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="11" viewBox="0 0 43 11" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M40.0946 5.44922L1 5.44922V6.49089L40.0951 6.49089L38.1992 8.53255L38.9625 9.24136L42 5.97029L38.9625 2.69922L38.1992 3.40802L40.0946 5.44922Z"
                                fill="white" />
                            <path
                                d="M1 5.44922L1 4.94922H0.5V5.44922H1ZM40.0946 5.44922V5.94922H41.2412L40.461 5.10899L40.0946 5.44922ZM1 6.49089H0.5V6.99089H1L1 6.49089ZM40.0951 6.49089L40.4614 6.83111L41.2417 5.99089H40.0951V6.49089ZM38.1992 8.53255L37.8328 8.19233L37.4926 8.55872L37.859 8.89895L38.1992 8.53255ZM38.9625 9.24136L38.6223 9.60775L38.9887 9.94798L39.3289 9.58158L38.9625 9.24136ZM42 5.97029L42.3664 6.31051L42.6823 5.97029L42.3664 5.63006L42 5.97029ZM38.9625 2.69922L39.3289 2.35899L38.9887 1.9926L38.6223 2.33282L38.9625 2.69922ZM38.1992 3.40802L37.859 3.04163L37.4926 3.38185L37.8328 3.74825L38.1992 3.40802ZM1 5.94922L40.0946 5.94922V4.94922L1 4.94922L1 5.94922ZM1.5 6.49089V5.44922H0.5V6.49089H1.5ZM40.0951 5.99089L1 5.99089L1 6.99089H40.0951V5.99089ZM39.7287 6.15066L37.8328 8.19233L38.5656 8.87278L40.4614 6.83111L39.7287 6.15066ZM37.859 8.89895L38.6223 9.60775L39.3028 8.87496L38.5394 8.16616L37.859 8.89895ZM39.3289 9.58158L42.3664 6.31051L41.6336 5.63006L38.5961 8.90113L39.3289 9.58158ZM42.3664 5.63006L39.3289 2.35899L38.5961 3.03944L41.6336 6.31051L42.3664 5.63006ZM38.6223 2.33282L37.859 3.04163L38.5394 3.77442L39.3028 3.06562L38.6223 2.33282ZM37.8328 3.74825L39.7282 5.78944L40.461 5.10899L38.5656 3.0678L37.8328 3.74825Z"
                                fill="white" class="group-hover:fill-orange-500 duration-500" />
                        </svg>
                    </span>
                </a>
                <a href=""
                    class="text-lg hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">News
                    & Alerts
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="11" viewBox="0 0 43 11" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M40.0946 5.44922L1 5.44922V6.49089L40.0951 6.49089L38.1992 8.53255L38.9625 9.24136L42 5.97029L38.9625 2.69922L38.1992 3.40802L40.0946 5.44922Z"
                                fill="white" />
                            <path
                                d="M1 5.44922L1 4.94922H0.5V5.44922H1ZM40.0946 5.44922V5.94922H41.2412L40.461 5.10899L40.0946 5.44922ZM1 6.49089H0.5V6.99089H1L1 6.49089ZM40.0951 6.49089L40.4614 6.83111L41.2417 5.99089H40.0951V6.49089ZM38.1992 8.53255L37.8328 8.19233L37.4926 8.55872L37.859 8.89895L38.1992 8.53255ZM38.9625 9.24136L38.6223 9.60775L38.9887 9.94798L39.3289 9.58158L38.9625 9.24136ZM42 5.97029L42.3664 6.31051L42.6823 5.97029L42.3664 5.63006L42 5.97029ZM38.9625 2.69922L39.3289 2.35899L38.9887 1.9926L38.6223 2.33282L38.9625 2.69922ZM38.1992 3.40802L37.859 3.04163L37.4926 3.38185L37.8328 3.74825L38.1992 3.40802ZM1 5.94922L40.0946 5.94922V4.94922L1 4.94922L1 5.94922ZM1.5 6.49089V5.44922H0.5V6.49089H1.5ZM40.0951 5.99089L1 5.99089L1 6.99089H40.0951V5.99089ZM39.7287 6.15066L37.8328 8.19233L38.5656 8.87278L40.4614 6.83111L39.7287 6.15066ZM37.859 8.89895L38.6223 9.60775L39.3028 8.87496L38.5394 8.16616L37.859 8.89895ZM39.3289 9.58158L42.3664 6.31051L41.6336 5.63006L38.5961 8.90113L39.3289 9.58158ZM42.3664 5.63006L39.3289 2.35899L38.5961 3.03944L41.6336 6.31051L42.3664 5.63006ZM38.6223 2.33282L37.859 3.04163L38.5394 3.77442L39.3028 3.06562L38.6223 2.33282ZM37.8328 3.74825L39.7282 5.78944L40.461 5.10899L38.5656 3.0678L37.8328 3.74825Z"
                                fill="white" class="group-hover:fill-orange-500 duration-500" />
                        </svg>
                    </span>
                </a>
                <a href=""
                    class="text-lg hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">Contact
                    Us
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="11" viewBox="0 0 43 11" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M40.0946 5.44922L1 5.44922V6.49089L40.0951 6.49089L38.1992 8.53255L38.9625 9.24136L42 5.97029L38.9625 2.69922L38.1992 3.40802L40.0946 5.44922Z"
                                fill="white" />
                            <path
                                d="M1 5.44922L1 4.94922H0.5V5.44922H1ZM40.0946 5.44922V5.94922H41.2412L40.461 5.10899L40.0946 5.44922ZM1 6.49089H0.5V6.99089H1L1 6.49089ZM40.0951 6.49089L40.4614 6.83111L41.2417 5.99089H40.0951V6.49089ZM38.1992 8.53255L37.8328 8.19233L37.4926 8.55872L37.859 8.89895L38.1992 8.53255ZM38.9625 9.24136L38.6223 9.60775L38.9887 9.94798L39.3289 9.58158L38.9625 9.24136ZM42 5.97029L42.3664 6.31051L42.6823 5.97029L42.3664 5.63006L42 5.97029ZM38.9625 2.69922L39.3289 2.35899L38.9887 1.9926L38.6223 2.33282L38.9625 2.69922ZM38.1992 3.40802L37.859 3.04163L37.4926 3.38185L37.8328 3.74825L38.1992 3.40802ZM1 5.94922L40.0946 5.94922V4.94922L1 4.94922L1 5.94922ZM1.5 6.49089V5.44922H0.5V6.49089H1.5ZM40.0951 5.99089L1 5.99089L1 6.99089H40.0951V5.99089ZM39.7287 6.15066L37.8328 8.19233L38.5656 8.87278L40.4614 6.83111L39.7287 6.15066ZM37.859 8.89895L38.6223 9.60775L39.3028 8.87496L38.5394 8.16616L37.859 8.89895ZM39.3289 9.58158L42.3664 6.31051L41.6336 5.63006L38.5961 8.90113L39.3289 9.58158ZM42.3664 5.63006L39.3289 2.35899L38.5961 3.03944L41.6336 6.31051L42.3664 5.63006ZM38.6223 2.33282L37.859 3.04163L38.5394 3.77442L39.3028 3.06562L38.6223 2.33282ZM37.8328 3.74825L39.7282 5.78944L40.461 5.10899L38.5656 3.0678L37.8328 3.74825Z"
                                fill="white" class="group-hover:fill-orange-500 duration-500" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="hidden md:flex justify-between items-center gap-10 border-b border-white text-white pb-4">
                <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">About</a>
                <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">I have been
                    scam</a>
                <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">Protection
                    against Scam </a>
                <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">Type of scam
                </a>
                <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">News & Alerts
                </a>
                <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">Contact Us
                </a>
            </div>

            <div
                class="text-white flex justify-between j items-center pt-2 space-y-5 md:space-y-0">

                <a href="" class="w-14 h-14">
                    <img src="/wp-content/themes/scamwatch/_/img/logo.png" alt="">
                </a>

                <div class="space-x-4 md:[&>*]:text-sm [&>*]:text-xs">
                    <span>Site designed by <a href=""
                            class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">
                            Skylark</a></span>
                    <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">Legal</a>
                    <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">Cookie
                        Policy</a>
                    <a href="" class="hover:text-orange-500 duration-500 after-effect relative after:bg-white">Privacy
                        Policy</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of the footer section -->


    <script src="/wp-content/themes/scamwatch/_/js/jquery.min.js"></script>
    <script src="/wp-content/themes/scamwatch/_/js/swiper.min.js"></script>
    <script src="/wp-content/themes/scamwatch/_/js/script.js"></script>
</body>

</html>