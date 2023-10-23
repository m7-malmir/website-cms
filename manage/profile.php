<?php
include './header.php';
if(isset($_SESSION["useruid"])){
?>
<section class="dashboord">
    
    <div class="dashboord__container"> 
        <div class="left">
                    
        <?php
        include 'aside.php';
        ?>
        </div><!--left-->
        <div class="right">

<?php if(isset($_SESSION['add-post-success'])) : ?>
    <div class="container">  
    <p class="su-alert">
    <?= $_SESSION['add-post-success'];
    unset($_SESSION['add-post-success']);
    ?>
    </p>
    <?php elseif(isset($_SESSION['edit-post-success'])) : ?>
        <p class="su-alert">
    <?= $_SESSION['edit-post-success'];
    unset($_SESSION['edit-post-success']);
    ?>
    </p>
    <?php elseif(isset($_SESSION['delete-post-su'])) : ?>
        <p class="su-alert">
    <?= $_SESSION['delete-post-su'];
    unset($_SESSION['delete-post-su']);
    ?>
    </p>
    </div>
    <?php endif ?>

            <div class="recent-orders">
                <h3>Manage Posts</h3>
                
                <table>
                    <thead>
                      <tr>
                        <th>title</th>
                        <th>img</th>
                        <th>img</th>
                        <th>img</th>
                        <th>img</th>
                        <th>Edit</th>
                        <th>Delete</th>  
                      </tr>
                     </thead>
                     <tbody>
                     <?php
                        $f=new ShowProductContr();
                        $ok=$f->showProduct();
                        foreach($ok as $key=>$val) :
                      ?>
                        <tr>
                            <td><?php echo $val['title']; ?></td>
                            <td><img src="<?= ROOT_URL ?><?php echo $val['src1']; ?>" alt="" style="width:35%;"></td>
                            <td><img src="<?= ROOT_URL ?><?php echo $val['src2']; ?>" alt="" style="width:15%;"></td>
                            <td><img src="<?= ROOT_URL ?><?php echo $val['src3']; ?>" alt="" style="width:15%;"></td>
                            <td><img src="<?= ROOT_URL ?><?php echo $val['src4']; ?>" alt="" style="width:15%;"></td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-post.php?id=<?php echo $val['id']; ?>" ><button class="btn-blog">edit</button></a></td>
                            <td class="warning"><a href="<?= ROOT_URL ?>admin/delete-post.php?id=<?php echo $val['id']; ?>" ><button class="btn-danger">delete</button></a></td>
                        </tr>
                        <?php endforeach ?>
                     </tbody>
                </table>
                 <!-- <?php ?>
                    <p class="alert">no post found </p>
                    <?php ?> -->
                  
            </div><!--recent-order-->
            <div class="pagination">
                <i class="uil uil-angle-left"></i>
                <a href="">1</a><a href="">2</a><a href="">3</a>
                <i class="uil uil-angle-right"></i>
              </div><!--pagination-->
        </div><!--right-->
</div>
</section>
<?php
}else{
   require 'login.php';
}
include '../footer.php';

?>

