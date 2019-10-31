<?php 
/**
 * Recursively get taxonomy and its children
 */
function get_taxonomy_hierarchy( $taxonomy, $parent = 0 ) {
	// only 1 taxonomy
	$taxonomy = is_array( $taxonomy ) ? array_shift( $taxonomy ) : $taxonomy;
	// get all direct decendants of the $parent
	$terms = get_terms( $taxonomy, 
		array( 
			'parent' => $parent, 
			'orderby' => 'menu_order', 
			'order' => 'asc', 
			'hide_empty' => true 
		) );
	// prepare a new array.  these are the children of $parent
	// we'll ultimately copy all the $terms into this new array, but only after they
	// find their own children
	$children = array();
	// go through all the direct decendants of $parent, and gather their children
	foreach ( $terms as $term ){
		// recurse to get the direct decendants of "this" term
		$term->children = get_taxonomy_hierarchy( $taxonomy, $term->term_id );
		// add the term to our new array
		$children[ $term->term_id ] = $term;
	}
	// send the results back to the caller
	return $children;
}

/**
 * Recursively get all taxonomies as complete hierarchies
 */
function get_taxonomy_hierarchy_multiple( $taxonomies, $parent = 0 ) {
	if ( ! is_array( $taxonomies )  ) {
		$taxonomies = array( $taxonomies );
	}
	$results = array();
	foreach( $taxonomies as $taxonomy ){
		$terms = get_taxonomy_hierarchy( $taxonomy, $parent );
		if ( $terms ) {
			$results[ $taxonomy ] = $terms;
		}
	}
	return $results;
}


// Display All Product Categories
function print_category_tree($child_categories = array()){
	echo '<ul class="product_categories">';
	foreach($child_categories as $product_category){
		echo '<li>
				<span>'.$product_category->name.'</span>';
		
				print_category_products($product_category->term_id);
		
		$total_children = count($product_category->children);
		if(!empty($total_children)){
			print_category_tree($product_category->children);
		}

		echo '</li>';
	}
	echo '</ul>';
}


// Display Products for Categories
function print_category_products($category_id){
	$params = array(
		'post_type' 		=> 'product',
		'posts_per_page' 	=> -1,
		'orderby' 			=> 'menu_order',
		'order' 			=> 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'term_id',
				'terms' => $category_id
			)
		)
	);
	$wc_query = new WP_Query($params);
	if ($wc_query->have_posts()) :
		echo '<ul class="sortable">';
		$counter = 0;
		while ($wc_query->have_posts()) : $wc_query->the_post();
			global $post;
			$product = wc_get_product( $post->ID );
			?>
			<li>
				<input type="hidden" name="product_id[]" id="product_id[]" value="<?php echo $post->ID;?>">
				
				<div class="menu-item-bar">
					<div class="menu-item-handle">
						<span class="item-title"><span class="menu-item-title"><?php the_title(); ?></span> <span class="dashicons dashicons-info" title="click to view/hide product info"></span></span>
						<input type="hidden" name="current_menu_order[]" id="current_menu_order[]" value="<?php echo $post->menu_order;?>">
						<input type="hidden" name="new_menu_order[]" id="new_menu_order[]" value="<?php echo $counter;?>">

						<?php include("product_details_box.php");?>
					</div>
				</div>
			</li>
			<?php 
			$counter++;
		endwhile;
		wp_reset_postdata();
		echo '</ul>';
	endif;
}