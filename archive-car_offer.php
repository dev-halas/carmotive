<?php 
    get_header(); 

    $image = get_field('car_offer_image', 'option');
    $title = get_field('car_offer_title', 'option');
    $text= get_field('car_offer_text', 'option');
    $form = get_field('car_offer_form', 'option');
    $formImg = get_field('car_offer_form_img', 'option');
?>

    <div class="pageHeader">
        <div class="pageHeader--inner">
            <h1><?php echo $title; ?></h1>
            <div class="pageHeader--text">
                <?php echo $text; ?>
            </div>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>" class="pageHeader--bg">
        </div>
        
        <?php get_template_part('/libs/contactRight'); ?>
    </div>

    <div class="carOffer--contact container">
        <div class="carOffer--left">
            <div class="carOffer--line"></div>
            <div class="carOffer--form">
                <?php echo do_shortcode('[contact-form-7 id="'.$form->ID.'" title="'.$form->title.'"]') ?>
            </div>
        </div>
        <div class="carOffer--right">
            <img src="<?php echo $formImg['url']; ?>" alt="<?php echo $formImg['title']; ?>">
        </div>
    </div>

    <div class="carOffer container">

        <div class="carOfferTabs">
            <div class="carOfferHeader">
                <div class="carOffer--tabTitle --activeTitle">Wszystkie</div>
                <div class="carOffer--tabTitle">Nowe</div>
                <div class="carOffer--tabTitle">Uzywane</div>
            </div>

                <div class="carOffer--tab --activeTab">
                    <?php get_template_part('/libs/car_offer/allCar'); ?>
                </div>

                <div class="carOffer--tab">
                    <?php get_template_part('/libs/car_offer/newCar'); ?>
                </div>

                <div class="carOffer--tab">
                    <?php get_template_part('/libs/car_offer/usedCar'); ?>
                </div>
            
            </div>
        </div>

    </div>


<?php get_footer(); ?>