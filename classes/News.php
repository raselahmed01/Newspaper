<?php 

	class News{


		private $connection;
		private $user_obj;

		public function __construct($conn,$user){

			$this->connection=$conn;

			$this->user_obj =new User($conn,$user);
		}

		public function addNews($title,$content,$category,$status,$type,$tag,$image){

			if(!empty($title) && !empty($content)){

				$title=strtoupper($title);
				$title=mysqli_real_escape_string($this->connection,$title);
				$content=nl2br($content);
				$content=mysqli_real_escape_string($this->connection,$content);
				$added_by= $this->user_obj->getUserName();

				$sql=mysqli_query($this->connection,"SELECT id FROM category WHERE cat_title='$category'");
				$row=mysqli_fetch_array($sql);
				$cat_id=$row['id'];

				$query=mysqli_query($this->connection,"INSERT INTO news VALUES('','$title','$content','$added_by','$category','$cat_id','$image','$tag','$status','$type','0','0','0')");


			}


		}

	}


?>