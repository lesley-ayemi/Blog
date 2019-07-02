<!-- //Header -->
<?php include "includes/admin_header.php"; ?>

<!-- //Navigation -->
<?php include "includes/admin_navigation.php"; ?>

  
<!-- //wrapper div -->
  <div id="wrapper">

<?php include "includes/admin_sidebar.php"; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Welcome Admin</a>
          </li>
          <li class="breadcrumb-item active">Author</li>
        </ol>


<!-- //Add Category Form -->
    <div class="col-md-6">

    <!-- //calling the add category function -->
        <?php insert_categories(); ?>

        <form action="" method="post">
        <div class="form-group">
            <label for="cat_title"><b>Add Category</b></label>
            <input type="text" class="form-control" name="cat_title">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
        </div>

        </form>
        
        <?php 
        // UPDATE QUERY AND INCLUDE QUERY

        if(isset($_GET['edit'])) {

            $cat_id  = $_GET['edit'];

            include "includes/update_categories.php";

        }
        
        
        
        ?>
        



        </div>
<!-- //Category End -->


    <div class="col-md-6">

        <?php

        ?>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Tiltle</th>
                </tr>
            </thead>
            <tbody>

            <?php //FIND ALL CATEGORIES QUERY
            findAllcategories()
            ?>

            <?php //DELETE QUERY
            deleteCategories()
            
            ?>
            
            </tbody>
        </table>


    </div>



      </div>
      <!-- /.container-fluid -->

<?php include "includes/admin_footer.php";?>