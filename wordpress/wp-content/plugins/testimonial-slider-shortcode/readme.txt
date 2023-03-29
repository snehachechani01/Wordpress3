=== Testimonial Slider Shortcode ===
Contributors: sazzadh, tallythemes
Donate link: http://tallythemes.com/
Tags: testimonial slider shortcode, shortcode, owl carousel, owl carousel, 

testimonial, slideshow shortcode
Requires at least: 4
Tested up to: 6.1.1
Stable tag: 1.1.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A lightweight Testimonial Slideshow plugin for WordPress. It lets you create a beautiful responsive Testimonial Slideshow.

== Description ==

Using this plugin you can add a interactive Testimonial slider to any page or post. This plugin offer a shortcode to create Slideshow. It is fully responsive  and looks good in any device.

This plugin using a jquery plugin [Owl Carousel](http://www.owlcarousel.owlgraphic.com/) by Owlgraphic.

= Shortcode Example =
[tss_testimonial_slider align="center" padding="0 40px" loop="1" autoplay="1" dots="1" nav="1" class=""]  
[tss_item text="Abelson has been an amazing firm to work with. Lorem changed the company.”" name="JOHN SAMPSON LP" link="#"/]  
[tss_item text="Abelson has been an amazing firm to work with. Lorem changed the company." name="JOHN SAMPSON LP" link=""/]  
[tss_item text="Abelson has been an amazing firm to work with. Lorem changed the company." name="JOHN SAMPSON LP" link=""/]  
[/tss_testimonial_slider]  


= So what are the arguments of the main shortcode? =
* **align** you can sent the slider alignment here, support values are `left`, `right` or `center`
* **padding** Possible value is pure CSS. Example `0 40px`
* **loop** Enable or disable loop by adding `0` or `1`
* **autoplay** Enable or disable autoplay by adding `0` or `1`
* **dots** Enable or disable dot nav by adding `0` or `1`
* **nav** Enable or disable left right arrow nav by adding `0` or `1`


= So what are the arguments of the Sub shortcode? =
* **text** this is the text of the slider item
* **name** name of the testimonial author
* **link** full link


== Installation ==

1. Upload `testimonial-slider-shortcode` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What is the Shortcode? =

Below is the example of the shoercode.
[tss_testimonial_slider align="center" padding="0 40px" loop="1" autoplay="1" dots="1" nav="1" class=""]  
[tss_item text="Abelson has been an amazing firm to work with. Lorem changed the company.”" name="JOHN SAMPSON LP" link="#"/]  
[tss_item text="Abelson has been an amazing firm to work with. Lorem changed the company." name="JOHN SAMPSON LP" link=""/]  
[tss_item text="Abelson has been an amazing firm to work with. Lorem changed the company." name="JOHN SAMPSON LP" link=""/]  
[/tss_testimonial_slider]  

= So what are the arguments of the main shortcode? =
* **align** you can sent the slider alignment here, support values are `left`, `right` or `center`
* **padding** Possible value is pure CSS. Example `0 40px`
* **loop** Enable or disable loop by adding `0` or `1`
* **autoplay** Enable or disable autoplay by adding `0` or `1`
* **dots** Enable or disable dot nav by adding `0` or `1`
* **nav** Enable or disable left right arrow nav by adding `0` or `1`


= So what are the arguments of the Sub shortcode? =
* **text** this is the text of the slider item
* **name** name of the testimonial author
* **link** full link


== Screenshots ==
1. Testimonials Slider Center align
2. Testimonials Slider Left align
3. Testimonials Slider Right align
4. Shortcode Example


== Changelog ==
= 1.1.8 =
* Tested at latest wordpress

= 1.1.2 =
* Fixed some readme.txt issue

= 1.1.1 =
* Fixed a readme.txt issue

= 1.1 =
* Added Center, left and right alignment support
* Added Padding support
* Fixed some CSS issue.

= 1.0 =
* initial releases