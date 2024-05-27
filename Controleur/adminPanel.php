<?php
include_once ('../lib/autoload.init.php');
function connectDb(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=mariage', 'root', '');
    } catch (\PDOException $e) {
        die($e->getMessage());
        return null;
    }
    return $db;
}
$manager = new ManagerMariage(connectDb());

$nombreMariageApprouve = $manager->nombreMariageParStatut('valider');
$nombreMariageRefuse = $manager->nombreMariageParStatut('refuser');
$nombreMariageEnAttende = $manager->nombreMariageParStatut('en attente');
$notify = $manager->countMariageEnAttente();

$totalDemande = $nombreMariageApprouve + $nombreMariageRefuse + $nombreMariageEnAttende;


include_once "../Vue/admin/adminPanel.php";