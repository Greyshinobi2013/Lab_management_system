
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
if (empty($_SESSION['auth'])) {

    echo "<script>window.location.href='index.php';</script>";
    
  }
  
  $rol = $_SESSION['auth_user']['user_name'];
if(isset($_POST['add_device'])){

    $dev_name = $_POST['dev_name'];
    $dev_brand = $_POST['dev_brand'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
    $dev_type = $_POST['dev_type'];
    $time = $_POST['time'];
    $labn = $_POST['labn'];
    $Lab_asis_name = $_POST['Lab_asis_name'];
    $dev_modal = $_POST['dev_modal'];
    $serail_number = $_POST['serail_number'];
    $dev_desc = $_POST['dev_desc'];
   

                if($dev_name!=NULL && $dev_brand!=NULL && $quantity!=NULL && $status!=NULL&& $dev_type!=NULL && $labn!=NULL&& $Lab_asis_name!=NULL && $time!=NULL   && $dev_modal!=NULL && $dev_desc!=NUll){
 
                  $query ="SELECT * FROM stdevice WHERE  serail_number =  '$serail_number'";
                  $num = mysqli_query($conn,$query);
                  
                  if(mysqli_num_rows($num) > 0){
                    $_SESSION['status'] = "device Already registered please try agin";
                    header("location:lab_device.php");
                    
                  }else{
                $sql = "INSERT INTO stdevice (dev_name,dev_brand,quantity,status,dev_type,labn,Lab_asis_name,time,dev_modal,serail_number,dev_desc) 
                VALUES ('$dev_name','$dev_brand','$quantity','$status','$dev_type','$labn', '$Lab_asis_name','$time','$dev_modal','$serail_number','$dev_desc')";
                 $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','add device name $dev_name ')");

                $result = mysqli_query($conn,$sql);
                
                if($result){
                    $_SESSION['status'] = "device added successfully";
                    header("location:lab_device.php");
                       }
                      else {
                           $_SESSION['status'] = "user regidterition filed";
                           header("location:registered.php");
        
                      } }
                    }
                  }
                    if(isset($_POST['change_password'])){
                      $rol = $_SESSION['auth_user']['user_id'];
                      $rl = $_SESSION['auth_user']['user_name'];
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
                                   $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rl','change password')");

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
if(isset($_POST['update_device'])){
  $id = $_REQUEST['id'];

    $dev_name = $_POST['dev_name'];
    
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
    $dev_type = $_POST['dev_type'];
    $time = $_POST['time'];
    $labn = $_POST['labn'];
    $Lab_asis_name = $_POST['Lab_asis_name'];
  
    $dev_desc = $_POST['dev_desc'];
    

    if($dev_name!=NULL && $quantity!=NULL && $status!=NULL&& $dev_type!=NULL && $labn!=NULL&& $Lab_asis_name!=NULL && $dev_desc!=NUll){

                $sql = "UPDATE `stdevice` SET `dev_name`='$dev_name',`quantity`='$quantity',`status`='$status',`dev_type`='$dev_type',`labn`='$labn',`Lab_asis_name`='$Lab_asis_name',`time`='$time',`dev_desc`='$dev_desc' WHERE Did='$id'"; 
              
                  $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','update device name $dev_name ')");

                $result = mysqli_query($conn,$sql);
                
                if($result){
                    $_SESSION['status'] = "device update successfully";
                    header("location:lab_device.php");
                        }
                      else{
                            $_SESSION['status'] = "device  update filed";
                            header("location:D_update.php");
        
                      } 
                    }
                    }

?>