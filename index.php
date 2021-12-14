<?php
    include "../GreenGames/config.php";
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
    
    <title><?php echo $lang["Главная"]?></title>
</head>
<body>
    <svg style="display: none;">
        <symbol id="search" viewBox="0 0 56.966 56.966">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"/>
        </symbol>
        <symbol id="facebook" viewBox="0 0 24 24">
            <path d="M20.786 0H1.214C.544 0 0 .543 0 1.214v19.572C0 21.456.543 22 1.214 22h10.545v-8.508H8.895v-3.33h2.864v-2.45c0-2.842 1.737-4.39 4.27-4.39.855-.001 1.708.042 2.557.13v2.97h-1.745c-1.38 0-1.65.652-1.65 1.616v2.12h3.3l-.428 3.33h-2.89V22h5.613c.67 0 1.214-.543 1.214-1.214V1.214C22 .544 21.457 0 20.786 0z"></path>
        </symbol>
        <symbol id="instagram" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
        </symbol>
        <symbol id="twitch" viewBox="0 0 24 24">
            <path d="M2.149 0l-1.612 4.119v16.836h5.731v3.045h3.224l3.045-3.045h4.657l6.269-6.269v-14.686h-21.314zm19.164 13.612l-3.582 3.582h-5.731l-3.045 3.045v-3.045h-4.836v-15.045h17.194v11.463zm-3.582-7.343v6.262h-2.149v-6.262h2.149zm-5.731 0v6.262h-2.149v-6.262h2.149z" fill-rule="evenodd" clip-rule="evenodd"/>
        </symbol>
        <symbol id="twitter" viewBox="0 0 24 24">
            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
        </symbol>
        <symbol id="vk" viewBox="0 0 24 24">
            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.25 16.996h-2.134c-1.205 0-1.409-.687-2.401-1.679-.897-.897-1.395-.209-1.374 1.068.006.339-.161.611-.566.611-1.264 0-3.08.178-4.918-1.806-1.883-2.033-3.857-6.111-3.857-6.513 0-.237.196-.344.524-.344h2.17c.574 0 .623.284.783.649.667 1.521 2.265 4.574 2.69 2.87.244-.978.344-3.245-.703-3.44-.594-.11.452-.746 1.968-.746.377 0 .786.041 1.205.137.769.179.771.523.761 1.026-.039 1.903-.269 3.184.233 3.507.479.31 1.739-1.717 2.403-3.281.183-.433.219-.722.734-.722h2.654c1.39 0-.182 1.997-1.383 3.557-.968 1.255-.916 1.28.209 2.324.803.744 1.75 1.76 1.75 2.336.002.272-.21.446-.748.446z"/>
        </symbol>
        <symbol id="youtube" viewBox="0 0 24 24">
            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
        </symbol>
        <symbol id="windows__icon" viewBox="0 0 24 24">
            <path d="M0 12v-8.646l10-1.355v10.001h-10zm11 0h13v-12l-13 1.807v10.193zm-1 1h-10v7.646l10 1.355v-9.001zm1 0v9.194l13 1.806v-11h-13z"/>
        </symbol>
        <symbol id="mac__icon" viewBox="0 0 105 43">
            <g><path d="M40.152 39.6706H34.5029V10.4623H34.3002L22.3433 39.3667H17.7834L5.80114 10.4623H5.59848V39.6706H0V0H7.11843L19.962 31.3109H20.19L32.9829 0H40.1267V39.6706H40.152Z"></path><path d="M46.2617 31.4377C46.2617 26.3459 50.1376 23.4327 57.2814 23.002L64.9571 22.5207V20.3421C64.9571 17.1249 62.8292 15.377 59.08 15.377C55.9641 15.377 53.7095 16.9729 53.2535 19.4048H47.6803C47.8577 14.2623 52.6962 10.5385 59.232 10.5385C66.2744 10.5385 70.8596 14.2117 70.8596 19.9368V39.6708H65.1598V34.9083H65.0078C63.3865 38.0242 59.8146 39.9748 55.9387 39.9748C50.2643 39.9748 46.2617 36.5549 46.2617 31.4377ZM64.9571 28.9045V26.6752L58.1173 27.1312C54.2668 27.3845 52.2655 28.8032 52.2655 31.3111C52.2655 33.743 54.3681 35.3136 57.636 35.3136C61.7905 35.2629 64.9571 32.603 64.9571 28.9045Z"></path><path d="M96.5139 20.798C95.9819 17.7328 93.626 15.4528 89.7501 15.4528C85.2156 15.4528 82.201 19.278 82.201 25.2312C82.201 31.387 85.2409 35.0602 89.8008 35.0602C93.4486 35.0602 95.8806 33.2362 96.5645 29.8923H102.264C101.631 35.9975 96.7672 40 89.7754 40C81.5424 40 76.1719 34.4015 76.1719 25.2312C76.1719 16.2888 81.5677 10.4877 89.7248 10.4877C97.1218 10.4877 101.707 15.1235 102.214 20.7727H96.5139V20.798Z"></path></g>
        </symbol>
        <symbol id="steam" viewBox="0 0 13.082 13.082">
            <path d="M4.303,10.075L3.016,9.578c0.172,0.691,0.796,1.203,1.541,1.203c0.877,0,1.589-0.711,1.589-1.589
                c0-0.876-0.712-1.588-1.589-1.588c-0.316,0-0.61,0.093-0.857,0.252l1.271,0.49c0.477,0.185,0.715,0.721,0.531,1.198
                C5.317,10.022,4.781,10.261,4.303,10.075z"/>
            <path d="M9.206,6.364c1.086,0,1.969-0.883,1.969-1.969s-0.883-1.969-1.969-1.969
                c-1.085,0-1.969,0.883-1.969,1.969C7.237,5.48,8.121,6.364,9.206,6.364z M9.206,3.008c0.766,0,1.388,0.622,1.388,1.387
                S9.972,5.782,9.206,5.782c-0.765,0-1.387-0.622-1.387-1.387S8.441,3.008,9.206,3.008z"/>
            <path d="M11.367,0.001H1.715C0.767,0.001,0,0.769,0,1.716v4.709l2.495,0.964
                C2.978,6.83,3.686,6.472,4.48,6.459l1.499-2c0-1.773,1.438-3.21,3.21-3.21c1.773,0,3.21,1.437,3.21,3.21 c0,0.973-0.434,1.845-1.118,2.434l0,0l0,0c-0.563,0.483-1.293,0.776-2.092,0.776c-0.084,0-0.167-0.004-0.249-0.011L7.198,8.971
                c0.004,0.055,0.006,0.111,0.006,0.167c0,1.48-1.2,2.682-2.68,2.682s-2.68-1.201-2.68-2.682c0-0.004,0-0.01,0-0.015L0,8.411v2.955 c0,0.947,0.768,1.715,1.715,1.715h9.652c0.947,0,1.715-0.768,1.715-1.715V1.717C13.082,0.77,12.314,0.001,11.367,0.001z"/>
        </symbol>
        <symbol id="discord" viewBox="0 -28.5 256 256">
            <path d="M216.856339,16.5966031 C200.285002,8.84328665 182.566144,3.2084988 164.041564,0 C161.766523,4.11318106 159.108624,9.64549908 157.276099,14.0464379 C137.583995,11.0849896 118.072967,11.0849896 98.7430163,14.0464379 C96.9108417,9.64549908 94.1925838,4.11318106 91.8971895,0 C73.3526068,3.2084988 55.6133949,8.86399117 39.0420583,16.6376612 C5.61752293,67.146514 -3.4433191,116.400813 1.08711069,164.955721 C23.2560196,181.510915 44.7403634,191.567697 65.8621325,198.148576 C71.0772151,190.971126 75.7283628,183.341335 79.7352139,175.300261 C72.104019,172.400575 64.7949724,168.822202 57.8887866,164.667963 C59.7209612,163.310589 61.5131304,161.891452 63.2445898,160.431257 C105.36741,180.133187 151.134928,180.133187 192.754523,160.431257 C194.506336,161.891452 196.298154,163.310589 198.110326,164.667963 C191.183787,168.842556 183.854737,172.420929 176.223542,175.320965 C180.230393,183.341335 184.861538,190.991831 190.096624,198.16893 C211.238746,191.588051 232.743023,181.531619 254.911949,164.955721 C260.227747,108.668201 245.831087,59.8662432 216.856339,16.5966031 Z M85.4738752,135.09489 C72.8290281,135.09489 62.4592217,123.290155 62.4592217,108.914901 C62.4592217,94.5396472 72.607595,82.7145587 85.4738752,82.7145587 C98.3405064,82.7145587 108.709962,94.5189427 108.488529,108.914901 C108.508531,123.290155 98.3405064,135.09489 85.4738752,135.09489 Z M170.525237,135.09489 C157.88039,135.09489 147.510584,123.290155 147.510584,108.914901 C147.510584,94.5396472 157.658606,82.7145587 170.525237,82.7145587 C183.391518,82.7145587 193.761324,94.5189427 193.539891,108.914901 C193.539891,123.290155 183.391518,135.09489 170.525237,135.09489 Z" fill="#5865F2" fill-rule="nonzero"></path>
        </symbol>
        <symbol id="reddit" viewBox="0 0 24 24">
            <path d="M15.57,15.284 C14.673,15.284 13.91925,14.5565 13.91925,13.6595 C13.91925,12.7625 14.673,12.011 15.57,12.011 C16.467,12.011 17.1945,12.7625 17.1945,13.6595 C17.1945,14.5565 16.467,15.284 15.57,15.284 M15.951,18.437 C15.1155,19.27175 13.827,19.6775 12.012,19.6775 C12.00825,19.6775 12.00375,19.67675 11.99925,19.67675 C11.9955,19.67675 11.991,19.6775 11.9865,19.6775 C10.1715,19.6775 8.88375,19.27175 8.049,18.437 C7.7925,18.1805 7.7925,17.76575 8.049,17.51 C8.30475,17.25425 8.7195,17.25425 8.976,17.51 C9.552,18.086 10.53675,18.3665 11.9865,18.3665 C11.991,18.3665 11.9955,18.36725 11.99925,18.36725 C12.00375,18.36725 12.00825,18.3665 12.012,18.3665 C13.46175,18.3665 14.44725,18.086 15.024,17.51 C15.2805,17.2535 15.69525,17.25425 15.951,17.51 C16.20675,17.7665 16.20675,18.18125 15.951,18.437 M6.8055,13.6595 C6.8055,12.76325 7.55775,12.011 8.454,12.011 C9.351,12.011 10.0785,12.76325 10.0785,13.6595 C10.0785,14.5565 9.351,15.284 8.454,15.284 C7.55775,15.284 6.8055,14.5565 6.8055,13.6595 M19.998,3.311 C20.6055,3.311 21.09975,3.80525 21.09975,4.412 C21.09975,5.0195 20.6055,5.51375 19.998,5.51375 C19.3905,5.51375 18.89625,5.0195 18.89625,4.412 C18.89625,3.80525 19.3905,3.311 19.998,3.311 M24,11.87525 C24,10.2845 22.70625,8.99075 21.1155,8.99075 C20.427,8.99075 19.79475,9.23375 19.29825,9.638 C17.5395,8.5325 15.3075,7.8665 12.915,7.7255 L14.163,3.77975 L17.59275,4.5875 C17.68275,5.83625 18.72675,6.82475 19.998,6.82475 C21.32775,6.82475 22.41,5.7425 22.41,4.412 C22.41,3.08225 21.32775,2 19.998,2 C19.068,2 18.2595,2.5295 17.85675,3.30275 L13.87125,2.3645 C13.5375,2.28575 13.2,2.47775 13.0965,2.80475 L11.547,7.70225 C8.96925,7.76525 6.546,8.4335 4.65825,9.6035 C4.1685,9.22025 3.55275,8.99075 2.8845,8.99075 C1.29375,8.99075 0,10.2845 0,11.87525 C0,12.8585 0.495,13.72775 1.24875,14.24825 C1.21725,14.477 1.20075,14.70725 1.20075,14.9405 C1.20075,16.92875 2.3565,18.77825 4.455,20.14775 C6.4665,21.461 9.129,22.184 11.95125,22.184 C14.7735,22.184 17.436,21.461 19.4475,20.14775 C21.546,18.77825 22.70175,16.92875 22.70175,14.9405 C22.70175,14.72825 22.6875,14.5175 22.66125,14.30825 C23.46525,13.796 24,12.89675 24,11.87525"/>
        </symbol>
        <symbol id="earth" viewBox="0 0 512 512">
            <path d="M414.39,97.74A224,224,0,1,0,97.61,414.52,224,224,0,1,0,414.39,97.74ZM64,256.13a191.63,191.63,0,0,1,6.7-50.31c7.34,15.8,18,29.45,25.25,45.66,9.37,20.84,34.53,15.06,45.64,33.32,9.86,16.21-.67,36.71,6.71,53.67,5.36,12.31,18,15,26.72,24,8.91,9.08,8.72,21.52,10.08,33.36a305.36,305.36,0,0,0,7.45,41.27c0,.1,0,.21.08.31C117.8,411.13,64,339.8,64,256.13Zm192,192a193.12,193.12,0,0,1-32-2.68c.11-2.71.16-5.24.43-7,2.43-15.9,10.39-31.45,21.13-43.35,10.61-11.74,25.15-19.68,34.11-33,8.78-13,11.41-30.5,7.79-45.69-5.33-22.44-35.82-29.93-52.26-42.1-9.45-7-17.86-17.82-30.27-18.7-5.72-.4-10.51.83-16.18-.63-5.2-1.35-9.28-4.15-14.82-3.42-10.35,1.36-16.88,12.42-28,10.92-10.55-1.41-21.42-13.76-23.82-23.81-3.08-12.92,7.14-17.11,18.09-18.26,4.57-.48,9.7-1,14.09.68,5.78,2.14,8.51,7.8,13.7,10.66,9.73,5.34,11.7-3.19,10.21-11.83-2.23-12.94-4.83-18.21,6.71-27.12,8-6.14,14.84-10.58,13.56-21.61-.76-6.48-4.31-9.41-1-15.86,2.51-4.91,9.4-9.34,13.89-12.27,11.59-7.56,49.65-7,34.1-28.16-4.57-6.21-13-17.31-21-18.83-10-1.89-14.44,9.27-21.41,14.19-7.2,5.09-21.22,10.87-28.43,3-9.7-10.59,6.43-14.06,10-21.46,1.65-3.45,0-8.24-2.78-12.75q5.41-2.28,11-4.23a15.6,15.6,0,0,0,8,3c6.69.44,13-3.18,18.84,1.38,6.48,5,11.15,11.32,19.75,12.88,8.32,1.51,17.13-3.34,19.19-11.86,1.25-5.18,0-10.65-1.2-16a190.83,190.83,0,0,1,105,32.21c-2-.76-4.39-.67-7.34.7-6.07,2.82-14.67,10-15.38,17.12-.81,8.08,11.11,9.22,16.77,9.22,8.5,0,17.11-3.8,14.37-13.62-1.19-4.26-2.81-8.69-5.42-11.37a193.27,193.27,0,0,1,18,14.14c-.09.09-.18.17-.27.27-5.76,6-12.45,10.75-16.39,18.05-2.78,5.14-5.91,7.58-11.54,8.91-3.1.73-6.64,1-9.24,3.08-7.24,5.7-3.12,19.4,3.74,23.51,8.67,5.19,21.53,2.75,28.07-4.66,5.11-5.8,8.12-15.87,17.31-15.86a15.4,15.4,0,0,1,10.82,4.41c3.8,3.94,3.05,7.62,3.86,12.54,1.43,8.74,9.14,4,13.83-.41a192.12,192.12,0,0,1,9.24,18.77c-5.16,7.43-9.26,15.53-21.67,6.87-7.43-5.19-12-12.72-21.33-15.06-8.15-2-16.5.08-24.55,1.47-9.15,1.59-20,2.29-26.94,9.22-6.71,6.68-10.26,15.62-17.4,22.33-13.81,13-19.64,27.19-10.7,45.57,8.6,17.67,26.59,27.26,46,26,19.07-1.27,38.88-12.33,38.33,15.38-.2,9.81,1.85,16.6,4.86,25.71,2.79,8.4,2.6,16.54,3.24,25.21A158,158,0,0,0,407.43,374,191.75,191.75,0,0,1,256,448.13Z"/>
        </symbol>
        <symbol id="star" viewBox="0 0 49.94 49.94">
            <path d="M48.856,22.73c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757
        c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996
        L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.622c-1.359,0.197-2.467,1.131-2.892,2.438
        c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.701
        c-0.183,1.06,0.095,2.091,0.781,2.904c1.066,1.267,2.927,1.653,4.415,0.871l10.814-5.686c0.452-0.237,1.021-0.235,1.472,0
        l10.815,5.686c0.526,0.277,1.087,0.417,1.666,0.417c1.057,0,2.059-0.47,2.748-1.288c0.687-0.813,0.964-1.846,0.781-2.904
        l-2.065-12.042c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.73z"/>
        </symbol>
        <symbol id="empty_star" viewBox="0 0 217.929 217.929">
            <path d="M212.39,101.703c5.023-4.897,6.797-12.083,4.629-18.755s-7.827-11.443-14.769-12.452l-52.969-7.697
            c-0.097-0.014-0.18-0.075-0.223-0.162L125.371,14.64C122.267,8.349,115.98,4.44,108.964,4.44S95.662,8.349,92.558,14.64
            L68.87,62.637c-0.043,0.087-0.126,0.147-0.223,0.162l-52.968,7.697c-6.942,1.009-12.601,5.78-14.769,12.452
            s-0.394,13.858,4.629,18.755l38.328,37.361c0.07,0.068,0.102,0.166,0.085,0.262l-9.048,52.755
            c-1.186,6.914,1.604,13.771,7.279,17.894c5.676,4.125,13.059,4.657,19.268,1.393l47.376-24.907c0.086-0.046,0.19-0.045,0.276,0
            l47.376,24.907c2.701,1.42,5.623,2.121,8.531,2.121c3.777,0,7.53-1.184,10.736-3.514c5.675-4.123,8.464-10.98,7.279-17.895
            l-9.048-52.754c-0.017-0.096,0.016-0.194,0.085-0.262L212.39,101.703z M156.235,142.368l9.048,52.754
            c0.024,0.14,0.031,0.182-0.118,0.29c-0.149,0.108-0.187,0.088-0.312,0.022l-47.377-24.908c-5.33-2.801-11.695-2.801-17.027,0
            l-47.376,24.907c-0.125,0.065-0.163,0.086-0.312-0.022c-0.149-0.108-0.142-0.15-0.118-0.289l9.048-52.755
            c1.018-5.936-0.949-11.989-5.262-16.194L18.103,88.813c-0.101-0.099-0.132-0.128-0.075-0.303c0.057-0.175,0.099-0.181,0.239-0.202
            l52.968-7.697c5.961-0.866,11.111-4.607,13.776-10.008l23.688-47.998c0.063-0.126,0.081-0.165,0.265-0.165s0.203,0.039,0.265,0.165
            l23.688,47.998c2.666,5.401,7.815,9.143,13.776,10.008l52.968,7.697c0.14,0.021,0.182,0.027,0.239,0.202
            c0.057,0.175,0.026,0.205-0.075,0.303l-38.328,37.361C157.185,130.378,155.218,136.432,156.235,142.368z"/>
        </symbol>

        <symbol id="languages" viewBox="0 0 24 24">
            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.016 11c-.048-1.03-.168-2.035-.356-3h3.5c.41.935.685 1.942.79 3h-3.934zm3.933 2c-.105 1.058-.38 2.065-.79 3h-3.5c.188-.965.309-1.97.356-3h3.934zm-1.968-7h-2.83c-.375-1.197-.875-2.292-1.461-3.286 1.716.684 3.195 1.831 4.291 3.286zm-4.948 0h-2.033v-3.674c.841 1.01 1.526 2.256 2.033 3.674zm-2.033 12h2.033c-.507 1.418-1.192 2.664-2.033 3.674v-3.674zm-2-15.674v3.674h-2.033c.507-1.418 1.192-2.664 2.033-3.674zm0 5.674v3h-2.994c.052-1.04.181-2.044.389-3h2.605zm0 5v3h-2.605c-.208-.956-.336-1.96-.389-3h2.994zm0 5v3.674c-.841-1.01-1.526-2.256-2.033-3.674h2.033zm2-2v-3h2.994c-.052 1.04-.181 2.044-.389 3h-2.605zm0-5v-3h2.605c.208.956.336 1.96.389 3h-2.994zm-4.69-8.286c-.586.994-1.086 2.089-1.461 3.286h-2.83c1.096-1.455 2.575-2.602 4.291-3.286zm-2.326 8.286h-3.933c.105-1.058.38-2.065.79-3h3.5c-.189.965-.309 1.97-.357 3zm.357 5h-3.5c-.41-.935-.685-1.942-.79-3h3.934c.047 1.03.167 2.035.356 3zm-2.322 2h2.83c.375 1.197.875 2.292 1.461 3.286-1.716-.684-3.195-1.831-4.291-3.286zm11.671 3.286c.586-.994 1.086-2.089 1.461-3.286h2.83c-1.096 1.455-2.575 2.602-4.291 3.286z"/>
        </symbol>

    </svg>    
    
    <div class="page">
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
        						<a class="languages__link" id="languages__link__ru" href="index.php?lang=ru"><?php echo $lang["lang_ru"]?></a>
        					</li>
        					<li>
        						<a class="languages__link" id="languages__link__ua" href="index.php?lang=ua"><?php echo $lang["lang_ua"]?></a>
        					</li>
        					<li>
        						<a class="languages__link" id="languages__link__en" href="index.php?lang=en"><?php echo $lang["lang_en"]?></a>
        					</li>
        				</ul>
        			</li>
                    
                    <div class="header__enterBlock">
                        <a href="signin.php" class="header__enter">
                            <img src="assets/images/vr_helmet_gr.png" class="header__enterImage__image" alt="">
                            <div class="header__enterText"><?php echo $lang["Выполнить вход"]?></div>
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
                
                <div class="slider">
                    <div class="slider__inner">
                        <div class="content">
                            <div class="content__inner show" id="sliderGame_1">
                                <img class="sliderGame__img" src="https://consolity.com/wp-content/uploads/2021/02/assassins-creed-valhalla-credit-ubisoft@2000x1270-3-1.jpg">
                                <div class="sliderGame__inner">
                                    <p class="sliderGame__inner-status"><?php echo $lang["Уже доступно"]?></p>
                                    <p class="sliderGame__inner-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptates totam temporibus, voluptate delectus reprehenderit ea odio cumque nisi id.</p>
                                    <div><a href="#"><?php echo $lang["Узнать больше"]?></a></div>
                                </div>
                            </div>
                            <div class="content__inner" id="sliderGame_2">
                                <img class="sliderGame__img" src="https://cdn.mos.cms.futurecdn.net/CjyxpAaE9pQr5RmST5nXRM-1200-80.jpg">
                                <div class="sliderGame__inner">
                                    <p class="sliderGame__inner-status"><?php echo $lang["Уже доступно"]?></p>
                                    <p class="sliderGame__inner-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptates totam temporibus, voluptate delectus reprehenderit ea odio cumque nisi id.</p>
                                    <div><a href="#"><?php echo $lang["Узнать больше"]?></a></div>
                                </div>
                            </div>
                            <div class="content__inner" id="sliderGame_3">
                                <img class="sliderGame__img" src="https://cdn.igromania.ru/mnt/news/8/4/7/a/7/2/92157/51cbddb555e7b6b3_1920xH.jpg">
                                <div class="sliderGame__inner">
                                    <p class="sliderGame__inner-status"><?php echo $lang["Уже доступно"]?></p>
                                    <p class="sliderGame__inner-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptates totam temporibus, voluptate delectus reprehenderit ea odio cumque nisi id.</p>
                                    <div><a href="#"><?php echo $lang["Узнать больше"]?></a></div>
                                </div>
                            </div>
                            <div class="content__inner" id="sliderGame_4">
                                <img class="sliderGame__img" src="https://assets2.rockpapershotgun.com/dota-2_N6a9mV2.jpg/BROK/resize/1200x630%3E/format/jpg/quality/80/dota-2_N6a9mV2.jpg">
                                <div class="sliderGame__inner">
                                    <p class="sliderGame__inner-status"><?php echo $lang["Уже доступно"]?></p>
                                    <p class="sliderGame__inner-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptates totam temporibus, voluptate delectus reprehenderit ea odio cumque nisi id.</p>
                                    <div><a href="#"><?php echo $lang["Узнать больше"]?></a></div>
                                </div>
                            </div>
                            <div class="content__inner" id="sliderGame_5">
                                <img class="sliderGame__img" src="https://image.api.playstation.com/vulcan/ap/rnd/202009/3013/SuaUMuPw8nqJu3TJncPLsog9.jpg">
                                <div class="sliderGame__inner">
                                    <p class="sliderGame__inner-status"><?php echo $lang["Уже доступно"]?></p>
                                    <p class="sliderGame__inner-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptates totam temporibus, voluptate delectus reprehenderit ea odio cumque nisi id.</p>
                                    <div><a href="#"><?php echo $lang["Узнать больше"]?></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Список игр -->
                        <div class="list">
                            <div class="sliderGame active" data-id="sliderGame_1">
                                <img src="assets/images/slider/AC_Valhalla.jpg">
                                <p>Assassin's Creed Valhalla</p>
                            </div>
                            <div class="sliderGame" data-id="sliderGame_2">
                                <img src="assets/images/slider/PoE.jpg">
                                <p>Path of Exile</p>
                            </div>
                            <div class="sliderGame" data-id="sliderGame_3">
                                <img src="assets/images/slider/Mount_and_Blade.jpg">
                                <p>Mount & Blade 2: Bannerlord</p>
                            </div>
                            <div class="sliderGame" data-id="sliderGame_4">
                                <img src="assets/images/slider/Dota 2.jpg">
                                <p>Dota 2</p>
                            </div>
                            <div class="sliderGame" data-id="sliderGame_5">
                                <img src="assets/images/slider/Dos2.jpg">
                                <p>Divinity: Original Sin 2</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /Slider -->
                
                <div class="gameList" id="small-slider">
                    <div class="gameList__header">
                        <p class="gameList__title" href="#"><?php echo $lang["Наиболее просматриваемые"]?></p>
                        <div class="gameList__nav">
                            <a class="gameList__nav-link" href="#">&lt;</a>
                            <a class="gameList__nav-link" href="#">&gt;</a>
                        </div>
                    </div>
                    <div class="gameList__games">
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/HOOD.jpg">
                            </div>
                            <div class="gameList__item-title">Hood: Outlaws & Legends</div>
                            <div class="gameList__item-developer">Sumo Digital</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Stealth</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/ACorigins.jpg">
                            </div>
                            <div class="gameList__item-title">Assassin's Creed Origins</div>
                            <div class="gameList__item-developer">Ubisoft</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Action-Adventure</p>
                                <p class="gameList__tag">Open World</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div href="#" class="gameList__img">
                                <img src="assets/images/gameList/Kingdoms.jpg">
                            </div>
                            <div class="gameList__item-title">Kingdoms of Amalur: Re-Reckoning</div>
                            <div class="gameList__item-developer">KAIKO, Big Huge Games</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Fighting</p>
                                <p class="gameList__tag">RPG</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Biomutant.jpg">
                            </div>
                            <div class="gameList__item-title">BIOMUTANT</div>
                            <div class="gameList__item-developer">Experiment 101</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">RPG</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Spellforce-3.jpg">
                            </div>
                            <div class="gameList__item-title">SpellForce 3: Soul Harvest</div>
                            <div class="gameList__item-developer">Grimlore Games</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">RPG</p>
                                <p class="gameList__tag">Strategy</p>
                            </div>
                        </a>
                    </div>
                    <div class="gameList__games">
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/genshin-impact.jpg">
                            </div>
                            <div class="gameList__item-title">Genshin Impact</div>
                            <div class="gameList__item-developer">miHoYo Limited</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">RPG</p>
                                <p class="gameList__tag">Open World</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Those Who Remain.jpg">
                            </div>
                            <div class="gameList__item-title">Those Who Remain</div>
                            <div class="gameList__item-developer">Camel 101</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Horror</p>
                                <p class="gameList__tag">Indie</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Far Cry 6.jpg">
                            </div>
                            <div class="gameList__item-title">Far Cry 6</div>
                            <div class="gameList__item-developer">Ubisoft Toronto</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Shooter</p>
                                <p class="gameList__tag">Adventure</p>
                                <p class="gameList__tag">Open World</p>
                            </div>
                        </a>
                
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/DARQ Complete Edition.jpg">
                            </div>
                            <div class="gameList__item-title">DARQ: Complete Edition</div>
                            <div class="gameList__item-developer">Unfold Games</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Horror</p>
                                <p class="gameList__tag">Puzzle</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Horizon Zero Dawn Complete Edition.jpg">
                            </div>
                            <div class="gameList__item-title">Horizon Zero Dawn Complete Edition</div>
                            <div class="gameList__item-developer">Guerrilla</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">RPG</p>
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Adventure</p>
                                <p class="gameList__tag">Action-Adventure</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /gameList -->
                
                 <div class="tiles">
                    <div class="tiles__block">
                        <a class="tiles__image" href="#">
                            <img src="assets/images/tiles/tile-1.jpg">
                        </a>
                
                        <div class="tiles__description">
                            <div class="tiles__title">Lorem ipsum, dolor sit amet</div>
                            <div class="tiles__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium tenetur omnis assumenda amet sequi, deserunt neque iusto dolor tempora, illo.</div>
                            <a href="#" class="tiles__link"><?php echo $lang["Узнать больше"]?></a>
                        </div>
                    </div>
                
                    <div class="tiles__block">
                        <a class="tiles__image" href="#">
                            <img src="assets/images/tiles/tile-2.jpg">
                        </a>
                
                        <div class="tiles__description">
                            <div class="tiles__title">Lorem ipsum, dolor sit amet</div>
                            <div class="tiles__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium tenetur omnis assumenda amet sequi, deserunt neque iusto dolor tempora, illo.</div>
                            <a href="#" class="tiles__link"><?php echo $lang["Узнать больше"]?></a>
                        </div>
                    </div>
                </div>
                
                <!--Игры на сайте -->
                <div class="gameList">
                    <!-- Новые игры -->
                    <p class="gameList__title"><?php echo $lang["Новинки на сайте"]?></p>
                    <div class="gameList__games">
                        <a href="#" class="gameList__item">
                            <div href="#" class="gameList__img">
                                <img src="assets/images/gameList/HOOD.jpg">
                            </div>
                            <div class="gameList__item-title">Hood: Outlaws & Legends</div>
                            <div class="gameList__item-developer">Sumo Digital</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Stealth</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/ACorigins.jpg">
                            </div>
                            <div class="gameList__item-title">Assassin's Creed Origins</div>
                            <div class="gameList__item-developer">Ubisoft</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Action-Adventure</p>
                                <p class="gameList__tag">Open World</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Kingdoms.jpg">
                            </div>
                            <div class="gameList__item-title">Kingdoms of Amalur: Re-Reckoning</div>
                            <div class="gameList__item-developer">KAIKO, Big Huge Games</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Fighting</p>
                                <p class="gameList__tag">RPG</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Biomutant.jpg">
                            </div>
                            <div class="gameList__item-title">BIOMUTANT</div>
                            <div class="gameList__item-developer">Experiment 101</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">RPG</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Spellforce-3.jpg">
                            </div>
                            <div class="gameList__item-title">SpellForce 3: Soul Harvest</div>
                            <div class="gameList__item-developer">Grimlore Games</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">RPG</p>
                                <p class="gameList__tag">Strategy</p>
                            </div>
                        </a>
                    </div>
                    <!-- Популярные игры -->
                    <p class="gameList__title"><?php echo $lang["Популярные игры"]?></p>
                    <div class="gameList__games">
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/HOOD.jpg">
                            </div>
                            <div class="gameList__item-title">Hood: Outlaws & Legends</div>
                            <div class="gameList__item-developer">Sumo Digital</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Stealth</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/ACorigins.jpg">
                            </div>
                            <div class="gameList__item-title">Assassin's Creed Origins</div>
                            <div class="gameList__item-developer">Ubisoft</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Action-Adventure</p>
                                <p class="gameList__tag">Open World</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Kingdoms.jpg">
                            </div>
                            <div class="gameList__item-title">Kingdoms of Amalur: Re-Reckoning</div>
                            <div class="gameList__item-developer">KAIKO, Big Huge Games</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">Fighting</p>
                                <p class="gameList__tag">RPG</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Biomutant.jpg">
                            </div>
                            <div class="gameList__item-title">BIOMUTANT</div>
                            <div class="gameList__item-developer">Experiment 101</div>
                            <div class="gameList__tags">
                                <p class="gameList__tag">Action</p>
                                <p class="gameList__tag">RPG</p>
                                <p class="gameList__tag">Adventure</p>
                            </div>
                        </a>
                        <a href="#" class="gameList__item">
                            <div class="gameList__img">
                                <img src="assets/images/gameList/Spellforce-3.jpg">
                            </div>
                            <div class="gameList__item-title">SpellForce 3: Soul Harvest</div>
                            <div class="gameList__item-developer">Grimlore Games</div>
                           <div class="gameList__tags">
                                <p class="gameList__tag">RPG</p>
                                <p class="gameList__tag">Strategy</p>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </main>

        
    </div>

    <div class="modal"  id="rating-modal">
    	<div class="modal__content">
    		<button class="modal__close" type="button">
    			<img src="assets/images/close.svg" alt="">
    		</button>
    		<div class="modal__content__star">
    			<div class="modal__content__counter"></div>
    			<svg class="modal__content-icon">
    				<use xlink:href="#star"></use>
    			</svg>
    		</div>
    		<div class="modal__content__title"><?php echo $lang["оцените это"]?></div>
    		<div class="modal__content__game-title">Far Cry 6</div>
    		<div class="modal__content__stars"></div>
    		<div class="modal__content__btn"><?php echo $lang["Оценить"]?></div>
    	</div>
    </div>    <footer class="footer">
        <div class="footer__inner">
            <ul class="footer__list">
                <li class="footer__list-item">
                    <a class="footer__list-link" href="#"><?php echo $lang["Поддержка авторов"]?></a>
                </li>
                <li class="footer__list-item">
                    <a class="footer__list-link" href="#"><?php echo $lang["Компания"]?></a>
                </li>
                <li class="footer__list-item">
                    <a class="footer__list-link" href="#"><?php echo $lang["Политика конфиденциальности"]?></a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="assets/js/authentication.js"></script>
    <script src="assets/js/filters.js"></script>
    <script src="assets/js/game-BD.js"></script>
    <script src="assets/js/game-gallery.js"></script>
    <script src="assets/js/game-scroll.js"></script>
    <script src="assets/js/gameRating.js"></script>
    <script src="assets/js/search.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/small-slider.js"></script>
    <script src="assets/js/specifications.js"></script>
    <script src="assets/js/signup.js"></script>

</body>
</html>
