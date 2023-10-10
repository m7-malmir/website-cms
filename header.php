<?php 

require 'manage/conn.php';

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subasayesh </title>
    <link rel="icon" href="./img/IMG-20230614-WA0000.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css"> 
</head>
<body>
<div class="top-header d-flex  $indigo-900 bg-warning ltr text-light heigh50 align-items-center ">
    <div class="text-end text-left mr-4">شماره تماس کارخانه  : <a href="tel:02634251129">34251129-026</a></div>
</div>
<div class="menu-header ">
  
  <div class="menu">
    <nav class="navbar navbar-expand-lg navbar-dark bg-menu ">
      <div class="container-fluid">
        <div class="d-flex flex-column align-items-center text-white fw-bold">
          <span>
            subasayesh 
          </span>
          <span>Tamin Sayesh Alborz</span>
        </div><!--logo-->
        <img class="wid6" src="./img/IMG-20230614-WA0000.png" alt="">
        <span class="text-white">تامین سایش البرز</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-4" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT_URL ?>index.php">خانه<i class="bi bi-house-door-fill text-white"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                محصولات 
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                $f_query="SELECT * FROM `product`";
                $f_result=mysqli_query($mysqli,$f_query);
                
                while($post = mysqli_fetch_assoc($f_result)) :
                ?>
                <li><a class="dropdown-item" href="<?= ROOT_URL ?>details.php?pr=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></li>
              
                <?php endwhile ?>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= ROOT_URL ?>about.php" tabindex="-1" > درباره ما</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= ROOT_URL ?>contact.php" tabindex="-1" >تماس با ما</a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav><!--end of nav-->
   
  </div>
</div><!--menu-header-->
   