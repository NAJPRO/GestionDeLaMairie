
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Public/css/listeDeMariage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire2</title>
</head>
<body>
    <div class="container" >
        <h1>LISTE DES MARIAGES </h1>

        <?php 
            if(isset($listeMariage)) {
            foreach($listeMariage as $liste){
                $idMariage = $liste->identifiant;

                $nomHomme = ($manager->getPersonne($liste->conjoin))->nom;

                $nomFemme = ($manager->getPersonne($liste->conjointe))->nom;
        ?>
        <div class="b1">
            <p>Vous avez reçu une demande de mariage entre : </p>
            <div class="a1">
                <div class="col">
                    <h4>Monsieur <?php echo $nomHomme; ?></h4>
                </div>
                <div class="et"> et </div>
                <div class="col" id="col">
                    <h4>Madame <?php echo $nomFemme; ?></h4>
                </div>
                <div><a href="?page=infoDuMariage&id=<?php echo $idMariage;?>">voir plus</a></div>
            </div>
        </div>
        <?php } } else { echo ("<h4>Vous n'avez aucune demande de mariage en attente</h4>");} ?>

</div>
</body>
</html>