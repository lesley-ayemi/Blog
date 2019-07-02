  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">



<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">Search</h5>
  <form action="search.php" method="post">
  <div class="card-body">
    <div class="input-group">
      <input name="search" type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button name="submit" class="btn btn-secondary" type="submit">Go!</button>
      </span>
    </div>
  </div>
<!-- search form -->
  </form>
</div>




<!-- Categories Widget -->
<div class="card my-4">

<?php

$query = "SELECT * FROM categories";
// mysqli_query($query, "SELECT * FROM categories")
$select_all_categories_sidebar = mysqli_query($connection,$query);



?>

  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-unstyled mb-0">
            <?php
            
            while($row = mysqli_fetch_assoc($select_all_categories_sidebar)) {
                $cat_title = $row['cat_title'];
             
                echo "<li><a class='nav-link' href='#'>{$cat_title}</a></li>";
             }
            
            ?>
        </ul>
      </div>

    </div>
  </div>
</div>

<!-- Side Widget -->
<?php  include "widget.php"; ?>

</div>