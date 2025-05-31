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
    <img src="kepek/20250222_1659167002-980x677.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <h1>Lali szamurájkardja<br><br></h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. ápr. 6. | Egyéb<br><br>Képzeljük el Lalit, aki nyílászárók beszerelésével keresi a kenyerét. Egyszerű építőipari munkás, aki már évek óta megbízható munkát végez. Szépen építgeti az életét, komoly barátnője van, saját lakásra gyűjt. Egyik reggel, amikor egy újépítésű házhoz szállnak ki a...</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_2100-980x703.jpeg" height="550" width="1000">
    </div>

    <div class="p2">
        <h2>Olcsó János túrázni megy!<br><br></h2>
        <p>Szerző: VaszilijEDC Ultra | 2025. márc. 23. | Egyéb<br><br><br>Mindennapi életünk tele van rohanással, stresszhatásokkal. Meló, beosztás, család, egészség, mindennapi gondok. Ezek mellé még van egy jókora digitális függésem is. Képes vagyok naphosszat a telefon képernyőjét bámulni. Kell néha egy kis reboot vagy restart, egy kis...
        </p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_1892-980x653.jpeg" height="550" width="1000">
    </div>

    <div class="p3">
        <h2>Modern slip jointok-régi nóta újra hangszerelve<br><br></h2>
        <p>Szerző: VaszilijEDC Ultra | 2025. márc. 8. | Egyéb<br><br><br>Nem reprezentatív (ismerőseim egy részét felölelő) mintán végzett kutatásom szerint a mai napig a legtöbbeknek a bicska szó hallatán apa vagy nagypapa tradicionális, magyar gyártmányú kézműves bicskája, vagy a „svájci” bicska jut eszébe. Bár az előbbi jellegzetesen...<br><br><br></p>
    <h2>Manuális élezők,avagy magad uram, ha szolgád nincsen<br><br><br></h2>
    <p>Szerző: VaszilijEDC Ultra | 2025. febr. 23. | Egyéb<br><br><br>Ebben a – vasárnap reggeli kávé mellé szánt – írásban az itthon leggyakrabban használt manuális (nem elektromos) késélező eszközöket veszem górcső alá. Nem teszt, hanem rövid bemutató jelleggel. A legegyszerűbb eszköztől haladok az összetett rendszerek...</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_1814.jpeg" height="550" width="1000">
    </div>

    <div class="p4">
        <h2>Amikor a hóhért akasztják, avagy mi fán terem az Ultras<br><br></h2>
        <p>Szerző: VaszilijEDC Ultra | 2025. febr. 9. | Egyéb<br><br><br>A blog cikkei egyre-másra  kerülnek ki az oldalra, forognak közszájon, hála az internetnek. Sokan régi ismerősként üdvözlik egyik-másik bemutató alanyát, másoknak  pedig az újdonság erejével hat egy-egy megjelenő írás főszereplője. Igen ám, de a cikkek nem a bokorban...</p>
    </div>

    <div class="kepek5">
        <img src="kepek/Kep1.jpg" height="550" width="1000">
    </div>

    <div class="p5">
        <h2>Svörd Peasant<br><br></h2>
        <p>Szerző: VaszilijEDC Ultra | 2025. jan. 26. | Egyéb<br><br><br>Magányos túrázó sétál a Fekete-Körös gátján a táborhelye felé. Apró hobó kályhájában ropog a tűz. Sült szalonna és lilahagyma illata terjeng a táborhelyen. A túrázó fatányéron katonázza a falatokat surlódó záras bicskájával. Legalábbis ez a kép jelent meg a szemeim...</p>
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
            top: 2900px;
            left: 14%;
        }
        .p4 {
            position: absolute;
            top:3320px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top: 3700px;
            left: 14%;
        }
        .p5 {
            position: absolute;
            top:4110px;
            padding: 11%;
            text-align: center;
        }
    </style>
</body>
</html>