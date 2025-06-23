<?php
session_start();

// Ha nincs bejelentkezve, visszairányít
if (!isset($_SESSION['username'])) {
    header("Location: ../login.html");
    exit();
}

// Adatbázis kapcsolat
try {
    $db = new PDO('mysql:host=mysql.omega:3306;port=3306;dbname=modernizalt', 'modernizalt', '12345678');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Adatbázis hiba: " . $e->getMessage());
}

function logActivity($db, $username, $activity) {
    try {
        $stmt = $db->prepare("INSERT INTO user_activity (username, activity) VALUES (?, ?)");
        $stmt->execute([$username, $activity]);
    } catch (PDOException $e) {
        // Nem kötelező hibát dobni, de itt logolhatnád fájlba, ha akarod.
    }
}

// Felhasználó adatainak lekérdezése
$user = [];
try {
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$_SESSION['username']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        die("Felhasználó nem található!");
    }
} catch(PDOException $e) {
    die("Hiba a felhasználói adatok lekérdezésekor: " . $e->getMessage());
}

// Adatok frissítése
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_STRING);
    $password = $_POST['password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';

    try {
        if (!empty($password)) {
            if (password_verify($password, $user['password'])) {
                if (!empty($new_password)) {
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $stmt = $db->prepare("UPDATE users SET email = ?, bio = ?, password = ? WHERE username = ?");
                    $stmt->execute([$email, $bio, $hashed_password, $_SESSION['username']]);
                    logActivity($db, $_SESSION['username'], "Jelszó módosítva.");
                } else {
                    $stmt = $db->prepare("UPDATE users SET email = ?, bio = ? WHERE username = ?");
                    $stmt->execute([$email, $bio, $_SESSION['username']]);
                }
                $success = "Sikeres frissítés!";
                logActivity($db, $_SESSION['username'], "Profil frissítve: email és/vagy bemutatkozás.");
            } else {
                $error = "Hibás jelszó!";
                logActivity($db, $_SESSION['username'], "Sikertelen jelszócsere: hibás jelenlegi jelszó.");
            }
        } else {
            $stmt = $db->prepare("UPDATE users SET email = ?, bio = ? WHERE username = ?");
            $stmt->execute([$email, $bio, $_SESSION['username']]);
            $success = "Sikeres frissítés!";
            logActivity($db, $_SESSION['username'], "Profil frissítve: email és/vagy bemutatkozás.");
        }

        // Frissítjük a felhasználó adatait újra
        $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$_SESSION['username']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        $error = "Hiba történt a frissítés során: " . $e->getMessage();
        logActivity($db, $_SESSION['username'], "Hiba a profilfrissítés során.");
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beállítások | <?= htmlspecialchars($_SESSION['username']) ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        .profile-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .profile-form .form-group {
            margin-bottom: 20px;
        }
        
        .profile-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #444;
        }
        
        .profile-form input[type="text"],
        .profile-form input[type="email"],
        .profile-form input[type="password"],
        .profile-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        .profile-form input:focus,
        .profile-form textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }
        
        .profile-form textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        .btn-save {
            background-color: #4CAF50;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s;
            width: 100%;
        }
        
        .btn-save:hover {
            background-color: #3d8b40;
        }
        
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            font-size: 16px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .password-section {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .password-toggle {
            position: relative;
        }
        
        .password-toggle i {
            position: absolute;
            right: 15px;
            top: 42px;
            cursor: pointer;
            color: #777;
        }
    </style>
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


    <div class="profile-container">
        <div class="profile-header">
            <h1>Profilbeállítások</h1>
            <p>Itt módosíthatod személyes adataidat</p>
        </div>
        
        <?php if (!empty($success)): ?>
            <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
        <?php endif; ?>
        
        <?php if (!empty($error)): ?>
            <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        
        <form class="profile-form" method="POST">
            <div class="form-group">
                <label for="username">Felhasználónév</label>
                <input type="text" id="username" value="<?= htmlspecialchars($user['username'] ?? '') ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="email">Email cím</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" required>
            </div>
            
            <div class="form-group">
                <label for="bio">Bemutatkozás</label>
                <textarea id="bio" name="bio" placeholder="Írj magadról pár sort..."><?= htmlspecialchars($user['bio'] ?? '') ?></textarea>
            </div>
            
            <div class="password-section">
                <h3>Jelszó módosítás</h3>
                
                <div class="form-group password-toggle">
                    <label for="password">Jelenlegi jelszó</label>
                    <input type="password" id="password" name="password">
                    <i class="toggle-password" onclick="togglePassword('password')">👁️</i>
                </div>
                
                <div class="form-group password-toggle">
                    <label for="new_password">Új jelszó</label>
                    <input type="password" id="new_password" name="new_password">
                    <i class="toggle-password" onclick="togglePassword('new_password')">👁️</i>
                </div>
            </div>
            
            <button type="submit" class="btn-save">Mentés</button>
        </form>
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

</body>
</html>