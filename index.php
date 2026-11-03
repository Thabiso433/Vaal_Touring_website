<?php

require_once 'includes/language.php';

$pageTitle = t('home', $text, $lang);


$attractions = [
    [
        'name' => 'Vaal River',
        'img'  => 'img/Vaal River.jpg',
        'alt'  => 'Sunset over the Vaal River',
        'desc' => 'Boat cruises, fishing and relaxing riverside picnics along the scenic Vaal River.',
        'link' => 'https://www.sa-venues.com/things-to-do/gauteng/vaal-river/',
    ],
    [
        'name' => 'Vaal Dam',
        'img'  => 'img/vaal Dam.jpg',
        'alt'  => 'Calm water of the Vaal Dam',
        'desc' => 'One of South Africa&rsquo;s biggest dams - perfect for sailing, water sports and sunsets.',
        'link' => 'https://www.sa-venues.com/attractionsga/vaal-dam.php',
    ],
    [
        'name' => 'Golden Gate Highlands National Park',
        'img'  => 'img/Golden Gate Highlands National Park.jpg',
        'alt'  => 'Sandstone cliffs and grassland',
        'desc' => 'Dramatic golden sandstone cliffs, hiking trails and free-roaming wildlife.',
        'link' => 'https://www.sanparks.org/parks/golden-gate',
    ],
    [
        'name' => 'Clarens Art Village',
        'img'  => 'img/Clarens Art Village.jpg',
        'alt'  => 'Mountain village surrounded by hills',
        'desc' => 'A pretty mountain town full of art galleries, coffee shops and craft breweries.',
        'link' => 'https://www.southafrica.net/za/en/travel/article/clarens-free-state',
    ],
    [
        'name' => 'Vredefort Dome',
        'img'  => 'img/Vredefort Dome.jpg',
        'alt'  => 'Rocky hills of the Vredefort Dome area',
        'desc' => 'A World Heritage Site and the oldest, largest meteorite impact crater on Earth.',
        'link' => 'https://whc.unesco.org/en/list/1162/',
    ],
    [
        'name' => 'Basotho Cultural Village',
        'img'  => 'img/Basotho Village.jpg',
        'alt'  => 'Traditional village huts',
        'desc' => 'A living museum showing Basotho homes, music, food and traditions.',
        'link' => 'https://www.sa-venues.com/attractionsfs/basotho-cultural-village.php',
    ],
    [
        'name' => 'Sterkfontein Dam Nature Reserve',
        'img'  => 'img/Sterkfontein Dam Nature Reserve.jpeg',
        'alt'  => 'Nature reserve with water and mountains',
        'desc' => 'Crystal-clear water framed by mountains - great for camping, boating and birding.',
        'link' => 'https://www.sa-venues.com/attractionsfs/sterkfontein-dam.php',
    ],
    [
        'name' => 'Emerald Resort &amp; Casino',
        'img'  => 'img/Emerald Resort and Casino.jpg',
        'alt'  => 'Resort swimming pool on a sunny day',
        'desc' => 'A family favourite on the Vaal with a water park, animal world and hotel.',
        'link' => 'https://www.emeraldcasino.co.za/',
    ],
    [
        'name' => 'Naval Hill, Bloemfontein',
        'img'  => 'img/Naval-Hill.jpg',
        'alt'  => 'View over a city from a hill',
        'desc' => 'Game reserve in the middle of the city, plus the huge Nelson Mandela statue.',
        'link' => 'https://www.sa-venues.com/attractionsfs/naval-hill.php',
    ],
    [
        'name' => 'Anglo-Boer War Museum',
        'img'  => 'img/Anglo-Boer-War-Museum.jpg',
        'alt'  => 'Historic monument and museum building',
        'desc' => 'Powerful history, artwork and the Women&rsquo;s Memorial in Bloemfontein.',
        'link' => 'https://www.wmbr.org.za/',
    ],
    [
        'name' => 'Gariep Dam',
        'img'  => 'img/Gariep Dam.jpg',
        'alt'  => 'Large dam wall and open water',
        'desc' => 'The largest dam in South Africa, with a nature reserve full of springbok and zebra.',
        'link' => 'https://www.sa-venues.com/attractionsfs/gariep-dam.php',
    ],
    [
        'name' => 'Willem Pretorius Game Reserve',
        'img'  => 'img/Willem Pretorius Game Reserve.jpg',
        'alt'  => 'Zebra grazing in open grassland',
        'desc' => 'Spot giraffe, zebra, wildebeest and white rhino on an easy self-drive safari.',
        'link' => 'https://www.sa-venues.com/game-reserves/fs_willem_pretorius.php',
    ],
];

