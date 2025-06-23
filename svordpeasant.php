<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Svord Peasant</title>
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
        <h1>Svörd Peasant</h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. jan. 26. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/Kep1.jpg" height="550" width="1000">
    </div>

    <div class="p1">
        <p>Magányos túrázó sétál a Fekete-Körös gátján a táborhelye felé. Apró hobó kályhájában ropog a tűz. Sült szalonna és lilahagyma illata terjeng a táborhelyen. A túrázó fatányéron katonázza a falatokat surlódó záras bicskájával. Legalábbis ez a kép jelent meg a szemeim előtt, amikor megnyomtam a rendelés gombot a Svörd Peasant képe alatt a webshopban. Bevallom semmilyen racionális oka nem volt a beszerzésének, egyszerű impulzusvásárlás volt. Csábított a Svörd Peasant ára és a kíváncsiság, mivel nem volt még surlódó záras bicskám. Mire megérkezett a kés, már számos videót megnéztem és nagyjából tisztába kerültem az előnyeivel, hátrányaival, és a hibáival (illetve azok elhárításával), de erről kicsit később.<br><br><br>Egy kis Svörd történelem:<br>A Svörd Knives-t 1983-ban alapította meg az akkor 18 éves Bryan Baker Új-Zélandon. A A Cég vonzó, kézzel készített outdoor késeket készít megfizethető áron. Termékei közt találhatunk konyhakéseket, bushcraft és surlódó záras paraszt késeket (akár acélmenteseket is).<br><br>Így az elején tisztázzuk mi is az a Friction Folder, avagy Surlódó Záras bicska. (Korábban már írt a méltán híres blogger, VaszilijEdc, a zártípusokról, amiben említést tesz a surlódó zárról is. Itt találhatjátok a cikket: https://vaszilijedc.hu/zarszerkezet2/ ) !<br><br>Az elnevezése megtévesztő lehet, mert semmilyen zár nincs benne! A pengét a penge, illetve a markolat panelek közti surlódás tartja nyitott vagy csukott állapotban. Rendelkezik egy nyúlvánnyal, ami a nyitást, illetve nyitott állapotban, ha rámarkolunk a markolatra, akkor a penge nyitott állapotban tartását szolgálja.<br><br>Paraméterek:<br><br>Származási hely: Új-Zéland<br>Penge hossza: 76 mm<br>Penge vastagsága: 1,8 mm<br>Penge anyaga: 15N20<br>Markolat hossza: 124 mm<br>Markolat anyaga: Polipropilén<br>Zár: Friction lock – surlódó zár</p>
    </div>

    <div class="kepek2">
        <img src="kepek/kep2.jpg" height="600" width="650">
    </div>

    <div class="p2">
        <p>Első benyomások:<br><br>A Svörd Peasant ezzel a furcsa nyúlvánnyal igencsak érdekes megjelenésű. Modern folderekhez képest a nyitása nehézkes. Baszkurálhatósági tényezője (fidget factor) mint olyan nem nagyon van, ezt ne is várjuk tőle, viszont az egykezes nyitás kis gyakorlással megoldható vele. A polipropilén markolatpanelek alatt semmilyen merevítést, linert nem találunk. A markolatpanelek széle sorjás volt. Erre számítottam is a megnézett videók alapján. A markolat a penge felől keskenyedik és enyhén íves. A markolat kényelmes fogású és meglehetősen méretes. Nagy kezű éltársaknak is bátran ajánlom. A penge konvex leélezést kapott. Az 1,8 mm vastag pengével nem fogunk az erdőben menedéket építeni, de nem is ez a cél. Elsősorban étkezéshez, kisebb edc feladatokhoz, illetve a túrák során terveztem használni. A leírások szerint a 15N20 szénacél ezekhez a feladatokhoz tökéletes választás.<br><br><br>A Peasant használat közben:<br><br>A konyhai feladatoknál számításba kell vennünk, hogy a felhasználás során a penge hossza lesz a szűk keresztmetszet. Zöldségek pucolásához, szeleteléséhez a gyakorlatban elégnek bizonyult ez a hossz. A vékony pengének köszönhetően a kés nem repesztette a feldolgozandó terméket. A penge hamar és szépen patinásodott (pár éve még azt írtam volna, hogy gyorsan elkezdett rohadni a penge). Tisztítása egyszerű, de mosogatás után érdemes szárazra törölni és beolajozni a pengét.<br><br>Edc szerepkörben is kipróbáltam. Itt akadt némi problémám a késsel, illetve a hordhatóságával. A penge mérete miatt hazánk törvényei szerint legálisan hordhatnánk, de nagy mérete plusz a nagy nyitó nyúlványa miatt kényelmetlen volt a zsebben hordása. Mivel zár nélküli szerkezetről beszélünk, így semmi sem biztosította azt, hogy ne nyíljon ki a bicska a zsebemben (szó szerint). Kezdetben egy befőttes gumival rögzítettem a pengét a markolatba, de valljuk be ez nem egy elegáns megoldás (még ha működik is). Ezen okok miatt számomra nem volt túl ideális edc eszközként. Otthon egyéb edc feladatként kartonpapír darabolásra használtam. A penge geometriája, leélezése, és vastagsága optimális volt ehhez a feladathoz. Még a vastagabb kartont is szépen vitte. A zár nélküli konstrukció itt nem jelentett hátrányt.</p>
    </div>

    <div class="kepek3">
        <img src="kepek/Kep3.jpg" height="700" width="1000">
    </div>

    <div class="p3">
        <p>A meló miatt mostanában nem jutottam ki túrázni, kempingezni, hogy így tesztelhessem a Svördöt, de igyekeztem otthoni körülmények közt imitálni egy kemping során elvégzendő feladatokat. Tollaság készítéssel, faragással és ütőfázással teszteltem le a Svördöt. A tollaság készítés meglepően jól ment neki. Kicsit tartottam attól, hogy a nyúlvány vége nyomni fogja a tenyeremet, de meglepődve tapasztaltam, hogy kicsit sem éreztem kellemetlen nyomó, szúró pontot. Ellenben az elkeskenyedő markolatot szorítanom kellett, hogy irányítani tudjam, ez okozott némi görcsöt a tenyeremben. A faragással is jól boldogult a kés. Itt sem okozott problémát a nyitó nyúlvány. Több fogásnemben is faragtam vele, mindegyikben jól működött. Sem a tollaság készítésnél, sem a faragásnál nem éreztem a zár hiányát, nem hátráltatott a kés zár nélkülisége.</p>
    </div>

    <div class="kepek4">
        <img src="kepek/kep4.jpg" height="900" width="900">
    </div>

    <div class="p4">
        <p>Kipróbáltam az ütőfázást is vele (itt elsősorban a szerkezet tartósságára voltam kíváncsi). Mint sejthető, ezen a próbán nem remekelt a Peasant. Egyrészt az 1,8 mm vastag penge repesztő képessége csekély. Másrészt a zár nélküli szerkezet miatt folyton bebicsaklott a penge, de a szerkezete nem sérült és a bicska egyben maradt. YouTube videó szerint a kést szétszedve, a nyitó nyúlványt fogva lehetne vele hatékonyan ütőfázni.<br><br>A tesztek végére a kés éle a szőrt már nem vitte, de még elégséges munkaéle maradt a további használathoz.<br><br>Összességében a Svörd Peasant jól teljesített az általam kiagyalt próbatételeken, de akadnak hibái. Nem nagy hibák, csak olyanok, amik egy kis otthoni craftolással könnyen javíthatók.<br><br><br>Hibák és a megoldásuk:<br><br>A cikk elején említettem, hogy a markolatpanelek széle kicsit sorjás volt. Köszönhetően az egyszerű felépítésének, két csavar kicsavarásával már szét is szedhetjük a bicskát. Innen már gyerekjáték volt egy kis csiszolópapírral a sorjátlanítás. A hordhatóság, illetve a zsebben kinyíló penge problémáját egy egyszerű erszénytokkal orvosoltam. A nyitó nyúlvány továbbra is okozott némi kényelmetlenséget, de legalább a zsebben hordása biztonságossá vált.</p>
    </div>

    <div class="kepek5">
        <img src="kepek/kep5.jpg" height="600" width="900">
    </div>

    <div class="p5">
        <p>Az utolsó megoldandó probléma egy szerkezeti hiba volt. Történetesen a penge hegye beleért a markolat végén lévő tengelybe. A megoldást a YouTube-ról lestem el. Egy – a penge vastagságával megegyező – bőr vagy gumi alátétet kellett a tengelyre rakni, így a penge hegye ehhez záródik és nem egy fém tengelyhez. Mindegyik megoldás filléres tétel volt, mégis ezek a kis sufni tuningok sokat dobtak a kés használhatóságán és hordhatóságán.</p>
    </div>

    <div class="kepek6">
        <img src="kepek/kep6.jpg" height="950" width="900">
    </div>

    <div class="p6">
        <p>Összegzés:<br><br>A Svörd Peasant egy kellemes, jól használható kis kés, ha az ember ésszerűen használja. Szerintem hozza a kockás ingben, tűz mellett sütögetős feelinget. Mondjuk egy agancs markolattal még jobban hozná ezt az érzést. (Talán majd a jövőben készíttetek hozzá!)<br><br><br>Előnyei:<br><br>Sok színben kapható.<br>Legtöbb országban legálisan hordható.<br>Olcsó.<br>Könnyen élezhető.<br>Könnyen szerelhető.<br>Costumizálható.<br>Egy kézzel nyitható<br><br><br>Hátrányai:<br><br>A nyitónyúlvány nehézkessé teszi a mindennapi hordást.<br><br>A korábban említett apróbb szerkezeti és technológiai hibáit meg kell oldani vagy meg kell tanulni együtt élni velük.<br><br>A zár hiánya miatt tok nélkül nem biztonságos zsebben hordani.<br><br><br>Nektek van már tapasztalatok a surlódó záras bicskákkal? Ti kipróbálnátok a Svörd Peasantot? Milyen színben?<br><br>Írjátok meg a válaszotokat, véleményeteket kommentben!</p>
    </div>

    <div class="kepek7">
        <img src="kepek/logo_nagy_ives.jpg" height="400" width="400">
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
            top: 1380px;
            left: 25%;
        }
        .p2 {
            position: absolute;
            top:1850px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:2490px;
            left: 14%;
        }
        .p3 {
            position: absolute;
            top:2940px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:3400px;
            left: 18%;
        }
        .p4 {
            position: absolute;
            top:4170px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:4660px;
            left: 17%;
        }
        .p5 {
            position: absolute;
            top:5130px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:5400px;
            left: 17%;
        }
        .p6 {
            position: absolute;
            top:6230px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:6950px;
            left: 17%;
        }
    </style>
</body>
</html>