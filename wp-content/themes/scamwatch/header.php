<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
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
                <!-- Search Icon -->
                <a href="#" class="searchBtn" id="openSearch">
                    <svg width="22" height="22" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0381 16.5L12.4965 12.9521M14.4591 8.21053C14.4591 9.99027 13.7521 11.6971 12.4937 12.9556C11.2352 14.2141 9.52835 14.9211 7.74861 14.9211C5.96887 14.9211 4.26202 14.2141 3.00355 12.9556C1.74509 11.6971 1.03809 9.99027 1.03809 8.21053C1.03809 6.43078 1.74509 4.72394 3.00355 3.46547C4.26202 2.207 5.96887 1.5 7.74861 1.5C9.52835 1.5 11.2352 2.207 12.4937 3.46547C13.7521 4.72394 14.4591 6.43078 14.4591 8.21053V8.21053Z"
                            stroke="#266df1" stroke-width="1.57895" stroke-linecap="round">
                        </path>
                    </svg>
                </a>
                <!-- Fullscreen Search Bar -->
                <div id="fullscreenSearch" class="fixed top-0 right-0 w-0 h-0 bg-blue1 bg-opacity-70 flex justify-center items-center z-50 overflow-hidden transition-all duration-500">
                    <div class="w-full max-w-3xl px-4">
                        <input
                            type="text"
                            placeholder="Search..."
                            class="w-full p-4 bg-white rounded-lg shadow-lg text-gray-800 text-lg focus:outline-none" />
                        <button id="closeSearch" class="absolute top-4 right-4 text-white text-4xl">&times;</button>
                    </div>
                </div>
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