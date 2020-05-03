<?php include "includes/nav.php" ?>

<?php 

if(isset($_POST['add'])){
$photo = htmlspecialchars($_POST['photo']);
$name = htmlspecialchars($_POST['name']);
$price = htmlspecialchars($_POST['price']);
$fileName = $file['photo'];

  $query = mysqli_query($db , "SELECT * FROM `cards`");
  $query = "INSERT INTO cards(photo,name,price) VALUE('$photo','$name','$price')";
  $fileDestintion = "img/$photo";
  move_uploaded_file($fileName , $fileDestintion);
  if(mysqli_query($db, $query)){
    header('location:index.php');
  }else{
    echo 'query error: ' . mysqli_error($db);
  }
 }





?>



<p class="text-center text-danger m-4 p-4" style="color: red;"><?php echo $errors['add']; ?></p>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"
  class="form-group p-4 bg-light" id="form-wrapper" style="max-width:500px;margin:auto;">
  <div class="form-group">
    <label for="exampleFormControlFile1">image input</label>
    <input style="border-radius: 5px;" type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div class="row">
    <div class="col">
      <input type="text" name="name" class="form-control" placeholder="name">
    </div>
    <div class="col">
      <input type="text" name="price" class="form-control" placeholder="price $">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <a href="index.php"> <button class="btn btn-danger w-100 ">discard</button></a>
    </div>
    <div class="col">
      <button type="submit" name="add" class="btn btn-primary w-100">add</button>
    </div>
  </div>
</form>