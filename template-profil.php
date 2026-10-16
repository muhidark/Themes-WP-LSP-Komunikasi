<?php
/**
 * Template Name: Profil LSP Komunikasi
 * Template Post Type: page
 * Description: Template khusus untuk halaman profil resmi LSP Komunikasi Indonesia sesuai data presentasi resmi.
 *
 * @package LSP Komunikasi
 */

get_header();
?>

<main id="primary" class="site-main lsp-profile-page">

    <!-- Parallax Hero Banner -->
    <section class="parallax-banner" <?php if (has_post_thumbnail()) { echo 'style="background-image: url(' . esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) . ');"'; } ?>>
        <div class="parallax-content">
            <span class="lsp-profile-hero-badge"><i class="fa-solid fa-award"></i> Lembaga Sertifikasi Profesi Pihak Ketiga</span>
            <h1>Profil LSP Komunikasi Indonesia</h1>
            <p>Mewujudkan Tenaga Kerja Komunikasi yang Kompeten, Profesional, dan Diakui Indonesia</p>
        </div>
    </section>

    <div class="site-content" style="max-width: 1200px; margin: 0 auto; padding: 0 20px 80px;">

        <!-- TAGLINE & PENGENALAN -->
        <div class="lsp-profile-intro-box">
            <div class="lsp-tagline-quote">
                <i class="fa-solid fa-quote-left quote-icon-left"></i>
                <h2 class="lsp-tagline-title">“Kompeten Berkomunikasi, Diakui Indonesia.”</h2>
                <p class="lsp-tagline-sub">Motto & Komitmen Mutu LSP Komunikasi Indonesia</p>
            </div>
            <div class="lsp-intro-desc">
                <p>
                    <strong>LSP Komunikasi Indonesia</strong> adalah Lembaga Sertifikasi Profesi pihak ketiga yang beroperasi secara independen, kredibel, dan berlisensi Badan Nasional Sertifikasi Profesi (BNSP). Kami hadir untuk menjawab tantangan dunia industri dan dunia kerja dalam memastikan pengakuan kompetensi sumber daya manusia di bidang ilmu komunikasi, kehumasan, media, periklanan, dan profesi terkait lainnya sesuai standar kompetensi kerja yang berlaku nasional maupun internasional.
                </p>
            </div>
        </div>

        <!-- VISI & MISI SECTION -->
        <section class="lsp-section lsp-visimisi-section">
            <div class="lsp-section-header">
                <span class="lsp-section-pill"><i class="fa-solid fa-compass"></i> Landasan Strategis</span>
                <h2 class="lsp-section-title">Visi & Misi Lembaga</h2>
                <div class="lsp-title-line"></div>
            </div>

            <!-- VISI CARD -->
            <div class="lsp-visi-card">
                <div class="lsp-visi-badge">
                    <i class="fa-solid fa-eye"></i> VISI
                </div>
                <blockquote class="lsp-visi-text">
                    “Menjadi lembaga sertifikasi profesi bidang komunikasi dan profesi terkait yang independen, kredibel, dan diakui secara nasional maupun internasional dalam menjamin kompetensi tenaga kerja Indonesia.”
                </blockquote>
            </div>

            <!-- MISI CARDS (5 MISI) -->
            <div class="lsp-misi-wrapper">
                <h3 class="lsp-misi-heading"><i class="fa-solid fa-bullseye" style="color: var(--secondary-color, #f89b29);"></i> 5 Misi LSP Komunikasi Indonesia</h3>
                <div class="lsp-misi-grid">
                    
                    <div class="lsp-misi-item">
                        <div class="lsp-misi-number">01</div>
                        <div class="lsp-misi-content">
                            <h4>Penyelenggaraan Sertifikasi Berstandar Mutu</h4>
                            <p>Menyelenggarakan sertifikasi kompetensi profesi di bidang komunikasi dan profesi terkait berdasarkan standar kompetensi yang berlaku dengan menjunjung tinggi prinsip mutu, objektivitas, keadilan, dan ketidakberpihakan.</p>
                        </div>
                    </div>

                    <div class="lsp-misi-item">
                        <div class="lsp-misi-number">02</div>
                        <div class="lsp-misi-content">
                            <h4>Pelayanan Profesional & Transparan</h4>
                            <p>Memberikan pelayanan sertifikasi yang profesional, mudah diakses, cepat, tepat, transparan, dan akurat untuk memenuhi kebutuhan tenaga kerja, dunia usaha, dunia industri, pemerintah, serta pemangku kepentingan lainnya.</p>
                        </div>
                    </div>

                    <div class="lsp-misi-item">
                        <div class="lsp-misi-number">03</div>
                        <div class="lsp-misi-content">
                            <h4>Skema Sertifikasi Relevan & Adaptif</h4>
                            <p>Mengembangkan skema sertifikasi yang relevan dan adaptif terhadap perkembangan teknologi, transformasi digital, kebutuhan industri, dan perubahan kompetensi profesi komunikasi.</p>
                        </div>
                    </div>

                    <div class="lsp-misi-item">
                        <div class="lsp-misi-number">04</div>
                        <div class="lsp-misi-content">
                            <h4>Pengakuan Industri & Pengembangan Karier</h4>
                            <p>Mendorong pengakuan dan pemanfaatan sertifikat kompetensi oleh dunia usaha dan dunia industri sebagai salah satu dasar dalam rekrutmen, pengembangan karier, dan pengakuan profesional.</p>
                        </div>
                    </div>

                    <div class="lsp-misi-item lsp-misi-item-full">
                        <div class="lsp-misi-number">05</div>
                        <div class="lsp-misi-content">
                            <h4>Kemitraan & Jejaring Strategis</h4>
                            <p>Membangun jejaring dan kemitraan strategis dengan industri, asosiasi profesi, lembaga pendidikan dan pelatihan, pemerintah, serta mitra nasional dan internasional untuk memperluas ekosistem sertifikasi kompetensi.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SASARAN STRATEGIS 2027–2031 -->
        <section class="lsp-section lsp-targets-section">
            <div class="lsp-section-header">
                <span class="lsp-section-pill"><i class="fa-solid fa-chart-pie"></i> Milestone & Rencana Kerja</span>
                <h2 class="lsp-section-title">Sasaran Strategis 2027–2031</h2>
                <div class="lsp-title-line"></div>
                <p class="lsp-section-subtitle">Target pencapaian kualitas, kuantitas, dan kepercayaan pemangku kepentingan dalam 5 tahun mendatang.</p>
            </div>

            <div class="lsp-strategic-grid">
                <!-- Target 1 -->
                <div class="lsp-strategic-card">
                    <div class="lsp-strategic-icon" style="background: rgba(114, 22, 26, 0.1); color: #72161a;">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <span class="lsp-target-year">Target 2031</span>
                    <div class="lsp-target-value">50.000 <span class="lsp-target-unit">orang</span></div>
                    <h3 class="lsp-target-title">Perluasan Sertifikasi Kompetensi</h3>
                    <p class="lsp-target-desc">Jumlah kumulatif peserta yang dinyatakan kompeten dan memperoleh sertifikat kompetensi BNSP selama periode 2027–2031.</p>
                </div>

                <!-- Target 2 -->
                <div class="lsp-strategic-card">
                    <div class="lsp-strategic-icon" style="background: rgba(248, 155, 41, 0.15); color: #d97706;">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <span class="lsp-target-year">Target 2031</span>
                    <div class="lsp-target-value">≥ 80%</div>
                    <h3 class="lsp-target-title">Pemeliharaan Sertifikasi</h3>
                    <p class="lsp-target-desc">Persentase pemegang sertifikat yang secara berkesinambungan mengikuti proses pemeliharaan kompetensi sesuai regulasi dan mekanisme yang ditetapkan.</p>
                </div>

                <!-- Target 3 -->
                <div class="lsp-strategic-card">
                    <div class="lsp-strategic-icon" style="background: rgba(16, 185, 129, 0.12); color: #059669;">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    <span class="lsp-target-year">Target 2031</span>
                    <div class="lsp-target-value">≥ 95%</div>
                    <h3 class="lsp-target-title">Kepercayaan Industri</h3>
                    <p class="lsp-target-desc">Persentase industri dan pengguna tenaga kerja yang menyatakan percaya atau sangat percaya terhadap kompetensi lulusan pemegang sertifikat LSP Komunikasi.</p>
                </div>
            </div>
        </section>

        <!-- PROYEKSI PERTUMBUHAN & AKUMULASI (2027–2031) -->
        <section class="lsp-section lsp-projection-section">
            <div class="lsp-section-header">
                <span class="lsp-section-pill"><i class="fa-solid fa-chart-line"></i> Target Sertifikasi</span>
                <h2 class="lsp-section-title">Proyeksi Pertumbuhan & Akumulasi Sertifikasi</h2>
                <div class="lsp-title-line"></div>
                <p class="lsp-section-subtitle">Roadmap target pertumbuhan tahunan menuju akumulasi 50.000 tenaga kerja bersertifikat (2027–2031).</p>
            </div>

            <!-- TIMELINE VISUAL PROGRESS -->
            <div class="lsp-timeline-steps">
                
                <div class="lsp-step-item">
                    <div class="lsp-step-badge">2027</div>
                    <div class="lsp-step-box">
                        <div class="lsp-step-year">Tahun 2027</div>
                        <div class="lsp-step-annual"><i class="fa-regular fa-calendar-check"></i> +5.000 / thn</div>
                        <div class="lsp-step-bar-wrap">
                            <div class="lsp-step-bar" style="width: 10%;"></div>
                        </div>
                        <div class="lsp-step-cumul">Kumulatif: <strong>5.000</strong></div>
                    </div>
                </div>

                <div class="lsp-step-item">
                    <div class="lsp-step-badge">2028</div>
                    <div class="lsp-step-box">
                        <div class="lsp-step-year">Tahun 2028</div>
                        <div class="lsp-step-annual"><i class="fa-regular fa-calendar-check"></i> +7.500 / thn</div>
                        <div class="lsp-step-bar-wrap">
                            <div class="lsp-step-bar" style="width: 25%;"></div>
                        </div>
                        <div class="lsp-step-cumul">Kumulatif: <strong>12.500</strong></div>
                    </div>
                </div>

                <div class="lsp-step-item">
                    <div class="lsp-step-badge">2029</div>
                    <div class="lsp-step-box">
                        <div class="lsp-step-year">Tahun 2029</div>
                        <div class="lsp-step-annual"><i class="fa-regular fa-calendar-check"></i> +10.000 / thn</div>
                        <div class="lsp-step-bar-wrap">
                            <div class="lsp-step-bar" style="width: 45%;"></div>
                        </div>
                        <div class="lsp-step-cumul">Kumulatif: <strong>22.500</strong></div>
                    </div>
                </div>

                <div class="lsp-step-item">
                    <div class="lsp-step-badge">2030</div>
                    <div class="lsp-step-box">
                        <div class="lsp-step-year">Tahun 2030</div>
                        <div class="lsp-step-annual"><i class="fa-regular fa-calendar-check"></i> +12.500 / thn</div>
                        <div class="lsp-step-bar-wrap">
                            <div class="lsp-step-bar" style="width: 70%;"></div>
                        </div>
                        <div class="lsp-step-cumul">Kumulatif: <strong>35.000</strong></div>
                    </div>
                </div>

                <div class="lsp-step-item lsp-step-final">
                    <div class="lsp-step-badge"><i class="fa-solid fa-flag-checkered"></i> 2031</div>
                    <div class="lsp-step-box">
                        <div class="lsp-step-year">Tahun 2031</div>
                        <div class="lsp-step-annual"><i class="fa-regular fa-calendar-check"></i> +15.000 / thn</div>
                        <div class="lsp-step-bar-wrap">
                            <div class="lsp-step-bar" style="width: 100%;"></div>
                        </div>
                        <div class="lsp-step-cumul">Kumulatif: <strong>50.000 orang</strong></div>
                    </div>
                </div>

            </div>

            <!-- TABEL PROYEKSI -->
            <div class="lsp-table-responsive">
                <table class="lsp-target-table">
                    <thead>
                        <tr>
                            <th style="width: 20%; text-align: center;"><i class="fa-regular fa-calendar"></i> Periode Tahun</th>
                            <th style="width: 35%; text-align: center;"><i class="fa-solid fa-user-plus"></i> Target Per Tahun</th>
                            <th style="width: 45%; text-align: center;"><i class="fa-solid fa-layer-group"></i> Total Kumulatif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-year">2027</td>
                            <td class="col-target"><strong>5.000</strong> Asesi / Peserta</td>
                            <td class="col-cumul"><strong>5.000</strong> Peserta Terkompetensi</td>
                        </tr>
                        <tr>
                            <td class="col-year">2028</td>
                            <td class="col-target"><strong>7.500</strong> Asesi / Peserta</td>
                            <td class="col-cumul"><strong>12.500</strong> Peserta Terkompetensi</td>
                        </tr>
                        <tr>
                            <td class="col-year">2029</td>
                            <td class="col-target"><strong>10.000</strong> Asesi / Peserta</td>
                            <td class="col-cumul"><strong>22.500</strong> Peserta Terkompetensi</td>
                        </tr>
                        <tr>
                            <td class="col-year">2030</td>
                            <td class="col-target"><strong>12.500</strong> Asesi / Peserta</td>
                            <td class="col-cumul"><strong>35.000</strong> Peserta Terkompetensi</td>
                        </tr>
                        <tr class="row-highlight">
                            <td class="col-year"><strong>2031</strong> <span class="badge-target">Goal</span></td>
                            <td class="col-target"><strong>15.000</strong> Asesi / Peserta</td>
                            <td class="col-cumul"><strong>50.000</strong> Orang Kompeten Bersertifikat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- NILAI DASAR / CORE VALUES -->
        <section class="lsp-section lsp-values-section">
            <div class="lsp-section-header">
                <span class="lsp-section-pill"><i class="fa-solid fa-star"></i> Budaya Kerja</span>
                <h2 class="lsp-section-title">Prinsip & Nilai Dasar</h2>
                <div class="lsp-title-line"></div>
            </div>

            <div class="lsp-values-grid">
                <div class="lsp-val-card">
                    <div class="lsp-val-icon"><i class="fa-solid fa-scale-balanced"></i></div>
                    <h3>Integritas & Independensi</h3>
                    <p>Menjalankan asesmen secara objektif, bebas benturan kepentingan, dan berpegang teguh pada kode etik asesmen BNSP.</p>
                </div>
                <div class="lsp-val-card">
                    <div class="lsp-val-icon"><i class="fa-solid fa-certificate"></i></div>
                    <h3>Standar Mutu Tinggi</h3>
                    <p>Menerapkan manajemen mutu sertifikasi sesuai standar BNSP dan regulasi yang diakui dunia kerja global.</p>
                </div>
                <div class="lsp-val-card">
                    <div class="lsp-val-icon"><i class="fa-solid fa-bolt"></i></div>
                    <h3>Adaptif & Relevan</h3>
                    <p>Cepat tanggap merespons dinamika teknologi media, tren digital komunikasi, dan kebutuhan kompetensi industri kekinian.</p>
                </div>
                <div class="lsp-val-card">
                    <div class="lsp-val-icon"><i class="fa-solid fa-handshake"></i></div>
                    <h3>Kemitraan Luas</h3>
                    <p>Sinergi harmonis dengan asosiasi profesi komunikasi, perguruan tinggi, SMK/vokasi, industri, dan instansi pemerintah.</p>
                </div>
            </div>
        </section>

        <!-- OPTIONAL CONTENT FROM WORDPRESS EDITOR -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if ( ! empty( get_the_content() ) ) : ?>
                <div class="lsp-profile-custom-content" style="background: #ffffff; padding: 35px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-top: 40px;">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        <?php endwhile; endif; ?>

        <!-- CALL TO ACTION SECTION -->
        <section class="lsp-profile-cta">
            <div class="lsp-cta-content">
                <h2>Siap Mengembangkan Kompetensi Komunikasi Anda?</h2>
                <p>Pilih skema sertifikasi sesuai bidang Anda dan dapatkan pengakuan sertifikasi profesi resmi berlisensi BNSP.</p>
                <div class="lsp-cta-buttons">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'skema' ) ? get_post_type_archive_link( 'skema' ) : home_url( '/skema/' ) ); ?>" class="lsp-btn lsp-btn-primary">
                        <i class="fa-solid fa-list-check"></i> Lihat Skema Sertifikasi
                    </a>
                    <a href="<?php echo esc_url( home_url( '/cek-sertifikat/' ) ); ?>" class="lsp-btn lsp-btn-outline">
                        <i class="fa-solid fa-magnifying-glass"></i> Cek Sertifikat
                    </a>
                    <a href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>" class="lsp-btn lsp-btn-secondary">
                        <i class="fa-solid fa-envelope"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </section>

    </div><!-- .site-content -->

