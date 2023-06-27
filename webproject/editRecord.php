<?php
include 'dbmsConnect.php';
$id = $_GET['id'];
$sql ="Select * from `user1` where id = $id"; 
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$email = $row ['email'];
$password = $row ['password'];
$repassword = $row ['repassword'];
$age = $row ['age'];
$gender = $row ['gender'];
$language = $row ['language'];

if(isset($_POST['submit']))  {
    $id = mysqli_real_escape_string( $con,$_POST['id']);
    $email = mysqli_real_escape_string( $con,$_POST['email']);
    $password = mysqli_real_escape_string( $con,$_POST['password']);
    $repassword = mysqli_real_escape_string( $con,$_POST['repassword']);
    $age = mysqli_real_escape_string( $con,$_POST['age']);
    $gender = mysqli_real_escape_string( $con,$_POST['gender']);
    $language = mysqli_real_escape_string( $con,$_POST['language']);

    $sql = "update `user1` set id = $id, email = '$email', password = '$password', repassword = '$repassword', age = '$age', gender = '$gender', language = '$language' where id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
       echo "data updated successfully";
    //    header('location:view.php');
    }
}
    else
    {
        die(mysqli_error($con));
    }



?>




 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" >

    <title>project</title>
  </head>
  <body>

   <div class="container my-5" >
   <form method="post">
   <h3>Employee Data </h3>
  <div class="mb-3 form-group my-5">
    <label  >Employee Id</label>
    <input type="text" class="form-control" placeholder = "Enter your id" name = "emp_id" value =<?php echo $emp_id; ?> >
    </div>

    <div class="mb-3 form-group">
    <label  >Employee Name</label>
    <input type="text" class="form-control" placeholder = "Enter your name" name = "emp_name" value =<?php echo $emp_name; ?>>
    </div>

    <div class="mb-3 form-group">
    <label  >Age</label>
    <input type="text" class="form-control" placeholder = "Enter your age" name = "age" value =<?php echo $age; ?>>
    </div>

    <div class="mb-3 form-group">
    <label  >Salary</label>
    <input type="text" class="form-control" placeholder = "Enter your salary" name = "salary"value =<?php echo $salary; ?> >
    </div>

  <button type="submit" name = "submit" class="btn btn-success">update</button>
</form>
   </div>

    </body>
</html>