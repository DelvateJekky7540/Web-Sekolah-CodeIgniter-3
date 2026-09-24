<h1>KERJA SAMA INDUSTRI</h1>

<div class="isi card shadow-sm">
	<div class="card-body">

		<div class="container mt-2">

			<?php if($this->session->flashdata('success')): ?>

			<div class="alert alert-success alert-dismissible fade show">
				<?= $this->session->flashdata('success'); ?>

				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>

			<?php endif; ?>

			<div class="d-flex justify-content-end mb-3">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSimpan">
                <i class="ti ti-square-plus"></i>Tambah Industri
            </button>
				

			</div>

			<div class="table-responsive">

				<table class="table table-bordered table-hover align-middle">

					<thead class="table-dark">

						<tr class="text-center">

							<th width="5%">No</th>
							<th width="20%">Logo</th>
							<th>Nama Industri</th>
							<th>Bidang Industri</th>
							<th width="20%">Aksi</th>

						</tr>

					</thead>

					<tbody>

						<?php if(!empty($industri)): ?>

						<?php $no = 1; ?>

						<?php foreach($industri as $item): ?>

						<tr>

							<td class="text-center">
								<?= $no++; ?>
							</td>

							<td class="text-center">

								<?php if(!empty($item->logo_industri)): ?>

								<img src="<?= base_url('assets/img/industri/' . $item->logo_industri); ?>"
									alt="<?= html_escape($item->nama_industri); ?>"
									style="width: 100px; height: 70px; object-fit: contain;">

								<?php else: ?>

								<span class="text-muted">
									Tidak ada logo
								</span>

								<?php endif; ?>

							</td>

							<td>
								<?= html_escape($item->nama_industri); ?>
							</td>

							<td>
								<?= html_escape($item->bidang_industri); ?>
							</td>

							<td class="text-center">

								<a href="<?= base_url('industri/edit/' . $item->id); ?>" class="btn btn-primary btn-sm">
									<i class="bi bi-pencil-square"></i> Edit
								</a>

								<a href="<?= base_url('industri/hapus/' . $item->id); ?>" class="btn btn-danger btn-sm"
									onclick="return confirm('Yakin ingin menghapus industri ini?')">
									<i class="bi bi-trash"></i> Hapus
								</a>

							</td>

						</tr>

						<?php endforeach; ?>

						<?php else: ?>

						<tr>

							<td colspan="5" class="text-center text-muted">
								Belum ada data industri.
							</td>

						</tr>

						<?php endif; ?>

					</tbody>

				</table>

			</div>

		</div>

	</div>
</div>

<div class="modal fade" id="modalSimpan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Simpan Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
    </div>
</div>
