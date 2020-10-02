<?php
/**
 * Function: Inline scripts in footer.
 * Description: This will load before </body>, using the wp_footer function.
 */
?>

<?php
add_action('wp_footer', 'mate_wp_footer');
function mate_wp_footer(){
// drop Google Analytics, GTAG, or other scripts here

};
