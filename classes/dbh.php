<?php
class Dbh{
  public function connect(){
        try {
            $username="root";
            $password="";
            $dbh=new PDO("mysql:host=localhost;dbname=subasayesh",$username,$password);
            $dbh->prepare('SELECT * FROM `product`');
            //return $dbh;
        } catch (\Throwable $th) {
            print 'Error!: '. $th->getMessage() ."<br/>";
            die();
        }
  }
}
$ob1=new Dbh();
var_dump($ob1->connect());
?>