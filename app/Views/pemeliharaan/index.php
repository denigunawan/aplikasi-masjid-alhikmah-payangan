
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <!-- PAGE TITLE -->
    <div class="pagetitle">
        <h1><i class="bi bi-tools"></i> Pemeliharaan & Perbaikan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/dashboard'); ?>"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li class="breadcrumb-item active"><i class="bi bi-wrench-adjustable-circle"></i> Pemeliharaan</li>
            </ol>
        </nav>
    </div>

    <!-- SECTION -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0 mt-3">
                    <!-- CARD HEADER -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0"><i class="bi bi-table"></i> Data Pemeliharaan & Perbaikan</h5>
                        <a href="<?= base_url('pemeliharaan/create'); ?>" class="btn btn-success btn-sm"><i class="bi bi-plus-circle"></i> Tambah Data</a>
                    </div>

                    <!-- CARD BODY -->
                    <div class="card-body">
                        <!-- INFO CARD -->
                        <div class="row mb-4 mt-3">
                            <!-- TOTAL -->
                            <div class="col-md-3">
                                <div class="card bg-primary text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6>Total Data</h6>
                                                <h3><?= count($pemeliharaan); ?></h3>
                                            </div>
                                            <i class="bi bi-tools fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SELESAI -->
                            <div class="col-md-3">
                                <div class="card bg-success text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6>Selesai</h6>
                                                <h3><?= count(array_filter($pemeliharaan, fn($p) => $p['status'] == 'Selesai')); ?></h3>
                                            </div>
                                            <i class="bi bi-check-circle fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- DIPROSES -->
                            <div class="col-md-3">
                                <div class="card bg-warning text-dark shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6>Diproses</h6>
                                                <h3><?= count(array_filter($pemeliharaan, fn($p) => $p['status'] == 'Diproses')); ?></h3>
                                            </div>
                                            <i class="bi bi-hourglass-split fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TOTAL BIAYA -->
                            <div class="col-md-3">
                                <div class="card bg-danger text-white shadow-sm border-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6>Total Biaya</h6>
                                                <h5>Rp <?= number_format(array_sum(array_column($pemeliharaan, 'biaya')), 0, ',', '.'); ?></h5>
                                            </div>
                                            <i class="bi bi-cash-stack fs-1"></i>
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
                                        <th width="5%">No</th>
                                        <th>Kode</th>
                                        <th>Nama Item</th>
                                        <th>Kategori</th>
                                        <th>Jenis</th>
                                        <th>Tanggal</th>
                                        <th>Biaya</th>
                                        <th>Status</th>
                                        <th>Penanggung Jawab</th>
                                        <th>Lokasi</th>
                                        <th>Keterangan</th>
                                        <th width="120">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($pemeliharaan)): ?>
                                    <?php foreach($pemeliharaan as $key => $row): ?>
                                    <tr>
                                        <!-- NO -->
                                        <td><?= $key + 1 ?></td>

                                        <!-- KODE -->
                                        <td>
                                            <span class="badge bg-dark"><i class="bi bi-upc-scan"></i> <?= $row['kode']; ?></span>
                                        </td>

                                        <!-- NAMA ITEM -->
                                        <td>
                                            <strong class="text-primary"><i class="bi bi-tools"></i> <?= $row['nama_item']; ?></strong>
                                        </td>

                                        <!-- KATEGORI -->
                                        <td>
                                            <span class="badge bg-info text-dark"><i class="bi bi-tags"></i> <?= $row['kategori']; ?></span>
                                        </td>

                                        <!-- JENIS -->
                                        <td>
                                            <?php if($row['jenis'] == 'Perbaikan'): ?>
                                            <span class="badge bg-warning text-dark"><i class="bi bi-wrench-adjustable"></i> <?= $row['jenis']; ?></span>
                                            <?php else: ?>
                                            <span class="badge bg-primary"><i class="bi bi-tools"></i> <?= $row['jenis']; ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <!-- TANGGAL -->
                                        <td>
                                            <span class="badge bg-secondary"><i class="bi bi-calendar-event"></i> <?= date('d-m-Y', strtotime($row['tanggal'])); ?></span>
                                        </td>

                                        <!-- BIAYA -->
                                        <td>
                                            <strong class="text-success">Rp <?= number_format($row['biaya'], 0, ',', '.'); ?></strong>
                                        </td>

                                        <!-- STATUS -->
                                        <td>
                                            <?php if($row['status'] == 'Selesai'): ?>
                                            <span class="badge bg-success"><i class="bi bi-check-circle"></i> Selesai</span>
                                            <?php elseif($row['status'] == 'Diproses'): ?>
                                            <span class="badge bg-warning text-dark"><i class="bi bi-hourglass-split"></i> Diproses</span>
                                            <?php else: ?>
                                            <span class="badge bg-danger"><i class="bi bi-clock-history"></i> Pending</span>
                                            <?php endif; ?>
                                        </td>

                                        <!-- PENANGGUNG JAWAB -->
                                        <td>
                                            <span class="badge bg-dark"><i class="bi bi-person-circle"></i> <?= $row['penanggung_jawab']; ?></span>
                                        </td>

                                        <!-- LOKASI -->
                                        <td>
                                            <i class="bi bi-geo-alt-fill text-danger"></i> <?= $row['lokasi']; ?>
                                        </td>

                                        <!-- KETERANGAN -->
                                        <td>
                                            <small class="text-muted"><?= $row['keterangan']; ?></small>
                                        </td>

                                        <!-- AKSI -->
                                        <td>
                                            <div class="d-flex gap-1">
                                                <!-- EDIT -->
                                                <a href="<?= base_url('pemeliharaan/edit/'.$row['id']); ?>" class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <!-- DELETE -->
                                                <a href="#" class="btn btn-danger btn-sm btn-delete" data-url="<?= base_url('pemeliharaan/delete/'.$row['id']); ?>">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="12" class="text-center text-muted py-4">
                                            <i class="bi bi-inbox fs-3"></i>
                                            <br>
                                            Belum ada data pemeliharaan
                                        </td>
                                    </tr>
                                    <?php endif; ?>
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
