<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kezdőlap</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div id="content"></div>

  <script>
    function kep1() {
      document.getElementById('content').innerHTML = '<p>Kép és szöveg betöltve automatikusan, csak egyszer.</p>';
    }

    document.addEventListener("DOMContentLoaded", function() {
      kep1();
    });
  </script>

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
        <div class=szoveg_0>
            <h1>Naplónak indult.<br>Bemutató bloggá vált.</h1>
            <p>Aztán átalakult valami mássá. Ablakká, amelyben kitekintek a világra, a világ meg betekinthet a gondolataimba: késekről, every day carry felszerelésekről, és az ezek mögött meghúzódó filozófiáról.<br><br>Aztán ennél is több lett. Egy közösség, amelyben együtt, hasonló értékek mentén dolgozunk azért, hogy egy minőségi, kissé talán régimódi találkahely legyen ez az online térben.<br><br>Balogh József vagyok, és azon dolgozom, hogy ez a közösség egyre nagyobbá váljon, és együtt adhassuk tovább ezek az értékeket. Tarts velünk te is!</p>
        </div>

        <img src="kepek/IMG_20180614_163340_1.jpg" class="kep_1">
        
        <div class="bt_1">
            <button class="nav left" onclick="elozoKep()">&#10094;</button>
        </div>

        <div class="bt_2">
            <button class="nav right" onclick="kovetkezoKep()">&#10095;</button>
        </div>

        <div id="content"></div>
    </main>

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

let aktualis = 1;
const max = 10;

function kovetkezoKep() {
    aktualis++;
  if (aktualis > max) aktualis = 1;

  window['kep' + aktualis]();
}
function elozoKep() {
    aktualis--;
  if (aktualis == 0) aktualis = 10;

  window['kep' + aktualis]();
}


function kep1() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/IMG_2549-980x626.jpeg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>We Banter - Újratöltve</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2025. ápr. 20. | WE Knives, We knives, We knives, WE Knives<br><br>
            4 évvel ezelőtt született egy cikk Ben Petersen első saját tervezésű késéről (We Banter).
            Most, hogy megjelent a második generáció, valamint hogy lassan másfél éve használok egy módosított verziót az első szériából,
            elegendő oknak bizonyult, hogy újra górcső alá...
        </p>
    </div>

    <a href="webanted.php" class="bt_3">Bővebben</a>
  `;
    }

    function kep2() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/20250222_1659167002-980x677.jpg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Lali szamurájkardja</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2025. ápr. 6. | Egyéb<br><br>
            Képzeljük el Lalit, aki nyílászárók beszerelésével keresi a kenyerét. 
            Egyszerű építőipari munkás, aki már évek óta megbízható munkát végez. Szépen építgeti az életét, 
            komoly barátnője van, saját lakásra gyűjt. Egyik reggel, amikor egy újépítésű házhoz szállnak ki a...
        </p>
    </div>

    <a href="szamurajkard.php" class="bt_3">Bővebben</a>
  `;
}

function kep3() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/IMG_2100-980x703.jpeg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Olcsó János túrázni megy!</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2025. márc. 23. | Egyéb<br><br>
            Mindennapi életünk tele van rohanással, stresszhatásokkal. Meló, beosztás, család, egészség, mindennapi gondok. 
            Ezek mellé még van egy jókora digitális függésem is. Képes vagyok naphosszat a telefon képernyőjét bámulni. 
            Kell néha egy kis reboot vagy restart, egy kis...
        </p>
    </div>

    <a href="olcsojanos.php" class="bt_3">Bővebben</a>
  `;
}

function kep4() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/IMG_1892-980x653.jpeg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Modern slip jointok-régi nóta újra hangszerelve</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2025. márc. 8. | Egyéb<br><br>
           Nem reprezentatív (ismerőseim egy részét felölelő) mintán végzett kutatásom szerint a mai napig a 
           legtöbbeknek a bicska szó hallatán apa vagy nagypapa tradicionális, magyar gyártmányú kézműves bicskája, 
           vagy a „svájci” bicska jut eszébe. Bár az előbbi jellegzetesen...
        </p>
    </div>

    <a href="modernslip.php" class="bt_3">Bővebben</a>
  `;
}

function kep5() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img class="szin">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Manuális élezők,avagy magad uram, ha szolgád nincsen</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2025. febr. 23. | Egyébbr><br>
          Ebben a – vasárnap reggeli kávé mellé szánt – írásban az itthon leggyakrabban használt manuális 
          (nem elektromos) késélező eszközöket veszem górcső alá. Nem teszt, hanem rövid bemutató jelleggel. 
          A legegyszerűbb eszköztől haladok az összetett rendszerek felé. Az...
        </p>
    </div>

    <a href="manualiselezok.php" class="bt_3">Bővebben</a>
  `;
}

function kep6() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/IMG_1814.jpeg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Amikor a hóhért akasztják, avagy mi fán terem az Ultras</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2025. febr. 9. | Egyéb<br>
          A blog cikkei egyre-másra  kerülnek ki az oldalra, forognak közszájon, hála az internetnek. 
          Sokan régi ismerősként üdvözlik egyik-másik bemutató alanyát, másoknak  pedig az újdonság erejével hat 
          egy-egy megjelenő írás főszereplője. Igen ám, de a cikkek nem a bokorban...
        </p>
    </div>

    <a href="hoher.php" class="bt_3">Bővebben</a>
  `;
}

