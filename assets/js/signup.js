$(document).ready(function() {

    $('#signup').on('click', function(e){
        $('.authentication').show();
    })

    $('.authentication__button').on('click', function(e){

        let formData = new FormData();

        //добавление данных формы в "пакет"
        formData.append('E-mail', $('#E-mail').val());
        formData.append('Nickname', $('#Nickname').val());
        formData.append('Password', $('#Password').val());
       
       var request = new XMLHttpRequest();
       
       function reqReadyStateChange() {
           if(request.readyState == 4 && request.status == 200){
                
                if(request.responseText == 'DuplicateError') {

                    /*Действия, если такой пользователь есть в системе*/ 

                    document.getElementById("output").innerHTML = request.responseText;
                    $('form[name=authentication__form]').trigger('reset');
                    $('.authentication').hide();
                }
                else if (request.responseText == 'NullError') {

                    /*Действия, если в поля не было введено ни одного значения*/ 

                    document.getElementById("output").innerHTML = request.responseText;
                    $('form[name=authentication__form]').trigger('reset');
                    $('.authentication').hide();
                }
                else if (request.responseText == 'EmailError') {

                    /*Действия, если был введён неверный email*/ 

                    document.getElementById("output").innerHTML = request.responseText;
                    $('form[name=authentication__form]').trigger('reset');
                    $('.authentication').hide();
                }
                else {
                    document.getElementById("output").innerHTML = request.responseText;
                    $('form[name=authentication__form]').trigger('reset');
                    $('.authentication').hide();
                }
            }
       }
       
       request.open("POST", "http://localhost/GreenGames/registration.php");
       request.onreadystatechange = reqReadyStateChange;
       request.send(formData);

    });

});