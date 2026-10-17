<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lsp-komunikasi' ); ?></a>

    <header id="masthead" class="site-header">
        <!-- Top Bar / Secondary Header -->
        <div class="top-bar">
            <div class="top-bar-inner">
                <div class="top-bar-left">
                    <?php 
                    $topbar_info = get_theme_mod( 'lsp_topbar_info', 'LSP Komunikasi Indonesia &bull; Terlisensi BNSP' );
                    if ( ! empty( $topbar_info ) ) : ?>
                        <div class="topbar-info">
                            <?php echo wp_kses_post( $topbar_info ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( has_nav_menu( 'secondary' ) ) : ?>
                        <nav class="secondary-navigation" aria-label="<?php esc_attr_e( 'Secondary Menu', 'lsp-komunikasi' ); ?>">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'secondary',
                                'menu_id'        => 'secondary-menu',
                                'menu_class'     => 'secondary-menu-list',
                                'depth'          => 1,
                                'container'      => false,
                            ) );
                            ?>
                        </nav>
                    <?php endif; ?>
                </div>

                <div class="top-bar-right">
                    <div class="top-social">
                        <?php 
                        $ig = get_theme_mod( 'lsp_social_instagram' );
                        $fb = get_theme_mod( 'lsp_social_facebook' );
                        $li = get_theme_mod( 'lsp_social_linkedin' );
                        $yt = get_theme_mod( 'lsp_social_youtube' );
                        $wa = get_theme_mod( 'lsp_social_whatsapp' );
                        ?>
                        <?php if ( ! empty( $ig ) ) : ?><a href="<?php echo esc_url( $ig ); ?>" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a><?php endif; ?>
                        <?php if ( ! empty( $fb ) ) : ?><a href="<?php echo esc_url( $fb ); ?>" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
                        <?php if ( ! empty( $li ) ) : ?><a href="<?php echo esc_url( $li ); ?>" target="_blank" rel="noopener noreferrer" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
                        <?php if ( ! empty( $yt ) ) : ?><a href="<?php echo esc_url( $yt ); ?>" target="_blank" rel="noopener noreferrer" title="YouTube"><i class="fab fa-youtube"></i></a><?php endif; ?>
                        <?php if ( ! empty( $wa ) ) : ?><a href="<?php echo esc_url( $wa ); ?>" target="_blank" rel="noopener noreferrer" title="WhatsApp"><i class="fab fa-whatsapp"></i></a><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-inner">
            <div class="site-branding">
                <div class="header-logo">
                    <?php
                    if ( has_custom_logo() ) :
                        the_custom_logo();
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></p>
                        <?php
                    endif;
                    ?>
                </div>
                <div class="header-title-sticky">
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></p>
                </div>
            </div><!-- .site-branding -->

            <button class="menu-toggle" id="mobile-menu-toggle" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Buka Menu Navigasi', 'lsp-komunikasi' ); ?>">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav><!-- #site-navigation -->
        </div><!-- .header-inner -->
    </header><!-- #masthead -->
