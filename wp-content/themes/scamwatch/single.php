<?php get_header(); ?>

<?php
$post_id = get_the_ID();
$time = get_the_time('d.m.Y', $post_id);
$categories = get_the_category($post_id);
$category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
$post_tags = get_the_tags($post_id);
?>

<?php
// Check if there are posts
if (have_posts()) :
    // Loop through posts
    while (have_posts()) :
        the_post(); ?>

        <div id="main-content" class="holder ">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Post Title -->
                <h1 class="font-bold pt-4 uppercase"><?php the_title(); ?></h1>

                <div class="pb-4">
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                    <span class="post-author"><?php echo get_the_author(); ?></span>
                </div>

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="space-y-6 <?php // ksa('[&>p]:text-xl'); ?>">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>

    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>