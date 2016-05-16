<?php
// Je me connecte à la base de données
    
        require("../Model/ConnexionBDD.php");
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

                $verif_email = $pdo->prepare("SELECT COUNT(*) FROM interimaire i, administrateur a WHERE i.email = ? OR a.email = ? ");
                $verif_email->execute(array($email, $email));
                $count =$verif_email->fetch();
                if($count[0] == 0)
                { 
                    //echo "Erreur pseudo. Veuillez vous réauthentifier ou vous inscrire";
                    header('Location: ../View/inscription.php');
					exit();
                }
                else { //Login existant
                 
					//Comme le mot de passe est hashé dans la bdd, il faut appliquer ce hashage à $password dans la vérification ci-dessous
					$password=md5($password);
                    $conn = $pdo->prepare('SELECT email,passwd FROM interimaire i WHERE (i.email = ? and i.passwd = ?)');
                    $conn->execute(array($email,$password));
                    //$conn -> bindParam('.$pseudo.',$pseudo,PDO::PARAM_STR);
                    //$conn -> bindParam('.$password.',$password,PDO::PARAM_STR);
                    $donnees = $conn->fetchColumn();
                    //Je vérifie que le mot de passe correspond
                    if ($donnees == true)
                    {
                        setcookie("user",$email,time()+(100000),"/", null, false, true);
						
						include_once('../Model/estAdmin.php');
						$estAdmin= isAdmin($email);
						$connexion=true;
						include_once('../View/Index.php');
						
                    }
                    else{
						$conn = $pdo->prepare('SELECT email,passwd FROM administrateur WHERE (email = ? and passwd = ?)');
						$conn->execute(array($email,$password));
						$donnees = $conn->fetchColumn();
						if ($donnees == true)
						{	
                        setcookie("user",$email,time()+(100000),"/", null, false, true);
						include_once('../Model/estAdmin.php');
						$estAdmin= isAdmin($email);
						$connexion=true;
						include_once('../View/Index.php');
						}
						else{
							header('Location: ../View/Index.php');
							exit();
						}
                    }
					
                }
           }
       }
       elseif(isset($_COOKIE["user"]))
            {
				include_once('../Model/estAdmin.php');
				$estAdmin= isAdmin($_COOKIE["user"]);
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