<?php
/**
 * The template for displaying all single posts
 * (Detail untuk CPT 'skema' dan 'tuk' ditangani secara otomatis oleh plugin LSP Core Management)
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();
            $post_id    = get_the_ID();
            $cats       = get_the_category( $post_id );
            $cat_name   = ( ! empty( $cats ) && ! is_wp_error( $cats ) ) ? $cats[0]->name : 'Publikasi';
            $author_id  = get_post_field( 'post_author', $post_id );
            $author_obj = get_userdata( $author_id );
            $is_asesor  = ( $author_obj && in_array( 'asesor', (array) $author_obj->roles, true ) );
            $nomor_met  = $is_asesor ? get_user_meta( $author_id, 'nomor_met', true ) : '';
            $foto_avt   = get_user_meta( $author_id, 'foto_asesor', true ) ?: get_avatar_url( $author_id, array( 'size' => 160 ) );
            $bio_author = get_user_meta( $author_id, 'deskripsi_asesor', true ) ?: get_the_author_meta( 'description', $author_id );
            $word_count = str_word_count( wp_strip_all_tags( get_the_content() ) );
            $read_mins  = max( 1, (int) ceil( $word_count / 180 ) );
            ?>
            <!-- Parallax Banner for Single Post -->
            <section class="parallax-banner" <?php if ( has_post_thumbnail() ) { echo 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url( $post_id, 'full' ) ) . ');"'; } ?>>
                <div class="parallax-content">
                    <span style="display:inline-block; background:var(--secondary-color, #f89b29); color:#fff; font-size:11.5px; font-weight:700; padding:4px 12px; border-radius:20px; text-transform:uppercase; margin-bottom:12px;">
                        <?php echo esc_html( $cat_name ); ?>
                    </span>
                    <h1><?php the_title(); ?></h1>
                </div>
            </section>

            <div class="site-content">
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post-article' ); ?> style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); margin-top: -60px; position: relative; z-index: 2;">
                    
                    <!-- Clean Meta Post Header Bar -->
                    <div class="single-meta-bar" style="display: flex; flex-wrap: wrap; gap: 14px; align-items: center; padding-bottom: 20px; margin-bottom: 28px; border-bottom: 1px solid #f1f5f9; font-size: 13.5px; color: #64748b;">
                        <span style="display: inline-flex; align-items: center; gap: 6px;">
                            <i class="far fa-calendar-alt" style="color: var(--secondary-color, #f89b29);"></i>
                            <strong><?php echo esc_html( get_the_date( 'd F Y' ) ); ?></strong>
                        </span>
                        <span>&bull;</span>
                        <span style="display: inline-flex; align-items: center; gap: 6px;">
                            <i class="far fa-user" style="color: var(--secondary-color, #f89b29);"></i>
                            Oleh: <strong style="color: #1e293b;"><?php the_author(); ?></strong>
                        </span>
                        <?php if ( $is_asesor ) : ?>
                            <span style="background: #fff8f0; color: #72161a; border: 1px solid #fed7aa; font-size: 11.5px; font-weight: 700; padding: 2px 10px; border-radius: 12px;">
                                <i class="fas fa-user-check" style="margin-right: 4px;"></i>Asesor LSP<?php echo $nomor_met ? ' (' . esc_html( $nomor_met ) . ')' : ''; ?>
                            </span>
                        <?php endif; ?>
                        <span style="margin-left: auto; background: #f8fafc; color: #475569; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">
                            <i class="far fa-clock" style="margin-right: 4px;"></i><?php echo intval( $read_mins ); ?> menit baca
                        </span>
                    </div>

                    <div class="entry-content" style="font-size: 16px; line-height: 1.85; color: #334155;">
                        <?php
                        the_content();

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lsp-komunikasi' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->

                    <!-- Kotak Profil Penulis / Asesor di Bawah Artikel -->
                    <div class="post-author-card" style="margin-top: 40px; padding: 24px; background: #f8fafc; border: 1px solid #e2e8f0; border-left: 4px solid var(--primary-color, #72161a); border-radius: 10px; display: flex; flex-wrap: wrap; gap: 20px; align-items: center;">
                        <img src="<?php echo esc_url( $foto_avt ); ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" style="width: 76px; height: 76px; border-radius: 50%; object-fit: cover; border: 3px solid var(--secondary-color, #f89b29);" />
                        <div style="flex: 1 1 260px;">
                            <div style="display: flex; flex-wrap: wrap; gap: 8px; align-items: center; margin-bottom: 6px;">
                                <h3 style="margin: 0; font-size: 17px; color: #1e293b; font-weight: 700;"><?php the_author(); ?></h3>
                                <?php if ( $is_asesor ) : ?>
                                    <span style="background: #f6ffed; color: #389e0d; border: 1px solid #b7eb8f; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 10px;">🟢 Asesor Kompetensi BNSP</span>
                                <?php endif; ?>
                            </div>
                            <?php if ( ! empty( $bio_author ) ) : ?>
                                <p style="margin: 0 0 8px 0; font-size: 13.5px; color: #64748b; line-height: 1.6;"><?php echo esc_html( $bio_author ); ?></p>
                            <?php endif; ?>
                            <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" style="font-size: 12.5px; font-weight: 700; color: var(--primary-color, #72161a); text-decoration: none;">
                                Lihat Semua Artikel Penulis &rarr;
                            </a>
                        </div>
                    </div>
                    
                </article><!-- #post-<?php the_ID(); ?> -->
                
                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
                
            </div><!-- .site-content -->
            <?php
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_footer();
