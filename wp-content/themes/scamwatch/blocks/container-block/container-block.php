<?php
$my_block_template = array(
    array('core/paragraph', array(
        'content' => "I'm a paragraph.",
        'placeholder' => 'This is a placeholder paragraph',
    ))
);
$allowed_blocks = array(
    'core/embed',
    'core-embed/vimeo',
    'core-embed/youtube',
    'core/video',
    'core/paragraph',
    'core/image',
    'core/heading',
    'core/list',
    'core/list-item',
    'core/quote',
    'core/button',
    'core/columns',
    'acf/accordion-block',
);
?>

<div class="content--block text--content--wrapper pb-[160px] relative overflow-hidden <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <div class="text--content">
            <InnerBlocks class=" space-y-6" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)); ?>" template="<?php echo esc_attr(wp_json_encode($my_block_template)); ?>" />
        </div>
    </div>

    <div class="py-10 md:py-0 md:min-h-[27.5rem] after:absolute after:h-full after:w-full after:left-0 after:top-0 after:bg-whiteGradient absolute w-full top-0 left-0 -z-10">
        <div class="jarallax h-full w-full absolute right-0 bottom-0 bg-patternMocha bg-center -z-20"></div>
    </div>
</div>