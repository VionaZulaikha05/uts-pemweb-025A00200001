# UTS Pemrograman Web - Katalog Kantin

## 1. Identitas
- **Nama** : Viona Zulaikha Al Khusniah
- **NIM**  : 025A00200001
- **Kelas** : A2-3A

## 2. Deskripsi Singkat Tema
Proyek ini adalah website profil dan katalog dinamis untuk Kantin Wareg. Data disimpan dalam bentuk array multidimensi pada file `data.php` (belum menggunakan database). Tampilan dibuat menggunakan HTML semantik dan CSS murni.

## 3. Cara Menjalankan di Localhost
1. Pastikan aplikasi Laragon sudah terinstall dan berjalan.
2. Karena keterbatasan pada folder `www` bawaan, proyek ini diletakkan di direktori root lain (F:/cod/smt 3/WEB).
3. Menggunakan fitur **Root** agar Laragon mengenali folder proyek tersebut.
4. Setelah server (Apache/PHP) berjalan, akses halaman profil melalui URL yang tertera di Laragon.
5. Halaman katalog dapat diakses dengan mengklik menu navigasi atau membuka `katalog.php`.

## 4. Daftar Fitur dan Nama fungsi
- **Halaman Profil (`index.php`) :** Menampilkan informasi umum dan pengantar tema kantin.
- **Fungsi `formatRupiah()` :** Terdapat di `functions.php`, berfungsi untuk mengubah angka menjadi format rupiah.
- **Fungsi `cekKetersediaan()` :** Terdapat di `functions.php`, menggunakan percabangan `match` untuk memberi label "Tersedia" atau "Habis".
- **Fungsi `hitungTotalHarga()` :** Terdapat di `functions.php`, menghitung total harga dari semua menu didalam array.
- **Fungsi `hitungJumlahMenu()` :** Terdapat di `functions.php`, menghitung jumlah varian menu yang ada.
- **Fungsi `e()` :** Terdapat di `functions.php`, pembungkus `htmlspecialchars` untuk mencegah serangan XSS (Cross-Site Scripting).

## 5. Daftar Fungsi Array Bawaan yang Dipakai
1. `number_format()` -> Digunakan di fungsi `formatRupiah`, memformat angka menjadi format ribuan dengan titik.
2. `array_column()` -> Digunakan di fungsi `hitungTotalHarga`, mengambil semua nilai `harga` dari array multidimensi.
3. `array_sum()` -> Digunakan di fungsi `hitungTotalHarga`, menjumlahkan total semua angka dari hasil `array_column`.
4. `count()` -> Digunakan di fungsi `hitungJumlahMenu`, menghitung jumlah item menu

## 6. Tangkapan Layar 

## 7. Sumber Referensi dan Catatan Penggunaan AI