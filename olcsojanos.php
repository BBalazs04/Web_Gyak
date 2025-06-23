<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Olcsójános</title>
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
        <h1>Olcsó János túrázni megy!</h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. márc. 23. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/IMG_2100-980x703.jpeg" height="800" width="700">
    </div>

    <div class="p1">
        <p>Mindennapi életünk tele van rohanással, stresszhatásokkal. Meló, beosztás, család, egészség, mindennapi gondok. Ezek mellé még van egy jókora digitális függésem is. Képes vagyok naphosszat a telefon képernyőjét bámulni. Kell néha egy kis reboot vagy restart, egy kis digitális detox. Erre kiválóan alkalmas egy jó gyalogtúra kis kempingezéssel egybekötve. A kérdés lehet-e ezt olcsón csinálni? Nem én fedezem fel a témában a spanyolviaszt, sokan foglalkoztak már a témával. A tapasztalataimat szeretném elmesélni és esetleg a komment szekcióban eszmét cserélni.<br><br><br>Tehát hajlamosak vagyunk a túránk közben is a social media hatására és annak tetsző „fancy” cuccokat beszerezni a túránkhoz, függetlenül a funkciójától. Én bevallom őszintén spúr vagyok! Amolyan „Olcsó János”. Szeretem megúszni olcsóbban a dolgok beszerzését, ehhez van időm, türelmem, és néha a barkácsolástól sem riadok vissza.<br><br><br>A terv egy 35 km-es gyalogtúra volt, közúton és földúton vegyesen, féltávon egy kis ebédszünettel.</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_2107.jpeg" height="1200" width="800">
    </div>

    <div class="p2">
        <p>Túra felszerelésemet is a spúrság jellemezte. Kezdjük a cipővel!<br><br><br>Legolcsóbb megoldás az lett volna, ha egy leharcolt futócipőmet fogtam volna be, de ehelyett egy decathlonos vadászbakancsot választottam. Ez volt a szettem legdrágább eleme a maga 18.000 forintos árával. Téli utcai viseletre és alkalmanként túrázásra kerestem bakancsot. A maximum 20.000 forintos lélektani határba még pont belefért.<br><br><br>Ez a választásom az egész túrámra rányomta a bélyegét. Nem 0 km-es új bakanccsal indultam útnak. Jóval korábban vásároltam és már volt benne jó pár kilóméter, igaz, utcai viseletként. Az első öt kilóméter után már kezdtem sejteni, hogy nem ez volt a legjobb döntésem. A jobb lábam kis lábujját már itt elkezdte törni a bakancs. 7 km-nél már leragasztottam a kislábujjamat, gondolva ezzel megoldódik a probléma. Nem árulok el titkot azzal, hogy nem oldódott meg. 12 km-nél a ragasztás már a talpam alatt volt. A bakancs fűzőjének lazítása, a zokni igazítása sem oldotta meg a helyzetet. Körülbelül 15 km után már a bal lábfejemet és mindkét lábam talppárnáit törte a bakancs. 20 km-nél kicsit fellélegezhettek a lábaim egy ebédszünet erejéig, de a problémák nem szűntek meg. Az utolsó 5 km már olyan volt, mintha izzó tojásszénen lépkedtem volna. Titkon abban reménykedtem, valami baja lett a bakancsnak és így visszavihetem garanciális cserére. Sajnos a bakancs túlélte, a lábam viszont számos vízhólyaggal gazdagodott a leglehetetlenebb helyeken. Túrám egyik legrosszabb döntése volt ez a bakancs, így berúgtam az első öngólt a spúrságom kapujába.<br><br><br>Folytassuk a felszerelésemet a nadrággal. Feleségem szerint, ha öltözködésről van szó, „extrém skót” vagyok. Egyszerűen számomra nem ér 20.000 forintot egy nadrág. Itt a lélektani határom valahol 10.000 forint körül van. A túrám során az egyik multiból vásárolt Parkside márkájú munkásnadrágot viseltem, amely megjelenésében egy Magyar Honvédségi gyakorlóhoz hasonlított. A maga 6.000 forintos árával kifejezetten jó vételnek tűnt. Túra végére bebizonyosodott, hogy nem teljesen volt jó választás ez a nadrág. Mindkét horgasínamat és a combjaim belső részét rendesen kidörzsölte.  A bakancs problémája mellett ez szinte jelentéktelen kellemetlenség volt.<br><br><br>A pólóválasztásom viszont jól sikerült. Egy egyszerű decás futópólót viseltem. Nem dörzsölt ki, nem izzadtam bele extrém módon. Végre valamit jól választottam.<br><br><br>A pulóverem egy multiból vásárolt akciós, kétoldalú zipzáras kapucnis pulcsi volt. Mínusz 1-2 fokban indultam útnak és a zipzárat hamar lejjebb kellett húznom. A túra során végig komfortos volt. Az utam végére ismét hűvösre fordult az idő, de a biztonság kedvéért vitt mellényt nem kellett felvennem.<br><br><br>Hátizsákom szintén egy decás beszerzés volt. Számomra itt a lélektani határ 10.000 Ft, amibe pont belefért ennek a táskának az ára. 5,5 kilógrammos felszerelésem kényelmesen elfért benne. A túra végéig semmilyen kényelmetlenséget nem okozott.<br><br><br>Térjünk át most a kempingfelszereléseimre.<br><br><br>Itt megjegyezném, hogy nem szeretek tüzet gyújtani az erdőben. Legtöbbször pont ezért gázfőzőt használok, mivel kényelmes és biztonságos. A cikkben viszont két főzőalkalmatosságot mutatok be nektek, amelyeket szintén a filléresség jellemez.<br><br><br>Az első egy evőeszköztartóból otthon barkácsolt hobo kályha, amely talán 1200 forintba került. Kicsi könnyű és olcsó. Körülbelül ennyi az összes előnye.</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_2101-scaled.jpeg" height="950" width="750">
    </div>

    <div class="p3">
        <p>Hátránya, hogy nem lehet darabokra szedni, így a táskában jelentős helyet foglal. Tapasztalatom szerint nem lehet úgy „etetni”, mint egy hasonló méretű gyári hobó kályhát. Kicsit jobban is füstöl, mint egy gyári. A feladatát ellátja, az ételt el lehet vele készíteni. Lehet még egy kis átalakítással jobb lenne. Nagyobb lyukak kellenének az aljára, hogy a hamu ki tudjon hullani belőle és ne az égéstérben halmozódjon fel. Mint említettem, nem szeretek az erdőben tüzet gyújtani (engedély nélkül nem is lehet), így ezt a hobót otthon a kertben teszteltem le. (Az asszony kitiltott a konyhából a szalonnával, mondván nagyon füstöl. Így a kertben hobóval oldottam meg a sütését.)<br><br><br>A másik főzőalkalmatosság szintén egy otthoni barkácsolás során készült, otthon található alapanyagokból. Az elkészítéshez a temetői mécsesekből kiszedett gyertyák, kartonpapír és egy megfelelő méretű konzervdoboz kell.</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_2102-scaled.jpeg" height="600" width="700">
    </div>

    <div class="p4">
        <p>Ezt a főzőalkalmatosságot már kint a táborhelyen teszteltem le. Begyújtásánál ismét bénáztam! A korábbi élesztékem (ruhaszárítóból gyűjtött ruhaszösz) helyett olvasztott viaszba áztatott ruhaszöszt használtam. Korábban használtam már hasonlót, de akkor csak összegyúrtam a még képlékeny viaszt a ruhaszösszel. Az így kapott bagolyköpet kinézetű anyag jól szálasítható, könnyen begyújtható és jól égő anyag volt. Mivel most a ruhaszöszt beáztattam viaszba, és nem nyomkodtam ki belőle a felesleget, így egy homogén, nem szálasítható viasz tömb lett a végeredmény. Bár sikerült némi anyagot késsel lefaragnom az élesztékemből, „jó influenszer” módjára szikravetővel nem tudtam meggyújtani. Szégyenszemre öngyújtóval kellett tüzet gyújtanom. Miután szerencsétlenkedtem egy sort a tűz meggyújtásával, a főzőalkalmatosság már legalább rendesen működött. Kb. húsz percig hagytam égni a tüzet. Ez idő alatt megfőztem egy liternyi teát és egy kávét. Bőven elegendő lett volna még legalább ennyi ideig a maradéka a viasz-kartonpapír tüzelőnek. Tagadhatatlan előnye, hogy könnyű elkészíteni és olcsó. Hátránya, hogy nagyon kormol. Minden edényem tiszta korom lett. Jobban kormolt, mint a hobó kályha. Továbbá eloltás után nehezen hűlt ki, és még sokáig folyékony maradt benne a viasz, így nem is tudtam magammal vinni. (Majd legközelebb felhasználjuk a maradékát vagy hazahozzuk.)<br><br><br>A sütéshez használt edények örökségből származnak. Semmi extra nincs bennük. Teszik a dolgukat. Nyilván mivel nem titánból vannak, így a felszerelésünk súlyát jelentősen megnövelik. Számomra ez elfogadható kompromisszum. Étkészletnek egy szovjet csodát, egy ezer forintos bolhapiacos kemping bicskát használtam. Célnak megfelelt, bár leves kanalazásra nem ez lenne a választásom.</p>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_2104-scaled.jpeg" height="850" width="800">
    </div>

    <div class="p5">
        <p>Essen szó a sütés és előkészítés során használt eszközökről is.<br><br><br>Mivel nem rendszeresen túrázom és akkor sem nagyon használok fát, így én nem akartam sokat költeni fűrészre és baltára. A fűrészem egy 3.000 forintos Parkside kerti fűrész lett. Korábban használtam már kisebb ágak, gallyak levágásához. Most azonban a hobó kályhával való sütéshez egy jó kb. 10 cm vastag száraz akácfát választottam teszt alanynak és tüzelőnek. Az akácfa majdnem kifogott a fűrészemen. Jó öt perc „hegedülés” után végre sikerült átvágnom a fát. Mit kell mondjak, nagy csalódás volt ez a fűrész. Nem volt még márkás fűrészem, de a megnézett videók alapján ennél csak jobbak lehetnek.</p>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_2106-scaled.jpeg" height="600" width="900">
    </div>

    <div class="p6">
        <p>A Baltám egy Hecht kisbalta. Ezt a baltát egy barátomtól kaptam évekkel ezelőtt. Évek óta használom az otthoni gyújtós aprításához. Télen ezzel vágom a jeget a medencében, hogy a hideg terápiához merülni tudjak. 7.000 forintos ára ellenére egy nagyon jó és tartós eszköz. Csak pozitív dolgokat tudok mondani róla. Akit érdekel, az egy igen jó és részletes cikket olvashat róla az Alaptábor blogján ( https://alaptabor.hu/2018/08/06/hecht-kisbalta/ ).<br><br><br>És hogy késes blogként késekről is essen szó, lássuk a választásaimat. Fix késnek az Extol szerszámkészítő cég túra- és vadászkését választottam. Vessetek a mókusok elé, de ez egy jó kés!<br><br><br></p>
        <h3>A kés paraméterei:<br><br></h3>
        <p>. 2CR13 rozsdamentes acél penge<br>. Műanyag nyél (vagy inkább gumírozott)<br>. Nylon tok<br>. Teljes hossz: 230 mm<br>. Pengehossz: 110 mm</p>
    </div>

    <div class="kepek7">
        <img src="kepek/IMG_2103-scaled.jpeg" height="550" width="850">
    </div>

    <div class="p7">
        <p>Választhattam volna egy Morát vagy egy Hultaforst. Azok is elég olcsók lettek volna. Ez a kés a 2.500 forintos árával maga a megtestesült „olcsójános” álom. Mivel ilyen olcsó, ezért a legtrógerebb munkákra is használtam. Túlélt egy ház felújítást. A DBK videók hatására vágtam vele téglát és egyéb állatságokat csináltam vele. Tartósságát mi sem bizonyítja jobban, hogy túlélte kollégámat, Örsöt. (Örs az az ember, akinek nem adnád a kezébe a késed. Ő az az ember, aki nem száll le a létráról egy fogóért, ha egy drótot kell elvágni és csak egy kés van nála. Ő megoldja egy késsel.) Annyit hozzá kell tennem, hogy mivel a kés acélja nem túl „acélos”, így az élszalagot konvexesítettem, ezzel ellensúlyozva az acél éltartósságát. A kés markolata vastag, de nem túlságosan. Jól irányítható volt a tollaságak készítésekor. A barázdák, amelyek a csúszást hivatottak megakadályozni, kissé a tenyerembe vágtak. A kést teljesen alkalmasnak tartom túrákhoz, kempingezésekhez. Ez egy jó alternatíva lehet a Mora és a Hultafors kései mellett.<br><br><br>A másik budget választásom az étkezéshez használt bicskám, egy No.08-as Opinel. (Ennél a mondatnál Polgár Sanyi felhördül:<br><br>- Há’ mi lesz így a világgal, kend? Először szénacél és patina. Most meg Opinelt használ, kend?)</p>
    </div>

    <div class="kepek8">
        <img src="kepek/IMG_2105-scaled.jpeg" height="1000" width="800">
    </div>

    <div class="p8">
        <p>A viszonyom az Opinellel érdekesnek mondható. Szeretném utálni, de nem tudom. Szeretném megszeretni, de azt sem tudom. Ennél olcsóbb és használhatóbb alternatívát nem találtam erre a célra. A penge gerince kiválóan indította a szikravetőt. Használata során nem tapasztaltam jelentős hibát. Felmerült bennem, hogy egy agancs markolattal talán egyedibbé tehetném, akkor talán megszeretném.<br><br><br>Nem fogom azt mondani, hogy ezt és ezt érdemes olcsón megvenni, viszont ezt meg ezt csak drága cuccokkal lehet megoldani. Tanultam a hibáimból és legközelebb már máshogy csinálom. Ez az én utam volt. Ezek az eszközök másnál lehet máshogy működnének. Véleményem szerint az eszközök megkönnyíthetik és kényelmesebbé tehetik a túránkat. Viszont az élmény nem a cuccaink árcédulájától függ! Senkit ne tartson vissza az, ha nincs drága felszerelése. Menjetek és szabaduljatok ki a szürke hétköznapokból! Érezzétek jól magatokat a szabadban! Jöhetnek a képeitek!<br><br><br>Ti is jártatok már pórul egy rosszul megválasztott felszerelés miatt?<br><br>Ti tudtok valamin spórolni, amikor a túra felszereléseteket állítjátok össze?<br><br>Mi az, amin nem vagytok hajlandóak spórolni?<br><br>Írjátok meg kommentben! Osszátok meg velünk a tapasztalataitokat!</p>
    </div>

    <div class="kepek9">
        <img src="kepek/logo_nagy_ives.jpg" height="400" width="400">
    </div>

    <div>
        <a href="modernslip.php" class="btn" style="position: absolute; top: 10500px; left: 10%;">← Modern slip jointok-régi nóta újra hangszerelve</a>
        <a href="szamurajkard.php" class="btn" style="position: absolute; top: 10500px; left: 40%;">Lali szamurájkardja →</a>
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
            left: 23%;
        }
        .p1 {
            position: absolute;
            top:930px;
            padding: 11%;
            text-align: center;
        }
        .kepek2 {
            position: absolute;
            top: 1350px;
            left: 20%;
        }
        .p2 {
            position: absolute;
            top:2430px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:3500px;
            left: 22%;
        }
        .p3 {
            position: absolute;
            top:4200px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:4720px;
            left: 22%;
        }
        .p4 {
            position: absolute;
            top:5200px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:5670px;
            left: 20%;
        }
        .p5 {
            position: absolute;
            top:6400px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:6740px;
            left: 17%;
        }
        .p6 {
            position: absolute;
            top:7200px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:7750px;
            left: 19%;
        }
        .p7 {
            position: absolute;
            top:8170px;
            padding: 11%;
            text-align: center;
        }
        .kepek8 {
            position: absolute;
            top:8600px;
            left: 20%;
        }
        .p8 {
            position: absolute;
            top:9400px;
            padding: 17%;
            text-align: center;
        }
        .kepek9 {
            position: absolute;
            top:10050px;
            left: 17%;
        }
    </style>
</body>
</html>