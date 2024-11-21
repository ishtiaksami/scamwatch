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

        <div class="flex gap-8">
            <?php
            $content_title = get_field('content_title');
            $content = get_field('content');
            $card_title = get_field('card_title');
            $card_content = get_field('card_content');
            if ($content_title || $content || $card_title || $card_content) : ?>
                <div class=" order-2 grow-0 shrink-0 basis-full max-w-full md:basis-2/3 md:max-w-2/3 space-y-6">
                    <div class="space-y-5">

                        <?php
                        $content_title = get_field('content_title');
                        $content = get_field('content');
                        if ($content_title || $content) : ?>
                            <?php if ($content_title) : ?>
                                <h3 class="text-3xl leading-normal"><?php echo esc_html($content_title); ?></h3>
                            <?php endif; ?>

                            <?php if ('content') : ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php
                        $card_title = get_field('card_title');
                        $card_content = get_field('card_content');
                        if ($card_title || $card_content) : ?>
                            <div class="bg-gray4 relative pt-4 px-12 pb-16 rounded-t-none rounded-br-[0.5rem] rounded-bl-[0.5rem] shadow-custom1 overflow-hidden">
                                <div class="space-y-5 mt-6">
                                    <?php if ($card_title) : ?>
                                        <h3 class="text-3xl leading-normal"><?php echo esc_html($card_title); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($card_content) : ?>
                                        <div>
                                            <?php echo $card_content; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <span class=" border-t-[3rem] border-t-pink  absolute border-r-[3rem] border-transparent top-0 -left-[1.5rem] p-3"></span>

                    </div>
                </div>
            <?php endif; ?>

            <?php
            $link = get_field('cta_button');
            $sidebar_content = get_field('sidebar_content'); 
            if ($link || $sidebar_content) : ?>
            
          
            <aside class="basis-1/4 grow-0 shrink-0 max-w-1/4 order-3 hidden md:block">
                <div
                    class=" bg-gray2 relative py-6 pr-6 pl-8 mb-10 shadow-custom3 border border-gray3 after:border-[0.5rem] after:border-blue1 after:absolute after:top-0 after:left-0 after:block after:h-full ">
                    <?php if ($sidebar_content); ?>
                        <?php echo wpautop($sidebar_content); ?>
                    <?php endif; ?>
                    <?php
                    $link = get_field('cta_button');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a class="btn !p-2 !text-sm !mt-5 inline-block" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>
</section>