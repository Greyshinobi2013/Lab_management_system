<?php 
include('authentication.php');
include('DB/conf.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');
?>
<div class="content-wrapper">


   

<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add teachers</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="post" class="form-horizontal" role="form">
      <div class="modal-body">
      <div class="form-group">
                <label for="t_name" >Teacher Name:</label>
               
                <input type="text" class="form-control" name="fname" placeholder="Enter  fname" >
            
            </div>
            <div class="form-group">
                <label for="t_name" >Teacher Name:</label>
               
                <input type="text" class="form-control" name="lname" placeholder="Enter  lname" >
            
            </div>
            <div class="form-group">
                <label for="t_name" >username:</label>
               
                <input type="text" class="form-control" name="username" placeholder="Enter username" >
            
            </div>
           
            <div class="form-group">
                <label for="email" >Teacher email:</label>
               
                <input type="email" class="form-control" name="email" placeholder="Enter Teacher's email" >
            
            </div>
            <div class="form-group">
                <label for="password" >Teacher password:</label>
               
                <input type="password" class="form-control" name="password" placeholder="Enter Teacher's password" >
            
            </div>
            <div class="form-group">
                <label class=" control-label">Select Type:</label>
             
                    <select class="form-control" name="type">
                        <option value="Chairman">Chairman</option>
                        <option value="Professore">Professore</option>
                        <option value="Associate Professore">Associate Professore</option>
                        <option value="Assistant Professore">Assistant Professore</option>
                        <option value="Lecturer">Lecturer</option>
                    </select>
               
            </div>
            <div class="form-group">
                <label for="qualification" class=" control-label">Qualification:</label>
              
                    <input type="text" class="form-control" name="qualification" placeholder="Enter Qalification">
               
            </div>

             
              
           

             <div class="form-group">
                <label for="">Status:</label>
             
                    <select class="form-control" name="status">
                    <option value="select">select status</option>
                        <option value="Present">Present</option>
                        <option value="Leaved">Leaved</option>
                    </select>
             
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
            </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="te_add" class="btn btn-primary">Save</button>
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
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">registered teachers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class=content>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="small-box bg-danger">

        <?php 
                            if(isset($_SESSION['status'])){

                    echo "<h4 >".$_SESSION['status']. "</h4>";
                    unset($_SESSION['status']);
                    }

                    ?>
                    </div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">registered teachers  </h3>

                <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">Add teachers</a>
               
              </div>
                 <!-- /.card-header -->
             <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                        <th>No</th>
                          <th>teacher fname</th>
                          <th>teacher lname</th>
                  
                          <th>type</th>
                        
                         
                          <th>qualification</th>
                        
                       
                          <th>status</th>
                          <th>Action</th>
                       
                        
                        </tr>
                        </thead>

                        <tbody>
                          <?php

                                $other=mysqli_query($conn,"SELECT * FROM teachers");


                                  while ($filter=mysqli_fetch_array($other)) {
                                    
                                    echo "<tr class='success'>";
                                    echo "<td>".$filter['tid']."</td>";
                                 
                                    echo "<td>".$filter['fname']."</td>";
                                    echo "<td>".$filter['lname']."</td>";
                                    
                                    echo "<td>".$filter['type']."</td>";
                                  
                                    echo "<td>".$filter['qualification']."</td>";
                                  
                                    echo "<td>".$filter['status']."</td>";
                                    // $p12 = $filter['user'];
                                    // $ot=mysqli_query($conn,"SELECT name,rol_as FROM admin where id=$p12");
                                    // $a4=mysqli_fetch_array($ot);
                                    // echo "<td>".$a4['name']."</td>";
                                    // echo "<td>".$a4['rol_as']."</td>";
                                  
                                    echo  '<td> <a href="techer_update.php?id=' .$filter['tid'].'"><b  class="btn btn-info btn-sm updatet">update </b>  </a>  ';
                                                                                              

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
   </section>
</div>
 
 <?PHP
  include('include/script.php');?>
<?php include('include/footer.php');?>