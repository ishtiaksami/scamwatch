<?php get_header(); ?>

<?php
$post_id = get_the_ID();
$time = get_the_time('d.m.Y', $post_id);
$categories = get_the_category($post_id);
$category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
$post_tags = get_the_tags($post_id);


?>

 <section>
    <div class="holder">
        <h1>This is News Page</h1>
    </div>
 </section>


<?php get_footer(); ?>
