function ajoutCgu(langue){

    if(erreurDetailAjoutCgu(langue) == false ) {
        return false;
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches){
            var numero = document.forms["ajout_cgu2"]["numero_ajout2"];
            document.getElementById('modif_cgu').innerHTML="</br>La cgu a bien été ajoutée.</br>";
        }
        else{
            var numero = document.forms["ajout_cgu"]["numero_ajout"];
    
            if(langue=='francais')
            alert("L'article n°"+ numero.value + " a été ajouté.");
            else
            alert("Article n° "+ numero.value + " has been added.");
        }
    }

}

function erreurDetailAjoutCgu(langue){

    if(window.matchMedia("(max-width:700px)").matches){
        var detail = document.forms["ajout_cgu2"]["detail_ajout2"];
        var iddetail = document.getElementById("detail_ajout2");
    }
    else{
        var detail = document.forms["ajout_cgu"]["detail_ajout"];
        var iddetail = document.getElementById("detail_ajout");
    }
    var regex_detail1 = /(^[A-Z])/; 
    var regex_detail2 = /(\.$)/; 


    if(regex_detail1.test(detail.value) == false || regex_detail2.test(detail.value) == false){
        if(langue == 'francais'){
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_detail_ajout2').innerHTML='</br>Veuillez écrire l article sous cette forme : "Article.".</br>';  
            else
                document.getElementById('error_detail_ajout').innerHTML='</br>Veuillez écrire l article sous cette forme : "Article.".</br>';  
            
        }
        else{
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_detail_ajout2').innerHTML='</br>Please write the article like this : "Article.".</br>';  
            else
                document.getElementById('error_detail_ajout').innerHTML='</br>Please write the article like this : "Article.".</br>';  
            
        }
        iddetail.style.border = "2px solid red"; 
        return false;
        
        
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches)
            document.getElementById('error_detail_ajout2').innerHTML="";
        else
            document.getElementById('error_detail_ajout').innerHTML="";
        iddetail.style.border = "2px solid #605dfec4"; 
    }
      
}



function editionCgu(langue){

    if(erreurDetailEditionCgu(langue) == false ) {
        return false;
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches){
            var numeroAvant = document.forms["edition_cgu2"]["numero_edition2"]; 
            var numeroApres = document.forms["edition_cgu2"]["numero_editionbis2"];
        }
        else{
            var numeroAvant = document.forms["edition_cgu"]["numero_edition"]; 
            var numeroApres = document.forms["edition_cgu"]["numero_editionbis"];
        } 
    
        if(numeroAvant.value == numeroApres.value){
            if(langue=='francais')
            alert("L'article n°"+ numeroAvant.value + " a été modifié.");
            else
            alert("Article n°"+ numeroAvant.value + " has been modified.");
        }
        else {
            if(langue=='francais')
            alert("L'article n°"+ numeroAvant.value + " a été modifié et est devenue l'article n°"+numeroApres.value+".");
            else
            alert("Article n°"+ numeroAvant.value + " has been modified and became the article n°"+numeroApres.value+".");
        }
    }
    
}

function erreurDetailEditionCgu(langue){

    if(window.matchMedia("(max-width:700px)").matches){
        var detail = document.forms["edition_cgu2"]["detail_edition2"];
        var iddetail = document.getElementById("detail_edition2");
    }
    else{
        var detail = document.forms["edition_cgu"]["detail_edition"];
        var iddetail = document.getElementById("detail_edition");
    }
    var regex_detail1 = /(^[A-Z])/; 
    var regex_detail2 = /(\.$)/; 


    if(regex_detail1.test(detail.value) == false || regex_detail2.test(detail.value) == false){
        if(langue == 'francais'){
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_detail_edition2').innerHTML='</br>Veuillez écrire l article sous cette forme : "Article.".</br>';  
            else
                document.getElementById('error_detail_edition').innerHTML='</br>Veuillez écrire l article sous cette forme : "Article.".</br>';  
            
        }
        else{
            if(window.matchMedia("(max-width:700px)").matches)
                document.getElementById('error_detail_edition2').innerHTML='</br>Please write the article like this : "Article.".</br>';  
            else
                document.getElementById('error_detail_edition').innerHTML='</br>Please write the article like this : "Article.".</br>';  
            
        }
        iddetail.style.border = "2px solid red"; 
        return false;
        
        
    }
    else{
        if(window.matchMedia("(max-width:700px)").matches)
            document.getElementById('error_detail_edition2').innerHTML="";
        else
            document.getElementById('error_detail_edition').innerHTML="";
        iddetail.style.border = "2px solid #605dfec4"; 
    }
      
}

