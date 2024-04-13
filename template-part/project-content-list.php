<a class="h2 w100 flex space-between list-item" href="<?php echo get_the_permalink(); ?>">
    <div class="samewidth flex flex-start detail-list-item detail-name">
        <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium');
            }
            the_title();
            ?>
    </div>
    <div class="samewidth flex flex-center detail-list-item detail-chains">
        <?php
            if(in_array('ETH', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/rsz_ethereum.webp" alt="Ethereum">';
            } 
            if(in_array('BNB', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/rsz_binance.webp" alt="BSC">';
            } 
            if(in_array('POLYGON', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/POLYGON.webp" alt="POLYGON">';
            } 
            if(in_array('ARB', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/ARB.webp" alt="ARB">';
            } 
            if(in_array('OP', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/OP.webp" alt="OP">';
            } 
            if(in_array('OPBNB', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/rsz_binance.webp" alt="OPBNB">';
            } 
            if(in_array('APT', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/" alt="APT">';
            } 
            if(in_array('FTM', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/rsz_fantom.webp" alt="FTM">';
            } 
            if(in_array('BLAST', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/" alt="BLAST">';
            } 
            if(in_array('BASE', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/BASE.webp" alt="BASE">';
            } 
            if(in_array('ZORA', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/" alt="ZORA">';
            } 
            if(in_array('XTER', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/" alt="XTER">';
            } 
            if(in_array('ZKSYNK', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/" alt="ZKSYNK">';
            } 
            if(in_array('BERA', get_field('chains_needed'))){
                echo '<img src="'.get_template_directory_uri().'/images/" alt="BERA">';
            }
        ?>
    </div>
    <div class="samewidth flex flex-end detail-list-item detail-cost">
        <p><span>~ $</span><?php the_field('cost_needed'); ?></p>
    </div>
</a>