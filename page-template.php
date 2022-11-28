<?php
    get_header(); 
        /**
        * Template Name: Page
        */

    the_post();

    $tekst = get_field('tekst');
    $image = get_field('image');
?>

<div class="pageHeader">
        <div class="pageHeader--inner">
            <h1><?php echo the_title(); ?></h1>
            <div class="pageHeader--text">
                <?php echo $tekst; ?>
            </div>
            <?php
                if( !empty( $image ) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>" class="pageHeader--bg">
            <?php endif; ?>
        </div>
        
        <?php get_template_part('/libs/contactRight'); ?>
    </div>

    <div class="carOffer--contact container">
        <div class="carOffer--left">
            <div class="carOffer--line2"></div>
            <div class="carOffer--form">
                <?php echo do_shortcode('[contact-form-7 id="34" title="Kontakt"]') ?>
            </div>
        </div>
        <div class="carOffer--right">
            <img src="<?php echo THEME_URL; ?>_dev/img/kontakt.png" alt="skontaktuj się">
        </div>
    </div>

<section class="homeSalon">
<?php
    $loop = new WP_Query( array( 
        'post_type' => 'car_offer',
        'post_status' => 'publish',
        'posts_per_page' => 12, 
        'orderby' => 'title', 
        'order' => 'DESC', 
        ) );
    if ( $loop->have_posts() ) : ?>
    <div class="carOffer container" style="
        padding-top: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
		padding-bottom: 10vh;
    ">
        <h2 style="margin-bottom: 50px">Salon online</h2>
        <div class="carOffer--wrapper">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
        
            $car_otomoto = get_field('car_otomoto'); 
            $car_financing = get_field('car_financing'); 
            $car_peroid = get_field('car_peroid');
            $car_self_deposit = get_field('car_self_deposit'); 
            $car_buyout = get_field('car_buyout');
            $car_installment = get_field('car_installment'); 
        
        ?>
            <a href="<?php echo $car_otomoto; ?>" target="_blank" class="carOffer--item">
                <img src="<?php echo the_post_thumbnail_url();?>" alt="car offer image" class="carOffer--img">
                <div class="carOffer--content">
                    <div class="carOffer--inner">
                        <h4 class="carOffer--name"><?php echo the_title(); ?></h4>
                        <div class="carOffer--text">
                            <ul>
                                <li><?php echo $car_financing; ?></li>
                                <li><?php echo $car_peroid; ?></li>
                                <li><?php echo $car_self_deposit; ?></li>
                                <li><?php echo $car_buyout; ?></li>
                            </ul>
                        </div>
                        <div class="carOffer--details">
                            <div class="carOffer--price">
                                <?php echo $car_installment; ?>
                            </div>  
                            <span>*rata miesięczna netto</span> 
                        </div>
                    </div>
                </div>
            </a>
        <?php endwhile; ?>
        </div>
        <a href="<?php echo esc_url(home_url('/')) ?>car_offer" class="buttonRed">Salon online</a>
    </div>
    <?php 
        endif;
        wp_reset_postdata();
    ?>
</section>

<?php get_footer(); ?>