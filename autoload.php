<?php
    define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'] . '/poetalivre');
    
    // class autoloader script
    spl_autoload_register(function ($class){
        if (file_exists(ROOT_PATH . '/php/' .$class.'.php')){
            require_once ROOT_PATH. '/php/' .$class.'.php';
            
        }else if (file_exists(ROOT_PATH .'/php/DAO/' .$class.'.php')){
            require_once ROOT_PATH .'/php/DAO/' .$class.'.php';

        }else if (file_exists(ROOT_PATH .'/php/Model/' .$class.'.php')){
            require_once ROOT_PATH .'/php/Model/' .$class.'.php';

        }
    });
?>