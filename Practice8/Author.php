<?php
session_start();
$isRestricted = false;

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $isRestricted = true;
}

const ADMIN_EMAIL = 'admin@admin.com';
const ADMIN_PASSWORD = '111111';
filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .container {
            width: 400px;
        }
    </style>

    <title>Login</title>
</head>
<body>

<div class="container">
    <h1>Login</h1>
    <form action="authHandler.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="field">
                <label>E-mail: <input type="email" name="email"><br></label>
                <?php $email = $_POST["email"]; ?>
            </div>
        </div>
        <div class="row">
            <div class="field">
                <label>Password: <input type="password" name="password"><br></label>
                <?php $password = $_POST["password"]; ?>
            </div>
        </div>
        <?php if($isRestricted) {
            echo "You are already logged in! Do you want to <a href='Login.php'> add user?</a>";
            echo "<br>";
        }?>
        <?php

        if ($email == ADMIN_EMAIL && $password == ADMIN_PASSWORD) {
        header('Location: Adding.php');
        $_SESSION['auth'] = true;
        }
        else {
        header('Location: Adding.php');
        echo "Incorrect information </br>";
        $_SESSION['auth'] = false;
        }?>
        <input type="submit" class="btn" value="Login">
    </form>
</div>
</body>
</html>