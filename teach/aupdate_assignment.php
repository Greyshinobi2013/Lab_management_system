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
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Assessment form</li>
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
                         <h3 class="card-title">Update assessment page </h3>
                         <a href="Add_Assignement.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row  justify-content-center">
                                <div class="col-md-6">
                                <form action="code.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="modal-body">

                                          <?php
                                            $id = $_REQUEST['id'];
                                            $sql = "SELECT * FROM assesment WHERE AS_id = '$id'";
                                            $res = mysqli_query($conn,$sql);
                                             while($row = mysqli_fetch_array($res))
                                            {
                                         ?>
                                         <div class="form-group">

                                    <label for="">Course Name</label>
                                        <input type = "text" name="course_name" value="<?php echo  $row['course_name']?> "class ="form-control" >
                                        </div>
                                    
                                         <div class="form-group">

                                    <label for="">Specialization</label>
                                        <input type = "text" name="specialization" value="<?php echo  $row['specialization']?> "class ="form-control" >
                                        </div>
                                    
                                         <div class="form-group">

                                    <label for="">Group</label>
                                        <input type = "text" name="sgroup" value="<?php echo  $row['sgroup']?> "class ="form-control" >
                                        </div>
                                         <div class="form-group">

                                    <label for="">Year</label>
                                        <input type = "text" name="B_year" value="<?php echo  $row['B_year']?> "class ="form-control" >
                                        </div>
                                    
                                    <label for="">Academic Session</label>
                                        <input type = "text" name="B_session" value="<?php echo  $row['B_session']?> "class ="form-control" >
                                        </div>
                                    
                                        <div class="form-group">
                                    <label for="">Assesment_name</label>
                                        <input type = "text" name="assesment_name" value="<?php echo  $row['assesment_name']?> "class ="form-control" >
                                        </div>
                                        <div class="form-group">
                                    <label for="">Teacher Name</label>
                                        <input type = "text" name="teacher_name" value="<?php echo  $row['teacher_name']?> "class ="form-control" >
                                        </div>
                                        <div class="form-group">
                                    <label for="">Submission LastDate</label>
                                        <input type = "text" name="duDate" value="<?php echo  $row['duDate']?> "class ="form-control" >
                                        </div>
                                        <div class="form-group">
                                    <label for="">late Submission LastDate</label>
                                        <input type = "text" name="lastSubDate" value="<?php echo  $row['lastSubDate']?> "class ="form-control" >
                                        </div>
                                    
                                        
                                  
                                      
                               

       <?php
    }
  ?>   
    <button class="btn btn-danger" type="reset">Reset</button>
<button type="submit"name="Update" class="btn btn-success">Update</button>
<input type="hidden" name ="id"value = "<?= $id;?> "/>
</div>

</div>



                             
                                      <!-- <div class="modal-footer">
                                      <button class="btn btn-primary" type="reset">Reset</button><br><br>
                                        <button type="submit"name="add" class="btn btn-primary">insert</button>
                                    </div> -->
                                    </center>
                                    <!-- </div>
                       </div> -->
        

                                        
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

      

<?php include('include/footer.php');?>
