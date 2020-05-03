<div class="shadow p-2 mb-4 ">
    <div class="card m-2 p-3" style="width: 15rem;">
        <img class="card-img-top img-fluid" style="height: 11.5rem;" src="img/<?php echo $row['photo']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Name:<?php echo $row['name']; ?></h5>
            <h3 class="card-text">Price:<?php echo $row['price']; ?></h3>
            <a type="button"  class="btn btn-info p-1  w-100">Buy</a>
        </div>
        <a type="edit" name="edit" class="btn btn-warning p-1  w-100">Edit</a>
        <br>
        <a type="delete" href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger p-1  w-100">Delete</a>
    </div>
</div>