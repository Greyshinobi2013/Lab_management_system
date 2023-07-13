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
              <li class="breadcrumb-item active">Edite-registered users</li>
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
                         <h3 class="card-title">Edite-registered users </h3>
                         <a href="Add_Assignement.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="code.php"method="POST">
                                    <div class="modal-body">
                            <div class="form-group">
                                         
                                    <div class="modal-footer">
                                     
                                        <button type="submit"name="updateUser" class="btn btn-primary">Update</button>
                                    </div>
                            </form>


                                        
                                    </form>
                                </div>
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

<div class="modal fade" id="change" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
           <input type = "text" name="lname" class ="form-control" placeholder ="Name">
        </div>
        <div class="form-group">
            <label for="">laast name</label>
           <input type = "text" name="fname" class ="form-control" placeholder ="father name">
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="add_student" class="btn btn-primary">Save</button>
      </div>
      </form>
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
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<center><h3>new Assignment list</h3></center>

<?php
session_start();
if (empty($_SESSION['login_user'])) {
    header('location:Slogin.php');
}
$name = $_SESSION['login_user'];

if(isset($_SESSION['login_user'])){
   

    $ott="SELECT * FROM users where name='$_SESSION[login_user]'";
    $ot = mysqli_query($conn,$ott);

    if(mysqli_num_rows($ot)==0){
        echo "there no pending Request";
    }
    else{
        echo "<div class='col-sm-12'>";
        echo "<a href='javascript:Clickheretoprint()' class='btn btn-info' style='float:right;'>Print</a>";
        echo "</div>";
        
        echo "<div id='print_content'>";
        echo "<table class='table table-bordered'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Assesment ID</th>";
        echo "<th>Assesment Name</th>";
        echo "<th>Student group No</th>";
        echo "<th>Last Date</th>";
        echo "<th>Documents</th>";
        echo "<th>Action</th>";
      
     
        echo "</tr>";
        echo "</thead>";
    }
   
    $result = mysqli_query($conn,"SELECT * FROM users WHERE users.name='$name'");
         $st_info = mysqli_fetch_array($result);
        $counter = 0;
        $query = mysqli_query($conn,"SELECT * FROM assesment WHERE specialization='$st_info[12]' AND sgroup='$st_info[13]' AND B_session='$st_info[10]' AND B_year='$st_info[11]'");
         while ($rows = mysqli_fetch_array($query)) {
        $counter++;
     $sql_query = mysqli_query($conn, "SELECT * FROM assignment_report WHERE assesment_id='$rows[AS_id]' AND student_name ='$st_info[1]' AND reportStatus='Complete'");
         $sql_result = mysqli_fetch_array($sql_query);
            ?>
            <tr>
            <td><?php echo $counter ?></td>
            <td><?php echo $rows['assesment_name'] ?></td>
                                            <td>
                                                <?php
                                                if ($sql_result > 0) {
                                                    echo "<p class='label label-success'> Submitted</p>";
                                                } else {
                                                    echo "<p class=\"label label-danger\">Not Submitted</p>";
                                                }

                                                ?>

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
                                                <a href="<?php echo $rows['document'] ?>"><i
                                                            class="fa fa-link">Download Problem</i></a>
                                            </td>

                                            <td>

                                                <?php
                                                if($now<=$date){
                                                ?>
                                                <a href="submit_assignment_report.php">
                                                    <button class="btn btn-sm btn-success">Submit</button>
                                                </a>
                                                <?php }else{?>
                                                    <a href="submit_assignment_report.php">
                                                        <button class="btn btn-sm btn-danger disabled">Time Out </button>
                                                    </a>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    <?php }
}



?>