<?php

/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('hero_call_to_action') ?: 'Your TEXT here...';
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div>
    <?php echo $text;?>
    </div>
    <div class="hero-image">
    <?php

    $image = get_field('hero_background')  ?: get_theme_file_uri( 'blocks/demo/placeholder.png');
    //https://placeholderimage.dev/
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image); ?>" />
    <?php endif; ?>
    </div>
</div>