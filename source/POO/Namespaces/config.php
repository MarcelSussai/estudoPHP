<?php

spl_autoload_register(function($nameClass){

    $dirClass = "class";
    $fileName = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".class.php"; 
    // o directory_separator é pra adaptar ao sistema operacional!

    //if (file_exists($filename)){
      require_once $fileName;
    //}
    // ára verificar se existe o arquivo

});