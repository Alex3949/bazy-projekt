<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
   <link rel="stylesheet" href ="css/quad.css">

</head>

<body>
<div class="tło">



  <div class="row">
      <div class="logo">
          <img src="imgs/logo.png"/>
      </div>
      <ul class="main-nav">
      <li><a href="homepage.php">Home</a></li>
      <li><a href="moto.php">Motocykle</a></li>
      <li><a href="quad.php">Quady</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
          <li><a href="php/about_me.php">Twój Profil</a></li>
          <?php
          if(isset($_SESSION['zalogowany'])){
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

        <li>Sportowe<br> <a href="php/quad_sportowy.php"><img src="imgs/sportowy.jpg" width="240" height="180" /></a></li>

        <li>Przeprawowe <br> <a href="php/quad_przeprawowy.php"><img src="imgs/przeprawowy.jpg" width="240" height="180"/></a></li>

        <li>Turystyczne<br> <a href="php/quad_turystyczny.php"><img src="imgs/turystyczny.jpg" width="240" height="180"/></a></li>
    </ul>
</div>

</div>




</body>

</html>
