<?php
  var_dump($_POST);die;
  $db = new PDO('mysql:host=localhost;dbname=societe','root','');

  $heure = $db->prepare("INSERT INTO `horaires`(`nom`, `prenom`, `date`, `heure_entree`, `heure_sortie`) 
  VALUES (:nom, :prenom, :date, :heure_entree, :heure_sortie");

  $heure->bindParam(':nom', $_POST['nom']);
  $heure->bindParam(':prenom', $_POST['prenom']);  
  $heure->bindParam(':date', $_POST['date']);  
  $heure->bindParam(':heure_entree', $_POST['heurentree']);  
  $heure->bindParam(':heure_sortie', $_POST['heuresortie']);
  $heure->execute();  
    
  header('Location: ../../index.php');

?>
