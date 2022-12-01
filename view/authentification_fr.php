<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/authentification.css" />
		<link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
		<title>Authentification</title>
	</head>

	<body>
							
		<div class="conteneur principal">

			<div class="langue">
				<form>
					<select onchange="location.href=this.value">
						<option value="../controller/controller_authentification_fr.php">Français</option>
						<option value="../controller/controller_authentification_en.php">English</option>
					</select>
				</form>
			</div>
			

			<div class="authentification">
				<h1>Authentification</h1>

				<p class="paragraphe">Bienvenue sur le site de <span>Safeway for Infinite Measures</span> !<br/>
					Pour vous connecter, veuillez renseigner vos informations ci-dessous :
				</p>


				<form method="post" action="../controller/controller_authentification_fr.php">

					<input type="text" name="email" placeholder="Email" class="formulaire" required/>
						<br/>
					<input type="password" name="mdp" placeholder="Mot de passe" class="formulaire" required/>
						<br/>
					<a  class="mdpoublie" href="../controller/controller_sendemail_reset_mdp_fr.php">Mot de passe oublié ?</a>
						<br/>
					<p> </p><br/>

					<?php  error_reporting(0); if($erreur==1 || $erreur==2) { ?>
						<div class="error">
							<p><span>Email ou mot de passe incorrect !</span></p><br>
						</div>
					<?php } ?>

					<input type="submit" name ="action" value="Connexion" class="bouton" /></br>

					<input type="button" value="Accès visiteur" onclick="self.location.href='../view/accueil_visiteur_fr.php'" />
						
				</form>
			</div>
			
		</div>	

	</body>

</html>


