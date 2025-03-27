<?php
/**
 * Charity Organization functions and definitions
 *
 * @package charity_organization
 * @since 1.0
 */

if ( ! function_exists( 'charity_organization_support' ) ) :
	function charity_organization_support() {

		load_theme_textdomain( 'charity-organization', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'charity_organization_support' );

if ( ! function_exists( 'charity_organization_styles' ) ) :
	function charity_organization_styles() {
		// Register theme stylesheet.
		$charity_organization_theme_version = wp_get_theme()->get( 'Version' );

		$charity_organization_version_string = is_string( $charity_organization_theme_version ) ? $charity_organization_theme_version : false;
		wp_enqueue_style(
			'charity-organization-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$charity_organization_version_string
		);

		wp_enqueue_script( 'charity-organization-custom-script', get_theme_file_uri( '/assets/custom-script.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'charity-organization-style', 'rtl', 'replace' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'charity_organization_styles' );

/* Theme Credit link */
define('CHARITY_ORGANIZATION_BUY_NOW',__('https://www.cretathemes.com/products/charity-wordpress-theme','charity-organization'));
define('CHARITY_ORGANIZATION_PRO_DEMO',__('https://pattern.cretathemes.com/charity-organization/','charity-organization'));
define('CHARITY_ORGANIZATION_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/charity-organization/','charity-organization'));
define('CHARITY_ORGANIZATION_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/charity-organization/','charity-organization'));
define('CHARITY_ORGANIZATION_SUPPORT',__('https://wordpress.org/support/theme/charity-organization/','charity-organization'));
define('CHARITY_ORGANIZATION_REVIEW',__('https://wordpress.org/support/theme/charity-organization/reviews/#new-post','charity-organization'));
define('CHARITY_ORGANIZATION_PRO_THEME_BUNDLE',__('https://www.cretathemes.com/products/wordpress-theme-bundle','charity-organization'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function charity_organization_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'charity_organization_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_charity-organization-guide-page' ) { ?>

	    <div class="notice notice-success dash-notice">
	        <h1><?php esc_html_e('Hey, Thank you for installing Charity Organization Theme!', 'charity-organization'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize get-start-btn" href="<?php echo esc_url( admin_url( 'themes.php?page=charity-organization-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'charity-organization'); ?></a> 
	        	<a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'charity-organization'); ?></a> 
				<a class="button button-primary buy-now-btn" href="<?php echo esc_url( CHARITY_ORGANIZATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'charity-organization'); ?></a>
				<a class="button button-primary bundle-btn" href="<?php echo esc_url( CHARITY_ORGANIZATION_PRO_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Get Bundle', 'charity-organization'); ?></a>
	        </p>
	        <p class="dismiss-link"><strong><a href="?charity_organization_admin_notice=1"><?php esc_html_e( 'Dismiss', 'charity-organization' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'charity_organization_admin_notice' );

if( ! function_exists( 'charity_organization_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function charity_organization_update_admin_notice(){
    if ( isset( $_GET['charity_organization_admin_notice'] ) && $_GET['charity_organization_admin_notice'] = '1' ) {
        update_option( 'charity_organization_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'charity_organization_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'charity_organization_getstart_setup_options');
function charity_organization_getstart_setup_options () {
    update_option('charity_organization_admin_notice', FALSE );
}