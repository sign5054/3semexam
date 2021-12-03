<?php /*Template Name: Projekter */ ?>
<?php get_header(); ?>
<main>


    
<div class="whitebox"></div>

<div class="whitebox">

    <div class="whiteboxtextproject">
    <h2><?php the_field ("projekt_1_overskrift") ?></h2>
    <p><?php the_field ("projekt_1_tekst") ?></p>
    </div>

    <div class="whiteboximgproject">
        <img src="<?php the_field ("projekt_1_billede") ?>" alt="">
    </div>

</div>

<div class="whitebox">

    <div class="whiteboximgproject">
        <img src="<?php the_field ("projekt_2_billede") ?>" alt="">
        
    </div>

    <div class="whiteboxtextproject">
    <h2><?php the_field ("projekt_2_overskrift") ?></h2>
    <p> <?php the_field ("projekt_2_tekst") ?></p>
    

    </div>
</div>

<div class="whitebox">

    <div class="whiteboxtextproject">
    <h2><?php the_field ("projekt_3_overskrift") ?></h2>
    <p><?php the_field ("projekt_3_tekst") ?></p>
    </div>

    <div class="whiteboximgproject">
        <img src="<?php the_field ("projekt_3_billede") ?>" alt="">
    </div>

</div>


<div class="whitebox"></div>


</main>

<?php get_footer(); ?>
