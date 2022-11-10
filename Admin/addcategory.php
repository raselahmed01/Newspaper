<?php include 'pages/header.php'; ?>
  <!-- container section start -->
  <section id="container" class="">

    <!--header end-->
<?php include 'pages/top_nav.php'; ?>
    <!--sidebar start-->
<?php include 'pages/side_bar.php'; ?>
    <!--sidebar end-->
<?php 

  if(isset($_POST['save'])){

    $category=$_POST['cat_title'];

    $cat_obj->addCategory($category);
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
              <li></i>Add Category</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-12">
            <form class="form-horizontal " action="" autocomplete="false" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                      <input type="text" name="cat_title"class="form-control">
                      <br>
                      <input type="submit" name="save" value="Submit" class="btn btn-primary">
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
