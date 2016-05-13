<?php
// Je me connecte à la base de données
    
        include_once('../Model/ConnexionBDD.php');
        //Sécurisation des données saisies
        $email = htmlspecialchars ($_POST['email']);
        $password = htmlspecialchars ($_POST['passwd']);
		
		
        //On vérifie que le login existe dans la table
		
        $rqt = $pdo->prepare('SELECT email FROM interimaire, administrateur WHERE email = ?');
        $rqt->execute(array($email));
        $droit =  $rqt->fetch();
		
        if(!isset($_COOKIE["user"]))
        {
            if(isset($_POST['email']) && isset($_POST['passwd'])){

<<<<<<< HEAD
                $verif_email = $pdo->prepare("SELECT COUNT(*) FROM interimaire i, administrateur a WHERE i.email = ? OR a.email = ? ");
                $verif_email->execute(array($email, $email));
                $count =$verif_email->fetch();
                if($count[0] == 0)
                { 
                    //echo "Erreur pseudo. Veuillez vous réauthentifier ou vous inscrire";
                    header('Location: ../View/inscription.php');
					exit();
=======
                $verif_email = $pdo->prepare("SELECT COUNT(*) FROM interimaire, administrateur WHERE email = ? ");
                $verif_email->execute(array($email));
                $count =$verif_email->fetch();
                if($count[0] == 0)
                { 
                    echo "Erreur pseudo. Veuillez vous réauthentifier ou vous inscrire";
                    header('Location: ../View/index.php');
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
                    //Exception, erreur ou ce que tu désires
                }
                else { //Login existant
                 
                    //Séléction du password pour le login saisi
<<<<<<< HEAD
                    $conn = $pdo->prepare('SELECT email,passwd FROM interimaire i WHERE (i.email = ? and i.passwd = ?)');
=======
                    $conn = $pdo->prepare('SELECT email,passwd FROM interimaire, administrateur WHERE email = ? and passwd = ?');
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
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
<<<<<<< HEAD
						$conn = $pdo->prepare('SELECT email,passwd FROM administrateur WHERE (email = ? and passwd = ?)');
						$conn->execute(array($email,$password));
						$donnees = $conn->fetchColumn();
						if ($donnees == true)
                    {
                        setcookie("user",$email,time()+(100000),"/");
						include_once('../View/inscription.php');
                    }
						else{
							header('Location: ../View/index.php');
							exit();
						}
                    }
					
=======
                        header('Location: ../View/index.php');
                    }
					include_once('../View/index.php');
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
                }
           }
       }
       elseif(isset($_COOKIE["user"]))
            {
<<<<<<< HEAD
				include_once('../Model/estAdmin.php');
				$estAdmin= isAdmin($_COOKIE["user"]);
=======
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
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