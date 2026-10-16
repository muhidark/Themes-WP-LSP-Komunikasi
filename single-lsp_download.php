<?php
/**
 * The template for displaying single download detail
 *
 * @package LSP Komunikasi
 */

get_header();
?>

    <main id="primary" class="site-main single-download-page">

        <!-- Parallax Hero Banner -->
        <section class="parallax-banner" <?php if ( has_post_thumbnail() ) { echo 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ) . ');"'; } ?>>
            <div class="parallax-content">
                <span style="display:inline-block; background:var(--secondary-color, #f89b29); color:#fff; font-size:11.5px; font-weight:700; padding:4px 14px; border-radius:20px; text-transform:uppercase; margin-bottom:12px; letter-spacing:0.5px;">
                    Dokumen Unduhan Resmi
                </span>
                <h1><?php the_title(); ?></h1>
            </div>
        </section>

        <div class="site-content" style="max-width: 1200px; margin: 0 auto; padding: 0 20px 60px;">
            <?php
            while ( have_posts() ) :
                the_post();
                if ( class_exists( 'LSP_Download_Manager' ) ) {
                    $manager    = new LSP_Download_Manager();
                    $dl_content = $manager->render_single_download_content( get_the_content() );
                    // Prevent duplicate H1 between theme and plugin without touching plugin code
                    $dl_content = preg_replace( '/<h1(\s+[^>]*)?>/i', '<h2$1>', $dl_content );
                    $dl_content = str_replace( '</h1>', '</h2>', $dl_content );
                    echo $dl_content;
                } else {
                    the_content();
                }
            endwhile;
            ?>
        </div>

    </main><!-- #main -->

<?php
get_footer();

