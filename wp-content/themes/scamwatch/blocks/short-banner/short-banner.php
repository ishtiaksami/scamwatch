<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>


<section
    class=" bg-bright-Orange relative block-pad<?php echo isset($block['className']) ? $block['className'] : ''; ?>"
    id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <div class="max-w-[550px]">

            <?php if ($banner_title = get_field('banner_title')): ?>
                <h2 class="text-5xl font-bold text-darkNavy leading-tight"><?php echo esc_html($banner_title); ?></h2>
            <?php endif; ?>

        </div>
        <div class="md:mt-16 mt-8 flex flex-wrap">

            <?php
            $link = get_field('banner_btn');
            if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn" href="<?php echo esc_url($link_url); ?>"
                    target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>

        </div>
    </div>

    <?php
    $banner_image = get_field('banner_image');
    if ($banner_image): ?>
        <img class="hidden md:block absolute right-32 bottom-0 w-full max-w-[500px] h-[250px] object-cover"
            src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
    <?php endif; ?>

</section>
<!-- ============================ End OF Image Banner Section ============================ -->