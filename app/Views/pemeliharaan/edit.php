
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <!-- PAGE TITLE -->
    <div class="pagetitle">
        <h1><i class="bi bi-tools me-2 text-warning"></i> Edit Pemeliharaan & pemeliharaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('/pemeliharaan') ?>"><i class="bi bi-tools"></i> Pemeliharaan</a></li>
                <li class="breadcrumb-item active"><i class="bi bi-pencil-square"></i> Edit</li>
            </ol>
        </nav>
    </div>

    <!-- SECTION -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- CARD -->
                <div class="card shadow-sm border-0 mt-4">
                    <div class="card-header bg-white border-0 pt-4 pb-3 px-4">
                        <h5 class="card-title mb-0 fw-bold"><i class="bi bi-wrench-adjustable-circle text-warning me-2"></i> Form Edit Pemeliharaan</h5>
                    </div>

                    <div class="card-body px-4 pb-4">
                        <!-- INFO CARD -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="card bg-warning text-dark border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Update Data</small>
                                                <h5 class="fw-bold mt-2">Edit pemeliharaan</h5>
                                            </div>
                                            <i class="bi bi-pencil-square fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-success text-white border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Kondisi Barang</small>
                                                <h5 class="fw-bold mt-2">Monitoring Aset</h5>
                                            </div>
                                            <i class="bi bi-shield-check fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-primary text-white border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Sistem Masjid</small>
                                                <h5 class="fw-bold mt-2">Maintenance Digital</h5>
                                            </div>
                                            <i class="bi bi-building-gear fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- VALIDATION ERRORS -->
                        <?php if(session('errors')): ?>
                        <div class="alert alert-danger border-0 shadow-sm">
                            <div class="fw-bold mb-2"><i class="bi bi-exclamation-triangle-fill"></i> Terjadi Kesalahan</div>
                            <?php foreach(session('errors') as $e): ?>
                            <div><i class="bi bi-dot"></i> <?= $e ?></div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <!-- FORM -->
                        <form action="<?= base_url('pemeliharaan/save'); ?>" method="post" class="form-transaksi">
                            <!-- ID -->
                            <input type="hidden" name="id" value="<?= $pemeliharaan['id']; ?>">

                            <div class="row">
                                <!-- LEFT -->
                                <div class="col-md-6">
                                    <!-- KODE -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-upc-scan me-1 text-primary"></i> Kode</label>
                                        <input type="text" name="kode" class="form-control" value="<?= $pemeliharaan['kode']; ?>" required>
                                    </div>

                                    <!-- NAMA ITEM -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-box-seam me-1 text-primary"></i> Nama Item</label>
                                        <input type="text" name="nama_item" class="form-control" value="<?= $pemeliharaan['nama_item']; ?>" required>
                                    </div>

                                    <!-- KATEGORI -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-tags me-1 text-primary"></i> Kategori</label>
                                        <input type="text" name="kategori" class="form-control" value="<?= $pemeliharaan['kategori']; ?>" required>
                                    </div>

                                    <!-- JENIS -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-tools me-1 text-primary"></i> Jenis</label>
                                        <select name="jenis" class="form-select" required>
                                            <option value="">-- Pilih Jenis --</option>
                                            <option <?= $pemeliharaan['jenis']=='Pemeliharaan' ? 'selected' : '' ?> value="Pemeliharaan">Pemeliharaan</option>
                                            <option <?= $pemeliharaan['jenis']=='pemeliharaan' ? 'selected' : '' ?> value="pemeliharaan">pemeliharaan</option>
                                        </select>
                                    </div>

                                    <!-- TANGGAL -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-calendar-event me-1 text-primary"></i> Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" value="<?= $pemeliharaan['tanggal']; ?>" required>
                                    </div>
                                </div>

                                <!-- RIGHT -->
                                <div class="col-md-6">
                                    <!-- BIAYA -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-cash-stack me-1 text-success"></i> Biaya</label>
                                        <input type="text" id="jumlah" name="biaya" class="form-control" value="<?= number_format($pemeliharaan['biaya'],0,',','.'); ?>" required>
                                    </div>

                                    <!-- STATUS -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-check-circle me-1 text-success"></i> Status</label>
                                        <select name="status" class="form-select" required>
                                            <option value="">-- Pilih Status --</option>
                                            <option <?= $pemeliharaan['status']=='Pending' ? 'selected' : '' ?> value="Pending">Pending</option>
                                            <option <?= $pemeliharaan['status']=='Proses' ? 'selected' : '' ?> value="Proses">Proses</option>
                                            <option <?= $pemeliharaan['status']=='Selesai' ? 'selected' : '' ?> value="Selesai">Selesai</option>
                                        </select>
                                    </div>

                                    <!-- PENANGGUNG JAWAB -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-person-workspace me-1 text-primary"></i> Penanggung Jawab</label>
                                        <input type="text" name="penanggung_jawab" class="form-control" value="<?= $pemeliharaan['penanggung_jawab']; ?>" required>
                                    </div>

                                    <!-- LOKASI -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-geo-alt me-1 text-danger"></i> Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control" value="<?= $pemeliharaan['lokasi']; ?>" required>
                                    </div>

                                    <!-- KETERANGAN -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-card-text me-1 text-primary"></i> Keterangan</label>
                                        <textarea name="keterangan" rows="5" class="form-control"><?= $pemeliharaan['keterangan']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- BUTTON -->
                            <div class="text-end mt-4">
                                <a href="<?= base_url('pemeliharaan'); ?>" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END CARD -->
            </div>
        </div>
    </section>
</main>

<?php echo view('_partials/footer'); ?>
