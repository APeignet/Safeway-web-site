<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/mdp.css" />
        <link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
        <script src="../view/public/javascript/mdp.js"></script>
		<title>Mot de passe oublié</title>
	</head>

	<body>

    <div class="conteneur principal">

    <div class="langue">
        <form>
            <select onchange="location.href=this.value">
                <option value="../controller/controller_sendemail_reset_mdp_fr.php">Français</option>
                <option value="../controller/controller_sendemail_reset_mdp_en.php">English</option>
            </select>
        </form>
    </div>

    <div class="contenu_principal">
        <h1>Vous avez oublié votre mot de passe ?</h1>	
        <p>
        Réinitialisez votre mot de passe en renseignant votre adresse email ci-dessous :</br>
        Un mail vous sera envoyé avec un lien pour modifier votre mot de passe</br>
        Vous n'avez pas reçu de mail ? Cliquez sur le bouton suivant pour en envoyer un autre
        </p>
        
        <form name="mdpForm" action="" method="post" onsubmit="return modifMdp('francais')">
            <input onkeyup="erreurEmail('francais')" id="email" type="email" name="email" placeholder="Votre mail" class="formulaire" required/><br/>
            <span><?php error_reporting(0); echo $alert1; echo $alert2; echo $non; echo $erreur; echo $rien; echo '<br>'; ?></span>
            <span class="error" id="error_email"></span>
            <span id="envoie_email"></span>
            </br>
            <input type="submit" name="submit" value="Envoyer" class="bouton" /></br>
            <a  class="back" href="../controller/controller_authentification_fr.php">Retour en arrière</a>
        </form>

    </div>
 
		
	</body>

</html>


