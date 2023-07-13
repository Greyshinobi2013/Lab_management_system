<?php 
include('authentication.php');
include('include/header.php');
include('DB/conf.php');
include('include/topnav.php');
include('include/sidbar.php');


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
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
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
            
            </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                $stock7 = mysqli_query($conn,"SELECT * FROM assignment" );
                $stock7 = mysqli_num_rows($stock7);
                ?>
                 <h3 class="badge badge-danger"><?php echo  $stock7; ?></h3>

                <p>new assegnment</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="new_assignment.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $stock = mysqli_query($conn,"SELECT * FROM stdevice" );
                $stock = mysqli_num_rows($stock);
                ?>
                <h3 class="badge badge-danger"><?php echo  $stock; ?></h3>

                <p>all reistered device</p>
              </div>
              <div class="icon">
                <i class="fa fa-desktop"></i>
              </div>
              <a href="lab_device.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $cod = mysqli_query($conn,"SELECT * FROM issue_device" );
                $cod = mysqli_num_rows($cod);
                ?>
               <h3 class="badge badge-info"><?php echo  $cod; ?></h3>

                <p>Requests</p>
              </div>
              <div class="icon">
                <i class="fa fa-question mark"></i>
              </div>
              <a href="request.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
        </div>
        </div><!-- /.container-fluid -->
    </section>
    </div>
<?Php
include('include/footer.php');?>