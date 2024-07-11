<?php
include_once "../classes/dbh.classes.php";
include_once "../classes/uploadmaterial.classes.php";
include_once "../classes/uploadmaterial-contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $course_code = isset($_POST['course_code']) ? htmlspecialchars($_POST['course_code']) : ''; 
    $level = isset($_POST['level']) ? htmlspecialchars($_POST['level']) : '';
    $file_path = isset($_FILES['file_path']) ? $_FILES['file_path'] : null;

    // Instantiate MaterialContr object
    $addmaterial = new MaterialContr();
    $addmaterial->handlePost($course_code, $file_path, $level);
} else {
    header("Location: ../index.php");
    exit;
}