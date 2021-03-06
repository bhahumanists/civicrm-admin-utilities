<!-- assets/templates/network-settings-site.php -->
<div class="wrap">

	<h1><?php _e( 'CiviCRM Admin Utilities', 'civicrm-admin-utilities' ); ?></h1>

	<div class="updated">
		<?php if ( $this->plugin->is_civicrm_network_activated() ) : ?>
			<p><?php _e( 'CiviCRM is network-activated.', 'civicrm-admin-utilities' ); ?></p>
		<?php else : ?>
			<p><?php _e( 'CiviCRM is not network-activated.', 'civicrm-admin-utilities' ); ?></p>
		<?php endif; ?>
	</div>

	<?php if ( $show_tabs ) : ?>
		<h1 class="nav-tab-wrapper">
			<a href="<?php echo $urls['settings_network']; ?>" class="nav-tab"><?php _e( 'Network Settings', 'civicrm-admin-utilities' ); ?></a>
			<a href="<?php echo $urls['settings_site']; ?>" class="nav-tab nav-tab-active"><?php _e( 'Site Settings', 'civicrm-admin-utilities' ); ?></a>
			<?php

			/**
			 * Allow others to add tabs.
			 *
			 * @since 0.5.4
			 *
			 * @param array $urls The array of subpage URLs.
			 * @param str The key of the active tab in the subpage URLs array.
			 */
			do_action( 'civicrm_admin_utilities_network_nav_tabs', $urls, 'settings' );

			?>
		</h1>
	<?php else : ?>
		<hr />
	<?php endif; ?>

	<?php if ( isset( $_GET['updated'] ) AND $_GET['updated'] == 'true' ) : ?>
		<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible">
			<p><strong><?php _e( 'Settings saved.', 'civicrm-admin-utilities' ); ?></strong></p>
			<button type="button" class="notice-dismiss">
				<span class="screen-reader-text"><?php _e( 'Dismiss this notice.', 'civicrm-admin-utilities' ); ?></span>
			</button>
		</div>
	<?php endif; ?>

	<form method="post" id="civicrm_admin_utilities_settings_form" action="<?php echo $this->page_submit_url_get(); ?>">

		<?php wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false ); ?>
		<?php wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false ); ?>
		<?php wp_nonce_field( 'cau_network_site_action', 'cau_network_site_nonce' ); ?>

		<div id="poststuff">

			<div id="post-body" class="metabox-holder columns-<?php echo $columns;?>">

				<div id="post-body-content">
					<div class="notice notice-warning inline" style="margin: 0;">
						<p><strong style="text-transform: uppercase;"><?php _e( 'Please Note:', 'civicrm-admin-utilities' ); ?></strong> <?php _e( 'The settings that you choose below will be used as the initial default settings for CiviCRM Admin Utilities on each sub-site where CiviCRM is activated. Each of these sub-sites has its own CiviCRM Admin Utilities settings page where these settings can be overridden for that particular sub-site.', 'civicrm-admin-utilities' ); ?></p>
					</div>
				</div><!-- #post-body-content -->

				<div id="postbox-container-1" class="postbox-container">
					<?php do_meta_boxes( $screen->id, 'side', null ); ?>
				</div>

				<div id="postbox-container-2" class="postbox-container">
					<?php do_meta_boxes( $screen->id, 'normal', null );  ?>
					<?php do_meta_boxes( $screen->id, 'advanced', null ); ?>
				</div>

			</div><!-- #post-body -->
			<br class="clear">

		</div><!-- #poststuff -->

	</form>

</div><!-- /.wrap -->



