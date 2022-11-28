<?php
    get_header(); 
        /**
        * Template Name: TEST PAGE
        */

    the_post();

?>


    <div class="container">
        <div class="carOfferTabs">
            <div class="carOfferHeader">
                <div class="carOffer--tabTitle">Wszystkie</div>
                <div class="carOffer--tabTitle">Nowe</div>
                <div class="carOffer--tabTitle">Uzywane</div>
            </div>
            <div class="carOffer--tab --activeTab">
                1
            </div>
            
            <div class="carOffer--tab">
                3
            </div>
        </div>
    </div>

<?php get_footer(); ?>