<?php


include('admin/config.php');
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if ($email && $password !="") {
    $res = mysqli_query($conn, "SELECT * FROM `register` WHERE `email`='$email' AND `password` = '$password'");
    $row = mysqli_fetch_array($res);
    if (is_array($row)) {
        $_SESSION['regid'] = $row['regid'];
    }
    $count = mysqli_num_rows($res); //to count
    if ($count > 0) {
        echo "<script>alert('login successful');window.location='index.php'</script>";
        header("location:indexuser.php");
    } 
    else
    {
        $result = mysqli_query($conn,"SELECT * FROM `tbl_admin` WHERE `email`='$email' AND `password` = '$password'");
        $row2 = mysqli_fetch_array($result);
        if(is_array($row2))
        {
            $_SESSION['regid'] = $row2['regid'];
        }
        $count2 = mysqli_num_rows($result);//to count
        if($count2 > 0)
        {
          // $_SESSION['Admin'] = "Admin";
            header("location:admin/index.php");
        }
        else
        {
            echo "<script>alert('invalid user');window.location='login.php'</script>";
        }
    }
}









?>