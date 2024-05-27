<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Public/css/infoDuMariage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h1>INFORMATION SUR LE MARIE</h1>  
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">   
            <div class="cols">
                <h3>LE MARIE</h3>
                
                <div class="a">
                    <p>nom tr: </p>
                    <p><?php echo $conjoin->nom ; ?></p>
                </div>
                <div class="a">
                    <p>prenom :</p>
                    <p><?php echo $conjoin->prenom ; ?></p>
                </div> 
                <div class="a">
                    <p>date de naissance :</p>
                    <p><?php echo $conjoin->date_naissance ; ?></p>
                </div> 
                <div class="a">
                    <p>contact :</p>
                    <p><?php echo $conjoin->contact ; ?></p>
                </div> 
                <div class="a">
                    <p>email :</p>
                    <p><?php echo $conjoin->email ; ?></p>
                </div>
                <div class="a">
                    <p>CNI :
                        <a href="../pdf/<?php echo $docsConjoin->cni ; ?>">cliquez ici</a>
                    </p>
                </div>
                <div class="a">
                    <p>acte de naissance :
                        <a href="../pdf/<?php echo $docsConjoin->acteNaissance ; ?>">cliquez ici</a>
                    </p>
                </div>
            </div>

            <div class="cols">
                <h3>PÈRE DE MARIE</h3>
               
                <div class="a">
                    <p>nom :</p>
                    <p><?php echo $pere_conjoin->nom ; ?></p>
                </div>
                <div class="a">
                    <p>prenom :</p>
                    <p><?php echo $pere_conjoin->prenom ; ?></p>
                </div> 
                <div class="a">
                    <p>date de naissance :</p>
                    <p><?php echo $pere_conjoin->date_naissance ; ?></p>
                </div> 
                <div class="a">
                    <p>contact :</p>
                    <p><?php echo $pere_conjoin->contact ; ?></p>
                </div> 
                <div class="a">
                    <p>email :</p>
                    <p><?php echo $pere_conjoin->email ; ?></p>
                </div>
                <div class="a">
                    <p>CNI :
                        <a href="../pdf/<?php echo $docsPere_conjoin->cni ; ?>">cliquez ici</a>
                    </p>
                </div>
            </div>

            <div class="cols">
                <h3>MERE DU MARIE</h3>
                
                <div class="a">
                    <p>nom :</p>
                    <p><?php echo $mere_conjoin->nom ; ?></p>
                </div>
                <div class="a">
                    <p>prenom :</p>
                    <p><?php echo $pere_conjoin->prenom ; ?></p>
                </div> 
                <div class="a">
                    <p>date de naissance :</p>
                    <p><?php echo $pere_conjoin->date_naissance ; ?></p>
                </div> 
                <div class="a">
                    <p>contact :</p>
                    <p><?php echo $pere_conjoin->contact ; ?></p>
                </div> 
                <div class="a">
                    <p>email :</p>
                    <p><?php echo $pere_conjoin->email ; ?></p>
                </div>
                <div class="a">
                    <p>CNI :
                        <a href="../pdf/<?php echo $docsMere_conjoin->cni ; ?>">cliquez ici</a>
                    </p>
                </div>

            </div>

            <div class="cols">
                <h3>TEMOIN DU MARIE</h3>
               
                <div class="a">
                    <p>nom :</p>
                    <p><?php echo $temoin_conjoin->nom ; ?></p>
                </div>
                <div class="a">
                    <p>prenom :</p>
                    <p><?php echo $temoin_conjoin->prenom ; ?></p>
                </div> 
                <div class="a">
                    <p>date de naissance :</p>
                    <p><?php echo $temoin_conjoin->date_naissance ; ?></p>
                </div> 
                <div class="a">
                    <p>contact :</p>
                    <p><?php echo $temoin_conjoin->contact ; ?></p>
                </div> 
                <div class="a">
                    <p>email :</p>
                    <p><?php echo $temoin_conjoin->email ; ?></p>
                </div>
                <div class="a">
                    <p>CNI :
                        <a href="../pdf/<?php echo $docsTemoin_conjoin->cni ; ?>">cliquez ici</a>
                    </p>
                </div>
                <div class="a">
                    <p>Acte de Mariage :
                        <a href="../pdf/<?php echo $docsTemoin_conjoin->acteMariage ; ?>">cliquez ici</a>
                    </p>
                </div>
            </div>
        </div>

        <h1>INFORMATION SUR LA MARIÉ</h1>  
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">     
            <div class="cols">
            <h2>INFO DE LA MARIÉ</h2>
            <div class="a">
                    <p>nom : </p>
                    <p><?php echo $conjointe->nom ; ?></p>
                </div>
                <div class="a">
                    <p>prenom :</p>
                    <p><?php echo $conjointe->prenom ; ?></p>
                </div> 
                <div class="a">
                    <p>date de naissance :</p>
                    <p><?php echo $conjointe->date_naissance ; ?></p>
                </div> 
                <div class="a">
                    <p>contact :</p>
                    <p><?php echo $conjointe->contact ; ?></p>
                </div> 
                <div class="a">
                    <p>email :</p>
                    <p><?php echo $conjointe->email ; ?></p>
                </div>
                <div class="a">
                    <p>CNI :
                        <a href="../pdf/<?php echo $docsConjointe->cni ; ?>">cliquez ici</a>
                    </p>
                </div>
                <div class="a">
                    <p>Acte de naissance :
                        <a href="../pdf/<?php echo $docsConjointe->acteNaissance ; ?>">cliquez ici</a>
                    </p>
                </div>
            </div>

            <div class="cols">
            <h3>PERE DE LA MARIÉ</h3>

            <div class="a">
                    <p>nom :</p>
                    <p><?php echo $pere_conjointe->nom ; ?></p>
                </div>
                <div class="a">
                    <p>prenom :</p>
                    <p><?php echo $pere_conjointe->prenom ; ?></p>
                </div> 
                <div class="a">
                    <p>date de naissance :</p>
                    <p><?php echo $pere_conjointe->date_naissance ; ?></p>
                </div> 
                <div class="a">
                    <p>contact :</p>
                    <p><?php echo $pere_conjointe->contact ; ?></p>
                </div> 
                <div class="a">
                    <p>email :</p>
                    <p><?php echo $pere_conjointe->email ; ?></p>
                </div>
                <div class="a">
                    <p>CNI :
                        <a href="../pdf/<?php echo $docsPere_conjointe->cni ; ?>">cliquez ici</a>
                    </p>
                </div>

            </div>

            <div class="cols">
                <h3>MERE DE LA MARIÉ</h3>
                
                <div class="a">
                    <p>nom :</p>
                    <p><?php echo $mere_conjointe->nom ; ?></p>
                </div>
                <div class="a">
                    <p>prenom :</p>
                    <p><?php echo $pere_conjointe->prenom ; ?></p>
                </div> 
                <div class="a">
                    <p>date de naissance :</p>
                    <p><?php echo $pere_conjointe->date_naissance ; ?></p>
                </div> 
                <div class="a">
                    <p>contact :</p>
                    <p><?php echo $pere_conjointe->contact ; ?></p>
                </div> 
                <div class="a">
                    <p>email :</p>
                    <p><?php echo $pere_conjointe->email ; ?></p>
                </div>
                <div class="a">
                    <p>CNI :
                        <a href="../pdf/<?php echo $docsMere_conjoin->cni ; ?>">cliquez ici</a>
                    </p>
                </div>

            </div>

            <div class="cols">
                <h3>TEMOIN DE LA MARIÉ</h3>
               
                <div class="a">
                    <p>nom :</p>
                    <p><?php echo $temoin_conjointe->nom ; ?></p>
                </div>
                <div class="a">
                    <p>prenom :</p>
                    <p><?php echo $temoin_conjointe->prenom ; ?></p>
                </div> 
                <div class="a">
                    <p>date de naissance :</p>
                    <p><?php echo $temoin_conjointe->date_naissance ; ?></p>
                </div> 
                <div class="a">
                    <p>contact :</p>
                    <p><?php echo $temoin_conjointe->contact ; ?></p>
                </div> 
                <div class="a">
                    <p>email :</p>
                    <p><?php echo $temoin_conjointe->email ; ?></p>
                </div>
                <div class="a">
                    <p>CNI :
                        <a href="../pdf/<?php echo $docsTemoin_conjoin->cni ; ?>">cliquez ici</a>
                    </p>
                </div>
                <div class="a">
                    <p>Acte de Mariage :
                        <a href="../pdf/<?php echo $docsTemoin_conjoin->acteMariage ; ?>">cliquez ici</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <form action="RefusDeLaDemande.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="submit" value="Accepter" name="accepter">
        <input type="submit" value="Rejeter" name="rejeter">
    </form>
</body>
</html>