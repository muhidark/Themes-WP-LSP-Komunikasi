<?php
/**
 * LSP Komunikasi functions and definitions
 */

if ( ! function_exists( 'lsp_komunikasi_setup' ) ) :
    function lsp_komunikasi_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Enable support for Custom Logo.
        // WP Customizer akan otomatis memunculkan rekomendasi ukuran berdasarkan width & height ini.
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );

        // Enable support for Custom Header (Parallax Banner).
        // WP Customizer otomatis menampilkan rekomendasi 1600 x 400 pixel.
        add_theme_support( 'custom-header', array(
            'default-image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
            'width'         => 1600,
            'height'        => 400,
            'flex-height'   => true,
            'flex-width'    => true,
        ) );

        // Register Primary and Secondary Navigation Menus
        register_nav_menus( array(
            'primary'   => esc_html__( 'Primary Menu', 'lsp-komunikasi' ),
            'secondary' => esc_html__( 'Secondary Menu (Top Bar)', 'lsp-komunikasi' ),
        ) );

        // Switch default core markup to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );
    }
endif;
add_action( 'after_setup_theme', 'lsp_komunikasi_setup' );

/**
 * Register widget area.
 */
function lsp_komunikasi_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'lsp-komunikasi' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'lsp-komunikasi' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'lsp-komunikasi' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'lsp-komunikasi' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3', 'lsp-komunikasi' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'lsp-komunikasi' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 4', 'lsp-komunikasi' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', 'lsp-komunikasi' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'lsp_komunikasi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lsp_komunikasi_scripts() {
    // Fonts (Google Fonts Inter)
    wp_enqueue_style( 'lsp-komunikasi-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap', array(), null );
    
    // Font Awesome 6 for icons
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );

    // Main stylesheet
    wp_enqueue_style( 'lsp-komunikasi-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

    // Main JS
    wp_enqueue_script( 'lsp-komunikasi-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true );

    // Header Carousel JS
    wp_enqueue_script( 'lsp-komunikasi-carousel-js', get_template_directory_uri() . '/assets/js/carousel.js', array(), wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'lsp_komunikasi_scripts' );

/**
 * Helper Sanitize Checkbox
 */
function lsp_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true === (bool) $checked ) ? true : false );
}

/**
 * Register Topbar, Social Media, and Header Carousel Settings in Customizer
 */
