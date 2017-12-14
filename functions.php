<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array('id'=>'sidebar-1'));

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }

add_filter('the_excerpt', 'strip_images');
add_filter('the_excerpt', 'wpdocs_excerpt_more');

function strip_images($content){
   return preg_replace('/<img[^>]+./','',$content);
}

function wpdocs_excerpt_more( $more ) {
    return sprintf( get_the_excerpt() . '<span class="more"> <a class="read-more" href="%1$s"> %2$s</a></span>',
        get_permalink( get_the_ID() ),
        ' Devamı &gt;&gt; </span>');
}

 ?>
