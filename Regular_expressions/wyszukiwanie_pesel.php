<?php
    $wzorzec = '/\d{11}/';
    $tekst = "pesel to: 05230101439";
    if(preg_match($wzorzec, $tekst)) 
        echo "znaleziono pesel";
    else
        echo "nie zneleziono pesla";
?>