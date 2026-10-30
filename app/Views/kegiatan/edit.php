
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-pencil-square fs-2 text-warning"></i>
            <div>
                <h1 class="mb-0">Edit Kegiatan Masjid</h1>
                <small class="text-muted">Update data kegiatan masjid</small>
            </div>
        </div>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('/kegiatan') ?>">Kegiatan</a></li>
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
                            <i class="bi bi-calendar-event text-primary"></i> Form Edit Kegiatan
                        </h5>

                        <form action="<?= base_url('kegiatan/update/'.$kegiatan['id']); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $kegiatan['id']; ?>">

                            <div class="row">
                                <!-- NAMA KEGIATAN -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-card-heading"></i> Nama Kegiatan</label>
                                        <input type="text" name="judul" class="form-control" placeholder="Contoh: Kajian Subuh" value="<?= $kegiatan['judul']; ?>" required>
                                    </div>
                                </div>

                                <!-- KATEGORI -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-tags"></i> Kategori</label>
                                        <select name="kategori" class="form-select" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <option <?= $kegiatan['kategori'] == 'Kajian' ? 'selected' : ''; ?> value="Kajian">Kajian</option>
                                            <option <?= $kegiatan['kategori'] == 'Pengajian' ? 'selected' : ''; ?> value="Pengajian">Pengajian</option>
                                            <option <?= $kegiatan['kategori'] == 'Sosial' ? 'selected' : ''; ?> value="Sosial">Sosial</option>
                                            <option <?= $kegiatan['kategori'] == 'Remaja Masjid' ? 'selected' : ''; ?> value="Remaja Masjid">Remaja Masjid</option>
                                            <option <?= $kegiatan['kategori'] == 'PHBI' ? 'selected' : ''; ?> value="PHBI">PHBI</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- TANGGAL -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-calendar-event"></i> Tanggal Kegiatan</label>
                                        <input type="date" name="tanggal_kegiatan" class="form-control" value="<?= $kegiatan['tanggal_kegiatan']; ?>" required>
                                    </div>
                                </div>

                                <!-- JAM -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-clock"></i> Jam Kegiatan</label>
                                        <input type="time" name="jam_kegiatan" class="form-control" value="<?= $kegiatan['jam_kegiatan']; ?>" required>
                                    </div>
                                </div>

                                <!-- TEMPAT -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-geo-alt"></i> Tempat</label>
                                        <input type="text" name="lokasi" class="form-control" placeholder="Contoh: Aula Masjid" value="<?= $kegiatan['lokasi']; ?>" required>
                                    </div>
                                </div>

                                <!-- PEMBICARA -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-person"></i> Pembicara / Ustadz</label>
                                        <input type="text" name="pembicara" class="form-control" placeholder="Contoh: Ustadz Ahmad" value="<?= $kegiatan['pembicara']; ?>" required>
                                    </div>
                                </div>

                                <!-- STATUS -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-check-circle"></i> Status Kegiatan</label>
                                        <select name="status" class="form-select" required>
                                            <option value="">-- Pilih Status --</option>
                                            <option <?= $kegiatan['status'] == 'Akan Datang' ? 'selected' : ''; ?> value="Akan Datang">Akan Datang</option>
                                            <option <?= $kegiatan['status'] == 'Berlangsung' ? 'selected' : ''; ?> value="Berlangsung">Berlangsung</option>
                                            <option <?= $kegiatan['status'] == 'Selesai' ? 'selected' : ''; ?> value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- TARGET PESERTA -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-people"></i> Target Peserta</label>
                                        <input type="number" name="peserta" class="form-control" placeholder="Contoh: 100" value="<?= $kegiatan['peserta']; ?>">
                                    </div>
                                </div>

                                <!-- PENANGGUNG JAWAB -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-person-badge"></i> Penanggung Jawab Acara</label>
                                        <input type="text" name="penanggung_jawab" class="form-control" placeholder="Contoh: Arifin Akmal" value="<?= $kegiatan['penanggung_jawab']; ?>">
                                    </div>
                                </div>

                                <!-- GAMBAR -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-image"></i> Upload Gambar</label>
                                        <input type="file" name="gambar" class="form-control" accept="image/*">
                                    </div>
                                </div>

                                <!-- PREVIEW GAMBAR -->
                                <?php if(!empty($kegiatan['gambar'])): ?>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Gambar Saat Ini</label>
                                            <div>
                                                <img src="<?= base_url('uploads/kegiatan/' . $kegiatan['gambar']); ?>" alt="<?= $kegiatan['judul']; ?>" class="rounded shadow-sm border" style="width:200px;height:150px;object-fit:cover;">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- DESKRIPSI -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-journal-text"></i> Deskripsi Kegiatan</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Masukkan deskripsi kegiatan"><?= $kegiatan['deskripsi']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href="<?= base_url('kegiatan'); ?>" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
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
