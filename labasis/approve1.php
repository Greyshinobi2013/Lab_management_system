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
            <li class="icon-clock"><?php include('time.php');?><a href="#"></a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">requested device</li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">approve  request</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  method ="post" class="form-horizontal" role="form" >
      <div class="modal-body">
    <div class="form-group">
        <label for="">Approve</label>
        <input type ="text"name="approve"  class="form-control" placeholder="yes or no" >
    </div>
    <div class="form-group">
      <label for="">Issue Date</label>
      <input type = "datetime-local" name="issue" class ="form-control">
    </div>
    <div class="form-group">
      <label for="">Return_Date</label>
      <input type = "datetime-local" name="dev_return" class ="form-control">
    </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="approve2" class="btn btn-primary">Approve</button>
      </div>
      </form>
    </div>
  </div>
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
                        <h3 class="card-title">approve dashboard  </h3>

                        <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">Teacher Approve page</a>
                      
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <?php     
                        $rol = $_SESSION['auth_user']['user_name'];
                      if(isset($_POST['approve2'])){
                        mysqli_query($conn,"UPDATE issue_device SET `approve`='$_POST[approve]',`issue`='$_POST[issue]',`dev_return`='$_POST[dev_return]'where 
                        rol_as='$_SESSION[rol_as]' and Did='$_SESSION[Did]';");
                    
                        mysqli_query($conn,"UPDATE stdevice SET quantity = quantity-1 where Did='$_SESSION[Did]'");
                        $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','bowrow device id $_SESSION[Did]')");
                    
                        $we=mysqli_query($conn,"SELECT quantity from stdevice where Did ='$_SESSION[Did]';");
                        while($row=mysqli_fetch_assoc($we))
                        {
                            if($row['quantity']<=0)
                            {
                                mysqli_query($conn,"UPDATE stdevice SET Status='not-available' where Did='$_SESSION[Did]';");
                            }
                            else {
                                mysqli_query($conn,"UPDATE stdevice SET Status='available' where Did='$_SESSION[Did]';"); 

                            }
                        }
                    
                    ?>
                    <script>
                        alert("request approved");
                        window.location="Teacher_issue.php"
                    </script>
                    <?php
                    }

                                ?>
                    
                     
                   
                </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
      </section>
  </div>
<?Php
include('include/footer.php');?>


                                  
                                          
                                        
                                  
                                
                                  
                                  
                
                    

                                                
                                                  