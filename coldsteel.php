<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Cold Stell</title>
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
    <img src="kepek/IMG_20220505_142625-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <h1>Cold Steel Pro Lite<br><br></h1>
        <p>Szerző: Vaszilij | 2022. júl. 9. | Kések, Cold Steel, Folder<br><br>Cold Steel Pro Lite A Cold Steel Pro Lite Tanto egy már nem gyártott zsebkés, így ez a bemutató kissé rendhagyó lesz. Amellett, hogy igyekszem egy átfogó képet adni a késről, kerül mellé némi filozófiai vonulat. Egyrészt általánosságban a késgyűjtésről, másrészt...</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_20220224_102728-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p2">
        <h2>Cold Steel Code 4<br><br></h2>
        <p>Szerző: Vaszilij | 2022. márc. 6. | Kések, Cold Steel, Folder<br><br><br>Cold Steel Code 4 A Cold Steel Code 4 régóta jelen van a piacon. Már-már rászántam magam, hogy beszerezzek egyet, de nem volt rá szükség: kaptam egyet születésnapomra. A cikk azonban nehezen jött, évekig húztam-halasztottam a megírását. Nincs konkrét oka a dolognak,...</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_20200713_164547-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p3">
        <h2>Cold Steel Air Lite<br><br></h2>
        <p>Szerző: Vaszilij | 2020. júl. 19. | Kések, Cold Steel, Folder<br><br><br>Cold Steel Air Lite A Cold Steel Air Lite az amerikai gyártó egyik idei modellje. Ahogy a nevében is benne van, egy viszonylag könnyű kést kapunk a pénzünkért, az ígéret ugyanakkor az, hogy ez a könnyűség nem jár kompromisszumokkal. Vajon igaz ez? Járjunk utána...</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_20200207_140939-1080x675.jpg" height="550" width="1000">
    </div>

    <div class="p4">
        <h2>Cold Steel Recon 1 Tanto<br><br></h2>
        <p>Szerző: Vaszilij | 2020. febr. 16. | Kések, Cold Steel, Folder<br><br><br>Cold Steel Recon 1 Tanto A Cold Steel Recon 1 már régóta szerepel az “egyszer majd ki kell próbálni” listámon. Ezen jellemzően olyan kések vannak, amelyek egyrészt a közösség szerint is megkerülhetetlen darabok, másrészt nekem is bejönnek. Nem is haboztam,...</p>
    </div>

    <div class="kepek5">
        <img src="kepek/img_20171217_124606.jpg" height="550" width="1000">
    </div>

    <div class="p5">
        <h2>Cold Steel American Lawman – A teljesítmény mindenek felett<br><br></h2>
        <p>Szerző: Vaszilij | 2018. ápr. 10. | Cold Steel, edc, Kések<br><br><br>Azt hiszem, a Cold Steel American Lawman azok közé a kések közé tartozik, amelyeket nem szereztem volna be, ha nem írom ezt a blogot. Nem mintha nem lennének az amerikai gyártónak olyan modelljei, amelyek tetszenek – az utóbbi időben egyre több ilyen van -, jó...</p>
    </div>

    <div class="kepek6">
        <img src="kepek/7.jpg" height="550" width="1000">
    </div>

    <div class="p6">
        <h2>Cold Steel Tuff Lite<br><br><br></h2>
        <p>Szerző: Vaszilij | 2017. júl. 23. | Cold Steel, Kések, Uncategorized<br><br><br>Aki ismerősen mozog a kések világában, annak a Cold Steel márkát biztosan nem kell bemutatni, habár egy időben sajnos inkább hírhedtek, semmint híresek voltak. Én kezdő késes koromban, amikor még csak véletlenszerűen nézegettem késes képeket az interneten,...</p>
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
            top:4250px;
            left: 14%;
        }
        .p6 {
            position: absolute;
            top:4680px;
            padding: 11%;
            text-align: center;
        }
    </style>
</body>
</html>