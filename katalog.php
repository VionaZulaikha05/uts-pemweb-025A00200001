<?php
declare(strict_types=1);
require 'data.php';
require 'functions.php';

$kategoriTerpilih = $_GET['kategori'] ?? 'Semua';
$menuTampil = $menuKantin;

if ($kategoriTerpilih !== 'Semua') {
    $menuTampil = array_filter($menuKantin, function($menu) use ($kategoriTerpilih) {
        return $menu['kategori'] === $kategoriTerpilih;
    });
}

$totalHarga = hitungTotalHarga($menuTampil);
$jumlahMenu = hitungJumlahMenu($menuTampil);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Menu Kantin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Kantin Wareg</h1>
        <nav>
            <ul>
                <li><a href="index.php">Profil</a></li>
                <li><a href="katalog.php">Menu Kantin</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="katalog">
            <h2>Daftar Menu</h2>
            
            <form method="GET" action="katalog.php" style="margin-bottom: 20px;">
                <label for="kategori">Filter Kategori : </label>
                <select name="kategori" id="kategori" onchange="this.form.submit()">
                    <option value="Semua" <?= $kategoriTerpilih === 'Semua' ? 'selected' : ''; ?>>Semua</option>
                    <option value="Makanan" <?= $kategoriTerpilih === 'Makanan' ? 'selected' : ''; ?>>Makanan</option>
                    <option value="Minuman" <?= $kategoriTerpilih === 'Minuman' ? 'selected' : ''; ?>>Minuman</option>
                    <option value="Camilan" <?= $kategoriTerpilih === 'Camilan' ? 'selected' : ''; ?>>Camilan</option>
                </select>
            </form>

            <article class="ringkasan">
                <h3>Ringkasan Kantin</h3>
                <p>Jumlah Varian Menu: <strong><?= $jumlahMenu; ?> Item</strong></p>
                <p>Total Nilai Menu: <strong><?= formatRupiah($totalHarga); ?></strong></p>
            </article>
            
            <div class="grid-menu">
                <?php foreach ($menuTampil as $menu): ?>
                    <img src="<?= e($menu['gambar']); ?>" alt="Foto <?= e($menu['nama']); ?>" class="foto-menu">
                    <article class="kartu-menu">
                        <h3 class="judul-menu"><?= e($menu['nama']); ?></h3>
                        <p>Kategori: <?= e($menu['kategori']); ?></p>
                        <p>Harga: <?= formatRupiah($menu['harga']); ?></p>
                        
                        <p class="status <?= $menu['tersedia'] ? 'teks-hijau' : 'teks-merah'; ?>">
                            Status: <?= cekKetersediaan($menu['tersedia']); ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Kantin Wareg. Proyek UTS Pemrograman Web.</p>
    </footer>
</body>
</html>