<?php
include "searchdbh.classes.php";  

class Course {
    private $conn;
    private $table_name = "courses";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function search($course) {
        $sql = $this->conn->prepare("SELECT * FROM " . $this->table_name . " WHERE course_code LIKE ?");
        $like_course = "%$course%";
        $sql->bind_param("s", $like_course);
        if (!$sql->execute()) {
            // Handle SQL execution error
            echo "Error executing query: " . $this->conn->error;
            return false;
        }
        return $sql->get_result();
    }
}

// Create database connection
$database = new Database();
$db = $database->getConnection();

// Create Course object
$loc = new Course($db);

// Process search request
if (isset($_GET['course'])) {
    $course = $_GET['course'];
    $result = $loc->search($course);

    if ($result && $result->num_rows > 0) {
        echo '
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Lecturer</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
        ';
        
        while ($row = $result->fetch_assoc()) {
            echo '
            <tr>
                <td>' . htmlspecialchars($row['course_name']) . '</td>
                <td>' . htmlspecialchars($row['course_code']) . '</td>
                <td>' . htmlspecialchars($row['lecturer']) . '</td>
                <td>' . htmlspecialchars($row['level']) . '</td>
            </tr>
            ';
        }
        
        echo '
                </tbody>
            </table>
        </div>
        ';
    } else {
        echo '<div class="text-center"><h3>No results found</h3></div>';
    }
} 
?>
