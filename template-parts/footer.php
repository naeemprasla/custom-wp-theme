<?php

/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


$site_name = get_bloginfo('name');
$tagline   = get_bloginfo('description', 'display');

//SOcial Media - Customizer Options
$facebook = get_theme_mod('social_media_fb');
$twitter = get_theme_mod('social_media_tw');
$linkedin = get_theme_mod('social_media_ln');
$instagram = get_theme_mod('social_media_in');
$youtube = get_theme_mod('social_media_yt');

//Contact Info - Customizer Options
$phone = get_theme_mod('phone_text_setting');
$faxnumb = get_theme_mod('fax_text_setting');
$emailaddr = get_theme_mod('emailid_text_setting');
$address = get_theme_mod('address_text_setting');
$gmaplink = get_theme_mod('map_url_setting');



//Sample Code For Widgets
?>

<?php if (get_theme_mod('bottom_setting') == 'true') : ?>
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-12 col-12 footer-left-widget">
					<?php if (is_active_sidebar('footer-1')) { ?>
						<div class="wgt-footer-wrapper">
							<?php dynamic_sidebar('footer-1'); ?>
						</div>
					<?php } ?>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-12 footer-center-widget">
					<?php if (is_active_sidebar('footer-2')) { ?>
						<div class="wgt-footer-wrapper">
							<?php dynamic_sidebar('footer-2'); ?>
						</div>
					<?php } ?>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-12 footer-right-widget">
					<?php if (is_active_sidebar('footer-3')) { ?>
						<div class="wgt-footer-wrapper">
							<?php dynamic_sidebar('footer-3'); ?>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</footer>
<?php endif; ?>
<section class="copyrights">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-12 col-12 text-xl-left text-lg-left text-md-center text-center">
				<p class="m-0">&copy; <?php echo date('Y'); ?> <a href="<?php echo site_url(); ?>"><?php echo $site_name;  ?></a> - All Rights Reserved.</p>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-12 text-xl-right text-lg-right text-md-center text-center">
				<p class="m-0"><a href="#" class="scroll_top">Back To Top</a></p>
			</div>
		</div>
	</div>
</section>

<?php
if (class_exists('woocommerce')) {
?>


	<!-- Modal -->
	<div class="modal-minicart modal fade" id="minicart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="MiniCart">Cart</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo woocommerce_mini_cart(); ?>
				</div>
				
			</div>
		</div>
	</div>

<?php
}
?>