<?php include "includes/nav.php"; ?>


<?php 


if(isset($_GET['del'])){
$id = htmlspecialchars($_GET['del']);
$query = mysqli_query($db , "DELETE FROM `singup` WHERE `id` = '$id'");
if($query){
header("location:appeals.php");
}
}

?>




<div class="justify-content-center">
<div class="row m-2 p-3">

<?php 
$query = mysqli_query($db , "SELECT * FROM `singup` ORDER BY `id` DESC");

while($row = mysqli_fetch_assoc($query)){?>
<div class="shadow p-2 mb-4 ">
    <div class="card m-2 p-3" style="width: 15rem;">
<div class="card-body">
            <h5 class="card-title">first Name: <?php echo $row['first']; ?></h5>
            <h5 class="card-title">last Name: <?php echo $row['last']; ?></h5>
            <h6 class="card-text">email: <?php echo $row['email']; ?></h6>
            <h6 class="card-text">password: <?php echo $row['password']; ?></h6>
            <h6 class="card-text">address: <?php echo $row['address']; ?></h6>
            <h6 class="card-text">address 2: <?php echo $row['address2']; ?></h6>
            <h6 class="card-text">city: <?php echo $row['city']; ?></h6>
            <a href="appeals.php?del=<?php echo $row['id']; ?>" class="btn btn-danger p-1 w-100" style="border-radius: 20px;" name="del">Delete appeal</a>
        </div>
    </div>
</div>
<?php }?>
</div>        
</div>






<a href="adminpage.php"><button type="button" name="button" class="btn btn-danger p-1  w-100 d-flex-end">Back</button></a>
<div class="mask rgba-gradient align-items-center">
<div class="col-md-7 col-xl-6 mt-xl-4 wow " data-wow-delay="0.3s">
                    <img src="logos/und.svg" alt="" class="img-fluid">
                  </div>
</div>