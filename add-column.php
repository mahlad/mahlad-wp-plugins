<?php 
/*
Plugin Name: mahlad-addColumnTable 
Plugin URI: https://github.com/mahlad/mahlad-wp-plugins/blob/master/add-column.php
Description: 
Author: Mahla Delpak
Version: 0.1
Author URI: http://mahlad.ir
*/
add_action('manage_posts_costum_column','custom_column',10 ,2 );
add_filter('manage_posts_columns','add_custom_column',5,2);
function custom_column($column,$post_id){
	if( $column == 'model' ) {
		
    	echo get_post_meta( $post_id , 'model' , true );
    
    }
	// switch ( $column ) {
	// case 'book_author':
	// 	$terms = get_the_term_list( $post_id , 'book_author' , '' , ',' , '' );
	// 	if ( is_string( $terms ) ) {
	// 		echo $terms;
	// 	} else {
	// 		echo 'Unable to get author(s)';
	// 	}
	// 	break;

	// case 'model':
	// 	echo get_post_meta( $post_id , 'model' , true ); 
	// 	break;
	// }
}
function add_custom_column($column_name){
	global $post;
	if($post->post_type=='products'){
		$column_name['model']='مدل';
		return $column_name;
	}else
	return $column_name;
}

 ?>