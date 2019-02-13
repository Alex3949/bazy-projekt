<?php
 include 'php/login.php'
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
  <link rel="stylesheet" href ="css/style.css">


</head>

<body>

<div class="login-bg">
</div>
<form action="index.php" method="post">
    <div class="login-box">
        <h1>Login</h1>

        <div class="text-box">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nazwa" name="use" value="" >
        </div>

        <div class="text-box">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Hasło" name="pass" value="" >
        </div>

        <div>
            <input type="submit" class="butt" name="zaloguj" value="Zaloguj się!" />
        </div>

        <div>
            <input type="submit" class="butt" name="rejestruj" value="Zarejestruj się!" />
        </div>


    </div>

</form>






</body>

</html>
