<?php
include('config.php');
$place_id  =$_GET['place_id'];
$sql="DELETE FROM `tbl_placement` WHERE `place_id`='$place_id'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewplacement.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>