<?php 

get_header();

?>

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
        <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> Mot de passe oublié <a href="#">password?</a></span>
    </div>
  </form>
</div>