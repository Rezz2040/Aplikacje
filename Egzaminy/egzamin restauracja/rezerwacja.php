<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "baza_5INb2";

    $conn = mysqli_connect($servername, $username, $password, $db_name);
    if(!$conn){
        echo "Error: " . mysqli_connect_error();
    }


    $data = $_POST["data"];
    $ile_osob = $_POST["ile_osob"];
    $telefon = $_POST["telefon"];


    $sql = "INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES ('$data', '$ile_osob', '$telefon');";
    if(mysqli_query($conn, $sql)){
        echo "Dodano rezerwację do bazy";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>