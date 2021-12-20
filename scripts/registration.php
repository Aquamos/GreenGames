<?php
    session_start();
    include "../GreenGames/scripts/config.php";

    try {
        if ($_POST["E-mail"] == null || $_POST["E-mail"] == 'undefined' ||
            $_POST["Nickname"] == null || $_POST["Nickname"] == 'undefined' ||
            $_POST["Password"] == null ||  $_POST["Password"] == 'undefined') {
                
            throw new Exception('NullError');  
        }
        else if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST["E-mail"])) {
            throw new Exception('EmailError');
        }else {
            $Email = $_POST["E-mail"];
            $Nickname = $_POST["Nickname"];
            $Password = $_POST["Password"]; 

           $conn = new PDO("mysql:host=localhost;  dbname=green_games", "root", "MerlinTec18");

            $sql = "INSERT INTO user (Email, Nickname, Password) 
                    VALUES  ('$Email', 
                            '$Nickname', 
                            '$Password'
                            )";

            $result = $conn->query($sql);
            print "<div class=\"outputText\">" . $lang["Регистрация успешна! Теперь вы можете войти на сайт"] . "</div>";
            
            $conn = null; 
        }    

        
    }
    catch (PDOException $e) {

        if ($e->getCode() == 23000){
            echo 'DuplicateError';
        }
        else {
            print "Database error: " . $e->getMessage() . "<br>";
            echo "Exception code: " . $e->getCode();
        }
    }
    catch (Exception $e) {
        if ($e->getMessage() == 'NullError') {
            echo 'NullError';
        }
        else if ($e->getMessage() == 'EmailError') {
            echo 'EmailError';
        }
    }
?>