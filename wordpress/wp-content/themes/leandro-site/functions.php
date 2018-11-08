<?php
/**
 * 
 * Functions do site
 * @package leandro-ste
 */

define('THEME', get_template_directory_uri());

function load_assets_site() {
    wp_enqueue_style('bootstrap', THEME . '/style/css/bootstrap.min.css');
    wp_enqueue_style('site-plugins', THEME . '/style/css/plugins.css');
    wp_enqueue_style('style-theme', THEME . '/style.css');
    wp_enqueue_style('blue-style', THEME . '/style/css/color/blue.css');
    wp_enqueue_style('icons-style', THEME . '/style/type/icons.css');

    wp_enqueue_script('jquery', THEME . '/style/js/jquery.min.js', '' , false);
    wp_enqueue_script('bootstrap-js', THEME . '/style/js/bootstrap.min.js', ['jquery'], true);
    wp_enqueue_script('site-plugins-js', THEME . '/style/js/plugins.js', ['jquery'], true);
    wp_enqueue_script('classie', THEME . '/style/js/classie.js', ['jquery'], true);
    wp_enqueue_script('jquery-themepunch', THEME . '/style/js/jquery.themepunch.tools.min.js');
    wp_enqueue_script('scripts', THEME . '/style/js/scripts.js', ['jquery', 'site-plugins-js'], true);
    
    wp_enqueue_script('custom-js', THEME . '/style/js/custom.js', ['jquery', 'site-plugins-js', 'scripts'], true);
}

add_action('wp_enqueue_scripts', 'load_assets_site');

/**
 * 
 * funções
 */
function getGaleria($id) {
    $galeria = get_fields($id);
    return $galeria['imagem'];
}
