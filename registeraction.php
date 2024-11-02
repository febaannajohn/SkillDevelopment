<?php
include("admin/config.php");
if(isset($_POST['submit']))
{
$reg_name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gen'];
$phone = $_POST['phone'];
$college = $_POST['college'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO `register`(`reg_name`,`address`,`gender`,`phone`,`college`,`email`,`password`) VALUES ('$reg_name','$address','$gender','$phone','$college','$email','$password')";
if(mysqli_query($conn,$sql)){
    header("location:login.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>