<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/faq_edition.css" />
		<link rel="stylesheet" href="../view/public/css/template.css" />
		<link rel="icon" type="image/svg" href="../view/public/images/Logo1001.svg" />
		<script src="../view/public/javascript/faq_edition.js"></script>
		<title>Editer la FAQ</title>
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
              				<a href="../controller/controller_gestion_administrateur_fr.php">
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
              				<option value="../controller/controller_faq_edition_fr.php">Français</option>
              				<option value="../controller/controller_faq_edition_en.php">English</option>
            			</select>
						
						<!-- Titre de la page -->
            			<h3>Edition FAQ</h3>

            			<!-- Affichage profil connecté -->
            			<div id="headerprofile">
              
						<div class="headername">
							<h4><?php echo $prenom; echo ' '; echo strtoupper($nom);?></h4>
							<h5><?php echo ucwords($statut_fr) ;?></h5>							
							<h5><a class="deconnexion" href="../controller/deconnexion.php">Déconnexion</a></h5>
						</div>
						<a href="../controller/controller_profil_fr.php">
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

        		<!-- PAGE TEXTE -->
        		<div class="conteneur_principal">

					<!-- Rectangle blanc (titre page) -->
          			<div  class="pagetitle">
            			<div class="pagetitletext">
              				<h1>Edition FAQ</h1>
              				<h6>Remplissez les formulaires ci-dessous pour ajouter ou modifier des questions et réponses à la page <a href="../controller/controller_faq_fr.php" class="lien_titre">FAQ</a>. </h6>
           				</div>
          			

						<div class="pagetitleimage">
							<svg xmlns="http://www.w3.org/2000/svg" width="563.139" height="240" viewBox="0 0 563.139 340.25">
								<g id="Group_1005" data-name="Group 1005" transform="translate(0.974 0)">
									<path id="Path_3817" data-name="Path 3817" d="M940.286,638.489a36.631,36.631,0,0,1-3.131,6.246c-.345.546-.707,1.084-1.092,1.606H904.078c-.225-.169-.441-.345-.667-.514-1.124-.088-2.24-.2-3.332-.321.112-.1.233-.193.345-.289-.578.048-1.156.1-1.734.12l1.389.169c-.345.281-.7.562-1.06.835h-1.4l.939-1c-.746.024-1.485.04-2.232.024l2.336-.626,2.521-.674c.1.08.2.16.3.241a42.728,42.728,0,0,0,2.955-61.329,57.273,57.273,0,0,1,24.366,36.939,33.366,33.366,0,0,1,.321,11.079c.281-.313.562-.626.835-.947a43.483,43.483,0,0,0,9.185-35.8,57.308,57.308,0,0,1,1.14,44.245Z" transform="translate(-332.066 -306.091)" fill="#e6e6e6"/>
									<circle id="Ellipse_380" data-name="Ellipse 380" cx="22.545" cy="22.545" r="22.545" transform="translate(426.118 18.788)" fill="#2f2e41"/>
									<path id="Path_3818" data-name="Path 3818" d="M646.34,402.776H636.5l-4.683-37.965h14.527Z" transform="translate(-124.565 -71.924)" fill="#ffb8b8"/>
									<path id="Path_3819" data-name="Path 3819" d="M625.955,408.6h18.982v11.952H614A11.952,11.952,0,0,1,625.955,408.6Z" transform="translate(-121.053 -80.556)" fill="#2f2e41"/>
									<path id="Path_3820" data-name="Path 3820" d="M522.511,400.564l-9.5-2.563,5.361-37.875,14.026,3.782Z" transform="translate(-101.142 -71.001)" fill="#ffb8b8"/>
									<path id="Path_3821" data-name="Path 3821" d="M11.952,0H30.934V11.952H0A11.952,11.952,0,0,1,11.952,0Z" transform="translate(394.269 319.345) rotate(15.09)" fill="#2f2e41"/>
									<path id="Path_3822" data-name="Path 3822" d="M734.38,427.7,705.071,593.787l15.03,3.006,47.345-117.235,35.321,116.484,18.036-2.255s-8.267-166.835-34.569-181.114Z" transform="translate(-294.359 -272.516)" fill="#2f2e41"/>
									<path id="Path_3823" data-name="Path 3823" d="M680.789,496.563a8.073,8.073,0,0,0,2.887-12.038l16.164-23.7-14.907-.231-13.064,22.544a8.117,8.117,0,0,0,8.92,13.428Z" transform="translate(-287.249 -281.964)" fill="#ffb8b8"/>
									<path id="Path_3824" data-name="Path 3824" d="M813.709,460.057a8.073,8.073,0,0,0,2.887-12.038l16.164-23.7-14.907-.231-13.064,22.544a8.117,8.117,0,0,0,8.92,13.428Z" transform="translate(-313.454 -274.766)" fill="#ffb8b8"/>
									<circle id="Ellipse_381" data-name="Ellipse 381" cx="19.719" cy="19.719" r="19.719" transform="translate(429.519 28.905)" fill="#ffb8b8"/>
									<path id="Path_3825" data-name="Path 3825" d="M787.057,335.557c-.751-3.006-13.527-2.255-13.527-2.255s-14.386-3.307-14.25-2.894c-12.123-.933-26.911,3.618-29.065,4.308-4.406,1.216-12.826,4.934-18.9,7.67a3.517,3.517,0,0,0-1.775,4.621l18.52,42.282,2.63,27.43,60.872-18.788C776.536,391.92,787.808,338.563,787.057,335.557Z" transform="translate(-295.181 -256.273)" fill="#6c63ff"/>
									<path id="Path_3826" data-name="Path 3826" d="M605.744,99.382l5-1.255,27.318,53.86,1.5,30.812-17.284-13.527V157.249l-18.036-23.3Z" transform="translate(-119.129 -19.346)" fill="#6c63ff"/>
									<path id="Path_3827" data-name="Path 3827" d="M710.418,342.936l-5.785,2.571A2.01,2.01,0,0,0,703.47,347l-11.464,65.454-11.273,33.066,15.03,7.515L713.048,411.7l6.012-30.06Z" transform="translate(-289.56 -258.767)" fill="#6c63ff"/>
									<path id="Path_3828" data-name="Path 3828" d="M727.3,282.74c4-1.314,8.224.746,12.134,2.314a28.416,28.416,0,0,0,12.114,2.416c4.144-.243,8.336-1.994,10.841-5.3s2.947-8.271.466-11.6c-1.633-2.192-4.238-3.442-6.847-4.256-5.574-1.74-11.813-1.8-17.111.655s-9.453,7.64-9.89,13.463" transform="translate(-298.741 -243.413)" fill="#2f2e41"/>
									<path id="Path_3829" data-name="Path 3829" d="M751.54,261.718c-1.344-9.1,3.641-18.551,10.445-21.94s14.787-1.39,20.916,3.658,10.6,12.8,13.924,21.051,5.629,17.077,8.338,25.677c2.407,7.638,5.232,15.28,9.8,21.121s11.218,9.642,17.586,8.037c-5.232,7.035-14.858,5.817-20.83-.2s-9.076-15.423-11.52-24.578-4.57-18.734-9.3-26.321c-8.41-13.5-24.913-17.552-36.7-9.017" transform="translate(-303.477 -238.098)" fill="#2f2e41"/>
									<path id="Path_3830" data-name="Path 3830" d="M547.972,447.117H263.1a8.613,8.613,0,0,1-8.6-8.6V370.642a8.613,8.613,0,0,1,8.6-8.6H547.972a8.613,8.613,0,0,1,8.6,8.6v67.871a8.613,8.613,0,0,1-8.6,8.6ZM263.1,363.951a6.7,6.7,0,0,0-6.692,6.692v67.871a6.7,6.7,0,0,0,6.692,6.692H547.972a6.7,6.7,0,0,0,6.692-6.692V370.642a6.7,6.7,0,0,0-6.692-6.692Z" transform="translate(-205.526 -262.534)" fill="#3f3d56"/>
									<path id="Path_3831" data-name="Path 3831" d="M539.393,449.68H282.246a.956.956,0,1,1,0-1.912H539.393a.956.956,0,0,1,0,1.912Z" transform="translate(-210.808 -279.436)" fill="#e6e6e6"/>
									<path id="Path_3832" data-name="Path 3832" d="M311.017,410.857H289.986a.956.956,0,1,0,0,1.912h9.559v16.9a4.814,4.814,0,0,0,4.45,4.866c.06,0,.121,0,.184,0a4.626,4.626,0,0,0,3.778-2.082.956.956,0,1,0-1.529-1.146,2.713,2.713,0,0,1-2.352,1.314,2.886,2.886,0,0,1-2.619-2.956v-16.9h9.559a.956.956,0,1,0,0-1.912Z" transform="translate(-212.334 -272.158)" fill="#6c63ff"/>
									<circle id="Ellipse_382" data-name="Ellipse 382" cx="7.647" cy="7.647" r="7.647" transform="translate(162.73 206.57)" fill="#e6e6e6"/>
									<circle id="Ellipse_383" data-name="Ellipse 383" cx="7.647" cy="7.647" r="7.647" transform="translate(192.364 206.57)" fill="#6c63ff"/>
									<circle id="Ellipse_384" data-name="Ellipse 384" cx="7.647" cy="7.647" r="7.647" transform="translate(221.998 206.57)" fill="#e6e6e6"/>
									<path id="Path_3833" data-name="Path 3833" d="M321.689,438.88a1.2,1.2,0,1,0-1.163-1.2,1.2,1.2,0,0,0,1.163,1.2Z" transform="translate(-218.544 -277.208)" fill="#3f3d56"/>
									<path id="Path_3834" data-name="Path 3834" d="M331.215,438.88a1.2,1.2,0,1,0-1.163-1.2A1.2,1.2,0,0,0,331.215,438.88Z" transform="translate(-220.422 -277.208)" fill="#3f3d56"/>
									<path id="Path_3835" data-name="Path 3835" d="M340.74,438.88a1.2,1.2,0,1,0-1.163-1.2,1.2,1.2,0,0,0,1.163,1.2Z" transform="translate(-222.3 -277.208)" fill="#3f3d56"/>
								</g>
							</svg>
						</div>
					</div>

					<div class="conteneur_double">
						<div class="conteneur_left">
							<div class="sous_conteneur_left">
								<h3 class="titre">Ajouter une FAQ</h3>
								<form name="ajout_faq" method="post" action="../controller/controller_faq_edition_fr.php" onsubmit="return ajoutFaq('francais')">
									<p>
										<input type="number" name="numero_ajout"  placeholder="N°question*" class="formulaire" min="1" required/>
										</br>
										<label class="label_faq">* Si une question possède déjà ce numéro, elle aura comme numéro n+1.</label>
									</p>
									<p>							
										<textarea onkeyup="erreurQuestionAjoutFaq('francais')" id="question_ajout" name="question_ajout" class="formulaire" placeholder="Ecrire la QUESTION ici." rows="2" cols="60" required></textarea>
									</p>
									<p>						
										<textarea onkeyup="erreurReponseAjoutFaq('francais')" id="reponse_ajout" name="reponse_ajout" class="formulaire" placeholder="Ecrire la REPONSE ici." rows="2" cols="60" required></textarea>
										</br>
										<span class="error" id="error_question_ajout"></span>
										<span class="error" id="error_reponse_ajout"></span>
									</p>
									<p>	
										<input type="submit" name="ajout" value="Ajouter" class="bouton" />
									</p>
								</form>
							</div>
						</div>
						<div class="conteneur_right">
							<div class="sous_conteneur_right">
								<h3 class="titre">Modifier une FAQ</h3>
								<form  name="edition_faq" method="post" action="../controller/controller_faq_edition_fr.php" onsubmit="return editionFaq('francais')">
									<p>
										<input type="number" name="numero_edition"  placeholder="N°question actuel" class="formulaire" min="1" required/>
										<input type="number" name="numero_editionbis"  placeholder="Nouveau n°question*" class="formulaire" min="1" required/>
										</br>
										<label class="label_faq">* Si une question possède déjà ce numéro, elle aura comme numéro n+1.</label>
									</p>
									<p>							
										<textarea onkeyup="erreurQuestionEditionFaq('francais')" id="question_edition" name="question_edition" class="formulaire" placeholder="Ecrire la QUESTION ici." rows="2" cols="60" required></textarea>
									</p>
									<p>						
										<textarea onkeyup="erreurReponseEditionFaq('francais')" id="reponse_edition" name="reponse_edition" class="formulaire" placeholder="Ecrire la REPONSE ici." rows="2" cols="60" required></textarea>
										</br>
										<span class="error" id="error_question_edition"></span>
										<span class="error" id="error_reponse_edition"></span>
										
									</p>
									<p>	
										<input type="submit" name="edition" value="Modifier" class="bouton" />
									</p>
								</form>
							</div>
						</div>
					</div>

					<div class="conteneur_doublebis">
						<div class="ancrefaq">
							<a href=#sous_conteneur_leftbis class="lienfaq">Ajouter une FAQ</a>
							<a href=#sous_conteneur_rightbis class="lienfaq">Modifier une FAQ</a>
						</div>
						<div class="conteneur_leftbis">
							<div id="sous_conteneur_leftbis">
								<h3 class="titre">Ajouter une FAQ</h3>
								<form name="ajout_faq2" method="post" action="../controller/controller_faq_edition_fr.php" onsubmit="return ajoutFaq('francais')">
									<p>
										<input type="number" name="numero_ajout2"  placeholder="N°question*" class="formulaire" min="1" required/>
										</br>
										<label class="label_faq">* Si une question possède déjà ce numéro, elle aura comme numéro n+1.</label>
									</p>
									<p>							
										<textarea onkeyup="erreurQuestionAjoutFaq('francais')" id="question_ajout2" name="question_ajout2" class="formulaire" placeholder="Ecrire la QUESTION ici." rows="2" cols="60" required></textarea>
									</p>
									<p>						
										<textarea onkeyup="erreurReponseAjoutFaq('francais')" id="reponse_ajout2" name="reponse_ajout2" class="formulaire" placeholder="Ecrire la REPONSE ici." rows="2" cols="60" required></textarea>
										</br>
										<span class="error" id="error_question_ajout2"></span>
										<span class="error" id="error_reponse_ajout2"></span>
										<span id="modif_faq"></span>
									</p>
									<p>	
										<input type="submit" name="ajout2" value="Ajouter" class="bouton" />
									</p>
								</form>
							</div>
						</div>
						<div class="conteneur_rightbis">
							<div id="sous_conteneur_rightbis">
								<h3 class="titre">Modifier une FAQ</h3>
								<form  name="edition_faq2" method="post" action="../controller/controller_faq_edition_fr.php" onsubmit="return editionFaq('francais')">
									<p>
										<input type="number" name="numero_edition2"  placeholder="N°question actuel" class="formulaire" min="1" required/>
										<input type="number" name="numero_editionbis2"  placeholder="Nouveau n°question*" class="formulaire" min="1" required/>
										</br>
										<label class="label_faq">* Si une question possède déjà ce numéro, elle aura comme numéro n+1.</label>
									</p>
									<p>							
										<textarea onkeyup="erreurQuestionEditionFaq('francais')" id="question_edition2" name="question_edition2" class="formulaire" placeholder="Ecrire la QUESTION ici." rows="2" cols="60" required></textarea>
									</p>
									<p>						
										<textarea onkeyup="erreurReponseEditionFaq('francais')" id="reponse_edition2" name="reponse_edition2" class="formulaire" placeholder="Ecrire la REPONSE ici." rows="2" cols="60" required></textarea>
										</br>
										<span class="error" id="error_question_edition2"></span>
										<span class="error" id="error_reponse_edition2"></span>
										<span id="modif2_faq"></span>
									</p>
									<p>	
										<input type="submit" name="edition2" value="Modifier" class="bouton" />
									</p>
								</form>
							</div>
						</div>
					</div>

        		</div>

      		</div>

    	</div>

	</body>
</html>
