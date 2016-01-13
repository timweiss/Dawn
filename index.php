<?php
  include("php/site.php");
  include("php/config.php");

  $pgTitle = "Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $gpgTitle . " - " . $phTitle; ?></title>
    <link rel="stylesheet" href="content/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
</head>
<body>

<?php include("php/nav.php"); ?>

    <div id="page">
        <div id="searchbox">
            <div id="searchbox-box">
            <form id="searchbox-form" action="/search/" role="search" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <input id="searchbox-input" autocomplete="off" name="anime-name" type="text" placeholder="Type to search...">
                <button id="searchbox-button" type="submit">Search</button>
            </form>
            </div>
        </div>
        <div id="page-content">
              <div id="page-description">
            	<p id="description-text">You love anime? Well, this is your new home! Dawn stores your watched anime, recommends new and keeps you updated every time you visit us. Show your friends your love to anime with your profile, watch anime right on the site.</p>
        </div>
        <div id="news-box">
            <p id="news-title">News</p>
            <div class="news-article">
              <p class="news-title">News Placeholder</p>
              <p class="news-meta">Posted at 21.12.15 from user Tim</p>
              <p class="news-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>
            </div>
            <div class="float-reset"></div>
            </div>
            <div class="anime-box">
            	<p class="anime-box-title">Trending Anime</p>
            		<div class="anime-box-item">
                		<p>Kami nomi zo Shiru Sekai</p>
                    	<img src="http://i.imgur.com/WDHlLXn.png" alt="Anime Image">
                    	<p class="anime-box-genres">Harem - Comedy - Drama</p>
                	</div>
                   <div class="anime-box-item">
                		<p>Mayo Chiki!</p>
                    	<img src="http://i.imgur.com/i2Nfbnn.png" alt="Anime Image">
                    	<p class="anime-box-genres">Harem - Comedy</p>
                	</div>
                   <div class="anime-box-item">
                		<p>Oniichan dakedo Ai Sae Areba Kankeinai yo ne!</p>
                    	<img src="http://i.imgur.com/I9ztVNO.png" alt="Anime Image">
                    	<p class="anime-box-genres">Harem - Ecchi - Comedy</p>
                	</div>
                   <div class="anime-box-item">
                		<p>Ore no Kanojo to Osananajimi ga Shuraba Sugiru</p>
                    	<img src="http://i.imgur.com/3SGlhnh.png" alt="Anime Image">
                    	<p class="anime-box-genres">Comedy - School</p>
                	</div>
                   <div class="anime-box-item">
                		<p>Kanojo ga Flag wo Oraretara</p>
                    	<img src="http://i.imgur.com/hpATuOI.png" alt="Anime Image">
                    	<p class="anime-box-genres">Harem - Comedy</p>
                	</div>
                   <div class="anime-box-item">
                		<p>Steins;Gate</p>
                    	<img src="http://i.imgur.com/suUgaST.png" alt="Anime Image">
                    	<p class="anime-box-genres">Sci-Fi - Thriller</p>
                	</div>
            </div>
            <div class="float-reset"></div>
            <div class="anime-box">
            	<p class="anime-box-title">Staff's Picks</p>
            		<div class="anime-box-item">
                		<p>Ore no Kanojo to Osananajimi ga Shuraba Sugiru</p>
                    	<img src="http://i.imgur.com/3SGlhnh.png" alt="Anime Image">
                    	<p class="anime-box-genres">Comedy - School</p>
                	</div>
                   <div class="anime-box-item">
                		<p>Kanojo ga Flag wo Oraretara</p>
                    	<img src="http://i.imgur.com/hpATuOI.png" alt="Anime Image">
                    	<p class="anime-box-genres">Harem - Comedy</p>
                	</div>
            </div>
            <div class="float-reset"></div>
    	</div>
	</div>
  <?php include("php/footer.php"); ?>
</body>
</html>
