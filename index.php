<?php
include "includes/db.php";
include "includes/header.php";
?>

<?php include "includes/navigation.php"; ?>


  <!-- Page Content -->
  <div class="container">
  
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

       <?php

        $query = "SELECT * FROM posts";
          // mysqli_query($query, "SELECT * FROM categories")
          $select_all_posts_query = mysqli_query($connection, $query);

           while($row = mysqli_fetch_assoc($select_all_posts_query)) {
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];

            ?>

            <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
            </h1>
  
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="img/<?php echo $post_image  ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $post_title ?> </h2>
              <p class="card-text"><?php  echo $post_content ?></p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?php echo $post_date?> 
              <a href="#"><?php echo $post_author ?></a>
            </div>
          </div>
  
          <!-- Pagination -->
          <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul> -->

            
            <?php } ?>

      </div>

      <!-- Sidebar Widgets Column -->
      <?php include "includes/sidebar.php"; ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 <?php include "includes/footer.php ";?>