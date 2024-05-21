<?php
    // class autoloader script
    spl_autoload_register(function ($class){
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/poetalivre/assets/php/' .$class.'.php')){
            require_once $_SERVER['DOCUMENT_ROOT'] .'/poetalivre/assets/php/' .$class.'.php';
            
        }else if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/poetalivre/assets/php/DAO/' .$class.'.php')){
            require_once $_SERVER['DOCUMENT_ROOT'] .'/poetalivre/assets/php/DAO/' .$class.'.php';

        }
    });
?>