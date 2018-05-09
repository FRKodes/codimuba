<?php
if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
	array(
	  'header' => __( 'Header Menu' ),
	  'footer' => __( 'Footer Menu' ),
	  'footer_2' => __( 'Footer Menu 2' ),
	  'footer_3' => __( 'Footer Menu 3' )
	)
  );
}
add_action( 'init', 'register_my_menus' );

function get_my_styles_and_scripts() {
	wp_enqueue_style( 'style.css', get_stylesheet_uri(), array(), '1.8');
	wp_enqueue_script( 'all.js', get_template_directory_uri() . '/all.js', array(), '1.0.2', true );
}
add_action( 'wp_enqueue_scripts', 'get_my_styles_and_scripts' );

add_action( 'init', 'create_home_item_post_type' );
function create_home_item_post_type() {
  register_post_type( 'links_home',
	array(
	  'labels' => array(
		'name' => __( 'Links Producto(s) Destacado(s)' ),
		'singular_name' => __( 'Link Producto(s) Destacado(s)' ),
		'add_new' => __( 'Agregar Link Producto(s) Destacado(s)' )
	  ),
	  'public' => true,
	  'has_archive' => true,
	  'supports'=> array('title', 'editor', 'thumbnail', 'page-attributes'),
	)
  );
}

add_action( 'init', 'create_product_post_type' );
function create_product_post_type() {
  register_post_type( 'producto',
	array(
	  'labels' => array(
		'name' => __( 'Productos' ),
		'singular_name' => __( 'Producto' ),
		'add_new' => __( 'Agregar Producto' )
	  ),
	  'public' => true,
	  'has_archive' => true,
	  'supports'=> array('title', 'editor', 'thumbnail', 'page-attributes'),
	)
  );
  flush_rewrite_rules();
}
add_action( 'init', 'create_product_taxonomy', 0 );

function create_product_taxonomy() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categorías de producto', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Categoría de producto', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Buscar Categorías de producto', 'textdomain' ),
		'all_items'         => __( 'Todas las categorías de producto', 'textdomain' ),
		'parent_item'       => __( 'Categoría padre', 'textdomain' ),
		'parent_item_colon' => __( 'Categoría padre:', 'textdomain' ),
		'edit_item'         => __( 'Editar Categoría de producto', 'textdomain' ),
		'update_item'       => __( 'Actualizar Categoría de producto', 'textdomain' ),
		'add_new_item'      => __( 'Agregar nueva Categoría de producto', 'textdomain' ),
		'new_item_name'     => __( 'Nombre de la nueva categoría de producto', 'textdomain' ),
		'menu_name'         => __( 'Categoría de producto', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'categoria-producto' ),
	);

	register_taxonomy( 'categoria_prod', array( 'producto' ), $args );
}


add_action( 'init', 'create_aviso_post_type' );
function create_aviso_post_type() {
	register_post_type( 'aviso',
	array(
			'labels' => array(
			'name' => __( 'Avisos' ),
			'singular_name' => __( 'Aviso' ),
			'add_new' => __( 'Agregar Aviso' )
		),
		'public' => true,
		'has_archive' => true,
		'supports'=> array('title', 'editor', 'thumbnail', 'page-attributes'),
	)
	);
	flush_rewrite_rules();
}

function getProductCatSlug($value='')
{
	$cat = get_term_by('name', single_cat_title('',false), 'categoria_prod');
	return $cat->slug;
}

