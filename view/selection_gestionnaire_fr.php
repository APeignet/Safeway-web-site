<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/template.css" />
		<link rel="stylesheet" href="../view/public/css/profil_sel.css" />
		<link rel="icon" type="image/svg" href="../view/public/images/Logo1001.svg" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
		<title>Résultats</title>
	</head>

	<body>

		<!-- Toute la page web -->
		<div id="pages">

  			<!-- MENU DE NAVIGATION (partie gauche) -->

			<label class="hamburger" for="toggle">&#9776;</label>
			<input type="checkbox" id="toggle"/>
			<div id="menu">

  				<!-- Logo accueil -->
				<a href ="../controller/controller_accueil_fr.php" style="text-decoration: none">
					<svg xmlns="http://www.w3.org/2000/svg" width="206.78" height="40.978" viewBox="0 0 215.78 40.978" class="menulogo">
						<g id="Group_373" data-name="Group 373" transform="translate(30.839 -4.64)">
							<text id="SAFECARE" transform="translate(97.941 34.136)" fill="#fff" font-size="27" font-family="Montserrat-Bold, Montserrat" font-weight="700" letter-spacing="0.09em"><tspan x="-77.868" y="0">SAFECARE</tspan></text>
							<g id="Group_635" data-name="Group 635" transform="translate(-262.134 -173.9)">
								<path id="Path_1139" data-name="Path 1139" d="M716.154,691.468l-1.305,2.379h12.894l-1.3-2.379Z" transform="translate(-471.368 -485.48)" fill="#fff"/>
								<path id="Path_1141" data-name="Path 1141" d="M720.8,721.36a25.827,25.827,0,0,0,6.722-3.553H714.076A25.828,25.828,0,0,0,720.8,721.36Z" transform="translate(-470.888 -501.842)" fill="#fff"/>
								<path id="Path_1142" data-name="Path 1142" d="M708.839,703.826l-1.688,2.993h18.727l-1.688-2.993Z" transform="translate(-466.586 -493.157)" fill="#fff"/>
								<path id="heartlign" d="M699.955,654.385h7.673l3.793-7.819,2.451,12.546,2.393-4.727h7.119" transform="translate(-462.116 -457.589)" fill="none" stroke="#fff" stroke-width="2"/>
								<path id="Path_2709" data-name="Path 2709" d="M690.185,641.572h0l0,1.82a2.987,2.987,0,0,0,2.533,2.993l-2.986,5.52a24.58,24.58,0,0,1-5.029-9.934c-2.885-11.87-1.836-18.3-1.836-18.3s2.23-.656,8.592-2.3c6.734-1.736,9.836-2.361,9.836-2.361s3.1.625,9.838,2.361c6.362,1.64,8.591,2.3,8.591,2.3s1.049,6.427-1.836,18.3a24.556,24.556,0,0,1-5.025,9.929l-3.028-5.515a3.046,3.046,0,0,0,2.533-2.993V631.314a6.683,6.683,0,0,0-6.677-6.678h-8.751a6.81,6.81,0,0,0-5.53,2.882,6.645,6.645,0,0,0-1.225,3.873v3.8l0,6.377" transform="translate(-451.386 -440.477)" fill="#fff"/>
							</g>
            			</g>
          			</svg>
        		</a>

				<!-- Liens de navigation -->
        <div class="conteneur-menu">

        <nav>

<div class="element_menu">
      <a href="../controller/controller_accueil_fr.php">
        <div class="menuicon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 26.333">
                <g id="Icon_feather-home" data-name="Icon feather-home" transform="translate(-3 -1.5)">
                      <path id="Path_2720" data-name="Path 2720" d="M4.5,11.167,15,3l10.5,8.167V24a2.333,2.333,0,0,1-2.333,2.333H6.833A2.333,2.333,0,0,1,4.5,24Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      <path id="Path_2721" data-name="Path 2721" d="M13.5,29.667V18h7V29.667" transform="translate(-2 -3.333)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                </g>
              </svg>
        </div>Accueil
     </a>
</div>

