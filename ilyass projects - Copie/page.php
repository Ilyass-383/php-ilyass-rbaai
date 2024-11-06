<?php 
session_start();


if (!isset($_SESSION['user']) || !isset($_SESSION['lastuser'])) {
    echo "Access denied. Please go back and complete the signup.";
    exit;
}


$user = htmlspecialchars($_SESSION['user']);
$lastUser = htmlspecialchars($_SESSION['lastuser']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        .greeting {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
   <?php include("nav.php"); ?>
   <p class="greeting">Bonjour, <?php echo "{$user} {$lastUser}"; ?>!</p>
</body>
</html>
