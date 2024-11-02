<?php
include("config.php");
if(isset($_POST['submit']))
{    
$subname = $_POST['subname'];
$desc = $_POST['descption'];

$image = $_FILES['image']['name'];
  $tmp_image = $_FILES['image']['tmp_name'];

  move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
 $catid = $_POST['catid'];

$sql = "INSERT INTO `tbl_addsubject`(`subname`,`descption`,`image`,`catid`) VALUES ('$subname','$desc','$image','$catid')";
if(mysqli_query($conn,$sql)){
    header("location:viewsubject.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>