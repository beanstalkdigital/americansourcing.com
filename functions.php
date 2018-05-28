<?php
define("EVERSIGHT_NAMESPACE", "eversight");
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

/**
 * Enqueue Scripts
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Shortcodes
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
} 

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

add_post_type_support( 'page', 'excerpt' );

function beanstalk_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'beanstalk_custom_excerpt_length', 999 );

function beanstalk_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'beanstalk-post-feed-features-image', 800, 600, true );

	add_image_size( 'beanstalk-post-full-featured-image', 2000, 1200, true );

	add_image_size( 'beanstalk-thumbnail-avatar', 100, 100, true );


	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'beanstalk' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);



	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
	  */
	//add_editor_style( array( 'assets/css/editor-style.css', beanstalk_fonts_url() ) );


}
add_action( 'after_setup_theme', 'beanstalk_setup' );




add_action( 'widgets_init', 'beanstalk_post_sidebar' );
 
function beanstalk_post_sidebar() {
 
    register_sidebar(
        array(
            'id' => 'post-sidebar',
            'name' => __( 'Post Sidebar' ),
            'description' => __( 'Content that will go below post pages.' ),
                        'class' => 'widget-class',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}



/**
 * Enqueue scripts and styles.
 */
function beanstalk_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'beanstalk-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	// if ( is_customize_preview() ) {
	// 	wp_enqueue_style( 'beanstalk-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'beanstalk-style' ), '1.0' );
	// 	wp_style_add_data( 'beanstalk-ie9', 'conditional', 'IE 9' );
	// }

	// Load the Internet Explorer 8 specific stylesheet.
	// wp_enqueue_style( 'beanstalk-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'beanstalk-style' ), '1.0' );
	// wp_style_add_data( 'beanstalk-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );

	wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery.min.js' ), array(), '' );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array(), '' );
	wp_enqueue_script( 'popper', get_theme_file_uri( '/assets/js/popper.min.js' ), array(), '' );


	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );


	wp_enqueue_script( 'beanstalk-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

	wp_localize_script( 'beanstalk-skip-link-focus-fix', 'beanstalkScreenReaderText', $beanstalk_l10n );

}
add_action( 'wp_enqueue_scripts', 'beanstalk_scripts' );

/**
* Comments List
*/

function bs_list_comments( $args = array(), $comments = null ) {
    global $wp_query, $comment_alt, $comment_depth, $comment_thread_alt, $overridden_cpage, $in_comment_loop;
 
    $in_comment_loop = true;
 
    $comment_alt = $comment_thread_alt = 0;
    $comment_depth = 1;
 
    $defaults = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'none',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 32,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => current_theme_supports( 'html5', 'comment-list' ) ? 'html5' : 'xhtml',
        'short_ping'        => false,
        'echo'              => true,
    );
 
    $r = wp_parse_args( $args, $defaults );
 
    /**
     * Filters the arguments used in retrieving the comment list.
     *
     * @since 4.0.0
     *
     * @see wp_list_comments()
     *
     * @param array $r An array of arguments for displaying comments.
     */
    $r = apply_filters( 'wp_list_comments_args', $r );
 
    // Figure out what comments we'll be looping through ($_comments)
    if ( null !== $comments ) {
        $comments = (array) $comments;
        if ( empty($comments) )
            return;
        if ( 'all' != $r['type'] ) {
            $comments_by_type = separate_comments($comments);
            if ( empty($comments_by_type[$r['type']]) )
                return;
            $_comments = $comments_by_type[$r['type']];
        } else {
            $_comments = $comments;
        }
    } else {
        /*
         * If 'page' or 'per_page' has been passed, and does not match what's in $wp_query,
         * perform a separate comment query and allow Walker_Comment to paginate.
         */
        if ( $r['page'] || $r['per_page'] ) {
            $current_cpage = get_query_var( 'cpage' );
            if ( ! $current_cpage ) {
                $current_cpage = 'newest' === get_option( 'default_comments_page' ) ? 1 : $wp_query->max_num_comment_pages;
            }
 
            $current_per_page = get_query_var( 'comments_per_page' );
            if ( $r['page'] != $current_cpage || $r['per_page'] != $current_per_page ) {
                $comment_args = array(
                    'post_id' => get_the_ID(),
                    'orderby' => 'comment_date_gmt',
                    'order' => 'ASC',
                    'status' => 'approve',
                );
 
                if ( is_user_logged_in() ) {
                    $comment_args['include_unapproved'] = get_current_user_id();
                } else {
                    $commenter = wp_get_current_commenter();
                    if ( $commenter['comment_author_email'] ) {
                        $comment_args['include_unapproved'] = $commenter['comment_author_email'];
                    }
                }
 
                $comments = get_comments( $comment_args );
 
                if ( 'all' != $r['type'] ) {
                    $comments_by_type = separate_comments( $comments );
                    if ( empty( $comments_by_type[ $r['type'] ] ) ) {
                        return;
                    }
 
                    $_comments = $comments_by_type[ $r['type'] ];
                } else {
                    $_comments = $comments;
                }
            }
 
        // Otherwise, fall back on the comments from `$wp_query->comments`.
        } else {
            if ( empty($wp_query->comments) )
                return;
            if ( 'all' != $r['type'] ) {
                if ( empty($wp_query->comments_by_type) )
                    $wp_query->comments_by_type = separate_comments($wp_query->comments);
                if ( empty($wp_query->comments_by_type[$r['type']]) )
                    return;
                $_comments = $wp_query->comments_by_type[$r['type']];
            } else {
                $_comments = $wp_query->comments;
            }
 
            if ( $wp_query->max_num_comment_pages ) {
                $default_comments_page = get_option( 'default_comments_page' );
                $cpage = get_query_var( 'cpage' );
                if ( 'newest' === $default_comments_page ) {
                    $r['cpage'] = $cpage;
 
                /*
                 * When first page shows oldest comments, post permalink is the same as
                 * the comment permalink.
                 */
                } elseif ( $cpage == 1 ) {
                    $r['cpage'] = '';
                } else {
                    $r['cpage'] = $cpage;
                }
 
                $r['page'] = 0;
                $r['per_page'] = 0;
            }
        }
    }
 
    if ( '' === $r['per_page'] && get_option( 'page_comments' ) ) {
        $r['per_page'] = get_query_var('comments_per_page');
    }
 
    if ( empty($r['per_page']) ) {
        $r['per_page'] = 0;
        $r['page'] = 0;
    }
 
    if ( '' === $r['max_depth'] ) {
        if ( get_option('thread_comments') )
            $r['max_depth'] = get_option('thread_comments_depth');
        else
            $r['max_depth'] = -1;
    }
 
    if ( '' === $r['page'] ) {
        if ( empty($overridden_cpage) ) {
            $r['page'] = get_query_var('cpage');
        } else {
            $threaded = ( -1 != $r['max_depth'] );
            $r['page'] = ( 'newest' == get_option('default_comments_page') ) ? get_comment_pages_count($_comments, $r['per_page'], $threaded) : 1;
            set_query_var( 'cpage', $r['page'] );
        }
    }
    // Validation check
    $r['page'] = intval($r['page']);
    if ( 0 == $r['page'] && 0 != $r['per_page'] )
        $r['page'] = 1;
 
    if ( null === $r['reverse_top_level'] )
        $r['reverse_top_level'] = ( 'desc' == get_option('comment_order') );
 
    wp_queue_comments_for_comment_meta_lazyload( $_comments );
 
    if ( empty( $r['walker'] ) ) {
        $walker = new Walker_Comment;
    } else {
        $walker = $r['walker'];
    }
 
    $output = $walker->paged_walk( $_comments, $r['max_depth'], $r['page'], $r['per_page'], $r );
 
    $in_comment_loop = false;
 
    if ( $r['echo'] ) {
        echo $output;
    } else {
        return $output;
    }
}
?>
