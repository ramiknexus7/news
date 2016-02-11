<?php

  class DBModel{
      private $pdo;
      private static $dbModel=null;
      private $username='ramik';
      private $password='ramik';
     private function  __construct()
      {

         $this->pdo=new PDO("mysql:host=localhost;dbname=news;port=3306",$this->username,$this->password);

      }
      public static function getDB()
      {
          if(self::$dbModel==null)
              self::$dbModel=new self;

          return self::$dbModel;

      }
    public function getAllNews()
    {
       $sql="select title, text, link from news ORDER  BY title DESC";
        $stmt=$this->pdo->query($sql);
          if($stmt)
              $result=$stmt->fetchAll();
         return $result===false?false:$result;
    }
      public function getNews($id)
      {

      }
      public function addNews($title,$text,$link){


          $sql="insert into news (title,text,link) values (?,?,?)";
              $stmt=$this->pdo->prepare($sql);
             $result =$stmt->execute([$title,$text,$link]);
          print_r($this->pdo-> errorInfo());
           if($result===false)
               return false;

          return true;
      }
  }