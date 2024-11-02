<?php
include("header.php");

include("sidenav.php");
?>

<div class="col-lg-6 pl-5 pt-5 " style="margin-left:430px; margin-top:130px;">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Test</h5>

    <!-- Vertical Form -->
    <form action="actiontest.php" method="POST" enctype="multipart/form-data">
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Descrption</label>
        <input type="text" name="desc" class="form-control" id="inputNanme4">
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
