<?php echo view('_partials/header'); ?>

<main id="main" class="main">

    <div class="pagetitle">

        <h1>
            <i class="bi bi-plus-circle"></i>
            Tambah Pengumuman
        </h1>

    </div>

    <section class="section">

        <div class="row">

            <div class="col-lg-12">

                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <h5 class="card-title">

                            <i class="bi bi-megaphone"></i>
                            Form Tambah Pengumuman

                        </h5>

                        <form action="<?= base_url('pengumuman/save'); ?>"
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
                                            placeholder="Contoh: Libur Kajian Jumat"
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

                                            <option value="">
                                                -- Pilih --
                                            </option>

                                            <option value="Informasi">
                                                Informasi
                                            </option>

                                            <option value="Kegiatan">
                                                Kegiatan
                                            </option>

                                            <option value="Donasi">
                                                Donasi
                                            </option>

                                            <option value="Penting">
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

                                            <option value="publish">
                                                Publish
                                            </option>

                                            <option value="draft">
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

                                <!-- DESKRIPSI -->
                                <div class="col-md-12">

                                    <div class="mb-3">

                                        <label class="form-label">

                                            Deskripsi

                                        </label>

                                        <textarea name="isi_pengumuman"
                                            rows="5"
                                            class="form-control"
                                            placeholder="Masukkan isi pengumuman"></textarea>

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
                                    Simpan

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