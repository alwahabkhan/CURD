<?php
session_start();
require_once "dbmsConnect.php";       // for Database connection
    $v_email      =   $_POST["txt_email"];
    $v_password   =   $_POST["txt_password"];

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
     
          $dataRecords = $sqlQuery->fetch( PDO::FETCH_ASSOC );
       
            echo "<p> ";
                echo htmlentities( $dataRecords['name']) . "<br>";
                echo htmlentities( $dataRecords['email']) . "<br>";
                echo htmlentities( $dataRecords['gender']) . "<br>";
                echo htmlentities( $dataRecords['height']) . "<br>";
                echo htmlentities( $dataRecords['age']) . "<br>";
                echo htmlentities( $dataRecords['language1']) . "<br>";
                echo htmlentities( $dataRecords['language2']) . "<br>";
                echo htmlentities( $dataRecords['language3']) . "<br>";
                echo htmlentities( $dataRecords['address']) . "<br>";
            echo "</p>";

          $v_email = $dataRecords['email'];

          echo "
              <form action='deleteRecord.php' method='POST'>
                <input name='txt_email' value='$v_email'>
                <button type='submit'> DELETE the record permanently </button>
              </form>
            ";

            session_destroy();
        ?>
  </body>
</html>