<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<!-- start of the cardSlider section -->
<section
    class="block-pad overflow-hidden <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">

        <div class="flex justify-between items-center gap-5 pb-6">
            <?php if ($block_title = get_field('block_title')) : ?>
                <h2 class="font-bold leading-none uppercase"> <?php echo esc_html($block_title); ?></h2>
            <?php endif; ?>

            <div class="flex items-center">
                <div class="promo-prev">
                    <?php get_template_part('svgs/category-prev-arrow') ?>
                </div>
                <div class="promo-next">

                    <?php get_template_part('svgs/category-next-arrow') ?>
                </div>

            </div>

        </div>



        <div class="swiper cardSlider !overflow-visible">
            <div class="swiper-wrapper flex gap-4">

                <?php
                $category = get_field('category');

                // Create a new WP_Query
                $args = [
                    'cat'  => $category, // Use 'cat' => 5 if you prefer to use category ID
                    'posts_per_page' => 5,              // Number of posts to retrieve
                    'orderby'        => 'date',         // Order by date
                    'order'          => 'DESC',         // Latest posts first
                ];

                $latest_posts_query = new WP_Query($args);

                // Loop through the posts
                if ($latest_posts_query->have_posts()) :
                    while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
                        require(get_template_directory() . "/layouts-modules/_news_slider_item.php");
                    endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p>No posts found in this category.</p>
                <?php endif; ?>

            </div>
        </div>
        <div class="flex justify-center items-center pt-8 gap-5 ">
            <?php
            $link = get_field('cta_button');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="btn group flex justify-end flex-end items-center gap-3 !text-base" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                    <?php get_template_part('svgs/right-arrow') ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end of the cardSlider section -->