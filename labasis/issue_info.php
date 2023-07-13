<?php 
include('authentication.php');
include('DB/conf.php');
include('include/header.php');
include('include/topnav.php');
include('include/sidbar.php');


?>   


<div class="content-wrapper">
<?php
$rol = $_SESSION['auth_user']['user_name'];
if(isset($_SESSION['auth']))
    {

      if(isset($_POST['dreturn']))
{
   
      
        $_SESSION['Did']=$_POST['Did'];
       $_SESSION['rol_as']=$_POST['rol_as'];
    
         
    $Ve='<p style="color:yellow;background-color:green;">Returned</p>';
    mysqli_query($conn,"UPDATE issue_device SET approve='$Ve' WHERE rol_as='$_SESSION[rol_as]' and Did='$_SESSION[Did]'");
    mysqli_query($conn,"UPDATE stdevice SET quantity = quantity+1 where Did='$_SESSION[Did]'");
    

    $we=mysqli_query($conn,"SELECT quantity from stdevice where Did ='$_SESSION[Did]';");
    while($row=mysqli_fetch_assoc($we))
    {
        if($row['quantity']<=0)
        {
            mysqli_query($conn,"UPDATE stdevice SET Status='not-available' where Did='$_SESSION[Did]';");
        }
        else {
            mysqli_query($conn,"UPDATE stdevice SET Status='available' where Did='$_SESSION[Did]';"); 
            $sql1 = mysqli_query($conn,"INSERT INTO activity (date,name,action) VALUES (NOW(),'$rol','return device id $_SESSION[Did]')");

        }
    }

    ?>


     <?php     
    }
 

?>

 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
           
          </div><!-- /.col -->
          <div class="col-sm-6">
           
            
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <?php
    }
?>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>


 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"> 
            <h1 class="m-0 text-dark"> Student borrowed information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            
              <li class="breadcrumb-item active">issu device</li>
            
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
          
        <?php     
        $c=0;
                      if(isset($_SESSION['auth'])==$_SESSION['auth_user']){
                        $ot="SELECT admin.rol_as,email,issue_device.name,stdevice.Did,dev_name,dev_brand,issue,dev_return FROM admin 
                            INNER JOIN issue_device inner join stdevice inner join usera ON  issue_device.Did=stdevice.Did and
                             admin.name=issue_device.name and admin.id=usera.user WHERE issue_device.approve ='yes' ORDER BY `issue_device`.`dev_return` ASC";
                   
                             $res=mysqli_query($conn,$ot);
                             if(mysqli_num_rows($res)==0){
                              echo "there no bowrowed device";
                          }
                     
              else{
                                                   
        ?>
 <div class='col-sm-12'>
<ol class="breadcrumb float-sm-right">
            <form action=""method="POST">
                    <label for="">enter device Id</label>
                    <input type="text"name="Did" class="form-control"placeholder="enter device Id"require >
                    <label for="">enter users roltype</label>
                    <input type="text"name="rol_as" class="form-control"placeholder="enter enter user_rol"require ><br><br>
                    <button type="submit"name="dreturn" class="btn btn-primary " >returen</button>
                    <a href='javascript:Clickheretoprint()' class='btn btn-info btn-sm' style='float:right;'>Print</a>

            
            </form>
            </ol>
                     
                      
                      </div>
                      <div id='print_content'>
                      <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                              
                                <th>roltype</th>
                                <th>users  name</th>
                                 <th>user email</th>
                                 <th>device ID</th>
                                 <th>device name</th>
                                 <th>device Brand</th>
                                <th>issue date</th>
                                <th>Return Date</th>
                           
                                
                               
                            
                          </tr>
                        </thead>
                    <tbody>
                     
                    <?php           
                      }
                       
                    while ($filter=mysqli_fetch_array($res)) {
                        $d=date("Y-m-d");
                        if($d>$filter['dev_return']){
                            $c=$c+1;
                            $V='<p style="color:yellow;background-color:red;">EXPIRED</p>';
                            mysqli_query($conn,"UPDATE issue_device SET approve='$V' WHERE dev_return ='$filter[dev_return]' AND approve='yes' LIMIT $c;");
                            echo $d;
                        
                        }


                  
                        echo "<tr class='success'>";
                        echo "<td>".$filter['rol_as']."</td>";
                        echo "<td>".$filter['name']."</td>";
                        echo "<td>".$filter['email']."</td>";
                        echo "<td>".$filter['Did']."</td>";
                        echo "<td>".$filter['dev_name']."</td>";
                        echo "<td>".$filter['dev_brand']."</td>";
                        echo "<td>".$filter['issue']."</td>";
                        echo "<td>".$filter['dev_return']."</td>";
            
                      
                      
                        echo "</tr>";

                                      }
                                            
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
      </section>
  </div>
<?Php
include('include/footer.php');?>