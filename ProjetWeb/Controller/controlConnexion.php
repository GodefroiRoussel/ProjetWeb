<?php
// Je me connecte à la base de données
    
        include_once('../Model/ConnexionBDD.php');
        //Sécurisation des données saisies
        $email = htmlspecialchars ($_POST['email']);
        $password = htmlspecialchars ($_POST['passwd']);
		
		
        //On vérifie que le login existe dans la table
		
        $rqt = $pdo->prepare('SELECT email FROM interimaire WHERE email = ?');
        $rqt->execute(array($email));
        $droit =  $rqt->fetch();
		
        if(!isset($_COOKIE["user"]))
        {
            if(isset($_POST['email']) && isset($_POST['passwd'])){

                $verif_email = $pdo->prepare("SELECT COUNT(*) FROM interimaire WHERE email = ? ");
                $verif_email->execute(array($email));
                $count =$verif_email->fetch();
                if($count[0] == 0)
                { 
                    echo "Erreur pseudo. Veuillez vous réauthentifier ou vous inscrire";
                    header('Location: ../View/index.php');
                    //Exception, erreur ou ce que tu désires
                }
                else { //Login existant
                 
                    //Séléction du password pour le login saisi
                    $conn = $pdo->prepare('SELECT email,passwd FROM interimaire WHERE email = ? and passwd = ?');
                    $conn->execute(array($email,$password));
                    //$conn -> bindParam('.$pseudo.',$pseudo,PDO::PARAM_STR);
                    //$conn -> bindParam('.$password.',$password,PDO::PARAM_STR);
                    $donnees = $conn->fetchColumn();
                    //Je vérifie que le mot de passe correspond
                    //Si le mot de passe est hashé dans la bdd, il faut appliquer ce hashage à $password dans la vérification ci-dessous
                    if ($donnees == true)
                    {
                        setcookie("user",$email,time()+(100000),"/");
                    }
                    else{
                        header('Location: ../View/inscription.php');
                    }
					include_once('../View/index.php');
                }
           }
       }
       elseif(isset($_COOKIE["user"]))
            {
                if ($droit['isAdmin'] == 'non'){
                    header('Location: ../View/inscription.php');
                    exit();
                }
                else{
                    header('Location: ../View/inscription.php');
                    exit();
                }
            }

?>