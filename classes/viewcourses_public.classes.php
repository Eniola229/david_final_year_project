<?php
class Courses_ND1 extends Dbh
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function getCourses() {
        if ($this->pdo) {
           $stmt = $this->pdo->prepare("SELECT * FROM courses WHERE level = 'ND1' ORDER BY created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}

// Create an instance of the Course class
$courses = new Courses_ND1();

// Retrieve therapists
$coursesLists = $courses->getCourses();
