<?php
require('inc/theme-enqueue.php');
require('inc/theme-template-tags.php');
require('inc/theme-setup.php');


function lost_password_link( $formbottom ) {
	$formbottom .= '<a href="' . wp_lostpassword_url() . '">Mot de passe perdu</a>';
	return $formbottom;
}
add_filter( 'login_form_bottom', 'lost_password_link' );