function kep7() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/Kep1.jpg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Svörd Peasant</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2025. jan. 26. | Egyéb<br>
            Magányos túrázó sétál a Fekete-Körös gátján a táborhelye felé. Apró hobó kályhájában ropog a tűz. 
            Sült szalonna és lilahagyma illata terjeng a táborhelyen. A túrázó fatányéron katonázza a falatokat 
            surlódó záras bicskájával. Legalábbis ez a kép jelent meg a szemeim...
        </p>
    </div>

    <a href="svordpeasant.php" class="bt_3">Bővebben</a>
  `;
}

function kep8() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/20241221_1020060742-980x735.jpg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Olfa CK-2 Kés helyett sniccer?</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2025. jan. 12. | Egyéb<br>
            A tékozló fiú visszatér Pár éve, mikor a  Tops cég Lil Roughneck nevű késének bűvkörében éltem, 
            azon gondolkodtam, hogy azért kellene az említett mini tankhámozó mellé valami olyan kés is, 
            ami nemcsak repeszteni, hanem vágni is tud. Ezirányú keresgélésem közben akadt...
        </p>
    </div>

    <a href="olfack.php" class="bt_3">Bővebben</a>
  `;
}

function kep9() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/IMG_2113-980x561.jpeg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Aranyhal a viperafészekből</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2024. dec. 29. | Egyéb<br>
            A Viper Koit vagy 3 éve vettem egy helyi éltárstól, másodkézből. Nagyon tetszett a képeken és 
            bemutató videókon, hamar elkapott a “ kell “ érzés. A cikk végére kiderül, megérte-e. 
            Egy kis történelem A Tecnocut snc-t 1987- ben alapították az olaszországi Maniagoban...
        </p>
    </div>

    <a href="aranyhal.php" class="bt_3">Bővebben</a>
  `;
}

function kep10() {
  const container = document.getElementById('content');

  container.innerHTML = `
    <img src="kepek/Kep1-936x675.jpg" class="crauser">

    <div class="szin_2"></div>

    <div class="crauser_2">
        <h1><b>Byrd Cara cara 2</h1>
        <p>
            Szerző: VaszilijEDC Ultra | 2024. dec. 15. | Egyéb<br>
            A Byrd Cara cara 2-t egy impulzusvásárlás során szereztem be használtan, jóárasítva. 
            Egy potenciális munkakést, mentőkést láttam benne. Az évek során bebizonyította, 
            hogy egy igazi “igásló”, amire mindig lehet számítani. Egy kis háttér: A Byrd a Spyderco...
        </p>
    </div>

    <a href="byrdcara.php" class="bt_3">Bővebben</a>
  `;
}
    </script>

    <style>
        .szoveg_0 {
            position: absolute;
            top: 100px;
            left: 7%;;
            width: 50%;
            height: 100%;
            text-align: left;
        }

        .kep_1 {
            position: absolute;
            top: 140px;
            left: 63%;;
            text-align: left;
            width: 450px;
            height: 550px;
        }
        
        .crauser {
            position: absolute;
            top: 700px;
            left: 12%;;
            text-align: left;
            z-index: 1;
            width: 1000px;
            height: 550px;
        }
        .crauser_2 {
            position: absolute;
            top: 880px;
            left: 24%;;
            width: 50%;
            text-align: center;
            color:rgb(255, 255, 255);
            z-index: 3;
        }
        .szin {
            position: absolute;
            background-color: #58858a;
            top: 700px;
            left: 12%;;
            text-align: left;
            width: 1000px;
            height: 550px;
        }
        .szin_2 {
            position: absolute;
            top: 700px;
            left: 12%;;
            width: 1000px;
            height: 550px;
            z-index: 2;
            background-color: rgba(0, 0, 0, .60);
        }
        .bt_1 {
            position: absolute;
            top: 970px;
            left: 15%;;
            color: white;
            z-index: 3;
        }
        .bt_2 {
            position: absolute;
            top: 970px;
            left: 81%;;
            color: white;
            z-index: 3;
        }
        .bt_3 {
            position: absolute;
            top: 1130px;
            left: 44%;;
            color: black;
            z-index: 3;
            padding: 8px 15px;
            margin-left: 10px;
            background: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</body>
</html>