<?php
//require_once './var_util.php';
spl_autoload_register(function($nameClass){

    //global $pl,$f1,$f2;
    //echo $f1;
    //print_r($nameClass);
    //echo $f2.$pl;
    // Para exibir

    $dirClass = "class";
    $fileName = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".class.php"; 
    // o directory_separator é pra adaptar ao sistema operacional!

    //if (file_exists($filename)){// não funcionou ainda comigo
      require_once $fileName;
    //}
    // ára verificar se existe o arquivo

});