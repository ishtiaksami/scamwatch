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

        <section class="block-pad">
            <div class="holder">
                <?php
                the_post();
                the_content();
                ?>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>