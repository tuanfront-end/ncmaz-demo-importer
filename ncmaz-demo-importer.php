<?php

/**
 * Plugin Name:       Ncmaz Demo Inporter
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ncmaz-demo-importer
 *
 */

define('NCMAZ_IMPORTER_BASE_PATH', plugin_dir_path(__FILE__));

//
// DECLAER IMPORT DEMO THEME
function ocdi_import_files()
{
    return [
        [
            'import_file_name'             => 'Ncmaz Demo 1',
            'categories'                   => ['Category 1', 'Category 2'],
            'local_import_file'            => NCMAZ_IMPORTER_BASE_PATH . '/ocdi-demos/demo1/ncmaz.xml',
            'local_import_widget_file'     => NCMAZ_IMPORTER_BASE_PATH .  '/ocdi-demos/demo1/widgets.wie',
            'local_import_customizer_file' => NCMAZ_IMPORTER_BASE_PATH . '/ocdi-demos/demo1/customize.dat',
            'local_import_redux'           => [
                [
                    'file_path'   => NCMAZ_IMPORTER_BASE_PATH . '/ocdi-demos/demo1/redux.json',
                    'option_name' => 'ncmaz_redux_demo',
                ],
            ],
            'import_preview_image_url'     =>  NCMAZ_IMPORTER_BASE_PATH . '/ocdi-demos/demo1/preview.jpeg',
            'preview_url'                  => 'https://ncmaz.chisnghiax.com/',
        ],
    ];
}
add_filter('ocdi/import_files', 'ocdi_import_files');


// AFTER IMPORT DEMO -- SETTING MENU, FRONT-PAGE, WIDGET ...
function ocdi_after_import_setup()
{
    // Assign menus to their locations.
    $main_menu = get_term_by('name', 'Ncmaz Main Menu', 'nav_menu');
    set_theme_mod(
        'nav_menu_locations',
        [
            'primary' => $main_menu->term_id,
        ]
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title('Home 1');

    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
}
add_action('ocdi/after_import', 'ocdi_after_import_setup');

// 
// 
require NCMAZ_IMPORTER_BASE_PATH . 'inc/requiredPlugins.php';
// 
// 