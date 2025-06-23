<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Szamurájkard</title>
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
        <h1>Lali szamurájkardja</h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. ápr. 6. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/20250222_1659167002-980x677.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <p>Képzeljük el Lalit, aki nyílászárók beszerelésével keresi a kenyerét.<br>Egyszerű építőipari munkás, aki már évek óta megbízható munkát végez.<br>Szépen építgeti az életét, komoly barátnője van, saját lakásra gyűjt.<br><br><br>Egyik reggel, amikor egy újépítésű házhoz szállnak ki a főnökével és egy másik melóssal, Lali a kipakolás során azt tapasztalja, hogy a márkajelzés nélküli sniccer, amit eddig használt, szétesve hever a szerszámos vödörben.<br>Valószínűleg a szállítás közben összeverődött valami keményebb szerszámmal, és ez lett a veszte.<br><br><br>Mikor ezt jelenti a főnökének, az a kezébe nyom egy aránytalanul vastag és hosszú markolatú, rikítóan sárga tapétavágó kést, amin az OLFA felirat díszeleg.<br><br><br>– Ma ezt használod Lali. Na, ez ki fog bírni mindent, nem kell félteni.</p>
    </div>

    <div class="kepek2">
        <img src="kepek/20250322_1027004482-scaled.jpg" height="550" width="1000">
        <img src="kepek/20250309_1655302022-scaled.jpg" height="550" width="1000">
    </div>

    <div class="p2">
        <p>Lali a száját húzva forgatja a kezében a szögletes műanyagdarabot.<br>Bizalmatlanul kilazítja a csavarját, és teljes hosszában előtolja a tíz centi hosszú, két és fél centi széles, tördelhető és cserélhető acélpengét.<br><br><br>– Vigyázz az ujjadra, mert ez egy éles cucc! Japán.<br>Igazi szamuráj penge – vigyorog a főnök, aztán rágyújt egy cigire, és elkezd telefonálni.<br><br><br>Lalit a sniccer nem szamurájkardra, inkább egy kilencvenes évekbeli blokktégla-méretű mobiltelefonra emlékezteti.<br>Mindenesetre zsebébe szuszakolja a behemót eszközt, és nekiugrik az aznapi feladatainak.</p>
    </div>

    <div class="kepek3">
        <img src="kepek/20250322_1026514562-scaled.jpg" height="400" width="800">
        <img src="kepek/20250309_170611171-scaled.jpg" height="400" width="800">
    </div>

    <div class="p3">
        <p>A tapétavágó először akkor kerül elő, amikor le kell bontani a csomagolást a műanyag nyílászárók tartozékairól.<br>Lali meglepve tapasztalja, hogy a hatalmas markolatból előbukkanó, egy milliméternél valamivel vékonyabb penge nagyon precíz vágásokat lesz lehetővé.<br>A csavaros megoldás révén pontosan olyan hosszúra (azaz rövidre) tudja állítani a pengét, amennyire neki a munkájához kell.<br><br><br>A következő alkalom, amikor a sniccer szerephez jut, az az újonnan behelyezett ablaktokoknál lévő púrhab felesleg levágásának a pillanata.<br>Lali itt már nagyobb hosszt használ a pengéből, és jobban rámarkol a markolatra is.<br>A japán csoda szuperül muzsikál, kiválóan teszi a dolgát.<br>A vágások tiszták, az eszköz fogása a markolat szögletessége ellenére kényelmes. Lali elég izzadós, de a tenyerében nem csúszik meg az eszköz, köszönhetően a markolat egyik oldalán lévő bordázott gumi berakásnak.</p>
    </div>

    <div class="kepek4">
        <img src="kepek/20250319_1657077462-scaled.jpg" height="400" width="800">
        <img src="kepek/20250319_1654392532-scaled.jpg" height="400" width="800">
    </div>

    <div class="p4">
        <p>Délben Lali házi kolbászt eszik császárszalonnával és kenyérrel.<br>Érdekességképpen kipróbálja, hogy milyen a japán sniccerrel felvágni az ennivalót.<br>Az eredmény bámulatos. A tapétavágó pont úgy karikázza kolbászt, mint egy konyhakés.<br>Persze Gyuri, a melós kollégája kineveti Lalit, amiért nem rendes bicskát használ ilyesmire, de emberünk egy vállrándítással túllép az ügyön, hiszen Gyuri kiflit eszik, amit kefírbe mártogat, és nemhogy bicskája, de semmiféle vágóeszköze nincsen.<br><br><br>Lalit a délután a létra tetején éri. Fenn a magasban próbál kifeszegetni egy beragadt éket az egyik új ablaktok mellől.<br>Lemászni nem akaródzik neki a pajszerért, így jobb híján a zsebében talált sniccerrel próbálkozik a feszegetéshez.<br>A vékony penge utolsó három millimétere az első mozdulatnál letörik, úgyhogy emberünk taktikát vált: a tapétavágó markolatából kinyúló fém sínt használja, amiben a penge fut.<br>Ez teljesen jól muzsikál rögtönzött feszítővasként, az ék kimozdul a helyéről.<br><br><br>A létráról lemászva Lali úgy dönt, hogy az eltompult hegyet letöri a sniccer pengéjéről.<br>Beállítja a penge hosszát, hogy csak egy perforáció legyen szabadon, majd kombinált fogóval megragadja a sérült pengeszakaszt.<br>Egy apró mozdulat, egy halk pukkanás, és a darabka acél már le is vált, a sniccer pedig pont ugyanolyan hegyes, mint új korában.</p>
    </div>

    <div class="kepek5">
        <img src="kepek/20250319_1655342833-scaled.jpg" height="400" width="800">
    </div>

    <div class="p5">
        <p>A nap végén még némi hegyezni való is akad a tapétavágó számára.<br>A főnök ácsceruzájának a hegye kitört, és Lalira vár a feladat, hogy újra hegyessé varázsolja. A sniccer itt is tökéletes munkát végez, annak ellenére, hogy a grafit több helyen is el van törve a ceruzában, így többször is ki kell hegyezni azt.<br><br><br>Délután négykor történik egy apró baleset. Lali dedobja a szerszámos vödörbe a sniccert, a kollégája pedig hanyag mozdulattal utánavágja a kalapácsot.<br>Valami reccsen, Lali pedig aggódva néz a vödörbe. Vajon a kalapács összetörte a japán csodát?<br><br><br>A szamurájsniccer a kemény becsapódás ellenére kitart.<br>A műanyag burkolaton ugyan lett egy plezúr, de szerkezetileg hibátlanul működik, a markolatban futó fém sín, a penge és a csavar is sértetlen marad rajta.<br><br><br>– Na mi a helyzet, Lali, mi ez az ijedt tekintet? – kérdezi a főnök emberünket.<br>– Azt hittem, hogy vége lesz a szuper sniccernek, mert az előbb ez az ökör Gyuri rádobta a kalapácsot. De úgy látom, bírja a gyűrődést.<br>– Bírja hát. Össze van ez rakva rendesen – mondja a főnök. – Egyébként rendes cég ez az OLFA. Olvastam valahol a neten, hogy egy muksó elhagyta a snicceréből a csavart, és a márkakereskedés simán küldött neki ingyen egy új alkatrészt.<br>Tudod, ezek a japók nem fikával gurigáznák, komolyan veszik a jó hírnevüket.<br>Az OLFA már vagy hatvan éve gyárt sniccereket, így értenek hozzá, hogy csináljanak minőségi cuccokat.<br>– És mennyibe fáj egy ilyen szamuráj vas, mesterem? Lehet, hogy beszerzek egyet otthonra is, már ha megemeled a fizumat, hogy ki tudjam köhögni az árát.<br><br><br>A főnök hangosan felröhög.<br>– Ügyes próbálkozás Lali, de ezzel most melléfogtál. Ebbe a sniccerbe nem fogsz anyagilag bekerokkanni.<br>Kemény háromezer forintba kerül, ha jó helyen veszed. A pótpenge meg húszas csomagonként ötezer pénz.<br>Nekem van a kertben három ilyen böhöm sniccer, egy csomó normál pótpenge, meg egy fűrészes élű penge is hozzá. A kertben ezt használom mindenre, amihez nem kell láncfűrész vagy balra.<br>Tudod mit? Vidd haza, ez a tapétavágó lesz a mai sikerdíjad! – kacsint a főnök széles vigyorral Lalira.</p>
    </div>

    <div class="kepek6">
        <img src="kepek/20250322_130538586-scaled.jpg" height="400" width="800">
    </div>

    <div class="p6">
        <p>– Hát tudod, jó ez a cucc, de a pénzt azért mégiscsak jobban szeretem… nem lehetne mégis, hogy inkább háromezerrel megdobod a napi bérem? – próbálkozik Lali sunyi képpel.<br><br><br>– Na elég lesz a hülyeségből! – zárja rövidre a beszélgetést a főnök. Borostás képéről eltűnik a vigyor, és szigorú szemmel néz a munkására.<br>– Vidd haza a tapétavágót, amíg még jó kedvemben vagyok!<br><br><br>Lali elhúzza a száját, és valami köszönetfélét motyogva a zsebébe rakja a sniccert.<br><br><br>Hazafelé tartva valahogy megint a keze ügyébe kerül a tapétavágó.Tapogatja, fogdossa a markolatot, kitolja a pengét, aztán visszatolja a helyére. Feltűnik neki, hogy meghúzáskor a pengerögzítő csavar a sínbe fúródik, és karcolásnyomokat hagy maga után azon. Ez elég furán néz ki, de végül is egy munkaeszköznél kb. pont lényegtelen, ha karcos a belseje. Rögzített állapotban megpróbálja megmozgatni a pengét, de az igen keményen tart, nem mocorog. Akár még szúrni is lehet vele, és nem ugrik vissza a helyére. Ujjait végigfuttatja a penge éles hátán, ami adott esetben kaparásra is kiválóan alkalmas lehet.<br><br><br>– Hát ez is több, mint a semmi – állapítja meg végül, és visszacsúsztatja a zsebébe az eszközt.<br><br><br>Lali így kapja meg azt a tapétavágó kést, amit utána hosszú évekig nagy megelégedéssel használ a mindennapokban.<br><br><br>Ha te is olyasmi életet élsz, mint Lali, érdemes lehet neked is egy próbát tenned ezzel a méretes japán szamuráj sniccerrel!</p>
    </div>

    <div class="kepek7">
        <img src="kepek/20250319_1802363772-scaled.jpg" height="400" width="800">
        <img src="kepek/logo_nagy_ives.jpg" height="400" width="400">
    </div>

    <div>
        <a href="olcsojanos.php" class="btn" style="position: absolute; top: 7600px; left: 10%;">← Olcsó János túrázni megy!</a>
        <a href="webanted.php" class="btn" style="position: absolute; top: 7600px; left: 30%;">We Banter -Újratöltve →
        </a>
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
            top: 1150px;
            left: 14%;
        }
        .p2 {
            position: absolute;
            top:2150px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:2520px;
            left: 19%;
        }
        .p3 {
            position: absolute;
            top:3070px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:3630px;
            left: 20%;
        }
        .p4 {
            position: absolute;
            top:4300px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:4800px;
            left: 20%;
        }
        .p5 {
            position: absolute;
            top:5070px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:5840px;
            left: 20%;
        }
        .p6 {
            position: absolute;
            top:6110px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:6750px;
            left: 20%;
        }
    </style>
</body>
</html>