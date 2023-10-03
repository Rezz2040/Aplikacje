<?php
    $czas = mktime(11,14,54,8,12,2014);
    echo "Created date is: " . date("d.m.Y h:i:sa", $czas);
    $now = time();
    $week = 7*24*60*60;
    echo "<br> teraz: ". date("d.m.Y h:i:sa", $now +$week);
?>