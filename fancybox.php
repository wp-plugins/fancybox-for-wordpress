<?php
/*
Plugin Name: FancyBox for WordPress
Plugin URI: http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/
Description: Integrates <a href="http://fancy.klade.lv/">FancyBox</a> by <a href="http://klade.lv/">Janis Skarnelis</a> into WordPress. All images on a page are treated as a gallery allowing visitors to use Next and Previous buttons on the FancyBox frontend.
Version: 2.5 Beta
Author: Jose Pardilla
Author URI: http://moskis.net/
*/


// When plugin is activated, update version, and set any new settings to default
function mfbfw_install() {

    update_option('mfbfw_active_version', '2.5 Beta');

    add_option('mfbfw_borderColor', '#BBBBBB');
    add_option('mfbfw_closePosition', 'right');
    add_option('mfbfw_paddingColor', '#FFFFFF');
    add_option('mfbfw_padding', '10');
    add_option('mfbfw_overlayShow', 'on');
    add_option('mfbfw_overlayColor', '#666666');
    add_option('mfbfw_overlayOpacity', '0.3');
    add_option('mfbfw_zoomOpacity', 'on');
    add_option('mfbfw_zoomSpeedIn', '500');
    add_option('mfbfw_zoomSpeedOut', '500');
    add_option('mfbfw_easing', '');
    add_option('mfbfw_easingIn', 'easeOutBack');
    add_option('mfbfw_easingOut', 'easeInBack');
    add_option('mfbfw_easingChange', 'easeInOutQuart');

    add_option('mfbfw_imageScale', 'on');
    add_option('mfbfw_centerOnScroll', 'on');
    add_option('mfbfw_hideOnContentClick', '');
    add_option('mfbfw_frameWidth', '640');
    add_option('mfbfw_frameHeight', '500');

    add_option('mfbfw_galleryType', 'all');
    add_option('mfbfw_customExpression',
'// This example expression will group all the image links after each H3 headline
// in a post or page and make a gallery with each group.

jQuery("h3:eq(0)").nextAll("a:has(img)[href$=".jpg"]").attr("rel","fancybox1");
jQuery("h3:eq(1)").nextAll("a:has(img)[href$=".jpg"]").attr("rel","fancybox2");
jQuery("h3:eq(2)").nextAll("a:has(img)[href$=".jpg"]").attr("rel","fancybox3");
jQuery("h3:eq(3)").nextAll("a:has(img)[href$=".jpg"]").attr("rel","fancybox4");
jQuery("h3:eq(4)").nextAll("a:has(img)[href$=".jpg"]").attr("rel","fancybox5");');

    add_option('mfbfw_nojQuery', '');
    add_option('mfbfw_jQnoConflict', 'on');

    add_option('mfbfw_uninstall', '');
  
}


// If requested, when plugin is deactivated, remove settings
function mfbfw_uninstall() {

  if (get_option('mfbfw_uninstall')) {

    delete_option('mfbfw_active_version');

    delete_option('mfbfw_borderColor');
    delete_option('mfbfw_closePosition');
    delete_option('mfbfw_paddingColor');
    delete_option('mfbfw_padding');
    delete_option('mfbfw_overlayShow');
    delete_option('mfbfw_overlayColor');
    delete_option('mfbfw_overlayOpacity');
    delete_option('mfbfw_zoomOpacity');
    delete_option('mfbfw_zoomSpeedIn');
    delete_option('mfbfw_zoomSpeedOut');
    delete_option('mfbfw_easing');
    delete_option('mfbfw_easingIn');
    delete_option('mfbfw_easingOut');
    delete_option('mfbfw_easingChange');

    delete_option('mfbfw_imageScale');
    delete_option('mfbfw_centerOnScroll');
    delete_option('mfbfw_hideOnContentClick');
    delete_option('mfbfw_frameWidth');
    delete_option('mfbfw_frameHeight');

    delete_option('mfbfw_autoApply');
    delete_option('mfbfw_galleryType');
    delete_option('mfbfw_customExpression');

    delete_option('mfbfw_nojQuery');
    delete_option('mfbfw_jQnoConflict');

    delete_option('mfbfw_uninstall');

  }

}


// Store plugin options in an array and return that array
function mfbfw_get_settings() {

  $mfbfwSettingsArray=array(

    'version' => get_option('mfbfw_active_version'),

    'borderColor' => get_option('mfbfw_borderColor'),
    'closePosition' => get_option('mfbfw_closePosition'),
    'paddingColor' => get_option('mfbfw_paddingColor'),
    'padding' => get_option('mfbfw_padding'),
    'overlayShow' => get_option('mfbfw_overlayShow'),
    'overlayColor' => get_option('mfbfw_overlayColor'),
    'overlayOpacity' => get_option('mfbfw_overlayOpacity'),
    'zoomOpacity' => get_option('mfbfw_zoomOpacity'),
    'zoomSpeedIn' => get_option('mfbfw_zoomSpeedIn'),
    'zoomSpeedOut' => get_option('mfbfw_zoomSpeedOut'),
    'easing' => get_option('mfbfw_easing'),
    'easingIn' => get_option('mfbfw_easingIn'),
    'easingOut' => get_option('mfbfw_easingOut'),
    'easingChange' => get_option('mfbfw_easingChange'),

    'imageScale' => get_option('mfbfw_imageScale'),
    'centerOnScroll' => get_option('mfbfw_centerOnScroll'),
    'hideOnContentClick' => get_option('mfbfw_hideOnContentClick'),
    'frameWidth' => get_option('mfbfw_frameWidth'),
    'frameHeight' => get_option('mfbfw_frameHeight'),

    'galleryType' => get_option('mfbfw_galleryType'),
    'customExpression' => get_option('mfbfw_customExpression'),

    'nojQuery' => get_option('mfbfw_nojQuery'),
    'jQnoConflict' => get_option('mfbfw_jQnoConflict'),

    'uninstall' => get_option('mfbfw_uninstall')

  );

  return $mfbfwSettingsArray;

}


// Here we load FancyBox JS with jQuery and jQuery.easing if necessary
function mfbfw_load() {

  $settings = mfbfw_get_settings();

  if (!is_admin()) { // avoid the scripts from loading on admin panel

    if ($settings['nojQuery']) {

      wp_enqueue_script('fancybox', WP_PLUGIN_URL . '/fancybox-for-wordpress/jquery.fancybox-1.2.1.pack.js'); // Load fancybox without jQuery (for troubleshooting)

    } else {

      wp_enqueue_script('fancybox', WP_PLUGIN_URL . '/fancybox-for-wordpress/jquery.fancybox-1.2.1.pack.js', array('jquery'), '1.3.2'); // Load fancybox with jQuery

    }

    if (get_option('mfbfw_easing')) {

      wp_enqueue_script('jqueryeasing', WP_PLUGIN_URL . '/fancybox-for-wordpress/jquery.easing.1.3.js', array('jquery'), '1.3.2'); // Load easing javascript file if required

    }

  }
  
}


// Link to FancyBox stylesheet and apply some custom styles
function mfbfw_css() {

  $settings = mfbfw_get_settings();

  echo "\n"."<!-- Fancybox for WordPress v". $settings['version'] ." -->"."\n".'<link rel="stylesheet" href="'.WP_PLUGIN_URL.'/fancybox-for-wordpress/fancybox.css" type="text/css" media="screen" />'."\n";

  ?>

  <style type="text/css">
    div#fancy_overlay {background-color:<?php echo $settings['overlayColor']; ?>}
    div#fancy_inner {border-color:<?php echo $settings['borderColor']; ?>}
    div#fancy_close {<?php echo $settings['closePosition']; ?>:-15px}
    div#fancy_bg {background-color:<?php echo $settings['paddingColor']; ?>}
  </style>

  <?php
  
}


// Load FancyBox with the settings set
function mfbfw_init() {
  
  $settings = mfbfw_get_settings();
  
  ?>

<script type="text/javascript">

<?php if ($settings['jQnoConflict']) { ?>  jQuery.noConflict();<?php } echo "\n" ?>

  jQuery(function(){

  <?php if ($settings['galleryType'] == 'post') {

    // If gallery type is by post and we are on home, category, tag or archive
    if (is_home() | is_category() | is_tag() | is_archive() ) { ?>

    jQuery('.post:eq(0)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox1');
    jQuery('.post:eq(1)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox2');
    jQuery('.post:eq(2)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox3');
    jQuery('.post:eq(3)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox4');
    jQuery('.post:eq(4)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox5');
    jQuery('.post:eq(5)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox6');
    jQuery('.post:eq(6)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox7');
    jQuery('.post:eq(7)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox8');
    jQuery('.post:eq(8)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox9');
    jQuery('.post:eq(9)').contents().find("a:has(img)[href$='.jpg']").attr('rel','fancybox10');

    jQuery('.post:eq(0)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox1');
    jQuery('.post:eq(1)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox2');
    jQuery('.post:eq(2)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox3');
    jQuery('.post:eq(3)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox4');
    jQuery('.post:eq(4)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox5');
    jQuery('.post:eq(5)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox6');
    jQuery('.post:eq(6)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox7');
    jQuery('.post:eq(7)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox8');
    jQuery('.post:eq(8)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox9');
    jQuery('.post:eq(9)').contents().find("a:has(img)[href$='.jpeg']").attr('rel','fancybox10');

    jQuery('.post:eq(0)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox1');
    jQuery('.post:eq(1)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox2');
    jQuery('.post:eq(2)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox3');
    jQuery('.post:eq(3)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox4');
    jQuery('.post:eq(4)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox5');
    jQuery('.post:eq(5)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox6');
    jQuery('.post:eq(6)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox7');
    jQuery('.post:eq(7)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox8');
    jQuery('.post:eq(8)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox9');
    jQuery('.post:eq(9)').contents().find("a:has(img)[href$='.gif']").attr('rel','fancybox10');

    jQuery('.post:eq(0)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox1');
    jQuery('.post:eq(1)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox2');
    jQuery('.post:eq(2)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox3');
    jQuery('.post:eq(3)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox4');
    jQuery('.post:eq(4)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox5');
    jQuery('.post:eq(5)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox6');
    jQuery('.post:eq(6)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox7');
    jQuery('.post:eq(7)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox8');
    jQuery('.post:eq(8)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox9');
    jQuery('.post:eq(9)').contents().find("a:has(img)[href$='.png']").attr('rel','fancybox10');

    jQuery('.post:eq(0)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox1');
    jQuery('.post:eq(1)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox2');
    jQuery('.post:eq(2)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox3');
    jQuery('.post:eq(3)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox4');
    jQuery('.post:eq(4)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox5');
    jQuery('.post:eq(5)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox6');
    jQuery('.post:eq(6)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox7');
    jQuery('.post:eq(7)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox8');
    jQuery('.post:eq(8)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox9');
    jQuery('.post:eq(9)').contents().find("a:has(img)[href$='.bmp']").attr('rel','fancybox10');

  <?php }

  // If gallery type is by post but we are neither on home, category, tag or archive (so only one post or page is visible)
  else { ?>

    jQuery("a:has(img)[href$='.jpg']").attr({ rel: "fancybox" });
    jQuery("a:has(img)[href$='.jpeg']").attr({ rel: "fancybox" });
    jQuery("a:has(img)[href$='.gif']").attr({ rel: "fancybox" });
    jQuery("a:has(img)[href$='.png']").attr({ rel: "fancybox" });
    jQuery("a:has(img)[href$='.bmp']").attr({ rel: "fancybox" });

  <?php }
  
  }

  // If gallery type is all
  elseif ($settings['galleryType'] == 'all') { ?>

    jQuery("a:has(img)[href$='.jpg']").attr({ rel: "fancybox" });
    jQuery("a:has(img)[href$='.jpeg']").attr({ rel: "fancybox" });
    jQuery("a:has(img)[href$='.gif']").attr({ rel: "fancybox" });
    jQuery("a:has(img)[href$='.png']").attr({ rel: "fancybox" });
    jQuery("a:has(img)[href$='.bmp']").attr({ rel: "fancybox" });

  <?php }

  // Else, gallery type is custom, so we just print the custom expression
  else {

    echo $settings['customExpression'];

  } 

  // Now we call fancybox and apply it on any link with a rel atribute that starts with "fancybox", with the options set on the admin panel ?>
  jQuery("a[rel^='fancybox']").fancybox({
    'imageScale': <?php if ($settings['imageScale']) { echo "true"; } else { echo "false"; } ?>,
    'padding': <?php echo $settings['padding']; ?>,
    'zoomOpacity': <?php if ($settings['zoomOpacity']) { echo "true"; } else { echo "false"; } ?>,
    'zoomSpeedIn': <?php echo $settings['zoomSpeedIn']; ?>,
    'zoomSpeedOut': <?php echo $settings['zoomSpeedOut']; ?>,
    'overlayShow': <?php if ($settings['overlayShow']) { echo "true"; } else { echo "false"; } ?>,
    'overlayOpacity': <?php echo $settings['overlayOpacity']; ?>,
    'hideOnContentClick': <?php if ($settings['hideOnContentClick']) { echo "true"; } else { echo "false"; } ?>,
    'centerOnScroll': <?php if ($settings['centerOnScroll']) { echo "true"; } else { echo "false"; } ?><?php if ($settings['easing']) { ?>,
    'easingIn': <?php echo '"' . $settings['easingIn'] . '"'; ?>,
    'easingOut': <?php echo '"' . $settings['easingOut'] . '"'; ?>,
    'easingChange': <?php echo '"' . $settings['easingChange'] . '"'; ?>
    <?php } ?>

  });

})

</script>
<?php echo "<!-- Fancybox for WordPress v". $settings['version'] ." -->"."\n";

}


// Admin Head
function mfbfw_admin_head() {

  ?>

  <script type="text/javascript">

    jQuery(function(){
      // Advanced Options Switcher
      jQuery(document).ready(function(){
        jQuery("#advOpsSwitch").click(function(){
          jQuery(".advOpts").toggle("slow");
        });
      });
    })

  </script>

  <?php

}


// Admin options page
function mfbfw_admin_menu() {

  require dirname(__FILE__) . '/admin.php';
  
  add_submenu_page('options-general.php', 'Fancybox for WordPress Options', 'Fancybox for WordPress Options', 10, 'fancybox-for-wordpress', 'mfbfw_options_page');
  
}


// Load text domain
function mfbfw_textdomain() {

  if (function_exists('load_plugin_textdomain')) {
    load_plugin_textdomain('mfbfw', 'wp-content/plugins/fancybox-for-wordpress/languages', 'fancybox-for-wordpress/languages');
  }

}


// Settings Button on Plugins Panel
function mfbfw_plugin_action_links($links, $file) {

	static $this_plugin;
	if ( ! $this_plugin ) $this_plugin = plugin_basename(__FILE__);

	if ( $file == $this_plugin ){
		$settings_link = '<a href="options-general.php?page=fancybox-for-wordpress">' . __('Settings', 'mfbfw') . '</a>';
		array_unshift( $links, $settings_link );
	}

	return $links;

}



// Actions
add_action('init', 'mfbfw_textdomain');           // Load Text Domain
add_action('wp_print_scripts', 'mfbfw_load');     // Load FancyBox Script
add_action('wp_head', 'mfbfw_css');               // Fancybox Stylesheet
add_action('wp_head', 'mfbfw_init');              // Initiate Fancybox
add_action('admin_head', 'mfbfw_admin_head');     // Admin Panel Head
add_action('admin_menu', 'mfbfw_admin_menu');     // Admin Panel Page


// Filters
add_filter( 'plugin_action_links', 'mfbfw_plugin_action_links', 10, 2 ); // Settings Button on Plugins Panel


// Install and Uninstall
register_activation_hook(__FILE__,'mfbfw_install');
register_deactivation_hook(__FILE__,'mfbfw_uninstall');

?>