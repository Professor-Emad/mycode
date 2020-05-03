<?php 
include "includes/nav.php";
?>



<?php 

if(isset($_POST['submit'])){
$first = htmlspecialchars($_POST['first']);
$last = htmlspecialchars($_POST['last']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$address = htmlspecialchars($_POST['address']);
$address2 = htmlspecialchars($_POST['address2']);
$city = htmlspecialchars($_POST['city']);
if(empty($first)){
 $errors['result'] = 'please write First name';

if(empty($last)){
  $errors['result'] = 'please write Last name';
} 
 if(empty($email)){
  $errors['result'] = 'please write email';
}
 if(empty($password)){
  $errors['result'] = 'please write password';
}
 if(empty($address)){
  $errors['result'] = 'please write address';
 }
 if(empty($address2)){
  $errors['result'] = 'please write address2';
 }  
 if(empty($city)){
  $errors['result'] = 'please write city';
 }
}else{
  $query = mysqli_query($db , "SELECT * FROM `singup`");
 $query = "INSERT INTO singup(first,last,email,password,address,address2,city) VALUE('$first','$last','$email','$password','$address','$address2','$city')";
  
 if(mysqli_query($db, $query)){
   header('location:index.php');
   echo "success";
 }else{
   echo 'query error: ' . mysqli_error($db);
 }
}

}
?>

<p class="text-center text-danger m-4 p-4" style="color: red;"><?php echo $errors['result']; ?></p>




<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group p-4 bg-light " id="form-wrapper" style="max-width:500px;margin:auto;">
  <div class="row">
    <div class="form-group col-md-6">
    <label for="inputfirst">First name</label>
      <input type="text" name="first" class="form-control" placeholder="First name">
    </div>
    <div class="form-group col-md-6">
    <label for="inputlast">Last name</label>
      <input type="text" name="last" class="form-control" placeholder="Last name">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4">
    </div>
 
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Address 2</label>
    <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>

    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" class="form-control" id="inputCity">
    </div>
  
  <button type="submit" name="submit"  class="btn btn-primary m-1 w-100">Sign Up</button>


</form>


<style>
.form-group{
    border-color: black !important;
    border-radius: 10px !important;
    box-shadow: 10px;
    scrollbar-shadow-color: black;
}

</style>