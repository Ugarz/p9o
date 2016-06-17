<?php
/**
 * @package sydney-child
 */
?>
<?php

/* On ajoute le style enqueued */
function pole9ouest_css() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'pole9ouest_css' );

/* I*/
function pole9ouest_js(){
	wp_enqueue_script( 'extra', get_stylesheet_directory_uri() . '/assets/js/extra.js');
}
add_action('wp_enqueue_scripts', 'pole9ouest_js');

/* Créer un menu de villes*/
function pole9ouest_extra_menus() {
  register_nav_menu('id-menu-villes', __('Menu pour les villes'));
  register_nav_menu('id-menu-cartels', __('Menu pour les cartels'));
  register_nav_menu('id-menu-fccl', __('Menu pour le FCCL'));
}
add_action('init', 'pole9ouest_extra_menus');

/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Admin Menu Items
* Appearance / Comments / Links / Media / Pages / Plugins / Posts / Settings / Tools / Users
*/
/*-----------------------------------------------------------------------------------*/
/*function remove_admin_menu_items() {
	$remove_menu_items = array(__('Links'),__('Posts'),__('Comments'),__('Plugins'),__('Tools'),__('Settings'),__('Types'));
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_admin_menu_items');*/

// Remove sub-items
/*
add_action('admin_menu', 'remove_menu_items');
function remove_submenus() {
 global $submenu;
 unset($submenu['index.php'][10]); // Supprimer 'Mises à jour'.
 unset($submenu['themes.php'][5]); // Supprimer 'Thèmes'.
 unset($submenu['options-general.php'][15]); // Supprimer 'Ecriture'.
 unset($submenu['options-general.php'][25]); // Supprimer 'Commentaires'.
 unset($submenu['edit.php'][16]); // Supprimer 'Tags'.
 }
add_action('admin_menu', 'remove_submenus');*/


?>