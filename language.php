<?php
session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

if (isset($_GET['lang'])) {
    if ($_GET['lang'] === 'en' || $_GET['lang'] === 'af') {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $cleanUrl = strtok($_SERVER['REQUEST_URI'], '?');
    header("Location: " . $cleanUrl);
    exit;
}

$lang = $_SESSION['lang'];

$text = [
    'en' => [
        'home'          => 'Home',
        'about'         => 'About',
        'attractions'   => 'Attractions',
        'packages'      => 'Packages',
        'contact'       => 'Contact',
        'toggle'        => 'Afrikaans',

        // Home page
        'hero_title'    => 'Discover Vaal & Free State',
        'hero_sub'      => 'Where rich history, breathtaking nature and warm hospitality meet.',
        'hero_cta'      => 'Explore Attractions',
        'featured'      => 'Featured Attractions',
        'featured_sub'  => 'Twelve unforgettable places to visit in the Vaal region and the Free State.',
        'learn_more'    => 'Learn more',
        'video_title'   => 'Experience Our Heritage',
        'packages_title'=> 'Popular Tour Packages',
        'th_package'    => 'Tour Package',
        'th_duration'   => 'Duration',
        'th_highlights' => 'Highlights',
        'th_price'      => 'Price',

// About page
        'about_title'   => 'About Us',
        'about_intro'   => 'Discover Vaal & Free State is a local tourism company based in Vanderbijlpark. We help visitors explore the beauty, history and culture of the Vaal region and the Free State province.',
        'mission_title' => 'Our Mission',
        'mission_text'  => 'To share the hidden gems of our region with the world, while supporting local communities and creating unforgettable travel memories.',
        'values_title'  => 'Our Values',
        'value_1'       => 'Warm hospitality for every guest',
        'value_2'       => 'Respect for nature and heritage',
        'value_3'       => 'Honest prices and quality service',
        'value_4'       => 'Supporting local businesses',
        'team_title'    => 'Why Travel With Us?',
        'team_text'     => 'Our guides are born and raised in the region. They speak English, Afrikaans and Sesotho, and they know every viewpoint, trail and story.',

// my contact
        'contact_title' => 'Contact Us',
        'contact_intro' => 'Have a question or want to book a tour? Send us a message below.',
        'form_name'     => 'Your Name',
        'form_email'    => 'Your Email',
        'form_message'  => 'Your Message',
        'form_send'     => 'Send Message',
        'form_success'  => 'Thank you! Your message has been sent. We will reply soon.',
        'form_error'    => 'Please fill in all fields with a valid email address.',

        // my footer
        'footer_contact'=> 'Contact Us',
        'footer_social' => 'Follow Us',
        'footer_links'  => 'Quick Links',
        'copyright'     => '&copy; 2026 Discover Vaal &amp; Free State. All rights reserved.',
    ],
    'af' => [
        'home'          => 'Tuis',
        'about'         => 'Oor Ons',
        'attractions'   => 'Besienswaardighede',
        'packages'      => 'Pakkette',
        'contact'       => 'Kontak',
        'toggle'        => 'English',

        // Home page
        'hero_title'    => 'Ontdek Vaal &amp; Vrystaat',
        'hero_sub'      => 'Waar ryk geskiedenis, asemrowende natuur en warm gasvryheid ontmoet.',
        'hero_cta'      => 'Verken Besienswaardighede',
        'featured'      => 'Uitgesoekte Besienswaardighede',
        'featured_sub'  => 'Twaalf onvergeetlike plekke om in die Vaal-streek en die Vrystaat te besoek.',
        'learn_more'    => 'Lees meer',
        'video_title'   => 'Beleef Ons Erfenis',
        'packages_title'=> 'Gewilde Toerpakkette',
        'th_package'    => 'Toerpakket',
        'th_duration'   => 'Duur',
        'th_highlights' => 'Hoogtepunte',
        'th_price'      => 'Prys',

        // About page
        'about_title'   => 'Oor Ons',
        'about_intro'   => 'Discover Vaal &amp; Free State is \'n plaaslike toerismemaatskappy in Vanderbijlpark. Ons help besoekers om die skoonheid, geskiedenis en kultuur van die Vaal-streek en die Vrystaat te ontdek.',
        'mission_title' => 'Ons Missie',
        'mission_text'  => 'Om die verborge skatte van ons streek met die wêreld te deel, plaaslike gemeenskappe te ondersteun en onvergeetlike reisherinneringe te skep.',
        'values_title'  => 'Ons Waardes',
        'value_1'       => 'Warm gasvryheid vir elke gas',
        'value_2'       => 'Respek vir die natuur en erfenis',
        'value_3'       => 'Eerlike pryse en goeie diens',
        'value_4'       => 'Ondersteuning van plaaslike besighede',
        'team_title'    => 'Hoekom Saam Met Ons Reis?',
        'team_text'     => 'Ons gidse is hier gebore en getoë. Hulle praat Afrikaans, Engels en Sesotho, en ken elke uitkykpunt, staproete en storie.',

        // Contact page
        'contact_title' => 'Kontak Ons',
        'contact_intro' => 'Het jy \'n vraag of wil jy \'n toer bespreek? Stuur vir ons \'n boodskap hieronder.',
        'form_name'     => 'Jou Naam',
        'form_email'    => 'Jou E-pos',
        'form_message'  => 'Jou Boodskap',
        'form_send'     => 'Stuur Boodskap',
        'form_success'  => 'Dankie! Jou boodskap is gestuur. Ons antwoord binnekort.',
        'form_error'    => 'Vul asseblief alle velde in met \'n geldige e-posadres.',

        // Footer
        'footer_contact'=> 'Kontak Ons',
        'footer_social' => 'Volg Ons',
        'footer_links'  => 'Vinnige Skakels',
        'copyright'     => '&copy; 2026 Discover Vaal &amp; Free State. Alle regte voorbehou.',
    ]
];

function t($key, $text, $lang) {
    return $text[$lang][$key] ?? $text['en'][$key];
}
?>
