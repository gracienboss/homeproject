<?php
$db = new PDO('mysql:host=localhost;dbname=societe', 'root', '');

$user = $db->prepare('SELECT * FROM users WHERE username = :username, password = :password');
$user->bindParam(':username', $_POST['username']);
$user->bindParam(':password', $_POST['password']);

$user->execute();
if($user->fetch() == False) {
  // Create account
  $newUser = $db->prepare('INSERT INTO users (`username`, `password`) VALUES (:username, :password)');
  $newUser->bindParam(':username', $_POST['username']);
  $newUser->bindParam(':password', $_POST['password']);
  $newUser->execute();
  header('Location: /index.php');
} else {
    
  header('Location: alreadyconnected.php');
}
?>