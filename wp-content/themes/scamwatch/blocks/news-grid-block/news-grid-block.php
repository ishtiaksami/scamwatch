<?php
$preview_name = explode("/", $block['name']);
if ($is_preview) {
    echo '<img src="' . get_template_directory_uri() . '/preview-block-img/' . $preview_name[1] . '.png" />';
    return;
}

$thumb_url = has_post_thumbnail($post_id) ? get_the_post_thumbnail_url($post_id, 'full') : get_template_directory_uri() . '/wp-content/uploads/2024/07/placeholder.png';
?>





<section class=" bg-soft-vanilla block-pad <?php echo isset($block['className']) ? $block['className'] : ''; ?>"
    id="<?php echo isset($block['anchor']) ? $block['anchor'] : $block['id']; ?>">
    <div class="holder">

        <div class=" flex items-center justify-between">
            <h1 class="text-3xl font-bold ">News and alerts</h1>

            <div class=" hidden md:flex">
                <a href="#" class="btn flex flex-wrap items-center">
                    View all news and alerts <i class="fas fa-arrow-right ml-3"></i>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 mt-10">

            <a href="#"
                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                <div class=" space-y-4">
                    <p>Criminals are emailing people and falsely claiming they have hacked into their
                        computers or webcams and have access to compromising images and videos of them.</p>
                    <p>They include personal details such as birth dates and addresses in the emails to
                        intimidate people into sending them money.</p>
                </div>
                <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                    <i class="fas fa-arrow-right text-white"></i>
                </div>
            </a>

            <a href="#"
                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                <div class=" space-y-4">
                    <p>Criminals are emailing people and falsely claiming they have hacked into their
                        computers or webcams and have access to compromising images and videos of them.</p>
                    <p>They include personal details such as birth dates and addresses in the emails to
                        intimidate people into sending them money.</p>
                </div>
                <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                    <i class="fas fa-arrow-right text-white"></i>
                </div>
            </a>

            <a href="#"
                class=" relative block bg-white p-6 pb-14 shadow-custom1 transition-all hover:shadow-custom2 rounded-md w-full  border-b-[5px] border-blue1 ">

                <h2 class="text-xl font-bold mb-4">Scam alert: Bulk email extortion scam</h2>
                <div class=" space-y-4">
                    <p>Criminals are emailing people and falsely claiming they have hacked into their
                        computers or webcams and have access to compromising images and videos of them.</p>
                    <p>They include personal details such as birth dates and addresses in the emails to
                        intimidate people into sending them money.</p>
                </div>
                <div class=" absolute bottom-0 right-0 bg-blue1 py-2 px-3">
                    <i class="fas fa-arrow-right text-white"></i>
                </div>
            </a>

        </div>

        <div class=" text-center flex flex-wrap items-center md:hidden mt-10">
            <a href="#" class="btn">
                View all news and alerts <i class="fas fa-arrow-right ml-3"></i>
            </a>
        </div>
    </div>

</section>
<!-- ============================ End News Letter Grid Section ============================ -->