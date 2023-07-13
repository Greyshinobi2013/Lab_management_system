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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edite-registered users</li>
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
                         <h3 class="card-title">give mark for student </h3>
                         <a href="submitedAssignment.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row  justify-content-center">
                                <div class="col-md-6">
                                <form action="code.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        
                                    <div class="form-group">
                                        <label  for="title">Specialization<span class="required"style="color:red">*</span>

                                        </label>
                                        
                                        <select class="form-control" name="specialization">
                                        
                                            
                                     <?php
                                       
                                        $qr = mysqli_query($conn,"SELECT * FROM usera");
                                        while($r=mysqli_fetch_array($qr)){
                                            ?>
                                       <option> <?php echo $r['specialization'] ?></option>
                                    

                                            <?php
                                        }?>
                                        </select>
                                        </div>
                                        
                                    <div class="form-group">
                                        <label  for="title">course Name<span class="required"style="color:red">*</span>

                                        </label>
                                        
                                        <select class="form-control" name="course_name">
                                        
                                            
                                     <?php
                                        
                                        $qr = mysqli_query($conn,"SELECT * FROM course");
                                        while($r=mysqli_fetch_array($qr)){
                                            ?>
                                       <option> <?php echo $r['course_name'] ?></option>
                                    

                                            <?php
                                        }?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                
                                      <label  for="title">student roll number<span class="required"style="color:red">*</span>

                                                </label>
                                        
                                        <select class="form-control" name="roll">
                                        
                                    
                                            <?php
                                            
                                            

                                        $qr = mysqli_query($conn,"SELECT * FROM usera");
                                        while($r=mysqli_fetch_array($qr)){
                                            ?>
                                    <option><?php echo $r['roll'] ?></option>
                                    

                                            <?php
                                        }?>
                                        </select>
                                        </div>
                               


     

        <div class="form-group">
<label  for="title">marks _%<span class="required"style="color:red">*</span>
    </label>
   
    <input type="text" class="form-control" name="marks" placeholder="enter mark from _%">
  

      </div>
      <div class="form-group">
<label  for="title">Description about marks<span class="required"style="color:red">*</span>
    </label>
   <textarea name="desc" id="" cols="65" rows="2"></textarea>
   
  

      </div>

<center>

<button type="submit"name="add_mark" class="btn btn-success">insert</button></center>
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

      
<?php include('include/script.php');?>
<?php include('include/footer.php');?>
