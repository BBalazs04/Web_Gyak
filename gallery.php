<?php
session_start();

// Adatbázis kapcsolat
try {
    $db = new PDO('mysql:host=mysql.omega:3306;port=3306;dbname=modernizalt', 'modernizalt', '12345678');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Adatbázis hiba: " . $e->getMessage());
}

// Képfeltöltés kezelése
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload'])) {
    if (!isset($_SESSION['username'])) {
        die("Csak bejelentkezett felhasználók tölthetnek fel képeket!");
    }

    $leiras = $_POST['leiras'] ?? '';
    $kep = $_FILES['kep'] ?? null;

    // Validáció
    if (!$kep || $kep['error'] !== UPLOAD_ERR_OK) {
        die("Feltöltési hiba történt!");
    }

    $megengedett_tipusok = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($kep['type'], $megengedett_tipusok)) {
        die("Csak JPG, PNG és GIF formátumú képek engedélyezettek!");
    }

    $max_meret = 5 * 1024 * 1024; // 5MB
    if ($kep['size'] > $max_meret) {
        die("A kép mérete nem haladhatja meg az 5MB-ot!");
    }

    // Ellenőrizzük, hogy létezik-e a kepek mappa
    if (!file_exists('kepek') || !is_dir('kepek')) {
        if (!mkdir('kepek', 0755)) {
            die("Nem sikerült létrehozni a képek mappát!");
        }
    }

    // Ellenőrizzük az írási jogosultságot
    if (!is_writable('kepek')) {
        die("A 'kepek' mappa nem írható!");
    }

    // Egyedi név generálás
    $kiterjesztes = pathinfo($kep['name'], PATHINFO_EXTENSION);
    $uj_nev = uniqid('kep_', true) . '.' . $kiterjesztes;
    $cel_ut = 'kepek/' . $uj_nev;

    if (!move_uploaded_file($kep['tmp_name'], $cel_ut)) {
        die("A kép mentése sikertelen!");
    }

    // Adatbázisba mentés
    try {
        $stmt = $db->prepare("INSERT INTO galeria (kep_neve, leiras, meret, feltoltve) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$uj_nev, $leiras, $kep['size']]);
        header("Location: gallery.php");
        exit();
    } catch(PDOException $e) {
        unlink($cel_ut); // Sikertelen feltöltés esetén törlés
        die("Adatbázis hiba: " . $e->getMessage());
    }
}

// Képtörlés kezelése
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    if (!isset($_SESSION['username'])) {
        die("Csak bejelentkezett felhasználók törölhetnek képeket!");
    }

    $kep_neve = $_POST['kep_neve'] ?? '';
    
    if (empty($kep_neve)) {
        die("Hiányzó képnév!");
    }

    // Ellenőrizzük, hogy a kép létezik-e az adatbázisban
    try {
        $stmt = $db->prepare("SELECT * FROM galeria WHERE kep_neve = ?");
        $stmt->execute([$kep_neve]);
        $kep = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$kep) {
            die("A kép nem található az adatbázisban!");
        }

        // Töröljük a képet a szerverről
        $kep_ut = 'kepek/' . $kep_neve;
        if (file_exists($kep_ut)) {
            if (!unlink($kep_ut)) {
                die("A kép törlése a szerverről sikertelen!");
            }
        }

        // Töröljük a rekordot az adatbázisból
        $stmt = $db->prepare("DELETE FROM galeria WHERE kep_neve = ?");
        $stmt->execute([$kep_neve]);

        header("Location: gallery.php");
        exit();
    } catch(PDOException $e) {
        die("Adatbázis hiba: " . $e->getMessage());
    }
}

