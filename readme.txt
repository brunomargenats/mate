=== Mate ===
Contributors: Bruno Margenats
Requires at least: 5.2
Tested up to: 5.4
Stable tag: Version 0.6.9
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html


=== Installation ===

1. Upload this theme
2. Upload child theme (mate-child) and read the installation instructions in readme.txt
3. Copy everything that you want to change like configs, assets, etc.
4. Activate child theme
5. Enjoy

=== Licenses ===

Barlow
License: Open Font License
Source: https://fonts.google.com/specimen/Barlow

Open Sans
License: Open Font License
Source: https://fonts.google.com/specimen/Open+Sans

Responsive nav
License: MIT License
Source: https://github.com/samikeijonen/responsive-nav.js/tree/dropdowns

Reflex Grid (modified on this theme)
License: MIT License
Source: https://github.com/leejordan/reflex/

Smooth Scroll
License: MIT License
Source: https://github.com/cferdinandi/smooth-scroll/

CSS Vars Ponyfill
License: MIT License
Source: https://jhildenbiddle.github.io/css-vars-ponyfill/



=== Changelog ===

Version 0.6.9
-------------------------
= Added =
- mate.pot file to /languages/
- Spanish translation.
- New optional utility classes.
- .clearfix on footer (this will make visible the padding of the paragraph on the footer div).
- We check if $mate_use_comments is true before load comments-count.php on some content template-parts.
- global $mate_use_comments_in_pages; in template-parts/content/content-page.php

