
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <!-- PAGE TITLE -->
    <div class="pagetitle">
        <h1><i class="bi bi-tools me-2"></i> Tambah Pemeliharaan & Perbaikan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('/pemeliharaan') ?>"><i class="bi bi-wrench-adjustable-circle"></i> Pemeliharaan</a></li>
                <li class="breadcrumb-item active"><i class="bi bi-plus-circle"></i> Tambah</li>
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
                        <h5 class="card-title mb-0 fw-bold"><i class="bi bi-tools text-primary me-2"></i> Form Tambah Pemeliharaan</h5>
                    </div>

                    <div class="card-body px-4 pb-4">
                        <!-- INFO CARD -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="card bg-primary text-white border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Jenis Pekerjaan</small>
                                                <h5 class="fw-bold mt-2">Perawatan Rutin</h5>
                                            </div>
                                            <i class="bi bi-tools fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-warning text-dark border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Status Pekerjaan</small>
                                                <h5 class="fw-bold mt-2">Dalam Proses</h5>
                                            </div>
                                            <i class="bi bi-clock-history fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-success text-white border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Lokasi Perbaikan</small>
                                                <h5 class="fw-bold mt-2">Area Masjid</h5>
                                            </div>
                                            <i class="bi bi-building fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FORM -->
                        <form action="<?= base_url('pemeliharaan/save'); ?>" method="post" class="form-transaksi">
                            <div class="row">
                                <!-- LEFT -->
                                <div class="col-md-6">
                                    <!-- KODE -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-upc-scan me-1 text-primary"></i> Kode Pemeliharaan</label>
                                        <input type="text" name="kode" class="form-control" placeholder="Contoh: PM-001" required>
                                    </div>

                                    <!-- NAMA ITEM -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-box-seam me-1 text-primary"></i> Nama Item</label>
                                        <input type="text" name="nama_item" class="form-control" placeholder="Contoh: AC Ruang Utama" required>
                                    </div>

                                    <!-- KATEGORI -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-tags me-1 text-primary"></i> Kategori</label>
                                        <select name="kategori" class="form-select" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <option value="Elektronik">Elektronik</option>
                                            <option value="Bangunan">Bangunan</option>
                                            <option value="Peralatan">Peralatan</option>
                                            <option value="Kebersihan">Kebersihan</option>
                                        </select>
                                    </div>

                                    <!-- JENIS -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-wrench-adjustable me-1 text-primary"></i> Jenis</label>
                                        <select name="jenis" class="form-select" required>
                                            <option value="">-- Pilih Jenis --</option>
                                            <option value="Pemeliharaan">Pemeliharaan</option>
                                            <option value="Perbaikan">Perbaikan</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- RIGHT -->
                                <div class="col-md-6">
                                    <!-- TANGGAL -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-calendar-event me-1 text-primary"></i> Tanggal</label>
                                        <input type="date" name="tanggal" value="<?= date('Y-m-d'); ?>" class="form-control" required>
                                    </div>

                                    <!-- BIAYA -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-cash-stack me-1 text-primary"></i> Biaya</label>
                                        <input type="text" id="jumlah" name="biaya" class="form-control" placeholder="Contoh: 1.500.000" autocomplete="off" required>
                                        <small class="text-muted"><i class="bi bi-info-circle"></i> Gunakan nominal tanpa simbol Rp</small>
                                    </div>

                                    <!-- STATUS -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-check-circle me-1 text-primary"></i> Status</label>
                                        <select name="status" class="form-select" required>
                                            <option value="">-- Pilih Status --</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Proses">Proses</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>

                                    <!-- PENANGGUNG JAWAB -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-person-workspace me-1 text-primary"></i> Penanggung Jawab</label>
                                        <input type="text" name="penanggung_jawab" class="form-control" placeholder="Contoh: Ahmad Fauzi" required>
                                    </div>
                                </div>

                                <!-- LOKASI -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-geo-alt me-1 text-primary"></i> Lokasi</label>
                                        <select name="lokasi" class="form-select" required>
                                            <option value="">-- Pilih Lokasi --</option>
                                            <option value="Ruang Utama">Ruang Utama</option>
                                            <option value="Tempat Wudhu">Tempat Wudhu</option>
                                            <option value="Gudang">Gudang</option>
                                            <option value="Area Parkir">Area Parkir</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- KETERANGAN -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold"><i class="bi bi-card-text me-1 text-primary"></i> Keterangan</label>
                                        <textarea name="keterangan" rows="4" class="form-control" placeholder="Tambahkan detail pemeliharaan atau perbaikan..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- BUTTON -->
                            <div class="text-end mt-4">
                                <a href="<?= base_url('pemeliharaan'); ?>" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan Data</button>
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
