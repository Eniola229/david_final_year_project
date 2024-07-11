<?php
class Material_ND1 extends Dbh
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->connect();
    }

    public function getMaterials() {
        if ($this->pdo) {
           $stmt = $this->pdo->prepare("SELECT * FROM materials WHERE level = 'ND1' ORDER BY created_at DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            return [];
        }
    }
}
 
// Create an instance of the Course class
$materials = new Material_ND1();

// Retrieve therapists
$materialsLists = $materials->getMaterials();
