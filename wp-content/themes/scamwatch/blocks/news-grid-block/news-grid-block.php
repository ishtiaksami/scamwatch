<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}
?>

<?php
$post_id = get_the_ID();
$permalink = get_the_permalink($post_id);
$thumb_url = has_post_thumbnail($post_id) ? get_the_post_thumbnail_url($post_id, 'large') : get_template_directory_uri() . '/wp-content/uploads/2024/07/placeholder.png';
$title = get_the_title($post_id);
$excerpt = get_the_excerpt($post_id);
$time = get_the_time('d.m.Y', $post_id);

$categories = get_the_category($post_id);
$category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';

?>

<section class=" bg-soft-vanilla block-pad <?php echo isset($block['className']) ? $block['className'] : ''; ?>"
    id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">
        <div class=" flex items-center justify-between">
            <h1 class="text-3xl font-bold ">News and alerts</h1>

            <div class=" hidden md:flex">
                <a href="#" class="btn flex flex-wrap items-center">
                    View all news and alerts
                    <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                            fill="#fff" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 mt-10">

            <a href="#"
                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-darkNavy ">

                <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                <div class=" space-y-4">
                    <p>Criminals are emailing people and falsely claiming they have hacked into their
                        computers or webcams and have access to compromising images and videos of them.</p>
                    <p>They include personal details such as birth dates and addresses in the emails to
                        intimidate people into sending them money.</p>
                </div>
                <div class=" absolute bottom-0 right-0 bg-darkNavy py-2 px-3">
                    <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                            fill="#fff" />
                    </svg>
                </div>
            </a>

            <a href="#"
                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-darkNavy ">

                <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                <div class=" space-y-4">
                    <p>Criminals are emailing people and falsely claiming they have hacked into their
                        computers or webcams and have access to compromising images and videos of them.</p>
                    <p>They include personal details such as birth dates and addresses in the emails to
                        intimidate people into sending them money.</p>
                </div>
                <div class=" absolute bottom-0 right-0 bg-darkNavy py-2 px-3">
                    <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                            fill="#fff" />
                    </svg>
                </div>
            </a>

            <a href="#"
                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-darkNavy ">

                <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                <div class=" space-y-4">
                    <p>Criminals are emailing people and falsely claiming they have hacked into their
                        computers or webcams and have access to compromising images and videos of them.</p>
                    <p>They include personal details such as birth dates and addresses in the emails to
                        intimidate people into sending them money.</p>
                </div>
                <div class=" absolute bottom-0 right-0 bg-darkNavy py-2 px-3">
                    <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                            fill="#fff" />
                    </svg>
                </div>
            </a>

        </div>

        <div class=" text-center flex flex-wrap items-center md:hidden mt-10">
            <a href="#" class="btn">
                View all news and alerts <svg width="20" height="20" id="root" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path
                        d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"
                        fill="#fff" />
                </svg></i>
            </a>
        </div>
    </div>

</section>