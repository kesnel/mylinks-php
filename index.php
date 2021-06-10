<?php
	// Website INFOS
	define('DOMAIN', 'https://kesnel.link');
	define('URL', 'https://kesnel.link/');
	$description = "";
	$title = "Kesnel Samuel";
	$og_img = URL."static/img/card/kesnel-samuel-cover.jpeg";
    $copyrights =  " © " . date("Y") . " Kre8 Design Studio ";
?>

<!--
 █████   ████                                      ████      █████████                                                ████ 
░░███   ███░                                      ░░███     ███░░░░░███                                              ░░███ 
 ░███  ███     ██████   █████  ████████    ██████  ░███    ░███    ░░░   ██████   █████████████   █████ ████  ██████  ░███ 
 ░███████     ███░░███ ███░░  ░░███░░███  ███░░███ ░███    ░░█████████  ░░░░░███ ░░███░░███░░███ ░░███ ░███  ███░░███ ░███ 
 ░███░░███   ░███████ ░░█████  ░███ ░███ ░███████  ░███     ░░░░░░░░███  ███████  ░███ ░███ ░███  ░███ ░███ ░███████  ░███ 
 ░███ ░░███  ░███░░░   ░░░░███ ░███ ░███ ░███░░░   ░███     ███    ░███ ███░░███  ░███ ░███ ░███  ░███ ░███ ░███░░░   ░███ 
 █████ ░░████░░██████  ██████  ████ █████░░██████  █████   ░░█████████ ░░████████ █████░███ █████ ░░████████░░██████  █████
░░░░░   ░░░░  ░░░░░░  ░░░░░░  ░░░░ ░░░░░  ░░░░░░  ░░░░░     ░░░░░░░░░   ░░░░░░░░ ░░░░░ ░░░ ░░░░░   ░░░░░░░░  ░░░░░░  ░░░░░ 
-->

<!DOCTYPE html>
<html lang="en" class="html-bg">
<head>

<meta charset="UTF-8">
<meta name="viewport"   content="width=device-width, initial-scale=1.0">

<title> <?=  $title ?> </title>

<meta name="theme-color"        content="#09B1BA">
<meta name="language"           content="English">
<meta name="Copyright"          content="Kesnel, LLC">
<meta name="author"             content="Kesnel Samuel">
<meta name="application-name"   content="kesnel">

<meta name="ROBOTS"             content="ALL">
<meta name="google"             content="notranslate">
<meta name="robots"             content="index, follow">
<meta name="googlebot"          content="index, follow">

<meta name="keywords"           content="kesnel samuel jean philippe, data scientist, web developer, haitian in tech, tech, stem">
<meta name="description"        content="<? $description ?>">

<!-- Open Graph / Facebook -->
<meta property="og:site_name"          content="kesnel">
<meta property="og:type"               content="website">
<meta property="og:url"                content="<?= URL ?>">
<meta property="og:title"              content="<?= $title ?>">
<meta property="og:description"        content="<? $description ?>">
<meta property="og:image"              content="<?= $og_img ?>">
<meta property="og:image:secure_url"   content="<?= $og_img ?>">

<!-- Twitter Card -->
<meta name="twitter:card"              content="summary_large_image">
<meta name="twitter:type"          	   content="website">
<meta name="twitter:url"               content="<?= URL ?>">
<meta name="twitter:site"          	   content="@kesnelsamuel">
<meta name="twitter:creator"           content="@kesnelsamuel">
<meta name="twitter:title"             content="<?= $title ?>">
<meta name="twitter:description"       content="<? $description ?>">
<meta name="twitter:image"             content="<?= $og_img ?>">

<!-- Fav Icons -->
<link rel="apple-touch-icon" sizes="57x57"      href="<?= URL ?>static/img/fav-ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60"      href="<?= URL ?>static/img/fav-ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72"      href="<?= URL ?>static/img/fav-ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76"      href="<?= URL ?>static/img/fav-ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114"    href="<?= URL ?>static/img/fav-ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120"    href="<?= URL ?>static/img/fav-ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144"    href="<?= URL ?>static/img/fav-ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152"    href="<?= URL ?>static/img/fav-ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180"    href="<?= URL ?>static/img/fav-ico/apple-icon-180x180.png">

<link rel="icon" type="image/png" sizes="192x192"   href="s<?= URL ?>tatic/img/fav-ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32"     href="<?= URL ?>static/img/fav-ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96"     href="<?= URL ?>static/img/fav-ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16"     href="<?= URL ?>static/img/fav-ico/favicon-16x16.png">
<link rel="manifest" href="<?= URL ?>static/img/fav-ico/manifest.json">

<!-- Additional Meta Tags -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?= URL ?>static/img/fav-ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- %%%%%%%%  -->
<link rel="stylesheet" href="static/asset/css/base.css">

<!-- % Global site tag (gtag.js) - Google Analytics   % -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-75L6Z49PCR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-75L6Z49PCR');
</script>


</head>
<body>

    <!-- %%% -->
     
    <main id="main-app" class="main-app page-top">

        <section class="LnK" id="LnK">
            <div class="bg">
                <div class="container">
                    <div class="ti_section">

                        <!-- Profil -->
                        <figure class="profil">
                            <img src="static/img/profil/kesnel-samuel-jean-philippe.jpeg" alt="Profil picture of Kesnel Samuel Jean Philippe" class="avatar">
                        </figure>
            
                        <!-- Introduction -->
                        <div class="cardUp">
                            <h2 class="name"> Kesnel Samuel Jean-Philippe </h2>
                            <h4 class="pseudo"> @kesnelsamuel  </h4>
                        </div>
            
                        <!-- Links -->
                        <div class="cardDown">
                            <div class="cardDownIN">
                                <ul class="CardUl">
                                    <li class="CardUlLi">
                                        <a href="https://www.kesnel.me/" target="_blank" rel="noopener noreferrer" class="CardLiA"> 
                                        <span class="text"> Personal Website </span>
                                        </a>
                                    </li>
                                    <li class="CardUlLi">
                                        <a href="https://www.instagram.com/kesnelsamuel/" target="_blank" rel="noopener noreferrer" class="CardLiA"> 
                                        <span class="text"> Follow me on Instagram </span>
                                        </a>
                                    </li>
                                    <li class="CardUlLi">
                                        <a href="https://www.linkedin.com/in/kesnel-s-jean-philippe-7ba515169/" target="_blank" rel="noopener noreferrer" class="CardLiA"> 
                                        <span class="text"> Connect with me on LinkedIn </span>
                                        </a>
                                    </li>
                                    <li class="CardUlLi">
                                        <a href="https://facebook.com/kesnelsjp" target="_blank" rel="noopener noreferrer" class="CardLiA"> 
                                        <span class="text"> Add me on Facebook </span>
                                        </a>
                                    </li>
                                    <li class="CardUlLi">
                                        <a href="https://twitter.com/kesnelsamuel" target="_blank" rel="noopener noreferrer" class="CardLiA"> 
                                        <span class="text"> Follow me on Twitter </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
            
                        <!-- Footer -->
                        <div class="cardFooter">
                            <p class="cc"> © <?= date("Y")  ?> <span class="break"> Kesnel Samuel. </span> All right reserved </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- %%% -->

    
<script src="static/asset/js/jquery.js"></script>
<script src="static/asset/js/main.js"></script>

</body>
</html>