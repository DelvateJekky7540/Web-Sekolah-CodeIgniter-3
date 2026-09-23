<h1>INI Profil</h1>

<div class="isi card shadow-sm">
	<div class="card-body">
		<div class="container mt-2">
			<?php if($this->session->flashdata('success')): ?>

			<div class="alert alert-success alert-dismissible fade show">
				<?= $this->session->flashdata('success'); ?>
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>

			<?php endif; ?>
			<table class="table table-bordered table-hover align-middle">

				<thead class="table-dark">
					<tr class="text-center">

						<th width="20%">Bagian</th>
						<th>Isi</th>
						<th width="15%">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>Visi</td>
						<td><?= $profil->visi; ?></td>
						<td class="text-center">
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVisi"><i
									class="bi bi-pencil-square"></i> Ubah</button>
						</td>
					</tr>

					<tr>
						<td>Misi</td>
						<td><?= nl2br($profil->misi); ?></td>
						<td class="text-center">
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMisi"><i
									class="bi bi-pencil-square"></i> Ubah</button>
						</td>
					</tr>

					<tr>
						<td>Kepala Sekolah</td>
						<td><?= $profil->kepala_sekolah; ?></td>
						<td class="text-center">
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKepsek"><i
									class="bi bi-pencil-square"></i> Ubah</button>
						</td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><?= $profil->alamat; ?></td>
						<td class="text-center">
							<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAlamat"><i
									class="bi bi-pencil-square"></i> Ubah</button>
						</td>
					</tr>

				</tbody>

			</table>
		</div>

	</div>
</div>
