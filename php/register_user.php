<?php

//Conection and inserting data into database
include 'conection.php';

$name = $_POST['name'];
$mail = $_POST['mail'];
$user = $_POST['user'];
$password = md5($_POST['password']);

$query = "INSERT INTO usuarios (name, mail, user, password)
          VALUES ('$name', '$mail', '$user', '$password')";

//Validate that the mail is not repeated in the database
$review_mail = mysqli_query($conection, "SELECT * FROM usuarios WHERE mail='$mail' ");

if (mysqli_num_rows($review_mail) > 0) {
    echo '
        <script>
            alert("The mail is already registered");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

//Validate that the user is not repeated in the database
$review_user = mysqli_query($conection, "SELECT * FROM usuarios WHERE user='$user' ");

if (mysqli_num_rows($review_user) > 0) {
    echo '
        <script>
            alert("The user is already registered");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

$excute = mysqli_query($conection, $query);

if ($excute) {
    echo '<script>alert("Account created sucess");</script>';
}else{
    echo '<script>alert("Account not created sucess!");</script>';
}

mysqli_close($conection);

?>