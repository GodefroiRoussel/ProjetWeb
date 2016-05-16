<!-- Menus.php --> 
<nav>
	<ul class="nav nav-tabs">
		<li><a href="../Controller/controlIndex.php">Accueil</a></li>
		<li><a href="../Controller/controlOffre.php">Offres d'emploi</a></li>
        <li><a href="../Controller/controlNousChoisir.php">Pourquoi nous choisir?</a></li> 
		
	<?php	
	if (isset($_COOKIE["user"]) || $connexion){
		?>
		<li><a href="../Controller/controlContrat.php">Contrats</a></li>
	<?php }
	
	if ($estAdmin){
	?>
		<li><a href="../Controller/controlInterimaire.php">Consulter Intérimaire</a></li>
		<li><a href="../Controller/controlMissions.php">Missions</a></li>
		<?php			
		} ?>
	</ul>
</nav>

