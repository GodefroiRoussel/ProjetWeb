<<<<<<< HEAD
<?php
if(isset($_COOKIE["user"]))
        { ?>

	<a href="Controller/controlDeconnexion.php">Deconnexion </a>
	
<?php
		}
		else {
			?>
<form method="post" action="../Controller/controlConnexion.php">
					<label for="email">Email</label> <input type="text" class="form-control" name="email" >
					<label for="passwd"> Mot de passe :</label><input type="password" class="form-control" name="passwd" >
					<input type="submit" value="Connexion" ></code>
				</form>
		<?php
		}
		?>
=======
<form method="post" action="Controller/controlConnexion.php">
					<label for="email">Email</label> <input type="text" class="form-control" name="email" >
					<label for="passwd"> Mot de passe :</label><input type="password" class="form-control" name="passwd" >
					<input type="submit" value="Connexion" ></code>
				</form>
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
