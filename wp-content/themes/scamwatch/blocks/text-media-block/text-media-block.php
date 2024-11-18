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
                <div class="lg:col-span-3 lg:order-2">
                    <img class="w-full" src="<?php echo esc_url($media['url']); ?>" alt="<?php echo esc_attr($media['alt']); ?>" />
                </div>
            <?php endif; ?>

            <div class="lg:col-span-2 space-y-4  order-2 lg:order-1">
                <?php if ($title = get_field('title')) : ?>
                    <h2 class="text-black relative pb-2 "> <?php echo esc_html($title); ?></h2>
                <?php endif; ?>

                <div class=" <?php ksa('[&>*]:text-xl [&>*]:leading-[160%]'); ?>">
                    <?php if ($content = get_field('content')) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>
                </div>

                <?php
                $link = get_field('cta_button');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <div class="gap-30 flex flex-wrap items-center pt-6">
                        <a class="btn group flex items-center gap-3" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="10" viewBox="0 0 41 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M39.0946 4.47949L0 4.47949V5.52116L39.0951 5.52116L37.1992 7.56283L37.9625 8.27163L41 5.00056L37.9625 1.72949L37.1992 2.4383L39.0946 4.47949Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<!-- end of the Text & media section -->