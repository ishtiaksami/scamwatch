<?php
// Functions kept in includes to allow quick commenting out and organised
// --------------------------------------------------------------------

// Gutenberg ACF custom blocks
// Main thing to note is custom blocks will not show unless added to underpants_allowed_block_types

require(get_template_directory() . '/_/inc/_gutenberg.php');

// rest api call
// require(get_template_directory() . '/_/inc/_rest_api_call.php');

// Register navs
require(get_template_directory() . '/_/inc/_register-navs.php');

require(get_template_directory() . '/_/inc/_custom-wpadmin.php');



function site_styles_scripts()
{
    $theme_url = get_template_directory_uri();

    wp_enqueue_style('swiper-bundle-style', $theme_url . '/_/css/swiper.min.css', array(), '');  
    wp_enqueue_style('theme-style', $theme_url . '/_/css/output.css', array(), filemtime(get_template_directory() . '/_/css/output.css'));

    // script
    wp_enqueue_script('swiper-bundle-script', $theme_url . '/_/js/swiper.min.js', array('jquery'), null, false);
    // wp_enqueue_script('select-2-script', $theme_url . '/_/js/select2.min.js', array(), null, true);
    wp_enqueue_script('custom-script', $theme_url . '/_/js/script.js', array(), filemtime(get_template_directory() . '/_/js/functions.js'), true);
}
add_action('wp_enqueue_scripts', 'site_styles_scripts');

//ksa
function ksa($cont)
{
    echo wp_kses($cont, '');
}


// Recursive function to build the menu array
function build_menu_array($menu_items, $parent_id = 0)
{
    $menu_array = array();

    foreach ($menu_items as $menu_item) {
        if ($menu_item->menu_item_parent == $parent_id) {
            $submenu = build_menu_array($menu_items, $menu_item->ID);

            if (is_page($menu_item->object_id)) {
                $active_class = 'active'; // Add the active class if the current page matches the menu item
            }

            $menu_array[] = array(
                'menu_id' => $menu_item->ID,
                'title' => $menu_item->title,
                'url' => $menu_item->url,
                'description' => $menu_item->description,
                'classes' => implode(" ",  $menu_item->classes),
                'submenu' => $submenu,
            );
        }
    }

    return $menu_array;
}

add_filter('wp_get_nav_menu_items', 'prefix_nav_menu_classes', 10, 3);

function prefix_nav_menu_classes($items, $menu, $args)
{
    _wp_menu_item_classes_by_context($items);
    return $items;
}