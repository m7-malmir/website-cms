<?php
include '../header.php';
// $query="select * from categories";
// $cat=mysqli_query($mysqli,$query);
?>
<section class="container"> 
    <div class="row">
        <div class="col-md-8">

          <p class="alert">
             <h3>افزودن محصول</h3>
          </p>
          <form method="POST" action="add-post-logic.php" enctype="multipart/form-data">
            <div class="mb-3">
                    <div class="form-outline">
                        <label for="" class="form-label">عنوان</label>
                        <input type="text" name="title" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                <div class="form-outline">
                <label class="form-label" for="textAreaExample">توضیح درباره محصول</label>
                    <textarea name="body" class="form-control" id="textAreaExample1" rows="4"></textarea>
                </div>
                <div class="col-md-10 d-flex">
                    <div class="">
                    <label for="formFileDisabled" class="form-label">عکس 1</label>
                    <input class="form-control" name="src1" type="file" id="formFileDisabled" >
                    </div>
                    <div class="w-100">
                        <label for="" class="form-label">کلمه کلیدی 1</label>
                        <input type="text" name="key1" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-10 d-flex">
                    <div class="">
                    <label for="formFileDisabled" class="form-label">عکس 2</label>
                    <input class="form-control" name="src2" type="file" id="formFileDisabled" >
                    </div>
                    <div class="w-100">
                        <label for="" class="form-label">کلمه کلیدی 2</label>
                        <input type="text" name="key2" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-10 d-flex">
                    <div class="">
                    <label for="formFileDisabled" class="form-label">عکس 3</label>
                    <input class="form-control" name="src3" type="file" id="formFileDisabled" >
                    </div>
                    <div class="w-100">
                        <label for="" class="form-label">کلمه کلیدی 3</label>
                        <input type="text" name="key3" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-10 d-flex">
                    <div class="">
                        <label for="formFileDisabled" class="form-label">عکس 4</label>
                        <input class="form-control" name="src4" type="file" id="formFileDisabled" >
                    </div>
                    <div class="w-100">
                        <label for="" class="form-label">کلمه کلیدی 4</label>
                        <input type="text" name="key4" class="form-control" id="" aria-describedby="emailHelp">
                    </div>
                </div>

                <p>
                    <input type="submit" name="submit" value="submit">
                </p>
                
            </form>
            </div>
    </div>
</section>
<?php
include '../footer.php';
?>