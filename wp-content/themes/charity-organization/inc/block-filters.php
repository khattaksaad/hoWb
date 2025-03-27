<?php
/**
 * Block Filters
 *
 * @package charity_organization
 * @since 1.0
 */

function charity_organization_block_wrapper( $charity_organization_block_content, $charity_organization_block ) {

	if ( 'core/button' === $charity_organization_block['blockName'] ) {
		
		if( isset( $charity_organization_block['attrs']['className'] ) && strpos( $charity_organization_block['attrs']['className'], 'has-arrow' ) ) {
			$charity_organization_block_content = str_replace( '</a>', charity_organization_get_svg( array( 'icon' => esc_attr( 'caret-circle-right' ) ) ) . '</a>', $charity_organization_block_content );
			return $charity_organization_block_content;
		}
	}

	if( ! is_single() ) {
	
		if ( 'core/post-terms'  === $charity_organization_block['blockName'] ) {
			if( 'post_tag' === $charity_organization_block['attrs']['term'] ) {
				$charity_organization_block_content = str_replace( '<div class="taxonomy-post_tag wp-block-post-terms">', '<div class="taxonomy-post_tag wp-block-post-terms flex">' . charity_organization_get_svg( array( 'icon' => esc_attr( 'tags' ) ) ), $charity_organization_block_content );
			}

			if( 'category' ===  $charity_organization_block['attrs']['term'] ) {
				$charity_organization_block_content = str_replace( '<div class="taxonomy-category wp-block-post-terms">', '<div class="taxonomy-category wp-block-post-terms flex">' . charity_organization_get_svg( array( 'icon' => esc_attr( 'category' ) ) ), $charity_organization_block_content );
			}
			return $charity_organization_block_content;
		}
		if ( 'core/post-date' === $charity_organization_block['blockName'] ) {
			$charity_organization_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . charity_organization_get_svg( array( 'icon' => esc_attr( 'calendar' ) ) ), $charity_organization_block_content );
			return $charity_organization_block_content;
		}
		if ( 'core/post-author' === $charity_organization_block['blockName'] ) {
			$charity_organization_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . charity_organization_get_svg( array( 'icon' => esc_attr( 'user' ) ) ), $charity_organization_block_content );
			return $charity_organization_block_content;
		}
	}
	if( is_single() ){

		// Add chevron icon to the navigations
		if ( 'core/post-navigation-link' === $charity_organization_block['blockName'] ) {
			if( isset( $charity_organization_block['attrs']['type'] ) && 'previous' === $charity_organization_block['attrs']['type'] ) {
				$charity_organization_block_content = str_replace( '<span class="post-navigation-link__label">', '<span class="post-navigation-link__label">' . charity_organization_get_svg( array( 'icon' => esc_attr( 'prev' ) ) ), $charity_organization_block_content );
			}
			else {
				$charity_organization_block_content = str_replace( '<span class="post-navigation-link__label">Next Post', '<span class="post-navigation-link__label">Next Post' . charity_organization_get_svg( array( 'icon' => esc_attr( 'next' ) ) ), $charity_organization_block_content );
			}
			return $charity_organization_block_content;
		}
		if ( 'core/post-date' === $charity_organization_block['blockName'] ) {
            $charity_organization_block_content = str_replace( '<div class="wp-block-post-date">', '<div class="wp-block-post-date flex">' . charity_organization_get_svg( array( 'icon' => 'calendar' ) ), $charity_organization_block_content );
            return $charity_organization_block_content;
        }
		if ( 'core/post-author' === $charity_organization_block['blockName'] ) {
            $charity_organization_block_content = str_replace( '<div class="wp-block-post-author">', '<div class="wp-block-post-author flex">' . charity_organization_get_svg( array( 'icon' => 'user' ) ), $charity_organization_block_content );
            return $charity_organization_block_content;
        }

	}
    return $charity_organization_block_content;
}
	
add_filter( 'render_block', 'charity_organization_block_wrapper', 10, 2 );
