<?php

function recuperer_cgu(){
    require '../model/model_connexion.php';
    $requete2 = ($bdd->query('SELECT COUNT(numero) as nombre FROM cgu'));
    $nombre_question = $requete2->fetch();
    $requete = $bdd->prepare('SELECT * FROM cgu WHERE (numero = ?)');
    for($j=1;$j<=$nombre_question['nombre'];$j++){        
        $requete->execute(array($j));
        $cgu = $requete->fetch();
        echo '
        <section id="section'.$j.'">
            <input id="checkbox'.$j.'" type="checkbox" name="groupe1">
            <label for="checkbox'.$j.'" class="question"> 
                <div class="souslabel">
                    <svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="60" viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            
                        </g>
                    </svg>
                    <li>'.$cgu['numero'].".&nbsp;&nbsp;&nbsp;".$cgu['detail'].'</li>
                </div>
            </label>
            <div class="blocked"></div>
            
        </section>' ; 

    }	
}
