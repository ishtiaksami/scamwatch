<div class="swiper-slide">
    <a href="<?php the_permalink(); ?>" class="h-[341px] flex flex-wrap flex-col justify-end p-5 relative group overflow-hidden before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-custom-gradient before:z-10 group hover:before:bg-black/50 before:transition-all">
        <img class="absolute left-0 top-0 w-full h-full object-cover z-0 group-hover:scale-105 transition-all duration-500" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
        <span class="text-white z-20 text-xs pb-2"> <?php echo get_the_date('F j, Y, g:i a'); ?></span>
        <h3 class="relative z-20 text-white mb-3 uppercase"><?php the_title(); ?></h3>
        <div class="relative z-20 max-h-0 overflow-hidden group-hover:max-h-[200px] transition-all duration-500 max-w-56 <?php ksa('[&>*]:text-white [&>*]:font-light'); ?>">
            <?php the_excerpt(); ?>
        </div>
    </a>
</div>