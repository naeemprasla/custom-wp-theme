<?php

/**
 * The template for displaying header.
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

//CutomBodyVClass

$bodyclass = get_post_meta(get_the_ID(), 'custom_body_classboxclasses', true);

?>
<div class="site-wrapper <?php echo  $bodyclass;  ?>">
    <?php if (get_theme_mod('topbar_setting') == 'true') : ?>
        <section class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 header-left-widget">
                        <?php if (is_active_sidebar('header-1')) { ?>
                            <div class="wgt-header-wrapper">
                                <?php dynamic_sidebar('header-1'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 header-center-widget">
                        <?php if (is_active_sidebar('header-2')) { ?>
                            <div class="wgt-header-wrapper">
                                <?php dynamic_sidebar('header-2'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12 header-right-widget">
                        <?php if (is_active_sidebar('header-3')) { ?>
                            <div class="wgt-header-wrapper">
                                <?php dynamic_sidebar('header-3'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <header class="site-header" id="header-main">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0 m-0">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                ?>
                    <a href="<?php echo site_url(); ?>" class="navbar-brand"><span><?php echo $site_name; ?></span></a>
                <?php
                }
                ?>
                <button class="navbar-toggler border " type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars p-2"></span>
                </button>
                <?php if (has_nav_menu('menu-1')) :
                    wp_nav_menu(
                        array(
                            'theme_location'    => 'menu-1',
                            'container'  => 'div',
                            'container_id'   => 'main-nav',
                            'container_class' => 'collapse navbar-collapse justify-content-end',
                            'menu_id'  => false,
                            'menu_class'  => 'navbar-nav ml-auto site-header-nav',
                            'depth'   => 3,
                            'fallback_cb'  => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                    );
                endif; ?>

            </nav>
        </div>
    </header>