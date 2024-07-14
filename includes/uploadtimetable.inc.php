<?php
include_once "../classes/dbh.classes.php";
include_once "../classes/uploadtimetable.classes.php";
include_once "../classes/uploadtimetable-contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $level = isset($_POST['level']) ? htmlspecialchars($_POST['level']) : '';
    $file_path = isset($_FILES['file_path']) ? $_FILES['file_path'] : null;

    // Instantiate MaterialContr object
    $addtimetable = new UploadTimetableContr();
    $addtimetable->handlePost($file_path, $level);
} else {
    header("Location: ../index.php");
    exit;
}