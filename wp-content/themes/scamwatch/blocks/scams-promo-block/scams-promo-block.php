<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}

$thumb_url = has_post_thumbnail($post_id) ? get_the_post_thumbnail_url($post_id, 'full') : get_template_directory_uri() . '/wp-content/uploads/2024/07/placeholder.png';
?>

<section class="bg-soft-vanilla block-pad<?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <?php if (get_field('post_selection') == 'automatic') :
            $args = [
                'post_type'      => 'scam',
                'post_status'    => 'publish',
                'posts_per_page' => 3,
            ];
            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                    <?php
                    // $post_count = $query->post_count;
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>"
                            class="relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">
                            <figure class="relative w-full">
                                <img class="max-h-[150px] w-auto mx-auto pb-6 "
                                    src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title(); ?>">

                                <figcaption class="pt-6">
                                    <h3><?php the_title(); ?></h3>

                                    <div class="mt-6">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </figcaption>
                            </figure>

                            <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                                <?php get_template_part('svgs/right-arrow') ?>
                            </div>

                            <div class=" absolute top-[48%] left-0 w-full h-[1px] bg-gray1 "></div>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif;
            wp_reset_postdata();

        elseif (get_field('post_selection') === 'manual') :
            global $post;
            $posts = get_field('scams_post');
            if ($posts) : ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                    <?php

                    foreach ($posts as $post) : setup_postdata($post); ?>
                        <a href="<?php the_permalink(); ?>"
                            class="relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">
                            <figure class="relative w-full">
                                <img class="max-h-[150px] w-auto mx-auto pb-6 "
                                    src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title(); ?>">

                                <figcaption class="pt-6">
                                    <h3><?php the_title(); ?></h3>

                                    <div class="mt-6">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </figcaption>
                            </figure>

                            <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                                <?php get_template_part('/svgs/right-arrow') ?>
                            </div>

                            <div class=" absolute top-[48%] left-0 w-full h-[1px] bg-gray1 "></div>
                        </a>
                    <?php endforeach; ?>

                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endif; ?>



    </div>
</section>