
<?php echo view('_partials/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1><i class="bi bi-calendar-event"></i> Tambah Kegiatan Masjid</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/dashboard') ?>"><i class="bi bi-house-door"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/kegiatan') ?>"><i class="bi bi-calendar2-event"></i> Kegiatan</a>
                </li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-plus-circle"></i> Form Tambah Kegiatan</h5>

                        <form action="<?= base_url('kegiatan/save'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <!-- NAMA KEGIATAN -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-card-heading"></i> Nama Kegiatan</label>
                                        <input type="text" name="judul" class="form-control" placeholder="Contoh: Kajian Subuh" required>
                                    </div>
                                </div>

                                <!-- KATEGORI -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-tags"></i> Kategori</label>
                                        <select name="kategori" class="form-select" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            <option value="Kajian">Kajian</option>
                                            <option value="Pengajian">Pengajian</option>
                                            <option value="Sosial">Sosial</option>
                                            <option value="Remaja Masjid">Remaja Masjid</option>
                                            <option value="PHBI">PHBI</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- TANGGAL -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-calendar-event"></i> Tanggal Kegiatan</label>
                                        <input type="date" name="tanggal_kegiatan" class="form-control" required>
                                    </div>
                                </div>

                                <!-- JAM -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-clock"></i> Jam Kegiatan</label>
                                        <input type="time" name="jam_kegiatan" class="form-control" required>
                                    </div>
                                </div>

                                <!-- TEMPAT -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-geo-alt"></i> Tempat</label>
                                        <input type="text" name="lokasi" class="form-control" placeholder="Contoh: Aula Masjid" required>
                                    </div>
                                </div>

                                <!-- PEMBICARA -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-person"></i> Pembicara / Ustadz</label>
                                        <input type="text" name="pembicara" class="form-control" placeholder="Contoh: Ustadz Ahmad" required>
                                    </div>
                                </div>

                                <!-- STATUS -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-check-circle"></i> Status Kegiatan</label>
                                        <select name="status" class="form-select" required>
                                            <option value="">-- Pilih Status --</option>
                                            <option value="Akan Datang">Akan Datang</option>
                                            <option value="Berlangsung">Berlangsung</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- PESERTA -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-people"></i> Target Peserta</label>
                                        <input type="number" name="peserta" class="form-control" placeholder="Contoh: 100">
                                    </div>
                                </div>

                                <!-- PENANGGUNG JAWAB -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-card-text"></i> Penanggung Jawab Acara</label>
                                        <input type="string" name="penanggung_jawab" class="form-control" placeholder="Contoh: Arifin Akmal">
                                    </div>
                                </div>

                                <!-- GAMBAR -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-image"></i> Upload Gambar Kegiatan</label>
                                        <input type="file" name="gambar" class="form-control" accept="image/*">
                                        <small class="text-muted">Format: JPG, PNG, JPEG</small>
                                    </div>
                                </div>

                                <!-- DESKRIPSI -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-card-text"></i> Deskripsi Kegiatan</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Masukkan deskripsi kegiatan"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <a href="<?= base_url('kegiatan'); ?>" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
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
