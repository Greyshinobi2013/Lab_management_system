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
                         <h3 class="card-title">update device  </h3>
                         <a href="registered.php"class="btn btn-danger btn-sm float-right">Back</a>
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

                                        $ott="SELECT name,email,rol_as,B_year,sgroup,specialization from admin 
                                        INNER JOIN usera ON usera.user = admin.id where usera.id='$id3'";
                                      

                                       $res = mysqli_query($conn,$ott);
                                        while($row = mysqli_fetch_array($res))
                                       {
                                          ?>
                                      
                                             <div class="form-group">
                                            <label for="">user name</label>
                                        <input type = "text" name="username" value="<?php echo  $row['name']?> "class ="form-control" >
                                        </div>

                                      
                                    
                                            <div class="form-group">
                                                <label for="">email</label>
                                                <input type = "text" name="email" value="<?php echo $row['email']?> " class ="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">usertype</label>
                                            <input type = "text" name="user" value="<?php echo  $row['rol_as']?> "class ="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">year</label>
                                            <input type = "text" name="B_year" value="<?php echo  $row['B_year']?> "class ="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Student group</label>
                                            <input type = "text" name="sgroup" value="<?php echo  $row['sgroup']?> "class ="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="">specialization</label>
                                            <input type = "text" name="specialization" value="<?php echo  $row['specialization']?> "class ="form-control" >
                                            </div>
                                            
                                            
                                            <?php
                                        }

                             
                              
                         
                          
                                ?>
                                
                                           
                                    <div class="modal-footer">
                                     
                                        <button type="submit"name="update" class="btn btn-primary">update</button>
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


