var request = new XMLHttpRequest();

function reqReadyStateChange() {
    if(request.readyState == 4 && request.status == 200){
        document.getElementById("gallery_list").innerHTML = request.responseText;
    }
}

request.open("POST", "http://localhost/MySite/src/assets/php/games.php");
request.onreadystatechange = reqReadyStateChange;
request.send();