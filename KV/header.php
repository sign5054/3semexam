<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/93ebceca90.js" crossorigin="anonymous"></script>
<title>Kompetencevaerket</title>
</head>

<header class="main-header contactpage">
    <div class="headertop">
    <div class="logo"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""></div>
    
    <?php wp_nav_menu(array("theme_location"=>"main_menu")) ?>
    
    <!-- <ul>
        <li><a class="active" href="index.html">Forside</a></li>
        <li><a href="projekter.html">Projekter</a></li>
        <li><a href="samarbejde.html">Samarbejdspartnere</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
      </ul> -->
    </div>

  
    
</header>