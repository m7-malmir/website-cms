<?php
require_once 'dbh.php';
class ShowDetail{
    protected function getProductInfo($id){
        $stmt=$this->connect()->prepare("SELECT * FROM `product` where id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }
}