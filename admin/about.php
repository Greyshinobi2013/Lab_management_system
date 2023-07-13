<?php 

include('DB/conf.php');



?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">about the departement </li>
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
                            <h3 class="card-title">   <center><h2>Department of computer Science and Engineering</h2>
                            <b>fouded on: 1987 EC</b></center> </h3>
                            
                         </div>
                        <!-- /.card-header -->
                        
                                          
                                 <div class="col-sm-6">
                                              <b>Degree offers with duration:</b>	
                                              <ul>
                                                <li>five years program, B.Sc. (Engg.)</li>
                                              <li>Two years program, M.Sc.(Engg.)</li>
                                            
                                              <li>Minimum three monthes for short training program</li>
                                              <li>Professional technical kowledge : CISCO in IT (one year)</li>
                                              </ul>
                                              <p> - Program organization: Two semesters per year
                                            Undergraduate</p>
                                            <br>
                                              <br>
                                            <b>Resources:</b>
                                            <ul>
                                              <li>Number of faculty members: 15</li>
                                              <li>Number of technical staff: 03</li>
                                              <li>Internet: Department wide internet service for all computer departement student</li>
                                              <li>Teaching-Learning facilities</li><br>
                                              <li><b>Undergraduate Laboratories:</b><br>
                                                Computer Lab, Network Lab
                                                DBMS Lab, Communications Lab
                                                Electronics & Digital Systems Lab
                                                Microprocessor Lab
                                                Image Processing Lab
                                                Signal Processing Lab
                                                </li>
                                            </ul>
                                            <br>
                                              <br>
                                            <b>Admission:</b><br>
                                            <p>Admission process starts in early Spetember of each year. The local student will be notified through daily newspaper. The International student have to apply through Ethiopian mission located in their country, for further information visit www.DUCoE.et or email us cse@dept.et</p>
                                </div>
                                
                                        <div class="col-sm-6">
                                              
                                
                                              <b>Research Groups:</b><br>
                                            <ul>
                                              <li>Signal Processing </li>
                                       
                                              <li>Multimedia Processing</li>
                                              
                                             
                                            </ul>
                                            <p> -- All labs rooms have internet access except lab 1 </p>
                                            <br>
                                            <b>Extra-curriculum activities:</b><br>
                                            <ul>
                                              <li>Programming contest(comptation)</li>
                                              <li>Project development contest</li>
                                              <li>National wide achievements in programming contest and project</li>
                                              <li>development</li>
                                            </ul>
                                          
                                      </div>

                                  
                                   
                           


                                        
                          
                      </div>
                  </div>
              </div>
            </div>
  </section>
</div>
<?php include('include/script.php');?>
<?php include('include/footer.php');?>

               
   
          

                      


      