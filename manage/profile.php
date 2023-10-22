<?php
include '../header.php';
if(isset($_SESSION["useruid"])){
?>
   <section >
    <h3><?php echo $_SESSION["useruid"] ?></h3>
   </section>

<?php
}else{
   require 'login.php';
}
include '../footer.php';

?>

