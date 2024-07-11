<?php
class Courses_ND2 extends Dbh
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function getCourses() {
        if ($this->pdo) {
           $stmt = $this->pdo->prepare("SELECT * FROM courses WHERE level = 'ND2' ORDER BY created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}

// Create an instance of the Course class
$courses = new Courses_ND2();

// Retrieve therapists
$coursesLists_2 = $courses->getCourses();
