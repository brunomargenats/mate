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
