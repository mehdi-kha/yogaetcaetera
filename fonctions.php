<?php
session_start();


function consult($user, $password){
	if ( $link = (mysql_connect('localhost:3306', "$user", "$password") ))
	{
		$db_selected = mysql_select_db('yogaetcaetera', $link);
		$requete = "SELECT *
		FROM adherent";

		$reponse = mysql_query($requete);


			if(!$reponse){ //Si la requête est bien effectuée
				die('Requête invalide : ' . mysql_error());
			}
				$nbTuples = mysql_num_rows($reponse); //Récupération du nombre de résultats -- 
				 if($nbTuples!=0){ //S'il y a des résultats
				 $prenom_adherent = array();
				 $nom_adherent = array();
				 while($tupleCourant = mysql_fetch_assoc($reponse)){
				 	array_push($prenom_adherent,$tupleCourant['prenom']);
				 	array_push($nom_adherent,$tupleCourant['nom']);
				 }

				     return array($prenom_adherent,$nom_adherent); //Cas où tout va bien
				 }
				 print "Malheureusement le client que vous cherchez n'a pas été trouvé :/ <br/><br/>";
				 return array(-1,0,0); //Il n'y a pas de résultat
				}


			}


			?>