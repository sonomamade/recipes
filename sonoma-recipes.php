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
function recipe_post_type() {

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
function recipe_ingredient() {

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
function recipe_collection() {

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
function recipe_allergy() {

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

