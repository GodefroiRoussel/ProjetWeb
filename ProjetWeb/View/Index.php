<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<title>EmploiTech</title>
    </head>

    <body>
		<header> 
		<!-- Logo, nom de l'entreprise et une partie pour se connecter -->
			
			<figure>
				<img src="../Img/logo_ET.png" alt="Logo de l'entreprise" />
			</figure>
			
			<div id="menu">
				<?php include("menus.php"); ?>
			</div>
			
			<div id="connexion">
				<form method="post" action="index.php">
					<p> Pseudo: <input type="text" name="Pseudo" > </p>
					<p> Mot de passe :<input type="password" name="passwd" > </p>
					<input type="submit" value="Connexion" ></code>
				</form>
	 
		</header>
	</body>
	
</html>