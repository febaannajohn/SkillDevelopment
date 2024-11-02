<?php
include("config.php");
if(isset($_POST['submit']))
{    

$task = $_POST['task'];


 $subid = $_POST['subname'];


$sql = "INSERT INTO `tbl_task`(`task`,`subid`) VALUES ('$task','$subid')";
if(mysqli_query($conn,$sql)){
    header("location:viewtask.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>