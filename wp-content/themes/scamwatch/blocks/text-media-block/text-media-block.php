<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>
 
 
<!-- start of text & Media Block  -->
<section class="block-pad <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">

    <div class="holder">
        <div class="grid lg:grid-cols-5 items-center lg:gap-14 gap-8">
            <?php
            $media = get_field('media');
            if ($media) : ?>
                <div class="lg:col-span-3 <?php echo (get_field('media_align') == 'right') ? 'order-1' : ''; ?>">
                    <img class="w-full" src="<?php echo esc_url($media['url']); ?>" alt="<?php echo esc_attr($media['alt']); ?>" />
                </div>
            <?php endif; ?>

            <div class="lg:col-span-2 space-y-4">
                <?php if ($title = get_field('title')) : ?>
                    <h2 class="text-black relative pb-2 "> <?php echo esc_html($title); ?></h2>
                <?php endif; ?>

                <?php if ($content = get_field('content')) : ?>
                    <div class=" <?php ksa('[&>*]:text-xl [&>*]:leading-[160%]'); ?>">
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
                    <div class="gap-30 flex flex-wrap items-center pt-6">
                        <a class="btn group flex items-center gap-3" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>

                            <?php get_template_part('svgs/right-arrow'); ?>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- end of the Text & media section -->