</main><!-- #main -->

<style>
/* CSS SCOPED KHUSUS HALAMAN PROFIL LSP KOMUNIKASI */
.lsp-profile-page {
    background-color: #f8fafc;
    color: #334155;
    font-family: var(--font-main, 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif);
}

.lsp-profile-hero-badge {
    display: inline-block;
    background: rgba(248, 155, 41, 0.25);
    color: #ffffff;
    border: 1px solid rgba(248, 155, 41, 0.6);
    padding: 6px 16px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 15px;
}

/* INTRO / TAGLINE BOX */
.lsp-profile-intro-box {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    padding: 40px 45px;
    margin-top: -60px;
    position: relative;
    z-index: 4;
    border-top: 5px solid #72161a;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 35px;
    align-items: center;
    margin-bottom: 50px;
}

.lsp-tagline-quote {
    position: relative;
    padding-left: 20px;
    border-left: 4px solid #f89b29;
}

.quote-icon-left {
    font-size: 28px;
    color: #f89b29;
    opacity: 0.4;
    margin-bottom: 10px;
    display: block;
}

.lsp-tagline-title {
    font-size: 26px;
    font-weight: 800;
    line-height: 1.35;
    color: #72161a;
    margin-bottom: 10px;
}

.lsp-tagline-sub {
    font-size: 14px;
    font-weight: 600;
    color: #f89b29;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin: 0;
}

