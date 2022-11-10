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
              <li></i>Category</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-12">
            <div class="table-responsive">
              <table class="table table-hover table-stripped table-border table-success">
                <thead>
                  <tr>
                    <th>Category Id</th>
                    <th>Category Title</th>

                    <?php 

                      $role=$user_obj->getUserRole();

                      if ($role==='Admin') {

                        echo "<th>Action</th>";
                      }
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php 

                      $category=$cat_obj->getAdminCategory();
                    ?>
                    
                  </tr>
                  
                </tbody>
              </table>
            </div>
              
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
