<?php
set_include_path(get_include_path().
    PATH_SEPARATOR."view/".
    PATH_SEPARATOR."model/");
 function __autoload($class)
 {
     require_once $class.".php";
 }
         $request=$_SERVER['REQUEST_URI'];
            $splits
?>