<?php
/**
 * FUNCTIONS: PLUGINS
 * Description: Activate or deactivate functions that only affects some plugins.
 */
?>
<?php

/* ============ DECLARE PLUGINS ============ */

global $mate_contact_form_7;
global $mate_gravity_forms;





/* ============ ACTIVATE/DEACTIVATE PLUGINS ============ */

$mate_contact_form_7 = TRUE;

$mate_gravity_forms = FALSE;




/* ============ LOAD PLUGINS FILES ============ */

if($mate_contact_form_7){get_template_part('plugins/contact-form-7/contact-form-7');}
if($mate_gravity_forms){get_template_part('plugins/gravity-forms/gravity-forms');}