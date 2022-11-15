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
				$date=date('Y-m-d   H:i:s');

				$query=mysqli_query($this->connection,"INSERT INTO news VALUES('','$title','$content','$added_by','$category','$cat_id','$image','$tag','$status','$type','0','0','0','$date')");


			}


		}


		public function getBreakingNews(){

			$query=mysqli_query($this->connection,"SELECT * FROM news WHERE type='Breaking News' ORDER BY rand()");

			$str="";

			while($row=mysqli_fetch_array($query)){

				$n_cat_id=	$row['id'];
				$n_title=	$row['title'];
				$n_content=	$row['content'];

				if (strlen($n_content)>250) {
					$n_content=substr($n_content, 0,250)." ....";
				}

				$added_by=	$row['aded_by'];
				$n_cat_id=	$row['n_cat_id'];
				$n_cat=		$row['n_category'];
				$n_img	=	$row['n_image'];
				$n_like	=	$row['num_likes'];
				$n_comment=	$row['num_comment'];
				$n_view	=	$row['num_views'];
				$added_date=$row['added_date'];

				$date_time_now=date('Y-m-d H:i:s');
				$startcount=new DateTime($added_date);
				$endcount=new DateTime($date_time_now);
				$interval=$startcount->diff($endcount);

				if($interval->h <=40 && $interval->d <=1){

					$rand=rand(5,7);

					$str .= "<div class='col-12 col-lg-$rand'>
                            <div class='single-blog-post featured-post'>
                                <div class='post-thumb'>
                                    <a href='#'><img src='Admin/{$n_img}'></a>
                                </div>
                                <div class='post-data'>
                                    <a href='#' class='post-catagory'>{$n_cat}</a>
                                    <a href='#' class='post-title'>
                                        <h6>{$n_title}</h6>
                                    </a>
                                    <div class='post-meta'>
                                        <p class='post-author'>By <a href='#'>{$added_by}</a></p>
                                        <p class='post-excerp'>{$n_content}</p>
                                        
                                        <div class='d-flex align-items-center'>
                                            <a href='#' class='post-like'><img src='img/core-img/like.png' > <span>{$n_like}</span></a>
                                            <a href='#' class='post-comment'><img src='img/core-img/chat.png' > <span>{$n_comment}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
				}
			}

			echo $str;
		}



	public function getFeatureNews(){

		$query=mysqli_query($this->connection,"SELECT * FROM news ORDER BY rand() LIMIT 5");

		$str="";
		while ($row=mysqli_fetch_array($query)){

			$n_cat_id=	$row['id'];
			$n_title=	substr($row['title'],0). "..";
			$n_cat=		$row['n_category'];
			$n_img	=	$row['n_image'];

			$added_date=strtotime($row['added_date']);

			$custom_time=date('h : s A',$added_date);
			$custom_date=date('M  d',$added_date);

			$str.="<div class='single-blog-post small-featured-post d-flex'>
				        <div class='post-thumb'>
				            <a href='#'><img src='Admin/{$n_img}' ></a>
				        </div>
				        <div class='post-data'>
				            <a href='#'class='post-catagory'>{$n_cat}</a>
				            <div class='post-meta'>
				                <a href='#' class='post-title'>
				                    <h6>{$n_title}</h6>
				                </a>
				                <p class='post-date'><span>{$custom_time}</span> | <span>{$custom_date}</span></p>
				            </div>
				        </div>
				    </div>";
		}

		echo $str;
	}







}//End of News Class


?>