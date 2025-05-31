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
        <h1>Manuális élezők,avagy magad uram, ha szolgád nincsen</h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. febr. 23. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/IMG_1631-scaled.jpeg" height="550" width="1000">
    </div>

    <div class="p1">
        <p>Ebben a – vasárnap reggeli kávé mellé szánt – írásban az itthon leggyakrabban használt manuális (nem elektromos) késélező eszközöket veszem górcső alá. Nem teszt, hanem rövid bemutató jelleggel. A legegyszerűbb eszköztől haladok az összetett rendszerek felé. Az eszközök használhatóságára (hatékonyságára) és alapvető tulajdonságaira helyezem a hangsúlyt.<br><br><br>Az a célom, hogy kedvet csináljak ehhez a kedves elfoglaltsághoz azok számára, akik nem, vagy kevés sikerélménnyel éleznek.  <br><br><br>Amikor meséltem egy szintén súlyos késfüggésben szenvedő barátomnak a tervezett cikkről, az volt a tippje, hogy a kaszakővel kezdem. Ebben csak picit tévedett, mert máskülönben hol marad a kedvcsináló bevezetés? Az „in medias res” kezdés az én koromban már zavarba ejtő, kell egy kis lelkesítés előtte – természetesen az élezésről beszélek.<br><br><br>Léteznek az élező köveknél egyszerűbb megoldások is, viszont azokhoz talán még nagyobb gyakorlatra van szükség. Magam is megtanultam bögre alján, csiszolóvászonnal, vízpapírral, fára szórt csiszolószemcsével, vagy akár folyami kavicson élezni, de ezek általában szükségmegoldások. Kivételt képez talán a túrázók, vagy bushcrafterek által előszeretettel használt bőrős-vásznas élező alkalmatosság, de erre ebben a cikkben nem térek ki.<br><br><br>Sokszor találkozni késes fórumokon azzal a kifogással, hogy „jajj, nem merem, mert félek, hogy elrontom”. Hát, Barátaim, aki a cipő bekötésének bonyolult (tényleg az) műveletét meg tudta tanulni, az kétségtelenül képes kést is élezni. Csak ugye akkor még erősebb volt a motiváció – a járás megtanulásáról nem is beszélve. De kezdjük is az első botladozó lépésekkel.<br><br><br>Első, vagy inkább nulladik pontban, ne az élezőt válaszd ki, hanem a kést. Én még olyan háznál nem fordultam meg, ahol ne lett volna néhány olcsó, nem-kár-érte (konyha)kés. Két dolog miatt is érdemes ezeken tanulni élezni: egyrészt, ha esetleg összekaristoljuk (nem szakszó, ne tessék megjegyezni), nem fogjuk sajnálni. Másrészt mivel többnyire lágyabb acélokkal készülnek, hamarabb látható a gyakorlás eredménye és a sikerélmény is könnyebben jön.<br><br><br>Higgyétek el, nem nagyon lehet hibázni. Annyit minden olvasóból kinézek, hogy a kőre nem derékszögben fogja a kést rátartani, de azt is, hogy nem fekteti rá lapjával. A kettő közt meg akármit csinálsz, az vágni fog. A részletek már arról szólnak, hogyan fog vágni. Az élszögek kitárgyalása nem e cikk célja, maradjunk annyiban, hogy 25–45 fok között már használható lesz. (Expertek itt ne szisszenjenek fel, tudom, tudom. Én is tudom. De most lépegetni tanulunk, nem olimpiai sprintre készülünk fel.) Ezzel az élszöggel sokkal jobban fog vágni, mint a konyhafiók alján négy évtizede ide-oda verődő, kerek élű, csehszlovák piros nyelű. Ha erre azt mondod, hogy „jól kezdted, haver, de most ezzel a 25-45fokkal mi a fenét kezdjek?”, akkor igazad is lenne, ha nem egyszerűsíteném le. De leegyszerűsítem, úgyhogy nyugi.<br><br><br>A derékszög mindenkinek megvan, igaz? 90 fok. Ha felére hígítod, már iható. Hasonló a helyzet az élezésnél is. Ha a 90 fokot megfelezed, akkor 45-öt kapsz. Ez úgy szemre is megy kábé. Most jöjjön pöti ált. isk. matek. Két sík ugye egy egyenesben metszi egymást. Az egyenes lesz az él. Vagyis az élben találkozó két síkot úgy kell körülbelül lemunkálni (ez most tényleg szakkifejezés), hogy kb. 45 fokot zárjanak be egymással. Tádáám, ennyi! Ez a 45 fok egy mindenes késnek már elműködik. Ha ezt tovább felezed, akkor már egy kifejezetten vékony, de sérülékeny élt kapsz. Tehát, akkor? Úgy van: a kettő közt lesz az igazság. De ezen ne görcsölj!Hidd el, ha az egyik oldal elsőre 10 fok lesz, a másik meg 35, és így jön össze a 45 fokos szög, a késed akkor is vágni fog. Az esztétikummal majd ráérünk vacakolni, ha a kés már nem csak a meleg vizet viszi.<br><br><br>De mondok egy még egyszerűbbet az élszög „belövésére”! Hámoztál már krumplit? A legtöbben gondolom igen. Ez egy jó alap. Képzeld el, hogy a kő a krumpli és azt szeretnéd meghámozni. Mintha egy vékony szeletet szeretnél levágni belőle. Nos, ez egy remek élszög. Akiket eddig tanítgattamélezni, pillanatok alatt ráéreztek. Valahogy ez adja magát még egy gyakorlatlan késhasználónak is.<br><br><br></p>
        <h3>Ej, mi a kő!</h1>
        <p>Oké. Kés van. Élszög is van. Kő kell. De milyen? Majdnem leírtam, hogy bármilyen, de ennyire bátor nem vagyok. Tudom, hogy a kaszakő hallatán sokak fülében romantikus-nosztalgikus hárfa dallam csendül fel, de kezdőknek mégsem ajánlom. Azért mert egy alakos csiszoló szerszám, amit kézből(/ben?) használnak/tak. Megvannak a maga trükkjei.<br><br><br>Keressünk szabályos – téglatest – alakú köveket. ÉS! Lehetőleg ne valami zsebkővel kezdjünk! Minél nagyobb,annál jobb. Ha már van rutinod, mehet kisebb is, kézből is, stb. A kézből élezésre egy kicsit kitérnék: kezdőknek határozottan nem ajánlom. (Én így tanultam meg, de még kölyökként, az más.)<br><br><br>Szóval, kő. Ne kezdjünk finom kövekkel. Egyrészt nagyonsokáig tart lemunkálni az anyagot, másrészt nem biztos, hogy látni fogod, mit csinálsz jól, vagy rosszul. 120-150-200, maximum 240-es kővel kezdjünk. Léteznek természetes és szintetikus kövek is. Hogy tovább bonyolítsam a helyzetet,vannak úgynevezett „vizes”, vagy „olajos” kövek, amiket használat előtt áztatni, olajozni érdemes, és vannak olyanok is, amik akár szárazon is használhatóak.<br><br><br>Mazochistáknak egy ajánlás: Tepsiben szeletelős, összevert pengehátú kést tessenek választani és 10000-es kővel álljanak neki.</p>
    </div>

    <div class="kepek2">
        <img src="kepek/IMG_1636-scaled.jpeg" height="550" width="1000">
    </div>

    <div class="p2">
        <p>Szerintem egy remek univerzális kő a Tyrolit 150/320-as kombinált, kétoldalú kő. Ez létezik piros és zöldesszürke változatban. A piros egyszerűbb acélokhoz való, amíg a zöldesszürke keményebb, magasa(bba)n ötvözött acélokkal is jól dolgozik. (Nálam az ugyancsak kopásálló CPM-S110V-t is gond nélkül élezi.) Persze nem muszáj megállni 320-as finomságnál, de tapasztalatom szerint sokezres kövekig sem érdemes elmenni. Nekem a kedvencem a 600-as, bőrözött él.<br><br><br>Az élezés technikájára sok szót nem vesztegetnék, mert tele van a YouTube élezős videókkal. Van hazai is sok, idegen nyelvű meg tengernyi. Tessenek válogatni. Nagy marhaság is akad köztük, de szerencsére a kommentelők azt szétcincálják.(Ééééén??? Ott se voltam!!!)<br><br><br>Érdemes ismert késkészítők videóira rákeresi, nagyon jók vannak köztük.</p>
    </div>

    <div class="kepek3">
        <img src="kepek/IMG_1632-scaled.jpeg" height="1000" width="1000">
    </div>

    <div class="p3">
        <h3>Gyémánt, de nem ékszer<br><br><br></h3>
        <p>A következő lépcső a gyémántos élezők. Nem „gyémánt élező”, mint sok helyen olvasni, mert nem élezünk vele gyémántot. Azért gyémántos, mert a hordozó felületre (jellemzően rozsdamentes acél lapra) felvitt gyémánt szemcsék végzik a csiszolást. Gyakorlatban nagyon hasonlóan kell használni, mint az élező köveket, azonban tapasztalatom szerint amíg a köveknek a penge oda-vissza csiszolása nem árt, addig a gyémántos élezőkből a szemcsék kipereghetnek. Ez nem törvényszerű, de már jártam így. Ugyanez a helyzet, ha nagyon nyomjuk a pengét a kőhöz.<br><br><br>Lényeges különbség a kövekhez képest, hogy szárazon használandók. Bár én pár csepp vizet szoktam tenni rájuk. Szerintem szebben dolgoznak és a víz a fémport is összeszedi. Gyémántosból is létezik egy-két, de még többoldalú változat is, számos finomságban.</p>
    </div>

    <div class="kepek4">
        <img src="kepek/IMG_1639-scaled.jpeg" height="700" width="1000">
    </div>

    <div class="p4">
        <h3>Acél, de nem penge<br><br><br></h3>
        <p>A kések karbantartásához – különösen húsipari, vagy konyhai felhasználású kések esetén – nélkülözhetetlenek a fenőacélok*. Ezek sima, vagy enyhén strukturált felületű acélok, amiknek az él karbantartása a feladatuk. Munka során a vékony élszalagon kihajlások keletkeznek, amik csökkentik a penge vágóképességét. Az acélokkal ezek a kihajlások szépen visszafenhetőek, így jelentősebb anyagleválasztás nélkül újra munkára fogható a penge. Hatékony és gyors megoldás.<br><br><br>Léteznek ugyan erősen strukturált felületű, nagyobb anyagleválasztásra alkalmas – sőt, gyémántszemcsés – acélok is, de ezek sokkal kevésbé terjedtek el, mint finomabb társaik.<br><br><br>Találkozhattok kerámia fenőrudakkal is. Ezeket én magasabb keménységű késekhez ajánlom, ahol az acél már kevésbé jól dolgozik. Japán gyártású késemnél, aminek az élbetétje 61-62 HRC keménységű szintén kerámia rudat használok.<br><br><br>*Fenés, vagy élezés? Melyik mit jelent? Sokszor van zavar a két fogalom körül, gyakran keverednek, vagy mást értenek alattuk. Én abba a csoportba tartozom, akik úgy gondolják, hogy az élezés jelentősebb anyagleválasztással járó él-helyreállítás, amíg a fenés minimális anyagleválasztással járó élkarbantartás.</p>
    </div>

    <div class="kepek5">
        <img src="kepek/IMG_1633-scaled.jpeg" height="650" width="1000">
    </div>

    <div class="p5">
        <h3>Van bőr az élezőjén<br><br><br></h3>
        <p>Mind a kövek, mind a gyémántos élezők esetén van egy nagyon fontos utolsó lépcső, ha igazán finom és sorjamentes élt szeretnénk elérni. Ez pedig a bőrös fenő. Ebből is léteznek egy és kétoldalú változatok, ahol „hús oldali” és „szőr oldali” felületek egyaránt vannak. Léteznek rugalmas, vagy kemény alátámasztásúak, de akár egyszerű bőrszíj is megteszi. Lehet ezt tovább cifrázni, különböző pasztákkal, vagy spray-kkel impregnálni, amivel fokozható az élminőség, és akár „tükrös”, polírozott él is elérhető velük. Fontos, hogy a bőrön hátrál az él, azaz csak egy irányba – elfelé – húzzuk a pengét. Ellenkező esetben bizony belevágunk</p>
    </div>

    <div class="kepek6">
        <img src="kepek/IMG_1637-scaled.jpeg" height="700" width="1000">
    </div>

    <div class="p6">
        <h3>Akkor vigyünk rendszert a dologba<br><br><br></h3>
        <p>Most, hogy az alapokkal megismerkedtünk, lépjünk tovább az élező rendszerekre. Azért rendszer a nevük, mert általában a teljes élezési folyamatot meg lehet oldani velük a nagyolástól egészen akár a „bőrözésig”. Kezdjük azokkal a változatokkal, amikor a pengét mi mozgatjuk és a rendszer rögzített.<br><br><br>Ezeknek egy ékes – egyszerű, de nagyszerű – példája a WorkSharp 2.2.1 outdoor sharpener (/kézi élező?). Mint a neve is mutatja, egy kompakt, hordozható rendszer, ami akár egy nagyobb zsebben is elfér. Véleményem szerint zseniális. Azon túl, hogy a teljes élezési folyamat végigvihető rajta, még annyiban is segít, hogy közel állandó élszöget tartsunk. Oldalanként 20 fokos vezetőkkel rendelkezik, ami – számoljunk csak egy kicsit – oldalanként 20 fok, azaz összesen 40 fok. Jé, ez 25 és 45 között van, tehát örülünk. Bicskához, általános célú késekhez ideális.<br><br><br>Durva gyémánt lap, finom gyémánt lap, kerámia rúd, bőrös fenő. All in one. Remek. Kis átmérőjű rúd is van rajta, így fogazott élű, vagy rekurzív pengéjű kések is élezhetőek rajta. Csak hab a tortán, hogy horog és nyílhegy élezését is meg lehet oldani vele. Rengeteg oktatóvideó van róla, könnyű sikerélményt elérni vele. Erősen ajánlott kategória kezdőknek is, az ára pedig annyi, mint egy minőségi fenőkőé. Cserébe egy komplett rendszer kapunk.<br><br><br>A Work Sharp számos további asztali élező rendszert ajánl. Van köves és gyémántos változat is közöttük. Számos kiegészítő megvásárolható hozzájuk, például szögtartó segédek, gyémántos és kerámia lapok, bőrös fenők, stb.<br><br><br>Az asztali kategória egyik legnépszerűbb tagja a Spyderco Tri-Angle Sharpmaker. A tervezője maga Sal Glesser, a Spydercoalapító tulajdonosa. Különleges minőségű, sokoldalúan használható, háromszög alakú kövei nem igényelnek vizezést. A rendszer alkalmas fogazott élű kések, de akár ollók élezésére is. Rendkívül elmés szerkezet, kétségtelenül az élező rendszerek egyik ikonikus és mindmáig népszerű darabja.</p>
    </div>

    <div class="kepek7">
        <img src="kepek/IMG_1634-scaled.jpeg" height="700" width="1050">
        <img src="kepek/IMG_1638-scaled.jpeg" height="700" width="1050">
    </div>

    <div class="p7">
        <h3>Rendszer már van, akkor fixáljuk is le<br><br><br></h3>
        <p>A következő lépcsőhöz azok a rendszerek tartoznak, ahol a pengét rögzítjük és a rendszert – helyesebben annak egy részét – mozgatjuk. Ebben a kategóriában megkerülhetetlen a Lansky élező rendszer. Forradalmi voltát jól jelzi, hogy ezt az elvet alkalmazza számos ezt követő rendszer, de az eredetinek is tucatszám jelentek meg koppintásai az évek alatt.<br><br><br>Amellett, hogy a kést rögzítjük, fix szögbeállítást is lehetővé tesz. Erre szokták mondani, hogy aki ezzel nem tud élezni az nem is akar megtanulni. Létezik köves és gyémántos változata is. Nem mondok újat: rengeteg oktató videó van vele kapcsolatban a YouTube-on. Számos kiegészítő is vásárolható hozzá: Rekurzív, vagy fogazott pengékhez,bőrös fenő, asztali kit, de akár élező olaj is a köves rendszerhez.</p>
    </div>

    <div class="kepek8">
        <img src="kepek/IMG_1630-scaled.jpeg" height="750" width="1050">
    </div>

    <div class="p8">
        <h3>Rendszer is van, fixáltuk is, akkor már legyen precíz<br><br><br></h3>
        <p>És el is jutottunk sokak kedvencéhez, a Work Sharp PrecisionAdjusthoz, valamint nagy tesójához a Work Sharp Professional Precision Adjusthoz. Fix rögzítés, precíz szögtartás, bolondbiztos működés jellemzi ezeket a modelleket. A „kis” Precisionnek van egy hiányossága, amit annak idején már első használatkor felfedeztem: nem annyira stabil, mint az elvárható lenne. Egy utólagos alátámasztással már remekül működik. A nagy tesónál ez a helyzet már nem áll fent, de az árcédula lényegesen magasabb összeget mutat.<br><br><br>Ebben a hobbiban értelmetlen logikát keresni, mégis azt mondom talán a kisebb egy utólagos – pár ezer forintos támasszal – jobb vétel lehet. Kis gyakorlással „szőrszálpattintó”, tükörpolíros élszalag készíthető vele.</p>
    </div>

    <div class="kepek9">
        <img src="kepek/IMG_1635-scaled.jpeg" height="1050" width="900">
    </div>

    <div class="p9">
        <h3>Zárszóul<br><br><br></h3>
        <p>Igyekeztem a hazai piac legkelendőbb darabjait bemutatni Nektek. Ezek a nemzetközi piacon is alap daraboknak tekinthetőek. Nyomukban lépkedve elképesztő mennyiségű egyéb élezőrendszer született, de jelentős részük nagy újítást nem hozott, az alapelvek megmaradtak: vagy a kés fix és a rendszer mozog, vagy a rendszer fix és a kést mozgatjuk. Néhány kivétel ugyan akad, de ezek igen magas árkategóriába tartoznak, emiatt ritkán találkozunk velük itthon.<br><br><br>Rendszerek ide vagy oda, mégis arra biztatlak Benneteket, hogy tanuljatok meg szabad kézzel, kővel élezni. Sokszor úgy hozza az élet, hogy nem jut tiszta asztal, vagy egy stabil síkfelület az élezéshez. Másrészt egyik élező rendszer sem tudja azt az örömet adni, mint amikor szabad kézzel sikerül egy jó élt alkotni. A penge alatt finoman surrogó vizes kövek hangjában van valami ősi, misztikus, férfiembernek kedves hang. Teljesen el lehet merülni az alkotás örömében. Próbáljátok ki, megéri.</p>
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
            top: 2170px;
            left: 14%;
        }
        .p2 {
            position: absolute;
            top:2600px;
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
            top:3750px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:4360px;
            left: 14%;
        }
        .p4 {
            position: absolute;
            top:4940px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:5550px;
            left: 14%;
        }
        .p5 {
            position: absolute;
            top:6070px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:6450px;
            left: 14%;
        }
        .p6 {
            position: absolute;
            top:7040px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:7780px;
            left: 11%;
        }
        .p7 {
            position: absolute;
            top:9060px;
            padding: 11%;
            text-align: center;
        }
        .kepek8 {
            position: absolute;
            top:9500px;
            left: 11%;
        }
        .p8 {
            position: absolute;
            top:10050px;
            padding: 17%;
            text-align: center;
        }
        .kepek9 {
            position: absolute;
            top:10600px;
            left: 17%;
        }
        .p9 {
            position: absolute;
            top:11440px;
            padding: 17%;
            text-align: center;
        }
        .kepek11 {
            position: absolute;
            top:12000px;
            left: 17%;
        }
    </style>
</body>
</html>