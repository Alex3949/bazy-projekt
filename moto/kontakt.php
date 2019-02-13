<?php
session_start();

?>

<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href ="kontakt.css">


</head>


<body>


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
<br>
<br>
<br>
<br>
<br>
<div class="kontakt-title">
    <h1>Witaj!</h1>
    <h2>Jesteśmy zawsze do Twojej dyspozycji!</h2>
</div>

<div class="wiadomość">
        <form id="wiadomosc" type="post" action="">
            <input name="name" type="text" class="form-controla" placeholder="Twoje imie">
            <br>
            <input name="email" type="email" class="form-controla" placeholder="Twój emial">
            <br>
            <textarea name="message" class="form-controla" placeholder="Wiadomość" rows="4"></textarea>
            <div>
                <input type="submit" class="form-control submit" name="rejestruj" value="Wyślij!" />
            </div>
        </form>
</div>


</body>


</html>
