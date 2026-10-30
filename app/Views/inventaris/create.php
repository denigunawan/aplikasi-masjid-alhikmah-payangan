
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1><i class="bi bi-box-seam"></i> Tambah Inventaris</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('/inventaris') ?>"><i class="bi bi-box-seam"></i> Inventaris</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-plus-circle"></i> Form Tambah Inventaris</h5>

                        <form action="<?= base_url('inventaris/save'); ?>" method="post" class="form-transaksi">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-upc-scan"></i> Kode Barang</label>
                                        <input type="text" name="kode_barang" class="form-control" placeholder="Contoh: INV-001" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-box"></i> Nama Barang</label>
                                        <input type="text" name="nama_barang" class="form-control" placeholder="Contoh: Speaker TOA" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-tags"></i> Kategori</label>
                                        <select name="kategori" class="form-select" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Elektronik">Elektronik</option>
                                            <option value="Perlengkapan Ibadah">Perlengkapan Ibadah</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Kebersihan">Kebersihan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-123"></i> Jumlah</label>
                                        <input type="number" name="jumlah" class="form-control" placeholder="Contoh: 10" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-shield-check"></i> Kondisi</label>
                                        <select name="kondisi" class="form-select" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Rusak Ringan">Rusak Ringan</option>
                                            <option value="Rusak Berat">Rusak Berat</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-geo-alt"></i> Lokasi</label>
                                        <select name="lokasi" class="form-select" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Gudang">Gudang</option>
                                            <option value="Ruang Utama">Ruang Utama</option>
                                            <option value="Kantor DKM">Kantor DKM</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-calendar-event"></i> Tanggal Beli</label>
                                        <input type="date" name="tanggal_beli" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-cash-stack"></i> Harga</label>
                                        <input type="text" id="jumlah" name="harga" class="form-control" placeholder="Contoh: 5.000.000" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-card-text"></i> Keterangan</label>
                                        <textarea name="keterangan" rows="4" class="form-control" placeholder="Tambahkan catatan inventaris"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href="<?= base_url('inventaris'); ?>" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php echo view('_partials/footer'); ?>
