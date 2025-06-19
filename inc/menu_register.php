<?php
register_nav_menu('primary', __('Primary Menu', 'alpha'));

// Walker menu properties it's optional if anytime it wanted
// function alpha_nav_description($item_output, $item, $depth, $args)
// {
//     if (!empty($item->description)) {
//         $item_output = str_replace(
//             $args->link_after . '</a>',
//             '<span class="menu-description">' . $item->description . '</span>' . $args->link_after . '</a>',
//             $item_output
//         );
//     }
//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el', 'alpha_nav_description', 10, 4);