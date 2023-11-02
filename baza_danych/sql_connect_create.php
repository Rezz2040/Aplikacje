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
    // //Create database
    // $sql = "CREATE DATABASE $database";
    // if(mysqli_query($conn, $sql)) {
    //     echo "Database created successfully";
    // } else {
    //     echo "Error creating database: " . mysqli_error($conn);
    // }

    if(mysqli_select_db($conn, $database)){
        echo "Database $database selected";
    }else{
        echo "Error select database: " . mysqli_error($conn);
    }

    ////create table
    // $sql = "CREATE TABLE MyGuests (
    //                             id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //                             firstname VARCHAR(30) NOT NULL,
    //                             lastname VARCHAR(30) NOT NULL,
    //                             email VARCHAR(50),
    //                             reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    // if(mysqli_query($conn, $sql)) {
    //     echo "Table MyGuests created successfully";
    // } else {
    //     echo "Error creating table: " . mysqli_error($conn);
    // }
    
    ////dodawanie rekordow
    // $sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Jan', 'Wieprz', 'johnpork@niga.com');";
    // $sql .= "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Kamil', 'Slimak', 'kamil.slimak@tosamo.com');";
    // $sql .= "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('Nigga', 'Niggerson', 'nigganiggerson@niga.com');";

    // if(mysqli_multi_query($conn, $sql)) {
    //     echo "New recorrd created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }

    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0) {
    //     //output data of each row        
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["id"]. " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    //     }

    // } else {
    //     echo "0 results";
    // }


    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0) {
    //     echo "<table>";
    //     while($row = mysqli_fetch_row($result)){
    //         echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
    //     }
    //     echo "</table>";
    // }else{
    //     echo "0 results";
    // }


    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($conn, $sql);

    // if(mysqli_num_rows($result) > 0) {
    //     echo "<ul>";
    //     while($row = mysqli_fetch_row($result)){
    //         echo "<li>" . $row[0] . " " . $row[1] . " " . $row[2] . "</li>";
    //     }
    //     echo "</ul>";
    // }else{
    //     echo "0 results";
    // }


    $sql = "DELETE FROM MyGuests WHERE id=3";

    if(mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>