<?php
class Timetable_ND1 extends Dbh
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function getTimetable() {
        if ($this->pdo) {
           $stmt = $this->pdo->prepare("SELECT * FROM timetable WHERE level = 'ND1' ORDER BY created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}
 
// Create an instance of the Course class
$timetable = new Timetable_ND1();

// Retrieve therapists
$timetableLists = $timetable->getTimetable();
