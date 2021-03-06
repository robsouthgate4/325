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
	$section_id = 'starters_theme_homepage_options';

	// Set the ID or name for the settings-id.
	// Not to be confused with $section_id, this variable will let us display fields with the correct section.
	$settings_id = 'starters_homepage_options';

	// Set the title of the current section.
	$section_title = 'Home Page Options';

	// Set the description of our current section.
	$section_desc = 'All configurable option on the home page.';


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

		array(
			'type' => 'settings-field',									 												
			'callback' => 'starters_richtext_callback', 				 	 												
			'args' => array(													 										
				'id' => 'site_intro',										 	 										
				'label' => 'Site introduction',										 										
				'description' => 'The copy that displays the site introduction'		 	
			),
			'section' => $section_id, 			 																		
			'settings-id' => $settings_id				 					 											
		),
		
		// Add the section name found in the settings-section array (sanitization is permanent) http://bit.ly/AcJ4Z
		array(
			'type' => 'register-setting',
			'args' => array($section_id, $section_id)
		)
	); // FIN.