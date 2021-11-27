<?php

/**
 * The site's entry point.
 *
 * Loads the relevant template part,
 * the loop is executed (when needed) by the relevant template part.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();


if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

while (have_posts()) : the_post();
?>

	<main <?php post_class('site-main'); ?> role="main">

		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-12 p-0">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php
endwhile;
get_footer();
