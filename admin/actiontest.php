<?php
include("config.php");
if(isset($_POST['submit']))
{    
$title = $_POST['title'];
$desc = $_POST['desc'];


$sql = "INSERT INTO `tbl_test`(`title`,`desc`) VALUES ('$title','$desc')";

if(mysqli_query($conn,$sql)){
    header("location:viewtest.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>