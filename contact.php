<?php
require_once 'header.php';
?>
<section class="contact">
    <div class="container contact contact__container">
        <aside class="contact__aside">
            <div class="aside__image">
                <img src="./img/23.jpg" alt="">
            </div>
            <h2 class="text-start">تماس با ما</h2>
            <p>
              طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی صفحات آماده نیست. در نتیجه طرح کلی دید درستی به کار فرما نمیدهد. اگر طراح بخواهد دنبال متن های مرتبط بگردد تمرکزش از روی کار اصلی برداشته میشود و اینکار زمان بر خواهد بود. 
            </p>
            <ul class="contact__details">
                <li>
                    <i class="uil uil-phone-times"></i>
                    <div>موبایل : <a href="tel:09121857214">09121857214</a></div>
                </li>
                <li>
                <i class="uil uil-envelope-alt"></i>
                    <h5>suppor@gmail.com</h5>
                </li>
                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>البرز کرج</h5></li>
                
            </ul>
            <ul class="contact__socials">
                <li> <a href="#"><i class="uil uil-instagram"></i></a></li>
                <li> <a href="#"><i class="uil uil-facebook"></i></a></li>
                <li> <a href="#"><i class="uil uil-twitter-alt"></i></a></li>
                <li> <a href="#"><i class="uil uil-linkedin"></i></a></li>
             </ul>
        </aside><!--contact__aside-->

        <form action="https://formspree.io/f/mnqypldd" method="POST" class="contact__form">
            <div class="form__name">
                <input type="text" name="first name" placeholder="نام">
                <input type="text" name="last name" placeholder="نام خانوادگی">
            </div><!--form__name-->
            <input type="" name="email address" placeholder="ایمیل شما" required>
            <textarea name="message" id="" placeholder="Mwssage"  rows="7" required></textarea>
            <button type="submit" class="btn btn-primary">ارسال پیام</button>
        </form>

    </div><!--container contact contact__container-->
</section><!--contact-->
<?php 
require_once 'footer.php';
?>