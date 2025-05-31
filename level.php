<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapcsolat űrlap</title>
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

    <h1>Kapcsolat űrlap</h1>
    <form method="post" action="feldolgoz.php" onsubmit="return validateForm();">
    <label for="nev">Név:</label><br />
    <input type="text" id="nev" name="nev" /><br /><br />

    <label for="email">E-mail:</label><br />
    <input type="email" id="email" name="email" /><br /><br />

    <label for="targy">Tárgy:</label><br />
    <input type="text" id="targy" name="targy" /><br /><br />

    <label for="uzenet">Üzenet:</label><br />
    <textarea id="uzenet" name="uzenet" rows="5" cols="40"></textarea><br /><br />

    <input type="submit" value="Küldés" />
    </form>
  
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

    // Kliensoldali ellenőrzés
    function validateForm() {
      const nev = document.getElementById('nev').value.trim();
      const email = document.getElementById('email').value.trim();
      const targy = document.getElementById('targy').value.trim();
      const uzenet = document.getElementById('uzenet').value.trim();

      if (!nev) {
        alert('Kérjük, adja meg a nevét!');
        return false;
      }

      if (!email) {
        alert('Kérjük, adja meg az e-mail címét!');
        return false;
      }

      // Egyszerű email ellenőrzés
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert('Kérjük, érvényes e-mail címet adjon meg!');
        return false;
      }

      if (!targy) {
        alert('Kérjük, adja meg a tárgyat!');
        return false;
      }

      if (!uzenet) {
        alert('Kérjük, írja be az üzenetet!');
        return false;
      }

      return true;
    }
  </script>
</html>