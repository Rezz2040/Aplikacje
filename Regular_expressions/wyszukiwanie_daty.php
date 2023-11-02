<?php
    $wzorzec = '/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
    $tekst = "dzisiaj jest 10.10.2023";
    if(preg_match($wzorzec, $tekst))
        echo "znaleziono datę";
    else
        echo "nie zneleziono daty";
?>