<?php 

    session_start();
    $email = $_SESSION['email'];

    require '../model/model_connexion.php'; 
    require '../model/model_req_infos.php'; 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';



    $mail = new PHPMailer(true);

    $prenom=InfosUser($bdd, $email)['prenom'];
    $nom=InfosUser($bdd, $email)['nom'];
    $entreprise=InfosUser($bdd,$email)['entreprise'];
    $statut=InfosUser($bdd,$email)['statut'];
    $birthday=InfosUser($bdd,$email)['birthday'];
    $mdp=InfosUser($bdd,$email)['mdp'];
    $photo=InfosUser($bdd,$email)['photo'];
    $mail_gest_admin=InfosUser($bdd,$email)['email'];


    if(isset($_SESSION['email'])) {
        if (isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['birthday']) && !empty($_POST['birthday']) && isset($_POST['entreprise']) && !empty($_POST['entreprise']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['emailbis']) && !empty($_POST['emailbis']) && isset($_POST['mdp']) && !empty($_POST['mdpbis'])){
            /*
            require '../model/model_verif_email.php';
            $emailbis=$_POST['emailbis'];
            if($user2){
            $existe="Cet email est déjà attribué à un compte.";
            }else{*/
            if (preg_match("#^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$#", $_POST['prenom']) && preg_match("#^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$#", $_POST['nom']) && preg_match("#^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$#", $_POST['entreprise'])){  
                if (preg_match("#^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$#", $_POST['birthday'])){ 
                    if ( $_POST['mdp'] == $_POST['mdpbis'] &&  $_POST['email'] == $_POST['emailbis']){
                        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])){ 
                            if(preg_match("#[A-Z]#",$_POST['mdp']) && preg_match("#[a-z]#",$_POST['mdp']) && preg_match("#[0-9]#",$_POST['mdp']) && preg_match("#[@[\]^_!\#$%&'()*+,./:;{}<>=|~?-]#",$_POST['mdp']) && (strlen($_POST['mdp']) >= 8)){
                                $file=$_FILES['file'];                            
                                $fileName = $_FILES['file']['name'];
                                $fileTmpName = $_FILES['file']['tmp_name'];
                                $fileSize = $_FILES['file']['size'];
                                $fileError = $_FILES['file']['error'];
                                $fileType = $_FILES['file']['type'];
                        
                                $fileExt = explode('.', $fileName);
                                $fileActualExt = strtolower(end(($fileExt)));
                        
                                $allowed = array('jpg','jpeg','png');
                                if (in_array($fileActualExt, $allowed)){
                                    if ($fileError ===0){
                                        if($fileSize < 1000000){
                                            $fileNameNew = uniqid('', true).".".$fileActualExt;
                                            $fileDestination = "../view/public/images/".$fileNameNew;
                                            
                                            if(isset($_POST['action'])){
                                                $email = $_POST['email'];   
                                                require '../model/model_verif_email.php';

                                                if ($user) {
                                                    $non="Cet email est déjà attribué à un autre compte";
                                                } else {
                                                    require '../model/model_inscription.php';
                                                    move_uploaded_file($fileTmpName, $fileDestination);
                                                    if ($statut == "gestionnaire"){
                                                        inscription($bdd, "utilisateur", strval($fileNameNew)); 
                                                    }                                         
                                                    if ($statut == "administrateur"){
                                                        inscription($bdd, "gestionnaire", strval($fileNameNew));
                                                    }

                                                    try{
                                                    $mail->isSMTP();
                                                    $mail->Host = 'smtp.gmail.com';
                                                    $mail->SMTPAuth = true;
                                                    $mail->Username = 'safecare.by.safeway@gmail.com'; //adresse gmail utilisée en tant que serveur SMTP
                                                    $mail->Password = 'Zucchini321!'; // mdp du compte gmail
                                                    $mail->SMTPSecure = 'ssl';
                                                    $mail->Port = 465;
                                        
                                                    $mail->setFrom('safecare.by.safeway@gmail.com'); // adresse gmail utilisée en tant que serveur SMTP
                                                    $mail->addAddress((string)$email); // adresse email utilisée pour recevoir les messages, peut être la même que le celle utilisée pour le serveur SMTP
                                        
                                                    $mail->IsHTML(true);
                                                    mb_internal_encoding('UTF-8');
                                                    $sujet = 'Inscription chez Safeway for Infinite Measures';
                                                    $mail->Subject = mb_encode_mimeheader($sujet);
                                                    switch ($statut) {
                                                        case 'administrateur':
                                                            $role='Gestionnaire';
                                                        break;
                                                        case 'gestionnaire':
                                                            $role='Conducteur';
                                                        break;   
                                                    }
                                                    $mot1="Prénom";
                                                    $mot2="impérativement";
                                                    $mot3="été";
                                                    $mot4="ajouté";
                                                    $mail->Body = 'Bienvenue chez Safeway for Infinite Measures !<br/> 
                                                    Vous avez '.utf8_decode($mot3).' '.utf8_decode($mot4).' par '.utf8_decode($prenom).' '.utf8_decode($nom).' ('.utf8_decode((string)$mail_gest_admin).'), '.$statut.' chez '.utf8_decode($entreprise).'. <br/>
                                                    Vos informations sont les suivantes : <br/>
                                                    '.utf8_decode($mot1).' et nom : '.utf8_decode($_POST['prenom']).' '.utf8_decode($_POST['nom']).'<br/>
                                                    Email : '.$email.'<br/>
                                                    Date de naissance : '.$_POST['birthday'].'<br/>
                                                    Inscrit en tant que '.$role.' chez '.utf8_decode($_POST['entreprise']).'. <br/>
                                                    Votre mot de passe actuel est : '.utf8_decode($_POST['mdp']).'<br/>
                                                    Ce mot de passe est temporaire, veuillez '.utf8_decode($mot2).' le changer en cliquant sur "Modifier mon profil" dans votre page de profil, puis cliquant sur "Modifier mon mot de passe"';
                                        
                                                    $mail->send();
                                                    $alert1 = 'Un email de confirmation a été envoyé à '.$email.' !';
                                                    $ok=$_POST['prenom'].' '.$_POST['nom'].' a bien été inscrit ! <br/>Un email de confirmation lui a été envoyé.';

                                        
                                                    } catch(Exception $e){
                                                        echo $e->errorMessage();
                                                        $alert2 = 'Oups ! Une erreur est survenue. Veuillez essayer à nouveau.';
                                                    } catch(\Exception $e){
                                                        echo $e->getMessage();
                                                    }
                                                    header( "refresh:3;url=../controller/controller_inscription_fr.php" );

                                                
                                                }      
                                            
                                            }

                                        } else {
                                        $alert2= "Le fichier est trop volumineux";
                                        }

                                    } else {
                                    $alert3= "Votre fichier n'a pas été uploadé";
                                    }

                                } else {
                                $alert4= "Veuillez choisir le bon type de fichier (jpeg, pjg ou png)";
                                }                        
                            }                                     
                        }       
                    }
                //}
            }           
        }     
    }      
    
        switch ($statut) {
            case 'administrateur':
                $statut_fr=$statut;
                require '../view/inscription_gestionnaire_fr.php';
            break;
            case 'gestionnaire':
                $statut_fr=$statut;
                require '../view/inscription_utilisateur_fr.php';
            break;   
        }
    }
