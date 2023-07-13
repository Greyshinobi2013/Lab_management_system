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
            <li class="icon-clock"><?php include('time.php');?><a href="#"></a></li>
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Assesssment</li>
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
   docprint.document.write('<html><head><title>computer science and engineering departement report</title>'); 
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
                         <h3 class="card-title">new Assignment list </h3>
                         <a href=""class="btn btn-danger btn-sm float-right">Back  </a>
                   
                       
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
        <table id="#example1" class="table table-bordered table-striped">
         <thead>
         <tr>
         <th> ID</th>
         <th> teacher Name</th>
         <th> course Nname</th>
         <th>Assesment Name</th>
         <th>Status</th>
         <th>Last Date</th>
         <th>Documents</th>
         <th>Action</th>
      
     
         </tr>
         </thead>
         <tbody>
        <?php

    }
   
$result = mysqli_query($conn,"SELECT B_session, B_year, Sgroup, specialization  FROM usera WHERE user='$rol'");
    $st_info = mysqli_fetch_array($result);

    if($st_info){
    $counter = 0;
    $query = mysqli_query($conn,"SELECT * FROM assesment WHERE specialization='$st_info[3]' AND sgroup='$st_info[2]' AND B_session='$st_info[0]' AND B_year='$st_info[1]'");
    while ($rows = mysqli_fetch_array($query)) {

    $counter++;
    $sql_query = mysqli_query($conn, "SELECT * FROM assignment WHERE assessment_id='$rows[AS_id]' AND email ='$ro'");
        $sql_result = mysqli_fetch_array($sql_query);
    
        ?>
        <tr>
            <td><?php echo $counter ?></td>
            <td><?php echo $rows['teacher_name'] ?></td>
            <td><?php echo $rows['course_name'] ?></td>
        <td><?php echo $rows['assesment_name'] ?></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm ">
                                            <?php

                                            if ($sql_result > 0) {
                                                
                                                echo "<a class='label label-success'> Submitted</p>";
                                            } else {
                                                echo "<p class=\"label label-danger\">Not Submitted</p>";
                                            }

                                            ?></a>

                                        </td>
                                        <td><?php $rows['duDate'];

                                            $date_expire = $rows['duDate'];
                                            $date = new DateTime($date_expire);
                                            $now = new DateTime();
                                            if($now<$date){
                                            echo "<p class=\"bg-primary\">" . $date->diff($now)->format("%d days Left") . "</p>";
                                            }else{
                                                echo "Date Already Over";
                                            }
                                            ?>

                                        </td>
                                        <td>
                                            <a href="<?php echo "../teach/".$rows['document'] ?>"><i
                                                        class="fa fa-link">Download Problem</i></a>
                                        </td>

                                        <td>

                                            <?php
                                            if($now<=$date){
                                            ?>
                                            <a href="submit_assignment.php">
                                                <button class="btn btn-sm btn-success">Submit</button>
                                            </a>
                                            <?php }else{?>
                                                <a href="">
                                                    <button class="btn btn-sm btn-danger disabled">Time Out </button>
                                                </a>
                                            <?php }?>
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
