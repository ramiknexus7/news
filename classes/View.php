<?php


class View{
    public $data=null;

    public  function setData($data)
    {$this->data=$data;

    }
    public  function render($filename)
    {
               ob_start();
        include $filename;
        return ob_get_clean();
    }
}