
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <!-- ======= PAGE TITLE ======= -->
    <div class="pagetitle">
        <h1>
            <i class="bi bi-pencil-square text-warning"></i> Edit Transaksi
        </h1>
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
                    <i class="bi bi-pencil"></i> Edit
                </li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <!-- ======= INFO CARD ======= -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card bg-warning text-dark shadow-sm border-0 rounded-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Edit Data</h6>
                                <small>Perbarui transaksi keuangan</small>
                            </div>
                            <i class="bi bi-pencil-square fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-success text-white shadow-sm border-0 rounded-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Data Aman</h6>
                                <small>Perubahan tersimpan otomatis</small>
                            </div>
                            <i class="bi bi-shield-check fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-primary text-white shadow-sm border-0 rounded-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Sistem Masjid</h6>
                                <small>Kelola transaksi lebih mudah</small>
                            </div>
                            <i class="bi bi-bank fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END INFO CARD -->

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-warning text-dark rounded-3 p-3 me-3 shadow-sm">
                                <i class="bi bi-pencil-square fs-4"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">Form Edit Transaksi</h4>
                                <small class="text-muted">Silakan perbarui data transaksi keuangan masjid</small>
                            </div>
                        </div>

                        <?php if(session('errors')): ?>
                        <div class="alert alert-danger rounded-3">
                            <?php foreach(session('errors') as $e): ?>
                            <div>
                                <i class="bi bi-exclamation-circle"></i>
                                <?= $e ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <!-- FORM -->
                        <form action="<?= base_url('transaksi/save'); ?>" method="post" class="form-transaksi">
                            <input type="hidden" name="id" value="<?= $transaksi['id']; ?>">

                            <div class="row">
                                <!-- TANGGAL -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-calendar-event text-primary"></i> Tanggal
                                        </label>
                                        <input type="date" name="tanggal" class="form-control" value="<?= $transaksi['tanggal']; ?>" required>
                                    </div>
                                </div>

                                <!-- JUMLAH -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-cash-stack text-success"></i> Jumlah
                                        </label>
                                        <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Contoh: 1.000.000" autocomplete="off" value="<?= number_format($transaksi['jumlah'], 0, ',', '.'); ?>" required>
                                        <small class="text-muted">Gunakan format angka tanpa simbol Rp</small>
                                    </div>
                                </div>

                                <!-- KETERANGAN -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-chat-left-text text-info"></i> Keterangan
                                        </label>
                                        <input type="text" name="keterangan" class="form-control" placeholder="Contoh: Pembelian Karpet Masjid" value="<?= $transaksi['keterangan']; ?>" required>
                                    </div>
                                </div>

                                <!-- KATEGORI -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-tags text-warning"></i> Kategori
                                        </label>
                                        <select name="kategori" class="form-select" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <option <?= $transaksi['kategori']=='Kotak Amal' ? 'selected' : '' ?> value="Kotak Amal">Kotak Amal</option>
                                            <option <?= $transaksi['kategori']=='Infaq Jumat' ? 'selected' : '' ?> value="Infaq Jumat">Infaq Jumat</option>
                                            <option <?= $transaksi['kategori']=='Zakat' ? 'selected' : '' ?> value="Zakat">Zakat</option>
                                            <option <?= $transaksi['kategori']=='Sedekah' ? 'selected' : '' ?> value="Sedekah">Sedekah</option>
                                            <option <?= $transaksi['kategori']=='Operasional' ? 'selected' : '' ?> value="Operasional">Operasional</option>
                                            <option <?= $transaksi['kategori']=='Perbaikan' ? 'selected' : '' ?> value="Perbaikan">Perbaikan</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- TIPE -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-arrow-left-right text-danger"></i> Tipe Transaksi
                                        </label>
                                        <select name="tipe" class="form-select" required>
                                            <option value="">-- Pilih Tipe --</option>
                                            <option <?= $transaksi['tipe']=='masuk' ? 'selected' : '' ?> value="masuk">Masuk</option>
                                            <option <?= $transaksi['tipe']=='keluar' ? 'selected' : '' ?> value="keluar">Keluar</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- METODE -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-credit-card text-primary"></i> Metode Pembayaran
                                        </label>
                                        <select name="metode" class="form-select" required>
                                            <option value="">-- Pilih Metode --</option>
                                            <option <?= $transaksi['metode']=='Cash' ? 'selected' : '' ?> value="Cash">Cash</option>
                                            <option <?= $transaksi['metode']=='Transfer' ? 'selected' : '' ?> value="Transfer">Transfer</option>
                                            <option <?= $transaksi['metode']=='QRIS' ? 'selected' : '' ?> value="QRIS">QRIS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- BUTTON -->
                            <div class="text-end mt-4">
                                <a href="<?= base_url('transaksi'); ?>" class="btn btn-secondary rounded-pill px-4">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary rounded-pill px-4 btn-save">
                                    <i class="bi bi-save"></i> Update Data
                                </button>
                            </div>
                        </form>
                        <!-- END FORM -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php echo view('_partials/footer'); ?>
