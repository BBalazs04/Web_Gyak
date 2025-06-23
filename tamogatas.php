<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Támogatás</title>
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

    <main class="content">
        <main class="color">
            <h1>Támogatás</h1>
        </main>
        <p>Régóta gondolkodom azon, hogy van-e értelme támogatást kérnem tőletek. A blog, ahogy talán tudjátok, teljesen nonprofit jelleggel működik, a saját pénzemből áldozok rá.</p>
        <p>Szerencsére egy írásos felület ma már nem kifejezetten drága, évente néhány tízezer forintba kerül csupán weboldallal, domainnel, mindennel együtt.</p>
        <p>A kések és egyéb felszerelések beszerzése persze már más tészta, de ha nem lenne a blog, akkor is vásárolnék, ha nem is ilyen nagyságrendben. Ez a része – mondhatni – ingyenes, csupán a jövő és menő holmik közötti árkülönbség terheli a büdzsémet.</p>
        <p>Mivel a közös hobbink egy meglehetősen szűk réteget érdekel, és a szöveges blogolás sem kifejezetten népszerű, azt gondolom, hogy a manapság népszerű finanszírozási formák nem elérhetőek számomra. Így nem indítok Kickstartert, nem lesz Patreon oldalam, és esélyes, hogy szponzorcégek sem fognak megkeresni. (Update: időközben úgy alakult, hogy kibontakozóban van egy együttműködés egy hazai bolttal, a Késvilággal. Amennyiben lesznek további részletek ezzel kapcsolatban, beszámolok majd róla. Update 2: Úgy tűnik, tovább bővül a lehetséges partnerek listája, pl. a Zboss-hu-val és a Magyar késekkel.)</p>
        <p>Mégis, szeretném megadni a lehetőséget a hűséges olvasóimnak arra, hogy ha szeretnék, valamilyen módon mégis hozzájárulhassanak a blog további működéséhez. Erre egyelőre két módot találtam ki. Az egyik ráadásul összeköti a kellemest a hasznossal, a másikban meg, ha úgy tetszik, kihelyezem a virtuális kalapomat.</p>
        <main class="color">
            <h1>Vaszilij Edc-s holmik</h1>
        </main>
        <p>Túlzás lenne azt állítanom, hogy blogolvasók serege ácsorog reggelente az ajtóm előtt, logózott bögrét vagy kitűzőt követelve. De időnként azért felmerül a kérdés, hogy hogyan lehet hozzájutni ezekhez. Eddig pár tucat kitűzőt készíttettem, illetve néhány darab bögrét, tehát nincs ezekből készletem. Ha valaki kér, és én rendelek, majd postázok, az egyrészt macerás, másrészt drága.</p>
        <p>Így arra gondoltam, hogy elérhetővé teszek négyfajta logót, amelyek szabadon letölthetők, és mindenki azt kezd vele, amit szeretne. Póló-, bögre-, kitűzőnyomtatási lehetőség sok helyen van, de ha kihagyunk egy plusz láncszemet, akkor kedvezőbb áron lehet a tiétek a vágyott darab. Én a letmicro.com-ról rendeltem, de természetesen bárhol máshol meg tudják oldani ezeket.</p>
        <p>Ezzel a megoldással aztán mindenki nyer, nektek lesznek Vaszilij Edc-s dolgaitok, és ha szerepeltetitek őket a fotóitokon, akkor az reklám az oldalnak is.</p>

        <div class="logo-gallery">
    <div class="logo-item">
        <img src="kepek/logo_nagy.jpg" alt="Logó Nagy Íves" loading="lazy">
        <p>Logó Nagy</p>
    </div>
    <div class="logo-item">
        <img src="kepek/logo_nagy_feher.jpg" alt="Logó Nagy Íves" loading="lazy">
        <p>Logó Nagy Fehér</p>
    </div>
    <div class="logo-item">
        <img src="kepek/logo_nagy_ives.jpg" alt="Logó Nagy Íves" loading="lazy">
        <p>Logó Nagy Íves</p>
    </div>
    <div class="logo-item">
        <img src="kepek/logo_nagy_ives_feher.jpg" alt="Logó Nagy Íves Fehér" loading="lazy">
        <p>Logó Nagy Íves Fehér</p>
    </div>
</div>

<style>
.logo-gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 30px 0;
}

.logo-item {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: white;
}

.logo-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.logo-item img {
    width: 100%;
    height: auto;
    border-radius: 4px;
    object-fit: cover;
    aspect-ratio: 1/1;
}

.logo-item p {
    margin-top: 10px;
    font-size: 14px;
    color: #555;
}

@media (max-width: 992px) {
    .logo-gallery {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .logo-gallery {
        grid-template-columns: 1fr;
    }
}
</style>

        <main class="color">
            <h1>A virtuális kalap</h1>
        </main>
        <p>A másik megoldás, amivel segíteni tudtok, az egyszerűen a pénz. Szerencsére a magyar jogszabályok lehetővé teszik, hogy magánember magánembernek pénzt adományozzon, feltéve, hogy nem jár cserébe ellenszolgáltatás. Így ha valaki úgy érzi, hogy hozzájárulna a blog működéséhez, az tetszőleges összeggel megteheti ezt.</p>
        <p>A blog támogatásának részletei kidolgozás alatt állnak.</p>
        <p>Ha netán így döntenél, a közelménybe kérlek írd bele, hogy Vaszilij Edc.</p>
        <p>Amennyiben érkeznek majd összegek, úgy ígérem, beszámolok időnként róla – természetesen név nélkül.</p>
        <p>Köszönöm, ha akár így, akár úgy támogatsz. De ha „csak” olvasol, már az is sokat számít!</p>
    </main>

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
</body>
</html>