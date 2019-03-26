<?php
/**
 * Dashboard page.
 *
 * @package Kliken WooCommerce Google Ads
 */

defined( 'ABSPATH' ) || exit;

?>

<div class="wrap kk-wrapper">
	<h2><?php esc_html_e( 'Google Ads for WooCommerce', 'woocommerce-google-ads' ); ?></h2>

	<p><?php esc_html_e( 'Launch Google Shopping ads and get your products found online easily.', '__PLUGIN_SLUG' ); ?></p>

	<div class="kk-box">
		<div class="kk-box-header">
			<div class="kk-img-container">
				<img src="https://d9hhrg4mnvzow.cloudfront.net/start.kliken.com/woo/40c24363-googleheader-logo.svg" alt="Google Logo" height="40" class="kk-google-img">
				<img src="https://d9hhrg4mnvzow.cloudfront.net/start.kliken.com/woo/1ab26a95-powderedbykliken_03600c03500c000000.png" alt="Powered by Kliken" class="kk-poweredby-img">
			</div>
		</div>

		<div class="kk-box-content">
			<h1><?php esc_html_e( 'Your store is connected.', 'woocommerce-google-ads' ); ?></h1>

			<p class="subhdr"><?php esc_html_e( 'Your WooCommerce store is connected to your Kliken account.', 'woocommerce-google-ads' ); ?></p>

			<hr>

			<div class="kk-link">
				<a class="sub-heading" href="<?php echo esc_url( KK_WC_WOOKLIKEN_BASE_URL . 'smb/shopping/dashboard' ); ?>">
					<?php esc_html_e( 'Campaign Dashboard', 'woocommerce-google-ads' ); ?>
				</a>
				<p class="sub-note"><?php esc_html_e( 'Open your dashboard to review your campaign\'s performance', 'woocommerce-google-ads' ); ?></p>
			</div>

			<div class="kk-link">
				<a class="sub-heading" href="<?php echo esc_url( KK_WC_WOOKLIKEN_BASE_URL . 'smb/shopping/create' ); ?>">
					<?php esc_html_e( 'Create a New Google Shopping Campaign', 'woocommerce-google-ads' ); ?>
				</a>
				<p class="sub-note"><?php esc_html_e( 'Build a campaign in a few minutes, and sell to customers as they search for your products on Google.', 'woocommerce-google-ads' ); ?></p>
			</div>

			<div class="kk-link">
				<a class="sub-heading" href="<?php echo esc_url( KK_WC_WOOKLIKEN_BASE_URL . 'smb/shopping/manage' ); ?>">
					<?php esc_html_e( 'Manage Campaigns', 'woocommerce-google-ads' ); ?>
				</a>
				<p class="sub-note"><?php esc_html_e( 'Make changes to your active campaigns, purchase one you built, or reinstate your cancelled campaigns.', 'woocommerce-google-ads' ); ?></p>
			</div>

			<hr>

			<details class="primer">
				<summary><?php esc_html_e( 'Advanced Options', 'woocommerce-google-ads' ); ?></summary>

				<div><input type="hidden" name="section" value="<?php echo esc_attr( $this->id ); ?>" /></div>
				<table class="form-table">
					<?php
						// NOTE: these methods are only available if this file is included within a WC_Integration extended class.
						echo $this->generate_settings_html( $this->get_form_fields(), false ); // WPCS: XSS ok.
					?>
				</table>
				<?php submit_button(); ?>
			</details>
		</div>
	</div>
</div>
