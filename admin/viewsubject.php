<?php
include("header.php");
include("sidenav.php");
include("config.php");
?>


<section class="content">
      

<div class="card" style="margin-left:330px; margin-top:100px;">
  <div class="card-body">
    <h5 class="card-title">Category</h5>

    <!-- Table with stripped rows -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <!-- <th scope="col">Category </th> -->
          <th scope="col">Course Name</th>
          <th scope="col">Description</th>
          <th scope="col">Image </th>
        
        </tr>
      </thead>
      <tbody>
        <tr>
        
        <?php
                            $sql = "SELECT * FROM  tbl_addsubject ";

                            $res  = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($res) > 0){
                                  while($data = mysqli_fetch_array($res)){

                                ?>
                                <tr>
                                    <th scope="row"><?php  echo $data['subid'];?></th>
                                    <td><?php  echo $data['subname'];?></td>
                                    <td><?php  echo $data['descption'];?></td>
                                    <td><img src="uploads/<?= $data['image']?>" width="90" height="50"></td></td>
                                 
                                   <!-- <td><?php  echo $data['catname'];?> </td>  -->
                                    <?php
                                echo "<td><a href='editsubject.php?subid=".$data['subid']."'><button class='btn btn-warning'>EDIT</button></a></td>";
                                ?>                                     
                                <?php
                               echo "<td><a href='deletesubject.php?subid=".$data['subid']."'><button class='btn btn-danger'>DELETE</button></a></td>";
                               ?> 
                                </tr>
                                <?php
                                }}
                                ?>              
        </tr>
        
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>
</section>
<?php
include("footer.php");
?>