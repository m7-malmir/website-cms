<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $title=htmlspecialchars($_POST["title"],ENT_QUOTES,'UTF-8');
    $body=htmlspecialchars($_POST["body"],ENT_QUOTES,'UTF-8');

    include '../classes/dbh.classes.php';
    include '../classes/showPost.classes.php';
    include '../classes/showPost-contr.classes.php';
    $profileinfo=new ShowPostContr($id);
    $profileinfo->updatePostInfo($title,$body);
    header("location:../profile.php?error=none");
}