



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang["title"]?></title>

    <style>
        body {
            font-weight: 700;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            margin: 0;
        }

        .header {
            display: flex;
            justify-content: center;
            list-style: none;

            background-color: #08b1b2;
        }

        .list {
            font-size: 30px;
            margin-right: 20px;
        }

        .header:last-child{
            margin: 0;
        }

        .main {
            margin-left: 50px;
        }

        .main__text {
            font-size: 60px;
        }

        .main__subtext {
            font-size: 20px;
        }

        .footer {
            display: flex;
            justify-content: center;

            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 80px;
        }

        .footer .list {
            font-size: 20px;
        }


        .game__social__icon {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="header">
        <li class="list"><?php echo $lang["Home"]?></li>
        <li class="list"><?php echo $lang["Shop"]?></li>
        <li class="list"><?php echo $lang["Help"]?></li>
    </div>

    <div class="main">
        <p class="main__text"><?php echo $lang["My Amazing Language"]?></p>
        <p class="main__subtext"><?php echo $lang["Some text"]?></p>
        <p class="main__subtext"><?php echo $lang["Some text"]?></p>
        <p class="main__subtext"><?php echo $lang["Some text"]?></p>
    </div>

    <div class="image">
        <svg class="game__social__icon game__social__icon-languages" viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg" id="language">
            <path d="m350 46.668c-128.87 0-233.33 104.46-233.33 233.33s104.47 233.33 233.33 233.33c128.87 0 233.33-104.47 233.33-233.33 0-128.87-104.46-233.33-233.33-233.33zm0 443.33c-18.469 0-42.289-34.418-56.84-93.332h113.68c-14.551 58.914-38.371 93.332-56.84 93.332zm-61.844-116.67c-4.4531-24.148-7.3164-51.527-7.9219-81.668h139.53c-0.60547 30.141-3.4688 57.516-7.9219 81.668zm-147.57-81.664h116.31c0.57422 28.91 3.1758 56.461 7.582 81.664h-102.32c-12.402-24.852-19.953-52.449-21.57-81.664zm209.41-221.67c18.469 0 42.289 34.418 56.84 93.332h-113.68c14.551-58.914 38.371-93.332 56.84-93.332zm61.844 116.67c4.4531 24.148 7.3164 51.527 7.9219 81.668l-139.53-0.003907c0.60547-30.141 3.4688-57.516 7.9219-81.668zm-154.94 81.664h-116.31c1.6172-29.215 9.168-56.812 21.57-81.664h102.33c-4.4102 25.203-7.0117 52.754-7.5859 81.664zm186.2 23.336h116.31c-1.6172 29.215-9.1641 56.812-21.566 81.668h-102.33c4.4062-25.207 7.0078-52.758 7.582-81.668zm0-23.336c-0.57422-28.91-3.1758-56.461-7.582-81.664h102.33c12.402 24.855 19.949 52.453 21.566 81.668zm81.395-105h-93.746c-8.6094-37.156-21.129-67.949-36.242-88.484 53.922 11.691 100.2 44.082 129.99 88.484zm-219-88.484c-15.113 20.535-27.633 51.328-36.242 88.484h-93.746c29.789-44.402 76.066-76.793 129.99-88.484zm-129.99 321.82h93.746c8.6094 37.156 21.129 67.949 36.242 88.484-53.922-11.691-100.2-44.078-129.99-88.484zm219 88.484c15.113-20.539 27.633-51.328 36.242-88.484h93.746c-29.789 44.406-76.066 76.793-129.99 88.484z"/>
        </svg>
    </div>

    <div class="footer">
        <a class="list" href="index.php?lang=en"><?php echo $lang["lang_en"]?></a>
        <a class="list" href="index.php?lang=ru"><?php echo $lang["lang_ru"]?></a>
    </div>
</body>
</html>