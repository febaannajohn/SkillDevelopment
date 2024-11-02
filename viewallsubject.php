<?php

include('admin/config.php');
?>


<?php
include("header.php");

include("sidebar.php");
?>
<!DOCTYPE html>
<html lang="en">


   
<head>
  <style>
/* Sidebar */
        .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0; /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
        }
        
        @media (max-width: 991.98px) {
        .sidebar {
        width: 100%;
        }
        }
        .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }
        
        .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }
        </style>
</head>

<section id="">


<main style="margin-top: 58px;">
    <div class="container  ">
          
        <div class="row" style="margin-left:140px; margin-top:78px;">
        <div class="col-md-3 pl-5" >
         
            <img src="co.png" height="145rem;" alt=""
            loading="lazy" />
        </div>
        <div class="col-md-8">
                    <h3>Course Tutorial</h3>
                    <h5>@Noscetech 322K subscribers 352 videos</h5>
                    <p>Subscribe to Kerala's top tech-career YouTube channel and gain access to free programming tutorials and tech-career videos in Malayalam. This channel will help you gain skills and knowledge to build a high income career in the IT field. 

                        <p>Enroll in our 6-month online training Intenship, 'Nosce', to learn coding and other skills in an Work environment by paying the low training fee with placement.</p>
                </div>
            
       </div>
       </div>
       </main>
       </section> 
     
        
     
            
            
            
                <section id="popular-courses1" class="courses">
    


<div class="section-title" style="margin-left:247px; margin-top:128px;"> 
         
          <h3>Popular Web Design Courses</h3>
        </div>
    <div class="row mt-4"  style="margin-left:247px; margin-top:128px;">  



    <?php

$sql = "SELECT tbl_addsubject.*, categories.catname
from tbl_addsubject
inner join categories on categories.catid = tbl_addsubject.catid
where tbl_addsubject.catid = 2";
$res  = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0){
  while($data = mysqli_fetch_array($res)){
   ?>
        <div class="col-md-3 mt-5 ml-5 mr-3">
        <div class="card" p-3 style="width: 15rem;">
           
        
        <iframe width="230" height="180" src="<?php  echo $data['video'];?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <!-- <td><img src="admin/uploads/<?= $data['image']?>" width="200" height="90" align="center"></td></td>  -->
           <div class="card-body">
              <h3 align ="center"class="card-title"><?php  echo $data['subname'];?> </h3>
              <h5 align="center" class="card-title"><?php  echo $data['descption'];?></h5>
         
             </div>
</div>
   </div>

   <?php
            
          }
}
      
       ?>

</section>



<section id="popular-courses2" class="courses">
    


    <div class="section-title" style="margin-left:247px; margin-top:30px;">
             
              <h3>Popular Full Stack Developer Courses</h3>
            </div>
        <div class="row mt-4" style="margin-left:247px; margin-top:128px;">
    
    
    
        <?php
    
    $sql = "SELECT tbl_addsubject.*, categories.catname
    from tbl_addsubject
    inner join categories on categories.catid = tbl_addsubject.catid
    where tbl_addsubject.catid = 3";
    $res  = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
      while($data = mysqli_fetch_array($res)){
    
    ?>
    
            <div class="col-md-3 mt-5 ml-5 mr-5">
            <div class="card" p-3 style="width: 15rem;">
            <iframe width="230" height="180" src="<?php  echo $data['video'];?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<!--      
            <td><img src="admin/uploads/<?= $data['image']?>" width="200" height="90" align="center"></td></td> -->
               <div class="card-body">
                  <h3 align ="center"class="card-title"><?php  echo $data['subname'];?> </h3>
                  <h5 align="center" class="card-title"><?php  echo $data['descption'];?></h5>
             
                 </div>
    </div>
       </div>
    
       <?php
                
              }
    }
          
           ?>
    </form>
    </section>


    <section id="popular-courses1" class="courses" style="margin-left:247px; margin-top:60px;">
    


    <div class="section-title">
             
              <h3>Popular Software Testing Courses</h3>
            </div>
        <div class="row mt-4">
    
    
    
        <?php
    
    $sql = "SELECT tbl_addsubject.*, categories.catname
    from tbl_addsubject
    inner join categories on categories.catid = tbl_addsubject.catid
    where tbl_addsubject.catid = 5";
    $res  = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
      while($data = mysqli_fetch_array($res)){
       ?>
            <div class="col-md-3 mt-5 ml-5 mr-5">
            <div class="card" p-3 style="width: 15rem;">
               
            
            <iframe width="230" height="180" src="<?php  echo $data['video'];?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <!-- <td><img src="admin/uploads/<?= $data['image']?>" width="200" height="90" align="center"></td></td>  -->
               <div class="card-body">
                  <h3 align ="center"class="card-title"><?php  echo $data['subname'];?> </h3>
                  <h5 align="center" class="card-title"><?php  echo $data['descption'];?></h5>
             
                 </div>
    </div>
       </div>
    
       <?php
                
              }
    }
          
           ?>
    
    </section>
    
    
    
    
 



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    


</body>
</html>