// Képek lekérése az adatbázisból
try {
    $query = $db->query("SELECT * FROM galeria ORDER BY feltoltve DESC");
    $kepek = $query->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Hiba a képek lekérdezésekor: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galéria | Kés Portál</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Galéria specifikus stílusok */
        .header {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            padding: 20px;
            margin: 0 auto;
            max-width: 1400px;
        }
        
        .gallery-item {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #ddd;
            position: relative;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        
        .gallery-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
            border-bottom: 1px solid #eee;
        }
        
        .gallery-info {
            padding: 15px;
        }
        
        .gallery-title {
            margin: 0 0 10px 0;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
        
        .gallery-meta {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            color: #666;
        }
        
        .no-images {
            text-align: center;
            grid-column: 1 / -1;
            padding: 40px;
            color: #666;
            font-size: 18px;
        }
        
        /* Reszponzív beállítások */
        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 15px;
                padding: 10px;
            }
        }
        
        @media (max-width: 480px) {
            .gallery {
                grid-template-columns: 1fr;
            }
        }
        
        /* Lightbox stílusok */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            text-align: center;
        }
        
        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            margin: 5% auto;
        }
        
        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .lightbox-caption {
            color: #fff;
            padding: 10px;
            font-size: 18px;
        }
        
        /* Új feltöltő űrlap stílusai */
        .upload-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    
        .upload-form h2 {
            margin-top: 0;
            color: #333;
        }
    
        .form-group {
            margin-bottom: 15px;
        }
    
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }
    
        .form-group input[type="file"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    
        .form-group textarea {
            height: 80px;
            resize: vertical;
        }
    
        .btn-upload {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }
    
        .btn-upload:hover {
            background-color: #218838;
        }
        
        /* Törlés gomb stílusai */
        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 14px;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }
        
        .gallery-item:hover .delete-btn {
            display: flex;
        }
        
        .delete-btn:hover {
            background-color: #c82333;
        }
        
        /* Törlés megerősítő modal */
        .delete-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 10000;
            justify-content: center;
            align-items: center;
        }
        
        .delete-modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            width: 90%;
            text-align: center;
        }
        
        .delete-modal-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .delete-confirm-btn {
            background-color: #dc3545;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .delete-cancel-btn {
            background-color: #6c757d;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="left">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="welcome">
                    👋 <?= htmlspecialchars('Bejelentkezett: ' . $_SESSION['Vezeteknev'] . ' ' . $_SESSION['Keresztnev'] . ' (' . $_SESSION['username'] . ')') ?>
                </span>
                <a href="logout.php" class="btn">Kilépés</a>
            <?php else: ?>
                <a href="register.php" class="btn">Regisztráció</a>
                <a href="login.php" class="btn">Bejelentkezés</a>
            <?php endif; ?>
        </div>
        
        <div class="right">
            <div class="hamburger" onclick="toggleMenu()">☰</div>
            <div class="dropdown-menu" id="dropdownMenu">
                <ul>
                    <li><a href="index.php">Főoldal</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="gallery.php" class="active">Galéria</a></li>
                    
                    <li class="menu-item-has-children">
                        <a href="#">Írások</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Kések</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Fixpengés</a>
                                        <ul class="sub-menu">
                                            <li><a href="boker.php">Böker</a></li>
                                            <li><a href="mora.php">Mora</a></li>
                                            <li><a href="ruike.php">Ruike</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Folder</a>
                                        <ul class="sub-menu">
                                            <li><a href="benchmade.php">Benchmade</a></li>
                                            <li><a href="bestech.php">Bestech</a></li>
                                            <li><a href="boker2.php">Böker</a></li>
                                            <li><a href="coldsteel.php">Cold Steel</a></li>
                                            <li><a href="enlan.php">Enlan</a></li>
                                            <li><a href="ganzo2.php">Ganzo</a></li>
                                            <li><a href="kershaw.php">Kershaw</a></li>
                                            <li><a href="kizer.php">Kizer</a></li>
                                            <li><a href="lansky.php">Lansky</a></li>
                                            <li><a href="mkm.php">MKM</a></li>
                                            <li><a href="opinel.php">Opinel</a></li>
                                            <li><a href="realsteel.php">Real Steel</a></li>
                                            <li><a href="ruike2.php">Ruike</a></li>
                                            <li><a href="sanrenmu.php">Sanrenmu</a></li>
                                            <li><a href="spyderco.php">Spyderco</a></li>
                                            <li><a href="steelwill.php">Steel Will</a></li>
                                            <li><a href="ystart.php">Y-start</a></li>
                                            <li><a href="viper.php">Viper</a></li>
                                            <li><a href="zerotolerance.php">Zero Tolerance</a></li>
                                            <li><a href="zsolt.php">Zsolt</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Multitool</a>
                                <ul class="sub-menu">
                                    <li><a href="ganzo.php">Ganzo Multi</a></li>
                                    <li><a href="leatherman.php">Leatherman</a></li>
                                </ul>
                            </li>
                            <li><a href="novella.php">Novella</a></li>
                            <li><a href="egyeb.php">Egyéb</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="tamogatas.php">Támogatás</a></li>
                    
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="menu-item-has-children">
                            <a href="profile.php">Profil</a>
                            <ul class="sub-menu">
                                <li><a href="settings.php">Beállítások</a></li>
                                <li><a href="level.php">Üzenetek</a></li>
                                <li><a href="activity.php">Tevékenység</a></li>
                                <li><a href="uzenetek.php">Elküldött</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>

    <div class="header">
        <h1>Galéria</h1>
        <p>Az oldalon feltöltött képek gyűjteménye</p>
    </div>

    <!-- Feltöltő űrlap -->
    <?php if (isset($_SESSION['username'])): ?>
        <form class="upload-form" action="gallery.php" method="post" enctype="multipart/form-data">
            <h2>Kép feltöltése</h2>
            <div class="form-group">
                <label for="kep">Kép kiválasztása (max 5MB):</label>
                <input type="file" name="kep" id="kep" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="leiras">Leírás (opcionális):</label>
                <textarea name="leiras" id="leiras"></textarea>
            </div>
            <button type="submit" name="upload" class="btn-upload">Feltöltés</button>
        </form>
    <?php endif; ?>

    <div class="gallery">
        <?php if (empty($kepek)): ?>
            <div class="no-images">
                <p>Jelenleg nincsenek képek a galériában.</p>
                <?php if (isset($_SESSION['username'])): ?>
                    <a href="gallery.php" class="btn">Frissítés</a>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <?php foreach ($kepek as $kep): ?>
                <div class="gallery-item" onclick="openLightbox('<?= htmlspecialchars($kep['kep_neve']) ?>', '<?= htmlspecialchars($kep['leiras']) ?>')">
                    <?php if (isset($_SESSION['username'])): ?>
                        <button class="delete-btn" onclick="event.stopPropagation(); confirmDelete('<?= htmlspecialchars($kep['kep_neve']) ?>')">×</button>
                    <?php endif; ?>
                    <img src="kepek/<?= htmlspecialchars($kep['kep_neve']) ?>" 
                         alt="<?= htmlspecialchars($kep['leiras']) ?>" 
                         class="gallery-image">
                    <div class="gallery-info">
                        <h3 class="gallery-title">
                            <?= !empty($kep['leiras']) ? htmlspecialchars($kep['leiras']) : '' ?>
                        </h3>
                        <div class="gallery-meta">
                            <span><?= round($kep['meret'] / 1024, 1) ?> KB</span>
                            <span><?= date('Y.m.d.', strtotime($kep['feltoltve'])) ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Lightbox -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" class="lightbox-content">
        <div id="lightbox-caption" class="lightbox-caption"></div>
    </div>

    <!-- Törlés megerősítő modal -->
    <div id="deleteModal" class="delete-modal">
        <div class="delete-modal-content">
            <p>Biztosan törölni szeretnéd ezt a képet?</p>
            <div class="delete-modal-buttons">
                <form id="deleteForm" method="post" style="display: inline;">
                    <input type="hidden" name="kep_neve" id="deleteImageName">
                    <input type="hidden" name="delete" value="1">
                    <button type="submit" class="delete-confirm-btn">Törlés</button>
                </form>
                <button onclick="closeDeleteModal()" class="delete-cancel-btn">Mégse</button>
            </div>
        </div>
    </div>

    <script>
        // Lightbox funkciók
        function openLightbox(imgSrc, caption) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxCaption = document.getElementById('lightbox-caption');
            
            lightbox.style.display = "block";
            lightboxImg.src = "kepek/" + imgSrc;
            lightboxCaption.innerHTML = caption || '';
            
            // Billentyűzet események
            document.addEventListener('keydown', handleKeyPress);
        }
        
        function closeLightbox() {
            document.getElementById('lightbox').style.display = "none";
            document.removeEventListener('keydown', handleKeyPress);
        }
        
        function handleKeyPress(e) {
            if (e.key === "Escape") {
                closeLightbox();
            }
        }
        
        // Kattintás a lightbox-on kívülre
        window.onclick = function(event) {
            if (event.target === document.getElementById('lightbox')) {
                closeLightbox();
            }
        }
        
        function toggleMenu() {
        const menu = document.getElementById("dropdownMenu");
        menu.classList.toggle("open");
        
        // Almenük bezárása főmenü nyitáskor
        if (menu.classList.contains("open")) {
            document.querySelectorAll('.sub-menu').forEach(submenu => {
                submenu.style.display = 'none';
            });
        }
        
        document.addEventListener('click', function closeMenu(e) {
            if (!e.target.closest('.right')) {
                menu.classList.remove("open");
                document.removeEventListener('click', closeMenu);
            }
        });
    }

    // Almenük kezelése
    document.addEventListener('DOMContentLoaded', function() {
        if (window.innerWidth > 768) {
            document.querySelectorAll('.menu-item-has-children').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.querySelector('.sub-menu').style.display = 'block';
                });
                item.addEventListener('mouseleave', function() {
                    this.querySelector('.sub-menu').style.display = 'none';
                });
            });
        }
        // Mobil nézetben kattintásra
        else {
            document.querySelectorAll('.menu-item-has-children > a').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;
                    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
                });
            });
        }
    });
        
        // Törlés megerősítő funkciók
        function confirmDelete(imageName) {
            document.getElementById('deleteImageName').value = imageName;
            document.getElementById('deleteModal').style.display = 'flex';
        }
        
        function closeDeleteModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
        
        // Kattintás a törlés modal-on kívülre
        window.onclick = function(event) {
            if (event.target === document.getElementById('deleteModal')) {
                closeDeleteModal();
            }
        }
    </script>
</body>
</html>