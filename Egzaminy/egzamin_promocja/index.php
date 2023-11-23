<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </div>
    <div id="lewy">
        <h2>Taniej o 30%</h2>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "sklep";
            
            $conn = mysqli_connect($servername, $username, $password, $db_name);
            if(!$conn){
                die("Error connecting database: " . mysqli_connect_error($conn));
            }
            
            $sql = "SELECT nazwa FROM towary where promocja=1;";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                echo "<ol>";
                while($row = mysqli_fetch_row($result)){
                    echo "<li>" . $row[0] . "</li>";
                }
                echo "</ol>";
            }else{
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        ?>
    </div>
    <div id="srodkowy">
        <h2>Sprawdź cenę</h2>
        <form action="index.php" method="post">
            <select name="produkt">
                <option name="gumka">Gumka do mazania</option>
                <option name="cienkopis">Cienkopis</option>
                <option name="pisaki">Pisaki 60 szt.</option>
                <option name="markery">Markery 4 szt.</option>
            </select>
            <input type="submit" value="SPRAWDŹ">
        </form>
        <div id="skrypt2">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $db_name = "sklep";
                
                $conn = mysqli_connect($servername, $username, $password, $db_name);
                if(!$conn){
                    die("Error connecting database: " . mysqli_connect_error($conn));
                }
                
                if(isset($_POST["produkt"])){
                    $produkt = $_POST["produkt"];
                    
                    $sql = "SELECT cena FROM towary WHERE nazwa='$produkt';";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_row($result);
                        echo "cena regularna: " . $row[0] . "<br>";
                        echo "cena w promocji 30%: " . $row[0] - ($row[0] * 0.3);
                    }
                }
                
                mysqli_close($conn);
            ?>
        </div>
    </div>
    <div id="prawy">
        <h2>Kontakt</h2>
        <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja.png" alt="promocja">
    </div>
    <div id="stopka">
        <h4>Autor strony: Marcin Rezler</h4>
    </div>
</body>
</html>