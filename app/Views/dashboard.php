<?php echo view('_partials/header'); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          <!-- Saldo Kas -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card">

              <div class="card-body">
                <h5 class="card-title">Saldo Kas <span>| Hari Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-success text-white">
                    <i class="bi bi-cash"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Rp 12.500.000</h6>
                    <span class="text-success small pt-1 fw-bold">+12%</span>
                    <span class="text-muted small pt-2 ps-1">dari kemarin</span>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-md-6">
            <div class="card info-card">
              <div class="card-body">
                <h5 class="card-title">Jamaah <span>| Total</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-primary text-white">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>350</h6>
                    <span class="text-muted small">Terdaftar</span>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-xxl-4 col-md-6">
            <div class="card info-card">
              <div class="card-body">
                <h5 class="card-title">Transaksi <span>| Bulan Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-warning text-white">
                    <i class="bi bi-wallet"></i>
                  </div>
                  <div class="ps-3">
                    <h6>120</h6>
                    <span class="text-muted small">Pemasukan & Pengeluaran</span>
                  </div>
                </div>

              </div>
            </div>
          </div>
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Transaksi Terbaru <span>| Hari Ini</span></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                       <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Tipe</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>06-05-2026</td>
                          <td>Infaq Jumat</td>
                          <td>Rp 500.000</td>
                          <td><span class="badge bg-success">Masuk</span></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>06-05-2026</td>
                          <td>Perbaikan AC</td>
                          <td>Rp 300.000</td>
                          <td><span class="badge bg-danger">Keluar</span></td>
                        </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Donasi Berdasarkan Kategori</h5>

                      <div id="donasiChart"></div>

                      <script>
                        document.addEventListener("DOMContentLoaded", () => {
                          new ApexCharts(document.querySelector("#donasiChart"), {
                            series: [44, 55, 13, 43],
                            chart: {
                              type: 'pie',
                              height: 300
                            },
                            labels: ['Infaq', 'Zakat', 'Sedekah', 'Wakaf']
                          }).render();
                        });
                      </script>

                    </div>
                  </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kegiatan Masjid <span>| Hari Ini</span></h5>
              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">12:00</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                   Sholat Jumat berjamaah
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">16:00</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Kajian Sore bersama Ustadz Arifin
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">19:30</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Pengajian Malam bersama Ustadzah Siti
                  </div>
                </div><!-- End activity item-->


              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Tren Keuangan Sholat Jumat -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                <li><a class="dropdown-item" href="#">3 Bulan</a></li>
                <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Tren Keuangan Sholat Jumat <span>| Bulanan</span></h5>

              <div id="jumatChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#jumatChart"), {
                    series: [
                      {
                        name: 'Pemasukan',
                        data: [500000, 650000, 700000, 800000]
                      },
                      {
                        name: 'Pengeluaran',
                        data: [200000, 250000, 300000, 280000]
                      }
                    ],
                    chart: {
                      type: 'line',
                      height: 300
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 3
                    },
                    xaxis: {
                      categories: ['Jumat 1', 'Jumat 2', 'Jumat 3', 'Jumat 4']
                    },
                    tooltip: {
                      y: {
                        formatter: function (val) {
                          return "Rp " + val.toLocaleString();
                        }
                      }
                    }
                  }).render();
                });
              </script>
            </div>
          </div>
          <!-- End Tren Jumat -->


          <!-- Sumber Donasi -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Sumber Donasi <span>| Hari Ini</span></h5>

              <div id="trafficChart" style="min-height: 400px;"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Donasi',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      data: [
                        { value: 5000000, name: 'Kotak Amal' },
                        { value: 3000000, name: 'Transfer Bank' },
                        { value: 2000000, name: 'QRIS' },
                        { value: 1000000, name: 'Kajian/Event' }
                      ]
                    }]
                  });
                });
              </script>
            </div>
          </div>
          <!-- End Sumber Donasi -->
          
          ><!-- End Website Traffic -->
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
  <?php echo view('_partials/footer'); ?>