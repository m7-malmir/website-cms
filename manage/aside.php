<?php  
    $users2   = 'users';
    $category='categories';
    $post='posts';

    //   if (str_contains($query, $users2)) {
    //      $user_export='active';
    //  }elseif (str_contains($query, $category)) {
    //     $cat_export='active';
    //  }elseif(str_contains($query, $post)){
    //     $post_export='active';
    //  }
?>
            <aside> 
                <div class="sidebar">
                    <a href="#"><i class="uil uil-plus"></i>
                     <h4>افزودن پست</h4>
                    </a>
                    <a href="profile.php" class="<?= $post_export ?? null ?>"><i class="uil uil-postcard"></i>
                     <h4>مدیریت پست ها</h4>
                    </a>
                    
                    <a href="edit-contact.php"><i class="uil uil-edit"></i>
                     <h4>ویرایش درباره ما</h4>
                    </a>
                  
                </div><!--sidebar-->
            </aside>