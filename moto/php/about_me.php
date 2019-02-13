<?php
session_start();
?>

<!DOCTYPE html>
<html>

<meta charset="utf-8">
<title>Twój profil</title>
<link rel="stylesheet" href ="../css/about_me.css">
<head>


</head>


<body>


<div class="calosc">
    <div class="row">
        <div class="logo">
            <img src="../imgs/logo.png"/>
        </div>
        <ul class="main-nav">

            <?php
            if(isset($_SESSION['zalogowany'])){
                echo'<li><a href="../homepage.php">Home</a></li>';
                echo ' <li><a href="../moto.php">Motocykle</a></li>';
                echo ' <li><a href="../quad.php">Quady</a></li>';
                echo' <li><a href="../kontakt.php">Kontakt</a></li>';
                echo'<li><a href="about_me.php">Twój Profil</a></li>';
                echo '<li><a href="logout.php">Wyloguj</a></li>';
            } else{
                echo '<li><a href="../register.php">Zarejestruj się</a></li>';
                echo '<li><a href="../index.php">Zaloguj się</a></li>';
            }
            ?>
        </ul>
    </div>

   <div class="about_me">

       <?php
       if(isset($_SESSION['zalogowany'])){
          $nazwa = $_SESSION['username'];
          $email = $_SESSION['email'];
          $numer =  $_SESSION['phone'];
           echo "<div id='login_name'><a>Twoja nazwa: $nazwa <br>Twój email: $email<br>Twój numer tlefonu: $numer</a>";
           echo '</div>'; } else{
           echo "nic nie ma";
       }


       ?>

   </div>


</body>

</html>
