<?php

	/**
	 * Settings API Definitions
	 *
	 * This page will allow us to interface with the Settings API by tossing a series of options through
	 * and array. This will allow us to narrow our focus on the data and remove all the tedious coding
	 * required to create just a simple text field or check box.
	 *
	 *	To learn how to use, please refer to the README.md file.
	 *
	 * @package Auto WordPress Settings API
	 * @version 1.1
	 * @author Cole Geissinger
	 */

	// Set the ID or name for this specific section.
	// Used to register our fields with the right section.
	$section_id = 'starters_theme_footer_options';

	// Set the ID or name for the settings-id.
	// Not to be confused with $section_id, this variable will let us display fields with the correct section.
	$settings_id = 'starters_footer_options';

	// Set the title of the current section.
	$section_title = 'Footer Options';

	// Set the description of our current section.
	$section_desc = 'All configurable option in the footer.';


	// Begin defining our array of sections and fields.
	$options_data = array(
		'section-title' => $section_title,
		'section-desc' => $section_desc,
		'section-id' => $section_id,


		// Define our Settings Section - http://bit.ly/wRZYic
		array(
			'type' => 'settings-section',									 // Define the type of information being passed. Routes to the right function.
			'id' => $settings_id, 						 					 // ID used to identify this section and with which to register options
			'title' => '', 													 // Title to be displayed on the administration page. Left blank on purpose.
			'callback' => 'starters_section_description_callback', // Callback used to render the description of the section.
			'section' => $section_id									 	 // The section in which to add this section of options.
		),
			
		// Define each of our Settings Fields. These are the actual form fields and their labels - http://bit.ly/AecUgF
		array(
			'type' => 'settings-field',									
			'callback' => 'starters_richtext_callback',
			'args' => array(
				'id' => 'contact_address',
				'label' => 'Contact Address',
				'description' => 'Contact address in the footer of the website.'		 
			),
			'section' => $section_id,
			'settings-id' => $settings_id
		),
		array(
			'type' => 'settings-field',									 												// Define the type of information being passed. Routes to the right function.
			'callback' => 'starters_text_callback', 				 	 												// The name of the function responsible for rendering the option interface.
			'args' => array(													 										// The array of arguments to pass to the callback.
				'id' => 'facebook_url',										 	 										// ID used to identify the field.
				'label' => 'Facebook URL',										 										// The label to the left of the option interface element.
				'description' => 'Facebook header soical media link (if left blank, icon will not be shown)'		 	// The Description.
			),
			'section' => $section_id, 			 																		// The section on which this option will be displayed.
			'settings-id' => $settings_id				 					 											// The ID of the section to which this field belongs.
		),
		array(
			'type' => 'settings-field',									 												// Define the type of information being passed. Routes to the right function.
			'callback' => 'starters_text_callback', 				 	 												// The name of the function responsible for rendering the option interface.
			'args' => array(													 										// The array of arguments to pass to the callback.
				'id' => 'twitter_url',										 	 										// ID used to identify the field.
				'label' => 'Twitter URL',										 										// The label to the left of the option interface element.
				'description' => 'Twitter header soical media link (if left blank, icon will not be shown)'			 	// The Description.
			),
			'section' => $section_id, 			 																		// The section on which this option will be displayed.
			'settings-id' => $settings_id				 					 											// The ID of the section to which this field belongs.
		),
		array(
			'type' => 'settings-field',									 												// Define the type of information being passed. Routes to the right function.
			'callback' => 'starters_text_callback', 				 	 												// The name of the function responsible for rendering the option interface.
			'args' => array(													 										// The array of arguments to pass to the callback.
				'id' => 'youtube_url',										 	 										// ID used to identify the field.
				'label' => 'Youtube URL',										 										// The label to the left of the option interface element.
				'description' => 'Youtube soical media link (if left blank, icon will not be shown)'		 	// The Description.
			),
			'section' => $section_id, 			 																		// The section on which this option will be displayed.
			'settings-id' => $settings_id				 					 											// The ID of the section to which this field belongs.
		),
		array(
			'type' => 'settings-field',									 												// Define the type of information being passed. Routes to the right function.
			'callback' => 'starters_text_callback', 				 	 												// The name of the function responsible for rendering the option interface.
			'args' => array(													 										// The array of arguments to pass to the callback.
				'id' => 'linkedin_url',										 	 										// ID used to identify the field.
				'label' => 'Linkedin URL',										 										// The label to the left of the option interface element.
				'description' => 'Linkedin soical media link (if left blank, icon will not be shown)'		 	// The Description.
			),
			'section' => $section_id, 			 																		// The section on which this option will be displayed.
			'settings-id' => $settings_id				 					 											// The ID of the section to which this field belongs.
		),
		array(
			'type' => 'settings-field',
			'callback' => 'starters_text_callback',
			'args' => array(
				'id' => 'contact_number',
				'label' => 'Contact Number',
				'description' => 'Contact number in the footer of the website.'
			),
			'section' => $section_id,
			'settings-id' => $settings_id
		),
		array(
			'type' => 'settings-field',
			'callback' => 'starters_text_callback',
			'args' => array(
				'id' => 'email_address',
				'label' => 'Email address',
				'description' => 'Email address in the footer of the website.'
			),
			'section' => $section_id,
			'settings-id' => $settings_id
		),
		array(
			'type' => 'settings-field',
			'callback' => 'starters_text_callback',
			'args' => array(
				'id' => 'copyright',
				'label' => 'Copyright',
				'description' => 'Copyright in the footer of the website'
			),
			'section' => $section_id,
			'settings-id' => $settings_id,
		),
		
		// Add the section name found in the settings-section array (sanitization is permanent) http://bit.ly/AcJ4Z
		array(
			'type' => 'register-setting',
			'args' => array($section_id, $section_id)
		)
	); // FIN.