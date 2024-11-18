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
                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                        <path d="M23.6503 26.4987L33.8086 36.6571L32.2451 38.2206L20.5233 26.4987L32.2451 14.7769L33.8086 16.3404L23.6503 26.4987Z" fill="black" />
                    </svg>
                </div>
                <div class="promo-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                        <path d="M29.3497 26.5013L19.1914 16.3429L20.7549 14.7794L32.4767 26.5013L20.7549 38.2231L19.1914 36.6596L29.3497 26.5013Z" fill="black" />
                    </svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="10" viewBox="0 0 41 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.0946 4.47949L0 4.47949V5.52116L39.0951 5.52116L37.1992 7.56283L37.9625 8.27163L41 5.00056L37.9625 1.72949L37.1992 2.4383L39.0946 4.47949Z" fill="white"></path>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end of the cardSlider section -->