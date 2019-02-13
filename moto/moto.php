<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Moto Page</title>
    <link rel="stylesheet" href ="css/moto.css">

</head>

<body>
<div class="tło">



    <div class="row">
        <div class="logo">  
            <img src="imgs/logo.png"/>
        </div>
        <ul class="main-nav">

            <?php
            if(isset($_SESSION['zalogowany'])){
                echo' <li><a href="homepage.php">Home</a></li>';
                echo'  <li><a href="moto.php">Motocykle</a></li>';
            echo' <li><a href="quad.php">Quady</a></li>';
            echo' <li><a href="kontakt.php">Kontakt</a></li>';
            echo' <li><a href="php/about_me.php">Twój Profil</a></li>';
                echo '<li><a href="php/logout.php">Wyloguj</a></li>';
            } else{
                echo '<li><a href="register.php">Zarejestruj się</a></li>';
                echo '<li><a href="index.php">Zaloguj się</a></li>';
            }
            ?>


        </ul>


    </div>

    <div class="menu">
        <ul class="menuv2">

            <li>Enduro<br> <a href="php/enduro.php"><img src="imgs/huśka.jpg" width="240" height="180" /></a></li>

            <li>Sportowe <br> <a href="php/sportowy.php"><img src="imgs/cbr.jpg" width="240" height="180"/></a></li>

            <li>Turystyczne<br> <a href="php/turystyczny.php"><img src="imgs/turystyk.jpg" width="240" height="180"/></a></li>
        </ul>
    </div>

</div>




</body>

</html>
