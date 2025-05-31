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

    
    <div class="header-container">
        <h1 class="right-aligned-center">„Ezeket<br>a<br>dolgokat<br>cipelem.”</h1>
    </div>

    <div class="img_1">
        <img src="kepek/IMG_2549-980x626.jpeg" loading="lazy" width="550" height="400">
    </div>

    <div class="szoveg_1">
        <h1>We Banter -Újratöltve</h1>
        <p>ápr 20, 2025 | We knives, We knives, WE Knives, WE Knives<br><br>4 évvel ezelőtt született egy cikk Ben Petersen első saját<br>tervezésű késéről ( We Banter ). Most, hogy megjelent a második<br>generáció, valamint hogy lassan másfél éve használok egy<br>módosított verziót az első szériából, elegendő oknak bizonyult,<br>hogy újra górcső alá...</p>
        <a href="webanted.php" class="btn">Bővebben</a>
    </div>

    <div class="img_2">
        <img src="kepek/20250222_1659167002-980x677.jpg" loading="lazy" width="300" height="200">
    </div>

    <div class="szoveg_2">
        <h2>Lali szamurájkardja</h2>
        <p>ápr 6, 2025 | Egyéb<br><br>Képzeljük el Lalit, aki nyílászárók<br>beszerelésével keresi a kenyerét.<br>Egyszerű építőipari munkás, aki már évek<br>óta megbízható munkát végez. Szépen<br>építgeti az életét, komoly barátnője van,<br>saját lakásra gyűjt. Egyik reggel, amikor<br>egy újépítésű házhoz szállnak ki a...<br></p>
        <a href="szamurajkard.php" class="btn">Bővebben</a>
    </div>

    <div class="img_3">
        <img src="kepek/IMG_2100-980x703.jpeg" loading="lazy" width="300" height="200">
    </div>

    <div class="szoveg_3">
        <h2>Olcsó János túrázni megy!</h2>
        <p>márc 23, 2025 | Egyéb<br><br>Mindennapi életünk tele van rohanással,<br>stresszhatásokkal. Meló, beosztás, család,<br>egészség, mindennapi gondok. Ezek mellé<br>még van egy jókora digitális függésem is.<br>Képes vagyok naphosszat a telefon<br>képernyőjét bámulni. Kell néha egy kis<br>reboot vagy restart, egy kis...<br></p>
        <a href="olcsojanos.php" class="btn">Bővebben</a>
    </div>

    <div class="img_4">
        <img src="kepek/IMG_1892-980x653.jpeg" loading="lazy" width="300" height="200">
    </div>

    <div class="szoveg_4">
        <h2>Modern slip jointok-régi<br>nóta újra hangszerelve</h2>
        <p>márc 8, 2025 | Egyéb<br><br>Nem reprezentatív (ismerőseim egy részét<br>felölelő) mintán végzett kutatásom szerint a<br>mai napig a legtöbbeknek a bicska szó<br>hallatán apa vagy nagypapa tradicionális,<br>magyar gyártmányú kézműves bicskája,<br>vagy a „svájci” bicska jut eszébe. Bár az<br>előbbi jellegzetesen...<br></p>
        <a href="modernslip.php" class="btn">Bővebben</a>
    </div>

    <div class="szoveg_5">
        <h2>Manuális élezők,avagy magad uram, ha szolgád nincsen</h2>
        <p>febr 23, 2025 | Egyéb<br><br>Ebben a - vasárnap reggeli kávé mellé szánt - írásban az itthon leggyakrabban használt manuális (nem elektromos) késélező eszközöket veszem górcső alá. Nem teszt, hanem rövid bemutató jelleggel. A legegyszerűbb eszköztől haladok az összetett rendszerek felé. Az...<br></p>
        <a href="manualiselezok.php" class="btn">Bővebben</a>
    </div>

    <div class="img_5">
        <img src="kepek/IMG_1814.jpeg" loading="lazy" width="300" height="200">
    </div>

    <div class="szoveg_6">
        <h2>Amikor a hóhért akasztják,<br>avagy mi fán terem az<br>Ultras</h2>
        <p>febr 9, 2025 | Egyéb<br><br>A blog cikkei egyre-másra  kerülnek ki az<br>oldalra, forognak közszájon, hála az<br>internetnek. Sokan régi ismerősként<br>üdvözlik egyik-másik bemutató alanyát,<br>másoknak  pedig az újdonság erejével hat<br>egy-egy megjelenő írás főszereplője. Igen<br>ám, de a cikkek nem a bokorban...<br></p>
        <a href="hoher.php" class="btn">Bővebben</a>
    </div>

    <div class="img_6">
        <img src="kepek/Kep1.jpg" loading="lazy" width="300" height="240">
    </div>

    <div class="szoveg_7">
        <h2>Svörd Peasant</h2>
        <p>jan 26, 2025 | Egyéb<br><br>Magányos túrázó sétál a Fekete-Körös<br>gátján a táborhelye felé. Apró hobó<br>kályhájában ropog a tűz. Sült szalonna és<br>lilahagyma illata terjeng a táborhelyen.<br>A túrázó fatányéron katonázza a falatokat<br>surlódó záras bicskájával. Legalábbis ez a<br>kép jelent meg a szemeim...<br></p>
        <a href="svordpeasant.php" class="btn">Bővebben</a>
    </div>

    <div class="img_7">
        <img src="kepek/20241221_1020060742-980x735.jpg" loading="lazy" width="300" height="200">
    </div>

    <div class="szoveg_8">
        <h2>Olfa CK-2 Kés helyett<br>sniccer?</h2>
        <p>jan 12, 2025 | Egyéb<br><br>A tékozló fiú visszatér Pár éve, mikor a<br>Tops cég Lil Roughneck nevű késének<br>bűvkörében éltem, azon gondolkodtam,<br>hogy azért kellene az említett mini<br>tankhámozó mellé valami olyan kés is, ami<br>nemcsak repeszteni, hanem vágni is tud.<br>Ezirányú keresgélésem közben akadt...<br></p>
        <a href="olfack.php" class="btn">Bővebben</a>
    </div>

    <div class="img_8">
        <img src="kepek/IMG_2113-980x561.jpeg" loading="lazy" width="300" height="210">
    </div>

    <div class="szoveg_9">
        <h2>Aranyhal a viperafészekből</h2>
        <p>dec 29, 2024 | Egyéb<br><br>A Viper Koit vagy 3 éve vettem egy helyi<br>éltárstól, másodkézből. Nagyon tetszett<br>a képeken és bemutató videókon, hamar<br>elkapott a “ kell “ érzés. A cikk végére<br>kiderül, megérte-e. Egy kis történelem<br>A Tecnocut snc-t 1987- ben alapították az<br>olaszországi Maniagoban....<br></p>
        <a href="aranyhal.php" class="btn">Bővebben</a>
    </div>

    <div class="img_9">
        <img src="kepek/Kep1-936x675.jpg" loading="lazy" width="300" height="210">
    </div>

    <div class="szoveg_10">
        <h2>Byrd Cara cara 2</h2>
        <p>dec 15, 2024 | Egyéb<br><br>A Byrd Cara cara 2-t egy impulzusvásárlás<br>során szereztem be használtan, jóárasítva.<br>Egy potenciális munkakést, mentőkést<br>láttam benne. Az évek során bebizonyította,<br>hogy egy igazi “igásló”, amire mindig lehet<br>számítani. Egy kis háttér:<br>A Byrd a Spyderco...<br></p>
        <a href="byrdcara.php" class="btn">Bővebben</a>
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
        .header-container {
            display: flex;
            justify-content: flex-end; /* Jobbra tolja a tartalmat */
            width: 100%;
        }

        .right-aligned-center {
            position: absolute;
            right: 0;
            left: 75%;
            transform: translateX(-50%);
            width: fit-content;
            text-align: center;
            font-size: 60px;
            top: 180px;
        }
        .img_1 {
            position: absolute;
            right: 0;
            left: 10%;
            padding: 10px;
            top: 100px;

            width: 593px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .img_2 {
            position: absolute;
            right: 0;
            left: 3%;
            padding: 10px;
            top: 900px;

            width: 330px;
            height: 530px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .img_3 {
            position: absolute;
            right: 0;
            left: 33%;
            padding: 10px;
            top: 900px;

            width: 330px;
            height: 530px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .img_4 {
            position: absolute;
            right: 0;
            left: 63%;
            padding: 10px;
            top: 900px;

            width: 330px;
            height: 530px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .img_5 {
            position: absolute;
            right: 0;
            left: 41%;
            padding: 10px;
            top: 1500px;

            width: 330px;
            height: 550px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .img_6 {
            position: absolute;
            right: 0;
            left: 71%;
            padding: 10px;
            top: 1500px;

            width: 330px;
            height: 550px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .img_7 {
            position: absolute;
            right: 0;
            left: 3%;
            padding: 10px;
            top: 1940px;

            width: 330px;
            height: 530px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .img_8 {
            position: absolute;
            right: 0;
            left: 33%;
            padding: 10px;
            top: 2100px;

            width: 330px;
            height: 520px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .img_9 {
            position: absolute;
            right: 0;
            left: 63%;
            padding: 10px;
            top: 2100px;

            width: 330px;
            height: 520px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .szoveg_1 {
            position: absolute;
            left: 12%;
            color: black;
            top: 500px;
        }
        .szoveg_2 {
            position: absolute;
            left: 4%;
            color: black;
            top: 1120px;
        }
        .szoveg_3 {
            position: absolute;
            left: 34%;
            color: black;
            top: 1120px;
        }
        .szoveg_4 {
            position: absolute;
            left: 64%;
            color: black;
            top: 1120px;
        }
        .szoveg_5 {
            position: absolute;
            left: 12%;
            color: black;
            top: 1500px;

            width: 330px;
            height: 360px;
            padding: 10px;
            border: 5px solid #222;
            border-radius: 8px;
            box-sizing: border-box;
            background: #e8e8e8;
            box-shadow: 0 0 10px;
            border-width: 5px;
            padding-bottom: 250px;
        }
        .szoveg_6 {
            position: absolute;
            left: 42%;
            color: black;
            top: 1710px;
        }
        .szoveg_7 {
            position: absolute;
            left: 72%;
            color: black;
            top: 1750px;
        }
        .szoveg_8 {
            position: absolute;
            left: 4%;
            color: black;
            top: 2150px;
        }
        .szoveg_9 {
            position: absolute;
            left: 34%;
            color: black;
            top: 2320px;
        }
        .szoveg_10 {
            position: absolute;
            left: 64%;
            color: black;
            top: 2320px;
        }
    </style>
</body>
</html>