<?php 
if(isset($_POST['submit'])) {
 
  $email = $_POST['emailValue'];
  $pass = $_POST['passwordValue'];
  $em = "/\w+(@emsi-edu\.ma){1}$/"; 

  if(empty($email) || empty($pass)) {
      echo "Les valeurs sont vides";
  } else {
      if(preg_match($em, $email)) { 
          echo "L'email est correct<br>";
      } else {
          echo "L'email n'est pas valide<br>";
      }

      echo "Vos informations sont : <br>";
      echo "Email: {$email}<br>";
      echo "Mot de passe: {$pass}<br>";
  }
} else {
  echo "Please login"; }
?><?php 
if(isset($_POST['submit'])) {
 
  $email = $_POST['emailValue'];
  $pass = $_POST['passwordValue'];
  $em = "/\w+(@emsi-edu\.ma){1}$/"; 

  if(empty($email) || empty($pass)) {
      echo "Les valeurs sont vides";
  } else {
      if(preg_match($em, $email)) { 
          echo "L'email est correct<br>";
      } else {
          echo "L'email n'est pas valide<br>";
      }
      header("Location:home.php");
      echo "Vos informations sont : <br>";
      echo "Email: {$email}<br>";
      echo "Mot de passe: {$pass}<br>";
  }
} else {
  echo "Please login"; }
?>