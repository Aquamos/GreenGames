<?php

    session_start();

    if(!isset($_SESSION['lang'])) //если не установлен язык, по-умолчанию английский
        $_SESSION['lang'] = "ru";

    /*Если мы получили значение языка,
    И оно отличается от того, что у нас поставлено сейчас
    И оно не пустое, то ставим новый язык.*/    
    else if (isset($_GET['lang']) && 
            $_SESSION['lang'] != $_GET['lang'] && 
            !empty($_GET['lang'])) {

        if ($_GET['lang'] == "en")
            $_SESSION['lang'] = "en";
        else if ($_GET['lang'] == "ru")
            $_SESSION['lang'] = "ru";
        else if ($_GET['lang'] == "ua")
            $_SESSION['lang'] = "ua";

    }
    require_once "lang/" . $_SESSION['lang'] . ".php";
?>