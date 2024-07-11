<?php
    session_start();


    include './classes/dbh.classes.php';
    
    if ($_SESSION['role'] != "1") {
        header("Location: includes/logout.inc.php");
        exit();
    }

        include "./classes/viewcourses.classes.php";