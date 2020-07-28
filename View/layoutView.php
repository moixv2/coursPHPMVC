<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">		
		<link rel="stylesheet" href="Content/Css/style.css">
	</head>

	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-dark navbarHome">
		  <a class="navbar-brand" href="index.php">Acceuil</a>
		</nav>

		<div class="container">
			<!-- Ici nous afficherons les différents contenus de notre page, tout en conservant le "layout" principal -->
			<div class="articles">
				<?php echo $content ?> 
			</div>
		</div> <!-- container -->

		<!-- Footer -->
		<footer>	
			<nav class="navbar navbar-dark">
			   Cours by Christophe Crognier
			</nav>
		</footer>

		<script src="Content/js/index.js" ></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>