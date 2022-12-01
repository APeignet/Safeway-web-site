<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/authentification.css" />
		<link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
		<title>Authentication</title>
	</head>

	<body>
							
		<div class="conteneur principal">

			<div class="langue">
				<form>
					<select onchange="location.href=this.value">
						<option value="../controller/controller_authentification_en.php">English</option>
						<option value="../controller/controller_authentification_fr.php">Français</option>
					</select>
				</form>
			</div>
			

			<div class="authentification">
				<h1>Authentication</h1>

				<p class="paragraphe">Welcome to <span>Safeway for Infinite Measures</span>' website !<br/>
						To log in, please fill in your information below :
				</p>

				<form method="post" action="../controller/controller_authentification_en.php">


					<input type="text" name="email" placeholder="Email" class="formulaire" required/>
						<br/>
					<input type="password" name="mdp" placeholder="Password" class="formulaire" required/>
						<br/>
					<a  class="mdpoublie" href="../controller/controller_sendemail_reset_mdp_en.php">Forgotten password ?</a>
						<br/>
					<p> </p><br/>

					<?php  error_reporting(0); if($erreur==1 || $erreur==2) { ?>
						<div id="error">
							<p><span>Email or password incorrect !</span></p><br>
						</div>
					<?php } ?>

					<input type="submit" name="action" value="Log in" class="bouton" /></br>
					<input type="button" value="Visitor access" onclick="self.location.href='../view/accueil_visiteur_en.php'" />
						
				</form>
			</div>
			
		</div>	

	</body>
	
</html>
