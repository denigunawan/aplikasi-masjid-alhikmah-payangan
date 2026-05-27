<?php echo view('_partials/header'); ?>

<main id="main" class="main">

    <div class="pagetitle">

        <div class="d-flex align-items-center gap-2">

            <i class="bi bi-pencil-square fs-2 text-warning"></i>

            <div>

                <h1 class="mb-0">
                    Edit Pengumuman
                </h1>

                <small class="text-muted">
                    Update data pengumuman masjid
                </small>

            </div>

        </div>

    </div>

    <section class="section">

        <div class="row">

            <div class="col-lg-12">

                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <h5 class="card-title">

                            <i class="bi bi-megaphone text-primary"></i>
                            Form Edit Pengumuman

                        </h5>

                        <form action="<?= base_url('pengumuman/update/'.$pengumuman['id']); ?>"
                            method="post"
                            enctype="multipart/form-data">

                            <div class="row">

                                <!-- JUDUL -->
                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label class="form-label">

                                            Judul Pengumuman

                                        </label>

                                        <input type="text"
                                            name="judul"
                                            class="form-control"
                                            value="<?= $pengumuman['judul']; ?>"
                                            required>

                                    </div>

                                </div>

                                <!-- KATEGORI -->
                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label class="form-label">

                                            Kategori

                                        </label>

                                        <select name="kategori"
                                            class="form-select"
                                            required>

                                            <option <?= $pengumuman['kategori'] == 'Informasi' ? 'selected' : ''; ?>
                                                value="Informasi">
                                                Informasi
                                            </option>

                                            <option <?= $pengumuman['kategori'] == 'Kegiatan' ? 'selected' : ''; ?>
                                                value="Kegiatan">
                                                Kegiatan
                                            </option>

                                            <option <?= $pengumuman['kategori'] == 'Donasi' ? 'selected' : ''; ?>
                                                value="Donasi">
                                                Donasi
                                            </option>

                                            <option <?= $pengumuman['kategori'] == 'Penting' ? 'selected' : ''; ?>
                                                value="Penting">
                                                Penting
                                            </option>

                                        </select>

                                    </div>

                                </div>

                                <!-- TANGGAL -->
                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label class="form-label">

                                            Tanggal Pengumuman

                                        </label>

                                        <input type="date"
                                            name="tanggal_pengumuman"
                                            class="form-control"
                                            value="<?= $pengumuman['tanggal_pengumuman']; ?>"
                                            required>

                                    </div>

                                </div>

                                <!-- STATUS -->
                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label class="form-label">

                                            Status

                                        </label>

                                        <select name="status"
                                            class="form-select"
                                            required>

                                            <option <?= $pengumuman['status'] == 'publish' ? 'selected' : ''; ?>
                                                value="publish">
                                                Publish
                                            </option>

                                            <option <?= $pengumuman['status'] == 'draft' ? 'selected' : ''; ?>
                                                value="draft">
                                                Draft
                                            </option>

                                        </select>

                                    </div>

                                </div>

                                <!-- GAMBAR -->
                                <div class="col-md-12">

                                    <div class="mb-3">

                                        <label class="form-label">

                                            Upload Gambar

                                        </label>

                                        <input type="file"
                                            name="gambar"
                                            class="form-control"
                                            accept="image/*">

                                    </div>

                                </div>

                                <!-- PREVIEW -->
                                <?php if(!empty($pengumuman['gambar'])): ?>

                                <div class="col-md-12 mb-3">

                                    <img src="<?= base_url('uploads/pengumuman/' . $pengumuman['gambar']); ?>"
                                        class="rounded shadow-sm"
                                        width="150">

                                </div>

                                <?php endif; ?>

                                <!-- DESKRIPSI -->
                                <div class="col-md-12">

                                    <div class="mb-3">

                                        <label class="form-label">

                                            ISI PENGUMUMAN

                                        </label>

                                        <textarea name="isi_pengumuman"
                                            rows="5"
                                            class="form-control"><?= $pengumuman['isi_pengumuman']; ?></textarea>

                                    </div>

                                </div>

                            </div>

                            <div class="text-end">

                                <a href="<?= base_url('pengumuman'); ?>"
                                    class="btn btn-secondary">

                                    Kembali

                                </a>

                                <button type="submit"
                                    class="btn btn-primary">

                                    <i class="bi bi-save"></i>
                                    Update Data

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