<?php
    if(isset($_POST["vehicle1"])){
        echo "pierwszy checkbox: " . $_POST["vehicle1"] . "<br>";
    }
    if(isset($_POST["vehicle2"])){
        echo "drugi checkbox: " . $_POST["vehicle2"] . "<br>";
    }


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "5INbgr2";

    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";


    if(mysqli_select_db($conn, $dbname)){
        echo "Database $dbname selected";
    }else{
        echo "Error select database: " . mysqli_error($conn);
    }


    ////dodawanie kolumny
    // $sql = "ALTER TABLE MyGuests ADD pojazd varchar(30);";

    // if(mysqli_query($conn, $sql)){
    //     echo "Column created successfully";
    // }else{
    //     echo "Error creating column: " . mysqli_error($conn); 
    // }
    

?>