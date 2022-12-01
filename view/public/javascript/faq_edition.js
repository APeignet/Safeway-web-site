function ajoutFaq(langue){

    if(erreurQuestionAjoutFaq(langue) == false || erreurReponseAjoutFaq(langue) == false) {
        return false;
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches){
            var numero = document.forms["ajout_faq2"]["numero_ajout2"];
            document.getElementById('modif_faq').innerHTML="</br>La FAQ a bien été ajoutée.</br>";
        }
        else{
            var numero = document.forms["ajout_faq"]["numero_ajout"];
    
            if(langue=='francais')
            alert("La question n°"+ numero.value + " a été ajoutée.");
            else
            alert("Question n° "+ numero.value + " has been added.");
        }
    }

}

function erreurQuestionAjoutFaq(langue){

    if(window.matchMedia("(max-width:700px)").matches){
        var question = document.forms["ajout_faq2"]["question_ajout2"];
        var idQuestion = document.getElementById("question_ajout2");
    }
    else{
        var question = document.forms["ajout_faq"]["question_ajout"];
        var idQuestion = document.getElementById("question_ajout");
    }
    var regex_question1 = /(^[A-Z])/; 
    var regex_question2 = /(\s\?$)/; 


    if(regex_question1.test(question.value) == false || regex_question2.test(question.value) == false){
        if(langue == 'francais'){
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_question_ajout2').innerHTML='</br>Veuillez écrire la question sous cette forme : "Question ?".</br>';  
            else
                document.getElementById('error_question_ajout').innerHTML='</br>Veuillez écrire la question sous cette forme : "Question ?".</br>';  
            
        }
        else{
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_question_ajout2').innerHTML='</br>Please write the question like this : "Question ?".</br>';  
            else
                document.getElementById('error_question_ajout').innerHTML='</br>Please write the question like this : "Question ?".</br>';  
            
        }
        idQuestion.style.border = "2px solid red"; 
        return false;
        
        
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches)
            document.getElementById('error_question_ajout2').innerHTML="";
        else
            document.getElementById('error_question_ajout').innerHTML="";
        idQuestion.style.border = "2px solid #605dfec4"; 
    }
      
}

function erreurReponseAjoutFaq(langue){

    if(window.matchMedia("(max-width:700px)").matches){
        var reponse = document.forms["ajout_faq2"]["reponse_ajout2"];
        var idReponse = document.getElementById("reponse_ajout2");
    }
    else{
        var reponse = document.forms["ajout_faq"]["reponse_ajout"];
        var idReponse = document.getElementById("reponse_ajout");
    }

    var regex_question1 = /(^[A-Z])/; 
    var regex_reponse = /(\.$)/;


    if(regex_question1.test(reponse.value) == false || regex_reponse.test(reponse.value) == false){
        if(langue == 'francais'){
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_reponse_ajout2').innerHTML='</br>Veuillez écrire la réponse sous cette forme : "Réponse.".</br>';  
            else
                document.getElementById('error_reponse_ajout').innerHTML='</br>Veuillez écrire la réponse sous cette forme : "Réponse.".</br>';  
            
        }
        else{
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_reponse_ajout2').innerHTML='</br>Please write the answer like this : "Answer.".</br>';  
            else
                document.getElementById('error_reponse_ajout').innerHTML='</br>Please write the answer like this : "Answer.".</br>';  
            
        }
        idReponse.style.border = "2px solid red"; 
        return false;
        
        
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches)
            document.getElementById('error_reponse_ajout2').innerHTML="";
        else
            document.getElementById('error_reponse_ajout').innerHTML="";
        idReponse.style.border = "2px solid #605dfec4"; 
    }
      
}

function editionFaq(langue){

    if(erreurQuestionEditionFaq(langue) == false || erreurReponseEditionFaq(langue) == false) {
        return false;
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches){
            var numeroAvant = document.forms["edition_faq2"]["numero_edition2"]; 
            var numeroApres = document.forms["edition_faq2"]["numero_editionbis2"];
        }
        else{
            var numeroAvant = document.forms["edition_faq"]["numero_edition"]; 
            var numeroApres = document.forms["edition_faq"]["numero_editionbis"];
        } 
    
        if(numeroAvant.value == numeroApres.value){
            if(langue=='francais')
            alert("La question n°"+ numeroAvant.value + " a été modifiée.");
            else
            alert("Question n°"+ numeroAvant.value + " has been modified.");
        }
        else {
            if(langue=='francais')
            alert("La question n°"+ numeroAvant.value + " a été modifiée et est devenue la question n°"+numeroApres.value+".");
            else
            alert("Question n°"+ numeroAvant.value + " has been modified and became the question n°"+numeroApres.value+".");
        }
    }
    
}

function erreurQuestionEditionFaq(langue){

    if(window.matchMedia("(max-width:700px)").matches){
        var question = document.forms["edition_faq2"]["question_edition2"];
        var idQuestion = document.getElementById("question_edition2");
    }
    else{
        var question = document.forms["edition_faq"]["question_edition"];
        var idQuestion = document.getElementById("question_edition");
    }
    var regex_question1 = /(^[A-Z])/; 
    var regex_question2 = /(\s\?$)/; 


    if(regex_question1.test(question.value) == false || regex_question2.test(question.value) == false){
        if(langue == 'francais'){
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_question_edition2').innerHTML='</br>Veuillez écrire la question sous cette forme : "Question ?".</br>';  
            else
                document.getElementById('error_question_edition').innerHTML='</br>Veuillez écrire la question sous cette forme : "Question ?".</br>';  
            
        }
        else{
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_question_edition2').innerHTML='</br>Please write the question like this : "Question ?".</br>';  
            else
                document.getElementById('error_question_edition').innerHTML='</br>Please write the question like this : "Question ?".</br>';  
            
        }
        idQuestion.style.border = "2px solid red"; 
        return false;
        
        
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches)
            document.getElementById('error_question_edition2').innerHTML="";
        else
            document.getElementById('error_question_edition').innerHTML="";
        idQuestion.style.border = "2px solid #605dfec4"; 
    }
      
}

function erreurReponseEditionFaq(langue){

    if(window.matchMedia("(max-width:700px)").matches){
        var reponse = document.forms["edition_faq2"]["reponse_edition2"];
        var idReponse = document.getElementById("reponse_edition2");
    }
    else{
        var reponse = document.forms["edition_faq"]["reponse_edition"];
        var idReponse = document.getElementById("reponse_edition");
    }

    var regex_question1 = /(^[A-Z])/; 
    var regex_reponse = /(\.$)/;


    if(regex_question1.test(reponse.value) == false || regex_reponse.test(reponse.value) == false){
        if(langue == 'francais'){
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_reponse_edition2').innerHTML='</br>Veuillez écrire la réponse sous cette forme : "Réponse.".</br>';  
            else
                document.getElementById('error_reponse_edition').innerHTML='</br>Veuillez écrire la réponse sous cette forme : "Réponse.".</br>';  
            
        }
        else{
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_reponse_edition2').innerHTML='</br>Please write the answer like this : "Answer.".</br>';  
            else
                document.getElementById('error_reponse_edition').innerHTML='</br>Please write the answer like this : "Answer.".</br>';  
            
        }
        idReponse.style.border = "2px solid red"; 
        return false;
        
        
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches)
            document.getElementById('error_reponse_edition2').innerHTML="";
        else
            document.getElementById('error_reponse_edition').innerHTML="";
        idReponse.style.border = "2px solid #605dfec4"; 
    }
      
}