<?php include 'pages/header.php'; ?>
  <!-- container section start -->
  <section id="container" class="">

    <!--header end-->
<?php include 'pages/top_nav.php'; ?>
    <!--sidebar start-->
<?php include 'pages/side_bar.php'; ?>
    <!--sidebar end-->
<?php

  $role = $user_obj->getUserRole();

  if(isset($_GET['c_id']) && $_GET['c_id']!=="" && $role==="Admin"){

    $cat_id=$_GET['c_id'];
    $query=mysqli_query($conn,"SELECT * FROM category WHERE id='$cat_id'");

    $row=mysqli_fetch_array($query);

    if (isset($_POST['c_update'])) {
    $cat_title=$_POST['cat_title'];

    $cat_obj->updateCategory($cat_id,$cat_title);

    header("Location: category.php?message=Category_Updated");
  }
}else{
  header("Location: category.php");
}


    


  
?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <!-- <h3 class="page-header"><i class="fa fa-category"></i> Dashboard</h3> -->
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li></i>Update Category</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-12">
            <form class="form-horizontal " action="" autocomplete="false" method="POST">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                      <input type="text" name="cat_title" value="<?php echo $row['cat_title'];?>"class="form-control">
                      <br>
                      <input type="submit" name="c_update" value="Update" class="btn btn-primary">
                    </div>
                  </div>
            </form>

          </div>
          <!--/col-->
          
            <!--/social-box-->

          </div>
          <!--/col-->

      



        <!-- statics end -->




        <!-- project team & activity start -->
        <br><br>

        
        <!-- project team & activity end -->

      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <?php include 'pages/footer.php'; ?>
