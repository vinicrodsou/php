<?php 

//function __autoload($className) {
//    require_once("$className.php");
//}

function classes($className) {
    require_once("$className.php");
}

spl_autoload_register('classes');

$carro = new DelRey();

?>