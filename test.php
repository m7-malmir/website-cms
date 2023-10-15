<?php
require './classes/dbh.php';
require './classes/showProduct.classes.php';


               $f=new ShowProduct;
               $ok=$f->getProductInfo();
               foreach ($ok as $key => $value) {
                  print_r($value['title']);
               }

?>