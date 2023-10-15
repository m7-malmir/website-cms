<?php
require_once 'dbh.php';
class ShowProduct extends Dbh{
    public function getProductInfo(){
        $stmt=$this->connect()->prepare("SELECT * FROM `product`");
        $stmt->execute();
        $row=$stmt->fetchAll();
        return $row;
    }
}    