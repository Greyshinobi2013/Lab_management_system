<?php 

include('DB/conf.php');



?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <center><h1 class="m-0 text-dark"></h1></center> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">notice from admin </li>
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
                         <h3 class="card-title">Computer Science and Engineering Notice Bord </h3>
                  
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            
                             <table id="" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                            
                                <th>Notice Titele</th>
                                <th>Message from department head</th>
                                <th>Notice posted at</th>
                               
                             
                                
                                
                                
                                  
                                </tr>
                                </thead>
                                <tbody>
                                  <?php

                                        $other=mysqli_query($conn,"SELECT * FROM notice");


                                          while ($filter=mysqli_fetch_array($other)) {
                                              
                                            echo "<tr class='success'>";
                                          
                                            echo "<td>".$filter['title']."</td>";
                                            echo "<td>".$filter['message']."</td>";
                                            echo "<td>".$filter['time']."</td>";
                                           
                                       
                                            

                                                  echo "</tr>";
                                                
                                                  

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
         </div>
   
</section>
          

                      

</div>

      
<?php include('include/script.php');?>
<?php include('include/footer.php');?>