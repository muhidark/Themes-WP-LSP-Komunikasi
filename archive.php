<?php
/**
 * The template for displaying archive pages
 *
 * @package LSP Komunikasi
 */

get_header();
?>

    <main id="primary" class="site-main archive-page">

        <!-- Parallax Hero Banner -->
        <section class="parallax-banner" <?php if ( has_header_image() ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
            <div class="parallax-content">
                <?php
                the_archive_title( '<h1>', '</h1>' );
                the_archive_description( '<p>', '</p>' );
                ?>
            </div>
        </section>

        <div class="site-content" style="max-width: 1200px; margin: 0 auto; padding: 0 20px 80px;">
            <div style="background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); margin-top: -60px; position: relative; z-index: 2;">
                <?php if ( have_posts() ) : ?>
                    <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(310px, 1fr)); gap: 24px;">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            if ( function_exists( 'lsp_komunikasi_render_post_card' ) ) {
                                lsp_komunikasi_render_post_card( get_the_ID() );
                            }
                        endwhile;
                        ?>
                    </div>

                    <div style="margin-top: 40px; text-align: center;">
                        <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => '<i class="fas fa-chevron-left"></i> ' . __( 'Sebelumnya', 'lsp-komunikasi' ),
                            'next_text' => __( 'Selanjutnya', 'lsp-komunikasi' ) . ' <i class="fas fa-chevron-right"></i>',
                        ) );
                        ?>
                    </div>
                <?php else : ?>
                    <div style="text-align: center; padding: 40px 20px;">
                        <h2 style="font-size: 20px; font-weight: 700; color: #1e293b; margin-bottom: 10px;">
                            <?php esc_html_e( 'Belum Ada Konten di Arsip Ini', 'lsp-komunikasi' ); ?>
                        </h2>
                        <p style="color: #64748b; font-size: 14.5px; margin-bottom: 25px;">
                            <?php esc_html_e( 'Belum ada artikel atau publikasi yang diterbitkan dalam kategori/arsip ini.', 'lsp-komunikasi' ); ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_footer();

