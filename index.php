<?php 
include "includes/nav.php";
?>











<?php if(isset($_GET['delete'])){
$id = htmlspecialchars($_GET['delete']);
$query = mysqli_query($db , "DELETE FROM `cards` WHERE `id` = '$id'");
if($query){
header("location:index.php");
}
}

?>



<h1 class="text text-center display-2 m-1">
  <font face="VeganStylePersonalUse-5Y58">welcome</font>
</h1>
<?php 
if($_SESSION['admin']){?>
<h3 class="text text-center display-2 m-1">
  <font face="VeganStylePersonalUse-5Y58">admin</font>
</h3>
<?php } ?>
<div class="justify-content-center">
  <div class="row m-2 p-3">
    <?php 
$query = mysqli_query($db , "SELECT * FROM `cards`");

while($row = mysqli_fetch_assoc($query)){
include "includes/card.php";
 } ?>
  </div>
</div>




<div class="justify-content-center">
  <div class="row m-2 p-3">
    <div class="shadow p-2 mb-4 ">
      <div class="card m-2 p-3" style="width: 13.5rem;">
        <div class="card-title">
      <h3 class="text text-center">Add</h3>
      </div>
        <div class="card-body">

          <a href="add.php"><button type="button" name="button" class="btn"><img class="card-img-top img-fluid" style="height: 12.5rem;" src="logos/add.svg"></button></a>
        </div>

      </div>
    </div>
  </div>
</div>









<?php 
include "footer.php";
?>