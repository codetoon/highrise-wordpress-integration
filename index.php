<?php

/*
 Plugin Name: Highrise API
Plugin URI: http://regur.net
Description: The plugin integrates the CRM highrise with the WordPress website. Whenever a form is submitted by the end user, the plugin will store the details in Highrise in the predefined format.
Author: Regur Technology Solutions
Version: 1.0
Author URI: http://regur.net
*/
include "highrise-api-config.php";
include "functions.php";


function addContact()
{
	saveDetailsOnHighrise();
}

add_action('save_post_feedback', 'addContact'); //save_post_feedback is the hook of JetPack forms, you need to replace this hook by your form's hook

?>