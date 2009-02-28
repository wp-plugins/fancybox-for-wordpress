=== FancyBox for WordPress ===
Contributors: moskis
Donate link: https://www.asmallorange.com/extras/donate/?id=10218
Tags: fancybox, lightbox, jquery, image, gallery
Requires at least: 2.7
Tested up to: 2.7.1
Stable tag: 1.2

Seamlessly integrates FancyBox into your blog: Upload, activate, and you're done. No further configuration needed.

== Description ==

Seamlessly integrates [FancyBox](http://fancy.klade.lv/) into your blog: Upload, activate and you're done. No further configuration needed.

All images on the page will be considered part of a gallery, allowing you and your visitors to navigate through them with the [FancyBox](http://fancy.klade.lv/) interface.

The plugin will use jQuery to apply [FancyBox](http://fancy.klade.lv/) to ANY image links that open an image. This includes posts, the sidebar, etc.

The requirements are that the link is an image (for example a thumbnail), and that it links to a JPG, PNG or GIF file (that will be the bigger image).

[FancyBox](http://fancy.klade.lv/) will NOT be applied on text links, but i will implement a configuration page in the admin panel to optionally customize that and much more stuff in future versions.

Finally, i have only tested the plugin in WordPress 2.7, but it should work on recent previous versions. However, there's no reason why you shouldn't be already using WP2.7, is there? ;)

= Changelog =

1.2 Updates:

* Upgraded to use FancyBox 1.2.0
* Uses packed version of the JavaScript file (8kb instead of 14kb).

1.1 Updates:

* Fixed FancyBox not being applied to .jpeg files
* Fixed "Click to close" overlay text
* Moved images to /img/ folder


== Installation ==

1. Upload the `fancybox-for-wordpress` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. That's it, [FancyBox](http://fancy.klade.lv/) will be automatically applied to all your image links and galleries.


== Frequently Asked Questions ==

= Are you the author of FancyBox? =

NO. I just ported it to WordPress. For more info on the FancyBox script itself [visit its website](http://fancy.klade.lv/home).

= About future releases =

Future releases will continue to work without having to make any configuration, but i will provide an options page to allow customization of the [FancyBox](http://fancy.klade.lv/) effect, and being able to change where it is used in your blog.

= No worky, what now? =

First, try other versions of this plugin, and see if any version works for you. Version 1.2 uses the latest FancyBox which might not work well without jQuery 1.3.x or later.

If the plugin is not working or you find any bug/bad behaviour/conflict deactivate it and email me at jose (at) moskis.net with a description of the problem, and i'll take a look at it.

If activating the plugin somehow brakes your panel (cant imagine that happening but just in case) delete the plugin from the plugins folder and go to your blog panel.

= Suggestions and feature requests? =

Don't hesitate to email me at jose (at) moskis.net with any thoughts about this plugin, feature requests, issues, doubts suggestions, anything goes. :)

= How does the plugin exactly work? =

First the plugin checks if your blog uses jQuery, if not it will load it from the WordPress files. Then it will load the FancyBox JavaScript, which is where all the magic happens. After this all the CSS code needed to beautify the plugin is added to the page. Finally, the JavaScript wait for your blog to finish loading and then it looks for all links where FancyBox can be applied, and adds it. And that's it. :)

= The plugin does not work with Mandingo theme =

To fix this edit the file /themes/mandigo/header.php and remove the line 231:

<code>&lt;script type="text/javascript" src="&lt;?php echo $dirs['www']['js']; ?&gt;jquery.js"&gt;&lt;/script&gt;</code>

After applying this fix everything seems to work perfectly.


== Demo ==

You can see the plugin working on [my blog](http://blog.moskis.net/downloads/plugins/fancybox-for-wordpress/) although there's nothing amazing to see, just a FancyBox simple implementation, that's the point ;)

You can take a look at the code if you're curious, though. Most of it is in the Head section of the page.