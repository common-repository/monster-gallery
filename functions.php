<?php /*
Plugin Name: Monster Gallery
Plugin URI: https://moshikov.co/
Description: Customise classic Gutenberg gallery. Add carousels slider (Flickity) and lightbox (Fancybox) script.
Version: 1.3.4
Author: Vladislav Moshikov
Author URI: http://moshikov.co/
Copyright: Vladislav Moshikov
Text Domain: monster-gallery
License: GPL3
*/

    // Flickity library (https://flickity.metafizzy.co/)
    wp_enqueue_script( 'monstergallery_script_flickity', plugins_url( 'assets/js/flickity.pkgd.min.js', __FILE__ ) );
    wp_enqueue_script( 'monstergallery_script_flickitylazy', plugins_url( 'assets/js/bg-lazyload.js', __FILE__ ) );
    wp_enqueue_style( 'mstyle_flickity', plugins_url( 'assets/css/flickity.min.css', __FILE__ ) );

    // Plugin elements
    wp_enqueue_script( 'monstergallery_script_scripts', plugins_url( 'assets/js/script.js?1119', __FILE__ ), array('jquery') );
    wp_enqueue_style( 'monstergallery_script_style', plugins_url( 'assets/css/style.css', __FILE__ ) );

    // Fancybox library (https://fancyapps.com/fancybox/3/)
    wp_enqueue_script( 'monstergallery_script_fancybox', plugins_url( 'assets/js/jquery.fancybox.min.js', __FILE__ ), array('jquery') );
    wp_enqueue_style( 'mstyle_fancybox', plugins_url( 'assets/css/jquery.fancybox.min.css', __FILE__ ) );


function monsterGallery() {
    wp_enqueue_script('monstergallery_script_gutenberg', 
      plugins_url( 'assets/js/monster-gallery.js', __FILE__ ), 
      array('wp-blocks', 'wp-dom-ready', 'wp-edit-post')
    );
  }
  add_action( 'enqueue_block_editor_assets', 'monsterGallery' );
  
?>