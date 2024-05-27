<?php
include_once '../lib/autoload.init.php';
include_once '../lib/connectDb.init.php';
$manager = new ManagerMariage(connectDb());


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // print_r($_REQUEST);

    // On commence par crée des objets avec les informations reçu du formulaire. On va créer au total 8 Objets de type Personne
    
    #.. Information du conjoin 
   $conjoin = createPersone(
        $_POST['nomEpoux'],
        $_POST['prenomEpoux'],
        $_POST['dateNaissanceEpoux'],
        $_POST['emailEpoux'],
        $_POST['telephoneEpoux'],
        'mari',
        'M'
    );

    // exit;
   #.. Information de la conjointe
   $conjointe = createPersone(
       $_POST['nomEpouse'],
       $_POST['prenomEpouse'],
       $_POST['dateNaissanceEpouse'],
       $_POST['emailEpouse'],
       $_POST['telephoneEpouse'],
       'mariee',
       'Feminin'
    );
   
    #.. Information du temoin du conjoin
    $temoinConjoin = createPersone(
        $_POST['nomTemoinEpoux'],
        $_POST['prenomTemoinEpoux'],
        '',
        $_POST['emailTemoinEpoux'],
        $_POST['telephoneTemoinEpoux'],
        'temoins',
        $_POST['sexeTemoinEpoux'],
    );


    #.. Information du temoin de la conjointe
    $temoinConjointe = createPersone(
        $_POST['nomTemoinEpouse'],
        $_POST['prenomTemoinEpouse'],
        '',
        $_POST['emailTemoinEpouse'],
        $_POST['telephoneTemoinEpouse'],
        'temoins',
        $_POST['sexeTemoinEpouse'],
    );

    #.. Information du pere du conjoin
    $pereConjoin = createPersone(
        $_POST['nomPereConjoint'],
        $_POST['prenomPereConjoint'],
        '',
        $_POST['emailPereConjoint'],
        '',
        'parent',
        'M',
    );

    #.. Information de la mère du conjoin
    $mereConjoin = createPersone(
        $_POST['nomMereConjoint'],
        $_POST['prenomMereConjoint'],
        '',
        $_POST['emailMereConjoint'],
        '',
        'parent',
        'F',
    );

    #.. Information du pere de la conjointe
    $pereConjointe = createPersone(
        $_POST['nomPereConjointe'],
        $_POST['prenomPereConjointe'],
        '',
        $_POST['emailPereConjointe'],
        '',
        'parent',
        'M',
    );

            
    #.. Information du mère de la conjointe
    $mereConjointe = createPersone(
        $_POST['nomMereConjointe'],
        $_POST['prenomMereConjointe'],
        '',
        $_POST['emailMereConjointe'],
        '',
        'parent',
        'F',
    );

    // exit;

    // Vérification des documents récupéré depuis le formulaire
    // Tout d'abord, on commence par vérifier si le documents existe bel et bien. Et si c'est le cas, on vérifie son extension (Si c'est au format .pdf)
    // On donne le chemin du répertoire dans lequel on veut garder le fichier sur notre serveur et on y ajoute le nom du fichier. Ensuite, on déplace le fichier du répertoire client vers le serveur
    // On enregistrera le chemin du fichier dans la base de données

    # Vérification de la cni du conjoin
    $cniConjoinLink = null;
    $messageConjoinCni = null;
    if (isset($_FILES['cniEpoux']) && $_FILES['cniEpoux']['error'] === UPLOAD_ERR_OK) {
        $uploadedFile = $_FILES['cniEpoux'];
        $targetDirectory = '../Public/pdf/';

        // Vérifiez si le fichier est bien un PDF
        $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
        if (strtolower($fileExtension) === 'pdf') {
            $targetPath = $targetDirectory . basename($uploadedFile['name']);
            // Déplacez le fichier vers le dossier cible
            if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                // Enregistrez le chemin du fichier dans la base de données
                $cniConjoinLink = $targetPath;

                // Enregistrez $cniConjoinLink dans votre base de données
            } else {
                $messageConjoinCni = generateAlerteDanger("Erreur lors du déplacement du fichier.");
            }
        } else {
            $messageConjoinCni = generateAlerteDanger("Le fichier doit être au format PDF.");
        }
    } else {
        $messageConjoinCni = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
    }

    # Vérification de la l'acte de naissance du conjoin
    $acteConjoinLink = null;
    $messageConjoinActe = null;
        // Vérifiez si un fichier a été téléchargé
        if (isset($_FILES['acteNaissanceEpoux']) && $_FILES['acteNaissanceEpoux']['error'] === UPLOAD_ERR_OK) {
            $uploadedFile = $_FILES['acteNaissanceEpoux'];
            $targetDirectory = '../Public/pdf/';
    
            // Vérifiez si le fichier est bien un PDF
            $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
            if (strtolower($fileExtension) === 'pdf') {
                $targetPath = $targetDirectory . basename($uploadedFile['name']);
                // Déplacez le fichier vers le dossier cible
                if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                    // Enregistrez le chemin du fichier dans la base de données
                    // (vous devez implémenter cette partie selon votre structure de base de données)
                    $acteConjoinLink = $targetPath;
                    // Enregistrez $acteConjoinLink dans votre base de données
    
                    // $messageConjoinActe = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                } else {
                    $messageConjoinActe = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                }
            } else {
                $messageConjoinActe = generateAlerteDanger("Le fichier doit être au format PDF.");
            }
        } else {
            $messageConjoinActe = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
        }


     # Vérification de la cni du Temoin du conjoin
    $cniTemoinConjoinLink = null;
    $messageTemoinConjoinCni = null;
         // Vérifiez si un fichier a été téléchargé
         if (isset($_FILES['cniTemoinEpoux']) && $_FILES['cniTemoinEpoux']['error'] === UPLOAD_ERR_OK) {
             $uploadedFile = $_FILES['cniTemoinEpoux'];
             $targetDirectory = '../Public/pdf/';
     
             // Vérifiez si le fichier est bien un PDF
             $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
             if (strtolower($fileExtension) === 'pdf') {
                 $targetPath = $targetDirectory . basename($uploadedFile['name']);
                 // Déplacez le fichier vers le dossier cible
                 if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                     // Enregistrez le chemin du fichier dans la base de données
                     // (vous devez implémenter cette partie selon votre structure de base de données)
                     $cniTemoinConjoinLink = $targetPath;
                     // Enregistrez $cniTemoinConjoinLink dans votre base de données
     
                    //  $messageTemoinConjoinCni = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                 } else {
                     $messageTemoinConjoinCni = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                 }
             } else {
                 $messageTemoinConjoinCni = generateAlerteDanger("Le fichier doit être au format PDF.");
             }
         } else {
             $messageTemoinConjoinCni = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
         }

     # Vérification de la l'acte de naissance du temoin du conjoin
     $acteTemoinConjoinLink = null;
     $messageTemoinConjoinActe = null;
         // Vérifiez si un fichier a été téléchargé
         if (isset($_FILES['acteMariageTemoinEpoux']) && $_FILES['acteMariageTemoinEpoux']['error'] === UPLOAD_ERR_OK) {
             $uploadedFile = $_FILES['acteMariageTemoinEpoux'];
             $targetDirectory = '../Public/pdf/';
     
             // Vérifiez si le fichier est bien un PDF
             $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
             if (strtolower($fileExtension) === 'pdf') {
                 $targetPath = $targetDirectory . basename($uploadedFile['name']);
                 // Déplacez le fichier vers le dossier cible
                 if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                     // Enregistrez le chemin du fichier dans la base de données
                     // (vous devez implémenter cette partie selon votre structure de base de données)
                     $acteTemoinConjoinLink = $targetPath;
                     // Enregistrez $acteTemoinConjoinLink dans votre base de données
     
                    //  $messageTemoinConjoinActe = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                 } else {
                     $messageTemoinConjoinActe = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                 }
             } else {
                 $messageTemoinConjoinActe = generateAlerteDanger("Le fichier doit être au format PDF.");
             }
         } else {
             $messageTemoinConjoinActe = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
         }
 





   # Vérification de la cni de la conjointe
   $cniConjointeLink = null;
   $messageConjointeCni = null;
       // Vérifiez si un fichier a été téléchargé
       if (isset($_FILES['cniEpouse']) && $_FILES['cniEpouse']['error'] === UPLOAD_ERR_OK) {
           $uploadedFile = $_FILES['cniEpouse'];
           $targetDirectory = '../Public/pdf/';
   
           // Vérifiez si le fichier est bien un PDF
           $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
           if (strtolower($fileExtension) === 'pdf') {
               $targetPath = $targetDirectory . basename($uploadedFile['name']);
               // Déplacez le fichier vers le dossier cible
               if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                   // Enregistrez le chemin du fichier dans la base de données
                   // (vous devez implémenter cette partie selon votre structure de base de données)
                   $cniConjointeLink = $targetPath;
                   // Enregistrez $cniConjointeLink dans votre base de données
   
                //    $messageConjointeCni = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
               } else {
                   $messageConjointeCni = generateAlerteDanger("Erreur lors du déplacement du fichier.");
               }
           } else {
               $messageConjointeCni = generateAlerteDanger("Le fichier doit être au format PDF.");
           }
       } else {
           $messageConjointeCni = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
       }

   # Vérification de la l'acte de naissance de la conjointe
   $acteConjointeLink = null;
   $messageConjointeActe = null;
       // Vérifiez si un fichier a été téléchargé
       if (isset($_FILES['acteNaissanceEpouse']) && $_FILES['acteNaissanceEpouse']['error'] === UPLOAD_ERR_OK) {
           $uploadedFile = $_FILES['acteNaissanceEpouse'];
           $targetDirectory = '../Public/pdf/';
   
           // Vérifiez si le fichier est bien un PDF
           $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
           if (strtolower($fileExtension) === 'pdf') {
               $targetPath = $targetDirectory . basename($uploadedFile['name']);
               // Déplacez le fichier vers le dossier cible
               if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                   // Enregistrez le chemin du fichier dans la base de données
                   // (vous devez implémenter cette partie selon votre structure de base de données)
                   $acteConjointeLink = $targetPath;
                   // Enregistrez $acteConjointeLink dans votre base de données
   
                //    $messageConjointeActe = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
               } else {
                   $messageConjointeActe = generateAlerteDanger("Erreur lors du déplacement du fichier.");
               }
           } else {
               $messageConjointeActe = generateAlerteDanger("Le fichier doit être au format PDF.");
           }
       } else {
           $messageConjointeActe = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
       }


     # Vérification de la cni du Temoin de la conjointe
     $cniTemoinConjointeLink = null;
     $messageTemoinConjointeCni = null;
          // Vérifiez si un fichier a été téléchargé
          if (isset($_FILES['cniTemoinEpouse']) && $_FILES['cniTemoinEpouse']['error'] === UPLOAD_ERR_OK) {
              $uploadedFile = $_FILES['cniTemoinEpouse'];
              $targetDirectory = '../Public/pdf/';
      
              // Vérifiez si le fichier est bien un PDF
              $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
              if (strtolower($fileExtension) === 'pdf') {
                  $targetPath = $targetDirectory . basename($uploadedFile['name']);
                  $cniTemoinConjointeLink = $targetPath;
                  // Déplacez le fichier vers le dossier cible
                  if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                      // Enregistrez le chemin du fichier dans la base de données
                      // (vous devez implémenter cette partie selon votre structure de base de données)
                      $dbFilePath = $targetPath;
                      // Enregistrez $dbFilePath dans votre base de données
      
                    //   $messageTemoinConjointeCni = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                  } else {
                      $messageTemoinConjointeCni = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                  }
              } else {
                  $messageTemoinConjointeCni = generateAlerteDanger("Le fichier doit être au format PDF.");
              }
          } else {
              $messageTemoinConjointeCni = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
          }

      # Vérification de l'acte de mariage du temoin de la conjointe
      $acteTemoinConjointeLink = null;
      $messageTemoinConjointeActe = null;
          // Vérifiez si un fichier a été téléchargé
          if (isset($_FILES['acteMariageTemoinEpouse']) && $_FILES['acteMariageTemoinEpouse']['error'] === UPLOAD_ERR_OK) {
              $uploadedFile = $_FILES['acteMariageTemoinEpouse'];
              $targetDirectory = '../Public/pdf/';
      
              // Vérifiez si le fichier est bien un PDF
              $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
              if (strtolower($fileExtension) === 'pdf') {
                  $targetPath = $targetDirectory . basename($uploadedFile['name']);
                  $acteTemoinConjointeLink = $targetPath;
                  // Déplacez le fichier vers le dossier cible
                  if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                      // Enregistrez le chemin du fichier dans la base de données
                      // (vous devez implémenter cette partie selon votre structure de base de données)
                      $dbFilePath = $targetPath;
                      // Enregistrez $dbFilePath dans votre base de données
      
                    //   $messageTemoinConjointeActe = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                  } else {
                      $messageTemoinConjointeActe = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                  }
              } else {
                  $messageTemoinConjointeActe = generateAlerteDanger("Le fichier doit être au format PDF.");
              }
          } else {
              $messageTemoinConjointeActe = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
          }



      # Vérification de la cni du Pere du Conjoin
      $cniPereConjoinLink = null;
      $messagePereConjoinCni = null;
           // Vérifiez si un fichier a été téléchargé
           if (isset($_FILES['cniPereConjoint']) && $_FILES['cniPereConjoint']['error'] === UPLOAD_ERR_OK) {
               $uploadedFile = $_FILES['cniPereConjoint'];
               $targetDirectory = '../Public/pdf/';
       
               // Vérifiez si le fichier est bien un PDF
               $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
               if (strtolower($fileExtension) === 'pdf') {
                   $targetPath = $targetDirectory . basename($uploadedFile['name']);
                   // Déplacez le fichier vers le dossier cible
                   if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                       // Enregistrez le chemin du fichier dans la base de données
                       // (vous devez implémenter cette partie selon votre structure de base de données)
                       $cniPereConjoinLink = $targetPath;
                       // Enregistrez $dbFilePath dans votre base de données
       
                    //    $messagePereConjoinCni = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                   } else {
                       $messagePereConjoinCni = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                   }
               } else {
                   $messagePereConjoinCni = generateAlerteDanger("Le fichier doit être au format PDF.");
               }
           } else {
               $messagePereConjoinCni = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
           }
  
           

     # Vérification de la cni du Pere de le Conjointe
     $cniPereConjointeLink = null;
     $messagePereConjointeCni = null;
          // Vérifiez si un fichier a été téléchargé
          if (isset($_FILES['cniPereConjointe']) && $_FILES['cniPereConjointe']['error'] === UPLOAD_ERR_OK) {
              $uploadedFile = $_FILES['cniPereConjointe'];
              $targetDirectory = '../Public/pdf/';
      
              // Vérifiez si le fichier est bien un PDF
              $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
              if (strtolower($fileExtension) === 'pdf') {
                  $targetPath = $targetDirectory . basename($uploadedFile['name']);
                  // Déplacez le fichier vers le dossier cible
                  if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                      // Enregistrez le chemin du fichier dans la base de données
                      // (vous devez implémenter cette partie selon votre structure de base de données)
                      $cniPereConjointeLink = $targetPath;

                      // Enregistrez $dbFilePath dans votre base de données
      
                    //   $messagePereConjointeCni = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                  } else {
                      $messagePereConjointeCni = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                  }
              } else {
                  $messagePereConjointeCni = generateAlerteDanger("Le fichier doit être au format PDF.");
              }
          } else {
              $messagePereConjointeCni = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
          }


         # Vérification de la cni de la mère de la mère conjoin
         $cniMereConjoinLink = null;
         $messageMereConjoinCni = null;
              // Vérifiez si un fichier a été téléchargé
              if (isset($_FILES['cniMereConjoint']) && $_FILES['cniMereConjoint']['error'] === UPLOAD_ERR_OK) {
                  $uploadedFile = $_FILES['cniMereConjoint'];
                  $targetDirectory = '../Public/pdf/';
          
                  // Vérifiez si le fichier est bien un PDF
                  $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
                  if (strtolower($fileExtension) === 'pdf') {
                      $targetPath = $targetDirectory . basename($uploadedFile['name']);
                      $cniMereConjoinLink = $targetPath;
                      // Déplacez le fichier vers le dossier cible
                      if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                          // Enregistrez le chemin du fichier dans la base de données
                          // (vous devez implémenter cette partie selon votre structure de base de données)
                          $dbFilePath = $targetPath;
                          // Enregistrez $dbFilePath dans votre base de données
          
                        //   $messageMereConjoinCni = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                      } else {
                          $messageMereConjoinCni = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                      }
                  } else {
                      $messageMereConjoinCni = generateAlerteDanger("Le fichier doit être au format PDF.");
                  }
              } else {
                  $messageMereConjoinCni = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
              }
     
     # Vérification de la cni de la mère de la conjointe
     $cniMereConjointeLink = null;
     $messageMereConjointeCni = null;
          // Vérifiez si un fichier a été téléchargé
          if (isset($_FILES['cniMereConjointe']) && $_FILES['cniMereConjointe']['error'] === UPLOAD_ERR_OK) {
              $uploadedFile = $_FILES['cniMereConjointe'];
              $targetDirectory = '../Public/pdf/';
      
              // Vérifiez si le fichier est bien un PDF
              $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
              if (strtolower($fileExtension) === 'pdf') {
                  $targetPath = $targetDirectory . basename($uploadedFile['name']);
                  $cniMereConjointeLink = $targetPath;
                  // Déplacez le fichier vers le dossier cible
                  if (move_uploaded_file($uploadedFile['tmp_name'], $targetPath)) {
                      // Enregistrez le chemin du fichier dans la base de données
                      // (vous devez implémenter cette partie selon votre structure de base de données)
                      $dbFilePath = $targetPath;
                      // Enregistrez $dbFilePath dans votre base de données
      
                    //   $messageMereConjointeCni = generateAlerteDanger("Le fichier PDF a été téléchargé avec succès !");
                  } else {
                      $messageMereConjointeCni = generateAlerteDanger("Erreur lors du déplacement du fichier.");
                  }
              } else {
                  $messageMereConjointeCni = generateAlerteDanger("Le fichier doit être au format PDF.");
              }
          } else {
              $messageMereConjointeCni = generateAlerteDanger("Aucun fichier n'a été téléchargé.");
          }
 
      
  


      # Enregistrement des informations receuilli dans la base de données
      # Pour cela on utilise les méthodes de la classe ManagerMariage
       $conjoin = $manager->enregistrerPersonne($conjoin);  
       
       $conjointe = $manager->enregistrerPersonne($conjointe);

       $temoinConjoin = $manager->enregistrerPersonne($temoinConjoin);

       $temoinConjointe = $manager->enregistrerPersonne($temoinConjointe);

       $pereConjoin = $manager->enregistrerPersonne($pereConjoin);

       $pereConjointe = $manager->enregistrerPersonne($pereConjointe);

       $mereConjoin = $manager->enregistrerPersonne($mereConjoin);

       $mereConjointe = $manager->enregistrerPersonne($mereConjointe);


       # Sauvegarde des différents documents dans la base de données

        // Création des documents du conjoin 
       $documnentConjoin = new Documents(array(
        'cni' => $cniConjoinLink,
        'acteNaissance' => $acteConjoinLink,
        'doc_perso' => $conjoin->identifiant
        ));
        # Enregistrement du document en base de données
        $documnentConjoin = $manager->enregistrerDocument($documnentConjoin);

        // Document de la conjointe
        $documnentConjointe = new Documents(array(
            'cni' => $cniConjointeLink,
            'acteNaissance' => $acteConjointeLink,
            'doc_perso' => $conjointe->identifiant
        ));
        # Enregistrement du document en base de données
        $documnentConjointe = $manager->enregistrerDocument($documnentConjointe);


        // Document du  Temoin du conjoin 
        $documnentTemoinConjoin = new Documents(array(
            'cni' => $cniTemoinConjoinLink,
            'acteMariage' => $messageTemoinConjoinActe,
            'doc_perso' => $temoinConjoin->identifiant
        ));
        # Enregistrement du document en base de données
        $documnentTemoinConjoin = $manager->enregistrerDocument($documnentTemoinConjoin);

        // Documents du Temoin de la conjointe 
        $documnentTemoinConjointe = new Documents(array(
            'cni' => $cniTemoinConjointeLink,
            'acteMariage' => $messageTemoinConjointeActe,
            'doc_perso' => $temoinConjointe->identifiant
        ));
       $documnentTemoinConjointe = $manager->enregistrerDocument($documnentTemoinConjointe);
              
        // Documents de la mère du conjoin 
        $documnentMereConjoin = new Documents(array(
            'cni' => $cniMereConjoinLink,
            'doc_perso' => $mereConjoin->identifiant
        ));
        # Enregistrement du document en base de données
        $documnentMereConjoin = $manager->enregistrerDocument($documnentMereConjoin);

        // Documents du pere  du conjoin 
        $documnentPereConjoin = new Documents(array(
            'cni' => $cniPereConjoinLink,
            'doc_perso' => $pereConjoin->identifiant
        ));
        # Enregistrement du document en base de données
        $documnentPereConjoin = $manager->enregistrerDocument($documnentPereConjoin);

  
        // Documents de la Mere de la conjointe 
        $documnentMereConjointe = new Documents(array(
            'cni' => $cniMereConjointeLink,
            'doc_perso' => $mereConjointe->identifiant
        ));
        # Enregistrement du document en base de données
        $documnentMereConjointe = $manager->enregistrerDocument($documnentMereConjointe);

        // Documents du père de la conjoin 
        $documnentPereConjointe = new Documents(array(
            'cni' => $cniPereConjointeLink,
            'doc_perso' => $pereConjointe->identifiant
        ));
        # Enregistrement du document en base de données
        $documnentPereConjointe = $manager->enregistrerDocument($documnentPereConjointe);





    //   if($messageMereConjointeCni || $messagePereConjointeCni || $messageMereConjoinCni || $messageMereConjoinCni || 
    //   $messageTemoinConjointeActe || $messageTemoinConjoinActe || $messageConjointeActe || $messageConjoinActe || $messageConjoinActe || $messageConjointeActe){
    //     echo "b";
    //     exit;
    //     include_once '../Vue/mariage.php';
    //   }else{

