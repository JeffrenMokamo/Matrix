<?php
	$serveur = "localhost";
	$user = "root";
	$mdp = "";
	$nom_bd = "bd_matrix";
	$cnx = mysqli_connect($serveur, $user, $mdp);
	$bd = mysqli_select_db($cnx, $nom_bd);
?>