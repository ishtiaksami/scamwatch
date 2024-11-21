<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<section class="bg-blue-light<?php echo isset($block['className']) ? $block['className'] : ''; ?>"
    id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="lg:max-w-siteWidth mx-auto">


        <?php if (have_rows('custom_links')): ?>
            <div
                class=" flex  items-center <?php ksa('[&>a]:font-semibold [&>a]:text-2xl [&>a]:leading-5 [&>a]:text-white [&>a]:py-8 [&>a]:px-5  [&>a]:lg:px-4 [&>a]:cursor-pointer [&>a]:text-center divide-y-[1px]  md:divide-x-[1px] divide-blue1 [&>a:hover]:bg-blue1 [&>a]:transition [&>a]:duration-300'); ?>">


                <?php while (have_rows('custom_links')):
                    the_row(); ?>
                    <?php
                    $link = get_sub_field('link');
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="" href="<?php echo esc_url($link_url); ?>"
                            target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>



    </div>
</section>