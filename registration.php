<?php
    include "../GreenGames/config.php";

    // присваиваю значение, а если его нет, то NULL
    $Email = $_POST["E-mail"];
    $Nickname = $_POST["Nickname"];
    $Password = $_POST["Password"];

    try {
        $conn = new PDO("mysql:host=localhost;  dbname=green_games", "root", "MerlinTec18");

        $sql = "INSERT INTO user (Email, Nickname, Password) 
                VALUES  ('$Email', 
                         '$Nickname', 
                         '$Password'
                        )";

        $result = $conn->query($sql);
        print "<h3>" . $lang["Регистрация успешна! Теперь вы можете войти на сайт"] . "<h3>";
        
        $conn = null; 
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
?>