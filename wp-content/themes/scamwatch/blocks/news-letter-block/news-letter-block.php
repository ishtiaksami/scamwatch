<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<section class="bg-blue1 py-4 <?php echo isset($block['className']) ? $block['className'] : ''; ?>" id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <div class="flex lg:items-center justify-between gap-6 flex-col lg:flex-row">
            <div class="space-y-6 text-white">
                <?php if ($news_title = get_field('news_title')) : ?>
                    <h2 class="text-white leading-none font-normal "><?php echo esc_html($news_title); ?></h2>
                <?php endif; ?>
                <?php if ($content = get_field('content')) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div><!-- Newsletter text -->

            <div class="max-w-[44.375rem] w-full">
                <form action="" class="flex items-end gap-5 relative">
                    <div class="flex-1 border-b border-white">
                        <input type="email" placeholder="Enter your email address*"
                            class="text-white md:text-blue1 bg-transparent md:bg-white w-[calc(100%_-_100px)]  md:w-full py-[15px] px-5 border-none leading-none focus:outline-none placeholder:text-white md:placeholder:text-blue1 placeholder:text-sm placeholder:opacity-50 placeholder: placeholder:font-normal placeholder:first-letter:capitalize">
                    </div>

                    <button
                        class="text-white text-sm font-normal uppercase tracking-wider md:min-w-[9.625rem] flex items-center md:border border-white gap-3 md:gap-11 md:px-5 md:py-[14px] absolute right-0 bottom-4 md:static md:hover:text-blue1 md:hover:bg-white duration-500 z-10 group">
                        explore
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5"
                                d="M2.66781 7.5C2.5352 7.5 2.40802 7.55268 2.31425 7.64645C2.22048 7.74021 2.16781 7.86739 2.16781 8C2.16781 8.13261 2.22048 8.25978 2.31425 8.35355C2.40802 8.44732 2.5352 8.5 2.66781 8.5L2.66781 7.5ZM2.66781 8.5L13.3345 8.5L13.3345 7.5L2.66781 7.5L2.66781 8.5Z"
                                fill="white" class="md:group-hover:fill-blue-700 duration-500"></path>
                            <path d="M9.33447 12L13.3345 8L9.33447 4" stroke="white" stroke-linecap="round"
                                stroke-linejoin="round" class="md:group-hover:stroke-blue1 duration-500"></path>
                        </svg>
                    </button>
                </form>
            </div><!-- form wrap -->
        </div>
    </div>
</section>