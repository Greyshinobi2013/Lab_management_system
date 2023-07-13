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
              <li class="breadcrumb-item active">mark</li>
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
                         <h3 class="card-title">give student mark  </h3>
                         <a href="submitedAssignment.php"class="btn btn-danger btn-sm float-right">Back</a>
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
                                       $sql = "SELECT * FROM assignment WHERE ass_id = '$id'";
                                       $res = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($res))
                                       {
                                          ?>
                                            <input type="hidden" name ="ass_id"value = "<?php echo  $row['ass_id']?> ">
                                             <div class="form-group">
                                            <label for="">Marks</label>
                                        <input type = "text" name="marks" value="<?php echo  $row['marks']?> "class ="form-control" >
                                        </div>

                                       
                                            
                                            
                                            <?php
                                        }

                                      
                              
                         
                          
                                ?>
                                
                                           
                                    <div class="modal-footer">
                                     
                                        <button type="submit"name="Addresult" class="btn btn-primary">insert result</button>
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


