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
          <th scope="col">Company Name</th>
          <th scope="col">Description</th>
          <th scope="col">Image </th>
          <th scope="col">Dates </th>
          <th scope="col">Salary </th>
          <th scope="col">Action </th>
        </tr>
      </thead>
      <tbody>
        <tr>
        
        <?php
                            $sql = "SELECT * FROM  tbl_placement";

                            $res  = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($res) > 0){
                                  while($data = mysqli_fetch_array($res)){

                                ?>
                                <tr>
                                    <th scope="row"><?php  echo $data['place_id'];?></th>
                                    <td><?php  echo $data['compname'];?></td>
                                    <td><?php  echo $data['descp'];?></td>
                                    <td><img src="uploads/<?= $data['image']?>" width="50" height="50"></td>></td>
                                 
                                   <td><?php  echo $data['dates'];?> </td>  
                                  <td> <?php  echo $data['salary'];?> </td>  
                                    <?php
                                echo "<td><a href='editplacement.php?place_id=".$data['place_id']."'><button class='btn btn-warning'>EDIT</button></a></td>";
                                ?>                                     
                                <?php
                               echo "<td><a href='deleteplacement.php?place_id=".$data['place_id']."'><button class='btn btn-danger'>DELETE</button></a></td>";
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