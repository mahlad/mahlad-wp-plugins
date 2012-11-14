<?php 
/*
Plugin Name: Product Post Type
Plugin URI: 
Description:
Author: Mahla Delpak
Version: 1.0
Author URI: https://github.com/mahlad
*/

include 'meta-box.php';
add_action('init','create_product_type');
function create_product_type(){
	$labels_pt=array(
		'name' => 'محصولات',
		'singular_name' => 'محصولات',
		'add_new' => 'افزودن محصول',
		'add_new_item' => 'افزودن محصول جدید',
		'edit_item' => 'ویرایش محصول',
		'new_item' => 'محصول جدید',
		'view_item' => 'نمایش محصول',
		'search_items' => 'جستجوی محصول',
		'not_found' => 'محصول مورد نظر یافت نشد',
		'not_found_in_trash' => 'محصول مورد نظر در زباله دان یافت نشد',
		'parent_item_colon' => 'محصول',
		'menu_name' => 'محصولات'

		);
	$args_pt=array(
		'label' => 'محصولات',
		'labels' => $labels_pt,
		'description' =>'این پلاگین در حالت آزمایشی قرار دارد.',
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
		'capability_type' => 'post',
		'hierarchical' => true,
		'supports' => array('title','editor','author', 'page-attributes'),
		'has_archive' => true,
		'rewrite' => array('slug'=>'products'),
		'query_var' => true,
		'can_export' => true
		);
	register_post_type('products', $args_pt);

	$labels_prdr = array(
    'name'  => 'تولید کننده ها',
    'singular_name'  => 'تولیدکننده ها',
    'search_items'  => 'جستجوی تولیدکننده',
    'popular_items'  => 'بیشتر استفاده شده',
    'all_items'  => 'تمام تولیدکننده‌ها',
    'parent_item'  => 'مادر تولیدکننده',
    'edit_item'  => 'ویرایش تولیدکننده',
    'update_item'  => 'بروزرسانی تولیدکننده',
    'add_new_item'  => 'افزودن تولیدکننده جدید',
    'new_item_name'    => 'تولیدکننده جدید',
    'separate_items_with_commas'  => 'تولید کننده ها را با کاما جدا کنید',
    'add_or_remove_items'  => 'افزودن یا حذف تولیدکننده',
    'choose_from_most_used'  => 'انتخاب از محبوبها'
    );
	$args_tg=array(
		'label' => 'LG',
		'labels' =>$labels_prdr,
		'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'hierarchical' => true,
		'query_var' => true,
		// 'rewrite' => array('slug'=>'tag'),
		'rewrite' => array( 'slug' => 'producer','hierarchical' => true),

		);
	register_taxonomy('تولیدکننده', 'products', $args_tg);

	add_post_type_support( 'products', 'thumbnail' );
}

	
 ?>