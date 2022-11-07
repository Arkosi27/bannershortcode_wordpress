<?php

/**
 * Plugin Name: Arkosi Banner
 * Plugin URI: 
 * Description: Insert ads banner using the banner short_code
 * Version: 1.0.0
 * Author: Arkosi
 * Author URI: 
 * License: 
 */
add_shortcode( "banner", function($atts, $content){
	$output = '<div style="background-color: #00A99F; font-size: 14px; line-height: 24px; color: #070707; text-align: center; padding: 6px 18px;">Suscríbete a mis cursos de tecnologías web <a style="display: inline-block; background-color: #FF7020; border: 1px solid #fff; border-radius: 6px; font-size: 14px; font-weight: normal; color: #fff; padding: 3px 8px; text-decoration: none;" href="#" target="_blank">SUSCRIBIRME</a></div>';
	return $output;
});