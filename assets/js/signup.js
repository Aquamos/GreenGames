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
               document.getElementById("output").innerHTML = request.responseText;
               $('form[name=authentication__form]').trigger('reset');
               $('.authentication').hide();
           }
       }
       
       request.open("POST", "http://localhost/GreenGames/registration.php");
       request.onreadystatechange = reqReadyStateChange;
       request.send(formData);

    });

});
