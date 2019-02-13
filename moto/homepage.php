<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
   <link rel="stylesheet" href ="css/homepage.css">

</head>

<body>



<div class="calosc">



    <div class="row">
        <div class="logo">
           <img src="imgs/logo.png"/>
        </div>
        <ul class="main-nav">

        <?php
        if(isset($_SESSION['zalogowany'])){
            echo'<li><a href="homepage.php">Home</a></li>';
            echo ' <li><a href="moto.php">Motocykle</a></li>';
            echo ' <li><a href="quad.php">Quady</a></li>';
            echo' <li><a href="kontakt.php">Kontakt</a></li>';
            echo'<li><a href="php/about_me.php">Twój Profil</a></li>';
            echo '<li><a href="php/logout.php">Wyloguj</a></li>';
        } else{
            echo '<li><a href="register.php">Zarejestruj się</a></li>';
            echo '<li><a href="index.php">Zaloguj się</a></li>';
        }
        ?>

        </ul>
    </div>

    <div class="mistrz">

        <h1>Witaj na stronie MotoMaster!</h1>

    <div class="nowości">
        <article>
        <p>Honda wprowadza nowe technologie:</br>
          <iframe width="400" height="250" src="https://www.youtube.com/embed/VH60-R8MOKo" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>

        </article>
    </div>
    </div>




</div>






</body>

</html>
