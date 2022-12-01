<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/authentification.css" />
		<link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
		<script src="../view/public/javascript/mdp_reset.js"></script>
		<title>Réinitialiser mon mot de passe</title>
	</head>

	<body>
							
		<div class="conteneur principal">

			<div class="langue">
				<form>
					<select onchange="location.href=this.value">
						<option value="../controller/controller_reset_mdp_fr.php">Français</option>
						<option value="../controller/controller_reset_mdp_en.php">English</option>
					</select>
				</form>
			</div>			

			<div class="authentification">
				<h1>Réinitialiser mon mot de passe</h1>

				<p class="paragraphe">
					Pour réinitialiser votre mot de passe, veuillez renseigner remplir les champs ci-dessous :
				</p>

				<form name="resetPassword" method="post" action="" onsubmit="return resetMdp('francais')">
                    <label>Votre email * :</label><br/>
					<input onkeyup="erreurEmail('francais')" id="email" type="email" name="email" class="formulaire" required/>
						<br/>
                    <label>Votre nouveau mot de passe * :</label><br/>
					<input onkeyup="erreurPassword('francais')" id="password" type="password" name="mdp1" class="formulaire" required/>
						<br/>
                    <label>Entrez à nouveau le mot de passe * :</label><br/>
					<input onkeyup="erreurPassword('francais')" id="passwordbis" type="password" name="mdp2" class="formulaire" required/>
                    </br>
                     <span class="error" id="error_email"></span>
					<span class="error" id="error_mdp"></span>
					<span class="error" id="error_mdpbis"></span>
					</br>
					<input type="submit" name ="submit" value="Réinitialiser mon mot de passe" class="bouton" /></br>
					<input type="button" value="Authentification" onclick="self.location.href='../controller/controller_authentification_fr.php'" />
							
				</form>
			</div>
			
		</div>	

	</body>

</html>
