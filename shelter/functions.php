
<?php

function shelter_scripts(){
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri(). '/libs/bootstrap/css/bootstrap.min.css', array(), ' ' );
    wp_enqueue_style( 'style', get_template_directory_uri() . 
               '/css/style.css', array(), ' ' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . 
               '/libs/bootstrap/js/bootstrap.min.js', array('jquery'), ' ' );
}

add_action('wp_enqueue_scripts', 'shelter_scripts');
?>
