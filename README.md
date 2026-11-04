# ☕ UTS Praktik Pemrograman WEB II - Struk Kasir Kedai Kopi

**Universitas Minar Indonesia**  
**Mata Kuliah:** Praktik Pemrograman WEB II - Semester III TK Grup D  
**Dosen:** Juni Ismail, S.Kom., M.Kom.  
**Mahasiswa:** Firja Gani Khairiri (25110031)

---

### 📋 Deskripsi Tugas
Membuat halaman web untuk menampilkan struk belanja dan form tambah produk menggunakan PHP Native + XAMPP.

**Data Keranjang:**
- Kopi Susu - Rp 18.000 x 2
- Teh Manis - Rp 8.000 x 3
- Roti Bakar - Rp 15.000 x 1

**Hasil Perhitungan:**
- Total: Rp 75.000
- Diskon 10% (karena >= Rp 50.000): Rp 7.500
- **Total Bayar: Rp 67.500**

### 📁 Struktur File
```
htdocs/uts-web2-NIM/
├── struk.php         -> Bagian A (Tugas 1-4) Tampilkan struk dengan CSS thermal
├── form_produk.php   -> Bagian B (Tugas 5-7) Form POST + validasi + XSS protection
└── README.md         -> Dokumentasi ini
```

### ✅ Poin yang Dikerjakan

**Bagian A - struk.php (55 poin)**
1. [x] Array multidimensi dengan key nama, harga, jumlah
2. [x] Fungsi hitungSubtotal(int $harga, int $jumlah): int
3. [x] Fungsi formatRupiah(int $angka): string -> "Rp 18.000"
4. [x] Foreach untuk tampilkan tabel HTML
5. [x] Total, diskon 10% jika >=50rb, total bayar, date('d-m-Y')

**Bagian B - form_produk.php (35 poin)**
6. [x] Form method POST (nama produk, harga, tombol Simpan)
7. [x] Validasi nama wajib isi & harga angka > 0, error dekat input, old value tetap
8. [x] Pesan berhasil dengan htmlspecialchars() - anti XSS, uji <script>alert('x')</script>

**Bagian C - Git (10 poin)**
9. [x] 2 commit dengan pesan jelas
10. [x] Push ke GitHub

### 🚀 Cara Menjalankan

1. Aktifkan Apache di XAMPP
2. Copy folder ini ke `C:\xampp\htdocs\uts_web2_25110031`
3. Buka browser:
   - http://localhost/uts_web2_25110031/struk.php
   - http://localhost/uts_web2_25110031/form_produk.php

### 🔒 Keamanan
Form sudah menggunakan `htmlspecialchars()` untuk mencegah XSS. Jika menginput `<script>alert('x')</script>` sebagai nama produk, akan tampil sebagai teks aman, bukan menjalankan script.

### 📸 Screenshot
- [ ] Screenshot struk.php menampilkan total Rp 67.500
- [ ] Screenshot form_produk.php validasi error
- [ ] Screenshot form_produk.php setelah input XSS (harus aman)
- [ ] Screenshot git log (2 commit)

### 🔗 Link
- GitHub Repository: https://github.com/USERNAME/uts-web2-NIM
- NIM: 25110031

---
Dibuat untuk UTS Praktik Pemrograman WEB II 2026/2027
