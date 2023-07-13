
<?php
include('authentication_2.php');
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


if(isset($_POST['register_here'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $roll = $_POST['roll'];
    $type = $_POST['type'];
    $B_session = $_POST['B_session'];

    $email = $_POST['email'];
  

    $password = md5($_POST['password']);
   

   if($fname!=NULL && $lname!=NULL && $gender!=NULL && $type!=NULL && $B_session!=NULL && $roll!=NULL && $email!=NULL && $password!=NULL  ){

    $query ="SELECT * FROM usera WHERE  roll =  '$roll'";
    $num = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($num) > 0){
      $_SESSION['auth_status']="user registeration code  Already registered please try again ";
 
      header("location:register.php");
    }else{
    $sql2 = "INSERT INTO admin (name,email,password,rol_as) VALUES ('$username','$email','$password','3')";
    $result1 = mysqli_query($conn,$sql2);
    $id1 = mysqli_query($conn,"select id from admin where name='$username' and email='$email'");
    $id1= mysqli_fetch_array($id1)['id'];
    $sql = "INSERT INTO usera (fname,lname,gender,roll,type,B_session,B_year,sgroup,specialization,user) VALUES ('$fname','$lname','$gender','$roll','$type','$B_session','2nd', 'random','CSE',$id1)";
    $result = mysqli_query($conn,$sql);

           if($result){
            $_SESSION['status'] = "registered successfully";
            header("location:login.php");
               }
              else{
                   $_SESSION['status'] = "user regidterition filed";
                   header("location:registered.php");

              }
   }
  }
}


if(isset($_POST['requst']))
{
    $rol = $_SESSION['auth_user']['user_name'];
    if(isset($_SESSION['auth']))
    {   

    $query ="SELECT quantity FROM stdevice WHERE Did ='$_POST[Did]'";
    $num = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($num))
    if($row['quantity']<=0)
 { 
   $_SESSION['status']="device not found please try other device ";
 
      header("location:lab_device.php");
    }else{
        
           mysqli_query($conn,"INSERT INTO issue_device VALUES('$_SESSION[auth]','$rol','$_POST[Did]','','','')");
           ?>
           <script type="text/javascript">
               window.location="request.php"
           </script>
           <?php
    }
   {
        ?>
        <script type="text/javascript">
            alert("device you request is not found in our system please try again")
            window.location="lab_device.php"
        </script>
        <?php
    }
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
  
          } else{
            $_SESSION['status'] = "password changing filed";
            header("location:change_pass.php");
          
          }
  }
 


?>