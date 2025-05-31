<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kezdőlap</title>
    <link rel="stylesheet" href="style.css">
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

    <div class="kepek1">
    <img src="kepek/IMG_20200728_113517-980x735.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <h1>Ruike P662-B<br><br></h1>
        <p>Szerző: Vaszilij | 2020. aug. 2. | Kések, Ruike<br><br>Ruike P662-B A Ruike P662-B egy viszonylag új modell a kínai gyártó palettáján. Első pillantásra egyetlen érdekessége van: a rendkívül kedvező ára. Vajon ezen kívül is tud valamit mutatni ez a folder? Vagy csak egy újabb, olcsó kés az egyre erősebb versenyben? Ebből...</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_20190311_102957-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p2">
        <h2>Ruike P865-B<br><br></h2>
        <p>Szerző: Vaszilij | 2019. ápr. 7. | Kések, Folder, Ruike<br><br><br>A Ruike P865-B zsebkés egy a kínai gyártó újabb modelljei közül, amely ismét szakított némileg a hagyományokkal. Egy elegáns, könnyű zsebkésről van szó, amely mélyen ülő zsebklipjével, letisztult formavilágával egyből megdobogtatta a szívemet, és alig vártam, hogy...</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_20181127_140509-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p3">
        <h2>Ruike P155-B<br><br></h2>
        <p>Szerző: Vaszilij | 2019. jan. 20. | Kések, Folder, Ruike<br><br><br>A Ruike P155-B modellje sok szempontból illeszkedik a kínai gyártó palettájába. Megfizethető áron kapunk egy olyan zsebkést, amelyet műszaki paramétereit figyelembe véve könnyedén sorolhatnánk egy kategóriával feljebb. A formavilág egy kissé szokatlan ugyan, főképp,...</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_20181116_111751-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p4">
        <h2>Ruike P848-B<br><br></h2>
        <p>Szerző: Vaszilij | 2018. dec. 9. | Írások, Folder, Kések, Ruike<br><br><br>A Ruike P848-B érdekes koncepció a kínai gyártó palettájáról. Egy modern alapanyagokból, modern technikai megoldásokkal készült késről van szó, kétkezes nyitási megoldással. Amikor böngésztem a gyártó újdonságai között, engem egyből megfogott a formavilága, amely egy...</p>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_20181002_135553-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p5">
        <h2>Ruike P671-CB<br><br></h2>
        <p>Szerző: Vaszilij | 2018. nov. 14. | Írások, Folder, Kések, Ruike<br><br><br>A Ruike P671-CB akár az álomkés is lehetett volna a számomra. Amikor megláttam a kínai gyártó új modelljei között az elegáns, legális pengehosszúságú, deep carry klippel ellátott zsebkést, egyből tudtam, hogy ezt nekem találták ki. Nem is tétováztam sokáig, amikor...</p>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_20180105_134614-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p6">
        <h2>Ruike M51<br><br></h2>
        <p>Szerző: Vaszilij | 2018. aug. 6. | Írások, Folder, Kések, Ruike<br><br><br>Ha valaki rendszeres olvasója a blognak, az észrevehette, hogy különös figyelmet szentelek a Ruike késeknek. A kínai gyártó remek ár-érték arányú termékei méltán népszerűek Magyarországon is, főképp, ha a foldereikről beszélünk. A fixpengés kések terén egyelőre kissé...</p>
    </div>

    <script>
    function toggleMenu() {
        const menu = document.getElementById("dropdownMenu");
        menu.classList.toggle("open");
        
        document.addEventListener('click', function closeMenu(e) {
            if (!e.target.closest('.right')) {
                menu.classList.remove("open");
                document.removeEventListener('click', closeMenu);
            }
        });
    }
    </script>
    <style>
        .kepek1 {
            position: absolute;
            top: 250px;
            left: 14%;
        }
        .p1 {
            position: absolute;
            top:680px;
            padding: 11%;
            text-align: center;
        }
        .kepek2 {
            position: absolute;
            top: 1050px;
            left: 14%;
        }
        .p2 {
            position: absolute;
            top:1470px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top: 1850px;
            left: 14%;
        }
        .p3 {
            position: absolute;
            top:2270px;
            padding: 11%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top: 2650px;
            left: 14%;
        }
        .p4 {
            position: absolute;
            top:3070px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top: 3450px;
            left: 14%;
        }
        .p5 {
            position: absolute;
            top:3870px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top: 4250px;
            left: 14%;
        }
        .p6 {
            position: absolute;
            top:4670px;
            padding: 11%;
            text-align: center;
        }
    </style>
</body>
</html>