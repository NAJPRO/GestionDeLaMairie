<?php
include_once '../lib/autoload.init.php';
include_once '../lib/connectDb.init.php';
$manager = new ManagerMariage(connectDb());


if (!empty($_POST)) {
    # code...
    if(isset($_POST['accepter'])){
        $manager->modifierEtatActeMariage($_POST['id'], 'valider');
        header('Location: adminMariage.php');
    }elseif(isset($_POST['rejeter'])){
        $manager->modifierEtatActeMariage($_POST['id'], 'refuser');
        header('Location: adminMariage.php');


    }
}