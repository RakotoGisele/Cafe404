

setInterval(function(){
    var d = new Date(); 
    var h = d.toLocaleTimeString();
    console.log(d.toLocaleTimeString()); 
    document.getElementById("date").innerHTML=h;
},1000)

function myFunction() {
    document.getElementById("situation").innerHTML="Indisponible";
}
function couleur() {
    var element =  document.getElementById("situation");
    element.classList.remove("bouton");
    var element =  document.getElementById("situation");
    element.classList.add("indisponible");

}

function defaut() {
    var element =  document.getElementById("situation");
    element.classList.add("bouton");
    var element =  document.getElementById("situation");
    element.classList.remove("indisponible");    
    document.getElementById("situation").innerHTML="Disponible";
    document.getElementById("utilisation").innerHTML="Reserver un Ordinateur ";
}

function timer1() {
    var myVar = setInterval(myTimer ,100);
    var d = new Date();
    document.getElementById("utilisation").innerHTML = d.toLocaleTimeString();
    document.getElementById("utilisation").innerHTML="Indisponible j'usque"+d;
}



