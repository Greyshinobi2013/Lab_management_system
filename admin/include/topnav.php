
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="index3.html" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
        <h3 style ="color:#0B3861; font-family:Elephant;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSE Department Laboratory and Assessment Managment System</h3>				
        <a href="index.php" class="nav-link">Home</a>
      </li>
    
    </ul>

    <!-- SEARCH FORM -->
    

<!-- Modal -->

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
        {
          echo "not logged in";

        }
        ?>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="change_pass.php">password change</a></li>
            <li><a class="dropdown-item" href="#">update profile</a></li>
            <form action="code.php" method ="POST">
          <button type = "submit" name="log_out" href="code.php"class="	fa fa-sign-out">logout</button>
          </ul>
          </form>
        </div>
        </li>
      <!-- <li class="nav-item ">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="" role="button">
          <i class="fas fa-th-large"></i>
        </a> -->
      </li>
    </ul>
  </nav>