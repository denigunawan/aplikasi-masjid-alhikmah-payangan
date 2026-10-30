
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1><i class="bi bi-box-seam"></i> Inventaris Masjid</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/dashboard'); ?>"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li class="breadcrumb-item active"><i class="bi bi-archive"></i> Inventaris</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0"><i class="bi bi-table"></i> Data Inventaris</h5>
                        <a href="<?= base_url('inventaris/create'); ?>" class="btn btn-success btn-sm"><i class="bi bi-plus-circle"></i> Tambah Inventaris</a>
                    </div>

                    <div class="card-body">
                        <div class="row mt-4 mb-4 g-3">
                            <div class="col-md-3">
                                <div class="card bg-primary text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Total Barang</h6>
                                                <h3 class="mb-0"><?= count($inventaris); ?></h3>
                                            </div>
                                            <i class="bi bi-box-seam fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card bg-success text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Kondisi Baik</h6>
                                                <h3 class="mb-0"><?= count(array_filter($inventaris, fn($i) => $i['kondisi'] == 'Baik')); ?></h3>
                                            </div>
                                            <i class="bi bi-check-circle fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card bg-warning text-dark shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Rusak Ringan</h6>
                                                <h3 class="mb-0"><?= count(array_filter($inventaris, fn($i) => $i['kondisi'] == 'Rusak Ringan')); ?></h3>
                                            </div>
                                            <i class="bi bi-exclamation-circle fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card bg-danger text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Rusak Berat</h6>
                                                <h3 class="mb-0"><?= count(array_filter($inventaris, fn($i) => $i['kondisi'] == 'Rusak Berat')); ?></h3>
                                            </div>
                                            <i class="bi bi-x-circle fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle datatable">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi</th>
                                        <th>Lokasi</th>
                                        <th>Harga</th>
                                        <th width="120">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($inventaris as $key => $row): ?>
                                    <tr>
                                        <td><?= $key + 1; ?></td>
                                        <td><span class="badge bg-dark"><?= $row['kode_barang']; ?></span></td>
                                        <td><strong><?= $row['nama_barang']; ?></strong></td>
                                        <td><span class="badge bg-info text-dark"><?= $row['kategori']; ?></span></td>
                                        <td><span class="badge bg-secondary"><?= $row['jumlah']; ?> Unit</span></td>
                                        <td>
                                            <?php if ($row['kondisi'] == 'Baik'): ?>
                                                <span class="badge bg-success"><i class="bi bi-check-circle"></i> Baik</span>
                                            <?php elseif ($row['kondisi'] == 'Rusak Ringan'): ?>
                                                <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle"></i> Rusak Ringan</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger"><i class="bi bi-x-circle"></i> Rusak Berat</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><i class="bi bi-geo-alt"></i> <?= $row['lokasi']; ?></td>
                                        <td><strong class="text-success">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></strong></td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a href="<?= base_url('inventaris/edit/'.$row['id']); ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm btn-delete" data-url="<?= base_url('inventaris/delete/'.$row['id']); ?>"><i class="bi bi-trash"></i></a>
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
