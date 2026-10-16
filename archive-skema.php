<?php
/**
 * The template for displaying Skema Sertifikasi catalog archive
 *
 * @package LSP Komunikasi
 */

get_header();
?>

    <main id="primary" class="site-main skema-archive-page">

        <!-- Parallax Hero Banner -->
        <section class="parallax-banner" <?php if ( has_header_image() ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
            <div class="parallax-content">
                <h1>Skema Sertifikasi</h1>
                <p>Daftar Lengkap Skema Sertifikasi Kompetensi <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
            </div>
        </section>

        <div class="site-content" style="max-width: 1200px; margin: 0 auto; padding: 0 20px 60px;">
            <h2 class="screen-reader-text">Katalog Skema Sertifikasi Kompetensi</h2>
            <?php
            if ( class_exists( 'LSP_Core_Management' ) ) {
                echo LSP_Core_Management::get_instance()->render_skema_catalog_archive();
            } else {
                echo '<p>Silakan aktifkan plugin <strong>LSP Core Management</strong> untuk menampilkan katalog Skema Sertifikasi.</p>';
            }
            ?>
        </div>

    </main><!-- #primary -->

<?php
get_footer();
