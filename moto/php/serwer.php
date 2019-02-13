<?php
session_start();
$db = new mysqli("localhost", "root", "","motodb") or die ("Błąd");
$db->set_charset("utf8");

$_SESSION['message']="Proszę uzupełnić podane okienka";
if( isset($_POST["register"])){

    $username= $_POST['username'];
    $email=$_POST['email'];
    $password1= $_POST['password1'];
    $password2= $_POST['password2'];
    $numer= $_POST['telephone'];



    if(empty ($username) || empty ($email) || empty($password1) || empty ($password2) || empty($numer)) {


        $_SESSION['message']="Proszę uzupełnić wszystkie pola";

    }else{

        if($password1 == $password2) {
            $spr="SELECT * FROM user WHERE username='$username' OR email='$email'  OR phone='$numer'";

                if(@$db->query($spr)->num_rows == 0){
                $password1 = md5($password1);
                    $odp = $db->query("INSERT INTO user (username,email,password,phone) VALUES ('$username', '$email', '$password1', '$numer')");
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email ;
                    $_SESSION['phone'] = $numer;
                    $_SESSION['zalogowany'] = 1;
                    header('Location:homepage.php');

                }else{
                    $_SESSION['message']="W bazie jeż już taki użytkownik";


                }

        }else{
            $_SESSION['message']="Podane hasła nie są zgodne";

        }
    }

}
if (isset($_POST['powrot'])){
    header('Location:index.php');
}







$db->close();

?>
