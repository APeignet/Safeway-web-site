<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../view/public/css/admin.css" />
    <link rel="stylesheet" href="../view/public/css/template.css" />
    <link rel="icon" type="image/svg" href="../view/public/images/Logo1001.svg" />
    <title>Administrator</title>
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
                      <a href="../controller/controller_gestion_administrateur_en.php">
                        <div class="menuicon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 23 25.5">
                                <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(-4.5 -3)">
                                  <path id="Path_2722" data-name="Path 2722" d="M26,30V27.5a5,5,0,0,0-5-5H11a5,5,0,0,0-5,5V30" transform="translate(0 -3)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                  <path id="Path_2723" data-name="Path 2723" d="M22,9.5a5,5,0,1,1-5-5A5,5,0,0,1,22,9.5Z" transform="translate(-1)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                </g>
                            </svg>
                        </div>Manage
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
          <header id="menu_haut">
            <!-- flexbox menu du haut -->
            <div id="conteneur_menuhaut">
                  <!-- sélection de la langue -->
                  <select onchange="location.href=this.value">
                    <option value="../controller/controller_gestion_administrateur_en.php">English</option>
                      <option value="../controller/controller_gestion_administrateur_fr.php">Français</option>
                  </select>
            <!-- Titre de la page -->
                  <h3>Manage</h3>
                  <!-- Affichage profil connecté -->
                  <div id="headerprofile">
              
                    <div class="headername">
                      <h4><?php echo $prenom; echo ' '; echo strtoupper($nom);?></h4>
                      <h5><?php echo ucwords($statut_en) ;?></h5>
                      <h5> <a class="deconnexion" href="../controller/deconnexion.php">Log out</a></h5>
                    </div>
                  <div >
                  
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

          </header>
            <!-- PAGE TEXTE -->
            <div class="conteneur_principal">
          <!-- Rectangle blanc (titre page) -->
                <div  class="pagetitle">
            <!-- Texte rectangle blanc -->
                  <div class="pagetitletext">
                      <h1>My <span style="color: #5F5DFE"> access</span> </h1>
                      <h6>Choose</h6>
                  </div>
            <!-- Svg rectangle blanc -->
            <div class="pagetitleimage">
                <svg id="a154b3ae-224e-4b43-86b8-0ffeb27982c5" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="500" height="220" viewBox="0 0 1144 637"><title>working remotely</title><path d="M1172,547.81a180.56,180.56,0,0,1-26.12,93.88c0,34.62-16.14,66-42.32,88.87a144.74,144.74,0,0,1-21.08,15.28c-.3.19-.61.37-.92.55-.56.33-1.12.66-1.69,1l-.53.31h0c-2.39,1.35-4.83,2.65-7.32,3.87a165.67,165.67,0,0,1-73.76,17H245.17q-9,0-17.84-.72a211.15,211.15,0,0,1-61.06-14.14q-5.72-2.26-11.22-4.86-2.62-1.23-5.19-2.53c-1.07-.54-2.14-1.1-3.2-1.66A190.5,190.5,0,0,1,128,733.32a183.89,183.89,0,0,1-15.8-12.12C78.17,692,57.12,651.59,57.12,607A180.5,180.5,0,0,1,28,508.32c0-99.14,79.24-179.51,177-179.51,3,0,6,.09,9,.25.43,0,.85,0,1.28.06,16.48-28.09,38.51-53.9,65-76.62,72.24-61.9,177.82-100.92,295.43-100.92,98.82,0,189.15,27.55,258.34,73.07A174.18,174.18,0,0,1,920,202.1c97.74,0,177,80.37,177,179.51a184.9,184.9,0,0,1-1,18.78A180,180,0,0,1,1172,547.81Z" transform="translate(-28 -131.5)" fill="#6c63ff" opacity="0.1"/><path d="M938.69,405.47V394.74a39.05,39.05,0,1,0-29.38,0v10.73A55,55,0,0,0,883.77,421a55.08,55.08,0,0,0-31.08-22.52V387.74a39.05,39.05,0,1,0-29.38,0v10.73a55,55,0,0,0-23.21,13.16,55.08,55.08,0,0,0-29.41-20.16V380.74a39.05,39.05,0,1,0-29.38,0v10.73a55,55,0,0,0-26,16.06,55.09,55.09,0,0,0-36.57-33.06V363.74a39.05,39.05,0,1,0-29.38,0v10.73a55,55,0,0,0-40,47.77,54.62,54.62,0,0,0-16.57-7.77V403.74a39.05,39.05,0,1,0-29.38,0v10.73a55.18,55.18,0,0,0-34.66,28.7,54.58,54.58,0,0,0-15-6.7V425.74a39.05,39.05,0,1,0-29.38,0v10.73a54.29,54.29,0,0,0-14.21,6.22,55.14,55.14,0,0,0-34.41-28.22V403.74a39.05,39.05,0,1,0-29.38,0v10.73a55.1,55.1,0,0,0-35.87,31.36,55,55,0,0,0-18.75-9.36V425.74a39.05,39.05,0,1,0-29.38,0v10.73a55,55,0,0,0-40.31,53v248H392v-22h52v22H554v-22h79v-40h68v17h82v7h86v7H979v-248A55,55,0,0,0,938.69,405.47Z" transform="translate(-28 -131.5)" fill="#6c63ff" opacity="0.1"/><path d="M490.78,169h91.43A170.28,170.28,0,0,1,752.5,339.28V570a0,0,0,0,1,0,0h-432a0,0,0,0,1,0,0V339.28A170.28,170.28,0,0,1,490.78,169Z" fill="#2f2e41"/><path d="M500.78,178.28h71.43A170.28,170.28,0,0,1,742.5,348.56V560.71a0,0,0,0,1,0,0h-412a0,0,0,0,1,0,0V348.56A170.28,170.28,0,0,1,500.78,178.28Z" opacity="0.2"/><path d="M1072,734.09v17.46a165.67,165.67,0,0,1-73.76,17H245.17q-9,0-17.84-.72a211.15,211.15,0,0,1-61.06-14.14q-5.72-2.26-11.22-4.86-2.62-1.23-5.19-2.53c-1.07-.54-2.14-1.1-3.2-1.66A190.5,190.5,0,0,1,128,733.32V685.9A28.9,28.9,0,0,1,156.9,657H988.13a28.9,28.9,0,0,1,19,7.17l55,48.2A28.87,28.87,0,0,1,1072,734.09Z" transform="translate(-28 -131.5)" fill="#2f2e41"/><path d="M510.67,357.31q-32.71,2.16-65.17,7c-6.15.92-12.39,1.94-18,4.66a52.8,52.8,0,0,0-11.94,8.56,157.38,157.38,0,0,0-38,51.53c-5.57,12.15-9.57,25-14.82,37.25-18.69,43.75-52.59,79.53-72.32,122.82-4.27,9.37-7.87,19.15-9.3,29.34-1.48,10.54.2,22.84,8.86,29,4,2.83,8.86,4,13.62,5a1641.51,1641.51,0,0,0,181.57,29.65c-6.61-6.38-8.82-16.27-7.95-25.41s4.46-17.78,8-26.25q-51.81-11.43-103.36-24c-5.13-1.25-11.29-3.6-11.92-8.84-.32-2.67,1-5.24,2.3-7.59a407.17,407.17,0,0,1,52.4-74c0,28.06-1.39,59.75-1.39,87.82H747.35a248,248,0,0,1-6.84-48.85C739,501.24,757.1,447.89,752.4,394.24c-.44-4.95-1.12-10.05-3.71-14.29-4.47-7.32-13.39-10.35-21.59-12.85-31.44-9.56-63.54-19.23-96.4-18.48-9.77.23-19.5,1.37-29.21,2.52C571.9,354.63,540.4,355.34,510.67,357.31Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><path d="M358.88,679.82l23.6,75.53a2.36,2.36,0,0,0,2.25,1.65H486l-24-88-101.06,7.77A2.36,2.36,0,0,0,358.88,679.82Z" transform="translate(-28 -131.5)" fill="#656478"/><path d="M532,389.79c-4.4,2.53-9.53,3.44-14.53,4.31l-32.27,5.6c-6.28,1.09-12.89,2.33-17.73,6.48-9.9,8.47-7.76,24.06-4.76,36.74l6,25.44c4.52,19.12,9.14,38.47,18.41,55.79,16.19,30.23,45.89,52,78.55,62.49,11.67,3.75,24,6.19,36.18,4.85,23.86-2.62,44.27-19.63,56.85-40.08s18.57-44.17,24.06-67.55c5.27-22.38,10.28-45.08,9.94-68.08-.1-7.16-.82-14.64-4.64-20.71-8.37-13.33-27.34-14.33-42.89-11.87-2.42.39-4.93.81-7.26.08-7-2.18-7.16-11.79-10.16-18.46-5.67-12.58-22.49-14.81-36.24-13.67s-35.16,2.61-47.14,10.4C532.85,369,545.51,382,532,389.79Z" transform="translate(-28 -131.5)" fill="#fbbebe"/><path d="M532,389.79c-4.4,2.53-9.53,3.44-14.53,4.31l-32.27,5.6c-6.28,1.09-12.89,2.33-17.73,6.48-9.9,8.47-7.76,24.06-4.76,36.74l6,25.44c4.52,19.12,9.14,38.47,18.41,55.79,16.19,30.23,45.89,52,78.55,62.49,11.67,3.75,24,6.19,36.18,4.85,23.86-2.62,44.27-19.63,56.85-40.08s18.57-44.17,24.06-67.55c5.27-22.38,10.28-45.08,9.94-68.08-.1-7.16-.82-14.64-4.64-20.71-8.37-13.33-27.34-14.33-42.89-11.87-2.42.39-4.93.81-7.26.08-7-2.18-7.16-11.79-10.16-18.46-5.67-12.58-22.49-14.81-36.24-13.67s-35.16,2.61-47.14,10.4C532.85,369,545.51,382,532,389.79Z" transform="translate(-28 -131.5)" opacity="0.1"/><path d="M505.29,418.45c4.88,10.24,8.54,21.1,14.44,30.79,4.69,7.7,10.7,14.49,16.68,21.24C551.9,488,567.59,505.66,586.76,519a222.93,222.93,0,0,1,55.37-109c8.26-8.87,18.6-17.61,30.72-17.28,7.52.21,14.46,3.94,20.72,8.09,7,4.63,13.62,10,18.65,16.67,7.95,10.62,11.38,24.07,12,37.32s-1.44,26.47-3.48,39.57l-10.5,67.71c-.61,3.92-1.46,8.25-4.66,10.6a14.67,14.67,0,0,1-6,2.16c-38.17,7.43-77.51,2.61-116.4,2.23-43-.41-87.19,4.49-127.92-9.19-2.13-.72-4.34-1.55-5.78-3.26a12.06,12.06,0,0,1-2-4.31c-9.49-30.72-1.88-63.73,3.75-95.38a748.38,748.38,0,0,0,9.51-75.78c.17-2.29,25.33,2.77,28.14,4.39C496.53,398.07,501.61,410.73,505.29,418.45Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><g opacity="0.2"><path d="M194.87,668.29c0,.46-.05.91-.1,1.35q-5.72-2.26-11.22-4.86a9.1,9.1,0,0,1-5.19-2.53c-1.07-.54-2.14-1.1-3.2-1.66a13.68,13.68,0,0,1,.81-1.46c2.06-3.26,5.19-5.3,8.64-5.19s6.44,2.34,8.29,5.71A16.87,16.87,0,0,1,194.87,668.29Z" transform="translate(-28 -131.5)" fill="#3f3d56"/><path d="M195.41,651.17a16.88,16.88,0,0,1-2.51,8.48c-2.06,3.25-5.19,5.29-8.64,5.18l-.71-.05a9.1,9.1,0,0,1-5.19-2.53,12.53,12.53,0,0,1-2.39-3.12,17.55,17.55,0,0,1,.54-17.12c2.06-3.26,5.19-5.3,8.64-5.19s6.44,2.34,8.29,5.71A16.87,16.87,0,0,1,195.41,651.17Z" transform="translate(-28 -131.5)" fill="#3f3d56"/><ellipse cx="185.25" cy="633.7" rx="14.01" ry="10.7" transform="translate(-481.98 667.38) rotate(-88.19)" fill="#3f3d56"/><ellipse cx="185.79" cy="616.59" rx="14.01" ry="10.7" transform="translate(-464.35 651.34) rotate(-88.19)" fill="#3f3d56"/><ellipse cx="186.33" cy="599.47" rx="14.01" ry="10.7" transform="translate(-446.72 635.3) rotate(-88.19)" fill="#3f3d56"/><path d="M150,481.05a49.66,49.66,0,0,1-3.8-6l28.26-3.73L144,470.6a51.38,51.38,0,0,1,.31-40.64l40.12,22.44-36.75-28.84a51.28,51.28,0,1,1,82.84,60,51.12,51.12,0,0,1,5.55,9.53L199,510.93l39.33-11.83A51.34,51.34,0,0,1,228.53,547,51.28,51.28,0,1,1,148,544.43a51.28,51.28,0,0,1,2-63.38Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><path d="M240.5,515.62a51.06,51.06,0,0,1-12,31.35A51.28,51.28,0,1,1,148,544.43C141.37,535.49,240.68,509.87,240.5,515.62Z" transform="translate(-28 -131.5)" opacity="0.1"/></g><circle cx="68.02" cy="141.18" r="21.63" fill="#6c63ff" opacity="0.1"/><circle cx="158.17" cy="21.63" r="21.63" fill="#6c63ff" opacity="0.1"/><circle cx="150.84" cy="103.76" r="36.25" fill="#6c63ff" opacity="0.1"/><circle cx="543" cy="185.5" r="84" fill="#fbbebe"/><path d="M536.88,152.17c-22.41,2.84-46.6,6.59-62.44,22.69-8.86,9-14.05,21-18.32,32.88-6.62,18.5-11.55,38-10,57.63,1.38,17.56,7.88,35.52,2.62,52.34-2.42,7.74-7.17,14.5-10.86,21.71-6.84,13.39-10.06,28.4-11.24,43.39-.82,10.31-.66,20.92,2.73,30.69,3.61,10.4,10.65,19.25,15.11,29.31,6.6,14.86,7.26,31.58,7.77,47.83s.94,32.39,1.32,48.58c.24,10.18.26,21.08-5.37,29.57,20.79-8.33,41.87-16.83,59.66-30.43s32.19-33.21,34.49-55.49c1.86-18.06-4.24-35.86-9.5-53.24-13-43-21.4-88.84-11.94-132.75,3.41-15.81,11.7-33.46,27.61-36.37,9.71-1.77,19.4,2.66,28.15,7.24,20.68,10.82,42,24.82,49.7,46.85,7,19.92,1.11,42.11-8,61.13s-21.51,36.51-28.59,56.39c-10.87,30.5-7.81,66.21,10.25,93.08s51.43,43.4,83.52,39.06c-2.51-10.84-10.38-19.6-14.6-29.9-7.67-18.71-2.5-40.23,5.75-58.69S694.21,440,699.37,420.4c3.64-13.8,4.08-28.22,4.06-42.49,0-22.46-1.11-44.93-3.27-67.29s-5.46-45-12.58-66.51c-5.72-17.25-14.05-33.93-26.51-47.16-13.26-14.09-30.52-23.64-47.47-33-10.14-5.58-20.5-11.23-31.88-13.32-9-1.65-18.46-4-27.64-4.15C547.84,146.39,541.28,147.74,536.88,152.17Z" transform="translate(-28 -131.5)" fill="#434175"/><rect x="624.01" y="254.09" width="60.85" height="141.74" rx="2.9" transform="translate(45.9 -250.24) rotate(10.98)" fill="#656478"/><rect x="628.09" y="254.88" width="60.85" height="141.74" rx="2.9" transform="translate(46.13 -251) rotate(10.98)" fill="#3f3d56"/><ellipse cx="666.17" cy="286.29" rx="10.05" ry="4.15" transform="translate(230.2 754.21) rotate(-79.02)" fill="#6c63ff"/><path d="M683,332.5c-2.64-4.67-5.46-9.5-9.91-12.49a35,35,0,0,0-8.18-3.67c-9.69-3.39-19.54-6.81-29.79-7.35-1.67-.08-3.58,0-4.67,1.28-2.24,2.63,1.31,6.21,4.38,7.8l24.42,12.65-22.51-2.38c-3.27-.35-7.93.54-7.69,3.82.16,2.15,2.52,3.32,4.56,4,14.45,5,31.15,8.92,39.06,22-10.54-1-21.31-2-31.64.32-2.83.64-5.76,1.63-7.61,3.86s-2.06,6,.27,7.77c1.44,1.07,3.38,1.1,5.18,1,7.33-.35,14.85-1.81,21.89.28s13.29,9.47,10.86,16.39c6.24.56,13.62,0,19.39-2.69,6.36-3,6.21-8.64,5.82-15.44C696,356.33,689.39,343.9,683,332.5Z" transform="translate(-28 -131.5)" fill="#fbbebe"/><path d="M676.69,550.49a1125.21,1125.21,0,0,0-23-116.92c-5-20-10.68-40.34-9.25-60.92,20.66,2.63,39.17,4.58,58.21-3.86.31,10.81,8.15,20,11,30.45,1.91,7,1.19,14.41,1.94,21.62s3,14.2,4.93,21.21a260.23,260.23,0,0,1,6.63,106.74C709.48,550.91,694.32,553.22,676.69,550.49Z" transform="translate(-28 -131.5)" opacity="0.1"/><path d="M673.69,550.49a1125.21,1125.21,0,0,0-23-116.92c-5-20-10.68-40.34-9.25-60.92,20.66,2.63,39.17,4.58,58.21-3.86.31,10.81,8.15,20,11,30.45,1.91,7,1.19,14.41,1.94,21.62s3,14.2,4.93,21.21a260.23,260.23,0,0,1,6.63,106.74C706.48,550.91,691.32,553.22,673.69,550.49Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><path d="M384.63,745.27l9.79-242.87a14.86,14.86,0,0,1,15-14.26l386.52,3.7A14.86,14.86,0,0,1,810.59,508L790.17,740.67a14.86,14.86,0,0,1-14.55,13.56l-375.88,6.5A14.87,14.87,0,0,1,384.63,745.27Z" transform="translate(-28 -131.5)" fill="#3f3d56"/><ellipse cx="572.5" cy="467" rx="17" ry="20" fill="#6c63ff"/><path d="M964,584.76l-.8,6.86-13,110.86c-33.89,23.63-60.25.92-60.48,0L873.34,591.1l-.93-6.34Z" transform="translate(-28 -131.5)" fill="#3f3d56"/><path d="M964,584.76l-.8,6.86c-38.18,22.2-78.91,4.92-89.86-.52l-.93-6.34Z" transform="translate(-28 -131.5)" opacity="0.1"/><path d="M870.5,578.74v10s50.5,29.36,96,0v-10Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><path d="M876.37,565.53s-1.47,6.75-5.87,7.34v8.51h96v-7.63s-5.87-1.47-5-8.22Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><ellipse cx="890.21" cy="434.76" rx="43.3" ry="12.48" fill="#6c63ff"/><ellipse cx="890.21" cy="434.76" rx="43.3" ry="12.48" opacity="0.1"/><path d="M956.22,565.53c0,5-16.42,9.1-36.69,9.1h-1.08c-13.61-.1-25.37-2-31.37-4.84-2.71-1.28-4.25-2.73-4.25-4.26,0-2.54,4.2-4.84,11-6.49a113.49,113.49,0,0,1,25.73-2.61C939.8,556.43,956.22,560.5,956.22,565.53Z" transform="translate(-28 -131.5)" opacity="0.1"/><path d="M918.45,574.63c-13.61-.1-25.37-2-31.37-4.84h0L893.8,559Z" transform="translate(-28 -131.5)" opacity="0.1"/><path d="M880.1,566.23c-.52-.11-1.21.07-1.31.59a1.27,1.27,0,0,0,.2.75,10.67,10.67,0,0,0,4.78,4.09,2.85,2.85,0,0,0,1.09.35,1,1,0,0,0,1-.52,1.13,1.13,0,0,0-.07-.93,4.13,4.13,0,0,0-1.24-1.36C883.21,568.15,881.84,566.52,880.1,566.23Z" transform="translate(-28 -131.5)" opacity="0.1"/><circle cx="891.67" cy="515.79" r="25.83" fill="#6c63ff"/><path d="M188.33,515.85h12.11a25,25,0,0,1,25,25V578a0,0,0,0,1,0,0H163.33a0,0,0,0,1,0,0V540.85A25,25,0,0,1,188.33,515.85Z" fill="#3f3d56"/><path d="M188.33,515.85h12.11a25,25,0,0,1,25,25V578a0,0,0,0,1,0,0H163.33a0,0,0,0,1,0,0V540.85A25,25,0,0,1,188.33,515.85Z" opacity="0.1"/><circle cx="191.9" cy="524.55" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="518.34" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="512.12" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="505.91" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="499.7" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="493.49" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="487.28" r="4.97" fill="#3f3d56"/><circle cx="199.36" cy="489.76" r="4.97" fill="#3f3d56"/><circle cx="204.33" cy="487.28" r="4.97" fill="#3f3d56"/><circle cx="209.3" cy="484.79" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="481.07" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="474.86" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="468.64" r="4.97" fill="#3f3d56"/><circle cx="191.9" cy="462.43" r="4.97" fill="#3f3d56"/><path d="M240.5,577.91c-1.23.18-2.47.31-3.71.39A28.56,28.56,0,0,0,240,575a21.22,21.22,0,0,0-3-5.83,10.22,10.22,0,0,1-4,1.26c-1.23.18-2.47.31-3.71.4,1.63-1.33,3.15-3.33,4.75-5a21.09,21.09,0,1,0,6.61,12Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><path d="M257.11,602.6a9.68,9.68,0,0,1-4.18,1.39c-1.23.18-2.47.32-3.71.4a36.4,36.4,0,0,0,3.68-3.82,12.44,12.44,0,1,0,4.21,2Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><circle cx="184.45" cy="489.76" r="4.97" fill="#3f3d56"/><circle cx="179.48" cy="487.28" r="4.97" fill="#3f3d56"/><circle cx="174.51" cy="484.79" r="4.97" fill="#3f3d56"/><path d="M182.7,602.6a9.64,9.64,0,0,0,4.18,1.39c1.23.18,2.47.32,3.71.4a35.42,35.42,0,0,1-3.68-3.82,12.44,12.44,0,1,1-4.21,2Z" transform="translate(-28 -131.5)" fill="#6c63ff"/><path d="M188.33,519.58h12.11a25,25,0,0,1,25,25v32.87a4.24,4.24,0,0,1-4.24,4.24H167.57a4.24,4.24,0,0,1-4.24-4.24V544.58a25,25,0,0,1,25-25Z" fill="#3f3d56"/><g opacity="0.1"><path d="M240.88,579.27a18.83,18.83,0,0,1-1.6,1.52c.57,0,1.13-.09,1.7-.15C241,580.18,240.93,579.72,240.88,579.27Z" transform="translate(-28 -131.5)"/><path d="M231.82,573.33c1.25-.08,2.48-.21,3.72-.39a12,12,0,0,0,3.23-.88,21.28,21.28,0,0,0-1.74-2.87,7.52,7.52,0,0,1-2,.85A28.79,28.79,0,0,1,231.82,573.33Z" transform="translate(-28 -131.5)"/><path d="M201.27,584a21.08,21.08,0,0,1,32.5-17.76l.32-.34a21.1,21.1,0,1,0-27.82,31.73A21,21,0,0,1,201.27,584Z" transform="translate(-28 -131.5)"/></g><g opacity="0.1"><path d="M249.22,606.87c1.24-.08,2.48-.21,3.71-.39a9.7,9.7,0,0,0,4.18-1.4,12.43,12.43,0,0,1,5,8.8,11.38,11.38,0,0,0,.07-1.31,12.38,12.38,0,0,0-5-10,9.68,9.68,0,0,1-4.18,1.39l-1,.13A25.37,25.37,0,0,1,249.22,606.87Z" transform="translate(-28 -131.5)"/><path d="M249.72,602.63a10.19,10.19,0,0,1,1.24.09c.65-.69,1.29-1.43,1.94-2.15a12.4,12.4,0,0,0-15.6,12c0,.42,0,.83.06,1.24A12.42,12.42,0,0,1,249.72,602.63Z" transform="translate(-28 -131.5)"/></g><g opacity="0.1"><path d="M190.59,606.87c-1.24-.08-2.48-.21-3.71-.39a9.65,9.65,0,0,1-4.18-1.4,12.43,12.43,0,0,0-5,8.8,11.38,11.38,0,0,1-.07-1.31,12.38,12.38,0,0,1,5-10,9.64,9.64,0,0,0,4.18,1.39l1,.13A23.67,23.67,0,0,0,190.59,606.87Z" transform="translate(-28 -131.5)"/><path d="M190.09,602.63a10.36,10.36,0,0,0-1.25.09c-.64-.69-1.28-1.43-1.93-2.15a12.4,12.4,0,0,1,15.6,12c0,.42,0,.83-.06,1.24A12.42,12.42,0,0,0,190.09,602.63Z" transform="translate(-28 -131.5)"/></g>
