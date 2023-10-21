<?php
require_once '../header.php';
?>
<section class="contact">
    <div class="container contact contact__container">
        <div>
            <img src="../img/Web-Designing-PNG-Images-HD.png" alt="">
        </div>
        <div>
             <h2> ورود مدیریت</h2>
            <form  action="../includes/login.inc.php" method="post" class="contact__form">
                <div class="form__name">
                <input type="text" name="uid" placeholder="نام کاربری" style="width:100%;">
                </div><!--form__name-->
                <div class="form__name">
                <input type="password" name="pwd" placeholder="رمز عبور">
                </div><!--form__name-->
                <input class="btn btn-primary" name="submit" type="submit" value="ورود">
            </form>
        </div>
        </div>
    </section>

<?php 
require_once '../footer.php';
?>