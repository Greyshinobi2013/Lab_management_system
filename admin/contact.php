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
                            <b></b></center> </h3>
                            
                         </div>
                        <!-- /.card-header -->
                        <center>
                                <div class="col-sm-6 col-sm-offfset-5"style="height:500px;">
                          
                                <h3>Bishoftu <br>
                                    University of Defance<br>
                                    Engineering College<br>
                                    Cell: <br>
                                    Tel: <br>
                                    Fax: 1041<br>
                                    E-mail: cse@ru.ac.bd<br>
                                    URL: www.duce.ac.bd/cse<br>
                </h3>
                                
                             


                                </div>  
                                </center>  
                           


                                        
                          
                      </div>
                  </div>
              </div>
            </div>
  </section>
</div>
<?php include('include/script.php');?>
<?php include('include/footer.php');?>

               
   
          

                      


      