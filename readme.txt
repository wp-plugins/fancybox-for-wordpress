=== FancyBox for WordPress ===
Contributors: moskis
Donate link: https://www.asmallorange.com/extras/donate/?id=10218
Tags: fancybox, lightbox, jquery, image, gallery
Requires at least: 2.7
Tested up to: 2.8
Stable tag: 2.6.0

Seamlessly integrates FancyBox into your blog: Upload, activate, and you're done. No further configuration needed. However, you can customize it from the Options Page if you like... :)


== Description ==

Seamlessly integrates FancyBox into your blog: Upload, activate, and you're done. No further configuration needed. However, you can customize it from the Options Page if you like... :)

You can easely customize almost anything you can think about fancybox: the border, margin width and color, zoom speed, animation type, close button position, overlay color and opacity and even more advanced option like several options to group images into galleries, and more...

By default, the plugin will use jQuery to apply [FancyBox](http://fancy.klade.lv/) to ANY thumbnails that link directly to an image. This includes posts, the sidebar, etc, so you can activate it and it will be applied automatically.

Finally, i have only tested the plugin in WordPress 2.7, so it's very recomended to use it with WordPress 2.7 or later. After all, there's no reason why you shouldn't be already using WP2.7, is there? ;)


= Changelog =

2.6.0 Updates:

* Optimized the JavaScript code used to apply FancyBox
* Updated Custom Expression section in Options Page
* Fixed uppercase image extensions not being recognized
* CSS is now loaded before the JavaScript for better parallelization
* jquery.easing.1.3.js compressed (from 8,10kb to 3,47kb) and renamed to jquery.easing.1.3.pack.js
* Added Turkish translation (some strings missing)
* Added Japanese translation (some strings missing)
* Updated Spanish translation
* Updated to use new Plugin API in WP2.7 for better forward compatibility
* Removed /wp-content/ reference in fancybox.php for better WP2.8 support
* Optimized some code readability


2.5.1 Updates:

* Fixed the plugin not working when selecting Gallery Type "By Post"
* Fixed a bug that would prevent the title in the IMG tag from being copied to the A tag in some cases
* Fixed the Custom Expression showing in the Admin panel when other gallery types are selected


2.5 Updates:

* Support for localizations (Spanish and German localizations included)
* Some parts of the code completely rewritten
* Fixed fancybox files being loaded on the admin pages
* New options for close button position, custom jquery expressions, iframe content
* Options page mostly rewritten, better organized
* Medium/advanced, troubleshooting/uninstall options collapsable, hidden by default
* Better support guidelines and links on options page
* Settings link on the Manage plugins page
* Custom expression hidden when not used
* Title atribute on IMG tags is now copied to its parent A tag for better caption support
* New uninstall options and better handling of new options when installing/updating
* Cleans any old options no longer needed when plugin is activated/updated


2.2 Updtades:

* Updated to FancyBox 1.2.1
* Added new settings to Options Page: Easing, padding size, border color
* Tweaked CSS to prevent some themes from adding unwanted styles to fancybox (especially background colors and link outlines)
* Options Page reorganized in three sections: Appearance, Behaviour and Troubleshooting Settings, to make settings easier to find


2.1.1 Updtades:

* Fixed a new bug introduced in 2.1 that prevented options from being saved. Sorry about the mess :(


2.1 Updtades:

* Fixed a major bug in 2.0 that prevented it from working until plugin's options page was visited
* Added two options for troubleshooting that might help in some cases if the plugin doesn't work: disable jQuery noConflict and skip jQuery call
* Additional fixes to caption CSS: Captions should look better now in Hybrid theme, child themes, and other situations where general table elements are improperly styled


2.0 Updates:

* Brand new Options Page in Admin Panel lets you easely customize many options: fancybox auto apply, image resize to fit, opacity fade while zooming, zoom speed, overlay on/off, overlay color, overlay opacity, close fancybox on image click, keep fancybox centered while scrolling
* CSS completely updated for FancyBox 1.2.0
* Captions fixed in IE


1.3 Updates:

* Shadows and Close button should be fixed now


1.2 Updates:

* Updated to FancyBox 1.2.0
* Uses packed version of the JavaScript file (8kb instead of 14kb)


1.1 Updates:

* Fixed FancyBox not being applied to .jpeg files
* Fixed "Click to close" overlay text
* Moved images to /img/ folder


= Known Bugs =

* Shadows not perfect on IE6/7
* Options page may not work on WordPress MU


== Installation ==

1. Upload the `fancybox-for-wordpress` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it, [FancyBox](http://fancy.klade.lv/) will be automatically applied to all your image links and galleries.
4. If you want to customize a bit the look and feel of FancyBox, go to the Options Page under General Options in the WordPress Admin panel


== Screenshots ==

1. Simple example of fancybox on a post. [Live demo here](http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/)
2. Basic settings on Options Page in the Admin Panel. This makes it very easy to customize the plugin to your needs
2. Full settings on Options Page


== Frequently Asked Questions ==

= Are you the author of FancyBox? =

NO. I just ported it to WordPress. For more info on the FancyBox script itself [visit its website](http://fancy.klade.lv/home).

= Help translate the plugin to your language =

If you want to make a localization you can use the sources in the laguages folder and email me the PO and MO files (or just the PO) at jose (at) moskis.net. I will add it in the next release and if you want me to, i'll send you updated pot file a couple of days before future releases.

= The plugin does not work =

The most common problem is another plugin or your theme conflicting with the plugin. This is usually caused by some plugin that load jQuery directly instead of using the wp_enqueue_script function. Try following all the guidelines in the options page, and if necesary try the troubleshooting settings.

If the plugin is not working or you find any bug/bad behaviour/conflict deactivate it and email me at jose (at) moskis.net with a description of the problem, and i'll take a look at it.

If activating the plugin somehow brakes your panel (cant imagine that happening but just in case) delete the plugin from the plugins folder and go to your blog panel.

= Suggestions and feature requests? =

Don't hesitate to email me at jose (at) moskis.net with any thoughts about this plugin, feature requests, issues, doubts suggestions, anything goes. :)

= How does the plugin exactly work? =

First the plugin checks if your blog is using jQuery, if not it will load it from the WordPress files. Then it will load the FancyBox JavaScript, which is where all the magic happens. After this all the CSS code needed to beautify the plugin is added to the page. Finally, the JavaScript wait for your blog to finish loading and then it looks for all links where FancyBox can be applied, and adds it. And that's it. :)

= The plugin does not work with Mandingo theme =

To fix this edit the file /themes/mandigo/header.php and remove the line 231:

<code>&lt;script type="text/javascript" src="&lt;?php echo $dirs['www']['js']; ?&gt;jquery.js"&gt;&lt;/script&gt;</code>

After applying this fix everything seems to work perfectly.


== Demo ==

You can see the plugin working on [my blog](http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/) although there's nothing amazing to see, just a FancyBox simple implementation, that's the point ;)

You can take a look at the code if you're curious, though. You will find it in the Head section of the page.