.lsp-intro-desc {
    font-size: 15px;
    line-height: 1.8;
    color: #475569;
}

/* SECTION HEADERS */
.lsp-section {
    margin-bottom: 60px;
}

.lsp-section-header {
    text-align: center;
    max-width: 750px;
    margin: 0 auto 35px;
}

.lsp-section-pill {
    display: inline-block;
    background: #fef3c7;
    color: #b45309;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 10px;
}

.lsp-section-title {
    font-size: 28px;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 12px;
}

.lsp-title-line {
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, #72161a 0%, #f89b29 100%);
    margin: 0 auto 15px;
    border-radius: 2px;
}

.lsp-section-subtitle {
    font-size: 15px;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
}

/* VISI CARD */
.lsp-visi-card {
    background: linear-gradient(135deg, #72161a 0%, #4a0d10 100%);
    color: #ffffff;
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 12px 30px rgba(114, 22, 26, 0.2);
    margin-bottom: 35px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid #f89b29;
}

.lsp-visi-card::after {
    content: "\f06e";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    right: 20px;
    bottom: -20px;
    font-size: 160px;
    color: rgba(255, 255, 255, 0.04);
    pointer-events: none;
}

.lsp-visi-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #f89b29;
    color: #ffffff;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 1px;
    padding: 6px 16px;
    border-radius: 30px;
    margin-bottom: 18px;
}

