<!-- Modal -->
<div class="modal fade" id="delete_device" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete_device">Add teachers</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <div class="modal-body">
         <form action="code.php" method ="POST">

        <div class = "alert alert-danger">
      
      <input type="text"value ="  <?php echo $id;?>"class="form-control">
      <p>are you sure</p>
      </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="delet_device" class="btn btn-primary">yes delete!.</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ################################################# -->

<!-- Modal -->
<div class="modal fade" id="editebtn" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete_device">Add teachers</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <div class="modal-body">
         <form action="code.php" method ="POST">

        <div class = "alert alert-danger">
      
      
      <p>are you sure</p>
      </div>
            
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="" class="btn btn-primary">yes delete!.</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################ -->