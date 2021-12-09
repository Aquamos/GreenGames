<?php

    if(!isset($_COOKIE['lang'])) //если не установлен язык, по-умолчанию русский
        setcookie('lang', 'ru', time() + (60 * 60 * 24 * 182), '/');

    /*Если мы получили значение языка,
    И оно отличается от того, что у нас поставлено сейчас
    И оно не пустое, то ставим новый язык.*/    
    else if (isset($_GET['lang']) && 
            $_COOKIE['lang'] != $_GET['lang'] && 
            !empty($_GET['lang'])) {

        if ($_GET['lang'] == "en")
        {
            setcookie('lang', '', time() - 10, '/');
            setcookie('lang', 'en', time() + (60 * 60 * 24 * 182), '/');
        }
        else if ($_GET['lang'] == "ru")
        {
            setcookie('lang', '', time() - 10, '/');
            setcookie('lang', 'ru', time() + (60 * 60 * 24 * 182), '/');
        }
        else if ($_GET['lang'] == "ua")
        {
            setcookie('lang', '', time() - 10, '/');
            setcookie('lang', 'ua', time() + (60 * 60 * 24 * 182), '/');
        }

    }
    require_once "lang/" . $_COOKIE['lang'] . ".php";
    
?>