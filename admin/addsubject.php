<?php
include("header.php");

include("sidenav.php");
include("config.php");
?>


<div class="col-lg-6 pl-5 pt-5" style="margin-left:230px; margin-top:130px;">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add Subject</h5>

    <!-- Vertical Form -->
    <form action="actionaddsubject.php" method="POST" enctype="multipart/form-data">

    <div class="col-12">

    <label for="inputNanme4" class="form-label">Category </label>    
         <select name="catid" class="form-control" style="background-color:grey">
          <option value="">Select Category</option>
          <h2>
        
          <?php
                                 $res=mysqli_query($conn,"SELECT * FROM categories");
                                 while ($row=mysqli_fetch_array($res)) {
                                   ?>
                           
                   
                             <option value="<?=$row['catid']?>"> <?=$row['catname']?> </option> 
                                
                                
                            
                             <?php
                                }
                                ?>
         </h2>
        </select>
        </h2>
      </div>
                      
     </br>
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Subject Name</label>
        <input type="text" name="subname" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Description</label>
        <input type="text" name="descption" class="form-control" id="inputNanme4">
      </div>
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="inputNanme4">
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
