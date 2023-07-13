
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-black navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="index3.html" role="button"><i style="font-size:24px" class="fa">&#xf0c9;</i>
</a>
        

      </li>
      <li class="nav-item d-none d-sm-inline-block ">
      <h3 style ="color:#0B3861; font-family:Elephant;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSE Department Laboratory and Assessment Managment System</h3>				

        <a href="index.php" class="nav-link">Dashboard</a>
      </li>
    
    </ul>
    
  
    <li class="nav-item d-none d-sm-inline-block ">
     
    </li>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
    <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
        <?php 
        if(isset($_SESSION['auth'])){
          echo  $_SESSION['auth_user']['user_name'];

        }
        else
        {?>
          <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-success btn-sm float-right">redister here</a>
<?php
          echo "not logged in";

        }
        ?>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="change_pass.php">change password</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <form action="code.php" method ="POST">
          <button type = "submit" name="log_out" href="code.php"class="dropdown-item">logout</button>
          </ul>
          </form>
        </div>
        </li>
      <li class="nav-item ">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="" role="button">
          <!-- <i class="fas fa-th-large"></i> -->
        </a>
      </li>
    </ul>
  </nav>