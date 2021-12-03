<?php /*Template Name: Samarbejdspartnere */ ?>
<?php get_header(); ?>
<main>



<div class="whitebox">

    <div class="partnerinfo">
    <h2><?php the_field ("samarbejde_overskrift") ?></h2>
    <p><?php the_field ("samarbejde_tekst") ?></p>
    </div>

    

</div>


<div class="bluewhitebox">
    <div class="whiteboxtext">
        <h2><?php the_field ("partner_1_overskrift") ?></h2>
        <p><?php the_field ("partner_1_tekst") ?></p>
        </div>
    <div class="videobox">
        <video width="100%" padding-="auto" controls>
            <source src="<?php the_field ("partner_1_video") ?>" type="video/mp4">
        </video>
    </div>
     
 </div>

    



</main>

<?php get_footer(); ?>
