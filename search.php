<?php
/**
 * The template for displaying search results pages
 *
 * @package LSP Komunikasi
 */

get_header();
?>

    <main id="primary" class="site-main search-results-page">

        <!-- Parallax Hero Banner -->
        <section class="parallax-banner" <?php if ( has_header_image() ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
            <div class="parallax-content">
                <span style="display:inline-block; background:var(--secondary-color, #f89b29); color:#fff; font-size:11.5px; font-weight:700; padding:4px 14px; border-radius:20px; text-transform:uppercase; margin-bottom:12px; letter-spacing:0.5px;">
                    <?php esc_html_e( 'Hasil Pencarian Situs', 'lsp-komunikasi' ); ?>
                </span>
                <h1>
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Pencarian: &ldquo;%s&rdquo;', 'lsp-komunikasi' ), esc_html( get_search_query() ) );
                    ?>
                </h1>
                <p>
                    <?php
                    global $wp_query;
                    printf(
                        /* translators: %d: number of results. */
                        esc_html( _n( 'Ditemukan %d artikel/informasi yang sesuai.', 'Ditemukan %d artikel/informasi yang sesuai.', (int) $wp_query->found_posts, 'lsp-komunikasi' ) ),
                        (int) $wp_query->found_posts
                    );
                    ?>
                </p>
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
                            <?php esc_html_e( 'Tidak Ada Hasil yang Cocok', 'lsp-komunikasi' ); ?>
                        </h2>
                        <p style="color: #64748b; font-size: 14.5px; margin-bottom: 25px;">
                            <?php esc_html_e( 'Maaf, tidak ditemukan konten yang cocok dengan kata kunci tersebut. Silakan coba kata kunci lain di bawah ini:', 'lsp-komunikasi' ); ?>
                        </p>
                        <div style="max-width: 480px; margin: 0 auto;">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_footer();

