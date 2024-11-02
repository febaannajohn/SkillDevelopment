<?php
include("header.php");

include("sidenav.php");
include("config.php");
?>


<div class="col-lg-6 pl-5 pt-5 " style="margin-left:230px; margin-top:130px;">

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add Task</h5>

    <!-- Vertical Form -->
    <form action="actionaddtask.php" method="POST" enctype="multipart/form-data">


   
              

  
                         
    <div class="col-12">

    <label for="inputNanme4" class="form-label">Select Subject</label>
    
                 
            
         <select name="subname" class="form-control" style="background-color:grey ">
          <option value="">Select Category</option>
          <h2>
        
          <?php
                                 $res=mysqli_query($conn,"SELECT * FROM tbl_addsubject");
                                 while ($row=mysqli_fetch_array($res)) {
                                   ?>
                           
                   
                                
                             <option value="<?=$row['subid']?>"> <?=$row['subname']?> </option> 
                            
                             <?php
                                }
                                ?>
         </h2>
        </select>
        </h2>
      </div>
                      
                  

      
                              </br>
      <div class="col-12">
        <label for="inputNanme4" class="form-label">Task</label>
        <input type="text" name="task" class="form-control" id="inputNanme4">
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
