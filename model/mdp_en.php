<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/mdp.css" />
        <link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
        <script src="../view/public/javascript/mdp.js"></script>
		<title>Forgotten password</title>
	</head>

	<body>

    <div class="conteneur principal">

    <div class="langue">
        <form>
            <select onchange="location.href=this.value">
                <option value="../controller/controller_sendemail_reset_mdp_en.php">English</option>
                <option value="../controller/controller_sendemail_reset_mdp_fr.php">Français</option>
            </select>
        </form>
    </div>

    <div class="contenu_principal">
        <h1>Forgotten password ?</h1>	
        <p>
        To reset your password, please write down your email right bellow this message:</br>
        You will receive an email containing a link leading you to a secure page where you can safely reset your password</br>
        You haven't received an email ? Click on the "Send" button to receive an other one.
        </p>
        
        <form name="mdpForm" action="" method="post" onsubmit="return modifMdp('anglais')">
            <input onkeyup="erreurEmail('anglais')" id="email" type="email" name="email" placeholder="Your email" class="formulaire" required/><br/>
            <span><?php error_reporting(0); echo $alert1; echo $alert2; echo $non; echo $erreur; echo $rien; echo '<br>'; ?></span>
            <span class="error" id="error_email"></span>
            <span id="envoie_email"></span>
            </br>
            <input type="submit" name="submit" value="Send" class="bouton" /></br>
            <a  class="back" href="../controller/controller_authentification_en.php">Go back</a>
        </form>

    </div>
 
		
	</body>

</html>


