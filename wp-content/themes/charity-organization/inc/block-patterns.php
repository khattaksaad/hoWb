<?php
/**
 * Block Patterns
 *
 * @package charity_organization
 * @since 1.0
 */

function charity_organization_register_block_patterns() {
	$charity_organization_block_pattern_categories = array(
		'charity-organization' => array( 'label' => esc_html__( 'Charity Organization', 'charity-organization' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'charity-organization' ) ),
	);

	$charity_organization_block_pattern_categories = apply_filters( 'charity_organization_charity_organization_block_pattern_categories', $charity_organization_block_pattern_categories );

	foreach ( $charity_organization_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'charity_organization_register_block_patterns', 9 );