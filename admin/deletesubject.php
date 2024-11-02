<?php
include('config.php');
$subid =$_GET['subid'];
$sql="DELETE FROM `tbl_addsubject` WHERE `subid`='$subid '";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewsubject.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>