function lsp_komunikasi_customize_register( $wp_customize ) {
    // 1. Topbar Section
    $wp_customize->add_section( 'lsp_topbar_section', array(
        'title'       => __( 'Pengaturan Top Bar & Sosmed', 'lsp-komunikasi' ),
        'priority'    => 25,
        'description' => __( 'Atur teks informasi dan tautan media sosial pada baris paling atas (Top Bar).', 'lsp-komunikasi' ),
    ) );

    // Teks Info Topbar
    $wp_customize->add_setting( 'lsp_topbar_info', array(
        'default'           => 'LSP Komunikasi Indonesia &bull; Terlisensi BNSP',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'lsp_topbar_info', array(
        'label'       => __( 'Teks Informasi / Alamat / Kontak', 'lsp-komunikasi' ),
        'section'     => 'lsp_topbar_section',
        'type'        => 'textarea',
    ) );

    // Social Links
    $socials = array(
        'instagram' => 'Instagram URL',
        'facebook'  => 'Facebook URL',
        'linkedin'  => 'LinkedIn URL',
        'youtube'   => 'YouTube URL',
        'whatsapp'  => 'WhatsApp URL / Tautan wa.me',
    );
    foreach ( $socials as $key => $label ) {
        $wp_customize->add_setting( 'lsp_social_' . $key, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'lsp_social_' . $key, array(
            'label'   => $label,
            'section' => 'lsp_topbar_section',
            'type'    => 'url',
        ) );
    }

    // 2. Header Carousel / Slider Section
    $wp_customize->add_section( 'lsp_carousel_section', array(
        'title'       => __( 'Header Carousel / Slider', 'lsp-komunikasi' ),
        'priority'    => 28,
        'description' => __( 'Kelola carousel gambar slide berganti-ganti untuk header/banner.', 'lsp-komunikasi' ),
    ) );

    // Aktifkan Carousel
    $wp_customize->add_setting( 'lsp_carousel_enable', array(
        'default'           => true,
        'sanitize_callback' => 'lsp_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'lsp_carousel_enable', array(
        'label'       => __( 'Aktifkan Header Carousel Slide', 'lsp-komunikasi' ),
        'section'     => 'lsp_carousel_section',
        'type'        => 'checkbox',
    ) );

    // Tampilkan Di Halaman
    $wp_customize->add_setting( 'lsp_carousel_display_on', array(
        'default'           => 'front',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'lsp_carousel_display_on', array(
        'label'       => __( 'Tampilkan Carousel Pada:', 'lsp-komunikasi' ),
        'section'     => 'lsp_carousel_section',
        'type'        => 'select',
        'choices'     => array(
            'front' => __( 'Halaman Beranda Saja (Front / Home)', 'lsp-komunikasi' ),
            'all'   => __( 'Semua Halaman', 'lsp-komunikasi' ),
        ),
    ) );

    // Putar Otomatis (Autoplay)
    $wp_customize->add_setting( 'lsp_carousel_autoplay', array(
        'default'           => true,
        'sanitize_callback' => 'lsp_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'lsp_carousel_autoplay', array(
        'label'       => __( 'Putar Slide Otomatis (Autoplay)', 'lsp-komunikasi' ),
        'section'     => 'lsp_carousel_section',
        'type'        => 'checkbox',
    ) );

    // Interval / Durasi
    $wp_customize->add_setting( 'lsp_carousel_interval', array(
        'default'           => 5,
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( 'lsp_carousel_interval', array(
        'label'       => __( 'Durasi Berganti Slide (Detik):', 'lsp-komunikasi' ),
        'section'     => 'lsp_carousel_section',
        'type'        => 'number',
        'input_attrs' => array( 'min' => 2, 'max' => 20, 'step' => 1 ),
    ) );

    // Efek Transisi
    $wp_customize->add_setting( 'lsp_carousel_effect', array(
        'default'           => 'slide',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'lsp_carousel_effect', array(
        'label'       => __( 'Efek Transisi Slide:', 'lsp-komunikasi' ),
        'section'     => 'lsp_carousel_section',
        'type'        => 'select',
        'choices'     => array(
            'slide' => __( 'Slide Horizontal (Geser)', 'lsp-komunikasi' ),
            'fade'  => __( 'Fade (Memudar Lembut)', 'lsp-komunikasi' ),
        ),
    ) );

    // Tinggi Carousel
    $wp_customize->add_setting( 'lsp_carousel_height', array(
        'default'           => 520,
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( 'lsp_carousel_height', array(
        'label'       => __( 'Tinggi Banner Desktop (Pixel):', 'lsp-komunikasi' ),
        'section'     => 'lsp_carousel_section',
        'type'        => 'number',
        'input_attrs' => array( 'min' => 300, 'max' => 800, 'step' => 10 ),
    ) );

    // Pengaturan 5 Slide Carousel
    $default_slides = array(
        1 => array(
            'image'    => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
            'tag'      => 'LSP KOMUNIKASI INDONESIA',
            'title'    => 'LSP Komunikasi Indonesia',
            'desc'     => 'Lembaga Sertifikasi Profesi Terlisensi BNSP — Memastikan Standar Kompetensi Profesi Bidang Komunikasi di Era Digital.',
            'btn1_txt' => 'Lihat Skema Sertifikasi',
            'btn1_url' => home_url( '/skema/' ),
            'btn2_txt' => 'Cek Sertifikat Online',
            'btn2_url' => home_url( '/cek-sertifikat/' ),
        ),
        2 => array(
            'image'    => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
            'tag'      => 'TERLISENSI BNSP',
            'title'    => 'Uji Kompetensi Berstandar Nasional',
            'desc'     => 'Asesmen terukur bersama Asesor berpengalaman dengan Tempat Uji Kompetensi (TUK) yang terverifikasi dan berfasilitas lengkap.',
            'btn1_txt' => 'Daftar Sertifikasi',
            'btn1_url' => home_url( '/skema/' ),
            'btn2_txt' => 'Hubungi Kami',
            'btn2_url' => home_url( '/#kontak' ),
        ),
        3 => array(
            'image'    => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
            'tag'      => 'VERIFIKASI REALTIME',
            'title'    => 'Verifikasi Keabsahan Sertifikat',
            'desc'     => 'Periksa keaslian dan masa berlaku 3 tahun sertifikat kompetensi Anda secara realtime dan transparan melalui sistem kami.',
            'btn1_txt' => 'Cek Sertifikat Sekarang',
            'btn1_url' => home_url( '/cek-sertifikat/' ),
            'btn2_txt' => 'Daftar Skema',
            'btn2_url' => home_url( '/skema/' ),
        ),
    );

    for ( $i = 1; $i <= 5; $i++ ) {
        $def = isset( $default_slides[$i] ) ? $default_slides[$i] : array(
            'image' => '', 'tag' => '', 'title' => '', 'desc' => '',
            'btn1_txt' => '', 'btn1_url' => '', 'btn2_txt' => '', 'btn2_url' => ''
        );

        // Slide Image
        $wp_customize->add_setting( "lsp_slide_{$i}_image", array(
            'default'           => $def['image'],
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "lsp_slide_{$i}_image", array(
            'label'       => sprintf( __( 'Slide #%d: Gambar Background', 'lsp-komunikasi' ), $i ),
            'section'     => 'lsp_carousel_section',
            'description' => __( 'Rekomendasi ukuran: 1600 x 500 pixel.', 'lsp-komunikasi' ),
        ) ) );

        // Slide Tag / Badge
        $wp_customize->add_setting( "lsp_slide_{$i}_tag", array(
            'default'           => $def['tag'],
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "lsp_slide_{$i}_tag", array(
            'label'   => sprintf( __( 'Slide #%d: Label Tag / Badge', 'lsp-komunikasi' ), $i ),
            'section' => 'lsp_carousel_section',
            'type'    => 'text',
        ) );

        // Slide Title
        $wp_customize->add_setting( "lsp_slide_{$i}_title", array(
            'default'           => $def['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "lsp_slide_{$i}_title", array(
            'label'   => sprintf( __( 'Slide #%d: Judul Slide', 'lsp-komunikasi' ), $i ),
            'section' => 'lsp_carousel_section',
            'type'    => 'text',
        ) );

        // Slide Description
        $wp_customize->add_setting( "lsp_slide_{$i}_desc", array(
            'default'           => $def['desc'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( "lsp_slide_{$i}_desc", array(
            'label'   => sprintf( __( 'Slide #%d: Deskripsi Singkat', 'lsp-komunikasi' ), $i ),
            'section' => 'lsp_carousel_section',
            'type'    => 'textarea',
        ) );

        // Slide Button 1 Text
        $wp_customize->add_setting( "lsp_slide_{$i}_btn1_txt", array(
            'default'           => $def['btn1_txt'],
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "lsp_slide_{$i}_btn1_txt", array(
            'label'   => sprintf( __( 'Slide #%d: Teks Tombol Utama', 'lsp-komunikasi' ), $i ),
            'section' => 'lsp_carousel_section',
            'type'    => 'text',
        ) );

        // Slide Button 1 URL
        $wp_customize->add_setting( "lsp_slide_{$i}_btn1_url", array(
            'default'           => $def['btn1_url'],
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( "lsp_slide_{$i}_btn1_url", array(
            'label'   => sprintf( __( 'Slide #%d: Link Tombol Utama', 'lsp-komunikasi' ), $i ),
            'section' => 'lsp_carousel_section',
            'type'    => 'url',
        ) );

        // Slide Button 2 Text
        $wp_customize->add_setting( "lsp_slide_{$i}_btn2_txt", array(
            'default'           => $def['btn2_txt'],
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "lsp_slide_{$i}_btn2_txt", array(
            'label'   => sprintf( __( 'Slide #%d: Teks Tombol Kedua (Opsional)', 'lsp-komunikasi' ), $i ),
            'section' => 'lsp_carousel_section',
            'type'    => 'text',
        ) );

        // Slide Button 2 URL
        $wp_customize->add_setting( "lsp_slide_{$i}_btn2_url", array(
            'default'           => $def['btn2_url'],
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( "lsp_slide_{$i}_btn2_url", array(
            'label'   => sprintf( __( 'Slide #%d: Link Tombol Kedua', 'lsp-komunikasi' ), $i ),
            'section' => 'lsp_carousel_section',
            'type'    => 'url',
        ) );
    }
}
add_action( 'customize_register', 'lsp_komunikasi_customize_register' );

/**
 * Cek apakah halaman saat ini menampilkan header carousel
 */
function lsp_komunikasi_show_header_carousel() {
    $enabled = get_theme_mod( 'lsp_carousel_enable', true );
    if ( ! $enabled ) {
        return false;
    }
    $display_on = get_theme_mod( 'lsp_carousel_display_on', 'front' );
    if ( $display_on === 'all' ) {
        return true;
    }
    return ( is_front_page() || is_home() );
}

/**
 * Render Header Image Carousel / Slider
 */
function lsp_komunikasi_render_header_carousel() {
    $enabled = get_theme_mod( 'lsp_carousel_enable', true );
    if ( ! $enabled ) {
        $header_img = get_header_image() ?: 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80';
        ?>
        <section class="parallax-banner" style="background-image: url('<?php echo esc_url( $header_img ); ?>') !important;">
            <div class="parallax-content">
                <h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
                <p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
            </div>
        </section>
        <?php
        return;
    }

    $autoplay = get_theme_mod( 'lsp_carousel_autoplay', true ) ? 'true' : 'false';
    $interval = (int) get_theme_mod( 'lsp_carousel_interval', 5 ) * 1000;
    $effect   = get_theme_mod( 'lsp_carousel_effect', 'slide' );
    $height   = (int) get_theme_mod( 'lsp_carousel_height', 520 );

    $default_slides = array(
        1 => array(
            'image'    => get_header_image() ?: 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
            'tag'      => 'LSP KOMUNIKASI INDONESIA',
            'title'    => 'LSP Komunikasi Indonesia',
            'desc'     => 'Lembaga Sertifikasi Profesi Terlisensi BNSP — Memastikan Standar Kompetensi Profesi Bidang Komunikasi di Era Digital.',
            'btn1_txt' => 'Lihat Skema Sertifikasi',
            'btn1_url' => home_url( '/skema/' ),
            'btn2_txt' => 'Cek Sertifikat Online',
            'btn2_url' => home_url( '/cek-sertifikat/' ),
        ),
        2 => array(
            'image'    => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
            'tag'      => 'TERLISENSI BNSP',
            'title'    => 'Uji Kompetensi Berstandar Nasional',
            'desc'     => 'Asesmen terukur bersama Asesor berpengalaman dengan Tempat Uji Kompetensi (TUK) yang terverifikasi dan berfasilitas lengkap.',
            'btn1_txt' => 'Daftar Sertifikasi',
            'btn1_url' => home_url( '/skema/' ),
            'btn2_txt' => 'Hubungi Kami',
            'btn2_url' => home_url( '/#kontak' ),
        ),
        3 => array(
            'image'    => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80',
            'tag'      => 'VERIFIKASI REALTIME',
            'title'    => 'Verifikasi Keabsahan Sertifikat',
            'desc'     => 'Periksa keaslian dan masa berlaku 3 tahun sertifikat kompetensi Anda secara realtime dan transparan melalui sistem kami.',
            'btn1_txt' => 'Cek Sertifikat Sekarang',
            'btn1_url' => home_url( '/cek-sertifikat/' ),
            'btn2_txt' => 'Daftar Skema',
            'btn2_url' => home_url( '/skema/' ),
        ),
    );

    $slides = array();
    for ( $i = 1; $i <= 5; $i++ ) {
        $def_img = isset( $default_slides[$i]['image'] ) ? $default_slides[$i]['image'] : '';
        $img     = get_theme_mod( "lsp_slide_{$i}_image", $def_img );

        // Jika slide 1 kosong dan ada WP custom header image, gunakan header image tersebut
        if ( $i === 1 && empty( $img ) && get_header_image() ) {
            $img = get_header_image();
        }

        if ( ! empty( $img ) ) {
            $def_tag   = isset( $default_slides[$i]['tag'] ) ? $default_slides[$i]['tag'] : '';
            $def_title = isset( $default_slides[$i]['title'] ) ? $default_slides[$i]['title'] : '';
            $def_desc  = isset( $default_slides[$i]['desc'] ) ? $default_slides[$i]['desc'] : '';
            $def_b1t   = isset( $default_slides[$i]['btn1_txt'] ) ? $default_slides[$i]['btn1_txt'] : '';
            $def_b1u   = isset( $default_slides[$i]['btn1_url'] ) ? $default_slides[$i]['btn1_url'] : '';
            $def_b2t   = isset( $default_slides[$i]['btn2_txt'] ) ? $default_slides[$i]['btn2_txt'] : '';
            $def_b2u   = isset( $default_slides[$i]['btn2_url'] ) ? $default_slides[$i]['btn2_url'] : '';

            $slides[] = array(
                'image'    => $img,
                'tag'      => get_theme_mod( "lsp_slide_{$i}_tag", $def_tag ),
                'title'    => get_theme_mod( "lsp_slide_{$i}_title", $def_title ),
                'desc'     => get_theme_mod( "lsp_slide_{$i}_desc", $def_desc ),
                'btn1_txt' => get_theme_mod( "lsp_slide_{$i}_btn1_txt", $def_b1t ),
                'btn1_url' => get_theme_mod( "lsp_slide_{$i}_btn1_url", $def_b1u ),
                'btn2_txt' => get_theme_mod( "lsp_slide_{$i}_btn2_txt", $def_b2t ),
                'btn2_url' => get_theme_mod( "lsp_slide_{$i}_btn2_url", $def_b2u ),
            );
        }
    }

    if ( empty( $slides ) ) {
        return;
    }

    $slide_count = count( $slides );
    ?>
    <section id="lsp-header-carousel" class="lsp-header-carousel effect-<?php echo esc_attr( $effect ); ?>" data-autoplay="<?php echo esc_attr( $autoplay ); ?>" data-interval="<?php echo esc_attr( $interval ); ?>" data-effect="<?php echo esc_attr( $effect ); ?>" style="--carousel-height: <?php echo esc_attr( $height ); ?>px;" tabindex="0" aria-label="<?php esc_attr_e( 'Header Carousel Banner', 'lsp-komunikasi' ); ?>">
        <div class="lsp-carousel-track">
            <?php foreach ( $slides as $idx => $slide ) : 
                $is_active = ( $idx === 0 ) ? 'active' : '';
            ?>
                <div class="lsp-carousel-slide <?php echo esc_attr( $is_active ); ?>" style="background-image: url('<?php echo esc_url( $slide['image'] ); ?>');" data-index="<?php echo esc_attr( $idx ); ?>">
                    <div class="lsp-carousel-overlay"></div>
                    <div class="lsp-carousel-container">
                        <div class="lsp-carousel-content">
                            <?php if ( ! empty( $slide['tag'] ) ) : ?>
                                <span class="lsp-carousel-tag"><?php echo esc_html( $slide['tag'] ); ?></span>
                            <?php endif; ?>

                            <?php if ( ! empty( $slide['title'] ) ) : ?>
                                <?php if ( ( is_front_page() || is_home() ) && $idx === 0 ) : ?>
                                    <h1 class="lsp-carousel-title"><?php echo esc_html( $slide['title'] ); ?></h1>
                                <?php else : ?>
                                    <h2 class="lsp-carousel-title"><?php echo esc_html( $slide['title'] ); ?></h2>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if ( ! empty( $slide['desc'] ) ) : ?>
                                <p class="lsp-carousel-desc"><?php echo esc_html( $slide['desc'] ); ?></p>
                            <?php endif; ?>

                            <?php if ( ! empty( $slide['btn1_txt'] ) || ! empty( $slide['btn2_txt'] ) ) : ?>
                                <div class="lsp-carousel-buttons">
                                    <?php if ( ! empty( $slide['btn1_txt'] ) ) : ?>
                                        <a href="<?php echo esc_url( $slide['btn1_url'] ?: '#' ); ?>" class="lsp-carousel-btn btn-primary">
                                            <i class="fas fa-arrow-right"></i> <?php echo esc_html( $slide['btn1_txt'] ); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $slide['btn2_txt'] ) ) : ?>
                                        <a href="<?php echo esc_url( $slide['btn2_url'] ?: '#' ); ?>" class="lsp-carousel-btn btn-outline">
                                            <?php echo esc_html( $slide['btn2_txt'] ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if ( $slide_count > 1 ) : ?>
            <!-- Controls: Arrows -->
            <button type="button" class="lsp-carousel-arrow lsp-carousel-prev" aria-label="<?php esc_attr_e( 'Slide Sebelumnya', 'lsp-komunikasi' ); ?>">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button" class="lsp-carousel-arrow lsp-carousel-next" aria-label="<?php esc_attr_e( 'Slide Selanjutnya', 'lsp-komunikasi' ); ?>">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Controls: Dots -->
            <div class="lsp-carousel-dots">
                <?php for ( $d = 0; $d < $slide_count; $d++ ) : ?>
                    <button type="button" class="lsp-carousel-dot <?php echo ( $d === 0 ) ? 'active' : ''; ?>" data-slide="<?php echo esc_attr( $d ); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Ke Slide %d', 'lsp-komunikasi' ), $d + 1 ) ); ?>"></button>
                <?php endfor; ?>
            </div>

            <!-- Progress Bar -->
            <div class="lsp-carousel-progress">
                <div class="lsp-carousel-progress-bar"></div>
            </div>
        <?php endif; ?>
    </section>
    <?php
}

/**
 * Custom Header CSS for Parallax Banner
 */
function lsp_komunikasi_custom_header_setup() {
    $header_image = get_header_image();
    
    // Jika berada di halaman single post atau page dan memiliki featured image, gunakan featured image
    if ( is_singular() && has_post_thumbnail() ) {
        $header_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
    }

    if ( $header_image ) {
        ?>
        <style type="text/css">
            .parallax-banner {
                background-image: url('<?php echo esc_url( $header_image ); ?>') !important;
            }
        </style>
        <?php
    }
}
add_action( 'wp_head', 'lsp_komunikasi_custom_header_setup' );


/**
 * Add recommendation text to Featured Image (Post Thumbnail) meta box.
 */
function lsp_komunikasi_featured_image_msg( $content ) {
    $content .= '<p style="color: #666; margin-top: 10px;"><strong>Rekomendasi ukuran foto:</strong> 800 x 600 pixel (rasio 4:3) agar tampilan grid postingan menjadi rapi.</p>';
    return $content;
}
add_filter( 'admin_post_thumbnail_html', 'lsp_komunikasi_featured_image_msg' );


/**
 * Otomatis membuat gambar sampul (Featured Image) untuk Artikel/Berita baru jika belum diunggah foto kustom
 */
function lsp_komunikasi_auto_generate_post_thumbnail( $post_id, $post, $update ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! $post || 'post' !== $post->post_type || in_array( $post->post_status, array( 'auto-draft', 'trash', 'inherit' ), true ) ) {
        return;
    }

    $thumb_id = get_post_thumbnail_id( $post_id );
    if ( $thumb_id ) {
        $is_auto = get_post_meta( $thumb_id, '_lsp_auto_thumb', true );
        $t_title = get_the_title( $thumb_id );
        if ( ! $is_auto && strpos( (string) $t_title, 'berita-' ) !== 0 ) {
            return;
        }
    }

    if ( ! class_exists( 'LSP_Core_Management' ) || ! method_exists( 'LSP_Core_Management', 'generate_auto_cover_image' ) ) {
        return;
    }

    $cats       = get_the_category( $post_id );
    $badge_text = ( ! empty( $cats ) && ! is_wp_error( $cats ) ) ? strtoupper( $cats[0]->name ) : 'BERITA & PUBLIKASI';
    $author_nm  = get_the_author_meta( 'display_name', $post->post_author );
    $subtitle   = 'Oleh: ' . ( $author_nm ?: 'Redaksi LSP Komunikasi' ) . ' • ' . get_the_date( 'd M Y', $post_id );

    $schemes   = array( 'maroon', 'navy', 'teal', 'purple', 'slate', 'crimson' );
    $bg_scheme = $schemes[ $post_id % count( $schemes ) ];
    $slug      = $post->post_name ?: 'post-' . $post_id;
    $filename  = 'berita-' . sanitize_file_name( $slug ) . '.jpg';

    $new_thumb_id = LSP_Core_Management::generate_auto_cover_image( $filename, $badge_text, $post->post_title, $subtitle, $bg_scheme, $thumb_id );
    if ( $new_thumb_id ) {
        set_post_thumbnail( $post_id, $new_thumb_id );
        update_post_meta( $new_thumb_id, '_lsp_auto_thumb', '1' );
    }
}
add_action( 'save_post_post', 'lsp_komunikasi_auto_generate_post_thumbnail', 20, 3 );

/**
 * Helper Render Kartu Berita & Desain Meta Post (Digunakan di [lsp_berita] dan index.php)
 */
function lsp_komunikasi_render_post_card( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $cats       = get_the_category( $post_id );
    $cat_name   = ( ! empty( $cats ) && ! is_wp_error( $cats ) ) ? $cats[0]->name : ' Publikasi';
    $author_id  = get_post_field( 'post_author', $post_id );
    $author_obj = get_userdata( $author_id );
    $is_asesor  = ( $author_obj && in_array( 'asesor', (array) $author_obj->roles, true ) );
    $word_count = str_word_count( wp_strip_all_tags( get_post_field( 'post_content', $post_id ) ) );
    $read_mins  = max( 1, (int) ceil( $word_count / 180 ) );

    $auto_sub = 'Oleh: ' . get_the_author() . ' • ' . get_the_date( 'd M Y', $post_id );
    ?>
    <article id="post-<?php echo esc_attr( $post_id ); ?>" <?php post_class( 'news-card', $post_id ); ?> style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #fff; box-shadow: 0 4px 12px rgba(0,0,0,0.05); display: flex; flex-direction: column;">
        <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>" style="display:block; position:relative; height:200px; overflow:hidden; background:#f8fafc; text-decoration:none;">
            <?php if ( has_post_thumbnail( $post_id ) ) : ?>
                <?php echo get_the_post_thumbnail( $post_id, 'medium_large', array( 'style' => 'width:100%; height:100%; object-fit:cover; display:block;' ) ); ?>
            <?php elseif ( class_exists( 'LSP_Core_Management' ) && method_exists( 'LSP_Core_Management', 'render_dynamic_cover_html' ) ) : ?>
                <?php echo LSP_Core_Management::render_dynamic_cover_html( $post_id, strtoupper( $cat_name ), get_the_title( $post_id ), $auto_sub ); ?>
            <?php else : ?>
                <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; background:linear-gradient(135deg, #72161a, #a82026); color:#fff; font-weight:700;">LSP Komunikasi</div>
            <?php endif; ?>

            <span style="position:absolute; top:12px; right:12px; background:var(--secondary-color, #f89b29); color:#fff; font-size:10.5px; font-weight:700; padding:3px 10px; border-radius:20px; text-transform:uppercase; box-shadow:0 2px 4px rgba(0,0,0,0.2);">
                <?php echo esc_html( $cat_name ); ?>
            </span>
            <span style="position:absolute; bottom:10px; left:12px; background:rgba(114,22,26,0.92); color:#fff; font-size:11px; font-weight:600; padding:3px 10px; border-radius:4px;">
                <i class="far fa-calendar-alt" style="margin-right:4px;"></i><?php echo esc_html( get_the_date( 'd M Y', $post_id ) ); ?>
            </span>
        </a>

        <div class="news-body" style="padding: 20px; border-top: 4px solid var(--secondary-color, #f89b29); flex: 1; display: flex; flex-direction: column;">
            <!-- Meta Post Bar: Penulis + Badge Asesor + Waktu Baca -->
            <div class="news-meta-bar" style="display: flex; flex-wrap: wrap; gap: 6px; align-items: center; font-size: 12px; color: #64748b; margin-bottom: 10px;">
                <span><i class="far fa-user" style="margin-right: 4px; color: var(--secondary-color, #f89b29);"></i>Oleh: <strong style="color:#334155;"><?php echo esc_html( get_the_author() ); ?></strong></span>
                <?php if ( $is_asesor ) : ?>
                    <span style="background:#fff8f0; color:#72161a; border:1px solid #fed7aa; font-size:10.5px; font-weight:700; padding:1px 7px; border-radius:10px;">Asesor LSP</span>
                <?php endif; ?>
                <span style="margin-left:auto; font-size:11px; color:#94a3b8;"><i class="far fa-clock" style="margin-right:3px;"></i><?php echo intval( $read_mins ); ?> mnt</span>
            </div>

            <h3 style="margin: 0 0 10px 0; font-size: 17px; line-height: 1.4;">
                <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>" style="text-decoration:none; color:var(--primary-color, #72161a);"><?php echo esc_html( get_the_title( $post_id ) ); ?></a>
            </h3>

            <p style="color:#555; font-size:14px; line-height:1.6; margin: 0 0 16px 0;">
                <?php echo esc_html( wp_trim_words( get_the_excerpt( $post_id ), 18, '...' ) ); ?>
            </p>

            <div style="margin-top: auto; padding-top: 12px; border-top: 1px solid #f1f5f9;">
                <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>" style="display:inline-block; font-size:13.5px; font-weight:700; color:var(--secondary-color, #f89b29); text-decoration:none;">Baca Selengkapnya &rarr;</a>
            </div>
        </div>
    </article>
    <?php
}

/**
 * Shortcode Berita untuk Tema LSP Komunikasi
 * Cara penggunaan: [lsp_berita jumlah="3" orderby="date|rand|title" acak="ya"]
 */
function lsp_shortcode_berita( $atts ) {
    $defaults = array(
        'jumlah'  => 3,
        'orderby' => 'date',
        'order'   => 'DESC',
        'acak'    => '',
    );

    if ( class_exists( 'LSP_Core_Management' ) && method_exists( 'LSP_Core_Management', 'parse_clean_shortcode_atts' ) ) {
        $a         = LSP_Core_Management::parse_clean_shortcode_atts( $atts, $defaults );
        $is_random = LSP_Core_Management::is_shortcode_random( $a );
    } else {
        $a         = shortcode_atts( $defaults, $atts );
        $is_random = ( 'rand' === strtolower( $a['orderby'] ) || in_array( strtolower( $a['acak'] ), array( 'ya', 'yes', 'true', '1', 'acak', 'rand' ), true ) );
    }

    ob_start();

    $raw_limit = preg_replace( '/[^0-9-]/', '', (string) $a['jumlah'] );
    $limit     = ( '' !== $raw_limit && intval( $raw_limit ) !== 0 ) ? intval( $raw_limit ) : 3;

    $all_posts = get_posts( array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => $is_random ? 'date' : sanitize_text_field( $a['orderby'] ),
        'order'          => ( 'ASC' === strtoupper( $a['order'] ) ) ? 'ASC' : 'DESC',
    ) );

    $total_found = count( $all_posts );
    if ( $is_random && $total_found > 1 ) {
        shuffle( $all_posts );
    }

    $display_posts = ( $limit > 0 && $total_found > $limit ) ? array_slice( $all_posts, 0, $limit ) : $all_posts;

    if ( ! empty( $display_posts ) ) {
        global $post;
        echo '<div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; font-style: normal;">';
        foreach ( $display_posts as $post_obj ) {
            $post = $post_obj;
            setup_postdata( $post );
            lsp_komunikasi_render_post_card( $post_obj->ID );
        }
        echo '</div>';
        wp_reset_postdata();

        // Hanya tampilkan tombol "Lihat Semua Berita ->" jika total berita lebih banyak dari yang ditampilkan
        if ( $total_found > count( $display_posts ) ) {
            $posts_page_id = get_option( 'page_for_posts' );
            $berita_url    = $posts_page_id ? get_permalink( $posts_page_id ) : home_url( '/berita/' );
            echo '<div class="lsp-see-all-wrap" style="text-align:center; margin-top:28px; font-style:normal;"><a class="btn lsp-btn-see-all" href="' . esc_url( $berita_url ) . '" style="display:inline-block; padding:11px 28px; background:var(--primary-color, #72161a); color:#fff; border-radius:30px; font-weight:700; font-size:14px; text-decoration:none; box-shadow: 0 4px 12px rgba(114,22,26,0.18); transition: all 0.25s ease;">Lihat Semua Berita &rarr;</a></div>';
        }
    } else {
        echo '<p>Belum ada berita.</p>';
    }

    return ob_get_clean();
}
add_shortcode( 'lsp_berita', 'lsp_shortcode_berita' );

/**
 * ====================================================================
 * ADMIN NOTICE UNTUK PLUGIN WA-QUICK-CONNECT
 * ====================================================================
 */
function lsp_komunikasi_wa_plugin_notice() {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    
    if ( ! is_plugin_active( 'wa-quick-connect/wa-quick-connect.php' ) ) {
        ?>
        <div class="notice notice-warning is-dismissible">
            <p><strong>Pemberitahuan Tema Komunikasi:</strong> Untuk mengoptimalkan tombol konsultasi WhatsApp di halaman Skema, disarankan untuk menginstal dan mengaktifkan plugin <strong>WA Quick Connect</strong> yang sudah Anda buat.</p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'lsp_komunikasi_wa_plugin_notice' );

/**
 * ====================================================================
 * ADMIN NOTICE UNTUK PLUGIN LSP CORE MANAGEMENT
 * ====================================================================
 */
function lsp_komunikasi_core_plugin_notice() {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    
    if ( ! is_plugin_active( 'lsp-core-management/lsp-core-management.php' ) ) {
        ?>
        <div class="notice notice-info is-dismissible">
            <p><strong>Pemberitahuan Tema Komunikasi:</strong> Fitur Skema Sertifikasi, Tempat Uji Kompetensi (TUK), Manajemen User Asesor, dan Cek Keabsahan Sertifikat memerlukan plugin <strong>LSP Core Management &amp; Sertifikat Checker</strong>. Silakan <a href="<?php echo esc_url( admin_url( 'plugins.php' ) ); ?>">aktifkan plugin LSP Core Management</a>.</p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'lsp_komunikasi_core_plugin_notice' );

/**
 * ====================================================================
 * ADMIN NOTICE UNTUK PLUGIN LSP DOWNLOAD MANAGER
 * ====================================================================
 */
function lsp_komunikasi_download_plugin_notice() {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    
    if ( ! is_plugin_active( 'lsp-download-manager/lsp-download-manager.php' ) ) {
        ?>
        <div class="notice notice-info is-dismissible">
            <p><strong>Pemberitahuan Tema Komunikasi:</strong> Fitur Portal Area Download & Pelacak Unduhan memerlukan plugin <strong>LSP Download Manager & Tracker</strong>. Silakan <a href="<?php echo esc_url( admin_url( 'plugins.php' ) ); ?>">aktifkan plugin LSP Download Manager</a> untuk mengaktifkan manajemen berkas download dan statistik.</p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'lsp_komunikasi_download_plugin_notice' );