<div class="element_menu">
      <a href="../controller/controller_gestion_gestionnaire_fr.php">
        <div class="menuicon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 23 25.5">
                  <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(-4.5 -3)">
                    <path id="Path_2722" data-name="Path 2722" d="M26,30V27.5a5,5,0,0,0-5-5H11a5,5,0,0,0-5,5V30" transform="translate(0 -3)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    <path id="Path_2723" data-name="Path 2723" d="M22,9.5a5,5,0,1,1-5-5A5,5,0,0,1,22,9.5Z" transform="translate(-1)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                  </g>
              </svg>
        </div>Gestion
      </a>
</div>

<div class="element_menu">
      <a href="../controller/controller_sendemail_contact_fr.php">
        <div class="menuicon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path id="Icon_feather-message-circle" data-name="Icon feather-message-circle" d="M25.5,14.417a9.777,9.777,0,0,1-1.05,4.433,9.917,9.917,0,0,1-8.867,5.483,9.777,9.777,0,0,1-4.433-1.05L4.5,25.5l2.217-6.65a9.777,9.777,0,0,1-1.05-4.433A9.917,9.917,0,0,1,11.15,5.55,9.777,9.777,0,0,1,15.583,4.5h.583A9.893,9.893,0,0,1,25.5,13.833Z" transform="translate(-3 -3)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
              </svg>
        </div>Contact
      </a>
</div>

<div class="element_menu">
      <a href="../controller/controller_faq_fr.php">
        <div class="menuicon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 16 31">
                <text id="_" data-name="?" transform="translate(8 25)" fill="#fff" font-size="26" font-family="HelveticaRounded-Bold, Helvetica Rounded" font-weight="700"><tspan x="-7.462" y="0">?</tspan></text>
              </svg>
        </div>FAQ
      </a>
</div>

<div class="element_menu">
      <a href="../controller/controller_accueil_fr.php#homepage2">
        <div class="menuicon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 26 22.008">
                <g id="Icon_feather-users" data-name="Icon feather-users" transform="translate(0 -2.811)">
                      <path id="Path_2724" data-name="Path 2724" d="M18.227,28.773V26.682A4.182,4.182,0,0,0,14.045,22.5H5.682A4.182,4.182,0,0,0,1.5,26.682v2.091" transform="translate(0 -5.455)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      <path id="Path_2725" data-name="Path 2725" d="M15.864,8.682A4.182,4.182,0,1,1,11.682,4.5,4.182,4.182,0,0,1,15.864,8.682Z" transform="translate(-1.818)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      <path id="Path_2726" data-name="Path 2726" d="M33.136,28.832V26.741A4.182,4.182,0,0,0,30,22.7" transform="translate(-8.636 -5.514)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      <path id="Path_2727" data-name="Path 2727" d="M24,4.695a4.182,4.182,0,0,1,0,8.1" transform="translate(-6.818 -0.059)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                </g>
              </svg>
        </div>A propos
      </a>
</div>

