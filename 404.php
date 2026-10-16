<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package LSP Komunikasi
 */

get_header();
?>

    <main id="primary" class="site-main error-404 not-found">

        <!-- Parallax Hero Banner -->
        <section class="parallax-banner" <?php if ( has_header_image() ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
            <div class="parallax-content">
                <h1><?php esc_html_e( '404 - Halaman Tidak Ditemukan', 'lsp-komunikasi' ); ?></h1>
                <p><?php esc_html_e( 'Maaf, tautan atau halaman yang Anda tuju tidak tersedia.', 'lsp-komunikasi' ); ?></p>
            </div>
        </section>

        <div class="site-content" style="max-width: 1200px; margin: 0 auto; padding: 0 20px 80px;">
            <div style="background: #ffffff; padding: 60px 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); margin-top: -60px; position: relative; z-index: 2; text-align: center; max-width: 800px; margin-left: auto; margin-right: auto;">
                <div style="font-size: 80px; font-weight: 900; color: var(--primary-color, #72161a); line-height: 1; margin-bottom: 15px; letter-spacing: -2px;">404</div>
                <h2 style="font-size: 22px; font-weight: 800; color: #1e293b; margin-bottom: 12px;"><?php esc_html_e( 'Halaman yang Anda Cari Tidak Ditemukan', 'lsp-komunikasi' ); ?></h2>
                <p style="color: #64748b; font-size: 15px; margin-bottom: 30px; line-height: 1.6;">
                    <?php esc_html_e( 'Kemungkinan alamat URL salah diketik, halaman telah dipindahkan, atau sudah tidak tersedia lagi di sistem kami.', 'lsp-komunikasi' ); ?>
                </p>

                <div style="max-width: 500px; margin: 0 auto 30px;">
                    <?php get_search_form(); ?>
                </div>

                <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: inline-block; padding: 12px 28px; background: var(--primary-color, #72161a); color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 14px; text-decoration: none; box-shadow: 0 4px 12px rgba(114,22,26,0.18);">
                        &larr; <?php esc_html_e( 'Kembali ke Beranda', 'lsp-komunikasi' ); ?>
                    </a>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'skema' ) ?: home_url( '/skema/' ) ); ?>" style="display: inline-block; padding: 12px 28px; background: #ffffff; color: var(--primary-color, #72161a); border: 2px solid var(--primary-color, #72161a); border-radius: 30px; font-weight: 700; font-size: 14px; text-decoration: none;">
                        <?php esc_html_e( 'Lihat Skema Sertifikasi', 'lsp-komunikasi' ); ?>
                    </a>
                </div>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_footer();

