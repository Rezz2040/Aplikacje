Welcome <?php echo $_GET["firstname"]; echo $_GET["lastname"]; ?>
Your email address is: <?php echo $_GET["email"]; ?>

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


    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];


    $sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email');";

    if(mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
?>