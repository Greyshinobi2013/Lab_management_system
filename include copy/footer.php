
 <!-- /.content-wrapper -->
 <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="http://solomon.project">final project</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     
  
      <button><a href="login.php" class="btn btn-primary btn-black" >login</a></button>
      <button><a href="notice.php" class="btn btn-primary btn-black" >notice</a>
 
           
              <?php
                $cod = mysqli_query($conn,"SELECT * FROM notice" );
                $cod = mysqli_num_rows($cod);
                ?>
               <h3 class="badge badge-danger"><?php echo  $cod; ?></h3>

               
            
    
    
    </button>
  
      <button><a href="../user/login.php" class="btn btn-primary btn-black" >signup</a></button>
      <button><a href="contact.php" class="btn btn-primary btn-black" >contact</a></button>
      <button><a href="about.php" class="btn btn-primary btn-black" >about</a></button>
    </div>
  </footer>
</div>
</body>
</html>
