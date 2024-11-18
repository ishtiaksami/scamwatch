<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>





<!-- Start of the Tab section -->
<section class="block-pad <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">

        <?php if ($block_title = get_field('block_title')) : ?>
            <h2 class="font-bold pb-6"> <?php echo esc_html($block_title); ?></h2>
        <?php endif; ?>

        <div class="tab-container">
            <?php if (have_rows('tab_items')) : ?>
                <div class="tab-nav flex border-b border-gray-300">
                    <?php while (have_rows('tab_items')) :
                        the_row(); ?>
                        <!-- Tab Navigation -->

                        <?php if ($items_title = get_sub_field('items_title')) : ?>
                            <button class="tab-btn flex-1 py-2 text-gray-600 hover:text-red-500 border-b-2 border-transparent" data-tab="tab1"><?php echo esc_html($items_title); ?></button>
                        <?php endif; ?>

                </div>

                <!-- Tab Content -->
                <div class="tab-content mt-4">
                    <div id="tab1" class="tab-pane hidden opacity-0 transform scale-95 transition-all duration-300">
                        <!-- <h2 class="text-xl font-semibold text-red-600">Latest Scam Alerts</h2> -->
                        <?php if ($items_content = get_sub_field('items_content')) : ?>
                            <?php echo $items_content; ?>
                        <?php endif; ?>
                    </div>

                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    </div>
</section>
<!-- end of the Tab section -->