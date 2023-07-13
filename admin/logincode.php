<?php
session_start();
include('DB/conf.php');
if(isset($_POST['log_into']))
{
                $email =$_POST['email'] ;  
                $pass =$_POST['password'] ; 
                $p= md5($pass);

                $log ="SELECT * FROM admin WHERE email ='$email'AND password ='$p'";
                $logme = mysqli_query($conn,$log);

                if(mysqli_num_rows($logme)>0)
                {
                    foreach($logme as $row)
                    {
                        $user_id = $row['id'];
                          $user_name = $row['name'];
                            $user_email = $row['email'];
                            $rol_as = $row['rol_as'];
                           
                           
                    }
                    $_SESSION['auth']="$rol_as";
                    $_SESSION['auth_user']=[
                        'user_id'=>$user_id,
                        'user_name'=>$user_name,
                        'user_email'=>$user_email,
                        'user_rol'=>$rol_as,
                     
                     


                    ];
                    $_SESSION['status'] = "logged in successfullly";
                    if($rol_as==0){
                        header('location:index.php');
                    }
                    else if($rol_as==1){
                        header('location: ../teach/index.php');
                    }
                    else if($rol_as==2){
                        header('location: ../labasis/index.php');
                    }
                    else if($rol_as==3){
                        header('location: ../user/index.php');
                    }
                    else if($rol_as==4){
                        $_SESSION['status'] = "user not autnticated";
                header('location:../user/login.php');
                    }else
                    {
                         
        $_SESSION['status'] = "access denied";
        header('location:login.php');
        

                    }



                }
                else
                {
                    
                $_SESSION['status'] = "invalied email or passwored";
                header('location:login.php');

                }

        }
        else
        {
        $_SESSION['status'] = "access denied";
        header('location:login.php');
        }

?>