.lsp-visi-text {
    font-size: 20px;
    font-style: italic;
    font-weight: 500;
    line-height: 1.7;
    margin: 0;
    position: relative;
    z-index: 1;
}

/* MISI GRID */
.lsp-misi-heading {
    font-size: 20px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.lsp-misi-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.lsp-misi-item {
    background: #ffffff;
    border-radius: 14px;
    padding: 24px;
    display: flex;
    gap: 20px;
    align-items: flex-start;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    transition: all 0.25s ease;
}

.lsp-misi-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(114, 22, 26, 0.08);
    border-color: #f89b29;
}

.lsp-misi-item-full {
    grid-column: 1 / -1;
}

.lsp-misi-number {
    flex-shrink: 0;
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #72161a 0%, #991b1e 100%);
    color: #ffffff;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 800;
    box-shadow: 0 4px 10px rgba(114, 22, 26, 0.2);
}

.lsp-misi-content h4 {
    font-size: 16px;
    font-weight: 700;
    color: #72161a;
    margin-bottom: 6px;
}

.lsp-misi-content p {
    font-size: 14px;
    color: #475569;
    line-height: 1.6;
    margin: 0;
}

/* STRATEGIC TARGETS (3 CARDS) */
.lsp-strategic-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.lsp-strategic-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 32px 25px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.04);
    text-align: center;
    position: relative;
    transition: all 0.3s ease;
}

