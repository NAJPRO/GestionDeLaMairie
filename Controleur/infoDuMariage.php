<?php
include_once '../lib/autoload.init.php';
include_once '../lib/connectDb.init.php';



if(!empty($_GET['id'])){

    $db = connectDb();
    $manager = new ManagerMariage($db);
    

    $listeMariage = $manager->getActeMariage($_GET['id']);

    // print_r($listeMariage);
    $conjoin = $manager->getPersonne($listeMariage->conjoin);
    $docsConjoin = $manager->searchDocument($conjoin->identifiant);
   
   
    $conjointe = $manager->getPersonne($listeMariage->conjointe);
    $docsConjointe = $manager->searchDocument($conjointe->identifiant);

    
   
    $temoin_conjoin = $manager->getPersonne($listeMariage->temoin_conjoin);
    $docsTemoin_conjoin = $manager->searchDocument($temoin_conjoin->identifiant);
 

    $temoin_conjointe = $manager->getPersonne($listeMariage->temoin_conjointe);
    $docsTemoin_conjointe = $manager->searchDocument($temoin_conjointe->identifiant);
    
    $pere_conjoin = $manager->getPersonne($listeMariage->pere_conjoin);
    $docsPere_conjoin = $manager->searchDocument($pere_conjoin->identifiant);

    $pere_conjointe = $manager->getPersonne($listeMariage->pere_conjointe);
    $docsPere_conjointe = $manager->searchDocument($pere_conjointe->identifiant);

    
    $mere_conjoin = $manager->getPersonne($listeMariage->conjoin);
    $docsMere_conjoin = $manager->searchDocument($mere_conjoin->identifiant);

    $mere_conjointe = $manager->getPersonne($listeMariage->mere_conjointe);
    $docsMere_conjointe = $manager->searchDocument($mere_conjointe->identifiant);


    include_once "../Vue/admin/infoDuMariage.php";
    // exit;
}else{
    header('Location: adminMariage.php');

}








