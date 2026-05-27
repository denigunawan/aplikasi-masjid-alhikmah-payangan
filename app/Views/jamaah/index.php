<?php echo view('_partials/header'); ?>

<main id="main" class="main">

    <div class="pagetitle">

        <h1>

            <i class="bi bi-people"></i>
            Data Jamaah

        </h1>

        <nav>

            <ol class="breadcrumb">

                <li class="breadcrumb-item">

                    <a href="<?= base_url('/dashboard'); ?>">

                        <i class="bi bi-house-door"></i>
                        Dashboard

                    </a>

                </li>

                <li class="breadcrumb-item active">

                    Jamaah

                </li>

            </ol>

        </nav>

    </div>

    <section class="section dashboard">

        <div class="row">

            <div class="col-12">

                <div class="card shadow-sm border-0">

                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h5 class="card-title mb-0">

                            <i class="bi bi-table"></i>
                            Data Jamaah Masjid

                        </h5>

                        <a href="<?= base_url('jamaah/create'); ?>"
                            class="btn btn-success btn-sm">

                            <i class="bi bi-plus-circle"></i>
                            Tambah Jamaah

                        </a>

                    </div>

                    <div class="card-body">

                        <!-- STATISTIK -->
                        <div class="row mt-4 mb-4 g-3">

                            <!-- TOTAL -->
                            <div class="col-md-3">

                                <div class="card bg-primary text-white shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Total Jamaah
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count($jamaah); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-people fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- AKTIF -->
                            <div class="col-md-3">

                                <div class="card bg-success text-white shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Aktif
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count(array_filter($jamaah, fn($j) => $j['status'] == 'Aktif')); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-check-circle fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- IMAM -->
                            <div class="col-md-3">

                                <div class="card bg-warning text-dark shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Imam
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count(array_filter($jamaah, fn($j) => $j['jabatan'] == 'Imam')); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-person-badge fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- DKM -->
                            <div class="col-md-3">

                                <div class="card bg-info text-dark shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    DKM
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count(array_filter($jamaah, fn($j) => $j['jabatan'] == 'DKM')); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-person-workspace fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- TABLE -->
                        <div class="table-responsive">

                            <table class="table table-hover table-bordered align-middle datatable">

                                <thead class="table-light">

                                    <tr>

                                        <th width="60">No</th>
                                        <th width="100">Foto</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>TTL</th>
                                        <th>No HP</th>
                                        <th>Email</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th width="120">Aksi</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php foreach($jamaah as $key => $row): ?>

                                    <tr>

                                        <td>
                                            <?= $key + 1 ?>
                                        </td>

                                        <!-- FOTO -->
                                        <td>

                                            <?php if(!empty($row['foto'])): ?>

                                            <img src="<?= base_url('uploads/jamaah/' . $row['foto']); ?>"
                                                class="rounded shadow-sm"
                                                style="width:80px;height:80px;object-fit:cover;">

                                            <?php else: ?>

                                            <div class="bg-light border rounded d-flex align-items-center justify-content-center"
                                                style="width:80px;height:80px;">

                                                <i class="bi bi-person fs-3 text-secondary"></i>

                                            </div>

                                            <?php endif; ?>

                                        </td>

                                        <!-- NAMA -->
                                        <td>

                                            <strong>
                                                <?= $row['nama_lengkap']; ?>
                                            </strong>

                                            <br>

                                            <small class="text-muted">
                                                <?= $row['alamat']; ?>
                                            </small>

                                        </td>

                                        <!-- JK -->
                                        <td>

                                            <span class="badge bg-secondary">

                                                <?= $row['jenis_kelamin']; ?>

                                            </span>

                                        </td>

                                        <!-- TTL -->
                                        <td>

                                            <?= $row['tempat_lahir']; ?>,

                                            <br>

                                            <?= date('d M Y', strtotime($row['tanggal_lahir'])); ?>

                                        </td>

                                        <!-- HP -->
                                        <td>

                                            <i class="bi bi-telephone"></i>

                                            <?= $row['no_hp']; ?>

                                        </td>

                                        <!-- EMAIL -->
                                        <td>

                                            <?= $row['email']; ?>

                                        </td>

                                        <!-- JABATAN -->
                                        <td>

                                            <span class="badge bg-info text-dark">

                                                <?= $row['jabatan']; ?>

                                            </span>

                                        </td>

                                        <!-- STATUS -->
                                        <td>

                                            <?php if($row['status'] == 'Aktif'): ?>

                                            <span class="badge bg-success">

                                                <i class="bi bi-check-circle"></i>
                                                Aktif

                                            </span>

                                            <?php else: ?>

                                            <span class="badge bg-danger">

                                                <i class="bi bi-x-circle"></i>
                                                Nonaktif

                                            </span>

                                            <?php endif; ?>

                                        </td>

                                        <!-- AKSI -->
                                        <td>

                                            <div class="d-flex gap-1">

                                                <a href="<?= base_url('jamaah/edit/'.$row['id']); ?>"
                                                    class="btn btn-warning btn-sm">

                                                    <i class="bi bi-pencil-square"></i>

                                                </a>

                                                <a href="#"
                                                    class="btn btn-danger btn-sm btn-delete"
                                                    data-url="<?= base_url('jamaah/delete/'.$row['id']); ?>">

                                                    <i class="bi bi-trash"></i>

                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                    <?php endforeach; ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php echo view('_partials/footer'); ?>