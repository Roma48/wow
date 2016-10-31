<?php
/**
 * Plugin Name: Related posts shortcode
 * Plugin URI: http://mypluginuri.com/
 * Description: Related posts shortcode plugin.
 * Version: 1.0 or whatever version of the plugin (pretty self explanatory)
 * Author: Plugin Author's Name
 * Author URI: Author's website
 * License: A "Slug" license name e.g. GPL12
 */


function related_posts_func( $atts ) {
    $category = get_the_category();
    $posts = get_posts(array(
        'post_type' => 'post',
        'numberposts' => 4,
        'category' => $category[0]->term_id
    ));

    $output = '';

    foreach ($posts as $post){
        $output .= '<p>' . $post->post_title . '</p>';
    }

    return $output;
}
add_shortcode( 'related-posts', 'related_posts_func' );