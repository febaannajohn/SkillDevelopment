<?php



include("config.php");
if(isset($_POST['submit']))
{   
$subid = $_GET['subid']; 
$subname = $_POST['subname'];
$descption = $_POST['descption'];
$image = $_FILES['image']['name'];

if($image != NULL)
{
    
    move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
    $sql = "UPDATE tbl_addsubject SET subname='$subname',descption='$descption',image='$image' WHERE subid='$subid'";
    }
    else{
        $sql = "UPDATE tbl_addsubject SET subname='$subname',descption='$descption' WHERE subid='$subid'";
    }
    if(mysqli_query($conn,$sql)){
        header("location:viewsubject.php");
    }else{
        echo "Error".$sql."<br>".mysqli_error($conn);
    }
}
?>









// include("config.php");
// if(isset($_POST['submit']))
// {   
// $subid = $_GET['subid']; 
// $subname = $_POST['subname'];
// $descption = $_POST['descption'];


// if(isset($bimage)){
//     $image = $_FILES['image']['name'];
//     move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
//     $sql = "UPDATE `tbl_addsubject` SET `subname`='$subname',`descption`='$descption',`image`='$image' WHERE `subid`='$subid'";
//     }
//     else{
//         $sql = "UPDATE `tbl_addsubject` SET `subname`='$subname',`descption`='$descption' WHERE `subid`='$subid'";
//     }
//     if(mysqli_query($conn,$sql)){
//         header("location:viewsubject.php");
//     }else{
//         echo "Error".$sql."<br>".mysqli_error($conn);
//     }
//     }


     
   


