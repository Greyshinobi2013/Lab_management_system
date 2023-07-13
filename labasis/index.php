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
            <?php  include('message.php');?>
            
            </div>
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gray">
              <div class="inner">
              <?php
                $cd = mysqli_query($conn,"SELECT * FROM stdevice" );
                $cd = mysqli_num_rows($cd);
                ?>
               <h3 class="badge badge-danger"><?php echo  $cd; ?></h3>

                <p>device information</p>
              </div>
              <div class="icon">
                <i class="fa fa-desktop"></i>
              </div>
              <a href="lab_device.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
               $ot="SELECT admin.rol_as,issue_device.name,email,stdevice.Did,dev_name,dev_brand,issue,dev_return FROM admin 
                INNER JOIN issue_device ON admin.rol_as = issue_device.rol_as
                 INNER JOIN stdevice ON issue_device.Did=stdevice.Did WHERE issue_device.approve ='yes' 
                 ORDER BY `issue_device`.`dev_return` ASC";
                 $res=mysqli_query($conn,$ot);
                 $t = mysqli_num_rows($res);
                           
                       
                ?>
               <h3 class="badge badge-info"><?php echo  $t; ?></h3>

                <p>issue device information</p>
              </div>
              <div class="icon">
                <i class="fa fa-copy"></i>
              </div>
              <a href="issue_info.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $ot="SELECT admin.rol_as,teachers.user,fname,lname,type,qualification,issue_device.name,stdevice.Did,dev_name,dev_brand,stdevice.status,labn FROM admin 
                INNER JOIN issue_device ON admin.rol_as = issue_device.rol_as
                 INNER JOIN stdevice ON issue_device.Did=stdevice.Did INNER JOIN teachers ON admin.id=teachers.user WHERE issue_device.approve =''";
                            $res=mysqli_query($conn,$ot);
                            $ot="SELECT admin.rol_as,usera.user,B_year,specialization,issue_device.name,stdevice.Did,dev_name,dev_brand,status,labn FROM admin 
                            INNER JOIN issue_device ON admin.rol_as = issue_device.rol_as
                             INNER JOIN stdevice ON issue_device.Did=stdevice.Did INNER JOIN usera ON admin.id=usera.user WHERE issue_device.approve =''";
                                        $res=mysqli_query($conn,$ot);
                           
                $d = mysqli_num_rows($res);
                ?>
               <h3 class="badge badge-gray"><?php echo  $d; ?></h3>

                <p>Teacher Request info</p>
              </div>
              <div class="icon">
                <i class="fa fa-table"></i>
              </div>
              <a href="teacher_Request.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
              
                            $yesa="SELECT admin.rol_as,usera.user,B_year,specialization,issue_device.name,stdevice.Did,dev_name,dev_brand,status,labn FROM admin 
                            INNER JOIN issue_device ON admin.rol_as = issue_device.rol_as
                             INNER JOIN stdevice ON issue_device.Did=stdevice.Did INNER JOIN usera ON admin.id=usera.user WHERE issue_device.approve =''";
                                        $res=mysqli_query($conn,$yesa);
                           
                $ds = mysqli_num_rows($res);
                ?>
               <h3 class="badge badge-success"><?php echo  $ds; ?></h3>

                <p>Student Request info</p>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
              <a href="request2.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
              
                          
                        $V1='<p style="color:yellow;background-color:red;">EXPIRED</p>';
                        $ot="SELECT admin.rol_as,issue_device.name,email,stdevice.Did,dev_name,dev_brand,approve,issue,dev_return FROM admin 
                        INNER JOIN issue_device ON admin.rol_as = issue_device.rol_as
                        INNER JOIN stdevice ON issue_device.Did=stdevice.Did WHERE issue_device.approve ='$V1' 
                        ORDER BY `issue_device`.`dev_return` ASC";
                        $res=mysqli_query($conn,$ot);
                           
                $s = mysqli_num_rows($res);
                ?>
               <h3 class="badge badge-info"><?php echo  $s; ?></h3>

                <p>Device Return date Expiered info</p>
              </div>
              <div class="icon">
                <i class="fa fa-align-center"></i>
              </div>
              <a href="Expiered.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       
          <!-- ./col -->
         
          <!-- ./col -->
        </div>
        </div><!-- /.container-fluid -->
    </section>
    </div>
   
<?Php
include('include/footer.php');?>