<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
    <?php wp_head(); ?>

</head>
<body class="home"> 
    <!-- Layout : Header -->
    <header class="header">
        <!-- Logo -->
        <section>
        <div class="dropdown-menu">
  <form class="px-4 py-3">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>

        </section>
        <h1 class="header__logo"><img class="header__logo__image" src="logo-Les-hauts-lieux.jpg" alt=""></h1>
        <!-- Component : Menu -->
        <nav class="menu">
            <img src="images/Micka_DomLHL_Pics_Media/PicsPaysageViti/P4294514.jpeg" alt="" class="post__header__font" />
            <ul class="menu__list">

                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class=""></i>Le vigneron</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class=""></i>Le domaine</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class=""></i>Nos amis</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class=""></i>Evènement</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class=""></i>Boutique</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class=""></i>Contacts</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class=""></i>Mentions légales</a></li>
                <li class="menu__list__item"><a href="#" class="menu__list__item__link"><i class=""></i>À propos</a></li>

            </ul>
        </nav>
        
        <!-- Burger menu button -->
        <a href="#" class="header__menu-icon"><i class=""></i></a>
    </header>
     
    <!-- Layout : Posts -->
    <div class="posts">
        <!-- Component : Post * 4 -->
        <article class="post post--excerpt">
            <header class="post__header">
                <h4 class="post__header__title">Le Domaine
                <img src="images/Micka_DomLHL_Pics_Media/PicsPaysageViti/P4294520.jpg" alt="" class="post__header__image" />
            </header>