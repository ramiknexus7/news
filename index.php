<?php
set_include_path(get_include_path().PATH_SEPARATOR."controllers/".
PATH_SEPARATOR."models/".
    PATH_SEPARATOR."views/".
    PATH_SEPARATOR."classes/");
require_once 'autoload.php';

 $request=$_SERVER['REQUEST_URI'];
     $splits=explode('/',trim($request,'/'));
   $cont=null;
   $action=null;

     $cont=!empty($splits[0])? ucfirst($splits[0])."Controller":"NewsController";
    $action=!empty($splits[0])? "action".$splits[1]:"actionGetAllNews";

           $rc=new ReflectionClass($cont);
              if($rc->hasMethod($action))
              {
                  $cont=$rc->newInstance();
                  $method=$rc->getMethod($action);
                  $method->invoke($cont);
              }
