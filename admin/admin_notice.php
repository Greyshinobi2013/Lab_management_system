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
            <h1 class="m-0 text-dark">NOTICE </h1>
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

  <?php
  if(isset($_POST['notice']))
  {
    $title=$_POST['title'];
    $message=$_POST['message'];
    $date=date_create();
    $time=date_format($date,'Y-m-d:H:i:s');

    $sql = "INSERT INTO notice(title,message,time) VALUES('$title','$message','$time')";
    $result=mysqli_query($conn,$sql);
    if($result)
{
    echo "notice Inserted Successfully ";
}else{
    echo"please try again";
}   
  }
  
  
  ?>
  <section class ="content">
  <div class="container">
                   <form action="admin_notice.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                             <div class="form-group">
                                    <label  for="title">notice Title<span class="required"style="color:red">*</span>
                                        </label>
                                        &nbsp;&nbsp;&nbsp;
                                      
                                        <input type="text" class="form-control" name="title"  placeholder="title"require>
                                        </div>


                                        <div class="form-group">
                                        <label for="message" >message:</label>
                                        <textarea class= "resizable_textarea form-control" rows="4"   name ="message" id ="message" placeholder="writee notice here...."  > </textarea>
                                        <center><br><button type="submit"name="notice" class="btn btn-primary">Post Notice</button></center>
                                      
                                    </div>
                                    </form>

      
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
                         <h3 class="card-title">notice </h3>
                         <a href="admin_notice.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            
                             <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>No</th>
                                <th>Notice Titele</th>
                                <th>Message from department head</th>
                                <th>Notice posted at</th>
                                <th>Action</th>
                               
                             
                                
                                
                                
                                  
                                </tr>
                                </thead>
                                <tbody>
                                  <?php

                                        $other=mysqli_query($conn,"SELECT * FROM notice");


                                          while ($filter=mysqli_fetch_array($other)) {
                                              
                                            echo "<tr class='success'>";
                                            echo "<td>".$filter['nid']."</td>";
                                            echo "<td>".$filter['title']."</td>";
                                            echo "<td>".$filter['message']."</td>";
                                            echo "<td>".$filter['time']."</td>";
                                           
                                       
                                            echo '<td><a href="update_notice.php?id=' . $filter['nid'] . '"><b class="btn btn-warning">Update</b></a>' ;
                                            echo '<a href="notice_delete.php?id=' . $filter['nid'] . '" onclick=\'return confirm("Are you sure you want to delete this notice?")\'><b class="btn btn-danger">Delete</b></a></td>' ;

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