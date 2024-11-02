<?php

include("config.php");
if (isset($_POST['submit'])) 
$taskid=$_GET['taskid'];


    $task = $_POST['task'];

        $sql = "UPDATE `tbl_task` SET `task`='$task' WHERE `taskid`='$taskid'";
        if (mysqli_query($conn, $sql)) {
            header("location:viewtask.php");
        

        } else {
            echo "error".$sql." <br>".mysqli_error($conn);
        }
 
?>

   

