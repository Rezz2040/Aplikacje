<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="baner">
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </div>
    <div id="lewy">
        <h3>Polecamy dzieła autorów:</h3>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "biblioteka";

            $conn = mysqli_connect($servername, $username, $password, $db_name);
            if(!$conn){
                die("Error connecting to database: " . mysqli_connect_error());
            }
            
            $sql = "SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko;";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                echo "<ol>";
                while($row = mysqli_fetch_row($result)){
                    echo "<li>" . $row[0] . " " . $row[1] . "</li>";
                }
                echo "</ol>";
            }else{
                echo "Error: ". mysqli_error($conn);
            }

            mysqli_close($conn);
        ?>
    </div>
    <div id="srodkowy">
        <h3>ul. Czytelnicza 25, &nbsp; Książkowice Wielkie</h3>
        <p><a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a></p>
        <img src="biblioteka.png" alt="książki">
    </div>
    <div id="prawy1">
        <h3>Dodaj czytelnika</h3>
        <form action="biblioteka.php" method="post">
            Imie <input type="text" name="imie"><br>
            Nazwisko <input type="text" name="nazwisko"><br>
            Symbol <input type="number" name="symbol"><br>
            <input type="submit" value="DODAJ">
        </form>
    </div>
    <div id="prawy2">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "biblioteka";

            $conn = mysqli_connect($servername, $username, $password, $db_name);
            if(!$conn){
                die("Error connecting to database: " . mysqli_connect_error());
            }
            
            if(isset($_POST["imie"]) && isset($_POST["nazwisko"]) && isset($_POST["symbol"])){

                $imie = $_POST["imie"];
                $nazwisko = $_POST["nazwisko"];
                $symbol = $_POST["symbol"];
                
                $sql = "INSERT INTO czytelnicy(imie, nazwisko, kod) VALUES ('$imie', '$nazwisko' ,'$symbol');";
                
                if(mysqli_query($conn, $sql)){
                    echo "Czytelnik " . $imie . " " . $nazwisko . " został(a) dodany do bazy danych";
                }else{
                    echo "Error: " . mysqli_error($conn);
                }
            }

            mysqli_close($conn);
        ?>
    </div>
    <div id="stopka">
        <p>Projekt strony: Marcin Rezler</p>
    </div>
</body>
</html>