<?php
class Dbh{
  protected function connect(){
        try {
            $username="root";
            $password="";
            $dbh=new PDO("mysql:host=localhost;dbname=subasayesh",$username,$password);
            return $dbh;
        } catch (\Throwable $th) {
            print 'Error!: '. $th->getMessage() ."<br/>";
            die();
        }
  }
}
?>