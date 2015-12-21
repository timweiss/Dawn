<?php 
    include("../settings/globalsettings.php");
    $pageName = "All Anime";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $projectName . " - " . $pageName; ?></title>
    <link rel="stylesheet" href="../content/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include("../navigation.php"); ?>
    <div id="page">
        <div id="page-content">
            <?php if ($serviceMessage != "") echo '<div class="service-message"><p class="service-message-text">' . $serviceMessage . '</p></div>'; ?>
            <p id="all-anime-title">All Anime</p>
            <p id="anime-sort-order">Sorted by <span id="sort-item">popularity</span>.</p>
            <div id="anime-list">
                <div class="anime-list-item">
                    <img class="anime-list-cover" src="http://i.imgur.com/WDHlLXn.png" />
                    <div class="anime-list-information">
                        <p class="anime-list-title"><span class="anime-list-position">#1</span> Kami nomi zo Shiru Sekai <span class="anime-list-rating">9.4/10</span></p>
                        <p class="anime-list-description">Keima Katsuragi, known online as the legendary "God of Conquest," can conquer any girl's heart-in dating sim games, at least. In reality, he opts for the two-dimensional world of gaming over real life because he is an unhealthily obsessed otaku of galge games (a type of Japanese video game centered on interactions with attractive girls).</p>
                        <p class="anime-list-meta"><span class="anime-list-episodes">12 Episodes @ 23 Minutes</span> <span class="anime-list-genres">Comedy - Romance - Harem - Drama - Sci-Fi</span> <span class="anime-list-rec">Show Recommendations</span></p>
                    </div>
                    <div class="float-reset"></div>
                </div>
                <div class="anime-list-item">
                    <img class="anime-list-cover" src="http://i.imgur.com/i2Nfbnn.png" />
                    <div class="anime-list-information">
                        <p class="anime-list-title"><span class="anime-list-position">#2</span> Mayo Chiki! <span class="anime-list-rating">8/10</span></p>
                        <p class="anime-list-description">When you've got acute gynophobia, even a pretty girl can be a malady, and as the sparring partner for his family of female wrestlers, Sakamachi Kinjiro has the worst case EVER! Just one touch makes his nose bleed, so school's a bloody nightmare even before Kanade, the Principal's twisted daughter, deduces both Kinjiro's "feminine issue" (...)</p>
                        <p class="anime-list-meta"><span class="anime-list-episodes">12 Episodes @ 23 Minutes</span> <span class="anime-list-genres">Comedy - Romance - Harem</span> <span class="anime-list-rec">Show Recommendations</span></p>
                    </div>
                    <div class="float-reset"></div>
                </div>
                <div class="anime-list-item">
                    <img class="anime-list-cover" src="http://i.imgur.com/I9ztVNO.png" />
                    <div class="anime-list-information">
                        <p class="anime-list-title"><span class="anime-list-position">#3</span> Onii-chan dakedo Ai Sae Areba Kankeinai yo ne! <span class="anime-list-rating">7.6/10</span></p>
                        <p class="anime-list-description">Himenokouji twins Akito and Akiko have finally reunited with each other after separation due to the death of their parents. After six years of living apart they suddenly began to live under the same roof due to Akito's desire to live as a family unit once more. Things were fine at first until Akiko began to express her incestuous love for her older brother, who only sees her as a little sister.</p>
                        <p class="anime-list-meta"><span class="anime-list-episodes">12 Episodes @ 23 Minutes</span> <span class="anime-list-genres">Comedy - Romance - Harem - Brocon - Siscon</span> <span class="anime-list-rec">Show Recommendations</span></p>
                    </div>
                    <div class="float-reset"></div>
                </div>
                <div class="anime-list-item">
                    <img class="anime-list-cover" src="http://i.imgur.com/3SGlhnh.png" />
                    <div class="anime-list-information">
                        <p class="anime-list-title"><span class="anime-list-position">#4</span> Ore no Kanojo to Osananajimi ga Shuraba Sugiru <span class="anime-list-rating">8.2/10</span></p>
                        <p class="anime-list-description">Eita enters high school aiming for the National University School of Medicine. Because of his parents' divorce and his goal he shuns anything to do with romance or love. One day, Masuzu, the school beauty with the silver hair who has just returned to the country, enters his life in a most unexpected way. Chiwa, his childhood friend since elementary school, will not let this go without a fight.</p>
                        <p class="anime-list-meta"><span class="anime-list-episodes">12 Episodes @ 23 Minutes</span> <span class="anime-list-genres">Comedy - Romance - Harem</span> <span class="anime-list-rec">Show Recommendations</span></p>
                    </div>
                    <div class="float-reset"></div>
                </div>
                <div class="anime-list-item">
                    <img class="anime-list-cover" src="http://i.imgur.com/WDHlLXn.png" />
                    <div class="anime-list-information">
                        <p class="anime-list-title"><span class="anime-list-position">#1</span> Kami nomi zo Shiru Sekai <span class="anime-list-rating">9.4/10</span></p>
                        <p class="anime-list-description">Keima Katsuragi, known online as the legendary "God of Conquest," can conquer any girl's heart-in dating sim games, at least. In reality, he opts for the two-dimensional world of gaming over real life because he is an unhealthily obsessed otaku of galge games (a type of Japanese video game centered on interactions with attractive girls).</p>
                        <p class="anime-list-meta"><span class="anime-list-episodes">12 Episodes @ 23 Minutes</span> <span class="anime-list-genres">Comedy - Romance - Harem - Drama - Sci-Fi</span> <span class="anime-list-rec">Show Recommendations</span></p>
                    </div>
                    <div class="float-reset"></div>
                </div>
                <div class="anime-list-item">
                    <img class="anime-list-cover" src="http://i.imgur.com/WDHlLXn.png" />
                    <div class="anime-list-information">
                        <p class="anime-list-title"><span class="anime-list-position">#1</span> Kami nomi zo Shiru Sekai <span class="anime-list-rating">9.4/10</span></p>
                        <p class="anime-list-description">Keima Katsuragi, known online as the legendary "God of Conquest," can conquer any girl's heart-in dating sim games, at least. In reality, he opts for the two-dimensional world of gaming over real life because he is an unhealthily obsessed otaku of galge games (a type of Japanese video game centered on interactions with attractive girls).</p>
                        <p class="anime-list-meta"><span class="anime-list-episodes">12 Episodes @ 23 Minutes</span> <span class="anime-list-genres">Comedy - Romance - Harem - Drama - Sci-Fi</span> <span class="anime-list-rec">Show Recommendations</span></p>
                    </div>
                    <div class="float-reset"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>