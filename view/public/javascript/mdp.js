function modifMdp(langue){

    if(erreurEmail(langue) == false){
        return false;
    }
    else {
        if(langue=='francais'){
            document.getElementById('envoie_email').innerHTML="</br>Un email a été envoyé.</br>";
            return false;
        }
        else{
            document.getElementById('envoie_email').innerHTML="</br>An email has been sent.</br>";
            return false;
        }
    }

}


function erreurEmail(langue){

    var email = document.forms["mdpForm"]["email"];
    var idEmail = document.getElementById("email");
    var regex_email = /(^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$)/;

    if(regex_email.test(email.value) == false){
        if(langue=='francais')
            document.getElementById('error_email').innerHTML="</br>Veuillez entrer une adresse mail valide.</br>";  
        else
            document.getElementById('error_email').innerHTML="</br>Please enter a valid email address.</br>";
            idEmail.style.border = "2px solid red"; 
            idEmailbis.style.border = "2px solid red"; 
        return false;
    }
    else{
        document.getElementById('error_email').innerHTML="";
        idEmail.style.border = "2px solid #605dfec4"; 
        idEmailbis.style.border = "2px solid #605dfec4"; 
    }
}