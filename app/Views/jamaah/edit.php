
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-pencil-square fs-2 text-warning"></i>
            <div>
                <h1 class="mb-0">Edit Jamaah</h1>
                <small class="text-muted">Update data jamaah masjid</small>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-people text-primary"></i> Form Edit Jamaah</h5>

                        <form action="<?= base_url('jamaah/update/'.$jamaah['id']); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <!-- FOTO -->
                                <div class="col-md-12 mb-3">
                                    <?php if(!empty($jamaah['foto'])): ?>
                                        <img src="<?= base_url('uploads/jamaah/' . $jamaah['foto']); ?>" class="rounded shadow-sm mb-3" width="120">
                                    <?php endif; ?>
                                    <input type="file" name="foto" class="form-control">
                                </div>

                                <!-- NAMA -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control" value="<?= $jamaah['nama_lengkap']; ?>" required>
                                    </div>
                                </div>

                                <!-- JK -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-select">
                                            <option <?= $jamaah['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?> value="Laki-laki">Laki-laki</option>
                                            <option <?= $jamaah['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?> value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- TEMPAT -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" value="<?= $jamaah['tempat_lahir']; ?>">
                                    </div>
                                </div>

                                <!-- TANGGAL -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" value="<?= $jamaah['tanggal_lahir']; ?>">
                                    </div>
                                </div>

                                <!-- HP -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">No HP</label>
                                        <input type="text" name="no_hp" class="form-control" value="<?= $jamaah['no_hp']; ?>">
                                    </div>
                                </div>

                                <!-- EMAIL -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="<?= $jamaah['email']; ?>">
                                    </div>
                                </div>

                                <!-- JABATAN -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jabatan</label>
                                        <select name="jabatan" class="form-select">
                                            <?php
                                            $jabatanList = [
                                                'Jamaah',
                                                'Imam',
                                                'Khotib',
                                                'Muadzin',
                                                'DKM',
                                                'Marbot',
                                                'Guru Ngaji',
                                                'Remaja Masjid'
                                            ];
                                            ?>
                                            <?php foreach($jabatanList as $jabatan): ?>
                                                <option <?= $jamaah['jabatan'] == $jabatan ? 'selected' : ''; ?> value="<?= $jabatan; ?>"><?= $jabatan; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- STATUS -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-select">
                                            <option <?= $jamaah['status'] == 'Aktif' ? 'selected' : ''; ?> value="Aktif">Aktif</option>
                                            <option <?= $jamaah['status'] == 'Nonaktif' ? 'selected' : ''; ?> value="Nonaktif">Nonaktif</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- ALAMAT -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea name="alamat" rows="4" class="form-control"><?= $jamaah['alamat']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href="<?= base_url('jamaah'); ?>" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Update Data
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