require_once 'includes/header.php';
?>

    <section class="hero" id="home">
        <h1><?php echo t('hero_title', $text, $lang); ?></h1>
        <p><?php echo t('hero_sub', $text, $lang); ?></p>
        <a href="#attractions" class="btn"><?php echo t('hero_cta', $text, $lang); ?></a>
    </section>

    <section id="attractions">
        <h2><?php echo t('featured', $text, $lang); ?></h2>
        <p class="section-intro"><?php echo t('featured_sub', $text, $lang); ?></p>

        <div class="attractions-grid">
            <?php foreach ($attractions as $place): ?>
                <article class="attraction-card">
                   
                    <img
                        src="<?php echo $place['img']; ?>?auto=format&amp;fit=crop&amp;w=600&amp;q=80"
                        alt="<?php echo $place['alt']; ?>"
                        loading="lazy"
                        onerror="this.onerror=null;this.src='img/longRoad.png';">
                    <div class="card-body">
                        <h3><?php echo $place['name']; ?></h3>
                        <p><?php echo $place['desc']; ?></p>
                        <a class="card-link" href="<?php echo $place['link']; ?>" target="_blank" rel="noopener">
                            <?php echo t('learn_more', $text, $lang); ?> &rarr;
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section>
        <div class="video-section">
            <h2><?php echo t('video_title', $text, $lang); ?></h2>
            <div class="video-wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/uSOqT7a8eXM?si=dhGHsnt57sgRWGVx"
                     title="YouTube video player" frameborder="0" allow="accelerometer; 
                     autoplay; clipboard-write; encrypted-media; 
                     yroscope; picture-in-picture;
                      web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="packages">
        <h2><?php echo t('packages_title', $text, $lang); ?></h2>
        <div class="table-scroll">
            <table class="packages-table">
                <thead>
                    <tr>
                        <th><?php echo t('th_package', $text, $lang); ?></th>
                        <th><?php echo t('th_duration', $text, $lang); ?></th>
                        <th><?php echo t('th_highlights', $text, $lang); ?></th>
                        <th><?php echo t('th_price', $text, $lang); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vaal River Cruise</td>
                        <td>Half Day</td>
                        <td>Boat ride, bird watching, riverside lunch</td>
                        <td class="price">R650</td>
                    </tr>
                    <tr>
                        <td>Golden Gate Adventure</td>
                        <td>2 Days / 1 Night</td>
                        <td>Hiking, game viewing, mountain scenery</td>
                        <td class="price">R2 450</td>
                    </tr>
                    <tr>
                        <td>Cultural Heritage Tour</td>
                        <td>Full Day</td>
                        <td>Historic towns, Basotho culture, local cuisine</td>
                        <td class="price">R1 100</td>
                    </tr>
                    <tr>
                        <td>Clarens &amp; Art Route</td>
                        <td>Full Day</td>
                        <td>Galleries, craft beer, mountain views</td>
                        <td class="price">R1 350</td>
                    </tr>
                    <tr>
                        <td>Vaal &amp; Free State Combo</td>
                        <td>4 Days / 3 Nights</td>
                        <td>River, mountains, heritage and accommodation</td>
                        <td class="price">R5 900</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>
