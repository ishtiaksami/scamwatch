<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<!-- start of Page Intro Block  -->
<section class="lg:py-50 py-8 <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <div class="space-y-5 text-center max-w-5xl mx-auto">

            <?php if ($title = get_field('title')) : ?>
                <h2><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <div class="space-y-4">
                <?php if ($content = get_field('content')) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>


</section>
<!-- End of Page Intro Block  -->