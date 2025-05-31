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

    <main class="content">
        <h1>Byrd Cara cara 2</h1>
        <p>Szerző: VaszilijEDC Ultra | 2024. dec. 15. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/Kep1-936x675.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <p>A Byrd Cara cara 2-t egy impulzusvásárlás során szereztem be használtan, jóárasítva. Egy potenciális munkakést, mentőkést láttam benne. Az évek során bebizonyította, hogy egy igazi “igásló”, amire mindig lehet számítani.<br><br>Egy kis háttér:<br><br>A Byrd a Spyderco leányvállalataként működik, és termékeiket Kínában gyártják. Olcsó, “budget friendly” foldereket gyártanak egész jó minőségben. Jó pár Spyderco modellnek megtalálhatjuk a Byrd folderjei között a “kínai unokatestvérét”. A Byrd Cara cara 2 méreteiben a Spyderco Endelának felel meg. Vitathatatlan, hogy a Spyderco jobb, minőségibb hatást kelt, de ez nem azt jelenti, hogy a Byrd gagyi vagy rossz minőségű lenne. A Cara cara névadásáról sajnos semmilyen infót nem találtam. Számos változata kapható a piacon. Ezek a változatok a markolat anyagában (FRN, G10, rozsdamentes acél), a penge formájában (leaf shape, wharncliffe, rescue, emerson) , illetve az él kialakításában (sima, félszerát, szerát) térhetnek el egymástól.</p>
    </div>

    <div class="kepek2">
        <img src="kepek/kep_2.jpg" height="800" width="700">
    </div>

    <div class="p2">
        <p>Külsőségek:<br><br>Hazudnék, ha azt mondanám, hogy a Cara cara 2 egy szemnek tetsző, jó megjelenésű, szép folder. Mondjuk a szépség relatív. Az első Cara carákhoz képest (azok még púposak voltak) a Cara cara 2 egyenes pengegerinccel már egészen tetszetős. Megjelenése igencsak taktikai, nem túl mugli-barát. A levél alakú pengén a Byrdre jellemző üstökös formájú nyitófurat van. Engem ezzel a nyitófurattal a penge egy ragadozó madár fejére emlékeztet. A Byrd felirat és az anyagmegjelölés a pengetőre került, így abszolút nem kelt bennünk hivalkodó, reklámtáblaszerű hatást.</p>
    </div>

    <div class="kepek3">
        <img src="kepek/kep_3.jpg" height="800" width="700">
    </div>

    <div class="p3">
        <p>A penge másik oldalán – szintén a penge tövében – egy apró felirat jelzi, hogy ez a folder bizony eredeti kínai termék. A markolat lapos kialakítású, így nagy mérete ellenére kényelmesen hordhatjuk a zsebünkben. A G10 textúráját nagyon jól eltalálták. Nem csúszik a kézben, de nem szaggatja az ember zsebét a kés elővétele közben. A deep carrynek nem nevezhető klip négy állásban áthelyezhető, így a balkezesek is tudják használni.<br><br><br>Paraméterek:<br><br>Penge hossza: 95 mm<br>Penge vastagsága: 3 mm<br>Penge anyaga: 8Cr13MoV<br>Markolat hossza: 123 mm<br>Markolat anyaga: G10<br>Zár: Hátsó zár<br><br><br>Mivel használt folderről volt szó, vásárlás előtt röviden tájékozódtam a kés állapotáról, mert a hirdetés leírása szerint némi törődést igényelt. Az eladó leírta, hogy ő horgászkésként használta és nem igazán foglalkozott az ápolással, karbantartással. Ez nyomot hagyott a késen. A pengére ráfért egy élezés, de ez volt a kisebbik probléma. A linerek, köszönhetően a horgászláda által konzervált nedves környezetnek, rendesen berozsdásodtak.</p>
    </div>

    <div class="kepek4">
        <img src="kepek/kep_4.jpg" height="500" width="750">
    </div>

    <div class="p4">
        <p>Némi csiszolás után ez a probléma is megoldódott. De a „feketeleves” az összeszerelés után jött! A hátsó zár rugóját tartó kis nyelv letört és így nem tartotta a pengét sem csukott, sem nyitott állapotban. Szétszedéskor sem láttam jelét a törésnek, így reklamálni is felesleges lett volna. Használt kés vásárlásánál sajnos nincs garancia. Olcsón vettem, de ahhoz meg drága lett volna, hogy csak úgy kidobjam. Arra nem láttam esélyt, hogy valamelyik csoportban találok egy olcsó donort. Nem volt mit tenni, hegeszteni kellett! Azt tudni kell, hogy a hegesztés nem tartozik az erősségeim közé, de valami csodával határos módon mégis sikerült megoldani a problémát. (Ahogy felénk mondják, megtaknyoltam vagy meggányoltam).</p>
    </div>

    <div class="kepek5">
        <img src="kepek/kep_5.jpg" height="700" width="400">
    </div>

    <div class="p5">
        <p>Összeszerelve a folder működőképes volt, de a penge ettől kezdve jelentősen félre zárt. Sok idő kellett ahhoz, hogy ez ne zavarjon, és ne akarjam minden áron beállítani középre a pengét, mert úgysem lehet, valószínűleg a hegesztés miatt. (El is nyaltam ezekkel a kísérletekkel egy jó pár csavart.)<br><br>Miután elhárítottam a problémát, nekiláttam a penge átalakításának. Mivel mentőkésként akartam használni, a kifejezetten szúrásra alkalmas hegy hátrányt jelentett ebben az elképzelésben. A Benchmade Griptilian (sheepfoot) mintájára óvatosan leköszörültem a hegyet. (Így kisebb eséllyel sértem meg vele a beteget a ruha levágásakor.)</p>
    </div>

    <div class="kepek6">
        <img src="kepek/kep_6.jpg" height="900" width="800">
    </div>

    <div class="p6">
        <p>Ha már a hegesztés hőhatásától úgyis elszíneződött a backspacer, így az egészet hővel színeztem. A klipet is próbáltam ugyanolyan színűre színezni több-kevesebb sikerrel.<br><br><br>Az átalakított Cara cara 2 használat közben:<br><br>Mivel mentőkésnek szántam, így elsősorban a mentési munka során felmerülő feladatok ellátására használom.<br><br>Nagy mérete itt kifejezetten előnyös. A lapos markolat és a G10 finom textúrája miatt kényelmesen hordható zsebben. A nagy méretű nyitófuratnak köszönhetően simán lehet egy kézzel nyitni-csukni. A zökkenőmentes nyitást, csukást foszforbronz alátétek biztosítják. A hátsó záras bicskákra jellemző döccenés itt is megvan, de oldal irányú kottyanás nincs. A klip elhelyezkedése miatt kb. 2 centiméter kilátszik a késből, ha zsebre tesszük. Ez elővételkor kifejezetten előnyös (véres, váladékos kesztyűvel nem kell mélyen a zsebemben kotorásszak a kés elővételekor).</p>
    </div>

    <div class="kepek7">
        <img src="kepek/kep_7.jpg" height="1000" width="900">
    </div>

    <div class="p7">
        <p>A pengegerincig elvékonyodó kialakítása jó vágó és metsző képességet biztosít a késnek. Ruházat vágásánál (ha nem egyszerre több réteget akarok átvágni) igen jól teljesít. A módosított hegynek köszönhetően a hegy nem sérti meg a beteg bőrét. A megmaradt infúziók palackjának kivágásával is könnyen megbirkózik. Az oxigénpalack zárókupakjának levágásakor előnyösebb lenne egy agresszívabb hegy, de megoldható ez a feladat így is. Az eü. ellátmány kartonpapírjának összeaprításával is egész jól boldogul, bár itt már annyira nem kényelmes számomra a keskeny markolat. A kartonpapír darabolása során jelentősen veszített az éléből. Áldás és átok is ez a 8Cr13MoV acél. Áldás, mert gyakran “úszik” a fertőtlenítő szerben, ám ennek ellenére nem rozsdásodik. Áldás, mert egy Work Sharp 2.2.1- el percek alatt borotvaélesre lehet élezni. Átok, mert nem a legjobb az éltartása, sűrűbben kell élezni.</p>
    </div>

    <div class="kepek8">
        <img src="kepek/kep_9.jpg" height="600" width="900">
    </div>

    <div class="p8">
        <p>Talán egyik késemet sem használom annyit, mint a Byrd Cara cara 2-t. Nem szép, karcos, félre zár, nem a legjobb az acélja, többször kihajlott már a klipje is (mondjuk pont ezek miatt nem is félek használni), de számomra ez az ideális mentőkés. Mostoha körülmények közt is jól teljesít. Kaptam egy FRN markolatos Rescue Cara cara-t, de a szeráttól még mindig idegenkedek egy kicsit. Lehet, hogy adok majd annak is egy esélyt, de az igazi “ igásló “ a Byrd Cara Cara 2 G10 marad.</p>
    </div>

    <div class="kepek9">
        <img src="kepek/kep_10.jpg" height="1000" width="800">
    </div>

    <div class="p9">
        <p>Nektek van olyan folderetek, késetek, amit bátran használtok akár nem rendeltetésszerű feladatokhoz is? Van olyan késetek, bicskátok, ami egy igazi “igásló”? Írjátok meg kommentben. Vagy mutassátok meg!</p>
    </div>

    <div class="kepek11">
        <img src="kepek/logo_nagy_ives.jpg" height="400" width="400">
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
            top: 1070px;
            left: 24%;
        }
        .p2 {
            position: absolute;
            top:1740px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:2060px;
            left: 24%;
        }
        .p3 {
            position: absolute;
            top:2620px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:3330px;
            left: 23%;
        }
        .p4 {
            position: absolute;
            top:3700px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:3990px;
            left: 35%;
        }
        .p5 {
            position: absolute;
            top:4570px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:4900px;
            left: 22%;
        }
        .p6 {
            position: absolute;
            top:5680px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:6100px;
            left: 17%;
        }
        .p7 {
            position: absolute;
            top:6990px;
            padding: 11%;
            text-align: center;
        }
        .kepek8 {
            position: absolute;
            top:7330px;
            left: 17%;
        }
        .p8 {
            position: absolute;
            top:7720px;
            padding: 17%;
            text-align: center;
        }
        .kepek9 {
            position: absolute;
            top:8050px;
            left: 21%;
        }
        .p9 {
            position: absolute;
            top:8850px;
            padding: 17%;
            text-align: center;
        }
        .kepek11 {
            position: absolute;
            top:910px;
            left: 17%;
        }
    </style>
</body>
</html>