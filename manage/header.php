<?php
include "../classes/dbh.classes.php";
include '../classes/showProduct.classes.php';
include '../classes/showProduct-contr.classes.php';

include '../classes/profileinfo.classes.php';
include '../classes/profileinfo-view.classes.php';
$profileinfo=new ProfileInfoView();
//fetch current user avatar from database
if(isset($_SESSION["useruid"])){
    //echo $_SESSION["useruid"];
}
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Website</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style-admin.css">
</head>
<body>
<nav>
    <div class="container nav__container">
        <a href="<?= ROOT_URL ?>"><h4>پنل مدیریت</h4></a>
        <ul class="nav__menu">
            <li><a href="<?= ROOT_URL ?>home.php"><h4>خانه</h4></a></li>
            <li><a href="<?= ROOT_URL ?>about.php"><h4>درباره ما</h4></a></li>
            <li><a href="<?= ROOT_URL ?>home.php"><h4>پست ها</h4></a></li>
            <li><a href="<?= ROOT_URL ?>contact.php"><h4>تماس با ما</h4></a></li>
            <?php if(isset($_SESSION['user_id'])) : ?>
            <li class="nav__profile">
                <div class="avatar">
                    <img src="<?= ROOT_URL .'/img/'.$avatar['avatar']?>" alt="">
                </div>
                <ul id="hidden">
                    <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboord</a></li>
                    <li><a href="<?= ROOT_URL ?>logout.php">Log Out</a></li>
                </ul>  
            </li>
                <?php else : ?>
            <li><a href="<?= ROOT_URL ?>signin.php"><h4>Sign in</h4></a></li>
           <?php endif ?>
          </ul>
          <button id="open-menu-btn"><i class="uil uil-bars"></i></btn>
          <button id="close-menu-btn"><i class="uil uil-multiply"></i></btn>
    </div>

</nav><!--end of nav-->