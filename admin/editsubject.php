<?php
include("header.php");
include('config.php');
?>


<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ADD AGENT</h2>
            </div>
            
            
       
           

            
            <!-- Masked Input -->
            <div class="row clearfix" style="margin-left:80px; margin-top:130px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <form action="editactsubject.php?subid=<?php echo $_REQUEST['subid']?>" method="POST" enctype="multipart/form-data" >
                    <?php
                    include('config.php');
                    $subid =$_GET['subid'];
                    $sql="SELECT * FROM `tbl_addsubject` WHERE subid='$subid'";

                  
                    $res=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?> 
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">

                                
                                   
                                    <div class="col-md-3">
                                        <b>Course Name</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input name="subname" value="<?php echo $row['subname'];?>" type="text" class="form-control date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <b>Description</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input name="descption" value="<?php echo $row['descption'];?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <b>Image</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="file"  name="image" value="<?php echo $row['image'];?>"  >
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
  