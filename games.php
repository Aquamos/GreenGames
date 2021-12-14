<?php
    try {
        $conn = new PDO("mysql:host=localhost;  dbname=green_games", "root", "MerlinTec18");

        $sql = "SELECT game.Id, game.Name, game.Image, developer.DeveloperName
                FROM game
                JOIN gamehasdeveloper ON game.Id = gamehasdeveloper.GameId
                JOIN developer ON developer.Id = gamehasdeveloper.DeveloperId
                ORDER BY game.Id";

        $result = $conn->query($sql);

        $sql = "SELECT gamehastag.GameId, gamehastag.TagId, tag.Name as tagName
                FROM game
                JOIN gamehastag ON game.Id = gamehastag.GameId
                JOIN tag ON gamehastag.TagId = tag.Id
                WHERE tag.Status != 'unvisible'
                ORDER BY gamehastag.GameId ";

        $tags_result = $conn->query($sql);


        /*Создание массивов для хранения данных*/ 
        $data = array();
        $tags_data = array();
        $temp = array("Name" => "SomeName");


        /*Заполнение массивов данными*/
        while($row = $result->fetch()){
            array_push($data,$row);   
        }
        while($row = $tags_result->fetch()){
            array_push($tags_data,$row);   
        }


        /*Обработка данных*/
        foreach (array_values($data) as $i => $value) {

            if ($value["Name"] == $temp["Name"]){

                $data[$i]["DeveloperName"] .= ", ";
                $data[$i]["DeveloperName"] .= $temp["DeveloperName"];
                
                unset($data[$i-1]);
            } 
            $temp = $value;
        }


        $temp = null;
        $temp = array("GameId" => $tags_data[0]["GameId"]);
        $gametags = array();

        $i=0;
        while ($i < count($tags_data)-1) {
            $temptags = array();
            while (($tags_data[$i]["GameId"] == $temp["GameId"]) && $i != count($tags_data)-1) {
                array_push($temptags, $tags_data[$i]["tagName"]);     
                $i+=1;
            }
            if($i == count($tags_data)-1)
            {
                array_push($temptags, $tags_data[$i]["tagName"]);   
            }

            $temp = $tags_data[$i];
            array_push($gametags, $temptags); 
            $temptags = null;
        } 

        $gameTagArrayId = 0;
        $gameTagId = 0;

        foreach ($data as $row) 
        {
            echo '<a href="#" class="gameList__item">';
            echo    '<div class="gameList__img">';
            echo        "<img src=\"".$row["Image"]."\">";
            echo    '</div>';
            echo    '<div class="gameList__item-title">'. $row["Name"] .'</div>';
            echo    '<div class="gameList__item-developer">'. $row["DeveloperName"] .'</div>';
            echo    '<div class="gameList__tags">';
            while ($gameTagId < count($gametags[$gameTagArrayId])) {
                echo '<p class="gameList__tag">' . $gametags[$gameTagArrayId][$gameTagId] . '</p>';
                $gameTagId += 1;
            }
            echo    '</div>';
            echo '</a>';
            $gameTagId = 0;
            $gameTagArrayId +=1;
        }
        
        $conn = null; 
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
?>