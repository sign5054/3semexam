<?php /*Template Name: Kontakt */ ?>

<?php get_header(); ?>
<main>


    
<div class="whitebox"></div>

<div class="whitebox">

    <div class="whiteboxtext">
    <h2><?php the_field ("kontakt_overskrift") ?></h2>
    <p><?php the_field ("kontakt_tekst") ?></p>
    </div>

    <div class="whiteboxform">
    <?php echo do_shortcode('[wpforms id="106" title="false"]');?>
    </div>

</div>




<div class="whitebox"></div>


</main>

<?php get_footer(); ?>