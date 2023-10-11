<?php
    $wzorzec = '/[-\w\.]+@([-A-z0-9]+\.)+[A-z]/';
    $tekst = "mój adres to marcin.rezler99@gmail.com";
    if(preg_match($wzorzec, $tekst))
        echo "znaleziono adres mailowy";
    else
        echo "nie zneleziono adresu mailowego";
?>