<?php
/**
 * The template for displaying Area Download archive
 *
 * @package LSP Komunikasi
 */

get_header();
?>

    <main id="primary" class="site-main download-archive-page">

        <!-- Parallax Hero Banner -->
        <section class="parallax-banner">
            <div class="parallax-content">
                <h1>Area Download</h1>
                <p>Pusat Unduhan Dokumen, Formulir Uji Kompetensi, dan Regulasi Resmi LSP Komunikasi Indonesia</p>
            </div>
        </section>

        <div class="site-content" style="max-width: 1200px; margin: 0 auto; padding: 0 20px 60px;">
            <?php echo do_shortcode( '[lsp_download_area]' ); ?>
        </div>

    </main><!-- #main -->

<?php
get_footer();

