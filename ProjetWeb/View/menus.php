<!-- Menus.php --> 
<nav class="navbar navbar-default navbar-static-top">
	<ul class="egmenu">
<<<<<<< HEAD
		<li><a href="../Controller/controlIndex.php">Accueil</a></li>
=======
		<li><a href="../index.php">Accueil</a></li>
>>>>>>> b37e1b39dd4295beca97663fff2bc7de3e14652a
		<li><a href="../Controller/controlOffre.php">Offres d'emploi</a></li>
        <li><a href="choix.php">Pourquoi nous choisir?</a></li>
        <li><a href="nouscontacter.php">Contactez nous</a></li> 
		
	<?php	if ($estAdmin){
	?>
		<li><a href="../Controller/controlInterimaire.php">Consulter Intérimaire</a></li>
		<li><a href="nouscontacter.php"></a>Missions</li>
		<li><a href="nouscontacter.php"></a>Contrats</li>
		<?php			
		} ?>
	</ul>
</nav>

