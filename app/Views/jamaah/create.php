
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1><i class="bi bi-person-plus"></i> Tambah Jamaah</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-people"></i> Form Tambah Jamaah</h5>

                        <form action="<?= base_url('jamaah/save'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <!-- FOTO -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Upload Foto</label>
                                        <input type="file" name="foto" class="form-control" accept="image/*">
                                    </div>
                                </div>

                                <!-- NAMA -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control" required>
                                    </div>
                                </div>

                                <!-- JK -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-select" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- TEMPAT -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" required>
                                    </div>
                                </div>

                                <!-- TANGGAL -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" required>
                                    </div>
                                </div>

                                <!-- HP -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">No HP</label>
                                        <input type="text" name="no_hp" class="form-control">
                                    </div>
                                </div>

                                <!-- EMAIL -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <!-- JABATAN -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jabatan</label>
                                        <select name="jabatan" class="form-select" required>
                                            <option value="Jamaah">Jamaah</option>
                                            <option value="Imam">Imam</option>
                                            <option value="Khotib">Khotib</option>
                                            <option value="Muadzin">Muadzin</option>
                                            <option value="DKM">DKM</option>
                                            <option value="Marbot">Marbot</option>
                                            <option value="Guru Ngaji">Guru Ngaji</option>
                                            <option value="Remaja Masjid">Remaja Masjid</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- STATUS -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-select" required>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Nonaktif">Nonaktif</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- ALAMAT -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea name="alamat" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href="<?= base_url('jamaah'); ?>" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php echo view('_partials/footer'); ?>
