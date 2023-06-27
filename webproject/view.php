<?php    
include 'dbmsConnect.php';
?>

<!---------------------------------------------------------------------->
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webproject</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" >

</head>
<body>
    <div class="container">
        <button class = "btn btn-primary my-5">
           <a href="signup.php" class="text-light">sign up</a> </button>
        </div>
        <table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Re Password</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Langauge</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql="Select * from `user1`";
$result = mysqli_query($con,$sql);
if($result){

while($row = mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $email=$row['email'];
    $password=$row['password'];
    $repassword=$row['repassword'];
    $age=$row['age'];
    $gender=$row['gender'];
    $language=$row['language'];
    echo '<tr>

    <th scope="row">'.$id.'</th>
    <td>'.$email.'</td>
    <td>'.$password.'</td>
    <td>'.$repassword.'</td>
    <td>'.$age.'</td>
    <td>'.$gender.'</td>
    <td>'.$language.'</td>
    <td>
    <button class = "btn btn-success "><a href="editRecord.php?updateid='.$id.'" class = "text-light">Update</a></button>
    <button class = "btn btn-danger"><a href="deleteRecord.php?deleteid='.$id.'" class = "text-light">Delete</a></button>
</td>
  </tr>';
}
}
?>


  </tbody>
</table>
</body>
</html>