<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

?>
<?php if(is_woocommerce()) : ?>
<section class="woo-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php echo get_the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
	<main <?php post_class('site-main'); ?> role="main">

		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 p-0">
					<?php woocommerce_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php

get_footer();
