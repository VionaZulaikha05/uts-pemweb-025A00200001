<?php
declare(strict_types=1);
require 'data.php';
require 'functions.php';

$totalHarga = hitungTotalHarga($menuKantin);
$jumlahMenu = hitungJumlahMenu($menuKantin);
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
            
            <article class="ringkasan">
                <h3>Ringkasan Kantin</h3>
                <p>Jumlah Varian Menu: <strong><?= $jumlahMenu; ?> Item</strong></p>
                <p>Total Nilai Menu: <strong><?= formatRupiah($totalHarga); ?></strong></p>
            </article>
            
            <div class="grid-menu">
                <?php foreach ($menuKantin as $menu): ?>
                    <article class="kartu-menu">
                        <h4><?= e($menu['nama']); ?></h4>
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