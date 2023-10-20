<?php
include 'header.php';
include 'classes/dbh.classes.php';
include 'classes/profileinfo.classes.php';
include 'classes/profileinfo-view.classes.php';
$profileinfo=new ProfileInfoView();
?>
   <section style="float: left;width:30%; background-color: antiquewhite;">
    <h3><?php echo $_SESSION["useruid"] ?></h3>
    <h2><a href="profilesettings.php">Profile Setting</a></h2>

    <h4>about</h4>
    <p style="color:blueviolet;"><?php $profileinfo->fetchAbout($_SESSION["userid"]);  ?></p>
    <h3>followers</h3>
    <h3>following</h3>
   </section>

    <section style="float:right;width:70%;background-color:burlywood;">
        <h3 style="color:blueviolet;"><?php $profileinfo->fetchTitle($_SESSION["userid"])  ?></h3>
        <p style="color:blueviolet;"><?php $profileinfo->fetchText($_SESSION["userid"])  ?></p>
        <div>
            <h3>POSTS</h3>
            <div>
                <h2><?php $profileinfo->fetchTitle($_SESSION["userid"])  ?></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt voluptas suscipit, pariatur itaque aliquam cum tempore inventore provident, rem facere harum minus veritatis, magni eligendi.</p>
                <p>12:34 1402-03-34</p>
            </div>
        </div>
    </section>
</body>
</html>