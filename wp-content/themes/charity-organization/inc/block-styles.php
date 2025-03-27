<?php
/**
 * Block Styles
 *
 * @package charity_organization
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function charity_organization_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'charity-organization-padding-0',
				'label' => esc_html__( 'No Padding', 'charity-organization' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'charity-organization-post-author-card',
				'label' => esc_html__( 'Theme Style', 'charity-organization' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'charity-organization-button',
				'label'        => esc_html__( 'Plain', 'charity-organization' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'charity-organization-post-comments',
				'label'        => esc_html__( 'Theme Style', 'charity-organization' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'charity-organization-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'charity-organization' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'charity-organization-wp-table',
				'label'        => esc_html__( 'Theme Style', 'charity-organization' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'charity-organization-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'charity-organization' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'charity-organization-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'charity-organization' ),
			)
		);
	}
	add_action( 'init', 'charity_organization_register_block_styles' );
}
