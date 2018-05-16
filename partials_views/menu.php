
<!DOCTYPE html>
<html>
<head>
	<title>Vertical menu</title>
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>
<body>

	<menu>

		<ul>
			<li class="home"><a href="#">Acceuil</a></li>

			<li class="add_art"><a  target="blank" id="newArticle" >Nouvelle Article</a></li>
			
			<li class="art_cat"><a href="#">Articles par categories</a>
				<ul class="sousmenue">
					<li><a href="../views/developpement.view.php">Developpement</a></li>
					<li><a href="../views/reseaux.view.php">Reseaux</a></li>
					<li><a href="../views/system.view.php">Systeme</a></li>
					<li><a href="../views/database.view.php">Base De Données</a></li>
					<li><a href="../views/autres.view.php">Autres</a></li>
				</ul>
			</li>
			
			<li class="options"><a href="#"> Parametres profil</a></li>
			<li class="logout"><a href="../actions/deconectionAction">Se deconnecter</a></li>
		</ul>

	</menu>

  <script type="text/javascript" src="../scripts/jquery.js"></script>
  <script type="text/javascript" src="../scripts/menu.js"></script>

</body>
</html>