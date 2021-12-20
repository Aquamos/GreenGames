$(document).ready(function() {

    $('#header__enter').on('click', function(e){
        $('.authentication').show();
    })

    $('#enter__button').on('click', function(e){

        let formData = new FormData();

        //добавление данных формы в "пакет"
        formData.append('E-mail', $('#SignInE-mail').val());
        formData.append('Password', $('#SignInPassword').val());
       
       var request = new XMLHttpRequest();
       
       function reqReadyStateChange() {
           if(request.readyState == 4 && request.status == 200){
                
                if (request.responseText == 'NullError') {

                    /*Действия, если в поля не было введено ни одного значения*/ 

                    alert("Все поля должны быть заполнены!");
                    $('#SignInPassword').val('');
                    $('#SignInE-mail').val('');
                }
                else if (request.responseText == 'EmailError') {

                    /*Действия, если был введён неверный email*/ 

                    alert("Ваш Email не соответствует формату! Проверьте введённые данные!");
                    $('#SignInPassword').val('');
                    $('#SignInE-mail').val('');
                }
                else if (request.responseText == 'Fail') {
                    alert("Такого пользователя не существует! Проверьте введённые данные!");
                    $('#SignInPassword').val('');
                    $('#SignInE-mail').val('');
                }
                else if (request.responseText == 'Success'){
                    
                    /*Действия, когда пользователь успешно вошёл*/

                    /*перенаправление пользователя на главную страницу*/
                    /*Через innerHTML смена иконки и текста "Выполнить вход" на ник пользователя*/
                    var nickRequest = new XMLHttpRequest();
                    function reqReadyStateChange() {
                        if(nickRequest.readyState == 4 && nickRequest.status == 200){
                            document.getElementById("header__enterText").innerHTML = nickRequest.responseText;
                        }
                    }
                    nickRequest.open("POST", "http://localhost/GreenGames/scripts/getNickname.php");
                    nickRequest.onreadystatechange = reqReadyStateChange;
                    nickRequest.send();
                    
                    alert("Вы успешно вошли!");
                    $('.authentication').hide();
                    window.location.href = 'index.php';
                }
                else {
                    document.getElementById("signinoutput").innerHTML = request.responseText;
                }
            }
       }
       
       request.open("POST", "http://localhost/GreenGames/scripts/enter.php");
       request.onreadystatechange = reqReadyStateChange;
       request.send(formData);

    });

});
