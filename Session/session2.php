<?php
    session_start();

    echo 'Welcome to page #2<br>';

    echo 'Ulubiony kolor: '. $_SESSION['favcolor'];
    echo 'Ulubione zwierzę: '. $_SESSION['animal'].'<br>';
    echo date('Y m d H:i:s'. $_SESSION['time']).'<br>';

    echo '<br><a href="session3.php">Page 3</a>';
?>