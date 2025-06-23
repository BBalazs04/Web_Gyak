<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Boker</title>
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
    <img src="kepek/IMG_20220127_130009-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <h1>Böker Kaizen<br><br></h1>
        <p>Szerző: Vaszilij | 2022. febr. 20. | Kések, Böker, Folder<br><br>Böker Kaizen A Böker Kaizen zöld micartával készült verziója már az első fotókkal levett a lábáról. A dizájn tartalmaz mindent, amit valóban szeretek egy késben: letisztultságot, eleganciát, szépséget. Meggyőzőek voltak a specifikációk is. Legális méret, vékony penge,...</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_20211204_075431-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p2">
        <h2>Böker Atlas<br><br></h2>
        <p>Szerző: Vaszilij | 2022. jan. 9. | Kések, Böker, Folder<br><br><br>Böker Atlas A Böker Atlas egy modern slipjoint. Számos gyártó készítette el a saját verzióját – vagy verzióit – az elmúlt években. Akadnak a klasszikusokra hajazó példányok, de sok érdekes technikai megoldást is láthattunk. Az Atlas ezek közül inkább az...</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_20210221_081952-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p3">
        <h2>Böker Kalashnikov<br><br></h2>
        <p>Szerző: Vaszilij | 2021. okt. 3. | Kések, Böker, Folder<br><br><br>Böker Kalashnikov Böker Kalashnikov. Ki gondolná, hogy ez a gyártó egyik legnépszerűbb platformja, ami mostanra számos verzióban készült el? Én biztosan nem, sőt, sokáig teljesen hidegen hagyott ez a modell. Aztán, ahogy egyre mélyebbre ereszkedtem a késes világ...</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_20201014_125642-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p4">
        <h2>Böker Lancer<br><br></h2>
        <p>Szerző: Vaszilij | 2021. febr. 14. | Kések, Böker, Folder<br><br><br>Böker Lancer A Böker Lancer egy meglehetősen minimalista megjelenésű folder, ami sokáig elkerülte a figyelmemet. Aztán ahogy nyitottabbá váltam az új formákra, a megszokottól eltérő dizájnra, valami megfogott benne. Az alapárát borsosnak találtam, ám nemrégiben egy...</p>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_20200925_090716-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p5">
        <h2>Böker Kompakt<br><br></h2>
        <p>Szerző: Vaszilij | 2020. szept. 27. | Kések, Böker, Folder<br><br><br>Böker Kompakt A Böker Kompakt az egyik kedvenc tervezőm, Jesper Voxnaes munkája. Felmenőit le sem tagadhatja: aki egy kicsit is járatosan mozog a modern folderek világában, hamar észreveszi rajta a jellegzetes Vox-vonásokat. Ezek kergettek bele engem is pár hónapja...</p>
    </div>

    <script>
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
    </style>
</body>
</html>