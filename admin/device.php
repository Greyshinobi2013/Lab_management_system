<?php 
include('authentication.php');
include('DB/conf.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');


?>   

<div class="content-wrapper">

<!-- Button trigger modal -->

<!-- Modal -->
<!-- <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">send request to borrow</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method ="POST">
      <div class="modal-body">
    <div class="form-group">
        <label for="">request</label>
        <input type ="text" class="form-control" name ="Did" placeholder="Enter device ID to send request" >
    </div>
    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="requst" class="btn btn-primary">send request</button>
      </div>
      </form>
    </div>
  </div>
</div> -->


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
              <li class="breadcrumb-item active">registered device</li>
            
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
        <?php
                $stock = mysqli_query($conn,"SELECT * FROM stdevice" );
                $stock = mysqli_num_rows($stock);
                ?>
                      <div class="card-header">
                        <h3 class="card-title"> device Stock(s) list </h3> 
                        
                        <h3 class="card-title float-right">number of all device <span class="badge badge-info"> <?php echo  $stock; ?> </span></h3>
                    

                        <!-- <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm ">number of device </a> -->
                      
                      
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>No</th>
                                <th>dName</th>
                                <th>dbrand</th>
                                <th>quantity</th>
                                <th>dstatus</th>
                                <th>dtype</th>
                                <th>modal</th>
                                <th>EDate </th>
                                <th>description</th>
                                <th>lab name</th>
                                <th>Asis Name</th>
                               
                                
                                
                                
                                  
                                </tr>
                                </thead>
                                <tbody>
                                  <?php

                                        $other=mysqli_query($conn,"SELECT * FROM stdevice");


                                          while ($filter=mysqli_fetch_array($other)) {
                                              
                                            echo "<tr class='success'>";
                                            echo "<td>".$filter['Did']."</td>";
                                            echo "<td>".$filter['dev_name']."</td>";
                                            echo "<td>".$filter['dev_brand']."</td>";
                                            echo "<td>".$filter['quantity']."</td>";
                                            echo "<td>".$filter['status']."</td>";
                                            echo "<td>".$filter['dev_type']."</td>";
                                            echo "<td>".$filter['dev_modal']."</td>";
                                            echo "<td>".$filter['time']."</td>";
                                            echo "<td>".$filter['dev_desc']."</td>";
                                            echo "<td>".$filter['labn']."</td>";
                                            echo "<td>".$filter['Lab_asis_name']."</td>";
                                       
                                            
                                               

                                                  echo "</tr>";
                                                
                                                  

                                      }
                                            
                                                
                                                  
                                        
                                          
                                        
                                    ?> 
                                      </tbody>  
                             
                                  <tfoot>
                                  <tr>
                                  <th>No</th>
                                  <th>dName</th>
                                  <th>dbrand</th>
                                  <th>quantity</th>
                                  <th>dstatus</th>
                                  <th>dtype</th>
                                  <th>modal</th>
                                  <th>EDate </th>
                                  <th>description</th>
                                  <th>lab name</th>
                                  <th>Asis Name</th>
                                
                                  
                                  
                                
                                  
                                  
                                  
                                </tr>
                          </tfoot>  
                           


                      </table>
                </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
      </section>
  </div>
  <?php 
      
      include('include/script.php');?>
<?Php
include('include/footer.php');?>