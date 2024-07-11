<?php
class Courses extends Dbh
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function getCourses() {
        if ($this->pdo) {
            $stmt = $this->pdo->prepare("SELECT * FROM courses ORDER BY created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}

// Create an instance of the Course class
$courses = new Courses();

// Retrieve therapists
$coursesLists = $courses->getCourses();
