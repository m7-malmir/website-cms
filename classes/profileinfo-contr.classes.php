<?php

class ProfileInfoContr extends ProfileInfo{
       private $userId;
       private $userUid;
       public function __construct($userId,$userUid){
        $this->userId=$userId;
        $this->userUid=$userUid;
       }
       public function defaultProfileInfo(){
        $profileabout = "tell about yourself your intrests, hobbies or favorite tv show";
        $profiletitle = "Hi i am : " . $this->userUid;
        $profiletext = "wellcome to my profile i am ... an you are my guest";
        $this->setProfileInfo($profileabout,$profiletitle,$profiletext,$this->userId);
       }
       public function updateProfileInfo($about,$introtitle,$introtext){
        //Error handlers
        if($this->emptyInputCheck($about,$introtitle,$introtext)==true){
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }
        //Update profile info
        $this->setNewProfileInfo($about,$introtitle,$introtext,$this->userId);
       }

       private function emptyInputCheck($about,$introtitle,$introtext){
        $result;
        if(empty($about) || empty($introtitle) || empty($introtext)){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
       }
}