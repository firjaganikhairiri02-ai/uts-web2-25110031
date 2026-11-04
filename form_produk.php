
<?php

// Menyiapkan variabel
$nama = "";
$harga = "";

$errorNama = "";
$errorHarga = "";

$berhasil = false;

// Memeriksa apakah form dikirim menggunakan POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil data dari form
    $nama = trim($_POST["nama"] ?? "");
    $harga = trim($_POST["harga"] ?? "");

    // Validasi nama produk
    if ($nama == "") {
        $errorNama = "Nama produk wajib diisi!";
    }

    // Validasi harga produk
    if ($harga == "") {

        $errorHarga = "Harga wajib diisi!";

    } elseif (!is_numeric($harga) || $harga <= 0) {

        $errorHarga = "Harga harus berupa angka lebih dari 0!";

    }

    // Jika semua input benar
    if ($errorNama == "" && $errorHarga == "") {
        $berhasil = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Produk</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 30px;
        }

        .container {
            background: white;
            width: 400px;
            padding: 25px;
            margin: auto;
            border-radius: 10px;
        }

        input {
            width: 95%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 10px;
        }

        button {
            background: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>

<div class="container">

<h2>FORM INPUT PRODUK</h2>

<form method="POST" action="">

    <label>Nama Produk</label>

    <input
        type="text"
        name="nama"
        placeholder="Masukkan nama produk"
        value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <p class="error">
        <?= htmlspecialchars($errorNama); ?>
    </p>

    <label>Harga Produk</label>

    <input
        type="number"
        name="harga"
        placeholder="Masukkan harga produk"
        min="0.01"
        step="any"
        value="<?= htmlspecialchars($harga, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <p class="error">
        <?= htmlspecialchars($errorHarga); ?>
    </p>

    <button type="submit">Simpan</button>

</form>


<?php if ($berhasil) { ?>

    <h3 class="success">
        Produk <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?>
        berhasil ditambahkan.
    </h3>

    <p>
        Nama Produk:
        <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'); ?>
    </p>

    <p>
        Harga Produk:
        Rp <?= number_format((float)$harga, 0, ',', '.'); ?>
    </p>

<?php } ?>


</div>

</body>
</html>
