<?php
    $wzorzec = '/((\bul\.)|(\bos\.))\S*/';
    $tekst = "adres: ul.Ostatnia 3";
    if(preg_match($wzorzec, $tekst, $matches))
        echo "znaleziono adres " . $matches[0];
    else
        echo "nie znaleziono adresu";
?>