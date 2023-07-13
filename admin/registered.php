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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Studentes</h1>
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
            <label for="">username</label>
           <input type = "text" name="username" class ="form-control" placeholder ="user name">
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
   
                <label for="">Type:</label>
             
                    <select class="form-control" name="type">
                    <option value="select">select type</option>
                        <option value="military">military</option>
                        <option value="civilian">civilian</option>
                    </select>
             
              </div>
        
      
        <div class="form-group">
            <label for="">Enter email</label>
           <input type = "email" name="email" class ="form-control" placeholder ="enter email...@.com">
           
        </div>
        <div class="form-group">
            <label for="">password</label>
           <input type = "password" name="password" class ="form-control" placeholder ="enter password">
           
        </div>
        <div class="form-group">
            <label for="">Session</label>
           <input type = "text"id="" name="B_session"class ="form-control" placeholder ="session">
        </div>
        <div class="form-group">
            <label for="">year</label>
           <input type = "text" name="B_year"class ="form-control" placeholder ="year">
        </div>
        <div class="form-group">
            <label for="">Student group</label>
           <input type = "text" name="sgroup"class ="form-control" placeholder ="student group">
        </div>
       
        <div class="form-group">
            <label for="">specialization</label>
           <input type = "text"name="specialization" class ="form-control" placeholder ="Specialization">
        </div>
  
      </div>
      <!-- <div class="form-group">
                    <label for="">user:</label>
                  
                    <select class="form-control" name="user">
                    <option value="select">select user type</option>
                        <option value="3">student</option>
                        <option value="4">other</option>
                        
                    </select>

                </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="add_student" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- delet user -->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method ="POST">
      <div class="modal-body">
      <input type="text"name ="user_id"class="delet_user_id">
      <p>are you sure</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name ="DeleteUserbtn" class="btn btn-primary">yes Delete.!</button>
      </div>
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
              <li class="breadcrumb-item active">registered users</li>
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
                        <h3 class="card-title">registered users  </h3>

                        <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">Add Users</a>
                      
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>No</th>
                                  <th>Fname</th>
                                  <th>Lname</th>
                                  <th>Gender</th>
                                  <th>Type</th>
                                  <!-- <th>Sroll No</th> -->
                                  <th>Session</th>
                                  <th>year(s)</th>
                                  <th>sgroup</th>
                                  <th>specialz</th>
                                  <!-- <th>rolltype</th> -->
                                  <th>Action</th>
                                  
                                
                                
                                  
                                </tr>
                                </thead>
                                <tbody>
                                  <?php

                                        $other=mysqli_query($conn,"SELECT * FROM usera");


                                          while ($filter=mysqli_fetch_array($other)) {
                                              
                                          
                                                  echo "<tr class='success'>";
                                                  echo "<td>".$filter['id']."</td>";
                                              
                                                  echo "<td>".$filter['fname']."</td>";
                                                  echo "<td>".$filter['lname']."</td>";
                                                  echo "<td>".$filter['gender']."</td>";
                                                  echo "<td>".$filter['type']."</td>";
                                                  // echo "<td>".$filter['roll']."</td>";
                                                  echo "<td>".$filter['B_session']."</td>";
                                                  echo "<td>".$filter['B_year']."</td>";
                                                  echo "<td>".$filter['sgroup']."</td>";
                                                  echo "<td>".$filter['specialization']."</td>";
                                                  // $p12 = $filter['user'];
                                                  // $ot=mysqli_query($conn,"SELECT id,rol_as FROM admin where id=$p12");
                                                  // $a4=mysqli_fetch_array($ot);
                                                  
                                                  // echo "<td>".$a4['rol_as']."</td>";
                                                  ?>
                                              
                                                  
                                                <?php


                                                    echo  '<td> <a href="registered_edite.php?id=' .$filter['id'].'"><b  class="btn btn-info btn-sm updatet">update </b>  </a>  ';
                                                                                              

                                                    echo '<a href="delete1.php?id=' . $filter['id'] . '" 
                                                    onclick=\'return confirm("Are you sure you want to delete this student?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
?>

                                               
                                                <?php

                                                  echo "</tr>";
                                                
                                                  

                                      }
                                            
                                                
                                                  
                                            
                                          
                                        
                                    ?>  
                                  </tbody>   
                                  <tfoot>
                                  <tr>
                                <th>No</th>
                                  <th>Fname</th>
                                  <th>Lname</th>
                                  <th>Student roll No</th>
                                  <th>Session</th>
                                  <th>year(s)</th>
                                  <th>studnt group</th>
                                  <th>specialz</th>
                                  <th>rolltype</th>
                                  <th>Action</th>
                                
                                  
                                  
                                  
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
<script>
  $(document).ready(function() {
$("#datepicker").datepicker();
//   e.preventDefault();
  
//   var user = $(this).val();
//   // console.log(user_id);
//   $('.delete_user_id').val(user);
//   $('#DeleteModal').modal('show');
// });

});
</script>
<?php include('include/footer.php');?>

