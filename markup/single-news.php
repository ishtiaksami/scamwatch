<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/wp-content/themes/scamwatch/_/css/swiper.min.css">
    <title>scamwatch</title>
    <link rel="stylesheet" href="/wp-content/themes/scamwatch/_/css/output.css">
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

    <section class="bg-bright-Orange md:py-20 py-10">
        <div class="holder">
            <div class="flex justify-between items-center">
                <div>
                    <a href="#" class="text-blue1 underline">Home</a>
                    <span class="text-blue1"> / </span>
                    <a href="#" class="text-blue1 underline">News and alerts</a>
                </div>
            </div>
            <div class=" mt-5 md:mt-10 max-w-[1100px]">
                <h2 class=" text-blue-700 text-64 ">Scam alert: Bulk email extortion scam</h2>
            </div>
        </div>
    </section>

    <section class=" block-pad">
        <div class="holder">

            <div class=" flex gap-8">
                <div class=" order-2 grow-0 shrink-0 basis-full max-w-full md:basis-2/3 md:max-w-2/3 space-y-6">

                    <div class="space-y-5">
                        <h3 class="text-3xl leading-normal">Background</h3>
                        <p>Criminals are emailing people and falsely claiming they have hacked into their computers or
                            webcams
                            and have access to compromising images and videos of them. These criminals are threatening
                            people by
                            saying they will release the images and videos unless they’re paid. They include personal
                            details
                            such as birth dates and addresses in the emails to intimidate people into sending them
                            money.
                        </p>
                        <p>These personal details are most likely from previous public data breaches. Anyone receiving
                            this
                            scam
                            email should know that there is no evidence that the criminals sending these emails really
                            do
                            have
                            access to people’s webcam or computer.</p>
                        <p>There have been hundreds of reports recently of people who have been targeted this way.</p>

                        <div
                            class="bg-gray4 relative pt-4 px-12 pb-16 rounded-t-none rounded-br-[0.5rem] rounded-bl-[0.5rem] shadow-custom1 overflow-hidden">

                            <div class="space-y-5 mt-6">
                                <h3>Find out more</h3>
                                <p>This scam is a type of <a class=" underline text-blue1" href="#">threat and extortion scam.</a></p>
                                <p>In these kinds of scams, criminals threaten you so you will pay them money. Speak
                                    up and report before handing over money to someone who threatens you</p>
                            </div>

                            <span
                                class=" border-t-[3rem] border-t-pink  absolute border-r-[3rem] border-transparent top-0 -left-[1.5rem] p-3"></span>

                        </div>
                    </div>
                </div>
                <aside class="basis-1/4 grow-0 shrink-0 max-w-1/4 order-3 hidden md:block">
                    <div
                        class=" bg-gray2 relative py-6 pr-6 pl-8 mb-10 shadow-custom3 border border-gray3 after:border-[0.5rem] after:border-blue1 after:absolute after:top-0 after:left-0 after:block after:h-full ">
                        <p>Subscribe for email alerts on the latest scams. </p>
                        <a class="btn !p-2 !text-sm !mt-5 inline-block" href="#">Subscribe to email alerts</a>
                    </div>
                </aside>
            </div>

        </div>
    </section>

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