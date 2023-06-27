

<?php
include 'dbmsConnect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $sql = "Delete from `user1` where id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "deleted successfully";
        header('location:view.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
