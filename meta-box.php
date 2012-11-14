<?php 
add_action('add_meta_boxes','add_feature_meta');
add_action('save_post','save_feature_meta');
function add_feature_meta(){
	add_meta_box('feature','ویژگی های منحصربفرد','inner_featuer_meta','products','advanced','default');
}
function inner_featuer_meta($post){
	wp_nonce_field(plugin_basename(__FILE__), 'wpnonce');
	$post_id=$post->ID;
	$feature=get_post_meta($post_id,'feature',true);
	?>
<textarea cols="130" rows="10"name="feature" id="feature"><?php echo $feature; ?></textarea>
	<?php
}
function save_feature_meta($post_id){
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;
	if(!wp_nonce_field(plugin_basename(__FILE__), 'wpnonce'))
		return;
	if('products'==$_POST['post_type'])
	{
		if ( is_admin() ){
			$feature=$_POST['feature'];
			update_post_meta($post_id,'feature',$feature);
		}else return;
	}
	else
        return;
}

add_action('add_meta_boxes','add_model_meta');
add_action('save_post','save_model_meta');
function add_model_meta(){
	add_meta_box('model','مدل:','inner_model_meta','products','advanced','default');
}
function inner_model_meta($post){
	wp_nonce_field(plugin_basename(__FILE__), 'wpnonce');
	$post_id=$post->ID;
	$model=get_post_meta($post_id,'model',true);
	?>
	<input type="text" name="model" value="<?php echo "$model"; ?>" />
	<?php
}
function save_model_meta($post_id){
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;
	if(!wp_nonce_field(plugin_basename(__FILE__), 'wpnonce'))
		return;
	if('products'==$_POST['post_type'])
	{
		if ( is_admin() ){
			$model=$_POST['model'];
			update_post_meta($post_id,'model',$model);
		}else return;
	}
	else
        return;
}


