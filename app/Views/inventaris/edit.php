
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-pencil-square fs-2 text-warning"></i>
            <div>
                <h1 class="mb-0">Edit Inventaris</h1>
                <small class="text-muted">Update data inventaris masjid</small>
            </div>
        </div>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('/inventaris') ?>">Inventaris</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title d-flex align-items-center gap-2">
                            <i class="bi bi-box-seam text-primary"></i> Form Edit Inventaris
                        </h5>

                        <form action="<?= base_url('inventaris/save'); ?>" method="post" class="form-transaksi">
                            <input type="hidden" name="id" value="<?= $inventaris['id']; ?>">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><i class="bi bi-upc-scan"></i> Kode Barang</label>
                                        <input type="text" name="kode_barang" class="form-control" placeholder="Contoh: INV-001" value="<?= $inventaris['kode_barang']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><i class="bi bi-box"></i> Nama Barang</label>
                                        <input type="text" name="nama_barang" class="form-control" placeholder="Contoh: Speaker TOA" value="<?= $inventaris['nama_barang']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><i class="bi bi-tags"></i> Kategori</label>
                                        <select name="kategori" class="form-select" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Elektronik" <?= $inventaris['kategori'] == 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
                                            <option value="Perlengkapan Ibadah" <?= $inventaris['kategori'] == 'Perlengkapan Ibadah' ? 'selected' : '' ?>>Perlengkapan Ibadah</option>
                                            <option value="Furniture" <?= $inventaris['kategori'] == 'Furniture' ? 'selected' : '' ?>>Furniture</option>
                                            <option value="Kebersihan" <?= $inventaris['kategori'] == 'Kebersihan' ? 'selected' : '' ?>>Kebersihan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><i class="bi bi-123"></i> Jumlah</label>
                                        <input type="number" name="jumlah" class="form-control" placeholder="Contoh: 10" value="<?= $inventaris['jumlah']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><i class="bi bi-shield-check"></i> Kondisi</label>
                                        <select name="kondisi" class="form-select" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Baik" <?= $inventaris['kondisi'] == 'Baik' ? 'selected' : '' ?>>Baik</option>
                                            <option value="Rusak Ringan" <?= $inventaris['kondisi'] == 'Rusak Ringan' ? 'selected' : '' ?>>Rusak Ringan</option>
                                            <option value="Rusak Berat" <?= $inventaris['kondisi'] == 'Rusak Berat' ? 'selected' : '' ?>>Rusak Berat</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><i class="bi bi-geo-alt"></i> Lokasi</label>
                                        <select name="lokasi" class="form-select" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Gudang" <?= $inventaris['lokasi'] == 'Gudang' ? 'selected' : '' ?>>Gudang</option>
                                            <option value="Ruang Utama" <?= $inventaris['lokasi'] == 'Ruang Utama' ? 'selected' : '' ?>>Ruang Utama</option>
                                            <option value="Kantor DKM" <?= $inventaris['lokasi'] == 'Kantor DKM' ? 'selected' : '' ?>>Kantor DKM</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><i class="bi bi-calendar-event"></i> Tanggal Beli</label>
                                        <input type="date" name="tanggal_beli" class="form-control" value="<?= $inventaris['tanggal_beli']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label><i class="bi bi-cash-stack"></i> Harga</label>
                                        <!-- Wajib menggunakan id jumlah -->
                                        <input type="text" id="jumlah" name="harga" class="form-control" placeholder="Contoh: 5.000.000" value="<?= number_format($inventaris['harga'], 0, ',', '.'); ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label><i class="bi bi-journal-text"></i> Keterangan</label>
                                        <textarea name="keterangan" rows="4" class="form-control" placeholder="Tambahkan catatan inventaris"><?= $inventaris['keterangan']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href="<?= base_url('inventaris'); ?>" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php echo view('_partials/footer'); ?>
