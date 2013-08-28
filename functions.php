<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


function content($num) {
$theContent = get_the_content();
$output = preg_replace('/<img[^>]+./','', $theContent);
$output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
$output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
$limit = $num+1;
$content = explode(' ', $output, $limit);
array_pop($content);
$content = implode(" ",$content)." ..";
echo $content;
}


/**
 * image sizes
 */

add_image_size( 'front', 270, 193, true ); // 270 pixels wide by 193 pixels tall, hard crop mode
add_image_size( 'banner', 1280, 500, true ); // 270 pixels wide by 193 pixels tall, hard crop mode


/**
 * Register Navigation Menus
 */

register_nav_menu( 'top-menu', 'Top menu' );


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


	register_sidebar( array(
			'id' => 'bootstrap_sidebar_right',
			'name' => 'Sidebar',
			'description' => 'Sidebaren i højre side af skærmen',
			'before_widget' => '<div class="sidebar_front">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="sidebar_head">',
			'after_title' => '</h5>',
		) );


    register_sidebar( array(
            'id' => 'bootstrap_footer1',
            'name' => 'Footer 1',
            'description' => 'Første kolonne i bunden af siden',
            'before_widget' => '<div class="sidebar_front">',
            'after_widget' => '</div>',
            'before_title' => '<b>',
            'after_title' => '</b>',
        ) );

    register_sidebar( array(
            'id' => 'bootstrap_footer2',
            'name' => 'Footer 2',
            'description' => 'Anden kolonne i bunden af siden',
            'before_widget' => '<div class="sidebar_front">',
            'after_widget' => '</div>',
            'before_title' => '<b>',
            'after_title' => '</b>',
        ) );

    register_sidebar( array(
            'id' => 'bootstrap_footer3',
            'name' => 'Footer 3',
            'description' => 'Tredje kolonne i bunden af siden',
            'before_widget' => '<div class="sidebar_front">',
            'after_widget' => '</div>',
            'before_title' => '<b>',
            'after_title' => '</b>',
        ) );

    register_sidebar( array(
            'id' => 'bootstrap_footer4',
            'name' => 'Footer 4',
            'description' => 'Fjerde kolonne i bunden af siden',
            'before_widget' => '<div class="sidebar_front">',
            'after_widget' => '</div>',
            'before_title' => '<b>',
            'after_title' => '</b>',
        ) );

    register_sidebar( array(
            'id' => 'bootstrap_footer5',
            'name' => 'Footer 5',
            'description' => 'Femte kolonne i bunden af siden',
            'before_widget' => '<div class="sidebar_front">',
            'after_widget' => '</div>',
            'before_title' => '<b>',
            'after_title' => '</b>',
        ) );


    register_sidebar( array(
            'id' => 'bootstrap_footer6',
            'name' => 'Footer 6',
            'description' => 'Sjette kolonne i bunden af siden',
            'before_widget' => '<div class="sidebar_front">',
            'after_widget' => '</div>',
            'before_title' => '<b>',
            'after_title' => '</b>',
        ) );


// cykler custom page:
function codex_cykler_init() {
  $labels = array(
    'name' => 'Cykler',
    'singular_name' => 'Cykel',
    'add_new' => 'Tilføj ny',
    'add_new_item' => 'Tilføj ny cykel',
    'edit_item' => 'Rediger cykel',
    'new_item' => 'Ny cykel',
    'all_items' => 'Alle cykler',
    'view_item' => 'Se cykler',
    'search_items' => 'Søg blandt cykler',
    'not_found' =>  'Ingen cykler fundet',
    'not_found_in_trash' => 'Ingen cykler fundet i papirkurven', 
    'parent_item_colon' => '',
    'menu_name' => 'Cykler'
  );

 $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'cykler' ),
    'capability_type' => 'page',
    'has_archive' => true, 
    'taxonomies' => array('typer', 'page-attributes'),
    'hierarchical' => false,
    'menu_position' => 4,
    'supports' => array( 'page-attributes', 'title', 'editor', 'thumbnail' )
  ); 

  register_post_type( 'cykler', $args );
}
add_action( 'init', 'codex_cykler_init' );

