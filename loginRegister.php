
<?php ?>
<h2>Connexion</h2>
<form method="post" action="connect/login.php">
  <label for="username">Utilisateur : </label>
  <input type="text" name="username" id="username" required="true">

  <label for="password">Password : </label>
  <input type="password" name="password" id="password" required="true">

  <input type="submit" value="Se connecter">
</form>

<h2>S'enregistrer</h2>
<form method="post" action="connect/enregistrement.php">
  <label for="username">Utilisateur : </label>
  <input type="text" name="username" id="username" required="true">

  <label for="password">Password : </label>
  <input type="password" name="password" id="password" required="true">

  <input type="submit" value="s'enregistrer'">
</form>
