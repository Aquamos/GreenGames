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
                    $('form[name=authentication__form]').trigger('reset');
                }
                else if (request.responseText == 'EmailError') {

                    /*Действия, если был введён неверный email*/ 

                    alert("Ваш Email не соответствует формату! Проверьте введённые данные!");
                    $('form[name=authentication__form]').trigger('reset');
                }
                else if (request.responseText == 'Fail') {
                    alert("Такого пользователя не существует! Проверьте введённые данные!");
                    $('form[name=authentication__form]').trigger('reset');
                }
                else if (request.responseText == 'Success'){
                    
                    /*Действия, когда пользователь успешно вошёл*/
                    alert("Вы успешно вошли!");
                    $('form[name=authentication__form]').trigger('reset');
                    $('.authentication').hide();
                }
                else {
                    document.getElementById("signinoutput").innerHTML = request.responseText;
                }
            }
       }
       
       request.open("POST", "http://localhost/GreenGames/enter.php");
       request.onreadystatechange = reqReadyStateChange;
       request.send(formData);

    });

});
