<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">
<?php

wp_head(); 

?>
</head>
<!-- Page : Home -->
<body class="home" <?php body_class(); ?>>
    <!-- Layout : Header -->
    <header class="header">
        <h1> <?php bloginfo( 'name' ); ?></h1>
 
        <!-- Component : Menu -->
        <nav class="menu">

            <ul class="menu__list">

                <li class="menu__list__item"><a href="#" class="menu__list__item__link">Le vigneron</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link">Le domaine</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link">Nos amis</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link">Evènement</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link">Boutique</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link">Contacts</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link">Mentions légales</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link">À propos</a></li>
                
               <!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Se connecter</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    

    <div class="container">
      <label for="uname"><b>Pseudo</b></label>
      <input type="text" placeholder="Pseudo" name="uname" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Mot de passe" name="psw" required>

      <button type="submit">Connexion</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Se souvenir de moir
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> Mot de passe oublié <a href="#">password?</a></span>
    </div>
  </form>
</div>
            </ul>

        </nav>
        <!-- Burger menu button -->
        <a href="#" class="header__menu-icon"><i class=""></i></a>
    </header>