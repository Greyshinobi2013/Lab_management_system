<?php 
include('authentication.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');
include('DB/conf.php');


?>   
  <?php 

  if(isset($_SESSION['status']))
{
    echo $_SESSION['status'];
    unset( $_SESSION['status']);
}
  ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $cd = mysqli_query($conn,"SELECT * FROM assesment" );
                $cd = mysqli_num_rows($cd);
                ?>
               <h3 class="badge badge-info"><?php echo  $cd; ?></h3>

                <p>All assessment</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="Add_Assignement.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $cod = mysqli_query($conn,"SELECT * FROM notice" );
                $cod = mysqli_num_rows($cod);
                ?>
               <h3 class="badge badge-danger"><?php echo  $cod; ?></h3>

                <p>All notice</p>
              </div>
              <div class="icon">
                <i class="fa fa-pen"></i>
              </div>
              <a href="../admin/notice.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                $dc = mysqli_query($conn,"SELECT * FROM assignment" );
                $dc = mysqli_num_rows($dc);
                ?>
               <h3 class="badge badge-info"><?php echo  $dc; ?></h3>

                <p>Submited Assignment</p>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
              <a href="submitedAssignment.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $dev = mysqli_query($conn,"SELECT * FROM stdevice" );
                $dev = mysqli_num_rows($dev);
                ?>
               <h3 class="badge badge-info"><?php echo  $dev; ?></h3>

                <p>All registered device</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="lab_device.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div><!-- /.container-fluid -->
    </section>
    </div>
<?Php
include('include/footer.php');?>