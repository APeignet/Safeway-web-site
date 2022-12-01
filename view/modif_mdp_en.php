<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/authentification.css" />
		<link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
		<title>Change my password</title>
	</head>

	<body>	
    						
		<div class="conteneur principal">

			<div class="langue">
				<form>
					<select onchange="location.href=this.value">
						<option value="../controller/controller_modif_mdp_en.php">English</option>
						<option value="../controller/controller_modif_mdp_fr.php">Français</option>
					</select>
				</form>
			</div>
			

			<div class="authentification">
				<h1>Change my password</h1>

				<p class="paragraphe">Hello <span><?php  echo $prenom.' '.strtoupper($nom); ?></span> !<br/>
					To modify your password, fill out the two following fields:
				</p>

				<form method="post" action="../controller/controller_modif_mdp_en.php">
					<label>Your current password * :</label><br/>
					<input type="password" name="mdpOG" class="formulaire" required/>
						<br/>
                    <label>Your new password * :</label><br/>
					<input type="password" name="mdp1" class="formulaire" required/>
						<br/>
                        <label>Confirm your new password * :</label><br/>
					<input type="password" name="mdp2" class="formulaire" required/>
						<br/>

                    <span class = "error"><?php error_reporting(0); echo $msg1_en; echo $msg2_en; echo $non_en; echo "<br>"; ?></span>
					<span class = "ok"><?php error_reporting(0); echo $ok_en; echo "<br>"; ?></span>
                     
					    <br/>

					<input type="submit" name ="action" value="Modify" class="bouton" /></br>
							
				</form>
			</div>
			
		</div>	

	</body>

</html>