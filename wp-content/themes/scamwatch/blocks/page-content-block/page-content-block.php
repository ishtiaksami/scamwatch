<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<!-- start of Page Intro Block  -->
<section class="block-pad <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <div class="space-y-4">
            <?php if ($block_title = get_field('block_title')) : ?>
                <h2><?php echo esc_html($block_title); ?> </h2>
            <?php endif; ?>

            <?php if ($content = get_field('content')) : ?>
                <?php echo $content; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- End of Page Intro Block  -->