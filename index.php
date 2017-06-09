<?php
    require_once('templates/head.php');
    
    require_once('templates/header.php');
    
     session_start();
  if($_SESSION['isConnected'] == True) {
    // Do nothing
  } else {
    header('Location: loginRegister.php');
  }

   // $heurentree = $_POST['heurentree'];
    //$heuresortie = $_POST['heuresortie'];  
    //$date = $_POST['date']; 
    //$heuretravaillee = $heuresortie - $heurentree;
    //if($heurentree > $heuresortie){
        // Do Nothing
    //}elseif($heurentree == $heuresortie){
      //  echo "Il y a erreur";
    //}else{
      //  $date ++;
    //}

      
?>
   
    



<?php
    $db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');
    $heures = $db->prepare('SELECT * FROM societe.horaires');
    $heures->execute();

    $db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');
    $suppressionemploye = $db->prepare('SELECT * FROM societe.horaires');
    $suppressionemploye->execute();
    
    $db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');
    $modelemploye = $db->prepare('SELECT * FROM societe.horaires');
    $modelemploye->execute();


  ?>
                    
                      <!-- Creation -->
<div id="contener">
  <center><table width="80%">
     <tr>  
         <td colspan="7"><h1>Liste des employés</h1></td>
     </tr>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date</th>
        <th>Heure d'entrée</th>
        <th>Heure de sortie</th>
        
                        
    </tr>
    
    <?php

   
     foreach($heures ->fetchAll() as $key => $value){
      
     echo "<tr>"  ; 
      
        echo "<td>" . $value["nom"] . "</td>";
        echo "<td>" . $value["prenom"] . "</td>";
        echo "<td>" . $value["date"] ."</td>";
        echo "<td>" . $value["heure_entree"] ."</td>";
        echo "<td>" . $value["heure_sortie"] ."</td>";
        
    echo "</tr>";
      
    }
    
                        

    ?>
   

</table></center>


                          <!-- delete part -->


<div class="detete">
  <form method = "post" action="scripts/db/delete.php">
     <select name = "employe_to_delete">

        <?php
            foreach($suppressionemploye->fetchALL() as $value){
            echo "<option value='" . $value['id'] . "'>" . $value['nom'] . "</option>";
    }

        ?>
     </select>
    <input type = "submit"   id="login-btn" value = "Supprimer">
 </form>
</div>




                           <!--update-->


<div class="update">
 <form method = "post" action="../scripts/db/updateForm.php">
    <select name = "renseignementemploye_to_update">

    <?php
        foreach($modelemploye->fetchALL() as $value){
        echo "<option value='" . $value['id'] . "'>" . $value['nom'] . "</option>";
      }

    ?>
    </select>

  
      <input type = "submit" id="login-btn"  value = "update">
  
    </form>
 </div>
</div>




                           <!-- insert part-->

    <div class = "contener">
       
       
        <form method = "post" action = "scripts/db/insert.php" >
     
         <center><table border="1" width="500" height="300">
          
          <h2>Heures de travail</h2>
          

          <tr> 
              <td align="right"><label>Nom :</label></td>
              <td><input type = "text" required = "true" name ="nom"></td>
          </tr>
          <tr> 
            <td align="right"><label>prénom :</label></td>
           <td><input type = "text" required = "true" name ="prenom"></td>
          </tr>  
          <tr>     
          <td align="right"><label>Date :</label>
            <td><input type = "date" required = "true" name ="date"></td>
          </tr>  
          <tr>     
            <td align="right"><label>Heure d'entrée :</label></td>
            <td><input type = "time" required = "true" name ="heurentree"></td>
           </tr> 
          <tr> 
             <td align="right"><label>Heure de sortie :</label></td>
             <td><input type = "time" required = "true" name ="heuresortie"></td>
          </tr> 
           <tr> 
           <td colspan="5" align="center"><input type="submit"  id="login-btn"  value="Ajouter"></td>
          </tr> 
         </table></center>
        </form>
        
    </div>
                
     <footer>  
       <?php
    require_once('templates/footer.php');
         ?>