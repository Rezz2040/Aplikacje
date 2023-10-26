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


    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    if(isset($_POST["vehicle1"])){
        $vehicle1 = $_POST["vehicle1"];
    }else{
        $vehicle1 = NULL;
    }

    if(isset($_POST["vehicle2"])){
        $vehicle2 = $_POST["vehicle2"];
    }else{
        $vehicle2 = NULL;
    }


    // $sql = "INSERT INTO MyGuests(firstnamse, lastname, email, vehicle1, vehicle2) VALUES ('$firstname', '$lastname', '$email', 'vehicle1', 'vehicle2');";

    // if(mysqli_query($conn, $sql)) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    // }
    
    
    $sql = "UPDATE MyGuests SET vehicle1='$vehicle1', vehicle2='$vehicle2' WHERE firstname='$firstname' AND lastname='$lastname' AND email='$email';";

    if(mysqli_query($conn, $sql)) {
        echo "Updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);   
    }
?>