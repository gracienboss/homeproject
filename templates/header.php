
<body>
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
                       <!-- deconnexion-->
 <div class ="deconnexion">
   <form method="post" action="../connect/disconnect.php">
  
     <input type="submit" value="DECONNEXION">
   </form>
  </div>                    
                      
                      <!-- Creation -->

  <center><table border="2" width="900" height="400">
    <h2>Liste des employés</h2>
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
    <input type = "submit" value = "Supprimer">
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

  
      <input type = "submit" value = "update">
  
    </form>
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
           <td colspan="5" align="center"><input type="submit" value="Ajouter"></td>
          </tr> 
         </table></center>
        </form>
        
    </div>
                
       