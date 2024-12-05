<?php get_header(); ?>

<section class="py-8 md:py-50">
    <div class="holder space-y-8">
        <h1 class="text-[2.75rem] leading-[100%] font-normal mb-11 text-center"><?php the_field('404__title', 'option'); ?></h1>

        <?php if (get_field('404__text', 'option')) : ?>
            <div class="text-center space-y-4">
                <?php the_field('404__text', 'option'); ?>
            </div>
        <?php endif; ?>

        <div class="flex justify-center items-center">
            <a class="btn flex items-center gap-5" href="/"><?php _e('Go to Homepage', 'scamwatch'); ?><?php get_template_part('svgs/right-arrow'); ?></a>
        </div>
    </div>

</section>

<?php get_footer();
