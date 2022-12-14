<?php 

// Récupérer les données 

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=0G9A");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
echo "Raw Data: ";
echo("$data"."</br>");

// Mettre les données sous forme de tableau
$data_tab = str_split($data,33);
echo "Tabular Data:<br />";
for($i=0, $size=count($data_tab); $i<$size; $i++){
echo "Trame $i: $data_tab[$i]<br />";
}

// Décoder une trame
$trame = $data_tab[sizeof($data_tab)-2];
// décodage avec des substring
$t = substr($trame,0,1);
$o = substr($trame,1,4);
// …
// décodage avec sscanf
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");


$date = $year."-".$month."-".$day;

require '../model/model_connexion.php';

$requete1 = $bdd->prepare('INSERT INTO resultat(valeur,idUtilisateur,idCapteur,dateResult) VALUES (?,?,?,?)' );
$requete1->execute(array($v,68,$c,$date));

header("Location: ../controller/controller_gestion_utilisateur_fr.php");