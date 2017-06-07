<?php

$db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');
    
    $employegamma = $db->prepare('UPDATE societe.horaires 
    SET nom = :nom, prenom = :prenom,date = :date, heure_entree = :heure_entree, heure_sortie = :heure_sortie 
    WHERE id = :id');
    $employegamma->bindParam(':nom', $_POST['nom']);
    $employegamma->bindParam(':prenom', $_POST['prenom']);
    $employegamma->bindParam(':date', $_POST['date']);
    $employegamma->bindParam(':heure_entree', $_POST['heurentree']);
    $employegamma->bindParam(':heure_sortie', $_POST['heuresortie']);
    
    $employegamma->bindParam(':id', $_POST['id']);

    
    $employegamma->execute();

    header('Location: ../../index.php');  

?>