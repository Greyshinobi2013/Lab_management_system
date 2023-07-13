<?php 
include('authentication.php');
include('DB/conf.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');
?>
<div class="content-wrapper">

<!-- Button trigger modal -->
<script language="javascript">
                    function Clickheretoprint()
                    { 
                    var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
                        disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
                    var content_vlue = document.getElementById("print_content").innerHTML; 
                    
                    var docprint=window.open("","",disp_setting); 
                docprint.document.open(); 
                docprint.document.write('<html><head><title>Inel Power System</title>'); 
                docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
                docprint.document.write(content_vlue);          
                docprint.document.write('</body></html>'); 
                docprint.document.close(); 
                docprint.focus(); 
                }
                </script>

<!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register new Student</h1>
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
        <button type="submit"name="sregister" class="btn btn-primary">register</button>
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
            <h1 class="m-0 text-dark">Register page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">registered register Student</li>
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
                <h3 class="card-title">registere student </h3>

                <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">register new Student</a>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class='col-sm-12'>
                      <a href='javascript:Clickheretoprint()' class='btn btn-info btn-sm' style='float:right;'>Print</a>
                      </div>
                   
                <div id='print_content'>
                        <tr>
            
                <table id="example1" class="table table-bordered table-striped">
               
                        <thead>
                     
                        <th>No</th>
                          <th>Fname</th>
                          <th>Lname</th>
                          <th>gender</th>
                          <th>roll</th>
                   
                        
                        
                        
                      
                
                        
                         
                        
                          
                        </tr>
                        </thead>
                        <tbody>
                          <?php

                                $other=mysqli_query($conn,"SELECT * FROM student");


                                  while ($filter=mysqli_fetch_array($other)) {
                                      
                                  
                                          echo "<tr class='success'>";
                                          echo "<td>".$filter['sid']."</td>";
                                          echo "<td>".$filter['fname']."</td>";
                                          echo "<td>".$filter['lname']."</td>";
                                          echo "<td>".$filter['gender']."</td>";
                                          echo "<td>".$filter['roll1']."</td>";
                                     
                                         
                                         
                                       
                                       
                                     
                                        
            
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