.lsp-strategic-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.08);
    border-color: #f89b29;
}

.lsp-strategic-icon {
    width: 64px;
    height: 64px;
    border-radius: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    margin-bottom: 18px;
}

.lsp-target-year {
    display: inline-block;
    background: #f1f5f9;
    color: #64748b;
    font-size: 12px;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
    margin-bottom: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.lsp-target-value {
    font-size: 38px;
    font-weight: 900;
    color: #72161a;
    line-height: 1.1;
    margin-bottom: 12px;
}

.lsp-target-unit {
    font-size: 18px;
    font-weight: 600;
    color: #64748b;
}

.lsp-target-title {
    font-size: 18px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 10px;
}

.lsp-target-desc {
    font-size: 13.5px;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
}

/* TIMELINE STEPS 2027-2031 */
.lsp-timeline-steps {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 15px;
    margin-bottom: 30px;
}

.lsp-step-item {
    text-align: center;
}

.lsp-step-badge {
    display: inline-block;
    background: #72161a;
    color: #ffffff;
    font-weight: 700;
    font-size: 13px;
    padding: 4px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
}

.lsp-step-final .lsp-step-badge {
    background: #f89b29;
    color: #ffffff;
}

.lsp-step-box {
    background: #ffffff;
    border-radius: 12px;
    padding: 18px 14px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
    transition: all 0.2s ease;
}

.lsp-step-box:hover {
    border-color: #f89b29;
    transform: translateY(-3px);
}

.lsp-step-year {
    font-size: 13px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 6px;
}

.lsp-step-annual {
    font-size: 13px;
    font-weight: 600;
    color: #72161a;
    margin-bottom: 10px;
}

.lsp-step-bar-wrap {
    background: #f1f5f9;
    height: 8px;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 10px;
}

.lsp-step-bar {
    height: 100%;
    background: linear-gradient(90deg, #72161a 0%, #f89b29 100%);
    border-radius: 4px;
}

.lsp-step-cumul {
    font-size: 12px;
    color: #475569;
}

.lsp-step-cumul strong {
    color: #72161a;
    font-size: 13px;
}

/* TABLE PROJECTION */
.lsp-table-responsive {
    overflow-x: auto;
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
}

.lsp-target-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14.5px;
    text-align: left;
}

.lsp-target-table th {
    background: #72161a;
    color: #ffffff;
    padding: 16px 20px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 0.5px;
}

.lsp-target-table td {
    padding: 15px 20px;
    border-bottom: 1px solid #f1f5f9;
    color: #334155;
}

.lsp-target-table tbody tr:hover {
    background: #fffbeb;
}

.lsp-target-table td.col-year {
    font-weight: 700;
    color: #72161a;
    text-align: center;
}

.lsp-target-table td.col-target {
    text-align: center;
}

.lsp-target-table td.col-cumul {
    text-align: center;
}

.row-highlight td {
    background: #fef3c7;
    color: #92400e;
    font-weight: 700;
}

.badge-target {
    background: #f89b29;
    color: #fff;
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    margin-left: 6px;
}

/* CORE VALUES (4 CARDS) */
.lsp-values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.lsp-val-card {
    background: #ffffff;
    border-radius: 14px;
    padding: 25px 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    text-align: center;
    transition: all 0.25s ease;
}

.lsp-val-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 22px rgba(0, 0, 0, 0.06);
    border-color: #f89b29;
}