// Sauvegarde du modèle de l'acte dans la base de données
        $acte = new ActeMariage(array(
            'conjoin' => $conjoin->identifiant,
            'conjointe' => $conjointe->identifiant,
            'temoin_conjoin' => $temoinConjoin->identifiant,
            'temoin_conjointe' => $temoinConjointe->identifiant,
            'pere_conjoin' => $pereConjoin->identifiant,
            'pere_conjointe' => $pereConjointe->identifiant,
            'mere_conjoin' => $mereConjoin->identifiant,
            'mere_conjointe' => $mereConjointe->identifiant,
            'statut' => 'en attente'
        ));


        $acte = $manager->addActeMariage($acte);
        // sendMail($conjoin->nom, 'Amanda Service', $conjoin->email);
        // sendMail($conjointe->nom, 'Amanda Service', $conjointe->email);
        showConfirmation();
        header('Location: ?page=mariage');
        
    //   }

}else{
    // echo "Arrêt";
    include_once '../Vue/mariage.php';
    exit;
}




function createPersone($nom, $prenom, $dateNaiss, $email, $phone, $nature, $sexe){
    return new Personne(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'date_naissance' => $dateNaiss,
        'contact' => $phone,
        'email' => $email,
        'sexe' => $sexe,
        'nature' => $nature
    ));
}

