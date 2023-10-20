<?php
include 'header.php';
include 'classes/dbh.classes.php';
include 'classes/profileinfo.classes.php';
include 'classes/profileinfo-view.classes.php';
$profileinfo=new ProfileInfoView();
?>

<section>
    <div>
        <h3>profile setting</h3>
    </div>
    <form action="includes/profileinfo.inc.php" method="POST">
        <textarea name="about"  cols="30" rows="10" placeholder="profile about section ..."><?php $profileinfo->fetchTitle($_SESSION["userid"])  ?></textarea><br/>
        <p>change your profile page</p>
        <br>
        <input type="text" name="introtitle" value="<?php $profileinfo->fetchAbout($_SESSION["userid"])  ?>" placeholder="profile title..."  style="width:50%;"><br>
        <textarea name="introtext" cols="30" rows="10" placeholder="profile introduction..."><?php $profileinfo->fetchText($_SESSION["userid"]); ?></textarea><br>
        <input name="submit" type="submit" value="save">
    </form>
</section>

</body>
</html>