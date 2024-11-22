<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/scamwatch/_/css/output.css">
    <link rel="stylesheet" href="/wp-content/themes/scamwatch/_/css/swiper.min.css">
    <title>All Block | Scamwatch</title>
</head>

<body>

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
                <ul
                    class="flex justify-center items-center gap-4 md:gap-8 xl:gap-10 [&>li>a]:text-blue1 [&>li>a]:font-medium [&>li>a]:text-xs xl:[&>li>a]:text-base [&>li>a]:uppercase [&>li>a]:tracking-normal">
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">Home</a></li>
                    <!-- Mega Menu Parent -->
                    <li>
                        <a id="scam-link" href="#" class="after-effect relative hover:text-orange-500 duration-500">Type
                            of Scam</a>
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
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">I have been scam</a>
                    </li>
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">Protection against
                            Scam</a></li>
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">About</a></li>
                    <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">More</a></li>
                </ul>
            </nav>

            <div class="flex items-center gap-6">
                <!-- Search Icon -->
                <a href="#" class="searchBtn" id="openSearch">
                    <svg width="22" height="22" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.0381 16.5L12.4965 12.9521M14.4591 8.21053C14.4591 9.99027 13.7521 11.6971 12.4937 12.9556C11.2352 14.2141 9.52835 14.9211 7.74861 14.9211C5.96887 14.9211 4.26202 14.2141 3.00355 12.9556C1.74509 11.6971 1.03809 9.99027 1.03809 8.21053C1.03809 6.43078 1.74509 4.72394 3.00355 3.46547C4.26202 2.207 5.96887 1.5 7.74861 1.5C9.52835 1.5 11.2352 2.207 12.4937 3.46547C13.7521 4.72394 14.4591 6.43078 14.4591 8.21053V8.21053Z"
                            stroke="#266df1" stroke-width="1.57895" stroke-linecap="round">
                        </path>
                    </svg>
                </a>
                <!-- Fullscreen Search Bar -->
                <div id="fullscreenSearch"
                    class="fixed top-0 right-0 w-0 h-0 bg-blue1 bg-opacity-70 flex justify-center items-center z-50 overflow-hidden transition-all duration-500">
                    <div class="w-full max-w-3xl px-4">
                        <input type="text" placeholder="Search..."
                            class="w-full p-4 bg-white rounded-lg shadow-lg text-gray-800 text-lg focus:outline-none" />
                        <button id="closeSearch" class="absolute top-4 right-4 text-white text-4xl">&times;</button>
                    </div>
                </div>
                <nav class="md:hidden block ">
                    <div class="flex justify-between items-center max-w-7xl mx-auto">
                        <!-- Hamburger Icon (Mobile) -->
                        <div class="lg:hidden flex items-center">
                            <button onclick="toggleMenu()" class="outline-none mobile-menu-button relative">
                                <span id="line1"
                                    class="block w-6 h-0.5 bg-blue1 transition-all duration-500 ease-in-out"></span>
                                <span id="line2"
                                    class="block w-6 h-0.5 bg-blue1 transition-all duration-500 ease-in-out mt-1.5"></span>
                                <span id="line3"
                                    class="block w-6 h-0.5 bg-blue1 transition-all duration-500 ease-in-out mt-1.5"></span>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu (Slide in from right) -->
                    <div id="mobile-menu"
                        class="fixed top-0 right-0 h-full w-full bg-gray-200 shadow-lg transform translate-x-full transition-transform duration-500 z-50">
                        <!-- Close Button -->
                        <button onclick="toggleMenu()" class="absolute top-4 right-4">
                            <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <!-- Mobile Menu Items -->
                        <ul
                            class="flex flex-col gap-4 px-6 py-4 mt-10 [&>li>a]:tracking-normal [&>li>a]:upperrcase [&>li>a]:font-semibold ">
                            <li><a href="#" class="hover:text-orange-500 duration-500">Home</a></li>
                            <li class="relative">
                                <a href="#" id="scamToggle"
                                    class="flex items-center justify-between w-full hover:text-orange-500 duration-500">
                                    Type of Scam
                                    <svg class="w-4 h-4 ml-2 text-blue-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>

                                <!-- Mega Menu Content (Sub-menu) -->
                                <div id="megaMenuContent" class="overflow-hidden transition-all duration-500 max-h-0">
                                    <a href="#"
                                        class="block text-gray-700 hover:text-orange-500 duration-500 py-2">Phishing</a>
                                    <a href="#" class="block text-gray-700 hover:text-orange-500 duration-500 py-2">Fake
                                        E-commerce</a>
                                    <a href="#"
                                        class="block text-gray-700 hover:text-orange-500 duration-500 py-2">Email
                                        Scams</a>
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

    <section class="bg-center bg-no-repeat bg-cover h-[70vh] relative flex justify-center items-center"
        style="background-image: url(https://cdn.pixabay.com/photo/2022/01/07/15/49/scam-6922102_1280.png);">
        <div class=" bg-black bg-opacity-40 absolute inset-0  left-0 top-0 w-full h-full"></div>
        <div class="holder relative z-10">
            <h2 class="text-white text-center max-w-[600px]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, porro.</h2>
        </div>
    </section>
    <!-- End of banner block -->

    <section class="bg-blue-light">
        <div class="lg:max-w-siteWidth mx-auto">
            <div
                class=" flex flex-col md:flex-row [&>a]:p-8 [&>a]:text-xl [&>a]:font-semibold [&>a]:tracking-[0.2px] [&>a]:leading-[22px] [&>a]:text-center [&>a]:text-white  [&>a]:cursor-pointer  divide-y-[1px] md:divide-y-0  md:divide-x-[1px] divide-blue1 [&>a:hover]:bg-blue1 [&>a]:transition [&>a]:duration-300 lg:[&>a]:flex-auto [&>a]:max-w-full">

                <a href="#">Get help if you have been
                    scammed</a>
                <a href="#">Get help if you have been
                    scammed</a>
                <a href="#">Get help if you have been
                    scammed</a>
                <a href="#">Get help if you have been
                    scammed</a>

            </div>
        </div>
    </section>
    <!-- End of menu link block -->

    <section class="block-pad ">
        <div class="holder">
            <div class="grid grid-cols-1 lg:grid-cols-8 lg:gap-16 gap-8">
                <div class="lg:col-span-4 md:order-1 space-y-5 ">
                    <p class="uppercase text-base leading-22 tracking-1.5">win Cash Prizes & Rewards!</p>
                    <h2 class="text-blue1 mt-5">Play and learn to enhance your personal scams resilience!</h2>
                    <div class="space-y-4">
                        <p>Play #XiamTheScams from 24 Oct 2024 - 22 Jan 2025. Boost anti-scam skills in this life
                            simulation. Make wise choices, avoid scams, and maximise well-being!</p>
                    </div>
                    <a href="#" class="btn flex items-center">
                        Play now!
                        <svg width="2rem" height="1rem" id="root" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#266df1" />
                        </svg>
                    </a>
                </div>

                <div class="lg:col-span-4 space-y-4 lg:space-y-6 order-1">
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="object-cover w-full h-full"
                            src="https://images.pexels.com/photos/7111619/pexels-photo-7111619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    End text media block -->
    <section class=" block-pad bg-gray1">
        <div class="holder">
            <p class="text-center uppercase text-base leading-22 tracking-1.5">get scam protection</p>
            <h2 class="text-center text-blue1 mt-4">Stay safe with the enhanced ScamShield app</h2>

            <div class="grid lg:grid-cols-3 gap-4 place-items-center text-center md:text-start pt-14">
                <div class="space-y-6 max-w-[325px]">
                    <h3>Check for scams</h3>
                    <p>Know if a suspicious message, link, or number is likely a scam </p>
                </div>
                <div class="space-y-6 max-w-[325px]">
                    <h3>Check for scams</h3>
                    <p>Know if a suspicious message, link, or number is likely a scam </p>
                </div>
                <div class="space-y-6 max-w-[325px]">
                    <h3>Check for scams</h3>
                    <p>Know if a suspicious message, link, or number is likely a scam </p>
                </div>
            </div>

            <a href="#" class="btn flex items-center justify-center pt-14">
                download now
                <svg width="2rem" height="1rem" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                        fill="#266df1" />
                </svg>
            </a>
        </div>
    </section>
    <!-- End download block-->
    <section class="block-pad  ">
        <div class="holder">
            <div class="grid grid-cols-1 lg:grid-cols-8  lg:gap-16 gap-8">
                <div class="lg:col-span-4 md:order-1 space-y-5">
                    <p class="uppercase text-base leading-22 tracking-1.5">Unsure if it's a scam?</p>
                    <h2 class="text-blue1 mt-5">Call and check with the ScamShield Helpline: 1799</h2>
                    <div class="space-y-4">
                        <p>Available 24/7, Monday to Sunday</p>
                    </div>
                    <a href="#" class="btn flex items-center">
                        Play Now!
                        <svg width="2rem" height="1rem" id="root" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#266df1" />
                        </svg>
                    </a>
                </div>

                <div class="lg:col-span-4 space-y-4 lg:space-y-6">
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="object-cover w-full h-full"
                            src="https://images.pexels.com/photos/7111619/pexels-photo-7111619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    End text media block -->
    <section class="block-pad bg-gray1">
        <div class="holder">
            <div class="grid grid-cols-1 lg:grid-cols-8  lg:gap-16 gap-8">
                <div class="lg:col-span-4 md:order-1 space-y-5 ">
                    <h2 class="text-blue1">Scams Bulletin</h2>
                    <div class="space-y-4">
                        <p>Learn about the latest scam trends from the Police's Monthly Scams Bulletin.</p>
                    </div>
                    <a href="#" class="btn flex items-center">
                        Read Now
                        <svg width="2rem" height="1rem" id="root" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#266df1" />
                        </svg>
                    </a>
                </div>

                <div class="lg:col-span-4 space-y-4 lg:space-y-6 order-1">
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="object-cover w-full h-full"
                            src="https://images.pexels.com/photos/7111619/pexels-photo-7111619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    End text media block -->

    <section class="block-pad">
        <div class="holder">
            <div class="text-center space-y-4">
                <p class="uppercase text-base leading-22 tracking-1.5">stay informed</p>
                <h2 class="text-blue1">Scam threats</h2>
                <p>Singapore lost $651.8 million to scams in 2023 across 50,376 cases</p>
            </div>

            <div class="flex flex-col md:flex-row flex-wrap justify-center items-start gap-8 pt-12 w-full">
                <div
                    class="w-full sm:max-w-[90%] md:max-w-[40%] flex flex-col items-start gap-4 flex-grow flex-shrink-0 basis-0 self-start text-black2 rounded border border-solid border-gray2 bg-white shadow-shadow1 p-[calc(6rem/4)] cursor-pointer hover:bg-gray3">
                    <h3>Investment scam</h3>
                    <p> ~$50,700 lost per case</p>
                    <a href="#" class="btn !text-base">Learn more</a>
                </div>
                <div
                    class="w-full sm:max-w-[90%] md:max-w-[40%] flex flex-col items-start gap-4 flex-grow flex-shrink-0 basis-0 self-start text-black2 rounded border border-solid border-gray2 bg-white shadow-shadow1 p-[calc(6rem/4)] cursor-pointer hover:bg-gray3">
                    <h3>Investment scam</h3>
                    <p> ~$50,700 lost per case</p>
                    <a href="#" class="btn !text-base">Learn more</a>
                </div>
                <div
                    class="w-full sm:max-w-[90%] md:max-w-[40%] flex flex-col items-start gap-4 flex-grow flex-shrink-0 basis-0 self-start text-black2 rounded border border-solid border-gray2 bg-white shadow-shadow1 p-[calc(6rem/4)] cursor-pointer hover:bg-gray3">
                    <h3>Investment scam</h3>
                    <p> ~$50,700 lost per case</p>
                    <a href="#" class="btn !text-base">Learn more</a>
                </div>
                <div
                    class="w-full sm:max-w-[90%] md:max-w-[40%] flex flex-col items-start gap-4 flex-grow flex-shrink-0 basis-0 self-start text-black2 rounded border border-solid border-gray2 bg-white shadow-shadow1 p-[calc(6rem/4)] cursor-pointer hover:bg-gray3">
                    <h3>Investment scam</h3>
                    <p> ~$50,700 lost per case</p>
                    <a href="#" class="btn !text-base">Learn more</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End news block -->

    <section class="block-pad bg-gray1">
        <div class="holder">
            <div class="text-center space-y-4">
                <p class="uppercase text-base leading-22 tracking-1.5">Launch video</p>
                <h2 class="text-blue1">ScamShield Suite</h2>
            </div>

            <div class="flex justify-center items-center pt-4">

                <iframe allowfullscreen=""
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    frameborder="0" title="YouTube video player"
                    src="https://www.youtube.com/embed/bIAo--B3V3A?si=HbSi2zskpEC_07oR" height="360"
                    width="640"></iframe>

            </div>

        </div>
    </section>
    <!-- End video block block -->

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
    <footer class="bg-blue1 py-8 md:py-50 ">
        <div class="holder">
            <div class="md:hidden border-b-2 border-white text-white pb-4 space-y-3">

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

            <div class="text-white flex justify-between j items-center pt-2 space-y-5 md:space-y-0">

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