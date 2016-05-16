<?php
if(isset($_COOKIE["user"]) || $connexion)
        { ?>
	
	<a href="../Controller/controlMonCompte.php" class="btn btn-info">Mon Compte </a>
	<?php if(isAdmin($_COOKIE["user"]) || $estAdmin){ ?>
		<a href="../Controller/controlAjoutAdmin.php" class="btn btn-info">Ajouter un administrateur </a>
	<?php } ?>
	<a href="../Controller/controlDeconnexion.php" class="btn btn-info">Deconnexion </a>

	
<?php
		}
		else {
			?>
<form method="post" action="../Controller/controlConnexion.php">
					<label for="email">Email</label> <input type="text" class="form-control" name="email" >
					<label for="passwd"> Mot de passe :</label><input type="password" class="form-control" name="passwd" >
					<input type="submit" class="btn btn-info" value="Connexion" ></code>
				</form>
				<a href="../View/inscription.php" class="btn btn-info">M'inscrire</a>
		<?php
		}
		?>