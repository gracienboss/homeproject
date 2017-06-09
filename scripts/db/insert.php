<?php

$db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');


  $newUser = $db->prepare('INSERT INTO horaires (`nom`, `prenom`,`date`,`heure_entree`,`heure_sortie`) 
  VALUES (:nom, :prenom, :date, :heure_entree, :heure_sortie)');
  $newUser->bindParam(':nom', $_POST['nom']);
  $newUser->bindParam(':prenom', $_POST['prenom']);
  $newUser->bindParam(':date', $_POST['date']);
  $newUser->bindParam(':heure_entree', $_POST['heurentree']);
  $newUser->bindParam(':heure_sortie', $_POST['heuresortie']);
  
  $newUser->execute();
  header('Location: /index.php');
?>
