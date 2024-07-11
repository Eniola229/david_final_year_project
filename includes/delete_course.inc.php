<?php
include "../classes/dbh.classes.php";
include "../classes/dbhpublic.classes.php";

// Check if the request method is GET and id parameter is set
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    // Sanitize the input to prevent SQL injection
    $id = $_GET["id"];

    try {
        // Create a new instance of DbhPublic class and get the PDO connection
        $dbhPublic = new DbhPublic();
        $pdo = $dbhPublic->getConnection();

        // Prepare the SQL statement to delete the user record
        $sql = "DELETE FROM courses WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);

        // Execute the SQL statement
        $stmt->execute();

        // Check if any rows were affected
        if ($stmt->rowCount() > 0) {
            header("location: ../view_courses.php?status=co_deleted");
            exit();
        } else {
            header("location: ../view_courses.php?status=co_not_found");
            exit();
        }
    } catch (PDOException $e) {
        header("location: ../view_courses.php?status=database_error");
        exit();
    }
}
?>
