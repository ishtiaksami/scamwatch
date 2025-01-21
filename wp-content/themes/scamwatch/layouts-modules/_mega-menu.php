<?php
$locations = get_nav_menu_locations();
$menu = @wp_get_nav_menu_object($locations['mega_menu']);
if (!empty($menu)) :
    $menu_items = wp_get_nav_menu_items(@$menu->term_id, array('order' => 'DESC'));
    // Build the menu array with nested submenus
    $menu_array = build_menu_array($menu_items);

?>

    <nav class="md:block hidden py-2 px-4 ">
        <ul class="flex justify-center items-center gap-4 md:gap-8 xl:gap-10 [&>li>a]:text-darkNavy [&>li>a]:font-medium [&>li>a]:text-xs xl:[&>li>a]:text-base [&>li>a]:uppercase [&>li>a]:tracking-normal">
            <?php
            foreach ($menu_array as $menu_item) :
                $hide_cta_button = get_field('hide_cta_button', $menu_item['menu_id']);
            ?>
                <li class="<?php echo $menu_item['classes'] . (!empty($menu_item['submenu']) ? ' menu-item-has-children' : ''); ?>">
                    <a id="scam-link" href="<?php echo $menu_item['url']; ?>" class="after-effect relative hover:text-orange-500 duration-500"><?php echo $menu_item['title']; ?></a>

                    <?php if (!empty($menu_item['submenu'])) : ?>

                        <div id="mega-menu"
                            class="bg-gray-100 absolute left-0 top-[90%] w-full shadow-md py-10 opacity-0 pointer-events-none ease-in-out flex justify-center transition-all duration-500 z-50">


                            <div>

                                <ul class="sub-menu grid grid-cols-3 gap-x-40 max-w-[53rem] w-full px-4">
                                    <?php
                                    $snd_label_menu = $menu_item['submenu'];
                                    foreach ($snd_label_menu as $smenu_item) {
                                        $show_title_only = get_field('show_title_only', $smenu_item['menu_id']);
                                        if ($show_title_only) {
                                            echo '<li class="' . $smenu_item['classes'] . ' menu-item-has-title' . (!empty($smenu_item['submenu']) ? ' menu-item-has-children' : '') . '">';
                                            echo $smenu_item['title'];
                                            echo '</li>';
                                        } else {
                                            echo '<li class="' . $smenu_item['classes'] . '">';
                                            echo '<a href="' . $smenu_item['url'] . '">' . $smenu_item['title'] . '</a>';
                                            echo '</li>';
                                        }
                                    }
                                    ?>
                                </ul>

                            </div>

                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php endif; ?>