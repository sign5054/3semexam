<?php /*Template Name: Forside */ ?>


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

<header class="main-header frontpage" style="background-image: url(<?php echo get_template_directory_uri()?>/img/background.jpg);">
    <div class="headertop">
    <div class="logo"><img src="img/logo.png" alt=""></div>
    <?php wp_nav_menu(array("theme_location"=>"main_menu")) ?>

    <!-- <ul>
        <li><a class="active" href="index.html">Forside</a></li>
        <li><a href="projekter.html">Projekter</a></li>
        <li><a href="samarbejde.html">Samarbejdspartnere</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
      </ul> -->
    </div>

    <div class="headerbox">
    <h1>Lad os<br>hjælpe dig</h1>
    <a href="<?php echo get_permalink( get_page_by_path('kontakt') ) ?>"><div class="knap">Kontakt os</div></a>
    </div>
    
</header>
<main>
<?php while(have_posts()) : the_post() ?>
<div class="beigebox">
    <div class="beigeboxtextbold"><br>
        <p><?php the_field ("bold_beige") ?></p>

    </div>
    <div class="beigeboxtextreg"><br>
        <p><?php the_field ("reg_beige") ?></p>

    </div>

    
</div>

<div class="whitebox">

    <div class="whiteboxtext">
    <h2><?php the_field ("overskrift_1") ?></h2>
    <p><?php the_field ("tekst_1") ?></p>
    </div>

    <div class="whiteboximg">
        <img src="<?php the_field ("billede_1") ?>" alt="">
    </div>

</div>



<div class="whitebox">

    <div class="whiteboximg">
        <img src="<?php the_field ("billede_2") ?>" alt="">
        
    </div>

    <div class="whiteboxtext">
    <h2><?php the_field ("overskrift_21") ?></h2>
    <p><?php the_field ("tekst_21") ?></p>
    <br>
    <h2><?php the_field ("overskrift_22") ?></h2>
    <p><?php the_field ("tekst_22") ?></p>

</div>

    

</div>

<div class="bluebox">
    <p>“Skjul ikke dine evner. De er givet for at blive brugt. Til hvad nytte er et solur i skyggen?”</p>
    <p class="a">- Benjamin Franklin</p>
</div>

<div class="whitebox">

<div class="whiteboxform">
    <?php echo do_shortcode('[wpforms id="106" title="true"]');?>
    </div>

</div>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>
