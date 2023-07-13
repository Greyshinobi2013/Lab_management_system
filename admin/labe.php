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
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add lab Asis</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method ="POST">
      <div class="modal-body">
      <div class="form-group">
            <label for="">frist name</label>
           <input type = "text" name="fname" class ="form-control" placeholder ="Name">
        </div>
        <div class="form-group">
            <label for="">last name</label>
           <input type = "text" name="lname" class ="form-control" placeholder ="father name">
        </div>
        <div class="form-group">
                <label for="">gender:</label>
             
                    <select class="form-control" name="gender">
                    <option value="select">select gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
             
              </div>
      
        <div class="form-group">
            <label for="">username</label>
           <input type = "text" name="username" class ="form-control" placeholder ="user name">
        </div>
        <div class="form-group">
            <label for="">lab name</label>
           <input type = "text" name="labn" class ="form-control" placeholder ="lab name">
        </div>
        <div class="form-group">
            <label for="">password</label>
           <input type = "password" name="password" class ="form-control" placeholder ="enter password">
        </div>
        <div class="form-group">
            <label for="">Enter email</label>
           <input type = "email" name="email" class ="form-control" placeholder ="enter email...@.com">
        </div>
      </div>
      <!-- <div class="form-group">
    <label for="">user type:</label>
   
    <select class="form-control" name="user">
    <option value="select">select user type</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="other">other</option>
    </select>

</div> -->
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="add_Lab" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


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
              <li class="breadcrumb-item active">registered lab Asis</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="small-box bg-danger">
                      <?php 
                    if(isset($_SESSION['status'])){

            echo "<h4>".$_SESSION['status']. "</h4>";
            unset($_SESSION['status']);
            }

            ?>
  </div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">registered lab Asis  </h3>

                <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">Add Assistant</a>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>No</th>
                          <th>Fname</th>
                          <th>Lname</th>
                          <th>gender</th>
                        
                        
                          <th>lab name</th>
                      
                
                        
                         
                        
                          
                        </tr>
                        </thead>
                        <tbody>
                          <?php

                                $other=mysqli_query($conn,"SELECT * FROM laba");


                                  while ($filter=mysqli_fetch_array($other)) {
                                      
                                  
                                          echo "<tr class='success'>";
                                          echo "<td>".$filter['tid']."</td>";
                                          echo "<td>".$filter['fname']."</td>";
                                          echo "<td>".$filter['lname']."</td>";
                                          echo "<td>".$filter['gender']."</td>";
                                         
                                         
                                       
                                          echo "<td>".$filter['labn']."</td>";
                                          echo  '<td> <a href="labasistan_update.php?id=' .$filter['tid'].'"><b  class="btn btn-info btn-sm updatet">update </b>  </a>';
                                     
                                        
            
                                          // $p12 = $filter['user'];
                                          // $ot=mysqli_query($conn,"SELECT name,rol_as FROM admin where id=$p12");
                                          // $a4=mysqli_fetch_array($ot);
                                          // echo "<td>".$a4['name']."</td>";
                                          // echo "<td>".$a4['rol_as']."</td>";


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
        <?php 
         include('include/script.php');?>
<?php include('include/footer.php');

?>