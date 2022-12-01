

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../view/public/css/profil_gestionnaire.css" />
		<link rel="stylesheet" href="../view/public/css/template.css" />
		<link rel="icon" type="image/png" href="../view/public/images/Logo1001.svg" />
		<title>Profile</title>
	</head>

	<body>

		<!-- Toute la page web -->
		<div id="pages">

  			<!-- MENU DE NAVIGATION (partie gauche) -->

			<label class="hamburger" for="toggle">&#9776;</label>
			<input type="checkbox" id="toggle"/>
			<div id="menu">

  				<!-- Logo accueil -->
				<a href ="../controller/controller_accueil_en.php" style="text-decoration: none">
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
              				<a href="../controller/controller_accueil_en.php">
                				<div class="menuicon">
                  					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 26.333">
                    					<g id="Icon_feather-home" data-name="Icon feather-home" transform="translate(-3 -1.5)">
                      						<path id="Path_2720" data-name="Path 2720" d="M4.5,11.167,15,3l10.5,8.167V24a2.333,2.333,0,0,1-2.333,2.333H6.833A2.333,2.333,0,0,1,4.5,24Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      						<path id="Path_2721" data-name="Path 2721" d="M13.5,29.667V18h7V29.667" transform="translate(-2 -3.333)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    					</g>
                  					</svg>
                				</div>Home
             				</a>
            			</div>

    					<div class="element_menu">
              				<a href="../controller/controller_gestion_utilisateur_en.php">
                				<div class="menuicon">
                  					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 23 25.5">
                      					<g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(-4.5 -3)">
                        					<path id="Path_2722" data-name="Path 2722" d="M26,30V27.5a5,5,0,0,0-5-5H11a5,5,0,0,0-5,5V30" transform="translate(0 -3)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        					<path id="Path_2723" data-name="Path 2723" d="M22,9.5a5,5,0,1,1-5-5A5,5,0,0,1,22,9.5Z" transform="translate(-1)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      					</g>
                  					</svg>
                				</div>Results
              				</a>
            			</div>

    					<div class="element_menu">
              				<a href="../controller/controller_sendemail_contact_en.php">
                				<div class="menuicon">
                  					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    					<path id="Icon_feather-message-circle" data-name="Icon feather-message-circle" d="M25.5,14.417a9.777,9.777,0,0,1-1.05,4.433,9.917,9.917,0,0,1-8.867,5.483,9.777,9.777,0,0,1-4.433-1.05L4.5,25.5l2.217-6.65a9.777,9.777,0,0,1-1.05-4.433A9.917,9.917,0,0,1,11.15,5.55,9.777,9.777,0,0,1,15.583,4.5h.583A9.893,9.893,0,0,1,25.5,13.833Z" transform="translate(-3 -3)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                  					</svg>
                				</div>Contact
              				</a>
            			</div>

    					<div class="element_menu">
              				<a href="../controller/controller_faq_en.php">
                				<div class="menuicon">
                  					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 16 31">
                    					<text id="_" data-name="?" transform="translate(8 25)" fill="#fff" font-size="26" font-family="HelveticaRounded-Bold, Helvetica Rounded" font-weight="700"><tspan x="-7.462" y="0">?</tspan></text>
                  					</svg>
                				</div>FAQ
              				</a>
            			</div>

    					<div class="element_menu">
              				<a href="../controller/controller_accueil_en.php#homepage2">
                				<div class="menuicon">
                  					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 26 22.008">
                    					<g id="Icon_feather-users" data-name="Icon feather-users" transform="translate(0 -2.811)">
                      						<path id="Path_2724" data-name="Path 2724" d="M18.227,28.773V26.682A4.182,4.182,0,0,0,14.045,22.5H5.682A4.182,4.182,0,0,0,1.5,26.682v2.091" transform="translate(0 -5.455)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      						<path id="Path_2725" data-name="Path 2725" d="M15.864,8.682A4.182,4.182,0,1,1,11.682,4.5,4.182,4.182,0,0,1,15.864,8.682Z" transform="translate(-1.818)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      						<path id="Path_2726" data-name="Path 2726" d="M33.136,28.832V26.741A4.182,4.182,0,0,0,30,22.7" transform="translate(-8.636 -5.514)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      						<path id="Path_2727" data-name="Path 2727" d="M24,4.695a4.182,4.182,0,0,1,0,8.1" transform="translate(-6.818 -0.059)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    					</g>
                  					</svg>
                				</div>About us
              				</a>
            			</div>

    				</nav>

        		</div>

        		<!-- Copyright -->
        		<div class="bas-menu">
          			<h6>Infinite Measures © 2021</h6>
          			<a href="../controller/controller_cgu_en.php">GTU</a>
        		</div>

  		</div>

  			<!-- PAGE PRINCIPALE (partie droite) -->

  			<!-- boîte page principale -->
  		<div id="page_principale">

        		<!-- HEADER -->
    		<div id="menu_haut">

    				<!-- flexbox menu du haut -->
	    		<div id="conteneur_menuhaut">

	            			<!-- sélection de la langue -->
                    <div class="langue">
                <form>
                    <select onchange="location.href=this.value">
                        <option value="../controller/controller_profil_en.php">English</option>
                        <option value="../controller/controller_profil_fr.php">Français</option>
                    </select>
                </form>
            </div>


							<!-- Titre de la page -->
	            <h3>Profile</h3>

	            			<!-- Affichage profil connecté -->
							<div id="headerprofile">

								<div class="headername">
									<h4><?php echo $prenom; echo ' '; echo strtoupper($nom);?></h4>
									<h5><?php echo ucwords($statut_en) ;?></h5>
									<h5> <a class="deconnexion"href="../controller/deconnexion.php">Log out</a></h5>
									</div>

								<a href='../controller/controller_profil_en.php'>
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
    		</div>

        		<!-- PAGE TEXTE -->
				<div class="conteneur_principal">

					<!-- Rectangle blanc (titre page) -->
					<div  class="pagetitle">
						<!-- Texte rectangle blanc -->
            <div class="pagetitletext">
              <h1> <span style="color: #5F5DFE"> My profile</span> </h1>
              <h6>Find all of your information here</h6>
           	</div>

						<!-- Svg rectangle blanc -->
						<div class="pagetitleimage">

							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="413.111" height="260" viewBox="0 0 413.111 332.703">
                <defs>
                  <linearGradient id="linear-gradient" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="gray" stop-opacity="0.251"/>
                    <stop offset="0.535" stop-color="gray" stop-opacity="0.122"/>
                    <stop offset="1" stop-color="gray" stop-opacity="0.102"/>
                  </linearGradient>
                </defs>
                <g id="undraw_Hello_qnas" transform="translate(0 -3.773)">
                  <path id="Path_1143" data-name="Path 1143" d="M221.57,621.739c0,20.572-12.23,27.756-27.316,27.756-.351,0-.7,0-1.048-.013-.7-.015-1.392-.046-2.075-.095-13.616-.963-24.195-8.517-24.195-27.648,0-19.8,25.3-44.78,27.2-46.635l0,0c.072-.072.11-.108.11-.108S221.57,601.165,221.57,621.739Z" transform="translate(-159.146 -348.029)" fill="#3f3d56"/>
                  <path id="Path_1144" data-name="Path 1144" d="M211.652,646.347l9.992-13.96-10.017,15.492-.027,1.6c-.7-.015-1.392-.046-2.075-.095l1.076-20.582-.008-.159.019-.03.1-1.944-10.041-15.532,10.072,14.074.025.412.814-15.551-8.6-16.048,8.7,13.316.847-32.239,0-.11v.108l-.141,25.423,8.557-10.079-8.593,12.268-.226,13.924,7.991-13.362L212.1,618.688l-.125,7.74,11.6-18.6-11.644,21.3Z" transform="translate(-177.541 -348.028)" fill="#f2f2f2"/>
                  <path id="Path_1146" data-name="Path 1146" d="M974.984,362.4a5.881,5.881,0,1,0,5.881,5.881A5.881,5.881,0,0,0,974.984,362.4Zm0,9.5a3.619,3.619,0,1,1,3.619-3.619,3.619,3.619,0,0,1-3.619,3.619Z" transform="translate(-596.529 -232.113)" fill="#5f5dfe"/>
                  <path id="Path_1147" data-name="Path 1147" d="M974.984,362.4a5.881,5.881,0,1,0,5.881,5.881A5.881,5.881,0,0,0,974.984,362.4Zm0,9.5a3.619,3.619,0,1,1,3.619-3.619,3.619,3.619,0,0,1-3.619,3.619Z" transform="translate(-596.529 -232.113)" fill="#303155" opacity="0.1"/>
                  <path id="Path_1148" data-name="Path 1148" d="M782.493,276.563h22.619v20.9a4.434,4.434,0,0,1-4.434,4.434H786.927a4.434,4.434,0,0,1-4.434-4.434Z" transform="translate(-426.656 -150.796)" fill="#6c63ff"/>
                  <path id="Path_1149" data-name="Path 1149" d="M967.794,352.455v20.922a4.411,4.411,0,0,1-4.411,4.411h2.262a4.411,4.411,0,0,0,4.411-4.411V352.455Z" transform="translate(-593.41 -226.689)" opacity="0.1"/>
                  <path id="Path_1150" data-name="Path 1150" d="M940.812,314.679a1.321,1.321,0,0,0-1,.507c-.3.538.241,1.144.732,1.514a9.731,9.731,0,0,1,2.478,2.306,2.891,2.891,0,0,1,.136,3.2c-.879,1.193-2.978,1.449-3.181,2.917-.13.942.684,1.746,1.51,2.219,2.037,1.167,4.664,1.478,6.14,3.3a4.76,4.76,0,0,1,3.337-2.291c1.361-.31,2.775-.287,4.155-.5a1.437,1.437,0,0,0,1.146-.608c.386-.783-.714-1.722-.334-2.508.289-.6,1.137-.552,1.757-.791a2.288,2.288,0,0,0,1.138-2.732,5.144,5.144,0,0,0-1.946-2.526,21.792,21.792,0,0,0-7.836-3.622,20.085,20.085,0,0,0-4.165-.964A20.811,20.811,0,0,0,940.812,314.679Z" transform="translate(-580.512 -205.776)" fill="#eee"/>
                  <line id="Line_11" data-name="Line 11" x1="47.294" y2="147.338" transform="translate(154.254 156.44)" fill="none" stroke="#e0e0e0" stroke-miterlimit="10" stroke-width="8"/>
                  <circle id="Ellipse_9" data-name="Ellipse 9" cx="32.742" cy="32.742" r="32.742" transform="translate(100.139 12.285)"/>
                  <path id="Path_1152" data-name="Path 1152" d="M500.537,296.194l24.987,26.525a4.882,4.882,0,0,0,7.817-.971l27.677-49.656-7.731-2.729L530.55,302.105s-42.686-44.491-48.658-42.291S500.537,296.194,500.537,296.194Z" transform="translate(-330.367 -176.133)" fill="#6c63ff"/>
                  <line id="Line_12" data-name="Line 12" x1="36.835" y2="95.497" transform="translate(85.587 211.92)" fill="none" stroke="#bdbdbd" stroke-miterlimit="10" stroke-width="5"/>
                  <line id="Line_13" data-name="Line 13" x2="36.835" y2="95.497" transform="translate(140.612 211.92)" fill="none" stroke="#bdbdbd" stroke-miterlimit="10" stroke-width="5"/>
                  <ellipse id="Ellipse_10" data-name="Ellipse 10" cx="42.746" cy="11.596" rx="42.746" ry="11.596" transform="translate(88.77 201.006)" fill="#3f3d56"/>
                  <ellipse id="Ellipse_11" data-name="Ellipse 11" cx="42.746" cy="11.596" rx="42.746" ry="11.596" transform="translate(88.77 200.096)" fill="#acacbb"/>
                  <line id="Line_14" data-name="Line 14" x2="40.332" y2="12.428" transform="translate(113.53 232.901)" fill="none" stroke="#bdbdbd" stroke-miterlimit="10" stroke-width="5"/>
                  <line id="Line_15" data-name="Line 15" x1="40.332" y2="12.428" transform="translate(109.172 232.901)" fill="none" stroke="#bdbdbd" stroke-miterlimit="10" stroke-width="5"/>
                  <path id="Path_1153" data-name="Path 1153" d="M248.813,182.016H261.5a25.466,25.466,0,0,1,25.466,25.466v67.3h-72.76V216.62A34.6,34.6,0,0,1,248.813,182.016Z" transform="translate(-116.798 -99.245)" fill="#6c63ff"/>
                  <path id="Path_1154" data-name="Path 1154" d="M214.209,386.016h72.76v39.563H246.5a32.287,32.287,0,0,1-32.287-32.287Z" transform="translate(-116.798 -210.476)" fill="#39447a"/>
                  <path id="Path_1155" data-name="Path 1155" d="M366.087,292.714l44.492,42.274h29.113v-6.366L417.4,316.343l-36.177-44.675S364.8,281.818,366.087,292.714Z" transform="translate(-267.693 -182.64)" opacity="0.05"/>
                  <path id="Path_1156" data-name="Path 1156" d="M366.087,290.714l44.492,42.274h29.113v-6.366L417.4,314.343l-36.177-44.675S364.8,279.818,366.087,290.714Z" transform="translate(-267.693 -181.549)" fill="#6c63ff"/>
                  <path id="Path_1157" data-name="Path 1157" d="M572.012,394.909s23.647,1.819,17.28,6.366h-17.28Z" transform="translate(-380.014 -249.837)" fill="#fccbcb"/>
                  <path id="Path_1158" data-name="Path 1158" d="M640.012,264.575s5.912-17.735,10-12.733-2.274,15.461-2.274,15.461Z" transform="translate(-417.091 -171.345)" fill="#fccbcb"/>
                  <path id="Path_1160" data-name="Path 1160" d="M481.786,506.772l48.943,4.46,2.655,99.941,17.522-5.7s26.205-113.231,1.217-122.776-52-22.112-68.127-11.87S481.786,506.772,481.786,506.772Z" transform="translate(-327.776 -289.147)" fill="#39447a"/>
                  <path id="Path_1161" data-name="Path 1161" d="M495.012,486.909s26.83,13.642,30.468,29.1" transform="translate(-338.03 -300)" opacity="0.1"/>
                  <path id="Path_1162" data-name="Path 1162" d="M426.56,513.551l38.2,30.923-42.746,68.667,17.735,5s74.124-63.665,58.663-85.493-30.923-47.294-50.022-47.749S426.56,513.551,426.56,513.551Z" transform="translate(-298.226 -298.903)" fill="#39447a"/>
                  <path id="Path_1163" data-name="Path 1163" d="M414.209,251.016l9.55,16.371,2.274-4.547Z" transform="translate(-225.849 -136.867)" opacity="0.05"/>
                  <path id="Path_1164" data-name="Path 1164" d="M413.227,766.909s-14.1,10.914-3.183,14.552,33.2,6.366,33.2,6.366,3.638-6.366-1.364-9.095-11.823-1.364-11.823-1.364l.909-5.457Z" transform="translate(-289.441 -452.671)" fill="#333"/>
                  <path id="Path_1165" data-name="Path 1165" d="M600.785,776.554s-6.192,17.173,4.994,14.488,31.541-12.153,31.541-12.153-.279-7.327-5.968-7-10.756,5.1-10.756,5.1l-2.45-6.079Z" transform="translate(-394.771 -454.851)" fill="#333"/>
                  <rect id="Rectangle_61" data-name="Rectangle 61" width="18.19" height="27.285" rx="9.095" transform="translate(124.696 66.855)" fill="#fccbcb"/>
                  <path id="Path_1166" data-name="Path 1166" d="M433.107,224.908A9.1,9.1,0,0,0,424.012,234v3.09a29.106,29.106,0,0,0,18.19,0V234A9.1,9.1,0,0,0,433.107,224.908Z" transform="translate(-299.317 -157.144)" opacity="0.05"/>
                  <circle id="Ellipse_12" data-name="Ellipse 12" cx="29.104" cy="29.104" r="29.104" transform="translate(104.687 22.29)" fill="#fccbcb"/>
                  <path id="Path_1168" data-name="Path 1168" d="M377.831,145.239s7.276,1.875,11.369-6.394,7.276-12.78,24.1-7.894,20.21,5.483,21.019.862c.553-3.158-5.43-10.827-9.275-15.368a10.766,10.766,0,0,0-8.207-3.537h-19l-11.369,5.262-8.64,7.518-1.819,10.149Z" transform="translate(-273.145 -96.076)"/>
                  <ellipse id="Ellipse_13" data-name="Ellipse 13" cx="2.956" cy="5.912" rx="2.956" ry="5.912" transform="translate(104.687 43.208)" fill="#fccbcb"/>
                  <path id="Path_1169" data-name="Path 1169" d="M376.422,114.325c-.675-3.807-1.337-7.8-.109-11.47a11.83,11.83,0,0,1,7.611-7.423c2.293-.7,4.764-.69,7.043-1.44,3.207-1.056,5.721-3.507,8.507-5.415a28.04,28.04,0,0,1,8.043-3.8c2.575-.744,5.607-1.031,7.706.637,1.767,1.4,2.38,3.81,3.84,5.531,1.7,2,4.338,2.87,6.642,4.13a20.257,20.257,0,0,1,10.282,15.838c.079.976,0,2.136-.826,2.666a2.948,2.948,0,0,1-1.659.3c-11.632-.166-23.278-.333-34.861-1.4a83.643,83.643,0,0,0-10.823-.614,35.4,35.4,0,0,0-15.936,4.5" transform="translate(-270.892 -80.417)"/>
                  <rect id="Rectangle_62" data-name="Rectangle 62" width="70.07" height="29.817" rx="14.909" transform="translate(0 293.434)" fill="#6c63ff"/>
                  <path id="Path_1170" data-name="Path 1170" d="M724.889,485.439a.683.683,0,1,0-.659-.682.683.683,0,0,0,.659.682Z" transform="translate(-463.012 -298.455)" fill="url(#linear-gradient)"/>
                  <line id="Line_16" data-name="Line 16" x2="47.294" y2="168.298" transform="translate(361.966 156.44)" fill="none" stroke="#e0e0e0" stroke-miterlimit="10" stroke-width="8"/>
                  <rect id="Rectangle_63" data-name="Rectangle 63" width="255.389" height="9.952" transform="translate(154.062 151.512)" fill="#e0e0e0"/>
                  <rect id="Rectangle_64" data-name="Rectangle 64" width="41.837" height="5.912" rx="2.956" transform="translate(217.009 149.165)" fill="#535461"/>
                  <rect id="Rectangle_66" data-name="Rectangle 66" width="98.502" height="70.57" rx="26.835" transform="translate(244.329 84.58)" fill="#3e3f49"/>
                  <rect id="Rectangle_67" data-name="Rectangle 67" width="98.502" height="70.57" rx="26.835" transform="translate(245.693 84.58)" fill="#535461"/>
                  <circle id="Ellipse_14" data-name="Ellipse 14" cx="3.183" cy="3.183" r="3.183" transform="translate(296.363 116.195)" fill="#e0e0e0"/>
                </g>
              </svg>

						</div>
          </div>


                <div class="profil">

		  			<div class="Informations">
                    <h2> First name : <?php echo $prenom ?> </h2>
                    <h2> Name : <?php echo $nom ?> </h2>
                    <h2> Date of birth : <?php echo $birthday ?> </h2>
                    <h2> Company name : <?php echo $entreprise ?> </h2>
                    <h2> Email : <?php echo $email ?> </h2>
                    <h2> Position: <?php echo ucwords($statut_en) ?> </h2>
                    </div>
					<div class="Informations">
                        <div>
                        <img src='<?php echo '../view/public/images/'.$photo."'"?>' ><br/>
						<a href="../controller/controller_edition_profil_en.php" class="boutonprofil">Modifier le profil</a>
                    	</div>
                	</div>
</div>

              </div>
            </div>
          </div>
        </body>
        </html>
