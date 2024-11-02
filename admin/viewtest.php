<?php
include("header.php");
include("sidenav.php");
include("config.php");
?>


<section class="content">
      

<div class="card" style="margin-left:330px; margin-top:100px;">
  <div class="card-body">
    <h5 class="card-title">Test</h5>

    <!-- Table with stripped rows -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
    
          <th scope="col">Test</th>
        
          <th scope="col">Action </th>
        
        </tr>
      </thead>
      <tbody>
        <tr>
        
      
        <?php
                            $sql = "select * from tbl_test";
                           
                            $res  = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($res) > 0){
                                  while($data = mysqli_fetch_array($res)){

                                ?>
                                <tr>
                                    <th scope="row"><?php  echo $data['testid'];?></th>
                                
                                    <td><?php  echo $data['title'];?></td>
                                 
                                            
                                    <td><?php  echo $data['desc'];?></td>
                                
                                    <?php
                                echo "<td><a href='edittest.php?testid=".$data['testid']."'><button class='btn btn-warning'>EDIT</button></a></td>";
                                ?>                                     
                                <?php
                                echo "<td><a href='deletetest.php?testid=".$data['testid']."'><button class='btn btn-danger'>DELETE</button></a></td>";
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