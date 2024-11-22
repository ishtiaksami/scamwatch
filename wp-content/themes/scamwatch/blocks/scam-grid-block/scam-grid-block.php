<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<!-- start of Page Intro Block  -->
<section class="block-pad bg-gray1 <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <?php
        $block_title = get_field('block_title');
        $sub_title = get_field('sub_title');
        if ($block_title || $sub_title) : ?>
            <?php if ($sub_title) : ?>
                <h5 class="text-center uppercase text-base leading-22 tracking-1.5"><?php echo esc_html($sub_title); ?></h5>
            <?php endif; ?>

            <?php if ($block_title) : ?>
                <h2 class="text-center text-blue1 mt-4"> <?php echo esc_html($block_title); ?></h2>
            <?php endif; ?>
        <?php endif; ?>
        <div class="grid md:grid-cols-3 gap-10 justify-center text-center md:text-left pt-10">
            <?php if (have_rows('items_repeater')) : ?>
                <?php while (have_rows('items_repeater')) :
                    the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    if ($title || $content) : ?>
                        <div class="space-y-5">
                            <?php if ($title) : ?>
                                <h3><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>
                            <?php if ($content) : ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>


        <?php
        $link = get_field('link');
        if ($link) : ?>
            <div class="gap-30 flex flex-wrap justify-center items-center pt-6">
                <?php
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="btn hover:gap-4 group flex items-center gap-3" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                        <?php get_template_part('svgs/arrow-right'); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

</section>
<!-- End of Page Intro Block  -->