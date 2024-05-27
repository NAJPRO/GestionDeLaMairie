<!doctype html>
<html lang="en">

<head>
    <title>Dossier Mariage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <nav class="nav justify-content-center mt-4 ">
                    <a class="nav-link active" href="#" aria-current="page">Acceuil</a>
                    <a class="nav-link" href="#">Présentation</a>
                    <a name="" id="" class="btn btn-primary" href="mariage.php" role="button">Initier une procédures de mariage</a>
                </nav>

            </div>
        </nav>

    </header>
    <section class="container my-4">
        <div class="content1">
            <h1 class="mb-4">Initialiser votre procédure de mariages en seulement quelques clic</h1>

            <div class="text">
                <h3 class="text-primary">Les conditions pour un mariage sont les suivantes : </h3>
                <p>Pour qu'un mariage sois possible, il faut que certaines conditions sois remplis.</p>
                <div class="condition-age">
                    <h4>Âge</h4>
                    <p>
                        Vous devez être majeur pour vous marier, c'est-à-dire âgé d'au moins 18 ans. Si vous êtes mineur, vous pouvez, à titre exceptionnel, être autorisé à vous marier.
                        Vous devez obtenir les autorisations suivantes :
                    </p>
                    <ul>
                        <li>Dispense d'âge accordée par le procureur de la République pour motifs graves</li>
                        <li>Accord d'au moins l'un de vos parents</li>
                    </ul>
                </div>
                <div class="condition-parente">
                    <h4>Absence de lien de parenté</h4>
                    <p>Le mariage est refusé s'il existe un lien de parenté entre les deux conjoins</p>
                </div>
                <div class="condition-consentement">
                    <h4>Consentement</h4>
                    <p>Chacun de vous 2 doit donner son consentement libre et éclairé au mariage.</p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Si le consentement n'est pas libre et éclairé
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Si le consentement n'est pas libre et éclairé, le mariage peut être annulé à la demande d'une des personnes suivantes :</p>
                                    <ul>
                                        <li>Vous et votre futur époux</li>
                                        <li>Procureur de la République</li>
                                    </ul>
                                    <p>La demande d'annulation doit intervenir dans un délai maximum de 5 ans.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="suiteDeFormulaire my-4">
                <h2 class="my-4 text-primary">Document à remplir par les futurs époux</h2>
                <div class="alert alert-danger" role="alert">
                    <strong>Vérifiez scrupuleusement les informations que vous saisissez avant de les soummettre</strong>
                </div>

                <div class="info-marie my-4">

                    <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="">
                        <!-- <div class="mari-form"> -->
                        <h3 class="text-primary">Information du Conjoint</h3>

                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="validationCustom01" value="NAJ" name="nomEpoux" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="validationCustom02" value="PRO" name="prenomEpoux" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Date de naissance</label>
                            <div class="input-group has-validation">
                                <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="dateNaissanceEpoux" required>
                                <div class="invalid-feedback">
                                    Please choose a date.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailEpoux" id="" aria-describedby="emailHelpId" placeholder="amanda@mail.com" />
                            <small id="emailHelpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Telephone</label>
                            <input type="number" class="form-control" id="validationCustom05" name="telephoneEpoux" required>
                            <div class="invalid-feedback">
                                Please enter valid number
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5 class="py-3">Carte d'identité</h5>
                            <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre carte nationnal d'identité</label>
                            <input type="file" accept=".pdf" class="form-control" name="cniEpoux" id="" placeholder="" aria-describedby="fileHelpId" />
                        </div>

                        <div class="col-md-6">
                            <h5 class="py-3">Acte de naissance</h5>
                            <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre acte de naissance </label>
                            <input type="file" accept=".pdf" class="form-control" name="acteNaissanceEpoux" id="" placeholder="" aria-describedby="fileHelpId" />
                        </div>
                        <div class="row">
                            <h4 class="text-secondary pt-5">Veuillez renseigner les informations du Père du Conjoint</h4>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="validationCustom01" value="JOGO" name="nomPereConjoint" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="validationCustom02" value="AMANDA" name="prenomPereConjoint" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="emailPereConjoint" id="" aria-describedby="emailHelpId" placeholder="amanda@mail.com" />
                                <small id="emailHelpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="col-md-12">
                                <h5 class="py-3">Carte d'identité</h5>
                                <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre carte nationnal d'identité</label>
                                <input type="file" accept=".pdf" class="form-control" name="cniPereConjoint" id="" placeholder="" aria-describedby="fileHelpId" />
                            </div>
                        </div>

                        <div class="row">
                            <h4 class="text-secondary pt-5">Veuillez renseigner les informations de la Mère du Conjoint</h4>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="validationCustom01" value="JOGO" name="nomMereConjoint" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="validationCustom02" value="AMANDA" name="prenomMereConjoint" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="emailMereConjoint" id="" aria-describedby="emailHelpId" placeholder="amanda@mail.com" />
                                <small id="emailHelpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="col-md-12">
                                <h5 class="py-3">Carte d'identité</h5>
                                <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre carte nationnal d'identité</label>
                                <input type="file" accept=".pdf" class="form-control" name="cniMereConjoint" id="" placeholder="" aria-describedby="fileHelpId" />
                            </div>
                        </div>
                    

                        <!-- <div> -->
                        <h4 class="text-secondary pt-4">Veuillez renseigner les informations de votre témoin</h4>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="validationCustom01" value="NAJ" name="nomTemoinEpoux" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="validationCustom02" value="PRO" name="prenomTemoinEpoux" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailTemoinEpoux" id="" aria-describedby="emailHelpId" placeholder="amanda@mail.com" />
                            <small id="emailHelpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="col-md-12">
                            <label for="validationCustom05" class="form-label">Telephone</label>
                            <input type="number" class="form-control" id="validationCustom05" name="telephoneTemoinEpoux" required>
                            <div class="invalid-feedback">
                                Please enter valid number
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sexe</label>
                            <select class="form-select form-select-lg" name="sexeTemoinEpoux" id="">
                                <option selected>Masculin</option>
                                <option value="">Feminin</option>
                            </select>
                        </div>


                        <div class="col-md-6">
                            <h5 class="py-3">Carte d'identité</h5>
                            <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre carte nationnal d'identité</label>
                            <input type="file" accept=".pdf" class="form-control" name="cniTemoinEpoux" id="" placeholder="" aria-describedby="fileHelpId" />
                        </div>

                        <div class="col-md-6">
                            <h5 class="py-3">Acte de mariage</h5>
                            <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre acte de naissance </label>
                            <input type="file" accept=".pdf" class="form-control" name="acteMariageTemoinEpoux" id="" placeholder="" aria-describedby="fileHelpId" />
                        </div>
                        <!-- </div> -->

                        <!-- <div class="mariee-form"> -->
                        <h3 class="pt-4 text-primary">Information de la conjointe</h3>


                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="validationCustom01" value="NAJ" name="nomEpouse" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="validationCustom02" value="PRO" name="prenomEpouse" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Date de naissance</label>
                            <div class="input-group has-validation">
                                <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="dateNaissanceEpouse" required>
                                <div class="invalid-feedback">
                                    Please choose a date.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailEpouse" id="" aria-describedby="emailHelpId" placeholder="amanda@mail.com" />
                            <small id="emailHelpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">Telephone</label>
                            <input type="number" class="form-control" id="validationCustom05" name="telephoneEpouse" required>
                            <div class="invalid-feedback">
                                Please enter valid number
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5 class="py-3">Carte d'identité</h5>
                            <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre carte nationnal d'identité</label>
                            <input type="file" class="form-control" name="cniEpouse" id="" placeholder="" aria-describedby="fileHelpId" />
                        </div>

                        <div class="col-md-6">
                            <h5 class="py-3">Acte de naissance</h5>
                            <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre acte de naissance </label>
                            <input type="file" class="form-control" name="acteNaissanceEpouse" id="" placeholder="" aria-describedby="fileHelpId" />
                        </div>
                        <div class="row">
                            <h4 class="text-secondary pt-5">Veuillez renseigner les informations du Père de la Conjointe</h4>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="validationCustom01" value="JOGO" name="nomPereConjointe" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="validationCustom02" value="AMANDA" name="prenomPereConjointe" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="emailPereConjointe" id="" aria-describedby="emailHelpId" placeholder="amanda@mail.com" />
                                <small id="emailHelpId" class="form-text text-muted">Help text</small>
                            </div>

                            <div class="col-md-12">
                                <h5 class="py-3">Carte d'identité</h5>
                                <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre carte nationnal d'identité</label>
                                <input type="file" accept="file/*" class="form-control" name="cniTPereConjointe" id="" placeholder="" aria-describedby="fileHelpId" />
                            </div>

                        </div>
                        <div class="row">
                            <h4 class="text-secondary pt-6">Veuillez renseigner les informations de la Mère de la Conjointe</h4>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="validationCustom01" value="JOGO" name="nomMereConjointe" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="validationCustom02" value="AMANDA" name="prenomMereConjointe" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="emailMereConjointe" id="" aria-describedby="emailHelpId" placeholder="amanda@mail.com" />
                                <small id="emailHelpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="col-md-12">
                                <h5 class="py-3">Carte d'identité</h5>
                                <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre carte nationnal d'identité</label>
                                <input type="file" accept=".pdf" class="form-control" name="cniMereConjointe" id="" placeholder="" aria-describedby="fileHelpId" />
                            </div>
                        </div>


                        <!-- <div> -->
                        <h4 class="text-secondary pt-4">Veuillez renseigner les informations de votre témoin</h4>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="validationCustom01" value="JOGO" name="nomTemoinEpouse" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="validationCustom02" value="AMANDA" name="prenomTemoinEpouse" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailTemoinEpouse" id="" aria-describedby="emailHelpId" placeholder="amanda@mail.com" />
                            <small id="emailHelpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom05" class="form-label">Telephone</label>
                            <input type="number" class="form-control" id="validationCustom05" name="telephoneTemoinEpouse" required>
                            <div class="invalid-feedback">
                                Please enter valid number
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Sexe</label>
                            <select class="form-select form-select-lg" name="sexeTemoinEpouse" id="">
                                <option selected>Masculin</option>
                                <option value="">Feminin</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <h5 class="py-3">Carte d'identité</h5>
                            <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre carte nationnal d'identité</label>
                            <input type="file" accept="file/*" class="form-control" name="cniTemoinEpouse" id="" placeholder="" aria-describedby="fileHelpId" />
                        </div>
                        <div class="col-md-6">
                            <h5 class="py-3">Acte de mariage</h5>
                            <label for="" class="form-label">Veuillez fournir un document au format (.pdf) contenant votre acte de naissance </label>
                            <input type="file" accept="file/*" class="form-control" name="acteMariageTemoinEpouse" id="" placeholder="" aria-describedby="fileHelpId" />
                        </div>

                        <!-- </div> -->
                        <div class="col-12 py-4">
                            <button class="btn btn-primary w-100" type="submit">Soumettre les informations</button>
                        </div>
                    </form>


                </div>



            </div>
        </div>
    </section>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>