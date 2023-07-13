 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/SOLOMON.jpg" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-black">student home page</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/profile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">user name <br>
          <?php   echo  $_SESSION['auth_user']['user_name'];
?>
</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              labratory Option
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="lab_device.php" class="nav-link">
                  <i class="fa fa-american-sign-language-interpreting"></i>
                  <p>device info</p>
                </a>
              </li>
            
              
             
              <li class="nav-item">
                <a href="request.php" class="nav-link">
                  <i class="fa fa-question"></i>
                  <p>request</p>
                </a>
              </li>
              
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Assessment Option
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="new_assignment.php" class="nav-link">
                  <i class="fa fa-download"></i>
                  <p>new Assignment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="submited_assignment.php" class="nav-link">
                  <i class="fa fa-thumbs-up"></i>
                  <p>submited assignment List</p>
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