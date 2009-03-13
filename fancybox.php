<?php
/*
Plugin Name: FancyBox for WordPress
Plugin URI: http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/
Description: Integrates <a href="http://fancy.klade.lv/">FancyBox</a> by <a href="http://klade.lv/">Janis Skarnelis</a> into WordPress. All images on a page are treated as a gallery allowing visitors to use Next and Previous buttons on the FancyBox frontend.
Version: 2.1
Author: Jose Pardilla
Author URI: http://moskis.net/
*/

// If no options set, load defaults
if (get_option('mfbfw_active_version') !== '2.1') {
  add_option('mfbfw_active_version', '2.1');
  add_option('mfbfw_autoApply', 'on');
  add_option('mfbfw_imageScale', 'on');
  add_option('mfbfw_zoomOpacity', 'on');
  add_option('mfbfw_zoomSpeedIn', '500');
  add_option('mfbfw_zoomSpeedOut', '500');
  add_option('mfbfw_overlayShow', 'on');
  add_option('mfbfw_overlayColor', '#666666');
  add_option('mfbfw_overlayOpacity', '0.3');
  add_option('mfbfw_hideOnContentClick', '');
  add_option('mfbfw_centerOnScroll', 'on');
  add_option('mfbfw_jQnoConflict', 'on');
}


function mfbfw_init() {

  if (get_option('mfbfw_nojQuery') == 'on') {

    wp_enqueue_script('fancybox', WP_PLUGIN_URL . '/fancybox-for-wordpress/jquery.fancybox-1.2.0.pack.js'); // Load fancybox without jQuery (for troubleshooting)

  } else {

    wp_enqueue_script('fancybox', WP_PLUGIN_URL . '/fancybox-for-wordpress/jquery.fancybox-1.2.0.pack.js', array('jquery'), '1.3.2'); // Load fancybox with jQuery

  }
  
}


function mfbfw_css() {

  echo "\n"."<!-- Fancybox for WordPress -->"."\n".'<link rel="stylesheet" href="'.WP_PLUGIN_URL.'/fancybox-for-wordpress/fancybox.css" type="text/css" media="screen" />'."\n";
  ?><style type="text/css">div#fancy_overlay {background-color:<?php echo get_option('mfbfw_overlayColor'); ?>}</style><?php
  
}


function mfbfw_do() { ?>

  <script type="text/javascript">

  <?php if (get_option('mfbfw_jQnoConflict') == 'on') { ?> jQuery.noConflict(); <?php } ?>

  jQuery(function(){

    <?php if (get_option('mfbfw_autoApply') == 'on') { ?>

      jQuery("a:has(img)[href$='.jpg']").attr({ rel: "fancybox" });  	// These five lines add the rel="fancybox" attribute to all links that contain
      jQuery("a:has(img)[href$='.jpeg']").attr({ rel: "fancybox" });	// an image (i.e thumbnail) and link to a JPG, JPEG, PNG, GIF or BMP image.
      jQuery("a:has(img)[href$='.gif']").attr({ rel: "fancybox" });
      jQuery("a:has(img)[href$='.png']").attr({ rel: "fancybox" });
      jQuery("a:has(img)[href$='.bmp']").attr({ rel: "fancybox" });

    <?php } ?>

    // This applies fancybox to the links we have just edited and applies the options set by the user on the admin panel.
    jQuery("a[rel='fancybox']").fancybox({
      'imageScale': <?php if (get_option('mfbfw_imageScale') == 'on') { echo "true"; } else { echo "false"; } ?>,
      'zoomOpacity': <?php if (get_option('mfbfw_zoomOpacity') == 'on') { echo "true"; } else { echo "false"; } ?>,
      'zoomSpeedIn': <?php echo get_option('mfbfw_zoomSpeedIn'); ?>,
      'zoomSpeedOut': <?php echo get_option('mfbfw_zoomSpeedOut'); ?>,
      'overlayShow': <?php if (get_option('mfbfw_overlayShow') == 'on') { echo "true"; } else { echo "false"; } ?>,
      'overlayOpacity': <?php echo get_option('mfbfw_overlayOpacity'); ?>,
      'hideOnContentClick': <?php if (get_option('mfbfw_hideOnContentClick') == 'on') { echo "true"; } else { echo "false"; } ?>,
      'centerOnScroll': <?php if (get_option('mfbfw_centerOnScroll') == 'on') { echo "true"; } else { echo "false"; } ?>
    });

  });

  </script>
	
  <?php echo "<!-- Fancybox for WordPress -->"."\n";

}


function mfbfw_admin() {

  require dirname(__FILE__) . '/admin.php';
  add_options_page('Fancybox for WordPress Options', 'Fancybox for WordPress', 10, __FILE__, 'mfbfw_options');
  
}



// Start calling the functions
add_action('wp_print_scripts', 'mfbfw_init'); // Add the fancybox script to the WordPress head
add_action('wp_head', 'mfbfw_css');           // Load stylesheet
add_action('wp_head', 'mfbfw_do');            // Apply fancyboy when the page loads
add_action('admin_menu', 'mfbfw_admin');      // Admin Panel Page

?>