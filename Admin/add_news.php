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
              <li></i>Add News</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-12">
            <form class="form-horizontal " action="" autocomplete="false" method="POST">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-8">
                      <input type="text" name="title" placeholder="News Title" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-8">
                      
                      <textarea name="n_content" class="form-control" placeholder="News Content"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="n_category">
                        <option>Category 1</option>
                        <option>Category 1</option>
                        <option>Category 1</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="n_status">
                        <option>Published</option>
                        <option>Draft</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Types</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="n_type">
                        <option>Breaking News</option>
                        <option>Casual News</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">News Image</label>
                    <div class="col-sm-8">
                      <input type="text" name="n_tag" class="form-control" placeholder="News Tags(Separated By Comma) ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">News Image</label>
                    <div class="col-sm-8">
                      <input type="file" name="n_image" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-8">
                      <input type="submit" name="save" value="Add News" class="btn btn-primary">
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
