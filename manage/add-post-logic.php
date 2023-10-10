<?php
require 'conn.php';
 if(isset($_POST['submit'])){

    // $author_id=$_SESSION['user_id'];
    $title=filter_var($_POST['title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $body=filter_var($_POST['body'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $key1=filter_var($_POST['key1'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $key2=filter_var($_POST['key2'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $key3=filter_var($_POST['key3'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $key4=filter_var($_POST['key4'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $thumbnail1=$_FILES['src1'];
    $thumbnail2=$_FILES['src2'];
    $thumbnail3=$_FILES['src3'];
    $thumbnail4=$_FILES['src4'];
    //validate form data
    // if(!$title) {
    //     $_SESSION['add-post']='please enter post title';
    // }elseif(!$cat_id) {
    //     $_SESSION['add-post']='select post category';
    // }elseif(!$body) {
    //     $_SESSION['add-post']='enter post body';
    // }elseif(!$thumbnail1['src1']) {
    //     $_SESSION['add-post']='choose post thumbnail';
    // }else{
        $time=time();
        $thumbnail_name1=$time . $thumbnail1['name'];
        $thumbnail_tmp_name=$thumbnail1['tmp_name'];
        $thumbnail_destination_path='../img/'.$thumbnail_name1;
        //make sure file an image
        $allow_file=['jpg','png','jpeg'];
        $extention=explode('.',$thumbnail_name1);
        $extention=end($extention);
        // if (in_array($extention,$allow_file)) {
        //    if ($thumbnail['size']<1000000) {
        //     ///upload
        //     move_uploaded_file($thumbnail_tmp_name,$thumbnail_destination_path);
        //    }else{
        //     $_SESSION['add-post']='file too  big, shoud be less than 1mb ';
        //     die();
        //    }
        // }else{
        //     $_SESSION['add-post']='file shouis_featuredde be jpg,png or jpeg format ';
        //     die();
        // }

    // }
    // if (isset($_SESSION['add-post'])) {
    //     $_SESSION['add-post-data']=$_POST;
    //     echo 'location go to add-post';
    //     header('location:'.ROOT_URL.'/admin/add-post.php');
    //     die();
    // }else{
    //     //if(isset($_POST['is_featured'])){
        
    // }else{
    //     //$is_featured=0;
    // }
        //insert into database
        $thumbnail_name2='2';
        $thumbnail_name3='3';
        $thumbnail_name4='4';
        $query="INSERT INTO `product`(`title`, `body`, `src1`, `key1`, `src2`, `key2`, `src3`, `key3`, `src4`, `key4`) VALUES ('{$title}','{$body}','{$thumbnail_name1}','{$key1}','{$thumbnail_name2}','{$key2}','{$thumbnail_name3}','{$key3}','{$thumbnail_name4}','{$key4}')";
    
        $result=mysqli_query($mysqli,$query);
        print_r($mysqli);
        if(!mysqli_errno($mysqli)){
            $_SESSION['add-post-success']='new post added successfully';
            header('location:'.ROOT_URL.'admin/manage');
            die();
        }else{
            echo 'none';
        }
       
     }
// 
