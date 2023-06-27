<?php

$con = mysqli_connect('localhost','root','','webproject');

if($con){
    echo"Successful connection";
}
else{
    echo"Connection Rejected ";
}
?>