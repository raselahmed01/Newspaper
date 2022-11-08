<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Register User </title>

  <!-- Bootstrap CSS -->
  <link href="Admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="Admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="Admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="Admin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="Admin/css/style.css" rel="stylesheet">
  <link href="Admin/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="includes/form-handler/register.php" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <label >First Name</label><br>
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="firstname" class="form-control" placeholder="First Name" autofocus>
        </div>
        <div class="input-group">
          <label>Last Name</label><br>
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="lastname" class="form-control" placeholder="Last Name" autofocus>
        </div>
        <div class="input-group">
          <label>Email</label><br>
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" name="email" class="form-control" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <label>Password</label><br>
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="password" name="pwd" class="form-control" placeholder="Password" autofocus>
        </div>
        
        
        
        <input type="submit"  class="btn btn-primary btn-lg btn-block" name="register" value="Register">
        
      </div>
    </form>
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
  </div>


</body>

</html>
