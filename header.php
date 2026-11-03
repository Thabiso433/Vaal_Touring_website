<?php
$pageTitle = $pageTitle ?? 'Discover Vaal & Free State';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang === 'af' ? 'af' : 'en'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover Vaal & Free State - tours, attractions and heritage in the Vaal region and Free State, South Africa.">
    <title><?php echo $pageTitle; ?> | Discover Vaal & Free State</title>
    <link rel="stylesheet" href="css/style.css"v=2>
</head>
<body>
    <header>
        <div class="header-container">
            <a href="index.php" class="logo">
                <img src="img/Icon.png" alt="Discover Vaal & Free State logo">
                <span>Discover Vaal &amp; Free State</span>
            </a>

            <button class="menu-btn" id="menuBtn" aria-label="Open menu">&#9776;</button>

            <nav>
                <ul id="navMenu">
                    <li><a href="index.php"><?php echo t('home', $text, $lang); ?></a></li>

                    <li class="dropdown">
                        <a href="index.php#attractions" class="dropbtn"><?php echo t('attractions', $text, $lang); ?> &#9662;</a>
                        <ul class="dropdown-content">
                            <li><a href="index.php#attractions">Vaal River</a></li>
                            <li><a href="index.php#attractions">Vaal Dam</a></li>
                            <li><a href="index.php#attractions">Golden Gate Highlands</a></li>
                            <li><a href="index.php#attractions">Clarens Art Village</a></li>
                            <li><a href="index.php#attractions">Vredefort Dome</a></li>
                            <li><a href="index.php#attractions">Basotho Cultural Village</a></li>
                            <li><a href="index.php#attractions">Gariep Dam</a></li>
                            <li><a href="index.php#attractions">All 12 attractions</a></li>
                        </ul>
                    </li>

                    <li><a href="index.php#packages"><?php echo t('packages', $text, $lang); ?></a></li>
                    <li><a href="about.php"><?php echo t('about', $text, $lang); ?></a></li>
                    <li><a href="contact.php"><?php echo t('contact', $text, $lang); ?></a></li>

                    <li>
                        <a class="lang-toggle" href="?lang=<?php echo $lang === 'en' ? 'af' : 'en'; ?>">
                            <?php echo t('toggle', $text, $lang); ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
<main>
