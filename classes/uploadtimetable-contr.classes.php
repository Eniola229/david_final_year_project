<?php
class UploadTimetableContr extends UploadTimetable {

    public function handlePost($file_path, $level) {
        // Input Validation
        if (empty($file_path) || empty($level)) {
            // All fields are required
            header("location: ../upload_timetable.php?status=allfieldsrequired");
            exit();
        }

        $this->setTimetable($file_path, $level);
    }
}
?>
