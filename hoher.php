<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Hóhér</title>
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
        <h1>Amikor a hóhért akasztják, avagy mi fán terem az Ultras</h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. febr. 9. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/logo_nagy_ives.jpg" height="800" width="800">
    </div>

    <div class="p1">
        <p>A blog cikkei egyre-másra  kerülnek ki az oldalra, forognak közszájon, hála az internetnek. Sokan régi ismerősként üdvözlik egyik-másik bemutató alanyát, másoknak  pedig az újdonság erejével hat egy-egy megjelenő írás főszereplője. Igen ám, de a cikkek nem a bokorban teremnek és  nemcsak úgy, hipp-hopp, kerülnek a blog oldalára. Ugyan lesz  szó ma is késekről, EDC-ről, Vaszilijről, de egészen más aspektusból láthatjuk mindezt. Betekintünk a kulisszatitkokba, a közreműködők bemutatkoznak a nagyérdeműnek. Tartsatok velünk, még ha rendhagyó lesz is  mai  bejegyzésünk.<br><br><br>Az egyik megbeszélésen Mrs. Vaszilij bedobta, mi lenne, ha  mindenki mesélne kicsit magáról, a közös hobbiról, néhány miértről. Jöjjenek tehát  az Ultras tagok, ismerjétek meg őket, akik a minden második heti  betevőt szolgáltatják a függőknek.<br><br><br><br></p>
        <h3>Sándor, a paragrafusok mágusa</h3>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_0867-scaled.jpeg" height="1200" width="1000">
    </div>

    <div class="p2">
        <p>Jogász vagyok, egy vagány csaj férje, meg egy szuper kisfiú és egy belevaló kislány édesapja is. Gyomaendrődön élek, és hivatalnokként dolgozom a hétköznapokban, ám van egy különös szenvedélyem: az írás. Főként horrornovellákat szoktam írni, de EDC témakörben is billentyűzetet ragadok olykor.<br><br><br></p>
        <h3>Emlékszel még, hogy kerültél  kapcsolatba a bloggal?<br><br><br></h3>
        <p>Pár éve, amikor rákattantam a késes/EDC hobbira, a VaszilijEDC blog rendszeres olvasásával igyekeztem szélesíteni a látókörömet. Később facebookos kommentelések és egy-két biznisz kapcsán online ismeretséget kötöttem Vaszilijjel. Úgy alakult, hogy néhány vendégcikket is írtam a blogon, majd amikor beindult a Négyszögletű Pengeerdő Facebook csoport, Joci felkért ott adminnak. Mikor pedig Vaszilij halála után Balázs felvetette, hogy vigyük tovább a blog örökségét, igent mondtam, és azóta is aktívan „őrzöm a tüzet”.<br><br><br></p>
        <h3>A csapaton belül mivel járulsz hozzá a blog működéséhez?<br><br><br></h3>
        <p>Cikkeket és Facebook bejegyzéseket írok, rágom a csapat fülét a határidők miatt, és igyekszem abban is segíteni, hogy nehogy ingoványos jogi talajra tévedjünk. Jellemzően ultra budget EDC eszközökről értekezek, vagy gondolatébresztőnek szánt, nem kifejezetten egy adott késhez vagy más eszközhöz kapcsolódó blogbejegyzéseket írok.<br><br><br></p>
        <h3>Miként gondolsz az oldal jövőjére?<br><br><br></h3>
        <p>Remélhetőleg tudjuk tartani az eddigi minőségi és mennyiségi szintet, és szép lassan tovább épül az online közösség a blog körül.<br><br>Hogy mit hoz a jövő?<br><br>Pénzszerzésre biztos, hogy nem fogjuk használni a blogot, ez mindig is hobbi marad, soha nem lesz vállalkozás. Ha mértékadó fórum és stabil viszonyítási alap lehetnénk a magyar színtéren, és megkeresnének bennünket késes webshopok együttműködés okán, valamint rendszeres találkozókat szervezhetnénk az olvasókkal, arra nagyon büszke lennék. Ezek talán reális víziók.<br><br><br></p>
        <h3>Azt hiszem, mindenkit érdekel, mit is hord magával az, aki  EDC/kés blogolásra adja a fejét. Mi az  alap, amire rásüthetjük, hogy az már  EDC nálad?<br><br><br></h3>
        <p>Egy ideje már nagyon minimál stílust képviselek az EDC-ben. Mindig van nálam egy OLFA CK-2 sniccer, egy napelemes Casio Tough Solar karóra, egy Sony Xperia 10 VI mobil, és természetesen nálam van a jegygyűrűm meg a kulcscsomóm.<br><br>Ha nagyobb kabátban vagy táskával mozgok, akkor egy kis tolltartóban mindezt kiegészíti egy fekete Zebra toll, egy Stanley toll alakú csavarhúzó, néhány pótpenge a sniccerhez, egy Brüder Mannesmann mini kombinált fogó, egy nevenincs műszerész csipesz, némi szigetelőszalag, és egy másfél méteres szabász mérőszalag.<br><br>Ha pedig véletlenül outdoor körülmények közé megyek, akkor rendszerint egy egyszerű Mora Basic 511-et viszek magammal.<br><br><br></p>
        <h3>Van olyan, hogy  kedvenc kés?<br><br><br></h3>
        <p>Mora Basic 511.<br>Egyszerű, olcsó, megbízható, funkcionális kés.<br>Eddig még nem csalódtam benne.<br><br><br></p>
        <h3>Üzennél esetleg pár szóban valamit  az olvasóknak?<br><br><br></h3>
        <p>Köszönöm, hogy követtek és támogattok bennünket, és azt is köszönöm, hogy a mai rohanó világban két sornál többet is elolvastok… sajnos egyre ritkább dolog ez. Valamint arra kérlek benneteket, hogy mindig emlékezzetek Vaszilijre, mert az összes írásunkkal előtte tisztelgünk!<br><br><br></p>
        <h2>Zoltán, a hétköznapi hős</h2>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_0873-scaled.jpeg" height="1100" width="900">
    </div>

    <div class="p3">
        <p>Lupsán Zoltán vagyok. Főállásban mentőápolóként, másodállásban mint ápoló dolgozom a sürgősségin. Növénytermesztő mérnökként igazi rokonszakmában helyezkedtem el.  Gyógyíthatatlan késbúza vagyok. Imádom a kis fixeket, bármilyen nessmukot, a Giantmouse termékeit és úgy általában a modern foldereket. Fétisem a modern markolat anyag- tradicionális magyar bicska kombó. Gyógyult patina tagadó vagyok. Ma már tudok örülni a micarta és a szénacél patinásodásának.<br><br><br</p>
        <h3>Emlékszel még, hogy kerültél kapcsolatba a bloggal?<br><br><br></h3>
        <p>A Bladeshop OFF topic nevű csoportban találkoztam először Vaszilij munkásságával és onnantól kezdve ráfüggtem a Blogra. Sajnos személyesen sohasem találkoztunk Józsival, de online többször beszéltünk. Volt pár üzletünk. A tőle származó vasakat relikviaként őrzöm.<br><br><br></p>
        <h3>A csapaton belül mivel járulsz hozzá a blog működéséhez?<br><br><br></h3>
        <p>Büszkeséggel tölt el, hogy a Vaszilij Ultras oszlopos tagja vagyok. Időnként fárasztom a nagyérdeműt a cikkeimmel, illetve megkeserítem az Ultras többi tagjának az életét, mert ők javítják ki a hibáimat, amik felett én átsiklok. Magyar nyelv és irodalomból „felmentésem” volt a suliban, így a cikkek írása és megfogalmazása számomra nem egyszerű feladat. Bár számos modern folderem és késem van, nem mindig tudom melyikről lenne érdemes írnom.<br><br><br></p>
        <h3>Miként  gondolsz az oldal jövőjére?<br><br><br></h3>
        <p>Remélem a jövőben sikerül megközelíteni Vaszilij szintjét a cikkek írásában. Szeretném, ha továbbra is aktív lenne a blog és annak követői is. Igyekszem a gyűjteményemben megtalálható késekről, bicskákról hiteles és színes tartalmakat gyártani.<br><br><br></p>
        <h3>Azt hiszem, mindenkit érdekel, mit is hord magával az, aki  EDC/kés blogolásra adja a fejét. Mi az  alap, amire rásüthetjük, hogy az már  EDC nálad?<br><br><br></h3>
        <p>Napi szintű edcm egy modern folderből egy kis fixből, egy Victorinox Huntsmanből (ami szinte már az öltözékem része) és egy tölthető no name zseblámpából áll. Egy Garmin Forerunner 945–ös órát hordok, ami tud számomra minden fontos funkciót. Táskámban magammal hurcolom a fél életemet: WS 2.2.1, Victorinox körömcsipesz, kedvenc kajálós bicskám (egy Zsombok szenes völgyelt kirinite panelekkel), kulcsok, Shell kutas kemping evőeszköz készlet, töltők, kábelek, Kindle e-book reader, Nextool multitool, stb….<br><br><br></p>
        <h3>Van olyan, hogy  kedvenc  kés?<br><br><br></h3>
        <p>Ha csak egy foldert használhatnák életem végéig (soha nem lesz ilyen), akkor a Spyderco Persistence-re esne a választásom. Legkedvesebb bicska számomra a Nagyapámtól megörökölt  Gálfi juhász bicska. (Addikcióm beindítója volt ez a bicska. Gyermekkorom óta a nagybetűs bicska!)<br><br><br></p>
        <h3>Üzennél esetleg pár szóban valamit  az olvasóknak?<br><br><br></h3>
        <p>Legyetek aktívak! Kommenteljetek! Mondjátok el a véleményeteket  ( akkor is, ha az negatív), a tapasztalatotokat. Írjatok, hogy milyen folderekre vagytok kíváncsiak. Hátha van olyanunk. Maradjatok velünk!<br><br><br></p>
        <h2>Balázs, az idealista</h2>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_0601.jpeg" height="1100" width="800">
    </div>

    <div class="p4">
        <p>Egy külföldi cégnél dolgozom, kvázi középvezetőként. Két kamaszgyermek apjaként és ifjúkori szerelmem férjeként igyekszem megfelelni a napi kihívásoknak. A késezés mellett hobbifotósként is tengetem a napjaim, mindig keresem a fókuszt.<br><br><br></p>
        <h3>Emlékszel még, hogy kerültél kapcsolatba a bloggal?<br><br><br></h3>
        <p>Az eléggé vicces sztori. Joci régebben sokszor írt késbemutatókat egy kínai termékeket tesztelő weboldalnak. Egyszer belefutottam egy Delica utánzatról megírt cikkébe, ami annyira bejött, hogy meg is rendeltem.<br><br><br>Megemlítettem az oldalon mikor megjött és rám írt privátban. Kiderült a beszélgetésből,  évekig szomszédok voltunk úgy, hogy semmit sem tudtunk a másik késes hobbijáról….Onnantól nem volt megállás, fénysebességgel indultam meg a lejtőn. Szerencsésnek mondhatom magam, hiszen számtalanszor volt alkalmam személyesen beszélgetni Jocival, késekről, edcről és a blogról. Rengeteget tanultam tőle.<br><br><br>Távoztával hatalmas űr keletkezett,  nemcsak a késes vonalon…Aztán mikor megszűnt a VaszilijEDC Instagram oldal (inaktivitás miatt) és felmerült, hogy  így jár a blog is, riadót fújtunk. Nem tűnhet el egy ilyen életmű a süllyesztőben!!!<br><br><br></p>
        <h3>A csapaton belül mivel járulsz hozzá a blog működéséhez?<br><br><br></h3>
        <p>Cikkeket írok, leginkább késekről. A tapasztalataimat osztom meg az olvasókkal, igyekszem objektív lenni, amennyire csak lehet. Miután elég szép  gyűjteménnyel rendelkezem, alanyokból jó darabig nem lesz hiány. A Facebook oldalon is sokat garázdálkodok, valamint a vasárnapi cikkek integrálása,publikálása és az internet bugyrainak legmélyére eljuttatását is intézem.<br><br><br></p>
        <h3>Miként gondolsz az oldal jövőjére?<br><br><br></h3>
        <p>Szeretnék hinni abban, hogy egyszer fel tudunk majd nőni arra a szintre, amit Joci állított fel a maga zsenialításával. Számunkra ez szerelemprojekt, igyekszünk tovább vinni és  öregbíteni a méltán híres brandet, tudást és tapasztalatot cserélni az olvasókkal. Jó lenne, ha közösen lépnénk ebbe az irányba, hiszen a blog nem öncélú: mindenkiért van, aki közösséget tud vállalni a VaszilijEDC blog alapvető értékeivel. Amennyiben ez megvalósul és igazi online  “kávéház” lesz az edc és kések szerelmeseinek az oldal, talán elértük a célunkat és vele Jociét is.<br><br><br></p>
        <h3>Azt hiszem, mindenkit érdekel, mit is hord magával az, aki  EDC/kés blogolásra adja a fejét. Mi az  alap, amire rásüthetjük, hogy az már  EDC nálad?<br><br><br></h3>
        <p>Állandó társam egy Garmin Instinct Solar karóra, egy Leatherman Tread és Wave+, egy Victorinox Compact és egy Olight Baton3 zseblámpa. Mivel én mindig félek a nagy széltől, ezért igyekszem magam betonbiztosan lesúlyozni, így aztán 3-4 kés mindig van nálam. A mostani liblingek egy Sebenza, a Banter2 és a Manix Salt, így leginkább ezek kísérnek el a napjaimon. Természetesen telefon és egy kis Helikon Tex pénztárca az irataimmal és némi pénzmaggal mindig a zsebemben lapul a kocsikulcs mellett. Mivel  a kezem mindig foglalt, a fülhallgatóm is a túlélő csomagom része.<br><br><br></p>
        <h3>Van olyan, hogy  kedvenc  kés?<br><br><br></h3>
        <p>Abszolút. Több is van, ami közel áll a szívemhez: a Rokot, a Sebenza, a Trezor, vagy a Mentett Kutya (ő egy, az enyészettől megmentett és újra gondolt völgyelt) és persze a Jocitól zrikaként kapott egyedi Opinelt sem hagyhatom ki a sorból. Azt gondolom viszont, hűséges típus vagyok, mert hosszú évek óta nekem a favorit a Spyderco SpydieChef. Számomra a non plus ultra, egyszerűen imádom. Reményeim szerint a nagyon távoli jövőben velem temetik ezt a  zseniális foldert.<br><br><br></p>
        <h3>Üzennél esetleg pár szóban valamit  az olvasóknak?<br><br><br></h3>
        <p>Csináljuk együtt ezt a blogolás dolgot. Mi hozzuk az anyagokat, ti pedig kommenteljetek minél többen, minél többet. Beszélgessünk, érveljünk, ez egy olyan hatalmas és sok színű téma, hogy érdemes és kell is róla véleményt nyilvánítani. Nélkületek csak monologizálni fogunk, mindenki jobban jár a párbeszéddel. Köszönjük, hogy olvastok minket, tartsátok meg jó szokásotokat.<br><br><br></p>
        <h3>Marci, a realista</h3>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_0871.jpeg" height="900" width="900">
    </div>

    <div class="p5">
        <p>Sziasztok! Márton vagyok, késfüggő. 🙂 A többi csak mellékes, de: kertes házban élek a családommal, vidéken. Kutya, diófák, leanderek, de persze van beton, meg garázs is. Diplomám is van, meg szakmám is. Dolgoztam multinál, kkv-nál, voltam beosztott is, vezető is. Jelenleg családi vállalkozom, és ha néha akad egy kis szabadidőm, kimegyek „koszoskodni” a műhelyembe.<br><br><br></p>
        <h3>Emlékszel még, hogy kerültél kapcsolatba a bloggal?<br><br><br></h3>
        <p>Férfiasan bevallom, nem tudom mikor találkoztam először a bloggal. Kicsit olyan, mintha mindig jelen lett volna. Vaszilijjel jóban voltunk, sokszor csereberéltünk. 2021-ben megtisztelt azzal, hogy elkezdett érdeklődni az általam készített kések iránt. Sőt, ez odáig „fajult”, hogy egy Nessmuk Kukta gazdája lett, majd később erről cikk is született a blogon. Életem egyik legnagyobb megtiszteltetése. Akkoriban úgy voltam vele, mint a viccbéli zsidó bácsi, aki katolikus papnak gyón. „De hát ezt miért mondja el nekem? – Mindenkinek elmondom!”<br><br><br></p>
        <h3>A csapaton belül mivel járulsz hozzá a blog működéséhez?<br><br><br></h3>
        <p>Én vagyok az, aki miatt nem lehet semmit elfelejteni, mert állandóan le vagyok maradva és többször is visszakérdezek. A többiek ezt még egészen jól tűrik, de szerintem már áztatják a korbácsot. Úgyhogy gyorsan megígértem, hogy írok még két cikket.<br><br><br></p>
        <h3>Miként gondolsz az oldal jövőjére?<br><br><br></h3>
        <p>Én abban bízom, hogy a blog közösségalkotó, összetartozást erősítő jellege erősödni fog. Sok arc van, akivel online már cimboraság van, de személyesen még sosem ráztunk kezet. Én nagyon szorgalmaznék „3D” összejöveteleket is.<br><br><br></p>
        <h3>Azt hiszem, mindenkit érdekel, mit is hord magával az, aki  EDC/kés blogolásra adja a fejét. Mi az  alap, amire rásüthetjük, hogy az már  EDC nálad?<br><br><br></h3>
        <p>Télen minden kabátzsebem tele van, nyáron csak válltáskával vállalható az a „betyárbútor”, amit cipelek. A kötelezőkön (kulcsok, tárca, iratok) kívül a mérőszalagtól kezdve a szemüvegtörlőn át a mini tolómérőig minden van. Bicskafronton egy modern egykezes zsebklipszes akkor is van nálam, ha pizsamában vagyok (na jó, azt azért nem – mindig). De sokszor kísér multi szerszám, „svájci” bicska, mini prybar, magyar tradi, mikor milyen kedvem van és főleg milyen nadrágot hordok.<br><br><br></p>
        <h3>Van kedvenc késed?<br><br><br></h3>
        <p>Van, sok. 🙂 A hazai készítésű darabok állnak igazán közel a szívemhez. Egy Ifj. Papp Zoli, Misányi, Szálkai, vagy Nagy Csaba–féle bicska szinte mindig van nálam. Importból teljesen eklektikus a felhozatal, Spyderco-tól a Kizer-ig minden van, de az olasz „vasakat” is nagyon kedvelem.<br><br><br></p>
        <h3>Üzennél valamit az olvasóknak?<br><br><br></h3>
        <p>Sokszor jutnak eszembe Bob Loveless, neves amerikai készkészítő szavai: „Amikor az ember felvesz egy kést, a kollektív tudattalanból egy régi emlék bukkan a felszínre. … Nem számít. milyen kifinomulttá válunk, egy kés visszavisz minket a barlangba.”<br><br>Az én fejemben ez egy barátságos barlang, ahol körbeüljük a tüzet. Nem széthúzunk, hanem együtt vagyunk, összetartunk, összetartozunk.<br><br><br></p>
        <h3>Brendon, a techmen</h3>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_0912.png" height="1300" width="900">
    </div>

    <div class="p6">
        <p>Halihó! Brendon vagyok, az Ultras egyik háttérembere. Nos, hogy mit is kellene tudni rólam? Kezdjük talán ott, hogy én már gyerekkorom óta érdeklődőm az informatika, a számítástechnika után. Mindig is lázba hoztak a kütyük, tényleg.  Egészen  apró koromban is imádtam bütykölni, szerelni, vagy valami újat alkotni. Jelenleg is, a mindennapokban az informatikával foglalkozom mind az egyetemen, mind a munkahelyemen.. Szóval röviden és tömören ez lennék én, az „Ultras IT  guru”.<br><br><br></p>
        <h3>Emlékszel még,miképp kerültél kapcsolatba a bloggal?<br><br><br></h3>
        <p>Én igazából Balázson keresztül kerültem a csapatba úgy, hogy egy szakembert kerestek a blog üzemeltetésére és karbantartására.  <br><br><br></p>
        <h3>Mi az Ultrasban betöltött szereped, hogyan járulsz hozzá a blog működéséhez?<br><br><br></h3>
        <p>Az én reszortom a weboldal, vagyis maga a blog karbantartása -üzemeltetése és a posztok helyes publikálása.<br><br><br></p>
        <h3>Miként fog szerinted a blog jövője  alakulni?<br><br><br></h3>
        <p>Az én meglátásom az, hogy egy igazán izgalmas jövő áll előttünk. Ahogy látom, a csapat többi tagja nagyon szorgalmasan kiveszi a részét abban, hogy olvasóknak a lehető legélvezetesebb, leginformatívabb cikkek jelenhessenek meg. Bízom benne, hogy a már jelenleg is jó színvonal még magasabbra fog emelkedni.<br><br><br></p>
        <h3>Azt hiszem, mindenkit érdekel, mit is hord magával az, aki  EDC/kés blogolásra adja a fejét. Mi az  alap, amire rásüthetjük, hogy az már  EDC nálad?<br><br><br></h3>
        <p>Munkámból és tanulmányaimból adódóan  egy  laptop, telefon és egy  nagyon okos óra  segít a napi teendőim intézésében. Jól jön a zsebemben lapuló Victorinox  Mountaineerem, szinte  naponta használom. Ezenkívül ami mindig velem  van, az a kulacsom.<br><br><br></p>
        <h3>Van kedvenc késed?<br><br><br></h3>
        <p>Pár hónapja még  teljesen muglinak számítottam, de már  fejlődök a társaság  hatására…A Victorinoxomat tartom a kedvencemnek, idővel talán ez változni fog, de most ő a Nr.1.<br><br><br></p>
        <h3>Üzennél valamit az olvasóknak?<br><br><br></h3>
        <p>Köszi, hogy nagyon sokan követitek a blogot. Én a statisztikai adatokból látom, ahogy  folyamatosan nőnek az  elérési számok,ami jó érzéssel tölt el. Ami érdekesség, hogy az újraindulás után megnőtt a régi cikkek olvasottsága is. Ez remek, lapozgassátok csak minél többet ennek a nagyszerű  blognak az oldalait. Na meg persze  kommentben jelezzétek az észrevételeket, akár a késekkel, akár az oldallal kapcsolatban!<br><br><br></p>
        <h2>Mrs. Vaszilij, a nyelvtan őre</h2>
    </div>

    <div class="kepek7">
        <img src="kepek/IMG_0870.jpeg" height="900" width="900">
    </div>

    <div class="p7">
        <p>Szombathelyen élek, és amikor nem Mrs. Vaszilijként tevékenykedem, napjaimat középiskolai angoltanárként töltöm. Szabadidőmben szeretek társasjátékozni, kirándulni és puzzle-t rakni. A késes hobbiban való elmerülés egyértelműen Joci/Vaszilij hatása volt, bár azelőtt is büszkén vittem bicskámat a nyári táborokba.<br><br><br></p>
        <h3>Emlékszel még, miképp kerültél kapcsolatba a bloggal?<br><br><br></h3>
        <p>Szerencsésnek mondhatom magam, hogy a kezdetek óta a kulisszák mögül figyelhettem a blog alakulását. Örültem, amikor Joci a sok biztatás után nekikezdett, hogy késekről írjon és így ötvözze két nagy szenvedélyét. Amellett, hogy a cikkeket (természetesen) olvastam, megtiszteltetés volt, amikor a saját késeim is szerepet kaptak az írásokban, képeken.<br><br><br></p>
        <h3>Mi az Ultrasban betöltött szereped, hogyan járulsz hozzá a blog működéséhez?<br><br><br></h3>
        <p>Az írás nem annyira erősségem, így hosszabb cikkek gyártása továbbra sem az én asztalom, de a Négyszögletű Pengeerdő csoportba szívesen töltök fel képeket és rövidebb szösszeneteket. Ahogy eddig is, leginkább a háttérben próbálom segíteni a munkálatokat, szívesen ötletelek és színesítem az írásokat. 🙂 Hozzám tartozik ugyanis a végső korrektúra: a hibákra azonnal lecsapok és szép sárga pacával jelzem.🙂<br><br><br></p>
        <h3>Miként látod a blog jövőjét?<br><br><br></h3>
        <p>Joci halála után nagyon megható volt, hogy a srácok magukra vállalták a blog sorsának további alakulását. A cikkeikkel méltó és minőségi folytatást kap a VaszilijEDC oldal és a Négyszögletű közösség is fennmaradhat – bízom benne, hogy még jó sokáig.<br><br><br></p>
        <h3>Azt hiszem, mindenkit érdekel, mit is hord magával az, aki  EDC/kés blogolásra adja a fejét. Mi az  alap, amire rásüthetjük, hogy az már  EDC nálad?<br><br><br></h3>
        <p>Amiket napi szinten cipelek és minden táskámba bekerülnek: iratok kydex igazolványtokban, városi túlélőfelszerelés egy rendezőben tárolva, a kulcstartómon egy pici multitool és zseblámpa minden eshetőségre. Ezeken kívül természetesen 1-2 kés és/vagy multitool helyzettől függően.<br><br><br></p>
        <h3>Van kedvenc késed?<br><br><br></h3>
        <p>A legtöbb kilométer továbbra is az Opinel DIY-ban van, az szinte mindig nálam van, és nem félek használni sem – ez most már kezd meglátszani is rajta. Emellé gyakran rakok zsebre valami „zöldet” a kollekcióból, illetve mostanában sokat van a Böker Damascus Gent is nálam, utóbbival nosztalgiázom és emlékezem.<br><br><br></p>
        <h3>Üzennél valamit az olvasóknak?</h3>
        <p>Maradjatok lelkesek, olvassátok a cikkeket és aktívkodjatok a csoportban – egy dinamikus közösség előreviszi az embereket és élőbbé teszi ezt a „tárgyas” hobbit.<br><br>Eme kis csapat próbálja Vaszilij barátunk örökségét gondozni és szellemiségét tovább vinni…Igyekszünk megugrani azt a bizonyos lécet, de azért néha úgy érezzük, nagy ránk a kabát… (Még úgy is, hogy Joci ezt jellemzően egyedül hordta, de persze esetenként voltak más közreműködők.) A hitelesség és a lehető legobjektívebb írások készítése, a Joci által összegrundolt rajongótábor érdeklődésének fenntartása a cél. Minden késtali, minden baráti kézfogás ami esetleg a  bloghoz köthető, már csak hab a tortán. Ezért is  kérünk  titeket, hogy legyetek aktívak, mert ebből tudunk konzekvenciákat levonva fejlődni, minőségi  blogot készíteni.<br><br>Köszönjük  eddigi támogatásokat, maradjatok még sokáig velünk.</p>
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
            left: 20%;
        }
        .p1 {
            position: absolute;
            top:920px;
            padding: 11%;
            text-align: center;
        }
        .kepek2 {
            position: absolute;
            top: 1370px;
            left: 14%;
        }
        .p2 {
            position: absolute;
            top:2450px;
            padding: 11%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:4140px;
            left: 18%;
        }
        .p3 {
            position: absolute;
            top:5000px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:6710px;
            left: 21%;
        }
        .p4 {
            position: absolute;
            top:7680px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:9400px;
            left: 17%;
        }
        .p5 {
            position: absolute;
            top:10170px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:11700px;
            left: 17%;
        }
        .p6 {
            position: absolute;
            top:12880px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:14310px;
            left: 17%;
        }
        .p7 {
            position: absolute;
            top:15100px;
            padding: 11%;
            text-align: center;
        }
    </style>
</body>
</html>