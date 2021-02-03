<?php
show_admin_bar(false);

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support'))
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_image_size('hd', 1920, '', true);
    add_image_size('large', 1400, '', true);
    add_image_size('medium', 700, '', true);
    add_image_size('small', 400, '', true);

    add_theme_support('automatic-feed-links');
}

add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// add_filter('acf/settings/show_admin', '__return_false');

/*------------------------------------*\
	Menu
\*------------------------------------*/
function ytheme_register_menu() {
  register_nav_menus(array(
    'main-menu-first' => __( 'First column - Menu' ),
    'main-menu-second' => __( 'Second column - Menu' ),
    'main-menu-third' => __( 'Third column - Menu' ),
    'foto-menu' => __( 'Foto Menu' ),
  ));
}
add_action( 'init', 'ytheme_register_menu' );


/*------------------------------------*\
	Scripts
\*------------------------------------*/
function ytheme_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_script('aos_js', get_template_directory_uri() . '/libs/aos.js', array(), '2.9.2', false);
        wp_enqueue_script('aos_js');

        wp_register_script('ytheme_scripts', get_template_directory_uri() . '/prod/js/main.min.js', array(), '1.0.8', true);
        wp_enqueue_script('ytheme_scripts');
    }
}
add_action('wp_enqueue_scripts', 'ytheme_header_scripts');

function ytheme_styles() {
    wp_register_style('aos_style', get_template_directory_uri() . '/libs/aos.css', array(), '2.9.2', 'all');
    wp_enqueue_style('aos_style');

    wp_register_style('ytheme_style', get_template_directory_uri() . '/prod/css/main.css', array(), '1.1.1', 'all');
    wp_enqueue_style('ytheme_style');
}
add_action('wp_enqueue_scripts', 'ytheme_styles', 10);

/**
 * Include ACF
 */
include 'inc/acf.php';





/**
 * Custom walker menu class.
 */
class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {
 
    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );
 
        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }
 
    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $hover_img_url = get_field('hover_img', $item->ID)['sizes']['hd'];

        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
 
        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
 
        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
 
        // Build HTML.
        $output .= $indent . '<li data-hover-img="'.$hover_img_url .'" id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
 
        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
 
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}




/**
 * Add title menu element
 */

add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items( $items, $args ) {
	$menu = wp_get_nav_menu_object($args->menu);
	
	if( $args->theme_location == 'main-menu-first' || $args->theme_location == 'main-menu-second' || $args->theme_location == 'main-menu-third') {
        $title = get_field('title', $menu);
        $link = get_field('title_link', $menu);
        
        if ($title) {
            $html_title = '<li class="menu-title"><a href="'.$link.'"><strong>'.$title.'</strong></a></li>';
		
            $items = $html_title . $items;
        }
	}
	
	return $items;
}