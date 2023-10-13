<?php
class ShowProduct extends Dbh{
    protected function getProductInfo($userId){
        $stmt=$this->connect()->prepare('select * from profiles where users_id = ?');
        if(!$stmt->execute(array($userId))){
            $stmt= null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount() == 0){
            $stmt=null;
            header("location:profile.php?error=profilenotfound!");
            exit();
        }
        $profiledata=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $profiledata;
    }
}    