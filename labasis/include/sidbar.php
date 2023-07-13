 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-Charcoal-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/SOLOMON.jpg" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-gray">CSE project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/profile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">lab Asis user name</a>
          <?php 
        if(isset($_SESSION['auth'])){
          echo  $_SESSION['auth_user']['user_name'];

        }
        else
        {
          echo "not logged in";

        }
        ?>
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lab_device.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>all device </p>
                </a>
              </li>
            
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
              lab  Information
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="request2.php" class="nav-link">
                  <i class="fa fa-graduation-cap"></i>
                  <p>student Request Info</p>
                </a>
              </li>
           
              <li class="nav-item">
              <a href="teacher_Request.php" class="nav-link ">
                  <i class="fa fa-tags"></i>
                  <p>Teacher Request Info</p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="issue_info.php" class="nav-link">
                  <i class="fa fa-window-restore"></i>
                  <p>St borrowed device information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Teacher_issue.php" class="nav-link">
                  <i class="fa fa-universal-access"></i>
                  <p>Te borrowed device information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Expiered.php" class="nav-link">
                  <i class="fa fa-street-view"></i>
                  <p>Student Device Expiered info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="teachers_Ex.php" class="nav-link">
                  <i class="fa fa-rss-square"></i>
                  <p>Teacher device Expiered info</p>
                </a>
              </li>
             
            </ul>
          </li>

         
        
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>