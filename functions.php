<?php add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'twentyninteen'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'ramteen', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

/**
 * Replace the home link URL
 */
add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );
function woo_custom_breadrumb_home_url() {
    return get_page_link(130);
}

/**
 * Set WooCommerce image dimensions upon theme activation
 */
// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	//unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	//unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	//unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

//add_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );


function remove_some_widgets(){
 
    // Unregister some of the TwentyTen sidebars
    unregister_sidebar( 'sidebar-1' );
}
add_action( 'widgets_init', 'remove_some_widgets', 10 );

// Register Sidebars
function add_ramsidebar() {

	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'twentynineteen' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your foofer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'add_ramsidebar' );
?>