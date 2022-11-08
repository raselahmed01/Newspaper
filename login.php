<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page </title>

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


</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="includes/form-handler/login.php" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="email" value="
          <?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>"placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="pwd" placeholder="Password">
        </div>
       
        <input name="login" class="btn btn-primary btn-lg btn-block" type="submit" value="Login">
        
      </div>
    </form>
    
  </div>


</body>

</html>
