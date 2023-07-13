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
      <h1 class="modal-title fs-5" id="exampleModalLabel">Add course</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method ="POST">
      <div class="modal-body">
      <div class="form-group">
            <label for="">Course code</label>
           <input type = "text" name="course_code" class ="form-control" placeholder ="course code">
        </div>
        <div class="form-group">
            <label for="">Course name</label>
           <input type = "text" name="course_name" class ="form-control" placeholder ="Insert course name">
        </div>
        <div class="form-group">
        <label for="">Course Type:</label>
      
        <select class="form-control" name="type">
        <option value="select">select course type</option>
                <option value="Theory">Theory</option>
                <option value="Theory and lab">Theory and lab</option>
                <option value="lab">lab</option>

        </select>

    </div>
        <div class="form-group">
        <label for="">Year:</label>
      
        <select class="form-control" name="year">
        <option value="select">select year</option>
               
                <option value="1-1">1-1</option>
                <option value="1-2">1-2</option>
                <option value="2-1">2-1</option>
                <option value="2-2">2-2</option>
                <option value="3-1">3-1</option>
                <option value="3-2">3-2</option>
                <option value="4-1">4-1</option>
                <option value="4-2">4-2</option>
                <option value="5-1">5-1</option>
                <option value="5-2">5-2</option>

        </select>

    </div>
    <div class="form-group">
            <label for="">credit</label>
           <input type = "text" name="credit" class ="form-control" >
           
        </div>
      
       
  
      </div>
      <!-- <div class="form-group">
            <label for="">user</label>
           <input type = "text" name="user" class ="form-control" placeholder ="user type">
        </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="add_course" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- delet user -->

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
              <li class="breadcrumb-item active">registered course</li>
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
                        <h3 class="card-title">registered course  </h3>

                        <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">Add Course</a>
                      
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                                <tr>
                                <th>No</th>
                                  <th>course Code</th>
                                  <th>Course Name</th>
                                  <th>Type</th>
                                  <th>year</th>
                         
                                  <th>Credit</th>
                                
                               
                              
                                  
                                
                                
                                  
                                </tr>
                                </thead>
                                <tbody>
                                  <?php

                                        $other=mysqli_query($conn,"SELECT * FROM course");


                                          while ($filter=mysqli_fetch_array($other)) {
                                              
                                          
                                                  echo "<tr class='success'>";
                                                  echo "<td>".$filter['co_id']."</td>";
                                              
                                                  echo "<td>".$filter['course_code']."</td>";
                                                  echo "<td>".$filter['course_name']."</td>";
                                                  echo "<td>".$filter['type']."</td>";
                                                  echo "<td>".$filter['year']."</td>";
                                                  echo "<td>".$filter['credit']."</td>";
                                                 
                                                  ?>
                                              
                                                  
                                                <?php


                                                    echo  '<td> <a href="cource_edite.php?id=' .$filter['co_id'].'"><b  class="btn btn-info btn-sm updatet">update </b>  </a>  ';
                                                                                              

                                                    // echo '<a href="delete1.php?id=' . $filter['co_id'] . '" 
                                                    // onclick=\'return confirm("Are you sure you want to delete this course?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
?>

                                               
                                                <?php

                                                  echo "</tr>";
                                                
                                                  

                                      }
                                            
                                                
                                                  
                                            
                                          
                                        
                                    ?>  
                                  </tbody>   
                                  <tfoot>
                                  <tr>
                                  <th>No</th>
                                  <th>course Code</th>
                                  <th>Course Name</th>
                                  <th>Type</th>
                                  <th>year</th>
                         
                                  <th>Credit</th>
                                
                               
                               
                                  
                                  
                                  
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