= Fixed =
- A bug on this theme caused a bug in child theme when a new variable is added. On conditional functions, now we check if variables exist before check if there are TRUE or FALSE. We use !empty for this: if (!empty($mate_debug_mode)){
- + and - on mobile menu weren't aligned.
- Mate scrollbar fix wasn't pointing to the right function file or the right javascript file.
- Default variable --scroll-width value on variables.css wasn't right.
- #site now contain all web site: header - #content - footer. Header & footer are now easier to style (like, a full bg with a center container)
- The grid and the horizontal scroll under 320px now works right.
- Bug when checking if we allow the use of comments in pages. PHP notice on template-parts/content/content-page.php

= Enhanced =
- Debug Mode: Now, this function will only load when the user is administrator and the URL has ?debug=true.
- Debug Mode: This function will load only on the front end.
- Debug Mode: Added overflow:auto!important to debug mode CSS (we can't debug scrollbars if we don't do this)

= Changed =
- Disable custom gradients and Disable gradients updated for WP 5.4
- header-title.php uses h2 for posts instead of multiple h1.
- Debug Mode is set TRUE by default.

= Removed =
- .wrapper padding.

Version 0.6.8
-------------------------
= Enhanced =
- Gutenberg Custom blocks are now ordered differently, so they are easier to understand.
- Options in config/config.php are now categorized
- Better comments for Utility Classes.
- Scrollbar fix Javascript is now a standalone optional function.
- Some changes in navigation.css
- In archives pages and blog pages now we show the_content or the_excerpt based on RSS options (full text or summary)
- Some PHP comments added/changed
- Utility Classes are now used everywhere when possible (so, some CSS was removed)
- Some changes in navigation padding when the navigation is fixed.

= Changed =
- $mate_gutenberg_custom_blocks FALSE by default (in config/config.php)
- $mate_disable_gutenberg_frontpage FALSE by default (in config/config.php)

= Added =
- Plugins functions : A new folder named /plugins/ in now used for all functions that interact with WP plugins. So, all CF7 functions were moved here.
- Default SVG favicon.
- Some licenses on this file.

= Removed =
- width="40" and height="59" removed from the logo in inner-header-content.php. This way, we don't need to copy the file to our child theme only to change the logo size HTML.
- Some useless classes in postmeta.php and category-tags.php

= Renamed =
- functions/gfonts.php renamed to google-fonts.php.
- assets/js/responsive-nav.min.js renamed to navigation.js
- template-parts/blocks/blocks-config.php renamed to config.php

= Moved =
- Utility classes are now loaded before base.css and style.css. This way we can overwrite them if needed.
- Navigation function now loads before styles-scripts function. Also, navigation.css loads in header and navigation.js in footer. Loading navigation.css first let us make some changes directly in our style.css file on child theme without copy all the file.

= Updated =
- French translation
- Some CSS code on ie.css
- Installation instructions on this file
- Some visual changes on this file


Version 0.6.7
-------------------------
- Added: Debug mode!
- Fixed: .alignfull and .alignwide (100vw CSS scrollbar bug)
--- Added: var(--scroll-width) on variables.css. Also, this is calculate via javascript in scripts.js
- Fixed: Bug in hamburger icon
--- Added: !important to button.nav-toggle {font-size: 0;}.
- Added: vertical-align: top; for td and th on tables.
- Added: Some espaces (&nsbp;) on french translation. Specially for sentences with ! or ?. Also, accents are now in HTML format like: &eacute;
- Added: "script" and "style" to the HTML5 theme support.
- Added: Conditional $mate_use_comments; to comment-count.php
- Added: Validation of some functions if ( ! function_exists( '' ) ) {
- Changed: Some global variables renamed
- Enhanced: styles-scrits.php now use a global variable $mate_version;
- Enhanced: global variables (other than WP's ones) are now using a $mate_ prefix.
- Enhanced: some code and comments
- Enhanced: smooth-scroll is now in a new file and uses a ponyfill version. Also, it loads only on some browsers that don't support scroll-behavior: smooth;
- Enhanced: scroll-behavior: smooth; is now deactivated for some people that use "prefers-reduced-motion: reduce"
- Enhanced: template-part content-search.php shows how many posts we found if any.
- Enhanced: functions/content-types.php has a better loading for template-parts.
- New feature: Gutenberg demo block
- Removed: if ( ! defined( 'ABSPATH' ) ) {exit;} is not necessary on themes, only on plugins.
- Removed: Extra ";" in utility-classes css.
- Moved: Some CSS from typography.css to reset.css
- Updated: css-vars-ponyfill


Version 0.6.6
-------------------------
- Moved: CSS variables for grids and forms are now in variables.CSS
- Changed: Utility classes are now mandatory (we will need them to create new components).
- Changed: Theme license.
- Changed: Default primary and secondary colors (in variables.css)
- Commented: Some code that seems unnecessary. May delete on net version.
- Fixed: Some typos in the changelog.
- Fixed: Custom editor style wasn't working
- Added: Floating images in articles are now 100% with under 479px screen resolution.
- Added: Some Gutenberg CSS fixes.
- Added: Some other CSS fixes.
- Added: New gutenberg-default-config function. This will disable useless things and be a boilerplate for further configurations.
- Added: Buttons.css (some CSS moved from forms.css)
- Added: Default buttons colors based on primary colors.
- Added: New functions in styles-scripts.php for better control of what CSS is loading in Gutenberg Editor.
- Added: Temporal JavaScript to fix 100vw scroll bug in CSS. (Used in .alignfull)
- Enhanced: Some HTML code is now outside <?php ?> tags for better understanding.
- Enhanced: forms.css
- Updated: smooth-scroll script from v16.1.0 to v16.1.2


Version 0.6.5
-------------------------
- Fixed: --font-fallback bug.
- Removed: All "*properties" (hack IE7) in grid.css.
- Removed: "zoom: 1" in grid.css and navigation.css;
- Removed: Unnecessary CSS for responsive embeds.
- Removed: Unnecessary old prefixes found in grid.css and across all CSS files.
- Removed: text-decoration: underline; from "a img{}"
- Fixed: wp_enqueue_style( 'mate_grid'); was called twice.
- Fixed: site_style is now loading in header.
- Fixed: Now pages aren't using sidebar on default template.
- Changed: Sidebars are now disabled by default.
- Changed: Some minor changes in forms.css and cf7-styles.css
- Added: Gutenberg buttons are now using default theme colors.
- Added: New template contact-with-sidebar.php
- Added: add_theme_support( 'responsive-embeds' );
- Added: utility classes!
- Updated: French translation.


Version 0.6.4
-------------------------
- Added: global $has_sidebar; in index.php.
- Added: wrapper {padding: 0 var(--grid-spacing-h);} on grid.css to fix mobile padding bug with grids.
- Removed: Recommended plugins function is now a standalone plugin.
- Changed: Google Fonts are no longer activated by default.
- Fixed: HTML5 Markup error - Sidebar must be outside <main> tag


Version 0.6.3
-------------------------
- Added: --font-fallback CSS variable.
- Added: Function that let you disable gutenberg extra css on front-page if you're not using Gutenberg blocks
- Added: if ( ! defined( 'ABSPATH' ) ) in template parts for extra protection.
- Added: scroll-behavior: smooth; (this will work only on Firefox and Chrome.)
- Added: img {font-size: 0} in reset.css. This will hide alt text when images are loading. This is a little controversial, but after all this file is a reset. Also, this will help with the classic image extra gap.
- Added: Remove "type=" markup from JavaScript and css using adding a function in cleanup.php.
- Enhanced: responsive-nav.min.js and navigation.css are now loaded on the header for better caching.
- Enhanced: "#logo a" display on base.css changed from "block" to "inline-block". The last one is more friendly for future children sites.
- Enhanced: Some markup changed for pass validation on https://validator.w3.org/
- Enhanced: Recommended plugins. New UI.
- Fixed: go to anchor JS is now working on IE.
- Fixed: Gap after images on img,embed,object,video. Fixed using vertical-align: inherit; Line 98 of reset.css
- Fixed: Hyphens removed for h1,h2,h3,h4,h5,h6 on reset.css
- Fixed: Underline borders on links are removed (too much conflict with images). Now we use text-decoration:underline.
- Fixed: .container .grid had too much padding. Fixed on grid.css.
- Moved: Some code of header.php is now in template-parts/header/inner-header-content.php. This way we can change the container type and be able to make full-size divs.
- Changed: --color-text: var(--color-on-background); AND --color-text-heading: var(--color-on-background); in variables.css is now using color on background instead of some random gray.
- Removed: class="main" from <main id="main" class="main"> all over the theme
- Removed: 404.php, archive.php, front-page.php, home.php, page.php, search.php and single.php. We use index.php only and a new function to load template-parts.


Version 0.6.2
-------------------------
- Fixed: Structure data tests are now passing: https://search.google.com/structured-data/testing-tool/u/0/ But, we will let plugins handle this.
- Fixed: Front page is now showing the blog if a static page is not defined.
- Fixed: Comments count was showing even when comments were disabled. Conditional added.
- Fixed: Some custom excerpt errors
- Fixed: Navigation arrows position in IE are now fixed (ie.css updated)
- Added: Wp cleanup function.
- Added: Recommended plugins function. The plugin list will be updated on the next release.
- Added: HTML5 theme_support
- Removed: Old microformats markup removed (like "itemscope"). We will use a plugin instead.
- Updated: French translation.
- Updated: functions/comments.php : get_option( 'home' ) was found in the file comments.php. Use home_url() instead.
- Enhanced: readme.txt is now more readable


Version 0.6.1
-------------------------
- Added: wp_body_open after <body>. This is a very useful new WP function.
- Added: Simple JavaScript for smooth Go To anchor effect.
- Fixed: 1px bug in drop-down menus (desktop). In navigation.css file : line 319
- Fixed: pseudo-elements :after and :before are now using :: across all the CSS files. Ref: https://bricss.net/post/10768584657/know-your-lingo-pseudo-class-vs-pseudo-element 
- Enhanced: custom-styles-scripts.php second function is now easier to understand.


Version 0.6
-------------------------
- Updated: Ponyfill script
- Enhanced: Grid replaced (Reflex grid)
- Enhanced: Ponyfill now loading ONLY on IE
- Enhanced: Header.php is now more standard. Custom scripts and custom content are now in head-inline-scripts.php and inner-header-content.php
- Enhanced: Template parts are now categorized in "header", "content" and "footer"
- Enhanced: Wide alignment and Full alignment are now supported
- Enhanced: Child theme
- Enhanced: WP menus are now in a function file (easier to add new menus)
- Enhanced: Small functions are now in new files
- Enhanced: Theme setup is now in config.php
- Enhanced: Global sidebar detection.
- Enhanced: Comments.css and comment-reply.js no longer loading when not needed
- Enhanced: Contact form 7 "only in templates" option is now full compatible with custom CF7 styles.
- Enhanced: $is_sidebar became $has_sidebar
- Enhanced: Embedded videos are now responsive (Only CSS)
- Enhanced: Google Fonts function changed. Now we use an easy one with dns-prefetch, pre-connect and swap.
- Enhanced: Render blocking JavaScript optimized. Some scripts are still in the header only for compatibility.
- Enhanced: Theme code formatted.
- Removed: Loop.php
- Removed: Full navigation (burger icon in every resolution)
- Removed: Gutenberg custom css and functions are no longer available. Make a mu-plugin instead.
- Added: Support for page breaks (pagination inside a post)
- Added: Automatic scrollbar on fixed navigation (mobile only).
- Added: Custom class in body when using sidebars
- Added: Contact Form 7 support (custom css and cool functions)
- Added: Commented links to WP documentation across multiple files.
- Added: Multiple "if function_exists" on functions.
- Added: French translations!
- Added: Disable oembed option in config.php!
- Added: Somme cleaning actions.
- Added: CF7 custom default styles.
- Added: Function to remove jQuery migrate.
- Added: Basic print CSS.
- Added: .fluid class (.container.fluid) for fluid responsiveness
- Fixed: <main> in IE.
- Fixed: Logo proportions and responsiveness
- Fixed: Google Fonts URL bug
- Fixed: Duplicate page navigation.
- Fixed: Some translations referencing twentyseventeen.
- Fixed: Some logo issues.
- Fixed: Hamburger weird bug related with css translate (blur pixel)
- Restored: Forms.css (still in beta)
- Compatibility tested: Plugin WP Fastest Cache works fine with this theme. More tests to do.


Version 0.5.2
-------------------------
- Theme config files
- Comments avatars fixed
- Styles enqueues enhanced
- New default typography


Version 0.5.1
-------------------------
- Some support for bbpress
- Post Navigation fixed
- Grid tweaks
- Navigation arrows fixed
- Wrapper added
- Comments depths fixed


Version 0.5
-------------------------
- Layouts and tiny grid system.


Version 0.4
-------------------------
- Some bugs fixed


Version 0.3
-------------------------
- Navigation


Version 0.2
-------------------------
- First Alpha published