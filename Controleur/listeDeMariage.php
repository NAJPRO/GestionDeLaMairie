<?php
include_once '../lib/autoload.init.php';
include_once '../lib/connectDb.init.php';


$db = connectDb();

$manager = new ManagerMariage($db);

$listeMariage = $manager->recuperInfoActeDeMariage('en attente');

include_once "../Vue/admin/listeDeMariage.php";
