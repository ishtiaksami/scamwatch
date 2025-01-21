<?php get_header(); ?>

<?php
$post_id = get_the_ID();
$time = get_the_time('d.m.Y', $post_id);
$categories = get_the_category($post_id);
$category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
$post_tags = get_the_tags($post_id);


?>

<?php
if (have_posts()):
    while (have_posts()): ?>
        <?php //get_template_part('layouts-modules/_breadcrumbs'); 
        ?>


        <section class=" bg-bright-Orange py-[30px] md:py-[60px] flex flex-col justify-end <?php echo isset($block['className']) ? $block['className'] : ''; ?>"
            id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">

            <div class="holder w-full">

                <div>
                    <?php if ($is_front_page) : ?>
                        <h1 class="text-[64px] font-lato font-normal text-darkNavy leading-[-0.48px]"><?php esc_html(the_title()); ?></h1>
                    <?php else : ?>
                        <h2 class="text-[64px] font-lato font-normal text-darkNavy leading-[-0.48px]"><?php esc_html(the_title()); ?></h2>
                    <?php endif; ?>

                </div>

            </div>
        </section>
        <section class="block-pad">
            <div class="holder space-y-4">
                <?php
                the_post();
                the_content();
                ?>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>