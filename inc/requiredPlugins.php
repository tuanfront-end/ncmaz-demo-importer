<?php

require_once plugin_dir_path(__FILE__)  . '/inc/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'ncmaz_register_required_plugins');

function ncmaz_register_required_plugins()
{
	$plugins = [
		// A WordPress.org plugin repository example.
		[
			'name'     => 'Advanced Custom Fields',
			'slug'     => 'advanced-custom-fields', // Plugin slug - the same as on WordPress.org plugin repository.
			'required' => true,
			'version'            => '5.10.2',
		],
		[
			'name'     => 'favorites',
			'slug'     => 'favorites',
			'required' => true,
			'version'            => '2.3.2',
		],
		[
			'name'     => 'mailpoet',
			'slug'     => 'mailpoet',
			'required' => true,
			'version'            => '3.71.0',
		],
		[
			'name'     => 'Nextend Facebook Connect',
			'slug'     => 'nextend-facebook-connect',
			'required' => true,
			'version'            => '3.1.1',
		],
		[
			'name'     => 'Reading Time Wp',
			'slug'     => 'reading-time-wp',
			'required' => true,
			'version'            => '2.0.10',
		],
		[
			'name'     => 'Redux Framework',
			'slug'     => 'redux-framework',
			'required' => true,
			'version'            => '4.3.1',
		],
		[
			'name'     => 'Wp Graphql',
			'slug'     => 'wp-graphql',
			'required' => true,
			'version'	=> '1.6.5',
		],
		[
			'name'     => 'One click demo import',
			'slug'     => 'one-click-demo-import',
			'required' => true,
			'version'	=> '3.0.2',
		],

		// A locally theme bundled plugin example.
		[
			'name'     => 'Ncmaz Core',
			'slug'     => 'ncmaz-core',
			'source'   => plugin_dir_path(__FILE__) . '/bundled-plugins/ncmaz-core.zip',
			'required' => true,
			'version'	 => '0.1.0',
		],
		[
			'name'     => 'Ncmaz Frontend',
			'slug'     => 'ncmaz-frontend',
			'source'   => plugin_dir_path(__FILE__) . '/bundled-plugins/ncmaz-frontend.zip',
			'required' => true,
			'version'	=> '0.1.0',
		],
		[
			'name'     => 'Total counts for wp graphql',
			'slug'     => 'total-counts-for-wp-graphql',
			'source'   => plugin_dir_path(__FILE__) . '/bundled-plugins/total-counts-for-wp-graphql.zip',
			'required' => true,
			'version'            => '0.0.2',
		],
		[
			'name'     => 'Wp graphql acf',
			'slug'     => 'wp-graphql-acf',
			'source'   => plugin_dir_path(__FILE__) . '/bundled-plugins/wp-graphql-acf.zip',
			'required' => true,
			'version'            => '0.5.2',
		],
	];

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = [
		'id'           => 'ncmaztgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	];
	tgmpa($plugins, $config);
}
