<?php

 include 'DBModel.php';

 $dbmodel=DBModel::getDB();
           if(isset($_POST['submit'])){
   $dbmodel->addNews($_POST['title'],$_POST['text'],$_POST['link']);
  header("Location: http://localhost/index.php");}
       else
           header("Location: http://localhost/index.php");
