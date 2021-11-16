<?php
session_start();
$name = $_SESSION['name'];
$image = $_SESSION['img1'];
$cost1 = $_SESSION['cost1'];
$pdesc = $_SESSION['desc'];
$login =$_SESSION['login'];
echo "<html>
<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../CSS/Stylesheet.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../CSS/choc.css\">
</head>
<body>
<center>
<p align=\"right\">$login 
<a href = \"../PHP/logout.php\">Sign Out</a><p>
<div class=\"polaroid\">
  <img src=\"../images/$image.jpg\" alt=\"100Grand\" style=\"width:100%\">
  <div class=\"container\">
  <p>$name</p>
  </div>
  <b align=\"left\"><b>
  <p>Product Description:<br><br>$pdesc</p>
  <table>
  
  <form method=\"post\" action=\"result.php\">
  <tr><td>Per Chocolate Rs.$cost1</td><td>
  <input type=\"text\" placeholder=\"PER CHOCO RS.$cost1\" value=1 name=\"cost\" ><br>
  </td></tr>
  <tr><td></td> <td>
  <input type=\"SUBMIT\">
  </td></tr>
  </form>
  </table>
</center>
</body>
</html>";
?>
