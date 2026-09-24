
<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layouts/home/_css'); ?>
</head>

<body>
	<?php $this->load->view('layouts/home/_nav'); ?>
	
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

                    <p class="text-secondary mt-5">
                        <h5 class="fw-semibold">Visi</h5>
                        <ol><?= $profil->visi ?></ol>

                        <h5 class="fw-semibold mt-2">Misi</h5>
                        <ol>
                            <?php foreach (explode("\n", $profil->misi) as $misi): ?>
                                <li><?= trim($misi); ?></li>
                            <?php endforeach; ?>
                        </ol>
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
                <?php foreach ($industri as $i): ?>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100 p-4 text-center">
                            <img src="<?= base_url('assets/img/industri/' . $i->logo_industri) ?>" class="img-fluid mb-3" style="height: 100px; max-width: 180px; object-fit: contain;">

                            <h5 class="fw-bold mt-3">
                                <?= $i->nama_industri ?>
                            </h5>

                            <p class="text-secondary mb-0">
                                <?= $i->bidang_industri ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


	<?php $this->load->view('layouts/home/_footer') ?>
	<?php $this->load->view('layouts/home/_chatbot') ?>

	
	

    
</body>

</html>
