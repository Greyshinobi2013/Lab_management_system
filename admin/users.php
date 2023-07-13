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
              <li class="breadcrumb-item active">Update user </li>
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
                         <h3 class="card-title">User update </h3>
                  
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            
                             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                            
                                <th>NO</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Roll</th>
                                <th>Action</th>
                               
                             
                                
                                
                                
                                  
                                </tr>
                                </thead>
                                <tbody>
                                  <?php

                                        $other=mysqli_query($conn,"SELECT * FROM admin");


                                          while ($filter=mysqli_fetch_array($other)) {
                                              
                                            echo "<tr class='success'>";
                                          
                                            echo "<td>".$filter['id']."</td>";
                                            echo "<td>".$filter['name']."</td>";
                                            echo "<td>".$filter['email']."</td>";
                                           
                                            ?>
                                            
                                            <td>
                                              <?php
                                              if($filter['rol_as']=="0")
                                              {
                                                echo"Admin";

                                              }
                                              else if($filter['rol_as']=="1")
                                              {
                                                echo "Teacher";
                                              }
                                              else if($filter['rol_as']=="2")
                                              {
                                                echo "lab Asistant";
                                              }
                                              else if($filter['rol_as']=="3")
                                              {
                                                echo "Student";
                                              }
                                              else{
                                                echo"Invalid user";
                                              }
                                              ?>


                                            </td>
                                            <?php

                                            echo '<td><a href="update_user.php?id=' . $filter['id'] . '"><b class="btn btn-info">Update</b></a>' ;
                                            echo '<a href="delete_user.php?id=' . $filter['id'] . '" onclick=\'return confirm("Are you sure you want to delete this user?")\'><b class="btn btn-danger">Delete</b></a></td>' ;

                                           
                                       
                                            

                                                  echo "</tr>";
                                                
                                                  

                                      }
                                            
                                                
                                                  
                                            
                                          
                                        
                                    ?>  
                                  </tbody>   
                                

                      </table>
                </div>
                                      
                          


                                        
                                
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