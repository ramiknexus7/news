<?php
set_include_path(get_include_path().
    PATH_SEPARATOR."view/".
    PATH_SEPARATOR."model/");
 function __autoload($class)
 {
     require_once $class.".php";
 }              if(isset($_GET['addnews']))
         if($_GET['addnews']=='addnews')
             header('Location:view/adminForm.php');

         include 'main.php';
?>