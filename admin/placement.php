<?php
include("header.php");

include("sidenav.php");
include("config.php");
?>


<div class="col-lg-6 pl-5 pt-5 " style="margin-left:230px; margin-top:130px;">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Placement</h5>

    <!-- Vertical Form -->
    <form action="actionplacement.php" method="POST" enctype="multipart/form-data">

    
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Company Name</label>
        <input type="text" name="compname" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Company Logo</label>
        <input type="file" name="image" class="form-control" id="inputNanme4">
      </div>

      <div class="col-12">
        <label for="inputNanme4" class="form-label">Description</label>
        <input type="text" name="descption" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputNanme4" class="form-label">dates</label>
        <input type="date" name="date" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Salary</label>
        <input type="text" name="salary" class="form-control" id="inputNanme4">
</div>
      <div class="text-center">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        
      </div>
    </form><!-- Vertical Form -->

  </div>
</div>
        

 
      


<?php
include("footer.php");
?>
