<?php
          $args = array(
            'post_type' => 'car_offer',
            'post_status' => 'publish',
            'posts_per_page' => 5,
            'tax_query' => array(
                array(
                    'taxonomy' => 'car_is_new',
                    'field'    => 'slug',
                    'terms'    => array( 'uzywane' ),
                    'operator' => 'IN'
                    ),
                ),
            );
            $arr_posts = new WP_Query( $args );
        ?>

        <?php $arr_posts = new WP_Query( $args );
            if ( $arr_posts->have_posts() ) : ?>
            <div class="carOffer--wrapper">
                <?php while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post(); 
                    
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
        <?php endif; ?>
