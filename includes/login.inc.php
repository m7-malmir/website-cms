<?php

if(isset($_POST['submit'])){

    //grab link to data
    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];


     //instantiate signup contr class
     include "../classes/dbh.classes.php";
     include "../classes/login.classes.php";
     include "../classes/login-contr.classes.php";
     $login=new LoginContr($uid,$pwd);
     //runnig error handler
     $login->loginUser();
     //going to back to front page
     header("location: ../manage/profile");


} 