// banner custom page:
function codex_banner_init() {
  $labels = array(
    'name' => 'Bannere',
    'singular_name' => 'Banner',
    'add_new' => 'Tilføj nyt',
    'add_new_item' => 'Tilføj nyt banner',
    'edit_item' => 'Rediger banner',
    'new_item' => 'Nyt banner',
    'all_items' => 'Alle bannere',
    'view_item' => 'Se bannere',
    'search_items' => 'Søg blandt bannere',
    'not_found' =>  'Ingen bannere fundet',
    'not_found_in_trash' => 'Ingen bannere fundet i papirkurven', 
    'parent_item_colon' => '',
    'menu_name' => 'Bannere'
  );

 $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'banner' ),
    'capability_type' => 'page',
    'has_archive' => true, 
    'taxonomies' => array(),
    'hierarchical' => false,
    'menu_position' => 4,
    'supports' => array('title', 'editor', 'thumbnail' )
  ); 

  register_post_type( 'banner', $args );
}
add_action( 'init', 'codex_banner_init' );



add_theme_support('post-thumbnails');

function remove_menus()
{
    global $menu;
    $restricted = array( __('Posts'));
    end ($menu);

    while (prev($menu))
    {
        $value = explode(' ',$menu[key($menu)][0]);

        if(in_array($value[0] != NULL?$value[0]:"" , $restricted))
        {
            unset($menu[key($menu)]);
        }
    }
}
add_action('admin_menu', 'remove_menus');

// Typer taxonomi

add_action( 'init', 'create_banner_taxonomies', 0 );

function create_banner_taxonomies() 
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labela = array(
    'name'                => _x( 'Type', 'taxonomy general name' ),
    'singular_name'       => _x( 'Type', 'taxonomy singular name' ),
    'search_items'        => __( 'Søg blandt typer' ),
    'all_items'           => __( 'Alle typer' ),
    'parent_item'         => __( 'Overordnet type' ),
    'parent_item_colon'   => __( 'Overordnet type:' ),
    'edit_item'           => __( 'Rediger type' ), 
    'update_item'         => __( 'Opdater type' ),
    'add_new_item'        => __( 'Tilføj ny type' ),
    'new_item_name'       => __( 'Ny type navn' ),
    'menu_name'           => __( 'Typer' )
  ); 	

  $args = array(
    'hierarchical'        => true,
    'labels'              => $labela,
    'show_ui'             => true,
    'show_admin_column'   => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'typer' )
  );

  register_taxonomy( 'typer', array( 'cykler' ), $args );

}

// Stelstørrelse taxonomi

add_action( 'init', 'create_size_taxonomies', 0 );

function create_size_taxonomies() 
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labela = array(
    'name'                => _x( 'Størrelser', 'taxonomy general name' ),
    'singular_name'       => _x( 'Størrelse', 'taxonomy singular name' ),
    'search_items'        => __( 'Søg blandt størrelser' ),
    'all_items'           => __( 'Alle størrelser' ),
    'parent_item'         => __( 'Overordnet størrelse' ),
    'parent_item_colon'   => __( 'Overordnet størrelser:' ),
    'edit_item'           => __( 'Rediger størrelse' ), 
    'update_item'         => __( 'Opdater størrelse' ),
    'add_new_item'        => __( 'Tilføj ny størrelse' ),
    'new_item_name'       => __( 'Nyt størrelse navn' ),
    'menu_name'           => __( 'Størrelser' )
  );    

  $args = array(
    'hierarchical'        => true,
    'labels'              => $labela,
    'show_ui'             => true,
    'show_admin_column'   => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'size' )
  );

  register_taxonomy( 'size', array( 'cykler' ), $args );

}

// change the #3 to the user id
$user = new WP_User( 3 );
$user->add_cap( 'manage_options');

add_filter('show_admin_bar', '__return_false'); 


?>