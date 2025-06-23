<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Aranyhal</title>
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
        <h1>Aranyhal a viperafészekből</h1>
        <p>Szerző: VaszilijEDC Ultra | 2024. dec. 29. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/IMG_2113-980x561.jpeg" height="550" width="1000">
    </div>

    <div class="p1">
        <p>A Viper Koit vagy 3 éve vettem egy helyi éltárstól, másodkézből. Nagyon tetszett a képeken és bemutató videókon, hamar elkapott a “ kell “ érzés. A cikk végére kiderül, megérte-e.<br><br><br></p>
        <h2>Egy kis történelem<br></h2>
        <p>A Tecnocut snc-t 1987- ben alapították az olaszországi Maniagoban. Küldetésük, hogy ahagyományos olasz kézműves termékeket modernkori technológiákkal ötvözve, fejlett gyártásifolyamatokkal elkészítve tovább öregbítsék az itáliai késkészítők hírnevét. Ehhez több nevestervezőt sikerült már megnyerni, hiszen Jens Anso, Rick Hinderer, Fabrizio Silvestrelli, TomassoRumici vagy jelen bemutatónk szellemi atyja, Jesper Voxnaes is letette már névjegyét a taljánkések fellegvárában.<br><br>Jesper dán származású késtervező, aki 18 évesen kezdte a saját stílusát kialakítani, ötvözveskandináv gyökereivel. Az eltelt évek alatt meghatározó tervezővé nőtte ki magát, számosikonikus kést hagyva az utókorra. Neve tulajdonosként szorosan összefügg a social médiában is– egyáltalán nem alaptalanul – rajongásig sztárolt Giantmouse késmárkával.</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_2263.jpeg" height="1000" width="800">
    </div>

    <div class="p2">
        <h3>Műszaki adatok<br></h3>
        <p>- Teljes hossz: 200 mm<br>- Markolat hossza: 117 mm<br>- Penge hossza: 83 mm<br>- Penge vastagsága: 3.8 mm<br>- Markolat anyaga: micarta<br>- Penge anyaga: Böhler M390<br>- Tömege 110 g<br>- Penge finis: kőmosott<br>- Tok: kydex<br><br><br></p>
        <h3>Hiba a mátrixban<br></h3>
        <p>Amikor megjelent a kínálatban a Koi, 3 különböző konfigurációban lehetett elérni:<br><br>– micarta markolatpanelek és Böhler N690 acél<br>– G10 markolatpanelek és Böhler N690 acél<br>– Carbonfiber markolatpanelek és M390 acél<br><br>Amennyiben valaki figyelmesen olvassa a műszaki adatokat, némi anomáliába ütközhet…ugyanis az általam birtokolt verzió nincs a felsorolásban. Mégis hogy lehet ez? Úgy, hogy a Viper gyártásközben egész egyszerűen belekeveredett a puzzle-be és sikerült micarta markolatok közészorítani az M390 acélú pengét…vagyis egy olyan darab van a gyűjteményemben, amihivatalosan nincs! Nem hiába csaptam le rá, amikor feltűnt a hirdetése.</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_2257.jpeg" height="650" width="900">
    </div>

    <div class="p3">
        <h3>Porondon<br><br></h3>
        <p>A penge Voxnaes sok tervéhez hasonlóan egy hasas formát követ, magasra húzott heggyel. A pengehossznál körülbelül fél centiméterrel hosszabb vágóélet kapunk így, ami a széles penge tövénél található ujjvédő miatt közel 100%-ban kihasználhatóvá teszi késünket egy vágódeszkás munka során.<br><br>A penge egyik oldalán a Vipernél megszokott cégjelzés és a termék neve, míg a másik oldalon a tervező bombajó logója és az acél jelölése látható. A penge nagyon szép kőmosott felületkezelést kapott, elfedve a használat során keletkező kisebb esztétikai hibákat. A teljes leélezésű, full tang kialakítású penge mindenhol nagyon szépen le van kerekítve, de egyhangyányit kilóg a tetszetős, de nem igazán hagyományos markolat formából. Kicsit szögletesebb, mint a legtöbb késé, cserébe nagyon kényelmes. Nyolc és feles kézzel bőven van még hely a markolaton,nem találtam olyan fogásnemet, amiben ne lett volna komfortos a munka.</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_2250.jpeg" height="1000" width="800">
        <img src="kepek/IMG_2265.jpeg" height="500" width="800">
    </div>

    <div class="p4">
        <p>A saját példányom a kezdetektől csokoládébarna színben pompázott, egy takarítás során derült ki, hogy az bizony gyárilag zöld színű….Pár nap használat után vissza barnult, mondjuk nekem jobban is tetszik ebben a formában. Egy kisebb és egy nagyobb átmérőjű csőszegecs rögzíti a pengén a markolatot, a hátsó mérete lehetővé teszi paracord zsinór kényelmes használatát, hogyha valaki erre ingerenciát érezne. Tökéletes kiegyensúlyozását mutatja, hogy az első szegecs alatt, egy ujjon egyensúlyozva is egy pillanat alatt vízszintesben marad a kés.</p>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_2267.jpeg" height="550" width="900">
    </div>

    <div class="p5">
        <p>Munkára fogva hozza a szokásos Vox jellegzetességeket: kiváló ergonómia, átgondolt tervezés és kivitelezés. A relatív vastag penge kompenzálva van a szélességgel és a megfelelően kialakított élszalaggal. Így már a konyhai munkákra is tökéletesen alkalmas, amennyiben a pengehossza nem jelent akadályt számunkra.</p>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_2248.jpeg" height="600" width="900">
    </div>

    <div class="p6">
        <p>A szokásos napi rutinfeladatok sem állítják megoldhatatlan feladat elé az olasz csődört. Legyen szó csomagbontásról vagy egyszerű faragásról, nem kell sem félteni, sem megijedni a használattól. Bár a vékony kialakítású markolat elsőre nem tűnik kényelmesnek, a gyakorlat rácáfol a felhasználóra. Az egyik legkényelmesebb kés a birtokomban lévők közül, ami meglehetősen sokat van használatban a mindennapokban. A Böhler M390 acélja egy kiváló éltartású, relatíve egyszerűen élezhető, a korróziónak nagy mértékben ellenálló anyag. A mindennapi társunkként jó szol gálatot tesz, és sűrűn nem is kéri karbantartását. Viszont nálam jelentkezett némi pontrozsdásodás, amit Flitz pasztával orvosoltam. Érdekes módon, a későbbi használat során ez az aprócska, ámde bosszantó dolog nem jelentkezett többé.<br><br>Egy dologról nem esett még szó, ez pedig a kés kydex anyagú tokja. A gyári tok egy nagyon kicsi kotyogást enged a késnek, de szerencsére nem zavaróan teszi. Ulticlip kompatibilis furatok segítenek a kés rögzítésében, de a gyárilag hozzáadott Tek-lok hasonmás rögzítő rendszer is egész használható. Mivel ez a megoldás több irányú hordást tesz lehetővé, érdemes kísérletezni vele. Én próbáltam több loopot is ezeken kívül, de valahogy nem igazán tudtam a számomra legkényelmesebb módon, víszintesen úgy rögzíteni a kést, hogy az minden szempontból kielégítse az igényeimet. Esteleg ha van köztetek, akinek ez már sikerült, megoszthatná tapasztalatait velem.</p>
    </div>

    <div class="kepek7">
        <img src="kepek/IMG_2260.jpeg" height="600" width="900">
        <img src="kepek/IMG_2262.jpeg" height="600" width="900">
        <img src="kepek/IMG_2261.jpeg" height="600" width="900">
    </div>

    <div class="p7">
        <h3>Konklúzió<br><br></h3>
        <p>A mai napig beszerezhető Viper Koi számomra az egyik legjobb kisfix. Nagyjából minden olyan kritériumot megtestesít, ami a napi szinten felmerülhet nálam egy fix kés használatakor. Nagyon ergonomikus, jól használható, nem annyira törődős és szerintem -bár ez relatív- egy kimondottan jó megjelenésű termék. A kb. három éves kapcsolatunk alatt semmilyen kirívó problémát nem tapasztaltam vele kapcsolatban. Nyugodtan mondhatom, hogy egy igazán jó minőségű és ár- érték arányú munkát tett le az asztalra Jesper Voxnaes és a Viper Tecnocut.</p>
    </div>

    <div class="kepek8">
        <img src="kepek/IMG_2114.jpeg" height="600" width="900">
        <img src="kepek/IMG_2264.jpeg" height="600" width="900">
    </div>

    <div class="p8">
        <p>Van már esetleg tapasztalatotok a Viper Koival? Mi a kedvenc kisfixetek, ami szerintetek hasonlóan jó tulajdonságokkal bír, mint a cikkünk alanya? Írjátok meg kommentben!</p>
    </div>

    <div class="kepek9">
        <img src="kepek/logo_nagy_ives.jpg" height="400" width="400">
    </div>

    <div>
        <a href="byrdcara.php" class="btn" style="position: absolute; top: 10670px; left: 10%;">← Byrd Cara cara 2</a>
        <a href="olfack.php" class="btn" style="position: absolute; top: 10670px; left: 25%;">Olfa CK-2 Kés helyett sniccer? →</a>
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
            top: 1170px;
            left: 20%;
        }
        .p2 {
            position: absolute;
            top:2040px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:2720px;
            left: 18%;
        }
        .p3 {
            position: absolute;
            top:3100px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:3670px;
            left: 20%;
        }
        .p4 {
            position: absolute;
            top:5050px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:5320px;
            left: 17%;
        }
        .p5 {
            position: absolute;
            top:5750px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:6000px;
            left: 17%;
        }
        .p6 {
            position: absolute;
            top:6480px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:6900px;
            left: 17%;
        }
        .p7 {
            position: absolute;
            top:8580px;
            padding: 11%;
            text-align: center;
        }
        .kepek8 {
            position: absolute;
            top:8920px;
            left: 17%;
        }
        .p8 {
            position: absolute;
            top:9920px;
            padding: 17%;
            text-align: center;
        }
        .kepek9 {
            position: absolute;
            top:10240px;
            left: 17%;
        }
    </style>
</body>
</html>