<?php
add_action( 'admin_menu', 'charity_organization_getting_started' );
function charity_organization_getting_started() {
	add_theme_page( esc_html__('Get Started', 'charity-organization'), esc_html__('Get Started', 'charity-organization'), 'edit_theme_options', 'charity-organization-guide-page', 'charity_organization_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function charity_organization_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'charity_organization_admin_theme_style');

//guidline for about theme
function charity_organization_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'charity-organization' );
?>
	<div class="wrapper-outer">
		<div class="intro">
			<h3><?php echo esc_html( $theme->Name ); ?></h3>
			<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'charity-organization' ); ?></p>
			<div class="banner-buttons">
				<a href="<?php echo esc_url( CHARITY_ORGANIZATION_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Theme Documentation', 'charity-organization'); ?></a>
			</div>
		</div>
		<div class="left-main-box">
			<div class="about-wrapper">
				<div class="col-left">
					<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
				</div>
				<div class="col-right">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
				</div>
			</div>
			<div class="support-wrapper">
				<div class="review-box">
					<i class="dashicons dashicons-star-filled"></i>
					<h4><?php esc_html_e('Leave Us A Review', 'charity-organization'); ?></h4>
					<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'charity-organization'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( CHARITY_ORGANIZATION_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'charity-organization'); ?></a>
					</div>
				</div>
				<div class="support-box">
					<i class="dashicons dashicons-microphone"></i>
					<h4><?php esc_html_e('Need Help?', 'charity-organization'); ?></h4>
					<p><?php esc_html_e('Go to our support forum to help you out in case of queries.', 'charity-organization'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( CHARITY_ORGANIZATION_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'charity-organization'); ?></a>
					</div>
				</div>
				<div class="editor-box">
					<i class="dashicons dashicons-admin-appearance"></i>
					<h4><?php esc_html_e('Theme Customization', 'charity-organization'); ?></h4>
					<p><?php esc_html_e('Effortlessly modify and maintain your site using editor.', 'charity-organization'); ?></p>
					<div class="support-button">
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'charity-organization'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="right-main-box">
			<div class="pro-box">
				<i class="dashicons dashicons-cover-image"></i>
				<h4><?php esc_html_e('Go For Premium', 'charity-organization'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Proceed for pro version of theme.', 'charity-organization'); ?></p>
				<div class="pro-buttons">
					<a class="button button-primary doc-btn" href="<?php echo esc_url( CHARITY_ORGANIZATION_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'charity-organization'); ?></a>
					<a class="button button-primary buy-btn" href="<?php echo esc_url( CHARITY_ORGANIZATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'charity-organization'); ?></a>
					<a class="button button-primary demo-btn" href="<?php echo esc_url( CHARITY_ORGANIZATION_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Pro Demo', 'charity-organization'); ?></a>
				</div>
				<ul class="pro-list">
					<li><?php esc_html_e('Responsive Design', 'charity-organization');?></li>
					<li><?php esc_html_e('Demo Content Import', 'charity-organization');?></li>
					<li><?php esc_html_e('Aditional plugins', 'charity-organization');?></li>
					<li><?php esc_html_e('Background sliders', 'charity-organization');?></li>
					<li><?php esc_html_e('Video popups', 'charity-organization');?></li>
					<li><?php esc_html_e('More Fonts and Colors', 'charity-organization');?></li>
					<li><?php esc_html_e('Multiple templates', 'charity-organization');?></li>
					<li><?php esc_html_e('Multiple front page sections', 'charity-organization');?></li>
					<li><?php esc_html_e('Woocommerce support', 'charity-organization');?></li>
					<li><?php esc_html_e('Premium support', 'charity-organization');?></li>
					<li><?php esc_html_e('SEO optimization', 'charity-organization');?></li>
					<li><?php esc_html_e('Speed optimization', 'charity-organization');?></li>
					<li><?php esc_html_e('Browser compatibility', 'charity-organization');?></li>
			</div>
		</div>
	</div>
<?php } ?>