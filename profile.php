<?php
    session_start();
    $_SESSION['user'] = 'None';
    include "config.php";
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../GreenGames/assets/css/style.css">
    
    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    
    <title><?php echo $lang["Мой аккаунт"]?></title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__left">
                <a href="index.php">
                    <img src="assets/images/monitor_gr.png" alt="" class="header__logo">
                </a>
                <ul class="header__list">
                    <li class="header__list-item">
                        <a class="header__list-link" href="index.php"><?php echo $lang["Магазин"]?></a>
                    </li>
                    <li class="header__list-item">
                        <a class="header__list-link" href="#"><?php echo $lang["Новости"]?></a>
                    </li>
                    <li class="header__list-item">
                        <a class="header__list-link" href="#"><?php echo $lang["Часто задаваемые вопросы"]?></a>
                    </li>
                </ul>
            </div>
            <div class="header__right">

                <li class="languages">
                    <a class="game__social__item languages-icon" href="#">
                        <svg class="game__social__icon game__social__icon-languages">
                            <use xlink:href="#languages"></use>
                        </svg>
                    </a>

                    <ul class="languages_subnav">
                        <li>
                            <a class="languages__link" href="gallery.php?lang=ru"><?php echo $lang["lang_ru"]?></a>
                        </li>
                        <li>
                            <a class="languages__link" href="gallery.php?lang=ua"><?php echo $lang["lang_ua"]?></a>
                        </li>
                        <li>
                            <a class="languages__link" href="gallery.php?lang=en"><?php echo $lang["lang_en"]?></a>
                        </li>
                    </ul>
                </li>
                
                <div class="header__enterBlock">
                    <a href="<?php if(!isset($_SESSION['nickname'])) { echo "signin.php"; } else { echo "profile.php"; } ?>" class="header__enter" id="header__enter"> 
                        <img src="assets/images/vr_helmet_gr.png" class="header__enterImage__image" alt="">
                        <div class="header__enterText"><?php if(!isset($_SESSION['nickname'])) { echo $lang["Выполнить вход"]; } else { echo $_SESSION['nickname']; } ?></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="mainHeader">
            <div class="mainHeader__inner">
                <div class="mainHeader__links">
                    <a class="mainHeader__link" href="index.php"><?php echo $lang["Главная"]?></a>
                    <a class="mainHeader__link" href="gallery.php"><?php echo $lang["Все игры"]?></a>
                </div>
                <form class="search" action="gallery.php" method="get">
                    <svg class="search__icon">
                        <use xlink:href="#search"></use>
                    </svg>
                    <input class="search__input" type="text" placeholder="<?php echo $lang["Поиск"]?>">
                </form>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">

            <form action="/" class="form" method="post">
                <div class="cabinet">
                    <div class="cabinet__form">
                        <div class="form__group form__group--md">
                            <input type="text" class="form__control" placeholder="Ваше имя" value="Дмитрий Валак">
                            <span class="form__line"></span>
                        </div>
                        
                        <div class="form__group form__group--md">
                            <input type="email" class="form__control" placeholder="Ваш e-mail" value="alex.provo@mail.com">
                            <span class="form__line"></span>
                        </div>

                        <div class="form__group form__group--md">
                            <input type="password" class="form__control" placeholder="Новый пароль">
                            <span class="form__line"></span>
                        </div>

                        <div class="form__group form__group--md">
                            <input type="password" class="form__control" placeholder="Подтвердите пароль">
                            <span class="form__line"></span>
                        </div>
                    </div>

                    <div class="cabinet__avatar">
                        <img src="assets/images/150.png" alt="">
                        <label class="cabinet__file">
                            <input type="file">
                            выбрать аватар
                        </label>
                    </div>
                </div>
                

                <div class="form__footer">
                    <button class="btn btn--blue btn--rounded btn--sm" type="submit">Сохранить</button>
                </div>
            </form>
            
        </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="assets/js/authentication.js"></script>
    <script src="assets/js/game-gallery.js"></script>
    <script src="assets/js/game-scroll.js"></script>
    <script src="assets/js/search.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/specifications.js"></script>
    <script src="assets/js/signup.js"></script>

</body>
</html>
