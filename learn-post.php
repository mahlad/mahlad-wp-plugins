<?php
/*
Plugin Name: mahlad-LearnPostType
Plugin URI: https://github.com/mahlad/mahlad-wp-plugins/blob/master/learn-post.php
Description: for articles or book ,...
Author: Mahla Delpak
Version: 1.1
Author URI: https://mahlad.ir
*/ 
register_nav_menu('mainmenu', "Main Manu");

	register_sidebar(array(
		'name' => 'Sidebar Right',
		'id' => 'sidebar-r',
		'description' => 'Right panel ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
add_action('init','craet_learn_type'); 
function craet_learn_type(){
	$labels=array(
		'name' => 'آموزش',
		'singular_name' => 'آموزش',
		'add_new' => 'افزودن مقاله(خبر)',
		'add_new_item' => 'افزودن مقاله(خبر) جدید',
		'edit_item' => 'ویرایش مقاله(خبر)',
		'new_item' => 'مقاله(خبر) جدید',
		'view_item' => 'نمایش مقاله(خبر)',
		'search_items' => 'جستجوی مقاله(خبر)',
		'not_found' => 'مقاله(خبر) مورد نظر یافت نشد',
		'not_found_in_trash' => 'مقاله(خبر) مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'مقاله(خبر)',
		'menu_name' => 'آموزش'
		);
	$args=array(
		'label' => 'آموزش',
		'labels' => $labels,
		'description' => 'در این قسمت می توان مقالات آموزشی یا اخبار جدید را قرار داد',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title','editor','excerpt','comments'),
		'rewrite' => array('slug' => 'learn'),
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,

		);
	register_post_type('learn', $args);
}
 ?>