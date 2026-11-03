<?php

require_once 'includes/language.php';

$pageTitle = t('about', $text, $lang);

require_once 'includes/header.php';
?>

    
    <section class="page-banner">
        <h1><?php echo t('about_title', $text, $lang); ?></h1>
    </section>

    
    <section class="about-grid">
        <div>
            <h2><?php echo t('about_title', $text, $lang); ?></h2>
            <p><?php echo t('about_intro', $text, $lang); ?></p>

            <h2><?php echo t('mission_title', $text, $lang); ?></h2>
            <p><?php echo t('mission_text', $text, $lang); ?></p>
        </div>
        <img src="img/van.png" alt="Tour bus travelling through the Free State countryside">
    </section>

    
    <section>
        <h2><?php echo t('values_title', $text, $lang); ?></h2>
        <ul class="values-list">
            <li><?php echo t('value_1', $text, $lang); ?></li>
            <li><?php echo t('value_2', $text, $lang); ?></li>
            <li><?php echo t('value_3', $text, $lang); ?></li>
            <li><?php echo t('value_4', $text, $lang); ?></li>
        </ul>
    </section>

    
    <section class="about-grid">
        <img src="img/meeting.jpg" alt="Our friendly tour guides working together">
        <div>
            <h2><?php echo t('team_title', $text, $lang); ?></h2>
            <p><?php echo t('team_text', $text, $lang); ?></p>
            <a class="btn" href="contact.php"><?php echo t('contact_title', $text, $lang); ?></a>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
