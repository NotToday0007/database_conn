<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>

    <style>
       #sport{
        float:left;
        padding-left: 30px;
        font-size: 40px;
        padding-top: 30px;
        font-weight: bolder;
        
        
       }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Login</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="menu">
            <ul>
                <li><a href="homeplayer.php">Player</a></li>
                <li> <a href="Coach.php">Coach</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="https://www.linkedin.com/in/arif-hasan-rifat-342b181a4/">Fund</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <p id="sport">Sport Club</p>
            </header>
        <div>
            
       
               
</body>
</html>