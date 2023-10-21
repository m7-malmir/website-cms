<?php
require_once '../header.php';
?>
<style>
 
  
</style>

<section class="contact">
    <div class="container contact contact__container">
        <h2>login</h2>
        <form  action="../includes/login.inc.php" method="post" class="contact__form">
            <div class="form__name">
            <input type="text" name="uid" id="" >
            </div><!--form__name-->
            <div class="form__name">
            <input type="password" name="pwd" id="">
            </div><!--form__name-->
            
            <input name="submit" type="submit" value="login">
        </form>
        </div>
    </section>






<?php 
require_once '../footer.php';
?>