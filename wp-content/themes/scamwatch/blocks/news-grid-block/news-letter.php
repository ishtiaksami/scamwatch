<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}

$thumb_url = has_post_thumbnail($post_id) ? get_the_post_thumbnail_url($post_id, 'full') : get_template_directory_uri() . '/wp-content/uploads/2024/07/placeholder.png';
?>





<section class=" bg-soft-vanilla block-pad <?php echo isset($block['className']) ? $block['className'] : ''; ?>"
    id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">







        <?php if (get_field('post_selection') == 'automatic'):
            $args = [
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => 3,
            ];
            $query = new WP_Query($args);

            if ($query->have_posts()): ?>
                <div class=" flex items-center justify-between">
                    <?php while ($query->have_posts()):
                        $query->the_post(); ?>
                        <?php if ($block_title = get_field('block_title')): ?>
                            <h1 class="text-3xl font-bold "><?php echo esc_html($block_title); ?></h1>
                        <?php endif; ?>

                        <?php
                        $link = get_field('cta_button');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <div class=" hidden md:flex">
                                <a class="btn flex flex-wrap items-center gap-3" href="<?php echo esc_url($link_url); ?>"
                                    target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                                    <?php get_template_part('svgs/arrow-right'); ?></a>
                            </div>


                        <?php endif; ?>


                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 mt-10">

                            <a href="<?php the_permalink(); ?>"
                                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                                <h2 class="text-xl font-bold mb-4"><?php the_title(); ?></h2>
                                <div class=" space-y-4">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                                    <?php get_template_part('svgs/arrow-right'); ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>

                </div>





            <?php endif;
            wp_reset_postdata();

        elseif (get_field('post_selection') === 'manual'):
            global $post;
            $posts = get_field('letter_post');
            if ($posts): ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10">
                    <?php

                    foreach ($posts as $post):
                        setup_postdata($post); ?>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 mt-10">

                            <a href="<?php the_permalink(); ?>"
                                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                                <h2 class="text-xl font-bold mb-4"><?php the_title(); ?></h2>
                                <div class=" space-y-4">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                                    <?php get_template_part('svgs/arrow-right'); ?>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endif; ?>














        <div class=" flex items-center justify-between">

            <?php if ($block_title = get_field('block_title')): ?>
                <h1 class="text-3xl font-bold "><?php echo esc_html($block_title); ?></h1>
            <?php endif; ?>

            <?php
            $link = get_field('cta_button');
            if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class=" hidden md:flex">
                    <a class="btn flex flex-wrap items-center gap-3" href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                        <?php get_template_part('svgs/arrow-right'); ?></a>
                </div>
            <?php endif; ?>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 mt-10">

            <a href="#"
                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                <h2 class="text-xl font-bold mb-4"><?php the_title(); ?></h2>
                <div class=" space-y-4">
                    <?php the_excerpt(); ?>
                </div>
                <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                    <?php get_template_part('svgs/arrow-right'); ?>
                </div>
            </a>
        </div>

        <div class=" text-center flex flex-wrap items-center md:hidden mt-10">
            <?php
            $link = get_field('cta_button');
            if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class=" hidden md:flex justify-center">
                    <a class="btn flex flex-wrap items-center" href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                        <?php get_template_part('svgs/arrow-right'); ?></a>

                </div>
            <?php endif; ?>
        </div>
    </div>


</section>
<!-- ============================ End News Letter Grid Section ============================ -->