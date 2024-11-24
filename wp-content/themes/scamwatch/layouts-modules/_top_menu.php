<div class="bg-blue1 py-2.5">
    <div class="holder">
        <!-- <ul
            class="flex justify-end items-center gap-4 md:gap-10 [&>li>a]:text-white [&>li>a]:font-medium [&>li>a]:text-sm [&>li>a]:tracking-normal">
            <li><a href="">News & Alerts</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Reports</a></li>
        </ul> -->

        <?php
        $defaults = array(
            'theme_location' => 'header_top_menu',
            'menu' => 'header_top_menu',
            'menu_class' => 'top--menu flex flex-wrap items-center lg:justify-end gap-8 lg:gap-42 [&>li>a]:text-white [&>li>a]:text-sm [&>li>a]:relative [&>li>a]:font-bold [&>li>a]:tracking-[0.0175rem] [&>li>a]:uppercase',
            'menu_id' => 'header_top_menu',
            'container' => 'ul'
        );
        wp_nav_menu($defaults);
        ?>
    </div>
</div>