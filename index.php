<?php
get_header();
?>

    <main id="primary" class="site-main">

        <?php if ( is_home() && ! is_front_page() ) : ?>
            <?php if ( lsp_komunikasi_show_header_carousel() ) : ?>
                <h1 class="screen-reader-text"><?php single_post_title(); ?></h1>
                <?php lsp_komunikasi_render_header_carousel(); ?>
            <?php else : ?>
                <!-- Parallax Banner for Blog Index -->
                <section class="parallax-banner" <?php if ( has_header_image() ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
                    <div class="parallax-content">
                        <h1><?php single_post_title(); ?></h1>
                        <p>Berita dan Informasi Terkini dari LSP Komunikasi Indonesia</p>
                    </div>
                </section>
            <?php endif; ?>
        <?php elseif ( is_front_page() || is_home() ) : ?>
            <!-- Header Carousel Banner for Front Page (Slide 1 delivers primary H1) -->
            <?php lsp_komunikasi_render_header_carousel(); ?>
        <?php elseif ( is_archive() ) : ?>
            <?php if ( lsp_komunikasi_show_header_carousel() ) : ?>
                <h1 class="screen-reader-text"><?php echo esc_html( get_the_archive_title() ); ?></h1>
                <?php lsp_komunikasi_render_header_carousel(); ?>
            <?php else : ?>
                <section class="parallax-banner" <?php if ( has_header_image() ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
                    <div class="parallax-content">
                        <?php
                        the_archive_title( '<h1>', '</h1>' );
                        the_archive_description( '<p>', '</p>' );
                        ?>
                    </div>
                </section>
            <?php endif; ?>
        <?php endif; ?>

        <div class="site-content">
            <div style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); margin-top: -60px; position: relative; z-index: 2;">
                <?php
                if ( have_posts() ) :
                    ?>
                    <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(310px, 1fr)); gap: 24px;">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            if ( function_exists( 'lsp_komunikasi_render_post_card' ) ) {
                                lsp_komunikasi_render_post_card( get_the_ID() );
                            }
                        endwhile;
                        ?>
                    </div><!-- .news-grid -->
                    
                    <div style="margin-top: 40px; text-align: center;">
                        <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => '<i class="fas fa-chevron-left"></i> ' . __( 'Sebelumnya', 'lsp-komunikasi' ),
                            'next_text' => __( 'Selanjutnya', 'lsp-komunikasi' ) . ' <i class="fas fa-chevron-right"></i>',
                        ) );
                        ?>
                    </div>
                    <?php
                else :
                    ?>
                    <p style="text-align: center; color: #64748b; padding: 40px 0;"><?php esc_html_e( 'Belum ada konten berita.', 'lsp-komunikasi' ); ?></p>
                    <?php
                endif;
                ?>
            </div>
        </div><!-- .site-content -->

    </main><!-- #main -->

<?php
get_footer();
