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
    <img src="kepek/Karacsony-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <h1>Karácsonyi ajándék<br><br></h1>
        <p>Szerző: Vaszilij | 2022. dec. 25. | Novella<br><br>Karácsonyi ajándék Akkoriban a tél még tél volt. Gyerekként persze minden nagyobbnak és jelentőségteljesebbnek tűnik, de az internetes archívumokban bőven találni felvételeket embermagas hótorlaszokról, elakadt járművekről és derékig a hóban taposó felnőttekről. Azon...</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_20210410_144016-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p2">
        <h2>Van egy késed?<br><br></h2>
        <p>Szerző: Vaszilij | 2022. nov. 20. | Novella<br><br><br>Van egy késed?   – Van egy késed? – kérdezte Svarci. Nyúlánk, vékony srác volt; a becenevét azért kapta, mert folyton edzésről készült videókat nézett, ilyen cikkeket olvasott, illetve főképp erről beszélt. Ki tudja, talán gyúrni is járt, bár nem látszott...</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_20210819_210020-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p3">
        <h2>Kultusz<br><br></h2>
        <p>Szerző: Vaszilij | 2021. szept. 12. | Novella<br><br><br>Kultusz Szeretek napnyugta után a közeli parkban sétálni. A nappal jelentéktelen fás-bokros ligetecske új világgá változik: nyugodt oázissá a város közepén. Többnyire magam vagyok, csak elvétve találkozom egy-egy futóval, netán hozzám hasonló csodabogárral, akiket...</p>
    </div>

    <div class="kepek4">
        <img src="kepek/girl-3528292_1920-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p4">
        <h2>Arculat<br><br></h2>
        <p>Szerző: Vaszilij | 2021. márc. 28. | Novella<br><br><br>Arculat János a HR-en ült, és azon gondolkodott, hogy Izabella hogyan tud olyan rövid szoknyákat viselni, amiből még épp nem látszik ki semmije, az embernek mégis minden pillanatban az az érzése, hogy a következő pillanatban be fog tudni kukkantani alá. Ebben persze...</p>
    </div>

    <div class="kepek5">
        <img src="kepek/notepad-1130743_1920-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p5">
        <h2>Fantázia<br><br></h2>
        <p>Szerző: Vaszilij | 2021. márc. 7. | Novella<br><br><br>Fantázia Közeleg a tavasz, nő a gyerekzsivajos nappali órák száma. A jelenség a legintenzívebben iskolaidő után, illetve hétvégeken figyelhető meg. Addig kihaltnak tűnő udvarok és játszóterek népesülnek be különböző nemű és korú gyerekekkel, akik mintha egyszerre...</p>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_20210205_161324-01-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p6">
        <h2>Hűség<br><br></h2>
        <p>Szerző: Vaszilij | 2021. febr. 7. | Novella<br><br><br>Hűség Béla bával évek óta horgásztunk egymás mellett. Bár helyesebb lenne úgy fogalmazni, hogy egymás mellett ücsörögtünk a tóparton. Úgy tűnt, egyikünk sem akar halat fogni; ha időnként mégis akadt a horogra, mindketten visszaengedtük. Hogy Béla bá miért járt ki, azt...</p>
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