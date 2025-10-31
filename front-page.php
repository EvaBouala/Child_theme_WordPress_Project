<?php get_header(); ?>

<!-- hero -->
<section class="hero" id="Accueil" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bg3_fond3.jpg');">
    <div class="overlay"></div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg3_ecriture.png" alt="Titre Baldur’s Gate 3" class="hero-title">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/astarion.png" alt="astarionpng" class="hero-astarion">
</section>


<!-- Histoire -->
<?php get_template_part('histoire'); ?>

<!-- Astarion histoire -->
<?php get_template_part('Astarion'); ?>

<!-- Karlach histoire -->
<?php get_template_part('Karlach'); ?>

<!-- Gale histoire -->
<?php get_template_part('Gale'); ?>

<!-- Wyll histoire -->
<?php get_template_part('Wyll'); ?>

<!-- Laza'el histoire -->
<?php get_template_part('Lazael'); ?>

<!-- Shadowheart histoire -->
<?php get_template_part('Shadowheart'); ?>

<!-- footer -->
<?php get_footer(); ?>
