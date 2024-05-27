<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    
    <link rel="stylesheet" href="../Public/css/style.css">
</head>
<body>
    <div class="container">
        <div class="contain-left">
            <div class="logo-site">
                <p>
                    <span>M</span>
                    <span>A</span>
                    <span>R</span>
                    <span>I</span>
                    <span>A</span>
                    <span>G</span>
                    <span>E</span>
                    <span>S</span>
                    
                    <!-- <span>BUSINESS</span> SITE -->
                </p>
            </div>
            <?php include_once ('../Vue/admin/menuLeft.php');?>
            <div class="menu-bottom-image">
                <!-- <img src="img/basket.jpg" alt="" srcset=""> -->
            </div>
        </div>
        <div class="contain-rigth">
            <div class="navigate-bar-menu">
                <div class="navigate-bar-menu-left">
                    <h2>Admin panel</h2> 
                    <input type="date" name="" id="" value="2021-02-22">
                </div>
                <div class="navigate-bar-menu-right">
                    
                    <div class="profil-user">
                        <p>
                            <!-- <img src="../../Public/img/bohnome2.jpg" alt="" srcset=""> -->
                            <h4>Administrator</h4>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Affichage pour les écrans de téléphone -->
            <div class="navigate-bar-menu-down">
                <div class="line-menu-left" id="active">
                        <p><i></i><a href="#" >Dashboard</a></p>
                    </div>
                    <div class="line-menu-left">
                        <p><i></i><a href="?page=listeDeMariage">Notification <strong style="color: green;"><?php echo isset($notify) ? $notify : '';?></strong></a></p>
                    </div>
                    <div class="line-menu-left">
                        <p><i></i><a href="?page=acteMariage">Acte mariage</a></p>
                    </div>
                    <div class="line-menu-left">
                        <p><i></i><a href="?page=historique">Historique</a></p>
                    </div>
                    <div class="line-menu-left">
                        <p><i></i><a href="?page=setting_Admin">Settings</a></p>
                    </div>
                    <div class="line-menu-left">
                        <p><i></i><a href="?page=deconnecter">Sing Out</a></p>
                    </div>
                </div>
            <div class="tools-sections">
                <div class="prototype-diviser">
                    <div class="sous-prototype">
                        <div class="sous-proto-line1">
                            <p><strong>Mariage approuvé</strong></p>
                        </div>
                        <div class="sous-proto-line2">
                            <?php 
                                echo isset($nombreMariageApprouve) ? $nombreMariageApprouve : 0;
                            ?>
                        </div>
                        <div class="sous-proto-line3">
                            <p class="up"><strong>Up </strong>3.2%</p>
                        </div>
                    </div>
                    <div class="sous-prototype">
                        <div class="sous-proto-line1">
                            <p><strong>Mariage rejeté</strong></p>
                        </div>
                        <div class="sous-proto-line2">
                            <?php 
                                echo isset($nombreMariageRefuse) ? $nombreMariageRefuse : 0;
                            ?>
                        </div>
                        <div class="sous-proto-line3">
                            <p class="down"><strong>Down </strong>1.2%</p>
                        </div>
                    </div>
                </div>
                <div class="prototype-diviser">
                    <div class="sous-prototype">
                        <div class="sous-proto-line1">
                            <p><strong>Acte établi</strong></p>
                        </div>
                        <div class="sous-proto-line2">
                            <?php 
                                echo isset($nombreMariageApprouve) ? $nombreMariageApprouve : 0;
                            ?>
                        </div>
                        <div class="sous-proto-line3">
                            <p class="up"><strong>Up </strong>1.2%</p>
                        </div>
                    </div>
                    <div class="sous-prototype">
                        <div class="sous-proto-line1">
                            <p><strong>Total de demande</strong></p>
                        </div>
                        <div class="sous-proto-line2">
                            <?php 
                                echo isset($totalDemande) ? $totalDemande : 0;
                            ?>
                        </div>
                        <div class="sous-proto-line3">
                            <p class="up"><strong>Up </strong>3.2%</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="prototype">
                    <div class="sous-proto-line1">
                        <p><strong>Users</strong></p>
                    </div>
                    <div class="sous-proto-line2">
                        4.890
                    </div>
                    <div class="sous-proto-line3">
                        <div class="sous-proto-line3-left">
                            <p>62% active</p>
                            <p>28% suspendu</p>
                            <p>12% inactive</p>
                        </div>
                        <div class="sous-proto-line3-rigth">

                        </div>
                    </div>
                </div>
                <div class="prototype">
                    <div class="sous-proto-line1">
                        <p><strong>Subscriptions</strong></p>
                    </div>
                    <div class="sous-proto-line2">
                        1.890
                    </div>
                    <div class="sous-proto-line3">
                        <div class="sous-proto-line3-left">
                            <p>62% active</p>
                            <p>28% suspendu</p>
                            <p>12% inactive</p>
                        </div>
                        <div class="sous-proto-line3-rigth">

                        </div>
                    </div>
                </div> -->

            </div>
            <div class="statistiques-group">
            </div>
        </div>
    </div>
</body>
</html>