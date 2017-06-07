<?php
  $db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');
  $deleteData = $db->prepare("DELETE FROM `horaires` WHERE `id`= :toDelete;");
  $deleteData->bindParam(':toDelete', $_POST['employe_to_delete']);
  $deleteData->execute();

  header('Location: ../../index.php');
?>
