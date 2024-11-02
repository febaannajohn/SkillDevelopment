<?php
include("config.php");
if(isset($_POST['submit']))
{    
$compname = $_POST['compname'];

$descption = $_POST['descption'];
$date = $_POST['date'];
$salary = $_POST['salary'];

$image = $_FILES['image']['name'];
  $tmp_image = $_FILES['image']['tmp_name'];

  move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);


$sql = "INSERT INTO `tbl_placement`(`compname`,`image`,`descp`,`dates`,`salary`) VALUES ('$compname','$image','$descption','$date','$salary')";
if(mysqli_query($conn,$sql)){
    header("location:viewplacement.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>