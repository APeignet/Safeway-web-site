<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/inscription.css" />
		<link rel="stylesheet" href="../view/public/css/template.css" />
		<link rel="icon" type="image/svg" href="../view/public/images/Logo1001.svg" />
		<script src="../view/public/javascript/inscription.js"></script>
		<title>Ajouter un utilisateur</title>
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
              				<option value="../controller/controller_inscription_fr.php">Français</option>
              				<option value="../controller/controller_inscription_en.php">English</option>
            			</select>
						
						<!-- Titre de la page -->
            			<h3>Inscriptions</h3>

            			<!-- Affichage profil connecté -->
            			<div id="headerprofile">
              
							<div class="headername">
							<h4><?php echo $prenom; echo ' '; echo strtoupper($nom);?></h4>
							<h5><?php echo ucwords($statut_fr) ;?></h5>
							<h5> <a class="deconnexion" href="../controller/deconnexion.php">Déconnexion</a></h5>
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

        		<!-- PAGE TEXTE -->
        		<div class="conteneur_principal_double">

					<!-- Partie gauche : image -->
          			<div  class="page_left">
						<svg xmlns="http://www.w3.org/2000/svg" width="691.336" height="360" viewBox="0 0 691.336 489.071">
							<g id="Group_1008" data-name="Group 1008" transform="translate(30)">
								<path id="Path_3868" data-name="Path 3868" d="M942.378,365.123c-9.537,33.084-37.382,56.242-66.429,75.915q-6.083,4.121-12.171,8.053c-.027.012-.056.038-.084.05-.2.125-.391.251-.573.377-.838.54-1.675,1.08-2.506,1.614l.456.2s.448.238-.042.038c-.146-.061-.3-.116-.444-.177-16.874-6.806-34.048-14.113-46.979-26.862-13.414-13.239-21.254-34-13.99-51.4a33.208,33.208,0,0,1,3.6-6.454c.589-.843,1.224-1.65,1.884-2.442a35.593,35.593,0,0,1,61.133,10.816c2.134-19.869-14.249-36.512-30.016-48.792s-33.7-25.641-36.746-45.4c-1.7-10.993,2.12-21.647,9.084-30.2.216-.26.431-.519.653-.772a51.945,51.945,0,0,1,33.387-17.911c24.187-2.514,47.68,10.289,65.252,27.105C936.123,285.948,953.219,327.507,942.378,365.123Z" transform="translate(-254.332 -205.485)" fill="#f2f2f2"/>
								<path id="Path_3869" data-name="Path 3869" d="M896.916,321.85A88.3,88.3,0,0,1,907.5,345.183a76.674,76.674,0,0,1,2.65,22.646c-.435,15.7-5.266,31.043-12.867,44.708a141.386,141.386,0,0,1-21.329,28.5q-6.083,4.121-12.171,8.053c-.027.012-.056.038-.084.05-.2.125-.391.251-.573.377-.838.54-1.675,1.08-2.506,1.614,0,0,.9.443.414.243-.146-.061-.3-.116-.444-.177a77.468,77.468,0,0,0-57.374-84.712c.589-.843,1.224-1.65,1.884-2.442a81.726,81.726,0,0,1,13.49,5.1A80.081,80.081,0,0,1,854.8,404.058a81.874,81.874,0,0,1,8.914,44.928c.693-.628,1.387-1.27,2.061-1.906,12.823-11.955,24.211-25.677,31.919-41.513a91.393,91.393,0,0,0,9.57-43.241c-.629-16.334-7.137-31.464-16.56-44.635-10.094-14.1-22.749-26.568-36.263-37.372a217.376,217.376,0,0,0-45.1-27.844,1.563,1.563,0,0,1-.786-2.006,1.329,1.329,0,0,1,.653-.772,1.157,1.157,0,0,1,1.005.043c1.989.916,3.965,1.844,5.925,2.813a219.842,219.842,0,0,1,45.421,29.962C874.924,293.913,887.511,306.936,896.916,321.85Z" transform="translate(-254.332 -205.485)" fill="#fff"/>
								<circle id="Ellipse_408" data-name="Ellipse 408" cx="35.371" cy="35.371" r="35.371" transform="translate(497.04 278.327)" fill="#2f2e41"/>
								<ellipse id="Ellipse_409" data-name="Ellipse 409" cx="14.636" cy="10.977" rx="14.636" ry="10.977" transform="translate(478.932 289.451) rotate(-45)" fill="#2f2e41"/>
								<ellipse id="Ellipse_410" data-name="Ellipse 410" cx="10.977" cy="14.636" rx="10.977" ry="14.636" transform="translate(538.048 281.994) rotate(-66.869)" fill="#2f2e41"/>
								<path id="Path_3870" data-name="Path 3870" d="M861.652,671.055a131.814,131.814,0,0,1-19.2,11.07l-.99-1.75-9.48-16.64-.83-1.46-4.85-8.51-.01-.01-15.31-26.9-7.87-13.81,23.37-16.39,9.09,19.22,4.93,10.44,20.29,42.91Z" transform="translate(-254.332 -205.485)" fill="#a0616a"/>
								<path id="Path_3871" data-name="Path 3871" d="M840.772,606.155l-2.93-4.59-12.96-20.33a16.356,16.356,0,0,0-29.9,13.27l8.01,28.54a5.875,5.875,0,0,0,7.99,3.81c.03-.01.05-.02.08-.03l24.51-10.95,2.64-1.18a5.9,5.9,0,0,0,2.56-8.54Z" transform="translate(-254.332 -205.485)" fill="#6c63ff"/>
								<path id="Path_3872" data-name="Path 3872" d="M770.352,606.795l-6.82,15.4-1.48,3.35-25.25,57.04-.81,1.83a131.1,131.1,0,0,1-19.68-10.24l.68-1.92L737.6,614.1l5.06-14.28,11.08,2.79Z" transform="translate(-254.332 -205.485)" fill="#a0616a"/>
								<circle id="Ellipse_411" data-name="Ellipse 411" cx="30.019" cy="30.019" r="30.019" transform="translate(492.792 334.087) rotate(-61.337)" fill="#a0616a"/>
								<path id="Path_3873" data-name="Path 3873" d="M840.192,613.245a66.8,66.8,0,0,0-2.35-11.68,65.1,65.1,0,0,0-18.81-29.84,17.788,17.788,0,0,0-11.9-4.55h-42.29a17.783,17.783,0,0,0-15.93,25.78l4.83,9.66,9.79,19.58,2.35,4.69,10.47,20.95.83,1.66,53.15,14.62.23-.51c.2-.45.4-.89.59-1.33.29-.67.58-1.32.85-1.98,5.36-12.71,7.89-24.02,8.5-33.98a75.649,75.649,0,0,0-.31-13.07Z" transform="translate(-254.332 -205.485)" fill="#6c63ff"/>
								<path id="Path_3874" data-name="Path 3874" d="M772.512,572.655a16.332,16.332,0,0,0-21.69,7.8l-3.77,5.69-12.6,19.02a5.893,5.893,0,0,0,2.41,8.59l.74.35,24.45,11.44,1.74.81a5.66,5.66,0,0,0,2.09.53,5.762,5.762,0,0,0,2.82-.49,5.878,5.878,0,0,0,3.23-3.68l8.46-28.31A16.372,16.372,0,0,0,772.512,572.655Z" transform="translate(-254.332 -205.485)" fill="#6c63ff"/>
								<path id="Path_3875" data-name="Path 3875" d="M832,660.295a5.46,5.46,0,0,0-.85-1.73,22.882,22.882,0,0,0-4.85-4.8l-.01-.01c-6.43-4.87-19.23-10.56-43.92-10.71h-.04a5.9,5.9,0,0,0-5.37,3.45l-.61,1.34-3.93,8.64a4.507,4.507,0,0,1-1.53,1.85c-3.55,2.51-14.85,11.61-20.69,28.99-.21.62-.41,1.25-.6,1.9a132.1,132.1,0,0,0,76.37-.69l.55-2.27,5.46-22.52.09-.37a5.911,5.911,0,0,0-.07-3.07Z" transform="translate(-254.332 -205.485)" fill="#2f2e41"/>
								<path id="Path_3876" data-name="Path 3876" d="M756.322,508.745a40.829,40.829,0,0,0,23.333,7.211,25.02,25.02,0,0,1-9.917,4.08,82.328,82.328,0,0,0,33.629.189,21.765,21.765,0,0,0,7.04-2.418A8.909,8.909,0,0,0,814.752,512c.738-4.215-2.547-8.044-5.96-10.625a43.96,43.96,0,0,0-36.941-7.382c-4.127,1.067-8.26,2.869-10.941,6.183s-3.474,8.423-.921,11.835Z" transform="translate(-254.332 -205.485)" fill="#2f2e41"/>
								<rect id="Rectangle_583" data-name="Rectangle 583" width="542.316" height="2.174" transform="translate(1.086 30.479)" fill="#3f3d56"/>
								<circle id="Ellipse_412" data-name="Ellipse 412" cx="6.521" cy="6.521" r="6.521" transform="translate(13.041 9.787)" fill="#3f3d56"/>
								<circle id="Ellipse_413" data-name="Ellipse 413" cx="6.521" cy="6.521" r="6.521" transform="translate(31.788 9.787)" fill="#3f3d56"/>
								<circle id="Ellipse_414" data-name="Ellipse 414" cx="6.521" cy="6.521" r="6.521" transform="translate(50.536 9.787)" fill="#3f3d56"/>
								<path id="Path_3877" data-name="Path 3877" d="M680.283,362.107h-307.8a6.976,6.976,0,1,1,0-13.951h307.8a6.976,6.976,0,0,1,0,13.951Z" transform="translate(-254.332 -205.485)" fill="#ccc"/>
								<path id="Path_3878" data-name="Path 3878" d="M680.283,437.1h-307.8a6.976,6.976,0,0,1,0-13.951h307.8a6.976,6.976,0,0,1,0,13.951Z" transform="translate(-254.332 -205.485)" fill="#e6e6e6"/>
								<path id="Path_3879" data-name="Path 3879" d="M680.283,465.869h-307.8a6.976,6.976,0,1,1,0-13.951h307.8a6.976,6.976,0,0,1,0,13.951Z" transform="translate(-254.332 -205.485)" fill="#e6e6e6"/>
								<path id="Path_3880" data-name="Path 3880" d="M630.146,332.461H422.622a6.976,6.976,0,1,1,0-13.951H630.146a6.976,6.976,0,0,1,0,13.951Z" transform="translate(-254.332 -205.485)" fill="#ccc"/>
								<path id="Path_3881" data-name="Path 3881" d="M481,408.32H372.876a6.976,6.976,0,1,1,0-13.951H481a6.976,6.976,0,0,1,0,13.951Z" transform="translate(-254.332 -205.485)" fill="#e6e6e6"/>
								<path id="Path_3882" data-name="Path 3882" d="M680.675,408.32H572.553a6.976,6.976,0,1,1,0-13.951H680.675a6.976,6.976,0,1,1,0,13.951Z" transform="translate(-254.332 -205.485)" fill="#e6e6e6"/>
								<path id="Path_3883" data-name="Path 3883" d="M791.212,205.485H261.932a7.612,7.612,0,0,0-7.6,7.61v358.65a7.61,7.61,0,0,0,7.6,7.6h395.79c-.1-.72-.18-1.45-.26-2.17H261.932a5.435,5.435,0,0,1-5.43-5.43V213.1a5.444,5.444,0,0,1,5.43-5.44h529.28a5.446,5.446,0,0,1,5.44,5.44V432.9c.72.05,1.45.11,2.17.18V213.1a7.614,7.614,0,0,0-7.61-7.61Z" transform="translate(-254.332 -205.485)" fill="#3f3d56"/>
								<path id="Path_3884" data-name="Path 3884" d="M657.722,579.345c-.1-.72-.18-1.45-.26-2.17-.02-.11-.03-.21-.04-.32q-.435-3.945-.63-7.97-.825,3.465-1.49,6.96c.03.34.06.67.1,1.01.01.11.02.21.04.32.08.72.16,1.45.26,2.17.28,2.23.62,4.43,1.02,6.62.01-.09.02-.17.03-.26.28-2.11.6-4.21.98-6.31a.092.092,0,0,1-.01-.05Zm141.1-148.27c-.72-.07-1.45-.13-2.17-.18-.11-.01-.21-.01-.32-.02-3.2-.24-6.44-.36-9.7-.36A132.041,132.041,0,0,0,655.3,575.845c.03.34.06.67.1,1.01.01.11.02.21.04.32.08.72.16,1.45.26,2.17.28,2.23.62,4.43,1.02,6.62a132.574,132.574,0,0,0,79.27,98.45c2.08.86,4.18,1.68,6.31,2.43,1.4.51,2.8.98,4.22,1.43,1.02.33,2.05.64,3.08.94,1.46.43,2.94.84,4.43,1.22a131.355,131.355,0,0,0,107.62-19.38h.01a131.929,131.929,0,0,0,56.97-108.54c0-68.68-52.72-125.27-119.81-131.44Zm61.97,238.15a129.372,129.372,0,0,1-19.33,11.15,128,128,0,0,1-14.94,5.88,130.23,130.23,0,0,1-71.08,2.47q-2.64-.645-5.24-1.41-2.565-.75-5.08-1.59c-1.37-.47-2.74-.95-4.1-1.46-1.42-.54-2.82-1.1-4.22-1.68a130.335,130.335,0,0,1-79.07-103.19.093.093,0,0,1-.01-.05c-.1-.72-.18-1.45-.26-2.17-.02-.11-.03-.21-.04-.32q-.435-3.945-.63-7.97-.165-3.165-.16-6.37a130.142,130.142,0,0,1,130-130c3.26,0,6.5.12,9.7.36l.32.03c.72.05,1.45.11,2.17.18,65.99,6.16,117.81,61.85,117.81,129.43a129.906,129.906,0,0,1-55.826,106.7Zm-119.77,15.04c-1.42-.54-2.82-1.1-4.22-1.68a130.335,130.335,0,0,1-79.07-103.19c-.38,2.1-.7,4.2-.98,6.31-.01.09-.02.17-.03.26a132.574,132.574,0,0,0,79.27,98.45c2.08.86,4.18,1.68,6.31,2.43-.44-.85-.87-1.71-1.28-2.58Zm55.31-253.39c-3.2-.24-6.44-.36-9.7-.36A132.041,132.041,0,0,0,655.3,575.845c.03.34.06.67.1,1.01.01.11.02.21.04.32h2.02c-.02-.11-.03-.21-.04-.32q-.435-3.945-.63-7.97-.165-3.165-.16-6.37a130.142,130.142,0,0,1,130-130c3.26,0,6.5.12,9.7.36l.32.03v-2.01c-.109-.01-.209-.01-.319-.02Z" transform="translate(-254.332 -205.485)" fill="#3f3d56"/>
								<path id="Path_3885" data-name="Path 3885" d="M893.927,464.3c40.544.692,40.538,61,0,61.687C853.383,525.3,853.389,464.988,893.927,464.3Z" transform="translate(-254.332 -205.485)" fill="#6c63ff"/>
								<path id="Path_3886" data-name="Path 3886" d="M893.927,511.94a2.17,2.17,0,0,1-2.168-2.168V498.279a.967.967,0,0,0-.966-.966H879.3a2.168,2.168,0,1,1,0-4.336h11.493a.967.967,0,0,0,.966-.966V480.518a2.167,2.167,0,1,1,4.335,0v11.493a.967.967,0,0,0,.966.966h11.493a2.168,2.168,0,1,1,0,4.336H897.06a.967.967,0,0,0-.966.966v11.493A2.17,2.17,0,0,1,893.927,511.94Z" transform="translate(-254.332 -205.485)" fill="#fff"/>
							</g>
						</svg>
					</div>						
						
					<!-- Partie droite : texte -->
					<div class="page_right">
						<div  class="pagetitlebis">
							<div class="pagetitletext">

								<h1 class="titre">Ajouter un conducteur</h1>
								<h2 class="description">Veuillez remplir le formulaire ci-dessous pour ajouter un conducteur sur le site de <span class="safecare">Safecare</span>.</h2>
						
							</div>
						</div>
						<div class="titledouble">
							<h1 class="titre">Ajouter un conducteur</h1>
							<h2 class="description">Veuillez remplir le formulaire ci-dessous pour ajouter un conducteur sur le site de <span class="safecare">Safecare</span>.</h2>
						</div>
		
						<form name="inscription_utilisateur" enctype="multipart/form-data" method="post" action="../controller/controller_inscription_fr.php" onsubmit="return inscriptionValidation('utilisateur','francais','conducteur')">
							<p>
							
								<input onkeyup="erreurPrenom('utilisateur','francais')" id="prenom" type="text" name="prenom" placeholder="Prénom*" class="formulaire" id="prenom" required/>
									
								<input onkeyup="erreurNom('utilisateur','francais')" id="nom" type="text" name="nom" placeholder="Nom*" class="formulaire" id="nom" required />
								<span class="error" id="error_prenom"></span>
								<span class="error" id="error_nom"></span>
								</br>
								<input onkeyup="erreurBirthday('utilisateur','francais')" id="birthday" type="text" class="formulaire"  name="birthday" placeholder="Naissance (aaaa-mm-jj)*" id="birthday" required/>
								<input onkeyup="erreurEntreprise('utilisateur','francais')" id="entreprise" type="text" name="entreprise" placeholder="Entreprise*" class="formulaire" id="entreprise" required />
								<span class="error" id="error_birthday"></span>
								<span class="error" id="error_entreprise"></span>
								</br>
								<input onkeyup="erreurEmail('utilisateur','francais')" id="email" type="email" name="email" placeholder="Email*" class="formulaire" id="email" required />
								<input onkeyup="erreurEmail('utilisateur','francais')" id="emailbis" type="email" name="emailbis" placeholder="Confirmer email*" class="formulaire" id="emailbis" required />
								<span class="error" id="error_email"></span>
								<span class="error" id="error_emailbis"></span>
								</br>
								<input onkeyup="erreurPassword('utilisateur','francais')" id="mdp" type="password" name="mdp" placeholder="Mot de passe**" class="formulaire" id="mdp" required />
								<input onkeyup="erreurPassword('utilisateur','francais')" id="mdpbis" type="password" name="mdpbis" placeholder="Confirmer mot de passe*" class="formulaire" id="mdpbis" required />
								</br>
								<label id="passwordlabel">** Utilisez au moins huit caractères avec des minuscules, des majuscules, des chiffres et des symboles.</label>
								<span class="error" id="error_mdp"></span>
								<span class="error" id="error_mdpbis"></span>
								</br>
								<input type="file" id="hiddenfile" style="display:none" name="file" onchange="getvalue();"/>
								<input type="text" id="selectedfile" name='lienphoto' placeholder="Sélectionner une photo de profil"required/>
								<input type="button" value="Parcourir" id="choisir" onclick="getfile();"required/>
								<br/>
								<span class="error"><?php error_reporting(0);  echo $alert2;  echo $alert3; echo $alert4; echo $non; echo '<br/>' ?></span>
								<span class="ok"><?php error_reporting(0); echo $ok; echo '<br>';?>
								<input type="submit" name="action" value="Ajouter" class="bouton" />
								
							</p>
						</form>

					</div>
          			
        		</div>

      		</div>

    	</div>

	</body>
</html>
