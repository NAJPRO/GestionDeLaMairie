<?php
// if(!empty($_POST))

    if(isset($_GET['page'])){
        $file =  './'. $_GET['page']. '.php';
        if(is_file($file))
            include $file;
        else
            include './404Error.php';
    }else{
        include_once '../Vue/acceuil.php';
    }
    // if(isset($_GET['deconnect'])){
    //     $_SESSION['user'] = null;
    //     session_unset();
    //     session_destroy();
    //     header('Location: .');
    //     exit();
    // }
    
