<?php

function recuperer_faq(){
    require '../model/model_connexion.php';
    $requete2 = ($bdd->query('SELECT COUNT(numero) as nombre FROM faq'));
    $nombre_question = $requete2->fetch();
    $requete = $bdd->prepare('SELECT * FROM faq WHERE (numero = ?)');
    for($j=1;$j<=$nombre_question['nombre'];$j++){        
        $requete->execute(array($j));
        $faq = $requete->fetch();
        echo '
        <section id="section'.$j.'">
            <input id="checkbox'.$j.'" type="checkbox" name="groupe1">
            <label for="checkbox'.$j.'" class="question"> 
                <div class="souslabel">
                    <svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="60" viewBox="0 0 172 172" style=" fill:#000000;">
                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <path d="M0,172v-172h172v172z" fill="none"></path>
                            <g fill="#5f5dfe">
                                <path d="M86,6.88c-43.63156,0 -79.12,35.48844 -79.12,79.12c0,43.63156 35.48844,79.12 79.12,79.12c43.63156,0 79.12,-35.48844 79.12,-79.12c0,-43.63156 -35.48844,-79.12 -79.12,-79.12zM112.51219,88.43219l-34.4,34.4c-0.67187,0.67188 -1.54531,1.00781 -2.43219,1.00781c-0.88687,0 -1.76031,-0.33594 -2.43219,-1.00781c-1.34375,-1.34375 -1.34375,-3.52062 0,-4.86437l31.96781,-31.96781l-31.96781,-31.96781c-1.34375,-1.34375 -1.34375,-3.52062 0,-4.86437c1.34375,-1.34375 3.52062,-1.34375 4.86437,0l34.4,34.4c1.34375,1.34375 1.34375,3.52062 0,4.86437z"></path>
                            </g>
                        </g>
                    </svg>
                    <li>'.$faq['numero'].".&nbsp;&nbsp;&nbsp;".$faq['question'].'</li>
                </div>
            </label>
            <div class="blocked"></div>
            <p>'.$faq['reponse'].'</p>
        </section>' ; 

    }	
}