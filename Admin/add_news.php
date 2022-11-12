<?php include 'pages/header.php'; ?>
  <!-- container section start -->
  <section id="container" class="">

    <!--header end-->
<?php include 'pages/top_nav.php'; ?>
    <!--sidebar start-->
<?php include 'pages/side_bar.php'; ?>
    <!--sidebar end-->
<?php

  $role = $user_obj->getUserRole();
  
?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <!-- <h3 class="page-header"><i class="fa fa-category"></i> Dashboard</h3> -->
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li></i>Add News</li>
            </ol>
          </div>
        </div>
        <div class="row">

            <?php 

              if(isset($_POST['save'])&& $_FILES['n_image']!==""){

                $imgname=$_FILES['n_image']['name'];
                $imgtmpname=$_FILES['n_image']['tmp_name'];
                $imgsize=$_FILES['n_image']['size'];
                $imgext=explode('.', $imgname);
                $imgactext=strtolower(end($imgext));
                $allowed=array('jpef','jpg','gif','png');

                if(!in_array($imgactext, $allowed)){

                    header('Location: add_news.php?message= File_type_not_allowed');

                }else{
                  if($imgsize > 10000000){

                    header('Location: add_news.php?message= File_is_too_large');
                     }else{

                      $imgnewname=uniqid('',true). '.' .$imgactext;
                      $dir="news_images/";

                      $targetfile=$dir . basename($imgnewname);

                      move_uploaded_file($imgtmpname, $targetfile);

                      $news_obj->addNews($_POST['title'],$_POST['n_content'],$_POST['n_category'],$_POST['n_status'],$_POST['n_type'],$_POST['n_tag'],$targetfile);

                      echo "<script> alert('News Added Succesfully ');</script>";




                     }
                }

                  
              }


            ?>
          <div class="col-lg-9 col-md-12">
            <form class="form-horizontal " action="" autocomplete="false" method="POST" enctype="multipart/form-data" >
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Title</label>
                    
                    <div class="col-sm-8">
                      <input type="text" id="title" name="title" placeholder="News Title" class="form-control">
                    </div>Left
                    <span class="input-group" id="left">70 </span>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-8">
                      
                      <textarea name="n_content" class="form-control" placeholder="News Content"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="n_category">
                        <option> Select Category</option>
                      
                      <?php 
                        $query=mysqli_query($conn,"SELECT DISTINCT * FROM category ORDER BY cat_title ASC");
                        while($row=mysqli_fetch_array($query)){
                          $cat_title=$row['cat_title'];
                          echo "<option value='{$cat_title}'> $cat_title</option>";
                        }
                      ?>
                      </select>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="n_status">
                        <option value="Published">Published</option>
                        <option value="Draft">Draft</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Types</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="n_type">
                        <option value="Breaking News">Breaking News</option>
                        <option value="Casual News">Casual News</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">News Tags</label>
                    <div class="col-sm-8">
                      <input type="text" name="n_tag" class="form-control" placeholder="News Tags(Separated By Comma) ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">News Image</label>
                    <div class="col-sm-8">
                      <input type="file" name="n_image" class="form-control" onchange="readURL(this)">
                      <img src="#" alt="Uploaded image to be displayed here" height="150px"width="200px" id="n_img">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-8">
                      <input type="submit" name="save" value="Add News" class="btn btn-primary">
                    </div>
                  </div>
            </form>

          </div>
          <!--/col-->
          
            <!--/social-box-->

          </div>
          <!--/col-->

      



        <!-- statics end -->




        <!-- project team & activity start -->
        <br><br>

        
        <!-- project team & activity end -->

      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->
<script >

  var title=document.querySelector("#title");
  var max=70;
  title.addEventListener('keyup',function(){

    var left=document.getElementById('left');

    if(title.value.length > max){
      title.value=title.value.substring(0,max);
      title.style.border="2px solid red";
    }else{
      left.textContent=max -title.value.length;
      title.style.border="2px solid green";

    }

  });

  function readURL(input){
    if(input.files && input.files[0]){
    let reader=new FileReader();

    reader.onload=function(e){

      $("#n_img").attr('src',e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

</script>
  <!-- javascripts -->
  <?php include 'pages/footer.php'; ?>
