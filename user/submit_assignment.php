<?php 
include('authentication.php');
include('DB/conf.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');
?>
<div class="content-wrapper">
<?php

function imageUpload($fileName, $path)
{
 $errors = array();
    $file = $_FILES[$fileName];
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp = $file['tmp_name'];
    $file_type = $file['type'];
    $file_ext = strtolower(explode('.', $file_name)[1]);
    $expensions = array("jpeg", "jpg", "png", "pdf","docx","rar","doc","PPt","pptx","pptx","ppt","zip");
    if (in_array($file_ext, $expensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }
    if (empty($errors) == true) {
        $uploadPath = $path . $file_name;
        move_uploaded_file($file_tmp, $uploadPath);
        return $uploadPath;
    } else {
        return false;
    }
}  

if (empty($_SESSION['auth'])) {

  echo "<script>window.location.href='index.php';</script>";
  
}

$rol = $_SESSION['auth_user']['user_email'];
$ro = $_SESSION['auth_user']['user_name'];
  if(isset($_POST['submit'])){
      $title = $_POST['title'];
      $description = $_POST['description'];
      $ass_id = $_POST['ass_id'];
      
      $dates=date("Y/m/d");
      $cFile = imageUpload("fileToUpload","Assignment_doc/");
      try{
          if (empty($title) || empty($description) || empty($ass_id) ) {
      throw new Exception("Field can't Be empty");
      }
      $fileName= $_FILES['fileToUpload']['name'];
      if(strlen($fileName)>0){
          if(!$cFile){
              throw new Exception("you can upload other extintion file like image PDF");
          }else{

$query ="SELECT * FROM assignment WHERE  assessment_id ='$ass_id' AND email='$rol'";
$total = mysqli_query($conn,$query);

if(mysqli_num_rows($total) > 0){
  throw new Exception("you Already submit Assignment\nyou can Edite or delete");
}
    $Qr1 = "INSERT INTO assignment(title,description,upload_document,upload_date,assessment_id,email)
    VALUES ('$title','$description','$cFile','$dates','$ass_id','$rol')";
     $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$ro','submit assignment title $title')");
    mysqli_query($conn,$Qr1);
}
}else{
  throw new Exception("your document file must be uploaded");
}

$success ="Successfully Assesment submited";
echo "<script>window.location.href='new_assignment.php';</script>";
} catch(Exception $e){
  $error = $e->getMessage();
}

}
?>


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
              <li class="breadcrumb-item active">submit assignment page</li>
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
                         <h3 class="card-title">submit assignment Here </h3>
                         <a href="new_assignment.php"class="btn btn-danger btn-sm float-right">Back</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row  justify-content-center">
                                <div class="col-md-6">
                                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        


                                    <div class="form-group">

                                        <label  for="title">Assessment Name <span class="required"style="color:red">*</span>

                                        </label>
                                        
                                        <select class="form-control" name="ass_id">
                                        
                                            
                                            <?php
                                          $qr = mysqli_query($conn,"SELECT * FROM admin WHERE email ='$rol'");
                                          $qr = mysqli_query($conn,"SELECT * FROM usera ");
                                          $res = mysqli_fetch_array($qr);
                                          $currentDate = date("Y/m/d");
                                          $sgroup = $res[6];
                                          $specialization = $res[7];
                                          $y = mysqli_query($conn,"SELECT * FROM assesment WHERE  duDate>='$currentDate'");
                                          // specialization ='$specialization' AND sgroup ='$sgroup' AND

                                          while ($rr = mysqli_fetch_array($y)){

                                            ?>
                                    <option value ="<?php echo $rr['AS_id']?>">
                                    <?php echo $rr['assesment_name']?></option>
                                    

                                            <?php
                                          }?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                    <label  for="title">Assignment Title<span class="required"style="color:red">*</span>
                                        </label>
                                        &nbsp;&nbsp;&nbsp;
                                      
                                        <input type="text" class="form-control" name="title" placeholder="title">
                                        </div>


                                        <div class="form-group">
                                        <label for="description" >Description:</label>
                                        <textarea class= "resizable_textarea form-control" rows="4"   name ="description" id ="description" placeholder="writee Description here...."  > </textarea>
                                      
                                    </div>
                                    <br>
                                    <center>
                                    <div class="form-group">

                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <span class="btn btn-primary btn-file">
                                        <span class="fileupload-new"> Assignment Documents</span>

                                        <input type="file" name="fileToUpload"/></span>
                                        <span class="fileupload-preview"></span>
                                      


                                    </div>
                                    <br>
                                    <div class="ln_solid"></div>


                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <input type="submit" class="btn btn-success" value="Submit"
                                              name="submit"/>


                                        
                                        </center>

                                        
                                    </div>
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
