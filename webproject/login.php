<?php
    
include 'dbmsConnect.php';
    session_start();

    require_once "dbmsConnect.php";             // for Database connection
 
    //------------------------------------------------

    if ( isset($_POST['btn_cancel'] )  )        // Redirect the browser to Index.php
    { 
        header("Location: index.php");
        return;
    }
    
    //------------------------------------------------
   
    if ( isset($_POST['btn_logout'] )  )        // Destroy Session and Redirect the browser to Index.php
    { 
        header("Location: logout.php");
        return;
    }

    if ( isset($_POST['btn_login'] )  )        // Destroy Session and Redirect the browser to Index.php
    { 
        $_SESSION['g_email']  = trim( $_POST['email'] );
        
      //  $_SESSION['g_password'] = trim( $_POST['txt_password'] );

        header("Location: view.php");
    }

?>

<!---------------------------------------------------------------------->
    
<!DOCTYPE html>

<html>
  <head>
    <title> WebProject </title>
    <link rel="stylesheet" href="Resources/personsDataStyle.css" />
  </head>

  <body>
    <h1>Personal Database</h1> <hr>
    <h2>Log In</h2> <br>

        <form method="POST"   action="view.php">

            <label for="email">Email</label>
            <input type="text" name="email" > <br> <br>

            <label for ="lbl_pass">Password</label>
            <input type ="text" name = "psw"> <br> <br> <br>

            <input type ="submit" name = "btn_login"  value = "LogIn" >    &nbsp; &nbsp;

            <input type ="submit" name = "btn_cancel" value = "Cancel">   &nbsp; &nbsp; 

            <input type ="submit" name = "btn_logout" value = "Logout">   &nbsp; &nbsp;
            
            <span>
                <a href = "<?php echo($_SERVER['PHP_SELF']);  ?>"> Refresh </a> <br>
            </span>

        </form>

  </body>
</html>