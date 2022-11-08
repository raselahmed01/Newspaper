<?php 


Class User{


	private $connection;
	private $user;

	public function __construct($connection,$user){

		$this->connection=$connection;

		$sql=mysqli_query($connection,"SELECT * FROM users WHERE username='$user'");

		return $this->user=mysqli_fetch_array($sql);
	}

	public function getUserName(){

		$username=$this->user['username'];

		return $username;
	}

	public function getUserpic(){

		$username=$this->user['username'];

		$sql=mysqli_query($this->connection,"SELECT profile_pic FROM users WHERE username='$username'");

		$row=mysqli_fetch_array($sql);

		return $row['profile_pic'];
	}

	public function getUserId(){

		$username=$this->user['username'];

		$sql=mysqli_query($this->connection,"SELECT id FROM users WHERE username='$username'");

		$row=mysqli_fetch_array($sql);

		return $row['id'];
	}

	public function getUserRole(){

		$username=$this->user['username'];

		$sql=mysqli_query($this->connection,"SELECT role FROM users WHERE username='$username'");

		$row=mysqli_fetch_array($sql);

		return $row['role'];
	}
}

?>