<?php
require_once 'dbh.php';
class ShowProduct extends Dbh{
    public function getProductInfo(){
        $stmt=$this->connect()->prepare('SELECT * FROM `product`');
        // if($stmt->rowCount() == 0){
        //     $stmt=null;
        //     header("location:profile.php?error=profilenotfound!");
        //     exit();
        // }
        $profiledata=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $profiledata;
    }
}    

$ob1=new ShowProduct;
var_dump($ob1->getProductInfo());
