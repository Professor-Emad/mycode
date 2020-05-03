<?php 
include "config.php";
?>

<head>
  <title>Shop-Now.ml</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/main1.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <link rel="icon" href="pro/icon.png" type="image/png" sizes="16x16">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"  href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="singup.php">SignUp</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php">LogIn</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="admin.php">admin</a>
      </li>

    </ul>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET"  class="form-inline my-2 my-lg-0">

    <a href="adminpage.php">
    <button type="button" class="btn btn-primary m-2">
          Notifications <span class="badge badge-light"><?php $query = mysqli_query($db , "SELECT * FROM `singup`");

while($row = mysqli_fetch_assoc($query)){
echo $row['id'];
 }?></span>
        </button></a>

      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<?php 
if(isset($_GET['search'])){
  $data = ($_GET['search']);
  $query = mysqli_query($db , "SELECT * FROM `cards` WHERE `name` LIKE '%$data%'");
  if(mysqli_num_rows($query) > 0){?>
    <div class="row m-2 justify-content-center">
      <?php  
        while($row = mysqli_fetch_assoc($query)){ 
          
          include "includes/card.php";
        } ?>
        <?php }else{ 
            echo "<p class='text-center text-danger m-4 p-4' >NO items like this name</p>";} ?> 
    </div>
          <?php
          
           exit(); }  ?>







