<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Modern Slip</title>
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
        <h1>Modern slip jointok-régi nóta újra hangszerelve</h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. márc. 8. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/IMG_1892-980x653.jpeg" height="550" width="1000">
    </div>

    <div class="p1">
        <p>Nem reprezentatív (ismerőseim egy részét felölelő) mintán végzett kutatásom szerint a mai napig a legtöbbeknek a bicska szó hallatán apa vagy nagypapa tradicionális, magyar gyártmányú kézműves bicskája, vagy a „svájci” bicska jut eszébe. Bár az előbbi jellegzetesen kézműves munka, a másik pedig egy sorozatgyártott, szabványosított termék, egy dolog mégis közös bennük: a működés mechanikája. A mai napig megoszlanak a vélemények ezt a mechanikát hogyan kellene magyarul hívni. Sokan „tradiként” emlegetik, azonban hazai hobbikéses körökben az angol eredetű, magyar fülnek idegenül csengő „slip joint” terjedt el. Magam is ezt használom „éltársi” közegben. Egyszerűen mindenki pontosan tudja, miről van szó, nincs félreértés. </p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_1894.jpeg" height="600" width="1000">
        <img src="kepek/IMG_1897.jpeg" height="600" width="1000">
        <img src="kepek/IMG_1900-scaled.jpeg" height="600" width="1000">
    </div>

    <div class="p2">
        <h1>Járjuk körbe a mechanikát</h1>
        <p>A slip joint egy tradicionális, mégis a mai napig népszerű pengezárási mechanizmus, amelyet főként klasszikus bicskáknál és bizonyos modern zsebkésmodelleknél alkalmaznak. Lényege, hogy a penge nem rendelkezik teljes értékű zárral, mint például egy liner lock vagy frame lock esetében, hanem egy hátsó rugó tartja nyitott vagy zárt állapotban. Ez a rugós mechanizmus súrlódás révén biztosítja a penge pozícióját, miközben lehetővé teszi, hogy kellő nyomás hatására visszahajtható legyen.</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_1887.jpeg" height="700" width="500">
        <img src="kepek/IMG_1888.jpeg" height="700" width="500">
    </div>

    <div class="p3">
        <p>A slip joint rendszer egyik legfontosabb jellemzője, hogy nem mereven rögzíti a pengét, hanem csak ellenállást biztosít annak mozgásával szemben. Emiatt a kés használata során a felhasználónak ügyelnie kell arra, hogy a penge ne csukódjon be véletlenül. Ez a jelenség általában nagyobb erőkifejtést igénylő vágási feladatok során fordulhat ez elő, ahol a penge megakadhat, vagy megszorulhat a vágandó anyagban. Extrém esetben a penge és a markolat együttese szinte szivarvágóként működhet, aminek a felhasználó (keze) nem biztos, hogy örül. Helyesebben: biztosan nem örül. Ennek a kiküszöbölésére különböző furfangos megoldásokat találtak ki a gyártók. Erre egyik jó példa a Böker Plus XS. A markolat kialakítása szinte kényszeríti a kezet, hogy a penge tövénél található ujjvájatra (finger choil, ha már „angolozunk”) markoljunk rá. Ebben az esetben, ha „bicsaklik” a penge, a kialakítás megakadályozza, hogy a kéz közvetlenül az éllel találkozzon.<br><br><br>[Hohó, bicskalik?? Itt valami gyanús, kérem! A gyanú jogos, ugyanis a bicsaklik szó eredete a bicsak főnévhez köthető, amely a bicska egyik régebbi – török eredetű – változata. A szó eredetileg egy hajlékony, mozgatható alkatrészre utalt, és a magyar nyelvben már a 18. századtól fellelhető. A bicsaklik ige azt a mozdulatot írja le, amikor valami hirtelen, váratlanul meghajlik vagy kibillen az egyensúlyából. Ez a jelentés erősen összefügg a bicska működésével, amelynek pengéje egy mozdulattal kihajtható vagy visszahajtható, különösen a nem rögzített pengéjű kések (például a slip joint mechanizmusú bicskák) esetében. A bicsaklik szó átvitt értelemben is elterjedt a magyar nyelvben. Például amikor valakinek „bicsaklik a térde„, az azt jelenti, hogy a lába egyensúlyát veszti, és hirtelen megbicsaklik. Hasonlóan használjuk arra is, amikor egy beszéd vagy gondolatmenet elakad, például „megbicsaklott a nyelve„, azaz hibázott vagy elakadt a beszédben.]<br><br><br><br>Más gyártók előszeretettel alakítják ki úgy a penge tövét (szakszóval: tálung), hogy a bicskát ne lehessen egy lendületből becsukni, hanem bizonyos szögekben nagyobb ellenállást fejtsen ki, azaz megakadjon. Ezt – megint csak – idegen szóval „half stopnak” nevezzük. A kifejezés arra utal, hogy jellemzően félállásban, azaz közel derékszögben akad meg a penge. Bár kétségtelenül nem jelent áthatolhatatlan akadályt a szuicid hajlamú ujjaknak, de a véletlen balesetek ellen egészen jó megoldás. A félállás sokszor csak félig igaz (hehe), mert vannak típusok, ahol 120 fokos tompaszögben akad meg a penge (például Real Steel Luna), de az is előfordul, hogy több „stop” van beiktatva (például Manly Wasp). Az utóbbi megoldás kétségtelenül a legbiztonságosabb, de sok felhasználónak az agyára megy. Olyan érzés kinyitni, becsukni a pengét, mintha ő nem szeretné. Állandóan felesel. Ellenben másokat nemhogy nem zavar ez a működés, hanem biztonsági megoldásnak tekint rá és kedveli. Így jó ez.</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_1896.jpeg" height="900" width="850">
        <img src="kepek/IMG_1895-scaled.jpeg" height="900" width="850">
    </div>

    <div class="p4">
        <h3>Csak két kézzel?</h3>
        <p>Bár a klasszikus slip joint bicskák többségét két kézzel kell kinyitni – hiszen általában egy körömvájat segítségével lehet a pengét előcsalogatni a markolatból – a modern változatoknál olykor találkozhatunk nyitófurattal (Kizer Zipslip), nyitó horonnyal (Real Steel Luna), nyitópöcökkel (Nagy Csaba Modern maskara) vagy más olyan kialakítással, amely megkönnyíti az egykezes nyitást. Ennek ellenére az egykezes nyitás és zárás még mindig nem a legjellemzőbb erre a mechanizmusra, hiszen a működési elv alapvetően a régi bicskák hagyományait követi.<br><br><br>A két kézzel nyitás mellett egy olyan érv is felsorakozik, amit magam is nagyon megértek. Ma minden rohan. Mi is. Egyszerűen jól esik néha megadni a módját a dolgoknak. A bicskát előhalászni a zsebből, kivenni a tokjából, komótosan kézbe igazítani és szépen, akkurátus mozdulattal kinyitni. Használat után tisztára törölni, szépen kísérve a pengét behajtani, tokba vissza-, majd zsebre tenni. Így.<br><br><br>A slip joint népszerűsége nem csupán a múltidéző nosztalgiában rejlik, hanem praktikus előnyeiben is. Mivel nem tartozik a rögzített pengéjű kések közé, valamint eredetileg egy kézzel nem nyitható, ezért sok ország jogszabályai – például az Egyesült Királyság, vagy Dánia – engedékenyebbek vele szemben, így a mindennapi hordhatósága sokkal egyszerűbb. Ez az egyik oka annak, hogy a svájci bicskák, amelyek szinte kivétel nélkül slip joint mechanizmussal készülnek, világszerte elterjedtek és kedveltek.<br><br><br>A mechanizmus népszerűségének azonban van egy másik oka is. NKP muglik most nem fognak szeretni: Tud lenni smooth és lehet magas fidget factora. – Van baj, mi? Fordítok: NKP – Non-Knife Person, körülbelül „nem késrajongónak” lehetne fordítani. Mugli: na, ezt illik tudni. Smooth és fidget factor. Ezeket egy kis nyelvészkedés nélkül nehéz megfejteni, ezért segítséghez folyamodtam. AI, persze.</p>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_1901-scaled.jpeg" height="600" width="900">
        <img src="kepek/IMG_1898-scaled.jpeg" height="600" width="900">
        <img src="kepek/IMG_1905-scaled.jpeg" height="600" width="900">
    </div>

    <div class="p5">
        <p>Az angol „smooth” szó magyar fordítása nagyban függ a kontextustól. Ha például egy zsebkés mechanikájára utalunk, ahol a penge nyitása és zárása simán, akadálymentesen történik, akkor a következő magyar kifejezések használhatók:<br><br><br>- Sima működés<br>- Egyenletes nyitás<br>- Akadásmentes mozgás<br>- Finom járás<br><br><br>Ha a kés általános minőségére vagy érzésére vonatkozik (például egy finoman megmunkált markolatra), akkor lehet kifinomult, letisztult, vagy simára csiszolt is a megfelelő fordítás.<br><br><br>Az angol „fidget factor” kifejezés egy kicsit nehezebb ügy, mert nincs rá igazán bevett magyar megfelelő. Ez egy késkedvelő körökben használt fogalom, amely arra utal, hogy egy kés vagy más tárgy mennyire szórakoztató vagy kielégítő érzés a kézben pörgetni, nyitogatni, zárogatni – vagyis mennyire „játszós”. Néhány magyar fordítási lehetőség:<br><br>- Pörgetési élmény<br>- Játszhatósági faktor<br>- Kattogtatási faktor<br>- Nyitogatási élmény<br><br><br>Ha egy kicsit szabadabb fordítást nézünk, akkor „kézben szórakoztató” vagy „nyitogatási élvezet” is megfelelő lehet. Attól függően, mennyire szeretnénk természetes hangzású magyar kifejezést, akár az „idegesítően addiktív” vagy „csuklómozgató faktor” is használható lenne a humorosabb megközelítéshez.<br><br><br></p>
        <h3>Csak a rendszer a régi<br><br><br></h3>
        <p>Az elmúlt években a modern késgyártók is felfedezték ennek a mechanizmusnak az előnyeit, így egyre több olyan zsebkés születik, amely ötvözi a slip joint rendszer egyszerűségét a kortárs formatervezéssel és modern anyaghasználattal. Erre kiváló példa a Jack Wolf Knives egyes modelljei, vagy a Spyderco UKPK, amely kifejezetten a brit törvényeknek megfelelően készült, a Böker Plus Celos, amely a tradicionális sodbuster (egyszerű fazonú és kialakítású munkásbicska) modern újragondolása, vagy a Fox Livri, amely egy letisztult dizájnnal rendelkező elegáns zsebkés.<br><br><br>A tradicionális és modern slip joint rendszerű bicskák közt anyaghasználatban óriási különbség lehet.<br><br><br>Amíg az előbbieknél az évezredek óta használt alapanyagok (réz, vas, acél, fa, szaru, agancs, stb.) a jellemzőek, addig a modern változatoknál teljesen megszokott a legújabb anyagok használata. Nem ritkán titán, high-end acélok, a legfurfangosabb carbon anyagok használatával kápráztatják el a gyártók a slip jointok rajongóit (és persze apasztják pénztárcájukat).<br><br><br>A modern slip jointok gyakran egy új funkcióval is gazdagodnak úttörő elődeikhez képest: zsebklipszük van. Erről megoszlanak a vélemények. Egyesek szerint slip jointon a klipsz olyan, mint tehénen a nyakkendő. Vagy idézhetném egyik kedvenc mondásomat is: tájidegen, mint kőház az Alföldön.</p>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_1899-scaled.jpeg" height="600" width="900">
        <img src="kepek/IMG_1893.jpeg" height="600" width="900">
        <img src="kepek/IMG_1903-scaled.jpeg" height="600" width="900">
        <img src="kepek/IMG_1904-scaled.jpeg" height="600" width="900">
    </div>

    <div class="p6">
        <h3>Mint a farmer – örök divat<br><br><br></h3>
        <p>Néhány éve még temetni akarták a hagyományos könyvnyomtatást, napjaink könyveladásai azonban azt bizonyítják, hogy a könyv együtt marad azt emberiséggel. Ugyanígy a slip joint mechanizmus egy egyszerű, mégis időtálló megoldás, amely a hagyományos bicskák világában éppúgy megállja a helyét, mint a modern, prémium kivitelű zsebkések között. Bár nem nyújt olyan biztos záródást, mint a komolyabb mechanikus zárak, cserébe egy olyan eszközt kapunk, amely számos országban törvényileg kevésbé problémás, könnyű és kompakt, és amely a késkedvelők körében mindig is nagy tiszteletnek örvendett. Legyen szó egy klasszikus svájci bicskáról, egy patinás német zsebkésről vagy egy modern gyártású prémium slip joint modellről, ezek a kések mindig a hétköznapi elegancia és a funkcionalitás tökéletes egyensúlyát képviselik.</p>
    </div>

    <div class="kepek7">
        <img src="kepek/IMG_1886.jpeg" height="600" width="900">
        <img src="kepek/logo_nagy_ives.jpg" height="400" width="400">
    </div>

    <div>
    <a href="manualiselezok.php" class="btn" style="position: absolute; top: 13250px; left: 10%;">← Manuális élezők,avagy magad uram, ha szolgád nincsen</a>
        <a href="olcsojanos.php" class="btn" style="position: absolute; top: 13250px; left: 45%;">Olcsó János túrázni megy! →</a>
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
            top: 990px;
            left: 14%;
        }
        .p2 {
            position: absolute;
            top:2660px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:3000px;
            left: 14%;
        }
        .p3 {
            position: absolute;
            top:3460px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:4400px;
            left: 19%;
        }
        .p4 {
            position: absolute;
            top:6070px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:6690px;
            left: 17%;
        }
        .p5 {
            position: absolute;
            top:8380px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:9500px;
            left: 17%;
        }
        .p6 {
            position: absolute;
            top:11780px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:12200px;
            left: 17%;
        }
    </style>
</body>
</html>