<?php 
include('authentication.php');
include('include/header.php');
include('DB/conf.php');
include('include/topnav.php');
include('include/sidbar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin Home </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="icon-clock"><?php include('time.php');?><a href="#"></a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
     <!-- Main content -->
     <section class="content">

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
              <?php  include('message.php');
              // echo md5('cse5');
              
              ?>
            </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                $stock = mysqli_query($conn,"SELECT * FROM stdevice" );
                $stock = mysqli_num_rows($stock);
                ?>
                <h3 class="badge badge-danger"><?php echo  $stock; ?></h3>
                <h3>all device</h3>
              </div>
              <div class="icon">
                <i class="fa fa-desktop"></i>
              </div>
              <a href="device.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
  
          <div class="col-lg-3 col-6">
         
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $cod = mysqli_query($conn,"SELECT * FROM notice" );
                $cod = mysqli_num_rows($cod);
                ?>
               <h3 class="badge badge-info"><?php echo  $cod; ?></h3>
               <h3>All notice</h3>
              </div>
              <div class="icon">
                <i class="fa fa-pen"></i>
              </div>
              <a href="notice.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       
          <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $count1 = mysqli_query($conn,"SELECT * FROM teachers" );
                $count1 = mysqli_num_rows($count1);
                ?>
               <h3 class="badge badge-info"><?php echo  $count1; ?></h3>
               <h3>all Teachers</h3> 
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="te.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $count2 = mysqli_query($conn,"SELECT * FROM laba" );
                $count2 = mysqli_num_rows($count2);
                ?>
               <h3 class="badge badge-success"><?php echo  $count2; ?></h3>
               <h3>all lab Asistant</h3>

                </div>
              <div class="icon">
                <i class="fa fa-table"></i>
              </div>
              <a href="labe.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div><!-- /.container-fluid -->
         <!-- Main content -->
     

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
      <div class="col-md-12">
        <?php  include('message.php');?>
      </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <?php
          $stocka = mysqli_query($conn,"SELECT * FROM activity" );
          $stocka = mysqli_num_rows($stocka);
          ?>
          <h3 class="badge badge-danger"><?php echo  $stocka; ?></h3>
          <h3>Activity log</h3>

          <p></p>
        </div>
        <div class="icon">
          <i class="fa fa-eye"></i>
        </div>
        <a href="activity_log.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
        <?php
          $count = mysqli_query($conn,"SELECT * FROM usera" );
          $count = mysqli_num_rows($count);
          ?>
         <h3 class="badge badge-info"><?php echo  $count; ?></h3>
         <h3>All Students</h3>
         
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="registered.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
        <?php
          $c = mysqli_query($conn,"SELECT * FROM course" );
          $c = mysqli_num_rows($c);
          ?>
         <h3 class="badge badge-info"><?php echo  $c; ?></h3>
       
         <h3>All course</h3>

        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="insert_course.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
        <?php
          $adm = mysqli_query($conn,"SELECT * FROM admin" );
          $adm = mysqli_num_rows($adm);
          ?>
         <h3 class="badge badge-info"><?php echo  $adm; ?></h3>
        
         <h3>All Users</h3>

        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  </div><!-- /.container-fl -->
    </section>
    </div>
        
<?php include('include/script.php');?>
<?php include('include/footer.php');?>