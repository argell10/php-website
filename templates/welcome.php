<?php

// Checks that the user who enters this page has logged in first to have access to the page
session_start();

if(!isset($_SESSION['user'])){
    echo '
        <script>
            alert("Please log in to view this page");
            window.location = "../index.php";    
        </script>
    ';
    session_destroy();
    die();
}
//session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome!!</h1>
    <a href="../php/sign_off.php">Sign off</a>
</body>
</html>