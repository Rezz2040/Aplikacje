<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check conneciton
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $database = "5INbgr2";

    if(mysqli_select_db($conn, $database)){
        echo "Database $database selected";
    }else{
        echo "Error select database: " . mysqli_error($conn);
    }


    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $fav_language=$_POST["fav_language"];

    $sql = "INSERT INTO MyGuests (firstname, lastname, fav_language) VALUES ('$firstname', '$lastname', '$fav_language');";

    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>