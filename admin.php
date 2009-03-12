<?php

function mfbfw_options() {

  // Set defaults
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

  // Store plugin options in an array
  $options=array(
    'autoApply' => get_option('mfbfw_autoApply'),
    'imageScale' => get_option('mfbfw_imageScale'),
    'zoomOpacity' => get_option('mfbfw_zoomOpacity'),
    'zoomSpeedIn' => get_option('mfbfw_zoomSpeedIn'),
    'zoomSpeedOut' => get_option('mfbfw_zoomSpeedOut'),
    'overlayShow' => get_option('mfbfw_overlayShow'),
    'overlayColor' => get_option('mfbfw_overlayColor'),
    'overlayOpacity' => get_option('mfbfw_overlayOpacity'),
    'hideOnContentClick' => get_option('mfbfw_hideOnContentClick'),
    'centerOnScroll' => get_option('mfbfw_centerOnScroll')
  );

  // Make selects data
	$overlayArray = array(0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$msArray = array(0,100,200,300,400,500,600,700,800,900,1000,1500);

  
  // Start the Options Page
  ?>

  <div class="wrap">

    <div id="icon-plugins" class="icon32"></div>
    <h2><?php _e('Fancybox for WordPress Options', 'mfbfw'); ?></h2>

    <div style="float:right;margin-left:10px;background:#FFFBCC;text-align:center;width:200px;" class="updated">

      <p style="line-height:1.5em;">If you use FancyBox and like it, buy the author a beer!</p>

      <form id="donate_form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input name="cmd" value="_donations" type="hidden">
				<input name="business" value="janis.skarnelis@gmail.com" type="hidden">
				<input name="item_name" value="FancyBox" type="hidden">
				<input name="amount" value="10.00" type="hidden">
				<input name="no_shipping" value="0" type="hidden">
				<input name="logo_custom" value="http://donate.png" type="hidden">
				<input name="no_note" value="1" type="hidden">
				<input name="currency_code" value="EUR" type="hidden">
				<input name="tax" value="0" type="hidden">
				<input name="lc" value="LV" type="hidden">
				<input name="bn" value="PP-DonationsBF" type="hidden">
        <input type="image" border="0" src="<?php echo WP_PLUGIN_URL ?>/fancybox-for-wordpress/img/extra_donate.png" name="submit" alt="PayPal - The safer, easier way to pay online!"/>
      </form>

    </div>
    
    <div style="clear:right;float:right;margin-left:10px;background:#FFFBCC;text-align:center;width:200px;" class="updated">
    
      <p style="line-height:1.5em;">The author of this WordPress Plugin also likes beer :P</p>
      
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick"/>
        <input type="hidden" name="hosted_button_id" value="3878319"/>
        <input type="image" border="0" src="<?php echo WP_PLUGIN_URL ?>/fancybox-for-wordpress/img/extra_donate.png" name="submit" alt="PayPal - The safer, easier way to pay online!"/>
        <img height="1" width="1" border="0" alt="" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" />
      </form>
      
    </div>

    <div style="clear:right;float:right;margin-left:10px;background:#9DD1F2;border-color:#419ED9;text-align:center;width:200px;" class="updated">

      <p style="line-height:1.5em;"><a href="http://twitter.com/moskis/">Follow me on Twitter for more WordPress Plugins and Themes.</a></p>

      <img height="16" width="16" border="0" alt="" src="<?php echo WP_PLUGIN_URL ?>/fancybox-for-wordpress/img/extra_twitter.png" />

    </div>

    <h3><?php _e('About', 'mfbfw'); ?></h3>

    <p><?php _e('This plugin integrates FancyBox with WordPress without having to edit any file or code. Once activated the plugin will apply FancyBox automatically to all image links, including WordPress galleries. Future versions will include some more options like easier inline content integration and more advanced customization. Enjoy!'); ?></p>

    <p><?php _e('If you have problems or questions about FancyBox itself you should <a href="http://groups.google.com/group/fancybox">ask in the FancyBox Google Group</a>. If you want to make suggestions or ask just about this WordPress plugin you can <a href="http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/">leave a comment here</a>, <a href="http://blog.moskis.net/contactar/">send me an email</a>, or <a href="http://twitter.com/moskis">contact me on twitter</a>.'); ?></p>

    <p><?php _e('<a href="http://fancy.klade.lv/home">FancyBox</a> developed by <a href="http://kac.klade.lv/">Janis Skarnelis</a>, ported to WordPress by <a href="http://moskis.net/">Jos&eacute; Pardilla</a>. Licensed under the <a target="_blank" href="http://en.wikipedia.org/wiki/MIT_License">MIT License</a>.'); ?></p><br />

    <h3><?php _e('Settings', 'mfbfw'); ?></h3>

    <form method="post" action="options.php" id="options"><?php	echo wp_nonce_field('update-options'); ?>

      <table class="form-table" style="clear:none;">
        <tbody>

          <tr valign="top">
            <th scope="row"><?php _e('Auto Apply', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_autoApply">
                  <input type="checkbox" name="mfbfw_autoApply" id="mfbfw_autoApply"<?php if (get_option('mfbfw_autoApply') == 'on') echo ' checked="yes"';?> />
                  <?php _e('Apply FancyBox automatically to all links pointing to .jpg, .jpeg, .png or .gif images (default: on)', 'mfbfw'); ?>
                </label><br />
                <small><em><?php _e('(The link itself must the an image as well, text links will not be affected by this option!)', 'mfbfw'); ?></em></small><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Auto Resize to Fit', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_imageScale">
                  <input type="checkbox" name="mfbfw_imageScale" id="mfbfw_imageScale"<?php if (get_option('mfbfw_imageScale') == 'on') echo ' checked="yes"';?> />
                  <?php _e('Scale images to fit in viewport (default: on)', 'mfbfw'); ?>
                </label><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Zoom Options', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_zoomOpacity">
                  <input type="checkbox" name="mfbfw_zoomOpacity" id="mfbfw_zoomOpacity"<?php if (get_option('mfbfw_zoomOpacity') == 'on') echo ' checked="yes"';?> />
                  <?php _e('Change content transparency when animating (default: on)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_zoomSpeedIn">
                  <select name="mfbfw_zoomSpeedIn" id="mfbfw_zoomSpeedIn">
                    <?php
                    foreach($msArray as $key=> $ms) {
                      if($options['zoomSpeedIn'] != $ms) $selected = '';
                      else $selected = ' selected';
                      echo "<option value='$ms'$selected>$ms</option>\n";
                    } ?>
                  </select>
                  <?php _e('Speed in miliseconds of the zooming-in animation (default: 500)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_zoomSpeedOut">
                  <select name="mfbfw_zoomSpeedOut" id="mfbfw_zoomSpeedOut">
                    <?php
                    foreach($msArray as $key=> $ms) {
                      if($options['zoomSpeedOut'] != $ms) $selected = '';
                      else $selected = ' selected';
                      echo "<option value='$ms'$selected>$ms</option>\n";
                    } ?>
                  </select>
                  <?php _e('Speed in miliseconds of the zooming-out animation (default: 500)', 'mfbfw'); ?>
                </label><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Overlay Options', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_overlayShow">
                  <input type="checkbox" name="mfbfw_overlayShow" id="mfbfw_overlayShow"<?php if (get_option('mfbfw_overlayShow') == 'on') echo ' checked="yes"';?> />
                  <?php _e('Add overlay (default: on)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_overlayColor">
                  <input type="text" name="mfbfw_overlayColor" id="mfbfw_overlayColor" value="<?php echo get_option('mfbfw_overlayColor'); ?>" size="7" maxlength="7" />
                  <?php _e('HTML color of the overlay (default: #666666)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_overlayOpacity">
                  <select name="mfbfw_overlayOpacity" id="mfbfw_overlayOpacity">
                    <?php
                    foreach($overlayArray as $key=> $opacity) {
                      if($options['overlayOpacity'] != $opacity) $selected = '';
                      else $selected = ' selected';
                      echo "<option value='$opacity'$selected>$opacity</option>\n";
                    }
                    ?>
                  </select>
                  <?php _e('Opacity of overlay. 0 is transparent, 1 is opaque (default: 0.3)', 'mfbfw'); ?>
                </label><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Close on Click', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_hideOnContentClick">
                  <input type="checkbox" name="mfbfw_hideOnContentClick" id="mfbfw_hideOnContentClick"<?php if (get_option('mfbfw_hideOnContentClick') == 'on') echo ' checked="yes"';?> />
                  <?php _e('Close FancyBox by clicking on the image (default: off)', 'mfbfw'); ?>
                </label><br />
                <small><em><?php _e('(This does NOT conflict with the previous and next image links on FancyBox galleries.)', 'mfbfw'); ?></em></small><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Center on Scroll', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_centerOnScroll">
                  <input type="checkbox" name="mfbfw_centerOnScroll" id="mfbfw_centerOnScroll"<?php if (get_option('mfbfw_centerOnScroll') == 'on') echo ' checked="yes"';?> />
                  <?php _e('Keep image in the center of the browser window when scrolling (default: on)', 'mfbfw'); ?>
                </label><br /><br />

              </fieldset>
            </td>
          </tr>

        </tbody>
      </table>


      <input type="hidden" name="action" value="update" />
      <input type="hidden" name="page_options" value="mfbfw_autoApply,mfbfw_imageScale,mfbfw_zoomOpacity,mfbfw_zoomSpeedIn,mfbfw_zoomSpeedOut,mfbfw_overlayShow,mfbfw_overlayColor,mfbfw_overlayOpacity,mfbfw_hideOnContentClick,mfbfw_centerOnScroll" />

      <p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options','mfbfw'); ?>" /></p>

    </form>

</div>

<?php } ?>
