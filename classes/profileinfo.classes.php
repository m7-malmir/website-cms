<?php
class ProfileInfo extends Dbh{
    protected function getProfileInfo($userId){
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
    protected function setNewProfileInfo($profileabout,$profiletitle,$profiletext,$userId){
        $stmt=$this->connect()->prepare('UPDATE `profiles` SET `profiles_about`=?,`profiles_introtitle`=?,`profiles_introtext`=? WHERE `users_id`=?;');
        if(!$stmt->execute(array($profileabout,$profiletext,$profiletitle,$userId))){
            $stmt= null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }
        
        $stmt=null;
            
    }
    protected function setProfileInfo($profileabout,$profiletitle,$profiletext,$userId){
        $stmt=$this->connect()->prepare('INSERT INTO `profiles`( `profiles_about`, `profiles_introtitle`, `profiles_introtext`, `users_id`) VALUES (?,?,?,?);');
        if(!$stmt->execute(array($profileabout,$profiletext,$profiletitle,$userId))){
            $stmt= null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }
        
        $stmt=null;
            
    }
}