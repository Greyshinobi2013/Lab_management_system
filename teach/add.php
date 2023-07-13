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
                         <h3 class="card-title">Insert assessment page </h3>
                         <a href="assessment_list.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row  justify-content-center">
                                <div class="col-md-6">
                                <form action="code.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="modal-body">

                                          
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
                                
                                                <label  for="title">Group<span class="required"style="color:red">*</span>

                                                </label>
                                        
                                        <select class="form-control" name="sgroup">
                                        
                                    
                                            <?php
                                            

                                        $qr = mysqli_query($conn,"SELECT * FROM usera");
                                        while($r=mysqli_fetch_array($qr)){
                                            ?>
                                    <option><?php echo $r['sgroup'] ?></option>
                                    

                                            <?php
                                        }?>
                                        </select>
                                        </div>
                               


        <div class="form-group">
    <label  for="title">Year<span class="required"style="color:red">*</span>
    </label>
    
    <select class="form-control" name="B_year">
       <?php
       
       $qr = mysqli_query($conn,"SELECT * FROM usera");
       while($r=mysqli_fetch_array($qr)){
        ?>
 <option><?php echo $r['B_year'] ?></option>

        <?php
       }?>
    </select>
    </div>


    <div class="form-group">
<label  for="title">Academic Sessions<span class="required"style="color:red">*</span>
    </label>
    
    <select  class="form-control" name="B_session">
      
    <?php
       
       $qr = mysqli_query($conn,"SELECT * FROM usera");
       while($r=mysqli_fetch_array($qr)){
        ?>
 <option><?php echo  $r['B_session'] ?></option>


        <?php
       }?>
        </select>

        </div>
     

        <div class="form-group">
<label  for="title">Assessment Name<span class="required"style="color:red">*</span>
    </label>
   
    <input type="text" class="form-control" name="assesment_name" placeholder="assessment name">
  

    <div class="form-group">

    <label for="session" >Teacher Name<span class="required"style="color:red">*</label>
    
  <select  class="form-control" name="teacher" placeholder="teacher name(insert name from teachers table)">
    <?php
       
       $qr = mysqli_query($conn,"SELECT * FROM teachers");
       while($r=mysqli_fetch_array($qr)){
        ?>
 <option>
 <?php echo  $r['fname'] ?></option>


        <?php
       }?>
        </select>
</div>

<div class="form-group">
<label  for="title">Submission last Date<span class="required"style="color:red">*</span>
    </label>
    
    <input type="datetime-local" class="form-control" name="sub_date" placeholder="Room ID(insert id from room table)">
    </div>
</div>

<div class="form-group">
<label  for="title">Late Submission last Date<span class="required"style="color:red">*</span>
    </label>
    
    <input type="datetime-local" class="form-control" name="late_submit" placeholder="Room ID(insert id from room table)">
  
</div>
<div class="form-group">
<center>
<div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-primary btn-file">
    <span class="fileupload-new">Upload Assignment Doc</span>
    <span class="fileupload-exists">Change</span>
    <input type="file" name="fileToUpload"/></span>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" data-dismiss="fileupload"
       style="float: none">×</a>
       <br><br>
       <button class="btn btn-danger" type="reset">Reset</button>
<button type="submit"name="add" class="btn btn-success">insert</button>
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
