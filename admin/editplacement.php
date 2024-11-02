<?php
include("header.php");
include('config.php');
?>


<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ADD Placement</h2>
            </div>
            
            
       
           

            
            <!-- Masked Input -->
            <div class="row clearfix" style="margin-left:80px; margin-top:130px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <form action="editactplacement.php?place_id =<?php echo $_REQUEST['place_id']?>" method="POST" enctype="multipart/form-data" >
                    <?php
                    include('config.php');
                    $place_id =$_GET['place_id'];
                    $sql="SELECT * FROM `tbl_placement` WHERE place_id ='$place_id'";

                  
                    $res=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?> 
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">

                                
                                   
                                    <div class="col-md-3">
                                        <b>Company </b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input name="compname" value="<?php echo $row['compname'];?>" type="text" class="form-control date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <b>Company Logo</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input name="image" value="<?php echo $row['image'];?>" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <b>Description</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text"  name="descption" value="<?php echo $row['descp'];?>">
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="col-md-3">
                                        <b>Dates</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="date"  name="date" value="<?php echo $row['dates'];?>"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Salary</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text"  name="salary" value="<?php echo $row['salary'];?>"  >
                                            </div>
                                        </div>
                                    </div>
                                      
                    </div>
                                <button name="submit" class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </form>
                    </div>
                </div>
            </div>
            <!-- #END# Masked Input -->
            
        </div>
    </section>
<?php
include("footer.php");
?>
  