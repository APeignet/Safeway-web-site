function resetMdp(langue){

    if(erreurEmail(langue) == false || erreurPassword(langue) == false) {
        return false;
    }
    else{
        if(langue=='francais')
            alert("Le mot de passe a été réinitialisé.");
        else
            alert("The password has been reset.");   
    }
     
}

function erreurEmail(langue){

    var email = document.forms["resetPassword"]["email"];
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

function erreurPassword(langue){

    var mdp = document.forms["resetPassword"]["password"];
    var mdpbis = document.forms["resetPassword"]["passwordbis"];
    var idMdp = document.getElementById("password");
    var idMdpbis = document.getElementById("passwordbis");
    var regex_mdp1 = /([A-Z])/;
    var regex_mdp2 = /([a-z])/;
    var regex_mdp3 = /([0-9])/;
    var regex_mdp4 = /([@[\]^_!\#$%&'()*+,./:;{}<>=|~?-])/;

    if(regex_mdp1.test(mdp.value) == false || regex_mdp2.test(mdp.value) == false || regex_mdp3.test(mdp.value) == false || regex_mdp4.test(mdp.value) == false ){
        if(langue=='francais')
            document.getElementById('error_mdp').innerHTML="</br>Veuillez entrer un mot de passe valide.</br>";  
        else
            document.getElementById('error_mdp').innerHTML="</br>Please enter a valid password.</br>";
            idMdp.style.border = "2px solid red"; 
            idMdpbis.style.border = "2px solid red"; 
        return false;
    }
    else{
        document.getElementById('error_mdp').innerHTML="";
        idMdp.style.border = "2px solid #605dfec4"; 
        idMdpbis.style.border = "2px solid #605dfec4"; 
    }

    if(mdp.value != mdpbis.value){
        if(langue=='francais')
            document.getElementById('error_mdpbis').innerHTML="</br>Les mots de passes doivent correspondre.</br>";  
        else
            document.getElementById('error_mdpbis').innerHTML="</br>Passwords must match.</br>";
        idMdp.style.border = "2px solid red"; 
        idMdpbis.style.border = "2px solid red"; 
        return false;
    }
    else{
    document.getElementById('error_mdpbis').innerHTML="";
    idMdp.style.border = "2px solid #605dfec4"; 
    idMdpbis.style.border = "2px solid #605dfec4"; 
  
    }
}
