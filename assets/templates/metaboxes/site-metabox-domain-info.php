<!-- assets/templates/metaboxes/site-metabox-domain-info.php -->
<?php if ( ! $metabox['args']['multisite'] ) : ?>
	<div class="updated error inline" style="background-color: #f7f7f7;">
		<p><?php _e( 'It is recommended that you install and activate the <a href="https://civicrm.org/extensions/multisite-permissioning" target="_blank">CiviCRM Multisite</a> extension to work with multiple Domains in CiviCRM.', 'civicrm-admin-utilities' ); ?></p>
	</div>
<?php endif; ?>

<?php if ( ! $metabox['args']['enabled'] ) : ?>
	<div class="notice notice-warning inline" style="background-color: #f7f7f7;">
		<p><?php echo sprintf( __( 'Multisite is not enabled on this CiviCRM Domain. Change <a href="%s">the setting in CiviCRM</a> to enable it.', 'civicrm-admin-utilities' ), $metabox['args']['multisite_url'] ); ?></p>
	</div>
<?php endif; ?>

<table class="form-table">

	<tr>
		<th scope="row">
			<?php _e( 'Domain', 'civicrm-admin-utilities' ); ?>
		</th>

		<td>
			<?php echo sprintf(
				__( '%1$s (ID %2$s)', 'civicrm-admin-utilities' ),
				'<span class="cau_domain_name">' . $metabox['args']['domain']['name'] . '</span>',
				'<span class="cau_domain_id">' . $metabox['args']['domain']['id'] . '</span>'
			); ?>
		</td>
	</tr>

	<tr>
		<th scope="row">
			<?php _e( 'Domain Group', 'civicrm-admin-utilities' ); ?>
		</th>

		<td>
			<?php echo sprintf(
				__( '%1$s (ID %2$s)', 'civicrm-admin-utilities' ),
				'<span class="cau_domain_group_name">' . $metabox['args']['domain_group']['name'] . '</span>',
				'<span class="cau_domain_group_id">' . $metabox['args']['domain_group']['id'] . '</span>'
			); ?>
		</td>
	</tr>

	<tr>
		<th scope="row">
			<?php _e( 'Domain Organisation', 'civicrm-admin-utilities' ); ?>
		</th>

		<td>
			<?php echo sprintf(
				__( '%1$s (ID %2$s)', 'civicrm-admin-utilities' ),
				'<span class="cau_domain_org_name">' . $metabox['args']['domain_org']['name'] . '</span>',
				'<span class="cau_domain_org_id">' . $metabox['args']['domain_org']['id'] . '</span>'
			); ?>
		</td>
	</tr>

</table>
