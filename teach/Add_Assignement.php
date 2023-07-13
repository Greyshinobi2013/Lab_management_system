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
            <h1 class="m-0 text-dark">Assessment list </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">assessment</li>
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
                if(isset($_SESSION['status']))
                {
                ?>

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>ohh!</strong><?php echo $_SESSION['status'];?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['status']);
                }
                ?>
          
                    <div class="card">
          
          
                      <div class="card-header">
                        <h3 class="card-title">assessment  </h3>

                      
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        
                        <table id="example1" class="table table-bordered table-striped">
                       
                                <thead>
                                <tr>
                                <th>No</th>
                                <th>Specialization</th>
                                <th>Sgroup</th>
                                <th>Year</th>
                                <th>Session</th>
                                <th>Ass Name</th>
                                <th>TeacherN</th>
                                <th>SubmissionDate </th>
                                <th>last SubDate</th>
                                <th>#Detaile</th>
                              
                              
                                
                                
                                
                                  
                                </tr>
                                </thead>
                                <tbody>
                                  <?php

                                        $other=mysqli_query($conn,"SELECT * FROM assesment");


                                          while ($filter=mysqli_fetch_array($other)) {
                                              
                                            echo "<tr class='success'>";
                                            echo "<td>".$filter['AS_id']."</td>";
                                            echo "<td>".$filter['specialization']."</td>";
                                            echo "<td>".$filter['sgroup']."</td>";
                                            echo "<td>".$filter['B_year']."</td>";
                                            echo "<td>".$filter['B_session']."</td>";
                                            echo "<td>".$filter['assesment_name']."</td>";
                                            echo "<td>".$filter['teacher_name']."</td>";
                                            echo "<td>".$filter['duDate']."</td>";
                                            echo "<td>".$filter['lastSubDate']."</td>";

                                                   
                                     
                                                
                                            echo  '<td> <a href="aupdate_assignment.php?id=' .$filter['AS_id'].'"><b  class="btn btn-success btn-sm updatet">update </b>  </a>  ';

                                                  echo  '<td> <a href="ass_detail_view.php?id=' .$filter['AS_id'].'"><b  class="btn btn-info btn-sm ">View </b>  </a>  ';
                                                                                              
                                                  echo "</tr>";

                                                                                        
                                          }
                                            
                                          ?>
                                          
                                          </tbody>   
                                          <tfoot>
                                          <tr>
                                          <th>No</th>
                                        <th>Specialization</th>
                                        <th>Sgroup</th>
                                        <th>Year</th>
                                        <th>Session</th>
                                        <th>Ass Name</th>
                                        <th>TeacherN</th>
                                        <th>SubmissionDate </th>
                                        <th>last SubDate</th>
                                        <th>#Detaile</th>
                                  
                                  
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
  <?Php
include('include/footer.php');?>
                                                  

                                  
                                            
                                                
                                                  
                                            
                                          
                                        
                                  
                                
                                  