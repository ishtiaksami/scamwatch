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
                        class="bg-gray-100 absolute -left-4 top-5 w-screen shadow-md py-10 opacity-0 pointer-events-none ease-in-out flex justify-center transition-all duration-500 z-10">

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
        <img class=" hidden md:block absolute right-32 bottom-0 w-full max-w-[500px] h-[400px] object-cover"
            src="/wp-content/themes/scamwatch/_/assets/image/image.png" alt="">
    </section>
    <!-- ============================ End OF Image Banner Section ============================ -->

    <section class=" bg-blue-light">
        <div class=" lg:max-w-siteWidth mx-auto ">
            <div class=" grid lg:grid-cols-4">
                <div
                    class=" py-8 px-5  lg:px-4 cursor-pointer text-center w-full border-b md:border-b-0 md:border-r border-blue1 transition-all duration-300 ease-in-out hover:bg-blue1">
                    <a class=" font-semibold text-2xl leading-5 text-white " href="#">Get help if you have been
                        scammed</a>
                </div>
                <div
                    class=" py-8 px-5  lg:px-4 cursor-pointer text-center w-full border-b md:border-b-0  md:border-r border-blue1 transition-all duration-300 ease-in-out hover:bg-blue1">
                    <a class=" font-semibold text-2xl leading-5 text-white " href="#">check if something suspicious
                        is a
                        scam</a>
                </div>
                <div
                    class=" py-8 px-5  lg:px-4 cursor-pointer text-center w-full border-b md:border-b-0 md:border-r border-blue1 transition-all duration-300 ease-in-out hover:bg-blue1">
                    <a class=" font-semibold text-2xl leading-5 text-white " href="#">Report a scam you have
                        encountered</a>
                </div>
                <div
                    class="py-8 px-5 lg:px-4 cursor-pointer text-center w-full  transition-all duration-300 ease-in-out hover:bg-blue1">
                    <a class=" font-semibold text-2xl leading-5 text-white " href="#">Protect yourself against
                        scams</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ End OF Tab Link Section ============================ -->

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
                        <i class="fas fa-arrow-right text-white"></i>
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
                        <i class="fas fa-arrow-right text-white"></i>
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
                        <i class="fas fa-arrow-right text-white"></i>
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

    <section class="bg-soft-vanilla block-pad">
        <div class="holder">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                <a href="#"
                    class="relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">
                    <figure class="relative w-full">
                        <img class="max-h-[150px] w-auto mx-auto pb-6 "
                            src="https://cdn.pixabay.com/photo/2016/08/21/18/48/emoticon-1610518_1280.png" alt="">

                        <div class=" w-3/4 h-[1px] bg-red-500  mx-auto"></div>

                        <figcaption class="pt-6">
                            <h3>Is this a scam?</h3>
                            <p class=" mt-6">Warning signs to help you identify if you've encountered a scam.</p>
                        </figcaption>
                    </figure>

                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <i class="fas fa-arrow-right text-white"></i>
                    </div>
                </a>

                <a href="#"
                    class="relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">
                    <figure class="relative w-full">
                        <img class="max-h-[150px] w-auto mx-auto pb-6 "
                            src="https://cdn.pixabay.com/photo/2016/08/21/18/48/emoticon-1610518_1280.png" alt="">

                        <div class=" w-3/4 h-[1px] bg-red-500  mx-auto"></div>

                        <figcaption class="pt-6">
                            <h3>Is this a scam?</h3>
                            <p class=" mt-6">Warning signs to help you identify if you've encountered a scam.</p>
                        </figcaption>
                    </figure>

                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <i class="fas fa-arrow-right text-white"></i>
                    </div>
                </a>

                <a href="#"
                    class="relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">
                    <figure class="relative w-full">
                        <img class="max-h-[150px] w-auto mx-auto pb-6 "
                            src="https://cdn.pixabay.com/photo/2016/08/21/18/48/emoticon-1610518_1280.png" alt="">

                        <div class=" w-3/4 h-[1px] bg-red-500  mx-auto"></div>

                        <figcaption class="pt-6">
                            <h3>Is this a scam?</h3>
                            <p class=" mt-6">Warning signs to help you identify if you've encountered a scam.</p>
                        </figcaption>
                    </figure>

                    <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                        <i class="fas fa-arrow-right text-white"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- ============================ End Grid image Section ============================ -->

    <section class="bg-blue1 py-8 md:py-50">
        <div class="holder">
            <div class="flex lg:items-center justify-between gap-5 flex-col lg:flex-row">
                <div class="space-y-6 lg:shrink-0">
                    <h4 class="text-white text-4xl leading-none font-obviously font-normal ">Subscribe for our
                        newsletter</h4>

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
    <!-- ============================ End Grid image Section ============================ -->
    <!-- end of the footer section -->

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