</svg>
            </div>
                </div>
            <div class="choix">
                <h2> Choose an option</h2>
                <div class="gestionnaire">
                  <div class="gestionnaire-element">
                    <svg style="margin-bottom:-17px" xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 33.5 24">
                      <path id="Icon_material-person-add" data-name="Icon material-person-add" d="M22.5,18a6,6,0,1,0-6-6A6,6,0,0,0,22.5,18Zm0,3c-4.005,0-12,2.01-12,6v3h24V27C34.5,23.01,26.505,21,22.5,21Z" transform="translate(-1 -6)" fill="#6c63ff"/>
                      <line id="Line_33" data-name="Line 33" y2="10" transform="translate(6.5 5.5)" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-width="3"/>
                      <line id="Line_34" data-name="Line 34" x1="10" transform="translate(1.5 10.5)" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-width="3"/>
                    </svg>
                      <h4> Add a manager</h4>
                      <button onclick="window.location.href = '../controller/controller_inscription_en.php';">Click here</button>
                    </div>
                  <div class="gestionnaire-element">
                    <svg style="margin-top:10px" xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 102.05 102.049">
                      <g id="Group_1017" data-name="Group 1017" transform="translate(-472.975 -77.883)">
                        <path id="Icon_metro-search" data-name="Icon metro-search" d="M101.457,88.769,77.285,68.211c-2.5-2.249-5.171-3.281-7.33-3.182a38.274,38.274,0,1,0-4.283,4.283c-.1,2.159.933,4.831,3.182,7.33l20.559,24.172c3.52,3.911,9.27,4.241,12.778.733s3.178-9.258-.733-12.778ZM40.839,65.709A25.512,25.512,0,1,1,66.352,40.2,25.513,25.513,0,0,1,40.839,65.709Z" transform="translate(470.404 75.955)" fill="#5f5dfe"/>
                        <g id="Group_1015" data-name="Group 1015" transform="translate(521.793 102.623) rotate(-45)">
                          <g id="Group_1008" data-name="Group 1008" transform="translate(0 0)">
                            <path id="Path_3868" data-name="Path 3868" d="M1.648,0A1.648,1.648,0,1,0,3.3,1.648,1.649,1.649,0,0,0,1.648,0Z" fill="#5f5dfe"/>
                          </g>
                        </g>
                        <g id="Group_1016" data-name="Group 1016" transform="translate(496.155 102.623) rotate(-45)">
                          <g id="Group_1014" data-name="Group 1014" transform="translate(0 0)">
                            <path id="Path_3871" data-name="Path 3871" d="M20.117,12.7A19.777,19.777,0,0,0,12.971,3.57,19.637,19.637,0,0,0,1.648,0a1.648,1.648,0,1,0,0,3.3A16.593,16.593,0,0,1,17.04,13.884,1.648,1.648,0,1,0,20.117,12.7Z" fill="#5f5dfe"/>
                          </g>
                        </g>
                      </g>
                    </svg>
                      <h4> Search a manager</h4>
                       <?php
              
              $gestionnaire = $bdd->query('SELECT * FROM utilisateur WHERE statut= "gestionnaire"'); ?>
              <form method="GET">
                <input type="search" name="q" placeholder="Search..." />
                <input type="submit" value="Valider" />
              </form>
              <?php
               if(isset($_GET['q']) AND !empty($_GET['q'])) {
                $q = ($_GET['q']);
                $gestionnaire = $bdd->query('SELECT * FROM utilisateur WHERE statut= "gestionnaire" AND nom LIKE "%'.$q.'%"');
                
                
              
              ?>
              
              <?php if($gestionnaire->rowCount() > 0) { ?>
                <ul>
                <?php while($a = $gestionnaire->fetch()) { ?>
                <input type='button' class='boutonR' 
                      onclick="window.location.href='../controller/controller_selection_administrateur_fr.php?id=<?= $a['idUtilisateur'] ?>'" 
                      value='<?= $a['nom'] ?>'/>
                <?php } ?>
                </ul>
              <?php } else { ?>
                No results for: <?= $q ?>...
              <?php } }?>
                    </div>

                  <div class="gestionnaire-element">
                    <svg style="margin-bottom:-10px; margin-top: 5px;" xmlns="http://www.w3.org/2000/svg" width="105" height="105" viewBox="0 0 33.182 33.182">
                      <g id="Icon_feather-edit" data-name="Icon feather-edit" transform="translate(-1.5 -1.318)">
                        <path id="Path_3889" data-name="Path 3889" d="M16.5,6H6A3,3,0,0,0,3,9V30a3,3,0,0,0,3,3H27a3,3,0,0,0,3-3V19.5" fill="none" stroke="#5f5dfe" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                        <path id="Path_3890" data-name="Path 3890" d="M27.75,3.75a3.182,3.182,0,0,1,4.5,4.5L18,22.5,12,24l1.5-6Z" fill="none" stroke="#5f5dfe" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      </g>
                    </svg>
                      <h4> Edit </br> FAQ  </h4>
                      <button onclick="window.location.href = '../controller/controller_faq_edition_en.php';">Click here</button>
                  </div>
                   <div class="gestionnaire-element">
                     <svg style="margin-bottom:-10px; margin-top: 5px;" xmlns="http://www.w3.org/2000/svg" width="105" height="105" viewBox="0 0 33.182 33.182">
                       <g id="Group_1021" data-name="Group 1021" transform="translate(-2459.818 -765.41)">
                         <line id="Line_35" data-name="Line 35" x2="18" transform="translate(2466.5 776.5)" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-width="1"/>
                         <line id="Line_36" data-name="Line 36" x2="18" transform="translate(2466.5 779.5)" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-width="1"/>
                         <line id="Line_37" data-name="Line 37" x2="18" transform="translate(2466.5 782.5)" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-width="1"/>
                         <line id="Line_38" data-name="Line 38" x2="18" transform="translate(2466.5 785.5)" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-width="1"/>
                         <line id="Line_39" data-name="Line 39" x2="18" transform="translate(2466.5 788.5)" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-width="1"/>
                         <line id="Line_40" data-name="Line 40" x2="18" transform="translate(2466.5 791.5)" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-width="1"/>
                         <g id="Icon_feather-edit" data-name="Icon feather-edit" transform="translate(2458.318 764.092)">
                           <path id="Path_3889" data-name="Path 3889" d="M16.5,6H6A3,3,0,0,0,3,9V30a3,3,0,0,0,3,3H27a3,3,0,0,0,3-3V19.5" fill="none" stroke="#6c63ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                           <path id="Path_3890" data-name="Path 3890" d="M27.75,3.75a3.182,3.182,0,0,1,4.5,4.5L18,22.5,12,24l1.5-6Z" fill="#fff" stroke="#6c63ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                         </g>
                       </g>
                     </svg>
                      <h4> Edit </br>GTU</h4>
                      <button onclick="window.location.href = '../controller/controller_cgu_edition_en.php';">Click here</button>
                    </div>
            </div>
          </div>
      </div>
  </body>
</html>