<?php

/**
 *
 * @link              https://github.com/sonomamade/recipes
 * @since             1.0.0
 * @package           Sonoma_Recipes
 *
 * @wordpress-plugin
 * Plugin Name:       Sonoma Recipes
 * Plugin URI:        https://github.com/sonomamade/recipes
 * Description:       A plugin that adds a recipe custom post type
 * Version:           1.0.0
 * Author:            Michael Silva
 * Author URI:        http://michaelsilva.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sonoma-recipes
 * Domain Path:       /languages
 */


// Register Custom Post Type
function sonoma_recipe_post_type() {

	$labels = array(
		'name'                => 'Recipes',
		'singular_name'       => 'Recipe',
		'menu_name'           => 'Recipes',
		'parent_item_colon'   => 'Parent Recipe:',
		'all_items'           => 'All Recipes',
		'view_item'           => 'View Recipe',
		'add_new_item'        => 'Add New Recipe',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Recipe',
		'update_item'         => 'Update Recipe',
		'search_items'        => 'Search Recipes',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'recipe',
		'description'         => 'A custom post type to enter and organize your recipes',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', ),
		'taxonomies'          => array( 'recipe_ingredient', 'recipe_collection', 'recipe_allergy', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-media-document',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'recipe', $args );

}

// Hook into the 'init' action
add_action( 'init', 'recipe_post_type', 0 );


// Register Custom Taxonomy
function sonoma_recipe_taxonomy_ingredient() {

	$labels = array(
		'name'                       => 'Recipe Ingredients',
		'singular_name'              => 'Recipe Ingredient',
		'menu_name'                  => 'Ingredients',
		'all_items'                  => 'All Ingredients',
		'parent_item'                => 'Parent Ingredient',
		'parent_item_colon'          => 'Parent Ingredient:',
		'new_item_name'              => 'New Ingredient',
		'add_new_item'               => 'Add New Ingredient',
		'edit_item'                  => 'Edit Ingredient',
		'update_item'                => 'Update Ingredient',
		'separate_items_with_commas' => 'Separate ingredients with commas',
		'search_items'               => 'Search ingredients',
		'add_or_remove_items'        => 'Add or remove ingredients',
		'choose_from_most_used'      => 'Choose from the most used ingredients',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'recipe-ingredient', array( 'recipe' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'recipe_ingredient', 0 );


// Register Custom Taxonomy
function sonoma_recipe_taxonomy_collection() {

	$labels = array(
		'name'                       => 'Recipe Collections',
		'singular_name'              => 'Recipe Collection',
		'menu_name'                  => 'Collections',
		'all_items'                  => 'All Collections',
		'parent_item'                => 'Parent Collection',
		'parent_item_colon'          => 'Parent Collection:',
		'new_item_name'              => 'New Collection',
		'add_new_item'               => 'Add New Collection',
		'edit_item'                  => 'Edit Collection',
		'update_item'                => 'Update Collection',
		'separate_items_with_commas' => 'Separate collections with commas',
		'search_items'               => 'Search collections',
		'add_or_remove_items'        => 'Add or remove collections',
		'choose_from_most_used'      => 'Choose from the most used collections',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'recipe-collection', array( 'recipe' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'recipe_collection', 0 );


// Register Custom Taxonomy
function sonoma_recipe_taxonomy_allergy() {

	$labels = array(
		'name'                       => 'Recipe Allergies',
		'singular_name'              => 'Recipe Allergy',
		'menu_name'                  => 'Allergies',
		'all_items'                  => 'All Allergies',
		'parent_item'                => 'Parent Allergy',
		'parent_item_colon'          => 'Parent Allergy:',
		'new_item_name'              => 'New Allergy',
		'add_new_item'               => 'Add New Allergy',
		'edit_item'                  => 'Edit Allergy',
		'update_item'                => 'Update Allergy',
		'separate_items_with_commas' => 'Separate allergies with commas',
		'search_items'               => 'Search allergies',
		'add_or_remove_items'        => 'Add or remove allergies',
		'choose_from_most_used'      => 'Choose from the most used allergies',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'recipe-allergy', array( 'recipe' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'recipe_allergy', 0 );


// Add ACF fields for Recipe Builder
if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_5377a38aa31f7',
	'title' => 'Recipe',
	'fields' => array (
		array (
			'key' => 'field_52806a5be3f02',
			'label' => 'Prep Time',
			'name' => 'prep-time',
			'prefix' => '',
			'type' => 'number',
			'instructions' => 'Preparation time in minutes.',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => 15,
			'prepend' => '',
			'append' => 'Minutes',
			'min' => 1,
			'max' => '',
			'step' => 5,
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_528070a20fdc2',
			'label' => 'Cook Time',
			'name' => 'cook-time',
			'prefix' => '',
			'type' => 'number',
			'instructions' => 'Cook time in minutes.',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => 15,
			'prepend' => '',
			'append' => 'Minutes',
			'min' => 1,
			'max' => '',
			'step' => 5,
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_52806c03ee73b',
			'label' => 'Yield',
			'name' => 'yield',
			'prefix' => '',
			'type' => 'number',
			'instructions' => 'Number of servings',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => 6,
			'prepend' => '',
			'append' => 'Serving(s)',
			'min' => 1,
			'max' => '',
			'step' => 1,
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5377a604ec347',
			'label' => 'Include Recipe?',
			'name' => 'include-recipe',
			'prefix' => '',
			'type' => 'post_object',
			'instructions' => 'Include another recipe required to create dish.',
			'required' => 0,
			'conditional_logic' => 0,
			'post_type' => array (
				0 => 'recipe',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'multiple' => 1,
			'return_format' => 'object',
			'ui' => 1,
		),
		array (
			'key' => 'field_528072a426804',
			'label' => 'Ingredients',
			'name' => 'ingredients',
			'prefix' => '',
			'type' => 'repeater',
			'instructions' => 'Add each ingredient separately.',
			'required' => 0,
			'conditional_logic' => 0,
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Ingredient',
			'sub_fields' => array (
				array (
					'key' => 'field_5377a6ccec349',
					'label' => 'Quantity',
					'name' => 'quantity',
					'prefix' => '',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'column_width' => 12,
					'choices' => array (
						'1/16' => '1/16',
						'1/8' => '1/8',
						'1/4' => '1/4',
						'1/2' => '1/2',
						'3/4' => '3/4',
						1 => 1,
						2 => 2,
						3 => 3,
						4 => 4,
						5 => 5,
						6 => 6,
						7 => 7,
						8 => 8,
						9 => 9,
						10 => 10,
						11 => 11,
						12 => 12,
						13 => 13,
						14 => 14,
						15 => 15,
						16 => 16,
						17 => 17,
						18 => 18,
						19 => 19,
						20 => 20,
						21 => 21,
						22 => 22,
						23 => 23,
						24 => 24,
						25 => 25,
						26 => 26,
						27 => 27,
						28 => 28,
						29 => 29,
						30 => 30,
						41 => 41,
						42 => 42,
						43 => 43,
						44 => 44,
						45 => 45,
						46 => 46,
						47 => 47,
						48 => 48,
						49 => 49,
						50 => 50,
						61 => 61,
						62 => 62,
						63 => 63,
						64 => 64,
						65 => 65,
						66 => 66,
						67 => 67,
						68 => 68,
						69 => 69,
						70 => 70,
						71 => 71,
						72 => 72,
						73 => 73,
						74 => 74,
						75 => 75,
						76 => 76,
						77 => 77,
						78 => 78,
						79 => 79,
						80 => 80,
						81 => 81,
						82 => 82,
						83 => 83,
						84 => 84,
						85 => 85,
						86 => 86,
						87 => 87,
						88 => 88,
						89 => 89,
						90 => 90,
						91 => 91,
						92 => 92,
						93 => 93,
						94 => 94,
						95 => 95,
						96 => 96,
						97 => 97,
						98 => 98,
						99 => 99,
					),
					'default_value' => 1,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 1,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_5377a868ec34a',
					'label' => 'Measurement',
					'name' => 'measurement',
					'prefix' => '',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'column_width' => 12,
					'choices' => array (
						'pinch' => 'pinch',
						'dash' => 'dash',
						'tsp' => 'tsp',
						'tbsp' => 'tbsp',
						'fl oz' => 'fl oz',
						'c' => 'c',
						'p' => 'p',
						'qt' => 'qt',
						'gal' => 'gal',
						'oz' => 'oz',
						'lb' => 'lb',
					),
					'default_value' => '',
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 1,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_5377a930ec34b',
					'label' => 'Product',
					'name' => 'product',
					'prefix' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'column_width' => 10,
					'message' => '',
					'default_value' => 0,
				),
				array (
					'key' => 'field_5377a979ec34c',
					'label' => 'Included Product',
					'name' => 'included-product',
					'prefix' => '',
					'type' => 'page_link',
					'instructions' => 'This will include a link to the product page.',
					'required' => 0,
					'conditional_logic' => array (
						array (
							'rule_rule_rule_rule_rule_rule_rule_0' => array (
								'field' => 'field_5377a930ec34b',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'post_type' => array (
						0 => 'post',
					),
					'taxonomy' => '',
					'allow_null' => 0,
					'multiple' => 0,
				),
				array (
					'key' => 'field_5377a9daec34d',
					'label' => 'Ingredient',
					'name' => 'ingredient',
					'prefix' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'column_width' => 21,
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'formatting' => 'none',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5377a9ecec34e',
					'label' => 'Note',
					'name' => 'note',
					'prefix' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'column_width' => '',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'formatting' => 'html',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_53785f7b5bee9',
					'label' => 'Optional',
					'name' => 'optional',
					'prefix' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'column_width' => '',
					'message' => '',
					'default_value' => 0,
				),
			),
		),
		array (
			'key' => 'field_528076a6f9381',
			'label' => 'Instructions',
			'name' => 'instructions',
			'prefix' => '',
			'type' => 'repeater',
			'instructions' => 'Add each step separately.',
			'required' => 0,
			'conditional_logic' => 0,
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Step',
			'sub_fields' => array (
				array (
					'key' => 'field_5377a68fec348',
					'label' => 'Step',
					'name' => 'step',
					'prefix' => '',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'column_width' => '',
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'readonly' => 0,
					'disabled' => 0,
					'new_lines' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'recipe',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;