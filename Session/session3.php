<?php
    session_start();

    echo 'Welcome to page #3<br>';

    unset($_SESSION['animal']);

    echo 'Ulubione zwierzę: '. $_SESSION['animal'].'<br>';

    $_SESSION = array();

    session_destroy();
?>