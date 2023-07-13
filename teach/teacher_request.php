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
              <li class="breadcrumb-item active">requested device</li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

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
                        <h3 class="card-title">request   </h3>

                        <!-- <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">send reuest to borow</a> -->
                      
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <?php    
                       $rol = $_SESSION['auth_user']['user_name'];
                      if(isset($_SESSION['auth'])){
   

                            $ot1="SELECT * FROM issue_device where rol_as='$_SESSION[auth]'AND name ='$rol'";
                            $ot = mysqli_query($conn,$ot1);

                            if(mysqli_num_rows($ot)==0){
                                echo "there no pending Request yet ";
                            }
                            else{
                                ?>
                      <div class='col-sm-12'>
                      <a href='javascript:Clickheretoprint()' class='btn btn-info btn-sm' style='float:right;'>Print</a>
                      </div>
                      <div id='print_content'>
                      <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                              <th>Did</th>
                            <th>name</th>
                            <th>Approve</th>
                            <th>issue</th>
                            <th>device return</th>
                            
                          </tr>
                        </thead>
                    <tbody>
                      
                  
                     
                    <?php           
        
                       
                    while ($filter=mysqli_fetch_array($ot)) {
                
                        echo "<tr class='success'>";
                        echo "<td>".$filter['Did']."</td>";
                        echo "<td>".$filter['name']."</td>";
                        echo "<td>".$filter['approve']."</td>";
                        echo "<td>".$filter['issue']."</td>";
                        echo "<td>".$filter['dev_return']."</td>";
                        echo "</tr>";

                                      }
                                            
                                    }           
                                                  
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
      </section>
  </div>
<?Php
include('include/footer.php');?>


                                  
                                          
                                        
                                  
                                
                                  
                                  
                
                    

                                                
                                                  