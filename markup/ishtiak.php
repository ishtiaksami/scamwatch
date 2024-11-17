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
    <header>
        <div class="bg-blue1 py-1  ">
            <div class="holder">
                <ul
                    class="flex justify-end items-center gap-4 md:gap-10 [&>li>a]:text-white [&>li>a]:font-medium [&>li>a]:text-sm ">
                    <li><a href="">News & Alerts</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Reports</a></li>
                </ul>
            </div>
        </div>

        <div class="holder flex justify-between items-center py-1">
            <a href="" class="w-12 h-12">
                <img src="/wp-content/themes/scamwatch/_/img/logo.png" alt="">
            </a>

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
                        <ul class="flex flex-col gap-4 px-6 py-4 mt-10">
                            <li><a href="#" class="hover:text-orange-500 duration-500">Home</a></li>
                            <li class="relative">
                                <button id="scamToggle" class="flex items-center justify-between w-full hover:text-orange-500 duration-500">
                                    Type of Scam
                                    <svg class="w-4 h-4 ml-2 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

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

        <nav class="md:block hidden bg-gray-200 py-2 px-4 ">
            <ul
                class="relative flex justify-center items-center gap-4 md:gap-10 [&>li>a]:text-blue-700 [&>li>a]:font-medium [&>li>a]:text-xs  lg:[&>li>a]:text-base">
                <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">Home</a>
                </li>

                <!-- Mega Menu Parent -->
                <li class="group">
                    <a id="scam-link" href="#" class="after-effect relative  hover:text-orange-500 duration-500">Type of Scam</a>

                    <!-- Mega Menu Dropdown -->
                    <div id="mega-menu"
                        class="bg-gray-100 absolute -left-4 top-4 w-screen shadow-md py-10 opacity-0 pointer-events-none ease-in-out flex justify-center transition-all duration-500 z-10">

                        <div class="grid grid-cols-3 gap-8 max-w-[53rem] w-full px-4">
                            <!-- Column 1 -->
                            <div>
                                <h4 class="font-semibold mb-4">Online Scams</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" class=hover:text-orange-500 duration-500">Phishing</a>
                                    </li>
                                    <li><a href="#" class="text-gray-700 hover:text-orange-500 duration-500">Fake
                                            E-commerce</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-orange-500 duration-500">Email
                                            Scams</a></li>
                                </ul>
                            </div>
                            <!-- Column 2 -->
                            <div>
                                <h4 class="font-semibold mb-4">Investment Scams</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-700 hover:text-orange-500 duration-500">Ponzi
                                            Schemes</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-orange-500 duration-500">Crypto
                                            Scams</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-orange-500 duration-500">Stock Market
                                            Scams</a></li>
                                </ul>
                            </div>
                            <!-- Column 3 -->
                            <div>
                                <h4 class="font-semibold mb-4">Social Media Scams</h4>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-700 hover:text-orange-500 duration-500">Fake
                                            Profiles</a></li>
                                    <li><a href="#" class="text-gray-700 hover:text-orange-500 duration-500">Romance
                                            Scams</a></li>
                                    <li><a href="#"
                                            class="text-gray-700 hover:text-orange-500 duration-500">Impersonation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </li>

                <li class="[&>a]:hover:text-orange-500 [&>a]:duration-500 group"><a href="" class="after-effect relative">I
                        have been scam</a></li>
                <li class="[&>a]:hover:text-orange-500 [&>a]:duration-500"><a href=""
                        class="after-effect relative">Protection against Scam</a></li>
                <li class="[&>a]:hover:text-orange-500 [&>a]:duration-500"><a href="" class="after-effect relative">About</a>
                </li>
                <li class="[&>a]:hover:text-orange-500 [&>a]:duration-500"><a href="" class="after-effect relative">More</a>
                </li>
            </ul>

        </nav>

    </header>
    <!-- end of the header section -->

    <!-- start of the Intro section -->
    <section class="bg-white py-8 md:py-50">
        <div class="holder">
            <div class="space-y-5 text-center max-w-5xl mx-auto">
                <h2 class="">Type of scam</h2>
                <div class="space-y-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fugiat numquam asperiores, distinctio autem, facilis eos quaerat cum odio tempore quibusdam explicabo hic eaque iste, cumque nam quia porro. Neque eaque necessitatibus praesentium cum ex exercitationem, voluptatem sit labore ut. Consequuntur alias veritatis amet, quia officia obcaecati autem quae iste?</p>
                </div>
            </div>

        </div>
    </section>
    <!-- end of the Intro section -->

    <!-- start of the cardSlider section -->
    <section
        class="block-pad overflow-hidden">
        <div class="holder">
            <div
                class="flex items-center pb-8 [&>p]:text-white [&>p]:text-base [&>p]:leading-[150%] [&>p]:font-normal">
                <div class="fade-up-scroll space-y-4">
                    <h2 class="font-bold leading-none uppercase">
                        Explore
                    </h2>
                </div>

                <div class="fade-up-scroll hidden md:flex items-center gap-8 ml-auto">
                    <div class="promo-prev">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 12 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.9718 18.9411C11.2354 18.6773 11.3835 18.3197 11.3835 17.9468C11.3835 17.5739 11.2354 17.2163 10.9718 16.9526L4.01088 9.99167L10.9718 3.03074C11.228 2.76551 11.3697 2.41029 11.3665 2.04158C11.3633 1.67286 11.2154 1.32016 10.9547 1.05943C10.694 0.798698 10.3413 0.650806 9.97254 0.647602C9.60382 0.644398 9.2486 0.78614 8.98338 1.0423L1.02822 8.99746C0.764588 9.26117 0.616488 9.61879 0.616488 9.99167C0.616488 10.3646 0.764588 10.7222 1.02822 10.9859L8.98338 18.9411C9.24709 19.2047 9.60471 19.3528 9.9776 19.3528C10.3505 19.3528 10.7081 19.2047 10.9718 18.9411Z"
                                fill="#0A1425" />
                        </svg>
                    </div>
                    <div class="promo-next ">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 12 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.02819 1.05919C0.764555 1.3229 0.616455 1.68052 0.616455 2.05341C0.616455 2.4263 0.764555 2.78392 1.02819 3.04763L7.98912 10.0086L1.02819 16.9695C0.772026 17.2347 0.630284 17.59 0.633488 17.9587C0.636692 18.3274 0.784586 18.6801 1.04532 18.9408C1.30605 19.2015 1.65875 19.3494 2.02747 19.3526C2.39618 19.3558 2.7514 19.2141 3.01662 18.9579L10.9718 11.0028C11.2354 10.7391 11.3835 10.3815 11.3835 10.0086C11.3835 9.63568 11.2354 9.27806 10.9718 9.01435L3.01662 1.05919C2.75291 0.795561 2.39529 0.647461 2.0224 0.647461C1.64952 0.647461 1.2919 0.795561 1.02819 1.05919Z"
                                fill="#0A1425" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="swiper cardSlider !overflow-visible">
                <div class="swiper-wrapper flex gap-5">
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-custom-gradient before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/1097456/pexels-photo-1097456.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="EAT">

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-custom-gradient before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/333850/pexels-photo-333850.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="EAT">

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-custom-gradient before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/1480690/pexels-photo-1480690.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="EAT">

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-custom-gradient before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/33930/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="EAT">

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="h-[350px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-custom-gradient before:z-10 group hover:before:bg-black/50 before:transition-all">
                            <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="https://images.pexels.com/photos/696407/pexels-photo-696407.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="EAT">

                            <h3 class="relative z-20 text-white mb-3 uppercase">Demo</h3>

                            <div class="relative z-20 [&>*]:text-white [&>*]:font-light [&>*]:font-brother max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis, quisquam.</p>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
            <div class="md:hidden flex items-center justify-center pt-4 gap-5 ml-auto">
                <div class="promo-prev bg-white rounded-full p-[15px]">
                    <svg
                        width="11"
                        height="11"
                        viewBox="0 0 12 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.9718 18.9411C11.2354 18.6773 11.3835 18.3197 11.3835 17.9468C11.3835 17.5739 11.2354 17.2163 10.9718 16.9526L4.01088 9.99167L10.9718 3.03074C11.228 2.76551 11.3697 2.41029 11.3665 2.04158C11.3633 1.67286 11.2154 1.32016 10.9547 1.05943C10.694 0.798698 10.3413 0.650806 9.97254 0.647602C9.60382 0.644398 9.2486 0.78614 8.98338 1.0423L1.02822 8.99746C0.764588 9.26117 0.616488 9.61879 0.616488 9.99167C0.616488 10.3646 0.764588 10.7222 1.02822 10.9859L8.98338 18.9411C9.24709 19.2047 9.60471 19.3528 9.9776 19.3528C10.3505 19.3528 10.7081 19.2047 10.9718 18.9411Z"
                            fill="#0A1425" />
                    </svg>
                </div>
                <div class="promo-next bg-white rounded-full p-[15px]">
                    <svg
                        width="11"
                        height="11"
                        viewBox="0 0 12 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.02819 1.05919C0.764555 1.3229 0.616455 1.68052 0.616455 2.05341C0.616455 2.4263 0.764555 2.78392 1.02819 3.04763L7.98912 10.0086L1.02819 16.9695C0.772026 17.2347 0.630284 17.59 0.633488 17.9587C0.636692 18.3274 0.784586 18.6801 1.04532 18.9408C1.30605 19.2015 1.65875 19.3494 2.02747 19.3526C2.39618 19.3558 2.7514 19.2141 3.01662 18.9579L10.9718 11.0028C11.2354 10.7391 11.3835 10.3815 11.3835 10.0086C11.3835 9.63568 11.2354 9.27806 10.9718 9.01435L3.01662 1.05919C2.75291 0.795561 2.39529 0.647461 2.0224 0.647461C1.64952 0.647461 1.2919 0.795561 1.02819 1.05919Z"
                            fill="#0A1425" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- end of the cardSlider section -->

    <!-- start of the Text & media section -->
    <section class="block-pad">
        <div class="holder">
            <div class="grid lg:grid-cols-5 items-center lg:gap-14 gap-8">


                <div class="lg:col-span-3 lg:order-2">
                    <img src="https://images.pexels.com/photos/1097456/pexels-photo-1097456.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Empowering Local Talent" class="w-full">
                </div>

                <div class="lg:col-span-2 space-y-4 lg:space-y-6 order-2 lg:order-1">
                    <h2 class="text-black relative pb-6 after:content-[''] after:absolute after:bg-[skyblue] after:w-[74px] after:h-[1px] after:bottom-[0] after:left-[0]">
                        Sustainability</h2>

                    <div class="[&amp;>*]:text-xl [&amp;>*]:leading-[160%]">
                        <p>Lorem ipsum dolor sit amet consectetur. Quisque et viverra ultrices nulla. Bibendum proin
                            vulputate velit adipiscing commodo justo amet.</p>
                    </div>


                    <div class="gap-30 flex flex-wrap items-center pt-10">
                        <a href="#" class="btn group flex items-center gap-3">
                            Find out more
                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="10" viewBox="0 0 41 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M39.0946 4.47949L0 4.47949V5.52116L39.0951 5.52116L37.1992 7.56283L37.9625 8.27163L41 5.00056L37.9625 1.72949L37.1992 2.4383L39.0946 4.47949Z" fill="white"></path>
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

            <h2 class="text-black relative pb-6">FAQ</h2>

            <div class="space-y-6">
                <div class="accordion-item border border-gray-300 rounded-md mb-2">
                    <a class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none">
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
                <div class="accordion-item border border-gray-300 rounded-md mb-2">
                    <a class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none">
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
                <div class="accordion-item border border-gray-300 rounded-md mb-2">
                    <a class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none">
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
                <div class="accordion-item border border-gray-300 rounded-md mb-2">
                    <a class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none">
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
        </div>
    </section>
    <!-- end of the Accordion section -->


    <!-- Start of the Tab section -->
    <section class="block-pad">
        <div class="holder">
            <div class="tab-container">
                <!-- Tab Navigation -->
                <div class="tab-nav flex border-b border-gray-300">
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent" data-tab="tab1">Scam Alerts</button>
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent" data-tab="tab2">Tips & Guides</button>
                    <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent" data-tab="tab3">Report Scams</button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content mt-4">
                    <div id="tab1" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <h2 class="text-xl font-semibold text-red-600">Latest Scam Alerts</h2>
                        <p class="mt-2 text-gray-700">Stay updated on the latest scams and how to avoid them. Protect yourself from fraudsters.</p>
                    </div>
                    <div id="tab2" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <h2 class="text-xl font-semibold text-red-600">Safety Tips & Guides</h2>
                        <p class="mt-2 text-gray-700">Learn essential tips and read guides to safeguard your personal and financial information.</p>
                    </div>
                    <div id="tab3" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <h2 class="text-xl font-semibold text-red-600">Report a Scam</h2>
                        <p class="mt-2 text-gray-700">Help us fight scams by reporting any suspicious activity you encounter.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end of the Tab section -->


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
                </div><!-- form wrap -->
            </div>
        </div>
    </section>
    <!-- end of the footer section -->

    <!-- Start of the footer section -->
    <footer class="bg-blue1 py-8 md:py-50 ">
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

            <div class="hidden md:flex justify-between items-center gap-10 border-b border-white text-white pb-6">
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
                class="text-white flex justify-between j items-center pt-3 space-y-5 md:space-y-0">

                <a href="" class="w-14 h-14">
                    <img src="/wp-content/themes/scamwatch/_/img/logo.png" alt="">
                </a>

                <div class="space-x-4 md:[&>*]:text-base [&>*]:text-xs font-medium">
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