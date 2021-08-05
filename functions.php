<?php
define('THEME_PATH', get_stylesheet_directory_uri());

// Loop through and process base theme includes
foreach(glob(TEMPLATEPATH . '/theme/*/*.php') as $filename){
    include_once $filename;
}

function render_components($component_name, $params = array()){
    $context = get_queried_object();

    try{
        if(!isset($component_name)){
            throw new \Exception(("Component not specified!"));
        }

        $name_parts = explode(':', $component_name);
        $component_name = array_shift($name_parts);
        $variant_name = (count($name_parts) > 0) ? '.'.array_shift($name_parts) : '';
        $component_file = TEMPLATEPATH . '/assets/components/' . $component_name . '/' . $component_name . $variant_name . '.view.php';

        if(!file_exists($component_file)){
            throw new \Exception("Component{$component_name} not found at '{$component_file}'");
        }

        extract($params, EXTR_SKIP);
        ob_start();
        include $component_file;
        return ob_get_clean();
        
    } catch(Exception $ex){
        return $ex->getMessage();
    }

}

