<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

//grab link to data
    $uid=htmlspecialchars($_POST['uid'],ENT_QUOTES,'UTF-8');
    $pwd=htmlspecialchars($_POST['pwd'],ENT_QUOTES,'UTF-8');
    $pwdrepeat=htmlspecialchars($_POST['pwdrepeat'],ENT_QUOTES,'UTF-8');
    $email=$_POST['email'];


    //instantiate signup contr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup=new SignupContr($uid,$pwd,$pwdrepeat,$email);
    //runnig error handler
    $signup->signupUser();
    $userid=$signup->fetchUserId($uid);
    //instantiate profileinfo contr class
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileinfo=new ProfileInfoContr($userid,$uid);
    $profileinfo->defaultProfileInfo();
    //going to back to front page
    header("location: ../index.php?error=none");

}