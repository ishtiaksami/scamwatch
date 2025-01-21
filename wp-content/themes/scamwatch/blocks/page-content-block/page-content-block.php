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
        <div class="space-y-4 text-center max-w-5xl mx-auto">

            <?php if ($title = get_field('title')) : ?>
                <h2><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($content = get_field('content')) : ?>
                <div class="space-y-4">
                    <?php echo $content; ?>
                </div>
            <?php endif; ?>

            <?php
            $link = get_field('cta_button');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <div class="gap-30 flex flex-wrap justify-center items-center pt-2">
                    <a class="btn group flex items-center gap-3" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>

                        <?php get_template_part('svgs/right-arrow'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>

    </div>


</section>
<!-- End of Page Intro Block  -->