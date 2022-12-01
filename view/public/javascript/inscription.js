
function erreurPrenom(role, langue){

    var prenom = document.forms["inscription_"+role]["prenom"]; 
    var idPrenom = document.getElementById("prenom");
    var regex_prenom = /(^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$)/;

    if(regex_prenom.test(prenom.value) == false){
        if(langue=='francais')
            document.getElementById('error_prenom').innerHTML="</br>Veuillez entrer un prénom valide.</br>";  
        else
            document.getElementById('error_prenom').innerHTML="</br>Please enter a valid first name.</br>";
        idPrenom.style.border = "2px solid red"; 
        return false;
    }
    else{
        document.getElementById('error_prenom').innerHTML="";
        idPrenom.style.border = "2px solid #605dfec4"; 
    }
}

function erreurNom(role,langue){

    var nom = document.forms["inscription_"+role]["nom"];
    var idNom = document.getElementById("nom");
    var regex_prenom = /(^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$)/;

    if(regex_prenom.test(nom.value) == false){
        if(langue=='francais')
            document.getElementById('error_nom').innerHTML="</br>Veuillez entrer un nom valide.</br>";  
        else
            document.getElementById('error_nom').innerHTML="</br>Please enter a valid last name.</br>";
            idNom.style.border = "2px solid red"; 
        return false;
    }
    else{
        document.getElementById('error_nom').innerHTML="";
        idNom.style.border = "2px solid #605dfec4"; 
    }
}

function erreurBirthday(role, langue){

    var birthday = document.forms["inscription_"+role]["birthday"];
    var idBirthday = document.getElementById("birthday");
    var regex_birthday = /(^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$)/;

    if(regex_birthday.test(birthday.value) == false){
        if(langue=='francais')
            document.getElementById('error_birthday').innerHTML="</br>Veuillez entrer une date de naissance valide.</br>";  
        else
            document.getElementById('error_birthday').innerHTML="</br>Please enter a valid date of birth.</br>";
            idBirthday.style.border = "2px solid red"; 
        return false;
    }
    else{
        document.getElementById('error_birthday').innerHTML="";
        idBirthday.style.border = "2px solid #605dfec4"; 
    }
}

function erreurEntreprise(role, langue){

    var entreprise = document.forms["inscription_"+role]["entreprise"]; 
    var idEntreprise = document.getElementById("entreprise");
    var regex_prenom = /(^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$)/;

    if(regex_prenom.test(entreprise.value) == false){
        if(langue=='francais')
            document.getElementById('error_entreprise').innerHTML="</br>Veuillez entrer une entreprise valide.</br>";  
        else
            document.getElementById('error_entreprise').innerHTML="</br>Please enter a valid company.</br>";
            idEntreprise.style.border = "2px solid red"; 
        return false;
    }
    else{
        document.getElementById('error_entreprise').innerHTML="";
        idEntreprise.style.border = "2px solid #605dfec4"; 
    }
}

function erreurEmail(role, langue){

    var email = document.forms["inscription_"+role]["email"]; 
    var emailbis = document.forms["inscription_"+role]["emailbis"];
    var idEmail = document.getElementById("email");
    var idEmailbis = document.getElementById("emailbis");
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


    if(email.value != emailbis.value){
        if(langue=='francais')
            document.getElementById('error_emailbis').innerHTML="</br>Les adresses mails doivent correspondre.</br>";  
        else
            document.getElementById('error_emailbis').innerHTML="</br>Email addresses must match.</br>";
        idEmail.style.border = "2px solid red"; 
        idEmailbis.style.border = "2px solid red"; 
        return false;
    }
    else{
    document.getElementById('error_emailbis').innerHTML="";
    idEmail.style.border = "2px solid #605dfec4"; 
    idEmailbis.style.border = "2px solid #605dfec4"; 
  
    }
}

function erreurPassword(role, langue){

    var mdp = document.forms["inscription_"+role]["mdp"]; 
    var mdpbis = document.forms["inscription_"+role]["mdpbis"]; 
    var idMdp = document.getElementById("mdp");
    var idMdpbis = document.getElementById("mdpbis");
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

function getfile(){
    document.getElementById('hiddenfile').click();
}
function getvalue(){
    document.getElementById('selectedfile').value=document.getElementById('hiddenfile').value;
}