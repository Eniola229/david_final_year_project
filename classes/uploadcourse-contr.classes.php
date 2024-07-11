<?php
class CourseContr extends UploadCourse {

    public function handlePost($course_name, $course_code, $lecturer, $level) {
        // Validation
        if (empty($course_name) || empty($course_code) || empty($lecturer) || empty($level)) {
            // All fields are required
            header("location: ../upload_courses.php?status=allfieldrequired");
            exit();
        }
        
        // Process form data
        $this->setCourse($course_name, $course_code, $lecturer, $level);
    }
}
