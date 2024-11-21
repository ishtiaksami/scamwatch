<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<section class="block-pad bg-soft-vanilla <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">

        <?php if ($block_title = get_field('block_title')) : ?>
            <h2 class="tracking-wider pb-8"><?php echo esc_html($block_title); ?></h2>
        <?php endif; ?>
        <div class="space-y-6">
            <?php if (have_rows('items_repeater')) : ?>
                <?php while (have_rows('items_repeater')) :
                    the_row(); ?>
                    <div class="grid lg:grid-cols-6 items-center bg-white shadow-custom1 hover:shadow-custom2 transition-all duration-200">
                        <div class="col-span-1 w-[150px] pl-4">
                            <?php
                            $logo_image = get_sub_field('logo_image');
                            if ($logo_image) : ?>
                                <img class="w-full" src="<?php echo esc_url($logo_image['url']); ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-span-5 space-y-4 <?php ksa('[&>p]:font-light'); ?> p-5 border-t border-gray-200 lg:border-none">
                            <?php if ($sub_title = get_sub_field('sub_title')) : ?>
                                <h3 class=" tracking-wider"> <?php echo esc_html($sub_title); ?></h3>
                            <?php endif; ?>
                            <?php if ($content = get_sub_field('content')) : ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>