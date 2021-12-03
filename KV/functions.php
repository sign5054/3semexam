<?php
function kompetencevaerket_enqueue_style() {
    wp_enqueue_style("kompetencevaerket_style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "kompetencevaerket_enqueue_style");

?>

<?php
function kompetencevaerket_register_menu(){
    register_nav_menu("main_menu","Main menu");
}
add_action("init","kompetencevaerket_register_menu");
?>

<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>