<?php 
include '../config/config.php';

if(isset($_POST['updatedata'])){

	 $id=$_GET['user_id'];

	 $f_name=$_POST['firstname'];
   	 $l_name=$_POST['lastname'];
   	 $email=$_POST['email'];
   	 
   	 
   	 $username=$f_name . " " .$l_name;

   	 $password=trim(md5($_POST['pwd']));

	$sql=mysqli_query($conn,"UPDATE users SET username='$username',first_name='$f_name',last_name='$l_name',email='$email', WHERE id='$id'");
	$_SESSION['admin_user']=$username;
	header("Location: profile.php?user_id=$id");
}

if (isset($_POST['upload']) && isset($_FILES['pro_pic'])) {

	 $id=$_GET['user_id'];

	 $dir="../assets/images/profile_pics/default/";
	 $name=$_FILES['pro_pic']['name'] ;

	
     
     $tmp_name=$_FILES['pro_pic']['tmp_name'];

     $target=$dir.$name;
     $type=$_FILES['pro_pic']['type'];

    if($type === "image/jpeg" || $type === "image/png"){
    	

    	move_uploaded_file($tmp_name, $target);
    	mysqli_query($conn,"UPDATE users SET profile_pic='$target' WHERE id='$id'");
    	header("Location: profile.php?user_id=$id ");
    }
    else{

		header("Location: profile.php?user_id=$id & message=File_Type_Is_NOt_Allowed");
    }
    
}



?>