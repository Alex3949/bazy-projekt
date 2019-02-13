<?php
  include 'php/serwer.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reister Page</title>
    <link rel="stylesheet" href ="css/style.css">
    <link rel="stylesheet" href ="css/bootstrap.min.css">

</head>

<body>

<div class="login-bg">
</div>


<div class="login-box">
    <h1>Rejestracja</h1>
<form action="register.php" method="post">
<?php echo  $_SESSION['message'] ?>
    <div class="text-box">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Nazwa" name="username"  value=""  >
    </div>

    <div class="text-box">
        <i class="fas fa-envelope-square"></i>
        <input type="text" placeholder="E-mail" name="email" value="" >
    </div>

    <div class="text-box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Hasło" name="password1" value="" >
    </div>
    <div class="text-box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Powtórz hasło" name="password2" value="" >
    </div>

    <div class="text-box">
        <i class="fas fa-mobile"></i>
        <input type="text" placeholder="Numer Telefonu" name="telephone" value="" >
    </div>

    <form>
        <input type="submit" class="butt" name="register" value="Rejestracja!" />
    </form>

    <form action="index.php">
        <input type="submit" class="butt" name="powrot" value="Powrót" />
    </form>

</form>
</div>


</body>

</html>
