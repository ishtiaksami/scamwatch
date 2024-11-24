<?php

function custom_breadcrumb()
{
    // Start the breadcrumb with a link to your homepage
    echo '<a class="text-white hover:underline" href="' . home_url() . '">Home</a>';

    // Check if we're not on the homepage
    if (!is_front_page()) {
        echo '<span> / </span>';

        if (is_single()) {
            // Get the post type
            $post_type = get_post_type();

            // Check if the post type is 'post' or a custom post type
            if ($post_type == 'post') {
                echo '<a class="text-white hover:underline" href="/news/">News</a>';
                echo '<span> / </span>';
            } else {
                // Get the custom post type object
                $post_type_object = get_post_type_object($post_type);
                if ($post_type_object) {
                    // Display the custom post type archive link
                    echo '<a class="text-white hover:underline" href="' . get_post_type_archive_link($post_type) . '">' . $post_type_object->labels->singular_name . '</a>';
                    echo '<span> / </span>';
                }
            }
            // Display the post title
            the_title();
        } elseif (is_category()) {
            // If we're on a category archive page, display the category name
            echo single_cat_title('', false);
        } elseif (is_page()) {
            // If we're on a static page
            global $post;
            if ($post->post_parent) {
                // If the page has a parent, get the parent pages
                $parent_id  = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_post($parent_id);
                    $breadcrumbs[] = '<a class="text-white hover:underline" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                    $parent_id  = $page->post_parent;
                }
                // Display the parent pages
                $breadcrumbs = array_reverse($breadcrumbs);
                foreach ($breadcrumbs as $crumb) {
                    echo $crumb . '<span> / </span>';
                }
            }
            // Display the current page title
            the_title();
        } elseif (is_search()) {
            // If we're on a search results page
            echo 'Search results for "' . get_search_query() . '"';
        } elseif (is_tag()) {
            // If we're on a tag archive page
            echo 'Tag: ' . single_tag_title('', false);
        } elseif (is_author()) {
            // If we're on an author archive page
            global $author;
            $userdata = get_userdata($author);
            echo 'Author: ' . $userdata->display_name;
        } elseif (is_404()) {
            // If we're on a 404 error page
            echo 'Error 404';
        } elseif (is_post_type_archive()) {
            // If we're on a custom post type archive page
            $post_type = get_post_type();
            $post_type_object = get_post_type_object($post_type);
            if ($post_type_object) {
                echo $post_type_object->labels->singular_name;
            }
        } elseif (is_tax()) {
            // If we're on a custom taxonomy archive page
            $term = get_queried_object();
            echo $term->name;
        }
    }
}
