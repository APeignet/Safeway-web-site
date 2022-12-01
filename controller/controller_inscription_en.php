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
            $email=$_POST['emailbis'];
            if($user){
            $existe="This email has already been attributed to an account.";
            }else{
                */
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
                                                    $non="This email has already been attributed to an other account";
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
                                                    $sujet = 'Registering at Safeway for Infinite Measures';
                                                    $mail->Subject = mb_encode_mimeheader($sujet);
                                                    switch ($statut) {
                                                        case 'administrateur':
                                                            $role='Manager';
                                                        break;
                                                        case 'gestionnaire':
                                                            $role='Driver';
                                                        break;   
                                                    }
                                                    $mail->Body = 'Welcome to Safeway for Infinite Measures!<br/> 
                                                    You were registered by '.utf8_decode($prenom).' '.utf8_decode($nom).' ('.utf8_decode((string)$mail_gest_admin).'), '.$statut.' at '.utf8_decode($entreprise).'. <br/>
                                                    Here are your submitted information: <br/>
                                                    First and last name: '.utf8_decode($_POST['prenom']).' '.utf8_decode($_POST['nom']).'<br/>
                                                    Email: '.$email.'<br/>
                                                    Date of birth: '.$_POST['birthday'].'<br/>
                                                    Registered as a '.$role.' at '.utf8_decode($_POST['entreprise']).'. <br/>
                                                    Your current password is: '.utf8_decode($_POST['mdp']).'<br/>
                                                    This password is temporary, please change it by logging in, then going to "modify my profile" in your profile and click on "Modify my password"';
                                        
                                                    $mail->send();
                                                    $ok=$_POST['prenom'].' '.$_POST['nom'].' was successfully registered ! <br/>A confirmation email was sent.';

                                        
                                                    } catch(Exception $e){
                                                        echo $e->errorMessage();
                                                        $alert2 = 'Sorry! An error occured. Please try again.';
                                                    } catch(\Exception $e){
                                                        echo $e->getMessage();
                                                    }
                                                    header( "refresh:3;url=../controller/controller_inscription_en.php" );

                                        
                                                }     
                                            }
                                        }else {
                                            $alert2= "The file is too big";
                                        }

                                    }else {
                                        $alert3= "The file didn't upload";
                                    }
                                }else {
                                    $alert4= "Please choose the correct type of file (jpeg, pjg ou png)";
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
                $statut_en="Administrator";
                require '../view/inscription_gestionnaire_en.php';
            break;
            case 'gestionnaire':
                $statut_en="Manager"; 
                require '../view/inscription_utilisateur_en.php';
            break;   
        }
    }

