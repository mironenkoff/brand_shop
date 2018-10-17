<section class="imageSlide clearfix">
    <img class="imageSlide__img" src="<?php echo $imgPath ?>" alt="<?php echo $productName ?>">
    
    <a class="imageSlide__Arrow imageSlide__Arrow_left clearfix" href="?action=goToProduct&id=<?php echo prevID( $db, $id ) ?>">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </a>
    
    <a class="imageSlide__Arrow imageSlide__Arrow_right clearfix" href="?action=goToProduct&id=<?php echo nextID( $db, $id ) ?>">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </a>
    
</section>