<?php
include('config.php');
$testid=$_GET['testid'];
$sql="DELETE FROM `tbl_test` WHERE `testid`='$testid'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewtest.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>