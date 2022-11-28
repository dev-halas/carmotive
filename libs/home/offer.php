<?php 
    $finance_image = get_field('finance_image');
    $finance_left = get_field('finance_left');
    $finance_right = get_field('finance_right');
    $finance_link = get_field('finance_link');

    $rent_image = get_field('rent_image');
    $rent_left = get_field('rent_left');
    $rent_right = get_field('rent_right');
    $rent_link = get_field('rent_link');

    $used_image = get_field('used_image');
    $used_left = get_field('used_left');
    $used_right = get_field('used_right');
    $used_link = get_field('used_link');

    $fleet_image = get_field('fleet_image');
    $fleet_left = get_field('fleet_left');
    $fleet_right = get_field('fleet_right');
    $fleet_link = get_field('fleet_link');

    $sell_image = get_field('sell_image');
    $sell_left = get_field('sell_left');
    $sell_right = get_field('sell_right');
    $sell_link = get_field('sell_link');
?>

<section class="homeOffer container">
    <div class="homeOffer--item animate fadeInLeft" id="finansowanie">
        <div class="homeOffer--imgLeft" style="
            background: url(<?php echo $finance_image['url']; ?>);
            background-size: cover; 
            background-repeat: no-repeat;
        "></div> 
        <div class="homeOffer--empty">
            <div class="homeOffer--lineLeft"></div>
        </div>
        <div class="homeOffer--inner">
            <div class="homeOffer--col">
                <?php echo $finance_left; ?>
            </div>
            <div class="homeOffer--col homeOffer--margin">
                <?php echo $finance_right; ?>
            </div>
            <div class="homeOffer--full">
                <a href="<?php echo $finance_link['url'];?>" class="buttonRed"><?php echo $finance_link['title'];?></a>
            </div>
        </div>
    </div>
    <div class="homeOffer--item animate fadeInRight" id="wynajem">
        <div class="homeOffer--imgRight" style="
            background: url(<?php echo $rent_image['url']; ?>);
            background-size: cover; 
            background-repeat: no-repeat;
        "></div> 
        <div class="homeOffer--empty"></div>
        <div class="homeOffer--inner">
            <div class="homeOffer--col">
                <?php echo $rent_left; ?>
            </div>
            <div class="homeOffer--col homeOffer--margin">
                <?php echo $rent_right; ?>     
            </div>
            <div class="homeOffer--full">
                <a href="<?php echo $rent_link['url'];?>" class="buttonRed"><?php echo $rent_link['title'];?></a>
            </div>
        </div>
    </div>
    <div class="homeOffer--item animate fadeInLeft" id="auta_uzywane">
        <div class="homeOffer--imgLeft" style="
            background: url(<?php echo $used_image['url']; ?>);
            background-size: cover; 
            background-repeat: no-repeat;
        "></div> 
        <div class="homeOffer--empty">
            <div class="homeOffer--lineRight"></div>
        </div>
        <div class="homeOffer--inner">
            <div class="homeOffer--col">
                <?php echo $used_left; ?>
                
            </div>
            <div class="homeOffer--col homeOffer--margin">
                <?php echo $used_right; ?>   
            </div>
            <div class="homeOffer--full">
                <a href="<?php echo $used_link['url'];?>" class="buttonRed"><?php echo $used_link['title'];?></a>
            </div>
        </div>
    </div>
    <div class="homeOffer--item animate fadeInRight" id="zarzadzanie_flota">
        <div class="homeOffer--imgRight" style="
            background: url(<?php echo $fleet_image['url']; ?>);
            background-size: cover; 
            background-repeat: no-repeat;
        "></div> 
        <div class="homeOffer--empty"></div>
        <div class="homeOffer--inner">
            <div class="homeOffer--col">
                <?php echo $fleet_left; ?>
            </div>
            <div class="homeOffer--col homeOffer--margin">
                <?php echo $fleet_right; ?>     
            </div>
            <div class="homeOffer--full">
                <a href="<?php echo $fleet_link['url'];?>" class="buttonRed"><?php echo $fleet_link['title'];?></a>
            </div>
        </div>
    </div>
    <div class="homeOffer--item animate fadeInLeft" id="sprzedaz">
        <div class="homeOffer--imgLeft" style="
            background: url(<?php echo $sell_image['url']; ?>);
            background-size: cover; 
            background-repeat: no-repeat;
        "></div> 
        <div class="homeOffer--empty">
            <div class="homeOffer--lineRight"></div>
        </div>
        <div class="homeOffer--inner">
            <div class="homeOffer--col">
                <?php echo $sell_left; ?>
            </div>
            <div class="homeOffer--col homeOffer--margin">
                <?php echo $sell_right; ?>  
            </div>
            <div class="homeOffer--full">
                <a href="<?php echo $sell_link['url'];?>" class="buttonRed"><?php echo $sell_link['title'];?></a>
            </div>
        </div>
    </div>
</section>

