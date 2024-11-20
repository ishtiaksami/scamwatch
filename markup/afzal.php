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
    <header>
        <div class="bg-blue1 py-2  ">
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

        <div class="holder flex justify-between items-center py-6 0">

            <a href="">
                <h1 class="text-3xl uppercase font-bold">Scamwatch</h1>
            </a>

            <div class="flex items-center">

                <input type="text" placeholder="Search..."
                    class="px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:border-blue-700" />
                <button
                    class="px-4 py-2 bg-blue1 text-white rounded-r-md hover:bg-orange-500 duration-500 focus:outline-none">
                    Search
                </button>


            </div>
        </div>

        <nav class="bg-gray-200 py-4 px-4 ">
            <ul
                class="relative flex justify-center items-center gap-4 md:gap-10 [&>li>a]:text-blue-700 [&>li>a]:font-medium [&>li>a]:text-xs  lg:[&>li>a]:text-base [&>li>a]:uppercase">
                <li><a href="" class="after-effect relative hover:text-orange-500 duration-500">Home</a>
                </li>

                <!-- Mega Menu Parent -->
                <li class="group">
                    <a id="scam-link" href="#" class="after-effect relative  hover:text-orange-500 duration-500">Type of
                        Scam</a>

                    <!-- Mega Menu Dropdown -->
                    <div id="mega-menu"
                        class="bg-gray-100 absolute -left-4 top-5 w-full shadow-md py-10 opacity-0 pointer-events-none ease-in-out flex justify-center transition-all duration-500 z-10">

                        <div class="grid grid-cols-3 gap-8 max-w-[53rem] w-full px-4">
                            <!-- Column 1 -->
                            <div>
                                <h4 class="font-semibold mb-4">Online Scams</h4>
                                <ul class="space-y-2">
                                    <li><a href="#"
                                            class="text-gray-700 hover:text-orange-500 duration-500">Phishing</a>
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
                                    <li><a href="#" class="text-gray-700 hover:text-orange-500 duration-500">Stock
                                            Market
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

                <li class="[&>a]:hover:text-orange-500 [&>a]:duration-500 group"><a href=""
                        class="after-effect relative">I
                        have been scam</a></li>
                <li class="[&>a]:hover:text-orange-500 [&>a]:duration-500"><a href=""
                        class="after-effect relative">Protection against Scam</a></li>
                <li class="[&>a]:hover:text-orange-500 [&>a]:duration-500"><a href=""
                        class="after-effect relative">About</a>
                </li>
                <li class="[&>a]:hover:text-orange-500 [&>a]:duration-500"><a href=""
                        class="after-effect relative">More</a>
                </li>
            </ul>

        </nav>

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
        <img class=" hidden md:block absolute right-32 bottom-0 w-full max-w-[500px] h-[250px] object-cover"
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
                        View all news and alerts <i class="fas fa-arrow-right ml-3"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 mt-10">

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

            <ol class="accc-cards__list px-4 md:px-0">
                <li class="">
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <h3>stop</h3>
                        <p>Don’t give money or personal details or click on any links if you’re unsure. Say no, hang up,
                            delete.</p>
                    </a>
                </li>
            </ol>

        </div>
    </section>

    <section class="bg-soft-vanilla block-pad">
        <div class="holder">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
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