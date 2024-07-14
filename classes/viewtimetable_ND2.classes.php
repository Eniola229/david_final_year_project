<?php
class Timetable_ND2 extends Dbh
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function getTimetable() {
        if ($this->pdo) {
           $stmt = $this->pdo->prepare("SELECT * FROM timetable WHERE level = 'ND2' ORDER BY created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}

// Create an instance of the Course class
$timetable = new Timetable_ND2();

// Retrieve therapists
$timetableLists_ND2 = $timetable->getTimetable();
