<?php
/**
 * FUNCTIONS: PLUGINS
 * Description: Activate or deactivate functions that only affects some plugins.
 */


/* DON'T TOUCH THIS -->
*/
global $mate_custom_plugins;
global $mate_contact_form_7;
global $mate_gravity_forms;
global $mate_gutenberg_custom_blocks;
/*
<-- DON'T TOUCH THIS */


/* == CUSTOM PLUGINS FUNCTIONS == */
$mate_custom_plugins = TRUE; /* TRUE if you want to add functions that affects specific plugins.*/

/* ============ ACTIVATE/DEACTIVATE PLUGINS ============ */
/* Go to functions/plugins/plugin-name/ to configure */

if (!empty($mate_custom_plugins)){

        $mate_contact_form_7 = TRUE;

        $mate_gravity_forms = FALSE;

        $mate_gutenberg_custom_blocks = TRUE;

}



/* ============ LOAD PLUGINS FILES ============ */
if (!empty($mate_contact_form_7)){get_template_part('functions/plugins/contact-form-7/contact-form-7');}
if (!empty($mate_gravity_forms)){get_template_part('functions/plugins/gravity-forms/gravity-forms');}
if (!empty($mate_gutenberg_custom_blocks)){get_template_part('functions/plugins/gutenberg-custom-blocks/gutenberg-custom-blocks');}

