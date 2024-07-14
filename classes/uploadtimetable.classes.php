<?php

class UploadTimetable extends Dbh
{
    protected function setTimetable($file_path, $level) {
        // Check if a file was uploaded
        if(isset($file_path)) {
            $file_name = $file_path['name'];
            $file_tmp = $file_path['tmp_name'];
            $file_type = pathinfo($file_name, PATHINFO_EXTENSION);

            // Check if the uploaded file type is PDF
            if($file_type === 'pdf') {
                // File is a PDF
                $uploadDirectory = '../timetable_uploads/';

                // Generate a unique name for the file
                $uniqueFileName = uniqid() . '_' . $file_name;

                // Move the uploaded file to the server
                $uploadPath = $uploadDirectory . $uniqueFileName;
                if(move_uploaded_file($file_tmp, $uploadPath)) {
                    // Insert the unique filename into the database
                    $stmt = $this->connect()->prepare('INSERT INTO timetable (file_path, level) VALUES (?, ?)');

                    if ($stmt) {
                        if ($stmt->execute(array($uniqueFileName, $level))) {
                            // redirect to the home page with a success message
                            header("location: ../upload_timetable.php?status=m_success");
                            exit();
                        } else {
                            // Database insertion failed
                            header("location: ../upload_timetable.php?status=stmtfailed");
                            exit();
                        }
                    } else {
                        // SQL statement preparation failed
                        header("location: ../upload_timetable.php?status=stmtprepfailed");
                        exit();
                    }
                } else {
                    // File upload failed
                    header("location: ../upload_timetable.php?status=fileuploadfailed");
                    exit();
                }
            } else {
                // File type is not allowed
                header("location: ../upload_timetable.php?status=invalidfiletype");
                exit();
            }
        } else {
            // No file uploaded
            header("location: ../upload_timetable.php?status=nofileuploaded");
            exit();
        }
    }
}