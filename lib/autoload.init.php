<?php 

    function autoload($className){
        if(file_exists($file = dirname(__FILE__). '/../Model/'. $className. '.class.php')){
            require $file;
        }
    }

    spl_autoload_register('autoload');