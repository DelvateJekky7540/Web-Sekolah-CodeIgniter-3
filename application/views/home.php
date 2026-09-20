
<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layouts/_css'); ?>
</head>

<body>
	<?php $this->load->view('layouts/_nav'); ?>
	
    <section id="beranda" class="hero text-white d-flex align-items-center">

		<div class="container">

			<div class="row align-items-center g-5">

				<div class="col-lg-6">

					<span class="badge bg-light text-primary px-3 py-2 mb-3">SMK Pusat Keunggulan</span>

					<h1 class="display-4 fw-bold mb-4">
						SMK NEGERI 2 KARANGANYAR
					</h1>

					<p class="lead mb-4 fw-medium">
						SMKN 2 Karanganyar bertujuan mewujudkan pelajar yang berprestasi, berpendidikan karakter, memiliki sopan santun, dan lulusan siap kerja.
					</p>

					<div class="d-flex flex-wrap gap-2">

						<a href="https://spmb.jatengprov.go.id/" class="btn btn-primary btn-lg fw-semibold">
							<i class="bi bi-mortarboard-fill me-2"></i>Informasi PPDB
						</a>

						<a href="<?= base_url('home/profil') ?>" class="btn btn-outline-light btn-lg">
							Kenali Sekolah
						</a>

					</div>

				</div>

                <div class="col-5">
                    <img src="<?= base_url('assets/img/hero.png') ?>" style="width: 107%;">
                </div>

			</div>

		</div>

	</section>

	<section class="stats-section">
        <div class="container">
            <div class="row g-3">
                <!-- GURU -->
                <div class="stat-card row text-center">
                    <div class="col-3">
                        <div class="stat-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <div class="stat-number">
                            1400+
                        </div>

                        <div class="stat-title">
                            <span>Siswa</span>
                        </div>
                    </div>
                    
                    <div class="col-3">
                        <div class="stat-icon">
                            <i class="bi bi-person-fill"></i>
                        </div>

                        <div class="stat-number">
                            70+
                        </div>

                        <div class="stat-title">
                            Guru
                        </div>

                    </div>

                    <div class="col-3">
                        <div class="stat-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>

                        <div class="stat-number">
                            32+
                        </div>

                        <div class="stat-title">
                            Staff & Karyawan
                        </div>

                    </div>

                    <div class="col-3">
                        <div class="stat-icon">
                            <i class="bi bi-book-half"></i>
                        </div>

                        <div class="stat-number">
                            16+
                        </div>

                        <div class="stat-title">
                            Mata Pelajaran
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </section>

	<!-- PROFIL SEKOLAH -->
    <section id="profil" class="py-5">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-lg-4">
                    <img src="<?= base_url('assets/img/smk.png') ?>" style="width: 120%;" class="img-fluid rounded-4 shadow-sm p-4">
                </div>

                <div class="col-lg-8">
                    <span class="text-primary fw-semibold">
                        PROFIL SEKOLAH
                    </span>

                    <h2 class="fw-bold mt-2">
                        SMK Negeri 2 Karanganyar
                    </h2>

                    <p class="text-secondary">
                        <h5 class="fw-semibold">Visi</h5>
                        Terwujudnya Lulusan yang Berkarakter, Berprestasi, Berwawasan Global dan Berbudaya Lingkungan

                        <h5 class="fw-semibold mt-4">Misi</h5>
                        1. Menanamkan keimanan dan ketaqwaan kepada Tuhan YME melalui pengamalan ajaran agama <br>
                        2. Mewujudkan profil lulusan yang kompetitif, kolaboratif, dan bernalar kritis <br>
                        3. Menyelenggarakan Pembelajaran yang Berkualitas, Berwawasan Global dan Berbudaya Lingkungan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- JURUSAN -->
    <section id="jurusan" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <span class="text-primary fw-semibold">
                    PROGRAM KEAHLIAN
                </span>

                <h2 class="fw-bold mt-2">
                    Pilihan Jurusan
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="<?= base_url('assets/img/TMesin.png') ?>" alt="">

                        <h5 class="fw-bold mt-3">
                            Teknik Pemesinan
                        </h5>

                        <p class="text-secondary">
                            Mempelajari tentang cara memproduksi barang teknik dan menggunakan mesin.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="<?= base_url('assets/img/TPK.png') ?>" alt="">

                        <h5 class="fw-bold mt-3">
                            Teknik Pembuatan Kain
                        </h5>

                        <p class="text-secondary">
                            Mempelajari tentang desain tenun, mesin pembuatan kain, pemeliharaan dan perawatan, dan pengendalian mutunya.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="<?= base_url('assets/img/TOtotronik.png') ?>" alt="">

                        <h5 class="fw-bold mt-3">
                            Teknik Ototronik
                        </h5>

                        <p class="text-secondary">
                            Mempelajari tentang otomotif dalam penguasaan teknologi elektronik dan kontrol pada kendaraan bermotor.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <img src="<?= base_url('assets/img/RPL.png') ?>" alt="">

                        <h5 class="fw-bold mt-3">
                            Rekayasa Perangkat Lunak
                        </h5>

                        <p class="text-secondary">
                            Mempelajari tentang pengembangan perangkat lunak termasuk, pembuatan, pemeliharaan, dan manajemen organisasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KERJA SAMA INDUSTRI -->
    <section id="industri" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <span class="text-primary fw-semibold">
                    KERJA SAMA INDUSTRI
                </span>

                <h2 class="fw-bold mt-2">
                    Mitra Dunia Kerja
                </h2>

                <p class="text-secondary">
                    Membangun hubungan dengan dunia industri
                    untuk mendukung kesiapan kerja siswa.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <i class="bi bi-building fs-1 text-primary"></i>

                        <h5 class="fw-bold mt-3">
                            Mitra Industri 1
                        </h5>

                        <p class="text-secondary mb-0">
                            Kerja sama praktik kerja lapangan
                            dan pengembangan keterampilan.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <i class="bi bi-briefcase fs-1 text-primary"></i>

                        <h5 class="fw-bold mt-3">
                            Mitra Industri 2
                        </h5>

                        <p class="text-secondary mb-0">
                            Mendukung pengalaman kerja
                            dan pengenalan dunia industri.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <i class="bi bi-people fs-1 text-primary"></i>

                        <h5 class="fw-bold mt-3">
                            Mitra Industri 3
                        </h5>

                        <p class="text-secondary mb-0">
                            Membuka peluang kolaborasi
                            dan pengembangan karier lulusan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



	<!-- <section class="artikel py-5 bg-light">

		<div class="container">

			<div class="text-center mb-5 pt-4">

				<h2 class="fw-bold text-white">
					Artikel Terbaru
				</h2>

				<p class="fw-bold text-white">
					Berita dan informasi terbaru SMP Negeri 2 Karanganyar
				</p>

			</div>

			<div class="row ">

				<?php foreach($artikel as $a): ?>

				<div class="col-md-4 mb-4">

					<div class="card border-0 shadow-sm h-100 artikel-card">

						<div class="overflow-hidden">

							<img src="<?= base_url('assets/img/artikel/'.$a->gambar) ?>"
								class="card-img-top artikel-img">

						</div>

						<div class="card-body d-flex flex-column">

							<small class="text-muted mb-2">

								<i class="bi bi-calendar-event"></i>

								<?= date('d M Y', strtotime($a->tanggal)) ?>

							</small>

							<h5 class="fw-bold">

								<?= $a->judul ?>

							</h5>

							<p class="text-muted small flex-grow-1">

								<?= substr(strip_tags($a->deskripsi), 0, 120) ?>...

							</p>

							<a href="<?= base_url('artikel/'.$a->slug) ?>"
								class="btn btn-success rounded-pill mt-auto">

								Baca Selengkapnya

							</a>

						</div>

					</div>

				</div>

				<?php endforeach; ?>

			</div>

		</div>

	</section> -->

	<section class="section" id="berita">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-5 flex-wrap gap-3">
                <div>
                    <div class="section-label">
                        Artikel & Berita
                    </div>

                    <h2 class="section-title mb-0">
                        Prestasi
                    </h2>
                </div>


                <a href="<?= base_url('home/artikel') ?>" class="btn btn-outline-primary">
                    Lihat Semua Berita
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>


            <div class="row g-4">
				<?php foreach($artikel as $a): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="article-card">
                        <img src="<?= base_url('assets/img/artikel/'.$a->gambar) ?>" class="article-image">


                        <div class="article-body">


                            <div>

                                <span class="article-badge">
                                    KEGIATAN
                                </span>

                                <span class="article-date">
									<i class="bi bi-calendar-event"></i>
                                    <?= date('d M Y', strtotime($a->tanggal)) ?>
                                </span>

                            </div>


                            <h5>
								<?= $a->judul ?>
                            </h5>


                            <p>
								<?= substr(strip_tags($a->deskripsi), 0, 120) ?>...
                            </p>


                            <a href="<?= base_url('artikel/'.$a->slug) ?>" class="program-link">
                                Baca Selengkapnya
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>


                        </div>

                    </div>

                </div>
				<?php endforeach; ?>
        	</div>
		</div>
    </section>

	<?php $this->load->view('layouts/_footer') ?>
	<?php $this->load->view('layouts/_chatbot') ?>

	
	

    
</body>

</html>
