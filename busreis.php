<?php
    $leeftijd = 10;
    if ($leeftijd > 65 || $leeftijd <= 12 && $leeftijd >= 3 ){
        echo "U moet 5 euro betalen.";
    }else if ($leeftijd < 3){
        echo "U mag gratis mee!";
    }else{
        echo "U moet 10 euro betalen.";
    }