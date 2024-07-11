<?php
class MaterialContr extends UploadMaterial {

    public function handlePost($course_code, $file_path, $level) {
        // Input Validation
        if (empty($course_code) || empty($file_path) || empty($level)) {
            // All fields are required
            header("location: ../upload_materials.php?status=allfieldsrequired");
            exit();
        }

        $this->setMaterial($course_code, $file_path, $level);
    }
}
?>