function generateAlerteDanger($message){
    return "<div class='alert alert-danger' role='alert'> $message </div>";
}

function sendMail($nom, $equipe, $destinataire){
    $message = "Cher(e) [$nom]. \r\n
    Nous vous remercions d'avoir soumis votre demande de mariage via notre site web. Nous sommes heureux de vous 
    informer que nous avons bien reçu votre dossier et qu'il est actuellement en cours d'examen par notre équipe. \r\n
    Nous comprenons l'importance de cette étape dans votre vie et nous nous engageons à traiter votre demande avec le plus
     grand soin et attention. Vous recevrez une confirmation par e-mail dès que l'examen de votre dossier sera terminé, dans
      les plus brefs délais. \r\n  Nous vous remercions de votre patience et de votre confiance. \r\n
    Cordialement, </br>
    [$equipe]";
    $subject = "Confirmation de votre demande";
    $headers = "From: webmaster@monsite.com\r\n";
    $headers .= "Reply-To: audinjunior1@gmail.com\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Envoi du mail
    mail($destinataire, $subject, $message, $headers); 
}

function showConfirmation(){
    ?> 
        <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Votre demande a bien été prise en compte. Vous recevrez une confirmation par email.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $("#monBouton").click(function () {
                    $("#confirmationModal").modal("show");
                });
            });

        </script>
<?php 
}