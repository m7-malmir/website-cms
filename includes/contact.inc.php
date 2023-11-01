<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title=htmlspecialchars($_POST["title"],ENT_QUOTES,'UTF-8');
    $body=htmlspecialchars($_POST["body"],ENT_QUOTES,'UTF-8');

    include '../classes/dbh.classes.php';
    include '../classes/showAbout.classes.php';
    include '../classes/showAbout-contr.classes.php';
    $profileinfo=new ShowAboutContr();
    $profileinfo->updateContactInfo( $title,$body);
    header("location:../profile.php?error=none");
}