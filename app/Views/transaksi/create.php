
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <!-- ======= PAGE TITLE ======= -->
    <div class="pagetitle">
        <h1><i class="bi bi-plus-circle me-2"></i> Tambah Transaksi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/dashboard') ?>">
                        <i class="bi bi-house-door"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/transaksi') ?>">
                        <i class="bi bi-wallet2"></i> Transaksi
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    <i class="bi bi-plus-circle"></i> Tambah
                </li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- ======= SECTION ======= -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- CARD -->
                <div class="card shadow-sm border-0 mt-4">
                    <div class="card-header bg-white border-0 pt-4 pb-3 px-4">
                        <h5 class="card-title mb-0 fw-bold">
                            <i class="bi bi-journal-plus text-primary me-2"></i> Form Tambah Transaksi
                        </h5>
                    </div>

                    <div class="card-body px-4 pb-4">
                        <!-- INFO CARD -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <div class="card bg-success text-white border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Transaksi Masuk</small>
                                                <h5 class="fw-bold mt-2">Donasi / Infaq</h5>
                                            </div>
                                            <i class="bi bi-arrow-down-circle fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-danger text-white border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Transaksi Keluar</small>
                                                <h5 class="fw-bold mt-2">Operasional</h5>
                                            </div>
                                            <i class="bi bi-arrow-up-circle fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card bg-primary text-white border-0 shadow-sm h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="opacity-75">Metode Pembayaran</small>
                                                <h5 class="fw-bold mt-2">Cash / QRIS</h5>
                                            </div>
                                            <i class="bi bi-credit-card fs-1 opacity-75"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END INFO CARD -->

                        <!-- FORM -->
                        <form action="<?= base_url('transaksi/save'); ?>" method="post" class="form-transaksi">
                            <div class="row">
                                <!-- LEFT -->
                                <div class="col-md-6">
                                    <!-- TANGGAL -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-calendar-event me-1 text-primary"></i> Tanggal
                                        </label>
                                        <input type="date" name="tanggal" value="<?= old('tanggal', date('Y-m-d')); ?>" class="form-control" required>
                                    </div>

                                    <!-- KETERANGAN -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-card-text me-1 text-primary"></i> Keterangan
                                        </label>
                                        <input type="text" name="keterangan" value="<?= old('keterangan'); ?>" class="form-control" placeholder="Contoh: Infaq Jumat" required>
                                    </div>

                                    <!-- KATEGORI -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-tags me-1 text-primary"></i> Kategori
                                        </label>
                                        <select name="kategori" class="form-select" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <option value="Kotak Amal">Kotak Amal</option>
                                            <option value="Infaq Jumat">Infaq Jumat</option>
                                            <option value="Zakat">Zakat</option>
                                            <option value="Sedekah">Sedekah</option>
                                            <option value="Operasional">Operasional</option>
                                            <option value="Perbaikan">Perbaikan</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- END LEFT -->

                                <!-- RIGHT -->
                                <div class="col-md-6">
                                    <!-- JUMLAH -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-cash-stack me-1 text-primary"></i> Jumlah
                                        </label>
                                        <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Contoh: 1.000.000" value="<?= old('jumlah'); ?>" autocomplete="off" required>
                                        <small class="text-muted">
                                            <i class="bi bi-info-circle"></i> Gunakan nominal tanpa simbol Rp
                                        </small>
                                    </div>

                                    <!-- TIPE -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-arrow-left-right me-1 text-primary"></i> Tipe Transaksi
                                        </label>
                                        <select name="tipe" class="form-select" required>
                                            <option value="">-- Pilih Tipe --</option>
                                            <option value="masuk">Masuk</option>
                                            <option value="keluar">Keluar</option>
                                        </select>
                                    </div>

                                    <!-- METODE -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-credit-card me-1 text-primary"></i> Metode Pembayaran
                                        </label>
                                        <select name="metode" class="form-select" required>
                                            <option value="">-- Pilih Metode --</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Transfer">Transfer</option>
                                            <option value="QRIS">QRIS</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- END RIGHT -->
                            </div>

                            <!-- BUTTON -->
                            <div class="text-end mt-4">
                                <a href="<?= base_url('transaksi'); ?>" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Simpan Transaksi
                                </button>
                            </div>
                            <!-- END BUTTON -->
                        </form>
                        <!-- END FORM -->
                    </div>
                </div>
                <!-- END CARD -->
            </div>
        </div>
    </section>
    <!-- End SECTION -->
</main>

<?php echo view('_partials/footer'); ?>
