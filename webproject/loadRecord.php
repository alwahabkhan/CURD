<?php

  session_start();
  require_once "dbmsConnect.php";       // for Database connection
    
    $v_email      =   $_POST['email'];
    $v_password   =   $_POST['psw'];

    $sqlQuery = $DB_Connection->query( " SELECT * FROM persons 
                                        WHERE email = '$v_email' 
                                        AND  password = '$v_password'  
                                      " );
?>

<!---------------------------------------------------------------------->
    
<!DOCTYPE html>

<html>

  <head>
        <title> WebProject </title>
        <link rel="stylesheet" href="Resources/personsDataStyle.css" />
  </head>

  <body>
         <!---------------------Data Records Display------------------------->

        <h2> Personal record in the Database </h2> <hr> <br>

        <?php
     
             $dataRecords = $sqlQuery->fetch(PDO::FETCH_ASSOC);

                $e_name = $dataRecords['email'];
                $e_password = $dataRecords['psw'];
                $e_email = $dataRecords[''];
                // $e_height = $dataRecords['height'];
                // $e_gender = $dataRecords['gender'];
                // $e_age = $dataRecords['Age'];
                // $e_language1 = $dataRecords['language1'];
                // $e_language2 = $dataRecords['language2'];
                // $e_language3 = $dataRecords['language3'];
                // $e_address = $dataRecords['address'];
   

                echo"<form action='editRecord.php' method='post'>

                  Name:
                  <input type = 'text' placeholder = 'Name' name = 'txt_name' value='$e_name' required><br><br>
                  
                  Password:
                  <input type = 'password' placeholder = 'Password' name = 'txt_password' value='$e_password' required><br><br>
                  
                  Email:
                  <input type = 'text' placeholder = 'your email' name = 'txt_email' value='$e_email'><br><br>
                  
                  Height:
                  <input type = 'range' name = 'slider_height' min = '50' max = '90' value='$e_height' required><br><br>
                  
                  Age:
                  <select name = 'combo_age' id = 'age' value='$e_age'>
                      <option value = '17'>17 Years </option>
                      <option value = '18'>18 Years</option>
                      <option value = '19'>19 Years</option>
                      <option value = '20'>20 Years</option>
                      <option value = '21'>21 Years</option>
                      <option value = '22'>22 Years</option>
                      <option value = '23'>23 Years</option>
                      <option value = '24'>24 Years</option>
                      <option value = '25'>25 Years</option>
                    </select><br><br>
                  
                  Gender:
                    <input type = 'radio' value = 'Male' name = 'radio_gender' value='$e_gender' required checked> Male  &nbsp;&nbsp;&nbsp;
                    <input type = 'radio' value = 'Female' name = 'radio_gender' required> Female<br><br>
      
                  Language:
                    <input type = 'checkbox' value='$e_language1' value = 'Urdu'  name = 'checkbox_language1'> Urdu         &nbsp;&nbsp;&nbsp;
                    <input type = 'checkbox' value='$e_language2' value = 'English'  name = 'checkbox_language2' >English   &nbsp;&nbsp;&nbsp;
                    <input type = 'checkbox' value='$e_language3' value = 'Arabic'  name = 'checkbox_language3'>Arabic      <br><br>
                    
                  Address: <br>
                    <textarea name = 'txt_address' placeholder = '$e_address' rows = '4' cols = '50'  ></textarea>
                    <br><br>
      
                    <button type = 'submit'> Edit this Record in the Database </button>
                  
                </form>";      
        ?>
  </body>
</html>