.lsp-val-icon {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: rgba(114, 22, 26, 0.08);
    color: #72161a;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 15px;
}

.lsp-val-card:hover .lsp-val-icon {
    background: #72161a;
    color: #ffffff;
}

.lsp-val-card h3,
.lsp-val-card h4 {
    font-size: 16px;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 8px;
}

.lsp-val-card p {
    font-size: 13px;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
}

/* CALL TO ACTION */
.lsp-profile-cta {
    background: linear-gradient(135deg, #72161a 0%, #450c0e 100%);
    border-radius: 18px;
    padding: 45px 35px;
    text-align: center;
    color: #ffffff;
    margin-top: 50px;
    box-shadow: 0 12px 30px rgba(114, 22, 26, 0.25);
    border-top: 4px solid #f89b29;
}

.lsp-cta-content h2 {
    font-size: 26px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 12px;
}

.lsp-cta-content p {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.88);
    max-width: 650px;
    margin: 0 auto 25px;
    line-height: 1.6;
}

.lsp-cta-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.lsp-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    transition: all 0.25s ease;
}

.lsp-btn-primary {
    background: #f89b29;
    color: #ffffff;
}

.lsp-btn-primary:hover {
    background: #e08418;
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(248, 155, 41, 0.4);
}

.lsp-btn-outline {
    background: transparent;
    color: #ffffff;
    border: 1.5px solid rgba(255, 255, 255, 0.6);
}

