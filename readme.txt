=== Mate ===
Contributors: Bruno Margenats
Requires at least: 5.2
Tested up to: 5.2.2
Stable tag: trunk
License: Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
License URI: https://creativecommons.org/licenses/by-nc-nd/4.0/


== Installation ==

1. Upload the theme
2. Activate the theme
3. Enjoy

== Licenses ==

Barlow
License: Open Font License
Source: https://fonts.google.com/specimen/Barlow

Open Sans
License: Open Font License
Source: https://fonts.google.com/specimen/Open+Sans


== Changelog ==
Version 0.6.3
-------------------------
- Added: --font-fallback CSS variable.
- Added: Function that let you disable gutenberg extra css on front-page if you're not using Gutenberg blocks
- Added: if ( ! defined( 'ABSPATH' ) ) in template parts for extra protection.
- Added: scroll-behavior: smooth; (this will work only on firefox and chrome)
- Added: img {font-size: 0} in reset.css. This wil hide alt text when images are loading. This is a little controversial, but after all this file is a reset. Also, this will help with the classic image extra gap.
- Added: Remove "type=" markup from javascript and css using adding a function in cleanup.php.
- Enhanced: responsive-nav.min.js and navigation.css are now load on header for better caching.
- Enhanced: "#logo a" display on base.css changed from "block" to "inline-block". The last one is more friendly for future children sites.
- Enhanced: Some markup changed for pass validation on https://validator.w3.org/
- Enhanced: Recommended plugins. New ui.
- Fixed: go to anchor JS is now working on ie.
- Fixed: Gap after images on img,embed,object,video. Fixed using vertical-align: inherit; Line 98 of reset.css
- Fixed: Hyphens removed for h1,h2,h3,h4,h5,h6 on reset.css
- Fixed: Underline borders on links are removed (too much conflict with images). Now we use text-decoration:underline.
- Fixed: .container .grid had too much padding. Fixed on grid.css.
- Moved: Some code of header.php is now in template-parts/header/inner-header-content.php. This way we can change the container type and be able to make full size divs.
- Changed: --color-text: var(--color-on-background); AND --color-text-heading: var(--color-on-background); in variables.css is now using color on background instead of some random gray.
- Removed: class="main" from <main id="main" class="main"> all over the theme
- Removed: 404.php, archive.php, front-page.php, home.php, page.php, search.php and single.php. We use index.php only and a new function to load template-parts.

Version 0.6.2
-------------------------
- Fixed: Structure data tests are now passing: https://search.google.com/structured-data/testing-tool/u/0/ But, we will let plugins handle this.
- Fixed: Front page is now showing the blog if static page is not defined.
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
- Added: wp_body_open after <body>. This is a very usefull new WP function.
- Added: Simple javascript for smooth Go To anchor effect.
- Fixed: 1px bug in drop-down menus (desktop). In navigation.css file : line 319
- Fixed: pseudo-elements :after and :before are now using :: across all the CSS files. Ref: https://bricss.net/post/10768584657/know-your-lingo-pseudo-class-vs-pseudo-element 
- Enhanced: custom-styles-scripts.php second function is now easier to understand.

Version 0.6
-------------------------
- Updated: Ponyfill script
- Enhanced: Grid replaced (Reflex grid)
- Enhanced: Ponyfill now loading ONLY on IE
- Enhanced: Header.php is now more standard. Custom scripts and custom content are now in head-inline-scripts.php and inner-header-content.php
- Enhanced: Template parts are now categorisez in "header", "content" and "footer"
- Enhanced: Wide aligment and Full aligment are now supported
- Enhanced: Child theme
- Enhanced: WP menus are now in a function file (easier to add new menus)
- Enhanced: Small functions are now in new files
- Enhanced: Theme setup is now in config.php
- Enhanced: Global sidebar detection.
- Enhanced: Comments.css and comment-reply.js not longer loading when not needed
- Enhanced: Contact form 7 "only in templates" option is now full compatible with custom CF7 styles.
- Enhanced: $is_sidebar became $has_sidebar
- Enhanced: Embedded videos are now responsives (Only CSS)
- Enhanced: Google Fonts function changed. Now we use an easy one with dns-prefetch, pre-connect and swap.
- Enhanced: Render blocking javascript optimized. Some script are still in header only for compatibility.
- Enhanced: Theme code formated.
- Removed: Loop.php
- Removed: Full navigation (burger icon in every resolution)
- Removed: Gutenberg custom css and functions are no longer available. Make a mu-plugin instead.
- Added: Support for page breaks (pagination inside a post)
- Added: Automatic scrollbar on fixed navigation (mobile only).
- Added: Custom class in body when using sidebars
- Added: Contact Form 7 support (custom css and cool functions)
- Added: Commented links to WP documentation accros multiple files.
- Added: Multiple "if function_exists" on functions.
- Added: French translations!
- Added: Disable oembed option in config.php!
- Added: Somme cleaning actions.
- Added: CF7 custom default styles.
- Added: Function to remove jquery migrate.
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
- Compatibility tested: Plugin WP Fastest Cache works fine with this theme. More test to do.

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
