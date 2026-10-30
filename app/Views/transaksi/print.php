
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 25px;
        }
        .header h2 {
            margin: 0;
        }
        .header p {
            margin: 3px 0;
            color: #777;
        }
        .summary {
            margin-bottom: 20px;
        }
        .summary table {
            width: 50%;
        }
        .summary td {
            padding: 6px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table thead {
            background: #0d6efd;
            color: white;
        }
        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .text-right {
            text-align: right;
        }
        .footer {
            margin-top: 40px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>LAPORAN KEUANGAN MASJID AL HIKMAH</h2>
        <p>Sistem Informasi Manajemen Masjid</p>
        <p><?= date('d F Y') ?></p>
    </div>

    <?php
        $masuk = array_sum(array_column(array_filter($transaksi, fn($t) => $t['tipe'] == 'masuk'), 'jumlah'));
        $keluar = array_sum(array_column(array_filter($transaksi, fn($t) => $t['tipe'] == 'keluar'), 'jumlah'));
        $saldo = $masuk - $keluar;
    ?>

    <div class="summary">
        <table>
            <tr>
                <td>Total Pemasukan</td>
                <td>: Rp <?= number_format($masuk, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>Total Pengeluaran</td>
                <td>: Rp <?= number_format($keluar, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>Saldo Akhir</td>
                <td>: Rp <?= number_format($saldo, 0, ',', '.') ?></td>
            </tr>
        </table>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Tipe</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($transaksi as $key => $row): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= date('d-m-Y', strtotime($row['tanggal'])) ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td><?= $row['kategori'] ?></td>
                <td class="text-right">Rp <?= number_format($row['jumlah'], 0, ',', '.') ?></td>
                <td><?= ucfirst($row['tipe']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="footer">
        <p>Bendahara Masjid</p>
        <br><br><br>
        <strong>___________________</strong>
    </div>
</body>
</html>
