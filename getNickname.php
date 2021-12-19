<?php
    try {
        session_start();
        $email = $_SESSION['userEmail'];
        $conn = new PDO("mysql:host=localhost;  dbname=green_games", "root", "MerlinTec18");

        $sql = "SELECT user.Nickname
                FROM user
                WHERE user.Email = '$email'
                ";

        $result = $conn->query($sql);
        $nickname = $result->fetch();
        $_SESSION['nickname'] = $nickname[0];
        echo $nickname[0];
       
        
        $conn = null; 
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
?>