<?php
include("header.php");
include("sidenav.php");
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
          <th scope="col">Category Name</th>

        </tr>
      </thead>
      <tbody>
        <tr>
        <?php
                                    include("config.php");
                                    $res=mysqli_query($conn,"SELECT * FROM categories");
                                    while ($row=mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php  echo $row['catid'];?></th>
                                    <td><?php  echo $row['catname'];?></td>
                                    
                                    <?php
                                echo "<td><a href='editcategory.php?catid=".$row['catid']."'><button class='btn btn-warning'>EDIT</button></a></td>";
                                ?>                                     
                                <?php
                                echo "<td><a href='deletecategory.php?catid=".$row['catid']."'><button class='btn btn-danger'>DELETE</button></a></td>";
                                ?> 
                                </tr>
                                <?php
                                }
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
  