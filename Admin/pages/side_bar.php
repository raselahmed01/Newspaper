<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
              <i class="icon_house_alt"></i>
                <span>Dashboard</span>
            </a>
          </li>

          <li >
            <a class="" href="profile.php?user_id=<?php echo $user_obj->getUserId();?>">
              <i class='fa fa-user'></i>
                <span>Profile</span>
            </a>
          </li>

          <?php 
            $role=$user_obj->getUserRole();
            if($role==="Admin"):
          ?>
          <li>
            <a  href='addcategory.php'>
              <i class='fa fa-suitcase'></i>
                <span>Add Category</span>
            </a>
          </li>
        <?php endif;?>
           <li >
            <a class="" href="category.php">
              <i class='fa fa-folder'></i>
                <span>Category</span>
            </a>
          </li>

          <li >
            <a class="" href="add_news.php">
              
                <span>Add News</span>
            </a>
          </li>
          
          
          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>