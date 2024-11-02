
<?php
include("config.php");
if(isset($_POST['submit']))
{   
    $place_id  = $_GET['place_id']; 
    $compname = $_POST['compname'];
    $descp = $_POST['descp'];
    $dates = $_POST['dates'];
    $salary = $_POST['salary'];
    $image = $_FILES['image']['name'];

    if($image != NULL)
    
    {
    
        move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
        $sql = "UPDATE `tbl_placement` SET `compname`='$compname',`descp`='$descp', `dates`='$dates',`salary`='$salary',`image`='$image' WHERE `place_id`='$place_id'";
    }
        else{
            $sql = "UPDATE `tbl_placement` SET `compname`='$compname',`descp`='$descp', `dates`='$dates',`salary`='$salary' WHERE `place_id`='$place_id'";
    
        }
        if(mysqli_query($conn,$sql)){
            header("location:viewplacement.php");
        }else{
            echo "Error".$sql."<br>".mysqli_error($conn);
        }
    }
    








?>

<!-- {
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
    $sql = "UPDATE `tbl_placement` SET `compname`='$compname',`descp`='$descp', `dates`='$dates',`salary`='$salary',`image`='$image' WHERE `place_id`='$place_id'";
}
    else{
        $sql = "UPDATE `tbl_placement` SET `compname`='$compname',`descp`='$descp', `dates`='$dates',`salary`='$salary' WHERE `place_id`='$place_id'";
    }
    if(mysqli_query($conn,$sql)){
        header("location:viewplacement.php");
    }else{
        echo "Error".$sql."<br>".mysqli_error($conn);
    }
    }
} -->
 ?>
   