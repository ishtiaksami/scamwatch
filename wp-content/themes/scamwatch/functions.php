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


function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/wp-content/themes/scamwatch/_/img/logo.jpg');
            background-size: contain;
            height: 50px;
            width: 250px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

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
                'classes' => implode(" ", $menu_item->classes),
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


function load_posts()
{
    check_ajax_referer('ajax-nonce', 'nonce');

    $paged = $_POST['page'];
    $category = $_POST['category'];
    $args = [
        'post_type' => 'post',
        'paged' => $paged,
        'post_status' => 'publish',
        'posts_per_page' => 9,
    ];

    if ($category != 'all') {
        $args['cat'] = intval($category);  // Ensure the category is an integer
    }

    $query = new WP_Query($args);

    ob_start(); // Start output buffering

    if ($query->have_posts()) {
        while ($query->have_posts()):
            $query->the_post();
            get_template_part('layout-modules/_news-list-item');
        endwhile;
    }

    wp_reset_postdata();

    $response = ob_get_clean(); // Get the buffered output and clean the buffer

    echo $response;
    die();
}
