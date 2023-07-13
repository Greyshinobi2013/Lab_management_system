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
                         <a href=""class="btn btn-danger btn-sm float-right">Back</a>
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
                                
                            // $ot="SELECT admin.rol_as,name,email,stdevice.Did,dev_name,dev_brand,status FROM admin 
                            // INNER JOIN issue_device ON admin.rol_as = issue_device.rol_as
                            //  INNER JOIN stdevice ON issue_device.Did=stdevice.Did WHERE issue_device.approve =''";
                            //             $res=mysqli_query($conn,$ot);
                            //             if(mysqli_num_rows($res)==0){
                            //                 echo "there no pending Request";
                            //             }
                                   
                            // else{
                             


                                  $ott="SELECT admin.email,assessment_id,upload_date,upload_document,ass_id,marks,usera.user,fname,roll,lname,B_session,sgroup,specialization from admin INNER JOIN 
                                  assignment ON admin.email = assignment.email INNER JOIN usera ON usera.user = admin.id";
                                  $ot = mysqli_query($conn,$ott);
                               

                                    if(mysqli_num_rows($ot)==0){
                                        echo "there no submitted assignment yet";
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
                                            <th>Student Name</th>
                                            <th>Assignment Name</th>
                                            <th>course Name</th>
                                            <th>year</th>
                                            <th>Specialization</th>
                                          
                                            <th>Student group</th>
                                            <th>Session</th>
                                            <th>Upload Date</th>
                                            <th>Uploded File</th>
                                            <th> marks</th>
                                            
                                         
                                        
                                            <th>resualt</th>
                                          
                                            
                                            
                                          </tr>
                                        </thead>
                                    
                                    <tbody>
                                    <?php  
                                            $counter = 0;   
                               
                                     while ($filter=mysqli_fetch_array($ot)) {   
                                        $counter++;  
                                        ?>
                                        <tr>
                                        <td><?php echo $counter ?></td>
                                        <td>
                                        <?php
                                  
                                     
                                        echo $filter['fname'] ." ". $filter['lname'];  
                                        ?>          </td>

                                         <td>
                                        <?php 
                                                                        
                                        $re = mysqli_query($conn,"SELECT * FROM assesment where AS_id='$filter[assessment_id]'");
                                        $st=mysqli_fetch_array($re);
                                       
                                        echo $st['assesment_name']; 
                                        ?>          </td>
                                            <td><?php echo $st['course_name']?></td>
                                            <td><?php echo $st['B_year']?></td>
                                            <td><?php echo $filter['specialization']?></td>
                                            <td><?php echo $filter['sgroup']?></td>
                                
                                           <td><?php echo $filter['B_session']?></td>
                                        
                                           <td><?php echo $filter['upload_date'] ?></td>
                                          
                                          
                                   
                                           <td>
                                             <a href="<?php echo "../user/".$filter['upload_document'] ?>"><i class="fa fa-file"></i></a>
                                           </td>
                                           <td><?php echo $filter['marks'] ?></td>
                                        
                                           <td>
                                         
                                           <?php


                                      echo  '<td> <a href="Resultu.php?id=' .$filter['ass_id'].'"><b  class="btn btn-info btn-sm updatet">resualt </b>  </a>  ';
                                          


                                            ?>

                                           </td>
                                           
                                                       </td>
                                                   </tr>
                 
                                                 <?php }
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
           
           <?php include('include/footer.php');?>
                                           
                                     
                                       
                                             
                                          

                                 
   
                          
           
      

          

                      




