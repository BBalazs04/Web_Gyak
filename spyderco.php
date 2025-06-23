<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Spyderco</title>
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
    <img src="kepek/IMG_20210503_181209-980x735.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <h1>Spyderco Spyopera<br><br></h1>
        <p>Szerző: Vaszilij | 2021. dec. 26. | Kések, Folder, Spyderco<br><br>Spyderco Spyopera A Spyderco Spyopera szerelem volt első látásra. Egyesíti magában az eleganciát és a Spyderco dizájnok jellegzetességeit, és mivel mindkét dolog közel áll hozzám, ebben a furcsa hibridben is megragadott valami. Miután az internetes ismerkedést...</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_20210530_102228-980x735.jpg" height="550" width="1000">
    </div>

    <div class="p2">
        <h2>Spyderco Salt 2 Green<br><br></h2>
        <p>Szerző: Vaszilij | 2021. aug. 8. | Kések, Folder, Spyderco<br><br><br>Spyderco Salt 2 Green A Spyderco Salt 2 Green LC200N az egyik legbonyolultabb nevű kés, amivel az utóbbi időben dolgom volt. Tovább nehezíti a helyzetet, hogy a különféle változatok megnevezése alig-alig különbözik egymástól, így ember legyen a talpán, aki elsőre...
        </p>
    </div>

    <div class="kepek3">
        <img src="kepek/131056076_949308028931716_2983418026461607382_n-980x735.jpg" height="550" width="1000">
    </div>

    <div class="p3">
        <h2>Spyderco Dragonfly<br><br></h2>
        <p>Szerző: Vaszilij | 2021. júl. 11. | Kések, Folder, Spyderco<br><br><br>Spyderco Dragonfly A Spyderco Dragonfly egy aprócska, könnyű zsebkés, amely ideális lehet a kánikulában. Tavaly tavasszal fogalmazódott meg bennem a gondolat, hogy kellene nekem egy efféle nyári folder, ha lehet, valami vidám színben. Noha a Dragonfly régóta a...</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_20210123_081526-980x735.jpg" height="550" width="1000">
    </div>

    <div class="p4">
        <h2>Spyderco Sage<br><br></h2>
        <p>Szerző: Vaszilij | 2021. jan. 31. | Kések, Folder, Spyderco<br><br><br>Spyderco Sage A Sypderco Sage régóta izgatta a fantáziámat. Képekről úgy tűnt, hogy ez a kés összefoglalja mindazt, amit szeretek a márka késeiben. Tetszetős forma, legális pengehossz, elegáns, ugyanakkor munkára is fogható, és még a méretei is jók. Sokáig ellenálltam...</p>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_20200516_155031-980x735.jpg" height="550" width="1000">
    </div>

    <div class="p5">
        <h2>Spyderco Delica Lightweight 4<br><br></h2>
        <p>Szerző: Vaszilij | 2020. szept. 13. | Kések, Folder, Spyderco<br><br><br>Spyderco Delica Lightweight 4 Spyderco Delica. Talán elég lenne ennyit mondanom, mert ha valami, ez a zsebkés kiérdemli a klasszikus jelzőt. Az első, 1990-es megjelenése óta folyamatosan a piacon van, és bár folyamatos fejlődésen ment keresztül, az alapvető...</p>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_20200517_181835-980x735.jpg" height="550" width="1000">
    </div>

    <div class="p6">
        <h2>Spyderco Kapara<br><br></h2>
        <p>Szerző: Vaszilij | 2020. júl. 5. | Kések, Folder, Spyderco<br><br><br>Spyderco Kapara A Spyderco Kapara erőteljesen robbant be a késes világba, bődületes hype-ot generálva maga körül. Már az első bemutató videókat láttán tudtam, hogy egyszer nekem is lesz egy ilyen késem. Elegáns ruhába bújtatott Para 2-nek tűnt a számomra: karcsúsított...</p>
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