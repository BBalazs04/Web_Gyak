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
    <img src="kepek/IMG_20190522_132925_1-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <h1>Leatherman Free P2<br><br></h1>
        <p>Szerző: Vaszilij | 2019. máj. 26. | Írások, Leatherman, Multitool<br><br>A Leatherman Free sorozattal az amerikai gyártónak sikerült jól felkavarnia az állóvizet. Az új szerszámokkal ugyanis nem mást ígértek, mint forradalami újításokat, amiket természetesen nagy érdeklődés övezett világszerte. A megjelenés után a fogadtatás nem volt...</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_20180913_184819-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p2">
        <h2>Leatherman Juice XE6 bemutató<br><br></h2>
        <p>Szerző: Vaszilij | 2018. szept. 16. | Írások, Leatherman, Multitool<br><br><br>Noha jó ideje megelégedéssel használom a Leatherman Wave multimat, időnként elgondolkodom, hogy érdemes lenne-e valami újat, valami mást beszerezni. Nem feltétlenül helyette, hanem akár mellette: akár egy kiegészítő pakk részeként, akár egy kisebb, könnyebb darabot...</p>
    </div>

    <div class="kepek3">
        <img src="kepek/img_20170509_105803.jpg" height="550" width="1000">
    </div>

    <div class="p3">
        <h2>Leatherman Wave<br><br></h2>
        <p>Szerző: Vaszilij | 2017. máj. 13. | Leatherman, Multitool, Uncategorized<br><br><br>… és egy mini EDC pakk Jelen bemutató témájául a Leatherman cég egyik legsikeresebb multiszerszámát, a Wave-et választottam. Ha valaki esetleg nincs tisztában vele, a multiszerszám egyfajta továbbfejlesztett svájci bicskaként fogható fel, amelyet sokoldalúbbnak...</p>
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
    </style>
</body>
</html>