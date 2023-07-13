
<div class="content-wrapper">

   
<!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Studentes</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form action="code.php" method ="POST">
<div class="modal-body">
<div class="form-group">
        <label for="">device name</label>
    <input type = "text" name="dev_name" class ="form-control" placeholder ="insert device Name">
    </div>
    <div class="form-group">
        <label for="">Device brand:</label>
      
        <select class="form-control" name="dev_brand">
        <option value="select">select device brand</option>
        <option value="Dell">Dell</option>
            <option value="Acer">Acer</option>
            <option value="Toshiba">Toshiba</option>
            <option value="Hp">Hp</option>
            <option value="Lenovo">Lenovo</option>
            <option value="Apple">Apple</option>
            <option value="Asus">Asus</option>
            <option value="other">other</option>

        </select>

    </div>
    <div class="form-group">
        <label for="">Quantity</label>
    <input type = "text" name="fname" class ="form-control" placeholder ="father name">
    </div>
    <div class="form-group">
        <label for="">Device status:</label>
      
        <select class="form-control" name="dev_brand">
        <option value="select">select device status</option>
            <option value="avalible">avalible</option>
            <option value="repairable">repairable</option>
            <option value="Unrepairable">Unrepairable</option>

        </select>

    </div>
    <div class="form-group">
        <label for="">Device type:</label>
      
        <select class="form-control" name="dev_type">
        <option value="select">select device type</option>
                <option value="new">brand new</option>
                <option value="old">get old</option>
                <option value="damaged">damaged</option>

        </select>

    </div>
    <div class="form-group">
        <label for="">Enter Lab Id</label>
    <input type = "number" name="lab_name" class ="form-control" placeholder ="enter lab ID from lab table">
    </div>
    <div class="form-group">
        <label for="">date of Entry</label>
    <input type = "datetime-local" name="time" class ="form-control">
    </div>
    
    <div class="form-group">
        <label for="">device modal</label>
    <input type = "text" name="dev_modal" class ="form-control" placeholder ="enter mdevice modal">
    </div>
    <div class="form-group">
        <label for="">device description</label>
        <div class="controls"><textarea name ="dev_desc"  id ="ckeditor_full" > </textarea>
    </div>
    
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit"name="add_device" class="btn btn-primary">Save</button>
</div>
</form>
</div>
</div>
</div>
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
        <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
    </div>
    </div>
</div>
</div>
<!-- Main content -->
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
            <h3 class="card-title">registered device  </h3>

            <a href=""  data-bs-toggle="modal" data-bs-target="#AddUserModal"class="btn btn-primary btn-sm float-right">Add device into the system</a>
          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>No</th>
                      <th>dName</th>
                      <th>dbrand</th>
                      <th>quantity</th>
                      <th>dstatus</th>
                      <th>dtype</th>
                      <th>modal</th>
                      <th>EDate </th>
                      <th>description</th>
                      <th>lab name</th>
                      <th>Asis Name</th>
                      <th>Action</th>
                      
                    
                    
                      
                    </tr>
                    </thead>
                    <tbody>
                      <?php

                            $other=mysqli_query($conn,"SELECT * FROM stdevice");


                              while ($filter=mysqli_fetch_array($other)) {
                                  
                              
                                      echo "<tr class='success'>";
                                      echo "<td>".$filter['Did']."</td>";
                                      echo "<td>".$filter['dev_name']."</td>";
                                      echo "<td>".$filter['dev_brand']."</td>";
                                      echo "<td>".$filter['quantity']."</td>";
                                      echo "<td>".$filter['status']."</td>";
                                      echo "<td>".$filter['dev_type']."</td>";
                                      echo "<td>".$filter['dev_modal']."</td>";
                                      echo "<td>".$filter['time']."</td>";
                                      echo "<td>".$filter['dev_desc']."</td>";
                                      $p12 = $filter['user'];
                                      $ot=mysqli_query($conn,"SELECT lab_name ,Asis_name FROM lab where id=$p12");
                                      $a4=mysqli_fetch_array($ot);
                                      
                                      echo "<td>".$a4['lab_name']."</td>";
                                      echo "<td>".$a4['Lab_asis_name']."</td>";
                                      ?>
                                 
                                  
                                   <td><a href="dev_update.php?id=<?php echo  $filter['Did'];?>"><b class="btn btn-warning">Update</b></a> ;
                                   <?php
                                   echo '<a href="routine_delete.php?id=' . $filter['Did'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
                                   ?> 
                                  
                                    <?php

                                      echo "</tr>";
                                    
                                      

                          }
                        ?>  
                      </tbody>   
                      <tfoot>
                      <tr>
                      <th>No</th>
                      <th>dName</th>
                      <th>dbrand</th>
                      <th>quantity</th>
                      <th>dstatus</th>
                      <th>dtype</th>
                      <th>modal</th>
                      <th>EDate </th>
                      <th>description</th>
                      <th>lab name</th>
                      <th>Asis Name</th>
                      <th>Action</th>
                      
                      
                                
                                    
                                      
                                
                              
                            
                    
                      
                      
                      
                    </tr>
              </tfoot>  

          </table>
    </div>

        </div>
    </div>
  </div>
</div>
</div>
</section>
</div>
</div>
<?Php