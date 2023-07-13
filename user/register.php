<?php 
include('authentication_2.php');
include('include/header.php');
include('include/topnav.php');



?> 


<div class="content-wrapper">
  
<?php

if(isset($_SESSION['auth_status']))
{
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>ohh!</strong><?php echo $_SESSION['auth_status'];?>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
unset($_SESSION['auth_status']);
}
?>
  <!-- Button trigger modal -->
  
  <!-- Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">rgister here</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method ="POST">
      <div class="modal-body">
      <div class="form-group">
            <label for="">frist name</label>
           <input type = "text" name="fname" class ="form-control" placeholder ="Name">
        </div>
        <div class="form-group">
            <label for="">last name</label>
           <input type = "text" name="lname" class ="form-control" placeholder ="father name">
        </div>
        <div class="form-group">
            <label for="">username</label>
           <input type = "text" name="username" class ="form-control" placeholder ="user name">
        </div>
        <div class="form-group">
            <label for="">Registeration code</label>
           <input type = "text" name="roll" class ="form-control" placeholder ="Enter code that redirect to this page">
        </div>
        <div class="form-group">
        <label for="">gender:</label>
             
                    <select class="form-control" name="gender">
                    <option value="select">select gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
             
              </div>
              <div class="form-group">
   
   <label for="">Type:</label>

       <select class="form-control" name="type">
       <option value="select">select type</option>
           <option value="military">military</option>
           <option value="civilian">civilian</option>
       </select>

 </div>
        <div class="form-group">
            <label for="">year</label>
           <input type = "text" name="B_session" class ="form-control" placeholder ="Enter acadamic Year">
        </div>
      
        <div class="form-group">
            <label for="">Enter email</label>
           <input type = "text" name="email" class ="form-control" placeholder ="enter email...@.com">
        </div>
        <div class="form-group">
            <label for="">password</label>
           <input type = "password" name="password"class ="form-control" placeholder ="enter password">
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="register_here" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?Php
include('include/footer.php');?>