<?php
    $subCategoryWomen = [ "Dresses", "Tops", "Sweaters/Knits", "Jackets/Coats",
        "Blazers", "Denim", "Leggings/Pants", "Skirts/Shorts", "Accessories" ];
    
    $subCategoryMan = [ "Tees/Tank tops", "Shirts/Polos", "Sweaters",
        "Sweatshirts/Hoodies", "Blazers", "Jackets/vests" ];
    
    $categoryItems = [ "WOMEN" => $subCategoryWomen, "MAN" => $subCategoryMan ];
    
    echo '<ul class="dropDown">';
        foreach ($categoryItems as $key => $value) {
            echo ( '<li class="dropDown__category">' . $key );
                echo '<ul class="dropDown__subCategory">';
                foreach ($value as $internalValue) {
                    echo '<li>';
                        echo ('<a class="dropDown__subCategoryRef" href="#">'
                                . $internalValue . '</a>' );
                    echo '</li>';
                }
                echo '</ul>';
            echo '</li>';
        }
    echo '</ul>';
?>
