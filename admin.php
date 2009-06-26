<?php

function mfbfw_options_page() {

  // Get array with all the options
  $settings = mfbfw_get_settings();

  // Make selects data
	$closePositionArray = array('left','right');
  $overlayArray = array(0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1);
	$msArray = array(0,100,200,300,400,500,600,700,800,900,1000,1250,1500,1750,2000);
  $easingArray = array('easeInQuad','easeOutQuad','easeInOutQuad','easeInCubic','easeOutCubic','easeInOutCubic','easeInQuart','easeOutQuart',
                       'easeInOutQuart','easeInQuint','easeOutQuint','easeInOutQuint','easeInSine','easeOutSine','easeInOutSine','easeInExpo',
                       'easeOutExpo','easeInOutExpo','easeInCirc','easeOutCirc','easeInOutCirc','easeInElastic','easeOutElastic','easeInOutElastic',
                       'easeInBack','easeOutBack','easeInOutBack','easeInBounce','easeOutBounce','easeInOutBounce');

  // Start the Options Page ?>

  <div class="wrap">

    <div id="icon-plugins" class="icon32"></div><h2><?php printf(__('Fancybox for WordPress Options (version %s)', 'mfbfw'), $settings['version']); ?></h2>

    <div style="float:right;margin-left:10px;background:#FFFBCC;text-align:center;width:200px;" class="updated">

      <p style="line-height:1.5em;"><?php _e('If you use FancyBox and like it, buy the author a beer!', 'mfbfw'); ?></p>

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
    
      <p style="line-height:1.5em;"><?php _e('The author of this WordPress Plugin also likes beer :P', 'mfbfw'); ?></p>
      
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick"/>
        <input type="hidden" name="hosted_button_id" value="3878319"/>
        <input type="image" border="0" src="<?php echo WP_PLUGIN_URL ?>/fancybox-for-wordpress/img/extra_donate.png" name="submit" alt="PayPal - The safer, easier way to pay online!"/>
        <img height="1" width="1" border="0" alt="" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" />
      </form>
      
    </div>

    <div style="clear:right;float:right;margin-left:10px;background:#9DD1F2;border-color:#419ED9;padding-bottom:5px;text-align:center;width:200px;" class="updated">

      <p style="line-height:1.5em;"><a href="http://twitter.com/moskis/"><?php _e('Follow me on Twitter for more WordPress Plugins and Themes', 'mfbfw'); ?></a></p>

      <img height="16" width="16" border="0" alt="" src="<?php echo WP_PLUGIN_URL ?>/fancybox-for-wordpress/img/extra_twitter.png" />

    </div>


    <h2><?php _e('Info & Support', 'mfbfw'); ?></h2>

    <p><?php _e('<a href="http://fancy.klade.lv/home">FancyBox</a> developed by <a href="http://kac.klade.lv/">Janis Skarnelis</a>, ported to WordPress by <a href="http://moskis.net/">Jos&eacute; Pardilla</a>. Licensed under the <a target="_blank" href="http://en.wikipedia.org/wiki/MIT_License">MIT License</a>.', 'mfbfw'); ?></p>

    <p><?php _e('As you can see, this plugin has many options you can edit, but have no fear, you can leave everything as it is if you want, since the default options should be a good start... :)', 'mfbfw'); ?></p>

    <ul style="list-style-type:disc;padding-left:15px;">

      <li><?php _e('If you have problems or questions about FancyBox, please start with these links: <a href="http://fancy.klade.lv/howto">How-To</a> & <a href="http://fancy.klade.lv/faq">FAQ</a>.<br />If that does not help, go to <a href="http://groups.google.com/group/fancybox">the FancyBox Google Group</a>, use the <strong>Search</strong> option, and if necesary, post your question.', 'mfbfw'); ?></li>

      <li><?php _e('If you are having trouble with this plugin try to localize the problem (switch your theme and/or deactivate plugins until you find the source of the problem). You can also try the Troubleshooting settings at the bottom of this page if necesary. If you still can not get the plugin to work, <a href="http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/">leave a comment here</a> explaining the problem.', 'mfbfw'); ?></li>

    </ul>
    

    <h2><?php _e('Appearance Settings <span style="color:green">(basic)</span>', 'mfbfw'); ?></h2>

    <p><?php _e('These are the main settings, which let you tweak color, borders and animation.', 'mfbfw'); ?></p>

    <small><em><?php _e('<strong>Note:</strong> Having a cache plugin may prevent changes from taking effect immidiately, so clear cache after saving changes here or deactivate cache until you finish editing these options.', 'mfbfw'); ?></em></small><br /><br />

    <form method="post" action="options.php" id="options">

      <?php
      
      wp_nonce_field('update-options');
      settings_fields('mfbfw-options');

      ?>

      <table class="form-table" style="clear:none;">
        <tbody>

          <tr valign="top">
            <th scope="row"><?php _e('Border Color', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_borderColor">
                  <input type="text" name="mfbfw_borderColor" id="mfbfw_borderColor" value="<?php echo $settings['borderColor'] ?>" size="7" maxlength="7" />
                  <?php _e('HTML color of the border (default: #BBBBBB)', 'mfbfw'); ?>
                </label><br /><br />
                
              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Close Button Position', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <input id="mfbfw_closePosLeft" type="radio" value="left" name="mfbfw_closeHorPos"<?php if ($settings['closeHorPos'] == 'left') echo ' checked="yes"';?> />
                <label for="mfbfw_closePosLeft" style="padding-right:15px">
                  <?php _e('Left', 'mfbfw'); ?>
                </label>

                <input id="mfbfw_closePosRight" type="radio" value="right" name="mfbfw_closeHorPos"<?php if ($settings['closeHorPos'] == 'right') echo ' checked="yes"';?> />
                <label for="mfbfw_closePosRight">
                  <?php _e('Right (default)', 'mfbfw'); ?>
                </label><br /><br />
                
                <input id="mfbfw_closePosBottom" type="radio" value="bottom" name="mfbfw_closeVerPos"<?php if ($settings['closeVerPos'] == 'bottom') echo ' checked="yes"';?> />
                <label for="mfbfw_closePosBottom" style="padding-right:15px">
                  <?php _e('Bottom', 'mfbfw'); ?>
                </label>

                <input id="mfbfw_closePosTop" type="radio" value="top" name="mfbfw_closeVerPos"<?php if ($settings['closeVerPos'] == 'top') echo ' checked="yes"';?> />
                <label for="mfbfw_closePosTop">
                  <?php _e('Top (default)', 'mfbfw'); ?>
                </label><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Padding', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_paddingColor">
                  <input type="text" name="mfbfw_paddingColor" id="mfbfw_paddingColor" value="<?php echo $settings['paddingColor'] ?>" size="7" maxlength="7" />
                  <?php _e('HTML color of the padding (default: #FFFFFF)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_padding">
                  <input type="text" name="mfbfw_padding" id="mfbfw_padding" value="<?php echo $settings['padding']; ?>" size="7" maxlength="7" />
                  <?php _e('Padding size in pixels (default: 10)', 'mfbfw'); ?>
                </label><br />

                <small><em><?php _e('(Set <strong>Border Color</strong> to "#000000" and <strong>Padding Size</strong> to "0" for the classic FancyBox look)', 'mfbfw'); ?></em></small><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Overlay Options', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_overlayShow">
                  <input type="checkbox" name="mfbfw_overlayShow" id="mfbfw_overlayShow"<?php if ($settings['overlayShow']) echo ' checked="yes"';?> />
                  <?php _e('Add overlay (default: on)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_overlayColor">
                  <input type="text" name="mfbfw_overlayColor" id="mfbfw_overlayColor" value="<?php echo $settings['overlayColor']; ?>" size="7" maxlength="7" />
                  <?php _e('HTML color of the overlay (default: #666666)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_overlayOpacity">
                  <select name="mfbfw_overlayOpacity" id="mfbfw_overlayOpacity">
                    <?php
                    foreach($overlayArray as $key=> $opacity) {
                      if($settings['overlayOpacity'] != $opacity) $selected = '';
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
            <th scope="row"><?php _e('Zoom Options', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_zoomOpacity">
                  <input type="checkbox" name="mfbfw_zoomOpacity" id="mfbfw_zoomOpacity"<?php if ($settings['zoomOpacity']) echo ' checked="yes"';?> />
                  <?php _e('Change content transparency during zoom animations (default: on)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_zoomSpeedIn">
                  <select name="mfbfw_zoomSpeedIn" id="mfbfw_zoomSpeedIn">
                    <?php
                    foreach($msArray as $key=> $ms) {
                      if($settings['zoomSpeedIn'] != $ms) $selected = '';
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
                      if($settings['zoomSpeedOut'] != $ms) $selected = '';
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
            <th scope="row"><?php _e('Easing', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_easing">
                  <input type="checkbox" name="mfbfw_easing" id="mfbfw_easing"<?php if ($settings['easing']) echo ' checked="yes"';?> />
                  <?php _e('Activate easing (default: off)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_easingIn">
                  <select name="mfbfw_easingIn" id="mfbfw_easingIn">
                    <?php
                    foreach($easingArray as $key=> $easingIn) {
                      if($settings['easingIn'] != $easingIn) $selected = '';
                      else $selected = ' selected';
                      echo "<option value='$easingIn'$selected>$easingIn</option>\n";
                    }
                    ?>
                  </select>
                  <?php _e('Easing method when opening FancyBox. (default: easeOutBack)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_easingOut">
                  <select name="mfbfw_easingOut" id="mfbfw_easingOut">
                    <?php
                    foreach($easingArray as $key=> $easingOut) {
                      if($settings['easingOut'] != $easingOut) $selected = '';
                      else $selected = ' selected';
                      echo "<option value='$easingOut'$selected>$easingOut</option>\n";
                    }
                    ?>
                  </select>
                  <?php _e('Easing method when closing FancyBox. (default: easeInBack)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_easingChange">
                  <select name="mfbfw_easingChange" id="mfbfw_easingChange">
                    <?php
                    foreach($easingArray as $key=> $easingChange) {
                      if($settings['easingChange'] != $easingChange) $selected = '';
                      else $selected = ' selected';
                      echo "<option value='$easingChange'$selected>$easingChange</option>\n";
                    }
                    ?>
                  </select>
                  <?php _e('Easing method when navigating through gallery items. (default: easeInOutQuart)', 'mfbfw'); ?>
                </label><br />

                <small><em><?php _e('(There are 30 different easing methods, the first ones are the most boring. You can test them <a href="http://commadot.com/jquery/easing.php" target="_blank">here</a> or <a href="http://hosted.zeh.com.br/mctween/animationtypes.html" target="_blank">here</a>)', 'mfbfw'); ?></em></small><br /><br />

              </fieldset>
            </td>
          </tr>

        </tbody>
      </table>

      <span id="advOpsSwitch" class="button"><?php _e('Show/Hide Advanced Settings', 'mfbfw'); ?></span>&nbsp;
      <span id="troOpsSwitch" class="button"><?php _e('Show/Hide Troubleshooting &amp; Uninstall Settings', 'mfbfw'); ?></span><br /><br />

      <div style="display:none" class="advOpts">


      <h2><?php _e('Behavior Settings <span style="color:orange">(medium)</span>', 'mfbfw'); ?></h2>

      <p><?php _e('The following settings should be left on default unless you know what you are doing.', 'mfbfw'); ?></p>

      <table class="form-table" style="clear:none;">
        <tbody>

          <tr valign="top">
            <th scope="row"><?php _e('Auto Resize to Fit', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_imageScale">
                  <input type="checkbox" name="mfbfw_imageScale" id="mfbfw_imageScale"<?php if ($settings['imageScale']) echo ' checked="yes"';?> />
                  <?php _e('Scale images to fit in viewport (default: on)', 'mfbfw'); ?>
                </label><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Center on Scroll', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_centerOnScroll">
                  <input type="checkbox" name="mfbfw_centerOnScroll" id="mfbfw_centerOnScroll"<?php if ($settings['centerOnScroll']) echo ' checked="yes"';?> />
                  <?php _e('Keep image in the center of the browser window when scrolling (default: on)', 'mfbfw'); ?>
                </label><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Close on Click', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_hideOnContentClick">
                  <input type="checkbox" name="mfbfw_hideOnContentClick" id="mfbfw_hideOnContentClick"<?php if ($settings['hideOnContentClick']) echo ' checked="yes"';?> />
                  <?php _e('Close FancyBox by clicking on the image (default: off)', 'mfbfw'); ?>
                </label><br />

                <small><em><?php _e('(You may want to leave this off if you display iframed or inline content and it containts clickable elements - for example: play buttons for movies, links to other pages)', 'mfbfw'); ?></em></small><br /><br />

              </fieldset>
            </td>
          </tr>

        </tbody>
      </table>


      <h2><?php _e('Gallery Settings <span style="color:red">(advanced)</span>', 'mfbfw'); ?></h2>

      <p><?php _e('Here you can choose if you want the plugin to group all images into a gallery, or make a gallery for each post. You can also define you own jQuery expression if you like.', 'mfbfw'); ?></p>

      <table class="form-table" style="clear:none;">
        <tbody>

          <tr valign="top">
            <th scope="row"><?php _e('Frame Size', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_frameWidth">
                  <input type="text" name="mfbfw_frameWidth" id="mfbfw_frameWidth" value="<?php echo $settings['frameWidth']; ?>" size="4" maxlength="4" />
                  <?php _e('Width in pixels of FancyBox when showing iframe content (default: 640)', 'mfbfw'); ?>
                </label><br /><br />

                <label for="mfbfw_frameHeight">
                  <input type="text" name="mfbfw_frameHeight" id="mfbfw_frameHeight" value="<?php echo $settings['frameHeight']; ?>" size="4" maxlength="4" />
                  <?php _e('Height in pixels of FancyBox when showing iframe content (default: 500)', 'mfbfw'); ?>
                </label><br /><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('Gallery Type', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <input id="mfbfw_galleryTypeAll" type="radio" value="all" name="mfbfw_galleryType"<?php if ($settings['galleryType'] == 'all') echo ' checked="yes"';?> />
                <label for="mfbfw_galleryTypeAll">
                  <?php _e('Make a gallery for all images on the page (default)', 'mfbfw'); ?>
                </label><br />

                <input id="mfbfw_galleryTypeNone" type="radio" value="none" name="mfbfw_galleryType"<?php if ($settings['galleryType'] == 'none') echo ' checked="yes"';?> />
                <label for="mfbfw_galleryTypeNone">
                  <?php _e('Do not group images in gallery automatically (use this if you want to make galleries manually with the <code>REL</code> attribute)', 'mfbfw'); ?>
                </label><br />

                <input id="mfbfw_galleryTypePost" type="radio" value="post" name="mfbfw_galleryType"<?php if ($settings['galleryType'] == 'post') echo ' checked="yes"';?> />
                <label for="mfbfw_galleryTypePost">
                  <?php _e('Make a gallery for each post (will only work if your theme uses <code>class="post"</code> on each post, which is common in WordPress', 'mfbfw'); ?>
                </label><br />

                <input id="mfbfw_galleryTypeCustom" type="radio" value="custom" name="mfbfw_galleryType"<?php if ($settings['galleryType'] == 'custom') echo ' checked="yes"';?> />
                <label for="mfbfw_galleryTypeCustom">
                  <?php _e('Use a custom expression to apply FancyBox', 'mfbfw'); ?>
                </label><br /><br />

                <div id="customExpressionBlock">

                <label for="mfbfw_customExpression">
                  <textarea rows="10" cols="50" class="large-text code" name="mfbfw_customExpression" wrap="physical" id="mfbfw_customExpression"><?php echo ($settings['customExpression']); ?></textarea>
                </label><br />

                <small><strong><em><?php _e('Custom expression guidelines:', 'mfbfw'); ?></em></strong></small><br />

                <small><em><?php _e('&middot; The custom expression has to apply <code>class="fancybox"</code> to the links where you want to use FancyBox. Do not call the <code>fancybox()</code> function here, the plugin does this for you.', 'mfbfw'); ?></em></small><br />

                <small><em><?php _e('&middot; The jQuery <code>addClass()</code> function is a good way to add the class to the desired links conserving any existing class.', 'mfbfw'); ?></em></small><br />

                <small><em><?php _e('&middot; You can use <code>getTitle()</code> in your expression to copy the title attribute from the <code>IMG</code> tag to the <code>A</code> tag, so that FancyBox can show captions.', 'mfbfw'); ?></em></small><br />

                <small><em><?php _e('&middot; You can use <code>jQuery(thumbnails)</code> like in the example expression to apply FancyBox to thumbnails that link to these extensions: BMP, GIF, JPG, JPEG, PNG (both lowercase and uppercase).', 'mfbfw'); ?></em></small><br />

                <small><em><?php _e('&middot; If you want to do it manually you can use something like <code>jQuery("a:has(img)[href$=\'.jpg\']")</code> or whatever works for you.', 'mfbfw'); ?></em></small><br />

                <small><em><?php _e('See the <a href="http://docs.jquery.com/" target="_blank">jQuery Documentation</a> for more help.', 'mfbfw'); ?></em></small><br /><br />

                <small><strong><em><?php _e('Examples:', 'mfbfw'); ?></em></strong></small><br />

                <small><em><code>jQuery(thumbnails).addClass("fancybox").attr("rel","fancybox").getTitle();</code></em></small><br />

                <small><em><code>jQuery("a:has(img)[href$='.jpg']").addClass("fancybox").attr("rel","fancybox").getTitle();</code></em></small><br /><br />

                </div>

              </fieldset>
            </td>
          </tr>

        </tbody>
      </table>

      </div>


      <div style="display:none" class="troOpts">

      <h2><?php _e('Troubleshooting Settings', 'mfbfw'); ?></h2>

      <p><span style="color:red;"><?php _e('Settings in this section should only be changed if you are having problems with the plugin!', 'mfbfw'); ?></span></p>

      <p><?php _e('If the plugin doesn\'t seem to work, first you should check for other plugins that may be conflicting with this one, especially other Lightbox, Slimbox, etc. Make sure all your plugins and WordPress itself are up to date (this plugin has only been tested in WordPress 2.7 and above).', 'mfbfw'); ?></p>

      <p><?php _e('Change them one at a time and test to see if they help. Remember that having a cache plugin may prevent changes from taking effect immidiately, so clear cache after saving changes here or deactivate cache until you finish editing these options.', 'mfbfw'); ?></p><br />

      <table class="form-table" style="clear:none;">
        <tbody>

          <tr valign="top">
            <th scope="row"><?php _e('Do not call jQuery', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_nojQuery">
                  <input type="checkbox" name="mfbfw_nojQuery" id="mfbfw_nojQuery"<?php if ($settings['nojQuery']) echo ' checked="yes"';?> />
                  <?php _e('Skip jQuery call. Use this only if jQuery is being loaded twice (default: off)', 'mfbfw'); ?>
                </label><br />

              </fieldset>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row"><?php _e('jQuery "noConflict" Mode', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_jQnoConflict">
                  <input type="checkbox" name="mfbfw_jQnoConflict" id="mfbfw_jQnoConflict"<?php if ($settings['jQnoConflict']) echo ' checked="yes"';?> />
                  <?php _e('Use jQuery noConflict mode (default: on)', 'mfbfw'); ?>
                </label><br />

                <small><em><?php _e('(Turning this off may cause problems if there are plugins activated that use other js framework like mootools, prototype, scriptaculous, etc.)', 'mfbfw'); ?></em></small><br /><br />

              </fieldset>
            </td>
          </tr>

        </tbody>
      </table>

      <h2><?php _e('Uninstall', 'mfbfw'); ?></h2>

      <p><?php _e('Like many other plugins, FancyBox for WordPress stores its settings on your WordPress\' options database table. Actually, these settings are not using more than a couple of kilobytes of space, but if you want to completely uninstall this plugin, check the option below, then save changes, and <strong>when you deactivate the plugin</strong>, all its settings will be removed from the database.', 'mfbfw'); ?></p>

      <table class="form-table" style="clear:none;">
        <tbody>

          <tr valign="top">
            <th scope="row"><?php _e('Remove settings', 'mfbfw'); ?></th>
            <td>
              <fieldset>

                <label for="mfbfw_uninstall">
                  <input type="checkbox" name="mfbfw_uninstall" id="mfbfw_uninstall"<?php if ($settings['uninstall']) echo ' checked="yes"';?> />
                  <?php _e('Remove Settings when plugin is deactivated from the "Manage Plugins" page. (default: off)', 'mfbfw'); ?>
                </label><br />

              </fieldset>
            </td>
          </tr>

        </tbody>
      </table>

      </div>


      <input type="hidden" name="action" value="update" />

      <p class="submit">
        <input type="submit" name="Submit" class="button-primary" value="<?php _e('Save Changes','mfbfw'); ?>" />
      </p>

    </form>

</div>

<?php } ?>
