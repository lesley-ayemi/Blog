<!-- //Header -->
<?php include "includes/admin_header.php"; ?>

<!-- //Navigation -->
<?php include "includes/admin_navigation.php"; ?>

  
<!-- //wrapper div -->
  <div id="wrapper">

<?php include "includes/admin_sidebar.php"; ?>

    <div id="content-wrapper">

       <div class="container-fluid">

       <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Welcome Admin</a>
          </li>
          <li class="breadcrumb-item active">Author</li>
        </ol>

        <?php
        
        if(isset($_GET['source'])){
            $source = $_GET['source'];
        } else{
            $source = '';
        }

        switch($source){

            case 'add_post';
            include "includes/add_post.php";
            break;

            case 'edit_post';
            include "includes/edit_post.php";
            break;

            case '200';
            echo 'NICE 200';
            break;

            default:
            //code here
            include "includes/view_all_post.php";

            break;

        }
        
        
        
        ?>


 </div>
      <!-- /.container-fluid -->

<?php include "includes/admin_footer.php";?>