<?php
require('inc/theme-enqueue.php');
require('inc/theme-template-tags.php');
require('inc/theme-setup.php');



// message d'erreur si connexion vide
add_action( 'wp_authenticate', '_catch_empty_user', 1, 2 );

function _catch_empty_user( $username, $pwd ) {
  if (empty($pwd)&&empty($username)) {
    wp_safe_redirect(home_url().'/connexion/?login=empty');
    exit();
  }  if ( empty( $username )) {
    wp_safe_redirect(home_url() . '/connexion/?user=empty' );
    exit();
  }
  if (empty($pwd)) {
    wp_safe_redirect(home_url().'/connexion/?pwd=empty');
    exit();
  }
}
?>

<?php
// messaeg d'erreur si erreur de connexion
add_action( 'wp_login_failed', 'pippin_login_fail' );  // hook failed login
function pippin_login_fail( $username ) {
     $referrer = $_SERVER['HTTP_REFERER'];  // where did the post submission come from?
     // if there's a valid referrer, and it's not the default log-in screen
     if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
          wp_redirect(home_url() . '/connexion/?login=failed' );  // let's append some information (login=failed) to the URL for the theme to use
          exit;
     }
}