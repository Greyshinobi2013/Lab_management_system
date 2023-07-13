
<?php
include('authentication.php');
include('DB/conf.php');
if(isset($_POST['log_out']))
{
   // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);


    // $_SESSION['status']="logged out successfully";
    header('location: ../admin/login.php');
    exit(0);
}


if(isset($_POST['add_student'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   $B_session = $_POST['B_session'];
    $B_year = $_POST['B_year'];
    $sgroup = $_POST['sgroup'];
    $specialization = $_POST['specialization'];
    $user = $_POST['user'];

   if($fname!=NULL && $lname!=NULL && $username!=NULL && $password!=NULL && $email!=NULL &&  $B_year!=NULL && $sgroup!=NULL && $B_session!=NULL && $specialization!= NULL && $user!= NULL){
    $sql2 = "INSERT INTO admin (name,password,email,rol_as) VALUES ('$username','$password','$email','$user')";
    $result1 = mysqli_query($conn,$sql2);
    $id1 = mysqli_query($conn,"select id from admin where name='$username' and email='$email'");
    $id1= mysqli_fetch_array($id1)['id'];
    $sql = "INSERT INTO usera (fname,lname,B_session,B_year,sgroup,specialization,user) VALUES ('$fname','$lname','$B_session','$B_year', '$sgroup','$specialization',$id1)";
    $result = mysqli_query($conn,$sql);
    
    if($result){
      $Sroll = mysqli_insert_id($conn);
      if($Sroll) {
        $code = rand(1,999999);
        $roll= "CSE_".$code."_".$Sroll;
        $query="UPDATE usera SET roll = '".$roll."' WHERE  id ='".$Sroll."'";
        $rse = mysqli_query($conn,$query);
        
    }

           if($rse){
            $_SESSION['status'] = "user added successfully";
            header("location:registered.php");
               }
              else{
                   $_SESSION['status'] = "user regidterition filed";
                   header("location:registered.php");

              }
   }else{
       echo "<div class='alert alert-success'>";
   echo "<strong>Success!</strong> Insert Successfully";
   echo "</div>";
   }
}
}


function imageUpload($fileName, $path)
{
 $errors = array();
    $file = $_FILES[$fileName];
    $file_name = $file['name'];
    $file_size = $file['size'];
    $file_tmp = $file['tmp_name'];
    $file_type = $file['type'];
    $file_ext = strtolower(explode('.', $file_name)[1]);
    $expensions = array("jpeg", "jpg", "png", "pdf","docx","rar","pptx","ppt","zip");
    if (in_array($file_ext, $expensions) === false) {
      $_SESSION['status'] = "extension not allowed, please choose a JPEG or PNG file.";
      echo "<script>window.location.href='Add_Assignement.php';</script>";
    }
   
    if (empty($errors) == true) {
        $uploadPath = $path . $file_name;
        move_uploaded_file($file_tmp, $uploadPath);
        return $uploadPath;
    } else {
     
        return false;
    }
    
}  
    if(isset($_POST['add'])){
        $course_name = $_POST['course_name'];
        $specialization = $_POST['specialization'];
        $sgroup = $_POST['sgroup'];
        $B_year = $_POST['B_year'];
        $B_session = $_POST['B_session'];
        $Assesment = $_POST['assesment_name'];
        $teacher = $_POST['teacher'];
        $sub_date1 = date_create($_POST['sub_date']);
        $sub_date = date_format($sub_date1,"Y/m/d");

        $sub_date2 = date_create($_POST['late_submit']);
        $late_sub_date = date_format($sub_date2,"Y/m/d");

        $dates=date("Y/m/d");
        $cFile = imageUpload("fileToUpload","problem/");
       
       
     
            if (empty($course_name) ||empty($Assesment) || empty($specialization) || empty($B_session) || empty($B_year) || empty($sgroup) ||  empty($cFile)) {
            $_SESSION['status']="Field can't Be empty";
            echo "<script>window.location.href='Add_Assignement.php';</script>";
      
        }
      
        if(!$cFile) {
            $_SESSION['status']="You can upload image or pdf file";
            echo "<script>window.location.href='Add_Assignement.php';</script>";
        }
 
$query ="SELECT * FROM assesment WHERE  course_name =  '$course_name' AND specialization =  '$specialization' AND B_year='$B_year' AND B_session ='$B_session' AND assesment_name='$Assesment' AND teacher_name='$teacher'";
$num = mysqli_query($conn,$query);

if(mysqli_num_rows($num) > 0){
   $_SESSION['status']="Assesment Already Exist";
}

      $Qr1 = "INSERT INTO assesment(course_name,specialization,sgroup,B_year,B_session,assesment_name,teacher_name,dates,duDate,lastSubDate,document)
      VALUES ('$course_name','$specialization','$sgroup','$B_year','$B_session','$Assesment','$teacher','$dates','$sub_date','$late_sub_date','$cFile')";
      mysqli_query($conn,$Qr1);
$success ="Successfully Assesment Created";
echo "<script>window.location.href='Add_Assignement.php';</script>";


}

if(isset($_POST['change_password'])){
    $rol = $_SESSION['auth_user']['user_id'];
  if(isset($_POST['opassword']) && isset($_POST['npassword']) && isset($_POST['cpassword']))
  
  {
    function validate($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $opassword = validate($_POST['opassword']);
    $npassword = validate($_POST['npassword']);
    $cpassword = validate($_POST['cpassword']);
          if(empty($opassword))
          {
            $_SESSION['status'] = "old password is requiered";
            header("location:change_pass.php");
            exit();
          }
            else if (empty($npassword))
            {
              $_SESSION['status'] = "new password is requiered";
              header("location:change_pass.php");
              exit();
  
            }
            else if ($npassword !== $cpassword)
            {
              $_SESSION['status'] = "the conformation password does not match";
              header("location:change_pass.php");
              exit();
  
            }else{
              $opassword = md5($opassword);
              $npassword = md5($npassword);
              $rol = $_SESSION['auth_user']['user_id'];
              $sql5 = "SELECT password from admin where id = '$rol'AND password ='$opassword'";
              $result21 = mysqli_query($conn,$sql5);
            //   echo md5('1234');
              if(mysqli_num_rows($result21) === 1)
         
              {
                $sq_2 = "UPDATE admin SET password ='$npassword' where id = '$rol'";
                 mysqli_query($conn,$sq_2);
                 $_SESSION['status'] = "your password is changed!. ";
                 header("location:login.php");
                 exit();
              }else
              $_SESSION['status'] = "incorrect password";
              header("location:change_pass.php");
              exit();
  
  
        
            }
  
          }
          else{
            $_SESSION['status'] = "password changing filed";
            header("location:change_pass.php");
          
          }
  }
  if (empty($_SESSION['auth'])) {

    echo "<script>window.location.href='index.php';</script>";
    
  }
  
$rol = $_SESSION['auth_user']['user_name'];
if(isset($_POST['add_mark'])){
  // $id = $_REQUEST['id'];
        $specialization = $_POST['specialization'];
        $course_name = $_POST['course_name'];
        $roll =$_POST['roll'];
        $marks = $_POST['marks'];
        $description = $_POST['desc'];

    
  
    
        if( $specialization !=NULL &&  $course_name!=NULL &&  $roll!=NULL &&  $marks!=NULL&& $description!=NULL){

          try{
            if (empty($course_name) ||empty($roll) || empty($specialization) || empty($marks) || empty($description) ) {
        throw new Exception("Field can't Be empty");
      
        }
      
       
 
           
$query ="SELECT * FROM aresult WHERE   specialization =  '$specialization' AND course_name =  '$course_name' AND roll='$roll'";
$num = mysqli_query($conn,$query);

if(mysqli_num_rows($num) > 0){
  $_SESSION['status'] = "result alredy given ";
  header("location:submitedAssignment.php");
}else{
               
                $sql22 = "INSERT INTO aresult (specialization,course_name,roll,marks,description) VALUES ('$specialization ','$course_name',' $roll','$marks','$description')";
            
              
                  $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','give assignment  result  $course_name')");

                $result = mysqli_query($conn,$sql22);
                
                if($result){
                    $_SESSION['status'] = "result insert successfully";
                    header("location:submitedAssignment.php");
                        }
                      else{
                            $_SESSION['status'] = "result insert filed";
                            header("location:result.php");
        
                      } 
                    }

                    }
                    catch(Exception $e){
                      $error = $e->getMessage();
                  }  
                  } 
                
                }

                

  if (empty($_SESSION['auth'])) {

    echo "<script>window.location.href='index.php';</script>";
    
  }
  
$rol = $_SESSION['auth_user']['user_name'];
if(isset($_POST['Addresult'])){
  $id = $_REQUEST['id'];

    $marks = $_POST['marks'];
   

    if($marks!=NULL ){

                $sql = "UPDATE `assignment` SET `marks`='$marks' WHERE ass_id='$id'"; 
              
                  $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','give marks $marks ')");

                $result = mysqli_query($conn,$sql);
                
                if($result){
                    $_SESSION['status'] = "result insert successfully";
                    header("location:submitedAssignment.php");
                        }
                      else{
                            $_SESSION['status'] = "insert result filed";
                            header("location:Resultu.php");
        
                      } 
                    }
                    }

                    if(isset($_POST['requst']))
                    {
                        $rol = $_SESSION['auth_user']['user_name'];
                        if(isset($_SESSION['auth']))
                        {
                            
                               mysqli_query($conn,"INSERT INTO issue_device VALUES('$_SESSION[auth]','$rol','$_POST[Did]','','','')");
                 
                               ?>
                               <script type="text/javascript">
                                   window.location="teacher_request.php"
                               </script>
                               <?php
                        }
                        else{
                            ?>
                            <script type="text/javascript">
                                alert("you need to log in frist to requst a device")
                            </script>
                            <?php
                        }
                    }

                    if (empty($_SESSION['auth'])) {

                      echo "<script>window.location.href='index.php';</script>";
                      
                    }
                    
                  $rol = $_SESSION['auth_user']['user_name'];
                  if(isset($_POST['Update'])){
                    $id = $_REQUEST['id'];
                  
                      $assesment_name = $_POST['assesment_name'];
                      
                      $duDate = $_POST['duDate'];
                      $lastSubDate = $_POST['lastSubDate'];
                    
                    
                      
                  
                      if($assesment_name!=NULL && $duDate!=NULL && $lastSubDate!=NULL){
                  
                                  $sql = "UPDATE `assesment` SET `assesment_name`='$assesment_name',`duDate`='$duDate',`lastSubDate`='$lastSubDate' WHERE AS_id='$id'"; 
                                
                                    $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','update assessment due Dates $duDate ')");
                  
                                  $result = mysqli_query($conn,$sql);
                                  
                                  if($result){
                                      $_SESSION['status'] = "assessment  update successfully";
                                      header("location:Add_Assignement.php");
                                          }
                                        else{
                                              $_SESSION['status'] = "assesment  update filed";
                                              header("location:aupdate_assignment.php");
                          
                                        } 
                                      }
                                      }
?>
