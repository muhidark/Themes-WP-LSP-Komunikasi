<?php
/**
 * The template for displaying all single pages
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <?php if ( is_front_page() ) : ?>
                <?php lsp_komunikasi_render_header_carousel(); ?>
            <?php elseif ( lsp_komunikasi_show_header_carousel() ) : ?>
                <h1 class="screen-reader-text"><?php the_title(); ?></h1>
                <?php lsp_komunikasi_render_header_carousel(); ?>
            <?php else : ?>
                <!-- Parallax Banner for Page -->
                <section class="parallax-banner" <?php if (has_post_thumbnail()) { echo 'style="background-image: url(' . esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) . ');"'; } ?>>
                    <div class="parallax-content">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </section>
            <?php endif; ?>

            <div class="site-content">
                <article id="post-<?php the_ID(); ?>" <?php post_class('single-page-article'); ?> style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-top: -60px; position: relative; z-index: 2;">
                    
                    <div class="entry-content" style="font-size: 16px; line-height: 1.8; color: #444;">
                        <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lsp-komunikasi' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->
                    
                </article><!-- #post-<?php the_ID(); ?> -->
                
            </div><!-- .site-content -->
            <?php
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_footer();
