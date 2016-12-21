<?php

//
	define('ACCOUNT_NAME', 'xyz');			// Form ID should be similar to the form you have in your front end
	define('API_TOKEN', 'g126dv1df1vgfd2b546dfg12dgf');			// Form ID should be similar to the form you have in your front end
	
	define('FORM_ID', 'contact-us');			// Form ID should be similar to the form you have in your front end
	
	define('FROM_EMAIL', 'highrise.api@yoursite.com');		// FROM EMAIL to send email in case any exception occurs
	define('TO_EMAIL', 'admin@email.com');						// TO EMAIL to send email in case any exception occurs
	define('EMAIL_SUBJECT', 'IMP: Form Entry was not submitted to Highrise');		// EMAIL SUBJECT to send email in case any exception occurs
	
	define('TASK_CATEGORY_ID', '5959885');				//Category ID for Highrise. You can get this by inspecting the element of dropdown in task category list.
	define('TIME_FRAME', 'Tomorrow');					//Time frame for each created task on highrise
	define('SUBJECT_NOTE', 'Party');					//Note Subject to be put up on Highrise
	define('OWNER_ID', '1251144');						//The CRM user to whom the tasks will be assigned. You can get it by inspecitn the dropdown element in the users list while creating a task

?>