<?php
class UploadCourse extends Dbh {

    protected function setCourse($course_name, $course_code, $lecturer, $level) {
        // Insert data into the database
        $stmt = $this->connect()->prepare('INSERT INTO courses (course_name, course_code, lecturer, level) VALUES (?, ?, ?, ?)');

        if ($stmt->execute(array($course_name, $course_code, $lecturer, $level))) {
            // Success: redirect to home page
            header("location: ../upload_courses.php?status=course_success");
            exit();
        } else {
            // Database insertion failed
            header("location: ../upload_courses.php?status=stmtfailed");
            exit();
        }
    }
}
