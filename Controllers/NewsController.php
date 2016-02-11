<?php

class NewsController {

    public  function  actionGetAllNews()
    {
           $news=  DBModel::getDB()->getAllNews();
              $view =new View();
              $view->setData($news);
              echo $view->render("main.php");

    }

}