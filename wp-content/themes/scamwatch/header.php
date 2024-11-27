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
    <header class=" bg-white">
        <?php require(get_template_directory() . '/layouts-modules/_top_menu.php'); ?>


        <div class="relative">
            <div class=" holder flex justify-between gap-8 items-center py-2 ">

                <?php if (is_front_page()) : ?>
                    <h1 class="siteLogo" title="<?php bloginfo('name'); ?>">
                        <a href="<?php echo home_url('/'); ?>" class="block w-14 h-14">


                            <?php
                            $logo = get_field('logo', 'options');
                            if ($logo) : ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                            <?php endif; ?>
                        </a>
                    </h1>
                <?php else : ?>
                    <h2 class="siteLogo" title="<?php bloginfo('name'); ?>">
                        <a href="<?php echo home_url('/'); ?>" class="block w-14 h-14">
                            <?php
                            $logo = get_field('logo', 'options');
                            if ($logo) : ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                            <?php endif; ?>
                        </a>
                    </h2>
                <?php endif; ?>


                <?php require(get_template_directory() . '/layouts-modules/_mega-menu.php'); ?>


                <div class="flex items-center gap-6">
                    <!-- Search Icon -->
                    <a href="#" class="searchBtn" id="openSearch">
                        <?php get_template_part('svgs/searchBtn') ?>
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
        </div>
    </header>
    <!-- end of the header section -->


    <?php if ((get_field('show_banner')) && !is_search()) : ?>

        <?php if (get_field('banner_height') == 'slider') : ?>
            <div>
                <h2>SLider Content Will Be Here</h2>
            </div>

        <?php else: ?>
            <section
                class="bg-bright-Orange relative py-[60px] md:py-[100px] flex flex-col justify-center" style="background-image:url('<?php echo esc_url(get_field('banner_image')); ?>'); background-size: auto 428px !important; background-position: bottom 0 right 0; background-repeat:no-repeat;">

                <div class="holder relative z-10 w-full">
                    <?php if ($banner_title = get_field('banner_title')) : ?>
                        <div class="max-w-[600px]">
                            <?php $banner_title = get_field('banner_title') ?>
                            <?php if ($is_front_page) : ?>
                                <h2 class="text-[64px] font-lato font-bold text-blue1 leading-[-0.48px]"><?php echo esc_html($banner_title); ?></h2>
                            <?php else : ?>
                                <h1 class="text-[64px] font-lato font-bold text-blue1 leading-[-0.48px]"><?php echo esc_html($banner_title); ?></h1>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    $link = get_field('banner_cta');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <div class="md:mt-16 mt-8 flex flex-wrap">

                            <a class="btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                        </div>
                </div>
            <?php endif; ?>
            </section>
        <?php endif; ?>


    <?php endif; ?>

    <div class="flex-auto">