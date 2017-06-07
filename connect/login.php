<?php
$db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');

$user = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
$user->bindParam(':username', $_POST['username']);
$user->bindParam(':password', $_POST['password']);
$user->execute();
if($user->fetch() == False) {
  header('Location: falseRegistration.php');
  
} else {
  session_start();
  $_SESSION['isConnected'] = True;
  header('Location: /index.php');
}
?>
