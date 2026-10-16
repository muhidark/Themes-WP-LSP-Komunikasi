    <footer id="colophon" class="site-footer">
        <aside class="footer-widgets" aria-label="<?php esc_attr_e( 'Footer Widgets', 'lsp-komunikasi' ); ?>">
            <div class="footer-widget-area">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php else : ?>
                    <h3 class="widget-title">Tentang Kami</h3>
                    <p>LSP Komunikasi Indonesia didirikan untuk meningkatkan kompetensi profesional di bidang komunikasi di seluruh Indonesia.</p>
                <?php endif; ?>
            </div>

            <div class="footer-widget-area">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php else : ?>
                    <h3 class="widget-title">Tautan Penting</h3>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/tentang/' ) ); ?>">Tentang</a></li>
                        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'skema' ) ); ?>">Skema Sertifikasi</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>">Kontak</a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="footer-widget-area">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php else : ?>
                    <h3 class="widget-title">Kontak Kami</h3>
                    <p>
                        Jl. Contoh Alamat No. 123<br>
                        Jakarta, Indonesia<br>
                        Email: info@lspkomunikasi.id<br>
                        Telp: (021) 1234-5678
                    </p>
                <?php endif; ?>
            </div>

            <div class="footer-widget-area">
                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                <?php else : ?>
                    <h3 class="widget-title">Ikuti Kami</h3>
                    <p>Temukan kami di media sosial untuk mendapatkan informasi terbaru.</p>
                    <p>
                        <a href="#">Instagram</a> | <a href="#">Facebook</a> | <a href="#">LinkedIn</a>
                    </p>
                <?php endif; ?>
            </div>
        </aside>

        <div class="site-info">
            <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. Hak Cipta Dilindungi Undang-Undang.</p>
            <p>Didesain oleh <a href="https://politeknik-sampit.ac.id/" target="_blank" rel="noopener noreferrer">Polysoft</a></p>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
