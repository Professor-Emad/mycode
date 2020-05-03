<?php 
include "includes/nav.php";

?>

<?php 

if(isset($_POST['password'])){

  $adminname = htmlspecialchars($_POST['adminname']);
  $password = htmlspecialchars($_POST['password']);
  if(empty($password)){
    $errors['admin'] = 'passowrd is empty';
  }else{
  
  $query = mysqli_query($db , "SELECT * FROM `admin` WHERE `adminname` = '$adminname' AND `password` = '$password'");
  if(mysqli_num_rows($query) == 1){
    while($row = mysqli_fetch_assoc($query)){
     $_SESSION['admin'] = $row['admin'];
    }
    
  }else{header('location:admin.php');}
}
  
}
?>


<p class="text-center text-danger m-4 p-4" style="color: red;"><?php echo $errors['admin']; ?></p>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group p-4 bg-light "
  style="max-width:500px;margin:auto;">

  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputfirst">admin name</label>
      <input type="text" name="adminname" class="form-control" placeholder="admin name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputlast">password</label>
      <input type="text" name="password" class="form-control" placeholder="password">
    </div>
  </div>

  <button type="button" name="button" id="button" class="btn btn-primary  w-100">login as admin</button>
</form>