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

    <section class="h-[528px] md:h-[700px] overflow-hidden relative flex flex-col justify-end">
        <div class="swiper bannerSlider w-full h-full absolute left-0 top-0">
            <div class="swiper-wrapper">

                <div class="swiper-slide relative">
                    <img class="w-full h-full object-cover absolute left-0 top-0 z-0"
                        src="https://bbcstudioprd.wpenginepowered.com/wp-content/uploads/2024/09/Avengers-Infinity-War-TC1-Stage-1-scaled.jpg"
                        alt="Events">

                    <div class="holder relative h-full flex flex-col justify-end">
                        <div class=" pb-20 md:pb-32">
                            <div class="max-w-[750px] ">
                                <h1
                                    class="text-white text-32 md:text-56 font-montserrat font-extrabold uppercase leading-[90%] tracking-[0.56px] ">
                                    Help to spot and avoid scams
                                </h1>
                            </div>
                            <div class="mt-8 flex flex-wrap">
                                <a class="btn" href="#">Check for scam warning signs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img class="w-full h-full object-cover absolute left-0 top-0 z-0"
                        src="https://bbcstudioprd.wpenginepowered.com/wp-content/uploads/2024/09/Avengers-Infinity-War-TC1-Stage-1-scaled.jpg"
                        alt="Events">

                    <div class="holder relative h-full flex flex-col justify-end">
                        <div class="pb-20 md:pb-32">
                            <div class="max-w-[750px] ">
                                <h1
                                    class="text-white text-32 md:text-56 font-montserrat font-extrabold uppercase leading-[90%] tracking-[0.56px] ">
                                    Know when to stop and check – stay scam safe.
                                </h1>
                            </div>
                            <div class="mt-8 flex flex-wrap ">
                                <a class="btn" href="#">Check for scam warning signs</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- swiper controller -->
            <div class="swiper-button-next after:content-none w-[70px] h-[70px] z-50 right-8 hidden md:block">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 53 53" fill="none">
                    <path
                        d="M29.3497 26.5013L19.1914 16.3429L20.7549 14.7794L32.4767 26.5013L20.7549 38.2231L19.1914 36.6596L29.3497 26.5013Z"
                        fill="white" />
                </svg>
            </div>

            <div class="swiper-button-prev after:content-none w-[70px] h-[70px] z-50 left-8 hidden md:block">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 53 53" fill="none">
                    <path
                        d="M23.6503 26.4987L33.8086 36.6571L32.2451 38.2206L20.5233 26.4987L32.2451 14.7769L33.8086 16.3404L23.6503 26.4987Z"
                        fill="white" />
                </svg>
            </div>

            <div class="absolute bottom-8 md:bottom-14 w-full hidden md:block">
                <div class="holder flex flex-col gap-4">
                    <div
                        class="bg-white/30 swiper-scrollbar !h-px !opacity-100 !relative !left-0 !w-full [&>.swiper-scrollbar-drag]:bg-white">
                    </div>
                    <div
                        class="relative swiper-pagination text-white text-sm tracking-[-0.14px] leading-none font-extrabold text-right">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ============================ End OF Banner Slider Section ============================ -->
    <section class=" bg-bright-Orange relative md:py-20 py-10">
        <div class="holder">
            <div class="max-w-[550px]">
                <h1 class="text-5xl font-bold text-blue1 leading-tight ">
                    Know when to stop and check – stay
                    scam safe.
                </h1>

            </div>
            <div class="md:mt-16 mt-8 flex flex-wrap">
                <a href="#" class="btn">Check for scam warning signs</a>
            </div>
        </div>
        <img class=" hidden md:hidden lg:block absolute right-32 bottom-0 w-full max-w-[500px] h-[250px] object-cover"
            src="https://images.pexels.com/photos/1181394/pexels-photo-1181394.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            alt="">
    </section>
    <!-- ============================ End OF Image Banner Section ============================ -->

    <section class="bg-blue-light">
        <div class="lg:max-w-siteWidth mx-auto">
            <div
                class=" flex items-center justify-center flex-col md:flex-row  [&>a]:font-montserrat [&>a]:font-semibold [&>a]:text-2xl [&>a]:leading-22 [&>a]:tracking-tight [&>a]:text-white [&>a]:py-8 [&>a]:px-5  [&>a]:lg:px-4 [&>a]:cursor-pointer [&>a]:text-center divide-y-[1px]  md:divide-x-[1px] divide-blue1 [&>a:hover]:bg-blue1 [&>a]:transition [&>a]:duration-300">

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
    <!-- ============================ End OF Page Link ============================  -->
    <section class="bg-bright-Orange md:py-20 py-10">
        <div class="holder">
            <div class="flex justify-between items-center">
                <div>
                    <a href="#" class="text-blue1 underline">Home</a>
                    <span class="text-blue1"> / </span>
                    <a href="#" class="text-blue1 underline">About us</a>
                </div>
            </div>
            <div class=" mt-5 md:mt-10">
                <h1 class=" text-3xl md:text-5xl font-bold text-blue1">News and alerts</h1>
            </div>
        </div>
    </section>
    <!-- ============================ End OF  Banner Section ============================ -->

    <section class=" bg-soft-vanilla block-pad">
        <div class="holder">
            <div class=" flex items-center justify-between">
                <h1 class="text-3xl font-bold ">News and alerts</h1>

                <div class=" hidden md:flex">
                    <a href="#" class="btn flex flex-wrap items-center">
                        View all news and alerts
                        <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#fff" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 mt-10">

                <a href="#"
                    class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                    <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                    <div class=" space-y-4">
                        <p>Criminals are emailing people and falsely claiming they have hacked into their
                            computers or webcams and have access to compromising images and videos of them.</p>
                        <p>They include personal details such as birth dates and addresses in the emails to
                            intimidate people into sending them money.</p>
                    </div>
                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#fff" />
                        </svg>
                    </div>
                </a>

                <a href="#"
                    class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                    <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                    <div class=" space-y-4">
                        <p>Criminals are emailing people and falsely claiming they have hacked into their
                            computers or webcams and have access to compromising images and videos of them.</p>
                        <p>They include personal details such as birth dates and addresses in the emails to
                            intimidate people into sending them money.</p>
                    </div>
                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#fff" />
                        </svg>
                    </div>
                </a>

                <a href="#"
                    class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                    <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                    <div class=" space-y-4">
                        <p>Criminals are emailing people and falsely claiming they have hacked into their
                            computers or webcams and have access to compromising images and videos of them.</p>
                        <p>They include personal details such as birth dates and addresses in the emails to
                            intimidate people into sending them money.</p>
                    </div>
                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#fff" />
                        </svg>
                    </div>
                </a>

            </div>

            <div class=" text-center flex flex-wrap items-center md:hidden mt-10">
                <a href="#" class="btn">
                    View all news and alerts <i class="fas fa-arrow-right ml-3"></i>
                </a>
            </div>
        </div>

    </section>
    <!-- ============================ End News Letter Grid Section ============================ -->

    <section class="block-pad">
        <div class="holder">

            <ol class="accc-cards__list px-4 lg:px-8 [&>li]:relative [&>li>a]:bg-white [&>li>a]:text-blue1 [&>li>a]:block [&>li>a]:border-b-0 [&>li>a]:border-l-8 [&>li>a]:border-gray5 [&>li>a]:pt-6 [&>li>a]:pr-6 [&>li>a]:pb-10 [&>li>a]:pl-14 [&>li>a>h3]:text-3xl [&>li>a>h3]:font-bold [&>li>a>h3]:leading-normal [&>li>a>h3]:tracking-normal [&>li>a>h3]:mb-4 ">
                <li>
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
            </ol>

        </div>
    </section>
    
    <!-- ============================ End accc-cards list block ============================ -->

    <section class="bg-soft-vanilla block-pad">
        <div class="holder">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10">
                <a href="#"
                    class="relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">
                    <figure class="relative w-full">
                        <img class="max-h-[150px] w-auto mx-auto pb-6 "
                            src="https://cdn.pixabay.com/photo/2016/08/21/18/48/emoticon-1610518_1280.png" alt="">

                        <figcaption class="pt-6">
                            <h3>Is this a scam?</h3>
                            <p class=" mt-6">Warning signs to help you identify if you've encountered a scam.</p>
                        </figcaption>
                    </figure>

                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#fff" />
                        </svg>
                    </div>

                    <div class=" absolute top-[48%] left-0 w-full h-[1px] bg-gray1 "></div>
                </a>

                <a href="#"
                    class="relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">
                    <figure class="relative w-full">
                        <img class="max-h-[150px] w-auto mx-auto pb-6 "
                            src="https://cdn.pixabay.com/photo/2016/08/21/18/48/emoticon-1610518_1280.png" alt="">

                        <figcaption class="pt-6">
                            <h3>Is this a scam?</h3>
                            <p class=" mt-6">Warning signs to help you identify if you've encountered a scam.</p>
                        </figcaption>
                    </figure>

                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#fff" />
                        </svg>
                    </div>

                    <div class=" absolute top-[48%] left-0 w-full h-[1px] bg-gray1 "></div>
                </a>

                <a href="#"
                    class="relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">
                    <figure class="relative w-full">
                        <img class="max-h-[150px] w-auto mx-auto pb-6 "
                            src="https://cdn.pixabay.com/photo/2016/08/21/18/48/emoticon-1610518_1280.png" alt="">

                        <figcaption class="pt-6">
                            <h3>Is this a scam?</h3>
                            <p class=" mt-6">Warning signs to help you identify if you've encountered a scam.</p>
                        </figcaption>
                    </figure>

                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                                fill="#fff" />
                        </svg>
                    </div>

                    <div class=" absolute top-[48%] left-0 w-full h-[1px] bg-gray1 "></div>
                </a>

            </div>
        </div>
    </section>
    <!-- ============================ End Grid image Section ============================ -->
    <footer class="bg-blue1 py-8 md:py-50 ">
        <div class="holder">
            <div class="md:hidden border-b-2 border-white text-white pb-10 space-y-4">

                <a href=""
                    class="text-xl hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">About

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
                    class="text-xl hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">I
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
                    class="text-xl hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">Protection
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
                    class="text-xl hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">Type
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
                    class="text-xl hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">News
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
                    class="text-xl hover:text-orange-500 duration-500 flex justify-between items-center gap-10 group">Contact
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

            <div class="hidden md:flex justify-between items-center gap-10 border-b border-white text-white pb-10">
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
                class="text-white flex md:flex-row flex-col justify-between j items-center pt-6 space-y-5 md:space-y-0">

                <a href="">
                    <h1 class="text-3xl uppercase font-bold">Scamwatch</h1>
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
    <script src="/wp-content/themes/scamwatch/_/js/jquery.min.js"></script>
    <script src="/wp-content/themes/scamwatch/_/js/swiper.min.js"></script>
    <script src="/wp-content/themes/scamwatch/_/js/script.js"></script>
</body>

</html>