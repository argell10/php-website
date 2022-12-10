<?php

session_start();

include 'conection.php';

$mail = $_POST['mail'];
$password = md5($_POST['password']);

$review_login = mysqli_query($conection, "SELECT * FROM usuarios WHERE mail='$mail' and password='$password' ");

if (mysqli_num_rows($review_login) > 0) {
    $_SESSION['user'] = $mail;
    header("location: ../templates/welcome.php");
    exit;
}else{
    echo '
        <script>
            alert("the user does not exist please check the data entered");
            window.location = "../index.php";
        </script>
    ';
    exit;
}

?>