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

			$cat_id=$row['id'];
			$cat_title=$row['cat_title'];

			if($role==='Admin'){

			$str.="<tr>".
					"<td>{$cat_id}</td>".
					"<td>{$cat_title}</td>".
					"<td><a href='edit_category.php?c_id={$cat_id}' class='btn btn-primary btn-sm'>Edit<a>".
					"<td><a href='category.php?c_id={$cat_id}' class='btn btn-danger btn-sm'>Delete<a>".
					"</tr>";
			}else{
				$str.="<tr>".
					"<td>{$cat_id}</td>".
					"<td>{$cat_title}</td>".
					"</tr>";
			}

			
		}
		
		echo $str;

	}

	public function updateCategory($id,$cat_title){

		$query=mysqli_query($this->conn,"UPDATE category SET cat_title='$cat_title' WHERE id='$id'");

		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function deleteCategory($cat_id){

		$query=mysqli_query($this->conn,"DELETE FROM category WHERE id='$cat_id'");

		if($query){
			return true;
		}else{
			return false;
		}
	}


	public function getAllCategory(){

		$query=mysqli_query($this->conn,"SELECT * FROM category ORDER BY cat_title ASC");
		$str="";
		while($row=mysqli_fetch_array($query)){

			$c_id=$row['id'];
			$c_title=$row['cat_title'];

			$str.="<li><a href='category.php?c_id={$c_id}'>$c_title</a></li>";
		}

		echo $str;
	}






}


?>