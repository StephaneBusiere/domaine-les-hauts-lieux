<?php
/*
Template Name: connexion
*/
get_header(); ?>


<?php
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (strpos($url, 'connexion/?user=empty')!==false) {
			echo "<div class='login_failed'>Champs d'identifiant vide</div>";
		}
		if (strpos($url, 'connexion/?pwd=empty')!==false) {
			echo "<div class='login_failed'>Champs de mote de passe vide</div>";
		}
		if (strpos($url, 'connexion/?login=empty')!==false) {
			echo "<div class='login_failed'>Champs d'identifiant et de mote de passe vide</div>";
		}	
	?>

<?php
		$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if (strpos($url,'connexion/?login=failed') !== false) {
		    echo "<div class='login_failed'>Mot de passe ou nom d'utilisateur incorrect</div>";
		}
?>

<?php get_footer(); ?>