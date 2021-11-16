<?php
include '../php/connection.php';


$username = $_POST['uname'];
$password = $_POST['rpass'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$confirmpassword = $_POST['cpassword'];
$cookie_name = "user";

setcookie($cookie_name, $username, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!empty($username) || !empty($password) || !empty($firstname) || !empty($lastname) || !empty($confirmpassword))
{
    
    $conn = OpenCon();
    //echo "Connected Successfully";
    
    if(isset($_POST['submit']))
    {
    $sql="INSERT INTO register (username,passwordr,fname,lname,confirmpass) VALUES ('$username','$password','$firstname','$lastname','$confirmpassword')";
    if (mysqli_query($conn, $sql)) {
      echo"<h1><center>Regisrtation is successfull</center></h1><br>";
      //cookie coding
      if(!isset($_COOKIE[$cookie_name])) {
         echo "<center>Cookie named '" . $cookie_name . "' is not set!</center>";
    } else {
         echo "<center>Cookie '" . $cookie_name . "' is set!</center><br>";
         echo "<center>Value is: " . $_COOKIE[$cookie_name]."</center>";
    }
    header( "refresh:10;url=../index.html");
    echo"<center>if redirect page within 10 seconds..</center>";
    } else {
         echo "<br>Recharge failed <br>";
         echo "<a href=http://localhost/mobilerr/index.html>TryAgain</a>";
    }
    }
} else {
   echo "All field are required";}
?>