<?php
// Je me connecte à la base de données
    
        require("../Model/ConnexionBDD.php");
        // Suppression du cookie user// Set expiration time to -1hr (will cause browser deletion) 
		 setcookie('user', '', time()-10000000, '/');
		// Unset key 
		unset($_COOKIE["user"]);
		include_once('../Controller/controlIndex.php');