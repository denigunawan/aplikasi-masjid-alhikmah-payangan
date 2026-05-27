<?php echo view('_partials/header'); ?>

<main id="main" class="main">

    <div class="pagetitle">

        <h1>
            <i class="bi bi-megaphone"></i>
            Pengumuman Masjid
        </h1>

        <nav>

            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <a href="<?= base_url('/dashboard'); ?>">
                        <i class="bi bi-house-door"></i>
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    Pengumuman
                </li>

            </ol>

        </nav>

    </div>

    <section class="section dashboard">

        <div class="row">

            <div class="col-12">

                <div class="card shadow-sm border-0">

                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h5 class="card-title mb-0">

                            <i class="bi bi-table"></i>
                            Data Pengumuman

                        </h5>

                        <a href="<?= base_url('pengumuman/create'); ?>"
                            class="btn btn-success btn-sm">

                            <i class="bi bi-plus-circle"></i>
                            Tambah Pengumuman

                        </a>

                    </div>

                    <div class="card-body">

                        <!-- STATISTIK -->
                        <div class="row mt-4 mb-4 g-3">

                            <div class="col-md-4">

                                <div class="card bg-primary text-white shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Total Pengumuman
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count($pengumuman); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-megaphone fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="card bg-success text-white shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Publish
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count(array_filter($pengumuman, fn($p) => $p['status'] == 'publish')); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-check-circle fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="card bg-warning text-dark shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Draft
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count(array_filter($pengumuman, fn($p) => $p['status'] == 'draft')); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-pencil-square fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- TABLE -->
                        <div class="table-responsive">

                            <table class="table table-hover table-bordered align-middle datatable">

                                <thead class="table-light">

                                    <tr>

                                        <th width="60">No</th>
                                        <th width="100">Gambar</th>
                                        <th>Judul</th>
                                        <th>Isi Pengumuman</th>
                                        <th>Tanggal Pengumuman</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th width="120">Aksi</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php foreach($pengumuman as $key => $row): ?>

                                    <tr>

                                        <td>
                                            <?= $key + 1 ?>
                                        </td>

                                        <!-- GAMBAR -->
                                        <td>

                                            <?php if(!empty($row['gambar'])): ?>

                                            <img src="<?= base_url('uploads/pengumuman/' . $row['gambar']); ?>"
                                                alt="<?= $row['judul']; ?>"
                                                class="rounded shadow-sm"
                                                style="width:80px;height:80px;object-fit:cover;">

                                            <?php else: ?>

                                            <div class="bg-light border rounded d-flex align-items-center justify-content-center"
                                                style="width:80px;height:80px;">

                                                <i class="bi bi-image text-secondary fs-3"></i>

                                            </div>

                                            <?php endif; ?>

                                        </td>

                                        <!-- JUDUL -->
                                        <td>

                                            <strong>
                                                <?= $row['judul']; ?>
                                            </strong>

                                            <br>

                                        </td>

                                        <!-- ISI PENGUMUMAN -->
                                        <td>

                                            <span class="text-muted">
                                                <?= $row['isi_pengumuman']; ?>    
                                            </span>

                                        </td>

                                        <!-- TANGGAL -->
                                        <td>

                                            <span class="badge bg-primary">

                                                <i class="bi bi-calendar-event"></i>

                                                <?= date('d M Y', strtotime($row['tanggal_pengumuman'])); ?>

                                            </span>

                                        </td>
                                                                                <!-- KATEGORI -->
                                        <td>

                                            <span class="badge bg-info text-dark">

                                                <i class="bi bi-tags"></i>
                                                <?= $row['kategori']; ?>

                                            </span>

                                        </td>

                                        <!-- STATUS -->
                                        <td>

                                            <?php if($row['status'] == 'publish'): ?>

                                            <span class="badge bg-success">

                                                <i class="bi bi-check-circle"></i>
                                                Publish

                                            </span>

                                            <?php else: ?>

                                            <span class="badge bg-warning text-dark">

                                                <i class="bi bi-pencil-square"></i>
                                                Draft

                                            </span>

                                            <?php endif; ?>

                                        </td>

                                        <!-- AKSI -->
                                        <td>

                                            <div class="d-flex gap-1">

                                                <a href="<?= base_url('pengumuman/edit/'.$row['id']); ?>"
                                                    class="btn btn-warning btn-sm">

                                                    <i class="bi bi-pencil-square"></i>

                                                </a>

                                                <a href="#"
                                                    class="btn btn-danger btn-sm btn-delete"
                                                    data-url="<?= base_url('pengumuman/delete/'.$row['id']); ?>">

                                                    <i class="bi bi-trash"></i>

                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                    <?php endforeach; ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php echo view('_partials/footer'); ?>