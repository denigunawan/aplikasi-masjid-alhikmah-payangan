
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1><i class="bi bi-calendar-event"></i> Kegiatan Masjid</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/dashboard'); ?>"><i class="bi bi-house-door"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><i class="bi bi-calendar2-week"></i> Kegiatan</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0"><i class="bi bi-table"></i> Data Kegiatan</h5>
                        <a href="<?= base_url('kegiatan/create'); ?>" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-circle"></i> Tambah Kegiatan
                        </a>
                    </div>

                    <div class="card-body">
                        <!-- STATISTIK -->
                        <div class="row mt-4 mb-4 g-3">
                            <!-- TOTAL -->
                            <div class="col-md-3">
                                <div class="card bg-primary text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Total Kegiatan</h6>
                                                <h3 class="mb-0"><?= count($kegiatan); ?></h3>
                                            </div>
                                            <i class="bi bi-calendar-event fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- AKAN DATANG -->
                            <div class="col-md-3">
                                <div class="card bg-info text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Akan Datang</h6>
                                                <h3 class="mb-0"><?= count(array_filter($kegiatan, fn($k) => $k['status'] == 'Akan Datang')); ?></h3>
                                            </div>
                                            <i class="bi bi-calendar-plus fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BERLANGSUNG -->
                            <div class="col-md-3">
                                <div class="card bg-success text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Berlangsung</h6>
                                                <h3 class="mb-0"><?= count(array_filter($kegiatan, fn($k) => $k['status'] == 'Berlangsung')); ?></h3>
                                            </div>
                                            <i class="bi bi-broadcast fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SELESAI -->
                            <div class="col-md-3">
                                <div class="card bg-secondary text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Selesai</h6>
                                                <h3 class="mb-0"><?= count(array_filter($kegiatan, fn($k) => $k['status'] == 'Selesai')); ?></h3>
                                            </div>
                                            <i class="bi bi-check-circle fs-1"></i>
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
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Lokasi</th>
                                        <th>Pembicara</th>
                                        <th>Status</th>
                                        <th>Penanggung Jawab</th>
                                        <th width="120">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($kegiatan as $key => $row): ?>
                                        <tr>
                                            <!-- NO -->
                                            <td><?= $key + 1 ?></td>

                                            <!-- GAMBAR -->
                                            <td width="100">
                                                <?php if(!empty($row['gambar'])): ?>
                                                    <img src="<?= base_url('uploads/kegiatan/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>" class="rounded shadow-sm" style="width:80px;height:80px;object-fit:cover;">
                                                <?php else: ?>
                                                    <div class="bg-light border rounded d-flex align-items-center justify-content-center" style="width:80px;height:80px;">
                                                        <i class="bi bi-image text-secondary fs-3"></i>
                                                    </div>
                                                <?php endif; ?>
                                            </td>

                                            <!-- JUDUL -->
                                            <td><strong><?= $row['judul']; ?></strong></td>

                                            <!-- KATEGORI -->
                                            <td>
                                                <span class="badge bg-info text-dark">
                                                    <i class="bi bi-tags"></i> <?= $row['kategori']; ?>
                                                </span>
                                            </td>

                                            <!-- TANGGAL -->
                                            <td>
                                                <span class="badge bg-primary">
                                                    <i class="bi bi-calendar-date"></i> <?= date('d M Y', strtotime($row['tanggal_kegiatan'])); ?>
                                                </span>
                                            </td>

                                            <!-- JAM -->
                                            <td>
                                                <span class="badge bg-dark">
                                                    <i class="bi bi-clock"></i> <?= date('H:i', strtotime($row['jam_kegiatan'])); ?> WIB
                                                </span>
                                            </td>

                                            <!-- LOKASI -->
                                            <td><i class="bi bi-geo-alt"></i> <?= $row['lokasi']; ?></td>

                                            <!-- PEMBICARA -->
                                            <td>
                                                <span class="badge bg-light text-dark border">
                                                    <i class="bi bi-person"></i> <?= $row['pembicara']; ?>
                                                </span>
                                            </td>

                                            <!-- STATUS -->
                                            <td>
                                                <?php if($row['status'] == 'Akan Datang'): ?>
                                                    <span class="badge bg-info"><i class="bi bi-calendar-plus"></i> Akan Datang</span>
                                                <?php elseif($row['status'] == 'Berlangsung'): ?>
                                                    <span class="badge bg-success"><i class="bi bi-broadcast"></i> Berlangsung</span>
                                                <?php else: ?>
                                                    <span class="badge bg-secondary"><i class="bi bi-check-circle"></i> Selesai</span>
                                                <?php endif; ?>
                                            </td>

                                            <!-- PENANGGUNG JAWAB -->
                                            <td><?= $row['penanggung_jawab']; ?></td>

                                            <!-- AKSI -->
                                            <td>
                                                <div class="d-flex gap-1">
                                                    <a href="<?= base_url('kegiatan/edit/'.$row['id']); ?>" class="btn btn-warning btn-sm">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-delete" data-url="<?= base_url('kegiatan/delete/'.$row['id']); ?>">
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
