<?php

// Checks if there is already a logged in session and if so it no longer shows the 'index.php' template and directs it to the 'welcome.php' template.
session_start();

if (isset($_SESSION['user'])) {
    header("location: ./templates/welcome.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Login</title>
</head>
<body>
    <main>
        <div class="container_all">
            <div class="rear_box">
                <div class="rear_box-login">
                    <h3>¿Do you already have an account?</h3>
                    <p>Login to enter the page</p>
                    <button id="btn_log-in">log in</button>
                </div>
                <div class="rear_box-register">
                    <h3>¿Do not you have an account yet?</h3>
                    <p>Register to start session</p>
                    <button id="btn_register">Register</button>
                </div>
            </div>

            <!-- Form login and register -->
            <div class="container_login-register">
                <!-- login -->
                <form action="php/login_user.php" class="form_login" method="POST">
                    <h2>Log in</h2>
                    <input type="text" placeholder="Email" name="mail">
                    <input type="password" placeholder="Password" name="password">
                    <button>Log in</button>
                </form>

                <!-- Register -->
                <form action="php/register_user.php" class="form_register" method="POST">
                    <h2>Register</h2>
                    <input type="text" placeholder="Name" name="name">
                    <input type="text" placeholder="Email" name="mail">
                    <input type="text" placeholder="User" name="user">
                    <input type="password" placeholder="Password" name="password">
                    <button>Register</button>
                </form>
            </div>
        </div>
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>