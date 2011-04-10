<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));




add_theme_support( 'automatic-feed-links' ); 

if ( ! isset( $content_width ) ) $content_width = 900;

?>