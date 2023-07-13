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
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">submited assignment list</li>
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
                         <h3 class="card-title">submited Assignment list </h3>
                    
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        
                                <?php

                                if (empty($_SESSION['auth'])) {

                                  echo "<script>window.location.href='index.php';</script>";
                                  
                                }

                                $rol = $_SESSION['auth_user']['user_id'];
                                $ro = $_SESSION['auth_user']['user_email'];

                                if(isset($_SESSION['auth'])){
                                
                                  $ott="SELECT * FROM admin where id=$rol";
                                  $ot = mysqli_query($conn,$ott);
                                    if(mysqli_num_rows($ot)==0){
                                        echo "there no pending Request";
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
                                              <th>No</th>
                                            <th>Assessment Name</th>
                                            <th>Title</th>
                                            <th>Modify Date</th>
                                            <th>Status</th>
                                           
                                            <th>Opration</th>
                                            <th>result</th>
                                            
                                            
                                          </tr>
                                        </thead>
                                    
                                    <tbody>
                                    <?php           

                                    }
   
                            $result = mysqli_query($conn,"SELECT * FROM assignment WHERE email='$ro'");
                          
                                $counter = 0;
                                while ($rows =  mysqli_fetch_array($result)) {
                                $counter++;
                            
                                $query = mysqli_query($conn,"SELECT * FROM assesment WHERE AS_id='$rows[assessment_id]'");

                                $ass = mysqli_fetch_array($query);
                                    ?>
                                    <tr>
                                    <td><?php echo $counter ?></td>
                                    <td><?php echo $ass[6]?></td>
                                    <td><?php echo $rows['title'] ?></td>
                                    <td><?php echo $rows['upload_date'] ?></td>


                                    <td>
                                        Completed
                                    </td>

                                </div>
                                    <td>
                                        <a class="btn btn-primary btn-xs"
                                          href="submited_assgnment_ditail.php?id=<?PHP echo $rows['ass_id'];?>"><i class ="fa fa-folder"> </i> view</a>
                              
                         

                                            </td>
                                            <td><?php echo $rows[8]?></td>
                                        </tr>
                                      <?php }
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

<?php include('include/footer.php');?>

          

                      




