<?php
    $wzorzec = '/\d{2}-\d{3}/';
    $tekst = "poczta 24-200 Sucha Beskidzka";
    if(preg_match($wzorzec, $tekst, $matches))
    //$matches - trzeci parametr wypisujący co zostało znalezione 
        echo "znaleziono kod pocztowy " . $matches[0];
    else
        echo "nie zneleziono kodu pocztowego";
?>