</nav>

        </div>

        <!-- Copyright -->
        <div class="bas-menu">
            <h6>Infinite Measures © 2021</h6>
            <a href="../controller/controller_cgu_fr.php">CGU</a>
        </div>

        </div>

  			<!-- PAGE PRINCIPALE (partie droite) -->

  			<!-- boîte page principale -->
  		<div id="page_principale">

        		<!-- HEADER -->
    		<header id="menu_haut">

    				<!-- flexbox menu du haut -->
	    		<div id="conteneur_menuhaut">

	            			<!-- sélection de la langue -->
	            <select onchange="location.href=this.value">
								<form>
	              	<option value="../controller/controller_selection_gestionnaire_fr.php?id=<?= $idUtilisateur ?>">Français</option>
	              	<option value="../controller/controller_selection_gestionnaire_en.php?id=<?= $idUtilisateur ?>">English</option>
								</form>
	            </select>

							<!-- Titre de la page -->
	            <h3>Résultats</h3>

	            			<!-- Affichage profil connecté -->
              <div id="headerprofile">
              
                    <div class="headername">
                      <h4><?php echo $prenom.' '.strtoupper($nom);?></h4>
                      <h5><?php echo ucwords($statut_fr) ;?></h5>
                      <h5> <a class= "deconnexion" href="../controller/deconnexion.php">Déconnexion</a></h5>
                    </div>
                  <div >
                  
                  <a href='../controller/controller_profil_fr.php'>
              				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 81 81">
               					<defs>
                  					<pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 200 200">
                    					<image width="200" height="200" xlink:href='<?php echo '../view/public/images/'.$photo."'"?>'/>
                  					</pattern>
                				</defs>
                				<rect id="Rectangle_480" data-name="Rectangle 480" width="81" height="81" rx="40.5" fill="url(#pattern)"/>
              				</svg>
							    </a>	
	    			</div>
    		</div>
        </header>
        <div class="conteneur_principal">

          <div class="pagetitle">
            <div class="pagetitletext">
              <h1><span style="color: #5F5DFE"><?php echo $prenomD;?> <?php echo $nomD ?></span></h1>
              <h6>Conducteur n°<?php echo $idUtilisateur; ?></h6>
            </div>
            <div class="photodriver">
                        <img src='<?php echo '../view/public/images/'.$photoD."'"?>' >
            </div>
            
            <form action='../model/model_info_conducteur.php'  method='post'>
                      <input type='button' class='bouton' 
                      onclick="window.location.href='../controller/controller_gestion_gestionnaire_fr.php?id=<?= $idUtilisateurD ?>'" 
                      value='Supprimer ce profil'/> 
                      </form>
                        
          </div>
          
          
            <div class="result-container">
              <h4>Derniers Résultats</h4>
              <div class="result">
                <div class="result-element">
                  <div class="iconresult">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
                      <g id="Group_382" data-name="Group 382" transform="translate(-50.13 -530)">
                        <g id="Group_378" data-name="Group 378">
                          <rect id="Rectangle_81" data-name="Rectangle 81" width="72" height="72" rx="21" transform="translate(50.13 530)" fill="#5F5DFE"/>
                        </g>
                        <path id="Icon_metro-checkmark" data-name="Icon metro-checkmark" d="M29.946,5.784,14.737,20.992l-7.1-7.1L2.571,18.965,14.737,31.131,35.015,10.854Z" transform="translate(67.761 548.544)" fill="#fff"/>
                      </g>
                    </svg>
                  </div>
                  <h4>Score Total</h4>
                  <h3><?php echo $Score;?>/4 </h3>
                  
                </div>
                <div class="result-element">
                  <div class="iconresult">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
                      <g id="Group_379" data-name="Group 379" transform="translate(-50.13 -530)">
                        <rect id="Rectangle_81" data-name="Rectangle 81" width="72" height="72" rx="21" transform="translate(50.13 530)" fill="#5F5DFE"/>
                        <path id="Icon_metro-heart" data-name="Icon metro-heart" d="M28.487,3.856c-3.694,0-6.872,2.987-8.345,6.106C18.669,6.843,15.489,3.856,11.8,3.856a9.2,9.2,0,0,0-9.225,9.17c0,10.3,10.45,13,17.571,23.176,6.732-10.117,17.57-13.208,17.57-23.176A9.2,9.2,0,0,0,28.487,3.856Z" transform="translate(65.988 547.681)" fill="#fff"/>
                      </g>
                    </svg>
                  </div>
                  <h5>Coeur</h5>
                  <h3><?php echo $valeurC;?></h3>
                </div>
                <div class="result-element">
                  <div class="iconresult">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
                      <g id="Group_380" data-name="Group 380" transform="translate(-50.13 -530)">
                        <rect id="Rectangle_81" data-name="Rectangle 81" width="72" height="72" rx="21" transform="translate(50.13 530)" fill="#5F5DFE"/>
                        <path id="Icon_awesome-temperature-low" data-name="Icon awesome-temperature-low" d="M18,7.875a7.875,7.875,0,0,0-15.75,0V19.582a10.107,10.107,0,1,0,18,6.293A10.034,10.034,0,0,0,18,19.582ZM10.125,31.5A5.616,5.616,0,0,1,6.75,21.389V7.875a3.375,3.375,0,0,1,6.75,0V21.389A5.616,5.616,0,0,1,10.125,31.5Zm1.125-8.8V21.375a1.125,1.125,0,0,0-2.25,0V22.7a3.375,3.375,0,1,0,2.25,0Z" transform="translate(76.13 549)" fill="#fff"/>
                      </g>
                    </svg>
                  </div>
                  <h5>Température</h5>
                  <h3><?php echo $valeurT;?></h3>
                </div>
                <div class="result-element">
                  <div class="iconresult">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
                      <g id="Group_381" data-name="Group 381" transform="translate(-50.13 -530)">
                        <rect id="Rectangle_81" data-name="Rectangle 81" width="72" height="72" rx="21" transform="translate(50.13 530)" fill="#5F5DFE"/>
                        <path id="Icon_material-visibility" data-name="Icon material-visibility" d="M18,6.75A17.74,17.74,0,0,0,1.5,18a17.725,17.725,0,0,0,33,0A17.74,17.74,0,0,0,18,6.75ZM18,25.5A7.5,7.5,0,1,1,25.5,18,7.5,7.5,0,0,1,18,25.5Zm0-12A4.5,4.5,0,1,0,22.5,18,4.494,4.494,0,0,0,18,13.5Z" transform="translate(68.13 548)" fill="#fff"/>
                      </g>
                    </svg>
                  </div>
                  <h5>Vision</h5>
                  <h3><?php echo $valeurV;?></h3>
                </div>
                <div class="result-element">
                  <div class="iconresult">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
                      <g id="Group_383" data-name="Group 383" transform="translate(-50.13 -530)">
                        <rect id="Rectangle_81" data-name="Rectangle 81" width="72" height="72" rx="21" transform="translate(50.13 530)" fill="#5F5DFE"/>
                        <path id="Icon_material-timer" data-name="Icon material-timer" d="M23.7,1.5H14.1V4.7h9.6ZM17.3,22.295h3.2V12.7H17.3ZM30.142,11.722,32.413,9.45a17.673,17.673,0,0,0-2.255-2.255L27.886,9.466a14.4,14.4,0,1,0,2.255,2.255ZM18.9,31.893a11.2,11.2,0,1,1,11.2-11.2A11.189,11.189,0,0,1,18.9,31.893Z" transform="translate(67.233 547.704)" fill="#fff"/>
                      </g>
                    </svg>
                  </div>
                  <h5>Réflexes</h5>
                  <h3><?php echo $valeurR;?></h3>
                </div>
                
              </div>
            </div>
            
          
          
          <div class="table">
            <h4>Historique des Résultats</h4>
            
          

            <table class="content-table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Note</th>
                  <th>Coeur</th>
                  <th>Temp</th>
                  <th>Vision</th>
                  <th>Réflexes</th>
                </tr>
              </thead>
              
              <tbody>
                
                <td><?php foreach ($dates as $date) : ?> 	
                  <h3> <?= $date['dateResult'] ?> <br/></h3>  
                  <?php endforeach; ?></td>

                  <td><?php foreach ($notes as $note) : ?> 	
                  <h3> <?= $note ['number']?> /4<br/></h3>  
                  <?php endforeach; ?></td>

                  <td><?php foreach ($resultsC as $resultC) : ?> 	
                  <h3> <?= $resultC['valeur' ] ?> <br/></h3>  
                  <?php endforeach; ?></td>

                  <td><?php foreach ($resultsT as $resultT) : ?>
                  <h3> <?= $resultT['valeur'] ?> <br/></h3>  
                  <?php endforeach; ?></td>

                  <td><?php foreach ($resultsV as $resultV) : ?> 	
                  <h3> <?= $resultV['valeur'] ?> <br/></h3>  
                  <?php endforeach; ?></td>

                  <td><?php foreach ($resultsR as $resultR) : ?>
                  <h3> <?= $resultR['valeur'] ?> <br/></h3>  
                  <?php endforeach; ?></td>
                  
                
                
                <table class="table table-bordered">

              </tbody>
              
            </table>
          </div>

        </div>
      </div>
  	</div>
		
	</body>
</html>