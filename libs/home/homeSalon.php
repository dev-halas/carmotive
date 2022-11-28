<section class="homeSalon">
<?php
    $loop = new WP_Query( array( 
        'post_type' => 'car_offer',
        'post_status' => 'publish',
        'posts_per_page' => 3, 
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