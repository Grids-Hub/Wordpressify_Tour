<?php
//CSS
function add_css()
{
   wp_register_style('font', get_template_directory_uri() . './Assets/Build/css/main.css', false,'1.1','all');
   wp_enqueue_style( 'font');
}
add_action('wp_enqueue_scripts', 'add_css');//hook function

// Google Fonts
function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fontsfirst', 'https://fonts.googleapis.com/css2?family=Inter|Playfair+Display|Mulish:wght@100&display=swap', false );
    

    }
    
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//Navigation Bar
function add_nav_menu(){
    
    register_nav_menus(array(
        "primary-menu" => __("Primary Menu" , 'text_domain'),
       
    ));
}
add_action('init' , 'add_nav_menu');

function add_link_atts($atts){
    $atts['class'] = 'nav-link ';
    return $atts;
}
add_filter('nav_menu_link_attributes','add_link_atts');

function add_list_atts($atts){
    $atts['class'] = 'nav-item al';
    return $atts;
}

add_filter('nav_menu_css_class','add_list_atts');



//Register Footer
function my_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'tour' ),
			'id'            => 'foot1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'tour' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'destination', 'tour' ),
			'id'            => 'foot2',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'tour' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'shop', 'tour' ),
			'id'            => 'foot3',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'tour' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Interest', 'tour' ),
			'id'            => 'foot4',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'tour' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'social', 'tour' ),
			'id'            => 'foot5',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'tour' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_widgets_init' );



//Custom Post Type

add_theme_support('post-thumbnails');
add_action('init', 'create_custom_post_type');
 
function create_custom_post_type() {
$labels = array(
	'name' => _x( 'Destinations', 'destinations' ),
	'singular_name' => _x( 'destinations', 'destinations' ),
	'add_new' => _x( 'Add New', 'destinations' ),
	'add_new_item' => _x( 'Add New destinations', 'destinations' ),
	'edit_item' => _x( 'Edit destinations', 'destinations' ),
	'new_item' => _x( 'New destinations', 'destinations' ),
	'view_item' => _x( 'View destinations', 'destinations' ),
	'search_items' => _x( 'Search destinations', 'destinations' ),
	'not_found' => _x( 'No destinations found', 'destinations' ),
	'not_found_in_trash' => _x( 'No destinations found in Trash', 'destinations' ),
	'parent_item_colon' => _x( 'Parent destinations:', 'destinations' ),
	'menu_name' => _x( 'Destinations', 'destinations' ),
	);
$args = array(
	'labels' => $labels,
	'hierarchical' => true,
	'description' => 'Hi, this is my custom post type.',
	'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
	'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'show_in_nav_menus' => true,
	'publicly_queryable' => true,
	'exclude_from_search' => false,
	'has_archive' => true,
	'query_var' => true,
	'can_export' => true,
	'rewrite' => true,
	'capability_type' => 'post'
	);
	register_post_type('destinations', $args); // Register Post type
}