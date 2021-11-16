<?php
session_start();
$name = $_SESSION['name'];
$image = $_SESSION['img1'];
$cost1=$_SESSION['cost1'];
//$textcost=$_POST['cost'];
$login =$_SESSION['login'];
$defaultcost= 0 ;
$tot= $defaultcost + $cost1;
//$result=$tot * $textcost;
echo "<html>
<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../CSS/Stylesheet.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../CSS/choc.css\">
</head>
<body>
<p align=\"right\"><a href=\"../home.php\">Home</a></p>
<center>
<h2>Thank You For Purchasing...<br><img src=\"../images/$image.jpg\" alt=\"50Grand\" style=\"width:50%\"><br>$name<br>$login<br>Have a Nice Day<br>Browse more Choclates</h2>
</center>
</body>
</html>";
header( "refresh:5;../pages/chocsearching.html" );
 
?>