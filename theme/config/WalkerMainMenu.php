<?php
class WalkerMainMenu extends Walker_Nav_Menu
{
    private $curItem;

    function start_lvl(&$output, $depth = 0, $args = array()){

        $indent = ($depth > 0 ? str_repeat("\t", $depth) : '');
        $display_depth = ($depth + 1);
        $classes = array(
            'menu_list__child-menu',
            'menu_list'
        );

        $class_names = implode(' ', $classes);

        if ($display_depth == 1) {
            $output .= "\n" . $indent . '<ul class="' . $class_names . '" id="page-'.$this->curItem->ID. '" aria-hidden="true">' . "\n";
        } 
    }


  //responsible for the <li> and <a> tags
  function start_el(&$output, $item, $depth = 0, $args = null, $id= 0){
        $this->curItem = $item;
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= "<li $class_names>";

        if ($item->url && $item->url != '#') {
            $output .= '<a class="menu_link" href="' . $item->url . '">';
        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
      

        if ($args->show_carets && $args->walker->has_children) {
            
            $output .= '<button class="menu_toggle" data-dropdown-toggle="page-'.$item->ID.'" aria-expanded="false" data-depth="'.$depth.'">
                       <i class="fas fa-angle-down"></i>
                    </button>';
        } 
  }



    
}


