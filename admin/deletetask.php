<?php
include('config.php');
$taskid=$_GET['taskid'];
$sql="DELETE FROM `tbl_task` WHERE `taskid`='$taskid'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewtask.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>