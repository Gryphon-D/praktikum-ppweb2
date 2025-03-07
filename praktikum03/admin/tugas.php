<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pembeli = $_POST['pembeli'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    // Define produk harga
    $harga = [
        "TV" => 4200000,
        "KULKAS" => 3100000,
        "MESIN CUCI" => 3800000
    ];

    $total_price = $harga[$produk] * $jumlah;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">Belanja Online</div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label class="form-label">pembeli</label>
                                <input type="text" name="pembeli" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Produk</label><br>
                                <input type="radio" name="produk" value="TV" required> TV
                                <input type="radio" name="produk" value="KULKAS" required> Kulkas
                                <input type="radio" name="produk" value="MESIN CUCI" required> Mesin Cuci
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Kirim</button>
                        </form>
                    </div>
                </div>
                
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <div class="mt-3 p-3 border rounded">
                    <p>Nama pembeli: <strong><?= htmlspecialchars($pembeli) ?></strong></p>
                    <p>Produk Pilihan: <strong><?= htmlspecialchars($produk) ?></strong></p>
                    <p>Jumlah Beli: <strong><?= htmlspecialchars($jumlah) ?></strong></p>
                    <p>Total Belanja: <strong>Rp. <?= number_format($total_price, 0, ',', '.') ?></strong></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-info text-white">Daftar Harga</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : Rp 4.200.000</li>
                        <li class="list-group-item">Kulkas : Rp 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci : Rp 3.800.000</li>
                    </ul>
                    <div class="card-footer text-center bg-info text-white">HARGA SEMAUNYA</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
