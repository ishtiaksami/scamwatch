<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<!-- Start of the Accordion section -->
<section class="block-pad<?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <?php if ($block_title = get_field('block_title')) : ?>
            <h2 class="text-black pb-6"><?php echo esc_html($block_title); ?></h2>
        <?php endif; ?>
        <?php if (have_rows('accordion_repeater')) : ?>
            <div class="accordion-item pb-4">
                <?php while (have_rows('accordion_repeater')) :
                    the_row(); ?>
                    <div class="accordion-header w-full p-4 flex justify-between items-center gap-8 focus:outline-none border-b border-gray-300  mb-2">
                        <?php if ($sub_title = get_sub_field('sub_title')) : ?>
                            <h3 class="font-semibold"><?php echo esc_html($sub_title); ?></h3>
                        <?php endif; ?>
                        <?php get_template_part('svgs/accordion-arrow'); ?>
                    </div>
                    <?php if ($content = get_sub_field('content')) : ?>
                        <div class="accordion-content px-4 py-2 hidden">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>



</section>
<!-- end of the Accordion section -->