<?php
include("header.php");
include('config.php');
?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ADD Category</h2>
            </div>
            
            
       
           

            
            <!-- Masked Input -->
            <div class="row clearfix" style="margin-left:430px; margin-top:130px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <form action="editactcategory.php?catid=<?php echo $_REQUEST['catid']?>" method="POST" enctype="multipart/form-data">
                    <?php
                    include('config.php');
                    $catid=$_GET['catid'];
                    $sql="SELECT * FROM `categories` WHERE catid ='$catid'";
                    $res=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?> 
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Name</b>
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input name="catname" value="<?php echo $row['catname'];?>" type="text" class="form-control date">
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
  