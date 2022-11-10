<?php include 'pages/header.php'; ?>
  <!-- container section start -->
  <section id="container" class="">

    <!--header end-->
<?php include 'pages/top_nav.php'; ?>
    <!--sidebar start-->
<?php include 'pages/side_bar.php'; ?>
    <!--sidebar end-->
<?php 

  if(isset($_GET['user_id'])){

    $user_id=$_GET['user_id'];
    $query=mysqli_query($conn,"SELECT * FROM users WHERE id='$user_id'");

    while ($row=mysqli_fetch_array($query)) {
      $id=$row['id'];
      $username=$row['username'];
      $first_name=$row['first_name'];
      $last_name=$row['last_name'];
      $email=$row['email'];
      $role=$row['role'];
      $password=$row['password'];
      $num_posts=$row['num_posts'];

    }
  }

  

?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                   <h4><?php echo $user_obj->getUserName();?></h4>
                  <div class="follow-ava">
                    <img src="<?php echo $user_obj->getUserpic();?>" alt="">
                  </div>

                  <form method="POST" action="profile_edit.php?user_id=<?php echo $id;?>" enctype="multipart/form-data">
                    <input type="file" name="pro_pic">
                    <input type="submit" name="upload" class="btn btn-primary btn-sm" value="Upload">
                  </form>
                  <br><br>
                  <h6><?php echo $user_obj->getUserRole(); ?></h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  
                  <li class="active">
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                 <!-- profile -->
                  <div id="profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>Name </span>: <?php echo $username;?> </p>
                            <p><span>First Name </span>: <?php echo $first_name;?> </p>
                            <p><span>Last Name </span>: <?php echo $last_name;?> </p>
                            <p><span>Email </span>: <?php echo $email;?> </p>
                            <p><span>Role </span>: <?php echo $role;?> </p>
                            <p><span>Number of Posts </span>: <?php echo $num_posts;?> </p>
                          </div>
                          
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <?php 

                          $username=$user_obj->getUserName();

                          if($user===$username):

                        ?>
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>


                        <form class="form-horizontal" role="form" method="POST" action="profile_edit.php?user_id=<?php echo $id; ?>">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                              <input type="text" name="firstname" value="<?php echo $first_name;?>" class="form-control" id="f-name" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                              <input type="text" name="lastname" value="<?php echo $last_name;?>" class="form-control" id="l-name" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="email" name="email" value="<?php echo $email;?>" class="form-control" id="c-name" placeholder=" ">
                            </div>

                            
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                              <input type="password" name="pwd"  class="form-control" id="occupation" placeholder=" ">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" name="updatedata" class="btn btn-primary">Update</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  <?php endif;?>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
