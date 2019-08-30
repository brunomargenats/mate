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

Version 0.6.1
-------------------------
- Added: wp_body_open after <body>. This is a very usefull new WP function.
- Fixed: 1px bug in drop-down menus (desktop). In navigation.css file : line 319
- Enhancement: custom-styles-scripts.php second function is now easier to understand.
- Fixed: pseudo-elements :after and :before are now using :: across all the CSS files. Ref: https://bricss.net/post/10768584657/know-your-lingo-pseudo-class-vs-pseudo-element 
- Added: Simple javascript for smooth Go To anchor effect.

Version 0.6
-------------------------
- Enhancement: Grid replaced (Reflex grid)
- Update: Ponyfill script
- Enhancement: Ponyfill now loading ONLY on IE
- Removed: Full navigation (burger icon in every resolution)
- Added: Automatic scrollbar on fixed navigation (mobile only).
- Enhancement: Header.php is now more standard. Custom scripts and custom content are now in head-inline-scripts.php and inner-header-content.php
- Enhancement: Template parts are now categorisez in "header", "content" and "footer"
- Added: Custom class in body when using sidebars
- Fixed: <main> in IE.
- Forms.css restored (still in beta)
- Added: Contact Form 7 support (custom css and cool functions)
- Enhancement: Wide aligment and Full aligment are now supported
- Fixed: Logo proportions and responsiveness
- Testing: Child theme
- Fixed: Google Fonts URL bug
- Enhancement: WP menus are now in a function file (easier to add new menus)
- Enhancement: Small functions are now in new files
- Enhancement: Theme setup is now in config.php
- Removed: Gutenberg custom css and functions are no longer available. Make a mu-plugin instead.
- Enhancement: Global sidebar detection.
- Added: Support for page breaks (pagination inside a post)
- Removed: Loop.php
- Added: Commented links to WP documentation accros multiple files.
- Added: Multiple "if function_exists" on functions.
- Enhancement: Comments.css and comment-reply.js not longer loading when not needed
- Enhancement: Contact form 7 "only in templates" option is now full compatible with custom CF7 styles.
- Added: French translations!
- Added: Disable oembed option in config.php!
- Enhancement: $is_sidebar became $has_sidebar
- Added: Somme cleaning actions.
- Enhancement: Embedded videos are now responsives (Only CSS)
- Added: Function to remove jquery migrate.
- Enhancement: Google Fonts function changed. Now we use an easy one with dns-prefetch, pre-connect and swap.
- Added: CF7 custom default styles.
- Fixed: Duplicate page navigation.
- Fixed: Some translations referencing twentyseventeen.
- Added: Basic print CSS.
- Enhancement: Render blocking javascript optimized. Some script are still in header only for compatibility.
- Fixed: Some logo issues.
- Fixed: Hamburger weird bug related with css translate (blur pixel)
- Added: .fluid class (.container.fluid) for fluid responsiveness
- Enhancement: Theme code formated.
- Compatibility: Plugin WP Fastest Cache works fine with this theme. More test to do.
- To do in next version: To pass all structure data tests: https://search.google.com/structured-data/testing-tool/u/0/

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
