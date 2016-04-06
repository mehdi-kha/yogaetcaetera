<!DOCTYPE html>
<html lang="fr">

<style>



</style>

<head>
	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href = "index2.css" rel = "stylesheet">

	<title>Cours de Yoga à Dijon - Association Yoga etcaetera Isabelle Fabre
	</title>
</head>



<body>
	<div class = "container">
		<div class = "page-header jumbotron">
			<h1>Cours de Yoga à Dijon</h1>

		</div>

		<div class = "jumbotron menu">
			<h2>Cours de yoga à Dijon association Yoga etcaetera Isabelle Fabre</h2>
			

			<nav>
				<div class = "btn-group btn-group-lg" role ="group">

					<!Barre de navigation>

					<a class="btn btn-default" href="index.html" role="button">Accueil</a>
					<a class="btn btn-default" href="presentation_yoga.html" role="button">Le yoga</a>
					<a class="btn btn-default" href="horaires_et_tarifs.html" role="button">Horaires et tarifs</a>
					<a class="btn btn-default" href="a_propos.html" role="button">Qui suis-je ?</a>
					<a class="btn btn-default" href="contact.html" role="button">Contact</a>


					<div class="btn-group btn-group-lg" role="group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Authentification
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Utilisateur</a></li>
							<li><a href="#">Administrateur</a></li>
						</ul>
					</div>


				</div>
			</nav>

		</div>




		<div class = "row">

			<div class = "col-lg-2">
				<img src = "images/dame_yoga.jpg"/>
			</div>














			<div class = "col-lg-8 col-lg-offset-1">

			<h2> Voici la liste des adhérents à l'association : </h2>
				
				<?php 

				ini_set('display_errors','off');

include("fonctions.php");

$user=$_POST['user'];
$password=$_POST['password'];

if ((! isset($password)) | ($password == "")) // Si le mot de passe existe et n'est pas vide
{
	echo "<p class='erreur'>Vous devez impérativement taper votre mot de passe</p>";
}

if ($link = (mysql_connect('localhost:3306', "$user", "$password") )) //Si on arrive à se connecter
{
	$db_selected = mysql_select_db('yogaetcaetera', $link);
	$_SESSION['user']=$user;
	$_SESSION['password']=$password;

		$resultat = array(); //Initialisation de resultat

		$resultat = consult($user, $password);

		print "<table class=\"table\">
		<th>Prénom</th>
		<th>Nom de famille</th>";

		for($i=0 ; $i<2 ; $i++){
			print "<tr>"; //Une ligne
			for($j=0 ; $j<2 ; $j++){
				print "<td>";

				echo $resultat[$j][$i];
				print "</td>";
			}
			print "</tr>";
		}

		print "</table>";

		
	}
	else{
		echo "Il y a eu un problème lors de la connexion.";
	}

	
	?>
			</div>


		</div>







		

		<p class = "text-right jumbotron">Réalisé par Mehdi Khadir</p>

	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>











