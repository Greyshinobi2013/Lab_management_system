<?php 
include('authentication.php');
include('DB/conf.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');
?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Device Update page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">device Update pages</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <!-- /.content-header -->
<section class ="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                              <?php 
                            if(isset($_SESSION['status'])){

                    echo "<h4>".$_SESSION['status']. "</h4>";
                    unset($_SESSION['status']);
                    }

                    ?>
          
                   <div class="card">
                       <div class="card-header">
                         <h3 class="card-title">update device  </h3>
                         <a href="lab_device.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="code.php"method="POST">
                                    <div class="modal-body">
                            <div class="form-group">
                                <?php

                                       $id = $_REQUEST['id'];
                                       $sql = "SELECT * FROM stdevice WHERE Did = '$id'";
                                       $res = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($res))
                                       {
                                          ?>
                                            <input type="hidden" name ="dev_name"value = "<?php echo  $row['dev_name']?> ">
                                             <div class="form-group">
                                            <label for="">quantity</label>
                                        <input type = "text" name="quantity" value="<?php echo  $row['quantity']?> "class ="form-control" >
                                        </div>

                                        <div class="form-group">
                                                <label for="">Device status:</label>
                                            
                                                <select class="form-control" name="status">
                                                <option value="select">select device status</option>
                                                    <option value="avalible">avalible</option>
                                                    <option value="repairable">repairable</option>
                                                    <option value="Unrepairable">Unrepairable</option>

                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="">Device type:</label>
                                            
                                                <select class="form-control" name="dev_type">
                                                <option value="select">select device type</option>
                                                        <option value="new">brand new</option>
                                                        <option value="old">get old</option>
                                                        <option value="damaged">damaged</option>

                                                </select>

                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="">date of entry</label>
                                                <input type = "datetime-local" name="time" value="<?php echo $row['time']?> " class ="form-control" placeholder ="user type">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Location</label>
                                            <input type = "text" name="labn" value="<?php echo  $row['labn']?> "class ="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">lab Asistant Name</label>
                                            <input type = "text" name="Lab_asis_name" value="<?php echo  $row['Lab_asis_name']?> "class ="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">device description</label>
                                            <input type = "text" name="dev_desc" value="<?php echo  $row['dev_desc']?> "class ="form-control" >
                                            </div>
                                            
                                            
                                            <?php
                                        }

                                      
                              
                         
                          
                                ?>
                                
                                           
                                    <div class="modal-footer">
                                     
                                        <button type="submit"name="update_device" class="btn btn-success">update</button>
                                        <input type="hidden" name ="id"value = "<?= $id;?> "/>
                                    </div>
                            </form>


                                        
                                   
                                </div>
                            </div>
                        </div>

                    </div>
                 </div>
             </div>
         </div>
   
</section>
          

                      

</div>

      
<?php include('include/script.php');?>
<?php include('include/footer.php');?>


