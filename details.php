<?php 
require_once 'header.php';
if(isset($_GET['pr'])){
    $id=filter_var($_GET['pr'],FILTER_SANITIZE_NUMBER_INT);
    $query="select * from product where id=$id";
    $res=mysqli_query($mysqli,$query);
    $post=mysqli_fetch_assoc($res);
?>
<section class="container-fluid ">
        <div class="row d-flex align-items-center detail">
        <div dir="ltr" class="col-md-5  text-center ">
            <div class="col-md-6">
                <img class="img-fluid1" src="<?= $post['src1'] ?>" alt="<?= $post['key1'] ?>">
            </div>
            <!-- <div class="col-md-6">
                <img src="./img/<?= $post['src2'] ?>" alt="<?= $post['key2'] ?>">
            </div>
            <div class="col-md-6">
                <img src="./img/<?= $post['src3'] ?>" alt="<?= $post['key3'] ?>">
            </div>
            <div class="col-md-6">
                <img src="./img/<?= $post['src4'] ?>" alt="<?= $post['key4'] ?>">
            </div> -->
            </div>

            <div class="col-md-7 text-right">
            <h1 ><?= $post['title'] ?></h1>
            <p class="w-75"><?=  $post['body'] ?>
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد
        </p>
            </div>

        
            
            
        </div><!--main-card-->
    </section><!--container header__container-->

    <?php 
    }else{
        header('location: '.ROOT_URL.'index.php');
        die();
    }
    require_once 'footer.php';
    
    ?>