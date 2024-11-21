<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<section class="block-pad<?php echo isset($block['className']) ? ' ' . $block['className'] : ''; ?>"
    id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <?php
        // Check if the repeater field has rows
        if (have_rows('acc_card')): ?>
            <ol
                class="accc-cards__list px-4 lg:px-8 <?php ksa('[&>li]:relative [&>li>a]:bg-white [&>li>a]:text-blue1 [&>li>a]:block [&>li>a]:border-b-0 [&>li>a]:border-l-8 [&>li>a]:border-gray5 [&>li>a]:pt-6 [&>li>a]:pr-6 [&>li>a]:pb-10 [&>li>a]:pl-14 [&>li>a>h3]:text-3xl [&>li>a>h3]:font-bold [&>li>a>h3]:leading-normal [&>li>a>h3]:tracking-normal [&>li>a>h3]:capitalize [&>li>a>h3]:mb-4'); ?>">
                <?php while (have_rows('acc_card')):
                    the_row();
                    // Get sub-field values
                    $card_title = get_sub_field('card_title');
                    $card_description = get_sub_field('card_description');
                    $card_link = get_sub_field('card_link');
                    ?>
                    <li>
                        <a href="<?php echo esc_url($card_link); ?>">
                            <h3><?php echo esc_html($card_title); ?></h3>
                            <?php if ($card_description = get_sub_field('card_description')): ?>
                                <?php echo $card_description; ?>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endwhile; ?>

                <?php
                $link = get_sub_field('card_link');
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" href="<?php echo esc_url($link_url); ?>"
                        target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>

            </ol>
        <?php endif; ?>
    </div>
</section>