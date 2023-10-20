<?php

class ProfileInfoView extends ProfileInfo{
    


        public function fetchAbout($userId){
            $profileinfo=$this->getProfileInfo($userId);

            echo $profileinfo[0]["profiles_about"];
        }
        public function fetchTitle($userId){
            $profileinfo=$this->getProfileInfo($userId);

            echo $profileinfo[0]["profiles_introtitle"];
        }
        public function fetchText($userId){
            $profileinfo=$this->getProfileInfo($userId);

            echo $profileinfo[0]["profiles_introtext"];
        }
}