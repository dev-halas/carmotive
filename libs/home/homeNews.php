<div class="homeNews">
    <div class="homeNews--container container">
        <div class="homeNews--header">
            <span>do poczytania</span>
            <h2>Aktualności Carmotive</h2>
        </div>
        <div class="news">
        <?php $the_query = new WP_Query( array( 'posts_per_page' => 2, )); ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    $date = get_the_date('d/m/Y');
                ?>
                    
                    <div class="newsArticle animate fadeInBottomLow">
                        <img src="<?php the_post_thumbnail_url('large');?>" alt="" class="newsArticle--img"/>
                        <div class="newsArticle--content">
                            <h2><?php the_title(); ?></h2>
                            <?php echo word_count(get_the_excerpt(), '30'); ?>        
                            <a class="buttonRed" href="<?php the_permalink(); ?>">czytaj więcej</a>
                            <span><?php echo $date; ?></span>
                        </div> 
                    </div>


                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                
            <?php else : ?>
                <h1 class="newsEmpty"><?php __('Brak artykułów do wyświetlenia'); ?></h1>
        <?php endif; ?>
        </div>
        <a href="<?php echo esc_url(home_url('/')) ?>news" class="buttonDark">Wszystkie artykuły</a>
        <div class="homeNews--circle"></div>
    </div>
</div>