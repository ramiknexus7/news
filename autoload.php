<?php
function __autoload($classname)
{
    if(file_exists(__DIR__.'/Controller/'.$classname.'.php'))
    {
        require_once 'Controller/'.$classname.'.php';}
    else  if(file_exists('Model/'.$classname.'php'))
    {require_once 'model/'.$classname.'php';}
}