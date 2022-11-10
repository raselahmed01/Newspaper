<?php 


class Category{

	private $conn;

	private $user_obj;

	public function __construct($conn,$user)
	{
		$this->conn=$conn;

		$this->user_obj=new User($conn,$user);
	}

	public function addCategory($category){

		if(!empty($category)){

			$query=mysqli_query($this->conn,"INSERT INTO category VALUES ('','$category')");

			($query)? True :False;
		}else{

			return False;
		}

	}

	public function getAdminCategory(){

		$query = mysqli_query($this->conn,"SELECT * FROM category ORDER BY cat_title ASC");
		$str="";
		$role=$this->user_obj->getUserRole();

		while($row=mysqli_fetch_array($query)){

			$cate_id=$row['id'];
			$cat_title=$row['cat_title'];

			if($role==='Admin'){

			$str.="<tr>".
					"<td>{$cate_id}</td>".
					"<td>{$cat_title}</td>".
					"<td><a href='#' class='btn btn-primary btn-sm'>Edit<a>".
					"<td><a href='#' class='btn btn-danger btn-sm'>Delete<a>".
					"</tr>";
			}else{
				$str.="<tr>".
					"<td>{$cate_id}</td>".
					"<td>{$cat_title}</td>".
					"</tr>";
			}

			
		}
		
		echo $str;

	}






}


?>