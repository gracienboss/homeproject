<?php
    require_once('templates/head.php');
    require_once('templates/header.php');
    require_once('templates/footer.php');
    
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
   
    


