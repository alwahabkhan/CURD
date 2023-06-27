<!-- 
// include 'dbmsConnect.php';
// if($_POST['submit']){

//   $email = $_POST['email'];
//   $password = $_POST['password'];
//   $repassword = $_POST['repassword'];


//   $sql = INSERT INTO `user1` (`email`, `password`, `repassword`) 
//   VALUES ('$email', '$password', '$repassword')

//   $result = mysqli_query($con,$sql);
// }

//   if($result){
//     echo"";
//   }
-->

<?php
// Establish database connection
include 'dbmsConnect.php';
 if($_POST['submit']){
$email = 'email';
$password = 'password';
$repassword = 'repassword';

$conn = mysqli_connect($email, $password, $repassword);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve submitted form data
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

$sql = "INSERT INTO user1 (email, password, repassword) 
VALUES ('$email', '$password', '$repassword')";

// Execute the INSERT statement
if (mysqli_query($conn, $sql)) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
 }
?>