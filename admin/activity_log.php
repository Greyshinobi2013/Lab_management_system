<?php 
include('authentication.php');
include('DB/conf.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');
?>
<div class="content-wrapper">
    
                            <div class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1 class="m-0 text-dark">Activity Log</h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active">All activity in the system</li>
                                        </ol>
                                    </div>
                                    </div>
                                </div>
                                </div>
                    <script language="javascript">
                    function Clickheretoprint()
                    { 
                    var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
                        disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
                    var content_vlue = document.getElementById("print_content").innerHTML; 
                    
                    var docprint=window.open("","",disp_setting); 
                docprint.document.open(); 
                docprint.document.write('<html><head><title>CSE department LAMS</title>'); 
                docprint.document.write('</head><body onLoad="self.print()" style="width: 3000px; font-size:12px; font-family:arial;">');          
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
                         <h3 class="card-title">Activity Log</h3>
                         <a href=""class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        
                                
                                  
                            <div class='col-md-12'>
                            <a href='javascript:Clickheretoprint()' class='btn btn-info btn-sm' style='float:right;'>Print</a>
                            </div>
                            <div id='print_content'>
                            <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>System user</th>
                                <th>Action</th>
                                
                                </tr>
                                </thead>
                                <tbody>
                

   
                <?php     
                
                  if(isset($_SESSION['auth'])){
                
             
                        $ot1="SELECT * FROM `activity` ORDER BY `activity`.`date` DESC";
                        $ot = mysqli_query($conn,$ot1);
               
                   


                while ($filter=mysqli_fetch_array($ot)) {
              
                    echo "<tr class='success'>";
                    echo "<td>".$filter['activity_id']."</td>";
                    echo "<td>".$filter['date']."</td>";
                    echo "<td>".$filter['name']."</td>";
                    echo "<td>".$filter['action']."</td>";
                    echo "</tr>";
                    

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
   
</section>
          

                      

</div>

      
<?php include('include/script.php');?>
<?php include('include/footer.php');?>
            
