<?php
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_floor_plan_taxonomy', 0 );
//create a custom taxonomy name it topics for your posts
function create_floor_plan_taxonomy() {
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Floor Plan Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Floor Plan Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Floor Plan Categories' ),
    'all_items' => __( 'All Floor Plan Categories' ),
    'parent_item' => __( 'Parent Floor Plan Categories' ),
    'parent_item_colon' => __( 'Parent Floor Plan Categories:' ),
    'edit_item' => __( 'Edit Floor Plan Categories' ),
    'update_item' => __( 'Update Floor Plan Categories' ),
    'add_new_item' => __( 'Add New Floor Plan Categories' ),
    'new_item_name' => __( 'New Floor Plan Categories Name' ),
    'menu_name' => __( 'Floor Plan Categories' ),
  );
// Now register the taxonomy
  register_taxonomy('Floor Plan Categories',array('Floor Plans'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Floor Plan Categories' ),
  ));

}
?>
