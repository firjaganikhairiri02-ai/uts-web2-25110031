
<?php
date_default_timezone_set("Asia/Jakarta");

// 1. Array multidimensi data keranjang
$keranjang = [
    [
        "nama" => "Kopi Susu",
        "harga" => 18000,
        "jumlah" => 2
    ],
    [
        "nama" => "Teh Manis",
        "harga" => 8000,
        "jumlah" => 3
    ],
    [
        "nama" => "Roti Bakar",
        "harga" => 15000,
        "jumlah" => 1
    ]
];

// 2. Fungsi menghitung subtotal
function hitungSubtotal(int $harga, int $jumlah): int {
    return $harga * $jumlah;
}

// Fungsi format Rupiah
function formatRupiah(int $angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// 3. Menghitung total belanja
$total = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Belanja</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f4f4f4;
        }

        .container {
            background: white;
            padding: 25px;
            max-width: 800px;
            margin: auto;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background: #d9eaf7;
        }

        .hasil {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="container">

<h2>STRUK BELANJA</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Subtotal</th>
    </tr>

    <?php
    $no = 1;

    // Menampilkan data menggunakan foreach
    foreach ($keranjang as $item) {

        $subtotal = hitungSubtotal(
            $item["harga"],
            $item["jumlah"]
        );

        $total += $subtotal;
    ?>

    <tr>
        <td><?= $no++; ?></td>

        <td>
            <?= htmlspecialchars($item["nama"]); ?>
        </td>

        <td>
            <?= formatRupiah($item["harga"]); ?>
        </td>

        <td><?= $item["jumlah"]; ?></td>

        <td><?= formatRupiah($subtotal); ?></td>
    </tr>

    <?php } ?>

</table>

<?php
// 4. Menghitung diskon
$diskon = 0;

if ($total >= 50000) {
    $diskon = $total * 10 / 100;
}

// Menghitung total bayar
$totalBayar = $total - $diskon;
?>

<div class="hasil">

    <p>
        Total Belanja:
        <b><?= formatRupiah($total); ?></b>
    </p>

    <p>
        Diskon 10%:
        <b><?= formatRupiah($diskon); ?></b>
    </p>

    <h3>
        Total Bayar:
        <?= formatRupiah($totalBayar); ?>
    </h3>

    <p>
        Tanggal:
        <?= date("d-m-Y"); ?>
    </p>

</div>

</div>

</body>
</html>
