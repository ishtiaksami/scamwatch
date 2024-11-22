<?php get_header(); ?>

<?php
$post_id = get_the_ID();
$time = get_the_time('d.m.Y', $post_id);
$categories = get_the_category($post_id);
$category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
$post_tags = get_the_tags($post_id);

?>
<?php get_header(); ?>
<?php
// Check if there are posts
if (have_posts()) :
    // Loop through posts
    while (have_posts()) :
        the_post(); ?>

        <?php if (has_post_thumbnail()) : ?>
            <div class="">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endif; ?>

        <div id="main-content" class="holder">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Featured Image -->



                <!-- Post Content -->
                <div class="space-y-4 py-5">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>

    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>