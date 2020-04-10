<?php
/* ============ DECLARE FUNCTIONS ============ */
global $mate_GF_export_separator;
global $mate_GF_fix_returns;
global $mate_GF_merge_fields;

/* ============ ACTIVATE/DEACTIVATE FUNCTIONS ============ */


/* == CHANGE GRAVITY FORMS EXPORT SEPARATOR == */
$mate_GF_export_separator = TRUE; /* This will change separator in exports from "," to ";" */


/* == REMOVE RETURNS (ON TEXTAREAS) BEFORE THE DATA IS SAVED ON THE DB == */
$mate_GF_fix_returns = TRUE; //This will fix a common CSV export error.


/* == MERGE FIELDS == */
$$mate_GF_merge_fields = FALSE; //This requires some configuration. FALSE by default



/* ============ CONFIGURE FUNCTIONS ============ */

if (!empty($mate_GF_export_separator)){
    add_filter( 'gform_export_separator', 'mate_GF_change_separator', 10, 2 );
        function mate_GF_change_separator( $separator, $form_id ) {
            return ';';
        }
}


if (!empty($mate_GF_fix_returns)){
    /*  remove the returns before the data is saved to the database with the following script: */
    add_filter("gform_save_field_value", "mate_GF_save_field_value", 10, 4);
        function mate_GF_save_field_value($value, $lead, $field, $form){
            $new_value = str_replace(array("\n", "\t", "\r"), '', $value);
            return $new_value;
        }
}


if (!empty($mate_GF_merge_fields)){
    add_action("gform_pre_submission_15", "mate_GF_merge_field"); // _15 is the form ID. Change it with your own.
    // We merge field ID 1 and field ID 2 and we put the result on field ID 3
        function mate_GF_merge_field(){
            $_POST["input_3"] = str_replace('/', '', $_POST["input_1"]).$_POST["input_2"];
        }
}