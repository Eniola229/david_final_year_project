<?php
    session_start();


    include './classes/dbh.classes.php';
    
    if ($_SESSION['role'] != "1") {
        header("Location: includes/logout.inc.php");
        exit();
    }

        include "./classes/viewcourses.classes.php";
        include "./classes/viewusers_admin.classes.php";
        include "./classes/viewtimetable.classes.php";
        include "./classes/viewtimetable_ND2.classes.php";