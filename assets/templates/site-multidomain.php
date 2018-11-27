<!-- assets/templates/site-multidomain.php -->
<div class="wrap">

	<h1><?php _e( 'CiviCRM Admin Utilities', 'civicrm-admin-utilities' ); ?></h1>

	<h2 class="nav-tab-wrapper">
		<a href="<?php echo $urls['settings']; ?>" class="nav-tab"><?php _e( 'Settings', 'civicrm-admin-utilities' ); ?></a>
		<?php

		/**
		 * Allow others to add tabs.
		 *
		 * @since 0.5.4
		 *
		 * @param array $urls The array of subpage URLs.
		 * @param str The key of the active tab in the subpage URLs array.
		 */
		do_action( 'civicrm_admin_utilities_settings_nav_tabs', $urls, 'multidomain' );

		?>
	</h2>

	<form method="post" id="civicrm_admin_utilities_multidomain_form" action="<?php echo $this->page_submit_url_get(); ?>">

		<?php wp_nonce_field( 'civicrm_admin_utilities_multidomain_action', 'civicrm_admin_utilities_multidomain_nonce' ); ?>

		<h3><?php _e( 'CiviCRM Domain Options', 'civicrm-admin-utilities' ); ?></h3>

		<p><?php _e( 'Create or edit the CiviCRM Domain here.', 'civicrm-admin-utilities' ); ?></p>

		<table class="form-table">

			<tr>
				<th scope="row"><?php _e( 'Domain', 'civicrm-admin-utilities' ); ?></th>
				<td>
					<p><?php echo sprintf( __( '%1$s (ID: %2$d)', 'civicrm-admin-utilities' ), $domain_name, $domain_id ); ?></p>
				</td>
			</tr>

			<tr>
				<th scope="row"><?php _e( 'Domain Group', 'civicrm-admin-utilities' ); ?></th>
				<td>
					<p><?php echo sprintf( __( '%1$s (ID: %2$d)', 'civicrm-admin-utilities' ), $domain_group_name, $domain_group_id ); ?></p>
				</td>
			</tr>

			<tr>
				<th scope="row"><?php _e( 'Domain Org', 'civicrm-admin-utilities' ); ?></th>
				<td>
					<p><?php echo sprintf( __( '%1$s (ID: %2$d)', 'civicrm-admin-utilities' ), $domain_org_name, $domain_org_id ); ?></p>
				</td>
			</tr>

		</table>

		<p class="submit">
			<input class="button-primary" type="submit" id="civicrm_admin_utilities_multidomain_submit" name="civicrm_admin_utilities_multidomain_submit" value="<?php _e( 'Save Changes', 'civicrm-admin-utilities' ); ?>" />
		</p>

	</form>

</div><!-- /.wrap -->


