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
        <h1>We Banter -Újratöltve</h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. ápr. 20. | WE Knives, We knives, We knives, WE Knives</p>
    </main>

    <div class="kepek1">
    <img src="kepek/IMG_2549-980x626.jpeg" height="550" width="1000">
    </div>

    <div class="p1">
        <p>4 évvel ezelőtt született egy cikk Ben Petersen első saját tervezésű késéről ( We Banter).<br>Most, hogy megjelent a második generáció, valamint hogy lassan másfél éve használok egy módosított verziót az első szériából, elegendő oknak bizonyult, hogy újra górcső alá kerüljön a típus. Lássuk, mi változott, megugorja vajon az első változat által magasra tett lécet az új rokon?</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_2507.jpeg" height="550" width="1000">
        <img src="kepek/IMG_2421.jpeg" height="550" width="1000">
        <img src="kepek/IMG_2503.jpeg" height="550" width="1000">
    </div>

    <div class="p2">
        <h1>WE modBanter</h1>
        <p>A customizált verzió az egyik késes csoport “Karácsonyi karika” elnevezésű játéka során került a tulajdonomba.<br>Eredeti gazdája néhány olyan ponton módosított rajta a gyári változathoz képest, amik a felhasználói élményt nagyban képesek befolyásolni.<br>Több éltárs is meglepődött, amikor kézbe fogta ezt az egyedi darabot.<br>Bár majd mindenki találkozott az eredeti verzióval, az nem aratott akkora  sikert, mint ez a egyediség.</p>
        <p>Nézzük sorban a módosításokat.</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_0489.jpg" height="1000" width="1000">
        <h3>1.   Szín</h3>
    </div>

    <div class="p3">
        <p>Az eredetileg szürke markolatpanel egy speciális festékkel lila színűvé változott.<br>Mélyen a G10 anyagába diffundálva garantálja, hogy nem fog kopni vagy fakulni a használat során a kés színe.<br>Mindenhol egységes, átmenet és folt nélkül sikerült a művelet.<br>Ha nem tudnám, hogy ilyen színben sohasem volt elérhető a Banter, akár gyári verziónak is hihetném.</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_0399.jpg" height="1000" width="1000">
        <h3>2.   Furat</h3>
    </div>

    <div class="p4">
        <p>A show markolatpanelen elsőre feltűnik, hogy egy 8 mm-es furat fedi fel a távtartók közt megbúvó penge egy részét.<br>Túl azon, hogy szerintem jól néz ki, van egy nagyon egyszerű gyakorlati haszna is.<br>A zsebből kivéve ugyanis a G10 panel a szoros klipsszel együtt hajlamos volt nehézkessé tenni ezt az egyszerű mozdulatot.<br>A furat ezt segít kiküszöbölni: a hüvelykujjam beleakasztva kényelmesen és csúszás nélkül tudom azonnal elővenni a modBantert a zsebemből.<br>Mivel pár késnél találkoztam ezzel a megoldással, (Spyderco Watu, Fox Suru, Real Steel Bruns) örömmel fedeztem fel itt is.</p>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_2476.jpeg" height="600" width="900">
        <h3>3.  Ujjvédő</h3>
    </div>

    <div class="p5">
        <p>A gyári verzióhoz képest az íves panelvég és alatta a penge lecsiszolásra került, így kb.<br>egy centivel közelebb lehet fogni a penge tövéhez.<br>Nekem ez volt az a módosítás, ami a legtöbbet tett azért, hogy nemcsak jól használható, hanem  állandó zseblakóvá vált a különc WE. A gyári verzió</p>
        <p>ugyanis a vásárlást követő két hét után a szekrényben landolva pihenésre lett kárhoztatva.<br>Nem bírtam megszokni, hogy az íves rész elvesz annyi hasznos helyet a markolatból, hogy ezáltal kényelmetlen, túlságosan rövid  számomra.<br>A módosítást követően végre négyujjassá vált a kés, a finomabb munkákban könnyebben irányítható a penge, a fogása pedig egy cseppet sem lett veszélyesebb az ujjvédő hiánya miatt.</p>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_2478.jpeg" height="600" width="900">
        <h3>4.  Molettázás</h3>
    </div>

    <div class="p6">
        <p>Sajnos erre a módosításra nem találtam  egy az egyben megfelelőt a magyar  nyelvben, így el kell fogadnotok az általam kitalált szót.<br>A forma miatt  “Moletta”, alias Michele Pensato  jutott eszembe. Ő ugyanis előszeretettel alkalmaz ilyesfajta megjelenést az általa tervezett késeken.<br>A penge alakja egy kisebb beavatkozásnak köszönhetően hosszban ugyan nem változott, de “molettásabb” kinézetet kapott.<br>Tömzsibb megjelenésűvé vált, a hegy még kevésbé hajlamos a sérülésre, illetve a szúráskor fellépő ellenállás is talán kisebb a beavatkozás után.</p>
    </div>

    <div class="kepek7">
        <img src="kepek/IMG_2477.jpeg" height="600" width="900">
        <img src="kepek/IMG_2508.jpeg" height="600" width="900">
        <h3>5.  Finis</h3>
    </div>

    <div class="p7">
        <p>A penge és a klipsz is kapott (már tőlem) egy házi kőmosást.<br>A szatén pengefinis annyira nem az én világom, hogy a használat során keletkező harci sérülések minden egyes késemnél egy-egy gyomorszájra bevitt ütéssel érnek fel.<br>Ezt megelőzve kőmostam és újra éleztem a Banter S35vn pengéjét. Számomra így már a megjelenés mellett a használat is első osztályúvá vált.</p>
    </div>

    <div class="kepek8">
        <img src="kepek/IMG_2513.jpeg" height="600" width="900">
        <h1>Milyen a Banter, ha a személyi száma kettes?</h1>
    </div>

    <div class="p8">
        <p>Ben Petersen új Bantere bár kinézetre másképp mutat, alapvetően ugyanazt a szerepet hivatott betölteni, amit az első verzió.<br>Egy mindenki számára kényelmesen hordható és használható, kiváló minőségű és megfizethető folder kíván lenni.<br>A régi, faék egyszerűségű körvonal megmaradt ugyan, de már sokkal finomabb részletekkel kényezteti a késbarátokat.</p>
    </div>

    <div class="kepek9">
        <img src="kepek/IMG_2480.jpeg" height="600" width="900">
        <h3>Műszaki adatok:<br><br>Penge hossza: 73 mm<br>Penge anyaga: CPM S35VN<br>Penge vastagsága: 2,6 mm<br>Penge formája: Drop point<br>Markolat hossza: 96 mm<br>Markolat anyaga: Alumínium<br>Zár: Crossbar Lock</h3>
    </div>

    <div class="kepek10">
        <img src="kepek/IMG_2213.jpeg" height="600" width="900">
    </div>

    <div class="p9">
        <p>A második generáció már nem különböző színű G10-es és fa markolatú panelekkel érhető el, hanem jelenleg micarta és anodizált, mart alupanelekkel.<br>A három féle színhez 3 különböző pengefinis tartozik:<br><br><br><br>Zöld micarta – kőmosott felület<br><br>Kék anodizált alumínium – szatén felület<br><br>Lila anodizált alumínium – fekete kőmosott felület<br><br><br><br>A lila anodizált, mart alupanel nagyon jól harmonizál a fekete kőmosott felülettel.<br>Hasonlóan feketére felületkezelték a crossbar lock nyitógombjait, a penge nyitószemölcseit, a klipszet és a csavarokat is.</p>
    </div>

    <div class="kepek11">
        <img src="kepek/IMG_2214.jpeg" height="600" width="900">
    </div>

    <div class="p10">
        <p>A markolatpanel mart barázdái kellemes hűvösséggel simulnak a kézbe, nagyon jó tapadást biztosítva.<br>Hordás közben sajnálattal tapasztaltam, hogy hajlamos a kopásra, így akit ez zavar, gondolja meg ezen típusok vásárlását.<br>A hossza is változott az első kiadáshoz képest. Mindössze 5 mm-el nőtt meg, de ez előnyévé válik a késnek.<br>A lekerekítése pont annyira íves, hogy sokkal kényelmesebb használni, mint idősebb társát.<br><br><br>A két markolatpanel közti traktusban találhatóak a legnagyobb különbségek az első verzióhoz képest.<br>A panelek alatt könnyített linerek vannak, immár a zár miatt mindkét oldalon.<br><br><br>A második a zár típusa. A WE is felült a keresztzár vonatra, ami manapság nagyon népszerű a késes körökben.<br>Kijelenthetjük, hogy nemcsak meglovagolja ezt a sikerességet, hanem nevéhez méltóan szinte tökéletesre fejlesztette saját crossbar rendszerét.<br>A piacon található egyik – ha nem a legjobban működő – keresztzárja ugyanis olyan szintű fidget faktorral rendelkezik, hogy az folyamatos játékra csábítja a gyanútlan késfelhasználót.<br>Késbaráti társaságban körbeadva elképedő arcokat szült a Banter2, nem győztem felszedni a leesett állakat a földről.<br>Mindenki szuperlatívuszokban beszélt róla, pedig a Benchmade szabadalmaztatta zártípus bemutatása óta jó pár gyártó saját verzióját kipróbálhatta a nagyérdemű.<br>Ez viszont láthatóan nagyon betalált az érdeklődőknél.<br><br><br><br>A harmadik jól látható és hasznos különbség, hogy távtartók helyett egy, a markolattal színben harmonizáló backspacer került beépítésre.<br>Szerepe leginkább a kés stabilizálása. Szerencsére a WE minőségre olyan jó példa, hogy nem igazán tűnik fel, annyira sikerült integrálni.</p>
    </div>

    <div class="kepek12">
        <img src="kepek/IMG_2481.jpeg" height="600" width="900">
        <img src="kepek/IMG_2504.jpeg" height="600" width="900">
        <img src="kepek/IMG_2512.jpeg" height="600" width="900">
    </div>

    <div class="p11">
        <p>A markolatpanel klipsszel ellentétes oldalán egy, a pengével színben megegyező takarólemez vidítja fel a késes közösség balkezes tagjait.<br>Ugyanis végre megfordítható lett a klipsz, így igazán kétkezessé vált Ben Petersen kése.<br>Süllyesztett csavarjai nagy piros pontot érdemelnek, mondhatjuk: csak a szokásos WE minőség.<br><br>Az első generációhoz képest a logózott tengelycsavar nem olyan hangsúlyos, nekem jobban is tetszik.<br><br>A penge maradt a már jól bevált S35vn porkohászati acél, drop point formájú.<br>Jelen esetben fekete kőmosottat kapunk, ami a lilával nagyon jó kontrasztot mutatva kellemes megjelenésűvé teszi alanyunkat.<br>Továbbra is elmondható, hogy ez az acéltípus jól ellenáll a korróziónak, hosszan tartja az élét és házi körülmények közt is egész könnyen karbantartható.<br>A rajta található jelzések megegyeznek az előző kiadásnál már megszokottakkal, úgymint csak a jobb oldalon látható diszkrét anyagjelölés és Ben Petersen jól ismert logója.<br>Kerámia golyóscsapágyakon a penge a közhelyes “ zsírozott villám “ effektust bemutatva repül ki a helyéről, záráskor hasonlóan csukódik.<br><br><br>A rácsúszásgátló recézése kicsit durvább és a hossza pont a duplája a réginek, valamint a sharpening choil is megnőtt.</p>
    </div>

    <div class="kepek13">
        <img src="kepek/IMG_2509.jpeg" height="600" width="900">
        <h3>Használat közben<br><br><br><br></h3>
    </div>

    <div class="p12">
        <p>Sajnos sok újdonságot nem nagyon fogok tudni veletek megosztani.<br>Amennyiben eltekintünk a penge 73 mm-es hosszától, egész jól használható a mindennapokban előforduló általános feladatokra.<br>A relatív vékony penge teljes leélezése, pengegeometriája és a WE-től megszokott tökéletes élszalag kombinációja nagyon jó minőségű vágást tesz lehetővé.<br>A szokásos konyhai munkák, a kartonvágás és étkezés után semmi nyoma a pengén a használatnak, ami jó jel.<br><br><br>Kézben fogva semmilyen kellemetlen nyomás vagy diszkomfort érzés nincs.<br>Erősebb munkáknak még nem tettem ki, de az idő javulásával túrázásokkor is szándékomban áll bevetni majd.</p>
    </div>

    <div class="kepek14">
        <img src="kepek/IMG_2505.jpeg" height="600" width="900">
        <img src="kepek/IMG_2506.jpeg" height="600" width="900">
        <h3>Konklúzió<br><br><br><br></h3>
    </div>

    <div class="kepek15">
    <img src="kepek/IMG_2511.jpeg" height="600" width="900">
    <img src="kepek/logo_nagy.jpg" height="400" width="400">
    </div>

    <div class="p13">
        <p>Hordása a deep carry klipsznek köszönhetően teljesen észrevétlenné teszi a Banter2-t.<br><br><br>Jó hír, hogy a penge fekete finise nálam eddig kopást még nem mutat, ellentétben az anodizált markolatú alumínium panellel.<br>Könnyű és továbbra is szinte észrevétlen a zsebben, bár az új generáció már egyáltalán nem az a faék, aminek sokan tartották és tartják az előzőt.<br>A kifogástalan zár és a felhasználói visszajelzések alapján megváltoztatott apróságok mind a vásárlók igényeinek kiszolgálását mutatja.<br>Nyitása és csukása példaértékű, akár oktatóanyag is lehetne a késkészítő nagykönyvben.<br>A penge semmilyen irányban nem kotyog vagy lötyög: teljesen stabilan áll, akár zárt, akár csukott állapotban van.<br>Az általános minőségre nem nagyon lehet panasz, úgy vélem a pénzünkért egy kimondottan kellemes, immár sokkal kiforrottabb foldert kapunk, ami minden tekintetben felülmúlja elődjét.<br>A Banter2 a nevéhez méltóan ugratja a versenytársakat, fricskát mutatva nekik az ár-érték-fidget faktor háromszögben.<br><br><br>Nektek mik a tapasztalatotok a Banter családdal? Írjátok meg nekünk kommentben.</p>
    </div>

    <div>
        <a href="szamurajkard.php" class="btn" style="position: absolute; top: 18150px; left: 10%;">⬅ Lali Szamurájkardja</a>
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
            top: 950px;
            left: 14%;
        }
        .p2 {
            position: absolute;
            top:2500px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:2900px;
            left: 14%;
        }
        .p3 {
            position: absolute;
            top:3700px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:4100px;
            left: 14%;
        }
        .p4 {
            position: absolute;
            top:5010px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:5300px;
            left: 17%;
        }
        .p5 {
            position: absolute;
            top:5810px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:6180px;
            left: 17%;
        }
        .p6 {
            position: absolute;
            top:6700px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:7000px;
            left: 17%;
        }
        .p7 {
            position: absolute;
            top:8100px;
            padding: 11%;
            text-align: center;
        }
        .kepek8 {
            position: absolute;
            top:8400px;
            left: 17%;
        }
        .p8 {
            position: absolute;
            top:8850px;
            padding: 17%;
            text-align: center;
        }
        .kepek9 {
            position: absolute;
            top:9200px;
            left: 17%;
        }
        .kepek10 {
            position: absolute;
            top:10100px;
            left: 17%;
        }
        .p9 {
            position: absolute;
            top:10500px;
            padding: 17%;
            text-align: center;
        }
        .kepek11 {
            position: absolute;
            top:11100px;
            left: 17%;
        }
        .p10 {
            position: absolute;
            top:11500px;
            padding: 17%;
            text-align: center;
        }
        .kepek12 {
            position: absolute;
            top:12250px;
            left: 17%;
        }
        .p11 {
            position: absolute;
            top:13850px;
            padding: 17%;
            text-align: center;
        }
        .kepek13 {
            position: absolute;
            top:14500px;
            left: 17%;
        }
        .p12 {
            position: absolute;
            top:14950px;
            padding: 17%;
            text-align: center;
        }
        .kepek14 {
            position: absolute;
            top:15450px;
            left: 17%;
        }
        .p13 {
            position: absolute;
            top:16500px;
            padding: 17%;
            text-align: center;
        }
        .kepek15 {
            position: absolute;
            top:17100px;
            left: 17%;
        }
    </style>
</body>
</html>