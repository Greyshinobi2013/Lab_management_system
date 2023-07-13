
<?php
include('authentication.php');
include('DB/conf.php');
if(isset($_POST['log_out']))
{
   // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);


    // $_SESSION['status']="logged out successfully";
    header('location:login.php');
    exit(0);
}

if(isset($_POST['add_Lab'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $labn = $_POST['labn'];
    $password = $_POST['password'];
    $pass=md5($password);
    $email = $_POST['email'];
   
 

   if($fname!=NULL && $lname!=NULL && $username!=NULL && $password!=NULL){
    
    $query ="SELECT * FROM admin WHERE  email =  '$email'";
    $num = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($num) > 0){
      $_SESSION['status'] = "user email Already registered please try other email";
      header("location:labe.php");
      
    }else{
    $sql2 = "INSERT INTO admin (name,email,password,rol_as) VALUES ('$username','$email','$pass','2')";
    $result1 = mysqli_query($conn,$sql2);
    $id1 = mysqli_query($conn,"select id from admin where name='$username' and email='$email'");
    $id1= mysqli_fetch_array($id1)['id'];
    $sql = "INSERT INTO laba (fname,lname,gender,labn,user) VALUES ('$fname','$lname','$gender','$labn','$id1')";
    $result = mysqli_query($conn,$sql);
    
    if($result){
      $Sroll = mysqli_insert_id($conn);
      if($Sroll) {
        $code = rand(1,999999);
        $troll= "CSE_".$code."_".$Sroll;
        $query="UPDATE laba SET troll = '".$troll."' WHERE  tid ='".$Sroll."'";
        $rse = mysqli_query($conn,$query);
        
    }

           if($rse){
            $_SESSION['status'] = "user added successfully";
            header("location:labe.php");
               }
              else{
                   $_SESSION['status'] = "user regidterition filed";
                   header("location:labe.php");

              }
   }else{
       echo "<div class='alert alert-success'>";
   echo "<strong>Success!</strong> Insert Successfully";
   echo "</div>";
   }
}
   }
}


if(isset($_POST['add_student'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender =$_POST['gender'];
    // $roll =$_POST['roll'];
    $type =$_POST['type'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
     $pass=md5($password);
   $B_session = $_POST['B_session'];
    $B_year = $_POST['B_year'];
    $sgroup = $_POST['sgroup'];
    $specialization = $_POST['specialization'];


   if($fname!=NULL && $lname!=NULL  && $username!=NULL  && $email!=NULL && $pass!=NULl &&  $B_year!=NULL
    && $sgroup!=NULL && $B_session!=NULL && $specialization!= NULL ){

      $query ="SELECT * FROM admin WHERE  email =  '$email'";
      $num = mysqli_query($conn,$query);
      
      if(mysqli_num_rows($num) > 0){
        $_SESSION['status'] = "email Already registered please try other email";
        header("location:registered.php");
        
      }else{
    $sql2 = "INSERT INTO admin (name,email,rol_as,password) VALUES ('$username','$email','3','$pass')";
    $result1 = mysqli_query($conn,$sql2);
    $id1 = mysqli_query($conn,"select id from admin where name='$username' and email='$email'");
    $id1= mysqli_fetch_array($id1)['id'];
    $sql = "INSERT INTO usera (fname,lname,gender,type,B_session,B_year,sgroup,specialization,user) 
    VALUES ('$fname','$lname','$gender','$type','$B_session','$B_year', '$sgroup','$specialization',$id1)";
    $result = mysqli_query($conn,$sql);
    
    if($result){
    
            $_SESSION['status'] = "user added successfully";
            header("location:registered.php");
               }
              else{
                   $_SESSION['status'] = "user regidterition filed";
                   header("location:registered.php");

              }
   }
}
    }


if(isset($_POST['update'])){

      $id3 = $_REQUEST['id'];

    $B_year = $_POST['B_year'];
    $sgroup = $_POST['sgroup'];
    $specialization = $_POST['specialization'];
    if( $B_year!=NULL&&$sgroup  && $specialization!= NULL){
    $sql = "UPDATE `usera` SET `B_year`='$B_year',`sgroup`='$sgroup',`specialization`='$specialization' where id='$id3'";
    $result = mysqli_query($conn,$sql);
    
    if($result){
 
            $_SESSION['status'] = "user update successfully";
            header("location:registered.php");
               }
              else{
                   $_SESSION['status'] = "user update filed";
                   header("location:registered.php");

              }
   }else{
       echo "<div class='alert alert-success'>";
   echo "<strong>Success!</strong> update Successfully";
   echo "</div>";
   }
}

if(isset($_POST['tupdate'])){

  $id3 = $_REQUEST['id'];

$type = $_POST['type'];
$qualification = $_POST['qualification'];
$status = $_POST['status'];
if( $type!=NULL&&$qualification  && $status!= NULL){
$sql = "UPDATE `teachers` SET `type`='$type',`qualification`='$qualification',`status`='$status' where tid='$id3'";
$result = mysqli_query($conn,$sql);

if($result){

        $_SESSION['status'] = "teacher update successfully";
        header("location:te.php");
           }
          else{
               $_SESSION['status'] = "user update filed";
               header("location:te.php");

          }
}else{
   echo "<div class='alert alert-success'>";
echo "<strong>Success!</strong> update Successfully";
echo "</div>";
}
}

if(isset($_POST['lupdate'])){

  $id3 = $_REQUEST['id'];


$labn = $_POST['labn'];
if($labn!=NULL){
$sql = "UPDATE `laba` SET `labn`='$labn' where laba.tid='$id3'";
$result = mysqli_query($conn,$sql);

if($result){

        $_SESSION['status'] = "lab assistant lab name update successfully";
        header("location:labe.php");
           }
          else{
               $_SESSION['status'] = "user update filed";
               header("location:labe.php");

          }
}else{
   echo "<div class='alert alert-success'>";
echo "<strong>Success!</strong> update Successfully";
echo "</div>";
}
}

if(isset($_POST['Update'])){

      $id2 = $_REQUEST['id'];
      $course_code = $_POST['course_code'];
      $year = $_POST['year'];
      $credit = $_POST['credit'];
      if($course_code!=NULL  && $year!= NULL&& $credit!=NULL){
      $sql = "UPDATE `course` SET `course_code`='$course_code',`year`='$year',`credit`='$credit' where co_id='$id2'";
      $result = mysqli_query($conn,$sql);

    
    if($result){
 
            $_SESSION['status'] = "user update successfully";
            header("location:insert_course.php");
               }
              else{
                   $_SESSION['status'] = "user update filed";
                   header("location:insert_course.php");

              }
   }else{
       echo "<div class='alert alert-success'>";
   echo "<strong>Success!</strong> update Successfully";
   echo "</div>";
   }
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

        }else{
          $_SESSION['status'] = "password changing filed";
          header("location:change_pass.php");
        
        }
}



$rol = $_SESSION['auth_user']['user_name'];
if(isset($_POST['add_course'])){

  $course_code = $_POST['course_code'];
  $course_name = $_POST['course_name'];
  $type = $_POST['type'];
  $year = $_POST['year'];
  $credit = $_POST['credit'];
  

              if( $course_code!=NULL &&  $course_name!=NULL && $type!=NULL &&  $year !=NULL&& $credit!=NULL ){

              $sql = "INSERT INTO course (course_code,course_name,type,year,credit) 
              VALUES ('$course_code','$course_name','$type','$year','$credit')";
               $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','add course name $course_name')");

              $result = mysqli_query($conn,$sql);
              
              if($result){
                  $_SESSION['status'] = "course added successfully";
                  header("location:insert_course.php");
                     }
                    else{
                         $_SESSION['status'] = "course regidterition filed";
                         header("location:inser_course.php");
      
                    } }
                  }

if(isset($_POST['notice']))
  {
    
    $title=$_POST['title'];
    $message=$_POST['message'];
    $date=date_creat();
    $time=date_format($date,'Y-m-d:H:i:s');
    if($title!=NULL && $message!=NULL ){
    $sql = "INSERT INTO notice(title,message,time) VALUES('$title','$message','$time')";
    $result=mysqli_query($conn,$sql);
    if($result)
{
    echo "notice Inserted Successfully ";
}else{
    echo"please try again";
}   
  }
}
     


if(isset($_POST['te_add'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $pass=md5($password);
  
  $type = $_POST['type'];
 $qualification = $_POST['qualification'];


  $status = $_POST['status'];


     if($fname!=NULL && $lname!=NULL && $type!=NULL && $qualification!=NULL && $status!= NULL&& $password!= NULL){
       
   $query ="SELECT * FROM admin WHERE  email =  '$email'";
   $num = mysqli_query($conn,$query);
   
   if(mysqli_num_rows($num) > 0){
     $_SESSION['status'] = "user email Already registered please try other email";

     header("location:te.php");
   }else{
       $sql2 = "INSERT INTO admin (name,email,password,rol_as) VALUES ('$username','$email','$pass','1')";
       $result1 = mysqli_query($conn,$sql2);
       $id1 = mysqli_query($conn,"select id from admin where name='$username' and email='$email'");
       $id1= mysqli_fetch_array($id1)['id'];

  $sql = "INSERT INTO teachers (fname,lname,type,qualification,status,user) VALUES ('$fname','$lname','$type','$qualification','$status','$id1')";
  $result = mysqli_query($conn,$sql);
  if($result){
         $roll = mysqli_insert_id($conn);
         if($roll) {
           $code = rand(1,999999);
           $Troll= "CSE_".$code."_".$roll;
           $query="UPDATE teachers SET Troll = '".$Troll."' WHERE  tid ='".$roll."'";
           $rse = mysqli_query($conn,$query);

           if($rse){
            $_SESSION['status'] = "user added successfully";
            header("location:te.php");
               }
              else{
                   $_SESSION['status'] = "user regidterition filed";
                   header("location:te.php");

              }

      
       }
  }else{
    echo "<div class='alert alert-success'>";
         echo "<strong>Success!</strong> Insert Successfully";
         echo "</div>";
  }
}
}
}


if(isset($_POST['sregister'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
 


 if($fname!=NULL && $lname!=NULL&& $gender!=NULL){
  

  
  $sql = "INSERT INTO student (fname,lname,gender) VALUES ('$fname','$lname','$gender')";
  $result = mysqli_query($conn,$sql);
  
  if($result){
    $Sroll = mysqli_insert_id($conn);
    if($Sroll) {
      $code = rand(1,999999);
      $roll1= "CSE_".$code."_".$Sroll;
      $query="UPDATE student SET roll1 = '".$roll1."' WHERE  sid ='".$Sroll."'";
      $rse = mysqli_query($conn,$query);
      
  }

         if($rse){
          $_SESSION['status'] = "user added successfully";
          header("location:student.php");
             }
            else{
                 $_SESSION['status'] = "user regidterition filed";
                 header("location:student.php");

            }
 }else{
     echo "<div class='alert alert-success'>";
 echo "<strong>Success!</strong> Insert Successfully";
 echo "</div>";
 }
}
 }


?>