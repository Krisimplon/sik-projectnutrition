<?php
/**
 * Contact form settings.
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Heading definition.
 */
$options[] = array( "name" => _x('Contact Form Appearance', 'theme-options', 'the7mk2'), "type" => "heading", "id" => "contact-form-appearance" );

	/**
	 * Contact form.
	 */
	$options[] = array(	"name" => _x('Contact form appearance', 'theme-options', 'the7mk2'), "type" => "block" );

		$options[] = array(
			"desc"		=> '',
			"name"		=> _x( ' Input height (px)', 'theme-options', 'the7mk2' ),
			"id"		=> "input_height",
			"std"		=> '38px', 
			"type"		=> "text",
			"sanitize"	=> 'dimensions'
		);

		$options[] = array(
			"name"	=> _x( 'Input font color', 'theme-options', 'the7mk2' ),
			"id"	=> "input_color",
			"std"	=> "#787d85",
			"type"	=> "color",
		);

		$options[] = array(
			"name"	=> _x( 'Background color', 'theme-options', 'the7mk2' ),
			"id"	=> "input_bg_color",
			"std"	=> "#fcfcfc",
			"type"	=> "color"
		);

		$options[] = array(
			"name"      => _x( 'Background opacity', 'theme-options', 'the7mk2' ),
			"id"        => "input_bg_opacity",
			"std"       => 100, 
			"type"      => "slider"
		);

		$options[] = array(
			"name"		=> _x( 'Input border radius (px)', 'theme-options', 'the7mk2' ),
			"id"		=> 'input_border_radius',
			"std"		=> '0',
			"type"		=> 'text',
			"sanitize"	=> 'dimensions'
		);
		
		$options[] = array(
			"name"		=> _x( 'Border width  (px)', 'theme-options', 'the7mk2' ),
			"id"		=> 'input_border_width',
			"std"		=> '1',
			"type"		=> 'text',
			"sanitize"	=> 'dimensions'
		);

		$options[] = array(
			"name"	=> _x( 'Border color', 'theme-options', 'the7mk2' ),
			"id"	=> "input_border_color",
			"std"	=> "#adb0b6",
			"type"	=> "color",
		);

		$options[] = array(
			"name"      => _x( 'Border opacity', 'theme-options', 'the7mk2' ),
			"id"        => "input_border_opacity",
			"std"       => 30, 
			"type"      => "slider"
		);

	/**
	 * Contact form message:.
	 */
	$options[] = array( "name" => _x("Contact form messages", "theme-options", 'the7mk2'), "type" => "block" );
		$options[] = array(
			'id'		=> 'contact_form_message',
			'name'		=> _x( 'Display messages', 'theme-options', 'the7mk2' ),
			'type'		=> 'radio',
			'class'     => 'small',
			'std'		=> '1',
			"desc"		=> _x('Also affects WooCommerce messages.', 'theme-options', 'the7mk2'),
			'options'	=> array(
				'1'  => _x( 'Pop-up', 'theme-options', 'the7mk2' ),
					
				'0'  => _x( 'Inline', 'theme-options', 'the7mk2' ),
					
			),
		);
		$options[] = array(
			"name"	=> _x( 'Message font color', 'theme-options', 'the7mk2' ),
			"id"	=> "message_color",
			"std"	=> "#fff",
			"type"	=> "color",
			"desc"		=> _x('Also affects WooCommerce messages.', 'theme-options', 'the7mk2'),
		);
		$options[] = array(
			"name"	=> _x( 'Message background color', 'theme-options', 'the7mk2' ),
			"id"	=> "message_bg_color",
			"std"	=> "",
			"type"	=> "color",
			"desc"		=> _x('Leave empty to use accent color. Also affects WooCommerce messages.', 'theme-options', 'the7mk2'),
		);

		$options[] = array(
			"name"      => _x( 'Message background opacity', 'theme-options', 'the7mk2' ),
			"id"        => "message_bg_opacity",
			"std"       => 100, 
			"type"      => "slider",
			"desc"		=> _x('Also affects WooCommerce messages.', 'theme-options', 'the7mk2'),
		);

		$options[] = array(
			"name"		=> _x( 'Form error message', 'theme-options', 'the7mk2' ),
			"id"		=> "custom_error_messages",
			"std"		=> "The message has not been sent. Plaese try again.",
			"type"		=> "textarea",
			"sanitize"	=> 'without_sanitize',
			"desc"		=> _x('Leave empty to show default message.', 'theme-options', 'the7mk2'),
			'sanitize' => 'text, std_on_empty_val',
		);
		$options[] = array(
			"name"		=> _x( 'Field error message', 'theme-options', 'the7mk2' ),
			"id"		=> "custom_error_messages_validation",
			"std"		=> "One or more fields have an error. Please check and try again.",
			"type"		=> "textarea",
			"sanitize"	=> 'without_sanitize',
			"desc"		=> _x('Leave empty to show default message.', 'theme-options', 'the7mk2'),
			'sanitize' => 'text, std_on_empty_val',
		);
		$options[] = array(
			"name"		=> _x( 'Form success message', 'theme-options', 'the7mk2' ),
			"id"		=> "custom_success_messages",
			"std"		=> "Your message has been sent.",
			"type"		=> "textarea",
			"sanitize"	=> 'without_sanitize',
			"desc"		=> _x('Leave empty to show default message.', 'theme-options', 'the7mk2'),
			'sanitize' => 'text, std_on_empty_val',
		);

	/**
	 * Contact form sends emails to:.
	 */
	$options[] = array( "name" => _x("Contact form sends emails to:", "theme-options", 'the7mk2'), "type" => "block" );

		$options["general-contact_form_send_mail_to"] = array(
			"name"		=> _x( 'E-mail', 'theme-options', 'the7mk2' ),
			"desc"		=> _x('Leave empty to use admin e-mail.', 'theme-options', 'the7mk2'),
			"id"		=> "general-contact_form_send_mail_to",
			"std"		=> "",
			"type"		=> "text",
			"sanitize"	=> 'email'
		);