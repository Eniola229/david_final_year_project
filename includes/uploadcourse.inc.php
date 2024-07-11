<?php
include_once "../classes/dbh.classes.php";
include_once "../classes/uploadcourse.classes.php";
include_once "../classes/uploadcourse-contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $course_name = isset($_POST['course_name']) ? htmlspecialchars($_POST['course_name']) : ''; 
    $course_code = isset($_POST['course_code']) ? htmlspecialchars($_POST['course_code']) : '';
    $lecturer = isset($_POST['lecturer']) ? htmlspecialchars($_POST['lecturer']) : '';
    $level = isset($_POST['level']) ? htmlspecialchars($_POST['level']) : '';

    // Instantiate CourseContr object
    $addcourse = new CourseContr();
    $addcourse->handlePost($course_name, $course_code, $lecturer, $level);
} else {
    header("Location: ../index.php");
    exit;
}
