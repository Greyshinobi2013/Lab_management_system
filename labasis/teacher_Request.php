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



 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Teacher Request Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Requested device</li>
            
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
            <h1 class="card-title bg-active">Teacher Request page   </h1>

            <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">Teacher  Request to approve</a>
          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          
        <?php     
                      if(isset($_SESSION['auth'])==$_SESSION['auth_user']){
                            

                            // $ot="SELECT admin.rol_as,teachers.user,fname,lname,type,qualification,issue_device.name,stdevice.Did,dev_name,dev_brand,stdevice.status,labn FROM admin 
                            // INNER JOIN issue_device ON admin.name = issue_device.name
                            //  INNER JOIN stdevice ON issue_device.Did=stdevice.Did INNER JOIN teachers ON admin.id=teachers.user WHERE issue_device.approve =''";
                            $ot="SELECT admin.rol_as,teachers.user,fname,lname,type,qualification,issue_device.name,stdevice.Did,dev_name,dev_brand,stdevice.status,labn FROM admin 
                            INNER JOIN issue_device inner join stdevice inner join teachers ON  issue_device.Did=stdevice.Did and
                            admin.id=teachers.user and admin.name=issue_device.name WHERE issue_device.approve =''";
                            // $ot="SELECT issue_device.name from issue_device inner join admin on admin.name=issue_device.name";
                                        $res=mysqli_query($conn,$ot);
                                        if(mysqli_num_rows($res)==0){
                                            echo "there no pendig Request from teachers";
                                        }
                                   
                            else{
                                ?>

<?php



if(isset($_POST['requst1']))
{
    if(isset($_SESSION['auth']))
    {
      
        $_SESSION['Did']=$_POST['Did'];
       $_SESSION['rol_as']=$_POST['rol_as'];
      //  $_SESSION['user_name']=$_POST['name'];
    
        
          
           ?>
           <script type="text/javascript">
               window.location="approve1.php"
           </script>
           <?php
    }
 
}
?>
                                <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">send request to approve page </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="teacher_Request.php" method ="post" class="form-horizontal" role="form">
      <div class="modal-body">
    <div class="form-group">
        <label for="">device Id</label>
        <input type ="text" class="form-control" name ="Did" placeholder="Enter device ID to send request" >
    </div>
    <div class="form-group">
        <label for="">users roltype</label>
        <input type ="text" class="form-control" name ="rol_as" placeholder="Enter roltype to send request" >
    </div>
    <!-- <div class="form-group">
        <label for="">username</label>
        <input type ="text" class="form-control" name ="name" placeholder="Enter username to send request" >
    </div> -->
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="requst1" class="btn btn-primary">send request</button>
      </div>
      </form>
    </div>
  </div>
</div>
                      <div class='col-sm-12'>
                      <a href='javascript:Clickheretoprint()' class='btn btn-info btn-sm' style='float:right;'>Print</a>
                      </div>
                      <div id='print_content'>
                      <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                              
                                <th>roltype</th>
                             
                                 <th>Fname</th>
                                 <th>Lname</th>
                                 <th>lab name</th>
                                 <th>Type</th>
                                
                                 <th>device ID</th>
                                
                                 <th>device name</th>
                                    
                                  <th>device Brand</th>
                                  <th>status</th>
                       
                            
                                        </tr>
                                      </thead>
                                      <tbody>
                                  
                                  <?php           
        
                                    
                                  while ($filter=mysqli_fetch_array($res)) {
                                     
                                      echo "<tr class='success'>";
                                      // echo "<td>".$filter['name']."</td>";
                                      echo "<td>".$filter['rol_as']."</td>";
                                      echo "<td>".$filter['fname']."</td>";
                                      echo "<td>".$filter['lname']."</td>";
                                      echo "<td>".$filter['labn']."</td>";
                                      echo "<td>".$filter['type']."</td>";
                                
                                    
                                      echo "<td>".$filter['Did']."</td>";
                                      echo "<td>".$filter['dev_name']."</td>";
                                      echo "<td>".$filter['dev_brand']."</td>";
                                      echo "<td>".$filter['status']."</td>";
                                    
                                    
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
          
