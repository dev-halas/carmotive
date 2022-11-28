<?php get_header(); ?>

<main>
    <?php 
        get_template_part('/libs/home/welcome');
        get_template_part('/libs/home/homeSalon');
        get_template_part('/libs/home/offer');
        get_template_part('/libs/home/homeApp');
        get_template_part('/libs/home/homeNews');
        get_template_part('/libs/home/newsletter');
    ?>
</main>

<?php get_footer(); ?>