.lsp-btn-outline:hover {
    background: rgba(255, 255, 255, 0.15);
    color: #ffffff;
    border-color: #ffffff;
    transform: translateY(-2px);
}

.lsp-btn-secondary {
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
}

.lsp-btn-secondary:hover {
    background: #ffffff;
    color: #72161a;
    transform: translateY(-2px);
}

/* RESPONSIVE BREAKPOINTS */
@media (max-width: 991px) {
    .lsp-profile-intro-box {
        grid-template-columns: 1fr;
        padding: 30px;
        margin-top: -40px;
    }

    .lsp-strategic-grid {
        grid-template-columns: 1fr;
        max-width: 500px;
        margin: 0 auto;
    }

    .lsp-timeline-steps {
        grid-template-columns: repeat(2, 1fr);
    }

    .lsp-values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 767px) {
    .lsp-profile-intro-box {
        padding: 24px 20px;
    }

    .lsp-tagline-title {
        font-size: 21px;
    }

    .lsp-visi-card {
        padding: 25px 20px;
    }

    .lsp-visi-text {
        font-size: 16px;
    }

    .lsp-misi-grid {
        grid-template-columns: 1fr;
    }

    .lsp-timeline-steps {
        grid-template-columns: 1fr;
    }

    .lsp-values-grid {
        grid-template-columns: 1fr;
    }

    .lsp-target-value {
        font-size: 30px;
    }

    .lsp-cta-buttons {
        flex-direction: column;
    }

    .lsp-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<?php
get_footer();

