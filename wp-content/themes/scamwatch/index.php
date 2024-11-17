<?php
get_header(); // Includes header.php

if (have_posts()) : // Checks if there are any posts
    while (have_posts()) : the_post(); // Loop through posts 
?>
        <div class="flex-auto">
            <?php the_content(); // Displays the content of the post 
            ?>
        </div>
<?php
    endwhile; // Ends the while loop
endif; // Ends the if statement

get_footer(); // Includes footer.php
