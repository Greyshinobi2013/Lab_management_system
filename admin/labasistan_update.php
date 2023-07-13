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
            <h1 class="m-0 text-dark">Update teacher page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">update teacher</li>
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
                         <h3 class="card-title">update teacher  </h3>
                         <a href="te.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="code.php"method="POST">
                                    <div class="modal-body">
                            <div class="form-group">
                                <?php
                                       $id3 = $_REQUEST['id'];

                                        $ott="SELECT fname,lname,gender,labn from admin 
                                        INNER JOIN laba ON laba.user = admin.id where laba.tid='$id3'";
                                      

                                       $res = mysqli_query($conn,$ott);
                                        while($row = mysqli_fetch_array($res))
                                       {
                                          ?>
                                      
                                             <div class="form-group">
                                            <label for="">fname</label>
                                        <input type = "text" name="fname" value="<?php echo  $row['fname']?> "class ="form-control" >
                                        </div>
                                             <div class="form-group">
                                            <label for="">lname</label>
                                        <input type = "text" name="lname" value="<?php echo  $row['lname']?> "class ="form-control" >
                                        </div>

                                      
                                    
                                            <div class="form-group">
                                                <label for="">gender</label>
                                                <input type = "text" name="gender" value="<?php echo $row['gender']?> " class ="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">lab name</label>
                                            <input type = "text" name="labn" value="<?php echo  $row['labn']?> "class ="form-control" >
                                            </div>
                                        
                                            
                                            <?php
                                        }

                             
                              
                         
                          
                                ?>
                                
                                           
                                    <div class="modal-footer">
                                     
                                        <button type="submit"name="lupdate" class="btn btn-primary">update</button>
                                        <input type="hidden" name ="id"value = "<?= $id3;?> "/>
                                     
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


