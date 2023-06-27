
<?php

include 'dbmsConnect.php';
if(isset($_POST['submit'])){
  // $id = $_POST['id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $language = $_POST['language'];

  $sql = "INSERT INTO `user1` (id,email, password, repassword, age, gender, language) 
  VALUES ('','$email', '$password', '$repassword', '$age', '$gender', '$language')";

   $result= mysqli_query($con,$sql);

  if($result){
    echo"Successful";
  }
  else{
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="resource/style.css">
  <script src="resource/script.js"></script>
</head>
<body>

<h2>Welcom to our website</h2>

<!--                             login                           -->
<form class="modal-content" action="login.php" ></form>
<div class="container">
  <hr>
  <label for="email">Email</label>
  <input type="text" placeholder="Enter Email" name="email" required>

  <label for="psw">Password</label>
  <input type="password" placeholder="Enter Password" name="password" required>
  <button onclick=" " style="width:auto;">login</button>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
</div>

<!--                                             signup                                           -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form name="myForm" class="modal-content" action="signup.php" onsubmit="return validateForm()" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email">Email</label>
      <input type="text" placeholder="Enter Email" name="email"  >

      <label for="password">Password</label>
      <input type="password" placeholder="Enter Password" name="password" >

      <label for="repassword">Repeat Password</label>
      <input type="password" placeholder="Repeat Password" name="repassword" >
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <label for="age">Age:</label> 
            <select name = "age" id = "age">
                <option value = "17" >17 Years </option>
                <option value = "18" >18 Years</option>
                <option value = "19" >19 Years</option>
                <option value = "20" >20 Years</option>
                <option value = "21" >21 Years</option>
                <option value = "22" >22 Years</option>
                <option value = "23" >23 Years</option>
                <option value = "24" >24 Years</option>
                <option value = "25" >25 Years</option>
              </select><br><br>

      <label for="gender" >Gender:</label> 
      <input type = "radio" value = "Male" name = "gender" required checked> Male  &nbsp;&nbsp;&nbsp;
      <input type = "radio" value = "Female" name = "gender" required> Female <br><br>

      <label for="language">Language:</label> 
      <input type = "checkbox" value = "Urdu" name = "language"> Urdu   &nbsp;&nbsp;&nbsp;
      <input type = "checkbox" value = "English" name = "language" >English   &nbsp;&nbsp;&nbsp; 
      
      <br><br>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="submit">Sign Up</button>
      </div>
    </div>


  </form>

  <button  onclick="showTC()"> Terms and Conditions </button>

<p>Here we shall show terms and conditions.: <br></br> 
        <span id="tc_statement"> </span>
    </p>

<script>function showTC()
{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);

          document.getElementById("tc_statement").innerHTML = this.responseText;
      }
    };

    xmlhttp.open("GET","terms.txt", true);

    xmlhttp.send();
}
</script>
</div>


</body>
</html>