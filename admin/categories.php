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

        <?php
        if(isset($_POST['submit'])) {
           $cat_title = $_POST['cat_title'];

           if($cat_title == "" || empty($cat_title)) {
               echo "This field should not be empty";

           } else {
               $query = "INSERT INTO categories(cat_title) ";
               $query .= "VALUE('$cat_title') ";

               $create_category_query = mysqli_query($connection, $query);

               if(!$create_category_query) {
                   die('QUERY FAILED' . mysqli_error($connection));
               }
           }
        }

        ?>

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

        if(isset($_GET['edit'])) {

            $cat_id  = $_GET['edit'];

            include "includes/update_categories.php";

        }
        
        
        
        ?>
        



        <?php
     // Including update_categories.php file here
            // if(isset($_GET['edit']))
            //     {
            //         $cat_id = $_GET['edit'];

            //         include("includes/update_categories.php");
            //     }

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
            
        $query = "SELECT * FROM categories";
        // mysqli_query($query, "SELECT * FROM categories")
             $select_categories = mysqli_query($connection,$query);
        
            
            while($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                
                echo "<tr>";
                echo "<td>{$cat_id}</td>";
                echo "<td>{$cat_title}</td>";
                echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                echo "</tr>";
             }
            
            ?>

            <?php //DELETE QUERY
            
            if(isset($_GET['delete'])){

                $the_cat_id = $_GET['delete'];

            $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";

                $delete_query = mysqli_query($connection,$query);
                header("Location: categories.php");

            }
            
            
            ?>
            
            </tbody>
        </table>


    </div>



      </div>
      <!-- /.container-fluid -->

<?php include "includes/admin_footer.php";?>