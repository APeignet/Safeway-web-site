<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/authentification.css" />
		<link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
		<script src="../view/public/javascript/mdp_reset.js"></script>
		<title>Reset your password</title>
	</head>

	<body>
							
		<div class="conteneur principal">

			<div class="langue">
				<form>
					<select onchange="location.href=this.value">
						<option value="../controller/controller_reset_mdp_en.php">English</option>
						<option value="../controller/controller_reset_mdp_fr.php">Français</option>
					</select>
				</form>
			</div>			

			<div class="authentification">
				<h1>Reset my password</h1>

				<p class="paragraphe">
					To reset your password, please fill out the following fields :
				</p>

				<form name="resetPassword" method="post" action="" onsubmit="return resetMdp('anglais')">
                    <label>Your email * :</label><br/>
					<input onkeyup="erreurEmail('anglais')" id="email" type="email" name="email" class="formulaire" required/>
						<br/>
                    <label>Your new password * :</label><br/>
					<input onkeyup="erreurPassword('anglais')" id="password" type="password" name="password" class="formulaire" required/>
						<br/>
                    <label>Confirm your new password * :</label><br/>
					<input onkeyup="erreurPassword('anglais')" id="passwordbis" type="password" name="passwordbis" class="formulaire" required/>
                    </br>
					<span class="error" id="error_email"></span>
					<span class="error" id="error_mdp"></span>
					<span class="error" id="error_mdpbis"></span>
					</br>
					<input type="submit" name ="submit" value="Reset my password" class="bouton" /></br>
					<input type="button" value="Authentication" onclick="self.location.href='../controller/controller_authentification_en.php'" />
							
				</form>
			</div>
			
		</div>	

	</body>

</html>