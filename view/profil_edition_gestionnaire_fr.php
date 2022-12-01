<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/profil_edition.css" />
		<link rel="stylesheet" href="../view/public/css/template.css" />
		<link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
		<script src="../view/public/javascript/profil_edition.js"></script>
		<title>Edition de profil</title>
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
                        <div class="langue">
                            <form>
                                <select onchange="location.href=this.value">
                                    <option value="../controller/controller_edition_profil_fr.php">Français</option>
                                    <option value="../controller/controller_edition_profil_en.php">English</option>
                                </select>
                            </form>
                        </div>

						<!-- Titre de la page -->
            			<h3>Edition de profil</h3>

            			<!-- Affichage profil connecté -->
            			<div id="headerprofile">
              
              				<div class="headername">
								<h4><?php echo $prenom; echo ' '; echo strtoupper($nom); ?></h4>
								<h5><?php echo ucwords($statut_fr) ;?></h5>
								<h5> <a class="deconnexion" href="../controller/deconnexion.php">Déconnexion</a></h5>
								
              				</div>

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
        		<div class="conteneur_principal">

					<!-- Rectangle blanc (titre page) -->
          			<div  class="pagetitle">

            			<div class="pagetitletext">
              				<h1>
								<?php      
									echo $prenom;
									echo ' ';
									echo strtoupper($nom);
                  				?>
							</h1>
              				<h6><?php echo ucwords($statut_fr) ;?></h6>
           				</div>
						
						<!-- Svg rectangle blanc -->
						<div class="pagetitleimage">
							<svg xmlns="http://www.w3.org/2000/svg" width="466.665" height="240.00" viewBox="0 0 466.665 335.722">
								<g id="Group_1007" data-name="Group 1007" transform="translate(0 -0.18)">
									<line id="Line_31" data-name="Line 31" x2="75.112" transform="translate(0 335.401)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<rect id="Rectangle_572" data-name="Rectangle 572" width="333.477" height="225.787" rx="19.398" transform="translate(109.952 57.806)" fill="#f2f2f2"/>
									<rect id="Rectangle_573" data-name="Rectangle 573" width="333.477" height="225.787" rx="19.398" transform="translate(99.772 43.552)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<line id="Line_32" data-name="Line 32" x2="333.477" transform="translate(99.772 65.199)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<rect id="Rectangle_574" data-name="Rectangle 574" width="90.948" height="14.027" rx="7.013" transform="translate(299.089 115.949)" fill="#6c63ff" opacity="0.3"/>
									<rect id="Rectangle_575" data-name="Rectangle 575" width="125.789" height="11.312" rx="5.656" transform="translate(281.668 154.862)" fill="#6c63ff" opacity="0.3"/>
									<rect id="Rectangle_576" data-name="Rectangle 576" width="125.789" height="11.312" rx="5.656" transform="translate(281.668 185.631)" fill="#6c63ff" opacity="0.3"/>
									<rect id="Rectangle_577" data-name="Rectangle 577" width="125.789" height="11.312" rx="5.656" transform="translate(281.668 216.399)" fill="#6c63ff" opacity="0.3"/>
									<rect id="Rectangle_578" data-name="Rectangle 578" width="90.948" height="14.027" rx="7.013" transform="translate(303.613 111.424)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<rect id="Rectangle_579" data-name="Rectangle 579" width="125.789" height="11.312" rx="5.656" transform="translate(286.193 150.337)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<rect id="Rectangle_580" data-name="Rectangle 580" width="125.789" height="11.312" rx="5.656" transform="translate(286.193 181.106)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<rect id="Rectangle_581" data-name="Rectangle 581" width="125.789" height="11.312" rx="5.656" transform="translate(286.193 211.875)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<circle id="Ellipse_396" data-name="Ellipse 396" cx="6.787" cy="6.787" r="6.787" transform="translate(118.323 50.34)" fill="#6c63ff" opacity="0.3"/>
									<circle id="Ellipse_397" data-name="Ellipse 397" cx="6.787" cy="6.787" r="6.787" transform="translate(137.327 50.34)" fill="#6c63ff" opacity="0.3"/>
									<circle id="Ellipse_398" data-name="Ellipse 398" cx="6.787" cy="6.787" r="6.787" transform="translate(156.331 50.34)" fill="#6c63ff" opacity="0.3"/>
									<circle id="Ellipse_399" data-name="Ellipse 399" cx="6.787" cy="6.787" r="6.787" transform="translate(121.038 47.625)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<circle id="Ellipse_400" data-name="Ellipse 400" cx="6.787" cy="6.787" r="6.787" transform="translate(140.042 47.625)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<circle id="Ellipse_401" data-name="Ellipse 401" cx="6.787" cy="6.787" r="6.787" transform="translate(159.046 47.625)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<path id="Path_3853" data-name="Path 3853" d="M516.861,598.982a67.471,67.471,0,0,1-1.055-17.357s-5.746-25.242-10.267-27.6h0c-.069.089-2.263,2.965-2.542,11.866a36.6,36.6,0,0,1-3.484,14.975s1.036,11.27.444,18.112Z" transform="translate(-311.728 -339.145)" fill="#6c63ff"/>
									<path id="Path_3854" data-name="Path 3854" d="M491.033,298.379H386.756A10.756,10.756,0,0,0,376,309.135V448.253a10.756,10.756,0,0,0,10.756,10.756h36.585c-1.222-5.067-2.741-12.982-1.2-18.485v0c.072-.257.148-.51.234-.756a28.731,28.731,0,0,0,1.037-11.02,22.9,22.9,0,0,0,0-9.607c-1.13-5.274-1.921-10.455-1.921-10.455a67.566,67.566,0,0,1-.079-11.241c.012-.094.026-.183.039-.274l-.3-.069s1.6-7.252,2.166-11.867c.133-1.089.309-2.471.5-3.943a9.468,9.468,0,0,1-1.535-.389c-5.086-1.789-6.687-17.989-6.687-17.989v-5.133s-1.7-7.865,4.238-11.349a69.012,69.012,0,0,1,8.156-4.338c.043-.031.086-.059.13-.094a5,5,0,0,0,1.488-1.916q.012-.194.006-.386c-.1-1.84-1.377-3.513-2.593-4.974l-3.11-3.736a3.653,3.653,0,0,1-.8-1.3,2.991,2.991,0,0,1-.085-.816q0-.152,0-.3.025-1.393.076-2.785c.029-.811.233-1.834,1.028-2,.413-.087.96.064,1.178-.3a.708.708,0,0,0,.053-.48c0,.012,0,.025-.007.036l-.008-.045a10.154,10.154,0,0,1-.294-1.985,2.642,2.642,0,0,1,.128-.891c.46-1.346,2.044-1.9,3.444-2.153s2.971-.472,3.85-1.591a12.189,12.189,0,0,1,.764-1.074,3,3,0,0,1,1.432-.722,7.917,7.917,0,0,1,5.206.462,4.588,4.588,0,0,0,2.1.678c.771-.049,1.431-.592,2.192-.724a3.119,3.119,0,0,1,3.013,1.8,4.458,4.458,0,0,1,.558,2.273,3.128,3.128,0,0,1-.8,2.145c-.529.562-1.32.948-1.539,1.688-.09.3-.069.626-.148.93-.01.038-.026.073-.039.11.015.019.03.037.045.056a9.607,9.607,0,0,1-4.675,14.941c0,.1-.007.191-.007.286a4.151,4.151,0,0,0,1.285,3.2l8.392,3.442s5.052-.612,6.875,6.927a13.043,13.043,0,0,1,.312,3.827,11.417,11.417,0,0,0,1.383,5.728c2.072,4.144,1.6,13.657-2.637,14.6-4.015.892-5.576.517-5.73.475l-.009.167c.066,1.785.7,17.18,3.008,19.043.638.515.516.863-.007,1.1h0s0,.1.014.277c.069,1.126.425,5.414,1.969,7.854,1.79,2.826,1.6,19.121,1.6,19.121l1.223,9.607s-.753,5.934,0,6.969c.428.587.946,9.685,1.314,17.452h31.461a10.756,10.756,0,0,0,10.756-10.756V309.135a10.756,10.756,0,0,0-10.756-10.756Z" transform="translate(-244.102 -199.172)" fill="#6c63ff"/>
									<rect id="Rectangle_582" data-name="Rectangle 582" width="125.789" height="160.63" rx="23.772" transform="translate(121.038 86.99)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<path id="Path_3855" data-name="Path 3855" d="M178.854,400.124s-4.219-1.247-5.124.11,1.234,11.2,1.234,11.2l9.3.565-3.244-8.193Z" transform="translate(-133.233 -254.593)" fill="#2f2e41"/>
									<path id="Path_3856" data-name="Path 3856" d="M104.855,579.347s8.459,18.571,1.945,17.987-9.042-17.987-9.042-17.987Z" transform="translate(-91.759 -353.008)" fill="#a0616a"/>
									<path id="Path_3857" data-name="Path 3857" d="M234.374,572.992s-3.711,20.066,2.468,17.923,4.418-19.642,4.418-19.642Z" transform="translate(-165.954 -348.587)" fill="#a0616a"/>
									<path id="Path_3858" data-name="Path 3858" d="M159.228,386.348s-.1,9.334,3.5,9.82-2.042,5.445-2.042,5.445l-6.417,1.264-9.237-.68-4.084-5.25s7.195-3.4,4.084-14Z" transform="translate(-115.407 -245.474)" fill="#a0616a"/>
									<path id="Path_3859" data-name="Path 3859" d="M159.228,386.348s-.1,9.334,3.5,9.82-2.042,5.445-2.042,5.445l-6.417,1.264-9.237-.68-4.084-5.25s7.195-3.4,4.084-14Z" transform="translate(-115.407 -245.474)" opacity="0.1"/>
									<path id="Path_3860" data-name="Path 3860" d="M167.364,564.929s4.57,9.82.972,40.642c0,0,1.07,10.89.194,12.932s-8.07,29.752-8.07,29.752-9.237,2.042-10.5-4.084c0,0,1.264-8.751,1.167-10.112s2.042-16.237,2.042-16.237l-4.375-28.78L145.487,615s0,7.487-1.07,9.14,0,34.905,0,34.905,3.014,5.056-1.556,5.153-8.653-.1-9.042-3.306-.583-6.417-1.556-8.362-2.236-24.21-1.945-31.988-6.417-47.74-4.278-51.921S167.364,564.929,167.364,564.929Z" transform="translate(-107.014 -345.104)" fill="#2f2e41"/>
									<circle id="Ellipse_402" data-name="Ellipse 402" cx="11.667" cy="11.667" r="11.667" transform="translate(27.195 121.04)" fill="#a0616a"/>
									<path id="Path_3861" data-name="Path 3861" d="M137.308,410.317s7.1,5.25,17.4,1.07c0,0,3.4-1.653,3.111-4.181s7.1,20.321,7.1,20.321l7.487,39.767-.389,16.237s-3.306-1.653-13.612,2.042-27.127-4.181-27.127-4.181l.583-41.711.583-24.307L134,410.025S134.78,408.567,137.308,410.317Z" transform="translate(-110.113 -258.65)" fill="#f2f2f2"/>
									<path id="Path_3862" data-name="Path 3862" d="M182.063,399.883s1.718-.279,3.37,2.346,5.542,4.278,5.542,4.278,9.431.583,10.792,5.639,4.764,11.959,6.417,24.7,4.959,33.058,5.445,34.711-.681,6.709.681,8.264-9.626,1.556-9.626,1.556-.972-7.973-1.653-7.973-.486,5.348.194,9.237-4.959,0-4.959,0-4.375-17.793-8.556-33.836-6.611-24.89-5.834-28.488,2.917-13.9,1.361-14.876S182.063,399.883,182.063,399.883Z" transform="translate(-137.918 -254.743)" fill="#2f2e41"/>
									<path id="Path_3863" data-name="Path 3863" d="M117.393,399.874a105.913,105.913,0,0,0-8.957,5.952c-6.417,4.57-10.792,8.07-10.792,8.07s-2.528,1.945-4.084,13.515S88.5,468.928,89.864,472.72s1.847,6.028,1.361,8.264,10.209,2.139,10.4,1.653-.292-9.334.194-9.529,3.111,5.25,3.6,9.82,6.125,8.167,7.389,8.167,7.778-26.349,7.876-44.337-2.139-33.155-3.792-35.294S117.393,399.874,117.393,399.874Z" transform="translate(-87.268 -254.743)" fill="#2f2e41"/>
									<path id="Path_3864" data-name="Path 3864" d="M178.4,737.808s.778-2.139,3.5-1.458,4.57-1.75,4.57-1.75,1.458-.194.486,1.653-1.75,3.111-1.75,3.111,5.834,13.32,2.042,16.529a8.13,8.13,0,0,1-8.167,1.264S174.8,754.142,175,746.169a17.763,17.763,0,0,0-2.528-6.612c-2.334-4.084-4.084-10.306-1.264-11.473a15.275,15.275,0,0,1,3.545-1.21s-1.319,6.035,2.089,8.144Z" transform="translate(-131.176 -433.782)" fill="#3f3d56"/>
									<path id="Path_3865" data-name="Path 3865" d="M145.47,778.034s-2.334-4.375,1.556-4.861,8.07-.778,7.876,1.264-.681,5.153-.681,5.153l.681,2.236s.194,5.542.875,6.223,4.375,6.514-3.5,6.514-10.209-.875-9.528-2.722.875-10.987.875-10.987Z" transform="translate(-116.331 -458.938)" fill="#3f3d56"/>
									<path id="Path_3866" data-name="Path 3866" d="M142.887,341.134s5.445,1.458,8.264,2.042,2.528-1.07,2.528-1.07,3.695.486,3.5.1,1.556-2.431-.486-4.764-1.458-4.084-1.458-4.084h-1.75l-.486-.681h-2.722s-2.042-.778-7.389,0-12.64.972-13.223,4.181-3.6,7.195-2.528,9.042,7.195,9.431,7.778,12.64,3.307,3.921,3.209,1.912-2.82-9.01-.487-9.3S143.957,344.926,142.887,341.134Z" transform="translate(-107.719 -217.76)" fill="#2f2e41"/>
									<path id="Path_3867" data-name="Path 3867" d="M1007.591,86.584a10.4,10.4,0,0,0-8.964,6.267c-2.241,5.418.645,11.782,4.977,15.733s9.9,6.209,14.954,9.177c6.791,3.987,12.894,9.521,16.292,16.626s3.76,15.9-.235,22.692c-3.708,6.3-10.449,10.07-16.879,13.547" transform="translate(-584.578 -83.209)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="1"/>
									<ellipse id="Ellipse_403" data-name="Ellipse 403" cx="8" cy="3.5" rx="8" ry="3.5" transform="translate(420.665 0.18)" fill="#6c63ff"/>
									<ellipse id="Ellipse_404" data-name="Ellipse 404" cx="8" cy="4" rx="8" ry="4" transform="translate(426.665 25.18)" fill="#6c63ff"/>
									<ellipse id="Ellipse_405" data-name="Ellipse 405" cx="8" cy="4" rx="8" ry="4" transform="translate(412.664 29.18)" fill="#6c63ff"/>
									<ellipse id="Ellipse_406" data-name="Ellipse 406" cx="7.5" cy="3.5" rx="7.5" ry="3.5" transform="translate(435.665 51.18)" fill="#6c63ff"/>
									<ellipse id="Ellipse_407" data-name="Ellipse 407" cx="8" cy="3.5" rx="8" ry="3.5" transform="translate(450.665 51.18)" fill="#6c63ff"/>
								</g>
							</svg>							 
						</div>

          			</div>

					<div class="principal">
						<div class="partie_gauche">
						<img src='<?php echo '../view/public/images/'.$photo."'"?>' class="pdp"/>
						</div>
						<div class="partie_droite">
							<form name="edition_profil" enctype="multipart/form-data" method="post" action="../controller/controller_edition_profil_fr.php" onsubmit="return editProfil('francais')">
							<p>
								<input onkeyup="erreurPrenomEditionProfil('francais')" id="prenom" type="text" name="prenom" placeholder="Prénom" value = "<?php echo $prenom?>" class="formulaire" required/>
								<input onkeyup="erreurNomEditionProfil('francais')" id="nom" type="text" name="nom" placeholder="Nom" value = "<?php echo $nom?>"class="formulaire" required />
								</br>
								<input onkeyup="erreurBirthdayEditionProfil('francais')" id="birthday" type="text" class="formulaire"  name="birthday" placeholder="Naissance (aaaa-mm-jj)" value = "<?php echo $birthday?>"  required/>
                                <input onkeyup="erreurEntrepriseEditionProfil('francais')" id="entreprise" readonly="readonly"  type="text" name="entreprise" placeholder="Entreprise" value = "<?php echo $entreprise?>"class="formulaire" required />
                                </br>
								<input type="file" id="hiddenfile" style="display:none" name="file" onchange="getvalue();"/>
								<input type="text" id="selectedfile" name='lienphoto' placeholder="Changer la photo de profil"/>
								<input type="button" value="Parcourir" id="choisir" onclick="getfile();"/>
								<br/>
								<a  class="Modif" href="../controller/controller_modif_mdp_fr.php">Pour changer votre mot de passe, cliquez ici.</a> 
								</br>

								<span class="error" id="error_prenom"></span>
								<span class="error" id="error_nom"></span>
								<span class="error" id="error_birthday"></span>
								<span class="error" id="error_entreprise"></span>
								<span class="error" id="error_email"></span>
								<span class="error" id="error_emailbis"></span>
								<input type="submit" name="action" value="Mettre à jour mon profil" class="bouton" />	
							</p>
							</form>
						</div>
					
					</div>
        		</div>

      		</div>

    	</div>

	</body>
</html>
