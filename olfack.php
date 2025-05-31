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
        <h1>Olfa CK-2 Kés helyett sniccer?</h1>
        <p>Szerző: VaszilijEDC Ultra | 2025. jan. 12. | Egyéb</p>
    </main>

    <div class="kepek1">
    <img src="kepek/20241221_1020060742-980x735.jpg" height="650" width="1000">
    </div>

    <div class="p1">
        <p>A tékozló fiú visszatérPár éve, mikor a  Tops cég Lil Roughneck nevű késének bűvkörében éltem, azon gondolkodtam, hogy azért kellene az említett mini tankhámozó mellé valami olyan kés is, ami nemcsak repeszteni, hanem vágni is tud. Ezirányú keresgélésem közben akadt a kezembe a japán OLFA vállalat CK-2 jelű filléres sniccere, ami az olcsósága ellenére egy mutatós és jól használható motyó. A vágóeszköz képen nagyon tetszett, ám kézbe véve azonnal megállapítottam, hogy nem az én világom ez a vékony pengéjű „majdnem-kés”. Hamar tovább is passzoltam egy éltársnak, aki viszont egy ideig nagy megelégedéssel használta az eszközt.<br><br>Az eset óta én is változtam, talán fejlődtem is. Már nem annyira vonz a gondolat, hogy negyedkilós vonatsín darabokat hordjak nyakkésként, inkább a praktikum és a minimalizmus felé fordult a figyelmem. Amikor a karácsonyi EDC-eszköz ajánló cikket hegesztettük össze a többi VaszilijEDC Ultrával, akkor dobta be az egyik kolléga az ajándékötletek közé az OLFA cég termékeit. Amellett, hogy beemeltük a cikkbe ezt is, rágni kezdett a késbogár, azaz ebben az esetben „sniccerbogár”, hogy adjak egy újabb esélyt a CK-2-nek. Meg is rendeltem egy példányt a kis vasból, természetesen néhány pótpengével együtt, aztán bőszen nekiugrottam az EDC szerepkörben való tesztelésének, eljátszva azzal a gondolattal, hogy vajon egy ilyen sniccer ki tud-e váltani egy mindennapi hordásra tervezett „igazi” kést?</p>
    </div>

    <div class="kepek2">
        <img src="kepek/20241221_1211232162-scaled.jpg" height="650" width="1000">
    </div>

    <div class="p2">
        <p>A CK-2 specifikációi:<br><br>Penge vastagsága: 1.2mm<br>Penge hossza: 55mm<br>Markolat hossza: 115 mm<br>Teljes hossz nyitott állapotban: 180 mm<br>Tömeg: 52 g<br>Penge anyaga: rozsdamentes acél<br>Markolat anyaga: rozsdamentes acél</p>
    </div>

    <div class="kepek3">
        <img src="kepek/20241221_1026598342-scaled.jpg" height="600" width="800">
    </div>

    <div class="p3">
        <p>A sniccerek logikája<br><br><br>A sniccerek fő esszenciája mindig is az volt, hogy a vágóeszköz vékony (emiatt jó vágó, és szúró képességű) pengéje biztonsági és praktikussági okokból rendelkezzen könnyen változtatható hosszúsággal, és ne kelljen bíbelődni az élezésével, inkább az eltompult rész letörésével, cseréjével legyen megoldható az élesen/hegyesen tartás. Fontos kiemelni továbbá, hogy a sniccerek vonatkozásában általában a penge hegye, és nem az éle a gyakran használt elem. A nem túl elegáns, de igen praktikus munkaeszközök fő alkalmazási területei közé a papír, karton, tapéta, stb. vágása és a csomagolások bontása tartozik.<br><br>A klasszikus, mindenki által ismert tördelhető pengéjű sniccereket pont a japán OLFA vállalat alapítója találta fel. Idézem az OLFA magyar képviseletének honlapjáról:<br><br>„1956-ban Mr. Y. Okada az OLFA Corporation alapítója, találta fel az első tördelhető pengéjű kést. Az ihletet ehhez a különleges ötlethez a táblás csokiszeletek töréséből és a törött üvegek szilánkjainak elemzéséből vette. A késpenge hossza, szélessége és szöge, amiket Okada Úr határozott meg, világszerte szabvánnyá vált a törhető késpengék számára. Azóta az OLFA kés világszerte fogalom.”<br><br>A CK-2 viszont nem egy tördelhető pengéjű eszköz. A pengéje állítható hosszúságú, és cserélhető, de hiányzik róla a megszokott törési perforáció. Alapvetően ipari késként van felcímkézve, és a strapabíróság miatt lett kialakítva olyanra amilyen. Véleményem szerint nem is lenne igazán szerencsés egy könnyen törő penge EDC-re való használata, mivel az a konstrukció már egy kisebb feszegetés során is magában hordozhatja a balesetveszély kockázatát. Tehát álláspontom szerint pont amiatt lehet a CK-2 egy mindennapi használatra számba vehető eszköz, hogy nem az a tipikus sniccer.<br><br>De milyen szempontokból különleges még ez a termék az átlagos tapétavágó késekhez képest? </p>
    </div>

    <div class="kepek4">
        <img src="kepek/20241221_0932277622-scaled.jpg" height="500" width="800">
        <img src="kepek/20241221_0932045002-scaled.jpg" height="500" width="800">
    </div>

    <div class="p4">
        <p>A CK-2 szembeötlő sajátosságai<br><br><br>Ha ránézek a CK-2-re, nekem előbb jut eszembe róla egy minimalista modern folder, mint egy sniccer. A klasszikus biztonsági késekhez képest ugyanis ez a darab igazán mutatósnak és időtállónak tűnik — több vonatkozásában is.<br><br>A hétköznapi sniccerek rikító színű, duci és bordázott műanyag markolata helyett itt egy letisztult, már-már elegánsnak nevezhető, egy darabból  hajtogatott rozsdamentes acél nyelet kapunk, ami leginkább a Higonokami kések lapos markolatát idézte fel bennem.<br><br>A penge  megfelelő hosszúságban való rögzítéséről a tapétavágóknál megszokott műanyag gomb helyett egy sárgaréz csavar és a hozzá tartozó szintén sárgaréz anya gondoskodik. Amikor pengét akarunk cserélni a késben, akkor is ezt az anyát kell kitekerni.<br><br>Az egész konstrukció faék egyszerűségű, emiatt koszolódás esetén is pillanatok alatt szét lehet kapni, és a csap alatt könnyen megtisztítható.<br><br>A vágóeszköz pengéje a tördelési lehetőségének hiányán túl a vastagsága miatt is különbözik a tipikus sniccerek pengéjétől: az 1,2 mm vastag, szinte egyáltalán nem flexibilis acél inkább már a bicskák világa felé közelít. A penge formája nem rombusz vagy trapéz alakú, hanem a japánok hagyományos ceruzafaragó kiskéseit megidéző „letört hegyű” kiridashi forma.<br><br>A markolat hátsó részén található egy furat, amibe akár egy vékonyabb paracordot is bele tud fűzni az, aki egy kis dísszel szeretné ellátni az eszközét.<br><br>Rögzített állapotában a penge nem kotyog és zörög úgy, mint átlagos sniccer esetében, ami nagyban fokozza a „minőségi’ érzetet.<br><br>Mindezen ígéretes, a hétköznapi tapétavágók szintjét meghaladó külsőségek számbavétele után most már rá kell térnem arra, hogy a tényleges használat során mit is tud a CK-2…</p>
    </div>

    <div class="kepek5">
        <img src="kepek/20241221_0919425832-scaled.jpg" height="900" width="700">
        <img src="kepek/20241221_0917018832-scaled.jpg" height="500" width="700">
    </div>

    <div class="p5">
        <p>Komoly kompromisszumok<br><br><br>Amikor először ráfogtam az eszköz nyelére, azonnal konstatáltam, hogy a markolat közepén futó vájat és az acéllemez egyéb vágott/mart részei csak minimálisan vannak lekerekítve, és olyan sorjásak, hogy kis túlzással sajtot is lehetne reszelni ezeken a pontjain. Ráadásul a vékony profilú markolat a közepesnél kicsivel nagyobb erejű igénybevétel esetén azonnal kényelmetlenné válik a használó tenyerében. Ezek alapján a sniccer ergonómiai kialakítását finoman szólva sem minősíthetem tökéletesnek. Ha valaki mondjuk egy szárazabb tölgyfa ágat szeretne a CK-2-vel megfaragni, én ajánlom, hogy húzzon kesztyűt a munkához, mert a markolat okozhat pár sajgó benyomódást a kezén.</p>
    </div>

    <div class="kepek6">
        <img src="kepek/20241221_0915133932-scaled.jpg" height="600" width="900">
    </div>

    <div class="p6">
        <p>A neuralgikus pontok között érdemes pár szót szólni a pengerögzítés sajátosságairól is. Az egyszerű csavaros megoldás jó oldala, hogy a penge hossza szabadon és gyorsan állítható, a hátránya viszont az, hogy rázogatás, illetve ütődés hatására könnyen ki tud lazulni — hacsak nem tekerte be az anyát a felhasználó teljes erőből.<br><br>Mivel a penge a gyors kioldhatóság miatt nem tökéletesen illeszkedik a vájatába, van egy minimális vertikális mozgása attól függően, hogy milyen erőhatások érik. Ez nem igazán zavaró, az viszont már komolyabb probléma lehet, hogy a penge hajlamos elindulni hátrafelé, ha keményebb anyagba próbáljuk meg a beledöfni a sniccer hegyét. Elvileg a csavar erőteljes meghúzásával ennek gátat lehet szabni, de tapasztalataim szerint ez csak elméleti megoldás, tehát senki se próbáljon ezzel az eszközzel fémlemezt lyukasztani, mert csalódás lesz a vége, a csavar ereszteni fog, és a penge eltűnik a markolatban.<br><br>A penge japán stílus szerint féloldalas, azaz véső típusú leélezést kapott (megjegyzés: nem klasszikus vésőélet, mivel a penge „lapos” bal oldalán is található egy jelzés értékű, pár fokos leélezés, de az egyszerűség kedvéért most nevezzük ezt vésőélnek). Emiatt a használata elsősorban jobbkezeseknek lehet kényelmes, plusz a szimmetrikus leélezéshez szokott felhasználók kezében az él „elkanyarodhat” a vágott anyagban.<br><br>A penge anyagáról nem találtam pontos információt, annyi bizonyos, hogy „japán rozsdamentes acélból” van, és tapasztalataim szerint kb. a KO-13 szintjén rozsdamentes és éltartó, magyarul valamiféle alsó kategóriás, de legalább valóban korrózióálló acél.<br><br>Ahogy soraimból kitűnik, a kis OLFA számos olyan tulajdonsággal (kényelmetlen markolat, kilazuló pengerögzítés, aszimmetrikus leélezés, budget acél) rendelkezik, ami EDC eszközként igen nagy hátrány lehet pl. egy egyszerű Opinel no.7. bicskához képest, de azért még ne törjünk pálcát felette, mert vannak elképesztően pozitív oldalai is!</p>
    </div>

    <div class="kepek7">
        <img src="kepek/20241221_0909509222-scaled.jpg" height="600" width="900">
    </div>

    <div class="p7">
        <p>Tagadhatatlan előnyök<br><br><br>Az OLFA CK-2 legnagyobb erénye, hogy nagyon olcsó: a cikk megírásának pillanatában az említett 7-es Opinel fele áráért, tehát 1800 Ft-ért elérhető. Ennyiért nem is igazán tudok valid alternatívát EDC kés témakörben (még a Mora Basic 511 is drágább egy ezressel).<br><br>Fillérekért persze nem szabad csodát várni… azonban a japánoknak mégis sikerült hihetetlen dolgokat belepréselni a sovány árcédulába. A sniccer pengéje ugyebár cserélhető (alapban nem jár hozzá pótpenge, azokat kettes csomagokban árulják, kb. 1200 Ft/csomag áron), de az eltompult pengéket sem kell kidobnunk, mivel azok simán élezhetőek bármilyen, a bicskák karbantartásánál megszokott megoldással. Ha valaki átprofilozásban gondolkodik, az sem kizárt, így némi munkával nem csak vésőélű CK-2-je lehet a felhasználónak — én pl. katakiriba élt alakítottam ki az egyik pótpengén.<br><br>Amit az Opinel nem tud (mókolás nélkül), a CK-2 viszont képes rá, az az egykezes nyitás. Csupán pár perc gyakorlással magabiztosan nyitható és zárható egy kézzel is a sniccer pengéje.<br><br>Ráadásul a CK-2-nek semmi baja nincs, ha víz éri. Nem dagad be a markolat, nem rozsdásodik rajta semmi, tehát jó értelemben véve „igénytelen” a konstrukció.<br><br>És meglepő módon nem csupán tapétavágásra, illetve csomagbontásra használható az eszköz. Kipróbáltam többféle helyzetben, és szinte minden fronton közel azonosan teljesített, mint egy hasonló méretű és pengeformájú folder.<br><br>A doboznyitás és a kartondarabolás természetesen testreszabott feladat volt a kis OLFÁnak, talán csak a vékonyabb pengéjű sniccerek teljesítenek nála jobban ezen a téren. Érdemes beállítani ilyen típusú munkavégzés esetén azt, hogy a pengének csak a hegye legyen ki a markolatból, és így kényelmesebben és biztonságosabban használható az eszköz, összehasonlva pl. egy folderrel.<br><br>Farigcsálás fronton természetesen alulmaradt a skandináv leélezésű, puukko markolatú Morákkal szemben, de azért egy nyársat simán ki tudtam hegyezni vele, és kis gyakorlással egy tollaság is faragható vele.<br><br>Elvetemült módon a konyhában is kipróbáltam az eszközt, és meglepő módon használhatónak bizonyult. Értelemszerűen egy Opinellel sokkal szebben lehet zöldséget hámozni és uborkát szeletelni, ám az aszimmetrikus leélezés ellenére is sikerült mindent megoldanom a kis japán vassal, ami egy ilyen mini pengétől elvárható.<br><br>A használat mellett a hordhatóságról is érdemes megemlékezni. Az Opinelhez hasonlóan semmiféle klipsz vagy tok nem segíti a CK-2 hordását, viszont a lapos forma miatt könnyen elrejthető bármilyen zsebben, és a zsinórfuratnak hála akár előhúzást segítő zsinórral is ellátható a sniccer. Itt még az sem elhanyagolható szempont, hogy a pengéje még a maximális hosszúságúra állítva is igen rövid, így nem minősül közbiztonságra különösen veszélyes eszköznek (megjegyzés: hacsak a rendőr a helyszínen másként nem véli).</p>
    </div>

    <div class="kepek8">
        <img src="kepek/20241221_0907147052-scaled.jpg" height="600" width="900">
        <img src="kepek/20241221_0912113482-scaled.jpg" height="600" width="900">
    </div>

    <div class="p8">
        <p>Az ítélet<br><br><br>Akkor hát az OLFA CK-2 egy olyan sniccer, ami jobb EDC használatra, mint egy dedikált EDC folder vagy kisfix?<br><br>Alapvetően NEM a válasz erre a kérdésre. Bár vannak tagadhatatlan előnyei, azért finoman szólva sem egy ligában játszik a „komolyabb” késekkel. Éltartás, kényelem, stabilitás szempontjából sehol nincs azokhoz képest.<br><br>Ám ha valaki a legolcsóbb vágóeszköz megoldást keresi, és nem tud, vagy nem akar megtanulni élezni, illetve akinek a számára a legfontosabb EDC funkció a csomagbontás, annak egy teljesen praktikus megoldás lehet a japán cserélhető pengés eszköz.<br><br>Persze csak akkor, ha az illető túl tud lépni azon a zavaró gondolaton, hogy nem egy „igazi” kést tart magánál…</p>
    </div>

    <div class="kepek9">
        <img src="kepek/20241221_0908388522-scaled.jpg" height="600" width="900">
    </div>

    <div class="p9">
        <p>Üdvözlettel:<br>Smiri Sándor</p>
    </div>

    <div class="kepek11">
        <img src="kepek/logo_nagy_ives.jpg" height="400" width="400">
    </div>

    <div>
        <a href="aranyhal.php" class="btn" style="position: absolute; top: 11400px; left: 10%;">← Aranyhal a viperafészekből</a>
        <a href="svordpeasant.php" class="btn" style="position: absolute; top: 11400px; left: 30%;">Svörd Peasant →</a>
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
            top:770px;
            padding: 11%;
            text-align: center;
        }
        .kepek2 {
            position: absolute;
            top: 1180px;
            left: 14%;
        }
        .p2 {
            position: absolute;
            top:1300px;
            padding: 40%;
            text-align: center;
        }
        .kepek3 {
            position: absolute;
            top:2070px;
            left: 21%;
        }
        .p3 {
            position: absolute;
            top:2440px;
            padding: 20%;
            text-align: center;
        }
        .kepek4 {
            position: absolute;
            top:3230px;
            left: 21%;
        }
        .p4 {
            position: absolute;
            top:4100px;
            padding: 11%;
            text-align: center;
        }
        .kepek5 {
            position: absolute;
            top:4750px;
            left: 24%;
        }
        .p5 {
            position: absolute;
            top:6030px;
            padding: 11%;
            text-align: center;
        }
        .kepek6 {
            position: absolute;
            top:6370px;
            left: 17%;
        }
        .p6 {
            position: absolute;
            top:6850px;
            padding: 11%;
            text-align: center;
        }
        .kepek7 {
            position: absolute;
            top:7410px;
            left: 17%;
        }
        .p7 {
            position: absolute;
            top:7890px;
            padding: 11%;
            text-align: center;
        }
        .kepek8 {
            position: absolute;
            top:8740px;
            left: 17%;
        }
        .p8 {
            position: absolute;
            top:9740px;
            padding: 17%;
            text-align: center;
        }
        .kepek9 {
            position: absolute;
            top:10270px;
            left: 17%;
        }
        .p9 {
            position: absolute;
            top:10650px;
            padding: 17%;
            text-align: center;
        }
        .kepek11 {
            position: absolute;
            top:10950px;
            left: 17%;
        }
    </style>
</body>
</html>