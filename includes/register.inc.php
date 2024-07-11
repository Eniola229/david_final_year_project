<?php

include "../classes/dbh.classes.php";
include "../classes/register.classes.php";
include "../classes/register-contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize input data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : "";
    $matricno = isset($_POST['matricno']) ? htmlspecialchars($_POST['matricno']) : "";
    $level = isset($_POST['level']) ? htmlspecialchars($_POST['level']) : "";
    $department = isset($_POST['department']) ? htmlspecialchars($_POST['department']) : "";
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "";
    $confirm_password = isset($_POST['confirm_password']) ? htmlspecialchars($_POST['confirm_password']) : "";
    
    // Instantiate RegisterContr class
    $register = new RegisterContr(
        $name, $email, $matricno, $level, $department, $password, $confirm_password
    );

    // Call the registerUser method with the required arguments
    if ($register->registerUser(
         $name, $email, $matricno, $level, $department, $password
        )) {
        // Registration successful
        header("Location: ../login.php?status=success");
        exit(); 
    } 
}
 else {
		header("Location: ..register.php?status=invalid_attempt");
		exit();
	}