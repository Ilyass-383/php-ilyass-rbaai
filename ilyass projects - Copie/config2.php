<?php
session_start(); 

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['password1'];
    $st = "/\w+(@emsi-edu.ma){1}$/";
    $name = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    
    if (empty($email) || empty($pass1) || empty($pass2) || empty($name) || empty($lastName)) {
        echo "All fields are required!";
    } else {
        
        if ($pass1 !== $pass2) {
            echo "Passwords do not match!";
        }
       
        else if (!preg_match($st, $email)) {
            echo "Please use an @emsi-edu.ma email!";
        } else {
 
            $_SESSION['user'] = $name;
            $_SESSION['lastuser'] = $lastName;

            
            header("Location: page.php");
            exit;
        }
    }
}
?>
