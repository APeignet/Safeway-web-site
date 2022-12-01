<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/authentification.css" />
		<link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
		<title>Modifier mon mot de passe</title>
	</head>

	<body>
							
		<div class="conteneur principal">

			<div class="langue">
				<form>
					<select onchange="location.href=this.value">
						<option value="../controller/controller_modif_mdp_fr.php">Français</option>
						<option value="../controller/controller_modif_mdp_en.php">English</option>
					</select>
				</form>
			</div>			

			<div class="authentification">
				<h1>Modifier mon mot de passe</h1>

				<p class="paragraphe">Bonjour <span><?php  echo $prenom.' '.strtoupper($nom); ?></span> !<br/>
					Pour modifier votre mot de passe, veuillez renseigner remplir les champs ci-dessous :
				</p>

				<form method="post" action="../controller/controller_modif_mdp_fr.php">
					<label>Votre mot de passe actuel * :</label><br/>
					<input type="password" name="mdpOG" class="formulaire" required/>
						<br/>
                    <label>Votre nouveau mot de passe * :</label><br/>
					<input type="password" name="mdp1" class="formulaire" required/>
						<br/>
                    <label>Entrez à nouveau le mot de passe * :</label><br/>
					<input type="password" name="mdp2" class="formulaire" required/>
						<br/>
                    <span class="error"><?php error_reporting(0); echo $msg1_fr; echo $msg2_fr; echo $non_fr; echo "<br>";?></span>
					<span class="ok"><?php error_reporting(0); echo $ok_fr; echo "<br>";?></span>
                     
						<br/>
					<input type="submit" name ="action" value="Modifier" class="bouton" /></br>
												
				</form>
			</div>
			
		</div>	

	</body>

</html>