<?php
    $wzorzec = '/((\bhttps?:\/\/)|(\bwww\.))\S*/';
    $tekst = "https://github.com/Rezz2040";
    if(preg_match($wzorzec, $tekst)) 
        echo "znaleziono adres www ";
    else
        echo "nie zneleziono adresu www";
?>