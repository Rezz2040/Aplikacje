Welcome <?php echo $_POST["firstname"]; echo $_POST["lastname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

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


    $sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]');";

    if(mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
?>