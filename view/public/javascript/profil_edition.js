function editProfil(langue){

    if(erreurPrenomEditionProfil(langue) == false || erreurNomEditionProfil(langue) == false || erreurBirthdayEditionProfil(langue)==false) {
        return false;
    }
    else{
        if(langue=='francais'){
            alert("Le profil a bien été mis à jour.");
            window.location.reload()
        }
        else{
            alert("The profile has been updated.");
            window.location.reload()
        }
    }

}

function erreurPrenomEditionProfil(langue){

    var prenom = document.forms["edition_profil"]["prenom"]; 
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

function erreurNomEditionProfil(langue){

    var nom = document.forms["edition_profil"]["nom"];  
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

function erreurBirthdayEditionProfil(langue){

    var birthday = document.forms["edition_profil"]["birthday"]; 
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


function getfile(){
    document.getElementById('hiddenfile').click();
}
function getvalue(){
    document.getElementById('selectedfile').value=document.getElementById('hiddenfile').value;
}
