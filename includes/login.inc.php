<?php

include "../classes/dbh.classes.php";
include "../classes/login.classes.php";
include "../classes/login-contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $login = new LoginContr($email, $password);
    $login->loginUser();
    header("Location: ../index.php?error=none");
    exit;
} else {
    header("Location: ../index.php?error=invalid_attempt");
    exit;
}
