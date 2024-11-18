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