<?php
    include "../GreenGames/config.php";
    try {
        if ($_POST["E-mail"] == 'undefined' || $_POST["Password"] == 'undefined' || $_POST["E-mail"] == null || $_POST["E-mail"] == null) {
            throw new Exception('NullError');  
        }
        else if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST["E-mail"])) {
            throw new Exception('EmailError');
        }else {
            $Email = $_POST["E-mail"];
            $Password = $_POST["Password"]; 

           $conn = new PDO("mysql:host=localhost;  dbname=green_games", "root", "MerlinTec18");

            $sql = "SELECT true
                    FROM user
                    WHERE $Email = user.Email AND $Password = user.Password
                    LIMIT 1
                    ";

            $result = $conn->query($sql);

            $enter = $result->fetch();
            if ($enter == 1){
                echo 'Success';
            }
            else {
                echo 'Fail';
            }
            $conn = null; 
        }    

        
    }
    catch (PDOException $e) {
        print "Database error: " . $e->getMessage() . "<br>";
        echo "Exception code: " . $e->getCode();
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