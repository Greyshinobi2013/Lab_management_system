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
                                
                                                                 
        <center><h1>Asignment details</h1></center>
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




                    <?PHP
                    $id = $_REQUEST['id'];

                $other=mysqli_query($conn,"SELECT * FROM assesment WHERE AS_id='$id' ");
                


                while ($filter=mysqli_fetch_array($other)){
                    
                  ?>
                
              
              
                  <h4>Assesment ID: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['AS_id']."</div>" ?></h4>
                  <h4>Specialization: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['specialization']."</div>" ?></h4>
                  <h4>Student group NO: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['sgroup']."</div>" ?></h4>

                  <h4>bach: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['B_year']."</div>" ?></h4>
                  <h4>Session: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['B_session']."</div>" ?></h4>
                  <h4>Assignment Name: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['assesment_name']."</div>" ?></h4>
                  <h4>Teacher Name: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['teacher_name']."</div>" ?></h4>
                  <h4>Submission date: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['duDate']."</div>" ?></h4>
                  <h4>last submission date: &nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<div style='color: red'>".$filter['lastSubDate']."</div>" ?></h4>
                  <h4>Assesment Doc: &nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo $filter['document'] ?>"><i class="fa fa-file"></i></a></h4>
                
                          
                        <?PHP  
                          
    
    }  

    
?>
    
                                 
                       


                                        
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


