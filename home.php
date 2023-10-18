<?php
require_once 'header.php';

?>

<section class="container">
<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= ROOT_URL ?>img/_DSC0856.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>عنوان محصول</h5>
              <p>توضیحات محصول اول</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?= ROOT_URL ?>./img/_DSC0831.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>عنوان محصول</h5>
                <p>توضیحات محصول اول</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?= ROOT_URL ?>./img/_DSC0830.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>عنوان محصول</h5>
                <p>توضیحات محصول اول</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</header><!--end of header-->
<div class="cards mt-3 align-center row d-flex justify-content-center">
  <div class="text-center m-4"><h2>محبوب ترین محصولات ما</h2></div>
  <?php
                $f=new ShowProductContr();
                $ok=$f->showProduct();
                foreach($ok as $key=>$val) :
                ?>
                
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500" class="card card-index col-sm-1 col-md-4 col-lg-8 m-3">
                  <img src="<?= ROOT_URL ?><?php echo $val['src1']; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a class="dropdown-item" href="<?= ROOT_URL ?>details.php?pr=<?php echo $val['id']; ?>"><?php echo $val['title']; ?></a></h5>
                    <a href="<?= ROOT_URL ?>details.php?pr=<?php echo $val['id']; ?>" class="btn btn-primary">جزییات بیشتر</a>
                  </div>
                </div>
              
                <?php endforeach; ?>
   
</div>
<div class="categories row">
       
    <div class="col-md-3">
        <h1>دسته بندی ها</h1>
        <p>
            توضیحات مریوط به دسته بندی مواد و محصولات
        </p>
        <a href="#" class="btn">بیشتر  بدانید...</a>
    </div><!--categories__left-->
    <div class="col-md-9 d-flex row">
        <article class="category col-md-3 m-3">
            <span class="category__icon"><i class="uil uil-bitcoin"></i></span><!--category__icon-->
            <h5>عنوان دسته بندی</h5>
            <p>توضیح مربوط به دسته بندی مورد نظر.</p>
        </article><!--category-->
        <article class="category col-md-3 m-3">
            <span class="category__icon"><i class="uil uil-palette"></i></span><!--category__icon-->
            <h5>عنوان دسته بندی</h5>
            <p>توضیح مربوط به دسته بندی مورد نظر شما</p>
        </article><!--category-->
        <article class="category col-md-3 m-3">
            <span class="category__icon"><i class="uil uil-dollar-sign-alt"></i></span><!--category__icon-->
            <h5>عنوان دسته بندی</h5>
            <p>توضیح مربوط به دسته بندی مورد نظر شما</p>
        </article><!--category-->
        <article class="category col-md-3 m-3">
            <span class="category__icon"><i class="uil uil-megaphone"></i></span><!--category__icon-->
            <h5>عنوان دسته بندی</h5>
            <p>توضیح مربوط به دسته بندی مورد نظر شما</p>
        </article><!--category-->
        <article class="category col-md-3 m-3">
            <span class="category__icon"><i class="uil uil-music"></i></span><!--category__icon-->
            <h5>عنوان دسته بندی</h5>
            <p>توضیح مربوط به دسته بندی مورد نظر شما</p>
        </article><!--category-->
        <article class="category col-md-3 m-3">
            <span class="category__icon"><i class="uil uil-puzzle-piece"></i></span><!--category__icon-->
            <h5>عنوان دسته بندی</h5>
            <p>توضیح مربوط به دسته بندی مورد نظر شما</p>
        </article><!--category-->
    </div><!--categories__right-->

</div><!--categories-->
</section><!--container-->

<div  class="mt-3 mb-5 ">
  <h3 class="text-center mb-5">آدرس در نقشه گوگل</h3>
  <div  data-aos="zoom-in" class="map">
    <div class="border border-4 rounded-3">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6465.315108705631!2d50.81796!3d35.881908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8daf130f141057%3A0xebf2b7d2119181b2!2z2KrYp9mF24zZhiDYs9in24zYtCDYp9mE2KjYsdiy!5e0!3m2!1sen!2snl!4v1689806076919!5m2!1sen!2snl" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  </div>
</div>
<?php 
require_once 'footer.php';
?>
