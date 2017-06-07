
   
    <?php
    $db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');

    $employegamma = $db->prepare('SELECT * FROM horaires WHERE id = :toUpdate;');
    $employegamma->bindParam(':toUpdate', $_POST['renseignementemploye_to_update']); 
    $employegamma->execute();
   
   $employeToUpdate = $employegamma->fetch();
?>


<form method = "post" action = "update.php">
    <input type="hidden" name="id" value="<?php echo $employeToUpdate['id']?>">
    <label>Nom :</label>
    <input type = "text" required = "true" name = "nom" value="<?php echo $employeToUpdate['nom']?>">

    <label>Prénom</label>
    <input type = "text"  name = "prenom" value="<?php echo $employeToUpdate['prenom']?>">
    
    <label>Date</label>
    <input type = "date" name = "date" value="<?php echo $employeToUpdate['date']?>">
    
    
    <label>Heure d'entree</label>
    <input type = "time" name = "heurentree" value="<?php echo $employeToUpdate['heurentree']?>">
    
     <label>Heure de sortie</label>
    <input type = "time" name = "heuresortie" value="<?php echo $employeToUpdate['heuresortie']?>">

    <input type = "submit" value = "Ajouter">




</form>
