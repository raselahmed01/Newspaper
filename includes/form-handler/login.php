<?php 
session_start();
$mysql=new mysqli("localhost","root","","newspaper") or die(mysqli_error($mysql));

if(isset($_POST['login'])){

	 $email=$_POST['email'];
	 $pwd=$_POST['pwd'];
	 $rehashpwd=md5($pwd);

	$query=mysqli_query($mysql,"SELECT * FROM users WHERE email='$email'");

	$row=mysqli_fetch_array($query);

	 $db_email=$row['email'];
	 $db_username=$row['username'];
	 $db_pwd=$row['password'];

	
	

	if($db_email===$email && $db_pwd===$rehashpwd ){

		$_SESSION['admin_user']=$db_username;

		header("Location:../../Admin?message=Logged_in_succesfully");
	}else{

		$_SESSION['email']=$email;
		header("Location:../../nw-admin.php?message=Invalid_email_or_password");
	}


}





?>