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

function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


define('HEADER_IMAGE_WIDTH', 205);
define('HEADER_IMAGE_HEIGHT', 50);
define('HEADER_TEXTCOLOR', 'ffffff');
define( 'NO_HEADER_TEXT', true );

function header_style() {
?>
<style type="text/css">
#header{
background: url(<?php header_image(); ?>)  no-repeat;
height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
}
#header h1 a{color:#<?php header_textcolor();?>;}
</style>
<?php
}

// gets included in the admin header
function admin_header_style() {
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
    </style>
<?php
}

if ( function_exists('add_custom_image_header') ) {
add_custom_image_header('header_style', 'admin_header_style');
}



add_theme_support( 'menus' );



?>