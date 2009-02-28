<?php
/*
Plugin Name: FancyBox for WordPress
Plugin URI: http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/
Description: Integrates <a href="http://fancy.klade.lv/">FancyBox</a> by <a href="http://klade.lv/">Janis Skarnelis</a> into WordPress. All images on a page are treated as a gallery allowing to use Next and Previous buttons on the FancyBox frontend.
Version: 1.2
Author: Jose Pardilla (Th3 ProphetMan)
Author URI: http://blog.moskis.net/
*/

define( 'WPFANCYBOXHOME', get_option('siteurl') . '/wp-content/plugins/fancybox-for-wordpress/' ); // Get full url to plugin path

function wp_fancybox_do() {
	
	// CSS is included here to reduce the number of server calls. ?>
	<style type="text/css">
	div#fancy_overlay{position:absolute;top:0;left:0;z-index:90;width:100%;background-color:#333;}
	div#fancy_loading{position:absolute;height:40px;width:40px;cursor:pointer;display:none;overflow:hidden;background:transparent;z-index:100;}
	div#fancy_loading div{position:absolute;top:0;left:0;width:40px;height:480px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_progress.png) no-repeat;}
	div#fancy_close{position:absolute;top:-12px;right:-12px;height:30px;width:30px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_closebox.png);cursor:pointer;z-index:100;display:none;}
	div#fancy_content{position:absolute;top:0;left:0;width:100%;height:100%;z-index:96;margin:0;padding:0;}
	#fancy_frame{position:relative;width:100%;height:100%;display:none;}
	img#fancy_img{position:absolute;top:0;left:0;width:100%;height:100%;border:0;z-index:92;margin:0;padding:0;}
	div#fancy_title{position:absolute;bottom:-35px;left:0;width:100%;z-index:100;display:none;}
	div#fancy_title table{margin:0 auto;}div#fancy_title div{color:#FFF;font:bold 12px Arial;padding-bottom:2px;}
	td#fancy_title_left{height:32px;width:15px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_title_sprite.png) no-repeat 0 -32px;}
	td#fancy_title_main{height:32px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_title_sprite.png) repeat-x;}
	td#fancy_title_right{height:32px;width:15px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_title_sprite.png) no-repeat 0 -64px;}
	div#fancy_outer{position:absolute;top:0;left:0;z-index:90;overflow:hidden;background:transparent;display:none;margin:0;padding:18px 18px 58px;}
	div#fancy_inner{position:relative;width:100%;height:100%;border:1px solid #444;background:#FFF;}
	a#fancy_left,a#fancy_right{position:absolute;bottom:10px;height:100%;width:35%;cursor:pointer;background-image:url(data:image/gif;base64,AAAA);z-index:100;}
	a#fancy_left{left:0;}a#fancy_right{right:0;}a#fancy_left:hover{background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_left.gif) no-repeat 0 50%;}
	a#fancy_right:hover{background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_right.gif) no-repeat 100% 50%;}
	#fancy_bigIframe,#fancy_freeIframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:10;}
	div#fancy_bg{display:none;} div.fancy_bg{position:absolute;display:block;z-index:70;}
	div.fancy_bg_n{top:-18px;width:100%;height:18px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_shadow_horizontal.png) repeat-x;}
	div.fancy_bg_ne{top:-18px;right:-13px;width:13px;height:18px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_shadow_corners.png) no-repeat -13px 0;}
	div.fancy_bg_e{right:-13px;height:100%;width:13px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_shadow_vertical.png) repeat-y -13px 0;}
	div.fancy_bg_se{bottom:-18px;right:-13px;width:13px;height:18px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_shadow_corners.png) no-repeat -13px -18px;}
	div.fancy_bg_s{bottom:-18px;width:100%;height:18px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_shadow_horizontal.png) repeat-x 0 -18px;}
	div.fancy_bg_sw{bottom:-18px;left:-13px;width:13px;height:18px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_shadow_corners.png) no-repeat 0 -18px;}
	div.fancy_bg_w{left:-13px;height:100%;width:13px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_shadow_vertical.png) repeat-y;}
	div.fancy_bg_nw{top:-18px;left:-13px;width:13px;height:18px;background:transparent url(<?php echo WPFANCYBOXHOME; ?>img/fancy_shadow_corners.png) no-repeat;}
	* html div.fancy_bg_n,* html div.fancy_bg_ne,* html div.fancy_bg_e,* html div.fancy_bg_se,* html div.fancy_bg_s,* html div.fancy_bg_sw,* html div.fancy_bg_w,* html div.fancy_bg_nw{background:none;}
	* html td#fancy_title_left,* html td#fancy_title_main,* html td#fancy_title_right{background:#000;}
	* html div#fancy_close{background:url(<?php echo WPFANCYBOXHOME; ?>img/fancy_ie_closebox.gif);}
	</style>
	
	<script type="text/javascript">
		jQuery.noConflict(); // Apply jQuery.noConflict()
		jQuery(function(){
			jQuery("a:has(img)[href$='.jpg']").attr({ rel: "fancybox" });	// These four lines add the rel="fancybox"
			jQuery("a:has(img)[href$='.jpeg']").attr({ rel: "fancybox" });	//  attribute to all links that contain
			jQuery("a:has(img)[href$='.gif']").attr({ rel: "fancybox" });	//  an image (i.e thumbnail) and link
			jQuery("a:has(img)[href$='.png']").attr({ rel: "fancybox" });	// to a JPG, JPEG, PNG or GIF image.
			jQuery("a[rel='fancybox']").fancybox();		//This applies fancybox to the links we have just edited.
		});
	</script>
	
<?php

}

function wp_fancybox_init() {
	wp_enqueue_script('fancybox', WPFANCYBOXHOME . 'jquery.fancybox-1.2.0.pack.js', array('jquery'), '1.3.2' ); // Load fancybox with jQuery
}

add_action('wp_print_scripts', 'wp_fancybox_init'); // Add the fancybox script to the WordPress head
add_action('wp_head', 'wp_fancybox_do'); // Add css and apply fancyboy the the page loads

?>