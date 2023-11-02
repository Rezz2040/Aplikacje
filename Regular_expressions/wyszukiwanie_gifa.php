<?php
    $wzorzec = '/\S*\.gif/i';
        // i = oznacza ignorowanie wielkości liter
    $tekst = "w pliku obrazek.gif jest ikona";
    if(preg_match($wzorzec, $tekst))
        echo "znaleziono obrazek";
    else
        echo "nie zneleziono obrazka";
?>